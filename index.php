
<?php 

require_once 'modelo/alumno.php';


$a = new Alumno();
$a->Nombre = 'Lautarado ';
$a->Apellido = 'Ferraro ';
$a->Curso    = 'Segundo  ';
$a->Division  = 'C';
$a->MostrarAlumno();

?>
