<?php
class user_consult{
    private $con;
    public function __construct(){
        $this->con = new mysqli("localhost","root","","edutech");
        $this->con->set_charset("utf8");
    }
    public function insertar($nombres,$apellidos,$tipo_documento,$documento,$sexo,$fecha,$correo,$contrasenia_encriptada,$telefono,$ciudad,$direccion){
     if($this->user_repeat($documento,$this->con)){
        $msg='Error! el usuario ya está registrado';
     }else{
        $sqlInsert="INSERT INTO users VALUES ($nombres,$apellidos,$tipo_documento,$documento,$sexo,$fecha,$correo,$contrasenia_encriptada,$telefono,$ciudad,$direccion)";   
        $result=$this->con->query($sqlInsert);
        if($result==1){
            return 'Usuario registrado correctamente' ; 
        }else{
            return 'Error al registrar el usuario';
        }
     }
     }

    public function user_repeat($documento,$con){
        $sql="select * from users where dni='$documento'";
        $result=mysqli_query($con,$sql);
        if($result->num_rows>0){
            return true;
        }else{
            return false;
        }
    }
}

 

?>