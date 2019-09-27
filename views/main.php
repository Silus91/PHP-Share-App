<html>
<head>
<title>Shareboard</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="assets/css/style.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
  <nav style="margin-bottom:5px" class="navbar navbar-expand-sm navbar-dark bg-dark">
    <a class="navbar-brand" href="<?php echo ROOT_URL; ?>">PHP Share-APP</a>
    <?php if(isset($_SESSION['is_logged_in'])) : ?>
      <a class="navbar-brand" href="<?php echo ROOT_URL; ?>"><?php echo $_SESSION ['user_data']['name']; ?></a>
    <?php endif; ?>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="<?php echo ROOT_URL; ?>shares">Shares</a>
        </li>
      <?php if(isset($_SESSION['is_logged_in'])) : ?>
        <li class="nav-item active">
          <a class="nav-link" href="<?php echo ROOT_URL; ?>users/logout">Logout</a>
        </li>
      <?php else : ?>
        <li class="nav-item active">
          <a class="nav-link" href="<?php echo ROOT_URL; ?>users/login">Login</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="<?php echo ROOT_URL; ?>users/register">Register</a>
        </li>
      <?php endif; ?>
      </ul>
    </div>
  </nav>

<main role="main" class="container">
<?php Messages::display(); ?>
<?php require($view); ?>

</main><!-- /.container -->
</body>
</html>