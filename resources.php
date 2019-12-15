<?php
$title = 'Resources';
$banner= 'Various Resources from the Youth Ministries Department';
require_once 'includes/header.php'; 
require_once 'db/conn.php';
?>

 
<?php
$directory = "resources/Adventurer";

if (is_dir($directory)){
  if ($opendirectory = opendir($directory)){
    while (($file = readdir($opendirectory)) !== false){
      echo "<a href='$directory" . "$file'>$file$</a>"."<br>";
    }
    closedir($opendirectory);
  }
}
?>






<?php require_once 'includes/footer.php'; ?>

