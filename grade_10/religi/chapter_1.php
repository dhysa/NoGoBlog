<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>nogoblog.com</title>

    <!-- Bootstrap Core CSS -->
    <link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome CSS -->
    <link href="../../css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../../css/style-main.css" rel="stylesheet">
    <link href="../../css/off-canvas.css" rel="stylesheet">

    <!-- Template js -->
    <script src="../../js/jquery-2.1.3.min.js"></script>
    <script src="../../bootstrap/js/bootstrap.min.js"></script>

    <!-- Canvas collapse menu sidebar js -->
    <script type="text/javascript">
        $(document).ready(function () {
            $('.row-offcanvas').toggleClass('active');

            $('[data-toggle=grade10-offcanvas]').click(function () {
                if ($('.sidebar-offcanvas').css('background-color') == 'rgb(255, 255, 255)') {
                    $('.list-group-item').attr('tabindex', '-1');
                } else {
                    $('.list-group-item').attr('tabindex', '');
                }
                $('.row-offcanvas').toggleClass('active');
            });
        });
    </script>

    <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>

<body>

  <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><img src="../../images/nogoblog.png"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <form class="navbar-form navbar-right">
            <div class="form-group">
              <input type="text" placeholder="Email" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Sign in</button>
          </form>
        </div><!--/.navbar-collapse -->

<ol class="breadcrumb">
  <li><i class="fa fa-home"><a href="home.php"></a></i></li>
  <li>Grade 10</li>
  <li>Religi</li>
  <li class="active">Chapter 1</li>
</ol>
      </div>
    </nav>

    <!-- Start Main Body Section -->
    <div class="mainbody-section text-center">

        <div class="container-fluid">
      <div class="row row-offcanvas row-offcanvas-left">

        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">
          <div class="list-group">
            <a href="#" class="list-group-item active">Link</a>
            <a href="#" class="list-group-item">Link</a>
            <a href="#" class="list-group-item">Link</a>
            <a href="#" class="list-group-item">Link</a>
            <a href="#" class="list-group-item">Link</a>
            <a href="#" class="list-group-item">Link</a>
            <a href="#" class="list-group-item">Link</a>
            <a href="#" class="list-group-item">Link</a>
            <a href="#" class="list-group-item">Link</a>
            <a href="#" class="list-group-item">Link</a>
          </div>

          
        </div><!--/span-->
        <div class="col-xs-12 col-sm-9 content">
          <p class="pull-left">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="grade10-offcanvas">Grade 10</button>
          </p>
          <br clear="both">
          <p class="pull-left">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="grade11-offcanvas">Grade 11</button>
          </p>
  
  <div class="text-center">
    <h1>Bootstrap forms</h1>
    <p class="lead">Example of a form with 3 columns and labels aligned to the left of the 
      fields at &gt; 1200px (large) screen sizes, 2 columns and labels aligned to the left of the 
      fields at &gt;992px (medium) screen sizes, 2 columns labels above fields at &gt; 768px (small), and single 
      column at &lt; 768px (Extra small). 
    </p>
  </div>

    </div>
    </div>
    
</body>

</html>