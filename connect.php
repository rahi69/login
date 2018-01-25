<?php
$host="localhost";
$username='root';
$password='';
$dbname="account";
$tbl_name="members";
$db= new mysqli($host,$username,$password,$dbname) or die("cannot connect") ;