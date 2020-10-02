<?php include('header.php'); ?>
    <div id="home-view" class="container-fluid">
        <div id="login" class="container">
            <form class="text-center border border-light p-5" action="#!">
                <p class="h4 mb-4">Sign in</p>
            
                <input type="text" id="defaultLoginFormUsername" class="form-control mb-4" placeholder="Username">
            
                <input type="password" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Password">
            
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
