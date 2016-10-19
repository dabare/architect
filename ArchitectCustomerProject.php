<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title>Project-Details</title>
<link rel="stylesheet" type="text/css" href="style_theme.css">
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="opensans.css">
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Open Sans", sans-serif}
</style>
</head>

<body bgcolor="grey" class="theme-15">


<!--Page Container-->
<div class="container content" style="max-width:1400px;margin-top:80px">
	<!--The Grid-->
	<div class="row">
		<!--Left Column-->
		<div class="col m3">
			<!--Profile-->
			<div class="card-2 round white">
				<div class="container">
					<h4 class="center">Profile</h4>
					<p class="center"><img src="prof.jpg" class="circle" style="height:106px;width:106px" alt="Profile"></p>
					<hr>
					<p><i class="fa fa-pencil fa-fw margin-right text-theme"></i> Name </p>
					<p><i class="fa fa-home fa-fw margin-right text-theme"></i> Address </p>
				</div>
			</div>
			<br>

			<!--Project-->
			<div class="card-2 round">
				<div class="accordion white">
					<button onclick="myFunction('Demo1')" class="btn-block theme-l1 left-align"><i class="fa fa-circle-o-notch fa-fw margin-right"></i> My Projects </button>
					<div id="Demo1" class="accordion-content container">
						<p>Project 1</p>
						<p>Project 2</p>
					</div>
				</div>
			</div>
		</div>

		<!--Middle Column-->
		<div class="col m7">

			<div class="row-padding">
				<div class="col m12">
					<div class="card-2 round white">
						<div class="container padding">
                                                    <i class="fa fa-pencil">Title:</i><br>
                                                    <input type="text" size="15" name="firstname"><br><br>
                                                    
                                                    <div>
                                                        <div style="display:inline-block;">
                                                            <i class="fa fa-pencil">Images:</i><br>
                                                            <input id="files" type="file" name="pic" accept="image/*" onchange="readURL(this)"><br><br>
                                                        </div> 
                                                        <div style="display:inline-block;">
                                                            <i class="fa fa-pencil">PDF:</i><br>
                                                            <input id="files" type="file" name="pic" accept="image/*" onchange="readURL(this)"><br><br>
                                                        </div> 
                                                    </div>
                                                    
                                                    <i class="fa fa-pencil">Description:</i><br>
                                                    <textarea rows="4" cols="80" style="position: center"></textarea><br><br>
                                                    <button type="button" class="btn theme"><i class="fa fa-pencil"></i> Post</button>
						</div>
					</div>
				</div>
			</div>

			<div class="container card-2 white round margin"><br>
				<h4>Project Progress</h4><br>
				<h5>Completed: </h5><br>
				<meter value="0.5"></meter><br><br>
                                <button type="button" class="btn theme"><i class="fa fa-pencil"></i>Edit</button>
			</div>

			<div class="container card-2 white round margin"><br>
				<h4>Half1</h4>
				<img src="half1.jpg">
				<h5>Description:</h5><br>
                                    <textarea rows="4" cols="50" style="position: absolute" disabled=""></textarea>
				<br><br><br><br><br>
                                <div>
                                    <div style="display:inline-block;">
                                        <h5>Date:<h5>
                                        <input type="text" name="date" value="2016/08/26"><br><br>
                                    </div>  
                                    <div style="display:inline-block;">
                                        <h5>Time:<h5>
                                        <input type="text" name="date" value="11.11am"><br><br>
                                    </div> 
                                </div>
                                
                                <div>
                                    <div style="display:inline-block;">
                                        <button type="button" class="btn theme"><i class="fa fa-pencil"></i> Edit</button> 
                                    </div>
                                    <div style="display:inline-block;">
                                        <button type="button" class="btn theme"><i class="fa fa-pencil"></i> Remove</button> 
                                    </div>
                                </div>
                                
                                
			</div>
                        <div class="container card-2 white round margin"><br>
				<h4>Half</h4>
				<img src="half.jpg">
				<br>
				<h5>Description:</h5><br>
                                    <textarea rows="4" cols="50" style="position: absolute" disabled=""></textarea>
				<br><br><br><br><br>
                                
                                <div>
                                    <div style="display:inline-block;">
                                        <h5>Date:<h5>
                                        <input type="text" name="date" value="2016/07/21"><br><br>
                                    </div>  
                                    <div style="display:inline-block;">
                                        <h5>Time:<h5>
                                        <input type="text" name="date" value="1.15pm"><br><br>
                                    </div> 
                                </div>
                                
                                
                                <div>
                                    <div style="display:inline-block;">
                                        <button type="button" class="btn theme"><i class="fa fa-pencil"></i> Edit</button> 
                                    </div>
                                    <div style="display:inline-block;">
                                        <button type="button" class="btn theme"><i class="fa fa-pencil"></i> Remove</button> 
                                    </div>
                                </div>
			</div>
                        <div class="container card-2 white round margin"><br>
				<h4>Plan</h4><br>
                                <img src="plan.jpg">
				
				<h5>Description:</h5>
                                 <a href="http://ec.europa.eu/regional_policy/sources/docoffic/2014/working/evaluation_plan_guidance_en.pdf">PDF</a> 
                                <br><br><br>
                                <div>
                                    <div style="display:inline-block;">
                                        <h5>Date:<h5>
                                        <input type="text" name="date" value="2016/07/03"><br><br>
                                    </div>  
                                    <div style="display:inline-block;">
                                        <h5>Time:<h5>
                                        <input type="text" name="date" value="08.31am"><br><br>
                                    </div> 
                                </div>
                                
                                
                                <div>
                                    <div style="display:inline-block;">
                                        <button type="button" class="btn theme"><i class="fa fa-pencil"></i> Edit</button> 
                                    </div>
                                    <div style="display:inline-block;">
                                        <button type="button" class="btn theme"><i class="fa fa-pencil"></i> Remove</button> 
                                    </div>
                                </div>
			</div>
		</div>

	</div>
</div>

<!--Footer-->
<footer class="container theme-d3 padding-16">
	<h5>You are logged in as:</h5>
</footer>

<footer class="container theme-d5">
	<p>Name</p>
</footer>

<script type="text/javascript">
//My Projects
function myFunction(id){
	var x = document.getElementById('id');
	if (x.className.indexOf("show") == -1) {
		x.className += "show";
		x.previousElementsSibling.className += "theme-d1";
	} else {
		x.className = x.className.replace("show","");
		x.previousElementsSibling.className = 
		x.previousElementsSibling.className.replace("theme-d1","");
	}
}
</script>

</body>
</html>