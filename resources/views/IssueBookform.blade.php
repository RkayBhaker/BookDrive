@extends('layouts.templateBD')

@section('mainContent')
<html>
<head>

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

    <p class="text-center w-responsive mx-auto mb-5 text-secondary">Get Books & Keep Growing with Us and your Knowledge.
</div>
    <div class="row">

    @if(session('success'))
        <div class="alert alert-success" role="alert">
            {{session('success')}}
        </div>
    @endif
</div>
    <div class="row">
        <!--Grid column-->
        <div class="col-md-9 mb-md-0 mb-5">
            <form id="contact-form" action="{{ Route('issuebook.form') }}" method="POST">
                @csrf
                <!--Grid row-->
                <div class="row">


                <!--Grid column-->
                <div class="col-md-6">
                    <div class="md-form mb-0">
                        <label for="name" class="">Book Category</label>
                        <select class="form-control" id="sel1" name="bookCategory">
                            <option >Select Category....</option>
                                <option value="NCERT">NCERT</option>
                                <option value="CBSE">CBSE</option>
                                <option value="ICSE">ICSE</option>
                                <option value="MSBTE">MSBTE</option>
                                <option value="Others">Others</option>
                        </select>
                        <br>
                        @error('bookCategory')
                            <div class="alert alert-warning" role="alert">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                </div>

                        <!--Grid column-->

                         <!--Grid column-->
                         <div class="col-md-6">
                            <div class="md-form mb-0">
                            <label for="name" class="">Book Set</label>
                           
                        <select name="bookSet" class="form-control" id="sel1">
                                <option value="null" >Select Standard....</option>
                                <option value="Standard I">Standard I</option>
                                <option value="Standard II">Standard II</option>
                                <option value="Standard III">Standard III</option>
                                <option value="Standard IV">Standard IV</option>
                                <option value="Standard V">Standard v</option>
                        </select><br>
                        @error('bookSet')
                            <div class="alert alert-warning" role="alert">
                                {{$message}}
                            </div>
                        @enderror
                            </div>
                        </div>
                </div>
                        <!--Grid column-->

                        <div class="row">
                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
						<label for="name" class="">First Name</label>
                            <input type="name" id="firstname" name="fname" placeholder="Fist Name" class="form-control" ><br>
                            @error('fname')
                            <div class="alert alert-warning" role="alert">
                                {{$message}}
                            </div>
                        @enderror
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                        <label for="name" class="">Last Name</label>
                            <input type="text" id="lastname" name="lname" placeholder="Last Name" class="form-control"><br>
                            @error('lname')
                            <div class="alert alert-warning" role="alert">
                                {{$message}}
                            </div>
                        @enderror
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
                            <input type="text" id="number" name="phno" class="form-control" placeholder="+91" ><br>
                            @error('phno')
                            <div class="alert alert-warning" role="alert">
                                {{$message}}
                            </div>
                        @enderror
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                        <label for="name" class="">Email ID</label>
                            <input type="email" id="email" name="email" class="form-control" placeholder=".com" ><br>
                            @error('email')
                            <div class="alert alert-warning" role="alert">
                                {{$message}}
                            </div>
                        @enderror
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
                            @error('issuedate')
                            <div class="alert alert-warning" role="alert">
                                {{$message}}
                            </div>
                        @enderror
                        </div>
                    </div>
                <!-- </div> -->

                <!-- <div class="row"> -->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
							<label for="subject" class="">Return Date</label>
                            <input type="date" id="returnDate" name="returndate" class="form-control"><br>    
                            @error('returndate')
                            <div class="alert alert-warning" role="alert">
                                {{$message}}
                            </div>
                        @enderror
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
                            <textarea type="text" placeholder="Address" id="localAddress" name="address" rows="2" class="form-control md-textarea" minlength="10"></textarea><br>
                            @error('address')
                            <div class="alert alert-warning" role="alert">
                                {{$message}}
                            </div>
                        @enderror
                        </div>

                    </div>
                </div>
                <!--Grid row-->
                <br>

                <input type="checkbox" value="agreement signed I" name="agreement_I" ><label> I have I have read and agreed to <a href="terms_conds" style="color:blue;">Terms and Condition <i class="fa fa-link icon"></i></a></label><br>
                        @error('agreement_I')
                            <div class="alert alert-warning" role="alert">
                                {{$message}}
                            </div>
                        @enderror
                <input type="checkbox" value="agreement signed II" name="agreement_II" ><label> I have read and agreed to <a href="return" style="color:blue;"> Return Policy <i class="fa fa-link icon"></i></a></label>
                        @error('agreement_II')
                            <div class="alert alert-warning" role="alert">
                                {{$message}}
                            </div>
                        @enderror
                

                    
                <!--Grid row-->
                

            <div class="text-left text-md-center">
            <button type="submit" id="submitBtn" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">Submit</button>
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

