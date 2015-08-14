<?php

namespace Pdf\Adapter;

use Psr\Http\Message\ResponseInterface;

interface Pdf {

    /**
     * Create an attachment response, to force the download of the PDF
     *
     * @param  string|null  $filename
     * @return ResponseInterface
     */
    public function attachment($filename = null);

    /**
     * Show the PDF in the browser.
     *
     * @param  string|null  $filename
     * @return ResponseInterface
     */
    public function inline($filename = null);


    /**
     * Get the PDF as a string
     *
     * @return string
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
