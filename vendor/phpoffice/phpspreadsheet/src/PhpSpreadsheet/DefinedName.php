<?php
/**
 * PhpOffice，Php的电子表格，定义的名称
 */

namespace PhpOffice\PhpSpreadsheet;

use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

abstract class DefinedName
{
    protected const REGEXP_IDENTIFY_FORMULA = '[^_\p{N}\p{L}:, \$\'!]';

    /**
     * Name.
	 * 名称
     */
    protected string $name;

    /**
     * Worksheet on which the defined name can be resolved.
	 * 可在其上解析已定义名称的工作表
     */
    protected ?Worksheet $worksheet;

    /**
     * Value of the named object.
	 * 命名对象的值
     */
    protected string $value;

    /**
     * Is the defined named local? (i.e. can only be used on $this->worksheet).
	 * 定义的定义是本地的吗?
     */
    protected bool $localOnly;

    /**
     * Scope.
	 * 范围
     */
    protected ?Worksheet $scope;

    /**
     * Whether this is a named range or a named formula.
	 * 这是一个命名的范围或命名的公式
     */
    protected bool $isFormula;

    /**
     * Create a new Defined Name.
	 * 创建一个新的定义名称
     */
    public function __construct(
        string $name,
        ?Worksheet $worksheet = null,
        ?string $value = null,
        bool $localOnly = false,
        ?Worksheet $scope = null
    ) {
        if ($worksheet === null) {
            $worksheet = $scope;
        }

        // Set local members
        $this->name = $name;
        $this->worksheet = $worksheet;
        $this->value = (string) $value;
        $this->localOnly = $localOnly;
        // If local only, then the scope will be set to worksheet unless a scope is explicitly set
        $this->scope = ($localOnly === true) ? (($scope === null) ? $worksheet : $scope) : null;
        // If the range string contains characters that aren't associated with the range definition (A-Z,1-9
        //      for cell references, and $, or the range operators (colon comma or space), quotes and ! for
        //      worksheet names
        //  then this is treated as a named formula, and not a named range
        $this->isFormula = self::testIfFormula($this->value);
    }

    public function __destruct()
    {
        $this->worksheet = null;
        $this->scope = null;
    }

    /**
     * Create a new defined name, either a range or a formula.
	 * 创建一个新的定义的名称,无论是一个范围还是一个公式。
     */
    public static function createInstance(
        string $name,
        ?Worksheet $worksheet = null,
        ?string $value = null,
        bool $localOnly = false,
        ?Worksheet $scope = null
    ): self {
        $value = (string) $value;
        $isFormula = self::testIfFormula($value);
        if ($isFormula) {
            return new NamedFormula($name, $worksheet, $value, $localOnly, $scope);
        }

        return new NamedRange($name, $worksheet, $value, $localOnly, $scope);
    }

    public static function testIfFormula(string $value): bool
    {
        if (str_starts_with($value, '=')) {
            $value = substr($value, 1);
        }

        if (is_numeric($value)) {
            return true;
        }

        $segMatcher = false;
        foreach (explode("'", $value) as $subVal) {
            //    Only test in alternate array entries (the non-quoted blocks)
            $segMatcher = $segMatcher === false;
            if (
                $segMatcher
                && (preg_match('/' . self::REGEXP_IDENTIFY_FORMULA . '/miu', $subVal))
            ) {
                return true;
            }
        }

        return false;
    }

    /**
     * Get name.
	 * 得到名称
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set name.
	 * 设置名称
     */
    public function setName(string $name): self
    {
        if (!empty($name)) {
            // Old title
            $oldTitle = $this->name;

            // Re-attach
            if ($this->worksheet !== null) {
                $this->worksheet->getParentOrThrow()->removeNamedRange($this->name, $this->worksheet);
            }
            $this->name = $name;

            if ($this->worksheet !== null) {
                $this->worksheet->getParentOrThrow()->addDefinedName($this);
            }

            if ($this->worksheet !== null) {
                // New title
                $newTitle = $this->name;
                ReferenceHelper::getInstance()->updateNamedFormulae($this->worksheet->getParentOrThrow(), $oldTitle, $newTitle);
            }
        }

        return $this;
    }

    /**
     * Get worksheet.
	 * 得到工作表
     */
    public function getWorksheet(): ?Worksheet
    {
        return $this->worksheet;
    }

    /**
     * Set worksheet.
	 * 设置工作表
     */
    public function setWorksheet(?Worksheet $worksheet): self
    {
        $this->worksheet = $worksheet;

        return $this;
    }

    /**
     * Get range or formula value.
	 * 获取范围或公式值
     */
    public function getValue(): string
    {
        return $this->value;
    }

    /**
     * Set range or formula  value.
	 * 设置范围或公式值
     */
    public function setValue(string $value): self
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get localOnly.
     */
    public function getLocalOnly(): bool
    {
        return $this->localOnly;
    }

    /**
     * Set localOnly.
     */
    public function setLocalOnly(bool $localScope): self
    {
        $this->localOnly = $localScope;
        $this->scope = $localScope ? $this->worksheet : null;

        return $this;
    }

    /**
     * Get scope.
     */
    public function getScope(): ?Worksheet
    {
        return $this->scope;
    }

    /**
     * Set scope.
     */
    public function setScope(?Worksheet $worksheet): self
    {
        $this->scope = $worksheet;
        $this->localOnly = $worksheet !== null;

        return $this;
    }

    /**
     * Identify whether this is a named range or a named formula.
	 * 确定这是一个命名的范围还是一个命名的公式
     */
    public function isFormula(): bool
    {
        return $this->isFormula;
    }

    /**
     * Resolve a named range to a regular cell range or formula.
	 * 将命名的范围解析为正则单元格范围或公式
     */
    public static function resolveName(string $definedName, Worksheet $worksheet, string $sheetName = ''): ?self
    {
        if ($sheetName === '') {
            $worksheet2 = $worksheet;
        } else {
            $worksheet2 = $worksheet->getParentOrThrow()->getSheetByName($sheetName);
            if ($worksheet2 === null) {
                return null;
            }
        }

        return $worksheet->getParentOrThrow()->getDefinedName($definedName, $worksheet2);
    }

    /**
     * Implement PHP __clone to create a deep clone, not just a shallow copy.
     */
    public function __clone()
    {
        $vars = get_object_vars($this);
        foreach ($vars as $key => $value) {
            if (is_object($value)) {
                $this->$key = clone $value;
            } else {
                $this->$key = $value;
            }
        }
    }
}
