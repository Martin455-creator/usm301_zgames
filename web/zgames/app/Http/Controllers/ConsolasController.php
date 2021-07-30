<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Consola;

class ConsolasController extends Controller{


public function getMedidor(){

$medidor=array();
$medidor[]="1";
$medidor[]="2";
$medidor[]="3";
$medidor[]="4";
$medidor[]="5";
$medidor[]="6";
$medidor[]="7";
$medidor[]="8";
$medidor[]="9";
$medidor[]="10";

return $medidor;
};
public function getTipo(){

$tipo[]="kw"
$tipo[]="w"
$tipo[]="c"

return $tipo;
};

public function getConsolas(){
    $consolas= Consola::all();
return $consolas;     

};

public function crearConsola(){
    
    $consola = new Consola();
    $consola->fecha =$input[];
    $consola->hora = $input[];
    $consola->medidor = $input[];
    $consola->direccion =$input[];
    $consola->tipo =$input[];
    $consola->save();
    return $consola;
};


}
}


}


