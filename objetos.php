<?php 

class Usuario {

    public $id;
    public $email;
    public $nombre;
    public $apellido;
    public $usuario;
    public $genero;
    public $nacimiento;
    public $dni;
    public $pass;
    
    public function __construct($id, $email) {
        $this->id = $id;
        $this->email = $email;
    }


}

$usuario = new Usuario($id, $email);