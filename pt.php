<!DOCTYPE html> 
 
<html>
<head>
<link href = "pt.css" type = "text/css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
<form class="tov" method ="POST" action="pt.php">
    <div class="q1"><h1>TIME OF VISIT</h1>
        <label><input class="q1a1" type="radio" name="q1" value="q1a1"><span class = "q1a1">08:30</span></label>
        <label><input class="q1a2" type="radio" name="q1" value="q1a2"><span class = "q1a2">08:45</span></label>
        <label><input class="q1a3" type="radio" name="q1" value="q1a3"><span class = "q1a3">09:00</span></label>
        <label><input class="q1a4" type="radio" name="q1" value="q1a4"><span class = "q1a4">09:15</span></label>
        <label><input class="q1a5" type="radio" name="q1" value="q1a5"><span class = "q1a5">09:30</span></label>
        <label><input class="q1a6" type="radio" name="q1" value="q1a6"><span class = "q1a6">09:45</span></label>
        <label><input class="q1a7" type="radio" name="q1" value="q1a7"><span class = "q1a7">10:00</span></label>
        <label><input class="q1a8" type="radio" name="q1" value="q1a8"><span class = "q1a8">10:15</span></label>
        <label><input class="q1a9" type="radio" name="q1" value="q1a9"><span class = "q1a9">10:30</span></label>
        <label><input class="q1a10" type="radio" name="q1" value="q1a10"><span class = "q1a10">10:45</span></label>
        <label><input class="q1a11" type="radio" name="q1" value="q1a11"><span class = "q1a11">11:00</span></label>
        <label><input class="q1a12" type="radio" name="q1" value="q1a12"><span class = "q1a12">11:15</span></label>
        <label><input class="q1a13" type="radio" name="q1" value="q1a13"><span class = "q1a13">11:30</span></label>
        <label><input class="q1a14" type="radio" name="q1" value="q1a14"><span class = "q1a14">11:45</span></label>
        <label><input class="q1a15" type="radio" name="q1" value="q1a15"><span class = "q1a15">12:00</span></label>
        <label><input class="q1a16" type="radio" name="q1" value="q1a16"><span class = "q1a16">12:15</span></label>
        <label><input class="q1a17" type="radio" name="q1" value="q1a17"><span class = "q1a17">12:30</span></label>
        <label><input class="q1a18" type="radio" name="q1" value="q1a18"><span class = "q1a18">02:00</span></label>
        <label><input class="q1a19" type="radio" name="q1" value="q1a19"><span class = "q1a19">02:15</span></label>
        <label><input class="q1a20" type="radio" name="q1" value="q1a20"><span class = "q1a20">02:30</span></label>
        <label><input class="q1a21" type="radio" name="q1" value="q1a21"><span class = "q1a21">02:45</span></label>
        <label><input class="q1a22" type="radio" name="q1" value="q1a22"><span class = "q1a22">03:00</span></label>
        <label><input class="q1a23" type="radio" name="q1" value="q1a23"><span class = "q1a23">03:15</span></label>
        <label><input class="q1a24" type="radio" name="q1" value="q1a24"><span class = "q1a24">03:30</span></label>
        <label><input class="q1a25" type="radio" name="q1" value="q1a25"><span class = "q1a25">03:45</span></label>
        <label><input class="q1a26" type="radio" name="q1" value="q1a26"><span class = "q1a26">04:00</span></label>
        <label><input class="q1a27" type="radio" name="q1" value="q1a27"><span class = "q1a27">04:15</span></label>
        <label><input class="q1a28" type="radio" name="q1" value="q1a28"><span class = "q1a28">--:--</span></label>
        <label><input class="q1a29" type="radio" name="q1" value="q1a29"><span class = "q1a29">--:--</span></label>
        <label><input class="q1a30" type="radio" name="q1" value="q1a30"><span class = "q1a30">--:--</span></label>
    </div>
    <div class="tovsub">
        <input type ="submit" value="Start Patient Self Interview">
    </div>

<?php
if(isset($_POST['q1'])){
} else {
echo "<script>$(document).ready(()=>{\$(\".tov\").css(\"display\" ,\"inline-block\");});</script>";
};?>

</form>
<form class="form" method="POST" action="pt_db.php">
    

    <div class="y q3a1q1a2q1"><!--coloca-->
        <h2>You're due for test for colorectal cancer prevention. <br> Among 3 types of tests, which one do you prefer?</h2>
        <label><input class="q3a1q1a2q1a1" type="radio" name="q3a1q1a2q1" value="q3a1q1a2q1a1"><span class="q3a1q1a2q1a1">Colonoscopy every 10 years.</span></label>
        <label><input class="q3a1q1a2q1a2" type="radio" name="q3a1q1a2q1" value="q3a1q1a2q1a2"><span class="q3a1q1a2q1a2">Stool DNA test every 3 years.</span></label>
        <label><input class="q3a1q1a2q1a3" type="radio" name="q3a1q1a2q1" value="q3a1q1a2q1a3"><span class="q3a1q1a2q1a3">Stool blood test once a year.</span></label>
        <label><input class="q3a1q1a2q1a4" type="radio" name="q3a1q1a2q1" value="q3a1q1a2q1a4"><span class="q3a1q1a2q1a4">I don't want any screening test.</span></label>
        <label><input class="q3a1q1a2q1a5" type="radio" name="q3a1q1a2q1" value="q3a1q1a2q1a5"><span class="q3a1q1a2q1a5">I don't understand. Need further explanation.</span></label>
    </div>
 
    <div class="y q3a1q2a2q1"><!--mammo-->
        <h2>You're due for mammogram as part of breast cancer prevention. <br> Do you agree with the test?</h2>
        <label><input class="q3a1q2a2q1a1" type="radio" name="q3a1q2a2q1" value="q3a1q2a2q1a1"><span class="q3a1q2a2q1a1">Yes</span></label>
        <label><input class="q3a1q2a2q1a2" type="radio" name="q3a1q2a2q1" value="q3a1q2a2q1a2"><span class="q3a1q2a2q1a2">No</span></label>
        <label><input class="q3a1q2a2q1a3" type="radio" name="q3a1q2a2q1" value="q3a1q2a2q1a3"><span class="q3a1q2a2q1a3">I don't understand. Need further explanation.</span></label>
    </div>
 
    <div class="y q3a1q3a2q1">
        <h2>You're due for Pap Smear as part of cervical cancer prevention. <br> Do you agree with Pap Smear? </h2>
        <label><input class="q3a1q3a2q1a1" type="radio" name="q3a1q3a2q1" value="q3a1q3a2q1a1"><span class="q3a1q3a2q1a1">Yes</span></label>
        <label><input class="q3a1q3a2q1a2" type="radio" name="q3a1q3a2q1" value="q3a1q3a2q1a2"><span class="q3a1q3a2q1a2">No</span></label>
        <label><input class="q3a1q3a2q1a3" type="radio" name="q3a1q3a2q1" value="q3a1q3a2q1a3"><span class="q3a1q3a2q1a3">I don't understand. Need further explanation.</span></label>
    </div>
 
    <div class="y q3a1q4a2q1">
        <h2>You're indicated for ROUTINE hepatitis C virus infection screening blood test.<br> Doctor may order a blood test order it today.</h2>
        <label><input class="q3a1q4a2q1a1" type="radio" name="q3a1q4a2q1" value="q3a1q4a2q1a1"><span class="q3a1q4a2q1a1">Okay, I agree with test.</span></label>
        <label><input class="q3a1q4a2q1a2" type="radio" name="q3a1q4a2q1" value="q3a1q4a2q1a2"><span class="q3a1q4a2q1a2">No I don't want it.</span></label>
    </div>
 
    <div class="y q3a1q6a2q1"><!-- DM-urine -->
        <h2>You're due for urine protein test as part of diabetes management.<br> Doctor may order a urine test order today.</h2>
        <label><input class="q3a1q6a2q1a1" type="radio" name="q3a1q6a2q1" value="q3a1q6a2q1a1"><span class="q3a1q6a2q1a1">Okay, I agree with test.</span></label>
        <label><input class="q3a1q6a2q1a2" type="radio" name="q3a1q6a2q1" value="q3a1q6a2q1a2"><span class="q3a1q6a2q1a2">No I don't want it. </span></label>
    </div>
 
    <div class="y q3a1q7a2q1"><!--podiatry-->
        <h2>Have you seen a podiatrist with in past 12 months?</h2>
        <label><input class="q3a1q7a2q1a1" type="radio" name="q3a1q7a2q1" value="q3a1q7a2q1a1"><span class="q3a1q7a2q1a1">Yes</span></label>
        <label><input class="q3a1q7a2q1a2" type="radio" name="q3a1q7a2q1" value="q3a1q7a2q1a2"><span class="q3a1q7a2q1a2">No</span></label>
    </div>
 
    <div class="y q3a1q8a2q1"><!--opthalmologist-->
        <h2>Have you seen an opthalmologist with in past 12 months?</h2>
        <label><input class="q3a1q8a2q1a1" type="radio" name="q3a1q8a2q1" value="q3a1q8a2q1a1"><span class="q3a1q8a2q1a1">Yes</span></label>
        <label><input class="q3a1q8a2q1a2" type="radio" name="q3a1q8a2q1" value="q3a1q8a2q1a2"><span class="q3a1q8a2q1a2">No</span></label>
    </div>
 
    <div class="y q3a1q9a2q1"><!-- DM-a1c -->
        <h2>You're due for regular diabetes level test (HbA1c) as part of diabetes management. <br> Doctor may order a blood test today.</h2>
        <label><input class="q3a1q9a2q1a1" type="radio" name="q3a1q9a2q1" value="q3a1q9a2q1a1"><span class="q3a1q9a2q1a1">Okay, I agree with test </span></label>
        <label><input class="q3a1q9a2q1a2" type="radio" name="q3a1q9a2q1" value="q3a1q9a2q1a2"><span class="q3a1q9a2q1a2">No, I don't want it.</span></label>
    </div>
 
    <div class="y q3a1q10a2q1"><!-- shingle-->
        <h2>Have you received shingle vaccine after 10/2017?</h2>
        <label><input class="q3a1q10a2q1a1" type="radio" name="q3a1q10a2q1" value="q3a1q10a2q1a1"><span class="q3a1q10a2q1a1">Yes</span></label>
        <label><input class="q3a1q10a2q1a2" type="radio" name="q3a1q10a2q1" value="q3a1q10a2q1a2"><span class="q3a1q10a2q1a2">No</span></label>
        <label><input class="q3a1q10a2q1a3" type="radio" name="q3a1q10a2q1" value="q3a1q10a2q1a3"><span class="q3a1q10a2q1a3">I don't remember.</span></label>
    </div>
 
    <div class="y q3a1q10a2q1a1q1">
        <h2>There are two types of shingle vaccination. <br>Do you remember which type you have received?</h2>
        <label><input class="q3a1q10a2q1a1q1a1" type="radio" name="q3a1q10a2q1a1q1" value="q3a1q10a2q1a1q1a1"><span class="q3a1q10a2q1a1q1a1">Zostavax</span></label>
        <label><input class="q3a1q10a2q1a1q1a2" type="radio" name="q3a1q10a2q1a1q1" value="q3a1q10a2q1a1q1a2"><span class="q3a1q10a2q1a1q1a2">Shingrix</span></label>
        <label><input class="q3a1q10a2q1a1q1a3" type="radio" name="q3a1q10a2q1a1q1" value="q3a1q10a2q1a1q1a3"><span class="q3a1q10a2q1a1q1a3">Both</span></label>
        <label><input class="q3a1q10a2q1a1q1a4" type="radio" name="q3a1q10a2q1a1q1" value="q3a1q10a2q1a1q1a4"><span class="q3a1q10a2q1a1q1a4">I don't know</span></label>
    </div>
 
    <div class="y q3a1q10a2q1a1q1a4q1">
        <h2>Please check which type of vaccination you received, let our office know. </h2>
        <label><input class="q3a1q10a2q1a1q1a4q1a1" type="radio" name="q3a1q10a2q1a1q1a4q1" value="q3a1q10a2q1a1q1a4q1a1"><span class="q3a1q10a2q1a1q1a4q1a1">Okay, I wll.</span></label>
        <label><input class="q3a1q10a2q1a1q1a4q1a2" type="radio" name="q3a1q10a2q1a1q1a4q1" value="q3a1q10a2q1a1q1a4q1a2"><span class="q3a1q10a2q1a1q1a4q1a2">Unable to check.</span></label>

    </div>
 
    <div class="y q3a1q10a2q1a2q1 q3a1q10a2q1a3q1 q3a1q10a2q1a1q1a1q1 q3a1q10a2q1a1q1a4q1a2q1">
        <h2>You are indicated for Shingrix (Newer shingle vaccination). Please check with your insurance if this will be covered, let our office know. </h2>
        <label><input class="q3a1q10a2q1a2q1a1" type="radio" name="q3a1q10a2q1a2q1" value="q3a1q10a2q1a2q1a1"><span class="q3a1q10a2q1a2q1a1">Ok, I will</span></label>
        <label><input class="q3a1q10a2q1a2q1a2" type="radio" name="q3a1q10a2q1a2q1" value="q3a1q10a2q1a2q1a2"><span class="q3a1q10a2q1a2q1a2">I did. It is covered.</span></label>
        <label><input class="q3a1q10a2q1a2q1a3" type="radio" name="q3a1q10a2q1a2q1" value="q3a1q10a2q1a2q1a3"><span class="q3a1q10a2q1a2q1a3">I did. It is not covered.</span></label>
        <label><input class="q3a1q10a2q1a2q1a4" type="radio" name="q3a1q10a2q1a2q1" value="q3a1q10a2q1a2q1a4"><span class="q3a1q10a2q1a2q1a4">I don't want shingle vaccination.</span></label>
    </div>
 
    <div class="y q3a1q10a2q1a2q1a2q1">
        <h2>You're indicated for shingle vaccine. <br> Do you want to get it today? </h2>
        <label><input class="q3a1q10a2q1a2q1a2q1a1" type="radio" name="q3a1q10a2q1a2q1a2q1" value="q3a1q10a2q1a2q1a2q1a1"><span class="q3a1q10a2q1a2q1a2q1a1">Yes</span></label>
        <label><input class="q3a1q10a2q1a2q1a2q1a2" type="radio" name="q3a1q10a2q1a2q1a2q1" value="q3a1q10a2q1a2q1a2q1a2"><span class="q3a1q10a2q1a2q1a2q1a2">No</span></label>

    </div>
 
    <div class="y q3a1q10a2q1a2q1a3q1">
        <h2>You're indicated for shingle vaccine. Unfortunately, it is not covered by insurance. <br> Do you want to get it today? There can be over $200.00 copay.</h2>
        <label><input class="q3a1q10a2q1a2q1a3q1a1" type="radio" name="q3a1q10a2q1a2q1a3q1" value="q3a1q10a2q1a2q1a3q1a1"><span class="q3a1q10a2q1a2q1a3q1a1">Yes</span></label>
        <label><input class="q3a1q10a2q1a2q1a3q1a2" type="radio" name="q3a1q10a2q1a2q1a3q1" value="q3a1q10a2q1a2q1a3q1a2"><span class="q3a1q10a2q1a2q1a3q1a2">No</span></label>
    </div>
 
    <div class="y q3a1q11a2q1"><!-- flu-->
        <h2>Have you received flu vaccine this year?</h2>
        <label><input class="q3a1q11a2q1a1" type="radio" name="q3a1q11a2q1" value="q3a1q11a2q1a1"><span class="q3a1q11a2q1a1">Yes<Yes/span></label>
        <label><input class="q3a1q11a2q1a2" type="radio" name="q3a1q11a2q1" value="q3a1q11a2q1a2"><span class="q3a1q11a2q1a2">No</span></label>
    </div>
 
    <div class="y q3a1q11a2q1a2q1">
        <h2>You're indicated for flu vaccination. Do you want to get one today?</h2>
        <label><input class="q3a1q11a2q1a2q1a1" type="radio" name="q3a1q11a2q1a2q1" value="q3a1q11a2q1a2q1a1"><span class="q3a1q11a2q1a2q1a1">Yes</span></label>
        <label><input class="q3a1q11a2q1a2q1a2" type="radio" name="q3a1q11a2q1a2q1" value="q3a1q11a2q1a2q1a2"><span class="q3a1q11a2q1a2q1a2">No</span></label>
    </div>
 
    <div class="y q3a1q12a2q1"><!--Td-->
        <h2>Have you received tetanus vaccination after age 20?</h2>
        <label><input class="q3a1q12a2q1a1" type="radio" name="q3a1q12a2q1" value="q3a1q12a2q1a1"><span class="q3a1q12a2q1a1">Yes</span></label>
        <label><input class="q3a1q12a2q1a2" type="radio" name="q3a1q12a2q1" value="q3a1q12a2q1a2"><span class="q3a1q12a2q1a2">No</span></label>
    </div>
 
    <div class="y q3a1q12a2q1a2q1">
        <h2>You're indicated for tetanus vaccination (Tdap). Do you want to receive it today?</h2>
        <label><input class="q3a1q12a2q1a2q1a1" type="radio" name="q3a1q12a2q1a2q1" value="q3a1q12a2q1a2q1a1"><span class="q3a1q12a2q1a2q1a1">Yes</span></label>
        <label><input class="q3a1q12a2q1a2q1a2" type="radio" name="q3a1q12a2q1a2q1" value="q3a1q12a2q1a2q1a2"><span class="q3a1q12a2q1a2q1a2">No</span></label>
    </div>
 
    <div class="y q3a1q12a2q1a1q1">
        <h2>Have you received tetanus vaccination with in last 10 years?</h2>
        <label><input class="q3a1q12a2q1a1q1a1" type="radio" name="q3a1q12a2q1a1q1" value="q3a1q12a2q1a1q1a1"><span class="q3a1q12a2q1a1q1a1">Yes</span></label>
        <label><input class="q3a1q12a2q1a1q1a2" type="radio" name="q3a1q12a2q1a1q1" value="q3a1q12a2q1a1q1a2"><span class="q3a1q12a2q1a1q1a2">No</span></label>
        <label><input class="q3a1q12a2q1a1q1a3" type="radio" name="q3a1q12a2q1a1q1" value="q3a1q12a2q1a1q1a3"><span class="q3a1q12a2q1a1q1a3">Not sure.</span></label>
    </div>
 
    <div class="y q3a1q12a2q1a1q1a2q1 q3a1q12a2q1a1q1a3q1">
        <h2>You're indicated for tetanus vaccination (Td). Do you want to receive it today?</h2>
        <label><input class="q3a1q12a2q1a1q1a2q1a1" type="radio" name="q3a1q12a2q1a1q1a2q1" value="q3a1q12a2q1a1q1a2q1a1"><span class="q3a1q12a2q1a1q1a2q1a1">Yes</span></label>
        <label><input class="q3a1q12a2q1a1q1a2q1a2" type="radio" name="q3a1q12a2q1a1q1a2q1" value="q3a1q12a2q1a1q1a2q1a2"><span class="q3a1q12a2q1a1q1a2q1a2">No</span></label>
    </div>
 
    <div class="y q3a1q13a2q1">
        <h2>You're indicated for Pneumonia vaccination. <br>Do you want to receive it today?</h2>
        <label><input class="q3a1q13a2q1a1" type="radio" name="q3a1q13a2q1" value="q3a1q13a2q1a1"><span class="q3a1q13a2q1a1">Yes</span></label>
        <label><input class="q3a1q13a2q1a2" type="radio" name="q3a1q13a2q1" value="q3a1q13a2q1a2"><span class="q3a1q13a2q1a2">No</span></label>
    </div>
    
    <div class="y q3a1q13a2q1a1q1">
        <h2>How old are you?</h2>
        <label><input class="q3a1q13a2q1a1q1a1" type="radio" name="q3a1q13a2q1a1q1" value="q3a1q13a2q1a1q1a1"><span class="q3a1q13a2q1a1q1a1">Younger than 65 </span></label>
        <label><input class="q3a1q13a2q1a1q1a2" type="radio" name="q3a1q13a2q1a1q1" value="q3a1q13a2q1a1q1a2"><span class="q3a1q13a2q1a1q1a2">65 or older</span></label>
    </div>
    <!--Patient Q; Medicare Wellness HRA--> 
    <div class=" y q2a1q1">
    <h2>In general, would you say your health is </h2>
    <label><input class="q2a1q1a1" type="radio" name="q2a1q1" value="q2a1q1a1"><span class="q2a1q1a1">Excellent</span></label>
    <label><input class="q2a1q1a2" type="radio" name="q2a1q1" value="q2a1q1a2"><span class="q2a1q1a2">Very good</span></label>
    <label><input class="q2a1q1a3" type="radio" name="q2a1q1" value="q2a1q1a3"><span class="q2a1q1a3">Good</span></label>
    <label><input class="q2a1q1a4" type="radio" name="q2a1q1" value="q2a1q1a4"><span class="q2a1q1a4">Fair</span></label>
    <label><input class="q2a1q1a5" type="radio" name="q2a1q1" value="q2a1q1a5"><span class="q2a1q1a5">Poor</span></label>
    </div>

    <div class=" y q2a1q2">
    <h2>In the past 7 days, how much pain have you felt?</h2>
    <label><input class="q2a1q2a1" type="radio" name="q2a1q2" value="q2a1q2a1"><span class="q2a1q2a1">None</span></label>
    <label><input class="q2a1q2a2" type="radio" name="q2a1q2" value="q2a1q2a2"><span class="q2a1q2a2">Some</span></label>
    <label><input class="q2a1q2a3" type="radio" name="q2a1q2" value="q2a1q2a3"><span class="q2a1q2a3">A lot </span></label>
    </div>

    <div class=" y q2a1q3">
    <h2>How would you describe the condition of your mouth and teeth - including false teeth or denture?</h2>
    <label><input class="q2a1q3a1" type="radio" name="q2a1q3" value="q2a1q3a1"><span class="q2a1q3a1">Excellent</span></label>
    <label><input class="q2a1q3a2" type="radio" name="q2a1q3" value="q2a1q3a2"><span class="q2a1q3a2">Very good</span></label>
    <label><input class="q2a1q3a3" type="radio" name="q2a1q3" value="q2a1q3a3"><span class="q2a1q3a3">Good </span></label>
    <label><input class="q2a1q3a4" type="radio" name="q2a1q3" value="q2a1q3a4"><span class="q2a1q3a4">Fair </span></label>
    <label><input class="q2a1q3a5" type="radio" name="q2a1q3" value="q2a1q3a5"><span class="q2a1q3a5">Poor </span></label>
    </div>

    <div class=" y q2a1q4">
    <h2>How often is stress a problem for you in handling such things as your health, your finances, your family or social relationships, or your work?</h2>
    <label><input class="q2a1q4a1" type="radio" name="q2a1q4" value="q2a1q4a1"><span class="q2a1q4a1">Rarely</span></label>
    <label><input class="q2a1q4a2" type="radio" name="q2a1q4" value="q2a1q4a2"><span class="q2a1q4a2">Sometimes</span></label>
    <label><input class="q2a1q4a3" type="radio" name="q2a1q4" value="q2a1q4a3"><span class="q2a1q4a3"> Often</span></label>
    <label><input class="q2a1q4a4" type="radio" name="q2a1q4" value="q2a1q4a4"><span class="q2a1q4a4"> Always a bit</span></label>
    </div>

    <div class=" y q2a1q5">
    <h2> How often do you get the social and emotional support you need?</h2>
    <label><input class="q2a1q5a1" type="radio" name="q2a1q5" value="q2a1q5a1"><span class="q2a1q5a1">Always</span></label>
    <label><input class="q2a1q5a2" type="radio" name="q2a1q5" value="q2a1q5a2"><span class="q2a1q5a2">Usually</span></label>
    <label><input class="q2a1q5a3" type="radio" name="q2a1q5" value="q2a1q5a3"><span class="q2a1q5a3"> Sometimes</span></label>
    <label><input class="q2a1q5a4" type="radio" name="q2a1q5" value="q2a1q5a4"><span class="q2a1q5a4">Fair </span></label>
    <label><input class="q2a1q5a5" type="radio" name="q2a1q5" value="q2a1q5a5"><span class="q2a1q5a5">Poor </span></label>
    </div>

    <div class=" y q2a1q6">
    <h2> How many hours of sleep do you get each night?</h2>
    <label><input class="q2a1q6a1" type="radio" name="q2a1q6" value="q2a1q6a1"><span class="q2a1q6a1">7 or more</span></label>
    <label><input class="q2a1q6a2" type="radio" name="q2a1q6" value="q2a1q6a2"><span class="q2a1q6a2">4 - 6</span></label>
    <label><input class="q2a1q6a3" type="radio" name="q2a1q6" value="q2a1q6a3"><span class="q2a1q6a3"> 0 - 3</span></label>
    </div>

    <div class=" y q2a1q7">
    <h2>In the past 7 days, how often have you felt sleepy during the daytime? </h2>
    <label><input class="q2a1q7a1" type="radio" name="q2a1q7" value="q2a1q7a1"><span class="q2a1q7a1">Never</span></label>
    <label><input class="q2a1q7a2" type="radio" name="q2a1q7" value="q2a1q7a2"><span class="q2a1q7a2">Rarely</span></label>
    <label><input class="q2a1q7a3" type="radio" name="q2a1q7" value="q2a1q7a3"><span class="q2a1q7a3"> Sometimes</span></label>
    <label><input class="q2a1q7a4" type="radio" name="q2a1q7" value="q2a1q7a4"><span class="q2a1q7a4"> Usually</span></label>
    <label><input class="q2a1q7a5" type="radio" name="q2a1q7" value="q2a1q7a5"><span class="q2a1q7a5"> Always</span></label>
    </div>

    <div class=" y q2a1q8">
    <h2> Do you snore or has anyone told you that you snore?</h2>
    <label><input class="q2a1q8a1" type="radio" name="q2a1q8" value="q2a1q8a1"><span class="q2a1q8a1">Yes</span></label>
    <label><input class="q2a1q8a2" type="radio" name="q2a1q8" value="q2a1q8a2"><span class="q2a1q8a2">No</span></label>
    </div>

    <div class=" y q2a1q9">
    <h2>Do you always fasten your seatbelt when you are in a car? </h2>
    <label><input class="q2a1q9a1" type="radio" name="q2a1q9" value="q2a1q9a1"><span class="q2a1q9a1">Yes</span></label>
    <label><input class="q2a1q9a2" type="radio" name="q2a1q9" value="q2a1q9a2"><span class="q2a1q9a2">No</span></label>
    </div>

    <div class=" y q2a1q10">
    <h2>Do you use tobacco? </h2>
    <label><input class="q2a1q10a1" type="radio" name="q2a1q10" value="q2a1q10a1"><span class="q2a1q10a1">Yes</span></label>
    <label><input class="q2a1q10a2" type="radio" name="q2a1q10" value="q2a1q10a2"><span class="q2a1q10a2">No</span></label>
    </div>

    <div class=" y q2a1q11">
    <h2>Do you use alcohol? </h2>
    <label><input class="q2a1q11a1" type="radio" name="q2a1q11" value="q2a1q11a1"><span class="q2a1q11a1">Yes</span></label>
    <label><input class="q2a1q11a2" type="radio" name="q2a1q11" value="q2a1q11a2"><span class="q2a1q11a2">No</span></label>
    </div>

    <div class=" y q2a1q12">
    <h2>Over the past 2 weeks, how often have you been bothered by Little interest or pleasure in doing things?  </h2>
    <label><input class="q2a1q12a1" type="radio" name="q2a1q12" value="q2a1q12a1"><span class="q2a1q12a1">Not at all</span></label>
    <label><input class="q2a1q12a2" type="radio" name="q2a1q12" value="q2a1q12a2"><span class="q2a1q12a2">Several Days</span></label>
    <label><input class="q2a1q12a3" type="radio" name="q2a1q12" value="q2a1q12a3"><span class="q2a1q12a3">More than half the days </span></label>
    <label><input class="q2a1q12a4" type="radio" name="q2a1q12" value="q2a1q12a4"><span class="q2a1q12a4">Nearly every day</span></label>
    </div>   

    <div class=" y q2a1q13">
    <h2>Over the past 2 weeks, how often have you been bothered by Feeling down, depressed, or hopeless? </h2>
    <label><input class="q2a1q13a1" type="radio" name="q2a1q13" value="q2a1q13a1"><span class="q2a1q13a1">Not at all</span></label>
    <label><input class="q2a1q13a2" type="radio" name="q2a1q13" value="q2a1q13a2"><span class="q2a1q13a2">Several Days</span></label>
    <label><input class="q2a1q13a3" type="radio" name="q2a1q13" value="q2a1q13a3"><span class="q2a1q13a3">More than half the days </span></label>
    <label><input class="q2a1q13a4" type="radio" name="q2a1q13" value="q2a1q13a4"><span class="q2a1q13a4">Nearly every day</span></label>
    </div>

    <div class=" y q2a1q14">
    <h2>Over the past 2 weeks, how often have you been bothered by Trouble falling or staying asleep, or sleeping too much?  </h2>
    <label><input class="q2a1q14a1" type="radio" name="q2a1q14" value="q2a1q14a1"><span class="q2a1q14a1">Not at all</span></label>
    <label><input class="q2a1q14a2" type="radio" name="q2a1q14" value="q2a1q14a2"><span class="q2a1q14a2">Several Days</span></label>
    <label><input class="q2a1q14a3" type="radio" name="q2a1q14" value="q2a1q14a3"><span class="q2a1q14a3">More than half the days </span></label>
    <label><input class="q2a1q14a4" type="radio" name="q2a1q14" value="q2a1q14a4"><span class="q2a1q14a4">Nearly every day</span></label>
    </div>

    <div class=" y q2a1q15">
    <h2> Over the past 2 weeks, how often have you been bothered by Feeling tired or having little energy?    </h2>
    <label><input class="q2a1q15a1" type="radio" name="q2a1q15" value="q2a1q15a1"><span class="q2a1q15a1">Not at all</span></label>
    <label><input class="q2a1q15a2" type="radio" name="q2a1q15" value="q2a1q15a2"><span class="q2a1q15a2">Several Days</span></label>
    <label><input class="q2a1q15a3" type="radio" name="q2a1q15" value="q2a1q15a3"><span class="q2a1q15a3">More than half the days </span></label>
    <label><input class="q2a1q15a4" type="radio" name="q2a1q15" value="q2a1q15a4"><span class="q2a1q15a4">Nearly every day</span></label>
    </div>

    <div class=" y q2a1q16">
    <h2>Over the past 2 weeks, how often have you been bothered by Poor appetite or overeating?      </h2>
    <label><input class="q2a1q16a1" type="radio" name="q2a1q16" value="q2a1q16a1"><span class="q2a1q16a1">Not at all</span></label>
    <label><input class="q2a1q16a2" type="radio" name="q2a1q16" value="q2a1q16a2"><span class="q2a1q16a2">Several Days</span></label>
    <label><input class="q2a1q16a3" type="radio" name="q2a1q16" value="q2a1q16a3"><span class="q2a1q16a3">More than half the days </span></label>
    <label><input class="q2a1q16a4" type="radio" name="q2a1q16" value="q2a1q16a4"><span class="q2a1q16a4">Nearly every day</span></label>
    </div>

    <div class=" y q2a1q17">
    <h2>Over the past 2 weeks, how often have you been bothered by Feeling bad about yourself — or that you are a failure or have let yourself or your family down? </h2>
    <label><input class="q2a1q17a1" type="radio" name="q2a1q17" value="q2a1q17a1"><span class="q2a1q17a1">Not at all</span></label>
    <label><input class="q2a1q17a2" type="radio" name="q2a1q17" value="q2a1q17a2"><span class="q2a1q17a2">Several Days</span></label>
    <label><input class="q2a1q17a3" type="radio" name="q2a1q17" value="q2a1q17a3"><span class="q2a1q17a3">More than half the days </span></label>
    <label><input class="q2a1q17a4" type="radio" name="q2a1q17" value="q2a1q17a4"><span class="q2a1q17a4">Nearly every day</span></label>
    </div>

    <div class=" y q2a1q18">
    <h2>Over the past 2 weeks, how often have you been bothered by Trouble concentrating on things, such as reading the newspaper or watching television? </h2>
    <label><input class="q2a1q18a1" type="radio" name="q2a1q18" value="q2a1q18a1"><span class="q2a1q18a1">Not at all</span></label>
    <label><input class="q2a1q18a2" type="radio" name="q2a1q18" value="q2a1q18a2"><span class="q2a1q18a2">Several Days</span></label>
    <label><input class="q2a1q18a3" type="radio" name="q2a1q18" value="q2a1q18a3"><span class="q2a1q18a3">More than half the days </span></label>
    <label><input class="q2a1q18a4" type="radio" name="q2a1q18" value="q2a1q18a4"><span class="q2a1q18a4">Nearly every day</span></label>
    </div>

    <div class=" y q2a1q19">
    <h2>Over the past 2 weeks, how often have you been bothered by Moving or speaking so slowly that other people could have noticed? Or so fidgety or restless that you have been moving a lot more than usual? </h2>
    <label><input class="q2a1q19a1" type="radio" name="q2a1q19" value="q2a1q19a1"><span class="q2a1q19a1">Not at all</span></label>
    <label><input class="q2a1q19a2" type="radio" name="q2a1q19" value="q2a1q19a2"><span class="q2a1q19a2">Several Days</span></label>
    <label><input class="q2a1q19a3" type="radio" name="q2a1q19" value="q2a1q19a3"><span class="q2a1q19a3">More than half the days </span></label>
    <label><input class="q2a1q19a4" type="radio" name="q2a1q19" value="q2a1q19a4"><span class="q2a1q19a4">Nearly every day</span></label>
    </div>

    <div class=" y q2a1q20">
    <h2>Over the past 2 weeks, how often have you been bothered by Thoughts that you would be better off dead, or thoughts of hurting yourself in some way? </h2>
    <label><input class="q2a1q20a1" type="radio" name="q2a1q20" value="q2a1q20a1"><span class="q2a1q20a1">Not at all</span></label>
    <label><input class="q2a1q20a2" type="radio" name="q2a1q20" value="q2a1q20a2"><span class="q2a1q20a2">Several Days</span></label>
    <label><input class="q2a1q20a3" type="radio" name="q2a1q20" value="q2a1q20a3"><span class="q2a1q20a3">More than half the days </span></label>
    <label><input class="q2a1q20a4" type="radio" name="q2a1q20" value="q2a1q20a4"><span class="q2a1q20a4">Nearly every day</span></label>
    </div>

    <div class=" y q2a1q21">
    <h2>Do you have trouble hearling the television or radio when others do not? </h2>
    <label><input class="q2a1q21a1" type="radio" name="q2a1q21" value="q2a1q21a1"><span class="q2a1q21a1">Yes</span></label>
    <label><input class="q2a1q21a2" type="radio" name="q2a1q21" value="q2a1q21a2"><span class="q2a1q21a2">No</span></label>
    </div>

    <div class=" y q2a1q22">
    <h2>Do you have to strain or struggle to hear/understand conversation? </h2>
    <label><input class="q2a1q22a1" type="radio" name="q2a1q22" value="q2a1q22a1"><span class="q2a1q22a1">Yes</span></label>
    <label><input class="q2a1q22a2" type="radio" name="q2a1q22" value="q2a1q22a2"><span class="q2a1q22a2">No</span></label>
    </div>

    <div class=" y q2a1q23">
    <h2>Do you need help with everyday activities such as eating, getting dressed, gromming, bathing, walking or using the toilet? </h2>
    <label><input class="q2a1q23a1" type="radio" name="q2a1q23" value="q2a1q23a1"><span class="q2a1q23a1">Yes</span></label>
    <label><input class="q2a1q23a2" type="radio" name="q2a1q23" value="q2a1q23a2"><span class="q2a1q23a2">No</span></label>
    </div>

    <div class=" y q2a1q24">
    <h2>Do you need help preparing meals, transportation, shopping, taking your medicine, bannking, managing your finances, or other daily activities? </h2>
    <label><input class="q2a1q24a1" type="radio" name="q2a1q24" value="q2a1q24a1"><span class="q2a1q24a1">Yes</span></label>
    <label><input class="q2a1q24a2" type="radio" name="q2a1q24" value="q2a1q24a2"><span class="q2a1q24a2">No</span></label>
    </div>

    <div class=" y q2a1q25">
    <h2> Do you live alone?</h2>
    <label><input class="q2a1q25a1" type="radio" name="q2a1q25" value="q2a1q25a1"><span class="q2a1q25a1">Yes</span></label>
    <label><input class="q2a1q25a2" type="radio" name="q2a1q25" value="q2a1q25a2"><span class="q2a1q25a2">No</span></label>
    </div>

    <div class=" y q2a1q26">
    <h2>Do you feel you have trouble with memory? </h2>
    <label><input class="q2a1q26a1" type="radio" name="q2a1q26" value="q2a1q26a1"><span class="q2a1q26a1">Yes</span></label>
    <label><input class="q2a1q26a2" type="radio" name="q2a1q26" value="q2a1q26a2"><span class="q2a1q26a2">No</span></label>
    </div>

    <div class=" y q2a1q27">
    <h2>Do you ever have leakage of urine? </h2>
    <label><input class="q2a1q27a1" type="radio" name="q2a1q27" value="q2a1q27a1"><span class="q2a1q27a1">Yes</span></label>
    <label><input class="q2a1q27a2" type="radio" name="q2a1q27" value="q2a1q27a2"><span class="q2a1q27a2">No</span></label>
    </div>

    <div class=" y q2a1q28">
    <h2> Does your home have throw rugs, poor lighting, or a slippery bathtub/shower?</h2>
    <label><input class="q2a1q28a1" type="radio" name="q2a1q28" value="q2a1q28a1"><span class="q2a1q28a1">Yes</span></label>
    <label><input class="q2a1q28a2" type="radio" name="q2a1q28" value="q2a1q28a2"><span class="q2a1q28a2">No</span></label>
    </div>

    <div class=" y q2a1q29">
    <h2> Does your home have grab bars in the bathroom, handrails on the steps or stairs?</h2>
    <label><input class="q2a1q29a1" type="radio" name="q2a1q29" value="q2a1q29a1"><span class="q2a1q29a1">Yes</span></label>
    <label><input class="q2a1q29a2" type="radio" name="q2a1q29" value="q2a1q29a2"><span class="q2a1q29a2">No</span></label>
    </div>

    <div class=" y q2a1q30">
    <h2> Does your home have functioning smoke alarms?</h2>
    <label><input class="q2a1q30a1" type="radio" name="q2a1q30" value="q2a1q30a1"><span class="q2a1q30a1">Yes</span></label>
    <label><input class="q2a1q30a2" type="radio" name="q2a1q30" value="q2a1q30a2"><span class="q2a1q30a2">No</span></label>
    </div>

    <div class=" y q2a1q31">
    <h2> Do you eat 3-5 servings of fruits/vegetables every day?</h2>
    <label><input class="q2a1q31a1" type="radio" name="q2a1q31" value="q2a1q31a1"><span class="q2a1q31a1">Yes</span></label>
    <label><input class="q2a1q31a2" type="radio" name="q2a1q31" value="q2a1q31a2"><span class="q2a1q31a2">No</span></label>
    </div>

    <div class=" y q2a1q32">
    <h2>Do you eat 2-3 servings of high-fiber or whole grain foods daily? (whole wheat bread, cooked cereal, brown rice or whole wheat pasta, whole-grain or high fiber cereal) </h2>
    <label><input class="q2a1q32a1" type="radio" name="q2a1q32" value="q2a1q32a1"><span class="q2a1q32a1">Yes</span></label>
    <label><input class="q2a1q32a2" type="radio" name="q2a1q32" value="q2a1q32a2"><span class="q2a1q32a2">No</span></label>
    </div>

    <div class=" y q2a1q33">
    <h2>Do you eat more than one serving of fried or high-fat foods daily? (fried meat or fish, french fries, potato chips, foods made with whole milk, cream cheese, or mayonnaise) </h2>
    <label><input class="q2a1q33a1" type="radio" name="q2a1q33" value="q2a1q33a1"><span class="q2a1q33a1">Yes</span></label>
    <label><input class="q2a1q33a2" type="radio" name="q2a1q33" value="q2a1q33a2"><span class="q2a1q33a2">No</span></label>
    </div>

    <div class=" y q2a1q34">
    <h2>Do you get light (stretching or slow walking) or moderate (brisk walking) exercise at least 3 times per week? </h2>
    <label><input class="q2a1q34a1" type="radio" name="q2a1q34" value="q2a1q34a1"><span class="q2a1q34a1">Yes</span></label>
    <label><input class="q2a1q34a2" type="radio" name="q2a1q34" value="q2a1q34a2"><span class="q2a1q34a2">No</span></label>
    </div>
       
    <div class="y ptsubdiv">
       <input type = "submit" value ="Submit">
    </div>
</form>


</body>
</html>
 
<script
src="https://code.jquery.com/jquery-3.2.1.min.js"
integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
crossorigin="anonymous"></script>
<script src='pt.js'></script> 

<?php




    date_default_timezone_set("America/New_York");
    $time= date('m_d_y_h_i_s');
    echo $time."<br>";
    
    $user = 'root';
    $password = 'root';
    $dbname = 'mydb';
    $host = 'localhost';
    $port = 3306;
    $conn = new mysqli($host, $user, $password, $dbname);
    if ($conn ->connect_errno) {
        echo "Failed to connect to MySQL: " . $conn ->connect_error;
        exit();
    };
    $sql= "SELECT id FROM question;";
    $result = $conn->query($sql);
    if($result->num_rows>0){
    while($row = $result->fetch_assoc()){
        for ($i=1;$i<=8;$i++){
            for($j=1;$j<=3;$j++){
                $id = $row["id"];
                $ans_id = $id."a".$i;
                $que_id = $ans_id."q".$j;
                echo "<script>$(document).ready(()=>{ 
                        $(\".".$ans_id."\").on('click',()=>{
                            $(\".".$que_id."\").css(\"display\" ,\"flex\"); 
                            $(\".".$id."\").slideUp();
                        });});</script>";
                    };                    
                };
            };
    } else {};
    $conn -> close();




    $user = 'root';
    $password = 'root';
    $dbname = 'mydb';
    $host = 'localhost';
    $port = 3306;
    $conn = new mysqli($host, $user, $password, $dbname);
    if ($conn -> connect_errno) {
        echo "Failed to connect to MySQL: " . $conn -> connect_error;
        exit();
    };
    $sql = "SELECT answer_id FROM patient_questions_answers WHERE patient_id='03_03_20_03_41_30'";
    $result = $conn->query($sql);
    if($result->num_rows>0){
    while($row = $result->fetch_assoc()){
        for($i=1;$i<=50;$i++){
        echo "
        <script>$(document).ready(()=> { 
            $(\".".$row['answer_id']."q".$i."\").css(\"display\" ,\"flex\"); 
            });</script>
            ";
            
    }}} else {};





/*

$query = 'INSERT INTO patient_questions_answers (patient_id,question_id,answer_id) VALUES ';
      $query_parts = array();
      for($x=0; $x<=3; $x++){
          $query_parts[] = "('t','t','t')";
      }
      echo $query .= implode(',', $query_parts);








if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  /*
$time = $_POST['q1'];
$q = 
array('q1',
'q2', 
'q3a1q1',
'q3a1q2',
'q3a1q3',
'q3a1q4',
'q3a1q5',
'q3a1q6',
'q3a1q7',
'q3a1q8',
'q3a1q9',
'q3a1q10',
'q3a1q11',
'q3a1q12',
'q3a1q13',
'q3a1q14', 
'q2a1q1a1q1',
'q2a1q1a1q2',
'q2a1q1a1q3',
'q2a1q1a1q4',
'q2a1q1a1q5',
'q2a1q1a1q6',
'q2a1q1a1q7',
'q2a1q1a1q8',
'q2a1q1a1q9',
'q2a1q1a1q10',
'q2a1q1a1q11',
'q2a1q1a1q12',
'q2a1q1a1q13',
'q2a1q1a1q14',
'q2a1q1a1q15',
'q2a1q1a1q16',
'q2a1q1a1q17',
'q2a1q1a1q18',
'q2a1q1a1q19',
'q2a1q1a1q20',
'q2a1q1a1q21',
'q2a1q1a1q22',
'q2a1q1a1q1a1q1',
'q2a1q1a1q1a1q2',
'q2a1q1a1q1a1q3',
'q2a1q1a1q2a1q1',
'q2a1q1a1q2a1q2',
'q2a1q1a1q2a1q3',
'q2a1q1a1q3a1q1',
'q2a1q1a1q3a1q2',
'q2a1q1a1q3a1q3',
'q2a1q1a1q4a1q1',
'q2a1q1a1q4a1q2',
'q2a1q1a1q4a1q3',
'q2a1q1a1q5a1q1',
'q2a1q1a1q5a1q2',
'q2a1q1a1q5a1q3',
'q2a1q1a1q6a1q1',
'q2a1q1a1q6a1q2',
'q2a1q1a1q6a1q3',
'q2a1q1a1q7a1q1',
'q2a1q1a1q7a1q2',
'q2a1q1a1q7a1q3',
'q2a1q1a1q8a1q1',
'q2a1q1a1q8a1q2',
'q2a1q1a1q8a1q3',
'q2a1q1a1q9a1q1',
'q2a1q1a1q9a1q2',
'q2a1q1a1q9a1q3',
'q2a1q1a1q10a1q1',
'q2a1q1a1q10a1q2',
'q2a1q1a1q10a1q3',
'q2a1q1a1q11a1q1',
'q2a1q1a1q11a1q2',
'q2a1q1a1q11a1q3',
'q2a1q1a1q12a1q1',
'q2a1q1a1q12a1q2',
'q2a1q1a1q12a1q3',
'q2a1q1a1q13a1q1',
'q2a1q1a1q13a1q2',
'q2a1q1a1q13a1q3',
'q2a1q1a1q14a1q1',
'q2a1q1a1q14a1q2',
'q2a1q1a1q14a1q3',
'q2a1q1a1q15a1q1',
'q2a1q1a1q15a1q2',
'q2a1q1a1q15a1q3',
'q2a1q1a1q16a1q1',
'q2a1q1a1q16a1q2',
'q2a1q1a1q16a1q3',
'q2a1q1a1q17a1q1',
'q2a1q1a1q17a1q2',
'q2a1q1a1q17a1q3',
'q2a1q1a1q18a1q1',
'q2a1q1a1q18a1q2',
'q2a1q1a1q18a1q3',
'q2a1q1a1q19a1q1',
'q2a1q1a1q19a1q2',
'q2a1q1a1q19a1q3',
'q2a1q1a1q20a1q1',
'q2a1q1a1q20a1q2',
'q2a1q1a1q20a1q3',
'q2a1q1a1q21a1q1',
'q2a1q1a1q21a1q2',
'q2a1q1a1q21a1q3',
'q2a1q1a1q22a1q1',
'q2a1q1a1q22a1q2',
'q2a1q1a1q22a1q3'
);

*/






?>