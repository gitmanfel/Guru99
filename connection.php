<<<<<<< HEAD
<?php
$link = mysql_connect('your_host_name', 'your_username_for_host', 'your_password_for_host');
if (!$link) {
die('could not connect ' . mysql_error());
} else {
$db_selected = mysql_select_db('your_database_name', $link);
if (!$db_selected) {
die('could not connect ' . mysql_error());
}
=======
<?php
$link = mysql_connect('your_host_name', 'your_username_for_host', 'your_password_for_host');
if (!$link) {
die('could not connect ' . mysql_error());
} else {
$db_selected = mysql_select_db('your_database_name', $link);
if (!$db_selected) {
die('could not connect ' . mysql_error());
}
>>>>>>> a44289664d7152905528b6ae9877083588a72e16
}