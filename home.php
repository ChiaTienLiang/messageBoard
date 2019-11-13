<!DOCTYPE html>
<html lang="zh-CN">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <title>Fixed Top Navbar Example for Bootstrap</title>
    <script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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

        .day {
            text-align: right;
        }

        #delBtn {
            margin-left: 90%;
        }

        /*  #changBtn {
            margin-left: 80%;
        } */
    </style>
</head>

<body>

    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <span class="navbar-brand">Welcome to CY Message Board，
                    <?php session_start();
                    $level = $_SESSION['level'];
                    if (isset($_SESSION['name'])) echo $_SESSION['name'];
                    else echo 'Guest' ?>
                </span>
            </div>
            <div id="navbar" class="navbar-collapse collapse">

                <ul class="nav navbar-nav navbar-right">
                    <li class="active">
                        <?php
                        if (!isset($_SESSION['name'])) echo '<a href="login.php">Sign in';
                        else echo '<a href="logout.php">Sign out' ?>
                        </a></li>
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
        <div class="jumbotron" id="msg">
            <!-- <div class="message">
                <h3>Navbar example</h3>
                <h5>This example is a quick exercise to illustrate how the default, static and fixed to top navbar work.
                    It
                    includes the responsive CSS and HTML, so it also adapts to your viewport and device.</h5>
                <h5 class="day">2019-11-11</h5>
            </div>
            <p></p> -->

            <script type="text/javascript">
                $(document).ready(function() {
                    $.ajax({
                        type: "GET", //傳送方式
                        url: "getMsg.php", //傳送目的地
                        dateType: "json",
                        contentType: 'application/json; charset=UTF-8',
                        success: function(res) {
                            res = JSON.parse(res);
                            for (let i = 0; i < res.length; i++) {
                                $("#msg").append(`<div class="message"><h3>${res[i].name}</h3><h5>${res[i].message}</h5><h5 class="day">${res[i].create_at}</h5>
                                <?php if ($level > 0)
                                    echo '<button type="button" class="btn btn-danger"  id="delBtn" onclick="del(' ?> ${res[i].id} <?php echo ')">刪除</button>' ?>
                                </div><p></p>`);
                            }
                            // console.log(res);
                        },
                        error: function(error) {
                            console.log(error);
                        }
                    });
                    $("#addMsg").click(function() {
                        if (
                            $("#Msg").val() != ""
                        ) {
                            $.ajax({
                                type: "POST", //傳送方式
                                url: "addMsg.php", //傳送目的地
                                data: {
                                    Msg: $("#Msg").val()
                                },
                                success: function(res) {
                                    // console.log(res);
                                    if (res === 'true') {
                                        Swal.fire({
                                            position: 'top',
                                            icon: 'success',
                                            title: '您的留言已送出',
                                            showConfirmButton: false,
                                            timer: 1500
                                        }).then(function() {
                                            window.location.href = "home.php"
                                        });
                                    }
                                },
                                error: function(error) {
                                    console.log(error);
                                }
                            });
                        } else {
                            Swal.fire({
                                position: 'top',
                                icon: 'error',
                                title: '不能為空',
                            })
                        }
                    });

                });

                function del(e) {
                    $.ajax({
                        type: "POST", //傳送方式
                        url: "delMsg.php", //傳送目的地
                        data: {
                            id: e
                        },
                        success: function(res) {
                            location.reload();
                            // console.log(res);
                        },
                        error: function(error) {
                            console.log(error);
                        }
                    });
                }
            </script>
        </div> <!-- /container -->
        <?php if (isset($_SESSION['name'])) echo
            '<div class="jumbotron p-3 p-md-5 ">
                <div>
                    <h1 class="display-4 font-italic">input your message here</h1>
                    <div class="form-group">
                        <textarea class="form-control" style="width:100%" rows="7" id="Msg"></textarea>
                    </div>
                </div>
                <button class="btn btn-lg  btn-default btn-block" type="button" id="addMsg" style="background-color: white;width:50%;margin:auto;">送出</button>
            </div>'; ?>

</body>

</html>