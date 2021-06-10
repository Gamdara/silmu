<?php 
    function top(){ 
    if($_SESSION["user"]["level"] != "admin"){
        echo "
            <script>
                window.location.href = '/index.php'
            </script>
        ";
    }
?>

    <!doctype html>
    <html lang="en">
      <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">
    
        <title>Dashboard</title>
        <!-- Bootstrap core CSS -->
        <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
    
        <!-- Custom styles for this template -->
        <link href="/assets/css/dashboard.css" rel="stylesheet">
      </head>
    
    
      <body>
        <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
          <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Sinar Ilmu</a>
          <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
          <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap">
              <a class="nav-link" href="/php/logout.php">Sign out</a>
            </li>
          </ul>
        </nav>
    
        <div class="container-fluid">
          <div class="row">
            <nav class="col-md-2 d-none d-md-block bg-light sidebar ">
              <!-- <div class="sidebar-sticky"> -->
                <ul class="nav flex-column">
                  <li class="nav-item">
                    <a class="nav-link active" href="/admin-user.php">
                      <span data-feather="home"></span>
                      User <span class="sr-only">(current)</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="/admin-genre.php">
                      <span data-feather="home"></span>
                      Genres <span class="sr-only"></span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="/admin-book.php">
                      <span data-feather="home"></span>
                      Books <span class="sr-only"></span>
                    </a>
                  </li>
                  
                </ul>
    
              <!-- </div> -->
            </nav>
    
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
<?php } ?>
<?php function bottom(){ ?>
            
            </main>
        </div>
        </div>
    </body>
    </html>
<?php } ?>