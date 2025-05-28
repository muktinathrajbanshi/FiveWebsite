<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400..700&family=Flamenco:wght@300;400&family=IBM+Plex+Sans:ital,wght@0,100..700;1,100..700&family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Jost:ital,wght@0,100..900;1,100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Piazzolla:ital,opsz,wght@0,8..30,100..900;1,8..30,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    
   <?php    include "menu.php";    ?> 


   <div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/cc1.png" class="d-block w-100" alt="...">
      <div class="carousel-caption">
        <h5>Los Angeles</h5>
        <p>We had such a great time in LA!</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/cc2.png" class="d-block w-100" alt="...">
      <div class="carousel-caption">
        <h5>Chicago</h5>
        <p>Thank you, Chicago!</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/cc3.png" class="d-block w-100" alt="...">
      <div class="carousel-caption">
        <h5>New York</h5>
        <p>We love the Big Apple!</p>
      </div>
    </div>
  </div>

  <a class="carousel-control-prev" href="#demo" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#demo" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<section class="my-5">
    <div class= "py-5">
        <h2 class="text-center">About Us</h2>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
                <img src="images/cc5.png" class="img-fluid aboutimg" alt="">
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <h2 class="display-4">I am Muktinath Rajbanshi</h2>
                <p class="py-3">Hello everyone this is me muktinath rajbanshi, i am from jhapa and i like to do code everyday. Furthermore i am fullstack developer as well as MERN stack developer.</p>
                <a href="about.php" class="btn btn-success"> Check More </a>
            </div>
        </div>
    </div>
</section>

<section class="my-5">
    <div class= "py-5">
        <h2 class="text-center">Our Services</h2>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
                <div class="card">
                    <img class="card-img-top" src="images/ss1.png" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">24/7 Available</h4>
                        <p class="card-text">We are willing to guide you!</p>
                        <a href="services.php" class="btn btn-primary">See Profile</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <div class="card">
                    <img class="card-img-top" src="images/ss2.png" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">Discount in Advance</h4>
                        <p class="card-text">We facilitates discount for advanced booking!</p>
                        <a href="services.php" class="btn btn-primary">See Profile</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <div class="card">
                    <img class="card-img-top" src="images/ss3.png" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">Loan System</h4>
                        <p class="card-text">We also provide loan for individuals!</p>
                        <a href="services.php" class="btn btn-primary">See Profile</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="my-5">
    <div class= "py-5">
        <h2 class="text-center">Our Gallery</h2>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/gg1.png" class="img-fluid pb-4" alt="">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/gg2.png" class="img-fluid pb-4" alt="">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/gg3.png" class="img-fluid pb-4" alt="">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/gg4.png" class="img-fluid pb-4" alt="">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/gg5.png" class="img-fluid pb-4" alt="">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/gg6.png" class="img-fluid pb-4" alt="">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/gg7.png" class="img-fluid pb-4" alt="">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/gg8.png" class="img-fluid pb-4" alt="">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/gg9.png" class="img-fluid pb-4" alt="">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/gg10.png" class="img-fluid pb-4" alt="">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/gg11.png" class="img-fluid pb-4" alt="">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/gg12.png" class="img-fluid pb-4" alt="">
            </div>
        </div>
    </div>
</section>

<section class="my-5">
    <div class= "py-5">
        <h2 class="text-center">Our Contact</h2>
    </div>

    <div class="w-50 m-auto">
        <form action="userinfo.php" method="post">
            <div class="form-group">
                <label for="">Username</label>
                <input type="text" name="user" autocomplete="off" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Email Id</label>
                <input type="text" name="email" autocomplete="off" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Mobile</label>
                <input type="text" name="mobile" autocomplete="off" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Comments</label>
                <textarea class="form-control" name="comment"></textarea>
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
</section>

    <?php include "footer.php"; ?>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>