<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="keywords" content="FSX Equipment, FSX Baseline Data, DPF airflow testing, dpf cleaning equipment, cleaning diesel particulate filters, dpf cleaning systems, dpf maintenance,  dpf recovery, dpf cleaning machines, state of the art cleaning equipment, best dpf cleaning equipment,dpd, dpd cleaning, oem &quot; 
">
<title>Baseline Data - DPF Cleaning Equipment - FSX Equipment Inc.</title>
<link rel="shortcut icon" href="../favicon.ico">
<link rel="icon" href="../favicon.ico" type="image/ico">
<link rel="stylesheet" type="text/css" href="../css/fsx-typography2.css">
<link href="../SpryAssets/SpryMenuBarHorizontal3.css" rel="stylesheet" type="text/css">
<script type="text/javascript" async="" src="http://www.google-analytics.com/ga.js"></script><script src="../SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<script src="../SpryAssets/xpath.js" type="text/javascript"></script>
<script src="../SpryAssets/SpryData.js" type="text/javascript"></script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-25629091-2']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
  <script type="text/javascript">
<!--
        image1=new Image
        image1.src="../images/videoleft.png"
        image2=new Image
        image2.src="../images/videolefth.png"

//-->
    </script>
   <script src="E-BLdata.php"></script>
<script type="text/javascript">
function SortByName(x,y) {
      return ((x.Manufacturer == y.Manufacturer) ? 0 : ((x.Manufacturer > y.Manufacturer) ? 1 : -1 ));
    } 
  function SortByNameZ_A(x,y) {
      return ((x.Manufacturer == y.Manufacturer) ? 0 : ((x.Manufacturer > y.Manufacturer) ? -1 : 1 ));
  }
  
  
  function SortByPartNum(x,y) {
   return ((x.MfgPN == y.MfgPN) ? 0 : ((x.MfgPN > y.MfgPN) ? 1 : -1 ));
    } 
  function SortByPartNumDEC(x,y) {
   return ((x.MfgPN == y.MfgPN) ? 0 : ((x.MfgPN > y.MfgPN) ? -1 : 1 ));
    }
  
  
    function SortByAltPartNum(x,y) {
   return ((x.AltPN == y.AltPN) ? 0 : ((x.AltPN > y.AltPN) ? -1 : 1 ));
    }
  function SortByAltPartNumDEC(x,y) {
   return ((x.AltPN == y.AltPN) ? 0 : ((x.AltPN > y.AltPN) ? 1 : -1 ));
    }

  
    function pushSort(id, sortNum){

      build();
    
    var tbody = document.getElementById
    (id).getElementsByTagName("TBODY")[0];
      if(sortNum ==1){
    removeChildrenFromNode(tbody);
    

    for ( var i =0; i<json.length; i++)
    { 
  baseline_data(tbody);
}
    
    
      
  
    }
    
    function baseline_data(tbody)
    {
      if(json[i].DOCOnly!="Y")
      {
    var row = document.createElement("TR")
    var td1 = document.createElement("TD")
    td1.style.width="15%" 
    td1.style.fontFamily = "Verdana, Arial, Helvetica, sans-serif"
    td1.style.fontSize= "11px"
    td1.style.textAlign ="left"
    td1.style.color= "#000000"
    td1.appendChild(document.createTextNode(json[i].Manufacturer))
    var td2 = document.createElement("TD")
    td2.style.width="15%"
    td2.style.fontFamily = "Verdana, Arial, Helvetica, sans-serif"
    td2.style.fontSize= "11px"
    td2.style.color= "#000000"
    td2.appendChild (document.createTextNode(json[i].MfgPN))
    
    var td3 = document.createElement("TD")
    td3.style.width="10%"
    td3.style.fontFamily = "Verdana, Arial, Helvetica, sans-serif"
    td3.style.fontSize= "11px"
    td3.style.textAlign ="left"
    td3.style.color= "#000000"
    td3.appendChild (document.createTextNode(' '+json[i].AltPN))
  
/*    var td4 = document.createElement("TD")
    td4.style.width= "6%"
    td4.style.fontFamily = "Verdana, Arial, Helvetica, sans-serif"
    td4.style.fontSize= "11px"
    td4.style.textAlign ="center"
    td4.style.color= "#000000"
    td4.appendChild (document.createTextNode(' '+json[i].DOCOnly+' '))*/
    var td5 = document.createElement("TD")
    td5.style.width="10%"
    td5.style.fontFamily = "Verdana, Arial, Helvetica, sans-serif"
    td5.style.fontSize= "11px"
    td5.style.textAlign ="center"
    td5.style.color= "#000000"
    td5.appendChild (document.createTextNode(' '+json[i].ProvisionalBL+' '))
    var td6 = document.createElement("TD")
    td6.style.width = "7%"
    td6.style.textAlign = "center"
    td6.style.fontFamily = "Verdana, Arial, Helvetica, sans-serif"
    td6.style.fontSize= "11px"
    td6.style.color= "#FF0000"
    td6.appendChild (document.createTextNode(json[i].RTLow))
    var td7 = document.createElement("TD")
    td7.style.width="8%"
    td7.style.fontFamily = "Verdana, Arial, Helvetica, sans-serif"
    td7.style.fontSize= "11px"
    td7.style.textAlign ="center"
    td7.style.color= "#000000"
    td7.appendChild (document.createTextNode(json[i].Baseline))
    var td8 = document.createElement("TD")
    td8.style.width="10%"
    td8.style.fontFamily = "Verdana, Arial, Helvetica, sans-serif"
    td8.style.fontSize= "11px"
    td8.style.textAlign ="center"
    td8.style.color= "#0C0"
    td8.appendChild (document.createTextNode(json[i].GTRange))
    var td9 = document.createElement("TD")
    td9.style.width="10%"
    td9.style.fontFamily = "Verdana, Arial, Helvetica, sans-serif"
    td9.style.fontSize= "11px"
    td9.style.textAlign ="center"
    td9.style.fontWeight="bold"
    td9.style.color= "#FF9933"
    td9.appendChild (document.createTextNode(json[i].ORRange))
    var td10 = document.createElement("TD")
    td10.style.width ="14%"
    td10.style.fontFamily = "Verdana, Arial, Helvetica, sans-serif"
    td10.style.fontSize= "11px"
    td10.style.textAlign ="center"
    td10.style.color= "#FF0000"
    td10.appendChild (document.createTextNode(json[i].RTHigh))
    row.appendChild(td1);
    row.appendChild(td2);
    row.appendChild(td3);
    //row.appendChild(td4);
    row.appendChild(td5);
    row.appendChild(td6);
    row.appendChild(td7);
    row.appendChild(td8);
    row.appendChild(td9);
    row.appendChild(td10);
    tbody.appendChild(row);}
    //else{
      //alert("NO");
      //}
    }
  
    }
     function build()
        { 
      var manu = new Array();
    var a=0;
    for (var i=0; i<json.length; i++) {
      if( i == 0){
          manu[a] = document.createElement('option');
  manu[a].text = json[i].Manufacturer;
  manu[a].value = json[i].Manufacturer;
  var elSel = document.getElementById('jsonDropDown');

  try {
    elSel.add(manu[a], null); // standards compliant; doesn't work in IE
  }
  catch(ex) {
    elSel.add(manu[a]); // IE only
  }
        a++;
        
      }
      else{
          if( json[i].Manufacturer !=json[i-1].Manufacturer)
          {
                      manu[a] = document.createElement('option');
  manu[a].text = json[i].Manufacturer;
  manu[a].value = json[i].Manufacturer;
  var elSel = document.getElementById('jsonDropDown');

  try {
    elSel.add(manu[a], null); // standards compliant; doesn't work in IE
  }
  catch(ex) {
    elSel.add(manu[a]); // IE only
  }
        a++;
          }
      }
        
        }
        
          
          }
          function getSelectedVaule(id){
            var index= document.getElementById("jsonDropDown").selectedIndex;
              var tbody = document.getElementById
              (id).getElementsByTagName("TBODY")[0];
            removeChildrenFromNode(tbody);
    for ( var i =0; i<json.length; i++)
    { 
    if(document.getElementById("jsonDropDown").options[index].text == json[i].Manufacturer&&json[i].DOCOnly!="Y"){
    var row = document.createElement("TR")
    var td1 = document.createElement("TD")
    td1.style.width="15%" 
    td1.style.fontFamily = "Verdana, Arial, Helvetica, sans-serif"
    td1.style.fontSize= "11px"
    td1.style.textAlign ="left"
    td1.style.color= "#000000"
    td1.appendChild(document.createTextNode(json[i].Manufacturer))
    var td2 = document.createElement("TD")
    td2.style.width="15%"
    td2.style.fontFamily = "Verdana, Arial, Helvetica, sans-serif"
    td2.style.fontSize= "11px"
    td2.style.color= "#000000"
    td2.appendChild (document.createTextNode(json[i].MfgPN))
    
    var td3 = document.createElement("TD")
    td3.style.width="10%"
    td3.style.fontFamily = "Verdana, Arial, Helvetica, sans-serif"
    td3.style.fontSize= "11px"
    td3.style.textAlign ="left"
    td3.style.color= "#000000"
    td3.appendChild (document.createTextNode(' '+json[i].AltPN))
  
/*    var td4 = document.createElement("TD")
    td4.style.width= "6%"
    td4.style.fontFamily = "Verdana, Arial, Helvetica, sans-serif"
    td4.style.fontSize= "11px"
    td4.style.textAlign ="center"
    td4.style.color= "#000000"
    td4.appendChild (document.createTextNode(' '+json[i].DOCOnly+' '))*/
    var td5 = document.createElement("TD")
    td5.style.width="10%"
    td5.style.fontFamily = "Verdana, Arial, Helvetica, sans-serif"
    td5.style.fontSize= "11px"
    td5.style.textAlign ="center"
    td5.style.color= "#000000"
    td5.appendChild (document.createTextNode(' '+json[i].ProvisionalBL+' '))
    var td6 = document.createElement("TD")
    td6.style.width = "7%"
    td6.style.textAlign = "center"
    td6.style.fontFamily = "Verdana, Arial, Helvetica, sans-serif"
    td6.style.fontSize= "11px"
    td6.style.color= "#FF0000"
    td6.appendChild (document.createTextNode(json[i].RTLow))
    var td7 = document.createElement("TD")
    td7.style.width="8%"
    td7.style.fontFamily = "Verdana, Arial, Helvetica, sans-serif"
    td7.style.fontSize= "11px"
    td7.style.textAlign ="center"
    td7.style.color= "#000000"
    td7.appendChild (document.createTextNode(json[i].Baseline))
    var td8 = document.createElement("TD")
    td8.style.width="10%"
    td8.style.fontFamily = "Verdana, Arial, Helvetica, sans-serif"
    td8.style.fontSize= "11px"
    td8.style.textAlign ="center"
    td8.style.color= "#0C0"
    td8.appendChild (document.createTextNode(json[i].GTRange))
    var td9 = document.createElement("TD")
    td9.style.width="10%"
    td9.style.fontFamily = "Verdana, Arial, Helvetica, sans-serif"
    td9.style.fontSize= "11px"
    td9.style.textAlign ="center"
    td9.style.fontWeight="bold"
    td9.style.color= "#FF9933"
    td9.appendChild (document.createTextNode(json[i].ORRange))
    var td10 = document.createElement("TD")
    td10.style.width ="14%"
    td10.style.fontFamily = "Verdana, Arial, Helvetica, sans-serif"
    td10.style.fontSize= "11px"
    td10.style.textAlign ="center"
    td10.style.color= "#FF0000"
    td10.appendChild (document.createTextNode(json[i].RTHigh))
    row.appendChild(td1);
    row.appendChild(td2);
    row.appendChild(td3);
    //row.appendChild(td4);
    row.appendChild(td5);
    row.appendChild(td6);
    row.appendChild(td7);
    row.appendChild(td8);
    row.appendChild(td9);
    row.appendChild(td10);
    tbody.appendChild(row);
    }
    }
          }
      function removeChildrenFromNode(data){
  
  for(var i = 0; i < data.childNodes.length; i++)
       while(data.lastChild)
       data.removeChild(data.lastChild);

}


 

    

function searchPN(id){
  var val = document.getElementById("search").value;
/*    for(var i = 0 ; i< json.length; i++){
            if(json[i].Manufacturer == val){
               alert ("yep");
            }  }
      */
var sanitized = val.replace(/[-' ']/g,'');
var result = 0;
              var tbody = document.getElementById
              (id).getElementsByTagName("TBODY")[0];
              
            removeChildrenFromNode(tbody);
    for ( var i =0; i<json.length; i++)
    { var dataclean = json[i].MfgPN.replace(/[-' ']/g,'');
      var altdataclean = json[i].AltPN.replace(/[-' ']/g,'');
//    if(val.toUpperCase() == json[i].Manufacturer.toUpperCase()&&json[i].DOCOnly!="Y"){
    if(sanitized.toUpperCase() == dataclean.toUpperCase() || sanitized.toUpperCase() == altdataclean.toUpperCase() &&json[i].DOCOnly!="Y"){
      result=1;
    var row = document.createElement("TR")
    var td1 = document.createElement("TD")
    td1.style.width="15%" 
    td1.style.fontFamily = "Verdana, Arial, Helvetica, sans-serif"
    td1.style.fontSize= "11px"
    td1.style.textAlign ="left"
    td1.style.color= "#000000"
    td1.appendChild(document.createTextNode(json[i].Manufacturer))
    var td2 = document.createElement("TD")
    td2.style.width="15%"
    td2.style.fontFamily = "Verdana, Arial, Helvetica, sans-serif"
    td2.style.fontSize= "11px"
    td2.style.color= "#000000"
    td2.appendChild (document.createTextNode(json[i].MfgPN))
    
    var td3 = document.createElement("TD")
    td3.style.width="10%"
    td3.style.fontFamily = "Verdana, Arial, Helvetica, sans-serif"
    td3.style.fontSize= "11px"
    td3.style.textAlign ="left"
    td3.style.color= "#000000"
    td3.appendChild (document.createTextNode(' '+json[i].AltPN))
  
/*    var td4 = document.createElement("TD")
    td4.style.width= "6%"
    td4.style.fontFamily = "Verdana, Arial, Helvetica, sans-serif"
    td4.style.fontSize= "11px"
    td4.style.textAlign ="center"
    td4.style.color= "#000000"
    td4.appendChild (document.createTextNode(' '+json[i].DOCOnly+' '))*/
    var td5 = document.createElement("TD")
    td5.style.width="10%"
    td5.style.fontFamily = "Verdana, Arial, Helvetica, sans-serif"
    td5.style.fontSize= "11px"
    td5.style.textAlign ="center"
    td5.style.color= "#000000"
    td5.appendChild (document.createTextNode(' '+json[i].ProvisionalBL+' '))
    var td6 = document.createElement("TD")
    td6.style.width = "7%"
    td6.style.textAlign = "center"
    td6.style.fontFamily = "Verdana, Arial, Helvetica, sans-serif"
    td6.style.fontSize= "11px"
    td6.style.color= "#FF0000"
    td6.appendChild (document.createTextNode(json[i].RTLow))
    var td7 = document.createElement("TD")
    td7.style.width="8%"
    td7.style.fontFamily = "Verdana, Arial, Helvetica, sans-serif"
    td7.style.fontSize= "11px"
    td7.style.textAlign ="center"
    td7.style.color= "#000000"
    td7.appendChild (document.createTextNode(json[i].Baseline))
    var td8 = document.createElement("TD")
    td8.style.width="10%"
    td8.style.fontFamily = "Verdana, Arial, Helvetica, sans-serif"
    td8.style.fontSize= "11px"
    td8.style.textAlign ="center"
    td8.style.color= "#0C0"
    td8.appendChild (document.createTextNode(json[i].GTRange))
    var td9 = document.createElement("TD")
    td9.style.width="10%"
    td9.style.fontFamily = "Verdana, Arial, Helvetica, sans-serif"
    td9.style.fontSize= "11px"
    td9.style.textAlign ="center"
    td9.style.fontWeight="bold"
    td9.style.color= "#FF9933"
    td9.appendChild (document.createTextNode(json[i].ORRange))
    var td10 = document.createElement("TD")
    td10.style.width ="14%"
    td10.style.fontFamily = "Verdana, Arial, Helvetica, sans-serif"
    td10.style.fontSize= "11px"
    td10.style.textAlign ="center"
    td10.style.color= "#FF0000"
    td10.appendChild (document.createTextNode(json[i].RTHigh))
    row.appendChild(td1);
    row.appendChild(td2);
    row.appendChild(td3);
    //row.appendChild(td4);
    row.appendChild(td5);
    row.appendChild(td6);
    row.appendChild(td7);
    row.appendChild(td8);
    row.appendChild(td9);
    row.appendChild(td10);
    tbody.appendChild(row);
    }
        
    }
if (result == 0){
    var row = document.createElement("TR")
    var td1 = document.createElement("TD")
    td1.style.width="100%" 
    td1.style.fontFamily = "Verdana, Arial, Helvetica, sans-serif"
    td1.style.fontSize= "15px"
    td1.style.textAlign ="center"
    td1.style.color= "#FF0000"
    td1.appendChild(document.createTextNode("No Results found. Plese check the part number you entered or call FSX at 360-691-2999 to have your baseline data considered for inclusion"))
    row.appendChild(td1);
    tbody.appendChild(row);
      }
      
}
    
    
</script>
<style type="text/css">
<!--
.style1{
  padding: 0 20px 0 20px;
  }
.style102{
  font-size:24px;
  font-weight: bold;
  font-family: Verdana, Arial, Helvetica, sans-serif;
}
.style103{
  font-size:14px;
  font-weight: bold;
  font-family: Verdana, Arial, Helvetica, sans-serif;
  text-decoration:underline;
}
.style104{
  text-decoration:underline;
}
.style105{
  font-weight:bolder;
  font-size:14px;
  font-family: Verdana, Arial, Helvetica, sans-serif;
}
.style106 {
  font-family: Verdana, Arial, Helvetica, sans-serif;
  font-size: 11px;
  color: #F00
}
.style107 {
  font-family: Verdana, Arial, Helvetica, sans-serif;
  font-size: 11px;
  color: #F60;
}
.style108 {
  font-family: Verdana, Arial, Helvetica, sans-serif;
  font-size: 11px;
  color: #0C0;
}
.style109 {
  font-family: Verdana, Arial, Helvetica, sans-serif;
  font-size: 11px;

  color: #000;
}
.style112 {font-size: 10}
.style115 {
  font-family: Verdana, Arial, Helvetica, sans-serif;
  font-size: 11px;
  color: #000000;
}
  
.style117 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: #FF0000; 
  }
.style119 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: #FF9933;   }
#headderTB {
  border-width: 1px 0px 0px 0px;
  border-style:solid;
  border-color: #000000;
}
.baselineInfoLEFTTB {
  border-width: 0px 1px 0px 0px;
  border-style:solid;
  border-color:#000;
}
.baselineInfoLEFTBTTB {
  border-width: 0px 1px 1px 0px;
  border-style:solid;
  border-color:#000;
}
.baselineInfoRIGHTTB {
  border-width: 1px 1px 1px 1px;
  border-style:solid;
  border-color:#000;
  /* [disabled]text-align: center; */
  /* [disabled]margin-left: 20px; */
  /* [disabled]padding-left: 5px; */
  border-right: 1px #000 solid;
  margin-bottom: 10px;
  margin-right: 20px;
}
    .baselineInfoRIGHTTB tr td table tr td .style103 {
  font-size: 16px;
}
    .baselineInfoRIGHTTB tr td table tr td .style103 {
  font-family: Arial, Helvetica, sans-serif;
}
    .baselineInfoRIGHTTB tr td table tr td .style103 {
  font-size: 18px;
}
.dataTB { border-width:0px 0px 1px 0px; border-style:dashed; border-color:#CCC;

}
.bltitle {
  /* [disabled]text-align: center; */
  padding-left: 20px;
}
.container .content .style1 .baselineInfoRIGHTTB tr td table tr td {
  /* [disabled]text-align: center; */
}

  -->
  .style1 {
  /* [disabled]padding-left: 0px; */
}
#baselines tr td{
  border-bottom:1px dashed #666;
}
.worksheet {
  float:right;
  width:250px;
  padding: 10px 0 0 0;
  }
.chrome {
  color: #FFF;
  background-color: #F00;
  display:none;
}
.BB {
  border-bottom: 1px #CCC solid;
  padding-bottom: 10px;
  }
</style>
</head>

<body onload="pushSort('baselines','1');">

<div class="container">
  <div class="content">
<div class="header2"><!-- #BeginLibraryItem "/site1/Library/headdernnav.lbi" -->
<span style="/* [disabled]float:left; */ padding-right:10px; padding-top: 10px; padding-left:20px;"><a href="../../index.html"><img src="../images/fsx.png" alt="FSX- DPF Cleaning Experts" width="196" height="102"></a></span>
<img src="../images/H12_3.png" alt="DPF Cleaing Equipment Machines" width="429" class="headerimg">
<div id="nav">
  <!--Top Menu-->
<ul id="MenuBar2" class="MenuBarHorizontal">
      <li class="first"><a href="../../index.html">HOME</a></li>
      <li><a href="../ContactUs.html">CONTACT</a></li>
      <li><a href="../pressArchives.html">NEWS</a></li>
      <li><a class="MenuBarItemSubmenu" href="../Products/products.html">PRODUCTS <img src="../SpryAssets/SpryMenuBarDownHoverh.gif" alt="more"></a>
        <ul>
          <li class="first"><a href="../Products/BasePkg.html">Complete Cleaning Package</a></li>
          <li><a href="../Products/TrapBlaster7.html">TrapBlaster Pneumatic Cleaners</a></li>
          <li><a href="../Products/TBurner7.html">TrapBurner Thermal Cleaners</a></li>
          <li><a href="../Products/TrapTester7.html">TrapTester Air Flow Tester</a></li>
          <li><a href="../Products/SootSucker2.html">SootSucker 2 Dust Collector</a></li>
          <li><a href="../Products/pbsall.html">FSX Banners &amp; Posters</a></li>
          <li><a href="../Products/Accessories.html">Accessories</a></li>
          <li><a href="../Products/FSXCleanManual.html">FSX Cleaning Manual</a></li>
          <li><a href="../Products/products.html">All Products</a></li>
        </ul>
  </li>
       <li class="twolines"><a href="../Competition/compare.html" class="MenuBarItemSubmenu">COMPETITIVE <br>
       COMPARISON <img src="../SpryAssets/SpryMenuBarDownHoverh.gif" alt="more"></a>
<ul>
  <li><a href="../Competition/Scan-Pulse.html">Cleaning Technology Comparison</a></li>
       <li><a href="../Competition/FeatureComparison.html">Features Checklist </a></li>
       </ul>
       </li>
       <li class="twolines"><a class="MenuBarItemSubmenu" href="../EnvNSafety/EnvHome.html">ENVIRONMENTAL <br>
       &amp; SAFETY <img src="../SpryAssets/SpryMenuBarDownHoverh.gif" alt="more"></a>
         <ul>
           <li><a href="../EnvNSafety/RecommendedSafetyEquip.html">Recommended Safety Equipment</a></li>
           <li><a href="../EnvNSafety/AshDisposal.html">Soot &amp; Ash Disposal</a></li>
           <li><a href="DPFAsh.html">DPF Ash Composition</a>  </li>
               <li><a href="../EnvNSafety/sds.html">SDS of Diesel Soot &amp; Ash </a>  </li>
         </ul>
       </li>
       <li class="twolines"><a href="../Services/ForBid.html" class="">BID SPECIFICATION<br>
         LANGUAGE</a></li>
        <li class="twolines"><a href="../Services/LocMap.html" class="">SERVICE <br> 
        LOCATOR MAP
</a></li>
         <li class="twolines"><a href="CurrentBL.html" class="">BASELINE<br>
           CHART</a></li>
               <li class="last"><a onmouseover="document.picture.src=image2.src" onmouseout="document.picture.src=image1.src" href="../video/video.html">VIDEO <img src="../images/videoleft.png" alt="View Video" name="picture"></a></li>
    </ul>
</div><!-- #EndLibraryItem --></div>

    <div class="clear"></div>
    <div class="clear"></div>
   <div class="style1"> <div id="breadcrumbs">
   <span style="padding-left:20px">
   <ul>
   <li>You are here: 
   </li>
   <li><a href="/index.html">HOME</a> &gt; </li>
   <li><a href="CurrentBL.html"> BASELINE DATA</a></li>
   </ul><br>
</span>
   </div> 

<h2>CURRENT FSX BASELINE DATA</h2>
   <table width="100%" align="center">


     <tbody><tr valign="top">
    <td width="37%" valign="middle">DPF Air Pressure Baseline <br>
      Cleaning Range Mastersheet<span class="clear"></span><br>
As measured on FSX Trap Tester™
    </td>
    <td width="15%" valign="middle">Last Modified:      September 17, 2015 
    </td> 
      <td width="25%" align="center" valign="top"><a href="/site1/BaseLinesNScience/PDF/CurrentBL.php" target="_parent">Download Updated <br>
      <img src="/site1/images/pdf.jpg" width="42" height="42" alt="Baseline PDF"><br>
      Baseline Chart PDF</a></td>
      <td width="23%" align="center" valign="top">
      <a href="/site1/BaseLinesNScience/PDF/DPF Cleaning WorkSheet.pdf" target="_new">Download <br>      
      <img src="/site1/images/CleaningWorksheetSmall.jpg" alt="DPF Cleaning Worksheet" width="43" height="42"><br>
      DPF Cleaning Worksheet</a><a href="/site1/BaseLinesNScience/PDF/DPF Cleaning WorkSheet.pdf"> </a></td>
     </tr>
     <tr>
     <td colspan="4">

    <table width="100%" cellpadding="2" cellspacing="0" class="baselineInfoRIGHTTB">
            <tbody><tr>
            <td>
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                 <tbody><tr>
              <td colspan="10" align="center" bgcolor="#FFFF33">
              <span style="text-align:center; font-weight: bold;  font-size: 18px;">
              <strong>SEARCH</strong></span>
              </td>
              </tr>
              <tr>
              <td colspan="5" align="center" bgcolor="#FFFF33" class="BB">
              Search by Manufacturer<br>

              <form>
                <select name="jsonDropDown" id="jsonDropDown" onchange="getSelectedVaule('baselines')">
                  <option onclick="pushSort('baselines','1')">-Select Manufacturer-</option>
                <option value="Caterpillar">Caterpillar</option><option value="Cleaire">Cleaire</option><option value="Cummins">Cummins</option><option value="DCL">DCL</option><option value="Detroit Diesel">Detroit Diesel</option><option value="Donaldson">Donaldson</option><option value="ECS">ECS</option><option value="EMD">EMD</option><option value="Engelhard">Engelhard</option><option value="ESW">ESW</option><option value="Fleetguard/Nelson">Fleetguard/Nelson</option><option value="Ford">Ford</option><option value="Hino">Hino</option><option value="Hug">Hug</option><option value="Huss">Huss</option><option value="International">International</option><option value="Isuzu">Isuzu</option><option value="Isuzu Link-Belt (LBX)">Isuzu Link-Belt (LBX)</option><option value="Johnson Matthey">Johnson Matthey</option><option value="Mack">Mack</option><option value="Nett">Nett</option><option value="PACCAR">PACCAR</option><option value="UD">UD</option><option value="Volvo">Volvo</option><option value="Volvo / Eminox">Volvo / Eminox</option><option value="Volvo / Fleetguard">Volvo / Fleetguard</option></select>
      <input type="button" value="Show All" onclick="pushSort('baselines','1')">
      </form>      
  
        

              </td>
              <td colspan="5" align="center" bgcolor="#FFFF33" class="BB"> <span style="text-align:center; padding-left:20px">Type <em>complete</em> part number to search baselines 
 <input id="search" onkeydown="if(event.keyCode==13) searchPN('baselines');" type="text"> <button id="searchbutton" onclick="searchPN('baselines')">search</button></span><br>

              </td>
              </tr> <tr>
                <td colspan="5">Baselines are under constant development and are subject to change.<br>
Contact FSX to have your baseline data considered for inclusion.<br>
Customer provided baselines not yet verified by FSX.<br>
<strong>Note: Pressure/airflow reading can vary due to temperature, humidity, altitude and DPF manufacturing variances as much as 0.3" w.g. In high altitude areas the variance can exceed 0.3" w.g. </strong><br>

</td>
                <td colspan="5" align="center" valign="top"><span style="font-weight: bold; text-decoration:underline; font-size: 18px; font-family: Arial, Helvetica, sans-serif;">FSX Target Pressure/Airflow Ranges</span><span class="style103"><br>
                </span> <span class="style13"><strong> Use these target ranges <span class="style104">in conjunction with</span> the other inspection and testing methods described in your FSX DPF cleaning manual to evaluate filter recovery</strong></span><br>
                <span class="style16">Measure with dirty side up (flow arrow pointing down) </span><br><br>
                </td>
              </tr>
          
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr class="baselineLINK">
                <td width="15%" valign="bottom" class="style109">Manufacturer</td>
                <td width="15%" valign="bottom" class="style109">Part No.</td>
                <td width="10%" valign="bottom" class="style109">Alt part No.</td>
                <td width="10%" valign="bottom" class="style109"><div align="center" class="style112">Customer<br>Provided<br>Baseline</div></td>
                <td width="7%" valign="bottom" class="style109"><div align="center" class="style112">Red Tag<br>(if below)</div></td>
                <td width="8%" valign="bottom" class="style109"><div align="center" class="style112">Baseline</div></td>
                <td width="10%" valign="bottom" class="style109"><div align="center" class="style112">Green Tag<br>Range</div></td>
                <td width="10%" valign="bottom" class="style109"><div align="center" class="style112">Orange Tag<br>Range</div></td>
                <td width="14%" valign="bottom" class="style109"><div align="center" class="style112">Red Tag<br>(if above)</div></td>
              </tr>
              <tr>
                <td colspan="10"><hr></td>
              </tr>
              
              </tbody></table><table id="baselines" width="100%" align="center">
        
              <tbody></tbody>
<!-- baseline table data is filled with javascript onload. -->
              </table>
              </td></tr><tr>
              <td colspan="10" style="text-align: center; padding-top:6px">* - All measurements are taken using an FSX TrapTester Air Flow Test Bench </td>
              </tr>
            </tbody></table> 
            </td>
  </tr>
      </tbody></table>     
     
   
</div>
<div class="clear"></div><!-- #BeginLibraryItem "/site1/Library/footer.lbi" -->
    <div id="footer">

<p>
FSX Equipment Inc. || 10404 Mountain Loop Highway
Granite Falls, WA 98252-1617 || 360-691-2999 </p>
<p>© Copyright FSX Incorporated 2008-2015, All Rights Reserved</p>
 <a href="../../index.html">Home </a> |  <a href="../ContactUs.html">Contact</a> |  <a href="../pressArchives.html">News</a> | <a href="../Products/products.html">Products</a> | <a href="../Competition/compare.html">Competitive Comparison </a>| <a href="../EnvNSafety/EnvHome.html">Enviromental &amp; Safety </a>| <a href="../Services/ForBid.html">Bid Spec. Language</a> | <a href="../Services/LocMap.html">Service Locator Map</a> |<a href="CurrentBL.html"> Baseline Chart</a> | <a href="../video/video.html"> Video</a></div><!-- #EndLibraryItem --><!-- end .content --></div>

  <!-- end .container --></div>
<script type="text/javascript">
var MenuBar2 = new Spry.Widget.MenuBar("MenuBar2", {imgDown:"../SpryAssets/SpryMenuBarDownHover.gif", imgRight:"../SpryAssets/SpryMenuBarRightHover.gif"});
</script>


</body></html>