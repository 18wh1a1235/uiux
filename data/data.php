<?php

if ($_POST["dataId"]) {
   $dataId=  $_POST["dataId"];
  $html_data = '';
   if($dataId == 1){
        $html_data .='<h1>One</h1>';
        echo  $html_data;
   }
   if($dataId == 2){
    $html_data .='
                <h1>Two</h1>       
        
        ';
        echo  $html_data;
   }
   if($dataId == 3){
    $html_data .='
            <h1>Three</h1>       

        ';
        echo  $html_data;
   }
   
} 



?>