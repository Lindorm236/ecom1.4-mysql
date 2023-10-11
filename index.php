<?php
$server = 'localhost';
$userName ="root";
$pwd="";
$db="ecom1";

$conn = mysqli_connect($server, $userName, $pwd, $db);
if($conn){
    echo "Connected to the $db database successfully";
    global $conn;
}
else{
    echo "Error : Not connected to the $db database";
}

//récupérer une ligne dans user
$result1 =mysqli_query($conn, "SELECT * FROM user WHERE id=2");

//avec fetch_row : tableau indexé permet de recuperer des données 
$data1 = mysqli_fetch_row($result1);

echo"<br>";
echo"Premier fetch";
echo"<br>";
echo"<br>";
var_dump($result1);
echo"<br>";
echo"<br>";
var_dump($data1);

echo"<br>";
echo"<br>";

$result2 =mysqli_query($conn, "SELECT * FROM user WHERE id=1");

//avec fetch_row : tableau indexé permet de recuperer des données 
$data2 = mysqli_fetch_row($result2);

echo"<br>";
echo"Second fetch";
echo"<br>";
echo"<br>";
var_dump($result2);
echo"<br>";
echo"<br>";
var_dump($data2);


$result3 = mysqli_query($conn, "SELECT user_name, email, id FROM user WHERE id=1");
$data3 = mysqli_fetch_assoc($result3);



echo"<br>";
echo"Troisième fetch";
echo"<br>";
echo"<br>";
var_dump($result3);
echo"<br>";
echo"<br>";
var_dump($data3);


?>