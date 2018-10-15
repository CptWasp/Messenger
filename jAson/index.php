<html>
    <head>
        
        <meta charset="utf-8">
        
        
        
    </head>
    <body>
        
        <div id="load">
            
        </div>
        <input type="text" id="info">
        <button id="bt">send</button>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
                $("#bt").bind("click", function(){
                    var textMessage = $("#info").val();
                    
                    
                    $.ajax({
                        url: "server.php",
                        type: "POST",
                        data: {mess: textMessage},
                        dataType: "html",
                        before: function(){
                            $("#load").text("Wait for it");
                        },
                        success: function(data){
                            $("#load").empty();
                            $("#load").text(data);
                        }
                    });
                    
                    
                });
            });
        </script>
        
        
        
        
        
        
        
    </body>
</html>