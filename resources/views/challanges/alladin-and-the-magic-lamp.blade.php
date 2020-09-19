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
<span id='0'>They</span>
<span id='1'>stepped</span>
<span id='2'>inside</span>
<span id='3'>the</span>
<span id='4'>cave.</span>
<span id='5'>Pitch_black</span>
<span id='6'>it</span>
<span id='7'>was.</span>
<span id='8'>The</span>
<span id='9'>old</span>
<span id='10'>man</span>
<span id='11'>shook</span>
<span id='12'>open</span>
<span id='13'>his</span>
<span id='14'>fist</span>
<span id='15'>and</span>
<span id='16'>a</span>
<span id='17'>ball</span>
<span id='18'>of</span>
<span id='19'>light</span>
<span id='20'>suddenly</span>
<span id='21'>appeared,</span>
<span id='22'>brightening</span>
<span id='23'>the</span>
<span id='24'>cave.</span>
<span id='25'>Under</span>
<span id='26'>the</span>
<span id='27'>light</span>
<span id='28'>with</span>
<span id='29'>one</span>
<span id='30'>long</span>
<span id='31'>finger,</span>
<span id='32'>he</span>
<span id='33'>drew</span>
<span id='34'>the</span>
<span id='35'>shape</span>
<span id='36'>of</span>
<span id='37'>a</span>
<span id='38'>circle</span>
<span id='39'>over</span>
<span id='40'>the</span>
<span id='41'>ground.</span>
<span id='42'>He</span>
<span id='43'>pulled</span>
<span id='44'>from</span>
<span id='45'>his</span>
<span id='46'>pocket</span>
<span id='47'>some</span>
<span id='48'>red</span>
<span id='49'>dust</span>
<span id='50'>and</span>
<span id='51'>threw</span>
<span id='52'>it</span>
<span id='53'>over</span>
<span id='54'>the</span>
<span id='55'>circle,</span>
<span id='56'>and</span>
<span id='57'>at</span>
<span id='58'>the</span>
<span id='59'>same</span>
<span id='60'>time</span>
<span id='61'>said</span>
<span id='62'>some</span>
<span id='63'>magic</span>
<span id='64'>words.</span>
<span id='65'>The</span>
<span id='66'>earth</span>
<span id='67'>trembled</span>
<span id='68'>a</span>
<span id='69'>little</span>
<span id='70'>before</span>
<span id='71'>them.</span>
<span id='72'>The</span>
<span id='73'>floor</span>
<span id='74'>of</span>
<span id='75'>the</span>
<span id='76'>cave</span>
<span id='77'>cracked</span>
<span id='78'>open,</span>
<span id='79'>and</span>
<span id='80'>the</span>
<span id='81'>cracks</span>
<span id='82'>grew</span>
<span id='83'>wider</span>
<span id='84'>and</span>
<span id='85'>deeper.</span>
<span id='86'>Then</span>
<span id='87'>up</span>
<span id='88'>from</span>
<span id='89'>below</span>
<span id='90'>the</span>
<span id='91'>ground</span>
<span id='92'>rose</span>
<span id='93'>a</span>
<span id='94'>giant</span>
<span id='95'>white</span>
<span id='96'>quartz</span>
<span id='97'>crystal</span>
<span id='98'>and</span>
<span id='99'>it</span>
<span id='100'>filled</span>
<span id='101'>the</span>
<span id='102'>circle.</span>
<span id='103'>"Do</span>
<span id='104'>not</span>
<span id='105'>be</span>
<span id='106'>alarmed,"</span>
<span id='107'>said</span>
<span id='108'>the</span>
<span id='109'>magician.</span>
<span id='110'>"Under</span>
<span id='111'>this</span>
<span id='112'>giant</span>
<span id='113'>white</span>
<span id='114'>crystal</span>
<span id='115'>lies</span>
<span id='116'>a</span>
<span id='117'>treasure</span>
<span id='118'>that</span>
<span id='119'>is</span>
<span id='120'>to</span>
<span id='121'>be</span>
<span id='122'>yours."</span>
<span id='123'>He</span>
<span id='124'>chanted</span>
<span id='125'>a</span>
<span id='126'>few</span>
<span id='127'>magic</span>
<span id='128'>words</span>
<span id='129'>and</span>
<span id='130'>the</span>
<span id='131'>giant</span>
<span id='132'>crystal</span>
<span id='133'>rose</span>
<span id='134'>up</span>
<span id='135'>several</span>
<span id='136'>feet</span>
<span id='137'>in</span>
<span id='138'>the</span>
<span id='139'>air,</span>
<span id='140'>moved</span>
<span id='141'>to</span>
<span id='142'>the</span>
<span id='143'>side</span>
<span id='144'>and</span>
<span id='145'>landed.</span>
<span id='146'>Aladdin</span>
<span id='147'>peered</span>
<span id='148'>into</span>
<span id='149'>the</span>
<span id='150'>hole.</span>
<span id='151'>He</span>
<span id='152'>saw</span>
<span id='153'>steps</span>
<span id='154'>that</span>
<span id='155'>led</span>
<span id='156'>down</span>
<span id='157'>to</span>
<span id='158'>a</span>
<span id='159'>dark</span>
<span id='160'>hole.</span>
<span id='161'>"Fear</span>
<span id='162'>nothing,"</span>
<span id='163'>said</span>
<span id='164'>the</span>
<span id='165'>magician</span>
<span id='166'>to</span>
<span id='167'>Aladdin.</span>
<span id='168'>"But</span>
<span id='169'>obey</span>
<span id='170'>me.</span>
<span id='171'>Go</span>
<span id='172'>down,</span>
<span id='173'>and</span>
<span id='174'>at</span>
<span id='175'>the</span>
<span id='176'>foot</span>
<span id='177'>of</span>
<span id='178'>the</span>
<span id='179'>steps,</span>
<span id='180'>follow</span>
<span id='181'>a</span>
<span id='182'>long</span>
<span id='183'>hall.</span>
<span id='184'>You</span>
<span id='185'>will</span>
<span id='186'>walk</span>
<span id='187'>through</span>
<span id='188'>a</span>
<span id='189'>garden</span>
<span id='190'>of</span>
<span id='191'>fruit</span>
<span id='192'>trees.</span>
<span id='193'>You</span>
<span id='194'>must</span>
<span id='195'>touch</span>
<span id='196'>nothing</span>
<span id='197'>of</span>
<span id='198'>them.</span>
<span id='199'>Walk</span>
<span id='200'>on</span>
<span id='201'>till</span>
<span id='202'>you</span>
<span id='203'>come</span>
<span id='204'>to</span>
<span id='205'>a</span>
<span id='206'>large</span>
<span id='207'>flat</span>
<span id='208'>stone</span>
<span id='209'>and</span>
<span id='210'>on</span>
<span id='211'>the</span>
<span id='212'>stone</span>
<span id='213'>will</span>
<span id='214'>be</span>
<span id='215'>a</span>
<span id='216'>lighted</span>
<span id='217'>lamp.</span>
<span id='218'>Pour</span>
<span id='219'>out</span>
<span id='220'>the</span>
<span id='221'>oil</span>
<span id='222'>in</span>
<span id='223'>the</span>
<span id='224'>lamp</span>
<span id='225'>and</span>
<span id='226'>bring</span>
<span id='227'>it</span>
<span id='228'>to</span>
<span id='229'>me.</span>
<span id='230'>Now</span>
<span id='231'>go!"</span>
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
var easy_words=["They","stepped","inside","the","cave.","Pitch_black","it","was.",
"The","old","man","shook","open","his","fist","and","a","ball","of","light","suddenly",
"appeared,","brightening","the","cave.","Under","the","light","with","one","long",
"finger,","he","drew","the","shape","of","a","circle","over","the","ground.",
"He","pulled","from","his","pocket","some","red","dust","and","threw","it",
"over","the","circle,","and","at","the","same","time","said","some","magic",
"words.","The","earth","trembled","a","little","before","them.","The","floor",
"of","the","cave","cracked","open,","and","the","cracks","grew","wider","and",
"deeper.","Then","up","from","below","the","ground","rose","a","giant","white",
"quartz","crystal","and","it","filled","the","circle.",'"Do',"not","be",
'alarmed,"',"said","the","magician.",'"Under',"this","giant","white","crystal",
"lies","a","treasure","that","is","to","be",'yours."',"He","chanted","a","few",
"magic","words","and","the","giant","crystal","rose","up","several","feet","in",
"the","air,","moved","to","the","side","and","landed.","Aladdin","peered",
"into","the","hole.","He","saw","steps","that","led","down","to","a","dark","hole.",
'"Fear','nothing,"',"said","the","magician","to","Aladdin.",'"But',"obey",
"me.","Go","down,","and","at","the","foot","of","the","steps,","follow","a",
"long","hall.","You","will","walk","through","a","garden","of","fruit",
"trees.","You","must","touch","nothing","of","them.","Walk","on","till","you",
"come","to","a","large","flat","stone","and","on","the","stone","will","be","a",
"lighted","lamp.","Pour","out","the","oil","in","the","lamp","and","bring",
"it","to","me.","Now",'go!"'];
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
                window.location.href="alladin-and-the-magic-lamp?wm="+parseInt(wpm)+"cr="+correct+"in="+incorrect;

                //document.getElementById("words_container").remove();
                //document.getElementById("typing_part").remove();
                //$("#result").show();
                //var res_width=$('#result').width();
                //setTimeout(function(){
                //  $('html,body').animate({
                //    scrollTop: $("#typing_part").offset().top});
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

      $sql1 = "SELECT alladin_wpm FROM challanges where id=$user_id" ;
      $result = $conn->query($sql1);
      $row=$result->fetch_assoc();
      echo $row["alladin_wpm"];
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
      if($wpm_val>=$row["alladin_wpm"]){
        $sql1 = "UPDATE challanges SET alladin_wpm=$wpm_val WHERE id=$user_id";
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
