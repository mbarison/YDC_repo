<?php include 'top.php'; ?>
<BR>
<P STYLE="font-size: 15px; font-weight: bold">
CFCF News - Story on Eleanor Stubley
</P>
<?php
	include ('flash/flash.php');
	flvheader();
	flv("stubley.flv", 320, 240, '0xFFE049', '0x000000', true, true);
?>
<?php include 'bottom.php'; ?>