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
         <!--  <li class="nav-item">
            <a class="nav-link" href="#">About Us</a>
          </li> -->
        </ul>
        
        <ul class="navbar-nav mb-2 mb-lg-0">
          <li class="nav-item ms-lg-3">
            <a class="nav-link active" aria-current="page" href="search.php">
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

   <!-- search form -->
    <section style="background-color: gray; padding:30px;">
          <div class="container">
            <div class="row">
              <form class="d-flex justify-content-center">
                <div class="col-6">
                  <div class="input-group mb-4">
                    <div class="input-group mb-3">
                      <input type="text" class="form-control" placeholder="Recipient's username">
                      <button class="btn btn-outline-light" type="button" id="button-addon2"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </div>
                  </div> 
                </div>
              </form>
            </div>
          </div>

          <div class="container">
            <div class="row">
            <form>
              <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
                <!-- Search by category -->
                  <div class="col">
                    <div class="form-group mb-3">
                      <select  class="form-select">
                        <option value="" disabled selected>Search by category</option>
                        <option value="breakfast">Breakfast</option>
                        <option value="lunch">Lunch</option>
                        <option value="dinner">Dinner</option>
                        <option value="cake">Cake</option>
                        <option value="juice">Juice</option>
                      </select> 
                    </div>
                  </div>
    
                <!-- Search by Main Ingredient -->
                  <div class="col">
                    <div class="form-group mb-3">
                      <select  class="form-select">
                        <option value="" disabled selected>Search by Main Ingredient</option>
                        <option value="french">Vegetables</option>
                        <option value="europen">Chicken</option>
                        <option value="thailand">Beef</option>
                        <option value="chinese">Pork</option>
                        <option value="japanee">Goose</option>
                        <option value="japanee">Shrimp</option>
                        <option value="japanee">Fish</option> 
                        <option value="french">Octopus</option>
                        <option value="japanee">Mussels</option>
                        <option value="japanee">Fruit</option>  
                        <option value="japanee">Noodle</option>
                      </select> 
                    </div>
                  </div>
    
                <!-- Search by country -->
                  <div class="col">
                    <div class="form-group mb-3">
                      <select  class="form-select">
                        <option value="" disabled selected>Search by country</option>
                        <option value="europen">Europen</option>
                        <option value="french">French</option>
                        <option value="thailand">Thailand</option>
                        <option value="chinese">Chinese</option>
                        <option value="japanee">Japanese</option>
                      </select> 
                    </div>
                  </div>
    
                <!-- Search by Cooking time -->
                  <div class="col">
                   <div class="form-group mb-3">
                          <select  class="form-select">
                            <option value="" disabled selected>Search by Cooking-time</option>
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
                  </div>
                
                <!-- Sort by -->
                  <div class="col">
                    <div class="form-group mb-3">
                          <select  class="form-select">
                            <option value="" disabled selected>Search by rating</option>
                            <option value="popular">Popular recipe</option>
                            <option value="latest">Latest recipe</option>
                          </select> 
                    </div>
                  </div>
                  
                
                <!-- Specific time -->
                  <div class="col">
                   <div class="form-group mb-3">
                          <select  class="form-select">
                            <option value="" disabled selected>Search by meals-time</option>
                            <option value="Breakfast"> Breakfast </option>
                            <option value="Lunch"> Lunch </option>
                            <option value="Dinner"> Dinner </option>
                          </select> 
                    </div>
                  </div>
    
                <!-- Search & cancle -->
                  <div class="col">
                    <div class="form-group mb-3">
                      <input type="submit" name="" class="btn btn-info" value="Search">
                      <input type="reset" name="" class="btn btn-info" value="Cancle">
                    </div>
                  </div>

            	</div>
            </form>
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
