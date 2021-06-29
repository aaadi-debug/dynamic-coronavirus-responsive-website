<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COVID-19 GO</title>
    <?php 
    include 'links/link.php'; 
    include 'CSS/style.php'; 

    ?>

</head>
<body>

<nav class="navbar navbar-expand-lg nav_style p-3">
  <a class="navbar-brand pl-5" href="#">COVID-19</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-5 text-capitalize">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#about_id">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#symptom_id">Symptoms</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#prevent_id">Prevention</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contact_id">Contact</a>
      </li>
    </ul>
  </div>
</nav>

<div class="main_header">
    <div class="row w-100 h-100">
        <div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
            <div class="left_side w-100 h-100 d-flex justify-content-center align-items-center">
                <img src="./eksath.png" alt="" width="300" height="300">
            </div>
        </div>

        <div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1">
            <div class="right_side w-100 h-100 d-flex justify-content-center align-items-center">
                <h1>Let's Stay Safe & Fight Together Against Cor <span class="corona_rotate"><img src="./corona.png" alt="" width="100px" height="100px"></span> na Virus</h1>
            </div>
            
        </div>
    </div>
</div>

<!-- ************************* corona latest updates *********************  -->

<section class="corona_update">
    <div class="mb-3">
        <h3 class="text-uppercase text-center">covid-19 updates</h3>
    </div>

    <div class="d-flex justify-content-around align-items-center count_style">
        <div>
            <h1>India</h1>
            <p>Country</p>
        </div>
        <div>
            <h1 class="count" id="apiindia1"></h1>
            <p>New Confirmed</p>
        </div>
        <div>
            <h1 class="count" id="apiindia2"></h1>
            <p>Total Confirmed</p>
        </div>
        <div>
            <h1 class="count" id="apiindia3"></h1>
            <p>New Deaths</p>
        </div>
        <div>
            <h1 class="count" id="apiindia4"></h1>
            <p>Total Deaths</p>
        </div>
        <div>
            <h1 class="count" id="apiindia5"></h1>
            <p>New Recovered</p>
        </div>
        <div>
            <h1 class="count" id="apiindia6"></h1>
            <p>Total Recovered</p>
        </div>
    </div>
</section>

<!-- ************************* about section *********************  -->

<div class="container-fluid sub_section pt-5 pb-5" id="about_id">
    <div class="section_header text-center mb-5 mt-4">
        <h1>About COVID-19</h1>
    </div>

    <div class="row pt-5">
    <div class="col-lg-5 col-md-6 col-12 ml-5 about_responsive">
        <img src="./about_cobid-19.jpg" alt="" class="img-fluid">
    </div>

    <div class="col-lg-6 col-md-6 col-12">
        <h2>What is COVID-19 (Corona-Virus) </h2>
        <p>COVID-19 is the infectious disease caused by the most recently disvovered coronavirus. This new virus and disease were unknown before the outbreak began in Wuhan, China, in December 2019. </p>
        <p>Coronavirus is a large family of viruses which may cause illness in animals or humans. In humans, several coronavirus are known to cause respiratory infectious ranging from the common cold to more severe disease such as Middle East Respiratory Syndrome (MERS) and severe Acute Respiratory Syndrome (SARS). The most recently discovered coronavirus causes coronavirus disease COVID-19. </p>
    </div>
</div>
</div>

<!-- ************************* symptoms *********************  -->

<div class="container-fluid pt-5 pb-5" id="symptom_id">
    <div class="section_header text-center mb-5 mt-4">
        <h1>Coronavirus Symptoms</h1>
    </div>

    <div class="conatainer">
        <div class="row">
            <div class="col-lg-4 clo-md-4 col-12 mt-5">
                <figure class="text-center">
                    <img src="./cough.png" alt="" class="img-fluid" width="150" height="150">
                    <figcaption> cough </figcaption>
                </figure>
            </div>
            <div class="col-lg-4 clo-md-4 col-12 mt-5">
                <figure class="text-center">
                    <img src="./runny_nose.png" alt="" class="img-fluid" width="150" height="150">
                    <figcaption> runny nose </figcaption>
                </figure>
            </div>
            <div class="col-lg-4 clo-md-4 col-12 mt-5">
                <figure class="text-center">
                    <img src="./fever.png" alt="" class="img-fluid" width="150" height="150">
                    <figcaption> fever </figcaption>
                </figure>
            </div>
            <div class="col-lg-4 clo-md-4 col-12 mt-5">
                <figure class="text-center">
                    <img src="./cold.png" alt="" class="img-fluid" width="150" height="150">
                    <figcaption> cold </figcaption>
                </figure>
            </div>
            <div class="col-lg-4 clo-md-4 col-12 mt-5">
                <figure class="text-center">
                    <img src="./tiredness.png" alt="" class="img-fluid" width="150" height="150">
                    <figcaption> tiredness </figcaption>
                </figure>
            </div>
            <div class="col-lg-4 clo-md-4 col-12 mt-5">
                <figure class="text-center">
                    <img src="./difficulty_breathing.png" alt="" class="img-fluid" width="150" height="150">
                    <figcaption> difficulty breathing (severe cases) </figcaption>
                </figure>
            </div>
        </div>
    </div>
</div>
     
<!-- ************************* prevention *********************  -->

<div class="container-fluid pt-5 pb-5 sub_section" id="prevent_id">
    <div class="section_header text-center mb-5 mt-4">
        <h1> 6 Steps Prevention Against Coronavirus </h1>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12 mt-5">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12">
                        <figure class="text-center">
                            <img src="./hand_wash.png" alt="" class="img_fluid" width="120" height="120">
                        </figure>
                    </div>

                    <div class="col-lg-8 col-md-8 col-12">
                        <p>Wash your hands regularly for 20 seconds, with soap and water, or alcohol based hand rub</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12 mt-5">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12">
                        <figure class="text-center">
                            <img src="./cover_mask.png" alt="" class="img_fluid" width="120" height="120">
                        </figure>
                    </div>

                    <div class="col-lg-8 col-md-8 col-12">
                        <p>Cover your nose and mouth with a disposeable tissue, or flexed elbow when you cough or sneeze</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12 mt-5">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12">
                        <figure class="text-center">
                            <img src="./social_distance.png" alt="" class="img_fluid" width="120" height="120">
                        </figure>
                    </div>

                    <div class="col-lg-8 col-md-8 col-12">
                        <p>Avoid close contact (1meter, or 3 feet) with people who are unwell</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12 mt-5">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12">
                        <figure class="text-center">
                            <img src="./self_isolate.png" alt="" class="img_fluid" width="120" height="120">
                        </figure>
                    </div>

                    <div class="col-lg-8 col-md-8 col-12">
                        <p>Stay home and self-isolate from others in the household, if you feel unwell</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12 mt-5">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12">
                        <figure class="text-center">
                            <img src="./watch_tv.png" alt="" class="img_fluid" width="120" height="120">
                        </figure>
                    </div>

                    <div class="col-lg-8 col-md-8 col-12">
                        <p>Stay informed by watching news and follow the recommended practices</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12 mt-5">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12">
                        <figure class="text-center">
                            <img src="./symptoms.png" alt="" class="img_fluid" width="120" height="120">
                        </figure>
                    </div>

                    <div class="col-lg-8 col-md-8 col-12">
                        <p>If you have fever, cough and difficulty in breathing , seek medical care early</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ************************* contact *********************  -->

<div class="container-fluid pt-5 pb-5" id="contact_id">
    <div class="section_header text-center mb-5 mt-4">
        <h1> Contact </h1>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 col-12">
                <form action="" method="POST">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" class="form-control" name="username" placeholder="username" autocomplete="off" required>
                </div>
                <div class="form-group">
                    <label">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="name@example.com" autocomplete="off" required>
                </div>
                <div class="form-group">
                    <label>Mobile</label>
                    <input type="number" class="form-control" name="mobile" placeholder="mobile" autocomplete="off" required>
                </div>

                <div class="form-group">
                    <label>Select Symptoms</label> <br>
                    <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
                        <input type="checkbox" class="custom-control-input" id="customcheckbox1" name="coronasym[]" value="cold">
                        <label class="custom-control-label" for="customcheckbox1">Cold</label>
                    </div>
                    <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
                        <input type="checkbox" class="custom-control-input" id="customcheckbox2" name="coronasym[]" value="fever">
                        <label class="custom-control-label" for="customcheckbox2">Fever</label>
                    </div>
                    <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
                        <input type="checkbox" class="custom-control-input" id="customcheckbox3" name="coronasym[]" value="breath">
                        <label class="custom-control-label" for="customcheckbox3">Difficulty in Breath</label>
                    </div>
                    <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
                        <input type="checkbox" class="custom-control-input" id="customcheckbox4" name="coronasym[]" value="tired">
                        <label class="custom-control-label" for="customcheckbox4">Feeling Weak</label>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Example Textarea</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="msg" rows="3"></textarea>
                </div>

                <button  type="submit" class="btn btn-primary" name="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- ************************* top cursor *********************  -->

<i class="fa fa-arrow-up" onclick="topFunction()" id="myBtn" title="Go to top"></i>

<!-- ************************* footer *********************  -->

<footer class="mt-5">
    <div class="footer_style text-white text-center container_fluid">
        <p>&copy copyright 2021. <br> All rights reserved. Powered by <span>Aditya Raj Gupta.</span></p>
    </div>
</footer>

<script type="text/javascript">


// $('#apiindia1').counterUp({
//     delay:10,
//     time:3000
// })

//Get the button:
mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}

// *********************** fetch Api *************************

function getcoviddata(indexs) {
    fetch('https://api.covid19api.com/summary')
        .then((apidata) => {
            // console.log(apidata);
            return apidata.json();
        })
        .then((actualdata) => {
            // console.log(actualdata);
            // console.log(actualdata.Countries);
            const mydata = actualdata.Countries[`${indexs}`];

            document.getElementById('apiindia1').innerHTML = ` ${mydata.NewConfirmed}`;
            document.getElementById('apiindia2').innerHTML = ` ${mydata.TotalConfirmed}`;
            document.getElementById('apiindia3').innerHTML = ` ${mydata.NewDeaths}`;
            document.getElementById('apiindia4').innerHTML = ` ${mydata.TotalDeaths}`;
            document.getElementById('apiindia5').innerHTML = ` ${mydata.NewRecovered}`;
            document.getElementById('apiindia6').innerHTML = ` ${mydata.TotalRecovered}`;
        })
        .catch((error) => {
            console.log(`The Error is: ${error}`);
        });
    }
    getcoviddata(76);
</script>
    
</body>
</html>


<?php

include 'dbcon.php';

if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $symptoms = $_POST['coronasym'];
    $msg = $_POST['msg'];

    $chk = "";
    
    foreach($symptoms as $chk1) {
        $chk .= $chk1.",";
    }

    $insertquery = " insert into coronacase(username, email, mobile, symptoms, message) values('$username', '$email', '$mobile', '$chk', '$msg') ";

    $query = mysqli_query($con, $insertquery);

    if($query) {
        ?>
        <script>
            alert("Inserted Successfully");
        </script>
        <?php
    } else {
        ?>
        <script>
            alert("Not Inserted");
        </script>
        <?php
    }
}

?>