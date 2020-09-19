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
<title>Java Typing | Programming Typing</title>
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
<h1 style="margin-top:70px;color:#17252A;">Java Challange</h1>
</div>
</div>

<div id="words_container">

        <span style="color:rgb(170,170,170,0.7)">/*ServletDemo.java : start typing to begin session*/</span>
        <br><span id="0">i</span
        ><span id="1">m</span
        ><span id="2">p</span
        ><span id="3">o</span
        ><span id="4">r</span
        ><span id="5">t</span
        ><span id="6">&nbsp;</span
        ><span id="7">j</span
        ><span id="8">a</span
        ><span id="9">v</span
        ><span id="10">a</span
        ><span id="11">.</span
        ><span id="12">i</span
        ><span id="13">o</span
        ><span id="14">.</span
        ><span id="15">*</span
        ><span id="16">;</span
        ><br><span id="17">i</span
        ><span id="18">m</span
        ><span id="19">p</span
        ><span id="20">o</span
        ><span id="21">r</span
        ><span id="22">t</span
        ><span id="23">&nbsp;</span
        ><span id="24">j</span
        ><span id="25">a</span
        ><span id="26">v</span
        ><span id="27">a</span
        ><span id="28">x</span
        ><span id="29">.</span
        ><span id="30">s</span
        ><span id="31">e</span
        ><span id="32">r</span
        ><span id="33">v</span
        ><span id="34">l</span
        ><span id="35">e</span
        ><span id="36">t</span
        ><span id="37">.</span
        ><span id="38">*</span
        ><span id="39">;</span
        ><br><span id="40">i</span
        ><span id="41">m</span
        ><span id="42">p</span
        ><span id="43">o</span
        ><span id="44">r</span
        ><span id="45">t</span
        ><span id="46">&nbsp;</span
        ><span id="47">j</span
        ><span id="48">a</span
        ><span id="49">v</span
        ><span id="50">a</span
        ><span id="51">x</span
        ><span id="52">.</span
        ><span id="53">s</span
        ><span id="54">e</span
        ><span id="55">r</span
        ><span id="56">v</span
        ><span id="57">l</span
        ><span id="58">e</span
        ><span id="59">t</span
        ><span id="60">.</span
        ><span id="61">a</span
        ><span id="62">n</span
        ><span id="63">n</span
        ><span id="64">o</span
        ><span id="65">t</span
        ><span id="66">a</span
        ><span id="67">t</span
        ><span id="68">i</span
        ><span id="69">o</span
        ><span id="70">n</span
        ><span id="71">.</span
        ><span id="72">W</span
        ><span id="73">e</span
        ><span id="74">b</span
        ><span id="75">S</span
        ><span id="76">e</span
        ><span id="77">r</span
        ><span id="78">v</span
        ><span id="79">l</span
        ><span id="80">e</span
        ><span id="81">t</span
        ><span id="82">;</span
        ><br><span id="83">i</span
        ><span id="84">m</span
        ><span id="85">p</span
        ><span id="86">o</span
        ><span id="87">r</span
        ><span id="88">t</span
        ><span id="89">&nbsp;</span
        ><span id="90">j</span
        ><span id="91">a</span
        ><span id="92">v</span
        ><span id="93">a</span
        ><span id="94">x</span
        ><span id="95">.</span
        ><span id="96">s</span
        ><span id="97">e</span
        ><span id="98">r</span
        ><span id="99">v</span
        ><span id="100">l</span
        ><span id="101">e</span
        ><span id="102">t</span
        ><span id="103">.</span
        ><span id="104">h</span
        ><span id="105">t</span
        ><span id="106">t</span
        ><span id="107">p</span
        ><span id="108">.</span
        ><span id="109">*</span
        ><span id="110">;</span
        ><br><span id="111">@</span
        ><span id="112">W</span
        ><span id="113">e</span
        ><span id="114">b</span
        ><span id="115">S</span
        ><span id="116">e</span
        ><span id="117">r</span
        ><span id="118">v</span
        ><span id="119">l</span
        ><span id="120">e</span
        ><span id="121">t</span
        ><span id="122">(</span
        ><span id="123">'</span
        ><span id="124">/</span
        ><span id="125">S</span
        ><span id="126">e</span
        ><span id="127">r</span
        ><span id="128">v</span
        ><span id="129">l</span
        ><span id="130">e</span
        ><span id="131">t</span
        ><span id="132">9</span
        ><span id="133">'</span
        ><span id="134">)</span
        ><br><span id="135">p</span
        ><span id="136">u</span
        ><span id="137">b</span
        ><span id="138">l</span
        ><span id="139">i</span
        ><span id="140">c</span
        ><span id="141">&nbsp;</span
        ><span id="142">c</span
        ><span id="143">l</span
        ><span id="144">a</span
        ><span id="145">s</span
        ><span id="146">s</span
        ><span id="147">&nbsp;</span
        ><span id="148">S</span
        ><span id="149">e</span
        ><span id="150">r</span
        ><span id="151">v</span
        ><span id="152">l</span
        ><span id="153">e</span
        ><span id="154">t</span
        ><span id="155">9</span
        ><span id="156">&nbsp;</span
        ><span id="157">e</span
        ><span id="158">x</span
        ><span id="159">t</span
        ><span id="160">e</span
        ><span id="161">n</span
        ><span id="162">d</span
        ><span id="163">s</span
        ><span id="164">&nbsp;</span
        ><span id="165">H</span
        ><span id="166">t</span
        ><span id="167">t</span
        ><span id="168">p</span
        ><span id="169">S</span
        ><span id="170">e</span
        ><span id="171">r</span
        ><span id="172">v</span
        ><span id="173">l</span
        ><span id="174">e</span
        ><span id="175">t</span
        ><span id="176">{</span
        ><br>&emsp;<span id="177">p</span
        ><span id="178">r</span
        ><span id="179">o</span
        ><span id="180">t</span
        ><span id="181">e</span
        ><span id="182">c</span
        ><span id="183">t</span
        ><span id="184">e</span
        ><span id="185">d</span
        ><span id="186">&nbsp;</span
        ><span id="187">v</span
        ><span id="188">o</span
        ><span id="189">i</span
        ><span id="190">d</span
        ><span id="191">&nbsp;</span
        ><span id="192">d</span
        ><span id="193">o</span
        ><span id="194">P</span
        ><span id="195">o</span
        ><span id="196">s</span
        ><span id="197">t</span
        ><span id="198">(</span
        ><span id="199">H</span
        ><span id="200">t</span
        ><span id="201">t</span
        ><span id="202">p</span
        ><span id="203">S</span
        ><span id="204">e</span
        ><span id="205">r</span
        ><span id="206">v</span
        ><span id="207">l</span
        ><span id="208">e</span
        ><span id="209">t</span
        ><span id="210">R</span
        ><span id="211">e</span
        ><span id="212">q</span
        ><span id="213">u</span
        ><span id="214">e</span
        ><span id="215">s</span
        ><span id="216">t</span
        ><span id="217">&nbsp;</span
        ><span id="218">r</span
        ><span id="219">e</span
        ><span id="220">q</span
        ><span id="221">u</span
        ><span id="222">e</span
        ><span id="223">s</span
        ><span id="224">t</span
        ><span id="225">,</span
        ><span id="226">H</span
        ><span id="227">t</span
        ><span id="228">t</span
        ><span id="229">p</span
        ><span id="230">S</span
        ><span id="231">e</span
        ><span id="232">r</span
        ><span id="233">v</span
        ><span id="234">l</span
        ><span id="235">e</span
        ><span id="236">t</span
        ><span id="237">R</span
        ><span id="238">e</span
        ><span id="239">s</span
        ><span id="240">p</span
        ><span id="241">o</span
        ><span id="242">n</span
        ><span id="243">s</span
        ><span id="244">e</span
        ><span id="245">&nbsp;</span
        ><span id="246">r</span
        ><span id="247">e</span
        ><span id="248">s</span
        ><span id="249">p</span
        ><span id="250">o</span
        ><span id="251">n</span
        ><span id="252">s</span
        ><span id="253">e</span
        ><span id="254">)</span
        ><br>&emsp;<span id="255">t</span
        ><span id="256">h</span
        ><span id="257">r</span
        ><span id="258">o</span
        ><span id="259">w</span
        ><span id="260">s</span
        ><span id="261">&nbsp;</span
        ><span id="262">S</span
        ><span id="263">e</span
        ><span id="264">r</span
        ><span id="265">v</span
        ><span id="266">l</span
        ><span id="267">e</span
        ><span id="268">t</span
        ><span id="269">E</span
        ><span id="270">x</span
        ><span id="271">c</span
        ><span id="272">e</span
        ><span id="273">p</span
        ><span id="274">t</span
        ><span id="275">i</span
        ><span id="276">o</span
        ><span id="277">n</span
        ><span id="278">,</span
        ><span id="279">&nbsp;</span
        ><span id="280">I</span
        ><span id="281">O</span
        ><span id="282">E</span
        ><span id="283">x</span
        ><span id="284">c</span
        ><span id="285">e</span
        ><span id="286">p</span
        ><span id="287">t</span
        ><span id="288">i</span
        ><span id="289">o</span
        ><span id="290">n</span
        ><span id="291">{</span
        ><br>&emsp; &emsp;<span id="292">r</span
        ><span id="293">e</span
        ><span id="294">s</span
        ><span id="295">p</span
        ><span id="296">o</span
        ><span id="297">n</span
        ><span id="298">s</span
        ><span id="299">e</span
        ><span id="300">.</span
        ><span id="301">s</span
        ><span id="302">e</span
        ><span id="303">t</span
        ><span id="304">C</span
        ><span id="305">o</span
        ><span id="306">n</span
        ><span id="307">t</span
        ><span id="308">e</span
        ><span id="309">n</span
        ><span id="310">t</span
        ><span id="311">T</span
        ><span id="312">y</span
        ><span id="313">p</span
        ><span id="314">e</span
        ><span id="315">(</span
        ><span id="316">'</span
        ><span id="317">t</span
        ><span id="318">e</span
        ><span id="319">x</span
        ><span id="320">t</span
        ><span id="321">/</span
        ><span id="322">h</span
        ><span id="323">t</span
        ><span id="324">m</span
        ><span id="325">l</span
        ><span id="326">'</span
        ><span id="327">)</span
        ><span id="328">;</span
        ><br>&emsp; &emsp;<span id="329">P</span
        ><span id="330">r</span
        ><span id="331">i</span
        ><span id="332">n</span
        ><span id="333">t</span
        ><span id="334">W</span
        ><span id="335">r</span
        ><span id="336">i</span
        ><span id="337">t</span
        ><span id="338">e</span
        ><span id="339">r</span
        ><span id="340">&nbsp;</span
        ><span id="341">o</span
        ><span id="342">u</span
        ><span id="343">t</span
        ><span id="344">&nbsp;</span
        ><span id="345">=</span
        ><span id="346">&nbsp; </span
        ><span id="347">r</span
        ><span id="348">e</span
        ><span id="349">s</span
        ><span id="350">p</span
        ><span id="351">o</span
        ><span id="352">n</span
        ><span id="353">s</span
        ><span id="354">e</span
        ><span id="355">.</span
        ><span id="356">g</span
        ><span id="357">e</span
        ><span id="358">t</span
        ><span id="359">W</span
        ><span id="360">r</span
        ><span id="361">i</span
        ><span id="362">t</span
        ><span id="363">e</span
        ><span id="364">r</span
        ><span id="365">(</span
        ><span id="366">)</span
        ><span id="367">;</span
        ><br>&emsp; &emsp;<span id="368">S</span
        ><span id="369">t</span
        ><span id="370">r</span
        ><span id="371">i</span
        ><span id="372">n</span
        ><span id="373">g</span
        ><span id="374">&nbsp;</span
        ><span id="375">s</span
        ><span id="376">t</span
        ><span id="377">r</span
        ><span id="378">&nbsp;</span
        ><span id="379">=</span
        ><span id="380">&nbsp;</span
        ><span id="381">r</span
        ><span id="382">e</span
        ><span id="383">q</span
        ><span id="384">u</span
        ><span id="385">e</span
        ><span id="386">s</span
        ><span id="387">t</span
        ><span id="388">.</span
        ><span id="389">g</span
        ><span id="390">e</span
        ><span id="391">t</span
        ><span id="392">P</span
        ><span id="393">a</span
        ><span id="394">r</span
        ><span id="395">a</span
        ><span id="396">m</span
        ><span id="397">e</span
        ><span id="398">t</span
        ><span id="399">e</span
        ><span id="400">r</span
        ><span id="401">(</span
        ><span id="402">'</span
        ><span id="403">u</span
        ><span id="404">n</span
        ><span id="405">a</span
        ><span id="406">m</span
        ><span id="407">e</span
        ><span id="408">'</span
        ><span id="409">)</span
        ><span id="410">;</span
        ><br>&emsp; &emsp;<span id="411">S</span
        ><span id="412">t</span
        ><span id="413">r</span
        ><span id="414">i</span
        ><span id="415">n</span
        ><span id="416">g</span
        ><span id="417">&nbsp;</span
        ><span id="418">s</span
        ><span id="419">t</span
        ><span id="420">r</span
        ><span id="421">1</span
        ><span id="422">&nbsp;</span
        ><span id="423">=</span
        ><span id="424">&nbsp;</span
        ><span id="425">r</span
        ><span id="426">e</span
        ><span id="427">q</span
        ><span id="428">u</span
        ><span id="429">e</span
        ><span id="430">s</span
        ><span id="431">t</span
        ><span id="432">.</span
        ><span id="433">g</span
        ><span id="434">e</span
        ><span id="435">t</span
        ><span id="436">P</span
        ><span id="437">a</span
        ><span id="438">r</span
        ><span id="439">a</span
        ><span id="440">m</span
        ><span id="441">e</span
        ><span id="442">t</span
        ><span id="443">e</span
        ><span id="444">r</span
        ><span id="445">(</span
        ><span id="446">'</span
        ><span id="447">p</span
        ><span id="448">n</span
        ><span id="449">a</span
        ><span id="450">m</span
        ><span id="451">e</span
        ><span id="452">'</span
        ><span id="453">)</span
        ><span id="454">;</span
        ><br>&emsp; &emsp;<span id="455">o</span
        ><span id="456">u</span
        ><span id="457">t</span
        ><span id="458">.</span
        ><span id="459">p</span
        ><span id="460">r</span
        ><span id="461">i</span
        ><span id="462">n</span
        ><span id="463">t</span
        ><span id="464">l</span
        ><span id="465">n</span
        ><span id="466">(</span
        ><span id="467">'</span
        ><span id="468"><</span
        ><span id="469">h</span
        ><span id="470">t</span
        ><span id="471">m</span
        ><span id="472">l</span
        ><span id="473">></span
        ><span id="474">'</span
        ><span id="475">)</span
        ><span id="476">;</span
        ><br>&emsp; &emsp;<span id="477">o</span
        ><span id="478">u</span
        ><span id="479">t</span
        ><span id="480">.</span
        ><span id="481">p</span
        ><span id="482">r</span
        ><span id="483">i</span
        ><span id="484">n</span
        ><span id="485">t</span
        ><span id="486">l</span
        ><span id="487">n</span
        ><span id="488">(</span
        ><span id="489">'</span
        ><span id="490"><</span
        ><span id="491">b</span
        ><span id="492">o</span
        ><span id="493">d</span
        ><span id="494">y</span
        ><span id="495">></span
        ><span id="496">'</span
        ><span id="497">)</span
        ><span id="498">;</span
        ><br>&emsp; &emsp;<span id="499">o</span
        ><span id="500">u</span
        ><span id="501">t</span
        ><span id="502">.</span
        ><span id="503">p</span
        ><span id="504">r</span
        ><span id="505">i</span
        ><span id="506">n</span
        ><span id="507">t</span
        ><span id="508">l</span
        ><span id="509">n</span
        ><span id="510">(</span
        ><span id="511">'</span
        ><span id="512">U</span
        ><span id="513">s</span
        ><span id="514">e</span
        ><span id="515">r</span
        ><span id="516">n</span
        ><span id="517">a</span
        ><span id="518">m</span
        ><span id="519">e</span
        ><span id="520">&nbsp;</span
        ><span id="521">i</span
        ><span id="522">s</span
        ><span id="523">:</span
        ><span id="524">'</span
        ><span id="525">&nbsp;</span
        ><span id="526">+</span
        ><span id="527">&nbsp;</span
        ><span id="528">s</span
        ><span id="529">t</span
        ><span id="530">r</span
        ><span id="531">&nbsp;</span
        ><span id="532">+</span
        ><span id="533">&nbsp;</span
        ><span id="534">'</span
        ><span id="535"><</span
        ><span id="536">b</span
        ><span id="537">r</span
        ><span id="538">/</span
        ><span id="539">></span
        ><span id="540">'</span
        ><span id="541">)</span
        ><span id="542">;</span
        ><br>&emsp; &emsp;<span id="543">o</span
        ><span id="544">u</span
        ><span id="545">t</span
        ><span id="546">.</span
        ><span id="547">p</span
        ><span id="548">r</span
        ><span id="549">i</span
        ><span id="550">n</span
        ><span id="551">t</span
        ><span id="552">l</span
        ><span id="553">n</span
        ><span id="554">(</span
        ><span id="555">'</span
        ><span id="556">P</span
        ><span id="557">a</span
        ><span id="558">s</span
        ><span id="559">s</span
        ><span id="560">w</span
        ><span id="561">o</span
        ><span id="562">r</span
        ><span id="563">d</span
        ><span id="564">&nbsp;</span
        ><span id="565">i</span
        ><span id="566">s</span
        ><span id="567">:</span
        ><span id="568">'</span
        ><span id="569">&nbsp;</span
        ><span id="570">+</span
        ><span id="571">&nbsp;</span
        ><span id="572">s</span
        ><span id="573">t</span
        ><span id="574">r</span
        ><span id="575">1</span
        ><span id="576">)</span
        ><span id="577">;</span
        ><br>&emsp; &emsp;<span id="578">o</span
        ><span id="579">u</span
        ><span id="580">t</span
        ><span id="581">.</span
        ><span id="582">p</span
        ><span id="583">r</span
        ><span id="584">i</span
        ><span id="585">n</span
        ><span id="586">t</span
        ><span id="587">l</span
        ><span id="588">n</span
        ><span id="589">(</span
        ><span id="590">'</span
        ><span id="591"><</span
        ><span id="592">/</span
        ><span id="593">b</span
        ><span id="594">o</span
        ><span id="595">d</span
        ><span id="596">y</span
        ><span id="597">></span
        ><span id="598">'</span
        ><span id="599">)</span
        ><span id="600">;</span
        ><br>&emsp; &emsp;<span id="601">o</span
        ><span id="602">u</span
        ><span id="603">t</span
        ><span id="604">.</span
        ><span id="605">p</span
        ><span id="606">r</span
        ><span id="607">i</span
        ><span id="608">n</span
        ><span id="609">t</span
        ><span id="610">l</span
        ><span id="611">n</span
        ><span id="612">(</span
        ><span id="613">'</span
        ><span id="614"><</span
        ><span id="615">/</span
        ><span id="616">h</span
        ><span id="617">t</span
        ><span id="618">m</span
        ><span id="619">l</span
        ><span id="620">></span
        ><span id="621">'</span
        ><span id="622">)</span
        ><span id="623">;</span
        ><br>&emsp;<span id="624">}</span
        ><br><span id="625">}</span
        ><span id="626"> </span>
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
var easy_words=['i', 'm', 'p', 'o', 'r', 't', ' ', 'j', 'a', 'v', 'a', '.', 'i', 'o', '.', '*', ';', 'i', 'm', 'p', 'o', 'r', 't', ' ', 'j', 'a', 'v', 'a', 'x', '.', 's', 'e', 'r', 'v', 'l', 'e', 't', '.', '*', ';', 'i', 'm', 'p', 'o', 'r', 't', ' ', 'j', 'a', 'v', 'a', 'x', '.', 's', 'e', 'r', 'v', 'l', 'e', 't', '.', 'a', 'n', 'n', 'o', 't', 'a', 't', 'i', 'o', 'n', '.', 'W', 'e', 'b', 'S', 'e', 'r', 'v', 'l', 'e', 't', ';', 'i', 'm', 'p', 'o', 'r', 't', ' ', 'j', 'a', 'v', 'a', 'x', '.', 's', 'e', 'r', 'v', 'l', 'e', 't', '.', 'h', 't', 't', 'p', '.', '*', ';', '@', 'W', 'e', 'b', 'S', 'e', 'r', 'v', 'l', 'e', 't', '(', "'", '/', 'S', 'e', 'r', 'v', 'l', 'e', 't', '9', "'", ')', 'p', 'u', 'b', 'l', 'i', 'c', ' ', 'c', 'l', 'a', 's', 's', ' ', 'S', 'e', 'r', 'v', 'l', 'e', 't', '9', ' ', 'e', 'x', 't', 'e', 'n', 'd', 's', ' ', 'H', 't', 't', 'p', 'S', 'e', 'r', 'v', 'l', 'e', 't', '{', 'p', 'r', 'o', 't', 'e', 'c', 't', 'e', 'd', ' ', 'v', 'o', 'i', 'd', ' ', 'd', 'o', 'P', 'o', 's', 't', '(', 'H', 't', 't', 'p', 'S', 'e', 'r', 'v', 'l', 'e', 't', 'R', 'e', 'q', 'u', 'e', 's', 't', ' ', 'r', 'e', 'q', 'u', 'e', 's', 't', ',', 'H', 't', 't', 'p', 'S', 'e', 'r', 'v', 'l', 'e', 't', 'R', 'e', 's', 'p', 'o', 'n', 's', 'e', ' ', 'r', 'e', 's', 'p', 'o', 'n', 's', 'e', ')', 't', 'h', 'r', 'o', 'w', 's', ' ', 'S', 'e', 'r', 'v', 'l', 'e', 't', 'E', 'x', 'c', 'e', 'p', 't', 'i', 'o', 'n', ',', ' ', 'I', 'O', 'E', 'x', 'c', 'e', 'p', 't', 'i', 'o', 'n', '{', 'r', 'e', 's', 'p', 'o', 'n', 's', 'e', '.', 's', 'e', 't', 'C', 'o', 'n', 't', 'e', 'n', 't', 'T', 'y', 'p', 'e', '(', "'", 't', 'e', 'x', 't', '/', 'h', 't', 'm', 'l', "'", ')', ';', 'P', 'r', 'i', 'n', 't', 'W', 'r', 'i', 't', 'e', 'r', ' ', 'o', 'u', 't', ' ', '=', ' ', 'r', 'e', 's', 'p', 'o', 'n', 's', 'e', '.', 'g', 'e', 't', 'W', 'r', 'i', 't', 'e', 'r', '(', ')', ';', 'S', 't', 'r', 'i', 'n', 'g', ' ', 's', 't', 'r', ' ', '=', ' ', 'r', 'e', 'q', 'u', 'e', 's', 't', '.', 'g', 'e', 't', 'P', 'a', 'r', 'a', 'm', 'e', 't', 'e', 'r', '(', "'", 'u', 'n', 'a', 'm', 'e', "'", ')', ';', 'S', 't', 'r', 'i', 'n', 'g', ' ', 's', 't', 'r', '1', ' ', '=', ' ', 'r', 'e', 'q', 'u', 'e', 's', 't', '.', 'g', 'e', 't', 'P', 'a', 'r', 'a', 'm', 'e', 't', 'e', 'r', '(', "'", 'p', 'n', 'a', 'm', 'e', "'", ')', ';', 'o', 'u', 't', '.', 'p', 'r', 'i', 'n', 't', 'l', 'n', '(', "'", '<', 'h', 't', 'm', 'l', '>', "'", ')', ';', 'o', 'u', 't', '.', 'p', 'r', 'i', 'n', 't', 'l', 'n', '(', "'", '<', 'b', 'o', 'd', 'y', '>', "'", ')', ';', 'o', 'u', 't', '.', 'p', 'r', 'i', 'n', 't', 'l', 'n', '(', "'", 'U', 's', 'e', 'r', 'n', 'a', 'm', 'e', ' ', 'i', 's', ':', "'", ' ', '+', ' ', 's', 't', 'r', ' ', '+', ' ', "'", '<', 'b', 'r', '/', '>', "'", ')', ';', 'o', 'u', 't', '.', 'p', 'r', 'i', 'n', 't', 'l', 'n', '(', "'", 'P', 'a', 's', 's', 'w', 'o', 'r', 'd', ' ', 'i', 's', ':', "'", ' ', '+', ' ', 's', 't', 'r', '1', ')', ';', 'o', 'u', 't', '.', 'p', 'r', 'i', 'n', 't', 'l', 'n', '(', "'", '<', '/', 'b', 'o', 'd', 'y', '>', "'", ')', ';', 'o', 'u', 't', '.', 'p', 'r', 'i', 'n', 't', 'l', 'n', '(', "'", '<', '/', 'h', 't', 'm', 'l', '>', "'", ')', ';', '}', '}']

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
                if(count==626){
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
                  window.location.href="java?wm="+parseInt(wpm)+"cr="+correct+"in="+incorrect+"m"+parseInt(minutes)+"s"+parseInt(seconds);
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

      $sql1 = "SELECT java_wpm FROM challanges where id=$user_id" ;
      $result = $conn->query($sql1);
      $row=$result->fetch_assoc();
      echo $row["java_wpm"];
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
      if($wpm_val>=$row["java_wpm"]){
        $sql = "UPDATE challanges SET java_wpm=$wpm_val WHERE id=$user_id";
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
