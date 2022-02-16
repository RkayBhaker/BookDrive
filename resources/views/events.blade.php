@extends('layouts.templateBD')

@section('mainContent')
<html>
<head>
<style>
/* .event_cards {
    margin-left:80px;
    margin-top:80px;
    margin-bottom:80px;
} */

p{
    color:black;
}

.news {
    width: 160px
}

.news-scroll a {
    text-decoration: none
}

.marq{
  cursor: pointer;
}

.marq::after{
  content:'';
  width: 100%;
  height: 2px;
  background-color: #0275d8;
  position: absolute;
  left:0;
  bottom:0;
}
#card-deck{
  display:grid;
  grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
}
#card-deck > .card{
  margin: 10px 15px;
}
.card-text{
  text-indent:16px;
  text-align:justify;
  text-justify:inter-word;
}

    </style>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>

<div class="container mt-5" >
    <div class="row" >
        <div class="col-md-10 mx-auto">
            <div class="marq">
            <div class="d-flex justify-content-between align-items-center breaking-news bg-wheat">
                <marquee class="news-scroll" behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();"> Events are delayed due to lockdown! New Events Updates, Coming Soon! </marquee>
            </div>
            </div>
        </div>
    </div>
</div>


<!-- Event Card section start -->
<div class="card-deck mx-auto py-4 px-2" id="card-deck">

  <!-- card 1 -->
  <div class="card img-thumbnail mx-auto" style="max-width: 280px;">
    <img class="card-img-top" height="250px" src="img8.png" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Little Angels Public School</h5>
      <p class="card-text">100 sets of textbooks of Standard I to V were disbruted. The smile on the face of the kids was worth a billions. Thanking Mr.Raman, Principal of Little Angels Public School for reaching out to us and giving us an honor to help this childrens.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted"><i class="fas fa-calendar-alt mr-2"></i> Mon, Feb 11th 2019 | Bangalore, Karnataka</small>
    </div>
  </div>

  <!-- card 2 -->
  <div class="card img-thumbnail mx-auto" style="max-width: 280px;">
    <img class="card-img-top" height="250px" src="img7.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">V.B.R English Medium School</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted"><i class="fas fa-calendar-alt mr-2"></i> Fri, May 17th 2019 | Vadodara, Gujarat</small>
    </div>
  </div>

  <!-- card 3 -->
  <div class="card img-thumbnail mx-auto" style="max-width: 280px;">
    <img class="card-img-top" height="250px" src="img6.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">St.Joseph Secondary School</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted"><i class="fas fa-calendar-alt mr-2"></i>Mon, Aug 12th 2019 | Sant Nagar, Delhi</small>
    </div>
  </div>

  <!-- card 4 -->
  <div class="card img-thumbnail mx-auto" style="max-width: 280px;">
    <img class="card-img-top" height="250px" src="img9.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Pioneer School for Girls</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted"><i class="fas fa-calendar-alt mr-2"></i>Wed, Nov 20th 2019 | Kalbadevi, Mumbai(Maharashtra)</small>
    </div>
  </div>
</div>
<!-- Event Card section end -->

</body>
</html>
<!--Section: Contact v.2-->
@endsection

