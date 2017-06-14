<?php
//Mostrar todos los errores
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
//
//Datos para poder conectarnos a la basede datos
$server="127.0.0.1"; //Servidor de hostinger
$db="db_testWeb";   //El nombre de la base de datos
$db_user="root"; // admin data  ! usuario
$db_password=""; // admin data ! password
//
//Variables_Post
$username=$_POST['user'];  //Obtenemos por medio de  un post el usuario
$password=$_POST['pass'];  //obtenemos por medio de un post la contrase;a
//
//                     server    usuario  contrase;a  base de datos donde trabajar
$conn = mysqli_connect($server,$db_user,$db_password,$db);
//
if (!$conn)  //Condicion cuando la coneccion es incorrecta o ... algo salio mal 
{
    die("Connection failed: " . mysqli_connect_error()."<br>"); //mostramos el mensaje de error
}
echo "Connected successfully"."<br>"; // si todo sigue bien entonces decimos que es exitosa la coneccion a la base de datos

//Ahora segimos con  agarrar datos de la base de datos
$query = "SELECT * FROM users_data WHERE username='".$username."' AND password='".$password."'";// Hacemos la Instrucion de SQL por separado



$result=mysqli_query($conn,$query);  //lanzamos una instrucion SQL
//organizamos la informacion en arreglos por separado de las columnas de la tabla
$row=mysqli_fetch_array($result);
//Hacemos la comparacion de los datos obtenidos del post  con los datos de la base de datos 
if($row['username']==$username && $row['password']==$password)
{
    echo "Log in Succes!!! Welcome  ".$row['username'];  //Pues entramos 
    header("Location:index.php?=home");
    exit();
}else
{
    
    echo "Username or Password incorrect, place check your data info";  //pues no entramos
}
//Listo

?>