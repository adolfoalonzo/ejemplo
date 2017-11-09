<?php
  session_start();
  
  $usuario=$_POST['usuario'];
    $pass=$_POST['pass'];
     
	//si escribio login y password 
    if($usuario !=""   &&   $pass !=""){
	  //verifica si ese login y password es correcto 
      if($usuario=="admin"   &&   $pass=="123"){
          $_SESSION['administrador']=$usuario;
		  $_SESSION['seguridad']=1;
		  echo  "<SCRIPT TYPE='text/javascript'>window.location='inicio.php'; </SCRIPT>";
      }
      else{
	           //si escribio login y pasword pero esta incorrecto 
               $_SESSION['error']="login  incorrecto";
             }
  }else
     {
          //no escribio ni login ni password
		  $_SESSION['llene']="Llene los campos";
		  
    }
  
    
    if($usuario !=""   &&   $pass !=""){
	  //verifica si ese login y password es correcto 
      if($usuario=="win"   &&   $pass=="qwe"){
          $_SESSION['administrador2']=$usuario;
		  $_SESSION['seguridad']=1;
		  echo  "<SCRIPT TYPE='text/javascript'>window.location='index.php'; </SCRIPT>";
      }
      else{
	           //si escribio login y pasword pero esta incorrecto 
               $_SESSION['error']="login  incorrecto";
             }
  }else
     {
          //no escribio ni login ni password
		  $_SESSION['llene']="Llene los campos";
		  
    }
    
    if($usuario !=""   &&   $pass !=""){
	  //verifica si ese login y password es correcto 
      if($usuario=="juan"   &&   $pass=="321"){
          $_SESSION['administrador3']=$usuario;
		  $_SESSION['seguridad']=1;
		  echo  "<SCRIPT TYPE='text/javascript'>window.location='new1.php'; </SCRIPT>";
      }
      else{
	           //si escribio login y pasword pero esta incorrecto 
               $_SESSION['error']="login  incorrecto";
             }
  }else
     {
          //no escribio ni login ni password
		  $_SESSION['llene']="Llene los campos";
		  
    }
     //despues de verificar el login y password, siempre redirecciona a la pagina de index.php
	 //echo "<SCRIPT LANGUAJE='javascript'>  alert('paso por aqui');</script>";
	 if($_SESSION['seguridad']==1)
	 {
		echo  "<SCRIPT TYPE='text/javascript'>window.location='logout.php'; </SCRIPT>"; 
	}        
	else {
	echo  "<SCRIPT TYPE='text/javascript'>window.location='logout.php'; </SCRIPT>";
	}
        
        
        
  ?>