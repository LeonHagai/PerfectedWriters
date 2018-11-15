<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Perfected Writers Admin</title>
  <link rel="stylesheet" href="../config/bootstrap/css/font-awesome.min.css">
  <link rel="stylesheet" href="../config/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="../config/bootstrap/css/style.css">
</head>
<body>
  <nav class="navbar navbar-expand-sm navbar-dark bg-dark ">
      <a href="home.html" class="navbar-brand pr-4">Perfected Writers</a>
        <button class="navbar-toggler" data-toggle="collapse"
         data-target="#navBar_Perfected_Writers"><span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse pl-4" id="navBar_Perfected_Writers">
          <ul class="navbar-nav">
            <li class="nav-item px-2">
              <a href="admin.php" class="nav-link">Home</a>
            </li>
            <li class="nav-item px-2">
              <a href="portal.php" class="nav-link active">Portal</a>
            </li>
            <li class="nav-item px-2">
              <a href="chat/message.php" class="nav-link">Chats</a>
            </li>
          </ul>
        </div>
  </nav>

  <!--portal content-->
  <div class="container ">
      <div class="row">
        <!--school internal transaction-->
        <div class="col-md-6">
          <div class="card-header bg-primary">
            <h4 class="lead text-center"><b>Pending Activities</b></h4>
          </div>
          <div class="card-body pt-0" id="accordion">
            <table class="table table-striped">
              <thead class="thead-inverse">
                <tr>
                  <th>#</th>
                  <th>Title</th>
                  <th>Email</th>
                  <th>Employee</th>
                  <th>Staff No.s</th>
                  <th>Deadline</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Essay</td>
                  <td>lenon@vaughn.com</td>
                  <td ><a href="#employeeDetails" data-toggle="collapse" data-target="#accordion">Lenon Adrian</a></td>
                  <td>6785</td>
                  <td>8/11/18</td>
                </tr>
              </tbody>
            </table>
                <div id="employeeDetails" class="collapse">
                  <div class=""><button class="btn btn-danger">Alert</button></div>
                </div>
          </div>
        </div>
        <!--bank records transaction-->
        <div class="col-md-6">
          <div class="card-header bg-success">
            <h4 class="lead text-center">Bank Transaction</h4>
          </div>
          <div class="card-body pt-0" id="accordion">
            <table class="table table-striped">
              <thead class="thead-inverse">
                <tr>
                  <th>Date</th>
                  <th>Debit</th>
                  <th>Credit</th>
                  <th>Total</th>
                  <th>Difference</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><a href="#AccountDetails" data-toggle="collapse" data-parent="#accordion">3/6/2018</a></td>
                  <td>6,098,786</td>
                  <td>567,929</td>
                  <td>7,890,456</td>
                  <td>-80,966</td>
                </tr>
                <tr>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <!--dropdown containing details of transaction-->

      <div id="AccountDetails" class="collapse card-body">
        <table class="table table-striped">
          <thead class="thead-inverse">
            <tr>
              <th>Time</th>
              <th>Transaction Id</th>
              <th>Party</th>
              <th>Debit</th>
              <th>Credit</th>
              <th>Total</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th>09:56</th>
              <th>tfvjhvx-9875gy4-7896</th>
              <th>Bursor</th>
              <th>80,555</th>
              <th>-</th>
              <th>1,209,867</th>
            </tr>
            <tr>
              <th>09:58</th>
              <th>tfvjhvx-9875gy4-78967</th>
              <th>Clerk</th>
              <th>-</th>
              <th>674,987</th>
              <th>1,881,864</th>
            </tr>
          </tbody>
        </table>
      </div>
    </div>


<!--principal footer-->
 <footer id="main-footer" class="text-center text-white p-2 bg-dark fixed-bottom">
   <div class="container">
     <div class="row">
       <div class="col">
         <p>Copyright 2018&copy; Perfected  Writers</p>
       </div>
     </div>
   </div>
 </footer>
 <!--modal settings-->
 <!--employee details-->

  <div class="modal fade" id="employeeDetails">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header bg-primary text-white">
          <h3 class="modal-title">Employee Summary</h3>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label>Address: </label>
            <input type="text" name="text" class="form-control">
          </div>
          <table class="table table-striped">
            <thead class="thead thead-inverse">
              <tr>
                <th>Applied</th>
                <th>Completed</th>
                <th>Delayed</th>
                <th>Rating</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>7</td>
                <td>4</td>
                <td>0</td>
                <td>5</td>
              </tr>
            </tbody>
          </table>
          <div class="modal-footer">
            <button class="btn btn-danger"><i class="fa fa-bell"></i> Alert</button>
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
