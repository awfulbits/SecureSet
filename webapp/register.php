<?php
    session_start();
    if (isset($_SESSION['user']) != "")
    {
        header("Location: profile.php");
    }
    include_once 'connect.php';

    if (isset($_POST['sca'])) {
        $username = trim($_POST['username']);
        $pass = trim($_POST['pass']);
        $phone = trim($_POST['phone']);
        $password = hash('sha256', $pass);
        $query = "insert into people(username,pass,phone) values(?, ?, ?)";
        $stmt = $pdo->prepare($query);
        $stmt->execute([$username, $password, $phone]);
        $rowsAdded = $stmt->rowCount();
        if ($rowsAdded == 1)
        {
            $message = "Success! Proceed to login";
            unset($pass);
            unset($phone);
            header("Location: login.php");
        }
        else
        {
            $message = "Failed! For some reason";
        }
    }
?>

<?php include('header.php'); ?>
    <div id="home-view" class="container-fluid">
        <div id="register" class="container">
            <form class="text-center border border-light p-5" action="register.php" method="post">
                <p class="h4 mb-4">Sign up</p>

                <!-- <div class="form-row mb-4">
                    <div class="col">
                        <input type="text" id="defaultRegisterFormFirstName" class="form-control" placeholder="First name">
                    </div>
                    <div class="col">
                        <input type="text" id="defaultRegisterFormLastName" class="form-control" placeholder="Last name">
                    </div>
                </div> -->

                <input type="text" name="username" id="defaultRegisterFormUsername" class="form-control mb-4" placeholder="Username">

                <input type="password" name="pass" id="defaultRegisterFormPassword" class="form-control" placeholder="Password" aria-describedby="defaultRegisterFormPasswordHelpBlock">
                <small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
                    At least 64 characters, including 2 digits
                </small>

                <input type="text" name="phone" id="defaultRegisterFormPhone" class="form-control" placeholder="Phone number" aria-describedby="defaultRegisterFormPhoneHelpBlock">
                <small id="defaultRegisterFormPhoneHelpBlock" class="form-text text-muted mb-4">
                    Optional - for two step authentication
                </small>

                <!-- <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="defaultRegisterFormNewsletter">
                    <label class="custom-control-label" for="defaultRegisterFormNewsletter">Subscribe to our newsletter</label>
                </div> -->

                <button class="btn btn-info my-4 btn-block" type="submit" name="sca" value="Create Account">Sign up</button>

                <!-- <p>or sign up with:</p>
                <a href="#" class="mx-2" role="button"><i class="fab fa-facebook-f light-blue-text"></i></a>
                <a href="#" class="mx-2" role="button"><i class="fab fa-twitter light-blue-text"></i></a>
                <a href="#" class="mx-2" role="button"><i class="fab fa-linkedin-in light-blue-text"></i></a>
                <a href="#" class="mx-2" role="button"><i class="fab fa-github light-blue-text"></i></a> -->

                <hr>
                <p>By clicking
                    <em>Sign up</em> you agree to our
                    <a href="" target="_blank">terms of service</a>
                </p>

                <p>Already a member?
                    <a href="login.php">Login</a>
                </p>
            </form>
        </div>
    </div>
<?php include('footer.php'); ?>
