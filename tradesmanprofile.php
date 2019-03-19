<?php
/**
 * Created by PhpStorm.
 * User: 1809441
 * Date: 19/03/2019
 * Time: 13:32
 */
require_once('connection.php');
$id=$_SESSION['SESS_MEMBER_ID'];
$result3=mysqli_query("SELECT * FROM member where mem_id='$id'");
while($row3=mysqli_fetch_array($result3))
{
    $fname=$row3['fname'];
    $lname=$row3['lname'];
    $address=$row3['address'];
    $contact=$row3['contact'];
    $picture=$row3['picture'];
    $gender=$row3['gender'];
    $postcode=$row3['postcode'];
    $qualification=$row3['qualification'];
    $AboutYou =$row3['About You'];
    $city=$row3['city'];
    $birthdate=$row3['dob'];
}
?>
<table width="398" border="0" align="center" cellpadding="0">
    <tr>
        <td height="26" colspan="2">My Pofile Information</td>
        <td><div align="right"><a href="TradesmanHomepage.php">logout</a></div></td>
    </tr>
    <tr>
        <td width="129" rowspan="5"><img src="<?php echo $picture?>" width="129" height="129" alt="no image found"/></td>
 <td width="82" valign="top"><div align="left">Firstname:</div></td>
     <td width="165" valign="top"><?php echo $fname ?></td>
    </tr>
    <tr>
        <td valign="top"><div align="left">LastName:</div> </td>
        <td valign="top"><?php echo $lname?></td>
    </tr>
    <tr>
    <td valign="top"><div align="left">Gender:</div> </td>
    <td valign="top"><?php echo $gender?></td>
    </tr>
    <tr>
        <td valign="top"><div align="left">Address:</div> </td>
        <td valign="top"><?php echo $address?></td>
    </tr>
    <tr>
        <td valign="top"><div align="left">Contact:</div> </td>
        <td valign="top"><?php echo $Contact?></td>
    </tr>
    <tr>
        <td valign="top"><div align="left">Postcode:</div> </td>
        <td valign="top"><?php echo $postcode?></td>
    </tr>

    <tr>
        <td valign="top"><div align="left">Qualification:</div> </td>
        <td valign="top"><?php echo $Qualification?></td>
    </tr>
    <tr>
        <td valign="top"><div align="left">AboutYou:Brief Personal Summary</div></td>
        <td valign="top"><?php echo $AboutYou?></td>
    </tr>
    <tr>
        <td valign="top"><div align="left">City:</div> </td>
        <td valign="top"><?php echo $city?></td>
    </tr>
    <tr>
        <td valign="top"><div align="left">Birthdate:</div> </td>
        <td valign="top"><?php echo $birthdate?></td>
    </tr>
</table>
<p align="center"><a href="TradesmanHomePage.php"></a> </p>
