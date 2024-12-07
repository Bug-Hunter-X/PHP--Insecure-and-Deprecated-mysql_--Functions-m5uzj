This corrected code uses the MySQLi extension which is a much safer and more modern way to interact with MySQL databases in PHP.
```php
<?php
$link = new mysqli('localhost', 'user', 'password', 'database_name');
if ($link->connect_error) {
die('Connect Error: ' . $link->connect_error);
}

$result = $link->query("SELECT * FROM table");
if (!$result) {
die('Query Error: ' . $link->error);
}

while ($row = $result->fetch_assoc()) {
    // Process each row
}

$link->close();
?>
```