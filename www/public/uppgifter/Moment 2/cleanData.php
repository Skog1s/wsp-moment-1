<?php
 mb_internal_encoding("UTF-8");
 
 function cleanData($data){
 if(!isset($_POST)) {
    header('Location: index.php');
 }
    


 foreach ($_POST as $value) {
 if(isset($value)) {
    $data = $value;

    if(!mb_check_encoding($data)) {
        header('Location: index.php');
 }

 $data = htmlspecialchars($data);
 //Eller $data strip_tags($data);

 $data = trim($data);
 $data = stripslashes($data);

 header('Content-Type: text/html; charset=utf-8');
 echo $data;
}
}
 }

?>