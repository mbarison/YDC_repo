<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">
<HTML>
  <HEAD>
    <META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1">    
    <META NAME="Classification" CONTENT="choir, music, choral music">
    <!--  REMOVE THIS FOR PRODUCTION!!! -->
    <META NAME="robots" CONTENT="noindex">
    <META NAME="KeyWords" CONTENT="Yellow Door Choir, Choir, Montreal, Roxanne Martel, eclectic, choral">  
    <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="css/main.css">  
    <TITLE>Welcome to the Homepage of the Yellow Door Choir, Montr&eacute;al</TITLE>
  </HEAD>
  <BODY>
    <CENTER>
      <a HREF="/"><IMG BORDER="0" SRC="/topbanner_test.jpg" ALT="Logo"></a>
      <TABLE class="main"> <!--style="border-collapse: collapse;"-->
        <TR>
          <?php $page = strrchr($_SERVER['SCRIPT_NAME'],"/"); ?>
          <?php $page = substr($page,1,strpos($page,'.')-1); ?>
	  <TD align="center" style="background-image:url(/<? if ($page == "index_test") echo 'buttonselect_test'; else echo 'buttonback_test' ?>.jpg)"><A HREF="/index_test.php" class="navbar"><IMG class="navbar" SRC="/eighthnote.gif" ALT="Bullet"> Home</a></TD>
          <TD align="center" style="background-image:url(/<? if ($page == "choir_test") echo 'buttonselect_test'; else echo 'buttonback_test' ?>.jpg)"><A HREF="/choir_test.php" class="navbar"><IMG class="navbar" SRC="/eighthnote.gif" ALT="Bullet"> Get to know us</a></TD>
          <TD align="center" style="background-image:url(/<? if ($page == "concerts" || $page == "concerts2" || $page == "tickets" || $page == "tickets_fr") echo 'buttonselect_test'; else echo 'buttonback_test' ?>.jpg)"><A HREF="/concerts.php" class="navbar"><IMG class="navbar" SRC="/eighthnote.gif" ALT="Bullet"> Concerts and music</a></TD>
          <TD align="center" style="background-image:url(/<? if ($page == "auditions_test") echo 'buttonselect_test'; else echo 'buttonback_test' ?>.jpg)"><A HREF="/auditions_test.php" class="navbar"><IMG class="navbar" SRC="/eighthnote.gif" ALT="Bullet"> Sing with us</a></TD>
          <TD align="center" style="background-image:url(/<? if ($page == "contact_test") echo 'buttonselect_test'; else echo 'buttonback_test' ?>.jpg)"><A HREF="/contact_test.php" class="navbar"><IMG class="navbar" SRC="/eighthnote.gif" ALT="Bullet"> Contact Us</a></TD>
        </TR>
        <TR>
          <TD colspan="5" align="center">
