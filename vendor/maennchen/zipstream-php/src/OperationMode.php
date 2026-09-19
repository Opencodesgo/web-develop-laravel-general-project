<?php
/**
 * ZipStream，操作模式
 */

declare(strict_types=1);

namespace ZipStream;

/**
 * ZipStream execution operation modes
 * ZipStream执行操作模式。
 */
enum OperationMode
{
    /**
     * Stream file into output stream
	 * 流文件到输出流
     */
    case NORMAL;

    /**
     * Simulate the zip to figure out the resulting file size
	 * 模拟压缩以计算得到的文件大小。
     *
     * This only supports entries where the file size is known beforehand and
     * deflation is disabled.
     */
    case SIMULATE_STRICT;

    /**
     * Simulate the zip to figure out the resulting file size
     *
     * If the file size is not known beforehand or deflation is enabled, the
     * entry streams will be read and rewound.
     *
     * If the entry does not support rewinding either, you will not be able to
     * use the same stream in a later operation mode like `NORMAL`.
     */
    case SIMULATE_LAX;
}
