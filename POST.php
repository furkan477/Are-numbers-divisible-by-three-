<?php
        if($_POST['number_check'] == ''){
            echo 'sayı girmediniz<br/><br/>';
        }else {
            echo 'sayı girilmiştir<br/><br/>';
            echo  $_POST['number_check'] % 3 == 0 ? $_POST['number_check'].' üçe tam bölünüyor' : $_POST['number_check'].' üçe tam bölünmüyor';
        }
?>
