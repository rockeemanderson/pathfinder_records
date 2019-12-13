<?php
    $title = 'View Member';
    require_once 'includes/header.php'; 
    //require_once 'includes/auth_check.php';
    require_once 'db/conn.php';
    //$results = $crud->getusers();

    //get user by id

    if (!isset($_GET['id'])){
        echo "<h1 class='text-danger'> Please check details and try again</h1>";
    }else {  

        $id = $_GET['id'];
        $result=$results = $crud->getUserDetails($id);
        $gClass = $gClass = $crud->getClass($id);
        $gChurch = $crud->getChurch();
        while (($r = $results->fetch(PDO::FETCH_ASSOC)) &($c = $gClass->fetch(PDO::FETCH_ASSOC))&($l = $gChurch->fetch(PDO::FETCH_ASSOC)))
    
?>

<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?php echo $results['fname'] . ' ' .$results['lname'];?></h5>
    <h6 class="subtitle mb-2 text-muted"><?php  echo $results['name']; ?></h6>
    <p class="card-text">Date of Birth:<?php  echo $results['dob']; ?></p>
    <p class="card-text">   
                            <?php echo $gClass['class_name'] ?> 
                            <?php echo $gChurch['church_name'] ?> ?></p>
  
  </div>
  </div>
<br/>

  <a href="viewrecords.php" class="btn btn-info">Back to list</a>
  <a href="edit.php?id=<?php echo $result['user_id'] ?>" class="btn btn-warning">Edit</a>
  <a onclick="rturn confirm('Are you sure you want to delete this record?');" href="delete.php?id=<?php echo $result['user_id'] ?>" class="btn btn-danger">Delete</a>



<?php } ?>
<br>
<br>
<br>

<?php require_once 'includes/footer.php'; ?>