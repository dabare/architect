
<!DOCTYPE html>
<html>
    <head>
        <title>architect</title>

        <link rel="stylesheet" type="text/css" href="../CSS/architectEdit.css">
        <meta charset="utf-8">


    </head>
    <body id="bdy">
        <script src="../JS/selectImage.js"></script>
        <ul id="navigationbarEdit">
            <li><a id="activeEdit" href="../architect/editProfile.php">Edit Profile</a></li>
            <li><a id="editItem" href="../architect/manageAwards.php">Manage Awards</a></li>
            <li><a id="editItem" href="../architect/manageProjects.php">Manage Projects</a></li>
            <li><a id="editItem" href="../architect/settings.php">Settings</a></li>
        </ul>

        <div id="boddy">

            <br>
            <form>
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
                Select Photo:
                <input id="files" type="file" name="pic" accept="image/*" onchange="readURL(this)">
                <img  src="../images/blur.jpg" alt="your image"  height="200" width="180" style="position: absolute"/>
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
                    <button type="button"  >Reset All Fields</button>
                    <button type="button"  >Save</button>.
                </div>
                <br><br>
            </form>
        </div>

    </body>
</html> 