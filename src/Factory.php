<?php

namespace Pdf\Adapter;

interface Factory {

    /**
     * Create the PDF from a HTML string
     *
     * @param  string $html
     * @param  array  $options
     * @return Pdf    The Pdf instance
     */
    public function html($html, array $options = []);

    /**
     * Create the PDF from an existing HTML file
     *
     * @param  string $path
     * @param  array  $options
     * @return Pdf    The Pdf instance
     */
    public function file($path, array $options = []);
    
}
