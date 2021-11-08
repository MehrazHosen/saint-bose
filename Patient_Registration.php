<?php
$host = "localhost";
$user = "root";
$password = "";
$DB = "smr_hospitalw";

$con = mysqli_connect($host,$user, $password, $DB);
    if(!$con){
        echo "DATABASE CONNECTION FAILED";
        exit();
    }
    else{

        if(   (isset($_POST['Patient_id'])) && (isset($_POST['Name'])) && (isset($_POST['Age'])) && (isset($_POST['Mobile'])) && (isset($_POST['Gender'])) && (isset($_POST['Gender'])) && (isset($_POST['Disease']))  && (isset($_POST['Address'])) && (isset($_POST['Blood_group'])) && (isset($_POST['Password']))){
 
            $Patient_id=$_POST['Patient_id'];
            $Name=$_POST['Name'];
            $Age = $_POST['Age'];
            $Mobile = $_POST['Mobile'];
            $Gender = $_POST['Gender'];
            $Disease = $_POST['Disease'];
 
            
            $Address = $_POST['Address'];
            $Blood_group = $_POST['Blood_group'];
            $Password = $_POST['Password'];
 
            $sql = "INSERT INTO `patient` (`Patient_id`,`Name`, `Age`, `Mobile`, `Gender`, `Disease`,`Address`,`Blood_group` ,`Password`) VALUES ('". $Patient_id."', '". $Name ."', '". $Age ."', '". $Mobile ."',  '". $Gender ."', '". $Disease ."',   '". $Address ."', '". $Blood_group ."',  '". $Password ."');";
            if ($con->query($sql) === TRUE) {
                echo "inserted";
            } else {
                echo "not ok";
            }
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="index.php">
    <title>PATIENT REGISTRATION</title>
</head>
<style>
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        background: 100%;
        list-style: none;
        text-decoration: none;
    }

    body {
        background: white;
    }

</style>
<body>
    <div class="LOGINmainContainer">

        <div class="TheContainer">
            <div class="LoginPhpCss">
                <form action="#" method="POST">
                    <h1>PATIENT REGISTRATION</h1>
                    <input class="Patient_id" type="text" name="Patient_id" placeholder="Patient_id" required>
                    <br>
                    <input class="Patient_Name" type="text" name="Name" placeholder="Patient_Name" required>
                    <br>
                    <input class="Age" type="text" name="Age" placeholder="Age" required>
                    <br>
                    <input class="Mobile" type="text" name="Mobile" placeholder="Mobile" required>
                    <br>
                    <input class="Gender" type="text" name="Gender" placeholder="Gender" required>
                    <br>
                    <input class="Disease" type="text" name="Disease" placeholder="Disease" required>
                    <br>
                    <input class="Address" type="text" name="Address" placeholder="Address" required>
                    <br>
                    <input class="Blood_group" type="text" name="Blood_group" placeholder="Blood_group" required>
                    <br>
                    <input class="Password" type="" name="Password" placeholder="Password" required>
                    <br>
                    
                    <input class="LoginSubmitBTNinReg" type="submit" value="CONFIRM">
            </div>
        </form>
    </div>
</div>
</body>
<style>
.LOGINmainContainer{
    padding-right: 40px;
    box-shadow: 0 0px 50px rgb(0 0 0/40%);
}

.Patient_id{
    padding-right: 40px;
    padding: 12px 80px;
    background-color: #e6e6e6;
    border: transparent;
    margin-bottom: 15px;
}

.Patient_Name{
    padding-right: 40px;
    padding: 12px 80px;
    background-color: #e6e6e6;
    border: transparent;
    margin-bottom: 15px;
}

.Age{
    padding-right: 40px;
    padding: 12px 80px;
    background-color: #e6e6e6;
    border: transparent;
    margin-bottom: 15px;
}

.Mobile{
    padding-right: 40px;
    padding: 12px 80px;
    background-color: #e6e6e6;
    border: transparent;
    margin-bottom: 15px;
}

.Disease{
    padding-right: 40px;
    padding: 12px 80px;
    background-color: #e6e6e6;
    border: transparent;
    margin-bottom: 15px;
}

.Gender{
    padding-right: 40px;
    padding: 12px 80px;
    background-color: #e6e6e6;
    border: transparent;
    margin-bottom: 15px;
}

.Address{
    padding-right: 40px;
    padding: 12px 80px;
    background-color: #e6e6e6;
    border: transparent;
    margin-bottom: 15px;
}

.Password{
    padding-right: 40px;
    padding: 12px 80px;
    background-color: #e6e6e6;
    border: transparent;
    margin-bottom: 15px;
}

.Blood_group{
    padding-right: 40px;
    padding: 12px 80px;
    background-color: #e6e6e6;
    border: transparent;
    margin-bottom: 15px;
}


.LoginSubmitBTNinReg{
    padding-right: 40px;
    padding: 10px 125px;
    background-color: black;
    border: 1px solid black;
    margin-bottom: 30px;
    cursor: pointer;
    font-weight: 900;
    color: white;
}

.LoginToMainFileButton a{
color: white;
background-color: rgb(187, 187, 187);
padding: 15px 50px;
position: absolute;
top: -4px;
right: 664px;
font-weight: 900;
}
</style>
</html>