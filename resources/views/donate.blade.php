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

</style>
</head>
<body>
<!--Section: Contact v.2-->
<div class="contact">
<section class="mb-4">
	<div class="contact-form">
    <!--Section heading-->
    <h1 class="card-title text-success" style="text-align:center;">Donate Book</h1>
    <!--Section description-->
    <p class="text-center w-responsive mx-auto mb-5">Donate Book, Donate Smile.
</div>
    <div class="row">

        <!--Grid column-->
        <div class="col-md-9 mb-md-0 mb-5">
            <form id="contact-form" name="contact-form" action="#" method="POST">

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
						<label for="name" class="">First Name</label>
                            <input type="text" id="fname" name="fname" class="form-control"><br>
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                        <label for="name" class="">Last Name</label>
                            <input type="text" id="lname" name="lname" class="form-control"><br>
                            
                        </div>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
						<label for="name" class="">Mobile Number</label>
                            <input type="text" id="number" name="number" class="form-control" placeholder="+91"><br>
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                        <label for="name" class="">Email ID</label>
                            <input type="text" id="email" name="email" class="form-control" placeholder=".com"><br>
                        </div>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-0">
							<label for="subject" class="">Address</label>
                            <input type="text" id="address" name="address" class="form-control"><br>    
                        </div>
                    </div>
                </div>
                <!--Grid row-->

                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                <label for="donor" class="radio-inline">Donor Type</label>  <br>
                </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3">
                        <div class="md-form mb-0">
                  <input type="radio" value="optradio"> Indiviual 
                        </div>
                    </div>
              
                    <div class="col-md-3">
                        <div class="md-form mb-0">
                  <input type="radio" value="optradio"> School
                  </div>
                    </div>

                  <div class="col-md-3">
                        <div class="md-form mb-0">
                  <input type="radio" value="optradio"> Organization
                  </div>
                    </div>

                  <div class="col-md-3">
                        <div class="md-form mb-0">
                  <input type="radio" value="optradio"> Other
                                    </div>
                    </div>

                        </div>
                    </div>
                </div>
                  <br>
                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-9">

                        <div class="md-form">
							<label for="message">Book Condition</label>
                            <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                
                        </div>

                    </div>
                </div>
                <!--Grid row-->
                <br>
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-5">
                        <div class="md-form mb-0">
						<label for="name" class="">Book Category</label>
            <select class="form-control" id="sel1">
                            <option>NCERT</option>
                            <option>CBSE</option>
                            <option>ICSE</option>
                            <option>Academic</option>
                            <option>Others</option>
            </select><br>
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-4">
                        <div class="md-form mb-0">
                        <label for="name" class="">Number of Books</label>
                            <input type="text" id="lname" name="lname" class="form-control"><br>
                            
                        </div>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

            <div class="text-center text-md-center">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">Submit</button>
            </div>
            </form>
        <!--Grid column-->
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Successful!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Details Recorded! We would soon contact you!<br> Thank You for Donating!
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

