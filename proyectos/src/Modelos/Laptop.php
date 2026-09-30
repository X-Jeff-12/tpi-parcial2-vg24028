<?php
namespace App\Modelos;

use Override;

class Laptop extends Equipo{

    
    public function __construct(string $codigo, string $nombre)
    {
        return parent::__construct($codigo, $nombre);
    }

    #[Override]
    public function diasMaximoPrestamo(): int
    {
        return 3;
    }


}







