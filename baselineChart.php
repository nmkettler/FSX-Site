<!DOCTYPE html>
<html>
<head>
    <title>FSX Inc.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href = "css/bootstrap.min.css" rel = "stylesheet">
    <link href = "css/style.css" rel = "stylesheet">
    <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
    <script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
    <script type="text/javascript" src="js/siteFunc.js"></script>
    <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.10/js/jquery.dataTables.js"></script>


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
                              <a tabindex="-1" href="basepkg.php">Extras</a>
                              <ul class="dropdown-menu">
                                <li><a href="bidSpecLang.php">Bid Specification</br> Language</a></li>
                                <li><a href="baselineChart.php">Baseline Chart</a></li>
                                <li><a href = "cleaningmanual.php">FSX Cleaning Manual</a></li>
                              </ul>
                            </li>
                              
                      </ul>
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
                <li><a href = "#contact" data-toggle="modal">Contact</a></li>

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
<div class = "container">
  <table id="example">
     <thead>
        <tr valign="top">
            <td width="37%" valign="middle">DPF Air Pressure Baseline <br>
              Cleaning Range Mastersheet<span class="clear"></span><br>
                As measured on FSX Trap Tester™
                </td>
                <td width="15%" valign="middle">Last Modified:      September 17, 2015 
                </td> 
                  <td width="25%" align="center" valign="top"><a href="FSXBaselineChart.pdf" target="_parent">Download Updated <br>
                  <img src="img/pdf.jpg" width="42" height="42" alt="Baseline PDF"><br>
                  Baseline Chart PDF</a></td>
                  <td width="23%" align="center" valign="top">
                  <a href="DPF_Cleaning_WorkSheet.pdf" target="_new">Download <br>      
                  <img src="img/CleaningWorksheetSmall.jpg" alt="DPF Cleaning Worksheet" width="43" height="42"><br>
                  DPF Cleaning Worksheet</a><a href="DPF_Cleaning_WorkSheet.pdf"> </a></td>
                 </tr>
        <tr>
            <th>Manufacturer</th>
            <th>Part No.</th>
            <th>Alt part No.</th>
            <th>Customer Provided Baseline</th>
            <th>Red Tag (if below)</th>
            <th>Baseline</th>
            <th>Green Tag Range</th>
            <th>Orange Tag Range</th>
            <th>Red Tag (if above)</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th>Manufacturer</th>
            <th>Part No.</th>
            <th>Alt part No.</th>
            <th>Customer Provided Baseline</th>
            <th>Red Tag (if below)</th>
            <th>Baseline</th>
            <th>Green Tag Range</th>
            <th>Orange Tag Range</th>
            <th>Red Tag (if above)</th>
        </tr>
    </tfoot>
            <tbody>

          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">Caterpillar</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">260-7807</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> </td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"></td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 2.50
            </td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">2.50</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">2.50 - 3.00</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">3.05 - 3.50</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 3.50</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">Caterpillar</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">261-2318</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> 2020917</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 2.35</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">2.35</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">2.35 - 2.85</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">2.90 - 3.35</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 3.35</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">Caterpillar</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">264-1556</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> 2021619</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 2.35</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">2.35</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">2.35 - 2.85</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">2.90 - 3.35</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 3.35</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">Caterpillar</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">272-2425</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> </td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 2.35</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">2.35</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">2.35 - 2.85</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">2.90 - 3.35</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 3.35</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">Caterpillar</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">283-7213
            </td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> </td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 2.25</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">2.25</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">2.25 - 2.75</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">2.80 - 3.25</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 3.25</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">Caterpillar</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">285-3365</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> </td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 2.25</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">2.25</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">2.25 - 2.75</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">2.80 - 3.25</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 3.25</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">Caterpillar</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">290-0045</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> </td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 2.25</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">2.25</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">2.25 - 2.75</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">2.80 - 3.25</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 3.25</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">Caterpillar</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">291-8514</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> </td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 2.25</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">2.25</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">2.25 - 2.75</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">2.80 - 3.25</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 3.25</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">Caterpillar</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">291-8519</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> </td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 2.10</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">2.10</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">2.10 - 2.60</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">2.65 - 3.10</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 3.10</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">Caterpillar</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">291-8520</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> </td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 2.25</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">2.25</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">2.25 - 2.75</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">2.80 - 3.25</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 3.25</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">Caterpillar</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">292-2944</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> </td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 2.25</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">2.25</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">2.25 - 2.75</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">2.80 - 3.25</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 3.25</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">Caterpillar</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">299-3513</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> </td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 2.25</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">2.25</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">2.25 - 2.75</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">2.80 - 3.25</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 3.25</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">Caterpillar</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">304-7502</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> </td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 2.25</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">2.25</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">2.25 - 2.75</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">2.80 - 3.25</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 3.25</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">Caterpillar</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">304-7578</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> </td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 2.35</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">2.35</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">2.35 - 2.85</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">2.90 - 3.35</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 3.35</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">Caterpillar</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">305-4565</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> </td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 2.50</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">2.50</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">2.50 - 3.00</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">3.05 - 3.50</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 3.50</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">Cleaire</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">CJF-110</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> </td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 3.00</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">3.00</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">3.00 - 3.50</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">3.55 - 4.05</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 4.05</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">Cleaire</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">CJF-201-EPF</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> </td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 3.00</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">3.00</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">3.00 - 3.50</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">3.55 - 4.05</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 4.05</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">Cleaire</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">JF-110</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> </td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 3.00</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">3.00</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">3.00 - 3.50</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">3.55 - 4.20</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 4.20</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">Cleaire</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">JF-203</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> </td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> Y </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 3.00</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">3.00</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">3.00 - 3.50</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">3.55 - 4.20</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 4.20</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">Cleaire</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">JF-210</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> </td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 3.00</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">3.00</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">3.00 - 3.50</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">3.55 - 4.20</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 4.20</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">Cleaire</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">KF-110</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> </td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 3.00</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">3.00</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">3.00 - 3.50</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">3.55 - 4.20</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 4.20</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">Cummins</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">A029S553</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> Q102905</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 1.25</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">1.25</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">1.25 - 1.75</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">1.80 - 2.25</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 2.25</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">Cummins</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">A034X191</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> 5283669</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 1.30</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">1.30</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">1.30 - 1.80</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">1.85 - 2.30</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 2.30</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">Cummins</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">A034X329</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> 5283778</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 1.40</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">1.40</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">1.40 - 1.90</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">1.95 - 2.40</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 2.40</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">Cummins</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">A034X344</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> 5283799</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 1.60</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">1.60</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">1.60 - 2.10</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">2.15 - 2.60</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 2.60</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">Cummins</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">A041D448</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> 5295609</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> Y </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 1.10</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">1.10 w/gap</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">1.10 - 1.60</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">1.65 - 2.10</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 2.10</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">Cummins</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">A041L187</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> 5297522</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> Y </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 1.40</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">1.40</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">1.40 - 1.90</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">1.95 - 2.40</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 2.40</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">Cummins</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">A041M783</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> 5297990</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> Y </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 1.70</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">1.70 w/gap</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">1.70 - 2.20</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">2.25 - 2.70</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 2.70</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">Cummins</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">A047B789</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> 4352923</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> Y </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 1.30</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">1.30</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">1.30 - 1.80</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">1.85 - 2.30</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 2.30</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">Cummins</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">Q617787</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> </td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 3.00</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">3.00</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">3.00 - 3.50</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">3.55 - 4.00</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 4.00</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">Cummins</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">Q617788</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> </td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 2.50</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">2.50</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">2.50 - 3.00</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">3.05 - 3.50</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 3.50</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">Cummins</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">Q617940</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> </td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 2.50</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">2.50</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">2.50 - 3.00</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">3.05 - 3.50</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 3.50</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">Cummins</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">Q618059</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> </td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 2.25</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">2.25</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">2.25 - 2.75</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">2.80 - 3.25</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 3.25</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">Cummins</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">Q618458</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> </td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 2.50</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">2.50</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">2.50 - 3.00</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">3.05 - 3.50</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 3.50</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">Cummins</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">Q618747</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> </td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 2.50</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">2.50</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">2.50 - 3.00</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">3.05 - 3.50</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 3.50</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">Cummins</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">Q618750</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> </td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 3.00</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">3.00</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">3.00 - 3.50</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">3.55 - 4.00</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 4.00</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">Cummins</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">Q619495</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> </td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 2.50</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">2.50</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">2.50 - 3.00</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">3.05 - 3.50</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 3.50</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">Cummins</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">Q619725</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> </td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 2.50</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">2.50</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">2.50 - 3.00</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">3.05 - 3.50</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 3.50</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">Cummins</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">Q620145</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> </td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 2.50</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">2.50</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">2.50 - 3.00</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">3.05 - 3.50</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 3.50</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">Cummins</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">Q620723</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> </td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 1.75</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">1.75 w/gap</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">1.75 - 2.25</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">2.30 - 2.75</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 2.75</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">Cummins</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">Q620940</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> 4965055</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 2.10</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">2.10 w/gap</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">2.10 - 2.60</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">2.65 - 3.10</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 3.10</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">Cummins</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">Q621328</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> 208 64127</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> Y </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 2.10</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">2.10</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">2.10 - 2.60</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">2.65 - 3.10</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 3.10</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">Cummins</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">Q621334</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> </td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 1.90</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">1.90 w/gap</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">1.90 - 2.40</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">2.45 - 2.90</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 2.90</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">Cummins</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">Q621371</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> 4965286</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 2.50</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">2.5 w/gap</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">2.50 - 3.00</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">3.05 - 3.50</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 3.50</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">Cummins</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">Q621376</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> 4965227</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> Y </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 3.35</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">3.35</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">3.35 - 3.85</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">3.90 - 4.35</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 4.35</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">Cummins</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">Q621378</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> 4965244</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 2.10</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">2.10 w/gap</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">2.10 - 2.60</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">2.65 - 3.10</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 3.10</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">Cummins</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">Q621386</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> 4965287</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 3.30</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">3.30</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">3.30 - 3.80</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">3.85 - 4.30</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 4.30</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">Cummins</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">Q621402</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> 4965224</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> Y </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 2.25</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">2.25 w/gap</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">2.25 - 2.75</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">2.80 - 3.25</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 3.25</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">Cummins</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">Q621414</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> </td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 1.90</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">1.90 w/gap</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">1.90 - 2.40</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">2.45 - 2.90</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 2.90</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">Cummins</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">Q621418</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> 20846316</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> Y </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 1.85</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">1.85</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">1.85 - 2.35</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">2.40 - 2.85</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 2.85</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">Cummins</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">Q621560</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> 4965392</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> Y </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 2.50</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">2.50</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">2.50 - 3.00</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">3.05 - 3.50</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 3.50</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">Cummins</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">Q621936</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> 4969701</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 1.90</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">1.90 w/gap</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">1.90 - 2.40</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">2.45 - 2.90</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 2.90</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">Cummins</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">Q621937</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> 4969702</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 1.90</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">1.90 w/gap</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">1.90 - 2.40</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">2.45 - 2.90</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 2.90</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">Cummins</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">Q621938</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> 4969703</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> Y </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 2.10</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">2.10</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">2.10 - 2.60</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">2.65 - 3.10</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 3.10</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">Cummins</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">Q622329</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> </td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> Y </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 2.70</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">2.70</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">2.70 - 3.20</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">3.25 - 3.70</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 3.70</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">Cummins</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">Q622369</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> </td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 1.90</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">1.90 w/gap</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">1.90 - 2.40</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">2.45 - 2.90</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 2.90</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">Cummins</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">Q623804</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> 4969838</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 2.40</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">2.40 w/gap</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">2.40 - 2.90</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">2.95 - 3.40</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 3.40</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">Cummins</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">Q629356</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> 2871462</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 3.30</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">3.30</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">3.30 - 3.80</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">3.85 - 4.30</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 4.30</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">Cummins</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">Q629362</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> 2871463</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 1.90</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">1.90</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">1.90 - 2.40</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">2.45 - 2.90</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 2.90</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">Cummins</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">Q629458</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> 2871578 - plug sensor ports for test</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 1.30</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">1.30</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">1.30 - 1.80</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">1.85 - 2.30</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 2.30</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">Cummins</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">Q629477</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> 2871581</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 1.25</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">1.25</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">1.25 - 1.75</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">1.80 - 2.25</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 2.25</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">DCL</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">3000-DQ-5C57-21</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> </td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 4.50</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">4.50</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">4.50 - 5.00</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">5.05 - 5.50</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 5.50</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">DCL</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">4000-DQ-5C55-21</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> </td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 4.00</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">4.00</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">4.00 - 4.50</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">4.55 - 5.00</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 5.00</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">DCL</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">4000-DQ-5C57-21</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> </td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 4.00</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">4.00</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">4.00 - 4.50</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">4.55 - 5.00</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 5.00</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">DCL</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">4000-FF-5S57-21</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> (Combo)</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 4.70</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">4.70</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">4.70 - 5.20</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">5.25 - 5.70</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 5.70</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">DCL</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">5000-DX-5C51-21</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> </td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 2.00</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">2.00</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">2.00 - 2.50</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">2.55 - 3.00</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 3.00</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">DCL</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">5215-SA-5C51-21</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> </td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 2.00</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">2.00</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">2.00 - 2.50</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">2.55 - 3.00</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 3.00</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">DCL</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">5500-DX-5C51-21</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> </td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 2.00</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">2.00</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">2.00 - 2.50</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">2.55 - 3.00</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 3.00</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">DCL</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">6000-DX-5C51-21</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> </td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 2.00</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">2.00</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">2.00 - 2.50</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">2.55 - 3.00</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 3.00</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">DCL</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">6125-FF-5S56-11</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> </td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 1.75</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">1.75</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">1.75 - 2.25</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">2.30 - 2.75</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 2.75</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">DCL</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">95E5-SA-5C57-21</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> </td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 4.50</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">4.50</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">4.50 - 5.00</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">5.05 - 5.50</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 5.50</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">DCL</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">RDJ6-FF-5S57-21</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> (Combo)</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 4.75</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">4.75</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">4.75 - 5.25</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">5.30 - 5.75</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 5.75</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">DCL</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">RDJ6-FF-5S57-21</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> (Trap only)</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 4.70</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">4.70</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">4.70 - 5.20</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">5.25 - 5.70</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 5.70</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">Detroit Diesel</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">23535827</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> </td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 2.50</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">2.50</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">2.50 - 3.00</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">3.05 - 3.50</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 3.50</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">Detroit Diesel</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">29278B</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> </td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 3.00</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">3.00</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">3.00 - 3.50</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">3.55 - 4.00</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 4.00</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">Detroit Diesel</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">29278N</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> </td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 3.00</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">3.00</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">3.00 - 3.50</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">3.55 - 4.00</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 4.00</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">Detroit Diesel</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">A680 490 1592</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> </td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> Y </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 2.70</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">2.70</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">2.70 - 3.20</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">3.25 - 3.75</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 3.75</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">Detroit Diesel</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">A680 491 0294</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> </td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> Y </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 2.70</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">2.70</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">2.70 - 3.20</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">3.25 - 3.75</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 3.75</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">Detroit Diesel</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">A680 491 0494</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> </td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> Y </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 3.50</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">3.50</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">3.50 - 4.0</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">4.05 - 4.50</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 4.50</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">Detroit Diesel</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">A680 491 0594</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> </td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> Y </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 2.70</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">2.70</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">2.70 - 3.20</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">3.25 - 3.75</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 3.75</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">Detroit Diesel</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">A680 491 0894</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> </td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> Y </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 3.30</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">3.30</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">3.30 - 3.80</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">3.85 - 4.30</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 4.30</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">Donaldson</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">232172</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> </td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> Y </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 2.90</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">2.90</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">2.90 - 3.40</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">3.45 - 3.90</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 3.90</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">Donaldson</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">P226355</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> </td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 2.95</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">2.95</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">2.95 - 3.50</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">3.55 - 4.00</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 4.00</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">Donaldson</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">P226355-N3</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> </td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 2.50</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">2.50</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">2.50 - 3.00</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">3.05 - 3.50</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 3.50</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">ECS</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">SC13, SCP13M, &amp; EGR PCS13</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> </td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 3.80</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">3.80</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">3.80 - 4.30</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">4.35 - 4.80</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 4.80</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">ECS</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">SC17, SCP17M, &amp; EGR PCS17</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> </td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 3.20</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">3.20</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">3.20 - 3.70</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">3.75 - 4.20</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 4.20</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">ECS</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">SC20 &amp; SCP20M</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> </td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 3.10</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">3.10</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">3.10 - 3.60</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">3.65 - 4.10</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 4.10</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">ECS</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">SC23, SCP23M, &amp; EGR PC23</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> </td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 2.80</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">2.80</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">2.80 - 3.30</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">3.35 - 3.80</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 3.80</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">ECS</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">SC28, SCP28M, &amp; EGR PC28</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> </td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 2.60</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">2.60</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">2.60 - 3.10</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">3.15 - 3.60</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 3.60</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">ECS</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">SC35, SCP35M, &amp; EGR PC35</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> </td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 2.20</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">2.20</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">2.20 - 2.70</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">2.75 - 3.20</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 3.20</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">ECS</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">SC43</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> </td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 2.00</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">2.00</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">2.00 - 2.50</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">2.55 - 3.00</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 3.00</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">EMD</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">82022894B</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> 82022893-00</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 2.25</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">2.25</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">2.25 - 2.75</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">2.80 - 3.25</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 3.25</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">Engelhard</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">B108-107</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> </td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 2.50</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">2.50</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">2.50 - 3.00</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">3.05 - 3.50</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 3.50</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">ESW</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">All Part Numbers</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> ESW provided measurements</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> Y </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 2.60</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">2.60</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">2.60 - 3.60</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">3.70 - 4.90</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 5.00</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">Fleetguard/Nelson</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">23532502</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> </td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 2.50</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">2.50</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">2.50 - 3.00</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">3.05 - 3.50</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 3.50</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">Fleetguard/Nelson</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">29410A</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> </td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 2.50</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">2.50</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">2.50 - 3.00</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">3.05 - 3.50</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 3.50</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">Fleetguard/Nelson</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">29411A</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> </td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 3.00</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">3.00</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">3.00 - 3.50</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">3.55 - 4.00</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 4.00</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">Fleetguard/Nelson</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">29412A</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> </td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 2.50</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">2.50</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">2.50 - 3.00</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">3.05 - 3.50</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 3.50</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">Fleetguard/Nelson</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">29866A</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> </td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 2.50</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">2.50</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">2.50 - 3.00</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">3.05 - 3.50</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 3.50</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">Fleetguard/Nelson</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">29972A</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> </td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 2.50</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">2.50</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">2.50 - 3.00</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">3.05 - 3.50</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 3.50</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">Fleetguard/Nelson</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">Q619296A</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> 23534378</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> Y </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 2.50</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">2.50</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">2.50 - 3.00</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">3.05 - 3.50</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 3.50</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">Ford</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">All 07-09 6.4L</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> Use 7.5in ring. Place DPF bolt end up</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 5.00</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">5.00</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">5.00 - 5.50</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">5.55 - 6.00</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 6.00</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">Hino</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">S1805-E0270</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> DPF/DOC Combo</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 4.20</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">4.20</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">4.20 - 4.70</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">4.75 - 5.20</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 5.20</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">Hino</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">S1805-E068</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> </td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 2.05</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">2.05</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">2.05 - 2.55</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">2.60 - 3.05</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 3.05</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">Hino</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">S1850-E0270</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> DPF/DOC combo - 4 cylinder</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> Y </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 5.00</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">5.00</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">5.00 - 5.50</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">5.55 - 6.00</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 6.00</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">Hino</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">S1850-E0281</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> DPF/DOC combo - 6 cylinder</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> Y </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 4.25</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">4.25</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">4.25 - 4.75</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">4.80 - 5.25</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 5.25</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">Hug</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">R26</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> Call FSX for custom bake program</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> Y </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 2.40</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">2.80</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">2.40 - 3.30</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">3.35 - 3.80</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 3.80</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">Hug</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">R32</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> Call FSX for custom bake program</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> Y </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 1.90</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">2.10</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">1.90 - 2.60</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">2.65 - 3.10</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 3.10</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">Hug</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">R40</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> Call FSX for custom bake program</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> Y </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 1.60</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">1.80</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">1.60 - 2.30</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">2.35 - 2.80</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 2.80</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">Huss</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">FS100MKL</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> </td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> Y </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 2.40</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">2.40</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">2.40 - 2.90</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">2.95 - 3.40</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 3.40</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">Huss</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">FS100MKM</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> </td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> Y </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 2.10</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">2.10</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">2.10 - 2.60</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">2.65 - 3.10</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 3.10</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">International</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">2593981C91</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> </td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 4.30</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">4.30</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">4.30 - 4.80</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">4.85 - 5.30</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 5.30</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">International</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">2594131C91</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> </td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 3.40</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">3.40</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">3.40 - 3.90</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">3.95 - 4.40</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 4.40</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">International</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">2594165C91</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> </td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 3.20</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">3.20</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">3.20 - 3.70</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">3.75 - 4.20</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 4.20</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">International</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">2594356C91</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> </td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 4.20</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">4.20</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">4.20 - 4.70</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">4.75 - 5.20</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 5.20</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">International</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">2594363C91</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> </td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 3.95</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">3.95</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">3.95 - 4.45</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">4.50 - 4.95</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 4.95</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">International</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">2594369C91</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> </td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 3.85</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">3.85</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">3.85 - 4.35</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">4.40 - 4.85</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 4.85</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">International</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">2595055C91</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> </td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 4.60</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">4.60</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">4.60 - 5.10</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">5.10 - 5.60</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 5.60</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">International</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">2596665C91</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> Q622369</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 1.90</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">1.90 w/gap</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">1.90 - 2.40</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">2.45 - 2.90</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 2.90</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">International</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">2601229C91</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> Q621944</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 1.80</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">1.80</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">1.80 - 2.30</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">2.35 - 2.80</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 2.80</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">International</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">2603961C91</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> </td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 2.30</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">2.30</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">2.30 - 2.80</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">2.85 - 3.30</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 3.30</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">International</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">2604043C91</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> </td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 2.30</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">2.30</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">2.30 - 2.80</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">2.85 - 3.30</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 3.30</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">International</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">2604046C91</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> </td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 2.35</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">2.35</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">2.35 - 2.85</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">2.85 - 3.35</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 3.35</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">International</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">2604430C91</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> </td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 2.90</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">2.90</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">2.90 - 3.40</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">3.45 - 3.90</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 3.90</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">International</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">2604823C91</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> 2603961C91</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 2.30</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">2.30</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">2.30 - 2.80</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">2.85 - 3.30</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 3.30</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">International</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">2604828C91</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> 2604043C91</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 2.30</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">2.30</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">2.30 - 2.80</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">2.85 - 3.30</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 3.30</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">International</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">2604830C91</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> 2604046C91</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 2.35</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">2.35</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">2.35 - 2.85</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">2.90 - 3.35</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 3.35</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">International</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">2604870C91</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> </td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 4.15</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">4.15</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">4.15 - 4.65</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">4.70 - 5.15</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 5.15</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">International</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">2604873C91</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> </td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 4.30</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">4.30</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">4.30 - 4.80</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">4.85 - 5.30</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 5.30</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">International</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">2605837C91</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> </td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 3.25</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">3.25</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">3.25 - 3.75</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">3.80 - 4.25</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 4.25</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">International</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">2608438C91</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> 2606157C91</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 2.70</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">2.70</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">2.70 - 3.20</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">3.25 - 3.70</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 3.70</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">International</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">2609066C91</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> set DPF inside test bench hole</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 4.85</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">4.85</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">4.85 - 5.35</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">5.40 - 5.85</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 5.85</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">International</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">2611475C91</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> </td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> Y </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 4.15</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">4.15</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">4.15 - 4.65</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">4.70 - 5.15</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 5.15</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">International</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">2611630C91</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> </td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> Y </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 3.80</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">3.80</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">3.80 - 4.30</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">4.35 - 4.80</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 4.80</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">Isuzu</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">897608056</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> </td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 3.25</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">3.25</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">3.25 - 3.75</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">3.80 - 4.25</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 4.25</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">Isuzu</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">897608057</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> </td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 3.25</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">3.25</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">3.25 - 3.75</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">3.80 - 4.25</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 4.25</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">Isuzu</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">898147066</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> </td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> Y </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 4.30</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">4.30</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">4.30 - 4.80</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">4.85 - 5.35</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 5.35</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">Isuzu</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">898152557</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> </td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 2.70</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">2.70</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">2.70 - 3.20</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">3.25 - 3.70</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 3.70</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">Isuzu</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">898155142</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> </td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 3.40</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">3.40</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">3.40 - 3.90</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">3.95 - 4.40</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 4.40</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">Isuzu</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">898185386</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> </td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 4.10</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">4.10</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">4.10 - 4.60</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">4.65 - 5.10</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 5.10</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">Isuzu Link-Belt (LBX)</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">898152557-2</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> </td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 2.70</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">2.70</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">2.70 - 3.20</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">3.25 - 3.70</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 3.70</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">Isuzu Link-Belt (LBX)</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">898152562-0</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> 897608056-0</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 3.30</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">3.30</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">3.30 - 3.80</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">3.85 - 4.30</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 4.30</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">Isuzu Link-Belt (LBX)</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">898185386-2</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> </td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 4.10</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">4.10</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">4.10 - 4.60</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">4.65 - 5.10</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 5.10</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">Johnson Matthey</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">9188M</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> </td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 2.90</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">2.90</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">2.90 - 3.40</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">3.45 - 3.90</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 3.90</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">Johnson Matthey</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">9198M</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> </td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 2.50</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">2.50</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">2.50 - 3.00</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">3.05 - 3.50</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 3.50</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">Johnson Matthey</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">9199M</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> </td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 1.90</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">1.90</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">1.90 - 2.40</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">2.45 - 2.90</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 2.90</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">Johnson Matthey</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">9200KD</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> </td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 1.65</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">1.65</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">1.65 - 2.15</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">2.20 - 2.65</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 2.65</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">Johnson Matthey</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">99106MD</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> </td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 2.55</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">2.55</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">2.55 - 3.05</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">3.10 - 3.55</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 3.55</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">Johnson Matthey</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">99120KD</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> </td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 2.15</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">2.15</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">2.15 - 2.65</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">2.70 - 3.15</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 3.15</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">Johnson Matthey</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">99124MD</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> </td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 2.00</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">2.00</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">2.00 - 2.50</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">2.55 - 3.00</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 3.00</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">Johnson Matthey</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">K99130KD</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> </td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 1.80</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">1.80</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">1.80 - 2.30</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">2.35 - 2.80</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 2.80</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">Mack</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">208 63 859</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> </td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 2.60</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">2.60</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">2.60 - 3.10</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">3.15 - 3.60</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 3.60</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">Mack</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">208 64 316</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> </td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 1.85</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">1.85</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">1.85 - 2.35</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">2.40 - 2.85</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 2.85</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">Mack</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">208 64 558</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> </td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 2.40</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">2.40</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">2.40 - 2.90</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">2.95 - 3.40</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 3.40</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">Mack</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">210 48 577</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> 2023111</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 2.55</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">2.55</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">2.55 - 3.05</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">3.10 - 3.55</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 3.55</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">Mack</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">212 12 426</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> </td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 2.10</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">2.10</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">2.10 - 2.60</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">2.65 - 3.10</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 3.10</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">Mack</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">212 12 428</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> </td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 2.05</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">2.05</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">2.05 - 2.55</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">2.60 - 3.05</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 3.05</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">Mack</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">212 12 429</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> </td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 1.85</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">1.85</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">1.85 - 2.35</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">2.40 - 2.85</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 2.85</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">Mack</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">212 12 431</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> </td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 1.90</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">1.90</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">1.90 - 2.40</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">2.45 - 2.90</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 2.90</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">Mack</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">213 53 482</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> </td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> Y </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 1.80</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">1.80</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">1.80 - 2.30</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">2.35 - 2.80</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 2.80</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">Mack</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">213 53 489</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> </td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> Y </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 1.90</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">1.90</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">1.90 - 2.40</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">2.45 - 2.90</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 2.90</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">Mack</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">213 95 825</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> 85124613</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 2.00</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">2.00</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">2.00 - 2.50</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">2.55 - 3.00</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 3.00</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">Mack</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">214 71 269</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> 85124653</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 1.90</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">1.90</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">1.90 - 2.40</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">2.45 - 2.90</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 2.90</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">Mack</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">218 04 785</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> </td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> Y </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 1.90</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">1.90</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">1.90 - 2.40</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">2.45 - 2.90</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 2.90</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">Nett</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">SN-1200-5,0</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> </td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 2.00</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">2.00</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">2.00 - 2.50</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">2.55 - 3.00</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 3.00</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">Nett</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">SN-1200CB</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> </td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 2.00</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">2.00</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">2.00 - 2.50</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">2.55 - 3.00</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 3.00</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">PACCAR</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">5229B4598</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> </td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 2.30</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">2.30</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">2.30 - 2.80</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">2.85 - 3.30</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 3.30</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">PACCAR</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">5229B5345</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> </td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 2.30</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">2.30</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">2.30 - 2.80</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">2.85 - 3.30</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 3.30</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">PACCAR</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">5229B5645</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> </td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 2.30</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">2.30</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">2.30 - 2.80</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">2.85 - 3.30</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 3.30</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">PACCAR</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">5229B5646</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> </td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 2.30</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">2.30</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">2.30 - 2.80</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">2.85 - 3.30</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 3.30</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">PACCAR</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">A029C893</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> 2880168</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> Y </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 2.00</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">2.00</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">2.00 - 2.50</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">2.55 - 3.00</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 3.00</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">PACCAR</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">A029S553</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> 1827310</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 1.25</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">1.25</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">1.25 - 1.75</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">1.80 - 2.25</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 2.25</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">PACCAR</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">A029S844</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> 1827739</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 1.25</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">1.25</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">1.25 - 1.75</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">1.80 - 2.25</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 2.25</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">PACCAR</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">A034X191</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> 5283669</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 1.30</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">1.30</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">1.30 - 1.80</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">1.85 - 2.30</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 2.30</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">PACCAR</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">A034X329</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> 5283778</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 1.40</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">1.40</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">1.40 - 1.90</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">1.95 - 2.40</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 2.40</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">PACCAR</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">A034X344</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> 5283799</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 1.60</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">1.60</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">1.60 - 2.10</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">2.15 - 2.60</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 2.60</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">PACCAR</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">A041L187</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> 5297522</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> Y </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 1.40</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">1.40</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">1.40 - 1.90</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">1.95 - 2.40</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 2.40</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">PACCAR</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">P229704</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> </td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 2.30</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">2.30</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">2.30 - 2.80</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">2.85 - 3.30</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 3.30</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">PACCAR</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">P231067</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> </td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 2.30</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">2.30</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">2.30 - 2.80</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">2.85 - 3.30</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 3.30</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">UD</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">20110Z503E</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> </td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> Y </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 4.20</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">4.20</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">4.20 - 4.70</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">4.75 - 5.20</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 5.20</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">Volvo</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">208 63 859</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> </td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 2.60</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">2.60</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">2.60 - 3.10</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">3.15 - 3.60</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 3.60</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">Volvo</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">208 64 127</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> Q621328</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> Y </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 2.10</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">2.10</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">2.10 - 2.60</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">2.65 - 3.10</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 3.10</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">Volvo</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">208 64 316</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> </td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 1.85</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">1.85</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">1.85 - 2.35</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">2.40 - 2.85</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 2.85</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">Volvo</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">208 64 558</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> </td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 2.40</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">2.40</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">2.40 - 2.90</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">2.95 - 3.40</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 3.40</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">Volvo</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">210 48 577</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> 2023111</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 2.55</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">2.55</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">2.55 - 3.05</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">3.10 - 3.55</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 3.55</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">Volvo</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">212 12 426</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> </td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 2.10</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">2.10</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">2.10 - 2.60</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">2.65 - 3.10</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 3.10</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">Volvo</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">212 12 428</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> </td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 2.05</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">2.05</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">2.05 - 2.55</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">2.60 - 3.05</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 3.05</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">Volvo</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">212 12 429</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> </td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 1.85</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">1.85</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">1.85 - 2.35</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">2.40 - 2.85</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 2.85</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">Volvo</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">212 12 431</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> </td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 1.90</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">1.90</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">1.90 - 2.40</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">2.45 - 2.90</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 2.90</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">Volvo</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">213 53 482</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> </td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> Y </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 1.80</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">1.80</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">1.80 - 2.30</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">2.35 - 2.80</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 2.80</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">Volvo</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">213 53 489</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> </td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> Y </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 1.90</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">1.90</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">1.90 - 2.40</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">2.45 - 2.90</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 2.90</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">Volvo</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">213 95 825</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> 85124613</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 2.00</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">2.00</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">2.00 - 2.50</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">2.55 - 3.00</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 3.00</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">Volvo</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">214 71 269</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> 85124653</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 1.90</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">1.90</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">1.90 - 2.40</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">2.45 - 2.90</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 2.90</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">Volvo</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">218 04 785</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> </td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> Y </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 1.90</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">1.90</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">1.90 - 2.40</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">2.45 - 2.90</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 2.90</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">Volvo / Eminox</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">211 245 10</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> Eminox WEBC 066</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 2.05</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">2.05</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">2.05 - 2.55</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">2.60 - 3.05</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 3.05</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">Volvo / Eminox</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">3183655</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> Eminox WE 12055</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 1.95</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">1.95</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">1.95 - 2.45</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">2.50 - 2.95</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 2.95</td>
          </tr>
          <tr>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);">Volvo / Fleetguard</td>
            <td style="width: 15%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(0, 0, 0);">Q620731</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: left; color: rgb(0, 0, 0);"> </td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);"> </td>
            <td style="width: 7%; text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(255, 0, 0);">&lt; 2.25</td>
            <td style="width: 8%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 0, 0);">2.25</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(0, 204, 0);">2.25 - 2.75</td>
            <td style="width: 10%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; font-weight: bold; color: rgb(255, 153, 51);">2.80 - 3.25</td>
            <td style="width: 14%; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: center; color: rgb(255, 0, 0);">&gt; 3.25</td>
          </tr>
        </tbody>

        </table>
        </div>
            <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
            <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
            <script>
            $(function(){
               $('#example').dataTable({
                    aLengthMenu: [
                        [25, 50, 100, 200, -1],
                        [25, 50, 100, 200, "All"]
                    ],
                    iDisplayLength: -1
                });
               $('.dataTables_filter input').attr("placeholder", "Manufacturer/Part No.");
              })
            </script>

            <footer class = "footer" id = "foot">

                <div class = "container">
                    <p class = "navbar-text pull-left text-center" id = "descText" >FSX Equipment Inc. 
                        || 10404 Mountain Loop Highway Granite Falls, WA 98252-1617 || 360-691-2999</br>
                        © Copyright FSX Incorporated 2008-2015, All Rights Reserved</br>
                        <a href="index.html">Home </a> |  <a href="site1/ContactUs.html">Contact</a> 
                        |  <a href="site1/pressArchives.html">News</a> | <a href="site1/Products/products.html">Products</a> |
                        <a href="site1/Competition/compare.html">Competitive Comparison </a>| <a href="site1/EnvNSafety/EnvHome.html">Enviromental &amp; Safety </a>|
                        <a href="site1/Services/ForBid.html">Bid Spec. Language</a> | <a href="site1/Services/LocMap.html">Service Locator Map</a> 
                        |<a href="site1/BaseLinesNScience/CurrentBL.html"> Baseline Chart</a> | <a href="site1/video/video.html"> Video</a></div>
                    </p> 

                </div>

            </footer>


            <script src = "http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
            <script src = "js/bootstrap.js"></script>

            <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
            <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
            <script>
                $(function(){
                    $("#example").dataTable();
                })
            </script>

        </body>
        </html>

        
