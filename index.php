<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Perfect Writers</title>
  <link rel="stylesheet" href="config/bootstrap/css/font-awesome.min.css">
  <link rel="stylesheet" href="config/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="config/bootstrap/css/style.css">
</head>

<body>
  <nav class="navbar navbar-expand-sm navbar-dark bg-dark p-0">
    <div class="container">
      <a href="home.html" class="navbar-brand">Perfected Writers</a>
      <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarSchool"><span class="navbar-toggler-icon"></span>
        </button>
    </div>
  </nav>
  <!--home image-->
  <section id="perfectedhomeImage">
    <div class="image-background">
      <div class="image-inner" style=" height: 660">
        <div class="image-item home-image" style="background: url('data/img/home2.jpg'); background-size: cover;">
          <div class="container">
            <div class="row">

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--portal page <details-->
  <section class="bg-light text-muted py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="data/img/home.jpg" alt="" class="img-fluid mb-3 rounded-circle">
        </div>
        <div class="col-md-6">
          <h3>Perfected Writers</h3>
          <p>We offer perfectly written: <br>Essay, Mathematics and Chemistry Research, Accounting, Acturial Research... <a href="user/more.php">read more</a></p>
        </div>
      </div>
    </div>
  </section>
  <!--service provided-->
  <section class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <form class="form-control my-5">
            <div class="form-group">
              <label>Email</label>
              <input type="text" name="email" value="email" required autofocus class="form-control">
            </div>
            <div class="form-group">
              <label>Title</label>
              <select class="form-control">
                <option value="title">Title</option>
                <option value="mathematics">Mathematics</option>
                <option value="physics">Physics</option>
                <option value="finance">Financial Accounting</option>
                <option value="essay">Essay</option>

              </select>
            </div>
            <div class="form-group">
              <label>Discription</label>
              <textarea type="text" name="body" value="body" required autofocus class="form-control" style="height: 100px"></textarea>
            </div>
            <button class="btn btn-primary"> Send</button>
          </form>
        </div>
        <div class="col-md-6 pt-5">
          <img src="data/img/home2.jpg" alt="" class="img-fluid mb-3 rounded-circle"><br>
          <h3 class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</h3>
        </div>
      </div>  
    </div>
  </section>


  <!--principal footer-->
  <footer id="main-footer" class="text-center text-white p-2 bg-dark fixed-bottom">
    <div class="container">
      <div class="row">
        <div class="col">
          <p>Copyright 2018&copy; Vaughn</p>
        </div>
      </div>
    </div>
  </footer>


  <!--modal section-->

  <!--submittion request-->
  <div class="modal fade" id="submittionRequirement">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header bg-primary px-0">
          <h5 class="modal-title">Payment Details</h5>
          <button class="close" data-dismiss="modal"><span>&times;</span></button>
        </div>
        <div class="modal-body">
          <div class="container">
            <div class="row">

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>

</html>
