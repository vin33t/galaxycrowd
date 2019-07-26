<?php include('header.php');?>

			<div class="inner-banner" style="background:url('./images/about.jpg') no-repeat center center;background-size:cover;">
			</div>


			<div class="container-fluid block-md">
				<div class="row justify-content-center mb-5">
					<div class="col-md-6 text-center">
						<h2 class="after-underline after-underline-center mb-5">Contact Us</h2>
						<p class="mb-4">For any queries, Write in to us at <a href="#">support@galaxycrowd.com</a></p>
						<form method="post" action="">
							<div class="form-group">
								<input type="text" placeholder="Enter Name*" class="form-control" name="name" required/>
							</div>
							<div class="form-group">
								<input type="email" placeholder="Enter Email*" class="form-control" name="email" required/>
							</div>
							<div class="form-group">
								<textarea placeholder="Enter Message" class="form-control" name="message" style="height:130px;"></textarea>
							</div>
							<div class="form-group">
							 	<button type="submit" name="" class="btn btn-primary">Submit</button>
							</div>
						</form>
					</div>
				</div>
			</div>

<?php include('footer.php');?>