@extends('layouts.templateBD')

@section('mainContent')
<html>
<head>
	<style>
.contact{
		
	padding-left: 200px;
	padding-bottom: 50px;
}

.contact-form{
		
		padding-right: 200px;
	}

.file {
  background-color:#4e67ca;
    border: #4e67ca;
    border-radius: 8px;
    color:white;
}

input[type=file]::file-selector-button {
  border: 2px solid #4e67ca;
  padding: .2em .4em;
  border-radius: .2em;
  background-color:  #7386D5;
}

</style>
</head>
<body>
<!--Section: Contact v.2-->
<div class="contact">
<section class="mb-4">
	<div class="contact-form">
    <!--Section heading-->
    <h1 style="text-align:center;color:#4e67ca;">Contact Us</h1>
    <!--Section description-->
    <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? 
		Please do not hesitate to contact us. <br>Our team will come back to you within a matter of hours to help you. 
		We would love to hear from you!</p>
</div>
    <div class="row">

        <!--Grid column-->
        <div class="col-md-9 mb-md-0 mb-5">
            <form id="contact-form" name="contact-form" action="mail.php" method="POST">

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
						<label for="name" class="">Your Name</label>
                            <input type="text" id="name" name="name" class="form-control"><br>
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
						 	<label for="email" class="">Your Email</label>
                            <input type="text" id="email" name="email" class="form-control"><br>
                            
                        </div>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-0">
							<label for="subject" class="">Subject</label>
                            <input type="text" id="subject" name="subject" class="form-control"><br>    
                        </div>
                    </div>
                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-12">

                        <div class="md-form">
							<label for="message">Your Message</label>
                            <textarea type="text" id="message" name="message" rows="3" class="form-control md-textarea"></textarea><br>
                            
                        </div>

                    </div>
                </div>
                 <!--Grid row-->
                 <div class="row">

<!--Grid column-->
                  <div class="col-md-12">
                  <div class="md-form">
                    <label for="message">Upload File</label>
                    <input type="file" class="form-control-file" id="exampleFormControlFile1">
</form>
<br>
            <div class="text-center text-md-center"><br>
            <button type="button" class="button" data-toggle="modal" data-target="#exampleModalCenter">Submit</button>
        <!--Grid column-->
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Contact Us</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Thank you for Contacting Us! We'll get back at you soon!
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
        
    </div>

</section>
</div>
</body>
</html>
<!--Section: Contact v.2-->
@endsection

