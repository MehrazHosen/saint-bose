<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>HOMEPAGE</title>
  </head>
  <body>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    --><nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="Index.php">SMR</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Doctor_List_option.php">DOCTOR LIST</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">DIAGONSIS</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            LOG-IN
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href=" Doctor_Login.php">DOCTOR</a></li>
            <li><a class="dropdown-item" href="Patient_Login.php">PATIENT</a></li>
            <li><a class="dropdown-item" href="Admin_Login.php">ADMIN</a></li>
          </ul>
        </li>
        </li>
      </ul>
    </div>
  </div>
  <div class="rightSide">
          <a class="Diagnosis_Link" href="Patient_Registration.php">SIGNUP</a>

  </div>
</nav>
<div class="name_big">
  <h1 class="Big_logo">SMR HOSPITAL</h1>
</div>
  </body>
  <style>

  .Diagnosis_Link{
      color: grey;
      text-decoration: none;
    list-style: none;
    /* padding: 10px 20px; */
    margin: 0px 20px 0px 0px; 
    }
    .Diagnosis_Link:hover{
      color: black;
    }

    .Big_logo{
      font-size:100px;
      font-family: 'Nunito Sans', sans-serif;
      font-weight: 700;
      position: absolute;
    top: 400px;
    left: 520px;
    
  }
  

  </style>
</html>