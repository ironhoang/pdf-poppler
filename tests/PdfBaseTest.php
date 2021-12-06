<?php
use Ironhoang\PdfPoppler\Base,
    Ironhoang\PdfPoppler\Html,
    Ironhoang\PdfPoppler\Pdf;

class PdfBaseTest extends PHPUnit_Framework_TestCase
{
  public function testInfoConfiguration()
  {
    $pdf = new Pdf(dirname(__FILE__).'/source/test.pdf');
    $this->assertEquals('/usr/bin/pdfinfo', $pdf->bin());
    $this->assertEquals('/usr/local/bin/pdfinfo', $pdf->bin());
  }

  public function testConvertAsRaw(){

    $pdf = new Pdf(dirname(__FILE__).'/source/test.pdf');
    $html = $pdf->html();
  }
}
