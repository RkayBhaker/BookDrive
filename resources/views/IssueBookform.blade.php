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
</head>
<body>
<!--Section: Contact v.2-->
<div class="contact">
<section class="mb-4">
	<div class="contact-form">
    <!--Section heading-->
    <h1 style="text-align:center; margin-top: 9%; color:#4e67ca;">Issue Book</h1>
    <!--Section description-->

    <p class="text-center w-responsive mx-auto mb-3 text-secondary">Get Books & Keep Growing with Us and your Knowledge. </p>
    <hr>
</div>

    @if(session('success'))
        <div class="alert alert-success" role="alert">
            {{session('success')}}
            <script>
                $(function() {
                    $('#exampleModalCenter').modal('show');
                });
            </script>
        </div>
    @endif

<!-- <hr> -->

<!-- <div class="m-5"> -->
    <?php
        // print_r(session()->get('uniqueOrderId'));
        // print_r(session('cart'));
    ?>
<!-- </div>

<hr> -->

    <div class="row">
        <!--Grid column-->
        <div class="col-md-9 mb-md-0 mb-5">
            <form id="contact-form" action="{{Route('issuebook.form')}}" method="POST">
                @csrf
                    <!--Grid column-->
                    <div class="row">
                    <!--Grid column-->
                    <input type="text" id="orderId" name="orderId" style="display:none;" value="@php echo rand().'bookdrive' @endphp">
                    <div class="col-md-6">
                        <div class="md-form mb-0">
						<label for="name" class="">First Name</label>
                            <input type="name" id="firstname" name="fname" placeholder="First Name" class="form-control" ><br>
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
                            <input type="date" id="issueDate" name="issuedate" min="2022-01-10" max="2022-02-10" onchange="myfun()" class="form-control"><br>    
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
                            <p id="returnDate" name="returndate">
                                Select the Issue Date
                            </p>
                            <input type="text" name="returndate" id="returnDate1" style="display:none;">
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
                <div class="row">
                    <div class="col">
                        <div class="text-center text-md-center float-right">
                            <button type="submit" class="button">Submit</button>
                        </div>
                    </div>
                </div>

            <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Payment</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Payment Mode : Cash On Delivery
                
                <div class="alert alert-info mt-4" role="alert">Note ! We will share all infomation throught email.</div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
        </div>

            <!-- <div class="text-left text-md-center">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">Reset</button>
                </div> -->
            </form>
        <!--Grid column-->

</section>
</div>
</body>

<script>
    function myfun() {
      let cal1 = new Date(document.querySelector("#issueDate").value);

      let oldDate = cal1;

      oldDate.setFullYear(oldDate.getFullYear() + parseInt(1));
      console.log(oldDate.getDay());
      console.log(oldDate.getMonth());
    //   oldDate.setFullYear(oldDate.getFullYear() + parseInt(1));
// 2022+1 = 2023
// getDate() == day
// getMonth() == month
// getFullYear() == year
      
      document.getElementById("returnDate").textContent = oldDate;
      document.getElementById("returnDate1").setAttribute('value',oldDate);
      
    }
</script>

</html>
<!-- Section: Contact v.2 -->
@endsection

