<?php
/**
 * Intervention，图片，接口，采集接口
 */

declare(strict_types=1);

namespace Intervention\Image\Interfaces;

use Traversable;

/**
 * @extends Traversable<int|string, mixed>
 */
interface CollectionInterface extends Traversable
{
    /**
     * Determine if the collection has item at given key
	 * 确定集合是否有给定键的项
     */
    public function has(int|string $key): bool;

    /**
     * Add item to collection
	 * 添加项到集合
     *
     * @return CollectionInterface<int|string, mixed>
     */
    public function push(mixed $item): self;

    /**
     * Return item for given key or return default is key does not exist
	 * 返回项(给定键或返回默认值)是不存在的键
     */
    public function get(int|string $key, mixed $default = null): mixed;

    /**
     * Return item at given numeric position starting at 0
	 * 从0开始的数字位置返回项
     */
    public function getAtPosition(int $key = 0, mixed $default = null): mixed;

    /**
     * Return first item in collection
	 * 返回集合中的第一项
     */
    public function first(): mixed;

    /**
     * Return last item in collection
	 * 返回集合中的最后一项
     */
    public function last(): mixed;

    /**
     * Return item count of collection
	 * 返回收集的项目计数
     */
    public function count(): int;

    /**
     * Empty collection
	 * 空集合
     *
     * @return CollectionInterface<int|string, mixed>
     */
    public function empty(): self;

    /**
     * Transform collection as array
	 * 将集合转换为数组
     *
     * @return array<int|string, mixed>
     */
    public function toArray(): array;

    /**
     * Extract items based on given values and discard the rest.
	 * 根据给定值提取项并丢弃其余项
     *
     * @return CollectionInterface<int|string, mixed>
     */
    public function slice(int $offset, ?int $length = 0): self;
}
