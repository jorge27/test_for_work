<!DOCTYPE html>
<html>
<head>
  <title>Test | Home</title>
  <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="/css/app.css">
</head>
<body>
  <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container d-flex">
      <a class="navbar-brand" href="{{ url('/') }}">
        Test
      </a>
      <div class="d-flex justify-content-end">
        <button class="navbar-toggler" type="button" data-toggle="modal" data-target="#shoppingCartModal"><i class="fas fa-shopping-cart"></i></button>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        </ul>
        <ul class="navbar-nav ml-auto">
            <?php if (!isset($_SESSION['user'])) { ?>
              <li class="nav-item">
                <a class="nav-link" href="/signin.php">Sign In</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/register.php">Register</a>
              </li>
            <?php }else{ ?>
              <li class="nav-item">
                <button id="navbarDropdown" class="nav-link dropdown-toggle btn btn-default" type="button" data-bs-toggle="dropdown" aria-expanded="false" v-pre>
                    <?php echo $_SESSION['user']['name'] ?>
                </button>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="javascript:;" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                      Logout
                  </a>
                  <form id="logout-form" action="logout.php" method="POST" class="d-none"></form>
                </div>
              </li>
            <?php } ?>
        </ul>
      </div>
  </div>
</nav>