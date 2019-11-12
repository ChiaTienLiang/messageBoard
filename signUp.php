<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <meta name="generator" content="Jekyll v3.8.5">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous"> -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .data {
            width: 50%;
            margin: auto;
            padding: 20px;
        }

        /* .container{
            margin: 10% auto;
        } */
    </style>
    <!-- Custom styles for this template -->

</head>

<body class="bg-light">
    <div class="container">
        <div class="py-5 text-center">
            <h2>加入會員</h2>
            <!-- <p class="lead">Below is an example form built entirely with Bootstrap’s form controls. Each required form
                group has a validation state that can be triggered by attempting to submit the form without completing
                it.</p> -->
        </div>
        <hr class="mb-4">

        <div>
            <form class="needs-validation" novalidate>
                <div class="data">
                    <label for="firstName">姓名:</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="輸入姓名">
                    <!-- <div class="invalid-feedback">
                        Valid first name is required.
                    </div> -->
                </div>
                <p></p>
                <div class="data">
                    <label for="email">Email:</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="you@example.com">
                </div>
                <p></p>
                <div class="data">
                    <label for="address">密碼:</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="8-12含大小寫英文及數字">
                </div>
                <p></p>
                <hr class="mb-4">
                <p></p>
                <div class="data">
                    <button class="btn btn-primary btn-lg btn-block" type="button" id="btnOK">送出</button>
                </div>
            </form>

        </div>
        <p></p>
        <footer class="my-5 pt-5 text-muted text-center text-small">
            <p class="mb-1">&copy; 2019-11-11 CY</p>
        </footer>
    </div>
    <script>
        $(document).ready(function() {
            $("#btnOK").click(function() {
                var emailR = /^[a-zA-Z0-9]+@[a-zA-Z0-9]+\.[a-zA-Z]+(\.[a-zA-Z]+)?$/;
                var passwordR = /^[a-zA-Z0-9]{8,12}$/;
                if (
                    $("#name").val() != "" &&
                    emailR.test($("#email").val()) &&
                    passwordR.test($("#password").val())
                ) {
                    $.ajax({
                        type: "POST", //傳送方式
                        url: "signUpCheck.php", //傳送目的地
                        data: {
                            name: $("#name").val(),
                            email: $("#email").val(),
                            password: $("#password").val()
                        },
                        success: function(res) {
                            // console.log(res);
                            if (res === 'false') {
                                Swal.fire({
                                    position: 'top',
                                    icon: 'error',
                                    title: '該Email已被註冊',
                                })
                            } else if (res === 'true') {
                                Swal.fire({
                                        position: 'top',
                                        icon: 'success',
                                        showConfirmButton: false,
                                        timer: 1000
                                    })
                                    .then(function() {
                                        window.location.href = "login.php"
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
                        title: '資料輸入格式錯誤',
                    })
                }
            });

        });
    </script>

</body>

</html>