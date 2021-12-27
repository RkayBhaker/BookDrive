@extends('layouts.templateBD')

@section('mainContent')
<html>
<head>
	<style>
.event_cards {
    margin-left:80px;
    margin-top:80px;
    margin-bottom:80px;
}

p{
    color:black;
}

.news {
    width: 160px
}

.news-scroll a {
    text-decoration: none
}

.marq {
    margin-left:150px;
    border-width:5px;  
    border-style:groove;
}
    </style>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>

<div class="container mt-5" >
    <div class="row" >
        <div class="col-md-10">
            <div class="marq">
            <div class="d-flex justify-content-between align-items-center breaking-news bg-white">
                <marquee class="news-scroll" behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();"> Events are delayed due to lockdown! New Events Updates, Coming Soon! </marquee>
            </div>
            </div>
        </div>
    </div>
</div>




<div class="event_cards">
<div class="card-deck">
<div class="card mb-3" style="max-width: 540px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="img6.jpg" class="card-img" alt="..." height="130px" width="200px" style="margin-top:38px">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Little Angels Public School</h5>
        <time datetime="2020-05-25 12:00:00">
						<i class="fas fa-calendar-alt mr-2"></i>Mon, Feb 11th 2019
					</time>
                    <br>
                    Bangalore, Karnataka
        <p>100 sets of textbooks of Standard I to V were disbruted. The smile on the face of the kids was worth a billions. Thanking Mr.Raman, Principal of Little Angels Public School for reaching out to us and giving us an honor to help this childrens.</p>
      </div>
    </div>
  </div>
</div>

<div class="card mb-3" style="max-width: 540px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="img7.jpg" class="card-img" alt="..." height="130px" width="200px" style="margin-top:38px">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">V.B.R English Medium School</h5>
        <time datetime="2020-05-25 12:00:00">
						<i class="fas fa-calendar-alt mr-2"></i>Fri, May 17th 2019
					</time>
                    <br>
                    Vadodara, Gujarat
        <p>This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
</div>
</div>
<br>

<div class="card-deck">
<div class="card mb-3" style="max-width: 540px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="img8.png" class="card-img" alt="..." height="130px" width="200px" style="margin-top:38px">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">St.Joseph Secondary School</h5>
        <time datetime="2020-05-25 12:00:00">
						<i class="fas fa-calendar-alt mr-2"></i>Mon, Aug 12th 2019
					</time>
                    <br>
                    Sant Nagar, Delhi
        <p>This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
</div>

<div class="card mb-3" style="max-width: 540px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="img9.jpg" class="card-img" alt="..." height="130px" width="200px" style="margin-top:38px">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Pioneer School for Girls</h5>
        <time datetime="2018-05-25 12:00:00">
						<i class="fas fa-calendar-alt mr-2"></i>Wed, Nov 20th 2019
					</time><br>
                     Kalbadevi, Mumbai, Maharashtra
        <p>This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
</div>
</div>



</div>




</body>
</html>
<!--Section: Contact v.2-->
@endsection

