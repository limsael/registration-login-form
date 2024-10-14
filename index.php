<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Registration & Login Sysytem</title>

  <link rel="shortcut icon" href="./assets/favicon-32x32.png" type="image/x-icon">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />

  <link rel="stylesheet" href="./css/style.css" />
</head>

<body>
  <form action="" method="post" class="col-md-6">
    <div class="container">
      <div class="row">
        <h1 class="mb-3 text-center text-info">Registration Form</h1>

        <div class="mb-3">
          <label for="fname" class="form-label">Name: </label>
          <input type="text" class="form-control" id="fname" name="fname" placeholder="Your name" />
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email address: </label>
          <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" />
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password: </label>
          <input type="password" class="form-control" id="password" name="password" />
        </div>

        <div class="mb-5 button-area">
          <input type="submit" class="btn btn-primary" value="Register" />
          <a href="login.php" class="btn btn-secondary">Log In </a>

        </div>
        <h2 class="text-muted text-center" id="status-text"></h2>
      </div>
    </div>
  </form>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
  </script>
  <script src="index.js"></script>
</body>

</html>