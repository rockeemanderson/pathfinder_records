<?php
       //require_once 'includes/auth_check.php';
       require_once 'db/conn.php';

        if(!$_GET['id'])
        {
            //echo'error';
            include 'includes/errormessage.php';
            header("Location: viewrecords.php");
            
        }else{
            //get id values
            $id =$_GET['id'];

            //Call DELETE
            $result = $crud->deleteUser($id);
            //REDIRECT TO LIST

            if($result){
                header("Location: viewrecords.php");
            }else{
                //echo 'Problem';
                include 'includes/errormessage.php';
            }

        }
        
?>