<?php
/**
 * PhpOffice，Php的电子表格，文档，安全
 */

namespace PhpOffice\PhpSpreadsheet\Document;

use PhpOffice\PhpSpreadsheet\Shared\PasswordHasher;

class Security
{
    /**
     * LockRevision.
	 * 锁定修正
     */
    private bool $lockRevision = false;

    /**
     * LockStructure.
	 * 锁写结构
     */
    private bool $lockStructure = false;

    /**
     * LockWindows.
     */
    private bool $lockWindows = false;

    /**
     * RevisionsPassword.
     */
    private string $revisionsPassword = '';

    /**
     * WorkbookPassword.
     */
    private string $workbookPassword = '';

    /**
     * Create a new Document Security instance.
	 * 创建一个新的文档安全实例
     */
    public function __construct()
    {
    }

    /**
     * Is some sort of document security enabled?
	 * 是否启用了某种文档安全性?
     */
    public function isSecurityEnabled(): bool
    {
        return $this->lockRevision
                || $this->lockStructure
                || $this->lockWindows;
    }

    public function getLockRevision(): bool
    {
        return $this->lockRevision;
    }

    public function setLockRevision(?bool $locked): self
    {
        if ($locked !== null) {
            $this->lockRevision = $locked;
        }

        return $this;
    }

    public function getLockStructure(): bool
    {
        return $this->lockStructure;
    }

    public function setLockStructure(?bool $locked): self
    {
        if ($locked !== null) {
            $this->lockStructure = $locked;
        }

        return $this;
    }

    public function getLockWindows(): bool
    {
        return $this->lockWindows;
    }

    public function setLockWindows(?bool $locked): self
    {
        if ($locked !== null) {
            $this->lockWindows = $locked;
        }

        return $this;
    }

    public function getRevisionsPassword(): string
    {
        return $this->revisionsPassword;
    }

    /**
     * Set RevisionsPassword.
     *
     * @param bool $alreadyHashed If the password has already been hashed, set this to true
     *
     * @return $this
     */
    public function setRevisionsPassword(?string $password, bool $alreadyHashed = false): static
    {
        if ($password !== null) {
            if (!$alreadyHashed) {
                $password = PasswordHasher::hashPassword($password);
            }
            $this->revisionsPassword = $password;
        }

        return $this;
    }

    public function getWorkbookPassword(): string
    {
        return $this->workbookPassword;
    }

    /**
     * Set WorkbookPassword.
     *
     * @param bool $alreadyHashed If the password has already been hashed, set this to true
     *
     * @return $this
     */
    public function setWorkbookPassword(?string $password, bool $alreadyHashed = false): static
    {
        if ($password !== null) {
            if (!$alreadyHashed) {
                $password = PasswordHasher::hashPassword($password);
            }
            $this->workbookPassword = $password;
        }

        return $this;
    }
}
