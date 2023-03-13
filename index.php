<?php
    //Khai bao autoloader
    require_once 'vendor/autoload.php';
    //Mục tiêu : giả sử có Dl lấy ra từ CSDL
    $title = "Hoc php";
    $header = "Chuong trinh minh hoa Twig";
    $content = "Chi la noi dung gi do";
    $data = [1, 2, 3,4, 5, 6];

    //Cau hinh moi truong > Tai thu muc template
    $loader = new \Twig\Loader\FilesystemLoader("template");
    $twig = new Twig\Environment($loader);


    //Render the template with the variables
    echo $twig->render('child.html',
    [
        'page_title' => $title,
        'heading' => $header,
        'content' => $content,
        'data' => $data,
    ]);

?>
<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music for Life</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/css/style_login.css">

    <style>
        
    </style>
</head>
<body>

<main class="container mt-5 mb-5">
        <div class="d-flex justify-content-center h-100 card2">
                <div class="card">
                    <div class="card-header">
                        <h3>Sign In</h3>
                        <div class="d-flex justify-content-end social_icon">
                            <span><i class="fab fa-facebook-square"></i></span>
                            <span><i class="fab fa-google-plus-square"></i></span>
                            <span><i class="fab fa-twitter-square"></i></span>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="index.php?controller=login&action=processLogin" method = "post">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="txtUser"><i class="fas fa-user"></i></span>
                                <input type="text" class="form-control" placeholder="username" name="txtUser" value="<?php if(isset($_COOKIE["username"])) { echo $_COOKIE["username"]; } ?>">
                            </div>

                            <div class="input-group mb-3">
                                <span class="input-group-text" id="txtPass"><i class="fas fa-key"></i></span>
                                <input type="text" class="form-control" placeholder="password" name="txtPassword" value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>">
                            </div>
                            
                            <div class="row align-items-center remember">
                                <input type="checkbox" name="remember">Remember Me
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Login" class="btn float-end login_btn">
                            </div>
                        </form>
                        <?php
                            if(isset($_GET['error'])){
                                echo "<h2 style='color:red;font-size: 19px;text-shadow: 0 1px 2px black;  margin-top: 47px;margin-left: 77px;'>{$_GET['error']}</h2>";
                            }
                        ?>
                    </div>
                    <div class="card-footer">
                        <div class="d-flex justify-content-center ">
                            Don't have an account?<a href="index.php?controller=signUp&action=index" class="text-warning text-decoration-none">Sign Up</a>
                        </div>
                        <div class="d-flex justify-content-center">
                            <a href="#" class="text-warning text-decoration-none">Forgot your password?</a>
                        </div>
                    </div>
                </div>

        </div>
    </main>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
 -->
