<?php 

class crud{

        private $db;

        function __construct($conn){
            $this->db=$conn;
        }

        public function insertRecord($fname, $lname, $dob, $gender, $class, $church, $avatar_path, $email, $reg_date){
            try {
                $sql = "INSERT INTO users(fname, lname, dob, gender, class_id, church_id, avatar_path, email, reg_date) VALUES (:fname, :lname, :dob, :gender, :class, :church, :avatar_path, :email, :reg_date)";
                $stmt = $this->db->prepare($sql);

                $stmt->bindparam(':fname',$fname);
                $stmt->bindparam(':lname',$lname);
                $stmt->bindparam(':dob',$dob);
                $stmt->bindparam(':gender',$gender);
                $stmt->bindparam(':class',$class);
                $stmt->bindparam(':church',$church);
                $stmt->bindparam(':email',$email);
                $stmt->bindparam(':reg_date',$reg_date);
                $stmt->bindparam(':avatar_path',$avatar_path);
                
                $stmt->execute();
                return true;

            } catch (PDOException $e) {
                echo $e->getMessage();
                return false;

            }


            
        }

        public function editUser($user_id, $fname, $lname, $honours_id, $class, $church, $email){
            
            
            try {
                $sql = "UPDATE `users` SET `fname`=:fname,`lname`=:lname, `honours_id`=:honours_id,`class_id`=:class, `church_id`=:church, `email`=:email WHERE user_id = :user_id";
                $stmt = $this->db->prepare($sql);

                $stmt->bindparam(':user_id',$user_id);
                $stmt->bindparam(':fname',$fname);
                $stmt->bindparam(':lname',$lname);
                $stmt->bindparam(':honours_id',$honours_id);
                //$stmt->bindparam(':dob',$dob);
                //$stmt->bindparam(':gender',$gender);
                $stmt->bindparam(':class',$class);
                $stmt->bindparam(':church',$church);
                $stmt->bindparam(':email',$email);
               // $stmt->bindparam(':reg_date',$reg_date);
               // $stmt->bindparam(':avatar_path',$avatar_path);
                                   
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
                $sql = "select * from users a inner join church s on a.church_id = s.church_id where user_id = :user_id";
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
               $sql1 = "SELECT * FROM `users` a inner join class s on a.class_id = s.class_id";
               $result = $this->db->query($sql);
               return $result;

           }catch (PDOException $e) {
               echo $e->getMessage();
               return false;
           }
         
        
       }

        public function displayUserClass(){
            try{
                $sql = "SELECT * FROM `users` a inner join class s on a.class_id = s.class_id";
                $result = $this->db->query($sql);
                return $result;
 
            }catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }


        
    }
?>