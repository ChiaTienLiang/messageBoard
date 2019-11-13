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

        button {
            background-color: white;
            width: 40%;
            margin: 20px 50px;
            /* position: absolute; */
        }
    </style>
</head>

<body>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <span class="navbar-brand">Welcome to CY Message Board，
                    <?php session_start();
                    $level = $_SESSION['level'];
                    if (isset($_SESSION['name'])) echo $_SESSION['name'];
                    else echo 'Guest' ?>
                </span>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="jumbotron p-3 p-md-5 ">
            <div>
                <h1 class="display-4 font-italic">input your message here</h1>
                <div class="form-group">
                    <textarea class="form-control" style="width:100%" rows="7" id="Msg"></textarea>
                </div>
            </div>
            <button class="btn btn-lg  btn-default " type="button" id="addMsg">送出</button>
            <button class="btn btn-lg  btn-default" type="button" onclick="history.back()">取消</button>
        </div>

        <script type="text/javascript">
            $(document).ready(function() {
                $.ajax({
                    type: "GET", //傳送方式
                    url: "GetOneMsg.php", //傳送目的地
                    success: function(res) {
                        // console.log(res);
                        $("#Msg").val();
                    },
                    error: function(error) {
                        console.log(error);
                    }
                });
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
        </script>
</body>

</html>