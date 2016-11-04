<!DOCTYPE html>
<html>
<head>
<title>Consultant</title>
<link rel="stylesheet" type="text/css" href="CSS/architectEdit.css">
<link rel="stylesheet" type="text/css" href="profcss/style_theme.css">
<link rel="stylesheet" type="text/css" href="profcss/style.css">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="profcss/opensans.css">
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Open Sans", sans-serif}
</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body bgcolor="grey" class="theme-15">

<!--Navbar-->
<div class="top">
	<ul class="navbar theme-d2 left-align large">

		<li><a href="#" class="padding-large theme-d4"><i class="fa fa-home margin-right"></i>Logo</a></li>
		
	</ul>
</div>

<!--Page Container-->
<div class="container content" style="max-width:1400px;margin-top:50px;margin-left: 15px">
	<!--The Grid-->
	<div class="row">

		<!-- left panel -->
                <ul id="navigationbarEdit">
                <li><a id="activeEdit" href="ConsultantEditProfile1.php">Edit Profile</a></li>
                <li><a id="editItem" href="index.php">Logout</a></li>

            </ul>

        <div style="margin-left:300px">

            <br><br>
            <form>
               <!--Right Column-->
		<div class="col m9">
			<!--Profile-->
			<div class="card-2 round white">
				<div class="container">
					<h4>Profile</h4>
					<p><img src="profcss/prof.jpg" class="circle" style="height:106px;width:106px" alt="Profile"></p>
					
					<p><i class="fa fa-pencil fa-fw margin-right text-theme"></i> Name </p>
					<p><i class="fa fa-home fa-fw margin-right text-theme"></i> Address </p>
				</div>
			</div>
			<br>
                <div style="text-align: left;">
                    <div style="display:inline-block;">
                        First name:<br>
                        <input type="text" size="15" name="firstname">
                    </div>
                    <div style="display:inline-block;">
                        Middle name:<br>
                        <input type="text" size="15" name="middlename">
                    </div>
                    <div style="display:inline-block;">
                        Last name:<br>
                        <input type="text" size="15" name="lastname">
                    </div>
                </div>  
                <br>
                
                <br><br>
                Age:<input type="text" name="age" size="4">
                <br><br>
                Address:<br>
                <div style=" padding-left: 2em;">
                    No:
                    <br>
                    <input type="text" size="10" name="no">
                    <br>
                    Street:
                    <br>
                    <input type="text" name="street">
                    <br>
                    City:
                    <br>
                    <input type="text" name="city">
                </div>
                <br>
                Google Location:
                <br>
                <input type="text" name="location" size="50">
                <br><br>
                <div >
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.5643649597737!2d79.89346104990712!3d7.060361918623994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2f737b5b05a09%3A0xd4ef00d25a3b354a!2sK+Zone+Ja-Ela!5e0!3m2!1sen!2slk!4v1471279498706" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

                </div>
                <br>
                Email:
                <br>
                <input type="text" name="email" size="35">
                <br><br>


                <div style="text-align: left;">
                    <div style="display:inline-block;">
                        Mobile No:
                        <br>
                        <input type="text" name="mobile" size="10">
                    </div>
                    <div style="display:inline-block;">
                        Land No:
                        <br>
                        <input type="text" name="land" size="10">
                    </div>
                </div>  

                <br>
                NIC:
                <br>
                <input type="text" name="nic" size="15">

                <br><br>
                Reg. No.:
                <br>
                <input type="text" name="reg" size="15">

                <br><br>
                Account created date:
                <br>
                <input type="date" name="date" disabled>

                <br><br>
                Status:
                <select name="cars">
                    <option value="active">Active</option>
                    <option value="inactive">Inactive</option>
                </select>
                <br><br>
                User Name:
                <br>
                <input type="text" name="uname" size="15">
                <br><br>
                <div style="text-align: left;">
                    <div style="display:inline-block;">
                        New Password:
                        <br>
                        <input type="password" name="pass" size="25">
                    </div>
                    <div style="display:inline-block;">
                        Retype New Password:
                        <br>
                        <input type="password" name="retypepass" size="25">
                    </div>
                </div>  
                <br>
                <div style="text-align: center;">
                    <button class="btn btn-primary dropdown-toggle theme-l1 left-align" type="button"><i class="fa fa-circle-o-notch fa-fw margin-right"></i>Reset all Fields
                </button>
                    <button class="btn btn-primary dropdown-toggle theme-l1 left-align" type="button"><i class="fa fa-circle-o-notch fa-fw margin-right"></i>Save
                </button>
                </div>
                <br><br>
            </form>
        </div>

    </body>
</html> 