<?php
    define('HOST', 'localhost');
    define('USER', 'root');
    define('PASS', '');
    define('BASE', 'twitter_clone');


$con = new MySQLi(HOST,USER,PASS,BASE);

if(!$con){
    die("Not Connected!");
}