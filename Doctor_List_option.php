<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/8f0a871544.js" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Member Details</title>
</head>
<body>
<div class="last_buttons_on_members_data">
<button class="btn my-5"><a href="index.php" class="Back_to_dash_borad_from_Admin_dashboard btn_back text-light">Back</a></button>
</div>
    <div class="Display_member_container">
        <table class="table table-striped table-striped table-light my-5">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Specialist</th>
                </tr>
            </thead>
            <tbody>
                
<?php
      error_reporting(0);
      $host = "localhost";
      $user = "root";
      $password = "";
      $DB = "smr_hospital";
      $con = mysqli_connect($host, $user, $password, $DB);
      
      $sql = "Select *from `doctor`";
      
      $result = mysqli_query($con, $sql);
      if($result){
          while($row=mysqli_fetch_assoc($result)){
              $Name=$row['Name'];
              $Specialist=$row['Specialist'];
              echo '
              <tr>
              <th scope="row">'.$Name.'</th>
              <td>'.$Specialist.'</td>
              </tr>';
            }
        }
?>

</tbody>
</table>
</div>
</body>
<style>
* {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        background: 100%;
        list-style: none;
        text-decoration: none;
    }
    
    
   
    
    .Back_to_dash_borad_from_Admin_dashboard{
        text-decoration: none;
        width: 20px;
        
    }
    .btn {
        padding: 0;
        border: none;
        background: none;
        }

    .btn_back{
    padding: 15px 50px;
    margin-left: 95px;
    border-radius: 38px;
    background-color: black ;
    border: transparent;
    margin-bottom: 30px;
    cursor: pointer;
    font-weight: 900;
    color: white;
}
.btn_back:hover{
        background-color:gray;
    }
    
    .btn_Log_out{
    padding: 15px 50px;
    border-radius: 38px;
    background-color:  grey;
    border: transparent;
    margin-bottom: 30px;
    cursor: pointer;
    font-weight: 900;
    color: white;
    }
    .btn_Log_out:hover{
        background-color: #57b846;
    }

    body {
        height: 100vh;
        background: white;
    }

    .table{
        width: 90%;
        position: absolute;
        top: 5%;
        right: 5%;
    }

    
    .Display_member_Details_update_delete_button{
        color: white;
        text-decoration: none;
        
        }
        
        .btnUpdateMember{
                margin-right: 5px;
        }

        .btnDeleteMember{
                margin-left: 5px;
        }

        .btnUpdateMember:hover{
        color: Khaki;
        transition-delay: 0.5s;
        }

        .btnDeleteMember :hover{
            color: red;
            transition-delay: 0.5s;
        }


    .Admin_Member_display_Add_btn a{
        text-decoration: none;
        padding: 45px 90px;
    }
    
    .Back_to_Admin_panel_member_display a{
        text-decoration: none;
        padding: 45px 90px;

    }
</style>
</html>