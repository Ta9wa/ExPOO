<?php

require 'Classes/client.class.php' ;
 $id=$_GET['id'];
 $del = new client;
 $eff = $del->delete($id);
 header("location:mrgClients.php");