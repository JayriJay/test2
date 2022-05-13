<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>5530CSMM CourseWork</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <!-- fontawsome link -->
	<script src="https://kit.fontawesome.com/af9dee3d12.js" crossorigin="anonymous"></script>

  <!-- bootstrap-icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

  <!-- Custom Style -->
  <style>
    h1 h2 h3 h4 h5{
      font-weight: lighter;
    }

    .carousel-caption {
      top: 40%;
      bottom: auto;
    }

    .for_title{
      text-align: center;
      margin-left: 20px;
      margin-right: 20px;
      font-family: 'Anek Tamil', sans-serif;
    }
    
    .quick_breakfast hr{
      margin: center;
      width: 40%;
      margin-left: 30%;
      margin-right: 30%; 
      margin-bottom: 30px;
      
    }
    .easy_cook{
      border-left: solid 8px #77E2E1;
       font-family: 'Anek Tamil', sans-serif;
    }
    a.underline:visited, a.underline:link {
      text-decoration: none;
      color: black;
    }
    a.underline:hover, a.underline:active{
      text-decoration: underline;
      text-underline-position: under;
      text-decoration-color: #6AF3FC;
    }
    .gray{
      background-color: #f0eded ;
    }
    .recipe-bottom{
      border-bottom: solid 8px #77E2E1;
    }
    .input-group-prepend{
      display: flex;
    }
      .favourite{
       position: absolute;
       top: 8px;
       right: 8px;
       width: 48px;
       height: 48px;
       background-color:#F4CE33 ;
       border-radius: 50%;
       display: flex;
       align-items: center;
       justify-content: center;
       cursor: default;
    }
  </style>
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark py-md-3 sticky-top" style="border-bottom: 3px solid #ffba00;">
    <div class="container">
      <a class="navbar-brand text-uppercase" href="recipe_detail.html">Recipe</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Categories
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="appetizer.php">Appetizer</a></li>
              <li><a class="dropdown-item" href="soup.php">Soup</a></li>
              <li><a class="dropdown-item" href="dressing.php">Dressing</a></li>
              <li><a class="dropdown-item" href="strew.php">Strew</a></li>
              <li><a class="dropdown-item" href="diet.php">Diet</a></li>
            </ul>
          </li>
         <!-- <li class="nav-item">
            <a class="nav-link" href="#">About Us</a>
          </li> --> 
        </ul>
        
        <ul class="navbar-nav mb-2 mb-lg-0">
          <li class="nav-item ms-lg-3">
            <a class="nav-link" aria-current="page" href="search.php">
              <i class="fa-solid fa-magnifying-glass"></i> Search
            </a>
          </li>

          <li class="nav-item ms-lg-3">
            <a class="nav-link" aria-current="page" href="login.php">
              <i class="fa-solid fa-user"></i> Login
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- description -->
   <!-- about recipe -->

    <div class="container mt-5">
      <div class="row">
        <div class="col-lg-4">
          <img src="image/Gnocchi-pasta-bake.jpg" class="img-fluid shadow">
        </div>
        <div class="col-lg-6 mt-2">
          <div>
            <h3>Description of Gnocchi-Pasta-Bake</h3>
            <h5 class="mt-3">Cook by Denial</h5>
            <div style="text-align: justify;" class="mt-3">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <a href="recipe_detail.php" class="btn btn-outline-dark mt-2">Go Back</a>
          </div>
        </div>
      </div>
    </div>


  <!-- Footer -->
  <!-- bg-color:dark -->
      <footer class="container-fluid bg-dark" style="color: white; height: 100px; margin-top: 80px;">
        <div class="row pt-3">
          <div class="col-12">
            <p class="text-center" style="padding-top: 25px;">Copyright 2022 &copy; Recipe</p>
          </div>
        </div>
      </footer>




  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>