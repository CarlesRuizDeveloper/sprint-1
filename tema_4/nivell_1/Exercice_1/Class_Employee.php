<?php

class Employee{
    private $name;
    public $salary;
//Creo el constructor ya que el enunciado no dice nada sobre el constructor y el constructor por defecto devuelve NULL.
    public function __construct($name, $salary) {
        $this->name = $name;
        $this->salary = $salary;
    }


    public function initialize($name,$salary){
        //Queda vacío ya que el enunciado no dice nada sobre este método.
    }

    public function taxes(){
        echo  $this->name;
        if($this->salary > 6000){
            $msg= (" SI paga impostos".PHP_EOL);
        }else{
            $msg= (" NO paga impostos".PHP_EOL);
        }
        return print_r($msg);
    }
}
// Para poder ver si funciona he creado estos Employee y he llamado al método
$empleado1 = new Employee("Juan", 7000);
$empleado2 = new Employee("María", 5000);



$empleado1->taxes();
$empleado2->taxes();


?>