@extends('layouts.templateBD')

@section('mainContent')

<style>
  .aboutus-section {
    padding: 5px 5px;
  }

  .dev-card,
  .aboutus-title {
    font-size: 40px;
    letter-spacing: 0;
    line-height: 32px;
    padding: 0 0 11px;
    position: relative;
    text-transform: uppercase;
    color: #4e67ca;
    align: center;
  }

  .aboutus-text {
    color: black;
    font-size: 30px;
    line-height: 22px;
    margin: 0 0 35px;
    text-align: justify;
  }


  h1 {
    margin-top: 0;
    font-size: 3rem;
    display: inline-block;
  }

  h1 div {
    position: relative;
    float: left;
  }

  h1 div:first-child {
    color: #3498db;
    margin-right: 1rem;
  }

  /* PROFIL */
  .blog .carousel-indicators {
    left: 0;
    top: auto;
    bottom: -40px;

  }

  /* The colour of the indicators */
  .blog .carousel-indicators li {
    background: #a3a3a3;
    border-radius: 50%;
    width: 8px;
    height: 8px;
    margin-bottom: 10px;

  }

  .blog .carousel-indicators .active {
    background: #707070;
    margin-bottom: 10px;
  }

  .our-team-section {
    position: relative;
    padding-top: 40px;
    padding-bottom: 40px;
  }

  .our-team-section:before {
    position: absolute;
    top: -0;
    left: 0;
    content: " ";
    background: url(img/service-section-bottom.png);
    background-size: 100% 100px;
    width: 100%;
    height: 100px;
    float: left;
    z-index: 99;
  }

  .our-team {
    margin: auto;
    padding: 0 0 40px;
    max-width: 280px;
    background: #f9f9f9;
    text-align: center;
    overflow: hidden;
    position: relative;
    border-bottom: 5px solid #4e67ca;
  }

  .our-team .pic {
    display: inline-block;
    width: 130px;
    height: 130px;
    margin-bottom: 50px;
    z-index: 1;
    position: relative;
  }

  .our-team .pic:before {
    content: "";
    width: 100%;
    height: 100%;
    border-radius: 50%;
    background: #4e67ca;
    position: absolute;
    bottom: 135%;
    right: 0;
    left: 0;
    opacity: 1;
    transform: scale(3);
    transition: all 0.3s linear 0s;
  }

  .our-team:hover .pic:before {
    height: 100%;
    background: #4e67ca;
  }

  .our-team .pic:after {
    content: "";
    width: 100%;
    height: 100%;
    border-radius: 50%;
    background: #ffffff00;
    position: absolute;
    top: 0;
    left: 0;
    z-index: 1;
    transition: all 0.3s linear 0s;
  }

  .our-team:hover .pic:after {
    background: #145889;
  }

  .our-team .pic img {
    width: 100%;
    height: 100%;
    border-radius: 50%;
    transform: scale(1);
    transition: all 0.9s ease 0s;
    box-shadow: 0 0 0 14px #f7f5ec;
    transform: scale(0.7);
    position: relative;
    z-index: 2;
  }

  .our-team:hover .pic img {
    box-shadow: 0 0 0 14px #f7f5ec;
    transform: scale(0.8);
  }

  .our-team .team-content {
    margin-bottom: 30px;
  }

  .our-team .title {
    font-size: 22px;
    font-weight: 700;
    color: #4e5052;
    letter-spacing: 1px;
    text-transform: capitalize;
    margin-bottom: 5px;
  }

  .our-team .post {
    display: block;
    font-size: 15px;
    color: #4e5052;
    text-transform: capitalize;
  }

  .our-team:hover .social {
    bottom: 0;
  }

  .our-team .social li {}

  .our-team .social li a {
    display: block;
    padding-top: 6px;
    font-size: 15px;
    color: #fff;
    transition: all 0.3s ease 0s;
  }

  .our-team .social li a:hover {
    color: #145889;
    background: #f7f5ec;
  }

  @media only screen and (max-width: 990px) {
    .our-team {
      margin-bottom: 10px;
    }
  }
</style>

<body>

  <div class="aboutus-section">
    <div class="container">
    <h2 class="aboutus-title">About Us</h2>
      <div class="row">
        <div class="col-md-6 col-xs-12">
          <div class="aboutus">
            <p class="aboutus-text">India is advancing towards development but illiteracy continues to plague a large
              section of the people in India. Lakhs of children don???t get an opportunity to go to school or attend
              higher qualifications due to severe financial problems. Even if these students attend government schools
              and colleges which provide free education, there is still a problem of unable to affording books to make
              this happen. So, we have taken a step with our project ???BookDrive??? for these unprivileged students to have
              chance of better education.
            </p>
          </div>
        </div>
        <div class="col-md-6 col-xs-12">
          <p class="aboutus-text">We are students of IBM Adance Diploma Course undergoing an Internship
            under IBM. This website is a project work for the Internship of Group 44 OJT under the guidance of Edunet
            Mentor and IBM Mentor. The objective of this project is to create a portal which allows users to donate
            their old books for the unprivileged student and those books could be issued to those students in need, free
            of cost. </p>
        </div>
      </div>
    </div>
  </div>



  <div class="container mb-5">
    <div class="row blog">
      <h2 class="dev-card center mx-auto text-center py-4" style="color:#4e67ca;">Our Team Members</h2>
      <p style="color:black;" class="px-4"> We are different. We were raised in various towns,
        in different families, we love different food.
        But we have a thing that is common. Our Passion for work and learning new everyday. We are a team, and also a
        family.</p>
      <div class="col-md-12">
        <div id="blogCarousel" class="carousel slide" data-ride="carousel">

          <ol class="invisible carousel-indicators">
            <li data-target="#blogCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#blogCarousel" data-slide-to="1"></li>
          </ol>

          <!-- Carousel items -->
          <div class="carousel-inner">

            <div class="carousel-item active">
              <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                  <div class="our-team">
                    <div class="pic">
                      <img src="photo.jpg">
                    </div>
                    <div class="team-content">
                      <h3 class="title" style="font-size:10px;">Pooja <br> Hatankar</h3>
                      <span class="post">NSTI MUMBAI</span>
                    </div>
                  </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                  <div class="our-team">
                    <div class="pic">
                      <img src="sarwan.jpeg">
                    </div>
                    <div class="team-content">
                      <h3 class="title">Shrawan Sharma</h3>
                      <span class="post">NSTI MUMBAI</span>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                  <div class="our-team">
                    <div class="pic">
                      <img src="IMG_20181219_161047.jpeg">
                    </div>
                    <div class="team-content">
                      <h3 class="title">Rakesh<br><br></h3>
                      <span class="post">NSTI BANGLORE</span>
                    </div>
                  </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                  <div class="our-team">
                    <div class="pic">
                      <img src="SHUAIB-PIC-1.jpg">
                    </div>
                    <div class="team-content">
                      <h3 class="title">SHUAIB ALI<br><br></h3>
                      <span class="post">NSTI MUMBAI</span>
                    </div>
                  </div>
                </div>
              </div>
              <!--.row-->
            </div>
            <!--.item-->

          </div>
          <!--.item-->

        </div>
        <!--.carousel-inner-->
      </div>
      <!--.Carousel-->

    </div>
  </div>
</body>


@endsection