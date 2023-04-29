<?php include './includes/header.php'; ?>

<?php
    if(!isset($_SESSION['id']))
    {
        header('location:login.php');
    }
    // else if($_SESSION['user_type'] == 0)
    // {
    //     header('location:dashboard.php');
    // }
?>

<section>
                <div class="container">
                    <div class="row chart py-5 mb-5 mt-5">
                        <div class="col-6">
                            <img src="../assets/img/chart-1.png" alt="" height="300px" width="400px">
                        </div>
                        <div class="col-6">
                            <img src="../assets/img/chart-4.png" alt="" height="300px" width="400px">
                        </div>
                        <div class="col-6 py-5 mb-5 mt-5">
                            <img src="../assets/img/chart-2.png" alt="" height="300px" width="400px">
                        </div>
                        <div class="col-6 py-5 mb-5 mt-5">
                            <img src="../assets/img/chart-3.png" alt="" height="300px" width="400px">
                        </div>
                    </div>
                </div>
            </section>

<?php include './includes/footer.php'; ?>