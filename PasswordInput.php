<html>
<!--comments: change password page-->

<head>
    <!--comments: To link to a common cascading style sheets-->
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <!--comments: To link to a javascript file-->
    <script language="JavaScript" src="../JavaScript/test.js"></script>
    <div>
        <h2 class="barone">Guru99 Bank</h2>
    </div>
    <title> Guru99 Bank New Customer Entry Page </title>
</head>
<div>
    <div>
        <ul class="menusubnav">
            <li class="orange"><a href="Customerhomepage.php">Customer</a></li>
            <li><a href="BalEnqInput.php">Balance Enquiry</a></li>
            <li><a href="customerfundinput.php">Fund Transfer</a></li>
            <li><a href="PasswordInput.php">Changepassword</a></li>
            <li><a href="MiniStatementInput.php">Mini Statement</a></li>
            <li><a href="Logout.php">Log out</a></li>
        </ul>
    </div>
</div>
<!--comments: change password form body-->

<body>
    <br>
    <table class="layout1" border="0" align="center">
        <form name="addcust" action="Password.php" method="post" onsubmit="return validateChangePassword()">
            <td colspan="2">
                <table border="0" align="center">
                    <tr>
                        <td align="center" colspan="2">
                            <p class="heading3">Change Password</p>
                        </td>
                    </tr>
                    <tr>
                        <td>Old Password</td>
                        <td><input type="password" name="oldpassword" maxlength="25" onKeyUp="validateoldpassword();"
                                onBlur="validateoldpassword();"><label id="message20"></label></td>
                    </tr>
                    <tr>
                        <td>New Password</td>
                        <td><input type="password" name="newpassword" maxlength="25" onKeyUp="validatenewpassword();"
                                onBlur="validatenewpassword();"><label id="message21"></label></td>
                    </tr>
                    <tr>
                        <td>Confirm Password</td>
                        <td><input type="password" name="confirmpassword" maxlength="25"
                                onKeyUp="validateconfirmpassword();" onBlur="validateconfirmpassword();"><label
                                id="message22"></label></td>
                    </tr>
                    <!--comments: To display submit and reset buttons-->
                    <tr>
                        <td></td>
                        <td><input type="submit" value="Submit" name="sub" />
                            <input type="reset" value="Reset" name="res">
                        </td>
                    </tr>
        </form>
    </table>
    </td>
    </table>
    <p align="right"><a href="Customerhomepage.php">Home</a></p>
</body>

</html>