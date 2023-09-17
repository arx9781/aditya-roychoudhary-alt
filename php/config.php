<?php
$mysqli = mysqli_init();
$mysqli->ssl_set(NULL, NULL, "/etc/ssl/certs/ca-certificates.crt", NULL, NULL);
$mysqli->real_connect($_ENV["DB_HOST"], $_ENV["DB_USERNAME"], $_ENV["DB_PASSWORD"], $_ENV["DB_NAME"]);
$mysqli->close();

if (!$conn) {
    echo "Connection Failed";
}
?>
