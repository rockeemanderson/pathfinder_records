<?php
    $title = 'View Records';
    $banner = 'All the records for registered members';
    require_once 'includes/header.php';
    require_once 'includes/auth_check.php';
    require_once 'db/conn.php';
   
    $gChurch = $crud->getChurch();
  //  $hon = $crud->getAhonours();
    $gClass = $crud->getClass();
    $results = $crud->getUser();
  
   
?>

    <table class="table">
        <thead class = "thead-dark">
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Date of Birth</th>
                    <th>Class Level</th>
                    <th>Church Name</th>
                    <th>Operation</th>                       
                </tr>
            </thead>
            
            <?php 
                while (($r = $results->fetch(PDO::FETCH_ASSOC))&&($c=$gClass->fetch(PDO::FETCH_ASSOC)))  {?>
            <tr> 
                    <td> <?php echo $r['user_id'] ?>    </td>
                    <td> <?php echo $r['fname'] ?>      </td>
                    <td> <?php echo $r['lname'] ?>      </td>
                    <td> <?php echo $r['dob'] ?>        </td>
                    <td> <?php echo $c['class_name'] ?> </td>
                    <td> <?php echo $r['church_name'] ?></td>
                    
                    <td>
                        <a href="edituser.php?id=<?php echo $r['user_id'] ?>" class="btn btn-warning">Edit</a>
                        <a onclick="rturn confirm('Are you sure you want to delete this record?');" href="delete.php?id=<?php echo $r['user_id'] ?>" class="btn btn-danger">Delete</a>
                        
                    </td>
            </tr>
                <?php } ?>

    </table>


<br>
<br>
<br>

<?php require_once 'includes/footer.php'; ?>