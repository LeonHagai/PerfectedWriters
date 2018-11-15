<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Perfect Writers</title>
  <link rel="stylesheet" href="../config/bootstrap/css/font-awesome.min.css">
  <link rel="stylesheet" href="../config/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="../config/bootstrap/css/style.css">
</head>

<body>
  <nav class="navbar navbar-expand-sm navbar-dark bg-dark p-0">
    <div class="container">
      <a href="home.html" class="navbar-brand">Perfected Writers</a>
      <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarSchool"><span class="navbar-toggler-icon"></span>
        </button>
      <div class="title" id="navbarPrWr">
        <h4 class="lead px-3 text-light">User Details</h4>
      </div>

    </div>
  </nav>
  <!--details image-->
  <section class="py-5">
    <div class="container accordion">
      <div class="row">
        <div class="col-md-6">
          <form class="form-control">
            <div class="form-group">
              <label>Account No.</label>
              <input type="text" name="account_No" value="Account Number" required="Please Enter Account Number" autofocus class="form-control">
            </div>
            <div class="form-group">
              <label>Pin</label>
              <input type="text" name="account_No" value="Pin" required="Please Enter Account Number" autofocus class="form-control">
            </div>
            <hr>

            <a href="#successfull" class="btn btn-outline-primary" data-toggle="collapse" data-parent="#accordion">Send</a>
          </form>
        </div>
        <div class="col-md-6 collapse " id="successfull">
          <div class="form-group">
            <label>Name:</label>
            <input type="text" name="name" class="form-control">              
          </div>
          <div class="form-group">
            <label>Email:</label>
            <input type="text" name="name" class="form-control">              
          </div><div class="form-group">
            <label>Account:</label>
            <input type="text" name="name" class="form-control">              
          </div>
          <div class="form-group">
            <label>Titl:</label>
            <input type="text" name="name" class="form-control">              
          </div>
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


  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>

</html>
