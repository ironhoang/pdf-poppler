<?php
namespace Ironhoang\PdfPoppler;

use Illuminate\Support\ServiceProvider;

/**
 * Class PdfToHtmlServiceProvider
 * @package Mxgel\PdfToHtml
 */
class PdfToHtmlServiceProvider extends ServiceProvider {
    /**
     * Boot
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . "/../config/pdf-poppler.php" => config_path("pdf-poppler.php")
        ]);
    }
}