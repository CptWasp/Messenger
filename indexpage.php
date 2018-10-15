<!doctype html>
<html lang="ru">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
            
      
    <title>главная</title>
  </head>
  <body>
<!--      форма-->
      <form name="regcheking" method="post" action="">
        <input type="text" name="clogin" id="loginchecking" placeholder="Логин" />
        <input type="text" name="cpass" id="passchecking" placeholder="Пароль" />
<!--          button        -->
        <input id="buttonchecking" type="button" value="Вход" />
          
      
      </form>
      <div id="loadingbox">
<!--        loadbox-->
      </div>
      
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
      <script>       
          
        $(document).ready(function(){
            $("#buttonchecking").bind("click", function(){
                
                $.ajax({ 
                    url: "checker.php",
                    type: "POST",
                    data:( {clogin: $("#loginchecking").val(), cpass: $("#passchecking").val()} ),      
                    dataType: "html",
                    beforeSend: function (){
                                    $("#loadingbox").text("Загрузка данных...");
                                }, 
                    success: function(data){
                        $("#loadingbox").empty();
                            alert(data);
                    }
                });
              
            });
        });
      </script>
<!--      <script  src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>-->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  </body>
</html>