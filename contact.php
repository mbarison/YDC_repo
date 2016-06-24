<?php include 'top.php'; ?>
<BR>
<P STYLE="font-size: 15px; font-weight: bold">
Contact Us
</P>
<P STYLE="font-size: 12px;">
Please fill out the form below or call us at: 514-488-1107
</P>
<FORM METHOD="POST" ACTION="http://www.hourglass.net/asp/YDCmailer.asp">
<INPUT TYPE="HIDDEN" NAME="redirect" VALUE="http://www.yellowdoorchoir.com/thanks.php">
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
      <td align="right" valign="top" style="font-size: 12px;"><label for="Phone">Phone:</label>&nbsp;</td>
      <td>
        <input type="text" name="Phone" ID="Phone" size="40" style="font-size:12px;font-face:verdana;vertical-align:top">
      </td>
    </tr>
    <tr>
      <td align="right" valign="top" style="font-size: 12px;">
        <label for="Subject">Subject:</label>&nbsp;
      </td>
      <td>
        <select name="Subject" ID="Subject" style="font-size:12px;font-face:verdana;vertical-align:top">
          <option value="0">
            Please select...
          </option>
          <option value="General">General Comment
          <option value="Tickets">Concert Tickets
          <option value="Audition">Request an Audition
          <option value="Perform">Invitation to Perform
          <option value="Sponsor">Sponsoring the Choir
        </select><br>
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
      <td align="right" valign="top">
        &nbsp;
      </td>
      <td style="font-size: 12px;">
        I would like to be notified of upcoming concerts:<BR>
        <input type="radio" name="add_to_list" ID="add_to_list_y" value="Yes" checked><label for="add_to_list_y">Yes</label><input type="radio" name="add_to_list" ID="add_to_list_n" value="No"><label for="add_to_list_n">No</label>
        <p>
      
      </td>
    </tr>
    <tr>
      <td></td>
      <td>
        <input type="submit" name="submit" value="Send">
      </td>
    </tr>
  </table>
</form>
<?php include 'bottom.php'; ?>

