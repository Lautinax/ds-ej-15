<?php 
class Alumno{
    public $Nombre  ;
    public $Apellido    ;
    public $Curso  ;
    public $Division   ;

    public function  MostrarAlumno(){
        echo 'Nombre    : ' . $this->Nombre . '<br>';
        echo 'Apellido : ' . $this->Apellido  . '<br>' ;
        echo 'Curso : ' . $this->Curso    . '<br>' ;
        echo 'Division : ' . $this->Division . '<br>' ;                 
    }
    
}
