<?php 
include 'header.php';
?>
<div id="theme-wrapper">
    
<?php include_once 'template-parts/top-menu-bar.php'; ?>    
    
<div id="page-wrapper" class="container">
<div class="row">
<div id="nav-col">
<section id="col-left" class="col-left-nano">
<div id="col-left-inner" class="col-left-nano-content">
<div id="user-left-box" class="clearfix hidden-sm hidden-xs dropdown profile2-dropdown">
<img src="img/admins/paul-j-scott.png" alt=""/>
<div class="user-box">
<span class="name">
<a href="#" class="dropdown-toggle" data-toggle="dropdown">
<?=$_SESSION['admin_fname']?> <?=$_SESSION['admin_lname']?>
<i class="fa fa-angle-down"></i>
</a>
<ul class="dropdown-menu">
<li><a href="user-profile.html"><i class="fa fa-user"></i>Profile</a></li>
<li><a href="#"><i class="fa fa-cog"></i>Settings</a></li>
<li><a href="#"><i class="fa fa-envelope-o"></i>Messages</a></li>
<li><a href="logout.php"><i class="fa fa-power-off"></i>Logout</a></li>
</ul>
</span>
<span class="status">
<i class="fa fa-circle"></i> Online
</span>
</div>
</div>
<div class="collapse navbar-collapse navbar-ex1-collapse" id="sidebar-nav">	
<?php 
// Dispaly Left side Navigation
require 'template-parts/left-navigation.php';
?>
</div>
</div>
</section>
<div id="nav-col-submenu"></div>
</div>
<div id="content-wrapper">
<div class="row">
<div class="col-lg-12">
<div class="row">
<div class="col-lg-12">
<div id="content-header" class="clearfix">
<div class="pull-left">
<ol class="breadcrumb">
<li><a href="#">Home</a></li>
<li><span> Members </span></li>
<li class="active"><span>  Team members </span></li>
</ol>

<h1> Team members </h1>
</div>

<div class="pull-right hidden-xs">
<div class="xs-graph pull-left">
<div class="graph-label">
<b><i class="fa fa-shopping-cart"></i> 838</b> Orders
</div>
<div class="graph-content spark-orders"></div>
</div>

<div class="xs-graph pull-left mrg-l-lg mrg-r-sm">
<div class="graph-label">
<b>&dollar;12.338</b> Revenues
</div>
<div class="graph-content spark-revenues"></div>
</div>
</div>
</div>
</div>
</div>


<!--  All Members -->        

<div class="row">
<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
<div class="main-box clearfix profile-box-contact">
<div class="main-box-body clearfix">
<div class="profile-box-header gray-bg clearfix">
<img src="img/samples/angelina-300.jpg" alt="" class="profile-img img-responsive" />
<h2>Angelina Jolie</h2>
<div class="job-position">
Actress
</div>
<ul class="contact-details">
<li>
        <i class="fa fa-map-marker"></i> New York
</li>
<li>
        <i class="fa fa-envelope"></i> angelina@jolie.com
</li>
<li>
        <i class="fa fa-phone"></i> (329) 239-3342
</li>
</ul>
</div>

<div class="profile-box-footer clearfix">
<a href="#">
<span class="value">783</span>
<span class="label">Messages</span>
</a>
<a href="#">
<span class="value">912</span>
<span class="label">Sales</span>
</a>
<a href="#">
<span class="value">83</span>
<span class="label">Projects</span>
</a>
</div>
</div>
</div>
</div>

<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
<div class="main-box clearfix profile-box-contact">
<div class="main-box-body clearfix">
<div class="profile-box-header gray-bg clearfix">
<img src="img/samples/robert-300.jpg" alt="" class="profile-img img-responsive" />
<h2>Robert Downey</h2>
<div class="job-position">
Actor
</div>
<ul class="contact-details">
<li>
        <i class="fa fa-map-marker"></i> Chicago
</li>
<li>
        <i class="fa fa-envelope"></i> robert@downey.com
</li>
<li>
        <i class="fa fa-phone"></i> (942) 834-9382
</li>
</ul>
</div>

<div class="profile-box-footer clearfix">
<a href="#">
<span class="value">92</span>
<span class="label">Messages</span>
</a>
<a href="#">
<span class="value">127</span>
<span class="label">Sales</span>
</a>
<a href="#">
<span class="value">361</span>
<span class="label">Projects</span>
</a>
</div>
</div>
</div>
</div>

<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
<div class="main-box clearfix profile-box-contact">
<div class="main-box-body clearfix">
<div class="profile-box-header gray-bg clearfix">
<img src="img/samples/kunis-300.jpg" alt="" class="profile-img img-responsive" />
<h2>Mila Kunis</h2>
<div class="job-position">
Actress
</div>
<ul class="contact-details">
<li>
        <i class="fa fa-map-marker"></i> San Francisco
</li>
<li>
        <i class="fa fa-envelope"></i> mila@kunis.com
</li>
<li>
        <i class="fa fa-phone"></i> (823) 321-0192
</li>
</ul>
</div>

<div class="profile-box-footer clearfix">
<a href="#">
<span class="value">44</span>
<span class="label">Messages</span>
</a>
<a href="#">
<span class="value">91</span>
<span class="label">Sales</span>
</a>
<a href="#">
<span class="value">3</span>
<span class="label">Projects</span>
</a>
</div>
</div>
</div>
</div>

<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
<div class="main-box clearfix profile-box-contact">
<div class="main-box-body clearfix">
<div class="profile-box-header gray-bg clearfix">
<img src="img/samples/ryan-300.jpg" alt="" class="profile-img img-responsive" />
<h2>Ryan Gosling</h2>
<div class="job-position">
Actor
</div>
<ul class="contact-details">
<li>
        <i class="fa fa-map-marker"></i> Los Angeles
</li>
<li>
        <i class="fa fa-envelope"></i> ryan@gosling.com
</li>
<li>
        <i class="fa fa-phone"></i> (829) 101-9499
</li>
</ul>
</div>

<div class="profile-box-footer clearfix">
<a href="#">
<span class="value">192</span>
<span class="label">Messages</span>
</a>
<a href="#">
<span class="value">99</span>
<span class="label">Sales</span>
</a>
<a href="#">
<span class="value">20</span>
<span class="label">Projects</span>
</a>
</div>
</div>
</div>
</div>

<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
<div class="main-box clearfix profile-box-contact">
<div class="main-box-body clearfix">
<div class="profile-box-header gray-bg clearfix">
<img src="img/samples/scarlett-300.jpg" alt="" class="profile-img img-responsive" />
<h2>S. Johansson</h2>
<div class="job-position">
Actress
</div>
<ul class="contact-details">
<li>
        <i class="fa fa-map-marker"></i> Paris
</li>
<li>
        <i class="fa fa-envelope"></i> s@johansson.com
</li>
<li>
        <i class="fa fa-phone"></i> (901) 482-9010
</li>
</ul>
</div>

<div class="profile-box-footer clearfix">
<a href="#">
<span class="value">1,293</span>
<span class="label">Messages</span>
</a>
<a href="#">
<span class="value">439</span>
<span class="label">Sales</span>
</a>
<a href="#">
<span class="value">290</span>
<span class="label">Projects</span>
</a>
</div>
</div>
</div>
</div>

<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
<div class="main-box clearfix profile-box-contact">
<div class="main-box-body clearfix">
<div class="profile-box-header gray-bg clearfix">
<img src="img/samples/emma-300.jpg" alt="" class="profile-img img-responsive" />
<h2>Emma Watson</h2>
<div class="job-position">
Actress
</div>
<ul class="contact-details">
<li>
        <i class="fa fa-map-marker"></i> London
</li>
<li>
        <i class="fa fa-envelope"></i> emma@watson.com
</li>
<li>
        <i class="fa fa-phone"></i> (303) 958-1009
</li>
</ul>
</div>

<div class="profile-box-footer clearfix">
<a href="#">
<span class="value">28</span>
<span class="label">Messages</span>
</a>
<a href="#">
<span class="value">9</span>
<span class="label">Sales</span>
</a>
<a href="#">
<span class="value">33</span>
<span class="label">Projects</span>
</a>
</div>
</div>
</div>
</div>

<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
<div class="main-box clearfix profile-box-contact">
<div class="main-box-body clearfix">
<div class="profile-box-header gray-bg clearfix">
<img src="img/samples/robert-300.jpg" alt="" class="profile-img img-responsive" />
<h2>Robert Downey</h2>
<div class="job-position">
Actor
</div>
<ul class="contact-details">
<li>
        <i class="fa fa-map-marker"></i> Chicago
</li>
<li>
        <i class="fa fa-envelope"></i> robert@downey.com
</li>
<li>
        <i class="fa fa-phone"></i> (942) 834-9382
</li>
</ul>
</div>

<div class="profile-box-footer clearfix">
<a href="#">
<span class="value">92</span>
<span class="label">Messages</span>
</a>
<a href="#">
<span class="value">127</span>
<span class="label">Sales</span>
</a>
<a href="#">
<span class="value">361</span>
<span class="label">Projects</span>
</a>
</div>
</div>
</div>
</div>

<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
<div class="main-box clearfix profile-box-contact">
<div class="main-box-body clearfix">
<div class="profile-box-header gray-bg clearfix">
<img src="img/samples/kunis-300.jpg" alt="" class="profile-img img-responsive" />
<h2>Mila Kunis</h2>
<div class="job-position">
Actress
</div>
<ul class="contact-details">
<li>
        <i class="fa fa-map-marker"></i> San Francisco
</li>
<li>
        <i class="fa fa-envelope"></i> mila@kunis.com
</li>
<li>
        <i class="fa fa-phone"></i> (823) 321-0192
</li>
</ul>
</div>

<div class="profile-box-footer clearfix">
<a href="#">
<span class="value">44</span>
<span class="label">Messages</span>
</a>
<a href="#">
<span class="value">91</span>
<span class="label">Sales</span>
</a>
<a href="#">
<span class="value">3</span>
<span class="label">Projects</span>
</a>
</div>
</div>
</div>
</div>

<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
<div class="main-box clearfix profile-box-contact">
<div class="main-box-body clearfix">
<div class="profile-box-header gray-bg clearfix">
<img src="img/samples/angelina-300.jpg" alt="" class="profile-img img-responsive" />
<h2>Angelina Jolie</h2>
<div class="job-position">
Actress
</div>
<ul class="contact-details">
<li>
        <i class="fa fa-map-marker"></i> New York
</li>
<li>
        <i class="fa fa-envelope"></i> angelina@jolie.com
</li>
<li>
        <i class="fa fa-phone"></i> (329) 239-3342
</li>
</ul>
</div>

<div class="profile-box-footer clearfix">
<a href="#">
<span class="value">783</span>
<span class="label">Messages</span>
</a>
<a href="#">
<span class="value">912</span>
<span class="label">Sales</span>
</a>
<a href="#">
<span class="value">83</span>
<span class="label">Projects</span>
</a>
</div>
</div>
</div>
</div>


</div>                



</div>
</div>

<footer id="footer-bar" class="row">
 <?php include_once 'footer.php';?>
</footer>
</div>
</div>
</div>
</div>



<!-- global scripts -->
<script src="js/demo-skin-changer.js"></script> <!-- only for demo -->

<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.nanoscroller.min.js"></script>

<script src="js/demo.js"></script> <!-- only for demo -->

<!-- this page specific scripts -->
<script src="js/moment.min.js"></script>
<script src="js/jquery-jvectormap-1.2.2.min.js"></script>
<script src="js/jquery-jvectormap-world-merc-en.js"></script>
<script src="js/gdp-data.js"></script>
<script src="js/flot/jquery.flot.min.js"></script>
<script src="js/flot/jquery.flot.resize.min.js"></script>
<script src="js/flot/jquery.flot.time.min.js"></script>
<script src="js/flot/jquery.flot.threshold.js"></script>
<script src="js/flot/jquery.flot.axislabels.js"></script>
<script src="js/jquery.sparkline.min.js"></script>
<script src="js/skycons.js"></script>

<!-- Forms specific scripts -->
<script src="js/jquery.maskedinput.min.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/moment.min.js"></script>
<script src="js/daterangepicker.js"></script>
<script src="js/bootstrap-timepicker.min.js"></script>
<script src="js/select2.min.js"></script>
<script src="js/hogan.js"></script>
<script src="js/typeahead.min.js"></script>
<script src="js/jquery.pwstrength.js"></script>




<!-- theme scripts -->
<script src="js/scripts.js"></script>
<script src="js/pace.min.js"></script>

<!-- this page specific inline scripts -->
<script>
$(document).ready(function() {               



//CHARTS
function gd(year, day, month) {
return new Date(year, month - 1, day).getTime();
}

if ($('#graph-bar').length) {
var data1 = [
[gd(2015, 1, 1), 838], [gd(2015, 1, 2), 749], [gd(2015, 1, 3), 634], [gd(2015, 1, 4), 1080], [gd(2015, 1, 5), 850], [gd(2015, 1, 6), 465], [gd(2015, 1, 7), 453], [gd(2015, 1, 8), 646], [gd(2015, 1, 9), 738], [gd(2015, 1, 10), 899], [gd(2015, 1, 11), 830], [gd(2015, 1, 12), 789]
];

var data2 = [
[gd(2015, 1, 1), 342], [gd(2015, 1, 2), 721], [gd(2015, 1, 3), 493], [gd(2015, 1, 4), 403], [gd(2015, 1, 5), 657], [gd(2015, 1, 6), 782], [gd(2015, 1, 7), 609], [gd(2015, 1, 8), 543], [gd(2015, 1, 9), 599], [gd(2015, 1, 10), 359], [gd(2015, 1, 11), 783], [gd(2015, 1, 12), 680]
];

var series = new Array();

series.push({
data: data1,
bars: {
show : true,
barWidth: 24 * 60 * 60 * 12000,
lineWidth: 1,
fill: 1,
align: 'center'
},
label: 'Revenues'
});
series.push({
data: data2,
color: '#e84e40',
lines: {
show : true,
lineWidth: 3,
},
points: { 
fillColor: "#e84e40", 
fillColor: '#ffffff', 
pointWidth: 1,
show: true 
},
label: 'Orders'
});

$.plot("#graph-bar", series, {
colors: ['#03a9f4', '#f1c40f', '#2ecc71', '#3498db', '#9b59b6', '#95a5a6'],
grid: {
tickColor: "#f2f2f2",
borderWidth: 0,
hoverable: true,
clickable: true
},
legend: {
noColumns: 1,
labelBoxBorderColor: "#000000",
position: "ne"       
},
shadowSize: 0,
xaxis: {
mode: "time",
tickSize: [1, "month"],
tickLength: 0,
// axisLabel: "Date",
axisLabelUseCanvas: true,
axisLabelFontSizePixels: 12,
axisLabelFontFamily: 'Open Sans, sans-serif',
axisLabelPadding: 10
}
});

var previousPoint = null;
$("#graph-bar").bind("plothover", function (event, pos, item) {
if (item) {
if (previousPoint != item.dataIndex) {

previousPoint = item.dataIndex;

$("#flot-tooltip").remove();
var x = item.datapoint[0],
y = item.datapoint[1];

showTooltip(item.pageX, item.pageY, item.series.label, y );
}
}
else {
$("#flot-tooltip").remove();
previousPoint = [0,0,0];
}
});

function showTooltip(x, y, label, data) {
$('<div id="flot-tooltip">' + '<b>' + label + ': </b><i>' + data + '</i>' + '</div>').css({
top: y + 5,
left: x + 20
}).appendTo("body").fadeIn(200);
}
}

//WORLD MAP
$('#world-map').vectorMap({
map: 'world_merc_en',
backgroundColor: '#ffffff',
zoomOnScroll: false,
regionStyle: {
initial: {
fill: '#e1e1e1',
stroke: 'none',
"stroke-width": 0,
"stroke-opacity": 1
},
hover: {
"fill-opacity": 0.8
},
selected: {
fill: '#8dc859'
},
selectedHover: {
}
},
markerStyle: {
initial: {
fill: '#e84e40',
stroke: '#e84e40'
}
},
markers: [
{latLng: [38.35, -121.92], name: 'Los Angeles - 23'},
{latLng: [39.36, -73.12], name: 'New York - 84'},
{latLng: [50.49, -0.23], name: 'London - 43'},
{latLng: [36.29, 138.54], name: 'Tokyo - 33'},
{latLng: [37.02, 114.13], name: 'Beijing - 91'},
{latLng: [-32.59, 150.21], name: 'Sydney - 22'},
],
series: {
regions: [{
values: gdpData,
scale: ['#6fc4fe', '#2980b9'],
normalizeFunction: 'polynomial'
}]
},
onRegionLabelShow: function(e, el, code){
el.html(el.html()+' ('+gdpData[code]+')');
}
});

/* SPARKLINE - graph in header */
var orderValues = [10,8,5,7,4,4,3,8,0,7,10,6,5,4,3,6,8,9];

$('.spark-orders').sparkline(orderValues, {
type: 'bar', 
barColor: '#ced9e2',
height: 25,
barWidth: 6
});

var revenuesValues = [8,3,2,6,4,9,1,10,8,2,5,8,6,9,3,4,2,3,7];

$('.spark-revenues').sparkline(revenuesValues, {
type: 'bar', 
barColor: '#ced9e2',
height: 25,
barWidth: 6
});

/* ANIMATED WEATHER */
var skycons = new Skycons({"color": "#03a9f4"});
// on Android, a nasty hack is needed: {"resizeClear": true}

// you can add a canvas by it's ID...
skycons.add("current-weather", Skycons.SNOW);

// start animation!
skycons.play();


//tooltip init
$('#exampleTooltip').tooltip();

//nice select boxes
$('.sel2').select2();

$('#sel2Multi').select2({
placeholder: 'Select a Country',
allowClear: true
});

//masked inputs
$("#maskedDate").mask("99/99/9999");
$(".maskedPhone").mask("(999) 999-9999");
$(".maskedPhoneExt").mask("(999) 999-9999? x99999");
$("#maskedTax").mask("99-9999999");
$("#maskedSsn").mask("999-99-9999");


$("#maskedProductKey").mask("a*-999-a999",{placeholder:" ",completed:function(){alert("You typed the following: "+this.val());}});

$.mask.definitions['~']='[+-]';
$("#maskedEye").mask("~9.99 ~9.99 999");

//datepicker
$('.datepickerDate').datepicker({
format: 'mm-dd-yyyy'
});

$('#datepickerDateComponent').datepicker();

//daterange picker
$('#datepickerDateRange').daterangepicker();

//timepicker
$('#timepicker').timepicker({
minuteStep: 5,
showSeconds: true,
showMeridian: false,
disableFocus: false,
showWidget: true
}).focus(function() {
$(this).next().trigger('click');
});

//autocomplete simple
$('#exampleAutocompleteSimple').typeahead({                              
prefetch: '/data/countries.json',
limit: 10
});

//autocomplete with templating
$('#exampleAutocomplete').typeahead({                              
name: 'twitter-oss',                                                        
prefetch: '/data/repos.json',                                             
template: [                                                              
'<p class="repo-language">{{language}}</p>',                              
'<p class="repo-name">{{name}}</p>',                                      
'<p class="repo-description">{{description}}</p>'                         
].join(''),                                                                 
engine: Hogan                                                               
});

//password strength meter
$('#examplePwdMeter').pwstrength({
label: '.pwdstrength-label'
});

// Toggles Project Status and Project End Date
$('#project-status').change(function() {
var status = $('#project-status').val();
if (status == "Complete") { 
$('#end-date-toggles').toggle();
}
else 
$('#end-date-toggles').hide();

});




}); // documents 



</script>

</body>
</html>

