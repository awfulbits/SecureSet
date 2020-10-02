<?php
    session_start();
    if (isset($_SESSION['user']) != "")
    {
        header("Location: home.php");
    }
    include_once 'connect.php';
    if (isset($_POST['sca']))
    {
        $username = trim($_POST['username']);
        $pass = trim($_POST['pass']);
        $password = hash('sha256', $pass);
        $query = "select userid, username, pass from people where username=?";
        $stmt = $pdo->prepare($query);
        $stmt->execute([$username]);
        $count = $stmt->rowCount();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($count == 1 && $row['pass'] == $password)
        {
            $_SESSION['user'] = $row['userid'];
            header("Location: profile.php");
        }
        else
        {
            $message = "Invalid Login";
        }
        $_SESSION['message'] = $message;
    }
?>

<?php include('header.php'); ?>

    <?php
    if(isset($message)) {
        echo $message;
    }
    ?>
    </h1></p>

    <div id="home-view" class="container-fluid">
        <div id="login" class="container">
            <form class="text-center border border-light p-5" action="login.php" method="post">
                <p class="h4 mb-4">Sign in</p>
            
                <input type="text" name="username" id="defaultLoginFormUsername" class="form-control mb-4" placeholder="Username">
            
                <input type="password" name="pass" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Password">
            
                <!-- <div class="d-flex justify-content-around">
                    <div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="defaultLoginFormRemember">
                            <label class="custom-control-label" for="defaultLoginFormRemember">Remember me</label>
                        </div>
                    </div>
                    <div>
                        <a href="">Forgot password?</a>
                    </div>
                </div> -->
            
                <button class="btn btn-info btn-block my-4" type="submit">Sign in</button>

                <p>Not a member?
                    <a href="register.php">Register</a>
                </p>
            
                <!-- <p>or sign in with:</p>
                <a href="#" class="mx-2" role="button"><i class="fab fa-facebook-f light-blue-text"></i></a>
                <a href="#" class="mx-2" role="button"><i class="fab fa-twitter light-blue-text"></i></a>
                <a href="#" class="mx-2" role="button"><i class="fab fa-linkedin-in light-blue-text"></i></a>
                <a href="#" class="mx-2" role="button"><i class="fab fa-github light-blue-text"></i></a> -->
            </form>
        </div>
    </div>
<?php include('footer.php'); ?>
