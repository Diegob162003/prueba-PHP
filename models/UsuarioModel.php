<?php

class Usuario{
    public $db;

    public function __construct(){
        $this->db=database::conectar();
    }

    public $id_usuario;
    public $nombre;
    public $apellido;
    public $correo;
    public $password;
    public $rol;
    public $imagen;

//Getters 
    function getId_usuario(){
        return $this->id_usuario;
    }

    function getNombre(){
        return $this->nombre;
    }

    function getApellido(){
        return $this->apellido;
    }

    function getCorreo(){
        return $this->correo;
    }

    function getPassword(){
        return $this->password;
    }

    function getRol(){
        return $this->rol;
    }

    function getImagen(){
        return $this->imagen;
    }

//Setters

    function setId_usuario($id_usuario){
        $this->id_usuario = $id_usuario;
    }

    function setNombre($nombre){
        $this->nombre = $nombre;
    }

    function setApellido($apellido){
        $this->apellido = $apellido;
    }

    function setCorreo($correo){
        $this->correo = $correo;
    }

    function setPassword($password){
        $this->password = $password;
    }

    function setRol($rol){
        $this->rol = $rol;
    }

    function setImagen($imagen){
        $this->imagen = $imagen;
    }
}   