<?php

namespace BitApps\WPTelemetry\Telemetry;

class TelemetryConfig
{
    private static $title;

    private static $slug;

    private static $prefix;

    private static $version;

    private static $termsUrl = 'https://bitapps.pro/terms';

    private static $policyUrl = 'https://bitapps.pro/privacy-policy';

    private static $serverBaseUrl = 'https://wp-api.bitapps.pro/public/';

    public static function setTitle($title)
    {
        self::$title = $title;
    }

    public static function getTitle()
    {
        return self::$title;
    }

    public static function setSlug($slug)
    {
        self::$slug = $slug;
    }

    public static function getSlug()
    {
        return self::$slug;
    }

    public static function setPrefix($prefix)
    {
        self::$prefix = $prefix;
    }

    public static function getPrefix()
    {
        return self::$prefix;
    }

    public static function setVersion($version)
    {
        self::$version = $version;
    }

    public static function getVersion()
    {
        return self::$version;
    }

    public static function setTermsUrl($url)
    {
        self::$termsUrl = $url;
    }

    public static function getTermsUrl()
    {
        return self::$termsUrl;
    }

    public static function setPolicyUrl($url)
    {
        self::$policyUrl = $url;
    }

    public static function getPolicyUrl()
    {
        return self::$policyUrl;
    }

    public static function setServerBaseUrl($url)
    {
        self::$serverBaseUrl = trailingslashit($url);
    }

    public static function getServerBaseUrl()
    {
        return self::$serverBaseUrl;
    }
}
