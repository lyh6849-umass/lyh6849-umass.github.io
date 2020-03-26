<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link href = "ma2_db.css" type = "text/css" rel="stylesheet">
</head>
<body>
 
<form action="ma2_db_db.php" method ="post">

<div class="y q0">
<h2>Please anwer following questions. <br>  Answers will be reviewed by Dr. Lee.</h2>
<label><input class="q0a1" type="radio" name="q0" value="q0a1"><span class="q0a1">Start</span></label>
<?php
$qq=$_POST['q3'];
echo "<input class=\"q0a1\" type=\"text\" name=\"q0\" value=\"".$qq."\">";
?>
</div>
 
<div class="y q2a1q3a1q1 q2a1q3a1q1a1q1 q2a1q3a1q1a1q2 q2a1q3a1q1a1q3 q2a1q3a1q1a1q4 q2a1q3a1q1a1q5">
<h2>[Urinary discomfort] Please specify the symptom (check all that applies). </h2>
<label><input class="q2a1q3a1q1a1q1a1" type="checkbox" name="q2a1q3a1q1a1q1" value="q2a1q3a1q1a1q1a1"><span class="q2a1q3a1q1a1q1a1"> Pain (burning) on urination </span></label>
<label><input class="q2a1q3a1q1a1q2a1" type="checkbox" name="q2a1q3a1q1a1q2" value="q2a1q3a1q1a1q2a1"><span class="q2a1q3a1q1a1q2a1"> Itching on urination </span></label>
<label><input class="q2a1q3a1q1a1q3a1" type="checkbox" name="q2a1q3a1q1a1q3" value="q2a1q3a1q1a1q3a1"><span class="q2a1q3a1q1a1q3a1"> Bad smell from urine</span></label>
<label><input class="q2a1q3a1q1a1q4a1" type="checkbox" name="q2a1q3a1q1a1q4" value="q2a1q3a1q1a1q4a1"><span class="q2a1q3a1q1a1q4a1"> Urine color change (cloudy, bloody)</span></label>
<label><input class="q2a1q3a1q1a1q5a1" type="checkbox" name="q2a1q3a1q1a1q5" value="q2a1q3a1q1a1q5a1"><span class="q2a1q3a1q1a1q5a1"> Bladder pain</span></label>
</div>
 
<div class="y q2a1q3a1q2">
<h2>[Urinary discomfort] When did it start?</h2>
<label><input class="q2a1q3a1q2a1" type="radio" name="q2a1q3a1q2" value="q2a1q3a1q2a1"><span class="q2a1q3a1q2a1">Today - yesterday</span></label>
<label><input class="q2a1q3a1q2a2" type="radio" name="q2a1q3a1q2" value="q2a1q3a1q2a2"><span class="q2a1q3a1q2a2">2-3 days ago</span></label>
<label><input class="q2a1q3a1q2a3" type="radio" name="q2a1q3a1q2" value="q2a1q3a1q2a3"><span class="q2a1q3a1q2a3">4-7 days ago</span></label>
<label><input class="q2a1q3a1q2a4" type="radio" name="q2a1q3a1q2" value="q2a1q3a1q2a4"><span class="q2a1q3a1q2a4">1-2 weeks ago</span></label>
<label><input class="q2a1q3a1q2a5" type="radio" name="q2a1q3a1q2" value="q2a1q3a1q2a5"><span class="q2a1q3a1q2a5">3-4 weeks ago</span></label>
<label><input class="q2a1q3a1q2a6" type="radio" name="q2a1q3a1q2" value="q2a1q3a1q2a6"><span class="q2a1q3a1q2a6">More than a month ago</span></label>
</div>
 
  <div class="y q2a1q3a1q3">
<h2>[Urinary discomfort] Is it getting worse, same or improving?</h2>
<label><input class="q2a1q3a1q3a1" type="radio" name="q2a1q3a1q3" value="q2a1q3a1q3a1"><span class="q2a1q3a1q3a1">Getting worse</span></label>
<label><input class="q2a1q3a1q3a2" type="radio" name="q2a1q3a1q3" value="q2a1q3a1q3a2"><span class="q2a1q3a1q3a2">Same</span></label>
<label><input class="q2a1q3a1q3a3" type="radio" name="q2a1q3a1q3" value="q2a1q3a1q3a3"><span class="q2a1q3a1q3a3">Getting better</span></label>
</div>
 
<div class="y q2a1q3a1q4">
<h2>[Urinary discomfort] Do you have fever?</h2>
<label><input class="q2a1q3a1q4a1" type="radio" name="q2a1q3a1q4" value="q2a1q3a1q4a1"><span class="q2a1q3a1q4a1">Yes</span></label>
<label><input class="q2a1q3a1q4a2" type="radio" name="q2a1q3a1q4" value="q2a1q3a1q4a2"><span class="q2a1q3a1q4a2">No</span></label>
</div>
 
<div class="y q2a1q3a1q5">
<h2>[Urinary discomfort] Do you have pain in flank area?</h2>
<label><input class="q2a1q3a1q5a1" type="radio" name="q2a1q3a1q5" value="q2a1q3a1q5a1"><span class="q2a1q3a1q5a1">Yes</span></label>
<label><input class="q2a1q3a1q5a2" type="radio" name="q2a1q3a1q5" value="q2a1q3a1q5a2"><span class="q2a1q3a1q5a2">No</span></label>
</div>
 




<div class="y q2a1q2a1q1">
<h2>[Dizziness] When did it start?</h2>
<label><input class="q2a1q2a1q1a1" type="radio" name="q2a1q2a1q1" value="q2a1q2a1q1a1"><span class="q2a1q2a1q1a1">Today - yesterday</span></label>
<label><input class="q2a1q2a1q1a2" type="radio" name="q2a1q2a1q1" value="q2a1q2a1q1a2"><span class="q2a1q2a1q1a2">2-3 days ago</span></label>
<label><input class="q2a1q2a1q1a3" type="radio" name="q2a1q2a1q1" value="q2a1q2a1q1a3"><span class="q2a1q2a1q1a3">4-7 days ago</span></label>
<label><input class="q2a1q2a1q1a4" type="radio" name="q2a1q2a1q1" value="q2a1q2a1q1a4"><span class="q2a1q2a1q1a4">1-4 weeks ago</span></label>
<label><input class="q2a1q2a1q1a5" type="radio" name="q2a1q2a1q1" value="q2a1q2a1q1a5"><span class="q2a1q2a1q1a5">1-2 months ago</span></label>
<label><input class="q2a1q2a1q1a6" type="radio" name="q2a1q2a1q1" value="q2a1q2a1q1a6"><span class="q2a1q2a1q1a6">More than 2 months ago</span></label>
</div>

<div class="y q2a1q2a1q2">
<h2>[Dizziness] What does it feel like?</h2>
<label><input class="q2a1q2a1q2a1" type="radio" name="q2a1q2a1q2" value="q2a1q2a1q2a1"><span class="q2a1q2a1q2a1">Lightheadness</span></label>
<label><input class="q2a1q2a1q2a2" type="radio" name="q2a1q2a1q2" value="q2a1q2a1q2a2"><span class="q2a1q2a1q2a2">Spinning sensation (vertigo)</span></label>
<label><input class="q2a1q2a1q2a3" type="radio" name="q2a1q2a1q2" value="q2a1q2a1q2a3"><span class="q2a1q2a1q2a3">Near pass out (near syncope)</span></label>
<label><input class="q2a1q2a1q2a4" type="radio" name="q2a1q2a1q2" value="q2a1q2a1q2a4"><span class="q2a1q2a1q2a4">Not sure</span></label>
</div>

<div class="y q2a1q2a1q3">
<h2>[Dizziness] How often does it happen?</h2>
<label><input class="q2a1q2a1q3a1" type="radio" name="q2a1q2a1q3" value="q2a1q2a1q3a1"><span class="q2a1q2a1q3a1">Constant, continuous</span></label>
<label><input class="q2a1q2a1q3a2" type="radio" name="q2a1q2a1q3" value="q2a1q2a1q3a2"><span class="q2a1q2a1q3a2">A few times a day</span></label>
<label><input class="q2a1q2a1q3a3" type="radio" name="q2a1q2a1q3" value="q2a1q2a1q3a3"><span class="q2a1q2a1q3a3">Daily</span></label>
<label><input class="q2a1q2a1q3a4" type="radio" name="q2a1q2a1q3" value="q2a1q2a1q3a4"><span class="q2a1q2a1q3a4">A few times a week</span></label>
<label><input class="q2a1q2a1q3a5" type="radio" name="q2a1q2a1q3" value="q2a1q2a1q3a5"><span class="q2a1q2a1q3a5">A few times a month</span></label>
<label><input class="q2a1q2a1q3a6" type="radio" name="q2a1q2a1q3" value="q2a1q2a1q3a6"><span class="q2a1q2a1q3a6">A few times a year</span></label>
</div>

<div class="y q2a1q2a1q4">
<h2>[Dizziness] How long does it last each time?</h2>
<label><input class="q2a1q2a1q4a1" type="radio" name="q2a1q2a1q4" value="q2a1q2a1q4a1"><span class="q2a1q2a1q4a1">Constant, continuous</span></label>
<label><input class="q2a1q2a1q4a2" type="radio" name="q2a1q2a1q4" value="q2a1q2a1q4a2"><span class="q2a1q2a1q4a2">A few seconds</span></label>
<label><input class="q2a1q2a1q4a3" type="radio" name="q2a1q2a1q4" value="q2a1q2a1q4a3"><span class="q2a1q2a1q4a3">A few minutes</span></label>
<label><input class="q2a1q2a1q4a4" type="radio" name="q2a1q2a1q4" value="q2a1q2a1q4a4"><span class="q2a1q2a1q4a4">A few hours</span></label>
<label><input class="q2a1q2a1q4a5" type="radio" name="q2a1q2a1q4" value="q2a1q2a1q4a5"><span class="q2a1q2a1q4a5">Almost a day</span></label>
<label><input class="q2a1q2a1q4a6" type="radio" name="q2a1q2a1q4" value="q2a1q2a1q4a6"><span class="q2a1q2a1q4a6">A few days</span></label>
</div>

<div class="y q2a1q2a1q5 q2a1q2a1q5a1q1 q2a1q2a1q5a1q2 q2a1q2a1q5a1q3 q2a1q2a1q5a1q4 q2a1q2a1q5a1q5">
<h2>Do you have any of following medical history?</h2>
<label><input class="q2a1q2a1q5a1q1a1" type="radio" name="q2a1q2a1q5a1q1" value="q2a1q2a1q5a1q1a1"><span class="q2a1q2a1q5a1q1a1">Heart disease</span></label>
<label><input class="q2a1q2a1q5a1q2a1" type="radio" name="q2a1q2a1q5a1q2" value="q2a1q2a1q5a1q2a1"><span class="q2a1q2a1q5a1q2a1">Severe anemia</span></label>
<label><input class="q2a1q2a1q5a1q3a1" type="radio" name="q2a1q2a1q5a1q3" value="q2a1q2a1q5a1q3a1"><span class="q2a1q2a1q5a1q3a1">Family history of sudden death</span></label>
<label><input class="q2a1q2a1q5a1q4a1" type="radio" name="q2a1q2a1q5 a1q4" value="q2a1q2a1q5a1q4a1"><span class="q2a1q2a1q5a1q4a1">Recent head trauma</span></label>
<label><input class="q2a1q2a1q5a1q5a1" type="radio" name="q2a1q2a1q5 a1q5" value="q2a1q2a1q5a1q5a1"><span class="q2a1q2a1q5a1q5a1">Recent viral illness</span></label>
</div>

<div class="y q2a1q2a1q6 q2a1q2a1q6a1q1 q2a1q2a1q6a1q2 q2a1q2a1q6a1q3 q2a1q2a1q6a1q4 q2a1q2a1q6a1q5 q2a1q2a1q6a1q6">
<h2>[Dizziness] Do you have any of following symptoms?</h2>
<label><input class="q2a1q2a1q6a1q1a1" type="radio" name="q2a1q2a1q6a1q1" value="q2a1q2a1q6a1q1a1"><span class="q2a1q2a1q6a1q1a1">Palpitation WITH dizziness</span></label>
<label><input class="q2a1q2a1q6a1q2a1" type="radio" name="q2a1q2a1q6a1q2" value="q2a1q2a1q6a1q2a1"><span class="q2a1q2a1q6a1q2a1">Headache WITH dizziness</span></label>
<label><input class="q2a1q2a1q6a1q3a1" type="radio" name="q2a1q2a1q6a1q3" value="q2a1q2a1q6a1q3a1"><span class="q2a1q2a1q6a1q3a1">Chest pain WITH dizziness</span></label>
<label><input class="q2a1q2a1q6a1q4a1" type="radio" name="q2a1q2a1q6a1q4" value="q2a1q2a1q6a1q4a1"><span class="q2a1q2a1q6a1q4a1">Shortness of breath WITH dizziness</span></label>
<label><input class="q2a1q2a1q6a1q5a1" type="radio" name="q2a1q2a1q6a1q5" value="q2a1q2a1q6a1q5a1"><span class="q2a1q2a1q6a1q5a1">Dizziness while on exertion</span></label>
<label><input class="q2a1q2a1q6a1q6a1" type="radio" name="q2a1q2a1q6a1q6" value="q2a1q2a1q6a1q6a1"><span class="q2a1q2a1q6a1q6a1">Dizziness while lying on bed</span></label>
</div>

</div>
<div class="y q2a1q2a1q7 q2a1q2a1q7a1q1 q2a1q2a1q7a1q2 q2a1q2a1q7a1q3 q2a1q2a1q7a1q4 q2a1q2a1q7a1q5 q2a1q2a1q7a1q6">
<h2>[Dizziness] Do you have any of following symptoms?</h2>
<label><input class="q2a1q2a1q7a1q1a1" type="radio" name="q2a1q2a1q7a1q1" value="q2a1q2a1q7a1q1a1"><span class="q2a1q2a1q7a1q1a1">Ear, eye problem WITH dizziness</span></label>
<label><input class="q2a1q2a1q7a1q2a1" type="radio" name="q2a1q2a1q7a1q2" value="q2a1q2a1q7a1q2a1"><span class="q2a1q2a1q7a1q2a1">Speech problem WITH dizziness</span></label>
<label><input class="q2a1q2a1q7a1q3a1" type="radio" name="q2a1q2a1q7a1q3" value="q2a1q2a1q7a1q3a1"><span class="q2a1q2a1q7a1q3a1">Swallow difficulty WITH dizziness</span></label>
<label><input class="q2a1q2a1q7a1q4a1" type="radio" name="q2a1q2a1q7a1q4" value="q2a1q2a1q7a1q4a1"><span class="q2a1q2a1q7a1q4a1">Sensory loss, numbness WITH dizziness</span></label>
<label><input class="q2a1q2a1q7a1q5a1" type="radio" name="q2a1q2a1q7a1q5" value="q2a1q2a1q7a1q5a1"><span class="q2a1q2a1q7a1q5a1">Migraine before or after dizziness</span></label>
<label><input class="q2a1q2a1q7a1q6a1" type="radio" name="q2a1q2a1q7a1q6" value="q2a1q2a1q7a1q6a1"><span class="q2a1q2a1q7a1q6a1">Dizziness aggravated by head movement</span></label>
</div>

<div class="y q2a1q1a1q1 q2a1q1a1q1a1q1 q2a1q1a1q1a1q2 q2a1q1a1q1a1q3 q2a1q1a1q1a1q4 q2a1q1a1q1a1q5 q2a1q1a1q1a1q6 q2a1q1a1q1a1q7 q2a1q1a1q1a1q8 q2a1q1a1q1a1q9 q2a1q1a1q1a1q10 q2a1q1a1q1a1q11">
<h2>[Respiratory symptom] Please select ALL respiratory symptoms applies to you.</h2>
<label><input class="q2a1q1a1q1a1q1a1" type="radio" name="q2a1q1a1q1a1q1" value="q2a1q1a1q1a1q1a1"><span class="q2a1q1a1q1a1q1a1">Headache</span></label>
<label><input class="q2a1q1a1q1a1q2a1" type="radio" name="q2a1q1a1q1a1q2" value="q2a1q1a1q1a1q2a1"><span class="q2a1q1a1q1a1q2a1">Ear pain, pressure</span></label>
<label><input class="q2a1q1a1q1a1q3a1" type="radio" name="q2a1q1a1q1a1q3" value="q2a1q1a1q1a1q3a1"><span class="q2a1q1a1q1a1q3a1">Eye pain, redness</span></label>
<label><input class="q2a1q1a1q1a1q4a1" type="radio" name="q2a1q1a1q1a1q4" value="q2a1q1a1q1a1q4a1"><span class="q2a1q1a1q1a1q4a1">Sinus congestion</span></label>
<label><input class="q2a1q1a1q1a1q5a1" type="radio" name="q2a1q1a1q1a1q5" value="q2a1q1a1q1a1q5a1"><span class="q2a1q1a1q1a1q5a1">Runny nose</span></label>
<label><input class="q2a1q1a1q1a1q6a1" type="radio" name="q2a1q1a1q1a1q6" value="q2a1q1a1q1a1q6a1"><span class="q2a1q1a1q1a1q6a1">Sore throat</span></label>
<label><input class="q2a1q1a1q1a1q7a1" type="radio" name="q2a1q1a1q1a1q7" value="q2a1q1a1q1a1q7a1"><span class="q2a1q1a1q1a1q7a1">Cough</span></label>
<label><input class="q2a1q1a1q1a1q8a1" type="radio" name="q2a1q1a1q1a1q8" value="q2a1q1a1q1a1q8a1"><span class="q2a1q1a1q1a1q8a1">Phlegm (sputum)</span></label>
<label><input class="q2a1q1a1q1a1q9a1" type="radio" name="q2a1q1a1q1a1q9" value="q2a1q1a1q1a1q9a1"><span class="q2a1q1a1q1a1q9a1">Shortness of breath</span></label>
<label><input class="q2a1q1a1q1a1q10a1" type="radio" name="q2a1q1a1q1a1q10" value="q2a1q1a1q1a1q10a1"><span class="q2a1q1a1q1a1q10a1">Fever/chills</span></label>
<label><input class="q2a1q1a1q1a1q11a1" type="radio" name="q2a1q1a1q1a1q11" value="q2a1q1a1q1a1q11a1"><span class="q2a1q1a1q1a1q11a1">Wheezing</span></label>
</div>



<div class="y q2a1q1a1q2">
<h2>[Respiratory symptom] When did it start?</h2>
<label><input class="q2a1q1a1q2a1" type="radio" name="q2a1q1a1q2" value="q2a1q1a1q2a1"><span class="q2a1q1a1q2a1">Today - yesterday</span></label>
<label><input class="q2a1q1a1q2a2" type="radio" name="q2a1q1a1q2" value="q2a1q1a1q2a2"><span class="q2a1q1a1q2a2">2-3 days ago</span></label>
<label><input class="q2a1q1a1q2a3" type="radio" name="q2a1q1a1q2" value="q2a1q1a1q2a3"><span class="q2a1q1a1q2a3">4-7 days ago</span></label>
<label><input class="q2a1q1a1q2a4" type="radio" name="q2a1q1a1q2" value="q2a1q1a1q2a4"><span class="q2a1q1a1q2a4">1-2 weeks ago</span></label>
<label><input class="q2a1q1a1q2a5" type="radio" name="q2a1q1a1q2" value="q2a1q1a1q2a5"><span class="q2a1q1a1q2a5">3-4 weeks ago</span></label>
<label><input class="q2a1q1a1q2a6" type="radio" name="q2a1q1a1q2" value="q2a1q1a1q2a6"><span class="q2a1q1a1q2a6">More than a month ago</span></label>
</div>

<div class="y q2a1q1a1q3">
<h2> [Respiratory symptom] Is it getting worse?</h2>
<label><input class="q2a1q1a1q3a1" type="radio" name="q2a1q1a1q3" value="q2a1q1a1q3a1"><span class="q2a1q1a1q3a1">Worsening</span></label>
<label><input class="q2a1q1a1q3a2" type="radio" name="q2a1q1a1q3" value="q2a1q1a1q3a2"><span class="q2a1q1a1q3a2">Same</span></label>
<label><input class="q2a1q1a1q3a3" type="radio" name="q2a1q1a1q3" value="q2a1q1a1q3a3"><span class="q2a1q1a1q3a3">Improving</span></label>
</div>

<div class="y q2a1q1a1q4">
<h2>[Respiratory symptom] Have you tried over the counter medications? </h2>
<label><input class="q2a1q1a1q4a1" type="radio" name="q2a1q1a1q4" value="q2a1q1a1q4a1"><span class="q2a1q1a1q4a1">Yes, they helped</span></label>
<label><input class="q2a1q1a1q4a2" type="radio" name="q2a1q1a1q4" value="q2a1q1a1q4a2"><span class="q2a1q1a1q4a2">Yes, but they didn't help</span></label>
<label><input class="q2a1q1a1q4a3" type="radio" name="q2a1q1a1q4" value="q2a1q1a1q4a3"><span class="q2a1q1a1q4a3">No</span></label>
</div>

<div class="y q1000">
<h2>You've answered all questions. <br>Please submit, answers will be delivered to Dr Lee.</h2>
<label><input class="q1000a1" type="submit" name="q1000" value="q1000a1"><span class="q1000a1">Send answers to Dr. Lee for review</span></label>
<script>$(document).ready(()=> { 
        $(".q1000").css("display" ,"flex"); 
});</script>
</div>
</form>

</body>
</html>

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