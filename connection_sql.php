<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// $servername = 'localhost';
// $username = 'root';
// $password = '';
// $port = 10060;
// $dbname = 'ges';

$servername = '162.144.37.131';
$username = 'gihelk';
$password = 's98hmXo95X';
$port = 10060;
$dbname = 'gihelk_gihe';


$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);


$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
