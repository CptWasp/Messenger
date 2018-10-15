<?php
    session_start();

 
       $message = rand(1111, 9999);
        
        $error = false;
                                 
                                 
                                 
                                 
            if($login == "" || !preg_match("/@/", $login)){
                $error = true;
            }
            if(strlen($pass) == 0){
                $error = true;
            }
            //отправляем сообщение если нету ошибок
                if(!$error){
                    $subject = "Ваше кодовое слово: ".$message;
                    $subject = "=?utf-8?B?".base64_encode($subject)."?=";
                    $headers = "from: $login\r\nReply-to: $login\r\nContent-type:text/plain; charset=utf-8\r\n";
                    //отправляем
                    mail($login, $subject, $message, $headers);                         
        


?>