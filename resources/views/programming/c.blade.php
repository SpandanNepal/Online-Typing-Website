@if(!Auth::guest())
<?php
    $url_val=(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    //echo $url_val;
    preg_match_all('!\d+!', $url_val, $matches);
    //print_r($matches);
    //echo $matches[0][0];
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
<title>C Programming Typing | Programming Typing</title>
<meta name="description" content="English Typing website | Basic, Intermediate, Advanced, Paragraph Typing | 1 minute typing | Customizable time,
Typing Instructions | Typing games | Easy, Medium, Hard | myfastfingers.com">
<meta name="keywords" content="English typing website, Easy, Medium, Hard or Basic, Intermediate, Advanced, Paragraph typing, Customizable time,
Touch Typing Instructions,typing,typing test,typing master,typing speed test,typing practice,typing test online,typing master free download,
typing test 1 minute,typing tutor,typing speed,typing games,typing test online free">
<link rel="shortcut icon" href="../favicon.ico" />

<!--CSS -->
<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('css/programming.css') }}">
</head>

<body>
<script type="text/javascript" src="{{asset('js/jjquery.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/custom.js')}}"></script>

<style type="text/css">
#result{
    display: none;
    width: max-content;
    border-radius: 4px;
    background-color: #3AAFA9;
    text-align: center;
    margin: 0 auto;
    margin-top: 60px;
    margin-bottom: 20px;
    padding:20px 40px;
    font-family: Times New Roman, Times, serif;
    color: #17252A;
    cursor: pointer;
    font-size: 28px;
    transition: transform .2s;
    overflow:hidden;
}
#result:hover{
  transform: scale(1.08);
}
</style>

<header class="header" id="HOME">

@include('navbarFolder.navbar')


<div class="header-overlay">

<!--    <div class="info_displayer">Begin Typing</div> -->

<div class="container">

<div class="row">

<div class="col-md-12">

<div class="header-text">
<div class="center">
<h1 style="margin-top:70px;color:#17252A;">C Programming Challange</h1>
</div>
</div>

<div id="words_container">

              <span style="color:rgb(170,170,170,0.7)">//Armstrong.c : start typing to begin session</span>
              <br><span id="0">#</span
              ><span id="1">i</span
              ><span id="2">n</span
              ><span id="3">c</span
              ><span id="4">l</span
              ><span id="5">u</span
              ><span id="6">d</span
              ><span id="7">e</span
              ><span id="8"><</span
              ><span id="9">s</span
              ><span id="10">t</span
              ><span id="11">d</span
              ><span id="12">i</span
              ><span id="13">o</span
              ><span id="14">.</span
              ><span id="15">h</span
              ><span id="16">></span
              ><br><span id="17">i</span
              ><span id="18">n</span
              ><span id="19">t</span
              ><span id="20">&nbsp;</span
              ><span id="21">m</span
              ><span id="22">a</span
              ><span id="23">i</span
              ><span id="24">n</span
              ><span id="25">(</span
              ><span id="26">)</span
              ><br><span id="27">{</span
              ><br><span id="28">i</span
              ><span id="29">n</span
              ><span id="30">t</span
              ><span id="31">&nbsp;</span
              ><span id="32">n</span
              ><span id="33">,</span
              ><span id="34">r</span
              ><span id="35">,</span
              ><span id="36">s</span
              ><span id="37">u</span
              ><span id="38">m</span
              ><span id="39">=</span
              ><span id="40">0</span
              ><span id="41">,</span
              ><span id="42">t</span
              ><span id="43">e</span
              ><span id="44">m</span
              ><span id="45">p</span
              ><span id="46">;</span
              ><br><span id="47">p</span
              ><span id="48">r</span
              ><span id="49">i</span
              ><span id="50">n</span
              ><span id="51">t</span
              ><span id="52">f</span
              ><span id="53">(</span
              ><span id="54">"</span
              ><span id="55">e</span
              ><span id="56">n</span
              ><span id="57">t</span
              ><span id="58">e</span
              ><span id="59">r</span
              ><span id="60">&nbsp;</span
              ><span id="61">t</span
              ><span id="62">h</span
              ><span id="63">e</span
              ><span id="64">&nbsp;</span
              ><span id="65">n</span
              ><span id="66">u</span
              ><span id="67">m</span
              ><span id="68">b</span
              ><span id="69">e</span
              ><span id="70">r</span
              ><span id="71">=</span
              ><span id="72">"</span
              ><span id="73">)</span
              ><span id="74">;</span
              ><br><span id="75">s</span
              ><span id="76">c</span
              ><span id="77">a</span
              ><span id="78">n</span
              ><span id="79">f</span
              ><span id="80">(</span
              ><span id="81">"</span
              ><span id="82">%</span
              ><span id="83">d</span
              ><span id="84">"</span
              ><span id="85">,</span
              ><span id="86">&</span
              ><span id="87">n</span
              ><span id="88">)</span
              ><span id="89">;</span
              ><br><span id="90">t</span
              ><span id="91">e</span
              ><span id="92">m</span
              ><span id="93">p</span
              ><span id="94">=</span
              ><span id="95">n</span
              ><span id="96">;</span
              ><br><span id="97">w</span
              ><span id="98">h</span
              ><span id="99">i</span
              ><span id="100">l</span
              ><span id="101">e</span
              ><span id="102">(</span
              ><span id="103">n</span
              ><span id="104">></span
              ><span id="105">0</span
              ><span id="106">)</span
              ><br><span id="107">{</span
              ><br><span id="108">r</span
              ><span id="109">=</span
              ><span id="110">n</span
              ><span id="111">%</span
              ><span id="112">1</span
              ><span id="113">0</span
              ><span id="114">;</span
              ><br><span id="115">s</span
              ><span id="116">u</span
              ><span id="117">m</span
              ><span id="118">=</span
              ><span id="119">s</span
              ><span id="120">u</span
              ><span id="121">m</span
              ><span id="122">+</span
              ><span id="123">(</span
              ><span id="124">r</span
              ><span id="125">*</span
              ><span id="126">r</span
              ><span id="127">*</span
              ><span id="128">r</span
              ><span id="129">)</span
              ><span id="130">;</span
              ><br><span id="131">n</span
              ><span id="132">=</span
              ><span id="133">n</span
              ><span id="134">/</span
              ><span id="135">1</span
              ><span id="136">0</span
              ><span id="137">;</span
              ><br><span id="138">}</span
              ><br><span id="139">i</span
              ><span id="140">f</span
              ><span id="141">(</span
              ><span id="142">t</span
              ><span id="143">e</span
              ><span id="144">m</span
              ><span id="145">p</span
              ><span id="146">=</span
              ><span id="147">=</span
              ><span id="148">s</span
              ><span id="149">u</span
              ><span id="150">m</span
              ><span id="151">)</span
              ><br><span id="152">p</span
              ><span id="153">r</span
              ><span id="154">i</span
              ><span id="155">n</span
              ><span id="156">t</span
              ><span id="157">f</span
              ><span id="158">(</span
              ><span id="159">"</span
              ><span id="160">a</span
              ><span id="161">r</span
              ><span id="162">m</span
              ><span id="163">s</span
              ><span id="164">t</span
              ><span id="165">r</span
              ><span id="166">o</span
              ><span id="167">n</span
              ><span id="168">g</span
              ><span id="169">&nbsp;</span
              ><span id="170">n</span
              ><span id="171">u</span
              ><span id="172">m</span
              ><span id="173">b</span
              ><span id="174">e</span
              ><span id="175">r</span
              ><span id="176">"</span
              ><span id="177">)</span
              ><span id="178">;</span
              ><br><span id="179">e</span
              ><span id="180">l</span
              ><span id="181">s</span
              ><span id="182">e</span
              ><br><span id="183">p</span
              ><span id="184">r</span
              ><span id="185">i</span
              ><span id="186">n</span
              ><span id="187">t</span
              ><span id="188">f</span
              ><span id="189">(</span
              ><span id="190">"</span
              ><span id="191">n</span
              ><span id="192">o</span
              ><span id="193">t</span
              ><span id="194">&nbsp;</span
              ><span id="195">a</span
              ><span id="196">r</span
              ><span id="197">m</span
              ><span id="198">s</span
              ><span id="199">t</span
              ><span id="200">r</span
              ><span id="201">o</span
              ><span id="202">n</span
              ><span id="203">g</span
              ><span id="204">&nbsp;</span
              ><span id="205">n</span
              ><span id="206">u</span
              ><span id="207">m</span
              ><span id="208">b</span
              ><span id="209">e</span
              ><span id="210">r</span
              ><span id="211">"</span
              ><span id="212">)</span
              ><span id="213">;</span
              ><br><span id="214">r</span
              ><span id="215">e</span
              ><span id="216">t</span
              ><span id="217">u</span
              ><span id="218">r</span
              ><span id="219">n</span
              ><span id="220">&nbsp;</span
              ><span id="221">0</span
              ><span id="222">;</span
              ><br><span id="223">}</span
              ><span id="224"> </span>
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

<div class="row" >

<div class="col-md-12">

<div id="result">Result:

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
<p class="center"><img style="width:25%" src="../css/img_file/sitting_pos.jpg" alt=""></p>
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
var easy_words=['#', 'i', 'n', 'c', 'l', 'u', 'd', 'e', '<', 's', 't', 'd', 'i', 'o', '.', 'h', '>', 'i', 'n', 't', ' ', 'm', 'a', 'i', 'n', '(', ')', '{', 'i', 'n', 't', ' ', 'n', ',', 'r', ',', 's', 'u', 'm', '=', '0', ',', 't', 'e', 'm', 'p', ';', 'p', 'r', 'i', 'n', 't', 'f', '(', '"', 'e', 'n', 't', 'e', 'r', ' ', 't', 'h', 'e', ' ', 'n', 'u', 'm', 'b', 'e', 'r', '=', '"', ')', ';', 's', 'c', 'a', 'n', 'f', '(', '"', '%', 'd', '"', ',', '&', 'n', ')', ';', 't', 'e', 'm', 'p', '=', 'n', ';', 'w', 'h', 'i', 'l', 'e', '(', 'n', '>', '0', ')', '{', 'r', '=', 'n', '%', '1', '0', ';', 's', 'u', 'm', '=', 's', 'u', 'm', '+', '(', 'r', '*', 'r', '*', 'r', ')', ';', 'n', '=', 'n', '/', '1', '0', ';', '}', 'i', 'f', '(', 't', 'e', 'm', 'p', '=', '=', 's', 'u', 'm', ')', 'p', 'r', 'i', 'n', 't', 'f', '(', '"', 'a', 'r', 'm', 's', 't', 'r', 'o', 'n', 'g', ' ', 'n', 'u', 'm', 'b', 'e', 'r', '"', ')', ';', 'e', 'l', 's', 'e', 'p', 'r', 'i', 'n', 't', 'f', '(', '"', 'n', 'o', 't', ' ', 'a', 'r', 'm', 's', 't', 'r', 'o', 'n', 'g', ' ', 'n', 'u', 'm', 'b', 'e', 'r', '"', ')', ';', 'r', 'e', 't', 'u', 'r', 'n', ' ', '0', ';', '}']
var count=0;
var correct=0;
var incorrect=0;
var total_letter=0;
var tot_word_width=0;
var timeleft=0;
var start;

$("#typing_part").one('keypress', function(){
  start=new Date().getTime();
});

$("#typing_part").on('keypress', function(e) {
                var pressed_key=String.fromCharCode(e.keyCode);
                var word=document.getElementById("container1").value;
                if(easy_words[count].trim()==pressed_key.trim()){
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
                count--;
                var sec_xpos = $("#"+count).offset();
                var sec_top_pos = sec_xpos.top;
                count++;
                if(parseInt(top_pos)>parseInt(sec_top_pos)){
                document.getElementById("words_container").scrollTop+=26;
                tot_word_width=0;
                }
                var downloadTimer = setInterval(function(){
                      var minutes = Math.floor(timeleft / 60);
                      var seconds = timeleft - minutes * 60;
                      timeleft -= 1;
                },1000);
                document.getElementById("container1").value="";
                //document.getElementById("countdown").innerHTML = parseInt(minutes)+":"+parseInt(seconds);
                if(count==224){
                  //$("#words_container").css({"background-color":"rgb(128, 176, 255,0.1)"});
                  //$(".right").css({"color":"black"});
                  //$("body").css({"overflow":"scroll"});
                  $("#result").show();
                  var end=new Date().getTime();
                  var timeleft=end-start;
                  timeleft=timeleft/1000
                  var minutes = Math.floor(timeleft / 60);
                  var seconds = timeleft - minutes * 60;
                  var wpm_fake=correct/5;
                  var sec_to_dec=seconds/60;
                  minutes+=sec_to_dec;
                  wpm=wpm_fake/minutes;
                  window.location.href="c?wm="+parseInt(wpm)+"cr="+correct+"in="+incorrect+"m"+parseInt(minutes)+"s"+parseInt(seconds);
                  //$("#result").show();
                  //var res_width=$('#result').width();
                  //setTimeout(function(){
                  //  $('html,body').animate({
                  //    scrollTop: $("#result").offset().top});
                  //});
                  /*document.getElementById("result").innerHTML+="<br>CorrectWords: "+correct;
                  document.getElementById("result").innerHTML+="<br>IncorrectWords: "+incorrect;
                  document.getElementById("result").innerHTML+="<br>WordsPerMinute: "+parseInt(wpm);
                  document.getElementById("result").innerHTML+="<br>TimeTaken: "+parseInt(minutes)+":"+parseInt(seconds);
                  document.getElementById("result").innerHTML+="<br><span id='inter_restar'>Click To Restart</span>";*/
                  //document.getElementById("container").innerHTML="";
                  /*setTimeout(
                  function()
                  {
                    //do something special
                    document.getElementById("result").innerHTML += "Typing Summary<br><br>"+"Time Elapsed:&emsp; &emsp;"
                    +parseInt(minutes)+":"+parseInt(seconds)+"<br><br>"+"Total Typeable letters:&emsp; &emsp;"+parseInt(count)+"<br><br>"+
                    "Correct letters typed:&emsp; &emsp;"+parseInt(correct)+"<br><br>"+"Incorrect Letters:&emsp; &emsp;"+
                    incorrect+"<br><br>"+"Words per minute:&emsp; &emsp;"+parseInt(wpm);
                    $(window).scrollTop($('#610').offset().top);
                  }, 1000);*/
                }
});
$('#home').click(function(){
window.location.href = "index.html"
});
$('#Restart').click(function(){
  location.reload();
});
/*$('#result').click(function(){
  location.reload();
});*/
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
      document.getElementById("result").innerHTML+="<br>TimeTaken: "+<?php echo $matches[0][3] ?>+":"+<?php echo $matches[0][4] ?>;
      document.getElementById("result").innerHTML+="<br><span id='inter_restar'>Retry above</span>";

      setTimeout(function(){
        $('html,body').animate({
          scrollTop: $("#typing_part").offset().top});
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
      document.getElementById("result").innerHTML+="<br>TimeTaken: "+<?php echo $matches[0][3] ?>+":"+<?php echo $matches[0][4] ?>;
      document.getElementById("result").innerHTML+="<br><span id='inter_restar'>Retry above</span>";

      setTimeout(function(){
        $('html,body').animate({
          scrollTop: $("#typing_part").offset().top});
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

      $sql1 = "SELECT c_wpm FROM challanges where id=$user_id" ;
      $result = $conn->query($sql1);
      $row=$result->fetch_assoc();
      echo $row["c_wpm"];
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
      if($wpm_val>=$row["c_wpm"]){
        $sql = "UPDATE challanges SET c_wpm=$wpm_val WHERE id=$user_id";
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
