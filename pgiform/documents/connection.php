<?php
$conn = new mysqli('localhost', 'root','','premgangaforms');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
   
}else{
};
?>