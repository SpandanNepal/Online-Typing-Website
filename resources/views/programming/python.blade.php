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
<title>Python Typing | Programming Typing</title>
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
<h1 style="margin-top:70px;color:#17252A;">Python Challange</h1>
</div>
</div>

<div id="words_container">
              <span style="color:rgb(170,170,170,0.7)">#StackDemo.py : start typing to begin session</span>
              <br><span id="0">c</span
              ><span id="1">l</span
              ><span id="2">a</span
              ><span id="3">s</span
              ><span id="4">s</span
              ><span id="5">&nbsp;</span
              ><span id="6">S</span
              ><span id="7">t</span
              ><span id="8">a</span
              ><span id="9">c</span
              ><span id="10">k</span
              ><span id="11">F</span
              ><span id="12">u</span
              ><span id="13">l</span
              ><span id="14">l</span
              ><span id="15">(</span
              ><span id="16">E</span
              ><span id="17">x</span
              ><span id="18">c</span
              ><span id="19">e</span
              ><span id="20">p</span
              ><span id="21">t</span
              ><span id="22">i</span
              ><span id="23">o</span
              ><span id="24">n</span
              ><span id="25">)</span
              ><span id="26">:</span
              ><br>&emsp;<span id="27">d</span
              ><span id="28">e</span
              ><span id="29">f</span
              ><span id="30">&nbsp;</span
              ><span id="31">_</span
              ><span id="32">_</span
              ><span id="33">i</span
              ><span id="34">n</span
              ><span id="35">i</span
              ><span id="36">t</span
              ><span id="37">_</span
              ><span id="38">_</span
              ><span id="39">(</span
              ><span id="40">s</span
              ><span id="41">e</span
              ><span id="42">l</span
              ><span id="43">f</span
              ><span id="44">)</span
              ><span id="45">:</span
              ><br> &emsp; &emsp;<span id="46">s</span
              ><span id="47">e</span
              ><span id="48">l</span
              ><span id="49">f</span
              ><span id="50">.</span
              ><span id="51">m</span
              ><span id="52">s</span
              ><span id="53">g</span
              ><span id="54">&nbsp;</span
              ><span id="55">=</span
              ><span id="56">&nbsp;</span
              ><span id="57">'</span
              ><span id="58">s</span
              ><span id="59">t</span
              ><span id="60">a</span
              ><span id="61">c</span
              ><span id="62">k</span
              ><span id="63">&nbsp;</span
              ><span id="64">i</span
              ><span id="65">s</span
              ><span id="66">&nbsp;</span
              ><span id="67">f</span
              ><span id="68">u</span
              ><span id="69">l</span
              ><span id="70">l</span
              ><span id="71">'</span
              ><br> &emsp;<span id="72">d</span
              ><span id="73">e</span
              ><span id="74">f</span
              ><span id="75">&nbsp;</span
              ><span id="76">_</span
              ><span id="77">_</span
              ><span id="78">s</span
              ><span id="79">t</span
              ><span id="80">r</span
              ><span id="81">_</span
              ><span id="82">_</span
              ><span id="83">(</span
              ><span id="84">s</span
              ><span id="85">e</span
              ><span id="86">l</span
              ><span id="87">f</span
              ><span id="88">)</span
              ><span id="89">:</span
              ><br> &emsp; &emsp;<span id="90">r</span
              ><span id="91">e</span
              ><span id="92">t</span
              ><span id="93">u</span
              ><span id="94">r</span
              ><span id="95">n</span
              ><span id="96">&nbsp;</span
              ><span id="97">s</span
              ><span id="98">e</span
              ><span id="99">l</span
              ><span id="100">f</span
              ><span id="101">.</span
              ><span id="102">m</span
              ><span id="103">s</span
              ><span id="104">g</span
              ><br><span id="105">c</span
              ><span id="106">l</span
              ><span id="107">a</span
              ><span id="108">s</span
              ><span id="109">s</span
              ><span id="110">&nbsp;</span
              ><span id="111">S</span
              ><span id="112">t</span
              ><span id="113">a</span
              ><span id="114">c</span
              ><span id="115">k</span
              ><span id="116">E</span
              ><span id="117">m</span
              ><span id="118">p</span
              ><span id="119">t</span
              ><span id="120">y</span
              ><span id="121">(</span
              ><span id="122">E</span
              ><span id="123">x</span
              ><span id="124">c</span
              ><span id="125">e</span
              ><span id="126">p</span
              ><span id="127">t</span
              ><span id="128">i</span
              ><span id="129">o</span
              ><span id="130">n</span
              ><span id="131">)</span
              ><span id="132">:</span
              ><br> &emsp;<span id="133">d</span
              ><span id="134">e</span
              ><span id="135">f</span
              ><span id="136">&nbsp;</span
              ><span id="137">_</span
              ><span id="138">_</span
              ><span id="139">i</span
              ><span id="140">n</span
              ><span id="141">i</span
              ><span id="142">t</span
              ><span id="143">_</span
              ><span id="144">_</span
              ><span id="145">(</span
              ><span id="146">s</span
              ><span id="147">e</span
              ><span id="148">l</span
              ><span id="149">f</span
              ><span id="150">)</span
              ><span id="151">:</span
              ><br> &emsp; &emsp;<span id="152">s</span
              ><span id="153">e</span
              ><span id="154">l</span
              ><span id="155">f</span
              ><span id="156">.</span
              ><span id="157">m</span
              ><span id="158">s</span
              ><span id="159">g</span
              ><span id="160">&nbsp;</span
              ><span id="161">=</span
              ><span id="162">&nbsp;</span
              ><span id="163">'</span
              ><span id="164">s</span
              ><span id="165">t</span
              ><span id="166">a</span
              ><span id="167">c</span
              ><span id="168">k</span
              ><span id="169">&nbsp;</span
              ><span id="170">i</span
              ><span id="171">s</span
              ><span id="172">&nbsp;</span
              ><span id="173">e</span
              ><span id="174">m</span
              ><span id="175">p</span
              ><span id="176">t</span
              ><span id="177">y</span
              ><span id="178">'</span
              ><br> &emsp;<span id="179">d</span
              ><span id="180">e</span
              ><span id="181">f</span
              ><span id="182">&nbsp;</span
              ><span id="183">_</span
              ><span id="184">_</span
              ><span id="185">s</span
              ><span id="186">t</span
              ><span id="187">r</span
              ><span id="188">_</span
              ><span id="189">_</span
              ><span id="190">(</span
              ><span id="191">s</span
              ><span id="192">e</span
              ><span id="193">l</span
              ><span id="194">f</span
              ><span id="195">)</span
              ><span id="196">:</span
              ><br> &emsp; &emsp;<span id="197">r</span
              ><span id="198">e</span
              ><span id="199">t</span
              ><span id="200">u</span
              ><span id="201">r</span
              ><span id="202">n</span
              ><span id="203">&nbsp;</span
              ><span id="204">s</span
              ><span id="205">e</span
              ><span id="206">l</span
              ><span id="207">f</span
              ><span id="208">.</span
              ><span id="209">m</span
              ><span id="210">s</span
              ><span id="211">g</span
              ><br><span id="212">c</span
              ><span id="213">l</span
              ><span id="214">a</span
              ><span id="215">s</span
              ><span id="216">s</span
              ><span id="217">&nbsp;</span
              ><span id="218">M</span
              ><span id="219">y</span
              ><span id="220">S</span
              ><span id="221">t</span
              ><span id="222">a</span
              ><span id="223">c</span
              ><span id="224">k</span
              ><span id="225">:</span
              ><br> &emsp;<span id="226">d</span
              ><span id="227">e</span
              ><span id="228">f</span
              ><span id="229">&nbsp;</span
              ><span id="230">_</span
              ><span id="231">_</span
              ><span id="232">i</span
              ><span id="233">n</span
              ><span id="234">i</span
              ><span id="235">t</span
              ><span id="236">_</span
              ><span id="237">_</span
              ><span id="238">(</span
              ><span id="239">s</span
              ><span id="240">e</span
              ><span id="241">l</span
              ><span id="242">f</span
              ><span id="243">,</span
              ><span id="244">&nbsp;</span
              ><span id="245">s</span
              ><span id="246">i</span
              ><span id="247">z</span
              ><span id="248">e</span
              ><span id="249">=</span
              ><span id="250">1</span
              ><span id="251">0</span
              ><span id="252">)</span
              ><span id="253">:</span
              ><br> &emsp; &emsp;<span id="254">s</span
              ><span id="255">e</span
              ><span id="256">l</span
              ><span id="257">f</span
              ><span id="258">.</span
              ><span id="259">m</span
              ><span id="260">y</span
              ><span id="261">l</span
              ><span id="262">i</span
              ><span id="263">s</span
              ><span id="264">t</span
              ><span id="265">=</span
              ><span id="266">[</span
              ><span id="267">]</span
              ><br> &emsp; &emsp;<span id="268">s</span
              ><span id="269">e</span
              ><span id="270">l</span
              ><span id="271">f</span
              ><span id="272">.</span
              ><span id="273">s</span
              ><span id="274">i</span
              ><span id="275">z</span
              ><span id="276">e</span
              ><span id="277">=</span
              ><span id="278">s</span
              ><span id="279">i</span
              ><span id="280">z</span
              ><span id="281">e</span
              ><br> &emsp;<span id="282">d</span
              ><span id="283">e</span
              ><span id="284">f</span
              ><span id="285">&nbsp;</span
              ><span id="286">p</span
              ><span id="287">u</span
              ><span id="288">s</span
              ><span id="289">h</span
              ><span id="290">(</span
              ><span id="291">s</span
              ><span id="292">e</span
              ><span id="293">l</span
              ><span id="294">f</span
              ><span id="295">,</span
              ><span id="296">&nbsp;</span
              ><span id="297">e</span
              ><span id="298">l</span
              ><span id="299">e</span
              ><span id="300">m</span
              ><span id="301">)</span
              ><span id="302">:</span
              ><br> &emsp; &emsp;<span id="303">l</span
              ><span id="304">=</span
              ><span id="305">l</span
              ><span id="306">e</span
              ><span id="307">n</span
              ><span id="308">(</span
              ><span id="309">s</span
              ><span id="310">e</span
              ><span id="311">l</span
              ><span id="312">f</span
              ><span id="313">.</span
              ><span id="314">m</span
              ><span id="315">y</span
              ><span id="316">l</span
              ><span id="317">i</span
              ><span id="318">s</span
              ><span id="319">t</span
              ><span id="320">)</span
              ><br> &emsp; &emsp;<span id="321">i</span
              ><span id="322">f</span
              ><span id="323">&nbsp;</span
              ><span id="324">l</span
              ><span id="325"><</span
              ><span id="326">s</span
              ><span id="327">e</span
              ><span id="328">l</span
              ><span id="329">f</span
              ><span id="330">.</span
              ><span id="331">s</span
              ><span id="332">i</span
              ><span id="333">z</span
              ><span id="334">e</span
              ><span id="335">:</span
              ><br> &emsp; &emsp; &emsp;<span id="336">s</span
              ><span id="337">e</span
              ><span id="338">l</span
              ><span id="339">f</span
              ><span id="340">.</span
              ><span id="341">m</span
              ><span id="342">y</span
              ><span id="343">l</span
              ><span id="344">i</span
              ><span id="345">s</span
              ><span id="346">t</span
              ><span id="347">.</span
              ><span id="348">a</span
              ><span id="349">p</span
              ><span id="350">p</span
              ><span id="351">e</span
              ><span id="352">n</span
              ><span id="353">d</span
              ><span id="354">(</span
              ><span id="355">e</span
              ><span id="356">l</span
              ><span id="357">e</span
              ><span id="358">m</span
              ><span id="359">)</span
              ><br> &emsp; &emsp;<span id="360">e</span
              ><span id="361">l</span
              ><span id="362">s</span
              ><span id="363">e</span
              ><span id="364">:</span
              ><br> &emsp; &emsp; &emsp;<span id="365">r</span
              ><span id="366">a</span
              ><span id="367">i</span
              ><span id="368">s</span
              ><span id="369">e</span
              ><span id="370">&nbsp;</span
              ><span id="371">S</span
              ><span id="372">t</span
              ><span id="373">a</span
              ><span id="374">c</span
              ><span id="375">k</span
              ><span id="376">F</span
              ><span id="377">u</span
              ><span id="378">l</span
              ><span id="379">l</span
              ><span id="380">(</span
              ><span id="381">)</span
              ><br> &emsp;<span id="382">d</span
              ><span id="383">e</span
              ><span id="384">f</span
              ><span id="385">&nbsp;</span
              ><span id="386">p</span
              ><span id="387">o</span
              ><span id="388">p</span
              ><span id="389">(</span
              ><span id="390">s</span
              ><span id="391">e</span
              ><span id="392">l</span
              ><span id="393">f</span
              ><span id="394">)</span
              ><span id="395">:</span
              ><br> &emsp; &emsp;<span id="396">i</span
              ><span id="397">f</span
              ><span id="398">&nbsp;</span
              ><span id="399">l</span
              ><span id="400">e</span
              ><span id="401">n</span
              ><span id="402">(</span
              ><span id="403">s</span
              ><span id="404">e</span
              ><span id="405">l</span
              ><span id="406">f</span
              ><span id="407">.</span
              ><span id="408">m</span
              ><span id="409">y</span
              ><span id="410">l</span
              ><span id="411">i</span
              ><span id="412">s</span
              ><span id="413">t</span
              ><span id="414">)</span
              ><span id="415">=</span
              ><span id="416">=</span
              ><span id="417">0</span
              ><span id="418">:</span
              ><br> &emsp; &emsp; &emsp;<span id="419">r</span
              ><span id="420">a</span
              ><span id="421">i</span
              ><span id="422">s</span
              ><span id="423">e</span
              ><span id="424">&nbsp;</span
              ><span id="425">S</span
              ><span id="426">t</span
              ><span id="427">a</span
              ><span id="428">c</span
              ><span id="429">k</span
              ><span id="430">E</span
              ><span id="431">m</span
              ><span id="432">p</span
              ><span id="433">t</span
              ><span id="434">y</span
              ><span id="435">(</span
              ><span id="436">)</span
              ><br> &emsp; &emsp;<span id="437">e</span
              ><span id="438">l</span
              ><span id="439">s</span
              ><span id="440">e</span
              ><span id="441">:</span
              ><br> &emsp; &emsp; &emsp;<span id="442">r</span
              ><span id="443">e</span
              ><span id="444">t</span
              ><span id="445">u</span
              ><span id="446">r</span
              ><span id="447">n</span
              ><span id="448">&nbsp;</span
              ><span id="449">s</span
              ><span id="450">e</span
              ><span id="451">l</span
              ><span id="452">f</span
              ><span id="453">.</span
              ><span id="454">m</span
              ><span id="455">y</span
              ><span id="456">l</span
              ><span id="457">i</span
              ><span id="458">s</span
              ><span id="459">t</span
              ><span id="460">.</span
              ><span id="461">p</span
              ><span id="462">o</span
              ><span id="463">p</span
              ><span id="464">(</span
              ><span id="465">)</span
              ><br><span id="466">s</span
              ><span id="467">&nbsp;</span
              ><span id="468">=</span
              ><span id="469">M</span
              ><span id="470">y</span
              ><span id="471">S</span
              ><span id="472">t</span
              ><span id="473">a</span
              ><span id="474">c</span
              ><span id="475">k</span
              ><span id="476">(</span
              ><span id="477">3</span
              ><span id="478">)</span
              ><br><span id="479">t</span
              ><span id="480">r</span
              ><span id="481">y</span
              ><span id="482">:</span
              ><br> &emsp;<span id="483">s</span
              ><span id="484">.</span
              ><span id="485">p</span
              ><span id="486">u</span
              ><span id="487">s</span
              ><span id="488">h</span
              ><span id="489">(</span
              ><span id="490">1</span
              ><span id="491">1</span
              ><span id="492">)</span
              ><br> &emsp;<span id="493">s</span
              ><span id="494">.</span
              ><span id="495">p</span
              ><span id="496">u</span
              ><span id="497">s</span
              ><span id="498">h</span
              ><span id="499">(</span
              ><span id="500">2</span
              ><span id="501">2</span
              ><span id="502">)</span
              ><br> &emsp;<span id="503">s</span
              ><span id="504">.</span
              ><span id="505">p</span
              ><span id="506">u</span
              ><span id="507">s</span
              ><span id="508">h</span
              ><span id="509">(</span
              ><span id="510">3</span
              ><span id="511">3</span
              ><span id="512">)</span
              ><br> &emsp;<span id="513">#</span
              ><span id="514">s</span
              ><span id="515">.</span
              ><span id="516">p</span
              ><span id="517">u</span
              ><span id="518">s</span
              ><span id="519">h</span
              ><span id="520">(</span
              ><span id="521">4</span
              ><span id="522">4</span
              ><span id="523">)</span
              ><br> &emsp;<span id="524">p</span
              ><span id="525">r</span
              ><span id="526">i</span
              ><span id="527">n</span
              ><span id="528">t</span
              ><span id="529">(</span
              ><span id="530">s</span
              ><span id="531">.</span
              ><span id="532">p</span
              ><span id="533">o</span
              ><span id="534">p</span
              ><span id="535">(</span
              ><span id="536">)</span
              ><span id="537">)</span
              ><br> &emsp;<span id="538">p</span
              ><span id="539">r</span
              ><span id="540">i</span
              ><span id="541">n</span
              ><span id="542">t</span
              ><span id="543">(</span
              ><span id="544">s</span
              ><span id="545">.</span
              ><span id="546">p</span
              ><span id="547">o</span
              ><span id="548">p</span
              ><span id="549">(</span
              ><span id="550">)</span
              ><span id="551">)</span
              ><br> &emsp;<span id="552">p</span
              ><span id="553">r</span
              ><span id="554">i</span
              ><span id="555">n</span
              ><span id="556">t</span
              ><span id="557">(</span
              ><span id="558">s</span
              ><span id="559">.</span
              ><span id="560">p</span
              ><span id="561">o</span
              ><span id="562">p</span
              ><span id="563">(</span
              ><span id="564">)</span
              ><span id="565">)</span
              ><br> &emsp;<span id="566">p</span
              ><span id="567">r</span
              ><span id="568">i</span
              ><span id="569">n</span
              ><span id="570">t</span
              ><span id="571">(</span
              ><span id="572">s</span
              ><span id="573">.</span
              ><span id="574">p</span
              ><span id="575">o</span
              ><span id="576">p</span
              ><span id="577">(</span
              ><span id="578">)</span
              ><span id="579">)</span
              ><br><span id="580">e</span
              ><span id="581">x</span
              ><span id="582">c</span
              ><span id="583">e</span
              ><span id="584">p</span
              ><span id="585">t</span
              ><span id="586">&nbsp;</span
              ><span id="587">E</span
              ><span id="588">x</span
              ><span id="589">c</span
              ><span id="590">e</span
              ><span id="591">p</span
              ><span id="592">t</span
              ><span id="593">i</span
              ><span id="594">o</span
              ><span id="595">n</span
              ><span id="596">&nbsp;</span
              ><span id="597">a</span
              ><span id="598">s</span
              ><span id="599">&nbsp;</span
              ><span id="600">e</span
              ><span id="601">:</span
              ><br> &emsp;<span id="602">p</span
              ><span id="603">r</span
              ><span id="604">i</span
              ><span id="605">n</span
              ><span id="606">t</span
              ><span id="607">(</span
              ><span id="608">e</span
              ><span id="609">)</span
              ><span id="610"> </span>
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
var easy_words=['c', 'l', 'a', 's', 's', ' ', 'S', 't', 'a', 'c', 'k', 'F', 'u', 'l', 'l', '(', 'E', 'x', 'c', 'e', 'p', 't', 'i', 'o', 'n', ')', ':', 'd', 'e', 'f', ' ', '_', '_', 'i', 'n', 'i', 't', '_', '_', '(', 's', 'e', 'l', 'f', ')', ':', 's', 'e', 'l', 'f', '.', 'm', 's', 'g', ' ', '=', ' ', "'", 's', 't', 'a', 'c', 'k', ' ', 'i', 's', ' ', 'f', 'u', 'l', 'l', "'", 'd', 'e', 'f', ' ', '_', '_', 's', 't', 'r', '_', '_', '(', 's', 'e', 'l', 'f', ')', ':','r', 'e', 't', 'u', 'r', 'n', ' ', 's', 'e', 'l', 'f', '.', 'm', 's', 'g', 'c', 'l', 'a', 's', 's', ' ', 'S', 't', 'a', 'c', 'k', 'E', 'm', 'p', 't', 'y', '(', 'E', 'x', 'c', 'e', 'p', 't', 'i', 'o', 'n', ')', ':', 'd', 'e', 'f', ' ', '_', '_', 'i', 'n', 'i', 't', '_', '_', '(', 's', 'e', 'l', 'f', ')', ':', 's', 'e', 'l', 'f', '.', 'm', 's', 'g', ' ', '=', ' ', "'", 's', 't', 'a', 'c', 'k', ' ', 'i', 's', ' ', 'e', 'm', 'p', 't', 'y', "'", 'd', 'e', 'f', ' ', '_', '_', 's', 't', 'r', '_', '_', '(', 's', 'e', 'l', 'f', ')', ':', 'r', 'e', 't', 'u', 'r', 'n', ' ', 's', 'e', 'l', 'f', '.', 'm', 's', 'g', 'c', 'l', 'a', 's', 's', ' ', 'M', 'y', 'S', 't', 'a', 'c', 'k', ':', 'd', 'e', 'f', ' ', '_', '_', 'i', 'n', 'i', 't', '_', '_', '(', 's', 'e', 'l', 'f', ',', ' ', 's', 'i', 'z', 'e', '=', '1', '0', ')', ':', 's', 'e', 'l', 'f', '.', 'm', 'y', 'l', 'i', 's', 't', '=', '[', ']', 's', 'e', 'l', 'f', '.', 's', 'i', 'z', 'e', '=', 's', 'i', 'z', 'e', 'd', 'e', 'f', ' ', 'p', 'u', 's', 'h', '(', 's', 'e', 'l', 'f', ',', ' ', 'e', 'l', 'e', 'm', ')', ':', 'l', '=', 'l', 'e', 'n', '(', 's', 'e', 'l', 'f', '.', 'm', 'y', 'l', 'i', 's', 't', ')', 'i', 'f', ' ', 'l', '<', 's', 'e', 'l', 'f', '.', 's', 'i', 'z', 'e', ':', 's', 'e', 'l', 'f', '.', 'm', 'y', 'l', 'i', 's', 't', '.', 'a', 'p', 'p', 'e', 'n', 'd', '(', 'e', 'l', 'e', 'm', ')', 'e', 'l', 's', 'e', ':', 'r', 'a', 'i', 's', 'e', ' ', 'S', 't', 'a', 'c', 'k', 'F', 'u', 'l', 'l', '(', ')', 'd', 'e', 'f', ' ', 'p', 'o', 'p', '(', 's', 'e', 'l', 'f', ')', ':', 'i', 'f', ' ', 'l', 'e', 'n', '(', 's', 'e', 'l', 'f', '.', 'm', 'y', 'l', 'i', 's', 't', ')', '=', '=', '0', ':', 'r', 'a', 'i', 's', 'e', ' ', 'S', 't', 'a', 'c', 'k', 'E', 'm', 'p', 't', 'y', '(', ')', 'e', 'l', 's', 'e', ':', 'r', 'e', 't', 'u', 'r', 'n', ' ', 's', 'e', 'l', 'f', '.', 'm', 'y', 'l', 'i', 's', 't', '.', 'p', 'o', 'p', '(', ')', 's', ' ', '=', 'M', 'y', 'S', 't', 'a', 'c', 'k', '(', '3', ')', 't', 'r', 'y', ':', 's', '.', 'p', 'u', 's', 'h', '(', '1', '1', ')', 's', '.', 'p', 'u', 's', 'h', '(', '2', '2', ')', 's', '.', 'p', 'u', 's', 'h', '(', '3', '3', ')', '#', 's', '.', 'p', 'u', 's', 'h', '(', '4', '4', ')', 'p', 'r', 'i', 'n', 't', '(', 's', '.', 'p', 'o', 'p', '(', ')', ')', 'p', 'r', 'i', 'n', 't', '(', 's', '.', 'p', 'o', 'p', '(', ')', ')', 'p', 'r', 'i', 'n', 't', '(', 's', '.', 'p', 'o', 'p', '(', ')', ')', 'p', 'r', 'i', 'n', 't', '(', 's', '.', 'p', 'o', 'p', '(', ')', ')', 'e', 'x', 'c', 'e', 'p', 't', ' ', 'E', 'x', 'c', 'e', 'p', 't', 'i', 'o', 'n', ' ', 'a', 's', ' ', 'e', ':', 'p', 'r', 'i', 'n', 't', '(', 'e', ')'];
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
                if(count==610){
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
                  window.location.href="python?wm="+parseInt(wpm)+"cr="+correct+"in="+incorrect+"m"+parseInt(minutes)+"s"+parseInt(seconds);
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

      $sql1 = "SELECT python_wpm FROM challanges where id=$user_id" ;
      $result = $conn->query($sql1);
      $row=$result->fetch_assoc();
      echo $row["python_wpm"];
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
      if($wpm_val>=$row["python_wpm"]){
        $sql = "UPDATE challanges SET python_wpm=$wpm_val WHERE id=$user_id";
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
