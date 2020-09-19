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
<title>Advanced Typing | Typing Master | Typing speed test | myfastfingers.com</title>
<!--CSS -->
<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('css/easy_file.css') }}">
</head>

<body>
<script type="text/javascript" src="{{asset('js/jjquery.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/custom.js')}}"></script>

<header class="header" id="HOME">

@include('navbarFolder.navbar')

<div class="header-overlay">

<div class="container">

<div class="row">

<div class="col-md-12">

<div id="words_container" style="margin-top:100px">
<span id="0">Abacaxi</span>
<span id="1">abgesang</span>
<span id="2">abiuret</span>
<span id="3">advocaat</span>
<span id="4">Aitch</span>
<span id="5">aloisiite</span>
<span id="6">atlatl</span>
<span id="7">Autochthonous</span>
<span id="8">bdelloid</span>
<span id="9">bhagavata</span>
<span id="10">bhikku</span>
<span id="11">bobbejaan</span>
<span id="12">Cassioberry</span>
<span id="13">catapleiite</span>
<span id="14">chhatri</span>
<span id="15">chiaroscurist</span>
<span id="16">chihuahua</span>
<span id="17">Chlorophyll</span>
<span id="18">chthonic</span>
<span id="19">cixiid</span>
<span id="20">cnemidocoptes</span>
<span id="21">cnidoblast</span>
<span id="22">coelacanth</span>
<span id="23">courtoisie</span>
<span id="24">Crwth</span>
<span id="25">ctenii</span>
<span id="26">cywydd</span>
<span id="27">dhole</span>
<span id="28">dvandva</span>
<span id="29">Dzungar</span>
<span id="30">eczema</span>
<span id="31">egueiite</span>
<span id="32">Eichhornia</span>
<span id="33">eudaemonic</span>
<span id="34">fjeld</span>
<span id="35">gnathonic</span>
<span id="36">gneissoid</span>
<span id="37">gnomonic</span>
<span id="38">Gnosticize</span>
<span id="39">jharal</span>
<span id="40">Kharijite</span>
<span id="41">khedive</span>
<span id="42">kiekie</span>
<span id="43">Kierkegaardian</span>
<span id="44">knaidlach</span>
<span id="45">Kwakiutl</span>
<span id="46">logorrhea</span>
<span id="47">mbira</span>
<span id="48">mlechchha</span>
<span id="49">Myxosporidiida</span>
<span id="50">ngege</span>
<span id="51">ngwee</span>
<span id="52">periscii</span>
<span id="53">pfeffernuss</span>
<span id="54">pfennig</span>
<span id="55">phalaenopsid</span>
<span id="56">phthalein</span>
<span id="57">phthisis</span>
<span id="58">Prosciutto</span>
<span id="59">pschent</span>
<span id="60">psephology</span>
<span id="61">pseudaxis</span>
<span id="62">psittaceous</span>
<span id="63">psoriasis</span>
<span id="64">Ptarmic</span>
<span id="65">pterodactyl</span>
<span id="66">ptosis</span>
<span id="67">pycnogonid</span>
<span id="68">Qiviut</span>
<span id="69">rhathymia</span>
<span id="70">rhotacismus</span>
<span id="71">rijksdaalder</span>
<span id="72">rygbere</span>
<span id="73">sacrilegious</span>
<span id="74">schokker</span>
<span id="75">Sforzando</span>
<span id="76">sgabello</span>
<span id="77">shanghaiing</span>
<span id="78">sjambok</span>
<span id="79">soubrette</span>
<span id="80">staphylococci</span>
<span id="81">svedberg</span>
<span id="82">synecdoche</span>
<span id="83">taaffeite</span>
<span id="84">taeniid</span>
<span id="85">takkanah</span>
<span id="86">tchaviche</span>
<span id="87">teonanacatl</span>
<span id="88">tjaele</span>
<span id="89">tsao</span>
<span id="90">Tsingtao</span>
<span id="91">tzigane</span>
<span id="92">Ursprache</span>
<span id="93">vignette</span>
<span id="94">volksraad</span>
<span id="95">vrbaite</span>
<span id="96">weltanschauung</span>
<span id="97">ylem</span>
<span id="98">ytterbium</span>
<span id="99">zuurveldt</span>
<span id="100">zwetschenwasser</span>
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
var easy_words=["Abacaxi","abgesang","abiuret","advocaat","Aitch","aloisiite",
"atlatl","Autochthonous","bdelloid","bhagavata","bhikku","bobbejaan",
"Cassioberry","catapleiite","chhatri","chiaroscurist","chihuahua","Chlorophyll",
"chthonic","cixiid","cnemidocoptes","cnidoblast","coelacanth","courtoisie",
"Crwth","ctenii","cywydd","dhole","dvandva","Dzungar","eczema","egueiite",
"Eichhornia","eudaemonic","fjeld","gnathonic","gneissoid","gnomonic",
"Gnosticize","jharal","Kharijite","khedive","kiekie","Kierkegaardian",
"knaidlach","Kwakiutl","logorrhea","mbira","mlechchha","Myxosporidiida","ngege",
"ngwee","periscii","pfeffernuss","pfennig","phalaenopsid","phthalein","phthisis",
"Prosciutto","pschent","psephology","pseudaxis","psittaceous","psoriasis",
"Ptarmic","pterodactyl","ptosis","pycnogonid","Qiviut","rhathymia","rhotacismus",
"rijksdaalder","rygbere","sacrilegious","schokker","Sforzando","sgabello",
"shanghaiing","sjambok","soubrette","staphylococci","svedberg","synecdoche",
"taaffeite","taeniid","takkanah","tchaviche","teonanacatl","tjaele","tsao",
"Tsingtao","tzigane","Ursprache","vignette","volksraad","vrbaite",
"weltanschauung","ylem","ytterbium","zuurveldt","zwetschenwasser"];
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
                window.location.href="hard?wm="+parseInt(wpm)+"cr="+correct+"in="+incorrect;
                //document.getElementById("words_container").remove();
                //document.getElementById("typing_part").remove();
                //$("#result").show();
                //var res_width=$('#result').width();
                //setTimeout(function(){
                //  $('html,body').animate({
                //    scrollTop: $("#words_container").offset().top});
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

      $sql1 = "SELECT hard_wpm FROM challanges where id=$user_id" ;
      $result = $conn->query($sql1);
      $row=$result->fetch_assoc();
      echo $row["hard_wpm"];
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
      if($wpm_val>=$row["hard_wpm"]){
        $sql1 = "UPDATE challanges SET hard_wpm=$wpm_val WHERE id=$user_id";
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
