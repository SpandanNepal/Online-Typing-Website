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
<meta name="description" content="English Typing website | Basic, Intermediate, Advanced, Paragraph Typing | 1 minute typing | Customizable time,
Typing Instructions | Typing games | Easy, Medium, Hard | myfastfingers.com">
<meta name="keywords" content="English typing website, Easy, Medium, Hard or Basic, Intermediate, Advanced, Paragraph typing, Customizable time,
Touch Typing Instructions,typing,typing test,typing master,typing speed test,typing practice,typing test online,typing master free download,
typing test 1 minute,typing tutor,typing speed,typing games,typing test online free">
<link rel="shortcut icon" href="../favicon.ico" />
<title>Paragraph Typing | Typing Speed | Typing Test | Online Typing | myfastfingers.com </title>
<!--CSS -->
<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('css/easy_file.css') }}">
</head>

<body>
<script type="text/javascript" src="{{asset('js/jjquery.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/custom.js')}}"></script>

<style type="text/css">
#words_container{
 margin:0 auto;
 height: 250px;
 width: 100%;
 margin-top: 15px;
 margin-bottom: 30px;
 padding-left: 3px;
 border: 1px solid #ccc;
 background-color: #f3f3f3;
 overflow: hidden;
 font-size: 35px;
 border-radius: 6px;
}
</style>

<header class="header" id="HOME">

@include('navbarFolder.navbar')

<div class="header-overlay">

<div class="container">

<div class="row">

<div class="col-md-12">

<div id="words_container" style="margin-top:100px">
<span id="0">A</span>
<span id="1">violent</span>
<span id="2">storm</span>
<span id="3">rages</span>
<span id="4">around</span>
<span id="5">a</span>
<span id="6">small</span>
<span id="7">ship</span>
<span id="8">at</span>
<span id="9">sea.</span>
<span id="10">The</span>
<span id="11">master</span>
<span id="12">of</span>
<span id="13">the</span>
<span id="14">ship</span>
<span id="15">calls</span>
<span id="16">for</span>
<span id="17">his</span>
<span id="18">boatswain</span>
<span id="19">to</span>
<span id="20">rouse</span>
<span id="21">the</span>
<span id="22">mariners</span>
<span id="23">to</span>
<span id="24">action</span>
<span id="25">and</span>
<span id="26">prevent</span>
<span id="27">the</span>
<span id="28">ship</span>
<span id="29">from</span>
<span id="30">being</span>
<span id="31">run</span>
<span id="32">aground</span>
<span id="33">by</span>
<span id="34">the</span>
<span id="35">tempest.</span>
<span id="36">Chaos</span>
<span id="37">ensues.</span>
<span id="38">Some</span>
<span id="39">mariners</span>
<span id="40">enter,</span>
<span id="41">followed</span>
<span id="42">by</span>
<span id="43">a</span>
<span id="44">group</span>
<span id="45">of</span>
<span id="46">nobles</span>
<span id="47">comprised</span>
<span id="48">of</span>
<span id="49">Alonso,</span>
<span id="50">King</span>
<span id="51">of</span>
<span id="52">Naples,</span>
<span id="53">Sebastian,</span>
<span id="54">his</span>
<span id="55">brother,</span>
<span id="56">Antonio,</span>
<span id="57">Gonzalo,</span>
<span id="58">and</span>
<span id="59">others.</span>
<span id="60">They</span>
<span id="61">have</span>
<span id="62">just</span>
<span id="63">come</span>
<span id="64">from</span>
<span id="65">Tunis,</span>
<span id="66">in</span>
<span id="67">Africa,</span>
<span id="68">where</span>
<span id="69">Alonso’s</span>
<span id="70">daughter,</span>
<span id="71">Claribel,</span>
<span id="72">has</span>
<span id="73">been</span>
<span id="74">married</span>
<span id="75">to</span>
<span id="76">the</span>
<span id="77">prince.</span>
<span id="78">As</span>
<span id="79">the</span>
<span id="80">Boatswain</span>
<span id="81">and</span>
<span id="82">his</span>
<span id="83">crew</span>
<span id="84">take</span>
<span id="85">in</span>
<span id="86">the</span>
<span id="87">topsail</span>
<span id="88">and</span>
<span id="89">the</span>
<span id="90">topmast,</span>
<span id="91">Alonso</span>
<span id="92">and</span>
<span id="93">his</span>
<span id="94">party</span>
<span id="95">are</span>
<span id="96">merely</span>
<span id="97">underfoot,</span>
<span id="98">and</span>
<span id="99">the</span>
<span id="100">Boatswain</span>
<span id="101">tells</span>
<span id="102">them</span>
<span id="103">to</span>
<span id="104">get</span>
<span id="105">below-decks.</span>
<span id="106">Gonzalo</span>
<span id="107">reminds</span>
<span id="108">the</span>
<span id="109">Boatswain</span>
<span id="110">that</span>
<span id="111">one</span>
<span id="112">of</span>
<span id="113">the</span>
<span id="114">passengers</span>
<span id="115">is</span>
<span id="116">of</span>
<span id="117">some</span>
<span id="118">importance,</span>
<span id="119">but</span>
<span id="120">the</span>
<span id="121">Boatswain</span>
<span id="122">is</span>
<span id="123">unmoved.</span>
<span id="124">He</span>
<span id="125">will</span>
<span id="126">do</span>
<span id="127">what</span>
<span id="128">he</span>
<span id="129">has</span>
<span id="130">to</span>
<span id="131">in</span>
<span id="132">order</span>
<span id="133">to</span>
<span id="134">save</span>
<span id="135">the</span>
<span id="136">ship,</span>
<span id="137">regardless</span>
<span id="138">of</span>
<span id="139">who</span>
<span id="140">is</span>
<span id="141">aboard.The</span>
<span id="142">lords</span>
<span id="143">go</span>
<span id="144">belowdecks,</span>
<span id="145">and</span>
<span id="146">then,</span>
<span id="147">adding</span>
<span id="148">to</span>
<span id="149">the</span>
<span id="150">chaos</span>
<span id="151">of</span>
<span id="152">the</span>
<span id="153">scene,</span>
<span id="154">three</span>
<span id="155">of</span>
<span id="156">them—Sebastian,</span>
<span id="157">Antonio,</span>
<span id="158">and</span>
<span id="159">Gonzalo—enter</span>
<span id="160">again</span>
<span id="161">only</span>
<span id="162">four</span>
<span id="163">lines</span>
<span id="164">later.</span>
<span id="165">Sebastian</span>
<span id="166">and</span>
<span id="167">Antonio</span>
<span id="168">curse</span>
<span id="169">the</span>
<span id="170">Boatswain</span>
<span id="171">in</span>
<span id="172">his</span>
<span id="173">labors,</span>
<span id="174">masking</span>
<span id="175">their</span>
<span id="176">fear</span>
<span id="177">with</span>
<span id="178">profanity.</span>
<span id="179">Some</span>
<span id="180">mariners</span>
<span id="181">enter</span>
<span id="182">wet</span>
<span id="183">and</span>
<span id="184">crying,</span>
<span id="185">and</span>
<span id="186">only</span>
<span id="187">at</span>
<span id="188">this</span>
<span id="189">point</span>
<span id="190">does</span>
<span id="191">the</span>
<span id="192">audience</span>
<span id="193">learn</span>
<span id="194">the</span>
<span id="195">identity</span>
<span id="196">of</span>
<span id="197">the</span>
<span id="198">passengers</span>
<span id="199">on-board.</span>
<span id="200">Gonzalo</span>
<span id="201">orders</span>
<span id="202">the</span>
<span id="203">mariners</span>
<span id="204">to</span>
<span id="205">pray</span>
<span id="206">for</span>
<span id="207">the</span>
<span id="208">king</span>
<span id="209">and</span>
<span id="210">the</span>
<span id="211">prince.</span>
<span id="212">There</span>
<span id="213">is</span>
<span id="214">a</span>
<span id="215">strange</span>
<span id="216">noise—perhaps</span>
<span id="217">the</span>
<span id="218">sound</span>
<span id="219">of</span>
<span id="220">thunder,</span>
<span id="221">splitting</span>
<span id="222">wood,</span>
<span id="223">or</span>
<span id="224">roaring</span>
<span id="225">water—and</span>
<span id="226">the</span>
<span id="227">cry</span>
<span id="228">of</span>
<span id="229">mariners.</span>
<span id="230">Antonio,</span>
<span id="231">Sebastian,</span>
<span id="232">and</span>
<span id="233">Gonzalo,</span>
<span id="234">preparing</span>
<span id="235">to</span>
<span id="236">sink</span>
<span id="237">to</span>
<span id="238">a</span>
<span id="239">watery</span>
<span id="240">grave,</span>
<span id="241">go</span>
<span id="242">in</span>
<span id="243">search</span>
<span id="244">of</span>
<span id="245">the</span>
<span id="246">king.</span>
</div>

<div id="typing_part">

<input id="container1" type="text" autocomplete="off" autocorrect="off" autocapitalize="off"
spellcheck="false" placeholder="click to start!"></input>

<div id="countdown">
<select id="countdown_select" name="time">
<option value="1">1 min</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
</select>
</div>

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

<div id="result">Result:</div>

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
var easy_words=['A', 'violent', 'storm', 'rages', 'around', 'a', 'small', 'ship',
'at', 'sea.', 'The', 'master', 'of', 'the', 'ship', 'calls', 'for', 'his',
'boatswain', 'to', 'rouse', 'the', 'mariners', 'to', 'action', 'and', 'prevent',
'the', 'ship', 'from', 'being', 'run', 'aground', 'by', 'the', 'tempest.', 'Chaos',
'ensues.', 'Some', 'mariners', 'enter,', 'followed', 'by', 'a', 'group', 'of', 'nobles',
'comprised', 'of', 'Alonso,', 'King', 'of', 'Naples,', 'Sebastian,', 'his', 'brother,',
'Antonio,', 'Gonzalo,', 'and', 'others.', 'They', 'have', 'just', 'come', 'from',
'Tunis,', 'in', 'Africa,', 'where', 'Alonso’s', 'daughter,', 'Claribel,',
'has', 'been', 'married', 'to', 'the', 'prince.', 'As', 'the', 'Boatswain',
'and', 'his', 'crew', 'take', 'in', 'the', 'topsail', 'and', 'the', 'topmast,',
'Alonso', 'and', 'his', 'party', 'are', 'merely', 'underfoot,', 'and',
'the', 'Boatswain', 'tells', 'them', 'to', 'get', 'below-decks.',
'Gonzalo', 'reminds', 'the', 'Boatswain', 'that', 'one', 'of', 'the',
'passengers', 'is', 'of', 'some', 'importance,', 'but', 'the', 'Boatswain',
'is', 'unmoved.', 'He', 'will', 'do', 'what', 'he', 'has', 'to', 'in', 'order',
'to', 'save', 'the', 'ship,', 'regardless', 'of', 'who', 'is', 'aboard.The',
'lords', 'go', 'belowdecks,', 'and', 'then,', 'adding', 'to', 'the', 'chaos',
'of', 'the', 'scene,', 'three', 'of', 'them—Sebastian,', 'Antonio,',
'and', 'Gonzalo—enter', 'again', 'only', 'four', 'lines', 'later.',
'Sebastian', 'and', 'Antonio', 'curse', 'the', 'Boatswain', 'in', 'his',
'labors,', 'masking', 'their', 'fear', 'with', 'profanity.', 'Some',
'mariners', 'enter', 'wet', 'and', 'crying,', 'and', 'only', 'at', 'this',
'point', 'does', 'the', 'audience', 'learn', 'the', 'identity', 'of',
'the', 'passengers', 'on-board.', 'Gonzalo', 'orders', 'the', 'mariners',
'to', 'pray', 'for', 'the', 'king', 'and', 'the', 'prince.', 'There',
'is', 'a', 'strange', 'noise—perhaps', 'the', 'sound', 'of', 'thunder,',
'splitting', 'wood,', 'or', 'roaring', 'water—and', 'the', 'cry', 'of',
'mariners.', 'Antonio,', 'Sebastian,', 'and', 'Gonzalo,', 'preparing',
'to', 'sink', 'to', 'a', 'watery', 'grave,', 'go', 'in', 'search', 'of', 'the', 'king.']

var count=0;
var correct=0;
var incorrect=0;
var tot_word_width=0;
var total_letter=0;
$("#container1").one("keypress", function(){
  var e=document.getElementById('countdown_select').value;
  var timeleft=e*60;
  var total_time=e*60;
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
                document.getElementById("words_container").scrollTop+=50;
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
                window.location.href="the-tempest?wm="+parseInt(wpm)+"cr="+correct+"in="+incorrect;
                //document.getElementById("words_container").remove();
                //document.getElementById("typing_part").remove();
                //$("#result").show();
                //var res_width=$('#result').width();
                //setTimeout(function(){
                //  $('html,body').animate({
                //    scrollTop: $("#result").offset().top});
                //});
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
  location.reload();
});
//$('#result').click(function(){
//  location.reload();
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

      $sql1 = "SELECT tempest_wpm FROM challanges where id=$user_id" ;
      $result = $conn->query($sql1);
      $row=$result->fetch_assoc();
      echo $row["tempest_wpm"];
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
      if($wpm_val>=$row["tempest_wpm"]){
        $sql1 = "UPDATE challanges SET tempest_wpm=$wpm_val WHERE id=$user_id";
      }//else{
        //$sql = "INSERT INTO challanges (easy_wpm)
        //VALUES ($wpm_val) where id;
        //}

      if ($conn->query($sql1) === TRUE) {
          echo "New record created successfully";
      } else {
          echo "Error: " . $sql1 . "<br>" . $conn->error;
      }

      $conn->close();
    }
 ?>
@endif
</body>
</html>
