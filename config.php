<?php
try
{
    session_start();
    $conn = new PDO("mysql:host=localhost;dbname=gradelist", "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
    die("");

    // exit();

}

?>
