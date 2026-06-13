<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Dompdf\Dompdf;
use Dompdf\Options;

class Pdf
{
    protected $dompdf;

    public function __construct()
    {
        $options = new Options();
        $options->set('isRemoteEnabled', true);
        $options->set('defaultFont', 'Arial');
        
        $this->dompdf = new Dompdf($options);
    }

    public function setPaper($paper, $orientation = 'portrait')
    {
        $this->dompdf->setPaper($paper, $orientation);
    }

    public function generate($html, $filename = 'document.pdf', $stream = true)
    {
        $this->dompdf->loadHtml($html);
        $this->dompdf->render();

        if ($stream) {
            $this->dompdf->stream($filename, array("Attachment" => false));
        } else {
            return $this->dompdf->output();
        }
    }
}
