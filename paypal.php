<?php include 'top.php'; ?>
<BR>
<P STYLE="font-size: 15px; font-weight: bold">
Thank you for becoming a friend of the Yellow Door Choir!
</P>
<P style="font-size: 12px;">
Cheques can by made out to "The Yellow Door Choir" and then mailed to the following address:
<P STYLE="font-size: 12px;">Yellow Door Choir
<BR>3227 Fendall
<BR>Montreal, Quebec
<BR>Canada H3T 1N3
<P STYLE="font-size: 12px;">You may also send money via Paypal (and credit card) by clicking the following button:
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
<input type="hidden" name="cmd" value="_xclick">
<input type="hidden" name="business" value="donations@yellowdoorchoir.com">
<input type="hidden" name="item_name" value="Donation">
<input type="hidden" name="currency_code" value="CAD">
<input type="hidden" name="amount" value="<?php echo $_GET["d"]; ?>">
<input type="hidden" name="shipping" value="0">
<input type="image" src="http://www.paypal.com/en_US/i/btn/x-click-but01.gif" name="submit" alt="Make payments with PayPal - it's fast, free and secure!">
</form>
<?php include 'bottom.php'; ?>