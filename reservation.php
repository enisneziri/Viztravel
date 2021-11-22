<!DOCTYPE html>
<html>
  
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Viz Travel</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <link rel="shortcut icon" href="/img/icons/viz.png" type="image/x-icon">
    <!------------------------Icon------------------------------------------>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <script src="/reserve.js"></script>
    <!--------------------------THE CSS LINKS------------------------------------>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light" style="background:#000;">
            <div class="container-fluid" style="background:#000;">
              <a class="navbar-brand text-light" onclick="window.location.reload(true);" href="#"><i class="bi bi-geo-alt" style="color:#FF8000"></i> Viz Travel</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                  <li class="nav-item">
                    <a class="nav-link  text-light" aria-current="page" href="/index.html">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link  text-right text-light" href="/flight.html">Air Travel</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-light" href="/bus.html">Bus Travel</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link  text-right text-light" href="/taxi.html">Taxi Travel</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active text-right text-light" href="/reservation.html">Online Reservation</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
    </header>
    
<section class="form1">
  <div class="container shadow p-3 mb-5 rounded">
    <div class="row">
        <h1>Online Reservation Form</h1>
        <div class="col-7 float-start">
          <div style="width: 100%"><iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Ferizaj+(Viz%20Travel)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe></div>
        </div>
        <!-----------------------------------------THE MAP---------------------------------------------->
      
   <div class="col-5 float-end">
     <p id="AllSet"></p>
      <form id="form1" name="f1" method="POST">
        <div class="sm-3">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="username" required>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Remember me</label>
        </div>
        <!------------------------remember me checkbox-------------------------------->
        <div class="modal" id="FailedLogin" tabindex="-1">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title text-dark">Login Failed</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" onclick="ModalClose()" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <p class="alert-danger text-center">Please fill up the information.</p>
              </div>
                <button type="button" class="btn btn-danger" id="CloseModalR" onclick="ModalClose()" data-bs-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
        <!--------------------------THIS IS THE MODAL SHOW WHEN NO INFORMATION ISnt WRITEETN--------------------->
        <button type="submit" onclick="SubmitMeth()" class="btn btn-primary" id="SubResers" value= " Submit " name="submit">Login</button>
      </div>
    </div>
  </div>
  </div>
</form>
</section>
<!------------------------------------------ login form --------------------------------------->

    <a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" style="background-color: #FF8000;" role="button" title="Click to return on the top page" data-toggle="tooltip" data-placement="left"><i class="bi bi-arrow-up-circle-fill"></i></a>

<footer class="bg-dark text-center text-lg-start">
  <!-------------------------------------------------- Grid container -------------------------------------->
  <div class="container p-4">
    <!---------------------------------------------------Grid row-------------------------------------------->
    <div class="row">
      <!-------------------------------------------------Grid column----------------------------------------->
      <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
        <h5 class="text-uppercase Main-h5">Footer Content</h5>

        <p class="text-light">
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste atque ea quis
          molestias. Fugiat pariatur maxime quis culpa corporis vitae repudiandae aliquam
          voluptatem veniam, est atque cumque eum delectus sint!
        </p>
      </div>
      <!-------------------------------------------------Grid column----------------------------------------->

      <!------------------------------------------------ Grid column ---------------------------------------->
      <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
        <h5 class="text-uppercase Main-h5">Contacts</h5>

        <ul class="list-unstyled mb-0">
          <li>
            <a href="#!" class="text-light">Link 1</a>
          </li>
          <li>
            <a href="#!" class="text-light">Link 2</a>
          </li>
          <li>
            <a href="#!" class="text-light">Link 3</a>
          </li>
          <li>
            <a href="#!" class="text-light">Link 4</a>
          </li>
        </ul>
      </div>
      <!-----------------------------------------------------Grid column-------------------------------->

      <!--Grid column-->
      <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
        <h5 class="text-uppercase mb-0 Main-h5">Our Socials</h5>

        <ul class="list-unstyled">
          <li>
            <a href="#!" class="text-light">Link 1</a>
          </li>
          <li>
            <a href="#!" class="text-light">Link 2</a>
          </li>
          <li>
            <a href="#!" class="text-light">Link 3</a>
          </li>
          <li>
            <a href="#!" class="text-dark">Link 4</a>
          </li>
        </ul>
      </div>
      <!--Grid column-->
    </div>
    <!--Grid row-->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center text-light p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2021 Copyright:
    <a class="text-light" href="$">By: E.M and E.N</a>
  </div>
  <!-- Copyright -->
</footer>
<!-------------------------------------------------- END OF Footer ----------------------------------------->

<!-----------------------------------------THE script tags-------------------------------------------------->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</body>
</html>