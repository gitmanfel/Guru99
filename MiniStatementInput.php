<html>
<!--comments: mini statement page-->

<head>
    <!--comments: To link to a common cascading style sheets-->
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <!--comments: To link to javascript files-->
    <script language="JavaScript" src="../JavaScript/test.js"></script>
    <div>
        <h2 class="barone">Guru99 Bank</h2>
    </div>
    <title>Guru99 Bank Mini Statement Page </title>
</head>

<body>
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
    <!--comments: mini statement body-->
    <table border="0" width="70%" align="center" class="layout1">
        <form name="fbal" method="post" action="MiniStatement.php" onsubmit="return validateone();">
            <td>
                <table align="center">
                    <tr>
                        <td colspan="2">
                            <p class="heading3" align=center>Mini Statement Form</p>
                        </td>
                    </tr>
                    <!--comments: to display account number field-->
                    <tr>
                        <td>Account No</td>
                        <td>
                            <input type="text" name="accountno" maxlength="10" onKeyUp="validateaccountno();"
                                onBlur="validateaccountno();" />
                            <label id="message2"></label>
                        </td>
                    </tr>
                    <!--comments: to display submit and reset buttons-->
                    <tr>
                        <td></td>
                        <td><input type="submit" name="AccSubmit" value="Submit" />
                            <input type="reset" name="res" value="Reset">
                        </td>
                    </tr>
        </form>
    </table>
    <!--comments: to link to home page-->
    <p align="right"><a href="Customerhomepage.php">Home</a></p>
    </td>
    </table>
</body>

</html>