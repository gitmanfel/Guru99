<html>
<!--comments: logout page-->

<head>
    <!--comments: To link to a common cascading style sheets-->
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <!--comments: To link to javascript files-->
    <script language="JavaScript" src="../JavaScript/test.js"></script>
    <div>
        <h2 class="barone">Guru99 Bank</h2>
    </div>
    <title> Guru99 Bank Logout Output Page </title>
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
<!--comments: logout body-->

<body onLoad="document.fbal.txtaccno.select();">
    <br><br>
    <table border="0" width="70%" align="center" class="layout1">
        <form name="fbal" method="post">
        </form>
    </table>
    <!--comments: to link to home page-->
    <p align="right"><a href="Customerhomepage.php">Home</a></p>
</body>

</html>