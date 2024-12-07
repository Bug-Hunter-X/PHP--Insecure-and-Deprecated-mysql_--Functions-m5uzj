# PHP: Insecure and Deprecated mysql_* Functions

This repository demonstrates a common, yet serious, error in PHP code: the use of deprecated `mysql_*` functions.  These functions are not only outdated, but also pose significant security risks.  The example shows how to identify this issue and how to effectively migrate to a safer and more modern approach using MySQLi or PDO.

**Problem:** The provided PHP script utilizes `mysql_connect`, `mysql_select_db`, `mysql_query`, `mysql_fetch_assoc`, and `mysql_close`.  These functions are considered deprecated and have been removed from PHP 7.0 onwards. Their use leads to security vulnerabilities such as SQL injection and makes the code incompatible with modern PHP versions.

**Solution:** The solution file replaces the `mysql_*` functions with the safer and recommended `mysqli_*` functions.  It showcases how to establish a connection, execute queries, fetch data, and properly close the database connection in a secure and updated manner.