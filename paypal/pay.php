<h1><?php echo "Redirecting to PayPal";?></h1>
<form action="https://www.paypal.com/cgi-bin/webscr" name="frmchkoutpay" method="post"  id="frmBank">

<!--<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" id="frmBank">-->

<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="41289">

<input type="hidden" name="business" value="seller_1204094965_biz@gmail.com">
   <input type="hidden" name="cancel_return" value="http://localhost:8080/white/paypal/donation.php" />
     <input type="hidden" name="item_name" value="Donation">
     <input type="hidden" name="return" value="http://localhost:8080/white/paypal/donations.php"/>

 <input type="hidden" name="cpp_header_image" value="http://localhost:8080/white/paypal/header.jpg" />
  <input type="hidden" name="testing" value="testing" />
 
</form>

<script>document.getElementById('frmBank').submit();</script>