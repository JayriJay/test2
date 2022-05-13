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
  </style>
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark py-md-3 sticky-top" style="border-bottom: 3px solid #ffba00;">
    <div class="container">
      <a class="navbar-brand text-uppercase" href="">Recipe</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="index.php">Home</a>
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
            <a class="nav-link active" aria-current="page" href="login.php">
              <i class="fa-solid fa-user"></i> user name
            </a>
          </li>
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

  <!-- My Profile -->
  <div class="container">
    <div class="row">
      <nav class="mt-5">
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
          <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Profile</button>
          <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">My Recipe</button>
          <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Upload Recipe</button>
          <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Log Out</button>
        </div>
      </nav>
      <div class="tab-content" id="nav-tabContent">
        <!-- Profile info -->
        <div class="tab-pane mt-5 fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
          <div class="container d-lg-flex justify-content-around">
            <div class="col-lg-3 col-xs-3 col-md-6">
              <img src="image/Gnocchi-pasta-bake.jpg" class="img-fluid shadow">
            </div>
            <div class="col-lg-6 mt-4">
               <div class="col mb-4" style="float: right;">
                  <a href="edit_profile.php" class="cancle btn btn-info">Edit Profile</a>
                  <a href="chg_password.php" class="cancle btn btn-info">Change password</a>
                </div>
                <div class="input-group mb-4">
                    <div class="input-group-prepend">
                    <span class="input-group-text" >Name</span>
                    </div>
                    <label class="form-control">Chaw po po thaw</label>
                </div>          
                <div class="input-group mb-4">
                    <div class="input-group-prepend">
                    <span class="input-group-text">Email</i></span>
                    </div>
                    <label class="form-control">chawpopothaw@gmail.com</label>
                </div>
                <div class="input-group mb-4">
                  <div class="input-group-prepend">
                  <span class="input-group-text">Role</span>
                  </div>
                  <label class="form-control">chawpopothaw@gmail.com</label>
                </div>
            </div>
          </div>
        </div>

        <!-- My Recipe -->
        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
          <div class="container">
            <div class="row">
              <div class="col-lg-3 mb-3 mt-3" >
                <div class="card my-2 recipe-bottom">
                  <a href="" style="text-decoration:none; color:balck;">
                    <img src="image/buffalo-wings-1.jpg" class="card-img-top"></a>
                      <div class="card-body">
                      <a href="" class="underline"><h5>The Best Bread Pudding</h5></a>
                      <div class="mt-3">
                      <span style="float:left;">
                      <span><i class="fa-solid fa-star" style="color: #F4CE33; margin-right: 10px;"></i>3</span>
                      </span>
                      <span style="float:right;"><i class="fa-solid fa-clock" style="margin-right: 10px; color: #F4CE33;"></i>25-min</span>
                    </div>
                </div>
                </div>
              </div>

              <div class="col-lg-3 mb-3 mt-3" >
                <div class="card my-2 recipe-bottom">
                  <a href="" style="text-decoration:none; color:balck;">
                    <img src="image/buffalo-wings-1.jpg" class="card-img-top"></a>
                      <div class="card-body">
                      <a href="" class="underline"><h5>The Best Bread Pudding</h5></a>
                      <div class="mt-3">
                      <span style="float:left;">
                      <span><i class="fa-solid fa-star" style="color: #F4CE33; margin-right: 10px;"></i>3</span>
                      </span>
                      <span style="float:right;"><i class="fa-solid fa-clock" style="margin-right: 10px; color: #F4CE33;"></i>25-min</span>
                    </div>
                </div>
                </div>
              </div>

              <div class="col-lg-3 mb-3 mt-3" >
                <div class="card my-2 recipe-bottom">
                  <a href="" style="text-decoration:none; color:balck;">
                    <img src="image/buffalo-wings-1.jpg" class="card-img-top"></a>
                      <div class="card-body">
                      <a href="" class="underline"><h5>The Best Bread Pudding</h5></a>
                      <div class="mt-3">
                      <span style="float:left;">
                      <span><i class="fa-solid fa-star" style="color: #F4CE33; margin-right: 10px;"></i>3</span>
                      </span>
                      <span style="float:right;"><i class="fa-solid fa-clock" style="margin-right: 10px; color: #F4CE33;"></i>25-min</span>
                    </div>
                </div>
                </div>
              </div>

              <div class="col-lg-3 mb-3 mt-3" >
                <div class="card my-2 recipe-bottom">
                  <a href="" style="text-decoration:none; color:balck;">
                    <img src="image/buffalo-wings-1.jpg" class="card-img-top"></a>
                      <div class="card-body">
                      <a href="" class="underline"><h5>The Best Bread Pudding</h5></a>
                      <div class="mt-3">
                      <span style="float:left;">
                      <span><i class="fa-solid fa-star" style="color: #F4CE33; margin-right: 10px;"></i>3</span>
                      </span>
                      <span style="float:right;"><i class="fa-solid fa-clock" style="margin-right: 10px; color: #F4CE33;"></i>25-min</span>
                    </div>
                </div>
                </div>
              </div>

              <div class="col-lg-3 mb-2" >
                <div class="card my-2 recipe-bottom">
                  <a href="" style="text-decoration:none; color:balck;">
                    <img src="image/buffalo-wings-1.jpg" class="card-img-top"></a>
                      <div class="card-body">
                      <a href="" class="underline"><h5>The Best Bread Pudding</h5></a>
                      <div class="mt-3">
                      <span style="float:left;">
                      <span><i class="fa-solid fa-star" style="color: #F4CE33; margin-right: 10px;"></i>3</span>
                      </span>
                      <span style="float:right;"><i class="fa-solid fa-clock" style="margin-right: 10px; color: #F4CE33;"></i>25-min</span>
                    </div>
                </div>
                </div>
              </div>

              <div class="col-lg-3 mb-2" >
                <div class="card my-2 recipe-bottom">
                  <a href="" style="text-decoration:none; color:balck;">
                    <img src="image/buffalo-wings-1.jpg" class="card-img-top"></a>
                      <div class="card-body">
                      <a href="" class="underline"><h5>The Best Bread Pudding</h5></a>
                      <div class="mt-3">
                      <span style="float:left;">
                      <span><i class="fa-solid fa-star" style="color: #F4CE33; margin-right: 10px;"></i>3</span>
                      </span>
                      <span style="float:right;"><i class="fa-solid fa-clock" style="margin-right: 10px; color: #F4CE33;"></i>25-min</span>
                    </div>
                </div>
                </div>
              </div>  
            </div>
          </div>
        </div>

        <!-- Upload Recipe -->
        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
           <div class="container d-lg-flex justify-content-around mt-5">
              <div class="col-lg-3 col-xs-3 col-md-6 mt-3">
                <img src="image/Gnocchi-pasta-bake.jpg" class="img-fluid shadow"> 
              </div>
              <div class="col-lg-6 col-md-12 col-sm-12 border p-3 shadow mt-3">
                <h5 class="mb-4 ">Upload Recipe</h5>
                <form action="" method="" enctype="">

                  <div class="form-group mb-3">
                    <input type="text" name="" class="form-control" placeholder="Chef-name" required=""> 
                  </div>

                  <div class="form-group mb-3">
                    <input type="text" name="" class="form-control" placeholder="Recipe-Title" required=""> 
                  </div>

                  <div class="form-group mb-3">
                    <select  class="form-select">
                      <option value="" disabled selected>Categories</option>
                      <option value="10"> Appetizer </option>
                      <option value="15"> Soup </option>
                      <option value="25"> Dressing </option>
                      <option value="30"> Strew </option>
                      <option value="35"> Diet </option>
                      
                    </select> 
                  </div>

                  <div class="form-group mb-3">
                    <select  class="form-select">
                      <option value="" disabled selected>Cooking-time</option>
                      <option value="10"> 10-mins</option>
                      <option value="15"> 15-mins</option>
                      <option value="25"> 25-mins</option>
                      <option value="30"> 30-mins</option>
                      <option value="35"> 35-mins</option>
                      <option value="40"> 40-mins</option>
                      <option value="45"> 45-mins</option>
                      <option value="50"> 50-mins</option>
                      <option value="55"> 55-mins</option>
                      <option value="60"> 60-mins</option>
                      <option value="65"> 65-mins</option>
                      <option value="70"> 70-mins</option>
                    </select> 
                  </div>

                  <div class="form-group mb-3">
                    <textarea class="form-control" placeholder="Description" required=""></textarea>
                  </div>

                  <input type="reset" name="" class="btn btn-info float-right mt-3" value="Cancle"> 
                  <input type="submit" name="" class="btn btn-info  mt-3 mr-5 float-right"  value="Upload">       
                </form> 
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Footer -->
  <!-- bg-color:dark -->
 
      <div class="bg-dark mt-5" style=" height: 100px;"><p style="color: white; text-align: center; padding-top: 33px;">Copyright 2022 &copy; RECIPE</p></div>





  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
