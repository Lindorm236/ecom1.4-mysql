<?php
$toto = 4;
function selectUserByIndex($id){
    //Recupérer une ligne dans user
    global $conn;
    $result = mysqli_query($conn, "SELECT * FROM user WHERE id=" . $id);

    //avec fetch row : tableau indexé
    //Fonction du premier fetch

    $data = mysqli_fetch_row($result);

    return $data;
}

function selectUserByIdAssoc($id){
    global $conn;
    //Fonction du second fetch
    $result = mysqli_query($conn, "SELECT * FROM user WHERE id=" . $id);

    $data =mysqli_fetch_assoc($result);
    return $data;
}

function showData($title, $data){
    echo"</br></br><h2>". $title ."</h2></br></br>";
    var_dump($data);
}


//Fonction du quatrième fetch et cinquième fetch
function getAllUserAssoc(){
    global $conn;
    $result4 = mysqli_query($conn, "SELECT user_name, email, id FROM user");

    $data4 =[];
    $i = 0;
    while($rangeeData = mysqli_fetch_assoc($result4)){
        $data4[$i] = $rangeeData;
        $i++;
    
        
    };
    return $data4;
}

//Fonction du sixième fetch

function getAllUserIndex(){


    global $conn;
    $result5 = mysqli_query($conn, "SELECT user_name, email, id FROM user");

    $data5 =[];
    $i = 0;
    while($rangeeData = mysqli_fetch_row($result5)){
        $data5[$i] = $rangeeData;
        $i++;
    
        
    };
    return $data5;
}

function createUser($data){
    global $conn;
  $squery = "INSERT INTO user VALUES(NULL,?,?,?); ";

  if($stmt =mysqli_prepare($conn, $squery)){

    mysqli_stmt_bind_param($stmt, "sss", $data['user_name'], $data['email'], $data['pwd']);

    $result =mysqli_stmt_execute($stmt);
    echo"</br>";
    echo"</br>";
    echo"Coucou ";
    echo"</br>";
    echo"</br>";
    var_dump($result);
  }

  return $result;
}

function updateUser($data){

    global $conn;
    $query="UPDATE user 
            SET user_name=?,
            email=?,
            pwd=?
            WHERE id=?  ";
            if($stmt = mysqli_prepare($conn, $query)){
                //Lecture des marqueurs
                mysqli_stmt_bind_param($stmt,
                "sssi",
                $data['user_name'],
                $data['email'],
                $data['pwd'],
                $data['id']);
                //Exécution de requete
                $result = mysqli_stmt_execute($stmt);
                echo"<br><br>";
                echo"Je suis changé";
                echo"<br><br>";
                var_dump($result);
                return $result;
            }
};