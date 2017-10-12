<h1><?php echo "Redirecting to PayPal";?></h1>
<form action="https://www.paypal.com/cgi-bin/webscr" name="frmchkoutpay" method="post" id="frmBank">
<!--<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" name="frmchkoutpay" method="post" id="frmBank">--><!--Sandbox-->
<input type="hidden" name="cmd" value="_xclick">
<input type="hidden" name="rm" value="2">
<!--<input type="hidden" name="business" value="seller_1204094965_biz@gmail.com">--><!--LIVE-->
<input type="hidden" name="business" value="seller_1204094965_biz@gmail.com"><!--Sandbox-->
<input type="hidden" name="return" value="http://localhost:8080/white/paypal/donations.php" />
<input type="hidden" name="cancel_return" value="http://localhost:8080/white/paypal/donation.php" />

<input type="hidden" name="cpp_header_image" value="http://localhost:8080/white/paypal/header.jpg" />
<input type="hidden" name="custom" value="55" />

<input type="hidden" name="handling_cart" value="500" />
<input type="hidden" name="item_name" value="Computer Sales">
<input type="hidden" name="item_number" value="2">
<input type="hidden" name="amount" value="20">
<input type="hidden" name="no_shipping" value="1">
<input type="hidden" name="no_note" value="1">
<input type="hidden" name="currency_code" value="CHF">
</form>
<script>document.getElementById('frmBank').submit();</script>