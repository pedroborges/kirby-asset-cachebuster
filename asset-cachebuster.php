<?php

/**
 * Kirby Asset Cachebuster Plugin
 *
 * @version   1.0.0
 * @author    Pedro Borges <oi@pedroborg.es>
 * @copyright Pedro Borges <oi@pedroborg.es>
 * @link      https://github.com/pedroborges/kirby-asset-cachebuster
 * @license   MIT
 */

if (! function_exists('asset')) {
    /**
     * Generate a versioned URL from a given asset path.
     *
     * @param  string  $path
     * @return string
     */
    function asset($path) {
        if (! c::get('cachebuster')) return url($path);

        $file = kirby()->roots()->index().DS.$path;

        if (! file_exists($file)) {
            throw new Exception('The "'.$path.'" file does not exist.');
        }

        $asset  = dirname($path).'/';
        $asset .= f::name($path).'.';
        $asset .= filemtime($file).'.';
        $asset .= f::extension($file);

        return url($asset);
    }
}
