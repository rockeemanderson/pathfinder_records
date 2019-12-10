<?php
    $title = 'View Records';
    require_once 'includes/header.php';
    require_once 'includes/auth_check.php';
    require_once 'db/conn.php';
   
    $results = $crud->getChurch();
    $hon = $crud->getAhonours();
    $gclass = $crud->getClass();
  
   
?>

    <table class="table">
        <thead class = "thead-dark">
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Date of Birth</th>
                    <th>Class Name</th>
                    <th>Church Name</th>                       
                </tr>
            </thead>
            
            <?php 
                while ($r = $results->fetch(PDO::FETCH_ASSOC)) {?>
            <tr> 
                    <td> <?php echo $r['user_id'] ?></td>
                    <td> <?php echo $r['fname'] ?></td>
                    <td> <?php echo $r['lname'] ?></td>
                    <td> <?php echo $r['dob'] ?></td>
                    <td> <?php echo $r['class_name'] ?></td>
                    <td> <?php echo $r['Church_name'] ?></td>
                    
                    <td>
                        <a href="view.php?id=<?php echo $r['attendee_id'] ?>" class="btn btn-dark">View</a>
                        <a href="edit.php?id=<?php echo $r['attendee_id'] ?>" class="btn btn-warning">Edit</a>
                        <a onclick="rturn confirm('Are you sure you want to delete this record?');" href="delete.php?id=<?php echo $r['attendee_id'] ?>" class="btn btn-danger">Delete</a>
                        
                    </td>
            </tr>
                <?php } ?>

    </table>


<br>
<br>
<br>

<?php require_once 'includes/footer.php'; ?>