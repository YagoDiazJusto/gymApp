<?php
namespace App\Services;

class MaquinaService
{
    private $array = [];

    public function __construct()
    {
        $this->array = [
            ["nombre" => "Máquina Sentadilla hack", "marca" => "Cibex", "imagen" => "hacka.jpg"],
            ["nombre" => "Máquina Prensa", "marca" => "Nautilus", "imagen" => "prensa.jpg"],
            ["nombre" => "Máquina Curl femoral sentado", "marca" => "Prime USA", "imagen" => "femoralSentado.jpg"],
            ["nombre" => "Máquina Curl femoral tumbado", "marca" => "Hammer Strength", "imagen" => "femoralTumbado.jpg"],
            ["nombre" => "Máquina Elevación de gemelos", "marca" => "Force USA", "imagen" => "elevacionGemelso.jpg"],
            ["nombre" => "Máquina curl de bíceps", "marca" => "ProGym", "imagen" => "curlBiceps.jpg"],
            ["nombre" => "Máquina Extension de tríceps", "marca" => "ProGym", "imagen" => "extensionTriceps.jpg"],
            ["nombre" => "Máquina Jalón al pecho", "marca" => "TechnoGym", "imagen" => "jalon.jpg"],
            ["nombre" => "Máquina Remo gironda", "marca" => "TechnoGym", "imagen" => "remoGironda.jpg"],
            ["nombre" => "Máquina Remo sentado", "marca" => "Prime USA", "imagen" => "remoSentado.jpg"],
            ["nombre" => "Máquina Press Hombro", "marca" => "Prime USA", "imagen" => "pressHombro.jpg"],
            ["nombre" => "Máquina elevaciones laterales", "marca" => "ProGym", "imagen" => "lateralesMaquina.jpg"],
            ["nombre" => "Máquina press plano", "marca" => "Titanium Strngth", "imagen" => "maquinaPlano.jpg"],
            ["nombre" => "Máquina press superior", "marca" => "Prime Usa", "imagen" => "maquinaSuperior.jpg"],
            ["nombre" => "Cinta de correr", "marca" => "Technogym", "imagen" => "cinta.jpg"],
            ["nombre" => "Elíptica", "marca" => "Cecotec", "imagen" => "eliptica.jpg"],
            ["nombre" => "Bicicleta estática", "marca" => "Technogym", "imagen" => "cinta.jpg"],
            ["nombre" => "Rag Press de banca", "marca" => "ATX", "imagen" => "pressBanca.jpg"],
            ["nombre" => "Barra", "marca" => "Ruster fitness", "imagen" => "barra.jpg"],
            ["nombre" => "Mancuernas", "marca" => "Etenon", "imagen" => "mancuernas.jpg"],
            ["nombre" => "Cuerpo", "marca" => "", "imagen" => "libre.jpg"],
        ];
    }

    public function getArray()
    {
        return $this->array;
    }
}