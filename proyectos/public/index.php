<?php

use App\Enums\TipoEquipo;
use App\Modelos\Laptop;
use App\Modelos\Proyector;

session_start();

require __DIR__ . "/../vendor/autoload.php";

if(!isset($_SESSION["formulario"])){

}



if($_SERVER['REQUEST_METHOD'] === "POST"){
    

}










?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
    <label>Carnet</label><br>
    <input type="text" name="carnet"><br><br>

    <label>Codigo Equipo</label><br>
    <input type="text" name="codigo"><br><br>

    <label>
        Nombre del Equipo
    </label><br>
    <input type="text" name="equipo"><br><br>

    <label>Tipo equipo</label><br>
    
    <select name="tipo" id="">
        <option value="<?php TipoEquipo::Laptop ?>"> Laptop</option>
        <option value="<?php TipoEquipo::Proyector?>"> Proyector</option>
    </select>

    <input type="text" name="tipo"><br><br>






    </form>
</body>
</html>