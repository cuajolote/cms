<?php 
const USER='root';
const PASS= '';
const DATABASENAME='cms';
const LOCALHOST = 'localhost';

$connection = mysqli_connect(LOCALHOST,USER,PASS,DATABASENAME);
if (!$connection) {
    echo 'error';
}else{
    echo 'connected';   
}

?>