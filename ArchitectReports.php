<!DOCTYPE html>
<html>
    <head>
        <title>Architect</title>
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

                <li><a href="#" class="padding-large theme-d4"><i class="fa fa-home margin-right"></i>Architect</a></li>

            </ul>
        </div>

        <!--Page Container-->
        <div class="container content" style="max-width:1400px;margin-top:50px;margin-left: 0px">
            <!--The Grid-->
            <div class="row">

                <!-- left panel -->
                <ul id="navigationbarEdit">
                    <li><a id="editItem" href="ArchitectNotification.php">Notification</a></li>
                    <li><a id="editItem" href="ArchitectOnGoingProjects.php">On Going Projects</a></li>
                    <li><a id="editItem" href="ArchitectManageProjects.php">Gallery</a></li>
                    <li><a id="editItem" href="ArchitectManageAwards.php">Manage Awards</a></li>
                    <li><a id="editItem" href="ArchitectCompletedProjects.php">Completed Projects</a></li>
                    
                    
                    <li><a id="editItem" href="ArchitectCustomers.php">Customers</a></li>
                    <li><a id="editItem" href="ArchitectConsultants.php">Consultants</a></li>
                    
                    <li><a id="activeEdit" href="ArchitectReports.php">Reports</a></li>
                    <li><a id="editItem" href="ArchitectSettings.php">Settings</a></li>
                    <li><a id="editItem" href="logout.php">Logout</a></li>

                </ul>

                <div style="margin-left:20%;padding:1px 16px;height:1000px;">
                    
                    <h2><center>Graphs and Reports</center></h2><br><br>
                    <div id="border">
                        <img src="graphs/mainGraph.php">
                        <br><br>
                        <form method="GET" action="graphs/fullSummary.php">
                        From:
                        <input type="number" name="from" value="2000">
                        To:
                        <input type="number" name="to" value="2016">
                        <input class="btn btn-primary dropdown-toggle theme-l1 left-align" type="submit" value="Get Income Summary">
                        </form>
                        <br><br>
                        <form method="GET" action="graphs/projectsSummary.php">
                        From:
                        <input type="number" name="from" value="2000">
                        To:
                        <input type="number" name="to" value="2016">
                        <input class="btn btn-primary dropdown-toggle theme-l1 left-align" type="submit" value="Get Projects Summary">
                        </form><br><br>
                        <div style="margin-left: 60px;">
                            <div style="display: inline-block">
                                From:
                                <input type="text" name="date" size="15"> 
                            </div>
                            <div style="display: inline-block">
                                To:
                                <input type="text" name="date" size="15"> 
                            </div>
                            <div style="display: inline-block">
                                <button class="btn btn-primary dropdown-toggle theme-l1 left-align" type="button"><i class=" fa-fw margin-right"></i>Get Income Report 
                                </button>
                            </div>
                        </div><br><br><br>
                        
                        
                        <div style="margin-left: 60px;">
                            <div style="display: inline-block">
                                Province:
                                <input type="text" name="date" size="15"> 
                            </div>
                            <div style="display: inline-block">

                            </div>
                            <div style="display: inline-block">
                                <button class="btn btn-primary dropdown-toggle theme-l1 left-align" type="button"><i class=" fa-fw margin-right"></i>Get Expense Report
                                </button>
                            </div>
                        </div><br><br><br>
                    </div>
                </div>

                </body>
                </html> 