<?php

$conn = mysqli_init();
mysqli_ssl_set($conn,NULL,NULL, "DigiCertGlobalRootCA.crt.pem", NULL, NULL);
mysqli_real_connect($conn, "dinescanfrt.mysql.database.azure.com", "abstractcoders", "Universe$1", "dinescanmenu", 3306, MYSQLI_CLIENT_SSL);

if (!$conn) {
	echo "Connection failed!";
}
