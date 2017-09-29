<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Cache-Control" content="no-cache">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="Lang" content="ru">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="klimkin artur, skype:smlab.pvl">
    <title>frm</title>
    <link rel="stylesheet" href="/vendor/bootstrap-4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" href="/vendor/fileuploader/client/fileuploader.css">
    <link rel="stylesheet" href="/media/css/style.css">
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
<a class="navbar-brand" href="/">Frm</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

<div class="collapse navbar-collapse" id="navbarsExampleDefault">
<ul class="navbar-nav mr-auto">
    <li class="nav-item"><a class="nav-link js-addmodal" href="#">Написать в блог</a></li>
    <li class="nav-item"><a class="nav-link" href="/blog/list">Почитать блог</a></li>
</ul>
</div>
</nav>
    <br><br>
    <div class="container">
    <div class="row">
    
        <div class="modal fade" id="myModal">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Написать в блог</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body"></div>
            </div>
          </div>
        </div>
    
        <?=$content?>
    </div>
    <hr>

    <footer>
    <p>&copy; Arthur K. 2017</p>
    </footer>
    </div> <!-- /container -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="/vendor/bootstrap-4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <script src="/vendor/fileuploader/client/fileuploader.js"></script>
    <script src="/media/js/script.js"></script>
</body>
</html>
