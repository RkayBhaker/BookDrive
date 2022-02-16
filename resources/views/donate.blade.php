@extends('layouts.templateBD')

@section('mainContent')
<html>
<head>
	<style>
.contact{
		
	/* padding-left: 200px; */
	padding-bottom: 50px;
    
}

#contact-form{
    padding : 12px 80px;
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

.button{
    background-color:#4e67ca;
    border: #4e67ca;
    border-radius: 8px;
    color:white;
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
    width:150px;
}

.button:hover {
    background-color:#7386D5;
    border: #4e67ca;
}

</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>

    

    $(function() {
        $("#donorTypeSection").hide();
        $("input[name='donorType']").click(function() {
            if ($("#donorTypeOther").is(":checked")) {
                $("#donorTypeSection").show();
            } else {
                $("#donorTypeSection").hide();
            }
        });
    });

</script>
</head>
<body>
<!--Section: Contact v.2-->
<div class="contact">
<section class="mb-4 ">
	<div class="contact-form">
        <!--Section heading-->
        <h1 style="text-align:center; color:#4e67ca;">Donate Book</h1>
        <!--Section description-->
        <p class="text-center w-responsive mx-auto mb-4 text-secondary">Donate Book, Donate Smile.
        <hr>
    </div>

    @if(session('success'))
        <div class="alert alert-success" role="alert">
            {{session('success')}}
        </div>
    @endif

    <div class="row">

        <!--Grid column-->
        <div class="col-md-12 mb-md-0 mb-5">
            <form id="contact-form" name="contact-form" action="{{ Route('donar.details') }}" method="POST">
                @csrf
                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
						<label for="name" class="">First Name</label>
                            <input type="text" id="fname" name="fname" class="form-control" placeholder="First Name" ><br>
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
                            <input type="text" id="lname" name="lname" class="form-control" placeholder="Last Name" ><br>
                            
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
                            <input type="text" id="number" name="phNo" class="form-control" placeholder="+91"><br>
                            
                                @error('phNo')
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
                            <input type="text" id="email" name="email" class="form-control" placeholder="abc@xyz.com"><br>
                            
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
                    <div class="col-md-12">
                        <div class="md-form mb-0">
							<label for="subject" class="">Address</label>
                            <input type="text" id="address" name="address" class="form-control" placeholder="Full Address" ><br>    
                            
                                @error('address')
                                    <div class="alert alert-warning" role="alert">
                                        {{$message}}
                                    </div>
                                @enderror
                            
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
                            <input type="radio" name="donorType" value="Indiviual" id="Indiviual" > Indiviual 
                        </div>
                    </div>
              
                    <div class="col-md-3">
                        <div class="md-form mb-0">
                            <input type="radio" name="donorType" value="School"> School
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="md-form mb-0">
                            <input type="radio" name="donorType" value="Organization"> Organization
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="md-form mb-0">
                            <input type="radio" name="donorType" id="donorTypeOther" value="Other"> Other
                        </div>
                    </div>
                </div>
                <br>
                <div class="row" id="donorTypeSection">
                    <div class="col">
                        <label for="name" class="">Other Donor Type</label>
                        <input type="text" id="orgType" name="orgType" class="form-control" placeholder="Enter the Donor tye . . ." ><br>
                            @error('orgType')
                                <div class="alert alert-warning" role="alert">
                                    {{$message}}
                                </div>
                            @enderror
                    </div>
                </div>
                @error('donorType')
                    <div class="alert alert-warning" role="alert">
                        {{$message}}
                    </div>
                @enderror
                  
                <!--Grid row-->
                <div class="row">
                    <!--Grid column-->
                    <div class="col-md-12">
                        <div class="md-form">
							<label for="message">Book Condition</label>
                            <div class="form-check">
                                <input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="Good Condition" name="option1" aria-label="...">
                                Good Condition 
                            </div>
                            <div class="form-check">
                                <input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="Good Pages but Poor Binding" name="option2" aria-label="...">
                                Good Pages but Poor Binding 
                            </div>
                            <div class="form-check">
                                <input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="Good Pages but Poor Cover" name="option3" aria-label="...">
                                Good Pages but Poor Cover 
                            </div>
                            <div class="form-check">
                                <input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="Good Pages but No Cover" name="option4" aria-label="...">
                                Good Pages but No Cover
                            </div>
                            <br>
                            
                                @error('message')
                                    <div class="alert alert-warning" role="alert">
                                        {{$message}}
                                    </div>
                                @enderror
                            
                        </div>
                    </div>
                </div>
                <!--Grid row-->
                
                <div class="row">
                    <!--Grid column-->
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                        <label for="name" class="">Number of Books</label>
                            <input type="text" id="noOfBook" name="noOfBook" class="form-control" placeholder="Total no. of books" >
                            <br>
                                @error('noOfBook')
                                    <div class="alert alert-warning" role="alert">
                                        {{$message}}
                                    </div>
                                @enderror
                        </div>
                    </div>
                    <!--Grid column-->
                </div>
                <!--Grid row-->
                <br>
                <div class="row">
                    <div class="col">
                        <div class="text-center text-md-center float-right">
                            <button type="submit" class="button" data-toggle="modal" data-target="#exampleModalCenter">Submit</button>
                        </div>
                    </div>
                </div>
    </form>
</div>

</section>
</div>
</body>
</html>
<!--Section: Contact v.2-->
@endsection

