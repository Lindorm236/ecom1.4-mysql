<?php
require_once('functions/functions.php');
$server ='localhost';
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
//$result1 =mysqli_query($conn, "SELECT * FROM user WHERE id=2");

//avec fetch_row : tableau indexé permet de recuperer des données 
$data1 = selectUserByIndex(2);

echo"<br>";
echo"Premier fetch";
echo"<br>";
echo"<br>";
//var_dump($result1);
echo"<br>";
echo"<br>";
var_dump($data1);

echo"<br>";
echo"<br>"; 

//$result2 =mysqli_query($conn, "SELECT * FROM user WHERE id=1");

//avec fetch_row : tableau indexé permet de recuperer des données 
$data2 = selectUserByIdAssoc(1);

echo"<br>";
echo"Second fetch";
echo"<br>";
echo"<br>";
//var_dump($result2);
echo"<br>";
echo"<br>";
var_dump($data2);


/*$result3 = mysqli_query($conn, "SELECT user_name, email, id FROM user WHERE id=1");
$data3 = mysqli_fetch_assoc($result3);



echo"<br>";
echo"Troisième fetch";
echo"<br>";
echo"<br>";
var_dump($result3);
echo"<br>";
echo"<br>";
var_dump($data3);

//recupérer toutes les lignes de la table user avec FETCH ASSOC
$result4 = mysqli_query($conn, "SELECT user_name, email, id FROM user");

$data4 =[];
$i = 0;
while($rangeeData = mysqli_fetch_assoc($result4)){
    $data4[$i] = $rangeeData;
    $i++;

    echo"</br>";
    echo"</br>";
    echo"Le nom de l'usager :" . $rangeeData["user_name"]. "</br>";
    echo"Courriel :" . $rangeeData["email"]. "</br>";
};

echo"</br></br>";
echo"Quatrième Fetch";
echo"</br></br>";
echo"Mon array aura :" . mysqli_num_rows($result4) . "lignes.";
echo"</br></br>";
var_dump($result4);
echo"</br></br>";
var_dump($data4);

*/

$data4 = getAllUserAssoc();

showData('Quatrième fetch', $data4);


?>