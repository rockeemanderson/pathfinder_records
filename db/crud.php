<?php 

class crud{

        private $db;

        function __construct($conn){
            $this->db=$conn;
        }

        public function insertRecord($fname, $lname, $dob, $class, $church, $reg_date){
            try {
                $sql = "INSERT INTO users(fname, lname, dob, class_id, church_id, reg_date) VALUES (:fname, :lname, :dob, :class, :church, :reg_date)";
                $stmt = $this->db->prepare($sql);

                $stmt->bindparam(':fname',$fname);
                $stmt->bindparam(':lname',$lname);
                //$stmt->bindparam(':honours_granted',$honours_granted);
                $stmt->bindparam(':dob',$dob);
                $stmt->bindparam(':class',$class);
                $stmt->bindparam(':church',$church);
                $stmt->bindparam(':reg_date',$reg_date);
                
                $stmt->execute();
                return true;

            } catch (PDOException $e) {
                echo $e->getMessage();
                return false;

            }


            
        }

        public function editUser($user_id, $fname, $lname, $dob, $honours_granted, $class, $church){
            
            
            try {
                $sql = "UPDATE `users` SET `fname`=:fname,`lname`=:lname,`dob`=:dob,`honours_granted`=:honours_granted,`class_id`=:class, `church_id`=:church WHERE user_id = :user_id";
                $stmt = $this->db->prepare($sql);

                $stmt->bindparam(':user_id',$user_id);
                $stmt->bindparam(':fname',$fname);
                $stmt->bindparam(':lname',$lname);
                $stmt->bindparam(':honours_granted',$honours_granted);
                $stmt->bindparam(':dob',$dob);
                $stmt->bindparam(':class_id',$class);
                $stmt->bindparam(':church_id',$church);
                
        
                $stmt->execute();
                return true;

            } catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }

        public function getUser(){
            try{
                
                $sql = "SELECT * FROM `users` a inner join church s on a.church_id = s.church_id";
                $result = $this->db->query($sql);
                return $result;
            }catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
                
        
        }
        
        public function deleteUser($user_id)
        {
            try{
               $sql = "DELETE FROM `users` WHERE `users`.`user_id` = :user_id";
               //$sql = "delete from attendee where attendee_id = :id"; 
               $stmt = $this->db->prepare($sql);
                $stmt->bindparam(':user_id',$user_id);
                $stmt->execute();
                return true;

            }catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
                
            }
           
        

        public function getUserDetails($user_id){
            try{
                $sql = "select * from user a inner join church s on a.church_id = s.church_id where user_id";
                $stmt = $this->db->prepare($sql);
                $stmt ->bindparam(':user_id',$user_id);
                $stmt->execute();
                $result = $stmt->fetch();
                return $result;
                    }catch (PDOException $e) {
                        echo $e->getMessage();
                        return false;
        }
            
        
        }

        public function getChurch(){
        try{
            $sql = "SELECT * FROM `church`";
            $result = $this->db->query($sql);
            return $result;

        }catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }

        }

        public function getAhonours(){
            try{
                $sql = "SELECT * FROM `a_honours`";
                $result = $this->db->query($sql);
                return $result;
    
            }catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
    
            }

       public function getClass(){
           try{
               $sql = "SELECT * FROM `class`";
               $result = $this->db->query($sql);
               return $result;

           }catch (PDOException $e) {
               echo $e->getMessage();
               return false;
           }

           
         
            
        
        }



        
    }
?>