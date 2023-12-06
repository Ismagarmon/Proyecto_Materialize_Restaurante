<?php
require_once '../dompdf/autoload.inc.php';
use Dompdf\Dompdf;

class PDF
{


    public function __construct(string $nombrecliente)
    {
        $options = new \Dompdf\Options();
        $options->set('isHtml5ParserEnabled', true);

        $dompdf = new Dompdf($options);
        $dompdf = new Dompdf();
        try {

            $html = '<h1 style="text-align: center">CineXperience</h1><p style="color: black;font-family: var(--secondaryfont);">Nombre de la peliucla: <strong></strong></p>';

            $dompdf->loadHtml($html);
            $dompdf->setPaper('A4', 'portrait');
            $dompdf->render();

            $pdf = $dompdf->output();
            file_put_contents('../Pedido_' . $nombrecliente . '.pdf', $pdf);

        } catch (Exception $e) {
            echo ('<script>alert(' . $e . ')</script>');
        }
    }
}
