<html>
    <head>
        
        <meta charset="utf-8">
        
        
        
    </head>
    <body>
        
        
            
        
        <input type="text" id="info">
        <button id="bt">send</button>
    <div id="load">
    </div>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
                $("#bt").bind("click", function(){
                
                    
                    
                    $.ajax({
                        url: "server4ajax.php",
                        type: "POST",
                        data: ({mess: $("#info").val()}),
                        dataType: "html",
                        beforeSend: function(){
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