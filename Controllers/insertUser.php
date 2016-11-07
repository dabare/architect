<?php
							include ('../db/dbConnection.php');
							
							$fname=$_POST['fname'];
                            $mname=$_POST['mname'];
                            $lname=$_POST['lname'];
                            $age=$_POST['age'];
                            $nic=$_POST['nic'];
                            $add_no=$_POST['add_no'];
                            $add_street=$_POST['add_street'];
                            $add_city=$_POST['add_city'];
                            $email=$_POST['email'];
                            $mobile_no=$_POST['mobile_no'];
                            $land_no=$_POST['land_no'];
                            $psswd=$_POST['psswd'];
                            
							$userId = mysqli_query($conn, "SELECT max(`id`)+1 as x FROM `customer`");
							while($rw = mysqli_fetch_assoc($userId)){
								$id = $rw["x"];
							}
							
							
							if(isset($_POST['submit'])) {
                                $res = mysqli_query($conn, "select count (*) from customer where email='".$email."'");
                                //echo $res;
                                $count=mysqli_fetch_array($conn, $res);
                                //echo $count;
                                if($count[0]==0){
                                    //echo "test";
									$sql = "INSERT INTO customer (id,fname, mname, lname, age, nic, add_no, add_street, add_city, email, mobile_no, land_no, passwd)VALUES ('$id','$fname', '$mname', '$lname', '$age', '$nic', '$add_no', '$add_street', '$add_city', '$email', '$mobile_no', '$land_no', '$psswd')";
                                    if(mysqli_query($conn,$sql )){
										echo "<script> alert('User Insert'); </script>";
										echo "<script> window.location.href='..'; </script>";
									}
									else{
										echo "Not Done";
									}
                                    //header('Location: index.php');
                                    //$duplicate = false;
									echo "$sql";
                                } else {
                                    //$duplicate = true;
									echo "data not insert";
                                } 
                            }


?>