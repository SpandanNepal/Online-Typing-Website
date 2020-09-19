@if(!Auth::guest())
<?php
    $url_val=(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    //echo $url_val;
    preg_match_all('!\d+!', $url_val, $matches);
    //print_r($matches);
    //echo $matches[0][0];
    //header('Location: miniproject.test/easy');
    //$link=$url_val;
    //echo $link;
    //$link=str_replace('?wm*','',$link);
    $user_exist=0;
    $user_id=auth()->user()->id;
    //echo $user_id;
    $servername = "127.0.0.1";
    $username = "root";
    $password = "iamfine12345";
    $dbname = "challanges";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql2 = "SELECT id FROM challanges";
    $result = $conn->query($sql2);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            //echo $row["id"];
            if($user_id==$row["id"]){
              break;
              $user_id==1;
              //break;
            }
        }
    } else {
        echo "0 results";
    }
    if($user_exist!=1){
      //echo $user_exist;
      $sql3 = "INSERT INTO challanges (id)
      VALUES ($user_id)";
    }
    if ($conn->query($sql3) === TRUE) {
        echo "New record created successfully";
    } //else {
        //echo "Error: " . $sql3 . "<br>" . $conn->error;
    //}

    $conn->close();
?>
@endif
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
<link rel="shortcut icon" href="../favicon.ico" />
<title>Beginner Typing | 1 minute typing | Games | Typing speed | myfastfingers.com</title>
<!--CSS-->
<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('css/easy_file.css') }}">
</head>

<body>

<script type="text/javascript" src="{{asset('js/jjquery.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/custom.js')}}"></script>

<!--<div id="result">Result:<br></div>-->

<header class="header" id="HOME">

@include('navbarFolder.navbar')

<div class="header-overlay">

<div class="container">

<div class="row">

<div class="col-md-12">

<div id="words_container" style="margin-top:100px">
<span id="0">the</span>
<span id="1">of</span>
<span id="2">and</span>
<span id="3">a</span>
<span id="4">to</span>
<span id="5">in</span>
<span id="6">is</span>
<span id="7">you</span>
<span id="8">that</span>
<span id="9">it</span>
<span id="10">he</span>
<span id="11">was</span>
<span id="12">for</span>
<span id="13">on</span>
<span id="14">are</span>
<span id="15">as</span>
<span id="16">with</span>
<span id="17">his</span>
<span id="18">they</span>
<span id="19">I</span>
<span id="20">at</span>
<span id="21">be</span>
<span id="22">this</span>
<span id="23">have</span>
<span id="24">from</span>
<span id="25">or</span>
<span id="26">one</span>
<span id="27">had</span>
<span id="28">by</span>
<span id="29">word</span>
<span id="30">but</span>
<span id="31">not</span>
<span id="32">what</span>
<span id="33">all</span>
<span id="34">were</span>
<span id="35">we</span>
<span id="36">when</span>
<span id="37">your</span>
<span id="38">can</span>
<span id="39">said</span>
<span id="40">there</span>
<span id="41">use</span>
<span id="42">an</span>
<span id="43">each</span>
<span id="44">which</span>
<span id="45">she</span>
<span id="46">do</span>
<span id="47">how</span>
<span id="48">their</span>
<span id="49">if</span>
<span id="50">will</span>
<span id="51">up</span>
<span id="52">other</span>
<span id="53">about</span>
<span id="54">out</span>
<span id="55">many</span>
<span id="56">then</span>
<span id="57">them</span>
<span id="58">these</span>
<span id="59">so</span>
<span id="60">some</span>
<span id="61">her</span>
<span id="62">would</span>
<span id="63">make</span>
<span id="64">like</span>
<span id="65">him</span>
<span id="66">into</span>
<span id="67">time</span>
<span id="68">has</span>
<span id="69">look</span>
<span id="70">two</span>
<span id="71">more</span>
<span id="72">write</span>
<span id="73">go</span>
<span id="74">see</span>
<span id="75">number</span>
<span id="76">no</span>
<span id="77">way</span>
<span id="78">could</span>
<span id="79">people</span>
<span id="80">my</span>
<span id="81">than</span>
<span id="82">first</span>
<span id="83">water</span>
<span id="84">been</span>
<span id="85">call</span>
<span id="86">who</span>
<span id="87">oil</span>
<span id="88">its</span>
<span id="89">now</span>
<span id="90">find</span>
<span id="91">long</span>
<span id="92">down</span>
<span id="93">day</span>
<span id="94">did</span>
<span id="95">get </span>
<span id="96">come</span>
<span id="97">made</span>
<span id="98">may</span>
<span id="99">part</span>
</div>
<div id="typing_part">

<input id="container1" type="text" autocomplete="off" autocorrect="off" autocapitalize="off"
spellcheck="false" placeholder="click to start!"></input>

<div id="countdown"></div>

<img id="Restart" src="../css/img_file/restart_button.jpg">

</div>

</div>

</div>

</div>

<p></p>
<div class="container">

<div class="row">

<div class="col-md-12">

<div class="center">

<div id="result">Result:

</div>

</div>

</div>

</div>

</div>

</div>

</header>

<section id="instructions">

<div class="container" >

<div class="row">

<div class="col-md-12">

<div class="header-text" style="margin-top:80px">
<h2 class="challange" style="color: #17252A;text-align:center;margin-bottom:40px;border-bottom: 1px solid #FEFEEE;" >How to touch type?</h2>
</div>

<div class="inst-text">

<h3>1. Sitting posture for typing</h3>
<p>Sit straight and dont forget to keep your back straight.
Keep your elbows bent at the right angle.
Face the screen with your head slightly tilted forward.
Keep some distance between your eyes and the screen.
Make sure you apply the least possible strain to yourshoulder, arm, and wrist muscles.
The wrists can touch the tabletop in front of the keyboard.
make sure your are sitting as shown in the picture below.
</p>
<p class="center"><img style="width:25%"src="../css/img_file/sitting_pos.jpg" alt=""></p>
<h3>2. Home-row position</h3>
<p>Put your fingers on the ASDF and JKL;
keys which are located in the middle row of the letter keys.
This row is called HOME ROW because you always start from these keys and always return to them.
F and J keys under your index fingers should have a slight bump on them to help you in finding these keys without looking.
Follow as shown in the picture
</p>
<p class="center"><img style="width:50%" src="../css/img_file/homerow.jpg" alt=""></p>
<h3>3. The Кeyboard scheme</h3>
<p>The colored keyboard shown in the picture below will help you to understand which finger should press which key.
Hit keys only with the fingers for which they have been reserved.
Always return to the starting position of the fingers "ASDF – JKL;".
When typing, imagine the location of the symbol on the keyboard.
Maintain a rhythm while typing. Your keystrokes should come at equal intervals.
The SHIFT key is always pressed by the pinky finger opposite to the one hitting the other key.
Use the thumb of whichever hand is more convenient for you to press the Space bar.
This method may seem difficult at first, but do not stop, eventually you’ll find out that you are typing quickly, easily and conveniently.
</p>
<p class="center"><img style="width:50%" src="../css/img_file/whichfinger.png" alt=""></p>
<h3>4. Fingers motion</h3>
<p style="margin-bottom:40px">Don't look at the keys when you type. Just slide your fingers around until they find the home row marking.
Limit your hand and finger movement only to what is necessary to press a specific key.
Keep your hands and fingers close to the base position. This improves typing speed and reduces stress on the hands.
Pay attention to ring fingers and little fingers, since they are considerably underdeveloped.
</p>
<h3>5. Typing speed</h3>
<p style="margin-bottom:40px">Do not rush when you just started learning. Speed up only when your fingers hit the right keys out of habit.
Take your time when typing to avoid mistakes. The speed will pick up as you progress.
Always scan the text a word or two in advance.
Practice all the typing level in this website. It will help you to get above the average typing speed.
</p>
</div>

</div>
</div>
</div>

</section>

<footer class="footer">

<div class="container">

<div class="row">

<div class="col-md-6">

<div id="copyright">

<p>Copyright &copy; 2019 <a href="../index.html">myfastfingers.com</a></p>

</div>
<div class="col-md-6">

</div>

</div>

</div>

</div>

</footer>

<script type="text/javascript">
var easy_words=["the","of","and","a","to","in","is","you","that","it","he","was","for","on","are","as","with","his","they",
"I","at","be","this","have","from","or","one","had","by","word","but","not","what","all","were","we","when","your","can",
"said","there","use","an","each","which","she","do","how","their","if","will","up","other","about","out","many","then","them",
"these","so","some","her","would","make","like","him","into","time","has","look","two","more","write","go","see","number","no",
"way","could","people","my","than","first","water","been","call","who","oil","its","now","find","long","down","day","did","get",
"come","made","may","part"];
var count=0;
var correct=0;
var incorrect=0;
var total_letter=0;
var tot_word_width=0;

$("#container1").one("keypress", function(){
    var timeleft=60;
    var total_time=60;
    var wpm;
    $(window).keypress(function(e) {
          if(e.which == 32){
                  var word=document.getElementById("container1").value;
                  if (word ==" "){
                  document.getElementById("container1").value="";
                  }
                  else{
                  if(easy_words[count].trim()==word.trim()){
                          total_letter+=easy_words[count].trim().length;
                          $( "#"+count).removeClass("highliter");
                          $( "#"+count).toggleClass( "right");
                          correct++;

                  }
                  else{
                          $( "#"+count).removeClass("highliter");
                          $( "#"+count).toggleClass("wrong");
                          incorrect++;
                  }
                  count++;
                  $( "#"+count).toggleClass( "highliter");
                  var xpos = $("#"+count).offset();
                  var top_pos = xpos.top;
                  document.getElementById("container1").value="";
                  count--;
                  var sec_xpos = $("#"+count).offset();
                  var sec_top_pos = sec_xpos.top;
                  count++;
                  if(parseInt(top_pos)>parseInt(sec_top_pos)){
                  document.getElementById("words_container").scrollTop+=51;
                  tot_word_width=0;
                  }
                }
          }
    });
    var downloadTimer = setInterval(function(){
          var minutes = Math.floor(timeleft / 60);
          var seconds = timeleft - minutes * 60;
          document.getElementById("countdown").innerHTML = minutes+":"+seconds;
          timeleft -= 1;
          /*var subtracted_time=total_time-timeleft-2;
          var minute=subtracted_time/60;
          var wpm_fake=total_letter/5;
          wpm =wpm_fake/minute;
          if(timeleft<57)
          document.getElementById("wordper_min").innerHTML="WPM:"+parseInt(wpm);*/
          if(timeleft <= -2 || count==100){
                clearInterval(downloadTimer);
                document.getElementById("countdown").innerHTML ="Time-Up"
                document.getElementById("words_container").innerHTML="";
                if(timeleft==-2 || count==100){
                  var subtracted_time=total_time-timeleft-2;
                  var minute=subtracted_time/60;
                  var wpm_fake=total_letter/5;
                  var sec_to_dec=seconds/60;
                  minutes+=sec_to_dec;
                  wpm=wpm_fake/minute;
                  window.location.href="easy?wm="+parseInt(wpm)+"cr="+correct+"in="+incorrect;
                  //document.getElementById("words_container").remove();
                  //document.getElementById("typing_part").remove();
                  //$("#result").show();
                  //var res_width=$('#result').width();
                  setTimeout(function(){
                    $('html,body').animate({
                      scrollTop: $("#result").offset().top});
                  });
                  //document.getElementById("result").innerHTML+="<br>CorrectWords: "+correct;
                  //document.getElementById("result").innerHTML+="<br>IncorrectWords: "+incorrect;
                  //document.getElementById("result").innerHTML+="<br>WordsPerMinute: "+parseInt(wpm);
                  //document.getElementById("result").innerHTML+="<br><span id='inter_restar'>Click To Restart</span>";
                  //document.getElementById("container").innerHTML="";
                }
          }
      },1000);
});
$('#home').click(function(){
  window.location.href = "index.html"
});
$('#Restart').click(function(){
    window.location.href= "/easy"
});
//$('#result').click(function(){
//    window.location.href="/easy";
//});
</script>
@if(Auth::guest())
<?php
    $url_val=(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    //echo $url_val;
    //preg_match_all('!\d+!', $url_val, $matches);
    preg_match_all('!\d+!', $url_val, $matches);

    if(preg_match_all('!\d+!', $url_val, $matches)){
       ?>

      <script type="text/javascript" language="javascript">
      //document.getElementById("result").style.display="block";
      document.getElementById("result").innerHTML+="<br>CorrectWords: "+<?php echo $matches[0][1]?>;
      document.getElementById("result").innerHTML+="<br>IncorrectWords: "+"<?php echo $matches[0][2]?>";
      document.getElementById("result").innerHTML+="<br>WordsPerMinute: "+"<?php echo $matches[0][0]?>";
      document.getElementById("result").innerHTML+="<br><span id='inter_restar'>Retry above</span>";

      setTimeout(function(){
        $('html,body').animate({
          scrollTop: $("#words_container").offset().top});
      });
      $("#result").show();

      </script>
    <?php }
    ?>
@endif

@if(!Auth::guest())
<?php
    //$url_val=(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    //echo $url_val;
    //preg_match_all('!\d+!', $url_val, $matches);

    if(preg_match_all('!\d+!', $url_val, $matches)){
       ?>

      <script type="text/javascript" language="javascript">
      //document.getElementById("result").style.display="block";
      document.getElementById("result").innerHTML+="<br>CorrectWords: "+<?php echo $matches[0][1]?>;
      document.getElementById("result").innerHTML+="<br>IncorrectWords: "+"<?php echo $matches[0][2]?>";
      document.getElementById("result").innerHTML+="<br>WordsPerMinute: "+"<?php echo $matches[0][0]?>";
      document.getElementById("result").innerHTML+="<br><span id='inter_restar'>Retry above</span>";

      setTimeout(function(){
        $('html,body').animate({
          scrollTop: $("#words_container").offset().top});
      });
      $("#result").show();

      </script>
      <?php
      $wpm_val=$matches[0][0];
      /*$host="127.0.0.1";
      $username="root";
      $password="iamfine12345";
      $database="challanges";
      $con=mysql_connect($host,$username,$password);
      @mysql_select_db($con,$database) or die( "Unable to select database");
      $query = mysqli_query($con,"INSERT INTO links (easy_wpm) VALUES('$wpm_val')");
      mysql_query($query);
      mysql_close();*/
      $servername = "127.0.0.1";
      $username = "root";
      $password = "iamfine12345";
      $dbname = "challanges";

      // Create connection
      $conn = new mysqli($servername, $username, $password, $dbname);
      // Check connection
      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
      }



      //this is thhe added part

      $user_id=auth()->user()->id;
      echo $user_id;

      $sql1 = "SELECT easy_wpm FROM challanges where id=$user_id" ;
      $result = $conn->query($sql1);
      $row=$result->fetch_assoc();
      echo $row["easy_wpm"];
      //if ($result->num_rows> 0) {
      // output data of each row
      //while($row = $result->fetch_assoc()) {
          //echo "id: " . $row["id"]. "easy_wpm:".$row["easy_wpm"];
      //}
    //}
    //else {
    //echo "0 results";
    //}

      //till here
      if($wpm_val>=$row["easy_wpm"]){
        $sql = "UPDATE challanges SET easy_wpm=$wpm_val WHERE id=$user_id";
      }//else{
        //$sql = "INSERT INTO challanges (easy_wpm)
        //VALUES ($wpm_val) where id;
        //}

      if ($conn->query($sql) === TRUE) {
          echo "New record created successfully";
      } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
      }

      $conn->close();
    }
 ?>
@endif
</body>
</html>
