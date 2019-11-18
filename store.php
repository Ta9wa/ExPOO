<?php
 require 'Classes/client.class.php' ;
 $firstname=$_POST['firstname'];
 $lastname=$_POST['lastname'] ;
 $email=$_POST['email'];
 $phone=$_POST['phone'];
 $add = new client;
 $ajout = $add->add_new($firstname,$lastname,$email,$phone);
 header("location:mrgClients.php");