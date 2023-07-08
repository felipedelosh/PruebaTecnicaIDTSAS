<?php
class Empleado{
    var $nombre;
    var $salario;
    var $puesto;
    

    public function __construct($nombre, $salario, $puesto) 
    {
        $this->nombre=$nombre;
        $this->salario=$salario;
        $this->puesto=$puesto;
    }

    public function obtenerSalarioAnual(){
        return $this->getSalario()*12;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function getSalario(){
        return $this->salario;
    }

    public function getPuesto(){
        return $this->puesto;
    }


    public function setNombre($nombre){
        $this->nombre = $nombre;
    }


    public function setSalario($salario){
        $this->salario = $salario;
    }

    public function setPuesto($puesto){
        $this->puesto = $puesto;
    }

    public function stringToString(){
        return "Empleado: ".$this->getNombre()." con un sueldo anual de: ".$this->obtenerSalarioAnual();
    }
}

?>