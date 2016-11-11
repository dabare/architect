<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script>
            $(document).ready(function () {
                $(document).on("scroll", onScroll);

                //smoothscroll
                $('a[href^="#"]').on('click', function (e) {
                    e.preventDefault();
                    $(document).off("scroll");

                    $('a').each(function () {
                        $(this).removeClass('active');
                    })
                    $(this).addClass('active');

                    var target = this.hash,
                            menu = target;
                    $target = $(target);
                    $('html, body').stop().animate({
                        'scrollTop': $target.offset().top + 2
                    }, 500, 'swing', function () {
                        window.location.hash = target;
                        $(document).on("scroll", onScroll);
                    });
                });
            });

            function onScroll(event) {
                var scrollPos = $(document).scrollTop();
                $('#menu-center a').each(function () {
                    var currLink = $(this);
                    var refElement = $(currLink.attr("href"));
                    if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
                        $('#menu-center ul li a').removeClass("active");
                        currLink.addClass("active");
                    } else {
                        currLink.removeClass("active");
                    }
                });
            }
        </script>
        <style>

            /*-------------------------------------------------------------------Navigation Bar*/
            #menu-center {
                width: 100%;
                margin: 0 auto;
            }
            #menu-center ul {
                position: fixed;
                width: 100%;
                list-style-type: none;
                margin: 0;
                padding: 0;
                overflow: hidden;
                background-color: #333;
            }
            #menu-center ul li a{
                display: block;
                color: white;
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;
                font-family: Verdana,sans-serif;
                font-size: 17px;
                letter-spacing: 1px;
            }
            #menu-center ul li {
                list-style: none;
                margin: 0 0 0 -4px;
                display: inline;

            }
            .active ,  #menu-center ul li a:hover{

                background-color: #4CAF50;
            }
            /*----------------------------------------------------------------------------------Body*/
            body {
                margin: 0;
                padding: 0;
                height: 100%;
                width: 100%;

                background-image:url(./images/blur.jpg);
                background-size: 100% 100%; 
                background-repeat: no-repeat;
                background-attachment: fixed;
            }

            .scope{
                height: 100vh;
                width: 100%;
            }
            /* ---------------------------------------------------------------------------awards*/
    #l_content_area
            {
                height: 400px;
                width: 45%;
                background-color: transparent;
                padding: 10px;
                margin-top:-650px;
                
            }

            #r_content_area
            {
                height:600px;
                width: 45%;
                margin-left: 700px;
                background-color: transparent;
                padding: 10px;
            }

            /*---------------------------------------------------------------------------projects*/
            div.img {
                margin: 5px;
                border: 1px solid #ccc;
                float: left;
                width: 32.4%; 
                height: 40%;
            }

            div.img:hover {
                border: 1px solid #777;
            }

            div.img img {
                width: 100%;
                height: 100%;
            }

            div.desc {
                padding: 15px;
                text-align: center;
                color: white;
                font-size: 200%;
            }
            /*-----------------------------------------------------------------------------about*/           
            #banner
            {
                background-size: cover;
                border: 5px solid #dedede;
                height: 350px;
            }
            #myPhoto{
                width : 100%  ;
                height: 350px;
            }

            #content_area
            {
                width: 750px;
                margin: 20px 0 20px 0;
                padding: 10px;
                color: white; 
                font-size: 120%;
            }


            /*------------------------------------------------------------------------------login*/
            #loginDiv{
                height: 200px; 
                width: 450px; 
                border: 3px solid white; 
                border-radius:13px;
            }	


            #loginDiv input[type=text] ,#loginDiv input[type=password] {
                padding: 5px 25px;
                margin: 9px 0;
                display: inline-block;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
            }

            input[type=submit] {
                background-color: #4CAF50;
                color: white;
                padding: 5px 35px;
                margin: 23px 0;
                border: none;
                border-radius: 4px;
                cursor: pointer;
            }
            input[type=reset] {
                background-color: #ff6600;
                color: white;
                padding: 5px 35px;
                margin: 23px 0;
                border: none;
                border-radius: 4px;
                cursor: pointer;
            }


            input[type=submit]:hover {
                background-color: #45a049;
            }
            input[type=reset]:hover {
                background-color: #cc6600;
            }

            label,input{
                font-family: Verdana,sans-serif;
                font-weight: bold;
                font-size: 15px;
            }

            label{
               color: white;
            }


            #myBtn {
                background-color: #4CAF50;
                color: white;
                padding: 10px 35px;
                margin: 23px 0;
                border:  1px solid white;
                border-radius: 4px;
                cursor: pointer;
            }

            #myBtn:hover {
                background-color: #45a049;
            }

            #myBtn2 {
                background-color: #4CAF50;
                color: white;
                padding: 10px 35px;
                margin: 23px 0;
                border:  1px solid white;
                border-radius: 4px;
                cursor: pointer;
            }

            #myBtn2:hover {
                background-color: #45a049;
            }

            /* The Modal (background) */
            .modal {
                display: none; 
                position: fixed; 
                z-index: 1; 
                padding-top: 100px; 
                left: 0;
                top: 0;
                width: 100%; 
                height: 100%; 
                overflow: auto; 
                background-color: rgb(0,0,0); 
                background-color: rgba(0,0,0,0.4); 
            }

            /* Modal Content */
            .modal-content {
                position: relative;
                background-color: #fefefe;
                margin: auto;
                padding: 0;
                border: 1px solid #888;
                width: 40%;
                box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
                -webkit-animation-name: animatetop;
                -webkit-animation-duration: 0.4s;
                animation-name: animatetop;
                animation-duration: 0.4s
            }

            /* Animation */
            @-webkit-keyframes animatetop {
                from {top:-300px; opacity:0}
                to {top:0; opacity:1}
            }

            @keyframes animatetop {
                from {top:-300px; opacity:0}
                to {top:0; opacity:1}
            }

            /* The Close Button */
            .close {
                color: white;
                float: right;
                font-size: 28px;
                font-weight: bold;
            }

            .close:hover,
            .close:focus {
                color: #000;
                text-decoration: none;
                cursor: pointer;
            }

            .modal-header {
                padding: 2px 16px;
                background-color: #5cb85c;
                color: white;
            }

            .modal-body {padding: 2px 16px;}

            .modal-footer {
                padding: 2px 16px;
                background-color: #5cb85c;
                color: white;
            }
            </style>

        <script type="text/javascript">

        function validate()
        {
            if (document.register.fname.value=="")
            {
                alert("Please provide your first name!");
                document.register.fname.focus();
                return false;
            }

            if (document.register.mname.value=="") 
            {
                    alert("Please provide your middle name!");
                    document.register.mname.focus();
                    return false;
            }

            if (document.register.lname.value=="") 
            {
                    alert("Please provide your last name!");
                    document.register.lname.focus();
                    return false;
            }

            if (document.register.email.value=="") 
            {
                    alert("Please provide your email address!");
                    document.register.email.focus();
                    return false;
            }

            if (document.register.city.value=="") 
            {
                    alert("Please provide your city!");
                    document.register.city.focus();
                    return false;
            }

            if (document.register.street.value=="") 
            {
                    alert("Please provide your street!");
                    document.register.street.focus();
                    return false;
            }

            if (document.register.mnumb.value=="") 
            {
                    alert("Please provide your mobile number!");
                    document.register.mnumb.focus();
                    return false;
            }

            if (document.register.lnumb.value=="") 
            {
                    alert("Please provide your Land phone number!");
                    document.register.lnumb.focus();
                    return false;
            }

            if (document.register.pwd.value=="") 
            {
                    alert("Please provide your password!");
                    document.register.pwd.focus();
                    return false;
            }

            if (document.register.cnfrmpwd.value=="") 
            {
                    alert("Please confirm your password!");
                    document.register.cnfrmpwd.focus();
                    return false;
            }

            if (document.register.pwd.value!=document.register.cnfrmpwd.value)
            {
                alert("Password not matching!");
                document.register.cnfrmpwd.focus();
                return false;
            }

            if (document.register.date.value=="") 
            {
                    alert("Please enter the date!");
                    document.register.date.focus();
                    return false;
            }
            return (true);

        }

        </script>        







    </head>
    <body>
        <!--	<div class="container">	-->
        <div class="m1 menu">
            <div id="menu-center">
                <ul>
                    <li style="float:left;"><a class="active" href="#home">Home</a></li>
                    <li style="float:right;"><a href="#login">Login</a></li >
                    <li style="float:right;"><a href="#register">Register</a></li >
                    <li style="float:right;"><a href="#contact">Contact Us</a></li >
                    <li style="float:right;"><a href="#legal">Regulations</a></li >
                    <li style="float:right;"><a href="#projects">Projects</a></li >
                    <li style="float:right;"><a href="#awards">Awards</a></li>
                    <li style="float:right;"><a href="#about">About</a></li>

                </ul>
            </div>
        </div>
        <div class="scope" id="home">
            <img src="images/home.jpg" style="width: 100%; height: 100%;">
        </div>


        <div style="height: 20vh;"></div>


        <div  id="about">
            <br><br><br><br>
            <center style="color: white; font-size: 50px">Who I am</center>
            <div style="text-align: left;">


                <div id="content_area" style="display:inline-block; align-content: center;">
                    <h3><strong>Biography</strong></h3>
                    <h4>B.Sc (University of Colombo), AIA (SL)</h4>
                    <p>Palinda Kannangara was born in Colombo,Sri Lanka in 1970.<br>
                        Educated at Ananda College, Colombo,<br> 
                        he entered the University of Colombo and graduated Bachelor of Science (BSc) in Physics in the year 1996.<br><br>
                        His primary calling, however, was elsewhere.<br>
                        He joined the study course conducted by the Sri Lanka Institute of Architects in 1994 and received his Charter in 2004 as an Associate Member of the Sri Lanka Institute of Architects AIA (SL).<br><br>
                        During his Under-graduate years he worked under several leading architects such as Archt.<br> 
                        K. Ganeshan, Archt. Vinod Jayasinghe and Archt. Anura Ratnavibushana before creating his own office in Kolonnawa in 2004 and later shifted to Kotikawatta, Colombo in early 2006, where his office is currently located.<br><br>
                        He was awarded the commendation prize for the Geoffery Bawa award for Excellence in Architecture in the year 2008.<br> 
                        Also he received an Award of Excellence from the Sri Lanka Institute of Architects in the year 2009 for The Residential building at Makola.<br><br> 
                    </p>
                    <h3><strong>Philosophy</strong></h3>
                    <p>We are an architectural firm in the business of recreating the space.<br>
                        We value our clients' dreams and the life style which we align with our vision,<br>
                        To be the region best valued partner in materializing the dreams of recreating the space.<br><br>
                        In realizing the vision we truly believe and committed to our mission that,<br>
                        To create beyond the expectations of the client s’ sensibility with the combined effort of professionalism and creativity in balancing the art, comfort and security.<br><br>
                        We see the beauty of silence against the noise, emptiness against the congestion,<br> 
                        simplicity against complexity and we love to share the experience with our clients.<br>
                        We accept he realities of scenery but we don’t hesitate to challenge it.<br> 
                        We enjoy the climate but don’t let it torture us.<br> 
                        We respect the tradition but we don’t abide by it. <br>
                        We exploit technology but we don’t incarcerate our feelings in it.<br><br>
                        We love playing with light, material, and shapes and driven with passion in making the client’s dream a reality beyond their expectations.<br><br> 
                    </p>
                    <h3>Co-operate Structure</h3>
                    <h4>Principal Architect</h4>
                    <p>Palinda Kannangara<br>
                        B.Sc (University of Colombo), AIA (SL)</p><br>
                    <h4>Principal Architect</h4>
                    <p>Shalika Dilrukshi<br>
                        Ishara Udayanga Gomez<br>
                        Madushani Samarajeewa<br>
                        Savindri Nanayakkara<br>
                        Shehana Fernando<br>
                        Suranjan Chanuka Pussalla<br>
                        Ruveka Peiris 
                    </p><br>
                    <h4>Structural Engineer</h4>
                    <p>K. Rajapakse BSc Eng (SL), P G Dip (SL), M I E (SL)</p><br>
                    <h4>Quantity Surveyor</h4>
                    <p>Cost Management Services (Pvt) Ltd.<br>
                        A.N. Jayadewa</p><br>
                    <h4>M&E Engineer</h4>
                    <p>P. Somarathne BSc Eng (SL)</p><br>
                </div>
                <div style="display:inline-block; padding-left: 150px;">
                    <br>
                    <img id="myPhoto" src="images/archi.jpg" />
                    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                </div>
            </div>



        </div>


        <div  id="awards">
            <br><br><br><br>
            <center style="color: white; font-size: 50px">Awards</center>
            <br>
            <div>
    <div style="background-color: transparent;height: 100vh;">
        <div id="r_content_area">
            <h3><font style="color: white;font-size: 30px;">Awards</font></h3>
            <p><font style="color: white;font-size: 20px;">Geoffery Bawa Award for Excellence in Architecture 2008 - Commendation Prize for the Estate Bungalow in Ginigathhena<br><br>

            Sri Lanka Institute of Architects Excellent Design Award 2009 for Rathnayake House at Makola<br><br>

            19th Architect of the Year Award - under the category of focused countries Commendation Award for Avissawella Bunglow at Thalduwa, Avissawella.<br><br>

            SLIA Design Award 2010 - Award of Merit under the Commercial Category for Showroom for David Pieris Motor Company (Ltd) Ratnapura.<br><br>

            SLIA Design Award 2011 - Award of merit under the category of Personalized housing for Subasinghe house at Kiribathgoda.<br><br> 
            </font></p>
        </div>
            </div>
            <div id="l_content_area">
                <h3><font style="color: white;font-size: 30px;">Academic qualifications</font></h3>
                <p><font style="color: white;font-size: 20px;">B.Sc (Physical Science) University of Colombo - 1996<br><br>

                SLIA Part I<br>
                Sri Lanka Institute of Architects - 1998<br><br>

                SLIA Part II<br>
                Sri Lanka Institute of Architects - 2002<br><br>

                SLIA Part III<br>
                Sri Lanka Institute of Architects - 2004<br><br>
                </font></p>
            </div>

        </div>
            <br><br>

        </div>
        <div class="scope" id="projects">
            <br><br><br><br>
            <center style="color: white; font-size: 50px">Completed Projects</center>
            <br><br><br><br>
            <div class="img" >
                <a target="_blank" href="./Projects/Industrial.php">
                    <img src="images/industrial.jpg" alt="Trolltunga Norway" >
                </a>
                <div class="desc">Industrial</div>
            </div>
            <div class="img" >
                <a target="_blank" href="./Projects/Residential.php">
                    <img src="images/residential.jpg" alt="Trolltunga Norway">
                </a>
                <div class="desc">Residential</div>
            </div>
            <div class="img" >
                <a target="_blank" href="./Projects/Community.php">
                    <img src="images/community.jpg" alt="Trolltunga Norway" >
                </a>
                <div class="desc">Community</div>
            </div>


        </div>
        <div class="scope" id="legal">
            <br><br><br><br>
            <center style="color: white; font-size: 50px">Regulations</center>
            <br><br><br><br>
            <center>
            <p><font size="5" color="white">Housing and Town Improvement Ordinance – 1915<br>
                Town and Country Planning Ordinance – 1945<br>
                Urban Development Authority Act  - 1978<br>
                UDA – Planning and Building Regulations<br>
                Urban Development Authority (Special Provision) Act<br>
                Draft Regulations for Low Income Settlements<br>
                Community Building Guidelines by National Housing Development Authority (NHDA)<br></font>
            </p>
            </center>
        </div>
        <div class="scope" id="contact">
            <br><br><br><br>
            <center style="color: white; font-size: 50px">Contact Us</center>
            <div style="color: white; font-size: 200%;">
            <p style="display:inline-block;">01122497787</p><p style="display:inline-block; width: 82%; text-align: right;">firezonne.loop@gmail.com</p>
            </div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.5643649597737!2d79.89346104990712!3d7.060361918623994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2f737b5b05a09%3A0xd4ef00d25a3b354a!2sK+Zone+Ja-Ela!5e0!3m2!1sen!2slk!4v1471279498706"  frameborder="0" style="border:0; height: 65%; width: 100%" allowfullscreen></iframe>

        </div>
        <div class="scope" id="register">
            <br><br><br><br>
            <center style="color: white; font-size: 50px">Register Now</center>
            <br><br><br><br>
            <div style="text-align: left;">
                <center>
                    <div style="display:inline-block;">
                        <img src="images/customer.jpg" style="height: 200px; width: 200px;border: 5px solid white;  border-radius:200px;" />
                        <h1 style="color: wheat; font-size: 20px;">As a customer</h1>
                        <div style="color: wheat; text-align: left; margin-left: 0px; width: 250px;height: 250px;">dfcsfsf c 
                            fg
                            fg fg fhg gh
                            gh
                            nj
                            gh
                            nfghfdhfgh fdghfdgh sfg  cbn  cbn vcbn   vcbn f h rfghtrfhtrdgt fdgh fghfdghdfg dfg d sfg dsf gd fg sdf
                            <br><br><b><a style="font-size: 18px; color: #4CAF50;">

                            <!-- Open The Modal -->
                            <button id="myBtn">Register</button>

                             <!-- Modal -->
                            <div id="myModal" class="modal">

                                <!-- Modal content -->
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <span class="close">x</span>
                                    <h2>Register as a Customer</h2>
                                    </div>
                                    <div class="modal-body">
                                        <form name='register' method='post' action='' onsubmit='return validate()'>



                                            <table>
                                                <tr>
                                                    <td><b>First Name:</b></td>
                                                    <td><input type='text' name='fname' required/></td>
                                                </tr>
                                                <tr>
                                                    <td><b>Middle Name:</b></td>
                                                    <td><input type='text' name='mname' required/></td>
                                                </tr>
                                                <tr>
                                                    <td><b>Last Name:</b></td>
                                                    <td><input type='text' name='lname' required/></td>
                                                </tr>
                                                <tr>
                                                    <td><b>Age:</b></td>
                                                    <td><input type='int' name='age' required/></td>
                                                </tr>
                                                <tr>
                                                    <td><b>NIC Number:</b></td>
                                                    <td><input type='text' name='nic' required/></td>
                                                </tr>
                                                <tr>
                                                    <td><b>Address No:</b></td>
                                                    <td><input type='text' name='add_no' required/></td>
                                                </tr>
                                                <tr>
                                                    <td><b>Street:</b></td>
                                                    <td><input type='text' name='add_street' required/></td>
                                                </tr>
                                                <tr>
                                                    <td><b>City:</b></td>
                                                    <td><input type='text' name='add_city' required/></td>
                                                </tr>
                                                <tr>
                                                    <td><b>E-Mail Address:</b></td>
                                                    <td><input type="text" name="email" required/></td>
                                                </tr>
                                                
                                                <tr>
                                                    <td><b>Mobile Number:</b></td>
                                                    <td><input type="text" name="mobile_no" required/></td>
                                                </tr>
                                                <tr>
                                                    <td><b>Land Number:</b></td>
                                                    <td><input type="text" name="land_no" required></td>
                                                </tr>
                                                <tr>
                                                    <td><b>Password:</b></td>
                                                    <td><input type="password" name="psswd" required></td>
                                                </tr>
                                                <tr>
                                                    <td><b>Confirm Password:</b></td>
                                                    <td><input type="password" name="cnfrmpsswd" required></td>
                                                </tr>
                                                <tr>
                                                    <td><b>Date:</b></td>
                                                    <td><input type="date" name="date" required></td>
                                                </tr>
                                          
                                                <tr>
                                                    <td colspan='2' align='center'> <input type="submit" name="submit" class="button" value="Register" 

                                                        <?php
                            // require_once '/db/dbconnection.php';

                            // if(isset($_POST['fname'])) {
                            //     $fname=$_POST['fname'];
                            // }

                            // if(isset($_POST['mname'])) {
                            //     $mname=$_POST['mname'];
                            // }

                            // if(isset($_POST['lname'])) {
                            //     $lname=$_POST['lname'];
                            // }

                            // if(isset($_POST['age'])) {
                            //     $age=$_POST['age'];
                            // }

                            // if(isset($_POST['nic'])) {
                            //     $nic=$_POST['nic'];
                            // }

                            // if(isset($_POST['add_no'])) {
                            //     $add_no=$_POST['add_no'];
                            // }

                            // if(isset($_POST['add_street'])) {
                            //     $add_street=$_POST['add_street'];
                            // }

                            // if(isset($_POST['add_city'])) {
                            //     $add_city=$_POST['add_city'];
                            // }

                            // if(isset($_POST['email'])) {
                            //     $email=$_POST['email'];
                            // }

                            // if(isset($_POST['mobile_no'])) {
                            //     $mobile_no=$_POST['mobile_no'];
                            // }

                            // if(isset($_POST['land_no'])) {
                            //     $land_no=$_POST['land_no'];
                            // }

                            // if(isset($_POST['psswd'])) {
                            //     $psswd=$_POST['psswd'];
                            // }

                            // if(isset($_POST['submit'])) {
                            //     $res = mysqli_query($con, "select count (*) from customer where email='".$email."'");
                            //     echo $res;
                            //     $count=mysqli_fetch_array($res);
                            //     echo $count;
                            //     if($count[0]==0){
                            //         echo "test";
                            //         mysqli_query($con, "INSERT INTO customer (id, fname, mname, lname, age, nic, add_no, add_street, add_city, email, mobile_no, land_no, psswd)VALUES ('NULL','$fname', '$mname', '$lname', '$age', '$nic', '$add_no', '$add_street', '$add_city', '$email', '$mobile_no', '$land_no', '$psswd')") or die(mysql_error());
                            //         header('Location: index.php');
                            //         $duplicate = false;
                            //     } else {
                            //         $duplicate = true;
                            //     } 
                            // }
                        ?>
                        /> 
                            <input type="reset" class="button" value="Cancel"/> </td>
                                                </tr>
                                            </table>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            </a></b>
                        </div>
                    </div>
                    <div style="width: 17%; display:inline-block;">

                    </div>
                    <div style="display:inline-block;">
                        <img src="images/consultant.jpg" style="height: 200px; width: 200px;border: 5px solid white;  border-radius:200px;" />

                        <h1 style="color: wheat; font-size: 20px;">As a consultant</h1>
                        <div style="color: wheat; text-align: left; margin-left: 0px; width: 250px; height: 250px;">dfcsfsf c 
                            fg
                            fg fg fhg gh
                            gh
                            nj
                            gh
                            nfghfdhfgh fdghfdgh sfg  cbn  cbn vcbn   vcbn f h rfghtrfhtrdgt fdgh fghfdghdfg dfg d sfg dsf gd fg sdf
                            <br><br><b><a style="font-size: 18px; color: #4CAF50;">

                            <!-- Open The Modal -->
                            <button id="myBtn2">Register</button>

                            <!-- Modal -->
                            <div id="myModal2" class="modal">

                                <!-- Modal content -->
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <span class="close2" align="right">x</span>
                                    <h2>Register as a Consultant</h2>
                                    </div>
                                    <div class="modal-body">
                                        <form name='register' method='post' action='' onSubmit='return validate()'>
                                            <table>
                                                <tr>
                                                    <td><b>First Name:</b></td>
                                                    <td><input type='text' name='fname' required/></td>
                                                </tr>
                                                <tr>
                                                    <td><b>Middle Name:</b></td>
                                                    <td><input type='text' name='mname' required/></td>
                                                </tr>
                                                <tr>
                                                    <td><b>Last Name:</b></td>
                                                    <td><input type='text' name='lname' required/></td>
                                                </tr>
                                                <tr>
                                                    <td><b>Age:</b></td>
                                                    <td><input type='int' name='age' required/></td>
                                                </tr>
                                                <tr>
                                                    <td><b>NIC Number:</b></td>
                                                    <td><input type='text' name='nic' required/></td>
                                                </tr>
                                                <tr>
                                                    <td><b>Address No:</b></td>
                                                    <td><input type='text' name='add_no' required/></td>
                                                </tr>
                                                <tr>
                                                    <td><b>Street:</b></td>
                                                    <td><input type='text' name='add_street' required/></td>
                                                </tr>
                                                <tr>
                                                    <td><b>City:</b></td>
                                                    <td><input type='text' name='add_city' required/></td>
                                                </tr>
                                                <tr>
                                                    <td><b>E-Mail Address:</b></td>
                                                    <td><input type="text" name="email" required/></td>
                                                </tr>
                                                
                                                <tr>
                                                    <td><b>Mobile Number:</b></td>
                                                    <td><input type="text" name="mobile_no" required/></td>
                                                </tr>
                                                <tr>
                                                    <td><b>Land Number:</b></td>
                                                    <td><input type="text" name="land_no" required></td>
                                                </tr>
                                                <tr>
                                                    <td><b>Password:</b></td>
                                                    <td><input type="password" name="psswd" required></td>
                                                </tr>
                                                <tr>
                                                    <td><b>Confirm Password:</b></td>
                                                    <td><input type="password" name="cnfrmpsswd" required></td>
                                                </tr>
                                                <tr>
                                                    <td><b>Date:</b></td>
                                                    <td><input type="date" name="date" required></td>
                                                </tr>
                                          
                                                <tr>
                                                    <td colspan='2' align='center'> <input type="submit" name="submit" class="button" value="Register"

                                                        <?php
                            // require_once '/db/dbconnection.php';

                            // if(isset($_POST['fname'])) {
                            //     $fname=$_POST['fname'];
                            // }

                            // if(isset($_POST['mname'])) {
                            //     $mname=$_POST['mname'];
                            // }

                            // if(isset($_POST['lname'])) {
                            //     $lname=$_POST['lname'];
                            // }

                            // if(isset($_POST['age'])) {
                            //     $age=$_POST['age'];
                            // }

                            // if(isset($_POST['nic'])) {
                            //     $nic=$_POST['nic'];
                            // }

                            // if(isset($_POST['add_no'])) {
                            //     $add_no=$_POST['add_no'];
                            // }

                            // if(isset($_POST['add_street'])) {
                            //     $add_street=$_POST['add_street'];
                            // }

                            // if(isset($_POST['add_city'])) {
                            //     $add_city=$_POST['add_city'];
                            // }

                            // if(isset($_POST['email'])) {
                            //     $email=$_POST['email'];
                            // }

                            // if(isset($_POST['mobile_no'])) {
                            //     $mobile_no=$_POST['mobile_no'];
                            // }

                            // if(isset($_POST['land_no'])) {
                            //     $land_no=$_POST['land_no'];
                            // }

                            // if(isset($_POST['psswd'])) {
                            //     $psswd=$_POST['psswd'];
                            // }

                            // if(isset($_POST['submit'])) {
                            //     $res = mysqli_query($con, "select count (*) from consultant where email='".$email."'");
                            //     echo $res;
                            //     $count=mysqli_fetch_array($res);
                            //     echo $count;
                            //     if($count[0]==0){
                            //         echo "test";
                            //         mysqli_query($con, "INSERT INTO consultant (id, fname, mname, lname, age, nic, add_no, add_street, add_city, email, mobile_no, land_no, psswd)VALUES ('NULL','$fname', '$mname', '$lname', '$age', '$nic', '$add_no', '$add_street', '$add_city', '$email', '$mobile_no', '$land_no', '$psswd')") or die(mysql_error());
                            //         header('Location: index.php/#home');
                            //         $duplicate = false;
                            //     } else {
                            //         $duplicate = true;
                            //     } 
                            // }
                        ?>
                        /> 
                        <input type="reset" class="button" value="Cancel"/> </td>
                                                </tr>
                                            </table>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            </a></b>
                        </div>
                    </div>
                </center>
            </div> 
        </div>

        <div class="scope" id="login" >
            <div style="height: 37vh;"></div>
            <center>
            <div id="loginDiv" >

            <form action="loginAction.php">
                <br>
                <label for="uname">Username: </label><input type="text" name="usrname"/>
                <br>
                <label for="uname">Password: </label><input type="password" name="pswrd"/>
                <br>
                <input type="submit" onclick="check(this.form)" value="Login"/>
                <input type="reset" value="Cancel"/>
            </form>

        </div>
    </center>

</div>






<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

var modal2 = document.getElementById('myModal2');
var btn2 = document.getElementById("myBtn2");
var span = document.getElementsByClassName("close2")[0];
btn2.onclick = function() {
    modal2.style.display = "block";
}
span.onclick = function() {
    modal2.style.display = "none";
}
window.onclick = function(event) {
    if (event.target == modal2) {
        modal2.style.display = "none";
    }
}

</script>



    </body>
</html>



