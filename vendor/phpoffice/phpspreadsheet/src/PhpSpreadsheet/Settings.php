<?php
/**
 * PhpOffice，Php的电子表格，设置
 */

namespace PhpOffice\PhpSpreadsheet;

use PhpOffice\PhpSpreadsheet\Calculation\Calculation;
use PhpOffice\PhpSpreadsheet\Chart\Renderer\IRenderer;
use PhpOffice\PhpSpreadsheet\Collection\Memory;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestFactoryInterface;
use Psr\SimpleCache\CacheInterface;
use ReflectionClass;

class Settings
{
    /**
     * Class name of the chart renderer used for rendering charts
     * eg: PhpOffice\PhpSpreadsheet\Chart\Renderer\JpGraph.
	 * 用于呈现图表的图表呈现器的类名
     *
     * @var null|class-string<IRenderer>
     */
    private static ?string $chartRenderer = null;

    /**
     * Default options for libxml loader.
	 * libxml加载程序的默认选项
     */
    private static ?int $libXmlLoaderOptions = null;

    /**
     * The cache implementation to be used for cell collection.
	 * 用于单元格收集的缓存实现
     *
     * @var ?CacheInterface
     */
    private static ?CacheInterface $cache = null;

    /**
     * The HTTP client implementation to be used for network request.
	 * HTTP客户端实现用于网络请求
     */
    private static ?ClientInterface $httpClient = null;

    private static ?RequestFactoryInterface $requestFactory = null;

    /**
     * Set the locale code to use for formula translations and any special formatting.
	 * 设置语言环境代码,用于公式翻译和任何特殊格式。
     *
     * @param string $locale The locale code to use (e.g. "fr" or "pt_br" or "en_uk")
     *
     * @return bool Success or failure
     */
    public static function setLocale(string $locale): bool
    {
        return Calculation::getInstance()->setLocale($locale);
    }

    public static function getLocale(): string
    {
        return Calculation::getInstance()->getLocale();
    }

    /**
     * Identify to PhpSpreadsheet the external library to use for rendering charts.
	 * 识别到php的表格外部库用于渲染图表
     *
     * @param class-string<IRenderer> $rendererClassName Class name of the chart renderer
     *    eg: PhpOffice\PhpSpreadsheet\Chart\Renderer\JpGraph
     */
    public static function setChartRenderer(string $rendererClassName): void
    {
        if (!is_a($rendererClassName, IRenderer::class, true)) {
            throw new Exception('Chart renderer must implement ' . IRenderer::class);
        }

        self::$chartRenderer = $rendererClassName;
    }

    public static function unsetChartRenderer(): void
    {
        self::$chartRenderer = null;
    }

    /**
     * Return the Chart Rendering Library that PhpSpreadsheet is currently configured to use.
	 * 返回当前配置为使用的图表呈现库
     *
     * @return null|class-string<IRenderer> Class name of the chart renderer
     *    eg: PhpOffice\PhpSpreadsheet\Chart\Renderer\JpGraph
     */
    public static function getChartRenderer(): ?string
    {
        return self::$chartRenderer;
    }

    public static function htmlEntityFlags(): int
    {
        return ENT_COMPAT;
    }

    /**
     * Set default options for libxml loader.
	 * 为libxml加载器设置默认选项
     *
     * @param ?int $options Default options for libxml loader
     */
    public static function setLibXmlLoaderOptions(?int $options): int
    {
        if ($options === null) {
            $options = defined('LIBXML_DTDLOAD') ? (LIBXML_DTDLOAD | LIBXML_DTDATTR) : 0;
        }
        self::$libXmlLoaderOptions = $options;

        return $options;
    }

    /**
     * Get default options for libxml loader.
     * Defaults to LIBXML_DTDLOAD | LIBXML_DTDATTR when not set explicitly.
	 * 为libxml加载器获得默认选项。
     *
     * @return int Default options for libxml loader
     */
    public static function getLibXmlLoaderOptions(): int
    {
        if (self::$libXmlLoaderOptions === null) {
            return self::setLibXmlLoaderOptions(null);
        }

        return self::$libXmlLoaderOptions;
    }

    /**
     * Sets the implementation of cache that should be used for cell collection.
     */
    public static function setCache(?CacheInterface $cache): void
    {
        self::$cache = $cache;
    }

    /**
     * Gets the implementation of cache that is being used for cell collection.
     */
    public static function getCache(): CacheInterface
    {
        if (!self::$cache) {
            self::$cache = self::useSimpleCacheVersion3() ? new Memory\SimpleCache3() : new Memory\SimpleCache1();
        }

        return self::$cache;
    }

    public static function useSimpleCacheVersion3(): bool
    {
        return (new ReflectionClass(CacheInterface::class))->getMethod('get')->getReturnType() !== null;
    }

    /**
     * Set the HTTP client implementation to be used for network request.
     */
    public static function setHttpClient(ClientInterface $httpClient, RequestFactoryInterface $requestFactory): void
    {
        self::$httpClient = $httpClient;
        self::$requestFactory = $requestFactory;
    }

    /**
     * Unset the HTTP client configuration.
     */
    public static function unsetHttpClient(): void
    {
        self::$httpClient = null;
        self::$requestFactory = null;
    }

    /**
     * Get the HTTP client implementation to be used for network request.
     */
    public static function getHttpClient(): ClientInterface
    {
        if (!self::$httpClient || !self::$requestFactory) {
            throw new Exception('HTTP client must be configured via Settings::setHttpClient() to be able to use WEBSERVICE function.');
        }

        return self::$httpClient;
    }

    /**
     * Get the HTTP request factory.
     */
    public static function getRequestFactory(): RequestFactoryInterface
    {
        if (!self::$httpClient || !self::$requestFactory) {
            throw new Exception('HTTP client must be configured via Settings::setHttpClient() to be able to use WEBSERVICE function.');
        }

        return self::$requestFactory;
    }
}
