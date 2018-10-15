<?php
header('Content-Type: text/html; charset=utf-8');

//загружаем данные в строковую переменную
$buffer = file_get_contents("fdata.json");

//преобразовываем строку в объект
$data = json_decode($buffer);

//определение ошибок 
$jsonerror = "Неизвестная ошибка";

//ошибки при преобразовании
switch(json_last_error()){
    case JSON_ERROR_NONE:
        //ошибок нет
        $json_error = "";
        break;
        
    case JSON_ERROR_DEPTH:
         $json_error = "Достигнута максимальная глубина стека";
        break;
        
    case JSON_ERROR_STATE_MISMATCH:
         $json_error = "некорректные данные или не совпадение режимов";
        break;
        
    case JSON_ERROR_CTRL_CHAR:
         $json_error = "некорректный управляющий символ";
        break;
        
    case JSON_ERROR_SYNTAX:
          $json_error = "синтаксическая ошибка в json";
        break;
        
    case JSON_ERROR_UTF8:
          $json_error = "неправильная кодировка";
        break;
        
        
    default:
         $json_error = "Неизвестная ошибка";
    break;
}


if($json_error != ""){
    //ошибка есть
    echo $json_error;
}else{
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}






?>