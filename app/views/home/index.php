<!doctype html>
<html lang="en">

<head>

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit-no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="/public/css/custom.css">
  <title>List of Students</title>

</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-secondary">
    <div class="container"><a href="/home/index" class="navbar-brand d-flex align-items-center"> <i class="fa fa-book fa-lg mr-2 text-light"></i><strong>Funny Class</strong></a>
      <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"><span class="navbar-toggler-icon"></span></button>
      <div id="navbarSupportedContent" class="collapse navbar-collapse ">
        <ul class="navbar-nav ml-auto ">
          <li class="nav-item active"><a href="#" class="nav-link font-weight-bolder text-white"> <?= $_SESSION['username']; ?></a></li> </a></li>
        
          <li class="nav-item active"><a href="/home/st_list" class="nav-link font-italic text-white"> User List</a></li> </a></li>

          <li class="nav-item active"><a href="/login/logout" class="nav-link font-italic text-white"> Logout </a></li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="bg-image p-5 text-center shadow-1-strong rounded mb-5 text-black bg">
    <h1 class="mb-3 h2">Welcome to the class</h1>

    <p>
      This classroom is only have some functions: profile, login, logout and checkout the exercises, challenge.
    </p>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>