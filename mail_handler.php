<?php
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$comments=$_POST['comments'];
		
		
		$to='mylife.derrick@gmail.com';
		$subject='Form submission';
		$message="Name: ".$name."\n"."Phone: ".$phone."\n"."Wrote the following: "."\n\n".$comments;
		$headers="From: ".$email;
		
		
		if(mail($to, $subject, $message, $headers)){
			
			echo "<h1>Sent successfully! Thank you"." ".$name.", We will contact you shortly!</h1>";
			
			
			}
			
			else{
				echo "Something went wrong!";
				
				}
		$insertGoTo = "contact.html";
		header(sprintf("Location: %s", $insertGoTo));
		}
			
?>
<script type="text/javascript">location.href = 'contact.html';</script>