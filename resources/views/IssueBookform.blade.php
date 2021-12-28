@extends('layouts.templateBD')

@section('mainContent')
<html>
<head>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
	<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

.contact{
		
	padding-left: 200px;
	padding-bottom: 50px;
}

.contact-form{
		
		padding-right: 200px;
	}

    .error
{
  color: red;
  size: 80%
}
.hidden
{
  display:none;
}

#submitBtn {
  background-color: dodgerblue;
  color: white;
  padding: 15px 20px;
  border: none;
  cursor: pointer;
  width: 40%;
  opacity: 0.9;
}

#submitBtn:hover {
  opacity: 1;
}

</style>
</head>
<body>
<!--Section: Contact v.2-->
<div class="contact">
<section class="mb-4">
	<div class="contact-form">
    <!--Section heading-->
    <h1 style="text-align:center; margin-top: 9%; color:#4e67ca;">Issue Book</h1>
    <!--Section description-->
    <p class="text-center w-responsive mx-auto mb-5 text-secondary">Get Book & Keep Growing with Us and your Knowledge.
</div>
    <div class="row">

        <!--Grid column-->
        <div class="col-md-9 mb-md-0 mb-5">
            <form id="contact-form" name="contact-form" action="/action.php" method="POST">

                <!--Grid row-->
                <div class="row">


                        <!--Grid column-->
                        <div class="col-md-6">
                            <div class="md-form mb-0">
                            <label for="name" class="">Book Category</label>
                <select class="form-control" id="sel1">
                    <option value="">Select Category....</option>
                                <option>NCERT</option>
                                <option>CBSE</option>
                                <option>ICSE</option>
                                <option>MSBTE</option>
                                <option>Others</option>
                </select><br>
                            </div>
                        </div>

                        <!--Grid column-->

                         <!--Grid column-->
                         <div class="col-md-6">
                            <div class="md-form mb-0">
                            <label for="name" class="">Book Set</label>
                           
                <select class="form-control" id="sel1">
                 <option value="">Select Standard....</option>
                                <option>Standard I</option>
                                <option>Standard II</option>
                                <option>Standard III</option>
                                <option>Standard IV</option>
                                <option>Standard v</option>
                                <option>Standard VI</option>
                                <option>Standard VII</option>
                                <option>Standard VIII</option>
                                <option>Standard IX</option>
                                <option>Standard X</option>
                                <option>Standard XI</option>
                                <option>Standard XII</option>
                </select><br>
                            </div>
                        </div>
                </div>
                        <!--Grid column-->

                        <div class="row">
                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
						<label for="name" class="">First Name</label>
                            <input type="name" id="firstname" name="fname" placeholder="Fist Name" class="form-control" required><br>
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                        <label for="name" class="">Last Name</label>
                            <input type="text" id="lastname" name="lname" placeholder="Last Name" class="form-control"><br>
                            
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
                            <input type="text" id="number" name="number" class="form-control" placeholder="+91" maxlength="10" minlength="10" required><br>
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                        <label for="name" class="">Email ID</label>
                            <input type="email" id="email" name="email" class="form-control" placeholder=".com" required><br>
                        </div>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">
                    <div class="col-md-6">
                        <div class="md-form mb-0">
							<label for="subject" class="">Issue Date</label>
                            <input type="date" id="issueDate" name="issuedate" class="form-control"><br>    
                        </div>
                    </div>
                <!-- </div> -->

                <!-- <div class="row"> -->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
							<label for="subject" class="">Return Date</label>
                            <input type="date" id="returnDate" name="returndate" class="form-control"><br>    
                        </div>
                    </div>
                </div>
              
                  <br>
                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-12">

                        <div class="md-form">
							<label for="message">Address</label>
                            <textarea type="text" id="localAddress" name="address" rows="2" class="form-control md-textarea" minlength="10"></textarea>
                
                        </div>

                    </div>
                </div>
                <!--Grid row-->
                <br>

                <input type="checkbox" required><label> I have I have read and agreed to <a href="terms_conds" style="color:blue;">Terms and Condition <i class="fa fa-link icon"></i></a></label><br>
                <input type="checkbox" required><label> I have read and agreed to <a href="return" style="color:blue;"> Return Policy <i class="fa fa-link icon"></i></a></label>
                

                    
                <!--Grid row-->
                

            <div class="text-left text-md-center">
            <button type="button" id="submitBtn" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">Submit</button>
            </div>

            <!-- <div class="text-left text-md-center">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">Reset</button>
                </div> -->
            </form>
        <!--Grid column-->

</section>
</div>
</body>
</html>
<!-- Section: Contact v.2 -->
@endsection

