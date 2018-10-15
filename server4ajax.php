<?php
//    $clientMessage = htmlspecialchars($_POST['mess']);
//
//    echo $clientMessage;

    $thedata = parse_ini_file('config.ini', true); //true там стоит чтобы все не переписвывать каждый раз


echo "<pre>";
print_r($thedata);
echo "</pre>";

?>