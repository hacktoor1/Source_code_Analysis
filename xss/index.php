                    <!-- php example -->
<!-- =============================================== -->
<!-- Example vulnerable php code to XSS -->
<!-- =============================================== -->
<?php $user_input = $_GET['input'];echo "User input : " . $user_input;?>
<!-- =============================================== -->
<!-- Example fixed php code to XSS  ==> "mitigation" -->
<!-- =============================================== -->
<?php require '../function.php';$user_input = $_GET['input'];$user = check($user_input);echo "User input : " . $user;?>
<!-- =============================================== -->


