<!doctype html>
<html lang="en">
  <head>
   <?php    include('connection/connection.php');?>
    <?php      include ('include/style.php'); ?>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>News</title>
  </head>
  <body>
   <?php    include('include/nav.php');?>
   <div class="col-lg-10 mx-auto text-warning">
    <div class="block">
      <div class="text-center mb-6">
<br>
<br>
    <h3 class="h3 mb-3 font-weight-normal"><b>Update a notice</b></h>
  </div>
  <form action="update_news.php" method="post" enctype="multipart/form-data">
      <table class="col-lg-5 mx-auto">
          <tr align="center">
              <td colspan="6">
              </td>
            </tr>
            <tr>
              <td>Title*:<input type="text" name="event" placeholder="Title" required/></td>
            </tr>
            <tr>
              <td>Details*: <textarea  name="news" style="resize: vertical;" placeholder="Details" rows="5" required></textarea></td>
            </tr>
          <tr align="center">
            <td colspan="6">
              <br>
              <button type="submit" class="btn btn-primary btn-block btn-large btn-login" name="update_notice">Update</button>
              <br>
            </td>
          </tr>
        </td>
    </table>
  </form>
  </div>
  <center>
  your IP : <?php  echo $_SERVER['REMOTE_ADDR'] ?> is being logged.</center>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>


<?php
  if(isset($_POST['update_notice'])){
    //getting the text data from the fields
    $title = $_POST['event'];
    $news = $_POST['news'];
     $insert_notice = "INSERT INTO news (title,discription) values ('$title','$news')";
     $finally_update = mysqli_query($con, $insert_notice);
     if($finally_update){
     echo "<script>alert('News has been updated!')</script>";
     echo "<script>window.open('index.php','_self')</script>";
     }
  }
?>
