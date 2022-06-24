<!-- PHP easy-form -->
<?
/*
++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
	Copyright (C) 2004-2005 SunFrogServices.com. All rights reserved.

	PHPeasy-form version 2.0
	Released 2005-05-16
	
	Contact SunFrogServices.com at:
	http://www.SunFrogServices.com
	
++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
*/
// write form results to file

$fp = fopen("txt-bkup/membership-results.txt", "a");
fwrite(
    $fp,
    "Name:  " .
        $_POST['001_MEMBER'] . "\n Phone: " .
        $_POST['001_PHONE'] . "\n Address: " .
        $_POST['002_ADDRESS'] . "\n City: " .
        $_POST['003_CITY'] . "\n State: " .
        $_POST['004_STATE'] . "\n Zip: " .
        $_POST['005_ZIP'] . "\n Date Posted: " .
        date("l dS of F Y h:i:s A") . "\r\n__________________________________________________________\n\n"
);
fclose($fp);

// send form results through email
$recipient = "memberservice@valdostateachersfcu.org, cameronc@growthbydesign.org";
$subject = "MEMBERSHIP REQUEST";
$forminfo =
    ("MEMBERSHIP REQUEST " .
        $_POST[''] . "\n\n\n Account # (To be completed by Credit Union): " .
        $_POST[''] . "\n ----------------------------------------- " .
        $_POST[''] . "\n\n\n Name: " .
        $_POST['001_MEMBER'] . "\n Email: " .
        $_POST['001_EMAIL'] . "\n Phone: " .
        $_POST['001_PHONE'] . "\n Address: " .
        $_POST['002_ADDRESS'] . "\n City: " .
        $_POST['003_CITY'] . "\n State: " .
        $_POST['004_STATE'] . "\n Zip Code: " .
        $_POST['005_ZIP'] . "\n ----------------------------------------- " .
        $_POST[''] . "\n Employment: " .
        $_POST['006_EMPLOYMENT'] . "\n Eligibility for Membership: " .
        $_POST['007_ELIGIBILITY'] . "\n ----------------------------------------- " .
        $_POST[''] . "\n Date of Birth: " .
        $_POST['009_DOB'] . "\n Account Type: " .
        $_POST['012_ACCOUNTTYPE'] . "\n If Other: " .
        $_POST['013_OtherAccountType'] . "\n\n\n Date Posted:  " .
        date("l dS of F Y h:i:s A") . "\r\n\n");

$formsend = mail("$recipient", "$subject", "$forminfo", "From: $email\r\nReply-to:$email");
?>
<!-- end PHPeasy-form -->

<HTML>

<HEAD>
    <TITLE>Valdosta Teachers' Federal Credit Union</TITLE>
    <META http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <meta name="description" content="Like all credit unions, Valdosta Teachers' Federal Credit Union is a not-for-profit financial cooperative. When you join the credit union, you become a shareholder - or an owner - of a very unique financial institution. Earnings above the required reserves are returned to you, in the form of lower interest rates on loans and competitive dividends on savings.">
    <meta name="keywords" content="Valdosta Teachers' Federal Credit Union, VTFCU, Valdosta Teachers', valdosta, credit union, School Teachers, Teacher Credit Union, savings, loans, credit cards, ATM, debit cards, Visa, check cards, nonprofit, service">

</HEAD>

<BODY bgcolor="#FFFFFF" text="#000000" link="#000066" vlink="#000099" alink="#0000FF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
    <table width="100%" border="0" cellpadding="5" cellspacing="5">
        <tr>
            <td align="center">
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <td align="center">&nbsp;</td>
                    </tr>
                    <tr>
                        <td align="center">Thank you for you interest!</td>
                    </tr>
                    <tr>
                        <td align="center">&nbsp;</td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td>
                <p>You have successfully submitted your
                    information. This page confirms that your online request has been
                    successfully made. We recommend that you print this page for your
                    records. A conformation email will be sent to you
                    once your information has been processed. If you have any questions
                    please <a href="http://www.valdostateachersfcu.org/siteinfo/contact.html">contact us.</a></p>
                <p align="center">
                    <INPUT type="button" value="   Close Window   " onClick="window.close();" name="button">
                </p>
            </td>
        </tr>
    </table>



</BODY>

</HTML>