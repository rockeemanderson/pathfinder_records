<?php
    $title = 'Success';
    $banner = 'Thanks for Registering the user';
    require_once 'includes/header.php'; 
    require_once 'db/conn.php';
    require_once 'sendemail.php';
    $reg_date = date("Y-m-d");
    

    if(isset($_POST['submit'])){
      $fname = $_POST['fname'];
      $lname = $_POST['lname'];
      $dob = $_POST['dob'];
     // $honours = $_POST['honour_id'];
      $gender = $_POST['gender'];
      $class = $_POST['class'];
      $church = $_POST['church'];
      $email = $_POST['email'];
      
      $orig_file = $_FILES["avatar"]["tmp_name"];
      $ext = pathinfo($_FILES["avatar"]["name"], PATHINFO_EXTENSION);   
      $target_dir = 'uploads/';
      $destination = "$target_dir$fname$lname$dob.$ext";
      move_uploaded_file($orig_file,$destination);



     
      
     
      
      $isSuccess = $crud->insertRecord($fname, $lname, $dob, $gender, $class, $church, $destination, $email, $reg_date);

      if($isSuccess){
        SendEmail::sendMail($email, 'New User Registration','Thanks for registering the new user');

        echo'<h1 class= "text-center text-success"> Registration Successful </h1>';   
           
         

      }else{

        echo'<h1 class= "text-center text-dange"> Registration Failure </h1>';

         

      }

    }
?>


<div class="shocase" >
  <div class="showcase-text">
    <h5><?php echo $_POST['fname'] . ' ' .$_POST['lname'];?> </h5>
   
    <?php echo $dob.'---- '.$reg_date. '---- '.$class.' ----' .$church?>
  
    
    
</div>

<?php
?>


<br>
    <br>
    <br>

<?php require_once 'includes/footer.php'; ?>