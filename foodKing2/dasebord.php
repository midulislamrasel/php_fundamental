<?php

// $db = new mysqli("localhost","root","","foodking");

// // require_once("db_connects.php");

// if(mysqli_connect_error()){
//     exit ('failed to connect to the databse : '. mysqli_connect_error());
// }


// //perpare oure sql statement and prevent injection

// if($stmt = $db->prepare('select email,password from users where name = ?')){
//     // now let we bind the parameters , so used name is a string so we use "s"
//     $stmt->bind_param('s',$_POST['name']);
//     $stmt->execute();

//     //Now let we store the result so we can check if the accout exists
//     $stmt->store_result();

//     if($stmt->num_rows > 0){
//         $stmt->bind_result($email,$passwrod);
//         $stmt->fetch();

//         //so now we know the account exist let we now verify the password
//         if($_POST['password'] === $passwrod){
//             // now the user shold log in and we create a session so we know the user has loggedin
//             session_regenerate_id();
//             $_SESSION['loggedin'] = true;
//             $_SESSION['name'] = $_POST['name'];
//             $_SESSION['id'] = $id;
//             header("location.navbar.php");
//         }else{
//             //Display a message for incorrect password
//             echo("Incorrect Password ");
//         }
//     }
//     else{
//         //Display a message for incorrect password
//         echo("Incorrect username");
//     }

//     $stmt->close();

// }


hjkhjkhjkhjkhjk




?>




