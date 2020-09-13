<?php
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];

//conectar ala base de batos

$conexion=mysqli_connect("localhost", "root", "", "pagina");
$consulta="SELECT * FROM pagina WERE usuario='$usuario' and contraseña='$contraseña'";
$resultado=mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);
if($filas>0){
    header("location:menu_principal.html");
}
else{
    echo"Error en la autenticacion";
    alert("error");
}
mysqli_free_result($resultado);
mysqli_close($conexion);
