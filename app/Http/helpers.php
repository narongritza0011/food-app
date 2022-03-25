<?php

use Illuminate\Support\Facades\App;

if (!function_exists('localize_path')) {
    /**
     * @param $path
     * @return string
     */

    function localize_path($path, $locale = '')
    {
        $domain_pattern = '/^(http|https):\/\//';

        if (preg_match($domain_pattern, $path)) {
            return $path;
        }

        $locale = $locale ?: App::getLocale();
        $defaultLocale = config('app.default_locale');
        $url = '/' . $path;

        if ($locale != $defaultLocale) {
            $url = '/' . $locale . '/' . $path;
        }

        // dd('xxxxx ' . ($locale == $defaultLocale));
        // dd();
        return $url;
    }


    if (!function_exists('localize_route')) {
        /**
         * @param $name
         * @return string
         */

        function localize_route($name, $locale = '')
        {
            $locale = $locale ?: App::getLocale();
            $defaultLocale = config('app.default_locale');
            return ($locale === $defaultLocale ? $name : $locale . '.' . $name);
        }
    }
}
