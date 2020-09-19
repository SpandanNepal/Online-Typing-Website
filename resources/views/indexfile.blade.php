<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="English Typing website | Basic, Intermediate, Advanced, Paragraph Typing | 1 minute typing | Customizable time,
Typing Instructions | Typing games | Easy, Medium, Hard | myfastfingers.com">
<meta name="keywords" content="English typing website, Easy, Medium, Hard or Basic, Intermediate, Advanced, Paragraph typing, Customizable time,
Touch Typing Instructions,typing,typing test,typing master,typing speed test,typing practice,typing test online,typing master free download,
typing test 1 minute,typing tutor,typing speed,typing games,typing test online free">
<link rel="shortcut icon" href="favicon.ico" />
<title>Typing-Test | Typing Games | Online Typing | 1 minute typing | myfastfingers.com</title>
<!--CSS -->
<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('css/index_css.css') }}">
<link href="https://fonts.googleapis.com/css?family=Bungee+Shade&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">

</head>
<body>
<style type="text/css">
.inst-text p{text-align: justify;}
</style>
<!-- Header -->

<header class="header" id="HOME">
<div class="header-overlay">
@include('navbarFolder.navbar')
<div class="container" id="abc">
<div class="row">

<div class="col-md-12">

<div class="logo_class">

<div class="img_holder">

<h3><span style="font-family: 'Bungee Shade', cursive;">myfast</span>
<span style="font-family: 'Pacifico', cursive;">fingers.com</span></h3>

</div>

</div>

</div>

</div>

</div>

<!-- Easy med Hard -->
<div class="container" id="challange">

<div class="row" style="margin-bottom:10px">

<div class="col-md-12">

<div class="header-text" style="margin-bottom:40px">
<h1 class="challange" id="chal">“The trouble is, you think you have time.”</h1>
</div>

</div>

<div class="col-md-4">

<div class="header-btns">

<a class="btn btn-easy" href="/easy">Easy</a>

</div>

</div>

<div class="col-md-4">

<div class="header-btns">

<a class="btn btn-medium" href="medium">Medium</a>

</div>

</div>

<div class="col-md-4">

<div class="header-btns">

<a class="btn btn-hard" href="hard">Hard</a>

</div>

</div>

</div>

</div>

<div class="container">

<div class="row" style="margin-bottom:20px">

<div class="header-text">

<h1 class="challange">Paragraph Typing</h1>

</div>

<div class="col-md-6">

<div class="header-btns">

<a class="btn btn-paragraph" href="alladin-and-the-magic-lamp">Alladin & the magic lamp</a>

</div>

</div>

<div class="col-md-6">

<div class="header-btns">

<a class="btn btn-instructions" href="the-tempest">The Tempest</a>

</div>

</div>

</div>

</div>

<div class="container">

<div class="row" style="margin-bottom:60px">

<div class="header-text">

<h1 class="challange">Programming Typing</h1>

</div>

<div class="col-md-6">

<div class="header-btns">

<a class="btn btn-paragraph" href="python">Python</a>

</div>

</div>

<div class="col-md-6">

<div class="header-btns">

<a class="btn btn-instructions" href="c">C</a>

</div>

</div>

</div>

</div>
<div class="container">

<div class="row" style="margin-bottom:60px">

<div class="col-md-6">

<div class="header-btns">

<a class="btn btn-paragraph" href="java">Java</a>

</div>

</div>

<div class="col-md-6">

<div class="header-btns">

<a class="btn btn-instructions" href="c++">C++</a>

</div>

</div>

</div>

</div>

</div>

</header>

<?php

    $servername = "127.0.0.1";
    $username = "root";
    $password = "iamfine12345";
    $dbname = "challanges";
    $easy_high_score=0;

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

$SQL_col="SHOW COLUMNS FROM challanges";
$result_col=mysqli_query($conn,$SQL_col);
while($row=mysqli_fetch_array($result_col)){
  //echo $row['Field']."<br/>";
if($row['Field']=='id' || $row['Field']=='created_at' || $row['Field']=='updated_at'){
  continue;
  //echo $row['Field'];
}
$row_col_val=$row['Field'];
//$res_high=0;
//echo $row_col_val;
//echo $row['Field'];

$sql2 = "SELECT ".$row_col_val." FROM challanges";
      $result = $conn->query($sql2);

      if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
              //echo $row["id"];
              if($easy_high_score<=$row[$row_col_val]){
                $easy_high_score=$row[$row_col_val];
                //break;
              }
          }
      }
      else {
          $easy_high_score= "0 results";
      }
      ${"easy_high_score_".$row_col_val}=$easy_high_score;
      //echo ${"easy_high_score_".$row_col_val};
      $easy_high_score=0;

      //echo $res_high;
     $sql3 = "SELECT id FROM challanges where ".$row_col_val." =${'easy_high_score_'.$row_col_val}";
      //echo $sql3;
      $result = $conn->query($sql3);
      if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
              //echo $row["id"];
            $high_score_user_id=$row["id"];
                //break;
              }
    }
      //echo $high_score_user_id;
      else {
          $high_score_user_id= "0 results";
      }
//echo $high_score_user_id;
//  ${"easy_high_score_id_".$row_col_val}=$easy_high_score;

    $sql4 = "SELECT name FROM users where id=$high_score_user_id";

      $result = $conn->query($sql4);
      if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
              //echo $row["id"];
            $high_score_user_name=$row["name"];
                //break;
              }
      } else {
          $high_score_user_name= "0 results";
      }
      ${"easy_high_score_name_".$row_col_val}=$high_score_user_name;


      $sql5 = "SELECT updated_at FROM challanges where id=$high_score_user_id";
      $result = $conn->query($sql5);
      if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
              //echo $row["id"];
            $high_score_user_date=$row["updated_at"];
                //break;
              }
      } else {
          $high_score_user_date= 'updated_at';
      }
      ${"easy_high_score_date_".$row_col_val}=$high_score_user_date;



/*    $sql2 = "SELECT easy_wpm FROM challanges";
    $result = $conn->query($sql2);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            //echo $row["id"];
            if($easy_high_score<=$row["easy_wpm"]){
              $easy_high_score=$row["easy_wpm"];
              //break;
            }
        }
    } else {
        $easy_high_score= "0 results";
    }
    $sql3 = "SELECT id FROM challanges where easy_wpm=$easy_high_score";
    $result = $conn->query($sql3);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            //echo $row["id"];
          $high_score_user_id=$row["id"];
              //break;
            }
    } else {
        $high_score_user_id= "0 results";
    }
    $sql4 = "SELECT name FROM users where id=$high_score_user_id";
    $result = $conn->query($sql4);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            //echo $row["id"];
          $high_score_user_name=$row["name"];
              //break;
            }
    } else {
        $high_score_user_name= "0 results";
    }
    $sql5 = "SELECT updated_at FROM challanges where id=$high_score_user_id";
    $result = $conn->query($sql5);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            //echo $row["id"];
          $high_score_user_date=$row["updated_at"];
              //break;
            }
    } else {
        $high_score_user_date= 'updated_at';
    }*/
}
    $conn->close();
?>

<!--table section -->
<div class="container">
<h2 style="font-size:35px;margin-top:50px;color:#17252A;text-align:center;margin-bottom:40px;border-bottom: 1px solid #FEFEEE;">Scoreboard</h2>
<table class="table table-striped" style="font-size:17px;">
  <thead>
    <tr style="background-color:#333;color: white;">
      <th scope="col">Category</th>
      <th scope="col">Username</th>
      <th scope="col">Score(wpm)</th>
      <th scope="col">Date</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Easy</th>
      <td><?php echo $easy_high_score_name_easy_wpm ?></td>
      <td><?php echo $easy_high_score_easy_wpm ?></td>
      <td><?php echo $easy_high_score_date_easy_wpm?></td>
    </tr>
    <tr>
      <th scope="row">Medium</th>
      <td><?php echo $easy_high_score_name_medium_wpm ?></td>
      <td><?php echo $easy_high_score_medium_wpm?></td>
      <td><?php echo $easy_high_score_date_medium_wpm?></td>
    </tr>
    <tr>
      <th scope="row">Hard</th>
      <td><?php echo $easy_high_score_name_hard_wpm ?></td>
      <td><?php echo $easy_high_score_hard_wpm?></td>
      <td><?php echo $easy_high_score_date_hard_wpm?></td>
    </tr>
    <tr>
      <th scope="row">Alladin & the magic lamp</th>
      <td><?php echo $easy_high_score_name_alladin_wpm ?></td>
      <td><?php echo $easy_high_score_alladin_wpm?></td>
      <td><?php echo $easy_high_score_date_alladin_wpm?></td>
    </tr>
    <tr>
      <th scope="row">The Tempest</th>
      <td><?php echo $easy_high_score_name_tempest_wpm ?></td>
      <td><?php echo $easy_high_score_tempest_wpm?></td>
      <td><?php echo $easy_high_score_date_tempest_wpm?></td>
    </tr>
    <tr>
      <th scope="row">Python</th>
      <td><?php echo $easy_high_score_name_python_wpm ?></td>
      <td><?php echo $easy_high_score_python_wpm?></td>
      <td><?php echo $easy_high_score_date_python_wpm?></td>
    </tr>
    <tr>
      <th scope="row">C</th>
      <td><?php echo $easy_high_score_name_c_wpm ?></td>
      <td><?php echo $easy_high_score_c_wpm?></td>
      <td><?php echo $easy_high_score_date_c_wpm?></td>
    </tr>
    <tr>
      <th scope="row">Java</th>
      <td><?php echo $easy_high_score_name_java_wpm ?></td>
      <td><?php echo $easy_high_score_java_wpm?></td>
      <td><?php echo $easy_high_score_date_java_wpm?></td>
    </tr>
    <tr>
      <th scope="row">C++</th>
      <td><?php echo $easy_high_score_name_cplusplus_wpm ?></td>
      <td><?php echo $easy_high_score_cplusplus_wpm?></td>
      <td><?php echo $easy_high_score_date_cplusplus_wpm?></td>
    </tr>
  </tbody>
</table>

<div class="inst-text">
  <p>***Register and compete with the world. If you beat the high score in any challanges
  then your name will be featured on table above.***</p>
</div>
</div>
<!-- end of table section -->

<section id="about_website" style="margin-top:40px">

<div class="container" >

<div class="row">

<div class="col-md-12">

<div class="inst-text" id="set_width">

<div class="header-text">
<h2 style="color: #17252A;text-align:center;margin-bottom:40px;border-bottom: 1px solid #FEFEEE;">Learn More </h2>
</div>

<h3>1. What is myfastfingers.com?</h3>
<p style="margin-bottom:40px;">It is a typing website for beginners & experts. There are different test which you can take to improve
your typing skills. The challanges include easy, medium, and hard which you can take according to your typing skills.
We also have paragraph typing and programming typing for improving your paragraph typing skill and programming typing skill.
For paragraph typing we have customizable time, so you can practice as long as you want.At max you can take 5 minutes for
paragraph typing. For programming typing there is no time limit for session completion you can take as long as you want
to complete the session we just want you to focus on your typing accuracy while programming typing.
</p>
<h3>2.We provide a summary after each session of typing.</h3>
<p style="margin-bottom:40px;">After each typing session you will receive a report about that particular session. The report includes correct words, incorrect words,
WPM, accuarcy,and time elapsed. These details will help you know your progress throught each session.
</p>
<h3>3.What is WPM?</h3>
<p style="margin-bottom:40px;">WPM means "Words per minute". For every 5 keystrokes it equals to 1 WPM.
WPM is the basis of finding out your typing speed.The highest typing speed ever recorded was 216 words per minute
(wpm), set by Stella Pajunas in 1946, using an IBM electric typewriter. Currently, the fastest English language
typist is Barbara Blackburn, who reached a peak typing speed of 212 wpm during a test in 2005, using a Dvorak
simplified keyboard. Source (www.ratatype.com)
</p>
<h3>4.What are keystrokes</h3>
<p style="margin-bottom:40px;">For every key you hit on the keyboard to type a letter is known as one keystroke. This interpretation also considers
if you have to type uppercase letters which needs 2 keystrokes to be typed
(for example "A"). For example "honey" needs 5 keystrokes whereas "Alaska" needs 7 keystrokes
</p>
<h3>5. Future Amazing updates!</h3>
<p style="margin-bottom:40px;">As we are growing our website, In the coming days we will add exicitng tasks such as Mulitplayer typing competetion,
online interaction with other users to share thoughts and ideas, Typing games which will enhance learning and
Our passion and determination to help you improve your typing speed with accuracy. Typing is a skill
which one needs to posses regardless of your career.
</p>
</div>

</div>

</div>

</div>

</section>

<!-- Testimonials -->

<section class="testimonial" id="aboutme">

<div class="testimonial-overlay">

<div class="container">

<div class="row">

<div class="col-md-12">

<div class="about-text" >
<h1>About Me</h1>
</div>

<!-- wrapper for sliders -->

<div class="carousel inner">

<div class="item active text-center">

<img src="../css/img_file/photo1.jpg" alt="testimonial" class="center-block" style="border-radius:50%;width:20%;">

<div class="testimonial-caption">

<h2>Spandan</h2>
<h4><span>Web Developer</span></h4>

</div>

</div>

</div>

</div>

<div class="col-md-4">

<div class="center_another">

<img src="../css/img_file/instagram.png" id="instagram" alt="">

</div>

</div>
<div class="col-md-4">

<div class="center">

<img src="../css/img_file/facebook.png" id="facebook" alt="">

</div>

</div>
<div class="col-md-4">

<div class="center" id="gmail">

<img src="../css/img_file/gmail.png"  alt="">

<span class="tooltiptext">spandan7nepal@gmail.com</span>

</div>

</div>

</div>

</div>

</div>

</section>
<!-- Footer -->
<footer class="footer">

<div class="container">

<div class="row">

<div class="col-md-6">

<div id="copyright">

<p>Copyright &copy; 2019 <a href="#">myfastfingers.com</a></p>

</div>
<div class="col-md-6">

</div>

</div>

</div>

</div>

</footer>

<!-- Bootstrap Javascript -->
<script src="js/jjquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/custom.js"></script>

</body>
</html>
