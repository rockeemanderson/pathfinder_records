
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
<section class="showcase" >
    <div class="container-fluid p-0">
     <div class="row no-gutters">
     <div class="col-lg-6 order-lg-1 my-auto showcase-text">

<form method="post" action="success.php">
      

<div class="form-group">
    <label for="fname">First Name</label>
    <input type="text" class="form-control" id="fname" name="fname">
</div>

<div class="form-group">
    <label for="lname">Last Name</label>
    <input type="text" class="form-control" id="lname" name="lname">
</div>

<div class="form-group">
    <label for="dob">Date of Birth</label>
    <input type="text" class="form-control" id="dob" name="dob">
</div>

<div class= "form-group">
 <label for = "church_id"> Church:</label>
 <select class="form-control" id="church_id" name="church">
 <?php while($r = $results->fetch(PDO::FETCH_ASSOC)) {?>
 <option value="<?php echo $r['church_id'] ?>"><?php echo $r['church_name']; ?></option>
 <?php }?>
 </select>
 </div>

 <fieldset class="group">
 <legend>Choose earned honours</legend> 
 <ul class="checkbox">
 <?php while ($h = $hon ->fetch(PDO::FETCH_ASSOC)) {?>
              <li><input type= "checkbox" value="<?php echo $h['honour_id'] ?>"><?php echo $h['honour_name']; ?></input></li>
              <?php } ?>
              </ul> 
            </fieldset> 
            
<!---->

<div class= "form-group">
 <label for = "class_id"> Class:</label>
 <select class="form-control" id="class_id" name="class">
 <?php while($c = $gclass->fetch(PDO::FETCH_ASSOC)) {?>
 <option value="<?php echo $c['class_id'] ?>"><?php echo $c['class_name']; ?></option>
 <?php }?>
 </select>
 </div>
<button type="submit" name="submit" class="btn btn-primary btn-block">Submit</button>

</form>
<br>
<br>
<br>
 </div>
 </div>
 </div>
 </section>

            


            
              


<br>
<br>
<br>

<?php require_once 'includes/footer.php'; ?>