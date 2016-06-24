<?php include 'top.php'; ?>
<BR>
<P STYLE="font-size: 15px; font-weight: bold">
Thank you for purchasing concert tickets online!
</P>
<P STYLE="font-size: 12px;">Please wait while we connect you to Paypal to complete this transaction.</P>
<form name="form" action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_ext-enter">
<input type="hidden" name="redirect_cmd" value="_cart">
<input type="hidden" name="upload" value="1">
<input type="hidden" name="business" value="donations@yellowdoorchoir.com">
<input type="hidden" name="currency_code" value="CAD">

<?php $item = 1 ?>

<?php
if ( $_GET["fa"] != "" && $_GET["fa"] != "0")
{
?>
  <input type="hidden" name="item_name_<?php echo $item ?>" value="Adult Ticket - Friday May 27, 2016 7:30pm">
  <input type="hidden" name="amount_<?php echo $item ?>" value="21.50">
  <input type="hidden" name="quantity_<?php echo $item ?>" value="<?php echo $_GET["fa"] ?>">
<?php 
  $item++;
}
?>

<?php
if ( $_GET["fs"] != "" && $_GET["fs"] != "0")
{
?>
  <input type="hidden" name="item_name_<?php echo $item ?>" value="Student Ticket - Friday May 27, 2016 7:30pm">
  <input type="hidden" name="amount_<?php echo $item ?>" value="16.50">
  <input type="hidden" name="quantity_<?php echo $item ?>" value="<?php echo $_GET["fs"] ?>">
<?php 
  $item++;
}
?>

<?php
if ( $_GET["sa"] != "" && $_GET["sa"] != "0")
{
?>
  <input type="hidden" name="item_name_<?php echo $item ?>" value="Adult Ticket - Saturday May 28, 2016 7:30pm">
  <input type="hidden" name="amount_<?php echo $item ?>" value="21.50">
  <input type="hidden" name="quantity_<?php echo $item ?>" value="<?php echo $_GET["sa"] ?>">
<?php 
  $item++;
}
?>

<?php
if ( $_GET["ss"] != "" && $_GET["ss"] != "0")
{
?>
  <input type="hidden" name="item_name_<?php echo $item ?>" value="Student Ticket - Saturday May 28 2016 7:30pm">
  <input type="hidden" name="amount_<?php echo $item ?>" value="16.50">
  <input type="hidden" name="quantity_<?php echo $item ?>" value="<?php echo $_GET["ss"] ?>">
<?php 
  $item++;
}
?>

<?php
if ( $_GET["d"] != "" && $_GET["d"] != "0")
{
?>
  <input type="hidden" name="item_name_<?php echo $item ?>" value="Donation">
  <input type="hidden" name="amount_<?php echo $item ?>" value="<?php echo $_GET["d"] ?>">
<?php 
  $item++;
}
?>
<P STYLE="font-size: 12px;">If you are not automatically redirected to Paypal, please click the following button: </P>
<!--input type="image" src="http://www.paypal.com/en_US/i/btn/x-click-but01.gif" name="submit" alt="Make payments with PayPal - it's fast, free and secure!"-->
<input type="submit" name="pay" value="Pay Now">
</form>
<?php include 'bottom.php'; ?>
<SCRIPT LANGUAGE="JavaScript"><!--
setTimeout("document.form.submit()",2000);
//--></SCRIPT>

