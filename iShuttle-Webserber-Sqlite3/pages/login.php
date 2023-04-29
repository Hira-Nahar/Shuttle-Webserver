<?php include 'includes/header.php'; ?>

<?php

    if(isset($_SESSION['id']))
    {
        header('Location:dashboard.php');
    }

?>

<section class="py-5 mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card bg-light">
                    <div class="card-header text-center">
                        <h3>Login Your Account</h3>
                    </div>
                    <div class="card-body">
                        <h5 class="text-danger text-center md-4"><?php echo isset($message) ? $message: '';?></h5>
                        <form action="action.php" method="POST">
                            <div class="form-group row">
                                <label class="col-form-label col-md-3">Email</label>
                                <div class="col-md-9">
                                    <input type="email" class="form-control" name="email">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-3">Password</label>
                                <div class="col-md-9">
                                    <input type="password" class="form-control" name="password">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" name="btn" class="btn btn-outline-success btn-block" value="login"/>
                                </div>
                            </div>
                        </form>
                    </div>
                <div>
            </div>
        </div>
    </div>

</section>


  

