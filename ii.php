<?php 
session_start();
$password = "e10adc3949ba59abbe56e057f20f883e";
if($_POST['password']){
    if(md5($_POST['password']) == $password){
        $_SESSION['password'] = "alm";
    }else{
        echo "<span style='color:red;font-weight:bold;'>La contraseña es incorrecta</span>";
    }}
if(!$_SESSION['password']){
?>
<h2>Logueate</h2>
Esta p&#225;gina tiene restringido el acceso<br>
<form style="margin:12px;" name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<input type="password" name="password">
<input type="submit" name="Submit" value="Login!"></form>
<?php 
}else{
    if($_GET['desconectar']){
        session_destroy();
        exit("<span style='color:green;'>Haz sido desconectado correctamente</span>");
    }
?>	
Bienvenido, aquí puedes situar todo el contenido que debe ser protegido.<br>
Puede ser texto o código HTML.<br> 
Usa el enlace más abajo al terminar para cerrar la sesión.<br>
<a href="<?php echo $_SERVER['PHP_SELF']; ?>?desconectar=si">Desconectar</a>
<?php 	
}
?>
