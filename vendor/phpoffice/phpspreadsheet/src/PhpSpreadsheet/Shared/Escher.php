<?php
/**
 * PhpOffice，Php的电子表格，共享，Escher
 */

namespace PhpOffice\PhpSpreadsheet\Shared;

class Escher
{
    /**
     * Drawing Group Container.
	 * 绘图组容器
     *
     * @var ?Escher\DggContainer
     */
    private ?Escher\DggContainer $dggContainer = null;

    /**
     * Drawing Container.
     *
     * @var ?Escher\DgContainer
     */
    private ?Escher\DgContainer $dgContainer = null;

    /**
     * Get Drawing Group Container.
     */
    public function getDggContainer(): ?Escher\DggContainer
    {
        return $this->dggContainer;
    }

    /**
     * Set Drawing Group Container.
     */
    public function setDggContainer(Escher\DggContainer $dggContainer): Escher\DggContainer
    {
        return $this->dggContainer = $dggContainer;
    }

    /**
     * Get Drawing Container.
     */
    public function getDgContainer(): ?Escher\DgContainer
    {
        return $this->dgContainer;
    }

    /**
     * Set Drawing Container.
     */
    public function setDgContainer(Escher\DgContainer $dgContainer): Escher\DgContainer
    {
        return $this->dgContainer = $dgContainer;
    }
}
