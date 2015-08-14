<?php

namespace Pdf\Adapter;

use Psr\Http\Message\ResponseInterface;

interface Pdf {

    /**
     * Force the PDF to download.
     *
     * @param  string|null  $name
     * @return ResponseInterface
     */
    public function download($name = null);

    /**
     * Show the PDF in the browser.
     *
     * @return ResponseInterface
     */
    public function output();

    /**
     * Save the PDF to a file path.
     *
     * @param  string  $path
     * @return bool  true if successful
     */
    public function save($path);
    
}
