<?php include 'top.php'; ?>
<TABLE width="770" style="border-collapse: collapse;">
  <TR>
    <TD width="165" valign="top" STYLE="font-size: 12px;">
      <BR>
      <UL>
      <?php $s = $_GET["s"]; ?>
      <?php if ($s == '') $s = 'auditions'; ?>        
      <LI><A HREF="auditions.php?s=auditions" STYLE="color: #FFFFFF; text-decoration: none; <?if ($s == 'auditions') echo 'font-weight: bold;'?>">Auditions</a>
      <LI><A HREF="auditions.php?s=rehearsals" STYLE="color: #FFFFFF; text-decoration: none; <?if ($s == 'rehearsals') echo 'font-weight: bold;'?>">Rehearsals and concerts</a>
      <LI><A HREF="auditions.php?s=fees" STYLE="color: #FFFFFF; text-decoration: none; <?if ($s == 'fees') echo 'font-weight: bold;'?>">Membership fees</a>
      <LI><A HREF="auditions.php?s=responsibilities" STYLE="color: #FFFFFF; text-decoration: none; <?if ($s == 'responsibilities') echo 'font-weight: bold;'?>">Membership Responsibilities</a>
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