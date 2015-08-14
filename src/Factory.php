<?php

namespace Pdf\Adapter;

interface Factory {

    /**
     * Create the PDF from a HTML string
     *
     * @param  string $html
     * @param  string $orientation Can be portrait or landscape
     * @param  string $paper  Paper type
     * @return Pdf    The Pdf instance
     */
    public function html($html, $orientation = 'portrait', $paper = 'a4');

    /**
     * Create the PDF from an existing HTML file
     *
     * @param  string $html
     * @param  string $orientation Can be portrait or landscape
     * @param  string $paper  Paper type
     * @return Pdf    The Pdf instance
     */
    public function file($html, $orientation = 'portrait', $paper = 'a4');
    
}
