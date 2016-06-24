<?php include 'top.php'; ?>
<BR>
<P STYLE="font-size: 15px; font-weight: bold">
CBC Radio One - Jeanette Kelly - 25th Anniversary
</P>
<?php
	include ('flash/flash.php');
	flvheader();
	flv("cbc.flv", 320, 240, '0xFFE049', '0x000000', true, true);
?>
<?php include 'bottom.php'; ?>