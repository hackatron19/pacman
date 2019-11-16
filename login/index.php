<html>
<head>
    <title>
      Please Login
    </title>
    <?php      include ('../include/style.php'); ?>
    <!-- Custom styles for this template -->
    <link href="floating-labels.css" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body style="background: url('bg.jpg') repeat 0 0;">
    <form class="form-signin" method="post" action="index.php">
        <div class="text-center mb-4">
            <center>
                <img class="mb-4" src="../logo.jpg" alt="" width="72" height="72">
                <h2 class="h3 mb-3 font-weight-normal text-white">Please Login</h2>
            </center>
        </div>
        <script>
            // $('form input[type="submit"]').prop("disabled", true);
</script>
        <div class="form-label-group">
            <input type="text" id="inputEmail" class="form-control" placeholder="Email" name="email" required autofocus>
            <label for="inputEmail">Email</label>
        </div>

        <div class="form-label-group">
            <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="pass" required>
            <label for="inputPassword">Password</label>
        </div>
        <button class="btn btn-lg btn-primar" id="login" type="submit" name="login">Sign in</button>
        <p class="mt-3 "><a href="reset.php" class="text-warning">Forgot Password</a> <a href="join.php" class="float-right text-warning">Sign up</a></p>
<center><a href="../" class="text-light">Back to Home</a></center>
    </form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
