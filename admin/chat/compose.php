<?php include'../../config/inc/admin/headerAdmin.php'?>

  <?php
  //compose.php
  $error = '';
  $emailTo = '';
  $subject = '';
  $message = '';

//clean of string
  function clean_text($string){

    $string = trim($string);
    $string = stripslashes($string);
    $string = htmlspecialchars($string);
    return $string;
  }
  //error mesaage for name
  if (isset($_POST["submit"])) {
    # code...
    $error .= '<p><label class="text-danger">Please Enter your name</label></p>'
  }
  else{
    //clean the format 
    $name = clean_text($_POST["name"]);
    if(!preg_match("/^[a-zA-Z ]*$/", $name)){
      $error .= '<p><label class="text-danger">ONly letters and Whitespaces allowed.</label></p>'
    }
  }
  //error message for email
  if(empty($_POST["email"])){
    $error .= '<p><label class="text-danger">Please Enter your name</label></p>'
  }
  else{
    //it validates that the email is in the right format.
    $emailTo = clean_text($_POST["emailTo"]);
    if(!filter_var($emailTo, FILTER_VALIDATE_EMAIL)){
      $error.= '<p><label class="text-danger">Email is an Invalid Format</label></p>'
    }
  }
  //error message for subject
  if(empty($_POST["subject"])){
    $error .= '<p><label class="text-danger">Subject is required.</label></p>'
  }
  else{
    $subject = clean_text($_POST["subject"]);
  }
  //error message for message
  if(empty($_POST["message"])){
    $error .= '<p><label class="text-danger">Message is required.</label></p>'
  }
  else{
    $subject = clean_text($_POST["message"]);
  }
  //connection to server
  if ($error != '') {
    # code...
    //Load Composer's autoloader
require 'vendor/autoload.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp1.example.com;smtp2.example.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'user@example.com';                 // SMTP username
    $mail->Password = 'secret';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('from@example.com', 'Mailer');
    $mail->addAddress('joe@example.net', 'Joe User');     // Add a recipient
    $mail->addAddress('ellen@example.com');               // Name is optional
    $mail->addReplyTo('info@example.com', 'Information');
    $mail->addCC('cc@example.com');
    $mail->addBCC('bcc@example.com');

    //Attachments
    $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
  }


  ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="admin">

  <!-- Content admin. Contains page content -->
  <div class="content-admin">
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-3">
          <a href="message.php" class="btn btn-primary btn-block margin-bottom">Back to Inbox</a>

          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Folders</h3>
            </div>
            <div class="box-body no-padding">
              <ul class="nav nav-pills nav-stacked">
                <li><a href="message.php"><i class="fa fa-envelope-o"></i> Index</a></li>
                <li><a href="sent.php"><i class="fa fa-envelope-o"></i> Sent</a></li>
                <li><a href="draft.php"><i class="fa fa-file-text-o"></i> Drafts</a></li>
              </ul>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Compose New Message</h3>
            </div>
            <form class="" method="post">
              <!-- /.box-header -->
              <div class="box-body">
                <div class="form-group">
                  <input class="form-control" placeholder="To:" name="emailTo" required>
                </div>
                <div class="form-group">
                  <input class="form-control" placeholder="Subject:" name="subject" required>
                </div>
                <div class="form-group">
                  <textarea id="compose-textarea" class="form-control" style="height: 300px" name="message" placeholder="Enter Message" required>

                  </textarea>
                </div>
                <div class="form-group">
                  <div class="btn btn-default btn-file">
                    <i class="fa fa-paperclip"></i> Attachment
                    <input type="file" name="attachment">
                  </div>
                  <p class="help-block">Max. 32MB</p>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <div class="pull-right">
                  <button type="button" class="btn btn-default"><i class="fa fa-pencil"></i> Draft</button>
                  <button type="submit" class="btn btn-primary" name="submit" value="submit"><i class="fa fa-envelope-o"></i> Send</button>
                </div>
                <button type="reset" class="btn btn-default"><i class="fa fa-times"></i> Discard</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
          <!-- /. box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!--footer import-->
  <?php include '../../config/inc/user/footer.php' ?>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./admin -->

<!-- jQuery 3 -->
<script src="../../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Slimscroll -->
<script src="../../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../../bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- iCheck -->
<script src="../../plugins/iCheck/icheck.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="../../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Page Script -->
<script>
  $(function () {
    //Add text editor
    $("#compose-textarea").wysihtml5();
  });
</script>
</body>
</html>
