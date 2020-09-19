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
<title>C++ Typing | Programming Typing</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
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
<h1 style="margin-top:70px;color:#17252A;">C++ Challange</h1>
</div>
</div>

<div id="words_container">
  <span style="color:rgb(170,170,170,0.7)">//FileDandingDemo.cpp : start typing to begin session</span
  ><br><span id="0">#</span
  ><span id="1">i</span
  ><span id="2">n</span
  ><span id="3">c</span
  ><span id="4">l</span
  ><span id="5">u</span
  ><span id="6">d</span
  ><span id="7">e</span
  ><span id="8"><</span
  ><span id="9">i</span
  ><span id="10">o</span
  ><span id="11">s</span
  ><span id="12">t</span
  ><span id="13">r</span
  ><span id="14">e</span
  ><span id="15">a</span
  ><span id="16">m</span
  ><span id="17">></span
  ><br><span id="18">#</span
  ><span id="19">i</span
  ><span id="20">n</span
  ><span id="21">c</span
  ><span id="22">l</span
  ><span id="23">u</span
  ><span id="24">d</span
  ><span id="25">e</span
  ><span id="26"><</span
  ><span id="27">f</span
  ><span id="28">s</span
  ><span id="29">t</span
  ><span id="30">r</span
  ><span id="31">e</span
  ><span id="32">a</span
  ><span id="33">m</span
  ><span id="34">></span
  ><br><span id="35">#</span
  ><span id="36">i</span
  ><span id="37">n</span
  ><span id="38">c</span
  ><span id="39">l</span
  ><span id="40">u</span
  ><span id="41">d</span
  ><span id="42">e</span
  ><span id="43"><</span
  ><span id="44">s</span
  ><span id="45">t</span
  ><span id="46">r</span
  ><span id="47">i</span
  ><span id="48">n</span
  ><span id="49">g</span
  ><span id="50">></span
  ><br><span id="51">#</span
  ><span id="52">i</span
  ><span id="53">n</span
  ><span id="54">c</span
  ><span id="55">l</span
  ><span id="56">u</span
  ><span id="57">d</span
  ><span id="58">e</span
  ><span id="59"><</span
  ><span id="60">c</span
  ><span id="61">c</span
  ><span id="62">t</span
  ><span id="63">y</span
  ><span id="64">p</span
  ><span id="65">e</span
  ><span id="66">></span
  ><br><span id="67">u</span
  ><span id="68">s</span
  ><span id="69">i</span
  ><span id="70">n</span
  ><span id="71">g</span
  ><span id="72">&nbsp;</span
  ><span id="73">n</span
  ><span id="74">a</span
  ><span id="75">m</span
  ><span id="76">e</span
  ><span id="77">s</span
  ><span id="78">p</span
  ><span id="79">a</span
  ><span id="80">c</span
  ><span id="81">e</span
  ><span id="82">&nbsp; </span
  ><span id="83">s</span
  ><span id="84">t</span
  ><span id="85">d</span
  ><span id="86">;</span
  ><br><span id="87">i</span
  ><span id="88">n</span
  ><span id="89">t</span
  ><span id="90">&nbsp;</span
  ><span id="91">m</span
  ><span id="92">a</span
  ><span id="93">i</span
  ><span id="94">n</span
  ><span id="95">(</span
  ><span id="96">)</span
  ><span id="97">{</span
  ><br>&emsp;<span id="98">i</span
  ><span id="99">f</span
  ><span id="100">s</span
  ><span id="101">t</span
  ><span id="102">r</span
  ><span id="103">e</span
  ><span id="104">a</span
  ><span id="105">m</span
  ><span id="106">&nbsp;</span
  ><span id="107">i</span
  ><span id="108">f</span
  ><span id="109">i</span
  ><span id="110">l</span
  ><span id="111">e</span
  ><span id="112">;</span
  ><br>&emsp;<span id="113">i</span
  ><span id="114">f</span
  ><span id="115">i</span
  ><span id="116">l</span
  ><span id="117">e</span
  ><span id="118">.</span
  ><span id="119">o</span
  ><span id="120">p</span
  ><span id="121">e</span
  ><span id="122">n</span
  ><span id="123">(</span
  ><span id="124">"</span
  ><span id="125">t</span
  ><span id="126">e</span
  ><span id="127">x</span
  ><span id="128">t</span
  ><span id="129">.</span
  ><span id="130">t</span
  ><span id="131">x</span
  ><span id="132">t</span
  ><span id="133">"</span
  ><span id="134">)</span
  ><span id="135">;</span
  ><br>&emsp;<span id="136">c</span
  ><span id="137">o</span
  ><span id="138">u</span
  ><span id="139">t</span
  ><span id="140">&nbsp;</span
  ><span id="141"><</span
  ><span id="142"><</span
  ><span id="143">&nbsp;</span
  ><span id="144">"</span
  ><span id="145">R</span
  ><span id="146">e</span
  ><span id="147">a</span
  ><span id="148">d</span
  ><span id="149">i</span
  ><span id="150">n</span
  ><span id="151">g</span
  ><span id="152">&nbsp;</span
  ><span id="153">d</span
  ><span id="154">a</span
  ><span id="155">t</span
  ><span id="156">a</span
  ><span id="157">&nbsp;</span
  ><span id="158">f</span
  ><span id="159">r</span
  ><span id="160">o</span
  ><span id="161">m</span
  ><span id="162">&nbsp;</span
  ><span id="163">a</span
  ><span id="164">&nbsp;</span
  ><span id="165">f</span
  ><span id="166">i</span
  ><span id="167">l</span
  ><span id="168">e</span
  ><span id="169">&nbsp;</span
  ><span id="170">:</span
  ><span id="171">-</span
  ><span id="172">"</span
  ><span id="173">&nbsp;</span
  ><span id="174"><</span
  ><span id="175"><</span
  ><span id="176">&nbsp;</span
  ><span id="177">e</span
  ><span id="178">n</span
  ><span id="179">d</span
  ><span id="180">l</span
  ><span id="181">;</span
  ><br>&emsp;<span id="182">i</span
  ><span id="183">n</span
  ><span id="184">t</span
  ><span id="185">&nbsp;</span
  ><span id="186">c</span
  ><span id="187">=</span
  ><span id="188">i</span
  ><span id="189">f</span
  ><span id="190">i</span
  ><span id="191">l</span
  ><span id="192">e</span
  ><span id="193">.</span
  ><span id="194">p</span
  ><span id="195">e</span
  ><span id="196">e</span
  ><span id="197">k</span
  ><span id="198">(</span
  ><span id="199">)</span
  ><span id="200">;</span
  ><br>&emsp;<span id="201">i</span
  ><span id="202">f</span
  ><span id="203">(</span
  ><span id="204">c</span
  ><span id="205">=</span
  ><span id="206">=</span
  ><span id="207">E</span
  ><span id="208">O</span
  ><span id="209">F</span
  ><span id="210">)</span
  ><span id="211">&nbsp;</span
  ><span id="212">r</span
  ><span id="213">e</span
  ><span id="214">t</span
  ><span id="215">u</span
  ><span id="216">r</span
  ><span id="217">n</span
  ><span id="218">&nbsp;</span
  ><span id="219">1</span
  ><span id="220">;</span
  ><br>&emsp;<span id="221">i</span
  ><span id="222">f</span
  ><span id="223">(</span
  ><span id="224">i</span
  ><span id="225">s</span
  ><span id="226">d</span
  ><span id="227">i</span
  ><span id="228">g</span
  ><span id="229">i</span
  ><span id="230">t</span
  ><span id="231">(</span
  ><span id="232">c</span
  ><span id="233">)</span
  ><span id="234">)</span
  ><br>&emsp;<span id="235">{</span
  ><br>&emsp;&emsp;<span id="236">i</span
  ><span id="237">n</span
  ><span id="238">t</span
  ><span id="239">&nbsp;</span
  ><span id="240">n</span
  ><span id="241">;</span
  ><br>&emsp;&emsp;<span id="242">i</span
  ><span id="243">f</span
  ><span id="244">i</span
  ><span id="245">l</span
  ><span id="246">e</span
  ><span id="247">&nbsp;</span
  ><span id="248">></span
  ><span id="249">></span
  ><span id="250">&nbsp;</span
  ><span id="251">n</span
  ><span id="252">;</span
  ><br>&emsp;&emsp;<span id="253">c</span
  ><span id="254">o</span
  ><span id="255">u</span
  ><span id="256">t</span
  ><span id="257">&nbsp;</span
  ><span id="258"><</span
  ><span id="259"><</span
  ><span id="260">&nbsp;</span
  ><span id="261">"</span
  ><span id="262">D</span
  ><span id="263">a</span
  ><span id="264">t</span
  ><span id="265">a</span
  ><span id="266">&nbsp;</span
  ><span id="267">i</span
  ><span id="268">n</span
  ><span id="269">&nbsp;</span
  ><span id="270">t</span
  ><span id="271">h</span
  ><span id="272">e</span
  ><span id="273">&nbsp;</span
  ><span id="274">f</span
  ><span id="275">i</span
  ><span id="276">l</span
  ><span id="277">e</span
  ><span id="278">:</span
  ><span id="279">&nbsp;</span
  ><span id="280">"</span
  ><span id="281">&nbsp;</span
  ><span id="282"><</span
  ><span id="283"><</span
  ><span id="284">&nbsp;</span
  ><span id="285">n</span
  ><span id="286"><</span
  ><span id="287"><</span
  ><span id="288">&nbsp;</span
  ><span id="289">'</span
  ><span id="290">n</span
  ><span id="291">'</span
  ><span id="292">;</span
  ><br>&emsp;<span id="293">}</span
  ><br>&emsp;<span id="294">e</span
  ><span id="295">l</span
  ><span id="296">s</span
  ><span id="297">e</span
  ><br>&emsp;<span id="298">{</span
  ><br>&emsp;&emsp;<span id="299">s</span
  ><span id="300">t</span
  ><span id="301">r</span
  ><span id="302">i</span
  ><span id="303">n</span
  ><span id="304">g</span
  ><span id="305">&nbsp;</span
  ><span id="306">s</span
  ><span id="307">t</span
  ><span id="308">r</span
  ><span id="309">;</span
  ><br>&emsp;&emsp;<span id="310">i</span
  ><span id="311">f</span
  ><span id="312">i</span
  ><span id="313">l</span
  ><span id="314">e</span
  ><span id="315">&nbsp;</span
  ><span id="316">></span
  ><span id="317">></span
  ><span id="318">&nbsp;</span
  ><span id="319">s</span
  ><span id="320">t</span
  ><span id="321">r</span
  ><span id="322">;</span
  ><br>&emsp;&emsp;<span id="323">c</span
  ><span id="324">o</span
  ><span id="325">u</span
  ><span id="326">t</span
  ><span id="327">&nbsp;</span
  ><span id="328"><</span
  ><span id="329"><</span
  ><span id="330">&nbsp;</span
  ><span id="331">"</span
  ><span id="332">D</span
  ><span id="333">a</span
  ><span id="334">t</span
  ><span id="335">a</span
  ><span id="336">&nbsp;</span
  ><span id="337">i</span
  ><span id="338">n</span
  ><span id="339">&nbsp;</span
  ><span id="340">t</span
  ><span id="341">h</span
  ><span id="342">e</span
  ><span id="343">&nbsp;</span
  ><span id="344">f</span
  ><span id="345">i</span
  ><span id="346">l</span
  ><span id="347">e</span
  ><span id="348">:</span
  ><span id="349">&nbsp;</span
  ><span id="350">"</span
  ><span id="351"><</span
  ><span id="352"><</span
  ><span id="353">&nbsp;</span
  ><span id="354">s</span
  ><span id="355">t</span
  ><span id="356">r</span
  ><span id="357">&nbsp;</span
  ><span id="358"><</span
  ><span id="359"><</span
  ><span id="360">&nbsp;</span
  ><span id="361">'</span
  ><span id="362">n</span
  ><span id="363">'</span
  ><span id="364">;</span
  ><br>&emsp;<span id="365">}</span
  ><br>&emsp;<span id="366">i</span
  ><span id="367">f</span
  ><span id="368">i</span
  ><span id="369">l</span
  ><span id="370">e</span
  ><span id="371">.</span
  ><span id="372">c</span
  ><span id="373">l</span
  ><span id="374">o</span
  ><span id="375">s</span
  ><span id="376">e</span
  ><span id="377">(</span
  ><span id="378">)</span
  ><span id="379">;</span
  ><br>&emsp;<span id="380">r</span
  ><span id="381">e</span
  ><span id="382">t</span
  ><span id="383">u</span
  ><span id="384">r</span
  ><span id="385">n</span
  ><span id="386">&nbsp; </span
  ><span id="387">0</span
  ><span id="388">;</span
  ><br><span id="389">}</span
  ><span id="390"> </span>
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
var easy_words=['#', 'i', 'n', 'c', 'l', 'u', 'd', 'e', '<', 'i', 'o', 's', 't', 'r', 'e', 'a', 'm', '>', '#', 'i', 'n', 'c', 'l', 'u', 'd', 'e', '<', 'f', 's', 't', 'r', 'e', 'a', 'm', '>', '#', 'i', 'n', 'c', 'l', 'u', 'd', 'e', '<', 's', 't', 'r', 'i', 'n', 'g', '>', '#', 'i', 'n', 'c', 'l', 'u', 'd', 'e', '<', 'c', 'c', 't', 'y', 'p', 'e', '>', 'u', 's', 'i', 'n', 'g', ' ', 'n', 'a', 'm', 'e', 's', 'p', 'a', 'c', 'e', ' ', 's', 't', 'd', ';', 'i', 'n', 't', ' ', 'm', 'a', 'i', 'n', '(', ')', '{', 'i', 'f', 's', 't', 'r', 'e', 'a', 'm', ' ', 'i', 'f', 'i', 'l', 'e', ';', 'i', 'f', 'i', 'l', 'e', '.', 'o', 'p', 'e', 'n', '(', '"', 't', 'e', 'x', 't', '.', 't', 'x', 't', '"', ')', ';', 'c', 'o', 'u', 't', ' ', '<', '<', ' ', '"', 'R', 'e', 'a', 'd', 'i', 'n', 'g', ' ', 'd', 'a', 't', 'a', ' ', 'f', 'r', 'o', 'm', ' ', 'a', ' ', 'f', 'i', 'l', 'e', ' ', ':', '-', '"', ' ', '<', '<', ' ', 'e', 'n', 'd', 'l', ';', 'i', 'n', 't', ' ', 'c', '=', 'i', 'f', 'i', 'l', 'e', '.', 'p', 'e', 'e', 'k', '(', ')', ';', 'i', 'f', '(', 'c', '=', '=', 'E', 'O', 'F', ')', ' ', 'r', 'e', 't', 'u', 'r', 'n', ' ', '1', ';', 'i', 'f', '(', 'i', 's', 'd', 'i', 'g', 'i', 't', '(', 'c', ')', ')', '{', 'i', 'n', 't', ' ', 'n', ';', 'i', 'f', 'i', 'l', 'e', ' ', '>', '>', ' ', 'n', ';', 'c', 'o', 'u', 't', ' ', '<', '<', ' ', '"', 'D', 'a', 't', 'a', ' ', 'i', 'n', ' ', 't', 'h', 'e', ' ', 'f', 'i', 'l', 'e', ':', ' ', '"', ' ', '<', '<', ' ', 'n', '<', '<', ' ', "'", 'n', "'", ';', '}', 'e', 'l', 's', 'e', '{', 's', 't', 'r', 'i', 'n', 'g', ' ', 's', 't', 'r', ';', 'i', 'f', 'i', 'l', 'e', ' ', '>', '>', ' ', 's', 't', 'r', ';', 'c', 'o', 'u', 't', ' ', '<', '<', ' ', '"', 'D', 'a', 't', 'a', ' ', 'i', 'n', ' ', 't', 'h', 'e', ' ', 'f', 'i', 'l', 'e', ':', ' ', '"', '<', '<', ' ', 's', 't', 'r', ' ', '<', '<', ' ', "'", 'n', "'", ';', '}', 'i', 'f', 'i', 'l', 'e', '.', 'c', 'l', 'o', 's', 'e', '(', ')', ';', 'r', 'e', 't', 'u', 'r', 'n', ' ', '0', ';', '}'];
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
                if(count==390){
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
                  window.location.href="c++?wm="+parseInt(wpm)+"cr="+correct+"in="+incorrect+"m"+parseInt(minutes)+"s"+parseInt(seconds);
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

      $sql1 = "SELECT cplusplus_wpm FROM challanges where id=$user_id" ;
      $result = $conn->query($sql1);
      $row=$result->fetch_assoc();
      echo $row["cplusplus_wpm"];
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
      if($wpm_val>=$row["cplusplus_wpm"]){
        $sql = "UPDATE challanges SET cplusplus_wpm=$wpm_val WHERE id=$user_id";
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
