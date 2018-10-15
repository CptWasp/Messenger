<?php

    session_start();
   
    
// страница не будет использоваться тк мы используем ajax

    if(isset($_POST["send"])){
        $_SESSION["email"] = $message;  
       $message = rand(1111, 9999);
        $login = htmlspecialchars($_POST["login"]);
        //$check = htmlspecialchars($_POST["check"]);
        $pass = htmlspecialchars($_POST["pass"]);
                                 
        //приписываем сессии для всех 
            $_SESSION["login"] = $login;
            //$_SESSION["check"] = $message;
            $_SESSION["pass"] = $pass;
                                 
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
                    //header("Location: index.php?send=1");
                    
                    
//                    if(isset($_POST["ch_btn"])){
//            if($POST["check"] == $message){
//                print_r( "ljvh;kjsbv;kbdhdsbvjhbdh");
//            }
//        }
                    
                }
        
        
        
        
        
        
        
        
    }
//print_r($_POST);
//print_r($message);
    

?>
<!doctype html>
<html lang="ru">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>регистрация</title>
  </head>
  <body>
  <center>
  <form method="post" name="feedback" action="" id="form-reg">
                  <input type="text" name="login" placeholder="  Сюда E-mail" value="<?=$_SESSION["login"]?>" style="border-radius: 25px; height: 50px; width: 100%; background: none; font-size: 18pt; font-family:Roboto Thin; padding-left:13px">
                <input type="text" name="pass" value="<?=$_SESSION["pass"]?>" font-family="Roboto Thin" placeholder="  Придумайте пароль" style="border-radius: 25px; height: 50px; width: 100%; background: none; font-size: 18pt; font-family:Roboto Thin;  padding-left:13px">
                   <input type="text" id="el" name="check"  font-family="Roboto Thin"  placeholder="  Проверьте почту" style="border-radius: 25px; height: 50px; width: 100%; background: none; font-size: 18pt; font-family:Roboto Thin;  padding-left:13px">

  
  
  
  <input type="submit" name="send"  style="color: white; margin-top: -20px; margin-bottom:20px; background: #2A454F; font-family: Roboto Thin; border-radius: 35px; height: 50px; width: 200px;" value="З а р е г а т ь с я"   id="123"><!-- рег -->
               <input type='submit' onclick='che()' name='ch_btn' style='color: white; background: #44444; font-family: Roboto Thin; border-radius: 35px; height: 50px; width: 200px;' value='П о д т в е р д и т ь'>
     </form>    </center>       
      
                <!--подтв --> 
                       
                 <script>
                     function che(){
                        
                     var text = $("#el").val();
                     if("<?=$message?>" == text) {
                            <?php 
                         $mysqli = new mysqli("localhost", "root", "", "stupid_can");
                       $mysqli->query("SET NAMES 'utf8'");
                       $succes = $mysqli->query("INSERT INTO `users` (`id`, `data_reg`, `login`, `password`) VALUES (NULL, '".time()."', '$login', '$pass')");
                        
//                        require("Location: index.php");
                        $mysqli->close();
                        
                    
                         ?>
                         
                        }
//                         $("body").load("index.php"); //ajax загрузка контента
                        //header("Location: index.php");
                     }
                     
               
               </script>
  
  <style style="text/css">
      #form-reg{
          padding-top: 50px;
          padding-bottom: 50px;
          width: 50%;
          height: 130px;
          
      }
      </style>
  
  
  
  
  

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>