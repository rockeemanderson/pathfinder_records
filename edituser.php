<?php
    $title = 'Edit Record';
    $banner = 'Edit User Records';
    require_once 'includes/header.php'; 
    require_once 'includes/auth_check.php';
    require_once 'db/conn.php';
    $gChurch = $crud->getChurch();
    $hon = $crud->getAhonours();
    $gClass = $crud->getClass();
    $results = $crud->getUser();

    if(!isset($_GET['id']))
    {
        include 'includes/errormessage.php';
        header("Location: viewrecords.php");
        //echo 'error';

    }else{
        $id = $_GET['id'];
        $user=$crud->getUserDetails($id);

    

    
?>
<form method="post" action="edit-success.php">
	<section class="showcase" >
		<div id="left">
    <div class="container-fluid p-0">
     <div class="col-lg-6 order-lg-1 my-auto showcase-text">

<div class= "form-group">
    <input type = "hidden" name="user_id" value="ID: <?php echo $user['user_id']?>"/>
    <label for="fname">ID </label>
    <input type="text" class="form-control" value="<?php echo $user['user_id']?>" id="user_id" name="user_id" disabled>
</div>


<div class= "form-group">
    <input type = "hidden" name="fname" value="<?php echo $user['fname']?>"/>
    <label for="fname">First Name </label>
    <input type="text" class="form-control" value="<?php echo $user['fname']?>" id="fname" name="fname">
</div>

<div class= "form-group">
    <input type = "hidden" name="lname" value="<?php echo $user['lname']?>"/>
    <label for="lname">Last Name </label>
    <input type="text" class="form-control" value="<?php echo $user['lname']?>" id="lname" name="lname">
</div>

<div class="form-group">
	<label for ="gender">Gender </br></label>
<select name="gender" value="<?php echo $user['gender']?> "disabled>
    
    <option value="male">Male</option>
    <option value="female">Female</option>
  </select>
</div>

<div class="form-group">
	  <label for = "email"> E-mail</label> 
	  <input reqired type="text" name="email" value="<?php echo $user['email']?>" class="form-control" id="email">
  
    </div>
    
<!-- Datepicker as text field -->   


<div class="container">
		<div class="row">
	           	<form>
		            <div class="form-group">
                    <label for="dob">Date of Birth</label>
		                <div class='input-group date' id='dob'>
		                    <input required type='text' class="form-control" value="<?php echo $user['dob']?>" id="dob" name='dob' disabled>
		                    <span class="input-group-addon">
		                        <span class="glyphicon glyphicon-calendar"></span>
		                    </span>
		                </div>
		            </div>
		        </form>
	        
	    </div>
	</div>

<!-- Datepicker as text field --> 

 <div class= "form-group">
        <label for = "church"> Church:</label>
            <select class="form-control" value="<?php echo $user['church_n']?>" id="church" name="church">
            <?php while($r = $gChurch->fetch(PDO::FETCH_ASSOC)) {?>
            <option value="<?php echo $r['church_id'] ?>" <?php if($r['church_id'] ==  $user['church_id']) echo 'selected' ?>>
            <?php echo $r['church_name']; ?>
            </option>


            <?php }?>
            </select>
    </div>

<div class= "form-group">
        <label for = "class">Class</label>
            <select class="form-control" value="<?php echo $user['class']?>" id="class" name="class">
            <?php while($c = $gClass->fetch(PDO::FETCH_ASSOC)) {?>
            <option value="<?php echo $c['class_id'] ?>" <?php if($c ['class_id'] ==  $user ['class_id']) echo 'selected' ?>>
            <?php echo $c['class_name']; ?>
            </option>


            <?php }?>
            </select>
</div>
            </div>



<!-- Right Side -->
<div id="right"> 
 <div class="col-lg-6 order-lg-1 my-auto showcase-text">
 <!--<div class="custom-file">
	<label for="avatar">Upload Image</label>
	<label for="avatar" class="form-text-muted">*Optional</label>
	<br\>
	<input type="file" accept="image/*" class="custom-file-imput" id="avatar" name="avatar">
    <br/> -->
    
<img src="<?php echo empty($user['avatar_path']) ? "uploads/blank.jpg" : $user['avatar_path'];?>" class="rounded-circle" style="width:40%; height:40%"/>
</br></br><div class="custom-file">
	
	
	
 </div></br></br>
	
 <fieldset class="group">
 <legend>Choose earned honours</legend> 
 <ul class="checkbox">
 <?php while ($h = $hon ->fetch(PDO::FETCH_ASSOC)) {?>
              <li><input type= "checkbox" name = "honour_id"  value="<?php echo $h['honour_id'] ?>"><?php echo $h['honour_name']; ?></input></li>
              <?php } ?>
              </ul> 
            </fieldset> 
	
	
</div>
	
 </div>
 </div>
           
  <button type="submit" name="submit" class="btn btn-success">Save Changes</button>
  <a href="viewrecords.php" class="btn btn-default btn">Back to list</a>
 </section>
</form>
 </div>
 </div>
 </div>



   
    
  
  

  


            <?php }?>
            </div>
            </div>
    <br>
    <br>
    <br>

<?php require_once 'includes/footer.php'; ?>