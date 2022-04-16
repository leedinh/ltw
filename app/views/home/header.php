<nav class="navbar navbar-expand-lg navbar-light bg-secondary">
    <div class="container"><a href="/home/index" class="navbar-brand d-flex align-items-center"> <i class="fa fa-book fa-lg mr-2 text-light"></i><strong>Funny Class</strong></a>
      <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"><span class="navbar-toggler-icon"></span></button>
      <div id="navbarSupportedContent" class="collapse navbar-collapse ">
        <ul class="navbar-nav ml-auto ">
          <li class="nav-item active"><a href="#" class="nav-link font-weight-bolder text-white"> <?= $_SESSION['username']; ?></a></li> </a></li>
          <?php
          if ($_SESSION['role'] == 'admin')
            echo '<li class="nav-item active"><a href="/login/register" class="nav-link font-italic text-white"> Add Student</a></li> </a></li>'
          ?>
          <li class="nav-item active"><a href="/home/st_list" class="nav-link font-italic text-white"> Student List</a></li> </a></li>
          <li class="nav-item active"><a href="/home/ex" class="nav-link font-italic text-white"> Exercises </a></li>
          <li class="nav-item active"><a href="/home/chal" class="nav-link font-italic text-white"> Challenge </a></li>
          <li class="nav-item active"><a href="/login/logout" class="nav-link font-italic text-white"> Logout </a></li>
        </ul>
      </div>
    </div>
  </nav>