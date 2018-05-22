<?php

if (isset($_POST['submitButton'])) {
    
    echo "You have logged in";
    
if (strlen($_POST['textField']) < 4){
    header("Location: index.php?error=2");
        exit;
    }
 
}else{
    header("Location: index.php?error=1");
        exit;
}

?>
