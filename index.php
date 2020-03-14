<?php
    include 'dbh.php';
?>

<!DOCTYPE html>
<html>
<head>
    <link href = "index.css" type = "text/css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
</head>
 
<body>

    <img src="image/umm_health_care_hor.png" id="umassimg">
    <img src="image/pen.png" class="pen">

<form class="form" method="POST" action="index2.php">
<!-- MA precharting -->
    <div class="y y1"> <!--time of visit-->
        <h2>TIME OF VISIT</h2>
        <label><input class="y1a" type="radio" name="app_time" value="8:15"><span>8:15</span></label>
        <label><input class="y1a" type="radio" name="app_time" value="8:30"><span class="y1a">8:30</span></label>
        <label><input class="y1a" type="radio" name="app_time" value="8:45"><span class="y1a">8:45</span></label>
        <label><input class="y1a" type="radio" name="app_time" value="9:00"><span class="y1a">9:00</span></label>
        <label><input class="y1a" type="radio" name="app_time" value="9:15"><span class="y1a">9:15</span></label>
        <label><input class="y1a" type="radio" name="app_time" value="9:30"><span class="y1a">9:30</span></label>
        <label><input class="y1a" type="radio" name="app_time" value="9:45"><span class="y1a">9:45</span></label>
        <label><input class="y1a" type="radio" name="app_time" value="10:00"><span class="y1a">10:00</span></label>
        <label><input class="y1a" type="radio" name="app_time" value="10:15"><span class="y1a">10:15</span></label>
        <label><input class="y1a" type="radio" name="app_time" value="10:30"><span class="y1a">10:30</span></label>
        <label><input class="y1a" type="radio" name="app_time" value="10:45"><span class="y1a">10:45</span></label>
        <label><input class="y1a" type="radio" name="app_time" value="11:00"><span class="y1a">11:00</span></label>
        <label><input class="y1a" type="radio" name="app_time" value="11:15"><span class="y1a">11:15</span></label>
        <label><input class="y1a" type="radio" name="app_time" value="11:30"><span class="y1a">11:30</span></label>
        <label><input class="y1a" type="radio" name="app_time" value="11:45"><span class="y1a">11:45</span></label>
        <label><input class="y1a" type="radio" name="app_time" value="12:00"><span class="y1a">12:00</span></label>
        <label><input class="y1a" type="radio" name="app_time" value="12:15"><span class="y1a">12:15</span></label>
        <label><input class="y1a" type="radio" name="app_time" value="12:30"><span class="y1a">12:30</span></label>
        <label><input class="y1a" type="radio" name="app_time" value="12:15"><span class="y1a">12:45</span></label>
        <label><input class="y1a" type="radio" name="app_time" value="14:00"><span class="y1a">14:00</span></label>
        <label><input class="y1a" type="radio" name="app_time" value="14:15"><span class="y1a">14:15</span></label>
        <label><input class="y1a" type="radio" name="app_time" value="14:30"><span class="y1a">14:30</span></label>
        <label><input class="y1a" type="radio" name="app_time" value="14:45"><span class="y1a">14:45</span></label>
        <label><input class="y1a" type="radio" name="app_time" value="15:00"><span class="y1a">15:00</span></label>
        <label><input class="y1a" type="radio" name="app_time" value="15:15"><span class="y1a">15:15</span></label>
        <label><input class="y1a" type="radio" name="app_time" value="15:30"><span class="y1a">15:30</span></label>
        <label><input class="y1a" type="radio" name="app_time" value="15:45"><span class="y1a">15:45</span></label>
        <label><input class="y1a" type="radio" name="app_time" value="16:00"><span class="y1a">16:00</span></label>
        <label><input class="y1a" type="radio" name="app_time" value="16:15"><span class="y1a">16:15</span></label>
        <label><input class="y1a" type="radio" name="app_time" value="16:30"><span class="y1a">16:30</span></label>
    </div>

    <div class="y y1a1"><!--appointment type-->
        <h2>APPOINTMENT TYPE</h2>
        <label><input class="y1a1a" type="radio" name="app_type" value="Medicare Wellness"><span class="y1a1a">Medicare Wellness</span></label>
        <label><input class="y1a1b" type="radio" name="app_type" value="Annual physical"><span class="y1a1b">Annual Physical</span></label>
        <label><input class="y1a1c" type="radio" name="app_type" value="Regular follow up"><span class="y1a1c">Regular F/U</span></label>
        <label><input class="y1a1d" type="radio" name="app_type" value="Hospital / ER / Urgent care follow up"><span class="y1a1d">Hospital/ER F/U</span></label>
        <label><input class="y1a1e" type="radio" name="app_type" value="Sick Visit"><span class="y1a1e">Sick Visit</span></label>
        <label><input class="y1a1f" type="radio" name="app_type" value="Meet & Greet"><span class="y1a1f">Meet & Greet</span></label>
        <label><input class="y1a1g" type="radio" name="app_type" value="Others"><span class="y1a1g">Others</span></label>
    </div>

    <div class="y y1a1a1 y1a1b1 y1a1c1 y1a1f1"> <!--unsatisfied hM-->
        <h2>UNSATISFIED HEALTH MAINTENANCE</h2>
        <label><input class="y1a1a1a" type="checkbox" name="Health_maintenance" value="Colonoscopy"><span class="hm y1a1a1a">Colorectal cancer </span></label>
        <label><input class="y1a1a1b" type="checkbox" name="Health_maintenance" value="Mammography"><span class="hm y1a1a1b">Breast cancer </span></label>
        <label><input class="y1a1a1c" type="checkbox" name="Health_maintenance" value="Pap Smear"><span class="hm y1a1a1c">Cervical cancer </span></label>
        <label><input class="y1a1a1d" type="checkbox" name="Health_maintenance" value="HCV"><span class="hm y1a1a1d">HCV</span></label>
        <label><input class="y1a1a1e" type="checkbox" name="Health_maintenance" value="HTN - serum K/Cr "><span class="hm y1a1a1e">HTN - serum K/Cr </span></label>
        <label><input class="y1a1a1f" type="checkbox" name="Health_maintenance" value="DM - microalbumin"><span class="hm y1a1a1f">DM - microalbumin</span></label>
        <label><input class="y1a1a1g" type="checkbox" name="Health_maintenance" value="DM - foot"><span class="hm y1a1a1g">DM - foot</span></label>
        <label><input class="y1a1a1h" type="checkbox" name="Health_maintenance" value="DM - eye"><span class="hm y1a1a1h">DM - eye</span></label>
        <label><input class="y1a1a1i" type="checkbox" name="Health_maintenance" value="DM - A1c"><span class="hm y1a1a1i">DM - A1c</span></label>
        <label><input class="y1a1a1j" type="checkbox" name="Health_maintenance" value="Shingle"><span class="hm y1a1a1j">Shingle</span></label>
        <label><input class="y1a1a1k" type="checkbox" name="Health_maintenance" value="Flu"><span class="hm y1a1a1k">Flu</span></label>
        <label><input class="y1a1a1l" type="checkbox" name="Health_maintenance" value="Td / Tdap"><span class="hm y1a1a1l">Td / Tdap</span></label>
        <label><input class="y1a1a1m" type="checkbox" name="Health_maintenance" value="Pneumonia Vaccination"><span class="hm y1a1a1m">Pneumonia Vaccination</span></label>
        <label><input class="y1a1a1o" type="checkbox" name="Health_maintenance" value="Pneumonia Vaccination"><span class="hm y1a1a1o">-</span></label><br>
        <label><input class="y1a1a1n" type="checkbox" name="Health_maintenance" value="Pneumonia Vaccination"><span id="y1a1a1n" class="y1a1a1n">Next</span></label>
    </div>


    <div class="y y1a1a41 y1a1b2 y1a1c2 y1a1f2"><!-- specialisty-->
        <h2>SPECIALIT(S) INVOLVED IN CARE</h2>
        <label><input class="y1a1a41a" type="checkbox" name="" value=""><span class="y1a1a41a">Cardiology</span></label>
        <label><input class="y1a1a41b" type="checkbox" name="" value=""><span class="y1a1a41b">Gastroenterology</span></label>
        <label><input class="y1a1a41c" type="checkbox" name="" value=""><span class="y1a1a41c">Nephrology</span></label>
        <label><input class="y1a1a41d" type="checkbox" name="" value=""><span class="y1a1a41d">Pulmonology</span></label>
        <label><input class="y1a1a41e" type="checkbox" name="" value=""><span class="y1a1a41e">Hematology/Oncology</span></label>
        <label><input class="y1a1a41f" type="checkbox" name="" value=""><span class="y1a1a41f">Infectious Disease</span></label>
        <label><input class="y1a1a41g" type="checkbox" name="" value=""><span class="y1a1a41g">Rheumatology</span></label>
        <label><input class="y1a1a41h" type="checkbox" name="" value=""><span class="y1a1a41h">Endocrinology</span></label>
        <label><input class="y1a1a41i" type="checkbox" name="" value=""><span class="y1a1a41i">Orthopedics</span></label>
        <label><input class="y1a1a41j" type="checkbox" name="" value=""><span class="y1a1a41j">Pain clinic</span></label>
        <label><input class="y1a1a41k" type="checkbox" name="" value=""><span class="y1a1a41k">Urology</span></label>
        <label><input class="y1a1a41l" type="checkbox" name="" value=""><span class="y1a1a41l">OBGYN</span></label>
        <label><input class="y1a1a41m" type="checkbox" name="" value=""><span class="y1a1a41m">Neurology</span></label>
        <label><input class="y1a1a41n" type="checkbox" name="" value=""><span class="y1a1a41n">Neurosurgery</span></label>
        <label><input class="y1a1a41o" type="checkbox" name="" value=""><span class="y1a1a41o">Opthalmology</span></label>
        <label><input class="y1a1a41p" type="checkbox" name="" value=""><span class="y1a1a41p">Dermatology</span></label>
        <label><input class="y1a1a41q" type="checkbox" name="" value=""><span class="y1a1a41q">ENT</span></label>
        <label><input class="y1a1a41r" type="checkbox" name="" value=""><span class="y1a1a41r">Psychiatry</span></label>
        <label><input class="y1a1a41s" type="checkbox" name="" value=""><span class="y1a1a41s">Thoracic surgery</span></label>
        <label><input class="y1a1a41t" type="checkbox" name="" value=""><span class="y1a1a41t">General surgery</span></label>
        <label><input class="y1a1a41u" type="checkbox" name="" value=""><span class="y1a1a41u">Other Speciality</span></label><br>
        <label><input class="y1a1a41v" type="checkbox" name="" value=""><span class="y1a1a41v" id="y1a1a41v">Next</span></label>
    </div>
    
    <div class="y y1a1a41a1"><h2>Who's the Cardiologist?</h2><label><input class="y1a1a41a1a" type="radio" name="card" value="Mass Heart & Rhythm"><span class="y1a1a41a1a">Mass Heart & Rhythm</span></label><label><input class="y1a1a41a1b" type="radio" name="card" value="UMass Memorial Medical Center"><span class="y1a1a41a1b">UMass Memorial Medical Center</span></label><label><input class="y1a1a41a1c" type="radio" name="card" value="St. Vincent Medical Group"><span class="y1a1a41a1c">St. Vincent Medical Group</span></label><label><input class="y1a1a41a1d" type="radio" name="card" value="-"><span class="y1a1a41a1d">-</span></label><label><input class="y1a1a41a1e" type="radio" name="card" value="-"><span class="y1a1a41a1e">-</span></label><label><input class="y1a1a41a1f" type="radio" name="card" value="-"><span class="y1a1a41a1f">-</span></label><label><input class="y1a1a41a1g" type="radio" name="card" value="Other"><span class="y1a1a41a1g">Other</span></label></div><div class="y y1a1a41a2"><h2>When was the last appointment with the Cardiologist</h2><label><input class="y1a1a41a2a" type="radio" name="cardlastapp" value="Less than 1 month ago"><span class="y1a1a41a2a">Less than 1 month ago</span></label><label><input class="y1a1a41a2b" type="radio" name="cardlastapp" value="1-3 moths ago"><span class="y1a1a41a2b">1-3 moths ago</span></label><label><input class="y1a1a41a2c" type="radio" name="cardlastapp" value="4 months ~ 1 year ago"><span class="y1a1a41a2c">4 months ~ 1 year ago</span></label><label><input class="y1a1a41a2d" type="radio" name="cardlastapp" value="1-2 years ago"><span class="y1a1a41a2d">1-2 years ago</span></label><label><input class="y1a1a41a2e" type="radio" name="cardlastapp" value="over 2 years ago"><span class="y1a1a41a2e"> over 2 years ago</span></label><label><input class="y1a1a41a2f" type="radio" name="cardlastapp" value="No record"><span class="y1a1a41a2f"> No record</span></label></div><div class="y y1a1a41a3"><h2>When is follow up evalutation planned?</h2><label><input class="y1a1a41a3a" type="radio" name="cardnextapp" value="3 months follow up planned"><span class="y1a1a41a3a">3 months follow up planned</span></label><label><input class="y1a1a41a3b" type="radio" name="cardnextapp" value="6 months follow up planned"><span class="y1a1a41a3b">6 months follow up planned</span></label><label><input class="y1a1a41a3c" type="radio" name="cardnextapp" value="12 months follow up planned"><span class="y1a1a41a3c">12 months follow up planned</span></label><label><input class="y1a1a41a3d" type="radio" name="cardnextapp" value="No f/u plan"><span class="y1a1a41a3d">No f/u plan</span></label></div>
    <div class="y y1a1a41b1"><h2>Who's the Gastroenterologist?</h2><label><input class="y1a1a41b1a" type="radio" name="gi" value="North Worcester Gastroenterology"><span class="y1a1a41b1a">North Worcester Gastroenterology</span></label><label><input class="y1a1a41b1b" type="radio" name="gi" value="Dr. Pandaraboyina"><span class="y1a1a41b1b">Dr. Pandaraboyina</span></label><label><input class="y1a1a41b1c" type="radio" name="gi" value="Center for Digestive Wellness (Dr. Feinberg)"><span class="y1a1a41b1c">Center for Digestive Wellness (Dr. Feinberg)</span></label><label><input class="y1a1a41b1d" type="radio" name="gi" value="-"><span class="y1a1a41b1d">-</span></label><label><input class="y1a1a41b1e" type="radio" name="gi" value="-"><span class="y1a1a41b1e">-</span></label><label><input class="y1a1a41b1f" type="radio" name="gi" value="-"><span class="y1a1a41b1f">-</span></label><label><input class="y1a1a41b1g" type="radio" name="gi" value="Other"><span class="y1a1a41b1g">Other</span></label></div><div class="y y1a1a41b2"><h2>When was the last appointment with the Gastroenterologist</h2><label><input class="y1a1a41b2a" type="radio" name="gilastapp" value="Less than 1 month ago"><span class="y1a1a41b2a">Less than 1 month ago</span></label><label><input class="y1a1a41b2b" type="radio" name="gilastapp" value="1-3 moths ago"><span class="y1a1a41b2b">1-3 moths ago</span></label><label><input class="y1a1a41b2c" type="radio" name="gilastapp" value="4 months ~ 1 year ago"><span class="y1a1a41b2c">4 months ~ 1 year ago</span></label><label><input class="y1a1a41b2d" type="radio" name="gilastapp" value="1-2 years ago"><span class="y1a1a41b2d">1-2 years ago</span></label><label><input class="y1a1a41b2e" type="radio" name="gilastapp" value="over 2 years ago"><span class="y1a1a41b2e"> over 2 years ago</span></label><label><input class="y1a1a41b2f" type="radio" name="gilastapp" value="No record"><span class="y1a1a41b2f"> No record</span></label></div><div class="y y1a1a41b3"><h2>When is follow up evalutation planned?</h2><label><input class="y1a1a41b3a" type="radio" name="ginextapp" value="3 months follow up planned"><span class="y1a1a41b3a">3 months follow up planned</span></label><label><input class="y1a1a41b3b" type="radio" name="ginextapp" value="6 months follow up planned"><span class="y1a1a41b3b">6 months follow up planned</span></label><label><input class="y1a1a41b3c" type="radio" name="ginextapp" value="12 months follow up planned"><span class="y1a1a41b3c">12 months follow up planned</span></label><label><input class="y1a1a41b3d" type="radio" name="ginextapp" value="No f/u plan"><span class="y1a1a41b3d">No f/u plan</span></label></div>
    <div class="y y1a1a41c1"><h2>Who's the Nephrologist?</h2><label><input class="y1a1a41c1a" type="radio" name="nephro" value="North Worcester Gastroenterology"><span class="y1a1a41c1a">Dr. Michael Shih</span></label><label><input class="y1a1a41c1b" type="radio" name="nephro" value="Dr. Michael Shih"><span class="y1a1a41c1b">Dr. Michael Shih</span></label><label><input class="y1a1a41c1c" type="radio" name="nephro" value="Dr. Shipen Li"><span class="y1a1a41c1c">Dr. Shipen Li</span></label><label><input class="y1a1a41c1d" type="radio" name="nephro" value="-"><span class="y1a1a41c1d">-</span></label><label><input class="y1a1a41c1e" type="radio" name="nephro" value="-"><span class="y1a1a41c1e">-</span></label><label><input class="y1a1a41c1f" type="radio" name="nephro" value="-"><span class="y1a1a41c1f">-</span></label><label><input class="y1a1a41c1g" type="radio" name="nephro" value="Other"><span class="y1a1a41c1g">Other</span></label></div><div class="y y1a1a41c2"><h2>When was the last appointment with the Nephrologist</h2><label><input class="y1a1a41c2a" type="radio" name="nephrolastapp" value="Less than 1 month ago"><span class="y1a1a41c2a">Less than 1 month ago</span></label><label><input class="y1a1a41c2b" type="radio" name="nephrolastapp" value="1-3 moths ago"><span class="y1a1a41c2b">1-3 moths ago</span></label><label><input class="y1a1a41c2c" type="radio" name="nephrolastapp" value="4 months ~ 1 year ago"><span class="y1a1a41c2c">4 months ~ 1 year ago</span></label><label><input class="y1a1a41c2d" type="radio" name="nephrolastapp" value="1-2 years ago"><span class="y1a1a41c2d">1-2 years ago</span></label><label><input class="y1a1a41c2e" type="radio" name="nephrolastapp" value="over 2 years ago"><span class="y1a1a41c2e"> over 2 years ago</span></label><label><input class="y1a1a41c2f" type="radio" name="nephrolastapp" value="No record"><span class="y1a1a41c2f"> No record</span></label></div><div class="y y1a1a41c3"><h2>When is follow up evalutation planned?</h2><label><input class="y1a1a41c3a" type="radio" name="nephronextapp" value="3 months follow up planned"><span class="y1a1a41c3a">3 months follow up planned</span></label><label><input class="y1a1a41c3b" type="radio" name="nephronextapp" value="6 months follow up planned"><span class="y1a1a41c3b">6 months follow up planned</span></label><label><input class="y1a1a41c3c" type="radio" name="nephronextapp" value="12 months follow up planned"><span class="y1a1a41c3c">12 months follow up planned</span></label><label><input class="y1a1a41c3d" type="radio" name="nephronextapp" value="No f/u plan"><span class="y1a1a41c3d">No f/u plan</span></label></div>
    <div class="y y1a1a41d1"><h2>Who's the Pulmonologist?</h2><label><input class="y1a1a41d1a" type="radio" name="pulm" value="Dr. Ketsler"><span class="y1a1a41d1a">Dr. Ketsler</span></label><label><input class="y1a1a41d1b" type="radio" name="pulm" value="Mass Lung & Allergy"><span class="y1a1a41d1b">Mass Lung & Allergy</span></label><label><input class="y1a1a41d1c" type="radio" name="pulm" value="-"><span class="y1a1a41d1c">-</span></label><label><input class="y1a1a41d1d" type="radio" name="pulm" value="-"><span class="y1a1a41d1d">-</span></label><label><input class="y1a1a41d1e" type="radio" name="pulm" value="-"><span class="y1a1a41d1e">-</span></label><label><input class="y1a1a41d1f" type="radio" name="pulm" value="-"><span class="y1a1a41d1f">-</span></label><label><input class="y1a1a41d1g" type="radio" name="pulm" value="Other"><span class="y1a1a41d1g">Other</span></label></div><div class="y y1a1a41d2"><h2>When was the last appointment with the Pulmonologist</h2><label><input class="y1a1a41d2a" type="radio" name="pulmlastapp" value="Less than 1 month ago"><span class="y1a1a41d2a">Less than 1 month ago</span></label><label><input class="y1a1a41d2b" type="radio" name="pulmlastapp" value="1-3 moths ago"><span class="y1a1a41d2b">1-3 moths ago</span></label><label><input class="y1a1a41d2c" type="radio" name="pulmlastapp" value="4 months ~ 1 year ago"><span class="y1a1a41d2c">4 months ~ 1 year ago</span></label><label><input class="y1a1a41d2d" type="radio" name="pulmlastapp" value="1-2 years ago"><span class="y1a1a41d2d">1-2 years ago</span></label><label><input class="y1a1a41d2e" type="radio" name="pulmlastapp" value="over 2 years ago"><span class="y1a1a41d2e"> over 2 years ago</span></label><label><input class="y1a1a41d2f" type="radio" name="pulmlastapp" value="No record"><span class="y1a1a41d2f"> No record</span></label></div><div class="y y1a1a41d3"><h2>When is follow up evalutation planned?</h2><label><input class="y1a1a41d3a" type="radio" name="pulmnextapp" value="3 months follow up planned"><span class="y1a1a41d3a">3 months follow up planned</span></label><label><input class="y1a1a41d3b" type="radio" name="pulmnextapp" value="6 months follow up planned"><span class="y1a1a41d3b">6 months follow up planned</span></label><label><input class="y1a1a41d3c" type="radio" name="pulmnextapp" value="12 months follow up planned"><span class="y1a1a41d3c">12 months follow up planned</span></label><label><input class="y1a1a41d3d" type="radio" name="pulmnextapp" value="No f/u plan"><span class="y1a1a41d3d">No f/u plan</span></label></div>
    <div class="y y1a1a41e1"><h2>Who's the Hematology/Oncologist?</h2><label><input class="y1a1a41e1a" type="radio" name="ho" value="UMass Memorial Medical Center"><span class="y1a1a41e1a">UMass Memorial Medical Center</span></label><label><input class="y1a1a41e1b" type="radio" name="ho" value="St. Vincent Medical Group"><span class="y1a1a41e1b">St. Vincent Medical Group</span></label><label><input class="y1a1a41e1c" type="radio" name="ho" value="Heywood"><span class="y1a1a41e1c">Heywood</span></label><label><input class="y1a1a41e1d" type="radio" name="ho" value="-"><span class="y1a1a41e1d">-</span></label><label><input class="y1a1a41e1e" type="radio" name="ho" value="-"><span class="y1a1a41e1e">-</span></label><label><input class="y1a1a41e1f" type="radio" name="ho" value="-"><span class="y1a1a41e1f">-</span></label><label><input class="y1a1a41e1g" type="radio" name="ho" value="Other"><span class="y1a1a41e1g">Other</span></label></div><div class="y y1a1a41e2"><h2>When was the last appointment with the Hematology/Oncologist</h2><label><input class="y1a1a41e2a" type="radio" name="holastapp" value="Less than 1 month ago"><span class="y1a1a41e2a">Less than 1 month ago</span></label><label><input class="y1a1a41e2b" type="radio" name="holastapp" value="1-3 moths ago"><span class="y1a1a41e2b">1-3 moths ago</span></label><label><input class="y1a1a41e2c" type="radio" name="holastapp" value="4 months ~ 1 year ago"><span class="y1a1a41e2c">4 months ~ 1 year ago</span></label><label><input class="y1a1a41e2d" type="radio" name="holastapp" value="1-2 years ago"><span class="y1a1a41e2d">1-2 years ago</span></label><label><input class="y1a1a41e2e" type="radio" name="holastapp" value="over 2 years ago"><span class="y1a1a41e2e"> over 2 years ago</span></label><label><input class="y1a1a41e2f" type="radio" name="holastapp" value="No record"><span class="y1a1a41e2f"> No record</span></label></div><div class="y y1a1a41e3"><h2>When is follow up evalutation planned?</h2><label><input class="y1a1a41e3a" type="radio" name="honextapp" value="3 months follow up planned"><span class="y1a1a41e3a">3 months follow up planned</span></label><label><input class="y1a1a41e3b" type="radio" name="honextapp" value="6 months follow up planned"><span class="y1a1a41e3b">6 months follow up planned</span></label><label><input class="y1a1a41e3c" type="radio" name="honextapp" value="12 months follow up planned"><span class="y1a1a41e3c">12 months follow up planned</span></label><label><input class="y1a1a41e3d" type="radio" name="honextapp" value="No f/u plan"><span class="y1a1a41e3d">No f/u plan</span></label></div>
    <div class="y y1a1a41f1"><h2>Who's the Infectious Disease Doctor?</h2><label><input class="y1a1a41f1a" type="radio" name="id" value="UMass Memorial Medical Center"><span class="y1a1a41f1a">UMass Memorial Medical Center</span></label><label><input class="y1a1a41f1b" type="radio" name="id" value="St. Vincent Medical Group"><span class="y1a1a41f1b">St. Vincent Medical Group</span></label><label><input class="y1a1a41f1c" type="radio" name="id" value="Heywood"><span class="y1a1a41f1c">Heywood</span></label><label><input class="y1a1a41f1d" type="radio" name="id" value="-"><span class="y1a1a41f1d">-</span></label><label><input class="y1a1a41f1e" type="radio" name="id" value="-"><span class="y1a1a41f1e">-</span></label><label><input class="y1a1a41f1f" type="radio" name="id" value="-"><span class="y1a1a41f1f">-</span></label><label><input class="y1a1a41f1g" type="radio" name="id" value="Other"><span class="y1a1a41f1g">Other</span></label></div><div class="y y1a1a41f2"><h2>When was the last appointment with the Infectious Disease Doctor</h2><label><input class="y1a1a41f2a" type="radio" name="idlastapp" value="Less than 1 month ago"><span class="y1a1a41f2a">Less than 1 month ago</span></label><label><input class="y1a1a41f2b" type="radio" name="idlastapp" value="1-3 moths ago"><span class="y1a1a41f2b">1-3 moths ago</span></label><label><input class="y1a1a41f2c" type="radio" name="idlastapp" value="4 months ~ 1 year ago"><span class="y1a1a41f2c">4 months ~ 1 year ago</span></label><label><input class="y1a1a41f2d" type="radio" name="idlastapp" value="1-2 years ago"><span class="y1a1a41f2d">1-2 years ago</span></label><label><input class="y1a1a41f2e" type="radio" name="idlastapp" value="over 2 years ago"><span class="y1a1a41f2e"> over 2 years ago</span></label><label><input class="y1a1a41f2f" type="radio" name="idlastapp" value="No record"><span class="y1a1a41f2f"> No record</span></label></div><div class="y y1a1a41f3"><h2>When is follow up evalutation planned?</h2><label><input class="y1a1a41f3a" type="radio" name="idnextapp" value="3 months follow up planned"><span class="y1a1a41f3a">3 months follow up planned</span></label><label><input class="y1a1a41f3b" type="radio" name="idnextapp" value="6 months follow up planned"><span class="y1a1a41f3b">6 months follow up planned</span></label><label><input class="y1a1a41f3c" type="radio" name="idnextapp" value="12 months follow up planned"><span class="y1a1a41f3c">12 months follow up planned</span></label><label><input class="y1a1a41f3d" type="radio" name="idnextapp" value="No f/u plan"><span class="y1a1a41f3d">No f/u plan</span></label></div>
    <div class="y y1a1a41g1"><h2>Who's the Rheumatologist?</h2><label><input class="y1a1a41g1a" type="radio" name="rheum" value="MGH"><span class="y1a1a41g1a">MGH</span></label><label><input class="y1a1a41g1b" type="radio" name="rheum" value="BI"><span class="y1a1a41g1b">BI</span></label><label><input class="y1a1a41g1c" type="radio" name="rheum" value="Umass Medical Center"><span class="y1a1a41g1c">Umass Medical Center</span></label><label><input class="y1a1a41g1d" type="radio" name="rheum" value="-"><span class="y1a1a41g1d">-</span></label><label><input class="y1a1a41g1e" type="radio" name="rheum" value="-"><span class="y1a1a41g1e">-</span></label><label><input class="y1a1a41g1f" type="radio" name="rheum" value="-"><span class="y1a1a41g1f">-</span></label><label><input class="y1a1a41g1g" type="radio" name="rheum" value="Other"><span class="y1a1a41g1g">Other</span></label></div><div class="y y1a1a41g2"><h2>When was the last appointment with the Rheumatologist</h2><label><input class="y1a1a41g2a" type="radio" name="rheumlastapp" value="Less than 1 month ago"><span class="y1a1a41g2a">Less than 1 month ago</span></label><label><input class="y1a1a41g2b" type="radio" name="rheumlastapp" value="1-3 moths ago"><span class="y1a1a41g2b">1-3 moths ago</span></label><label><input class="y1a1a41g2c" type="radio" name="rheumlastapp" value="4 months ~ 1 year ago"><span class="y1a1a41g2c">4 months ~ 1 year ago</span></label><label><input class="y1a1a41g2d" type="radio" name="rheumlastapp" value="1-2 years ago"><span class="y1a1a41g2d">1-2 years ago</span></label><label><input class="y1a1a41g2e" type="radio" name="rheumlastapp" value="over 2 years ago"><span class="y1a1a41g2e"> over 2 years ago</span></label><label><input class="y1a1a41g2f" type="radio" name="rheumlastapp" value="No record"><span class="y1a1a41g2f"> No record</span></label></div><div class="y y1a1a41g3"><h2>When is follow up evalutation planned?</h2><label><input class="y1a1a41g3a" type="radio" name="rheumnextapp" value="3 months follow up planned"><span class="y1a1a41g3a">3 months follow up planned</span></label><label><input class="y1a1a41g3b" type="radio" name="rheumnextapp" value="6 months follow up planned"><span class="y1a1a41g3b">6 months follow up planned</span></label><label><input class="y1a1a41g3c" type="radio" name="rheumnextapp" value="12 months follow up planned"><span class="y1a1a41g3c">12 months follow up planned</span></label><label><input class="y1a1a41g3d" type="radio" name="rheumnextapp" value="No f/u plan"><span class="y1a1a41g3d">No f/u plan</span></label></div>
    <div class="y y1a1a41h1"><h2>Who's the Endocrinologist?</h2><label><input class="y1a1a41h1a" type="radio" name="endo" value="MGH"><span class="y1a1a41h1a">MGH</span></label><label><input class="y1a1a41h1b" type="radio" name="endo" value="Dr. Asem Ali"><span class="y1a1a41h1b">Dr. Asem Ali</span></label><label><input class="y1a1a41h1c" type="radio" name="endo" value="Dr. Chang"><span class="y1a1a41h1c">Dr. Chang</span></label><label><input class="y1a1a41h1d" type="radio" name="endo" value="-"><span class="y1a1a41h1d">-</span></label><label><input class="y1a1a41h1e" type="radio" name="endo" value="-"><span class="y1a1a41h1e">-</span></label><label><input class="y1a1a41h1f" type="radio" name="endo" value="-"><span class="y1a1a41h1f">-</span></label><label><input class="y1a1a41h1g" type="radio" name="endo" value="Other"><span class="y1a1a41h1g">Other</span></label></div><div class="y y1a1a41h2"><h2>When was the last appointment with the Endocrinologist</h2><label><input class="y1a1a41h2a" type="radio" name="endolastapp" value="Less than 1 month ago"><span class="y1a1a41h2a">Less than 1 month ago</span></label><label><input class="y1a1a41h2b" type="radio" name="endolastapp" value="1-3 moths ago"><span class="y1a1a41h2b">1-3 moths ago</span></label><label><input class="y1a1a41h2c" type="radio" name="endolastapp" value="4 months ~ 1 year ago"><span class="y1a1a41h2c">4 months ~ 1 year ago</span></label><label><input class="y1a1a41h2d" type="radio" name="endolastapp" value="1-2 years ago"><span class="y1a1a41h2d">1-2 years ago</span></label><label><input class="y1a1a41h2e" type="radio" name="endolastapp" value="over 2 years ago"><span class="y1a1a41h2e"> over 2 years ago</span></label><label><input class="y1a1a41h2f" type="radio" name="endolastapp" value="No record"><span class="y1a1a41h2f"> No record</span></label></div><div class="y y1a1a41h3"><h2>When is follow up evalutation planned?</h2><label><input class="y1a1a41h3a" type="radio" name="endonextapp" value="3 months follow up planned"><span class="y1a1a41h3a">3 months follow up planned</span></label><label><input class="y1a1a41h3b" type="radio" name="endonextapp" value="6 months follow up planned"><span class="y1a1a41h3b">6 months follow up planned</span></label><label><input class="y1a1a41h3c" type="radio" name="endonextapp" value="12 months follow up planned"><span class="y1a1a41h3c">12 months follow up planned</span></label><label><input class="y1a1a41h3d" type="radio" name="endonextapp" value="No f/u plan"><span class="y1a1a41h3d">No f/u plan</span></label></div>
    <div class="y y1a1a41i1"><h2>Who's the Orthopedic doctor?</h2><label><input class="y1a1a41i1a" type="radio" name="ortho" value="Dr. Jones"><span class="y1a1a41i1a">Dr. Jones</span></label><label><input class="y1a1a41i1b" type="radio" name="ortho" value="Umass Medical Center"><span class="y1a1a41i1b">Umass Medical Center</span></label><label><input class="y1a1a41i1c" type="radio" name="ortho" value="-"><span class="y1a1a41i1c">-</span></label><label><input class="y1a1a41i1d" type="radio" name="ortho" value="-"><span class="y1a1a41i1d">-</span></label><label><input class="y1a1a41i1e" type="radio" name="ortho" value="-"><span class="y1a1a41i1e">-</span></label><label><input class="y1a1a41i1f" type="radio" name="ortho" value="-"><span class="y1a1a41i1f">-</span></label><label><input class="y1a1a41i1g" type="radio" name="ortho" value="Other"><span class="y1a1a41i1g">Other</span></label></div><div class="y y1a1a41i2"><h2>When was the last appointment with the Orthopedic doctor</h2><label><input class="y1a1a41i2a" type="radio" name="ortholastapp" value="Less than 1 month ago"><span class="y1a1a41i2a">Less than 1 month ago</span></label><label><input class="y1a1a41i2b" type="radio" name="ortholastapp" value="1-3 moths ago"><span class="y1a1a41i2b">1-3 moths ago</span></label><label><input class="y1a1a41i2c" type="radio" name="ortholastapp" value="4 months ~ 1 year ago"><span class="y1a1a41i2c">4 months ~ 1 year ago</span></label><label><input class="y1a1a41i2d" type="radio" name="ortholastapp" value="1-2 years ago"><span class="y1a1a41i2d">1-2 years ago</span></label><label><input class="y1a1a41i2e" type="radio" name="ortholastapp" value="over 2 years ago"><span class="y1a1a41i2e"> over 2 years ago</span></label><label><input class="y1a1a41i2f" type="radio" name="ortholastapp" value="No record"><span class="y1a1a41i2f"> No record</span></label></div><div class="y y1a1a41i3"><h2>When is follow up evalutation planned?</h2><label><input class="y1a1a41i3a" type="radio" name="orthonextapp" value="3 months follow up planned"><span class="y1a1a41i3a">3 months follow up planned</span></label><label><input class="y1a1a41i3b" type="radio" name="orthonextapp" value="6 months follow up planned"><span class="y1a1a41i3b">6 months follow up planned</span></label><label><input class="y1a1a41i3c" type="radio" name="orthonextapp" value="12 months follow up planned"><span class="y1a1a41i3c">12 months follow up planned</span></label><label><input class="y1a1a41i3d" type="radio" name="orthonextapp" value="No f/u plan"><span class="y1a1a41i3d">No f/u plan</span></label></div>
    <div class="y y1a1a41j1"><h2>Who's the Pain clinic doctor?</h2><label><input class="y1a1a41j1a" type="radio" name="pain" value="-"><span class="y1a1a41j1a">-</span></label><label><input class="y1a1a41j1b" type="radio" name="pain" value="-"><span class="y1a1a41j1b">-</span></label><label><input class="y1a1a41j1c" type="radio" name="pain" value="-"><span class="y1a1a41j1c">-</span></label><label><input class="y1a1a41j1d" type="radio" name="pain" value="-"><span class="y1a1a41j1d">-</span></label><label><input class="y1a1a41j1e" type="radio" name="pain" value=""><span class="y1a1a41j1e"></span></label><label><input class="y1a1a41j1f" type="radio" name="pain" value="-"><span class="y1a1a41j1f">-</span></label><label><input class="y1a1a41j1g" type="radio" name="pain" value="Other"><span class="y1a1a41j1g">Other</span></label></div><div class="y y1a1a41j2"><h2>When was the last appointment with the Pain clinic doctor</h2><label><input class="y1a1a41j2a" type="radio" name="painlastapp" value="Less than 1 month ago"><span class="y1a1a41j2a">Less than 1 month ago</span></label><label><input class="y1a1a41j2b" type="radio" name="painlastapp" value="1-3 moths ago"><span class="y1a1a41j2b">1-3 moths ago</span></label><label><input class="y1a1a41j2c" type="radio" name="painlastapp" value="4 months ~ 1 year ago"><span class="y1a1a41j2c">4 months ~ 1 year ago</span></label><label><input class="y1a1a41j2d" type="radio" name="painlastapp" value="1-2 years ago"><span class="y1a1a41j2d">1-2 years ago</span></label><label><input class="y1a1a41j2e" type="radio" name="painlastapp" value="over 2 years ago"><span class="y1a1a41j2e"> over 2 years ago</span></label><label><input class="y1a1a41j2f" type="radio" name="painlastapp" value="No record"><span class="y1a1a41j2f"> No record</span></label></div><div class="y y1a1a41j3"><h2>When is follow up evalutation planned?</h2><label><input class="y1a1a41j3a" type="radio" name="painnextapp" value="3 months follow up planned"><span class="y1a1a41j3a">3 months follow up planned</span></label><label><input class="y1a1a41j3b" type="radio" name="painnextapp" value="6 months follow up planned"><span class="y1a1a41j3b">6 months follow up planned</span></label><label><input class="y1a1a41j3c" type="radio" name="painnextapp" value="12 months follow up planned"><span class="y1a1a41j3c">12 months follow up planned</span></label><label><input class="y1a1a41j3d" type="radio" name="painnextapp" value="No f/u plan"><span class="y1a1a41j3d">No f/u plan</span></label></div>
    <div class="y y1a1a41k1"><h2>Who's the Urologist?</h2><label><input class="y1a1a41k1a" type="radio" name="uro" value="Dr. Ebb"><span class="y1a1a41k1a">Dr. Ebb</span></label><label><input class="y1a1a41k1b" type="radio" name="uro" value="Dr. Karos"><span class="y1a1a41k1b">Dr. Karos</span></label><label><input class="y1a1a41k1c" type="radio" name="uro" value="-"><span class="y1a1a41k1c">-</span></label><label><input class="y1a1a41k1d" type="radio" name="uro" value="-"><span class="y1a1a41k1d">-</span></label><label><input class="y1a1a41k1e" type="radio" name="uro" value="-"><span class="y1a1a41k1e">-</span></label><label><input class="y1a1a41k1f" type="radio" name="uro" value="-"><span class="y1a1a41k1f">-</span></label><label><input class="y1a1a41k1g" type="radio" name="uro" value="Other"><span class="y1a1a41k1g">Other</span></label></div><div class="y y1a1a41k2"><h2>When was the last appointment with the Urologist</h2><label><input class="y1a1a41k2a" type="radio" name="urolastapp" value="Less than 1 month ago"><span class="y1a1a41k2a">Less than 1 month ago</span></label><label><input class="y1a1a41k2b" type="radio" name="urolastapp" value="1-3 moths ago"><span class="y1a1a41k2b">1-3 moths ago</span></label><label><input class="y1a1a41k2c" type="radio" name="urolastapp" value="4 months ~ 1 year ago"><span class="y1a1a41k2c">4 months ~ 1 year ago</span></label><label><input class="y1a1a41k2d" type="radio" name="urolastapp" value="1-2 years ago"><span class="y1a1a41k2d">1-2 years ago</span></label><label><input class="y1a1a41k2e" type="radio" name="urolastapp" value="over 2 years ago"><span class="y1a1a41k2e"> over 2 years ago</span></label><label><input class="y1a1a41k2f" type="radio" name="urolastapp" value="No record"><span class="y1a1a41k2f"> No record</span></label></div><div class="y y1a1a41k3"><h2>When is follow up evalutation planned?</h2><label><input class="y1a1a41k3a" type="radio" name="uronextapp" value="3 months follow up planned"><span class="y1a1a41k3a">3 months follow up planned</span></label><label><input class="y1a1a41k3b" type="radio" name="uronextapp" value="6 months follow up planned"><span class="y1a1a41k3b">6 months follow up planned</span></label><label><input class="y1a1a41k3c" type="radio" name="uronextapp" value="12 months follow up planned"><span class="y1a1a41k3c">12 months follow up planned</span></label><label><input class="y1a1a41k3d" type="radio" name="uronextapp" value="No f/u plan"><span class="y1a1a41k3d">No f/u plan</span></label></div>
    <div class="y y1a1a41l1"><h2>Who's the OBGYN doctor?</h2><label><input class="y1a1a41l1a" type="radio" name="obgyn" value="Montachusett Women's Health"><span class="y1a1a41l1a">Montachusett Women's Health</span></label><label><input class="y1a1a41l1b" type="radio" name="obgyn" value="Umass Medical Center"><span class="y1a1a41l1b">Umass Medical Center</span></label><label><input class="y1a1a41l1c" type="radio" name="obgyn" value="-"><span class="y1a1a41l1c">-</span></label><label><input class="y1a1a41l1d" type="radio" name="obgyn" value="-"><span class="y1a1a41l1d">-</span></label><label><input class="y1a1a41l1e" type="radio" name="obgyn" value="-"><span class="y1a1a41l1e">-</span></label><label><input class="y1a1a41l1f" type="radio" name="obgyn" value="-"><span class="y1a1a41l1f">-</span></label><label><input class="y1a1a41l1g" type="radio" name="obgyn" value="Other"><span class="y1a1a41l1g">Other</span></label></div><div class="y y1a1a41l2"><h2>When was the last appointment with the OBGYN doctor</h2><label><input class="y1a1a41l2a" type="radio" name="obgynlastapp" value="Less than 1 month ago"><span class="y1a1a41l2a">Less than 1 month ago</span></label><label><input class="y1a1a41l2b" type="radio" name="obgynlastapp" value="1-3 moths ago"><span class="y1a1a41l2b">1-3 moths ago</span></label><label><input class="y1a1a41l2c" type="radio" name="obgynlastapp" value="4 months ~ 1 year ago"><span class="y1a1a41l2c">4 months ~ 1 year ago</span></label><label><input class="y1a1a41l2d" type="radio" name="obgynlastapp" value="1-2 years ago"><span class="y1a1a41l2d">1-2 years ago</span></label><label><input class="y1a1a41l2e" type="radio" name="obgynlastapp" value="over 2 years ago"><span class="y1a1a41l2e"> over 2 years ago</span></label><label><input class="y1a1a41l2f" type="radio" name="obgynlastapp" value="No record"><span class="y1a1a41l2f"> No record</span></label></div><div class="y y1a1a41l3"><h2>When is follow up evalutation planned?</h2><label><input class="y1a1a41l3a" type="radio" name="obgynnextapp" value="3 months follow up planned"><span class="y1a1a41l3a">3 months follow up planned</span></label><label><input class="y1a1a41l3b" type="radio" name="obgynnextapp" value="6 months follow up planned"><span class="y1a1a41l3b">6 months follow up planned</span></label><label><input class="y1a1a41l3c" type="radio" name="obgynnextapp" value="12 months follow up planned"><span class="y1a1a41l3c">12 months follow up planned</span></label><label><input class="y1a1a41l3d" type="radio" name="obgynnextapp" value="No f/u plan"><span class="y1a1a41l3d">No f/u plan</span></label></div>
    <div class="y y1a1a41m1"><h2>Who's the Neurologist?</h2><label><input class="y1a1a41m1a" type="radio" name="neuro" value="North County Neurology"><span class="y1a1a41m1a">North County Neurology</span></label><label><input class="y1a1a41m1b" type="radio" name="neuro" value="Umass Medical Center"><span class="y1a1a41m1b">Umass Medical Center</span></label><label><input class="y1a1a41m1c" type="radio" name="neuro" value="-"><span class="y1a1a41m1c">-</span></label><label><input class="y1a1a41m1d" type="radio" name="neuro" value="-"><span class="y1a1a41m1d">-</span></label><label><input class="y1a1a41m1e" type="radio" name="neuro" value="-"><span class="y1a1a41m1e">-</span></label><label><input class="y1a1a41m1f" type="radio" name="neuro" value="-"><span class="y1a1a41m1f">-</span></label><label><input class="y1a1a41m1g" type="radio" name="neuro" value="Other"><span class="y1a1a41m1g">Other</span></label></div><div class="y y1a1a41m2"><h2>When was the last appointment with the Neurologist</h2><label><input class="y1a1a41m2a" type="radio" name="neurolastapp" value="Less than 1 month ago"><span class="y1a1a41m2a">Less than 1 month ago</span></label><label><input class="y1a1a41m2b" type="radio" name="neurolastapp" value="1-3 moths ago"><span class="y1a1a41m2b">1-3 moths ago</span></label><label><input class="y1a1a41m2c" type="radio" name="neurolastapp" value="4 months ~ 1 year ago"><span class="y1a1a41m2c">4 months ~ 1 year ago</span></label><label><input class="y1a1a41m2d" type="radio" name="neurolastapp" value="1-2 years ago"><span class="y1a1a41m2d">1-2 years ago</span></label><label><input class="y1a1a41m2e" type="radio" name="neurolastapp" value="over 2 years ago"><span class="y1a1a41m2e"> over 2 years ago</span></label><label><input class="y1a1a41m2f" type="radio" name="neurolastapp" value="No record"><span class="y1a1a41m2f"> No record</span></label></div><div class="y y1a1a41m3"><h2>When is follow up evalutation planned?</h2><label><input class="y1a1a41m3a" type="radio" name="neuronextapp" value="3 months follow up planned"><span class="y1a1a41m3a">3 months follow up planned</span></label><label><input class="y1a1a41m3b" type="radio" name="neuronextapp" value="6 months follow up planned"><span class="y1a1a41m3b">6 months follow up planned</span></label><label><input class="y1a1a41m3c" type="radio" name="neuronextapp" value="12 months follow up planned"><span class="y1a1a41m3c">12 months follow up planned</span></label><label><input class="y1a1a41m3d" type="radio" name="neuronextapp" value="No f/u plan"><span class="y1a1a41m3d">No f/u plan</span></label></div>
    <div class="y y1a1a41n1"><h2>Who's the Neurosurgeon?</h2><label><input class="y1a1a41n1a" type="radio" name="neurosurg" value="Umass Medical Center"><span class="y1a1a41n1a">Umass Medical Center</span></label><label><input class="y1a1a41n1b" type="radio" name="neurosurg" value="-"><span class="y1a1a41n1b">-</span></label><label><input class="y1a1a41n1c" type="radio" name="neurosurg" value="-"><span class="y1a1a41n1c">-</span></label><label><input class="y1a1a41n1d" type="radio" name="neurosurg" value="-"><span class="y1a1a41n1d">-</span></label><label><input class="y1a1a41n1e" type="radio" name="neurosurg" value="-"><span class="y1a1a41n1e">-</span></label><label><input class="y1a1a41n1f" type="radio" name="neurosurg" value="-"><span class="y1a1a41n1f">-</span></label><label><input class="y1a1a41n1g" type="radio" name="neurosurg" value="Other"><span class="y1a1a41n1g">Other</span></label></div><div class="y y1a1a41n2"><h2>When was the last appointment with the Neurosurgeon</h2><label><input class="y1a1a41n2a" type="radio" name="neurosurglastapp" value="Less than 1 month ago"><span class="y1a1a41n2a">Less than 1 month ago</span></label><label><input class="y1a1a41n2b" type="radio" name="neurosurglastapp" value="1-3 moths ago"><span class="y1a1a41n2b">1-3 moths ago</span></label><label><input class="y1a1a41n2c" type="radio" name="neurosurglastapp" value="4 months ~ 1 year ago"><span class="y1a1a41n2c">4 months ~ 1 year ago</span></label><label><input class="y1a1a41n2d" type="radio" name="neurosurglastapp" value="1-2 years ago"><span class="y1a1a41n2d">1-2 years ago</span></label><label><input class="y1a1a41n2e" type="radio" name="neurosurglastapp" value="over 2 years ago"><span class="y1a1a41n2e"> over 2 years ago</span></label><label><input class="y1a1a41n2f" type="radio" name="neurosurglastapp" value="No record"><span class="y1a1a41n2f"> No record</span></label></div><div class="y y1a1a41n3"><h2>When is follow up evalutation planned?</h2><label><input class="y1a1a41n3a" type="radio" name="neurosurgnextapp" value="3 months follow up planned"><span class="y1a1a41n3a">3 months follow up planned</span></label><label><input class="y1a1a41n3b" type="radio" name="neurosurgnextapp" value="6 months follow up planned"><span class="y1a1a41n3b">6 months follow up planned</span></label><label><input class="y1a1a41n3c" type="radio" name="neurosurgnextapp" value="12 months follow up planned"><span class="y1a1a41n3c">12 months follow up planned</span></label><label><input class="y1a1a41n3d" type="radio" name="neurosurgnextapp" value="No f/u plan"><span class="y1a1a41n3d">No f/u plan</span></label></div>
    <div class="y y1a1a41o1"><h2>Who's the Opthalmologist?</h2><label><input class="y1a1a41o1a" type="radio" name="opth" value="D'Ambrosio Eye Care"><span class="y1a1a41o1a">D'Ambrosio Eye Care</span></label><label><input class="y1a1a41o1b" type="radio" name="opth" value="Dr. Aaron Fay"><span class="y1a1a41o1b">Dr. Aaron Fay</span></label><label><input class="y1a1a41o1c" type="radio" name="opth" value="-"><span class="y1a1a41o1c">-</span></label><label><input class="y1a1a41o1d" type="radio" name="opth" value="-"><span class="y1a1a41o1d">-</span></label><label><input class="y1a1a41o1e" type="radio" name="opth" value="-"><span class="y1a1a41o1e">-</span></label><label><input class="y1a1a41o1f" type="radio" name="opth" value="-"><span class="y1a1a41o1f">-</span></label><label><input class="y1a1a41o1g" type="radio" name="opth" value="Other"><span class="y1a1a41o1g">Other</span></label></div><div class="y y1a1a41o2"><h2>When was the last appointment with the Opthalmologist</h2><label><input class="y1a1a41o2a" type="radio" name="opthlastapp" value="Less than 1 month ago"><span class="y1a1a41o2a">Less than 1 month ago</span></label><label><input class="y1a1a41o2b" type="radio" name="opthlastapp" value="1-3 moths ago"><span class="y1a1a41o2b">1-3 moths ago</span></label><label><input class="y1a1a41o2c" type="radio" name="opthlastapp" value="4 months ~ 1 year ago"><span class="y1a1a41o2c">4 months ~ 1 year ago</span></label><label><input class="y1a1a41o2d" type="radio" name="opthlastapp" value="1-2 years ago"><span class="y1a1a41o2d">1-2 years ago</span></label><label><input class="y1a1a41o2e" type="radio" name="opthlastapp" value="over 2 years ago"><span class="y1a1a41o2e"> over 2 years ago</span></label><label><input class="y1a1a41o2f" type="radio" name="opthlastapp" value="No record"><span class="y1a1a41o2f"> No record</span></label></div><div class="y y1a1a41o3"><h2>When is follow up evalutation planned?</h2><label><input class="y1a1a41o3a" type="radio" name="opthnextapp" value="3 months follow up planned"><span class="y1a1a41o3a">3 months follow up planned</span></label><label><input class="y1a1a41o3b" type="radio" name="opthnextapp" value="6 months follow up planned"><span class="y1a1a41o3b">6 months follow up planned</span></label><label><input class="y1a1a41o3c" type="radio" name="opthnextapp" value="12 months follow up planned"><span class="y1a1a41o3c">12 months follow up planned</span></label><label><input class="y1a1a41o3d" type="radio" name="opthnextapp" value="No f/u plan"><span class="y1a1a41o3d">No f/u plan</span></label></div>
    <div class="y y1a1a41p1"><h2>Who's the Dermatologist?</h2><label><input class="y1a1a41p1a" type="radio" name="derm" value="Dermatology Associate of Worcester County"><span class="y1a1a41p1a">Dermatology Associate of Worcester County</span></label><label><input class="y1a1a41p1b" type="radio" name="derm" value="Ayer & Westford Dermatology"><span class="y1a1a41p1b">Ayer & Westford Dermatology</span></label><label><input class="y1a1a41p1c" type="radio" name="derm" value="Adult and Pediatric Dermatology"><span class="y1a1a41p1c">Adult and Pediatric Dermatology</span></label><label><input class="y1a1a41p1d" type="radio" name="derm" value="-"><span class="y1a1a41p1d">-</span></label><label><input class="y1a1a41p1e" type="radio" name="derm" value="-"><span class="y1a1a41p1e">-</span></label><label><input class="y1a1a41p1f" type="radio" name="derm" value="-"><span class="y1a1a41p1f">-</span></label><label><input class="y1a1a41p1g" type="radio" name="derm" value="Other"><span class="y1a1a41p1g">Other</span></label></div><div class="y y1a1a41p2"><h2>When was the last appointment with the Dermatologist</h2><label><input class="y1a1a41p2a" type="radio" name="dermlastapp" value="Less than 1 month ago"><span class="y1a1a41p2a">Less than 1 month ago</span></label><label><input class="y1a1a41p2b" type="radio" name="dermlastapp" value="1-3 moths ago"><span class="y1a1a41p2b">1-3 moths ago</span></label><label><input class="y1a1a41p2c" type="radio" name="dermlastapp" value="4 months ~ 1 year ago"><span class="y1a1a41p2c">4 months ~ 1 year ago</span></label><label><input class="y1a1a41p2d" type="radio" name="dermlastapp" value="1-2 years ago"><span class="y1a1a41p2d">1-2 years ago</span></label><label><input class="y1a1a41p2e" type="radio" name="dermlastapp" value="over 2 years ago"><span class="y1a1a41p2e"> over 2 years ago</span></label><label><input class="y1a1a41p2f" type="radio" name="dermlastapp" value="No record"><span class="y1a1a41p2f"> No record</span></label></div><div class="y y1a1a41p3"><h2>When is follow up evalutation planned?</h2><label><input class="y1a1a41p3a" type="radio" name="dermnextapp" value="3 months follow up planned"><span class="y1a1a41p3a">3 months follow up planned</span></label><label><input class="y1a1a41p3b" type="radio" name="dermnextapp" value="6 months follow up planned"><span class="y1a1a41p3b">6 months follow up planned</span></label><label><input class="y1a1a41p3c" type="radio" name="dermnextapp" value="12 months follow up planned"><span class="y1a1a41p3c">12 months follow up planned</span></label><label><input class="y1a1a41p3d" type="radio" name="dermnextapp" value="No f/u plan"><span class="y1a1a41p3d">No f/u plan</span></label></div>
    <div class="y y1a1a41q1"><h2>Who's the Ear/nose/throat doctor?</h2><label><input class="y1a1a41q1a" type="radio" name="ent" value="Dr. Daniel Ervin"><span class="y1a1a41q1a">Dr. Daniel Ervin</span></label><label><input class="y1a1a41q1b" type="radio" name="ent" value="Dr. Beth Colombo"><span class="y1a1a41q1b">Dr. Beth Colombo</span></label><label><input class="y1a1a41q1c" type="radio" name="ent" value="-"><span class="y1a1a41q1c">-</span></label><label><input class="y1a1a41q1d" type="radio" name="ent" value="-"><span class="y1a1a41q1d">-</span></label><label><input class="y1a1a41q1e" type="radio" name="ent" value="-"><span class="y1a1a41q1e">-</span></label><label><input class="y1a1a41q1f" type="radio" name="ent" value="-"><span class="y1a1a41q1f">-</span></label><label><input class="y1a1a41q1g" type="radio" name="ent" value="Other"><span class="y1a1a41q1g">Other</span></label></div><div class="y y1a1a41q2"><h2>When was the last appointment with the Ear/nose/throat doctor</h2><label><input class="y1a1a41q2a" type="radio" name="entlastapp" value="Less than 1 month ago"><span class="y1a1a41q2a">Less than 1 month ago</span></label><label><input class="y1a1a41q2b" type="radio" name="entlastapp" value="1-3 moths ago"><span class="y1a1a41q2b">1-3 moths ago</span></label><label><input class="y1a1a41q2c" type="radio" name="entlastapp" value="4 months ~ 1 year ago"><span class="y1a1a41q2c">4 months ~ 1 year ago</span></label><label><input class="y1a1a41q2d" type="radio" name="entlastapp" value="1-2 years ago"><span class="y1a1a41q2d">1-2 years ago</span></label><label><input class="y1a1a41q2e" type="radio" name="entlastapp" value="over 2 years ago"><span class="y1a1a41q2e"> over 2 years ago</span></label><label><input class="y1a1a41q2f" type="radio" name="entlastapp" value="No record"><span class="y1a1a41q2f"> No record</span></label></div><div class="y y1a1a41q3"><h2>When is follow up evalutation planned?</h2><label><input class="y1a1a41q3a" type="radio" name="entnextapp" value="3 months follow up planned"><span class="y1a1a41q3a">3 months follow up planned</span></label><label><input class="y1a1a41q3b" type="radio" name="entnextapp" value="6 months follow up planned"><span class="y1a1a41q3b">6 months follow up planned</span></label><label><input class="y1a1a41q3c" type="radio" name="entnextapp" value="12 months follow up planned"><span class="y1a1a41q3c">12 months follow up planned</span></label><label><input class="y1a1a41q3d" type="radio" name="entnextapp" value="No f/u plan"><span class="y1a1a41q3d">No f/u plan</span></label></div>
    <div class="y y1a1a41r1"><h2>Who's the Psychiatrist or Psychologist?</h2><label><input class="y1a1a41r1a" type="radio" name="psych" value="Wachusett Psychiatry"><span class="y1a1a41r1a">Wachusett Psychiatry</span></label><label><input class="y1a1a41r1b" type="radio" name="psych" value="LUK"><span class="y1a1a41r1b">LUK</span></label><label><input class="y1a1a41r1c" type="radio" name="psych" value="-"><span class="y1a1a41r1c">-</span></label><label><input class="y1a1a41r1d" type="radio" name="psych" value="-"><span class="y1a1a41r1d">-</span></label><label><input class="y1a1a41r1e" type="radio" name="psych" value="-"><span class="y1a1a41r1e">-</span></label><label><input class="y1a1a41r1f" type="radio" name="psych" value="-"><span class="y1a1a41r1f">-</span></label><label><input class="y1a1a41r1g" type="radio" name="psych" value="Other"><span class="y1a1a41r1g">Other</span></label></div><div class="y y1a1a41r2"><h2>When was the last appointment with the Psychiatrist or Psychologist</h2><label><input class="y1a1a41r2a" type="radio" name="psychlastapp" value="Less than 1 month ago"><span class="y1a1a41r2a">Less than 1 month ago</span></label><label><input class="y1a1a41r2b" type="radio" name="psychlastapp" value="1-3 moths ago"><span class="y1a1a41r2b">1-3 moths ago</span></label><label><input class="y1a1a41r2c" type="radio" name="psychlastapp" value="4 months ~ 1 year ago"><span class="y1a1a41r2c">4 months ~ 1 year ago</span></label><label><input class="y1a1a41r2d" type="radio" name="psychlastapp" value="1-2 years ago"><span class="y1a1a41r2d">1-2 years ago</span></label><label><input class="y1a1a41r2e" type="radio" name="psychlastapp" value="over 2 years ago"><span class="y1a1a41r2e"> over 2 years ago</span></label><label><input class="y1a1a41r2f" type="radio" name="psychlastapp" value="No record"><span class="y1a1a41r2f"> No record</span></label></div><div class="y y1a1a41r3"><h2>When is follow up evalutation planned?</h2><label><input class="y1a1a41r3a" type="radio" name="psychnextapp" value="3 months follow up planned"><span class="y1a1a41r3a">3 months follow up planned</span></label><label><input class="y1a1a41r3b" type="radio" name="psychnextapp" value="6 months follow up planned"><span class="y1a1a41r3b">6 months follow up planned</span></label><label><input class="y1a1a41r3c" type="radio" name="psychnextapp" value="12 months follow up planned"><span class="y1a1a41r3c">12 months follow up planned</span></label><label><input class="y1a1a41r3d" type="radio" name="psychnextapp" value="No f/u plan"><span class="y1a1a41r3d">No f/u plan</span></label></div>
    <div class="y y1a1a41s1"><h2>Who's the Thoracic surgeon?</h2><label><input class="y1a1a41s1a" type="radio" name="ts" value="Umass Medical Center"><span class="y1a1a41s1a">Umass Medical Center</span></label><label><input class="y1a1a41s1b" type="radio" name="ts" value="BI"><span class="y1a1a41s1b">BI</span></label><label><input class="y1a1a41s1c" type="radio" name="ts" value="MGH"><span class="y1a1a41s1c">MGH</span></label><label><input class="y1a1a41s1d" type="radio" name="ts" value="-"><span class="y1a1a41s1d">-</span></label><label><input class="y1a1a41s1e" type="radio" name="ts" value="-"><span class="y1a1a41s1e">-</span></label><label><input class="y1a1a41s1f" type="radio" name="ts" value="-"><span class="y1a1a41s1f">-</span></label><label><input class="y1a1a41s1g" type="radio" name="ts" value="Other"><span class="y1a1a41s1g">Other</span></label></div><div class="y y1a1a41s2"><h2>When was the last appointment with the Thoracic surgeon</h2><label><input class="y1a1a41s2a" type="radio" name="tslastapp" value="Less than 1 month ago"><span class="y1a1a41s2a">Less than 1 month ago</span></label><label><input class="y1a1a41s2b" type="radio" name="tslastapp" value="1-3 moths ago"><span class="y1a1a41s2b">1-3 moths ago</span></label><label><input class="y1a1a41s2c" type="radio" name="tslastapp" value="4 months ~ 1 year ago"><span class="y1a1a41s2c">4 months ~ 1 year ago</span></label><label><input class="y1a1a41s2d" type="radio" name="tslastapp" value="1-2 years ago"><span class="y1a1a41s2d">1-2 years ago</span></label><label><input class="y1a1a41s2e" type="radio" name="tslastapp" value="over 2 years ago"><span class="y1a1a41s2e"> over 2 years ago</span></label><label><input class="y1a1a41s2f" type="radio" name="tslastapp" value="No record"><span class="y1a1a41s2f"> No record</span></label></div><div class="y y1a1a41s3"><h2>When is follow up evalutation planned?</h2><label><input class="y1a1a41s3a" type="radio" name="tsnextapp" value="3 months follow up planned"><span class="y1a1a41s3a">3 months follow up planned</span></label><label><input class="y1a1a41s3b" type="radio" name="tsnextapp" value="6 months follow up planned"><span class="y1a1a41s3b">6 months follow up planned</span></label><label><input class="y1a1a41s3c" type="radio" name="tsnextapp" value="12 months follow up planned"><span class="y1a1a41s3c">12 months follow up planned</span></label><label><input class="y1a1a41s3d" type="radio" name="tsnextapp" value="No f/u plan"><span class="y1a1a41s3d">No f/u plan</span></label></div>
    <div class="y y1a1a41t1"><h2>Who's the General surgeon?</h2><label><input class="y1a1a41t1a" type="radio" name="gs" value="Dr. Robert Shelton"><span class="y1a1a41t1a">Dr. Robert Shelton</span></label><label><input class="y1a1a41t1b" type="radio" name="gs" value="Dr. Nathaniel Merrell"><span class="y1a1a41t1b">Dr. Nathaniel Merrell</span></label><label><input class="y1a1a41t1c" type="radio" name="gs" value="-"><span class="y1a1a41t1c">-</span></label><label><input class="y1a1a41t1d" type="radio" name="gs" value="-"><span class="y1a1a41t1d">-</span></label><label><input class="y1a1a41t1e" type="radio" name="gs" value="-"><span class="y1a1a41t1e">-</span></label><label><input class="y1a1a41t1f" type="radio" name="gs" value="-"><span class="y1a1a41t1f">-</span></label><label><input class="y1a1a41t1g" type="radio" name="gs" value="Other"><span class="y1a1a41t1g">Other</span></label></div><div class="y y1a1a41t2"><h2>When was the last appointment with the General surgeon</h2><label><input class="y1a1a41t2a" type="radio" name="gslastapp" value="Less than 1 month ago"><span class="y1a1a41t2a">Less than 1 month ago</span></label><label><input class="y1a1a41t2b" type="radio" name="gslastapp" value="1-3 moths ago"><span class="y1a1a41t2b">1-3 moths ago</span></label><label><input class="y1a1a41t2c" type="radio" name="gslastapp" value="4 months ~ 1 year ago"><span class="y1a1a41t2c">4 months ~ 1 year ago</span></label><label><input class="y1a1a41t2d" type="radio" name="gslastapp" value="1-2 years ago"><span class="y1a1a41t2d">1-2 years ago</span></label><label><input class="y1a1a41t2e" type="radio" name="gslastapp" value="over 2 years ago"><span class="y1a1a41t2e"> over 2 years ago</span></label><label><input class="y1a1a41t2f" type="radio" name="gslastapp" value="No record"><span class="y1a1a41t2f"> No record</span></label></div><div class="y y1a1a41t3"><h2>When is follow up evalutation planned?</h2><label><input class="y1a1a41t3a" type="radio" name="gsnextapp" value="3 months follow up planned"><span class="y1a1a41t3a">3 months follow up planned</span></label><label><input class="y1a1a41t3b" type="radio" name="gsnextapp" value="6 months follow up planned"><span class="y1a1a41t3b">6 months follow up planned</span></label><label><input class="y1a1a41t3c" type="radio" name="gsnextapp" value="12 months follow up planned"><span class="y1a1a41t3c">12 months follow up planned</span></label><label><input class="y1a1a41t3d" type="radio" name="gsnextapp" value="No f/u plan"><span class="y1a1a41t3d">No f/u plan</span></label></div>

    <div class="y y1a3">
        <h2 >MA pre-charting finished.</h2> 
        <h1 class="y1a3a">START Patient Questionnaires</h1>
    </div>

<!--Patient Q-->

    <div class="y y1a1a1a1"><!--coloca-->
        <h2>You're due for test for colorectal cancer prevention. <br> Among 3 types of tests, which one do you prefer?</h2>
        <label><input class="y1a1a1a1a" type="radio" name="Colonca" value="1"><span class="y1a1a1a1a">Colonoscopy every 10 years.</span></label>
        <label><input class="y1a1a1a1b" type="radio" name="Colonca" value="2"><span class="y1a1a1a1b">Stool DNA test every 3 years.</span></label>
        <label><input class="y1a1a1a1c" type="radio" name="Colonca" value="3"><span class="y1a1a1a1c">Stool blood test once a year.</span></label>
        <label><input class="y1a1a1a1d" type="radio" name="Colonca" value="4"><span class="y1a1a1a1d">I don't want any screening test.</span></label>
        <label><input class="y1a1a1a1e" type="radio" name="Colonca" value="5"><span class="y1a1a1a1e">I don't understand. Need further explanation.</span></label>
    </div>

    <div class="y y1a1a1b1"><!--mammo-->
        <h2>You're due for mammogram as part of breast cancer prevention. <br> Do you agree with the test?</h2>
        <label><input class="y1a1a1b1a" type="radio" name="Breastca" value="1"><span class="y1a1a1b1a">Yes</span></label>
        <label><input class="y1a1a1b1b" type="radio" name="Breastca" value="2"><span class="y1a1a1b1b">No</span></label>
        <label><input class="y1a1a1b1c" type="radio" name="Breastca" value="3"><span class="y1a1a1b1c">I don't understand. Need further explanation.</span></label>
    </div>

    <div class="y y1a1a1c1">
        <h2>You're due for Pap Smear as part of cervical cancer prevention. <br> Do you agree with Pap Smear? </h2>
        <label><input class="y1a1a1c1a" type="radio" name="cervicalca" value=""><span class="y1a1a1c1a">Yes</span></label>
        <label><input class="y1a1a1c1b" type="radio" name="cervicalca" value="1"><span class="y1a1a1c1b">No</span></label>
        <label><input class="y1a1a1c1c" type="radio" name="cervicalca" value="2"><span class="y1a1a1c1c">I don't understand. Need further explanation.</span></label>
    </div>

    <div class="y y1a1a1d1">
        <h2>You're indicated for ROUTINE hepatitis C virus infection screening blood test.<br> Doctor may order a blood test order it today.</h2>
        <label><input class="y1a1a1d1a" type="radio" name="hcv" value="abc"><span class="y1a1a1d1b">Okay, I agree with test.</span></label>
        <label><input class="y1a1a1d1a" type="radio" name="hcv" value="2"><span class="y1a1a1d1a">No I don't want it.</span></label>
    </div>

    <div class="y y1a1a1f1"><!-- DM-urine -->
        <h2>You're due for urine protein test as part of diabetes management.<br> Doctor may order a urine test order today.</h2>
        <label><input class="y1a1a1f1a" type="radio" name="DMurine" value="1"><span class="y1a1a1f1b">Okay, I agree with test.</span></label>
        <label><input class="y1a1a1f1a" type="radio" name="DMurine" value="2"><span class="y1a1a1f1a">No I don't want it. </span></label>
    </div>

    <div class="y y1a1a1g1"><!--podiatry-->
        <h2>Have you seen a podiatrist with in past 12 months?</h2>
        <label><input class="y1a1a1g1a" type="radio" name="pod" value="1"><span class="y1a1a1g1a">Yes </span></label>
        <label><input class="y1a1a1g1b" type="radio" name="pod" value="2"><span class="y1a1a1g1b">No</span></label>
    </div>

    <div class="y y1a1a1h1"><!--opthalmologist-->
        <h2>Have you seen an opthalmologist with in past 12 months?</h2>
        <label><input class="y1a1a1h1a" type="radio" name="DMopth" value="1"><span class="y1a1a1h1a">Yes </span></label>
        <label><input class="y1a1a1h1b" type="radio" name="DMopth" value="2"><span class="y1a1a1h1b">No</span></label>
    </div>

    <div class="y y1a1a1i1"><!-- DM-a1c -->
        <h2>You're due for regular diabetes level test (HbA1c) as part of diabetes management. <br> Doctor may order a blood test today.</h2>
        <label><input class="y1a1a1i1a" type="radio" name="hba1c" value="1"><span class="y1a1a1i1a">Okay, I agree with test </span></label>
        <label><input class="y1a1a1i1b" type="radio" name="hba1c" value="2"><span class="y1a1a1i1b">No, I don't want it.</span></label>
    </div>

    <div class="y y1a1a1j1"><!-- shingle-->
        <h2>Have you received shingle vaccine after 10/2017?</h2>
        <label><input class="y1a1a1j1a" type="radio" name="shingrix" value="1"><span class="y1a1a1j1a">Yes </span></label>
        <label><input class="y1a1a1j1b" type="radio" name="shingrix" value="2"><span class="y1a1a1j1b">No</span></label>
        <label><input class="y1a1a1j1b" type="radio" name="shingrix" value="3"><span class="y1a1a1j1b">I don't remember.</span></label>
    </div>

    <div class="y y1a1a1j1a1">
        <h2>There are two types of shingle vaccination. <br>Do you remember which type you have received?</h2>
        <label><input class="y1a1a1j1a1a" type="radio" name="shingrix" value="4"><span class="y1a1a1j1a1a">Zostavax</span></label>
        <label><input class="y1a1a1j1a1b" type="radio" name="shingrix" value="5"><span class="y1a1a1j1a1b">Shingrix</span></label>
        <label><input class="y1a1a1j1a1c" type="radio" name="shingrix" value="6"><span class="y1a1a1j1a1c">Both</span></label>
        <label><input class="y1a1a1j1a1c" type="radio" name="shingrix" value="13"><span class="y1a1a1j1a1c">I don't know</span></label>
    </div>

    <div class="y y1a1a1j1a1c1">
        <h2>Please check which type of vaccination you received, let our office know. </h2>
         <label><input class="y1a1a1j1a1c1a" type="radio" name="shingrix" value="7"><span class="y1a1a1j1a1c1a">Okay, I wll.</span></label>
         <label><input class="y1a1a1j1a1c1b" type="radio" name="shingrix" value="8"><span class="y1a1a1j1a1c1b">Unable to check.</span></label>
    </div>

    <div class="y y1a1a1j1b1 y1a1a1j1a1a1 y1a1a1j1a1c1b1">
        <h2>You are indicated for Shingrix (Newer shingle vaccination). Please check with your insurance if this will be covered, let our office know. </h2>
        <label><input class="y1a1a1j1a1a1a" type="radio" name="shingrix" value="9"><span class="y1a1a1j1a1a1a">Ok, I will</span></label>
        <label><input class="y1a1a1j1a1a1b" type="radio" name="shingrix" value="10"><span class="y1a1a1j1a1a1b">I did. It is covered.</span></label>
        <label><input class="y1a1a1j1a1a1c" type="radio" name="shingrix" value="11"><span class="y1a1a1j1a1a1c">I did. It is not covered.</span></label>
        <label><input class="y1a1a1j1a1a1d" type="radio" name="shingrix" value="12"><span class="y1a1a1j1a1a1d">I don't want shingle vaccination.</span></label>
    </div>

    <div class="y y1a1a1j1a1a1b1">
        <h2>You're indicated for shingle vaccine. <br> Do you want to get it today? </h2>
         <label><input class="y1a1a1j1a1a1b1a" type="radio" name="shingrix" value="1"><span class="y1a1a1j1a1a1b1a">Yes</span></label>
         <label><input class="y1a1a1j1a1a1b1b" type="radio" name="shingrix" value="2"><span class="y1a1a1j1a1a1b1b">No</span></label>
    </div>

    <div class="y y1a1a1j1a1a1c1">
        <h2>You're indicated for shingle vaccine. Unfortunately, it is not covered by insurance. <br> Do you want to get it today? There can be over $200.00 copay.</h2>
         <label><input class="y1a1a1j1a1a1c1a" type="radio" name="shingrix" value="1"><span class="y1a1a1j1a1a1c1a">Yes</span></label>
         <label><input class="y1a1a1j1a1a1c1b" type="radio" name="shingrix" value="2"><span class="y1a1a1j1a1a1c1b">No</span></label>
    </div>

    <div class="y y1a1a1k1"><!-- flu-->
        <h2>Have you received flu vaccine this year?</h2>
        <label><input class="y1a1a1k1a" type="radio" name="flu" value="1"><span class="y1a1a1k1a">Yes</span></label>
        <label><input class="y1a1a1k1a" type="radio" name="flu" value=""><span class="y1a1a1k1b">No</span></label>
    </div>

    <div class="y y1a1a1k1b1">
        <h2>You're indicated for flu vaccination. Do you want to get one today?</h2>
        <label><input class="y1a1a1k1b1a" type="radio" name="flu" value="2"><span class="y1a1a1k1b1a">Yes</span></label>
        <label><input class="y1a1a1k1b1b" type="radio" name="flu" value="3"><span class="y1a1a1k1b1b">No</span></label>
    </div>
 
    <div class="y y1a1a1l1"><!--Td-->
        <h2>Have you received tetanus vaccination after age 20?</h2>
        <label><input class="y1a1a1l1a" type="radio" name="" value=""><span class="y1a1a1l1a">yes</span></label>
        <label><input class="y1a1a1l1b" type="radio" name="" value=""><span class="y1a1a1l1b">no</span></label>
    </div>

    <div class="y y1a1a1l1b1">
        <h2>You're indicated for tetanus vaccination (Tdap). Do you want to receive it today?</h2>
        <label><input class="y1a1a1l1b1a" type="radio" name="td" value="1"><span class="y1a1a1l1b1a">Yes</span></label>
        <label><input class="y1a1a1l1b1b" type="radio" name="td" value="2"><span class="y1a1a1l1b1b">no</span></label>
    </div>

    <div class="y y1a1a1l1a1">
        <h2>Have you received tetanus vaccination with in last 10 years?</h2>
        <label><input class="y1a1a1l1a1a" type="radio" name="td" value="3"><span class="y1a1a1l1a1a">Yes</span></label>
        <label><input class="y1a1a1l1a1b" type="radio" name="" value=""><span class="y1a1a1l1a1b">No</span></label>
        <label><input class="y1a1a1l1a1c" type="radio" name="" value=""><span class="y1a1a1l1a1c">Not sure.</span></label>
    </div>

    <div class="y y1a1a1l1a1b1 y1a1a1l1a1c1">
        <h2>You're indicated for tetanus vaccination (Td). Do you want to receive it today?</h2>
        <label><input class="y1a1a1l1a1b1a" type="radio" name="td" value="4"><span class="y1a1a1l1a1b1a">Yes</span></label>
        <label><input class="y1a1a1l1a1b1b" type="radio" name="td" value="5"><span class="y1a1a1l1a1b1b">No</span></label>
    </div>

    <div class="y y1a1a1m2">
            <h2>You're indicated for Pneumonia vaccination. <br>Do you want to receive it today?</h2>
                <label><input class="y1a1a1m2a" type="radio" name="pnavax" value=""><span class="y1a1a1m2a">Yes </span></label>
                <label><input class="y1a1a1m2b" type="radio" name="pnavax" value="1"><span class="y1a1a1m2b">No </span></label>
    </div>
    
    <div class="y y1a1a1m1">
            <h2>How old are you?</h2>
            <label><input class="y1a1a1m1a" type="radio" name="" value=""><span class="y1a1a1m1a">Younger than 65 </span></label>
            <label><input class="y1a1a1m1b" type="radio" name="" value=""><span class="y1a1a1m1b">65 or older</span></label>
    </div>
<!--Patient Q; Medicare Wellness HRA--> 
    <div class="y y1a1a2">
        <h2>In general, would you say your health is </h2>
        <label><input class="y1a1a2a" type="radio" name="mw1" value="1"><span class="y1a1a2a">Excellent</span></label>
        <label><input class="y1a1a2b" type="radio" name="mw1" value="2"><span class="y1a1a2b">Very good</span></label>
        <label><input class="y1a1a2c" type="radio" name="mw1" value="3"><span class="y1a1a2c">Good</span></label>
        <label><input class="y1a1a2d" type="radio" name="mw1" value="4"><span class="y1a1a2d">Fair</span></label>
        <label><input class="y1a1a2e" type="radio" name="mw1" value="5"><span class="y1a1a2e">Poor</span></label>
    </div>

    <div class="y y1a1a3">
        <h2>In the past 7 days, how much pain have you felt?</h2>
        <label><input class="y1a1a3a" type="radio" name="mw2" value="1"><span class="y1a1a3a">None</span></label>
        <label><input class="y1a1a3b" type="radio" name="mw2" value="2"><span class="y1a1a3b">Some</span></label>
        <label><input class="y1a1a3c" type="radio" name="mw2" value="3"><span class="y1a1a3c">A lot</span></label>
    </div>
 
    <div class="y y1a1a4">
        <h2>How would you describe the condition of your mouth and teeth - including false teeth or denture?</h2>
        <label><input class="y1a1a4a" type="radio" name="mw3" value="1"><span class="y1a1a4a">Excellent</span></label>
        <label><input class="y1a1a4b" type="radio" name="mw3" value="2"><span class="y1a1a4b">Very good </span></label>
        <label><input class="y1a1a4c" type="radio" name="mw3" value="3"><span class="y1a1a4c">Good</span></label>
        <label><input class="y1a1a4d" type="radio" name="mw3" value="4"><span class="y1a1a4d">Fair</span></label>
        <label><input class="y1a1a4e" type="radio" name="mw3" value="5"><span class="y1a1a4e">Poor</span></label>
    </div>
 
    <div class="y y1a1a5">
        <h2>How often is stress a problem for you in handling such things as your health, your finances, your family or social relationships, or your work?</h2>
        <label><input class="y1a1a5a" type="radio" name="mw4" value="1"><span class="y1a1a5a">Rarely</span></label>
        <label><input class="y1a1a5b" type="radio" name="mw4" value="2"><span class="y1a1a5b">Sometimes </span></label>
        <label><input class="y1a1a5c" type="radio" name="mw4" value="3"><span class="y1a1a5c">Often</span></label>
        <label><input class="y1a1a5d" type="radio" name="mw4" value="4"><span class="y1a1a5d">Always a bit</span></label>
    </div>
   
    <div class="y y1a1a6">
        <h2>How often do you get the social and emotional support you need?</h2>
        <label><input class="y1a1a6a" type="radio" name="mw5" value="1"><span class="y1a1a6a">Always</span></label>
        <label><input class="y1a1a6b" type="radio" name="mw5" value="2"><span class="y1a1a6b">Usually</span></label>
        <label><input class="y1a1a6c" type="radio" name="mw5" value="3"><span class="y1a1a6c">Sometimes</span></label>
        <label><input class="y1a1a6d" type="radio" name="mw5" value="4"><span class="y1a1a6d">Fair</span></label>
        <label><input class="y1a1a6e" type="radio" name="mw5" value="5"><span class="y1a1a6e">Poor</span></label>
    </div>
 
    <div class="y y1a1a7">
        <h2>How many hours of sleep do you get each night?</h2>
        <label><input class="y1a1a7a" type="radio" name="mw6" value="1"><span class="y1a1a7a">7 or more</span></label>
        <label><input class="y1a1a7b" type="radio" name="mw6" value="2"><span class="y1a1a7b">4 - 6</span></label>
        <label><input class="y1a1a7c" type="radio" name="mw6" value="3"><span class="y1a1a7c">0 - 3</span></label>
    </div>
 
    <div class="y y1a1a8">
        <h2>In the past 7 days, how often have you felt sleepy during the daytime?</h2>
        <label><input class="y1a1a8a" type="radio" name="mw7" value="1"><span class="y1a1a8a">Never</span></label>
        <label><input class="y1a1a8b" type="radio" name="mw7" value="2"><span class="y1a1a8b">Rarely</span></label>
        <label><input class="y1a1a8c" type="radio" name="mw7" value="3"><span class="y1a1a8c">Sometimes</span></label>
        <label><input class="y1a1a8d" type="radio" name="mw7" value="4"><span class="y1a1a8d">Usually</span></label>
        <label><input class="y1a1a8e" type="radio" name="mw7" value="5"><span class="y1a1a8e">Always</span></label>
    </div>
 
    <div class="y y1a1a9">
        <h2>Do you snore or has anyone told you that you snore? </h2>
        <label><input class="y1a1a9a" type="radio" name="mw8" value="1"><span class="y1a1a9a">Yes</span></label>
        <label><input class="y1a1a9b" type="radio" name="mw8" value="2"><span class="y1a1a9b">No</span></label>
    </div>

    <div class="y y1a1a10">
        <h2>Do you always fasten your seatbelt when you are in a car?</h2>
        <label><input class="y1a1a10a" type="radio" name="mw9" value="1"><span class="y1a1a10a">Yes</span></label>
        <label><input class="y1a1a10b" type="radio" name="mw9" value="2"><span class="y1a1a10b">No</span></label>
    </div>
 
    <div class="y y1a1a11">
        <h2>Do you use tobacco?</h2>
        <label><input class="y1a1a11a" type="radio" name="mw10" value="1"><span class="y1a1a11a">Yes</span></label>
        <label><input class="y1a1a11b" type="radio" name="mw10" value="2"><span class="y1a1a11b">No</span></label>
    </div>
 
    <div class="y y1a1a12">
        <h2>Do you use alcohol?
        </h2>
        <label><input class="y1a1a12a" type="radio" name="mw11" value="1"><span class="y1a1a12a">Yes</span></label>
        <label><input class="y1a1a12b" type="radio" name="mw11" value="2"><span class="y1a1a12b">No</span></label>
    </div>
 
    <div class="y y1a1a13"><h2> Over the past 2 weeks, how often have you been bothered by Little interest or pleasure in doing things?             </h2><label><input class="y1a1a13a"type = "radio" name="phq9_1"value="0"><span class="y1a1a13a">Not at all</span></label><label><input class="y1a1a13b"type = "radio" name="phq9_1"value="1"><span class="y1a1a13b">Several Days</span></label><label><input class="y1a1a13c"type = "radio" name="phq9_1"value="2"><span class="y1a1a13c">More than half the days</span></label><label><input class="y1a1a13d"type = "radio" name="phq9_1"value="3"><span class="y1a1a13d">Nearly every day</span></label></div>
   
    <div class="y y1a1a14"><h2> Over the past 2 weeks, how often have you been bothered by Feeling down, depressed, or hopeless?                    </h2><label><input class="y1a1a14a"type = "radio" name="phq9_2"value="0"><span class="y1a1a14a">Not at all</span></label><label><input class="y1a1a14b"type = "radio" name="phq9_2"value="1"><span class="y1a1a14b">Several Days</span></label><label><input class="y1a1a14c"type = "radio" name="phq9_2"value="2"><span class="y1a1a14c">More than half the days</span></label><label><input class="y1a1a14d"type = "radio" name="phq9_2"value="3"><span class="y1a1a14d">Nearly every day</span></label></div>
   
    <div class="y y1a1a15"><h2> Over the past 2 weeks, how often have you been bothered by Trouble falling or staying asleep, or sleeping too much? </h2><label><input class="y1a1a15a"type = "radio" name="phq9_3"value="0"><span class="y1a1a15a">Not at all</span></label><label><input class="y1a1a15b"type = "radio" name="phq9_3"value="1"><span class="y1a1a15b">Several Days</span></label><label><input class="y1a1a15c"type = "radio" name="phq9_3"value="2"><span class="y1a1a15c">More than half the days</span></label><label><input class="y1a1a15d"type = "radio" name="phq9_3"value="3"><span class="y1a1a15d">Nearly every day</span></label></div>
   
    <div class="y y1a1a16"><h2> Over the past 2 weeks, how often have you been bothered by Feeling tired or having little energy?                   </h2><label><input class="y1a1a16a"type = "radio" name="phq9_4"value="0"><span class="y1a1a16a">Not at all</span></label><label><input class="y1a1a16b"type = "radio" name="phq9_4"value="1"><span class="y1a1a16b">Several Days</span></label><label><input class="y1a1a16c"type = "radio" name="phq9_4"value="2"><span class="y1a1a16c">More than half the days</span></label><label><input class="y1a1a16d"type = "radio" name="phq9_4"value="3"><span class="y1a1a16d">Nearly every day</span></label></div>
   
    <div class="y y1a1a17"><h2> Over the past 2 weeks, how often have you been bothered by Poor appetite or overeating?                             </h2><label><input class="y1a1a17a"type = "radio" name="phq9_5"value="0"><span class="y1a1a17a">Not at all</span></label><label><input class="y1a1a17b"type = "radio" name="phq9_5"value="1"><span class="y1a1a17b">Several Days</span></label><label><input class="y1a1a17c"type = "radio" name="phq9_5"value="2"><span class="y1a1a17c">More than half the days</span></label><label><input class="y1a1a17d"type = "radio" name="phq9_5"value="3"><span class="y1a1a17d">Nearly every day</span></label></div>
   
    <div class="y y1a1a18"><h2> Over the past 2 weeks, how often have you been bothered by Feeling bad about yourself — or that you are a failure or have let yourself or your family down?</h2><label><input class="y1a1a18a"type = "radio" name="phq9_6"value="0"><span class="y1a1a18a">Not at all</span></label><label><input class="y1a1a18b"type = "radio" name="phq9_6"value="1"><span class="y1a1a18b">Several Days</span></label><label><input class="y1a1a18c"type = "radio" name="phq9_6"value="2"><span class="y1a1a18c">More than half the days</span></label><label><input class="y1a1a18d"type = "radio" name="phq9_6"value="3"><span class="y1a1a18d">Nearly every day</span></label></div>
   
    <div class="y y1a1a19"><h2> Over the past 2 weeks, how often have you been bothered by Trouble concentrating on things, such as reading the newspaper or watching television?</h2><label><input class="y1a1a19a"type = "radio" name="phq9_7"value="0"><span class="y1a1a19a">Not at all</span></label><label><input class="y1a1a19b"type = "radio" name="phq9_7"value="1"><span class="y1a1a19b">Several Days</span></label><label><input class="y1a1a19c"type = "radio" name="phq9_7"value="2"><span class="y1a1a19c">More than half the days</span></label><label><input class="y1a1a19d"type = "radio" name="phq9_7"value="3"><span class="y1a1a19d">Nearly every day</span></label></div>
   
    <div class="y y1a1a20"><h2> Over the past 2 weeks, how often have you been bothered by Moving or speaking so slowly that other people could have noticed? Or so fidgety or restless that you have been moving a lot more than usual?</h2><label><input class="y1a1a20a"type = "radio" name="phq9_8"value="0"><span class="y1a1a20a">Not at all</span></label><label><input class="y1a1a20b"type = "radio" name="phq9_8"value="1"><span class="y1a1a20b">Several Days</span></label><label><input class="y1a1a20c"type = "radio" name="phq9_8"value="2"><span class="y1a1a20c">More than half the days</span></label><label><input class="y1a1a20d"type = "radio" name="phq9_8"value="3"><span class="y1a1a20d">Nearly every day</span></label></div>
   
    <div class="y y1a1a21"><h2> Over the past 2 weeks, how often have you been bothered by Thoughts that you would be better off dead, or thoughts of hurting yourself in some way?</h2><label><input class="y1a1a21a"type = "radio" name="phq9_9"value="0"><span class="y1a1a21a">Not at all</span></label><label><input class="y1a1a21b"type = "radio" name="phq9_9"value="1"><span class="y1a1a21b">Several Days</span></label><label><input class="y1a1a21c"type = "radio" name="phq9_9"value="2"><span class="y1a1a21c">More than half the days</span></label><label><input class="y1a1a21d"type = "radio" name="phq9_9"value="3"><span class="y1a1a21d">Nearly every day</span></label></div>
   
    <div class="y y1a1a22"><h2>Do you have trouble hearling the television or radio when others do not?</h2><label><input class="y1a1a22a" type="radio" name="mw12" value="Yes"><span class="y1a1a22a">Yes</span></label><label><input class="y1a1a22b" type="radio" name="mw12" value="No"><span class="y1a1a22b">No</span></label></div>
   
    <div class="y y1a1a23"><h2>Do you have to strain or struggle to hear/understand conversation?</h2><label><input class="y1a1a23a" type="radio" name="mw13" value="Yes"><span class="y1a1a23a">Yes</span></label><label><input class="y1a1a23b" type="radio" name="mw13" value="No"><span class="y1a1a23b">No</span></label></div>
   
    <div class="y y1a1a24"><h2>Do you need help with everyday activities such as eating, getting dressed, gromming, bathing, walking or using the toilet?</h2><label><input class="y1a1a24a" type="radio" name="mw14" value="Yes"><span class="y1a1a24a">Yes</span></label><label><input class="y1a1a24b" type="radio" name="mw14" value="No"><span class="y1a1a24b">No</span></label></div>
   
    <div class="y y1a1a25"><h2>Do you need help preparing meals, transportation, shopping, taking your medicine, bannking, managing your finances, or other daily activities?</h2><label><input class="y1a1a25a" type="radio" name="mw15" value="Yes"><span class="y1a1a25a">Yes</span></label><label><input class="y1a1a25b" type="radio" name="mw15" value="No"><span class="y1a1a25b">No</span></label></div>
   
    <div class="y y1a1a26"><h2>Do you live alone?</h2><label><input class="y1a1a26a" type="radio" name="mw16" value="Yes"><span class="y1a1a26a">Yes</span></label><label><input class="y1a1a26b" type="radio" name="mw16" value="No"><span class="y1a1a26b">No</span></label></div>
   
    <div class="y y1a1a27"><h2>Do you feel you have trouble with memory?</h2><label><input class="y1a1a27a" type="radio" name="mw17" value="Yes"><span class="y1a1a27a">Yes</span></label><label><input class="y1a1a27b" type="radio" name="mw17" value="No"><span class="y1a1a27b">No</span></label></div>
   
    <div class="y y1a1a28"><h2>Do you every have leakage of urine? </h2><label><input class="y1a1a28a" type="radio" name="mw18" value="Yes"><span class="y1a1a28a">Yes</span></label><label><input class="y1a1a28b" type="radio" name="mw18" value="No"><span class="y1a1a28b">No</span></label></div>
   
    <div class="y y1a1a29"><h2>Does your home have throw rugs, poor lighting, or a slippery bathtub/shower?</h2><label><input class="y1a1a29a" type="radio" name="mw19" value="Yes"><span class="y1a1a29a">Yes</span></label><label><input class="y1a1a29b" type="radio" name="mw19" value="No"><span class="y1a1a29b">No</span></label></div>
   
    <div class="y y1a1a30"><h2>Does your home have grab bars in the bathroom, handrails on the steps or stairs?</h2><label><input class="y1a1a30a" type="radio" name="mw20" value="Yes"><span class="y1a1a30a">Yes</span></label><label><input class="y1a1a30b" type="radio" name="mw20" value="No"><span class="y1a1a30b">No</span></label></div>
   
    <div class="y y1a1a31"><h2>Does your home have functioning smoke alarms?</h2><label><input class="y1a1a31a" type="radio" name="mw21" value="Yes"><span class="y1a1a31a">Yes</span></label><label><input class="y1a1a31b" type="radio" name="mw21" value="No"><span class="y1a1a31b">No</span></label></div>
   
    <div class="y y1a1a32"><h2>Do you eat 3-5 servings of fruits/vegetables every day?</h2><label><input class="y1a1a32a" type="radio" name="mw22" value="Yes"><span class="y1a1a32a">Yes</span></label><label><input class="y1a1a32b" type="radio" name="mw22" value="No"><span class="y1a1a32b">No</span></label></div>
   
    <div class="y y1a1a33"><h2>Do you eat 2-3 servings of high-fiber or whole grain foods daily? (whole wheat bread, cooked cereal, brown rice or whole wheat pasta, whole-grain or high fiber cereal)</h2><label><input class="y1a1a33a" type="radio" name="mw23" value="Yes"><span class="y1a1a33a">Yes</span></label><label><input class="y1a1a33b" type="radio" name="mw23" value="No"><span class="y1a1a33b">No</span></label></div>
   
    <div class="y y1a1a34"><h2>Do you eat more than one serving of fried or high-fat foods daily? (fried meat or fish, french fries, potato chips, foods made with whole milk, cream cheese, or mayonnaise)</h2><label><input class="y1a1a34a" type="radio" name="mw24" value="Yes"><span class="y1a1a34a">Yes</span></label><label><input class="y1a1a34b" type="radio" name="mw24" value="No"><span class="y1a1a34b">No</span></label></div>
   
    <div class="y y1a1a35"><h2>Do you get light (stretching or slow walking) or moderate (brisk walking) exercise at least 3 times per week?</h2><label><input class="y1a1a35a" type="radio" name="mw25" value="Yes"><span class="y1a1a35a">Yes</span></label><label><input class="y1a1a35b" type="radio" name="mw25" value="No"><span class="y1a1a35b">No</span></label></div>
       
<!-- MA interview-->
    <div class="y y1a2">
        <h2>You've finished self health report. <br> Please pass the ipad to Medical Assistant.</h2>
        <h1 class="y1a2a">Start MA interview</h1>
    </div>

    <div class="y y1a1a1c1a1">
        <h2>Patient's BMI > 30?</h2> 
        <label><input class="y1a1a1c1a1a" type="radio" name="cervicalca" value="3"><span class="y1a1a1c1a1a">Yes</span></label>
        <label><input class="y1a1a1c1a1b" type="radio" name="cervicalca" value=""><span class="y1a1a1c1a1b">No</span></label>
    </div>

    <div class="y y1a1a1c1a1b1">
        <h2>Does patient want Pap Smear today in this office? or want referral to OBGYN?  </h2> 
        <label><input class="y1a1a1c1a1b1a" type="radio" name="cervicalca" value="4"><span class="y1a1a1c1a1b1a">Today</span></label>
        <label><input class="y1a1a1c1a1b1b" type="radio" name="cervicalca" value="5"><span class="y1a1a1c1a1b1b">OBGYN</span></label>
    </div>
     
    <div class="y y1a1a1m1a1"><!-- pneumonia -->
        <h2>History of impaired splenic infarct, cochlear implant, CSF leakage, or invasive pneumococcal infection?</h2>
        <label><input class="y1a1a1m1a1a" type="radio" name="pnavax" value="2"><span class="y1a1a1m1a1a">Yes </span></label>
        <label><input class="y1a1a1m1a1b" type="radio" name="" value=""><span class="y1a1a1m1a1b">No</span></label>
    </div>

    <div class="y y1a1a1m1b1">
        <h2>Previous PPSV23 Hx?</h2>
        <label><input class="y1a1a1m1b1a" type="radio" name="pnavax" value="11"><span class="y1a1a1m1b1a">Yes, > 10 years ago</span></label>
        <label><input class="y1a1a1m1b1b" type="radio" name="pnavax" value="10"><span class="y1a1a1m1b1b">Yes, 5-10 years ago</span></label>
        <label><input class="y1a1a1m1b1c" type="radio" name="" value=""><span class="y1a1a1m1b1c">Yes, < 5 years ago</span></label>
        <label><input class="y1a1a1m1b1d" type="radio" name="pnavax" value="12"><span class="y1a1a1m1b1d">Yes, year unknown.</span></label>
        <label><input class="y1a1a1m1b1e" type="radio" name="pnavax" value="12"><span class="y1a1a1m1b1e">Never or don't know.</span></label>
    </div>

    <div class="y y1a1a1m1b1c1">
        <h2>Previous PCV13?</h2>
        <label><input class="y1a1a1m1b1b1a" type="radio" name="pnavax" value="14"><span class="y1a1a1m1b1c1a">yes</span></label>
        <label><input class="y1a1a1m1b1b1b" type="radio" name="pnavax" value="9"><span class="y1a1a1m1b1b1b">no</span></label>
    </div>

    <div class="y y1a1a1m1b1b1b1">
        <h2>Any of following? <br>
            immunocompromise, <br>
            asplenia, <br>
            cerebrospinal fluid leak, <br>
            cochlear implant, <br>
            history invasive pneumococcal disease<br>
            chronic cardiac, lung, <br>
            liver disease, <br>
            diabetes mellitus, <br>
            smoking, <br>
            alcohol use disorder</h2>
        <label><input class="y1a1a1m1b1b1b1a" type="radio" name="pnavax" value="13"><span class="y1a1a1m1b1b1b1a">Yes</span></label>
        <label><input class="y1a1a1m1b1b1b1b" type="radio" name="pnavax" value="14"><span class="y1a1a1m1b1b1b1b">No</span></label>
    </div>

    <div class="y y1a1a1m1a1a1">
        <h2>MD will decide after encounter</h2>
        <label><input class="y1a1a1m1a1a1a" type="radio" name="" value=""><span class="y1a1a1m1a1a1a">Next</span></label>
    </div>

    <div class="y y1a1a1m1a1b1">
        <h2>Immunocompromised (e.g. CKD)?</h2>
        <label><input class="y1a1a1m1a1b1a" type="radio" name="" value=""><span class="y1a1a1m1a1b1a">Yes </span></label>
        <label><input class="y1a1a1m1a1b1b" type="radio" name="" value=""><span class="y1a1a1m1a1b1b">No</span></label>
    </div>

    <div class="y y1a1a1m1a1b1a1">
        <h2>Previous PCV13 Hx?</h2>
        <label><input class="y1a1a1m1a1b1a1a" type="radio" name="" value=""><span class="y1a1a1m1a1b1a1a">yes</span></label>
        <label><input class="y1a1a1m1a1b1a1b" type="radio" name="pnavax" value="3"><span class="y1a1a1m1a1b1a1b">no</span></label>
    </div>

    <div class="y y1a1a1m1a1b1a1a1">
        <h2>Previous PPSV23 with in 5 years?</h2>
        <label><input class="y1a1a1m1a1b1a1a1a" type="radio" name="pnavax" value="4"><span class="y1a1a1m1a1b1a1a1a">yes</span></label>
        <label><input class="y1a1a1m1a1b1a1a1b" type="radio" name="pnavax" value="5"><span class="y1a1a1m1a1b1a1a1b">no</span></label>
    </div>

    <div class="y y1a1a1m1a1b1b1">
        <h2>Hx of Chronic heart disease, chronic lung disease, chronic liver disease, DM, alcoholism, or current smoker?</h2>
        <label><input class="y1a1a1m1a1b1b1a" type="radio" name="" value=""><span class="y1a1a1m1a1b1b1a">yes</span></label>
        <label><input class="y1a1a1m1a1b1b1b" type="radio" name="pnavax" value="6"><span class="y1a1a1m1a1b1b1b">no</span></label>
    </div>

    <div class="y y1a1a1m1a1b1b1a1">
        <h2>PPSV23 with in 10 years?</h2>
        <label><input class="y1a1a1m1a1b1b1a1a" type="radio" name="pnavax" value="7"><span class="y1a1a1m1a1b1b1a1a">yes</span></label>
        <label><input class="y1a1a1m1a1b1b1a1b" type="radio" name="pnavax" value="8"><span class="y1a1a1m1a1b1b1a1b">no</span></label>
    </div>

<!-- Submit -->

    <div class="y y1a4">
        <h2>All set! Please follow next steps</h2>
        <input type="submit" class="writenote" value="View Next Steps"></input>
    </div>

 </form>
    <script
    src="https://code.jquery.com/jquery-3.2.1.min.js"
    integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
    crossorigin="anonymous"></script>
    <script src='index.js'></script> 

 
    </body>
</html>
 

