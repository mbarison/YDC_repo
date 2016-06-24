<?php include 'top.php'; ?>
<TABLE width="770" style="border-collapse: collapse;">
  <TR>
    <TD width="165" valign="top" STYLE="font-size: 12px;">
      <BR>
      <UL>
      <?php $s = $_GET["s"]; ?>
      <?php if ($s == '') $s = 'mission'; ?>        
      <LI><A HREF="choir.php?s=mission" STYLE="color: #FFFFFF; text-decoration: none; <?if ($s == 'mission') echo 'font-weight: bold;'?>">Our Mission</a>
      <LI><A HREF="choir.php?s=music" STYLE="color: #FFFFFF; text-decoration: none; <?if ($s == 'music') echo 'font-weight: bold;'?>">Our Music</a>
      <LI><A HREF="choir.php?s=ensembles" STYLE="color: #FFFFFF; text-decoration: none; <?if ($s == 'ensembles') echo 'font-weight: bold;'?>">Ensembles</a>
      <LI><A HREF="choir.php?s=history" STYLE="color: #FFFFFF; text-decoration: none; <?if ($s == 'history') echo 'font-weight: bold;'?>">History</a>
      <LI><A HREF="choir.php?s=director" STYLE="color: #FFFFFF; text-decoration: none; <?if ($s == 'director') echo 'font-weight: bold;'?>">Musical Directors</a>
      <LI><A HREF="choir.php?s=sponsors" STYLE="color: #FFFFFF; text-decoration: none; <?if ($s == 'sponsors' || $s == 'friend') echo 'font-weight: bold;'?>">Sponsors</a>
      <LI><A HREF="choir.php?s=partnerships" STYLE="color: #FFFFFF; text-decoration: none; <?if ($s == 'partnerships') echo 'font-weight: bold;'?>">Community Partnerships</a>
      <LI><A HREF="choir.php?s=gallery" STYLE="color: #FFFFFF; text-decoration: none; <?if ($s == 'gallery') echo 'font-weight: bold;'?>">Photo Gallery</a>        
      <LI><A HREF="choir.php?s=25" STYLE="color: #FFFFFF; text-decoration: none; <?if ($s == '25' || $s == 'govgen' || $s == 'pminister') echo 'font-weight: bold;'?>">25th Anniversary</a>        
      </UL>
    </TD>
    <TD valign="top" height="300" colspan="4" STYLE="font-size: 12px;">
      <BR>
      <BLOCKQUOTE>
      <?php include $s . '.html'; ?>
    </BLOCKQUOTE>
    </TD>
  </TR>
</TABLE>
<?php include 'bottom.php'; ?>

