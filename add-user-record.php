
<?php
$title = 'Record Registration';
$banner = 'Add new users below';
require_once 'includes/header.php'; 
require_once 'db/conn.php';
$results = $crud->getChurch();
$hon = $crud->getAhonours();
$gclass = $crud->getClass();
?>
 


<h1 class="text-center">Registration of user</h1>
<form method="post" action="success.php">
	<section class="showcase" >
		<div id="left">
    <div class="container-fluid p-0">
     <div class="col-lg-6 order-lg-1 my-auto showcase-text">
 

<div class="form-group">
    <label for="fname">First Name</label>
    <input type="text" class="form-control" id="fname" name="fname">
</div>

<div class="form-group">
    <label for="lname">Last Name</label>
    <input type="text" class="form-control" id="lname" name="lname">
</div>
<!-- Datepicker as text field -->   


<div class="container">
		<div class="row">
	           	<form>
		            <div class="form-group">
                    <label for="dob">Date of Birth</label>
		                <div class='input-group date' id='dob'>
		                    <input required type='text' class="form-control" name='dob'>
		                    <span class="input-group-addon">
		                        <span class="glyphicon glyphicon-calendar"></span>
		                    </span>
		                </div>
		            </div>
		        </form>
	        
	    </div>
	</div>
<div>
<!-- Datepicker as text field --> 
                
          


<div class= "form-group">
 <label for = "church_id"> Church:</label>
 <select class="form-control" id="church" name="church">
 <?php while($r = $results->fetch(PDO::FETCH_ASSOC)) {?>
 <option value="<?php echo $r['church_id'] ?>"><?php echo $r['church_name']; ?></option>
 <?php }?>
 </select>
 </div>


<!-- Move to edit page 
 <fieldset class="group">
 <legend>Choose earned honours</legend> 
 <ul class="checkbox">
 < ?php while ($h = $hon ->fetch(PDO::FETCH_ASSOC)) {?>
              <li><input type= "checkbox" name = "honour_id"  value="< ?php echo $h['honour_id'] ?>">< ?php echo $h['honour_name']; ?></input></li>
              < ?php } ?>
              </ul> 
            </fieldset> 
 
-->





<div class= "form-group">
 <label for = "class_id"> Class:</label>
 <select class="form-control" id="class_id" name="class_id">
 <?php while($c = $gclass->fetch(PDO::FETCH_ASSOC)) {?>
 <option value="<?php echo $c['class_id'] ?>"><?php echo $c['class_name']; ?></option>
 <?php }?>
 </select>
 </div>
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

	<div class="custom-file">
	<input type="file" accept="image/*" class="custom-file-imput" id="avatar" name="avatar">
	<label class="custom-file-label" for="avatar">Upload Image</label>
	
	<small id="avatar" class="form-text text-danger">*Uploading image is optional*</small>
 </div>
	

	
	
</div>
	
 </div>
 </div>



<button type="submit" name="submit" class="btn btn-primary btn-block">Submit</button>
 </section>
</form>
 </div>
 </div>
 </div>
 


<?php require_once 'includes/footer.php'; ?>