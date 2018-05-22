<?php

if (isset($_GET['error'])) {
    
if ($_GET['error'] == 1){
    
    echo "Unauthorized access";
}    
if ($_GET['error'] == 2){
    
    echo "Please input at least 4 characters";
}

}
?>

<html>

<body>
    
   <form class="submitForm" id="1" method="POST" action="submitPage.php">

    <p>Enter your login</p>
       
    <input type="text" name="textField">
     <p>Send</p>
     <input type="submit" name="submitButton">
       
    </form>

</body>

</html>