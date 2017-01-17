<!DOCTYPE html>
<html>


<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Customer Registration</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- FooTable -->
    <link href="css/plugins/footable/footable.core.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

<script type="text/javascript">
    //validating signup form
        function testform(){
            if(document.register.fname.value==''){
                alert("Please enter your First Name!");
                return false;
            }
            if(document.register.mname.value==''){
                alert("Please enter your Middle Name!");
                return false;
            }
            if(document.register.lname.value==''){
                alert("Please enter your Last Name!");
                return false;
            }
            if(document.register.age.value==''){
                alert("Please enter your Age!");
                return false;
            }
            if(document.register.nic.value==''){
                alert("Please enter your National Identity Card Number!");
                return false;
            }
            if(document.register.add_no.value==''){
                alert("Please enter your Address Number!");
                return false;
            }
            if(document.register.add_street.value==''){
                alert("Please enter your Street!");
                return false;
            }
            if(document.register.add_city.value==''){
                alert("Please enter your City!");
                return false;
            }
            if(document.register.email.value==''){
                alert("Please enter Email!");
                return false;
            }
            if(document.register.mobile_no.value==''){
                alert("Please enter your Mobile Number!");
                return false;
            }
            if(document.register.passwd.value==''){
                alert("Please enter your Password!");
                return false;
            }
            if(document.register.cnfrmpasswd.value==''){
                alert("Please Retype your Password!");
                return false;
            }
            if(document.register.passwd.value!=document.register.cnfrmpasswd.value){
                alert("Password not matching!");
                return false;
            }
            // return confirm("Do you want to register as a new user");
        }


//validating fields in sigup form

        function validatepass(){

           var pwd =  document.getElementById('passwd').value;
           var cpwd =  document.getElementById('cnfrmpasswd').value;
           
            if (pwd != cpwd) {

            document.getElementById('passwd').style.background ='#ff8989';
            document.getElementById('cnfrmpasswd').style.background = '#ff8989';
            document.getElementById('pwdmatchnoError').style.display = "block";
	    document.getElementById("savechanges").disabled = true;

            };
        
        }

        function validatefname(x){
          // Validation rule
          var reg = /[A-Za-z -']$/;
          // Check input
          if(reg.test(document.getElementById(x).value)){
            // Style green
            document.getElementById(x).style.background ='#92ddb6';
            // Hide error prompt
            document.getElementById('fnameError').style.display = "none";
            return true;
          }else{
            // Style red
            document.getElementById(x).style.background ='#ff8989';
            // Show error prompt
            document.getElementById('fnameError').style.display = "block";
            return false; 
          }
        }

        function validatemname(y){
          // Validation rule
          var reg = /[A-Za-z -']$/;
          // Check input
          if(reg.test(document.getElementById(y).value)){
            // Style green
            document.getElementById(y).style.background ='#92ddb6';
            // Hide error prompt
            document.getElementById('mnameError').style.display = "none";
            return true;
          }else{
            // Style red
            document.getElementById(y).style.background ='#ff8989';
            // Show error prompt
            document.getElementById('mnameError').style.display = "block";
            return false; 
          }
        }

        function validatelname(z){
          // Validation rule
          var reg = /[A-Za-z -']$/;
          // Check input
          if(reg.test(document.getElementById(z).value)){
            // Style green
            document.getElementById(z).style.background ='#92ddb6';
            // Hide error prompt
            document.getElementById('lnameError').style.display = "none";
            return true;
          }else{
            // Style red
            document.getElementById(z).style.background ='#ff8989';
            // Show error prompt
            document.getElementById('lnameError').style.display = "block";
            return false; 
          }
        }

        


        function validatenic(k){
          // Validation rule
          var reg = /^([0-9]{9})+[V]$/;
          // Check input
          if(reg.test(document.getElementById(k).value)){
            // Style green
            document.getElementById(k).style.background ='#92ddb6';
            // Hide error prompt
            document.getElementById('nicError').style.display = "none";
            return true;
          }else{
            // Style red
            document.getElementById(k).style.background ='#ff8989';
            // Show error prompt
            document.getElementById('nicError').style.display = "block";
            return false; 
          }
        }

        function validateadd_no(n){
          // Validation rule
          var reg = /[A-Za-z0-9 -,']$/;
          // Check input
          if(reg.test(document.getElementById(n).value)){
            // Style green
            document.getElementById(n).style.background ='#92ddb6';
            // Hide error prompt
            document.getElementById('add_noError').style.display = "none";
            return true;
          }else{
            // Style red
            document.getElementById(n).style.background ='#ff8989';
            // Show error prompt
            document.getElementById('add_noError').style.display = "block";
            return false; 
          }
        }

        function validateadd_street(l){
          // Validation rule
          var reg = /[A-Za-z0-9 -,']$/;
          // Check input
          if(reg.test(document.getElementById(l).value)){
            // Style green
            document.getElementById(l).style.background ='#92ddb6';
            // Hide error prompt
            document.getElementById('add_streetError').style.display = "none";
            return true;
          }else{
            // Style red
            document.getElementById(l).style.background ='#ff8989';
            // Show error prompt
            document.getElementById('add_streetError').style.display = "block";
            return false; 
          }
        }

        function validateadd_city(m){
          // Validation rule
          var reg = /[A-Za-z0-9 -,']$/;
          // Check input
          if(reg.test(document.getElementById(m).value)){
            // Style green
            document.getElementById(m).style.background ='#92ddb6';
            // Hide error prompt
            document.getElementById('add_cityError').style.display = "none";
            return true;
          }else{
            // Style red
            document.getElementById(m).style.background ='#ff8989';
            // Show error prompt
            document.getElementById('add_cityError').style.display = "block";
            return false; 
          }
        }

        function validatemobile_no(g){
          // Validation rule
          var reg = /[0-9]{10}$/;
          // Check input
          if(reg.test(document.getElementById(g).value)){
            // Style green
            document.getElementById(g).style.background ='#92ddb6';
            // Hide error prompt
            document.getElementById('mobile_noError').style.display = "none";
            return true;
          }else{
            // Style red
            document.getElementById(g).style.background ='#ff8989';
            // Show error prompt
            document.getElementById('mobile_noError').style.display = "block";
            return false; 
          }
        }

        function validateland_no(h){
          // Validation rule
          var reg = /[0-9']{10}$/;
          // Check input
          if(reg.test(document.getElementById(h).value)){
            // Style green
            document.getElementById(h).style.background ='#92ddb6';
            // Hide error prompt
            document.getElementById('land_noError').style.display = "none";
            return true;
          }else{
            // Style red
            document.getElementById(h).style.background ='#ff8989';
            // Show error prompt
            document.getElementById('land_noError').style.display = "block";
            return false; 
          }
        }


        // Validate email
        function validateemail(email2){ 
          var reg = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
          if(reg.test(email2)){
            document.getElementById('email2').style.background ='#92ddb6';
            document.getElementById('emailError').style.display = "none";
            return true;
          }else{
            document.getElementById('email2').style.background ='#ff8989';
            document.getElementById('emailError').style.display = "block";
            return false;
          }
        }

        
    </script>

</head>

<body>

    <div id="wrapper">
        <div id="page-wrapper" class="gray-bg">            
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2><i>Customer Registration</i></h2>                    
                </div>
                <div class="col-lg-2">
                </div>
            </div>            
         <div class="wrapper wrapper-content animated fadeInRight ecommerce">

            <div class="row">
                <div class="ibox-content col-sm-10">
                <form enctype="multipart/form-data" name="register" method="post" action="Controllers/insertUser.php" onsubmit="return testform()" class="form-horizontal">
                    <div class="row">                    
                    <div class="form-group"><label class="col-sm-2 control-label">First Name:</label>
                        <div class="col-sm-9"><input type="text" required class="form-control" name="fname" placeholder="First Name" id="fname" onblur="validatefname(name)">
                        <span id="fnameError" style="display:none;">Your name must only contain alphebatical letters!</span></div>
                    </div>                    
                    <div class="form-group"><label class="col-sm-2 control-label">Middle Name:</label>
                        <div class="col-sm-9"><input type="text" required class="form-control" name="mname" placeholder="Middle Name" id="mname" onblur="validatemname(name)">
                        <span id="mnameError" style="display:none;">Your name must only contain alphebatical letters!</span></div>
                    </div>                    
                    <div class="form-group"><label class="col-sm-2 control-label">Last Name:</label>
                        <div class="col-sm-9"><input type="text" required class="form-control" name="lname" placeholder="Last Name" id="lname" onblur="validatelname(name)">
                        <span id="lnameError" style="display:none;">Your name must only contain alphebatical letters!</span></div>
                    </div>                   
                    <div class="hr-line-dashed"></div>
                    <div class="form-group"><label class="col-sm-2 control-label">NIC:</label>
                        <div class="col-sm-9"><input type="text" required class="form-control" name="nic" placeholder="National Identity Card Number" id="nic" onblur="validatenic(name)">
                        <span id="nicError" style="display:none;">Please enter your NIC</span></div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group"><label class="col-sm-2 control-label">Address No:</label>
                        <div class="col-sm-9"><input type="text" required class="form-control" name="add_no" placeholder="Address Number" id="add_no" onblur="validateadd_no(name)">
                        <span id="add_noError" style="display:none;">Please enter your Address Number!</span></div>
                    </div>                    
                    <div class="form-group"><label class="col-sm-2 control-label">Street:</label>
                        <div class="col-sm-9"><input type="text" required class="form-control" name="add_street" placeholder="Street" id="add_street" onblur="validateadd_street(name)">
                        <span id="add_streetError" style="display:none;">Please enter Your street name!</span></div>
                    </div>
                    <div class="form-group"><label class="col-sm-2 control-label">City:</label>
                        <div class="col-sm-9"><input type="text" required class="form-control" name="add_city" placeholder="City" id="add_city" onblur="validateadd_city(name)">
                        <span id="add_cityError" style="display:none;">Please enter Your city name!</span></div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group"><label class="col-sm-2 control-label">Email:</label>
                        <div class="col-sm-9"><input type="email" required class="form-control" name="email" placeholder="Email" id="email2" onblur="validateemail(value)">
                        <span id="emailError" style="display:none;">Your email is invalid!</span></div>
                    </div>
                    <div class="form-group"><label class="col-sm-2 control-label">Mobile Number:</label>
                        <div class="col-sm-9"><input type="int" maxlength="10" required class="form-control" name="mobile_no"  placeholder="Mobile Number" id="mobile_no" onblur="validatemobile_no(name)">
                            <span id="mobile_noError" style="display:none;">Your mobile number is invalid!</span></div>
                    </div>
                    <div class="form-group"><label class="col-sm-2 control-label">Land Number:</label>
                        <div class="col-sm-9"><input type="int" maxlength="10" class="form-control" name="land_no" placeholder="Land Number" id="land_no" onblur="validateland_no(name)">
                        <span id="land_noError" style="display:none;">Your landline number is invalid</span></div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group"><label class="col-sm-2 control-label">Password:</label>
                        <div class="col-sm-9"><input type="password" name="passwd" required class="form-control" placeholder="Password" id="passwd">
                        </div>
                    </div>
                    <div class="form-group"><label class="col-sm-2 control-label">Retype Password:</label>
                        <div class="col-sm-9"><input type="password" required class="form-control" name="cnfrmpasswd" placeholder="Retype Password" id="cnfrmpasswd" onblur="validatepass();">
                            <span id="pwdmatchnoError" style="display:none;">Your Passwords Not matching</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <center>
                            <button class="btn btn-primary" type="submit" name="submit" id="savechanges">Save changes</button>
                            <button class="btn btn-warning" type="reset">Cancel</button>
                        </center>
                    </div>
                    </div>
                </form>
                </div>
             </div>
        </div>
        </div>
        </div>
    </body>
</html>
