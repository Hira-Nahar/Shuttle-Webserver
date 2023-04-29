<?php include './includes/header.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BHS</title>
    <link rel="stylesheet" href="../assets/css/fontawsome.css"/>
    <link rel="stylesheet" href="../assets/css/bootstrap.css"/>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="../assets/css/app's.css"/>
    <link rel="stylesheet" href="../assets/css/system.css"/>
    <link rel="stylesheet" href="../assets/css/service.css"/>
    <link rel="stylesheet" href="../assets/css/style.css"/>
</head>
<body>
<section>
  <header>
 
   
            <section id="banner">
                    <div class="banner-container d-flex justify-content-center align-items-center">
                        <div class="banner-contents text-center">
                            <h1 class="font-weight-bolder text-white mb-5">The Future factory</h1>
                            <p class="banner-text py-10">“The best time to plant a tree was 20 years ago.</br>The second best time is now.”</p>
                            <button class="btn btn-lg btn-primary mr-3" onclick="window.open('https://www.bhs-intralogistics.com/')" class="request-callback"><i class="fa-brands fa-google"></i>  | Get Started</button>
                            <button class="btn btn-lg btn-primary mr-3" onclick="location.href='https://www.youtube.com/watch?v=2Bk4ZRzbJ1s&ab_channel=BHSCorrugated'"><i class="fa-brands fa-youtube"></i>  | BHS-Corrugated</button>
                        </div>
                    </div>
                  </section>

  </header>
</section>

            <!-- Middel part -->
            <section id="features" class="text-center">
                <div class="row">
                    <div class="col-lg-4 d-block d-lg-flex">
                        <div class="features-col box">
                            <img src="../assets/img/1.jpg" alt="" height="150px" width="100%">
                            <a href="action.php" class="serialBtn"><h5 class="font-weight-bold chart-color">Serial Number</h5></a>
                            <p class="small chart-color">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam ipsum ut quibusdam aliquid delectus nes</p>
                        </div>
                    </div>
                    <div class="col-lg-4 d-block d-lg-flex">
                        <div class="features-col box">
                            <i class="fa-solid fa-battery-full fa-5x icon-style rounded-circle"></i>
                            <h5 class="font-weight-bold chart-color">Battery Charge</h5>
                            <p class="small chart-color"> Schumacher SC1280 Fully Automatic Battery Charger and Maintainer 15 Amp/3 Amp 6V/12V - for Marine and Automotive Batteries: Battery Chargerss.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 d-block d-lg-flex">
                        <div class="features-col box">
                            <i class="fa-solid fa-wifi fa-3x icon-style rounded-circle"></i>
                            <h5 class="font-weight-bold chart-color">Wifi-Connection</h5>
                            <p class="small chart-color">IP:00124512 121</br>Router Name: Lorem</p>
                            <!-- <button class="btn btn-success" data-toggle="modal" data-target="#myModal"> Connected</button> -->
                            <!-- <a href="" class="btn btn-success" data-toggle="modal" data-target="#myModal">Connected</a> -->
                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                              Connected
                            </button>
                            
                          </div>
                    </div>
                </div>

            </section>
            <!-- Middel part End-->

            <section class="system-health text-right">
                <div class="container">
                    <div class="row">
                        <div class="col-5 health-1">
                            <h1 class="text-white">BHS iShuttle</h1>
                            <h4 class="chart-color">System Health</h4>
                            <p class="chart-color">The Shuttle System is combined with pick stations where orders are prepared according to the goods to person method. The boxes are automatically sent to one of these two types of workstations:</p>
                        </div>
                        <div class="col-5 health-2 text-center">
                            <h2 class="chart-color">TECHNICAL DATA</h2>
                            <table class="table table-dark table-striped">
                                <tbody>
                                    <tr>
                                    
                                      <td>Max. AS/RS height</td>
                                      <td>Max. AS/RS length</td>
                                      <td>Shuttle speed</td>
                                      <td>AS/RS temperature</td>
                                    </tr>
                                    <tr>
                                      
                                      <td>20 m</td>
                                      <td>100 m</td>
                                      <td>Up to 4 m/s</td>
                                      <td>From 0 to 40 °C</td>
                                    </tr>
                                    
                                  </tbody>
                              </table>
                      
                        </div>
                    </div>
                </div>
            </section>
            
                
           
        </div>
  </section>



  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5 text-danger" id="exampleModalLabel">Wifi Connection failed !!!!</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          You have to login first.....
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
          <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
        </div>
      </div>
    </div>
  </div>


<?php include './includes/footer.php'; ?>