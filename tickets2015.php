<?php include 'top.php'; ?>
<script language="JavaScript">
<!--
//***********************************************************************************
function checkform ()
{
    if (document.form.FriAdult.value == "0" && document.form.FriStudent.value == "0" && document.form.SatAdult.value == "0" && document.form.SatStudent.value == "0" && document.form.donation.value == "0") {
        alert( "Please select a quantity of tickets or a donation amount." );
        document.form.FriAdult.focus();
        return false ;
    }


    if (document.form.Name.value == "") {
        alert( "Please enter your Full Name" );
        document.form.Name.focus();
        return false ;
    }

      if (document.form.Email.value == "" || document.form.Email.value.indexOf('@') == -1 || document.form.Email.value.indexOf('.') == -1) {
        alert( "Please enter a valid E-mail address" );
        document.form.Email.focus();
        return false ;
    }
    
    if (document.form.Address.value == "") {
        alert( "Please enter your Street Address" );
        document.form.Address.focus();
        return false ;
    }
	
    if (document.form.City.value == "") {
        alert( "Please enter your City" );
        document.form.City.focus();
        return false ;
    }
		
    if (document.form.PostalCode.value == "") {
        alert( "Please enter your Postal Code" );
        document.form.PostalCode.focus();
        return false ;
    }

    if (document.form.Phone.value == "") {
        alert( "Please enter your Phone Number" );
        document.form.Phone.focus();
        return false ;
    }

    if (document.form.Referred.value == "0") {
        alert( "Please select how you heard about us" );
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
Online Ticket Purchase - True Colours
</P>

<BLOCKQUOTE>
<P style="font-size: 12px;" align="justify">
Please select the number of tickets you would like to purchase. You have the option of making a donation to the choir at the same time. When you confirm your order you will be sent to Paypal to complete your credit card transaction.</p>
<P style="font-size: 12px;" align="justify">
Tickets will be available for pickup at the door on the night of the concert. A valid ID is required when picking up your tickets. A valid student ID will need to be presented when picking up student tickets. Please arrive at least 30 mins prior to show time. Tickets purchased online are subject to a $1.50 per ticket service charge (already included in the price below).
</P>
</BLOCKQUOTE>

<FORM METHOD="POST" NAME="form" ACTION="http://www.hourglass.net/asp/YDCmailer.asp" onSubmit="return checkform();">
<INPUT TYPE="HIDDEN" NAME="subject" VALUE="Ticket Purchase">
<INPUT TYPE="HIDDEN" NAME="redirect" VALUE="http://www.yellowdoorchoir.com/ticketpay.php">

  <table width="500" cellspacing="5" cellpadding="0" border="0">
    <tr>
      <td style="font-size: 12px;" align="center"><B>Description</B></td>
      <td style="font-size: 12px;" align="center"><B>Price</B></td>
      <td style="font-size: 12px;" align="center"><B>Qty</B></td>
    </tr>

    <tr>
      <td style="font-size: 12px;"><label for="FriAdult">Friday, May 29, 2015 7:30PM General Ticket</label></td>
      <td style="font-size: 12px;" align="center">$21.50</td>
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
      <td style="font-size: 12px;"><label for="FriStudent">Friday, May 29, 2015 7:30PM Student Ticket</label></td>
      <td style="font-size: 12px;" align="center">$16.50</td>
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
      <td style="font-size: 12px;"><label for="SatAdult">Saturday, May 30, 2015 7:30PM General Ticket</label></td>
      <td style="font-size: 12px;" align="center">$21.50</td>
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
      <td style="font-size: 12px;"><label for="SatStudent">Saturday, May 30, 2015 7:30PM Student Ticket</label></td>
      <td style="font-size: 12px;" align="center">$16.50</td>
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
      <td style="font-size: 12px;"><label for="donation">Optional donation (a tax receipt will be issued)</label></td>
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
      <td align="right" valign="top" style="font-size: 12px;"><label for="Name">Name:</label>&nbsp;</td>
      <td>
        <input type="text" name="Name" ID="Name" size="40" style="font-size:12px;font-face:verdana;vertical-align:top">
      </td>
    </tr>
    <tr>
      <td align="right" valign="top" style="font-size: 12px;"><label for="Email">E-mail:</label>&nbsp;</td>
      <td>
        <input type="text" name="Email" ID="Email" size="40" style="font-size:12px;font-face:verdana;vertical-align:top">
      </td>
    </tr>
    <tr>
      <td align="right" valign="top" style="font-size: 12px;"><label for="Address">Address:</label>&nbsp;</td>
      <td>
        <input type="text" name="Address" ID="Address" size="40" style="font-size:12px;font-face:verdana;vertical-align:top">
      </td>
    </tr>
    <tr>
      <td align="right" valign="top" style="font-size: 12px;"><label for="Apt">Apt:</label>&nbsp;</td>
      <td>
        <input type="text" name="Apt" ID="Apt" size="40" style="font-size:12px;font-face:verdana;vertical-align:top">
      </td>
    </tr>
    <tr>
      <td align="right" valign="top" style="font-size: 12px;"><label for="City">City:</label>&nbsp;</td>
      <td>
        <input type="text" name="City" ID="City" size="40" style="font-size:12px;font-face:verdana;vertical-align:top">
      </td>
    </tr>
    <tr>
      <td align="right" valign="top" style="font-size: 12px;"><label for="Province">Province:</label>&nbsp;</td>
      <td>
        <select name="Province" ID="Province" style="font-size:12px;font-face:verdana;vertical-align:top">
          <option value="AB"> Alberta</option>
          <option value="BC"> British Columbia</option>
          <option value="MB"> Manitoba</option>
          <option value="NB"> New Brunswick</option>
          <option value="NF"> Newfoundland</option>
          <option value="NT"> Northwest Territories</option>
          <option value="NS"> Nova Scotia</option>
          <option value="NU"> Nunavut</option>
          <option value="ON"> Ontario</option>
          <option value="PE"> Prince Edward Island</option>
          <option value="QC" SELECTED> Quebec</option>
          <option value="SK"> Saskatchewan</option>
          <option value="YK"> Yukon</option>
        </select>        
      </td>
    </tr>
    <tr>
      <td align="right" valign="top" style="font-size: 12px;"><label for="PostalCode">Postal Code:</label>&nbsp;</td>
      <td>
        <input type="text" name="PostalCode" ID="PostalCode" size="40" style="font-size:12px;font-face:verdana;vertical-align:top">
      </td>
    </tr>
    <tr>
      <td align="right" valign="top" style="font-size: 12px;"><label for="Phone">Phone:</label>&nbsp;</td>
      <td>
        <input type="text" name="Phone" ID="Phone" size="40" style="font-size:12px;font-face:verdana;vertical-align:top">
      </td>
    </tr>
    <tr>
      <td align="right" valign="top" style="font-size: 12px;">
        <label for="Referred">Where did you hear about us?</label>&nbsp;
      </td>
      <td>
        <select name="Referred" ID="Referred" style="font-size:12px;font-face:verdana;vertical-align:top">
          <option value="0">
            Please select...
          </option>          
          <option value="ChoirMember">From a choir member
          <option value="WordOfMouth">Word of mouth
          <option value="Ad">Advertisement or Poster
          <option value="Internet">Internet Search
          <option value="Other">Other
        </select><br>
      </td>
    </tr>    
    <tr>
      <td align="right" valign="top" style="font-size: 12px;"><label for="Comments">Comments:</label></td>
      <td>
        <textarea name="Comments" ID="Comments" rows="5" cols="50" style="font-size:12px;font-face:verdana;vertical-align:top"></textarea><br>
        <br>
      </td>
    </tr>
    <tr>
      <td align="right" valign="top">&nbsp;
        
      </td>
      <td style="font-size: 12px;">
        I would like to be notified of future concerts:<BR>
        <input type="radio" name="add_to_list" ID="add_to_list_y" value="Yes" checked><label for="add_to_list_y">Yes</label><input type="radio" name="add_to_list" ID="add_to_list_n" value="No"><label for="add_to_list_n">No</label>
        <p>
      
      </td>
    </tr>
    <tr>
      <td></td>
      <td>
        <input type="submit" name="submit" value="Confirm Order">
      </td>
    </tr>
  </table>
</form>
<?php include 'bottom.php'; ?>

