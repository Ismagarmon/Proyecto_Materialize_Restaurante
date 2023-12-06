<?php


class CCAA
{

    public string $nombre_ccaa;
    private array $ccaa = [];
    private array $provincia = [];
    private string $outputFolder = '../json';

    public function __construct()
    {
        $this->nombre_ccaa = 'Comunidades';
    }

    public function meterprovincia($provincia): void {

        $this->provincia[] = $provincia;
    }

    public function meterprovincias($comunidad): void {
        $this->ccaa[$comunidad][] = $this->provincia;
        
    }

    public function refresprovincias(): void {
        $this->provincia = [];
    }

    public function savejson() {

        $rutaCompleta = $this->outputFolder .'/'. $this->nombre_ccaa.'.json';

        $json = json_encode($this->ccaa, JSON_UNESCAPED_UNICODE);
        
        file_put_contents($rutaCompleta, $json);
    }
}


?>