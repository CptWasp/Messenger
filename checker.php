<?php
//     $mysqli = new mysqli("localhost", "root", "", "stupid_can");
//     $mysqli->query("SET NAMES 'utf8'");
//     $succes = $mysqli->query("INSERT INTO `users` (`id`, `data_reg`, `login`, `password`) VALUES (NULL, '".time()."', '$login', '$pass')");
//    function printResult($results){
//        while($row = ($result->fetch_assoc()) != false){
//            echo $row;
//        }
//    }

    $log = htmlspecialchars($_POST['clogin']);
    $pass = htmlspecialchars($_POST['cpass']);

    $mysqli = new mysqli("localhost", "root", "", "stupid_can");
    $mysqli->query("SET NAMES 'utf8'");
    $results = $mysqli->query("SELECT `password` FROM `users` WHERE `login`= '$log'");
    
        $theData = ($results->fetch_assoc());


        $pword = $theData["password"];
    
        if($pword == $pass){
            echo "Вы вошли";
        }else{
            echo "неправильный логин или пароль";
        }


//echo $_POST['clogin'];

    $mysqli->close();
?>
// вход, проверка на сайт