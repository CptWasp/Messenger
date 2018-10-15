<?php
//    if($_POST['login'] == "Admin"){
//        echo "fail";
//    }else{
//        //echo "success";
//        echo $_POST['login'];
//    }

//##################################
// используется страницей спомощью ajax, НЕУДАЛЯТЬ
//######################################



    session_start();



if($_POST['login']  !== ""){
//    echo "Good Mood";    
    $message = rand(1111, 9999);     //рандомим 
    $_SESSION["check"] = $message;
    
    $log = htmlspecialchars($_POST['login']);
    $pass = htmlspecialchars($_POST['pass']);

    $fails = false;
    
    if($log == "" || !preg_match("/@/", $log)){
        $fails = true;
    }
    if($pass == ""){
        $fails = true;
    }
    if(!$fails){
//        echo "Чекните мыло";
        //echo $message;
     $subject = "Ваше кодовое слово: ".$message;
     $subject = "=?utf-8?B?".base64_encode($subject)."?=";
     $headers = "from: $login\r\nReply-to: $login\r\nContent-type:text/plain; charset=utf-8\r\n";
                    //отправляем
      mail($login, $subject, $message, $headers);
        echo $message;
    }
    
    
    
//    echo $log." & ".$pass;
    
    
    
    
    
}else{
    echo "WTF?";
}
session_destroy();
?>