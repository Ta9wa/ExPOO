<?php
require 'Classes/client.class.php' ;
$firstname=$_POST['firstname'];
 $lastname=$_POST['lastname'] ;
 $email=$_POST['email'];
 $phone=$_POST['phone'];
$id=$_POST['id'];
$up = new client;
$update = $up->update($firstname,$lastname,$email,$phone,$id);
header("location:mrgClients.php");