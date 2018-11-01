<!doctype html>

<html class="no-js" lang=""> <head><title>Center Springs UMC</title>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title></title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">

<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>



		<!-- SmartMenus core CSS (required) -->
<link href="js/plugins/smartmenus/css/sm-core-css.css" rel="stylesheet" type="text/css" />

<!-- "sm-mint" menu theme (optional, you can use your own CSS, too) -->
<link href="js/plugins/smartmenus/css/sm-mint/sm-mint.css" rel="stylesheet" type="text/css" />


	</head>
	<body>
<!-- 		<a id="test1">TEST</a> -->




		<style type="text/css">
			@media (min-width: 768px) {
				#main-nav {
					line-height: 0;
					text-align: center;
				}
				#main-menu {
					display: inline-block;
				}
			}

		.sm-mint {
			border-bottom-width:0;
		}

/*		#main-menu{
			color: red !important;
			background-color: rgba(0, 0, 0, 1);
		}*/
		.abs-umc-logo{
			position: absolute;
			left: 25px;
    		top: 15px;
		}


/* display this row with flex and use wrap (= respect columns' widths) */

.row-flex {
  display: flex;
  flex-wrap: wrap;
}


/* vertical spacing between columns */

[class*="col-"] {
  margin-bottom: 30px;
}

.content {
  height: 100%;
  padding: 20px 20px 10px;
  color: #fff;
}


/* Demo backgrounds and styling*/

.colour-1 {
  background: rgba(232, 229, 185, .8);
  color: #000000;
}

.colour-2 {
  background: rgba(232, 229, 185, 0);
  color: #000000;
  border-style: solid;
}


.colour-resume1 {
  background: rgba(232, 229, 185, 1);
  color: #000000;
}

.colour-3 {
  background: #70AE6E;
}

.colour-4 {
  background: #82204A;
}

.colour-5 {
  background: #558C8C;
}

.colour-6 {
  background: #917C78;
}

body {
  padding: 20px 0;
  font-family: Roboto, sans-serif;
}

.content h3 {
  margin-top: 0px;
  font-weight: 300;
}

h1 {
  font-weight: 300;
  margin-bottom: 40px;
}


    .drop-shadow {
        -webkit-box-shadow: 0 0 5px 2px rgba(0, 0, 0, .5);
        box-shadow: 0 0 5px 2px rgba(0, 0, 0, .5);
    }
    .container.drop-shadow {
        padding-left:0;
        padding-right:0;
    }


/*Scrolling test*/

/*.row {
    margin-top: 10px;
}*/

/*.panel-tabs {
    position: relative;
    bottom: 30px;
    clear:both;
    border-bottom: 1px solid transparent;
}

.panel-tabs > li {
    float: left;
    margin-bottom: -1px;
}*/

/*.panel-tabs > li > a {
    margin-right: 2px;
    margin-top: 4px;
    line-height: .85;
    border: 1px solid transparent;
    border-radius: 4px 4px 0 0;
    color: #FFFFFF;
}*/

/*.panel-tabs > li > a:hover {
    border-color: transparent;
    color: #FFFFFF;
    background-color: transparent;
}
*/
.panel-primary>.panel-heading {
    color: #000000;
    background-color: #9bc999;
    border-color: #000000;
}

.panel-primary {
    border-color: #000000;
}

.panel-tabs > li.active > a,
.panel-tabs > li.active > a:hover,
.panel-tabs > li.active > a:focus {
    color: #FFFFFF;
    cursor: default;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    border-radius: 2px;
    background-color: rgba(255,255,255, .23);
    border-bottom-color: transparent;
}

::-webkit-scrollbar { 
    display: none; 
}

/*.container-content{
	height:50vh;
    overflow-y:scroll;
	}
*/
.tab-pane{
	height:50vh;
    overflow-y:scroll;
	}

  .tab-resume{
  height:80vh;
    overflow-y:scroll;
  }

.tab-panealt{
    height:auto;
    overflow-y:scroll;
}


/* Resume CSS*/

/* uses font awesome for social icons */
@import url(http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css);

.page-header{
  text-align: center;    
}

/* resume stuff */

.bs-callout {
    -moz-border-bottom-colors: none;
    -moz-border-left-colors: none;
    -moz-border-right-colors: none;
    -moz-border-top-colors: none;
    border-color: #eee;
    background-color: rgba(255,255,255, 1);
    border-radius: 3px;
    border-style: solid;
    border-width: 1px 1px 1px 5px;
    margin-bottom: 5px;
    padding: 20px;
}
.bs-callout:last-child {
    margin-bottom: 0px;
}
.bs-callout h4 {
    margin-bottom: 10px;
    margin-top: 0;
}

.bs-callout-danger {
    border-left-color: #d9534f;
}

.bs-callout-danger h4{
    color: #d9534f;
}

.resume .list-group-item:first-child, .resume .list-group-item:last-child{
  border-radius:0;
}

/*makes an anchor inactive(not clickable)*/
.inactive-link {
   pointer-events: none;
   cursor: default;
}

@media (max-width: 992px) {
  .resume-heading .social-btn-holder{
    padding:5px;
  }
}



.progress-bar {
  text-align: left;
	white-space: nowrap;
	white-space: nowrap;
	overflow: hidden;
	text-overflow: ellipsis;
	cursor: pointer;
}

.progress-bar > .progress-type {
	padding-left: 10px;
}

.progress-meter {
	min-height: 15px;
	border-bottom: 2px solid rgb(160, 160, 160);
  margin-bottom: 15px;
}

.progress-meter > .meter {
	position: relative;
	float: left;
	min-height: 15px;
	border-width: 0px;
	border-style: solid;
	border-color: rgb(160, 160, 160);
}

.progress-meter > .meter-left {
	border-left-width: 2px;
}

.progress-meter > .meter-right {
	float: right;
	border-right-width: 2px;
}

.progress-meter > .meter-right:last-child {
	border-left-width: 2px;
}

.progress-meter > .meter > .meter-text {
	position: absolute;
	display: inline-block;
	bottom: -20px;
	width: 100%;
	font-weight: 700;
	font-size: 0.85em;
	color: rgb(160, 160, 160);
	text-align: left;
}

.progress-meter > .meter.meter-right > .meter-text {
	text-align: right;
}


/*.content-resume{
  overflow:hidden;
}*/




</style>


	<div class="abs-umc-logo">
		<img src="{{url('images/umc_logo.png')}}" alt="umc" height="160" width="160">
	</div>


	<nav id="main-nav">
<!-- 		<img src="{{url('images/umc_logo.png')}}" alt="umc" height="42" width="42">
 -->	<ul id="main-menu" class="sm sm-mint" data-smartmenus-id="15406663225072114">
        <li><a href="#" id="home">Home</a></li>
        <li><a href="#" class="has-submenu" id="sm-15406663225072114-1" aria-haspopup="true" aria-controls="sm-15406663225072114-2" aria-expanded="false">Weekly Update<span class="sub-arrow"></span></a>
          <ul id="sm-15406663225072114-2" role="group" aria-hidden="true" aria-labelledby="sm-15406663225072114-1" aria-expanded="false">
            <li><a href="#" id="pastormessage">The Pastor's Message</a></li>
            <li><a href="#" id="kidscorner">Children's Corner</a></li>
            <li><a href="#">Scripture</a></li>
            <li><a href="#" class="has-submenu" id="sm-15406663225072114-3" aria-haspopup="true" aria-controls="sm-15406663225072114-4" aria-expanded="false">Prayer Requests<span class="sub-arrow"></span></a>
              <ul id="sm-15406663225072114-4" role="group" aria-hidden="true" aria-labelledby="sm-15406663225072114-3" aria-expanded="false">
                <li><a href="#">Current Week</a></li>
                <li><a href="#">Previous Week</a></li>
                <li><a href="#">Entire Month</a></li>
              </ul>
            </li>
          </ul>
        </li>


        <li><a href="#" class="has-submenu" id="sm-15406663225072114-1" aria-haspopup="true" aria-controls="sm-15406663225072114-2" aria-expanded="false">News & Events<span class="sub-arrow"></span></a>
          <ul id="sm-15406663225072114-2" role="group" aria-hidden="true" aria-labelledby="sm-15406663225072114-1" aria-expanded="false">
            <li><a href="#">Announcements</a></li>
			<li><a href="#">Upcoming Events</a></li>
			<li><a href="#">The Church Calendar</a></li>
          </ul>
        </li>





        <li><a href="#" class="has-submenu" id="sm-15406663225072114-15" aria-haspopup="true" aria-controls="sm-15406663225072114-16" aria-expanded="false">About us<span class="sub-arrow"></span></a>
          <ul class="mega-menu" id="sm-15406663225072114-16" role="group" aria-hidden="true" aria-labelledby="sm-15406663225072114-15" aria-expanded="false" style="width: 20em; min-width: 10em; display: none; max-width: 20em; top: auto; left: 0px; margin-left: 0px; margin-top: 0px;">
            <li><a href="#" id="matthewhopp">Author's Resume</a></li>
            	<div id="about-ajax"> </div>
              <!-- The mega drop down contents -->
              <!-- <div style="width:400px;max-width:100%;">
                <div style="padding:5px 24px;">
                  <p>This is a mega drop down test. Just set the "mega-menu" class to the parent UL element to inform the SmartMenus script. It can contain <strong>any HTML</strong>.</p>
                  <p>Just style the contents as you like (you may need to reset some SmartMenus inherited styles - e.g. for lists, links, etc.)</p>
                </div>
              </div> -->
            </li>
          </ul>
        </li>
      </ul>
</nav>
	
<hr>



<!-- Background Image -->
<style>

body{
	background-image: url("images/imagesunrise1.png");
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    background-attachment:fixed;
	height: 100vh;
	width: 100%; 
/*	background-position: center;*/
}

</style>

<div class="container bg-c">

<!-- 	      <img src="images/imagegrass1.png" style="width:100%;" alt="..."> -->

</div>
<div class = "containermaster">
<div class= "container drop-shadow">

<div class="container container-content" id="home-content">
	<div class="row">
		<div class="content colour-1">
            <div class="content colour-2">
                <h3 class="panel-title text-center"> Center Springs United Methodist Church </h3>
                    <ul class="nav panel-tabs">
                    </ul>
            </div>
      <div class="panel-body">
        <div class="tab-content">
            <div class="tab-pane active">
              <div class="row">
                <div class="col-sm-3">
            <p style="MARGIN-RIGHT: 0px" dir="ltr" align="left"><strong><u>CENTER SPRINGS UMC</u>:<br>
            </strong>PH: 256-778-0012<br>
            4851 East Upper River Rd<br>
            Somerville, AL 35670</p>
            <p style="MARGIN-RIGHT: 0px" dir="ltr" align="left"><strong><u>SERVICE TIMES</u>:<br>
            </strong>Sunday Mornings<br> 
            Worship: 9:00 &amp; 10:40<br>
            Youth: 9:00<br>
            Children: 9:00 </p>
              </div>
          	</div>
    			</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container container-content" style="display:none;" id="pastormessage-content">
    <div class="row">
        <div class="content colour-1">
            <div class="content colour-2">
                <h3 class="panel-title text-center">Pastor's Message</h3>
<!--                 <span class="pull-right"> -->
                    <ul class="nav panel-tabs">
                    </ul>
            </div>            
            <div class="panel-body">
                <div class="tab-content">
                    <div class="tab-pane active" id="test">
                       <p>L Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui.

Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc, quis gravida magna mi a libero. Fusce vulputate eleifend sapien. Vestibulum purus quam, scelerisque ut, mollis sed, nonummy id, metus. Nullam accumsan lorem in dui. Cras ultricies mi eu turpis hendrerit fringilla. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In ac dui quis mi consectetuer lacinia.

Nam pretium turpis et arcu. Duis arcu tortor, suscipit eget, imperdiet nec, imperdiet iaculis, ipsum. Sed aliquam ultrices mauris. Integer ante arcu, accumsan a, consectetuer eget, posuere ut, mauris. Praesent adipiscing. Phasellus ullamcorper ipsum rutrum nunc. Nunc nonummy metus. Vestibulum volutpat pretium libero. Cras id dui. Aenean ut eros et nisl sagittis vestibulum. Nullam nulla eros, ultricies sit amet, nonummy id, imperdiet feugiat, pede. Sed lectus. Donec mollis hendrerit risus. Phasellus nec sem in justo pellentesque facilisis. Etiam imperdiet imperdiet orci. Nunc nec neque. Phasellus leo dolor, tempus non, auctor et, hendrerit quis, nisi.

Curabitur ligula sapien, tincidunt non, euismod vitae, posuere imperdiet, leo. Maecenas malesuada. Praesent congue erat at massa. Sed cursus turpis vitae tortor. Donec posuere vulputate arcu. Phasellus accumsan cursus velit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed aliquam, nisi quis porttitor congue, elit erat euismod orci, ac placerat dolor lectus quis orci. Phasellus consectetuer vestibulum elit. Aenean tellus metus, bibendum sed, posuere ac, mattis non, nunc. Vestibulum fringilla pede sit amet augue. In turpis. Pellentesque posuere. Praesent turpis.

Aenean posuere, tortor sed cursus feugiat, nunc augue blandit nunc, eu sollicitudin urna dolor sagittis lacus. Donec elit libero, sodales nec, volutpat a, suscipit non, turpis. Nullam sagittis. Suspendisse pulvinar, augue ac venenatis condimentum, sem libero volutpat nibh, nec pellentesque velit pede quis nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Fusce id purus. Ut varius tincidunt libero. Phasellus dolor. Maecenas vestibulum mollis diam. Pellentesque ut neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.

In dui magna, posuere eget, vestibulum et, tempor auctor, justo. In ac felis quis tortor malesuada pretium. Pellentesque auctor neque nec urna. Proin sapien ipsum, porta a, auctor quis, euismod ut, mi. Aenean viverra rhoncus pede. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut non enim eleifend felis pretium feugiat. Vivamus quis mi. Phasellus a est. Phasellus magna.

In hac habitasse platea dictumst. Curabitur at lacus ac velit ornare lobortis. Curabitur a felis in nunc fringilla tristique. Morbi mattis ullamcorper velit. Phasellus gravida semper nisi. Nullam vel sem. Pellentesque libero tortor, tincidunt et, tincidunt eget, semper nec, quam. Sed hendrerit. Morbi ac felis. Nunc egestas, augue at pellentesque laoreet, felis eros vehicula leo, at malesuada velit leo quis pede. Donec interdum, metus et hendrerit aliquet, dolor diam sagittis ligula, eget egestas libero turpis vel mi. Nunc nulla. Fusce risus nisl, viverra et, tempor et, pretium in, sapien. Donec venenatis vulputate lorem.

Morbi nec metus. Phasellus blandit leo ut odio. Maecenas ullamcorper, dui et placerat feugiat, eros pede varius nisi, condimentum viverra felis nunc et lorem. Sed magna purus, fermentum eu, tincidunt eu, varius ut, felis. In auctor lobortis lacus. Quisque libero metus, condimentum nec, tempor a, commodo mollis, magna. Vestibulum ullamcorper mauris at ligula. Fusce fermentum. Nullam cursus lacinia erat. Praesent blandit laoreet nibh.

Fusce convallis metus id felis luctus adipiscing. Pellentesque egestas, neque sit amet convallis pulvinar, justo nulla eleifend augue, ac auctor orci leo non est. Quisque id mi. Ut tincidunt tincidunt erat. Etiam feugiat lorem non metus. Vestibulum dapibus nunc ac augue. Curabitur vestibulum aliquam leo. Praesent egestas neque eu enim. In hac habitasse platea dictumst. Fusce a quam. Etiam ut purus mattis mauris sodales aliquam. Curabitur nisi. Quisque malesuada placerat nisl. Nam ipsum risus, rutrum vitae, vestibulum eu, molestie vel, lacus.
                      </p>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="container container-content" style="display:none;" id="kidscorner-content">
    <div class="row">
        <div class="content colour-1">
            <div class="content colour-2">
                <h3 class="panel-title text-center">Title</h3>
<!--                 <span class="pull-right"> -->
                    <ul class="nav panel-tabs">
                    </ul>
            </div>            
            <div class="panel-body">
                <div class="tab-content">
                    <div class="tab-panealt active" id="test">
                       <p>L Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui.

Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc, quis gravida magna mi a libero. Fusce vulputate eleifend sapien. Vestibulum purus quam, scelerisque ut, mollis sed, nonummy id, metus. Nullam accumsan lorem in dui. Cras ultricies mi eu turpis hendrerit fringilla. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In ac dui quis mi consectetuer lacinia.

Nam pretium turpis et arcu. Duis arcu tortor, suscipit eget, imperdiet nec, imperdiet iaculis, ipsum. Sed aliquam ultrices mauris. Integer ante arcu, accumsan a, consectetuer eget, posuere ut, mauris. Praesent adipiscing. Phasellus ullamcorper ipsum rutrum nunc. Nunc nonummy metus. Vestibulum volutpat pretium libero. Cras id dui. Aenean ut eros et nisl sagittis vestibulum. Nullam nulla eros, ultricies sit amet, nonummy id, imperdiet feugiat, pede. Sed lectus. Donec mollis hendrerit risus. Phasellus nec sem in justo pellentesque facilisis. Etiam imperdiet imperdiet orci. Nunc nec neque. Phasellus leo dolor, tempus non, auctor et, hendrerit quis, nisi.

Curabitur ligula sapien, tincidunt non, euismod vitae, posuere imperdiet, leo. Maecenas malesuada. Praesent congue erat at massa. Sed cursus turpis vitae tortor. Donec posuere vulputate arcu. Phasellus accumsan cursus velit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed aliquam, nisi quis porttitor congue, elit erat euismod orci, ac placerat dolor lectus quis orci. Phasellus consectetuer vestibulum elit. Aenean tellus metus, bibendum sed, posuere ac, mattis non, nunc. Vestibulum fringilla pede sit amet augue. In turpis. Pellentesque posuere. Praesent turpis.

Aenean posuere, tortor sed cursus feugiat, nunc augue blandit nunc, eu sollicitudin urna dolor sagittis lacus. Donec elit libero, sodales nec, volutpat a, suscipit non, turpis. Nullam sagittis. Suspendisse pulvinar, augue ac venenatis condimentum, sem libero volutpat nibh, nec pellentesque velit pede quis nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Fusce id purus. Ut varius tincidunt libero. Phasellus dolor. Maecenas vestibulum mollis diam. Pellentesque ut neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.

In dui magna, posuere eget, vestibulum et, tempor auctor, justo. In ac felis quis tortor malesuada pretium. Pellentesque auctor neque nec urna. Proin sapien ipsum, porta a, auctor quis, euismod ut, mi. Aenean viverra rhoncus pede. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut non enim eleifend felis pretium feugiat. Vivamus quis mi. Phasellus a est. Phasellus magna.

In hac habitasse platea dictumst. Curabitur at lacus ac velit ornare lobortis. Curabitur a felis in nunc fringilla tristique. Morbi mattis ullamcorper velit. Phasellus gravida semper nisi. Nullam vel sem. Pellentesque libero tortor, tincidunt et, tincidunt eget, semper nec, quam. Sed hendrerit. Morbi ac felis. Nunc egestas, augue at pellentesque laoreet, felis eros vehicula leo, at malesuada velit leo quis pede. Donec interdum, metus et hendrerit aliquet, dolor diam sagittis ligula, eget egestas libero turpis vel mi. Nunc nulla. Fusce risus nisl, viverra et, tempor et, pretium in, sapien. Donec venenatis vulputate lorem.

Morbi nec metus. Phasellus blandit leo ut odio. Maecenas ullamcorper, dui et placerat feugiat, eros pede varius nisi, condimentum viverra felis nunc et lorem. Sed magna purus, fermentum eu, tincidunt eu, varius ut, felis. In auctor lobortis lacus. Quisque libero metus, condimentum nec, tempor a, commodo mollis, magna. Vestibulum ullamcorper mauris at ligula. Fusce fermentum. Nullam cursus lacinia erat. Praesent blandit laoreet nibh.

Fusce convallis metus id felis luctus adipiscing. Pellentesque egestas, neque sit amet convallis pulvinar, justo nulla eleifend augue, ac auctor orci leo non est. Quisque id mi. Ut tincidunt tincidunt erat. Etiam feugiat lorem non metus. Vestibulum dapibus nunc ac augue. Curabitur vestibulum aliquam leo. Praesent egestas neque eu enim. In hac habitasse platea dictumst. Fusce a quam. Etiam ut purus mattis mauris sodales aliquam. Curabitur nisi. Quisque malesuada placerat nisl. Nam ipsum risus, rutrum vitae, vestibulum eu, molestie vel, lacus. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="container container-content" style="display:none;" id="churchmission-content">
    <div class="row">
        <div class="content colour-1">
            <div class="content colour-2">
                <h3 class="panel-title text-center">Title</h3>
<!--                 <span class="pull-right"> -->
                    <ul class="nav panel-tabs">
                    </ul>
            </div>            
            <div class="panel-body">
                <div class="tab-content">
                    <div class="tab-pane active" id="test">
                       L Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui.

Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc, quis gravida magna mi a libero. Fusce vulputate eleifend sapien. Vestibulum purus quam, scelerisque ut, mollis sed, nonummy id, metus. Nullam accumsan lorem in dui. Cras ultricies mi eu turpis hendrerit fringilla. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In ac dui quis mi consectetuer lacinia.

Nam pretium turpis et arcu. Duis arcu tortor, suscipit eget, imperdiet nec, imperdiet iaculis, ipsum. Sed aliquam ultrices mauris. Integer ante arcu, accumsan a, consectetuer eget, posuere ut, mauris. Praesent adipiscing. Phasellus ullamcorper ipsum rutrum nunc. Nunc nonummy metus. Vestibulum volutpat pretium libero. Cras id dui. Aenean ut eros et nisl sagittis vestibulum. Nullam nulla eros, ultricies sit amet, nonummy id, imperdiet feugiat, pede. Sed lectus. Donec mollis hendrerit risus. Phasellus nec sem in justo pellentesque facilisis. Etiam imperdiet imperdiet orci. Nunc nec neque. Phasellus leo dolor, tempus non, auctor et, hendrerit quis, nisi.

Curabitur ligula sapien, tincidunt non, euismod vitae, posuere imperdiet, leo. Maecenas malesuada. Praesent congue erat at massa. Sed cursus turpis vitae tortor. Donec posuere vulputate arcu. Phasellus accumsan cursus velit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed aliquam, nisi quis porttitor congue, elit erat euismod orci, ac placerat dolor lectus quis orci. Phasellus consectetuer vestibulum elit. Aenean tellus metus, bibendum sed, posuere ac, mattis non, nunc. Vestibulum fringilla pede sit amet augue. In turpis. Pellentesque posuere. Praesent turpis.

Aenean posuere, tortor sed cursus feugiat, nunc augue blandit nunc, eu sollicitudin urna dolor sagittis lacus. Donec elit libero, sodales nec, volutpat a, suscipit non, turpis. Nullam sagittis. Suspendisse pulvinar, augue ac venenatis condimentum, sem libero volutpat nibh, nec pellentesque velit pede quis nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Fusce id purus. Ut varius tincidunt libero. Phasellus dolor. Maecenas vestibulum mollis diam. Pellentesque ut neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.

In dui magna, posuere eget, vestibulum et, tempor auctor, justo. In ac felis quis tortor malesuada pretium. Pellentesque auctor neque nec urna. Proin sapien ipsum, porta a, auctor quis, euismod ut, mi. Aenean viverra rhoncus pede. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut non enim eleifend felis pretium feugiat. Vivamus quis mi. Phasellus a est. Phasellus magna.

In hac habitasse platea dictumst. Curabitur at lacus ac velit ornare lobortis. Curabitur a felis in nunc fringilla tristique. Morbi mattis ullamcorper velit. Phasellus gravida semper nisi. Nullam vel sem. Pellentesque libero tortor, tincidunt et, tincidunt eget, semper nec, quam. Sed hendrerit. Morbi ac felis. Nunc egestas, augue at pellentesque laoreet, felis eros vehicula leo, at malesuada velit leo quis pede. Donec interdum, metus et hendrerit aliquet, dolor diam sagittis ligula, eget egestas libero turpis vel mi. Nunc nulla. Fusce risus nisl, viverra et, tempor et, pretium in, sapien. Donec venenatis vulputate lorem.

Morbi nec metus. Phasellus blandit leo ut odio. Maecenas ullamcorper, dui et placerat feugiat, eros pede varius nisi, condimentum viverra felis nunc et lorem. Sed magna purus, fermentum eu, tincidunt eu, varius ut, felis. In auctor lobortis lacus. Quisque libero metus, condimentum nec, tempor a, commodo mollis, magna. Vestibulum ullamcorper mauris at ligula. Fusce fermentum. Nullam cursus lacinia erat. Praesent blandit laoreet nibh.

Fusce convallis metus id felis luctus adipiscing. Pellentesque egestas, neque sit amet convallis pulvinar, justo nulla eleifend augue, ac auctor orci leo non est. Quisque id mi. Ut tincidunt tincidunt erat. Etiam feugiat lorem non metus. Vestibulum dapibus nunc ac augue. Curabitur vestibulum aliquam leo. Praesent egestas neque eu enim. In hac habitasse platea dictumst. Fusce a quam. Etiam ut purus mattis mauris sodales aliquam. Curabitur nisi. Quisque malesuada placerat nisl. Nam ipsum risus, rutrum vitae, vestibulum eu, molestie vel, lacus.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="container-content tab-resume" style="display:none;" id="matthewhopp-content">
<div class="resume">
<div class="content colour-1">
    <div class="content colour-2">
    <header class="page-header">
    <h1 class="page-title">Resume of Matthew Hopper</h1>
  </header>
<div class="row">
  <div class="col-xs-12 col-sm-12 col-md-offset-1 col-md-10 col-lg-offset-2 col-lg-8">
    <div class="panel panel-default">
      <div class="panel-heading resume-heading">
        <div class="row">
          <div class="col-lg-12">
            <div class="col-xs-12 col-sm-4">
              <figure>
                <img class="img-circle img-responsive" alt="" src="https://scontent-atl3-1.xx.fbcdn.net/v/t1.0-1/p160x160/15036739_1048067011972569_3499553064534626270_n.jpg?_nc_cat=103&_nc_ht=scontent-atl3-1.xx&oh=d28af4762e574241856580d3dad76bee&oe=5C464479">
              </figure>
            </div>
            <div class="col-xs-12 col-sm-8">
              <ul class="list-group">
                <li class="list-group-item">Matthew Hopper</li>
                <li class="list-group-item"><i class="fa fa-phone"></i> (256) 502-1103 </li>
                <li class="list-group-item"><i class="fa fa-envelope"></i> Matt.Hopper@Live.com </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="bs-callout bs-callout-danger">
        <h4>Career Objective:</h4>
        <p>
         </p>
        <p>
            ​To secure a position with Relatient that could lead to a long time
career.
        </p>
      </div>
 <div class="bs-callout bs-callout-danger">
        <h4>Professional Experience</h4>
        <ul class="list-group">
          <a class="list-group-item inactive-link" href="#">
            <h4 class="list-group-item-heading">
              Technical Support Specialist for Valley Rubber LLC, 2016 - 2018
            </h4>
            <p class="list-group-item-text">
              - Analyze situations and understanding how to find solutions to any technical support issues. </p>
            <p class="list-group-item-text">
              - Conduct in-depth research, compile information, and prepare quotes for approval. </p>
            <p class="list-group-item-text">
              - Prepare daily device checks into weekly department reports. </p>
            <p class="list-group-item-text">
              - Experienced with Microsoft 365 Email Administrator, Digium Switchvox Administrator, Microsoft 2012 Server, Avigilon Security Camera Server, and SonicWall firewalls. </p>
              <p class="list-group-item-text">
              - Understanding how to efficiently plan & run conduit, CAT6, and fiber on site. </p>
              <p class="list-group-item-text">
              - Dealing with department vendors and understanding the company needs when purchasing. </p>
          </a>
          <a class="list-group-item inactive-link" href="#">
            <h4 class="list-group-item-heading"> Press Operator for Valley Rubber LLC, 2015 - 2016 </h4>
            <p class="list-group-item-text">
              - Forklift & Scissor Lift certified</p>
            <p class="list-group-item-text">
              - Taught how to accurately produce high quality results within an intense time frame.</p>
            <p></p>
          </a>
        </ul>
      </div>

      <div class="bs-callout bs-callout-danger">
        <h4>Key Strengths</h4>
        <ul class="list-group">
          <li class="list-group-item"> Analytical and Problem Solving Skills </li>
          <li class="list-group-item"> Fluent typist </li>
          <li class="list-group-item"> Quick learner </li>
          <li class="list-group-item"> Critical thinking </li>
          <li class="list-group-item"> Goal oriented </li>
          <li class="list-group-item"> Self motivated </li>
          <li class="list-group-item"> Creativity </li>
        </ul>
      </div>
      <div class="bs-callout bs-callout-danger">
        <h4>Language and Platform Skills</h4>
        <ul class="list-group">
          <a class="list-group-item inactive-link" href="#">
            

            <div class="progress">
              <div data-placement="top" style="width: 40%;" 
              aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" role="progressbar" class="progress-bar progress-bar-success">
                <span class="sr-only">40%</span>
                <span class="progress-type"> PHP / Laravel Framework(v5.4) / Composer </span>
              </div>
            </div>
            <div class="progress">
              <div data-placement="top" style="width: 50%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="1" role="progressbar" class="progress-bar progress-bar-success">
                <span class="sr-only">50%</span>
                <span class="progress-type"> JavaScript / JQuery / Ajax </span>
              </div>
            </div>
            <div class="progress">
              <div data-placement="top" style="width: 55%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="1" role="progressbar" class="progress-bar progress-bar-success">
                <span class="sr-only">55%</span>
                <span class="progress-type"> HTML / CSS </span>
              </div>
            </div>
            <div class="progress">
              <div data-placement="top" style="width: 35%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="1" role="progressbar" class="progress-bar progress-bar-success">
                <span class="sr-only">35%</span>
                <span class="progress-type"> Bootstrap(v3) </span>
              </div>
            </div>
            <div class="progress">
              <div data-placement="top" style="width: 25%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="1" role="progressbar" class="progress-bar progress-bar-warning">
                <span class="sr-only">25%</span>
                <span class="progress-type"> Asynchronous JS Development</span>
              </div>
            </div>
            <div class="progress">
              <div data-placement="top" style="width: 30%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="60" role="progressbar" class="progress-bar progress-bar-warning">
                <span class="sr-only">30%</span>
                <span class="progress-type"> GitHub</span>
              </div>
            </div>
            <div class="progress">
              <div data-placement="top" style="width: 20%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="50" role="progressbar" class="progress-bar progress-bar-warning">
                <span class="sr-only">20%</span>
                <span class="progress-type"> Basic Linux CLI</span>
              </div>
            </div>
            <div class="progress">
              <div data-placement="top" style="width: 20%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="50" role="progressbar" class="progress-bar progress-bar-danger">
                <span class="sr-only">20%</span>
                <span class="progress-type">AWS EC2 Instance & AWS S3</span>
              </div>
            </div>

            <div class="progress-meter">
              <div style="width: 30%;" class="meter meter-left"><span class="meter-text"> I know little </span></div>
              <div style="width: 30%;" class="meter meter-left"><span class="meter-text"> I know more </span></div>
              <div style="width: 30%;" class="meter meter-right"><span class="meter-text"> I'm good </span></div>
            </div>
          </a>
        </ul>
      </div>
          <div class="bs-callout bs-callout-danger">
            <h4>Education</h4>
            <table class="table">
            <thead>
             <tr>
               <th>A.P. Brewer High School</th>
               <th></th>
               <th>Graduation Year</th>
             </tr>
            </thead>
            <tbody>
              <tr>
                <td>High School Diploma</td>
                <td></td>
                <td>2015</td>
              </tr>
              <tr>
            <th>Related Studies:</th>
            <td>Electronics, Business Technology, Microsoft Office, HVAC, and JROTC</td>
            <td></td>
              </tr>
              <tr>
                <th>Achievements:</th>
                <td>Completed Career/Technical Program Certification at Brewer High School</td>
                <td></td>
              </tr>
            </tbody>
          </table>
      </div>
        <div class="bs-callout bs-callout-danger">
        <h4>Volunteer Experience</h4>
        <ul class="list-group">
          <li class="list-group-item"> BASH (Be About Serving Him) </li>
          <li class="list-group-item"> Youth Ministry - Center Springs Methodist Church </li>
          <li class="list-group-item"> Pine Ridge Day Camp Volunteer </li>
        </ul>
      </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
</div>
</div>
















<!-- <div class="container drop-shadow">
<div class="container">
    <div class="col-sm-12">
      <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="//www.youtube.com/embed/U-UYMniduh4"></iframe>
      </div>
    </div>
</div>
</div> -->





<!-- <div class="container border border-primary">
	<div class="row">
		<div class="col-sm-2">
			<div style="height:100px;" class="pull-left ">Matt</div>
		</div>
		<div class="col-sm-8">
		Ben
		</div>
		<div class="col-sm-2">
		Bev
		</div>
	</div>
</div>
 -->


<!-- SmartMenus jQuery plugin -->
<script type="text/javascript" src="js/plugins/smartmenus/jquery.smartmenus.js"></script>
<script type="text/javascript" src="js/church44.js"></script>


<!-- <script type="text/javascript" src="js/church44assets/aboutpage.blade.php"></script> -->


<!-- SmartMenus jQuery init -->
<script type="text/javascript">
	$(function() {
		$('#main-menu').smartmenus({
			subMenusSubOffsetX: 6,
			subMenusSubOffsetY: -8
		});
	});
</script>

<!-- Hide and Show -->
<script>
$(document).ready(function(){

	$.get(public_path + 'about', function(htmlResponse){
		$('#about-ajax').html(htmlResponse);
	});

});

</script>


	</body>
</html>
