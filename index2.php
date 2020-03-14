<?php
 
//[Patient Appointment Information]
        if(isset($_REQUEST['app_time'])){echo "<h3>[Patient Appointment Information]</h3>Time: " . $_POST['app_time'] . "<br>";};
        if(isset($_REQUEST['app_type'])){echo "Type: " . $_POST['app_type'] . "<br>";};
        
//Medicare Wellness HSA
        if(isset($_POST['app_type'])) {if ($_POST['app_type'] == "Medicare Wellness") {echo "<h3>[HRA]</h3>";} 
        }
        
        if(isset($_POST['mw1'])) {
            if ($_POST['mw1'] == "1") {echo "Excellent subjective general health.<br>";}
            elseif ($_POST['mw1'] == "2") {echo "Subjective general health: Very good<br>";}
            elseif ($_POST['mw1'] == "3") {echo "Subjective general health: Good<br>";}
            elseif ($_POST['mw1'] == "4") {echo "Subjective general health: Fair<br>";}
            elseif ($_POST['mw1'] == "5") {echo "<font color = red> Subjective general health: Poor<font color = black><br>";} 
        }
 
        if(isset($_POST['mw2'])) {
            if ($_POST['mw2'] == "1") {echo "Subjective pain in past 7 days: None <br>";}
            elseif ($_POST['mw2'] == "2") {echo "Subjective pain in past 7 days: Some<br>";}
            elseif ($_POST['mw2'] == "3") {echo "<font color = red> Subjective pain in past 7 days: A lot  <font color=black><br>";} 
        }
 
        if(isset($_REQUEST['mw14'])){echo"Trouble hearling the television or radio: " . $_POST['mw14'];};
        
        if(isset($_POST['mw3'])) {
            if ($_POST['mw3'] == "1") {echo "Subjective oral hygiene: Excellent<br>";}
            elseif ($_POST['mw3'] == "2") {echo "Subjective oral hygiene: Very good<br>";}
            elseif ($_POST['mw3'] == "3") {echo "Subjective oral hygiene: Goo<br>d";}
            elseif ($_POST['mw3'] == "4") {echo "Subjective oral hygiene: Fair<br>";}
            elseif ($_POST['mw3'] == "5") {echo "<font color=red> Subjective oral hygiene: Poor <font color = black><br>";} 
        }
 
        if(isset($_POST['mw4'])) {
            if ($_POST['mw4'] == "1") {echo "Stress frequency :Rarely<br>";}
            elseif ($_POST['mw4'] == "2") {echo "Stress frequency :Sometimes<br>";}
            elseif ($_POST['mw4'] == "3") {echo "Stress frequency :Often<br>";}
            elseif ($_POST['mw4'] == "4") {echo "<font color=red> Stress frequency: Always<font color = black>";} 
        }
 
        if(isset($_POST['mw5'])) {
            if ($_POST['mw5'] == "1") {echo "Social & Emotional support availability: Always<br>";}
            elseif ($_POST['mw5'] == "2") {echo "Social & Emotional support availability: Usually<br>";}
            elseif ($_POST['mw5'] == "3") {echo "Social & Emotional support availability: Sometimes<br>";}
            elseif ($_POST['mw5'] == "4") {echo "Social & Emotional support availability: Fair<br>";}
            elseif ($_POST['mw5'] == "5") {echo "<font color=red> Social & Emotional support availability: Poor<font color = black><br>";} 
        }
 
        if(isset($_POST['mw6'])) {
            if ($_POST['mw6'] == "1") {echo "Sleep hours: 7 or more<br>";}
            elseif ($_POST['mw6'] == "2") {echo "Sleep hours: 43561<br>";}
            elseif ($_POST['mw6'] == "3") {echo "<font color=red> Sleep hours: <font color = black>0-3<br>";} 
        }
 
        if(isset($_POST['mw7'])) {
            if ($_POST['mw7'] == "1") {echo "Daytime sleepiness:Never<br>";}
            elseif ($_POST['mw7'] == "2") {echo "Daytime sleepiness:Rarely<br>";}
            elseif ($_POST['mw7'] == "3") {echo "Daytime sleepiness:Sometimes<br>";}
            elseif ($_POST['mw7'] == "4") {echo "Daytime sleepiness:Usually<br>";}
            elseif ($_POST['mw7'] == "5") {echo "<font color=red> Daytime sleepiness: <font color = black>Always<br>";} 
        }
 
        if(isset($_POST['mw8'])) {
            if ($_POST['mw8'] == "1") {echo "Snore: Yes<br>";}
            elseif ($_POST['mw8'] == "2") {echo "Snore:No<br>";} 
        }
 
        if(isset($_POST['mw9'])) {
            if ($_POST['mw9'] == "1") {echo "Fasten seatbelt: Yes<br>";}
            elseif ($_POST['mw9'] == "2") {echo "Fasten seatbelt:No<br>";} 
        }
 
        if(isset($_POST['mw10'])) {
            if ($_POST['mw10'] == "1") {echo "Tobacco use: Yes<br>";}
            elseif ($_POST['mw10'] == "2") {echo "Tobacco use: No<br>";} 
        }
 
        if(isset($_POST['mw11'])) {
            if ($_POST['mw11'] == "1") {echo "Alcohol use: Yes<br>";}
            elseif ($_POST['mw11'] == "2") {echo "Alcohol use: No<br>";} 
        }
 
        if(isset($_POST['phq9_1'])) {
            function sum($n1, $n2, $n3, $n4, $n5, $n6, $n7, $n8, $n9){return $n1 + $n2 + $n3 + $n4 + $n5 + $n6 + $n7 + $n8 + $n9;}
            echo "PHQ9: " . sum ($_POST['phq9_1'], $_POST['phq9_2'], $_POST['phq9_3'], $_POST['phq9_4'], $_POST['phq9_5'], $_POST['phq9_6'], $_POST['phq9_7'], $_POST['phq9_8'], $_POST['phq9_9']) . "<br>";
        };
 
        if(isset($_POST['mw12'])) {
            if ($_POST['mw12'] == "1") {echo "Trouble hearling the television or radio: Yes<br>";}
            elseif ($_POST['mw12'] == "2") {echo "<font color=red> Trouble hearling the television or radio: No<font color = black><br>";} 
        }
 
        if(isset($_POST['mw13'])) {
            if ($_POST['mw13'] == "1") {echo "Strain or struggle to hear/understand conversation: Yes<br>";}
            elseif ($_POST['mw13'] == "2") {echo "<font color=red> Strain or struggle to hear/understand conversation:No <font color = black><br>";} 
        }   
 
        if(isset($_REQUEST['mw12'])){echo"Trouble hearing the television or radio: " . $_POST['mw12'] . "<br>";};
     
        if(isset($_REQUEST['mw13'])){echo"Strain or struggle to hear/understand conversation: " . $_POST['mw13'] . "<br>";};
     
        if(isset($_REQUEST['mw14'])){echo"Need help with basic everyday activities: " . $_POST['mw14'] . "<br>";};
     
        if(isset($_REQUEST['mw15'])){echo"Need help with complicated daily activities: " . $_POST['mw15'] . "<br>";};
     
        if(isset($_REQUEST['mw16'])){echo"Live alone?: " . $_POST['mw16'] . "<br>";};
     
        if(isset($_REQUEST['mw17'])){echo"Subjective trouble with memory: " . $_POST['mw17'] . "<br>";};
     
        if(isset($_REQUEST['mw18'])){echo"Leakage of urine? : " . $_POST['mw18'] . "<br>";};
     
        if(isset($_REQUEST['mw19'])){echo"Poor house environment: " . $_POST['mw19'] . "<br>";};
     
        if(isset($_REQUEST['mw20'])){echo"Home grab bars, handrails: " . $_POST['mw20'] . "<br>";};
     
        if(isset($_REQUEST['mw21'])){echo"Home functioning smoke alarms: " . $_POST['mw21'] . "<br>";};
     
        if(isset($_REQUEST['mw22'])){echo"Eat 3-5 fruits/vegetables every day: " . $_POST['mw22'] . "<br>";};
     
        if(isset($_REQUEST['mw23'])){echo"Eat 2-3 high-fiber or whole grain foods: " . $_POST['mw23'] . "<br>";};
     
        if(isset($_REQUEST['mw24'])){echo"Eat more than one fried or high-fat foods: " . $_POST['mw24'] . "<br>";};
     
        if(isset($_REQUEST['mw25'])){echo"Light or moderate exercise at least 3 times per week?: " . $_POST['mw25'] . "<br>";};
  
//[Steps for MA]
        if(isset($_REQUEST['app_time'])){echo "<h3>[Steps for MA]</h3>";}
 
        if(isset($_POST['Colonca'])) {
            if ($_POST['Colonca'] == "1") {echo "Offer GI office number for colonoscopy, instruct scheduling process<br>";}
            elseif ($_POST['Colonca'] == "2") {echo "Prepare ColoGuard conset form, instruct sampling process<br>";}
            elseif ($_POST['Colonca'] == "3") {echo "Instruct FIT sampling process<br>";} 
        }    
            
        if(isset($_POST['breastca'])) {
            if ($_POST['breastca'] == "1") {echo "Offer patient mammogram scheduling center number, instruct scheduling.<br>";}    
        }    
 
        if(isset($_POST['DMurine'])) {
            if ($_POST['DMurine'] == "1") {echo "Order urine microalbumin/Cr test; instruct patient sampling process<br>";} 
        }
 
        if(isset($_POST['pod'])) {
            if ($_POST['pod'] == "1") {echo "Patient reports DM podiatry visit. Obtain record, update in the Epic.<br>";}
            elseif ($_POST['pod'] == "2") {echo "Offer podiatry contact information for DM-foot, instruct scheduling process.<br>";} 
        }
 
        if(isset($_POST['DMopth'])) {
            if ($_POST['DMopth'] == "1") {echo "Patient reports DM opthalmology visit. Obtain record, update in the Epic.<br>";}
            elseif ($_POST['DMopth'] == "2") {echo "Offer opthalmology contact information for DM-eye, instruct scheduling process.<br>";} 
        }   
 
        if(isset($_POST['shingrix'])) {
            if ($_POST['shingrix'] == "1") {echo "Prepare Shingrix.<br>";}
            elseif ($_POST['shingrix'] == "5") {echo "Patient reports Shingrix injection history. Please update record in Epic. <br>";}
            elseif ($_POST['shingrix'] == "6") {echo "Patient reports Shingrix injection history. Please update record in Epic.<br>";} 
        }    
        
        if(isset($_POST['flu'])) {
            if ($_POST['flu'] == "1") {echo "Patient reports Flu injection history. Please update record in Epic.<br>";}            
            elseif ($_POST['flu'] == "2") {echo "Administer Flu <br>";} 
        }
 
        if(isset($_POST['td'])) {
            if ($_POST['td'] == "1") {echo "Prepare Tdap<br>";}
            elseif ($_POST['td'] == "3") {echo "Patient reports Td vaccination with in 10 years. Update record in Epic.<br>";}
            elseif ($_POST['td'] == "4") {echo "Prepare Td<br>";} 
        }
 
        if(isset($_POST['cervicalca'])) {
            if ($_POST['cervicalca'] == "4") {echo "Prepare Pap Smear<br>";}
            elseif ($_POST['cervicalca'] == "6") {echo "Patient reports Shingrix injection history. Please update record in Epic.<br>";} 
        }
 
        if(isset($_POST['pnavax'])) {
            if ($_POST['pnavax'] == "3") {echo "Prepare PCV13";}
            elseif ($_POST['pnavax'] == "4") {echo "Missing pneumonia vaccine Hx. Update record in Epic<br>";}
            elseif ($_POST['pnavax'] == "5") {echo "Prepare PPSV 23<br>";}
            elseif ($_POST['pnavax'] == "8") {echo "Prepare PPSV23<br>";}
            elseif ($_POST['pnavax'] == "9") {echo "Obtain previous pneumonia vaccine Hx, update Epic.<br>";}
            elseif ($_POST['pnavax'] == "10") {echo "Prepare PPSV23<br>";}
            elseif ($_POST['pnavax'] == "12") {echo "Prepare PPSV23<br>";}
            elseif ($_POST['pnavax'] == "13") {echo "Prepare PCV13<br>";}
            elseif ($_POST['pnavax'] == "14") {echo "Obtain previous pneumonia vaccine Hx, update Epic.<br>";} 
        }
 
        echo "Call MD.<br>";
 
//[Steps for MD]
        if(isset($_REQUEST['app_time'])){echo "<h3>[Steps for MD]</h3>";}
 
        if(isset($_POST['Colonca'])) {
            if ($_POST['Colonca'] == "1") {echo "<br>";}
            elseif ($_POST['Colonca'] == "2") {echo "Obtain ColoGuard consent.<br>";}
            elseif ($_POST['Colonca'] == "5") {echo "Explan about CRC screen.<br>";} 
        }

        if(isset($_POST['breastca'])) {
            if ($_POST['breastca'] == "1") {echo "Order Mammogram<br>";}
            elseif ($_POST['breastca'] == "3") {echo "Explain mammogram.<br>";}
        }

        if(isset($_POST['cervicalca'])) {
            if ($_POST['cervicalca'] == "3") {echo "Explain Pap Smear.<br>";}
        }
 
        if(isset($_POST['hcv'])) {
            if ($_POST['hcv'] == "abc") {echo "Place an HCV order<br>";} 
        }
            
        if(isset($_POST['hba1c'])) {
            if ($_POST['hba1c'] == "1") {echo "Order HbA1c<br>";} 
        }
 
        if(isset($_POST['shingrix'])) {
            if ($_POST['shingrix'] == "1") {echo "Order Shingrix. <br>";} 
        }
 
        if(isset($_POST['td'])) {
            if ($_POST['td'] == "1") {echo "Order Tdap<br>";}
            elseif ($_POST['td'] == "4") {echo "Order Td<br>";} 
        }
 
        if(isset($_POST['cervicalca'])) {
            if ($_POST['cervicalca'] == "2") {echo "Explain Pap Smear.<br>";}
            elseif ($_POST['cervicalca'] == "4") {echo "Perform Pap Smear<br>";} 
        }
 
        if(isset($_POST['pnavax'])) {
            if ($_POST['pnavax'] == "2") {echo "Needs Medical Hx review for pneumonia vaccination<br>";}
            elseif ($_POST['pnavax'] == "3") {echo "Order PCV13<br>";}
            elseif ($_POST['pnavax'] == "5") {echo "Order PPSV23<br>";}
            elseif ($_POST['pnavax'] == "8") {echo "Order PPSV23<br>";}
            elseif ($_POST['pnavax'] == "10") {echo "Order PPSV23<br>";}
            elseif ($_POST['pnavax'] == "11") {echo "Order PPSV23<br>";}
            elseif ($_POST['pnavax'] == "12") {echo "Order PPSV23<br>";}
            elseif ($_POST['pnavax'] == "13") {echo "Order PCV13<br>";} 
        }
 
//[Unsatisfied Health Maintenance]
        if(isset($_REQUEST['app_time'])){echo "<h3>[Unsatisfied Health Maintenance]</h3>";}
            
        if(isset($_POST['Colonca'])) {
            if ($_POST['Colonca'] == "1") {echo "CRC: colonoscopy scheduling instruction given.<br>";}
            elseif ($_POST['Colonca'] == "2") {echo "CRC: will obtain ColoGuard sample<br>";}
            elseif ($_POST['Colonca'] == "3") {echo "CRC: will obtain FIT sample<br>";}
            elseif ($_POST['Colonca'] == "4") {echo "CRC: declined all tests<br>";} 
        } 
        if(isset($_POST['breastca'])) {
            if ($_POST['breastca'] == "1") {echo "Mammography: Ordered today.<br>";}
            elseif ($_POST['breastca'] == "2") {echo "Mammography: Declined<br>";}
        }
        if(isset($_POST['cervicalca'])) {
            if ($_POST['cervicalca'] == "2") {echo "Pap Smear; Declined<br>";}
        }
 
        if(isset($_POST['hcv'])) {
             if ($_POST['hcv'] == "2") {echo "HCV; Declined<br>";} 
        }
 
        if(isset($_POST['DMurine'])) {
            if ($_POST['DMurine'] == "1") {echo "DM-urine; ordered on " . date("m-d-Y") . ".<br>";}
            elseif ($_POST['DMurine'] == "2") {echo "DM-urine; Declined<br>";} }
 
        if(isset($_POST['pod'])) {
            if ($_POST['pod'] == "1") {echo "DM-foot: Record missing, team will obtain record.<br>";}
            elseif ($_POST['pod'] == "2") {echo "DM-foot: Scheduling instruction given to patient today<br>";} }
        
        if(isset($_POST['DMopth'])) {
            if ($_POST['DMopth'] == "1") {echo "DM-eye: Record missing, team will obtain record.<br>";}
            elseif ($_POST['DMopth'] == "2") {echo "DM-eye: Scheduling instruction given to patient today<br>";} }
        
        if(isset($_POST['shingrix'])) {
            if ($_POST['shingrix'] == "1") {echo "Shingle: Administered on" . date("m-d-Y") . "<br>";}
            elseif ($_POST['shingrix'] == "2") {echo "Single: Declined";}
            elseif ($_POST['shingrix'] == "5") {echo "Shingle: Needs record update. <br>";}
            elseif ($_POST['shingrix'] == "6") {echo "Shingle: Needs record update. <br>";}
            elseif ($_POST['shingrix'] == "7") {echo "Shingle: Waiting for record update by patient. <br>";}
            elseif ($_POST['shingrix'] == "8") {echo "Shingle: Waiting for insurance coverage check by patient<br>";} }
 
        if(isset($_POST['flu'])) {
            if ($_POST['flu'] == "1") {echo "Flu: Need record update in Epic.<br>";}
            elseif ($_POST['flu'] == "2") {echo "Flu: Administered on " . date("m-d-Y") . "<br>";}
            elseif ($_POST['flu'] == "3") {echo "Flu: Declined.<br>";} }
 
        if(isset($_POST['td'])) {
            if ($_POST['td'] == "1") {echo "Tetanus: Tdap on " . date("m-d-Y") . "<br>";}
            elseif ($_POST['td'] == "2") {echo "Tetanus: Declined<br>";}
            elseif ($_POST['td'] == "3") {echo "Tetanus: Update. Needs update in the system.<br>";}
            elseif ($_POST['td'] == "4") {echo "Tetanus: Td on " . date("m-d-Y") . "<br>";} }
 
        if(isset($_POST['pnavax'])) {
            if ($_POST['pnavax'] == "1") {echo "Pneumonia: Declined<br>";} }
 
        if(isset($_POST['cervicalca'])) {
            if ($_POST['cervicalca'] == "1") {echo "Pap Smear: Declined<br>";}
            elseif ($_POST['cervicalca'] == "3") {echo "Pap Smear: OBGYN referral on: " . date("m-d-Y") . "<br>";}
            elseif ($_POST['cervicalca'] == "4") {echo "Pap Smear: Performed on: " . date("m-d-Y") . "<br>";}
            elseif ($_POST['cervicalca'] == "5") {echo "Pap Smear: OBGYN referral on: " . date("m-d-Y") . "<br>";} }
 
        if(isset($_POST['pnavax'])) {
            if ($_POST['pnavax'] == "1") {echo "Pneumovax: Declined<br>";}
            elseif ($_POST['pnavax'] == "3") {echo "Pneumovax: PCV13 today.<br>";}
            elseif ($_POST['pnavax'] == "4") {echo "Pneumovax: Uptodate, need record update.<br>";}
            elseif ($_POST['pnavax'] == "5") {echo "Pneumovax: PPSV23 today<br>";}
            elseif ($_POST['pnavax'] == "6") {echo "Pneumovax: Uptodate.<br>";}
            elseif ($_POST['pnavax'] == "7") {echo "Pneumovax: Uptodate.<br>";}
            elseif ($_POST['pnavax'] == "8") {echo "Pneumovax: PPSV23 today.<br>";}
            elseif ($_POST['pnavax'] == "9") {echo "Pneumovax: uptodate, need record update.<br>";}
            elseif ($_POST['pnavax'] == "10") {echo "Pneumovax: PPSV23 today.<br>";}
            elseif ($_POST['pnavax'] == "11") {echo "Pneumovax: PPSV23 today.<br>";}
            elseif ($_POST['pnavax'] == "12") {echo "Pneumovax: PPSV23 today.<br>";}
            elseif ($_POST['pnavax'] == "13") {echo "Pneumovax: PCV13 today.<br>";}
            elseif ($_POST['pnavax'] == "14") {echo "Pneumovax: uptodate, need record update.<br>";} }
 
//[Specialists Involved in Care]
        if(isset($_REQUEST['app_time'])){echo "<h3>[Specialists Involved in Care]</h3>";}
        if(isset($_REQUEST['card'])){echo "Cardiologist(" . $_POST['card'] . ") involved in care. <br>- Last appointment: " . $_POST['cardlastapp'] . ".  <br>- Next appointment: " . $_POST['cardnextapp'] .  ".<br>";}; 
        if(isset($_REQUEST['gi'])){echo "Gastroenterologist(" . $_POST['gi'] . ") involved in care. <br>- Last appointment: " . $_POST['gilastapp'] . ".  <br>- Next appointment: " . $_POST['ginextapp'] .  ".<br>";};
        if(isset($_REQUEST['nephro'])){echo "Nephrologist(" . $_POST['nephro'] . ") involved in care. <br>- Last appointment: " . $_POST['nephrolastapp'] . ".  <br>- Next appointment: " . $_POST['nephronextapp'] .  ".<br>";};  
        if(isset($_REQUEST['pulm'])){echo "Pulmonologist(" . $_POST['pulm'] . ") involved in care. <br>- Last appointment: " . $_POST['pulmlastapp'] . ".  <br>- Next appointment: " . $_POST['pulmnextapp'] .  ".<br>";};  
        if(isset($_REQUEST['ho'])){echo "Hematology/Oncologist(" . $_POST['ho'] . ") involved in care. <br>- Last appointment: " . $_POST['holastapp'] . ".  <br>- Next appointment: " . $_POST['honextapp'] .  ".<br>";};  
        if(isset($_REQUEST['id'])){echo "Infectious Disease Doctor(" . $_POST['id'] . ") involved in care. <br>- Last appointment: " . $_POST['idlastapp'] . ".  <br>- Next appointment: " . $_POST['idnextapp'] .  ".<br>";};  
        if(isset($_REQUEST['rheum'])){echo "Rheumatologist(" . $_POST['rheum'] . ") involved in care. <br>- Last appointment: " . $_POST['rheumlastapp'] . ".  <br>- Next appointment: " . $_POST['rheumnextapp'] .  ".<br>";};  
        if(isset($_REQUEST['endo'])){echo "Endocrinologist(" . $_POST['endo'] . ") involved in care. <br>- Last appointment: " . $_POST['endolastapp'] . ".  <br>- Next appointment: " . $_POST['endonextapp'] .  ".<br>";};  
        if(isset($_REQUEST['ortho'])){echo "Orthopedic doctor(" . $_POST['ortho'] . ") involved in care. <br>- Last appointment: " . $_POST['ortholastapp'] . ".  <br>- Next appointment: " . $_POST['orthonextapp'] .  ".<br>";};  
        if(isset($_REQUEST['pain'])){echo "Pain clinic doctor(" . $_POST['pain'] . ") involved in care. <br>- Last appointment: " . $_POST['painlastapp'] . ".  <br>- Next appointment: " . $_POST['painnextapp'] .  ".<br>";};  
        if(isset($_REQUEST['uro'])){echo "Urologist(" . $_POST['uro'] . ") involved in care. <br>- Last appointment: " . $_POST['urolastapp'] . ".  <br>- Next appointment: " . $_POST['uronextapp'] .  ".<br>";};  
        if(isset($_REQUEST['obgyn'])){echo "OBGYN doctor(" . $_POST['obgyn'] . ") involved in care. <br>- Last appointment: " . $_POST['obgynlastapp'] . ".  <br>- Next appointment: " . $_POST['obgynnextapp'] .  ".<br>";};  
        if(isset($_REQUEST['neuro'])){echo "Neurologist(" . $_POST['neuro'] . ") involved in care. <br>- Last appointment: " . $_POST['neurolastapp'] . ".  <br>- Next appointment: " . $_POST['neuronextapp'] .  ".<br>";};  
        if(isset($_REQUEST['neurosurg'])){echo "Neurosurgeon(" . $_POST['neurosurg'] . ") involved in care. <br>- Last appointment: " . $_POST['neurosurglastapp'] . ".  <br>- Next appointment: " . $_POST['neurosurgnextapp'] .  ".<br>";};  
        if(isset($_REQUEST['opth'])){echo "Opthalmologist(" . $_POST['opth'] . ") involved in care. <br>- Last appointment: " . $_POST['opthlastapp'] . ".  <br>- Next appointment: " . $_POST['opthnextapp'] .  ".<br>";};  
        if(isset($_REQUEST['derm'])){echo "Dermatologist(" . $_POST['derm'] . ") involved in care. <br>- Last appointment: " . $_POST['dermlastapp'] . ".  <br>- Next appointment: " . $_POST['dermnextapp'] .  ".<br>";};  
        if(isset($_REQUEST['ent'])){echo "Ear/nost/throat doctor(" . $_POST['ent'] . ") involved in care. <br>- Last appointment: " . $_POST['entlastapp'] . ".  <br>- Next appointment: " . $_POST['entnextapp'] .  ".<br>";};  
        if(isset($_REQUEST['psych'])){echo "Psychiatrist or Psychologist(" . $_POST['psych'] . ") involved in care. <br>- Last appointment: " . $_POST['psychlastapp'] . ".  <br>- Next appointment: " . $_POST['psychnextapp'] .  ".<br>";};  
        if(isset($_REQUEST['ts'])){echo "Thoracic surgeon(" . $_POST['ts'] . ") involved in care. <br>- Last appointment: " . $_POST['tslastapp'] . ".  <br>- Next appointment: " . $_POST['tsnextapp'] .  ".<br>";};  
        if(isset($_REQUEST['gs'])){echo "General surgeon(" . $_POST['gs'] . ") involved in care. <br>- Last appointment: " . $_POST['gslastapp'] . ".  <br>- Next appointment: " . $_POST['gsnextapp'] .  ".<br>";};  
?>

<br>


  <a href="index.php">Next Patient</a>  
  <?php
require __DIR__ . '/vendor/autoload.php';

/**
 * Returns an authorized API client.
 * @return Google_Client the authorized client object
 */
function getClient()
{
    $client = new Google_Client();
    $client->setApplicationName('Google Docs API PHP Quickstart');
    $client->setScopes(Google_Service_Docs::DOCUMENTS_READONLY);
    $client->setAuthConfig('credentials.json');
    $client->setAccessType('offline');

    // Load previously authorized credentials from a file.
    $credentialsPath = expandHomeDirectory('token.json');
    if (file_exists($credentialsPath)) {
        $accessToken = json_decode(file_get_contents($credentialsPath), true);
    } else {
        // Request authorization from the user.
        $authUrl = $client->createAuthUrl();
        printf("Open the following link in your browser:\n%s\n", $authUrl);
        print 'Enter verification code: ';
        $authCode = trim(fgets(STDIN));

        // Exchange authorization code for an access token.
        $accessToken = $client->fetchAccessTokenWithAuthCode($authCode);

        // Store the credentials to disk.
        if (!file_exists(dirname($credentialsPath))) {
            mkdir(dirname($credentialsPath), 0700, true);
        }
        file_put_contents($credentialsPath, json_encode($accessToken));
        printf("Credentials saved to %s\n", $credentialsPath);
    }
    $client->setAccessToken($accessToken);

    // Refresh the token if it's expired.
    if ($client->isAccessTokenExpired()) {
        $client->fetchAccessTokenWithRefreshToken($client->getRefreshToken());
        file_put_contents($credentialsPath, json_encode($client->getAccessToken()));
    }
    return $client;
}

/**
 * Expands the home directory alias '~' to the full path.
 * @param string $path the path to expand.
 * @return string the expanded path.
 */
function expandHomeDirectory($path)
{
    $homeDirectory = getenv('HOME');
    if (empty($homeDirectory)) {
        $homeDirectory = getenv('HOMEDRIVE') . getenv('HOMEPATH');
    }
    return str_replace('~', realpath($homeDirectory), $path);
}

// Get the API client and construct the service object.
$client = getClient();
$service = new Google_Service_Docs($client);

// Prints the title of the requested doc:
// https://docs.google.com/document/d/195j9eDD3ccgjQRttHhJPymLJUCOUjs-jmwTrekvdjFE/edit
$documentId = '195j9eDD3ccgjQRttHhJPymLJUCOUjs-jmwTrekvdjFE';
$doc = $service->documents->get($documentId);

printf("The document title is: %s\n", $doc->getTitle());
