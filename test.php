<?php
// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "joyce", "pwd" => "{your_password_here}", "Database" => "webapplicationtp042403", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:webapplicationtp042403.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);

if(!$conn)
  {
    die("Error connection: ".sqlsrv_errors());
  }
  echo "Connection to Db: Success!";
?>
