<?php

define("WEB_TITLE","Serenity Harbor Bank"); // Change Bank Name
define("WEB_URL","https://dashboard.serenityharbor.online"); // Change No "/" Ending splash
define("WEB_EMAIL","contact@serenityharbor.online"); // Change Your Website Email

$web_url = WEB_URL;
function support_plugin(){
    require_once 'support_plugin.php';
}

function dbConnect(){
    $servername = "localhost";
    $username = "multistream6_serenityharbor";//DATABASE USERNAME
    $password = "serenityharbor";//DATABASE PASSWORD
    $database = "multistream6_serenityharbor";//DATABASE NAME
    $dns = "mysql:host=$servername;dbname=$database";

    try {
        $conn = new PDO($dns, $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
}
//return dbConnect();

function inputValidation($value): string
{
    return trim(htmlspecialchars(htmlentities($value)));
}
