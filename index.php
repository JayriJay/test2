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
      <a class="navbar-brand text-uppercase" href="index.php">Recipe</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
         <!--  <li class="nav-item">
            <a class="nav-link" href="#">About Us</a>
          </li> -->
        </ul>
        
        <ul class="navbar-nav mb-2 mb-lg-0">
          <li class="nav-item ms-lg-3">
            <a class="nav-link" aria-current="page" href="search.php">
              <i class="fa-solid fa-magnifying-glass"></i> Search
            </a>
          </li>

          <?php
            session_start();
            if (!isset($_SESSION['user'])){
          ?>
          <li class="nav-item ms-lg-3">
            <a class="nav-link" aria-current="page" href="login.php">
              <i class="fa-solid fa-user"></i> Login
            </a>
          </li>
          <?php

            }else{

          $link = "";
          if ($_SESSION['user']['role_id']==2) {
            $link = "chef_profile.php";
          }
          else{
            $link = "user_profile.php";
          }
          ?>



          <li class="nav-item ms-lg-3">
            <a class="nav-link" aria-current="page" href="<?=$link?>">
              <i class="fa-solid fa-user"></i> <?php  echo $_SESSION['user']['name'];?>
            </a>
          </li>
          <?php 

            }
          ?>
        
        </ul>
      </div>
    </div>
  </nav>

  <!-- Banner Slider -->
  <div id="carouselExampleDark" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="10000">
        <img src="image/slide33.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>First slide label</h5>
          <p>Some representative placeholder content for the first slide.</p> 
        </div>
      </div>
      <div class="carousel-item" data-bs-interval="2000">
        <img src="image/222.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>Some representative placeholder content for the second slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="image/4.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Third slide label</h5>
          <p>Some representative placeholder content for the third slide.</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

<!-- Top Recipe -->
<!-- bg-color:white/Bootstrap Card (5) -->
<section>
    <div class="container">
      <div class="row">
       <div class="quick_breakfast mt-5">
              <h1 class="for_title">
                Popular Recipe
              </h1>
              <hr>
        </div>
        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-5">

          <div class="col mb-5" >
            <div class="card my-2 recipe-bottom">
              <div class="favourite">
                <i class="fa-regular fa-heart fa-lg" style="color:white;"></i></div>
                <a href="recipe_detail.php" style="text-decoration:none; color:balck;">
                <img src="image/bf_1.jpg"   class="card-img-top" alt="The best bread pudding"></a>
                <div class="card-body">
                  <a href="recipe_detail.php" class="underline"><h5>The Best Bread Pudding</h5></a>
                  <p>by chef</p>
                </div>
                <div class="card-footer" style="border-top: none;">
                  <small class="mt-2 d-flex justify-content-between">
                    <span>
                       <i class="fa-solid fa-star" style="color: #F4CE33; margin-right: 10px;"></i>3
                    </span>
                    <span><i class="fa-solid fa-clock" style="margin-right: 10px; color: #F4CE33;"></i>25-min</span>
                  </small>
                </div>
            </div>
          </div>

          <div class="col mb-5" >
            <div class="card my-2 recipe-bottom">
              <div class="favourite">
                <i class="fa-regular fa-heart fa-lg" style="color:white;"></i></div>
                <a href="recipe_detail.php" style="text-decoration:none; color:balck;">
                <img src="image/spaghetti.jpg" class="card-img-top"></a>
                <div class="card-body">
                  <a href="recipe_detail.php" class="underline"><h5>The Best Bread Pudding</h5></a>
                  <p>by chef</p>
                </div> 
                <div class="card-footer" style="border-top: none;">
                  <small class="mt-2 d-flex justify-content-between">
                    <span>
                       <i class="fa-solid fa-star" style="color: #F4CE33; margin-right: 10px;"></i>3
                    </span>
                    <span><i class="fa-solid fa-clock" style="margin-right: 10px; color: #F4CE33;"></i>25-min</span>
                  </small>
                </div>
            </div>
          </div>

          <div class="col mb-5" >
            <div class="card my-2 recipe-bottom">
              <div class="favourite">
                <i class="fa-regular fa-heart fa-lg" style="color:white;"></i></div>
                <a href="recipe_detail.php" style="text-decoration:none; color:balck;">
                <img src="image/strawberries-and-cream-steel-cut-oats-8.jpg" class="card-img-top"></a>
                <div class="card-body">
                  <a href="recipe_detail.php" class="underline"><h5>The Best Bread Pudding</h5></a>
                  <p>by chef</p>
                </div>
                 <div class="card-footer" style="border-top: none;">
                  <small class="mt-2 d-flex justify-content-between">
                    <span>
                       <i class="fa-solid fa-star" style="color: #F4CE33; margin-right: 10px;"></i>3
                    </span>
                    <span><i class="fa-solid fa-clock" style="margin-right: 10px; color: #F4CE33;"></i>25-min</span>
                  </small>
                </div>
            </div>
          </div>

          <div class="col mb-5" >
            <div class="card my-2 recipe-bottom">
              <div class="favourite">
                <i class="fa-regular fa-heart fa-lg" style="color:white;"></i></div>
                <a href="recipe_detail.php" style="text-decoration:none; color:balck;">
                <img src="image/buffalo-wings-1.jpg" class="card-img-top"></a>
                <div class="card-body">
                  <a href="recipe_detail.php" class="underline"><h5>The Best Bread Pudding</h5></a>
                  <p>by chef</p>
                </div>
                <div class="card-footer" style="border-top: none;">
                  <small class="mt-2 d-flex justify-content-between">
                    <span>
                       <i class="fa-solid fa-star" style="color: #F4CE33; margin-right: 10px;"></i>3
                    </span>
                    <span><i class="fa-solid fa-clock" style="margin-right: 10px; color: #F4CE33;"></i>25-min</span>
                  </small>
                </div>
            </div>
          </div>

          <div class="col mb-5" >
            <div class="card my-2 recipe-bottom">
              <div class="favourite">
                <i class="fa-regular fa-heart fa-lg" style="color:white;"></i></div>
                <a href="recipe_detail.php" style="text-decoration:none; color:balck;">
                <img src="image/buffalo-wings-1.jpg" class="card-img-top"></a>
                <div class="card-body">
                  <a href="recipe_detail.php" class="underline"><h5>The Best Bread Pudding</h5></a>
                  <p>by chef</p>
                </div>
                <div class="card-footer" style="border-top: none;">
                  <small class="mt-2 d-flex justify-content-between">
                    <span>
                       <i class="fa-solid fa-star" style="color: #F4CE33; margin-right: 10px;"></i>3
                    </span>
                    <span><i class="fa-solid fa-clock" style="margin-right: 10px; color: #F4CE33;"></i>25-min</span>
                  </small>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>

<!-- Easy To Cook -->
<!-- bg-color:light gray (6) -->
<section class="gray">
  <div class="container">
  <div class="row">
       <div class="easy_cook mt-5 mb-5 col-12 mx-2">
              <h1>
                Easy To Cook 
              </h1> 
        </div>
    <div class="col-lg-2 col-md-3 col-6 mb-5">
      <a href="recipe_detail.php" ><img src="image/Gnocchi-pasta-bake.jpg" class="img-fluid shadow"></a>
      <div>
        <a href="recipe_detail.php" class="underline"><p class="mt-2" style="text-align: center;">Chorizo & mozzarella gonocchi bake</p></a>
      </div>
    </div>

    <div class="col-lg-2 col-md-3 col-6 mb-5">
      <a href="recipe_detail.php" ><img src="image/2.jpg" class="img-fluid shadow"></a>
      <div>
        <a href="recipe_detail.php" class="underline"><p class="mt-2" style="text-align: center;">Chicken & Veggie Stir-Fry</p></a>
      </div>
    </div>

    <div class="col-lg-2 col-md-3 col-6 mb-5">
      <a href="recipe_detail.php" ><img src="image/Thai-fried prawn & pineapple rice.jpg" class="img-fluid shadow"></a>
      <div>
        <a href="recipe_detail.php" class="underline"><p class="mt-2" style="text-align: center;">Thai-Fried Prawn & Pineapple Rice</p></a>
      </div>
    </div>

    <div class="col-lg-2 col-md-3 col-6 mb-5">
      <a href="recipe_detail.php" ><img src="image/easypancakE.jpg" class="img-fluid shadow"></a>
      <div>
        <a href="recipe_detail.php" class="underline"><p class="mt-2" style="text-align: center;">Easy Pan Cake</p></a>
      </div>
    </div>

    <div class="col-lg-2 col-md-6 col-6 mb-5">
      <a href="recipe_detail.php" ><img src="image/easy beef pot.jpg" class="img-fluid shadow"></a>
      <div>
        <a href="recipe_detail.php" class="underline"><p class="mt-2" style="text-align: center;">Easy Beef Hot-Pot</p></a>
      </div>
    </div>

   <div class="col-lg-2 col-md-6 col-6 mb-5">
      <a href="recipe_detail.php" ><img src="image/saliburysteak.jpg" class="img-fluid shadow"></a>
      <div>
        <a href="recipe_detail.php" class="underline"><p class="mt-2" style="text-align: center;">Salibury Steak</p></a>
      </div>
    </div>

  </div>
  </div>
</section>

<!-- Top Chef -->
<!-- bg-color:white (4) -->
<section>
  <div class="container">
    <div class="row">
       <div class="easy_cook mt-5 mb-1 col-12 mx-2">
              <h1>
                Top Chef
              </h1> 
        </div>
        <div class="card border-0 col-lg-6 mt-4">
          <div class="d-flex">
            <div class="col-lg-3">
              <img src="image/c1.jpg" class="img-fluid">
            </div>
            <div class="mx-3">
              <h3>Mrs . Amelia Grace</h3>
              <p style="text-align: justify;">Hello, welcome all, I'm Diego. I am one of chef who writing recipe at recipe website. I'm from china. I hope you all enjoy my recipe.<br>
              Main genera recipe - Chinese, French</p>
            </div>
          </div>
        </div>
         <div class="card border-0 col-lg-6 mt-4" style="padding: 10px;">
          <div class="d-flex">
            <div class="col-lg-3">
              <img src="image/c2.jpg" class="img-fluid">
            </div>
            <div class="mx-3">
              <h3>Mr . Alexa</h3>
              <p  style="text-align: justify;">Hello, welcome all, I'm Diego. I am one of chef who writing recipe at recipe website. I'm from china. I hope you all enjoy my recipe.<br>
              Main genera recipe - American, Japanese</p>
            </div>
          </div>
        </div>

         <div class="card border-0 col-lg-6 mt-4" style="padding: 10px;">
          <div class="d-flex">
            <div class="col-lg-3">
              <img src="image/c3.jpg" class="img-fluid">
            </div>
            <div class="mx-3">
              <h3>Mr . Diego</h3>
              <p  style="text-align: justify;">Hello, welcome all, I'm Diego. I am one of chef who writing recipe at recipe website. I'm from china. I hope you all enjoy my recipe.<br>
              Main genera recipe - Thiland, Italy</p>
            </div>
          </div>
        </div>
         <div class="card border-0 col-lg-6 mt-4" style="padding: 10px;">
          <div class="d-flex">
            <div class="col-lg-3">
              <img src="image/c4.jpg" class="img-fluid">
            </div>
            <div class="mx-3">
              <h3>Mrs . Barbara Rose</h3>
              <p  style="text-align: justify;">Hello, welcome all, I'm Diego. I am one of chef who writing recipe at recipe website. I'm from china. I hope you all enjoy my recipe.<br>
              Main genera recipe - French, India</p>
            </div>
          </div>
        </div>
    </div>
    </div>
  </div>
</section>

  <!-- Footer -->
  <!-- bg-color:dark -->
 
      <div class="bg-dark mt-5" style=" height: 100px;"><p style="color: white; text-align: center; padding-top: 33px;">Copyright 2022 &copy; RECIPE</p></div>





  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
