<?php

class Encriptar {

    public string $encriptar;
    public string $method;

    public function __construct(string $encriptar, string $method_passed )
    {
        $this->encriptar = $encriptar;
        $this->method = $method_passed;
    }

    public function getEncriptedPassWord() : string {
        $devolverencriptado = hash($this->method, $this->encriptar);
        return $devolverencriptado;
    }

    public function devolverMetodo(): string {
        return $this->method;
    }

}

?>