<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment 2</title>
    <link rel="stylesheet" href="CSS/contactUsForm.css">
</head>
<body>
    <form method="POST" action="submissionForm.php" autocomplete="off">
		<div class="container">
			<div class="contact-box">
				<div class="left">
					<img src="./Picture/Contact_us.jpeg" alt="">
				</div>
				<div class="right">
					<h2>Contact Us</h2>
					<input type="text" name="name" class="field" placeholder="Full Name">
					<input type="text" name="email" class="field" placeholder="Email">
					<input type="text" name="phone" class="field" placeholder="Phone">
					<textarea placeholder="Message" name="message" class="field"></textarea>
					<button class="btn">Submit</button>
				</div>
			</div>
		</div>
	</form>
</body>
</html>