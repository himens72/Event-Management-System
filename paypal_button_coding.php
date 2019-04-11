<?php session_start();
 if(!isset($_SESSION['userid'])) {
header('Location:index.php');
}
 ?>
<html>
<head>
</head>
<body>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post">

    <!-- Identify your business so that you can collect the payments. -->
    <input type="hidden" name="business" value="<?php echo $_SESSION['email']; ?>">

        <!-- Specify a Buy Now button. -->
        <input type="hidden" name="cmd" value="_xclick">

            <!-- Specify details about the item that buyers will purchase. -->
            <input type="hidden" name="item_name" value="Credits">
                <input type="hidden" name="amount" value="1">
                    <input type="hidden" name="currency_code" value="USD">

                        <!-- Display the payment button. -->
                        <input type="image" name="submit" border="0"
                            src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                            alt="PayPal - The safer, easier way to pay online">
                            <img alt="" border="0" width="1" height="1"
                                src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                                
</form>
</body>
</html>