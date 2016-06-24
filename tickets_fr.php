<?php include 'top.php'; ?>
<script language="JavaScript">
<!--
//***********************************************************************************
function checkform ()
{
    if (document.form.FriAdult.value == "0" && document.form.FriStudent.value == "0" && document.form.SatAdult.value == "0" && document.form.SatStudent.value == "0" && document.form.donation.value == "0") {
        alert( "Veuillez sélectionner le nombre de billet ou le montant du don.");
        document.form.FriAdult.focus();
        return false ;
    }


    if (document.form.Name.value == "") {
        alert( "Veuillez inscrire votre nom" );
        document.form.Name.focus();
        return false ;
    }

      if (document.form.Ejanvierl.value == "" || document.form.Ejanvierl.value.indexOf('@') == -1 || document.form.Ejanvierl.value.indexOf('.') == -1) {
        alert( "Veuillez inscrire une adresse courriel valide" );
        document.form.Ejanvierl.focus();
        return false ;
    }
    
    if (document.form.Address.value == "") {
        alert( "Veuillez inscrire votre adresse civique" );
        document.form.Address.focus();
        return false ;
    }
	
    if (document.form.City.value == "") {
        alert( "Veuillez inscrire votre ville" );
        document.form.City.focus();
        return false ;
    }
		
    if (document.form.PostalCode.value == "") {
        alert( "Veuillez inscrire votre code postal" );
        document.form.PostalCode.focus();
        return false ;
    }

    if (document.form.Phone.value == "") {
        alert( "Veuillez inscrire votre no de téléphone résidentiel" );
        document.form.Phone.focus();
        return false ;
    }

    if (document.form.Referred.value == "0") {
        alert( "Veuillez selectionner comment vous avez entendu parler de nous" );
        document.form.Referred.focus();
        return false ;
    }    
    
	//document.form.submit();
	return true;
}
-->
</script>
<BR>
<P STYLE="font-size: 15px; font-weight: bold">
Achat de billets en ligne - Sonorit&eacute;s mondiales
</P>

<BLOCKQUOTE>
<P style="font-size: 12px;" align="justify">
Veuillez sélectionner le nombre de billets que vous désirez acheter. Lorsque vous confirmerez votre achat, vous serez dirigé vers Paypal afin de compléter votre transaction par  carte de crédit. Vous pouvez également, si vous le désirez, faire par la même occasion un don à la chorale.</p>
<P style="font-size: 12px;" align="justify">
Vos billets seront disponibles à la porte, le soir du concert, sur présentation d’une carte d’identité valide. S’il s’agit de billets étudiants, une carte valide d’étudiant sera requise. Veuillez vous présenter au moins 30 minutes avant l’heure du concert. Les billets achetés en ligne sont sujets à des frais de service de 1,50 $ par billet (inclus dans les prix indiqués ci-dessous).
</P>
</BLOCKQUOTE>

<FORM METHOD="POST" NAME="form" ACTION="http://www.hourglass.net/asp/YDCjanvierler.asp" onSubmit="return checkform();">
<INPUT TYPE="HIDDEN" NAME="subject" VALUE="Ticket Purchase">
<INPUT TYPE="HIDDEN" NAME="redirect" VALUE="http://www.yellowdoorchoir.com/ticketpay.php">

  <table width="500" cellspacing="5" cellpadding="0" border="0">
    <tr>
      <td style="font-size: 12px;" align="center"><B>Description</B></td>
      <td style="font-size: 12px;" align="center"><B>Prix</B></td>
      <td style="font-size: 12px;" align="center"><B>Qté</B></td>
    </tr>

    <tr>
      <td style="font-size: 12px;"><label for="FriAdult">Le vendredi 27 mai 2016 19 h 30 Billet général</label></td>
      <td style="font-size: 12px;" align="center">21,50 $</td>
      <td align="center">
        <SELECT NAME="FriAdult" ID="FriAdult">
          <OPTION VALUE="0" SELECTED>0
          <OPTION VALUE="1">1
          <OPTION VALUE="2">2
          <OPTION VALUE="3">3
          <OPTION VALUE="4">4
          <OPTION VALUE="5">5
          <OPTION VALUE="6">6
          <OPTION VALUE="7">7
          <OPTION VALUE="8">8
          <OPTION VALUE="9">9
          <OPTION VALUE="10">10
        </SELECT>
      </td>
    </tr>
    <tr>
      <td style="font-size: 12px;"><label for="FriStudent">Le vendredi 27 mai 2016  19 h  30 Billet étudiant</label></td>
      <td style="font-size: 12px;" align="center">16,50 $</td>
      <td align="center">
        <SELECT NAME="FriStudent" ID="FriStudent">
          <OPTION VALUE="0" SELECTED>0
          <OPTION VALUE="1">1
          <OPTION VALUE="2">2
          <OPTION VALUE="3">3
          <OPTION VALUE="4">4
          <OPTION VALUE="5">5
          <OPTION VALUE="6">6
          <OPTION VALUE="7">7
          <OPTION VALUE="8">8
          <OPTION VALUE="9">9
          <OPTION VALUE="10">10
        </SELECT>
      </td>
    </tr>

    <tr>
      <td style="font-size: 12px;"><label for="SatAdult">Le samedi 28 mai 2016  19 h  30 Billet général</label></td>
      <td style="font-size: 12px;" align="center">21,50 $</td>
      <td align="center">
        <SELECT NAME="SatAdult" ID="SatAdult">
          <OPTION VALUE="0" SELECTED>0
          <OPTION VALUE="1">1
          <OPTION VALUE="2">2
          <OPTION VALUE="3">3
          <OPTION VALUE="4">4
          <OPTION VALUE="5">5
          <OPTION VALUE="6">6
          <OPTION VALUE="7">7
          <OPTION VALUE="8">8
          <OPTION VALUE="9">9
          <OPTION VALUE="10">10
        </SELECT>
      </td>
    </tr>
    <tr>
      <td style="font-size: 12px;"><label for="SatStudent">Le samedi 28 mai 2016 19 h  30 Billet étudiant</label></td>
      <td style="font-size: 12px;" align="center">16,50 $</td>
      <td align="center">
        <SELECT NAME="SatStudent" ID="SatStudent">
          <OPTION VALUE="0" SELECTED>0
          <OPTION VALUE="1">1
          <OPTION VALUE="2">2
          <OPTION VALUE="3">3
          <OPTION VALUE="4">4
          <OPTION VALUE="5">5
          <OPTION VALUE="6">6
          <OPTION VALUE="7">7
          <OPTION VALUE="8">8
          <OPTION VALUE="9">9
          <OPTION VALUE="10">10
        </SELECT>
      </td>
    </tr>
   <tr>
      <td style="font-size: 12px;"><label for="donation">Don optionnel (un reçu aux fins de l'impôt sera émis)</label></td>
      <td style="font-size: 12px;" align="center">
        <SELECT NAME="donation" ID="donation">
          <OPTION VALUE="0" SELECTED>$0
          <OPTION VALUE="25">$25
          <OPTION VALUE="50">$50
         	<OPTION VALUE="75">$75
          <OPTION VALUE="100">$100
          <OPTION VALUE="150">$150
          <OPTION VALUE="200">$200
					<OPTION VALUE="250">$250
					<OPTION VALUE="300">$300
        </SELECT>
      </td>
      <td align="center">&nbsp;
        
      </td>
    </tr>    
  </table>
<P>
  <table width="750" cellspacing="5" cellpadding="0" border="0">
    <tr>
      <td align="right" valign="top" style="font-size: 12px;"><label for="Name">Nom :</label>&nbsp;</td>
      <td>
        <input type="text" name="Name" ID="Name" size="40" style="font-size:12px;font-face:verdana;vertical-align:top">
      </td>
    </tr>
    <tr>
      <td align="right" valign="top" style="font-size: 12px;"><label for="Ejanvierl">Courriel :</label>&nbsp;</td>
      <td>
        <input type="text" name="Ejanvierl" ID="Ejanvierl" size="40" style="font-size:12px;font-face:verdana;vertical-align:top">
      </td>
    </tr>
    <tr>
      <td align="right" valign="top" style="font-size: 12px;"><label for="Address">Adresse:</label>&nbsp;</td>
      <td>
        <input type="text" name="Address" ID="Address" size="40" style="font-size:12px;font-face:verdana;vertical-align:top">
      </td>
    </tr>
    <tr>
      <td align="right" valign="top" style="font-size: 12px;"><label for="Apt">App. :</label>&nbsp;</td>
      <td>
        <input type="text" name="Apt" ID="Apt" size="40" style="font-size:12px;font-face:verdana;vertical-align:top">
      </td>
    </tr>
    <tr>
      <td align="right" valign="top" style="font-size: 12px;"><label for="City">Ville :</label>&nbsp;</td>
      <td>
        <input type="text" name="City" ID="City" size="40" style="font-size:12px;font-face:verdana;vertical-align:top">
      </td>
    </tr>
    <tr>
      <td align="right" valign="top" style="font-size: 12px;"><label for="Province">Province :</label>&nbsp;</td>
      <td>
        <select name="Province" ID="Province" style="font-size:12px;font-face:verdana;vertical-align:top">
          <option value="AB"> Alberta</option>
          <option value="BC"> Colombie-Britannique</option>
          <option value="MB"> Manitoba</option>
          <option value="NB"> Nouveau-Brunswick</option>
          <option value="NF"> Terre-Neuve</option>
          <option value="NT"> Territoires du Nord-Ouest</option>
          <option value="NS"> Nouvelle-Écosse</option>
          <option value="NU"> Nunavut</option>
          <option value="ON"> Ontario</option>
          <option value="PE"> Île-du-Prince-Édouard</option>
          <option value="QC" SELECTED> Québec</option>
          <option value="SK"> Saskatchewan</option>
          <option value="YK"> Yukon</option>
        </select>        
      </td>
    </tr>
    <tr>
      <td align="right" valign="top" style="font-size: 12px;"><label for="PostalCode">Code postal :</label>&nbsp;</td>
      <td>
        <input type="text" name="PostalCode" ID="PostalCode" size="40" style="font-size:12px;font-face:verdana;vertical-align:top">
      </td>
    </tr>
    <tr>
      <td align="right" valign="top" style="font-size: 12px;"><label for="Phone">Téléphone :</label>&nbsp;</td>
      <td>
        <input type="text" name="Phone" ID="Phone" size="40" style="font-size:12px;font-face:verdana;vertical-align:top">
      </td>
    </tr>
    <tr>
      <td align="right" valign="top" style="font-size: 12px;">
        <label for="Referred">Comment avez-vous entendu parler de nous ?</label>&nbsp;
      </td>
      <td>
        <select name="Referred" ID="Referred" style="font-size:12px;font-face:verdana;vertical-align:top">
          <option value="0">
            Veuillez choisir...
          </option>          
          <option value="ChoirMember">Par un membre de la chorale
          <option value="WordOfMouth">Par le bouche à oreille
          <option value="Ad">Annonce ou affiche
          <option value="Internet">Recherche sur Internet
          <option value="Other">Autre
        </select><br>
      </td>
    </tr>    
    <tr>
      <td align="right" valign="top" style="font-size: 12px;"><label for="Comments">Commentaires :</label></td>
      <td>
        <textarea name="Comments" ID="Comments" rows="5" cols="50" style="font-size:12px;font-face:verdana;vertical-align:top"></textarea><br>
        <br>
      </td>
    </tr>
    <tr>
      <td align="right" valign="top">&nbsp;
        
      </td>
      <td style="font-size: 12px;">
        Je désire être informé(e) de vos prochains concerts : <BR>
        <input type="radio" name="add_to_list" ID="add_to_list_y" value="Yes" checked><label for="add_to_list_y">Oui</label><input type="radio" name="add_to_list" ID="add_to_list_n" value="No"><label for="add_to_list_n">Non</label>
        <p>
      
      </td>
    </tr>
    <tr>
      <td></td>
      <td>
        <input type="submit" name="submit" value="Confirmez la commande">
      </td>
    </tr>
  </table>
</form>
<?php include 'bottom.php'; ?>

