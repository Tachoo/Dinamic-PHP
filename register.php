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
$first_name=$_POST['fname'];  //obtenemos por medio de un post la contrase;a
$second_name=$_POST['sname'];  //obtenemos por medio de un post la contrase;a
//Nombre completo
$nombre=$first_name.$second_name;// s a k u r a i m i h o
//
$apellido_paterno=$_POST['ap'];  //obtenemos por medio de un post la contrase;a
$apellido_materno=$_POST['am'];  //obtenemos por medio de un post la contrase;a
$correo_electronico=$_POST['email'];  //obtenemos por medio de un post la contrase;a
$phone_number=$_POST['phone'];  //obtenemos por medio de un post la contrase;a


if(isset($_GET['user'])&&isset($_GET['pass'])&&isset($_GET['fname'])&&isset($_GET['sname'])&&isset($_GET['ap'])&&isset($_GET['am'])&&isset($_GET['mail'])&&isset($_GET['phone']))
{
//                     server    usuario  contrase;a  base de datos donde trabajar
$conn = mysqli_connect($server,$db_user,$db_password,$db);
//
if (!$conn)  //Condicion cuando la coneccion es incorrecta o ... algo salio mal 
{
    die("Connection failed: " . mysqli_connect_error()."<br>"); //mostramos el mensaje de error
}
echo "Connected successfully"."<br>"; // si todo sigue bien entonces decimos que es exitosa la coneccion a la base de datos



$query = "  INSERT INTO `users_data` (`id`, `username`, `password`, `nombre`, `apellido_paterno`, `apellido_materno`, `correo_electronico`, `numero_telefonico`) VALUES (NULL, '".$username."', '".$password."', '".$nombre."', '".$apellido_paterno."', '".$apellido_materno."', '".$correo_electronico."', '".$phone_number."')  ";

$result=mysqli_query($conn,$query);  //lanzamos una instrucion SQL

header("Location:index.php?page=Login");
exit();
}else
{
    header("Location:index.php?page=register");
}



?>