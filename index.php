<!DOCTYPE html>
<html>
  <head>
    <!--Import Google Icon Font-->
    <meta charset="utf-8">
    <meta name="theme-color" content="#d1cab6">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="icon" href="images/favicon.ico" id="icon" type="image/x-icon">
    <!--Import materialize.css-->
    <title>Visva Bharati :: <?php $uri = $_SERVER['REQUEST_URI'];  if($uri == '/'){$uri = '/home';} $uri = trim($uri, "/"); echo ucfirst($uri); ?></title>
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital@1&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Hina+Mincho&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Allura&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@500&display=swap" rel="stylesheet">
    <style>
        #load{
            width:100%;
            height:100%;
            position:fixed;
            z-index:9999;
            background-color: white;
        }
        .loader{
          margin-top: 20%;
        }
        @media screen and (max-width: 1000px){
            .loader{
              margin-top: 50%;
            }
          }
    </style>
  </head>
  <body>
    <!--loader-->
  <div id="load" class="center">
      <div class="loader preloader-wrapper big active">
          <div class="spinner-layer spinner-blue-only">
            <div class="circle-clipper left">
              <div class="circle"></div>
            </div><div class="gap-patch">
              <div class="circle"></div>
            </div><div class="circle-clipper right">
              <div class="circle"></div>
            </div>
          </div>
        </div>
    </div>

    <!--including header-->
    <?php
            include "/components/navbar.php";
            echo createNavbar();
    ?>

  <!--views-->
  <?php
      /* $uri = $_SERVER['REQUEST_URI'];
          if($uri == '/'){
            $uri = '/home';
          }
          $uri = trim($uri, "/");
          if(file_exists("views/$uri.php")){
            include "/views/".$uri.".php";
            echo Home();
          }
          else{
            die("Error");
          }*/
          $request = $_SERVER['REQUEST_URI'];

          switch ($request) {
              case '/' :
                  include '/views/home.php';
                  echo Home();
                  break;
              case '/home' :
                  include '/views/home.php';
                  echo Home();
                  break;
              case '/contact' :
                  include '/views/contact.php';
                  echo Contact();
                  break;
              default:
                  http_response_code(404);
                  require __DIR__ . '/views/404.php';
                  break;
                }
  ?>
  <?php
          include "/components/footer.php";
          echo createFooter();
  ?>
  <script src="js/jquery.min.js"></script>
  <script src="js/materialize.min.js"></script>
  <script src="js/app.js"></script>
  <script src="js/mergin.js"></script>
</body>
</html>
