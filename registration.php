
<!-- ИСПОЛЬЗУЕМАЯ СТРАНИЦА НЕ УДЯЛЯТЬ!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->

<!doctype html>
<html lang="ru">
  <head>
       <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
      <script  src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
      <script>
        function funcBefore(){
//              $("#loadingImage").attr("class", "vissible");
            $("#load").text("loading...");
        }
         function Success (data){
//             var godofobj = {};
//             godofobj.theData = data; 
                $("#load").empty();
                $(".checkingCode").show();
                location.href = "recheckingcode.php";
//                                                function(){
//                                                            $("#check").bind("click", function(){
//                                                                var aData = godofobj.theData;
//                                                            if($("#Code").val() = aData){
//                                                                alert(aData);
//                                                            }
//                                                            }
//                                                  );
//                                                }
             
             
            
             
             alert(data);
             
         }
          
             
                

             
    
        
        $(document).ready(function(){
            
//            $("#checkingCode").hide();
            
            
             $("#send").bind("click", function(){
                            
                $.ajax({
                    
                   url: "test.php",                  //на какую страницу ссылаемся
                    type: "POST",                       // каким образом отправляем данные 
                    data:   ({login: $("#login").val(), pass: $("#password").val()}),       //какие переменные отправляем
                    dataType: "html",
                    beforeSend: funcBefore,     //что делаем пока страница загружается
                    success: Success 
                        
                        //$("#load").empty();
                        //alert(data);
                       // $("#load").text("Вы успешно зарегистрировались");
//                        $("#load").append('<input type="text" class="reg-style-block" id="Code" placeholder="Code"><input type="button" class="reg-style-block" id="check" value="подтвердить">');
//setTimeout(function() { $("#checkingCode").hide('slow'); }, 2000);
                        
                    
                        });
                });
            
           
            
        });
      </script>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Регистрация</title>
  </head>
  <body>
        

        <div id="header-block" src="header.php"></div>
          <input type="text" class="reg-style-block" id="login" placeholder="login">
          <br>
          <input type="text" class="reg-style-block" id="password" placeholder="password">
          <br>
          
          <input type="button" class="reg-style-block" id="send" value="Отправить">
        <div id="load">
           
                
         
      </div>
<!--      <input type="text" class="checkingCode" id="Code" placeholder="Code"><input type="button" class="checkingCode" id="check" value="подтвердить" >-->

    
      
       <style type="text/css">
                .vissible{
                    display: flex;
                }
                .unvissible{
                    display: none;
                }
                #load{
               border: 1px solid black;
                }
           #header-block{
               height: 70px;
               border: 1px solid #eef;
           }
           .checkingCode{
               display: none;
           }
        </style>
     
      
      

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

  </body>
</html>