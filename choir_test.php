<?php include 'top_test.php'; ?>
<TABLE width="770" style="border-collapse: collapse;">
  <TR>
    <TD width="165" valign="top">
      <BR>
      <UL>
      <?php $s = $_GET["s"]; ?>
      <?php if ($s == '') $s = 'mission_test'; ?>        
      <LI><A HREF="choir_test.php?s=mission_test" STYLE="text-decoration: none; <?if ($s == 'mission_test') echo 'font-weight: bold;'?>">Who we are</a>
      <LI><A HREF="choir_test.php?s=history_test" STYLE="text-decoration: none; <?if ($s == 'history_test') echo 'font-weight: bold;'?>">A little bit of history</a>
      <LI><A HREF="choir_test.php?s=director_test" STYLE="text-decoration: none; <?if ($s == 'director_test') echo 'font-weight: bold;'?>">Musical Director</a>
      <LI><A HREF="choir_test.php?s=director_prev_test" STYLE="text-decoration: none; <?if ($s == 'director_prev_test') echo 'font-weight: bold;'?>">Previous Directors</a>
      </UL>
    </TD>
    <TD valign="top" height="300" colspan="4">
      <BR>
      <BLOCKQUOTE>
      <?php include $s . '.html'; ?>
    </BLOCKQUOTE>
    </TD>
  </TR>
</TABLE>
<?php include 'bottom.php'; ?>

