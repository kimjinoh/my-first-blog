<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="http://code.jquery.com/jquery-latest.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
        <style>
        .serchbar{
          padding:5%;
        }
        </style>

      <style media="screen">
            #overlay_t,#overlay_t2{
              background-color: #000;
              bottom: 0;
              left: 0;
              opacity: 0.5;
              filter: alpha(opacity = 50); /* IE7 & 8 */
              position: fixed;
              right: 0;
              top: 0;
              z-index: 99;
              display:none;}

            #popup_layer,#popup_layer2{ width:400px;
              padding: 20%;
              margin-bottom:30px;
              background:#fff;
              border:solid 1px #ccc;
              color: black;
              position:absolute;
              top:50%; left:50%;
              position: fixed;
              box-shadow: 0px 1px 20px #333;
              z-index:100; display:none;}

            .btn-category{
              background-color: RGBA(0,0,0,0);
              color: white;
            }
            .menubar{
                list-style-type: none;
                margin: 0;
                padding: 0;
                overflow: hidden;

            }

            .menuli {
                float: left;
            }

            .menuli a {
                display: block;
                color: white;
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;
            }

            .menuli a:hover {
                background-color: #111;
            }
            .nav-icon{
                width:20px;
                height:20px;
            }
            .cctv-icon{
                width:32px;
                height:32px;
            }

      </style>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-danger">
            <a class="navbar-brand" href="index.html">Smart CCTV&nbsp;<img class="cctv-icon" src="img/eye.png"></a>
            <!-- Navbar-->
            <ul class="menubar">
                <li class="menuli"><a class="active" href="#home"><img class="nav-icon" src="img/video-camera.png">&nbsp;Cameras</a></li>
                <li class="menuli"><a href="#"><img class="nav-icon" src="img/redo.png">&nbsp;Event Log</a></li>
                <li class="menuli"><a href="#"><img class="nav-icon" src="img/data.png">&nbsp;Video Export</a></li>
                <li class="menuli"><a href="#"><img class="nav-icon" src="img/report.png">&nbsp;Report</a></li>
                <li class="menuli"><a href="#"><img class="nav-icon" src="img/settings.png">&nbsp;Settings</a></li>
                <li class="menuli"><a href="#"><img class="nav-icon" src="img/question.png">&nbsp;Help</a></li>
            </ul>
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">Settings</a><a class="dropdown-item" href="#">Activity Log</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="login.html">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu" style="padding-left: 5%; padding-right: 5%;">
                        <div class="nav">
                            <br>
                          <!-- Navbar Search-->
                            <form>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <button id="button-addon8" type="submit" class="btn btn-danger"><i class="fa fa-search"></i></button>
                                    </div>
                                    <input type="search" placeholder="Search for..." aria-describedby="button-addon8" class="form-control">
                                </div>
                            </form>
                        </div>
                        <br><br>
                            <div class="sb-sidenav-menu-heading">CCTV</div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts"
                                ><div class="sb-nav-link-icon"></div>
                                branch_1
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                            ></a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="">section1</a><a class="nav-link" href="">section2</a></nav>
                            </div>

                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts"
                            ><div class="sb-nav-link-icon"></div>
                                <?php
                                if (isset($_POST["makecate"]))
                                {
                                    $makecate = $_POST["makecate"];
                                    echo $makecate;
                                }
                                else
                                {
                                    $makecate = null;
                                    echo "branch2";
                                }
                                ?>
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="">
                                        <?php
                                    if (isset($_POST["regcamera"]))
                                    {
                                    $regcamera = $_POST["regcamera"];
                                    echo $regcamera;
                                    }
                                    else
                                    {
                                   $regcamera = null;
                                    echo "camera1";
                                    }
                                    ?>
                                    </a>
                                </nav>
                            </div>

                    </div>










                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content" style="margin-left:13%; margin-top:5%;">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">My  camera</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <!--div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Primary Card</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Warning Card</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Success Card</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Danger Card</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>-->
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card mb-4">
                                    <div class="card-header">section1</div>
                                    <div class="card-body"><canvas id="myAreaChart" width="100%" height="250"></canvas></div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card mb-4">
                                    <div class="card-header">section2</div>
                                    <div class="card-body"><canvas id="myBarChart" width="100%" height="250"></canvas></div>
                                </div>
                            </div>

                        <div class="col-md-4">
                            <div class="card mb-4">
                                <div class="card-header">section3</div>
                                <div class="card-body"><canvas id="myAreaChart" width="100%" height="250"></canvas></div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-4">
                                <div class="card-header">counter</div>
                                <div class="card-body"><canvas id="myAreaChart" width="100%" height="250"></canvas></div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-4">
                                <div class="card-header">kitchen</div>
                                <div class="card-body"><canvas id="myAreaChart" width="100%" height="250"></canvas></div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-4">
                                <div class="card-header">warehouse</div>
                                <div class="card-body"><canvas id="myAreaChart" width="100%" height="250"></canvas></div>
                            </div>
                        </div></div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; LOOKATTHIS Website 2002</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>

    </body>
</html>
