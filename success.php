<?php
    $title = 'Success';
    $banner = '';
    require_once 'includes/header.php'; 
    require_once 'db/conn.php';
    $reg_date = date("Y-m-d");

    if(isset($_POST['submit'])){
      $fname = $_POST['fname'];
      $lname = $_POST['lname'];
      $dob = $_POST['dob'];
     // $honours = $_POST['honour_id'];
      $class = $_POST['class_id'];
      $church = $_POST['church'];
     
      
     
      
      $isSuccess = $crud->insertRecord($fname, $lname, $dob, $class, $church, $reg_date);

      if($isSuccess){
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