<?php

require 'dbconnect.class.php';
 
class client{
    private $cnnx;


    public function __construct(){
        $db=new BaseDonne;
        $this->cnx = $db->connect();


    }

    public function readAllClients(){
        try{
            $req='SELECT * FROM students';
            $result = $this->cnx->prepare($req);
            $result->execute();
            return $result;

        } catch (PDOException $e) {
            echo $e->getMessage();
    }
}
public function add_new($firstname,$lastname,$email,$phone)
{
    try{
    
    $repp='INSERT INTO students(firstname, lastname, email , phone) VALUES ( :param_firstname,:param_lastname,:param_email,:param_phone);';
    $rep=$this->cnx->prepare($repp);
    $rep->bindParam(':param_firstname',$firstname);
    $rep->bindParam(':param_lastname',$lastname);
    $rep->bindParam(':param_email',$email);
    $rep->bindParam(':param_phone',$phone);
    $rep->execute();
 return $rep;
}catch (Exception $e) {
    echo  $e->getMessage();
     }
}

public function delete($id){
    try {
        $repp='DELETE FROM students WHERE id =:param_id';
        $rep=$this->cnx->prepare($repp);
        $rep->bindParam(':param_id',$_GET['id']);
        $rep->execute();
        return $rep;
    
    }catch (Exception $e) {
        echo  $e->getMessage();
         }
}

public function update($firstname,$lastname,$email,$phone,$id){
    try {
        $repp='UPDATE students SET firstname=:param_firstname,lastname=:param_lastname,email=:param_email,phone=:param_phone where id=:param_id';
        $rep=$this->cnx->prepare($repp);
        $rep->bindParam(':param_firstname',$firstname);
        $rep->bindParam(':param_lastname',$lastname);
        $rep->bindParam(':param_email',$email);
        $rep->bindParam(':param_phone',$phone);
        $rep->bindParam(':param_phone',$phone);
        $rep->bindParam(':param_id',$id);
        $rep->execute();
        return $rep;
    
    }catch (Exception $e) {
        echo  $e->getMessage();
         }
}
}

?>