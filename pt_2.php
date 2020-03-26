<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link href = "ma2_db.css" type = "text/css" rel="stylesheet">
</head>
<body>
 
<form action="pt_3.php" method ="post">

<div class="y q0">
<h2>Please anwer following questions. <br>  Answers will be reviewed by Dr. Lee.</h2>
<label><input class="q0a1" type="radio" name="q0" value="q0a1"><span class="q0a1">Start</span></label>
<?php
$qq=$_POST['q3'];
echo "<input class=\"q0a1\" type=\"text\" name=\"q0\" value=\"".$qq."\">";
?>
</div>
  
<div class="y q2a1q3a1q1">
<h2>Do you feel pain, burning sensation, or itchy on urination?</h2>
<label><input class="q2a1q3a1q1a1" type="radio" name="q2a1q3a1q1" value="q2a1q3a1q1a1"><span class="q2a1q3a1q1a1">Yes</span></label>
<label><input class="q2a1q3a1q1a2" type="radio" name="q2a1q3a1q1" value="q2a1q3a1q1a2"><span class="q2a1q3a1q1a2">No</span></label>
</div>

<div class="y q2a1q3a1q2">
<h2>Have you noticed bad smell in your urine?</h2>
<label><input class="q2a1q3a1q2a1" type="radio" name="q2a1q3a1q2" value="q2a1q3a1q2a1"><span class="q2a1q3a1q2a1">Yes</span></label>
<label><input class="q2a1q3a1q2a2" type="radio" name="q2a1q3a1q2" value="q2a1q3a1q2a2"><span class="q2a1q3a1q2a2">No</span></label>
</div>

<div class="y q2a1q3a1q3">
<h2>Have you noticed cloudy urine?</h2>
<label><input class="q2a1q3a1q3a1" type="radio" name="q2a1q3a1q3" value="q2a1q3a1q3a1"><span class="q2a1q3a1q3a1">Yes</span></label>
<label><input class="q2a1q3a1q3a2" type="radio" name="q2a1q3a1q3" value="q2a1q3a1q3a2"><span class="q2a1q3a1q3a2">No</span></label>
</div>

<div class="y q2a1q3a1q4">
<h2>Have you noticed bloody urine?</h2>
<label><input class="q2a1q3a1q4a1" type="radio" name="q2a1q3a1q4" value="q2a1q3a1q4a1"><span class="q2a1q3a1q4a1">Yes</span></label>
<label><input class="q2a1q3a1q4a2" type="radio" name="q2a1q3a1q4" value="q2a1q3a1q4a2"><span class="q2a1q3a1q4a2">No</span></label>
</div>

<div class="y q2a1q3a1q5">
<h2>Do you feel pain in bladder area?</h2>
<label><input class="q2a1q3a1q5a1" type="radio" name="q2a1q3a1q5" value="q2a1q3a1q5a1"><span class="q2a1q3a1q5a1">Yes</span></label>
<label><input class="q2a1q3a1q5a2" type="radio" name="q2a1q3a1q5" value="q2a1q3a1q5a2"><span class="q2a1q3a1q5a2">No</span></label>
</div>

<div class="y q2a1q3a1q6">
<h2>[Urinary discomfort] When did it start?</h2>
<label><input class="q2a1q3a1q6a1" type="radio" name="q2a1q3a1q6" value="q2a1q3a1q6a1"><span class="q2a1q3a1q6a1">Today - yesterday</span></label>
<label><input class="q2a1q3a1q6a2" type="radio" name="q2a1q3a1q6" value="q2a1q3a1q6a2"><span class="q2a1q3a1q6a2">2-3 days ago</span></label>
<label><input class="q2a1q3a1q6a3" type="radio" name="q2a1q3a1q6" value="q2a1q3a1q6a3"><span class="q2a1q3a1q6a3">4-7 days ago</span></label>
<label><input class="q2a1q3a1q6a4" type="radio" name="q2a1q3a1q6" value="q2a1q3a1q6a4"><span class="q2a1q3a1q6a4">1-2 weeks ago</span></label>
<label><input class="q2a1q3a1q6a5" type="radio" name="q2a1q3a1q6" value="q2a1q3a1q6a5"><span class="q2a1q3a1q6a5">3-4 weeks ago</span></label>
<label><input class="q2a1q3a1q6a6" type="radio" name="q2a1q3a1q6" value="q2a1q3a1q6a6"><span class="q2a1q3a1q6a6">More than a month ago</span></label>
</div>

<div class="y q2a1q3a1q7">
<h2>[Urinary discomfort] Is it getting worse, same or improving?</h2>
<label><input class="q2a1q3a1q7a1" type="radio" name="q2a1q3a1q7" value="q2a1q3a1q7a1"><span class="q2a1q3a1q7a1">Getting worse</span></label>
<label><input class="q2a1q3a1q7a2" type="radio" name="q2a1q3a1q7" value="q2a1q3a1q7a2"><span class="q2a1q3a1q7a2">Same</span></label>
<label><input class="q2a1q3a1q7a3" type="radio" name="q2a1q3a1q7" value="q2a1q3a1q7a3"><span class="q2a1q3a1q7a3">Getting better</span></label>
</div>

<div class="y q2a1q3a1q8">
<h2>[Urinary discomfort] Do you have fever?</h2>
<label><input class="q2a1q3a1q8a1" type="radio" name="q2a1q3a1q8" value="q2a1q3a1q8a1"><span class="q2a1q3a1q8a1">Yes</span></label>
<label><input class="q2a1q3a1q8a2" type="radio" name="q2a1q3a1q8" value="q2a1q3a1q8a2"><span class="q2a1q3a1q8a2">No</span></label>
</div>
 
<div class="y q2a1q3a1q9">
<h2>[Urinary discomfort] Do you have pain in flank area?</h2>
<label><input class="q2a1q3a1q9a1" type="radio" name="q2a1q3a1q9" value="q2a1q3a1q9a1"><span class="q2a1q3a1q9a1">Yes</span></label>
<label><input class="q2a1q3a1q9a2" type="radio" name="q2a1q3a1q9" value="q2a1q3a1q9a2"><span class="q2a1q3a1q9a2">No</span></label>
</div>
 

<div class="y q2a1q2a1q1">
<h2>When did you start to feel dizziness?</h2>
<label><input class="q2a1q2a1q1a1" type="radio" name="q2a1q2a1q1" value="q2a1q2a1q1a1"><span class="q2a1q2a1q1a1">Today - yesterday</span></label>
<label><input class="q2a1q2a1q1a2" type="radio" name="q2a1q2a1q1" value="q2a1q2a1q1a2"><span class="q2a1q2a1q1a2">2-3 days ago</span></label>
<label><input class="q2a1q2a1q1a3" type="radio" name="q2a1q2a1q1" value="q2a1q2a1q1a3"><span class="q2a1q2a1q1a3">4-7 days ago</span></label>
<label><input class="q2a1q2a1q1a4" type="radio" name="q2a1q2a1q1" value="q2a1q2a1q1a4"><span class="q2a1q2a1q1a4">1-4 weeks ago</span></label>
<label><input class="q2a1q2a1q1a5" type="radio" name="q2a1q2a1q1" value="q2a1q2a1q1a5"><span class="q2a1q2a1q1a5">1-2 months ago</span></label>
<label><input class="q2a1q2a1q1a6" type="radio" name="q2a1q2a1q1" value="q2a1q2a1q1a6"><span class="q2a1q2a1q1a6">More than 2 months ago</span></label>
</div>

<div class="y q2a1q2a1q2">
<h2>What do you exactly mean by dizziness?</h2>
<label><input class="q2a1q2a1q2a1" type="radio" name="q2a1q2a1q2" value="q2a1q2a1q2a1"><span class="q2a1q2a1q2a1">Lightheadness</span></label>
<label><input class="q2a1q2a1q2a2" type="radio" name="q2a1q2a1q2" value="q2a1q2a1q2a2"><span class="q2a1q2a1q2a2">Spinning sensation (vertigo)</span></label>
<label><input class="q2a1q2a1q2a3" type="radio" name="q2a1q2a1q2" value="q2a1q2a1q2a3"><span class="q2a1q2a1q2a3">Near pass out (near syncope)</span></label>
<label><input class="q2a1q2a1q2a4" type="radio" name="q2a1q2a1q2" value="q2a1q2a1q2a4"><span class="q2a1q2a1q2a4">Not sure</span></label>
</div>

<div class="y q2a1q2a1q3">
<h2>How often do you feel dizziness?</h2>
<label><input class="q2a1q2a1q3a1" type="radio" name="q2a1q2a1q3" value="q2a1q2a1q3a1"><span class="q2a1q2a1q3a1">Constant, continuous</span></label>
<label><input class="q2a1q2a1q3a2" type="radio" name="q2a1q2a1q3" value="q2a1q2a1q3a2"><span class="q2a1q2a1q3a2">A few times a day</span></label>
<label><input class="q2a1q2a1q3a3" type="radio" name="q2a1q2a1q3" value="q2a1q2a1q3a3"><span class="q2a1q2a1q3a3">Daily</span></label>
<label><input class="q2a1q2a1q3a4" type="radio" name="q2a1q2a1q3" value="q2a1q2a1q3a4"><span class="q2a1q2a1q3a4">A few times a week</span></label>
<label><input class="q2a1q2a1q3a5" type="radio" name="q2a1q2a1q3" value="q2a1q2a1q3a5"><span class="q2a1q2a1q3a5">A few times a month</span></label>
<label><input class="q2a1q2a1q3a6" type="radio" name="q2a1q2a1q3" value="q2a1q2a1q3a6"><span class="q2a1q2a1q3a6">A few times a year</span></label>
</div>

<div class="y q2a1q2a1q4">
<h2>How long does the dizziness last each time?</h2>
<label><input class="q2a1q2a1q4a1" type="radio" name="q2a1q2a1q4" value="q2a1q2a1q4a1"><span class="q2a1q2a1q4a1">Constant, continuous</span></label>
<label><input class="q2a1q2a1q4a2" type="radio" name="q2a1q2a1q4" value="q2a1q2a1q4a2"><span class="q2a1q2a1q4a2">A few seconds</span></label>
<label><input class="q2a1q2a1q4a3" type="radio" name="q2a1q2a1q4" value="q2a1q2a1q4a3"><span class="q2a1q2a1q4a3">A few minutes</span></label>
<label><input class="q2a1q2a1q4a4" type="radio" name="q2a1q2a1q4" value="q2a1q2a1q4a4"><span class="q2a1q2a1q4a4">A few hours</span></label>
<label><input class="q2a1q2a1q4a5" type="radio" name="q2a1q2a1q4" value="q2a1q2a1q4a5"><span class="q2a1q2a1q4a5">Almost a day</span></label>
<label><input class="q2a1q2a1q4a6" type="radio" name="q2a1q2a1q4" value="q2a1q2a1q4a6"><span class="q2a1q2a1q4a6">A few days</span></label>
</div>

<div class="y q2a1q2a1q5">
<h2>Do you have any heart disease?</h2>
<label><input class="q2a1q2a1q5a1" type="radio" name="q2a1q2a1q5" value="q2a1q2a1q5a1"><span class="q2a1q2a1q5a1">Yes</span></label>
<label><input class="q2a1q2a1q5a2" type="radio" name="q2a1q2a1q5" value="q2a1q2a1q5a2"><span class="q2a1q2a1q5a2">No</span></label>
</div>

<div class="y q2a1q2a1q6">
<h2>Do yo have history of severe anemia?</h2>
<label><input class="q2a1q2a1q6a1" type="radio" name="q2a1q2a1q6" value="q2a1q2a1q6a1"><span class="q2a1q2a1q6a1">Yes</span></label>
<label><input class="q2a1q2a1q6a2" type="radio" name="q2a1q2a1q6" value="q2a1q2a1q6a2"><span class="q2a1q2a1q6a2">No</span></label>
</div>

<div class="y q2a1q2a1q7">
<h2>Do you have family history of sudden death?</h2>
<label><input class="q2a1q2a1q7a1" type="radio" name="q2a1q2a1q7" value="q2a1q2a1q7a1"><span class="q2a1q2a1q7a1">Yes</span></label>
<label><input class="q2a1q2a1q7a2" type="radio" name="q2a1q2a1q7" value="q2a1q2a1q7a2"><span class="q2a1q2a1q7a2">No</span></label>
</div>

<div class="y q2a1q2a1q8">
<h2>Did you have any trauma recently?</h2>
<label><input class="q2a1q2a1q8a1" type="radio" name="q2a1q2a1q8" value="q2a1q2a1q8a1"><span class="q2a1q2a1q8a1">Yes</span></label>
<label><input class="q2a1q2a1q8a2" type="radio" name="q2a1q2a1q8" value="q2a1q2a1q8a2"><span class="q2a1q2a1q8a2">No</span></label>
</div>

<div class="y q2a1q2a1q9">
<h2>Did you have any viral infection (illness) recently?</h2>
<label><input class="q2a1q2a1q9a1" type="radio" name="q2a1q2a1q9" value="q2a1q2a1q9a1"><span class="q2a1q2a1q9a1">Yes</span></label>
<label><input class="q2a1q2a1q9a2" type="radio" name="q2a1q2a1q9" value="q2a1q2a1q9a2"><span class="q2a1q2a1q9a2">No</span></label>
</div>

<div class="y q2a1q2a1q10">
<h2>Do you feel heart racing (palpitation) WITH dizziness?</h2>
<label><input class="q2a1q2a1q10a1" type="radio" name="q2a1q2a1q10" value="q2a1q2a1q10a1"><span class="q2a1q2a1q10a1">Yes</span></label>
<label><input class="q2a1q2a1q10a2" type="radio" name="q2a1q2a1q10" value="q2a1q2a1q10a2"><span class="q2a1q2a1q10a2">No</span></label>
</div>

<div class="y q2a1q2a1q11">
<h2>Do you feel headache WITH dizziness?</h2>
<label><input class="q2a1q2a1q11a1" type="radio" name="q2a1q2a1q11" value="q2a1q2a1q11a1"><span class="q2a1q2a1q11a1">Yes</span></label>
<label><input class="q2a1q2a1q11a2" type="radio" name="q2a1q2a1q11" value="q2a1q2a1q11a2"><span class="q2a1q2a1q11a2">No</span></label>
</div>

<div class="y q2a1q2a1q12">
<h2>Do you feel chest pain WITH dizziness?</h2>
<label><input class="q2a1q2a1q12a1" type="radio" name="q2a1q2a1q12" value="q2a1q2a1q12a1"><span class="q2a1q2a1q12a1">Yes</span></label>
<label><input class="q2a1q2a1q12a2" type="radio" name="q2a1q2a1q12" value="q2a1q2a1q12a2"><span class="q2a1q2a1q12a2">No</span></label>
</div>

<div class="y q2a1q2a1q13">
<h2>Do you feel shortness of breath WITH dizziness?</h2>
<label><input class="q2a1q2a1q13a1" type="radio" name="q2a1q2a1q13" value="q2a1q2a1q13a1"><span class="q2a1q2a1q13a1">Yes</span></label>
<label><input class="q2a1q2a1q13a2" type="radio" name="q2a1q2a1q13" value="q2a1q2a1q13a2"><span class="q2a1q2a1q13a2">No</span></label>
</div>

<div class="y q2a1q2a1q14">
<h2>Did you feel dizziness while exercising?</h2>
<label><input class="q2a1q2a1q14a1" type="radio" name="q2a1q2a1q14" value="q2a1q2a1q14a1"><span class="q2a1q2a1q14a1">Yes</span></label>
<label><input class="q2a1q2a1q14a2" type="radio" name="q2a1q2a1q14" value="q2a1q2a1q14a2"><span class="q2a1q2a1q14a2">No</span></label>
</div>

<div class="y q2a1q2a1q21">
<h2>Do you feel dizziness while lying on bed?</h2>
<label><input class="q2a1q2a1q21a1" type="radio" name="q2a1q2a1q21" value="q2a1q2a1q21a1"><span class="q2a1q2a1q21a1">Yes</span></label>
<label><input class="q2a1q2a1q21a2" type="radio" name="q2a1q2a1q21" value="q2a1q2a1q21a2"><span class="q2a1q2a1q21a2">No</span></label>
</div>

<div class="y q2a1q2a1q15">
<h2>Do you have any hearing, vision problem WITH dizziness?</h2>
<label><input class="q2a1q2a1q15a1" type="radio" name="q2a1q2a1q15" value="q2a1q2a1q15a1"><span class="q2a1q2a1q15a1">Yes</span></label>
<label><input class="q2a1q2a1q15a2" type="radio" name="q2a1q2a1q15" value="q2a1q2a1q15a2"><span class="q2a1q2a1q15a2">No</span></label>
</div>

<div class="y q2a1q2a1q16">
<h2>Do you feel any difficulty with speech when you feel dizziness?</h2>
<label><input class="q2a1q2a1q16a1" type="radio" name="q2a1q2a1q16" value="q2a1q2a1q16a1"><span class="q2a1q2a1q16a1">Yes</span></label>
<label><input class="q2a1q2a1q16a2" type="radio" name="q2a1q2a1q16" value="q2a1q2a1q16a2"><span class="q2a1q2a1q16a2">No</span></label>
</div>

<div class="y q2a1q2a1q17">
<h2>Do you feel any difficulty with swallowing when you feel dizziness?</h2>
<label><input class="q2a1q2a1q16a1" type="radio" name="q2a1q2a1q16" value="q2a1q2a1q16a1"><span class="q2a1q2a1q16a1">Yes</span></label>
<label><input class="q2a1q2a1q16a2" type="radio" name="q2a1q2a1q16" value="q2a1q2a1q16a2"><span class="q2a1q2a1q16a2">No</span></label>
</div>

<div class="y q2a1q2a1q18">
<h2>Have you noticed any sensory loss or numbness on your arm or legs when you felt dizziness?</h2>
<label><input class="q2a1q2a1q17a1" type="radio" name="q2a1q2a1q17" value="q2a1q2a1q17a1"><span class="q2a1q2a1q17a1">Yes</span></label>
<label><input class="q2a1q2a1q17a2" type="radio" name="q2a1q2a1q17" value="q2a1q2a1q17a2"><span class="q2a1q2a1q17a2">No</span></label>
</div>

<div class="y q2a1q2a1q19">
<h2>Did you have migraine headache before, during, or after dizziness?</h2>
<label><input class="q2a1q2a1q19a1" type="radio" name="q2a1q2a1q19" value="q2a1q2a1q19a1"><span class="q2a1q2a1q19a1">Yes</span></label>
<label><input class="q2a1q2a1q19a2" type="radio" name="q2a1q2a1q19" value="q2a1q2a1q19a2"><span class="q2a1q2a1q19a2">No</span></label>
</div>

<div class="y q2a1q2a1q20">
<h2>Does the dizziness get worse with head movement?</h2>
<label><input class="q2a1q2a1q20a1" type="radio" name="q2a1q2a1q20" value="q2a1q2a1q20a1"><span class="q2a1q2a1q20a1">Yes</span></label>
<label><input class="q2a1q2a1q20a2" type="radio" name="q2a1q2a1q20" value="q2a1q2a1q20a2"><span class="q2a1q2a1q20a2">No</span></label>
</div>




<div class="y q2a1q1a1q11">
<h2>[Respiratory symptom] When did it start?</h2>
<label><input class="q2a1q1a1q11a1" type="radio" name="q2a1q1a1q11" value="q2a1q1a1q11a1"><span class="q2a1q1a1q11a1">Today - yesterday</span></label>
<label><input class="q2a1q1a1q11a2" type="radio" name="q2a1q1a1q11" value="q2a1q1a1q11a2"><span class="q2a1q1a1q11a2">2-3 days ago</span></label>
<label><input class="q2a1q1a1q11a3" type="radio" name="q2a1q1a1q11" value="q2a1q1a1q11a3"><span class="q2a1q1a1q11a3">4-7 days ago</span></label>
<label><input class="q2a1q1a1q11a4" type="radio" name="q2a1q1a1q11" value="q2a1q1a1q11a4"><span class="q2a1q1a1q11a4">1-2 weeks ago</span></label>
<label><input class="q2a1q1a1q11a5" type="radio" name="q2a1q1a1q11" value="q2a1q1a1q11a5"><span class="q2a1q1a1q11a5">3-4 weeks ago</span></label>
<label><input class="q2a1q1a1q11a6" type="radio" name="q2a1q1a1q11" value="q2a1q1a1q11a6"><span class="q2a1q1a1q11a6">More than a month ago</span></label>
</div>
 
<div class="y q2a1q1a1q12">
<h2> [Respiratory symptom] Is it getting worse?</h2>
<label><input class="q2a1q1a1q12a1" type="radio" name="q2a1q1a1q12" value="q2a1q1a1q12a1"><span class="q2a1q1a1q12a1">Worsening</span></label>
<label><input class="q2a1q1a1q12a2" type="radio" name="q2a1q1a1q12" value="q2a1q1a1q12a2"><span class="q2a1q1a1q12a2">Same</span></label>
<label><input class="q2a1q1a1q12a3" type="radio" name="q2a1q1a1q12" value="q2a1q1a1q12a3"><span class="q2a1q1a1q12a3">Improving</span></label>
</div>


<div class="y q2a1q1a1q1">
<h2>Do you have headache?</h2>
<label><input class="q2a1q1a1q1a1" type="radio" name="q2a1q1a1q1" value="q2a1q1a1q1a1"><span class="q2a1q1a1q1a1">Yes</span></label>
<label><input class="q2a1q1a1q1a2" type="radio" name="q2a1q1a1q1" value="q2a1q1a1q1a2"><span class="q2a1q1a1q1a2">No</span></label>
</div>

<div class="y q2a1q1a1q2">
<h2>Do you have ear pain, pressure?</h2>
<label><input class="q2a1q1a1q2a1" type="radio" name="q2a1q1a1q2" value="q2a1q1a1q2a1"><span class="q2a1q1a1q2a1">Yes</span></label>
<label><input class="q2a1q1a1q2a2" type="radio" name="q2a1q1a1q2" value="q2a1q1a1q2a2"><span class="q2a1q1a1q2a2">No</span></label>
</div>

<div class="y q2a1q1a1q3">
<h2>Do you have eye pain, redness?</h2>
<label><input class="q2a1q1a1q3a1" type="radio" name="q2a1q1a1q3" value="q2a1q1a1q3a1"><span class="q2a1q1a1q3a1">Yes</span></label>
<label><input class="q2a1q1a1q3a2" type="radio" name="q2a1q1a1q3" value="q2a1q1a1q3a2"><span class="q2a1q1a1q3a2">No</span></label>
</div>

<div class="y q2a1q1a1q4">
<h2>Do you have sinus congestion?</h2>
<label><input class="q2a1q1a1q4a1" type="radio" name="q2a1q1a1q4" value="q2a1q1a1q4a1"><span class="q2a1q1a1q4a1">Yes</span></label>
<label><input class="q2a1q1a1q4a2" type="radio" name="q2a1q1a1q4" value="q2a1q1a1q4a2"><span class="q2a1q1a1q4a2">No</span></label>
</div>

<div class="y q2a1q1a1q5">
<h2>Do you have runny nose?</h2>
<label><input class="q2a1q1a1q5a1" type="radio" name="q2a1q1a1q5" value="q2a1q1a1q5a1"><span class="q2a1q1a1q5a1">Yes</span></label>
<label><input class="q2a1q1a1q5a2" type="radio" name="q2a1q1a1q5" value="q2a1q1a1q5a2"><span class="q2a1q1a1q5a2">No</span></label>
</div>

<div class="y q2a1q1a1q6">
<h2>Do you have sore throat?</h2>
<label><input class="q2a1q1a1q6a1" type="radio" name="q2a1q1a1q6" value="q2a1q1a1q6a1"><span class="q2a1q1a1q6a1">Yes</span></label>
<label><input class="q2a1q1a1q6a2" type="radio" name="q2a1q1a1q6" value="q2a1q1a1q6a2"><span class="q2a1q1a1q6a2">No</span></label>
</div>

<div class="y q2a1q1a1q7">
<h2>Have you been coughing?</h2>
<label><input class="q2a1q1a1q7a1" type="radio" name="q2a1q1a1q7" value="q2a1q1a1q7a1"><span class="q2a1q1a1q7a1">Yes</span></label>
<label><input class="q2a1q1a1q7a2" type="radio" name="q2a1q1a1q7" value="q2a1q1a1q7a2"><span class="q2a1q1a1q7a2">No</span></label>
</div>

<div class="y q2a1q1a1q7a1q1">
<h2>Do you cough up any phlegm?</h2>
<label><input class="q2a1q1a1q7a1q1a1" type="radio" name="q2a1q1a1q7a1q1" value="q2a1q1a1q7a1q1a1"><span class="q2a1q1a1q7a1q1a1">Yes</span></label>
<label><input class="q2a1q1a1q7a1q1a2" type="radio" name="q2a1q1a1q7a1q1" value="q2a1q1a1q7a1q1a2"><span class="q2a1q1a1q7a1q1a2">No</span></label>
</div>

<div class="y q2a1q1a1q7a1q1a1q1">
<h2>What was the color of the phlegm?</h2>
<label><input class="q2a1q1a1q7a1q1a1q1a1" type="radio" name="q2a1q1a1q7a1q1a1q1" value="q2a1q1a1q7a1q1a1q1a1"><span class="q2a1q1a1q7a1q1a1q1a1">I didn't check it.</span></label>
<label><input class="q2a1q1a1q7a1q1a1q1a2" type="radio" name="q2a1q1a1q7a1q1a1q1" value="q2a1q1a1q7a1q1a1q1a2"><span class="q2a1q1a1q7a1q1a1q1a2">Clear, white, or gray</span></label>
<label><input class="q2a1q1a1q7a1q1a1q1a3" type="radio" name="q2a1q1a1q7a1q1a1q1" value="q2a1q1a1q7a1q1a1q1a3"><span class="q2a1q1a1q7a1q1a1q1a3">Yellow, green</span></label>
<label><input class="q2a1q1a1q7a1q1a1q1a4" type="radio" name="q2a1q1a1q7a1q1a1q1" value="q2a1q1a1q7a1q1a1q1a4"><span class="q2a1q1a1q7a1q1a1q1a4">Red</span></label>
</div>

<div class="y q2a1q1a1q8">
<h2>Do you feel difficulty breathing?</h2>
<label><input class="q2a1q1a1q8a1" type="radio" name="q2a1q1a1q8" value="q2a1q1a1q8a1"><span class="q2a1q1a1q8a1">Yes</span></label>
<label><input class="q2a1q1a1q8a2" type="radio" name="q2a1q1a1q8" value="q2a1q1a1q8a2"><span class="q2a1q1a1q8a2">No</span></label>
</div>

<div class="y q2a1q1a1q9">
<h2>Do you have fever or chills?</h2>
<label><input class="q2a1q1a1q9a1" type="radio" name="q2a1q1a1q9" value="q2a1q1a1q9a1"><span class="q2a1q1a1q9a1">Yes</span></label>
<label><input class="q2a1q1a1q9a2" type="radio" name="q2a1q1a1q9" value="q2a1q1a1q9a2"><span class="q2a1q1a1q9a2">No</span></label>
</div>

<div class="y q2a1q1a1q9a1q1">
<h2>How high was your temperature?</h2>
<label><input class="q2a1q1a1q9a1q1a1" type="radio" name="q2a1q1a1q9a1q1" value="q2a1q1a1q9a1q1a1"><span class="q2a1q1a1q9a1q1a1">I didn't measure it</span></label>
<label><input class="q2a1q1a1q9a1q1a2" type="radio" name="q2a1q1a1q9a1q1" value="q2a1q1a1q9a1q1a2"><span class="q2a1q1a1q9a1q1a2">Higher than 103.0</span></label>
<label><input class="q2a1q1a1q9a1q1a3" type="radio" name="q2a1q1a1q9a1q1" value="q2a1q1a1q9a1q1a3"><span class="q2a1q1a1q9a1q1a3">100.0 - 102.9</span></label>
<label><input class="q2a1q1a1q9a1q1a4" type="radio" name="q2a1q1a1q9a1q1" value="q2a1q1a1q9a1q1a4"><span class="q2a1q1a1q9a1q1a4">Lower than 100.0</span></label>
</div>

<div class="y q2a1q1a1q10">
<h2>Did you hear any wheezing whey you breath?</h2>
<label><input class="q2a1q1a1q10a1" type="radio" name="q2a1q1a1q10" value="q2a1q1a1q10a1"><span class="q2a1q1a1q10a1">Yes</span></label>
<label><input class="q2a1q1a1q10a2" type="radio" name="q2a1q1a1q10" value="q2a1q1a1q10a2"><span class="q2a1q1a1q10a2">No</span></label>
</div>

<div class="y q2a1q1a1q10a1q1">
<h2>Do you have history of asthma or COPD?</h2>
<label><input class="q2a1q1a1q10a1q1a1" type="radio" name="q2a1q1a1q10a1q1" value="q2a1q1a1q10a1q1a1"><span class="q2a1q1a1q10a1q1a1">Yes</span></label>
<label><input class="q2a1q1a1q10a1q1a2" type="radio" name="q2a1q1a1q10a1q1" value="q2a1q1a1q10a1q1a2"><span class="q2a1q1a1q10a1q1a2">No</span></label>
</div>

<div class="y q2a1q1a1q10a1q1a2q1">
<h2>Do/did you smoke?</h2>
<label><input class="q2a1q1a1q10a1q1a2q1a1" type="radio" name="q2a1q1a1q10a1q1a2q1" value="q2a1q1a1q10a1q1a2q1a1"><span class="q2a1q1a1q10a1q1a2q1a1">Yes</span></label>
<label><input class="q2a1q1a1q10a1q1a2q1a2" type="radio" name="q2a1q1a1q10a1q1a2q1" value="q2a1q1a1q10a1q1a2q1a2"><span class="q2a1q1a1q10a1q1a2q1a2">No</span></label>
</div>


<div class="y q1000">
<h2>You've answered all questions. <br>Please submit, answers will be delivered to Dr Lee.</h2>
<label><input class="q1000a1" type="submit" name="q1000" value="q1000a1"><span class="q1000a1">Send answers to Dr. Lee for review</span></label>
<script>$(document).ready(()=> { 
        $(".q1000").css("display" ,"flex"); 
});</script>
</div>
</form>


<div style="display:none;">
<?php

date_default_timezone_set("America/New_York");
$time= date('m_d_y');
$user = 'b77225dc29feba';
$password = '52bed046';
$dbname = 'heroku_bf6133839e3e3aa';
$host = 'us-cdbr-iron-east-04.cleardb.net';
$port = 3306;
$conn = new mysqli($host, $user, $password, $dbname);
if ($conn ->connect_errno) {
    echo "Failed to connect to MySQL: " . $conn ->connect_error;
    exit();
  } else {echo "connected";};
$q1=$_POST['q3'];
$pt = $time."_".$q1;
echo $pt;

$sql="SELECT answer_id FROM center_db WHERE patient_id = '$pt';";
  $result = $conn->query($sql);
  if($result->num_rows>0){
    while($row = $result->fetch_assoc()){
      for($i=1;$i<=12;$i++){
      $id = $row["answer_id"];
      echo "<script>$(document).ready(()=> { 
        $(\".".$row['answer_id']."q".$i."\").css(\"display\" ,\"flex\"); 
        });</script>";
      };
      
    };

  };
    

  $sql= "SELECT question_id FROM question_db;";
  $result = $conn->query($sql);
  if($result->num_rows>0){
  while($row = $result->fetch_assoc()){
      for ($i=1;$i<=28;$i++){
          for($j=1;$j<=1;$j++){
              $id = $row["question_id"];
              $ans_id = $id."a".$i;
              $que_id = $ans_id."q".$j;
                  echo "<script>$(document).ready(()=>{ 
                      $(\".".$ans_id."\").on('click',()=>{
                          $(\".".$que_id."\").css(\"display\" ,\"flex\"); 
                          $(\"html, body\").animate({scrollTop: $(\".".$id."\").offset().top + $(\".".$id."\").height()}, 250);
                        });});</script>";
                  };                    
              };
          };
  } else {};
  
  $conn -> close();
?>
</div>
</body>
</html>
