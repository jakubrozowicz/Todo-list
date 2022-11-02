<?php

$hostName = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName = "nauka";

mysqli_report(MYSQLI_REPORT_STRICT);

        try {

                $connect = new mysqli($hostName, $dbUser, $dbPass, $dbName);

        }catch(Exception $e){

                echo "Dev info:".$e;
                exit('Database error');

            }