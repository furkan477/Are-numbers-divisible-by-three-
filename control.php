<?php
    echo "<pre/>";

    //print_r($_REQUEST);

    $function = array_map(function ($p){
        if($_POST['number_check'] == ''){
            echo 'sayı girmediniz<br/><br/>';
        }else {
            echo 'sayı girilmiştir<br/><br/>';
            return $p % 3 == 0 ? $_POST['number_check'].' üçe tam bölünüyor' : $_POST['number_check'].' üçe tam bölünmüyor';
        }
    },$_POST);
    
    print_r($function);
?>
