 <nav class="navbar navbar-expand-lg navbar-light bg-light">
       <a class="navbar-brand" href="">
    <img src="include/logo.png" width="30" height="30" alt="">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="all_news.php">Issues</a>
      </li>
    </ul>

        <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModalCenter">Logout</button>

  </div>

</nav>



<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
        Relly want to Logout?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
        <a href="include/logout.php"><button type="button" class="btn btn-primary">Yes</button></a>
      </div>
    </div>
  </div>
</div>
<?php
error_reporting(0);
?>
