
<!DOCTYPE html>
<html>
    <head>
        <title>architect</title>

        <link rel="stylesheet" type="text/css" href="CSS/architectEdit.css">
        <meta charset="utf-8">

    </head>
    <body id="bdy">

        <ul id="navigationbarEdit">

            <li><a id="editItem" href="ArchitectEditProfile.php">Edit Profile</a></li>
            <li><a id="activeEdit" href="ArchitectManageAwards.php">Manage Awards</a></li>
            <li><a id="editItem" href="ArchitectManageProjects.php">Manage Projects</a></li>
            <li><a id="editItem" href="ArchitectAppointments.php">Appointments</a></li>
            <li><a id="editItem" href="ArchitectOnGoingProjects.php">On Going Projects</a></li>
             <li><a id="editItem" href="ArchitectCompletedProjects.php">Completed Projects</a></li>
            <li><a id="editItem" href="ArchitectCustomers.php">Customers</a></li>
            <li><a id="editItem" href="ArchitectConsultants.php">Consultants</a></li>
            <li><a id="editItem" href="ArchitectEmployees.php">Employees</a></li>
            <li><a id="editItem" href="ArchitectReports.php">Reports</a></li>
            <li><a id="editItem" href="ArchitectSettings.php">Settings</a></li>
            <li><a id="editItem" href="index.php">Logout</a></li>

        </ul>
        <div class="sidebar">

            <div style="text-align: center">
                <h1>Awards</h1>
            </div>
            <div style="text-align: center">
                <table>
                    <tr>
                        <th>Award Name</th>
                        <th>Description</th>
                        <th>Image</th>

                    </tr>
                    <tr>
                        <td>Geoffery Bawa Award for Excellence in Architecture 2008</td>
                        <td>Commendation Prize for the Estate Bungalow in Ginigathhena</td>
                        <td><a><img src="images/images.jpg"  width="50" height="50">
                                <div style="display:inline-block;">    
                                    <button type="button">Remove</button>
                                    <button type="button">Edit</button>
                                </div>    
                            </a>
                        </td>

                    </tr>
                    <tr>
                        <td>Sri Lanka Institute of Architects Excellent Design Award 2009 for Rathnayake House at Makola</td>
                        <td></td>
                        <td><a><img src="images/index.jpg"  width="50" height="50">
                                <div style="display:inline-block;">    
                                    <button type="button">Remove</button>
                                    <button type="button">Edit</button>
                                </div>    
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>19th Architect of the Year Award</td>
                        <td>under the category of focused countries Commendation Award for Avissawella Bunglow at Thalduwa, Avissawella.</td>
                        <td><a><img src="images/images.jpg"  width="50" height="50">
                                <div style="display:inline-block;">    
                                    <button type="button">Remove</button>
                                    <button type="button">Edit</button>
                                </div>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>SLIA Design Award 2010</td>
                        <td>Award of Merit under the Commercial Category for Showroom for David Pieris Motor Company (Ltd) Ratnapura.</td>
                        <td><a><img src="images/index.jpg"  width="50" height="50">
                                <div style="display:inline-block;">
                                    <button type="button">Remove</button>
                                    <button type="button">Edit</button>
                                </div>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>SLIA Design Award 2011</td>
                        <td>Award of merit under the category of Personalized housing for Subasinghe house at Kiribathgoda.</td>
                        <td><a><img src="images/index.jpg"  width="50" height="50">
                                <div style="display:inline-block;">    
                                    <button type="button">Remove</button>
                                    <button type="button">Edit</button>
                                </div>
                            </a>
                        </td>
                    </tr>
                </table>
            </div>
            <div><br><br><br><br>
                <div style="text-align: center;">
                    <h3>Add New:</h3>
                    Name:
                    <input id="text" size="50"><br><br>
                    Description:
                    <textarea rows="4" cols="50" style="position: left"></textarea>
                    <br><br>
                    <div style="text-align: center;">
                        <button type="button">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html> 