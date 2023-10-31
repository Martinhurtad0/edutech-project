<?php 
require('../model/user_model.php');

if($_SERVER['REQUEST_METHOD']=='POST'){
    $nombres=$_POST['nombres'];
    $apellidos=$_POST['apellidos'];
    $tipo_documento=$_POST['tipo_documento'];
    $documento=$_POST['documento'];
    $sexo=$_POST['sexo'];
    $fecha=$_POST['fecha'];
    $correo=$_POST['correo'];
    $contrasenia=$_POST['contrasenia'];
    $confContrasenia=$_POST['confContrasenia'];
    $telefono=$_POST['telefono'];
    $ciudad=$_POST['ciudad'];
    $direccion=$_POST['direccion'];
}

class signup{   
    public $msg=[];
    private function validar($nombres,$apellidos,$tipo_documento,$documento,$sexo,$fecha,$correo,$contrasenia,$confContrasenia,$telefono,$ciudad,$direccion){
        //campos vacios de registro
        if(empty($nombres)||empty($apellidos)||empty($tipo_documento)||empty($documento)||empty($sexo)||empty($fecha)||empty($correo)||empty($contrasenia)||empty($confContrasenia)||empty($telefono)|empty($ciudad)|empty($direccion)){
          $this->msg[]='Verifique que los campos estén diligenciados';
        }
        //validar las contraseñas
        elseif($contrasenia!=$confContrasenia){
            $this->msg[]='Las contraseñas no coinciden';
        }
        else{
            $contrasenia_encriptada=password_hash($contrasenia,PASSWORD_DEFAULT,['cost'=>10]);
            $consult=new user_consult;
            $consult->insertar($nombres,$apellidos,$tipo_documento,$documento,$sexo,$fecha,$correo,$contrasenia_encriptada,$telefono,$ciudad,$direccion);
            
        }
    }
   

}

require_once('../view/sign_up_user.php');


?>