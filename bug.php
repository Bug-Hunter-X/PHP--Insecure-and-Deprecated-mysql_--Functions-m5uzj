This code uses the `mysql_*` functions which are deprecated and removed in PHP 7.0 and later versions.  Using them leads to security vulnerabilities and makes the code incompatible with modern PHP installations.
```php
<?php
$link = mysql_connect('localhost', 'user', 'password');
if (!$link) {
die('Could not connect: ' . mysql_error());
}

mysql_select_db('database_name', $link);

$result = mysql_query("SELECT * FROM table", $link);
if (!$result) {
die('Could not query: ' . mysql_error());
}

while ($row = mysql_fetch_assoc($result)) {
    // Process each row
}

mysql_close($link);
?>
```