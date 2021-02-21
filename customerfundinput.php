<!--comments: fund transfer page-->
<html>
<!--comments: To transfer fund-->

<head>
    <!--comments: To link to a common cascading style sheets-->
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <!--comments: To link to javascript files-->
    <script language="JavaScript" src="../JavaScript/test.js"></script>
    <div>
        <h2 class="barone">Guru99 Bank</h2>
    </div>
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
    <title>Fund Transfer Entry Page </title>
</head>

<body>
    <br /><br /><br /><br />
    <table class="layout1" border="0" align="center">
        <form name="addcust" method="POST" action="customerfund.php" onsubmit="return validateFundTransfer();">
            <tr>
                <td align="center" colspan="2">
                    <p class="heading3">Fund Transfer</p>
                </td>
            </tr>
            <tr>
                <td>Payers account no</td>
                <td><input type="text" name="payersaccount" value="" onBlur="validatepayersaccountno()"
                        onKeyUp="validatepayersaccountno()" /> <label id="message10"></label>
            </tr>
            <tr>
                <td>Payees account no</td>
                <td>
                    <input type="text" name="payeeaccount" value="" onBlur="validatepayeeaccountno()"
                        onKeyUp="validatepayeeaccountno()" /> <label id="message11"></label>
                </td>
            </tr>
            <tr>
                <td>Amount</td>
                <td><input type="text" name="ammount" maxlength="8" onBlur="validateammount()"
                        onKeyUp="validateammount()" /> <label id="message1"></label></td>
            </tr>
            <tr>
                <td>Description</span></td>
                <td><input type="text" name="desc" value="" onBlur="validatedesc()" onKeyUp="validatedesc()" /> <label
                        id="message17"></label> </td>
            </tr>
            <tr><input type="hidden" name="formid" value="”/>
<td></td>
<td><input type=" submit" name="AccSubmit" value="Submit" onClick=" return validateone();">
                <input type="reset" name="res" value="Reset"></td>
            </tr>
        </form>
    </table>
    <p align="right"><a href="Customerhomepage.php">Home</a></p>
</body>

</html>