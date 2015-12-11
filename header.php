<!DOCTYPE html>
<html>
        <head>
                <title>FSX Inc.</title>
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <meta name="description" content="">
                <meta name="author" content="">
                <link href = "css/bootstrap.min.css" rel = "stylesheet">
                <link href = "css/style.css" rel = "stylesheet">
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
                <script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
                <script type="text/javascript" src="js/siteFunc.js"></script>
        </head>
        <body data-spy="scroll" data-target="#navbar-example">
               
                <div class = "navbar navbar-inverse navbar-static-top">
                        <div class = "container">
                               
                                <a href="index.php" class="pull-left"><img src="css/fsxLogo.png" id="logo" height="60" width="80"></a>
                               
                                <button class = "navbar-toggle" data-toggle = "collapse" data-target = ".navHeaderCollapse">
                                        <span class = "icon-bar"></span>
                                        <span class = "icon-bar"></span>
                                        <span class = "icon-bar"></span>
                                </button>
                               
                                <div class = "collapse navbar-collapse navHeaderCollapse">
                               
                                        <ul class = "nav navbar-nav navbar-right">
                                       
                                                <li class = "active"><a href = "index.php">Home</a></li>
                                                 <li class = "dropdown">
                                                       
                                                        <a href = "basepkg.php" class = "dropdown-toggle" data-toggle = "dropdown">Products <b class = "caret"></b></a>
                                                        <ul class = "dropdown-menu">
                                                                <li><a href = "basepkg.php">Complete Cleaning Package</a></li>
                                                                <li><a href = "trapblaster7.php">Trapblaster Pneumatic Cleaners</a></li>
                                                                <li><a href = "trapburner7.php">Trapburner Thermal Cleaners</a></li>
                                                                <li><a href = "traptester.php">Traptester Airflow Tester</a></li>
                                                                <li><a href = "sootsucker2.php">Sootsucker 2 Dust Collector</a></li>
                                                                <li><a href = "bannersposters.php">FSX Banners & Posters</a></li>
                                                                <li><a href = "accessories.php">Accessories</a></li>
                                                                <li class="dropdown-submenu">
                                                                <a tabindex="-1" href="#">Extras</a>
                                                                <ul class="dropdown-menu">
                                                                  <li><a href="bidSpecLang.php">Bid Specification</br> Language</a></li>
                                                                  <li><a href="baselineChart.php">Baseline Chart</a></li>
                                                                  <li><a href = "cleaningmanual.php">FSX Cleaning Manual</a></li>
                                                                </ul>
                                                              </li>
                                                                
                                                        </ul>
                                               
                                                </li>
                                               <li class = "dropdown">
                                                       
                                                        <a href = "#" class = "dropdown-toggle" data-toggle = "dropdown">Competitive Comparison <b class = "caret"></b></a>
                                                        <ul class = "dropdown-menu">
                                                                <li><a href = "cleaningcomparison.php">Cleaning Technology Comparison</a></li>
                                                                <li><a href = "featureschecklist.php">Features Checklist</a></li>
                                                        </ul>
                                               
                                                </li>
                                                <li class = "dropdown">
                                                       
                                                        <a href = "#" class = "dropdown-toggle" data-toggle = "dropdown">Enviromental & Saftey <b class = "caret"></b></a>
                                                        <ul class = "dropdown-menu">
                                                                <li><a href = "reccSafteyEquip.php">Recommended Saftey Equipment</a></li>
                                                                <li><a href = "sootashdisposal.php">Soot & Ash Disposal</a></li>
                                                                <li><a href = "dpfashcompo.php">DPF Ash Composition</a></li>
                                                                <li><a href = "sdsdiesalsoot.php">SDS of Diesel Soot & Ash</a></li>
                                                        </ul>
                                               
                                                </li>
                                                <li class = "dropdown">
                                                       
                                                        <a href = "#" class = "dropdown-toggle" data-toggle = "dropdown">About Us <b class = "caret"></b></a>
                                                        <ul class = "dropdown-menu">
                                                                <li><a href = "servicelocator.php">Service Locator Map</a></li>
                                                                <li><a href = "news.php">News</a></li>
                                                                <li><a href = "videos.php">Videos</a></li>
                                                        </ul>
                                               
                                                </li>
                                                <li><a href = "contact.php">Contact</a></li>
                                       
                                        </ul>
                               
                                </div>
                               
                        </div>
                </div>

                <div class = "modal fade" id = "contact" role = "dialog">
                   <div class= "modal-dialog">
                        <div class = "modal-content">
                           <form class= "form-horizontal">
                                   <div class = "modal-header">
                                        <h4>Contact FSX</h4>
                                   </div>
                                   <div class = "modal-body">
                                        
                                        <div class = "form-group">
                                                <label for = "contact-name" class = "col-lg-2 control-label">Name:</label>
                                                <div class = "col-lg-10">
                                                        <input type = "text" class = "form-control" id = "contact-name" placeholder = "Full Name">
                                                </div>
                                        </div>
                                        <div class = "form-group">
                                                <label for = "contact-email" class = "col-lg-2 control-label">Email:</label>
                                                <div class = "col-lg-10">
                                                        <input type = "email" class = "form-control" id = "contact-email" placeholder = "me@example.com">
                                                </div>
                                        </div>
                                        <div class = "form-group">
                                                <label for = "contact-message" class = "col-lg-2 control-label">Message:</label>
                                                <div class = "col-lg-10">
                                                       <textarea class = "form-control" rows = "8" placeholder = "Don't forget to provide your contact number!"></textarea> 
                                                </div>
                                        </div>

                                   </div>
                                   <div class = "modal-footer">
                           </form>                              
                                <button class = "btn btn-danger" data-dismiss="modal">Close</button>
                                <button class = "btn btn-primary" type = "submit">Send</button>
                           </div>
                        </div>
                   </div>
                </div>
