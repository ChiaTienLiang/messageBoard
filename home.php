<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Fixed Top Navbar Example for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .message {
            background-color: lightgray;
            padding: 30px;
            margin: 30px;
        }

        h1 {
            text-align: center;
        }
        .day{
            text-align: right;
        }
    </style>
</head>

<body>

    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Project name</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">

                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="login.php">Sign in<span class="sr-only"></span></a></li>
                    <li><a href="signUp.php">Sign up</a></li>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </nav>
    <div class="container">
        <!-- <div class="header clearfix">
            <nav>
                <ul class="nav nav-pills pull-right">
                    <li role="presentation"><a href="login.html">Sign in</a></li>
                    <li role="presentation"><a href="signUp.html">Sign up</a></li>
                </ul>
            </nav>
        </div> -->
        <div class="jumbotron">
            <h1>CY Message Board</h1>
        </div>
        <!-- Main component for a primary marketing message or call to action -->
        <div class="jumbotron">
            <div class="message">
                <h3>Navbar example</h3>
                <h5>This example is a quick exercise to illustrate how the default, static and fixed to top navbar work.
                    It
                    includes the responsive CSS and HTML, so it also adapts to your viewport and device.</h5>
                <h5 class="day">2019-11-11</h5>
            </div>
            <p></p>
            <div class="message">
                <h3>Navbar example</h3>
                <h5>This example is a quick exercise to illustrate how the default, static and fixed to top navbar work.
                    It
                    includes the responsive CSS and HTML, so it also adapts to your viewport and device.</h5>
                <h5 class="day">2019-11-11</h5>
            </div>
            <p></p>
            <div class="message">
                <h3>Navbar example</h3>
                <h5>This example is a quick exercise to illustrate how the default, static and fixed to top navbar work.
                    It
                    includes the responsive CSS and HTML, so it also adapts to your viewport and device.</h5>
                <h5 class="day">2019-11-11</h5>
            </div>
            <p></p>
            <div class="message">
                <h3>Navbar example</h3>
                <h5>This example is a quick exercise to illustrate how the default, static and fixed to top navbar work.
                    It
                    includes the responsive CSS and HTML, so it also adapts to your viewport and device.</h5>
                <h5 class="day">2019-11-11</h5>
            </div>
            <p></p>
            <div class="message">
                <h3>Navbar example</h3>
                <h5>This example is a quick exercise to illustrate how the default, static and fixed to top navbar work.
                    It
                    includes the responsive CSS and HTML, so it also adapts to your viewport and device.</h5>
                <h5 class="day">2019-11-11</h5>
            </div>
            <div class="jumbotron p-3 p-md-5 ">
                <div>
                    <h1 class="display-4 font-italic">input your message here</h1>
                    <div class="form-group">
                        <textarea class="form-control" style="width:100%" rows="7"></textarea>
                    </div>
                </div>
                <button class="btn btn-lg  btn-default btn-block" type="submit"
                    style="background-color: white;width:50%;margin:auto;">submit</button>
            </div>
        </div> <!-- /container -->


        <!-- Bootstrap core JavaScript
    ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
        <script>
            window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')
        </script>
        <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
</body>

</html>