<?php

namespace xtomdex\countryflags;

/**
 * Class for getting country flag image URL.
 */
class CountryFlag
{
    /**
     * API official website URL.
     */
    const URL = 'https://www.countryflags.io';
    /**
     * Available flag image sizes list.
     */
    const SIZES = [16, 24, 32, 48, 64];
    /**
     * Available country codes list.
     */
    const CODES = ['af', 'ax', 'al', 'dz', 'as', 'ad', 'ao', 'ai', 'aq', 'ag', 'ar', 'am', 'aw', 'ac', 'au', 'at', 'az', 'bs', 'bh', 'bd', 'bb', 'by', 'be', 'bz', 'bj', 'bm', 'bt', 'bo', 'ba', 'bw', 'br', 'io', 'vg', 'bn', 'bg', 'bf', 'bi', 'kh', 'cm', 'ca', 'ic', 'cv', 'bq', 'ky', 'cf', 'ea', 'td', 'cl', 'cn', 'cx', 'cc', 'co', 'km', 'cg', 'cd', 'ck', 'cr', 'ci', 'hr', 'cu', 'cw', 'cy', 'cz', 'dk', 'dg', 'dj', 'dm', 'do', 'ec', 'eg', 'sv', 'gq', 'er', 'ee', 'sz', 'et', 'fk', 'fo', 'fj', 'fi', 'fr', 'gf', 'pf', 'tf', 'ga', 'gm', 'ge', 'de', 'gh', 'gi', 'gr', 'gl', 'gd', 'gp', 'gu', 'gt', 'gg', 'gn', 'gw', 'gy', 'ht', 'hn', 'hk', 'hu', 'is', 'in', 'id', 'ir', 'iq', 'ie', 'im', 'il', 'it', 'jm', 'jp', 'je', 'jo', 'kz', 'ke', 'ki', 'xk', 'kw', 'kg', 'la', 'lv', 'lb', 'ls', 'lr', 'ly', 'li', 'lt', 'lu', 'mo', 'mg', 'mw', 'my', 'mv', 'ml', 'mt', 'mh', 'mq', 'mr', 'mu', 'yt', 'mx', 'fm', 'md', 'mc', 'mn', 'me', 'ms', 'ma', 'mz', 'mm', 'na', 'nr', 'np', 'nl', 'nc', 'nz', 'ni', 'ne', 'ng', 'nu', 'nf', 'kp', 'mk', 'mp', 'no', 'om', 'pk', 'pw', 'ps', 'pa', 'pg', 'py', 'pe', 'ph', 'pn', 'pl', 'pt', 'xa', 'xb', 'pr', 'qa', 're', 'ro', 'ru', 'rw', 'ws', 'sm', 'st', 'sa', 'sn', 'rs', 'sc', 'sl', 'sg', 'sx', 'sk', 'si', 'sb', 'so', 'za', 'gs', 'kr', 'ss', 'es', 'lk', 'bl', 'sh', 'kn', 'lc', 'mf', 'pm', 'vc', 'sd', 'sr', 'sj', 'se', 'ch', 'sy', 'tw', 'tj', 'tz', 'th', 'tl', 'tg', 'tk', 'to', 'tt', 'ta', 'tn', 'tr', 'tm', 'tc', 'tv', 'um', 'vi', 'ug', 'ua', 'ae', 'gb', 'us', 'uy', 'uz', 'vu', 'va', 've', 'vn', 'wf', 'eh', 'ye', 'zm', 'zw'];
    /**
     * Available flag image styles list.
     */
    const STYLES = ['flat', 'shiny'];
    /**
     * Shiny image style constant.
     */
    const STYLE_SHINY = 'shiny';
    /**
     * Flat image style constant.
     */
    const STYLE_FLAT = 'flat';

    /**
     * Returns country flag image URL.
     *
     * @param string $country_code
     * @param int $size
     * @param string $style
     * @throws \InvalidArgumentException
     * @return string
     */
    public static function get($country_code, $size = 16, $style = self::STYLE_SHINY)
    {
        $url = static::getUrl();
        $country_code = strtolower($country_code);

        if (!in_array($country_code, self::CODES))
            throw new \InvalidArgumentException('Invalid country code passed');
        if (!in_array($size, self::SIZES))
            throw new \InvalidArgumentException('Invalid size passed');
        if (!in_array($style, self::STYLES))
            throw new \InvalidArgumentException('Invalid size passed');

        return str_replace(
            ['{code}', '{style}', '{size}'],
            [$country_code, $style, $size],
            $url
        );
    }

    /**
     * Returns image URL with shortcoded country code, style and size.
     *
     * @return string
     */
    protected static function getUrl()
    {
        return self::URL . '/{code}/{style}/{size}.png';
    }
}
