<?php
$title = 'Contact Us';
$banner = 'Youth Ministries Database for Clubs and Honours';
require_once 'includes/header.php'; 
require_once 'db/conn.php';



?>
	<h2>Contact Form</h2>
	
	<form class="form" action="MAILTO:test@testing.com" method="post" enctype = "text/html">
		
		<p class="name">
			<input type="text" name="name" id="name" placeholder="John Doe" />
			<label for="name">Name</label>
		</p>
		
		<p class="email">
			<input required pattern="/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/" type="email" name="email" id="email" placeholder="mail@example.com" />
			<label for="email">Email</label>
		</p>
		

	
		<p class="text">
			<textarea name="text" placeholder="Write something to us"></textarea>
		</p>
		
		<p class="submit">
			<input type="submit" value="Send" />
		</p>
	</form>

	</div>

</div>
      </div>
 





<?php include_once 'includes/footer.php'?>