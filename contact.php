<?php include 'head.php';?>
<?php include 'header.php';?>
<div class="container">
	<div class="row text-center">
		<div class="col-sm-12">
			<h3>Wanna chat?</h3>
			<p>Fill out this handy dandy contact form to get the party started.</p>
			<div class="contactform center-block">
				<form role="form">
					<label for="inputName" class="sr-only">Name</label>
			        <input type="text" id="inputName" class="form-control" placeholder="Name" required autofocus></br>
			        <label for="inputEmail" class="sr-only">Email address</label>
			        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus></br>
			        <label for="inputSubject" class="sr-only">Subject</label>
			        <input type="text" id="inputSubject" class="form-control" placeholder="Subject" required></br>
			        <label for="inputMessage" class="sr-only">Message</label>
			        <textArea type="text" id="inputMessage" class="form-control" placeholder="Message" rows="10" required></textArea></br>
			        <button type="submit" class="btn btn-lg medium-blue-back white">Submit!</button>
				</form>
			</div>
		</div>
	</div>
</div>
<script>
$(document).ready(function() {
	$('#contact').addClass('active');
});
</script>
<?php include 'footer.php';?>