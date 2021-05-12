<?php include 'header.php';?>
<div class="container">

<h1 class="title">Contact</h1>


<!-- form -->
<div class="contact">



       <div class="row">
       	<div class="col-sm-12">
       	<div class="map">
       	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.9004324689913!2d105.78309781488355!3d21.03666958599412!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab358396c7a7%3A0x8c0029a430be510!2zWHXDom4gVGjhu6d5LCBE4buLY2ggVuG7jW5nIEjhuq11LCBD4bqndSBHaeG6pXksIEjDoCBO4buZaSwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1620837279202!5m2!1svi!2s" width="100%" height="300" frameborder="0"></iframe>	
       	</div>


		<div class="col-sm-6 col-sm-offset-3">
			<div class="spacer">   		

       		<h4>Write to us</h4>
			<form role="form" action="contact-success.php" method="post">
			<div class="form-group">	
			<input type="text" class="form-control" id="name" placeholder="Name" name="name">
			</div>
			<div class="form-group">
			<input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
			</div>
			<div class="form-group">
			<input type="phone" class="form-control" id="phone" placeholder="Phone" name="phone">
			</div>
			<div class="form-group">
			<textarea type="email" class="form-control"  placeholder="Message" rows="4" name="message"></textarea>
			</div>
					
			<button type="submit" class="btn btn-default">Send</button>
			</form>
			</div>


       	</div>





       </div>
</div>
</div>
<!-- form -->

</div>
<?php include 'footer.php';?>
