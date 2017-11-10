
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<body>

  


                <div class="row">
					
					
					<div class="col-md-8 col-sm-8">
                    <div class="panel panel-info">
                        <div class="panel-heading" style="background-color: #17a2b8;">
                           <p class="text-white"> <b>Booking Confirmation</b> </p>
                        </div>
                        <div class="panel-body">
							
							<div class="table-responsive">
                                <table class="table">
                                    <tr style="font-family: sans-serif; font-size: 16px">
                                            <th>DESCRIPTION</th>
                                            <th>INFORMATION</th>
                                            
                                        </tr>
                                        <tr>
                                            <th>Name</th>
                                            <th>naay unod</th>
                                            
                                        </tr>
										<tr>
                                            <th>Type Of the Room </th>
                                            <th></th>
                                            
                                        </tr>
										<tr>
                                            <th>Number Of the Room </th>
                                            <th></th>
                                            
                                        </tr>
										<tr>
                                            <th>Meal Plan </th>
                                            <th></th>
                                            
                                        </tr>
										<tr>
                                            <th>Bedding </th>
                                            <th></th>
                                            
                                        </tr>
										<tr>
                                            <th>Check-in Date </th>
                                            <th></th>
                                            
                                        </tr>
										<tr>
                                            <th>Check-out Date</th>
                                            <th></th>
                                            
                                        </tr>
										<tr>
                                            <th>Number of days</th>
                                            <th></th>
                                            
                                        </tr>
										<tr>
                                            <th>Status Level</th>
                                            <th></th>
                                            
                                        </tr>
                                </table>
                            </div>
                        
					
							
                        </div>
                        <div class="panel-footer">
                            <form method="post">
										<div class="form-group">
														<label>Select the Confirmation</label>
														<select name="conf" class="form-control">
															<option value selected>	</option>
															<option value="Confirm">Confirm</option>
														</select>
										 </div>
									<input type="submit" name="co" value="Confirm" class="btn btn-success">
							</form>
                        </div>
                    </div>
					</div>
					
					<?php
						// $rsql ="select * from room";
						// $rre= mysqli_query($con,$rsql);
						// $r =0 ;
						// $sc =0;
						// $gh = 0;
						// $sr = 0;
						// $dr = 0;
						// while($rrow=mysqli_fetch_array($rre))
						// {
						// 	$r = $r + 1;
						// 	$s = $rrow['type'];
						// 	$p = $rrow['place'];
						// 	if($s=="Superior Room" )
						// 	{
						// 		$sc = $sc+ 1;
						// 	}
							
						// 	if($s=="Guest House")
						// 	{
						// 		$gh = $gh + 1;
						// 	}
						// 	if($s=="Single Room" )
						// 	{
						// 		$sr = $sr + 1;
						// 	}
						// 	if($s=="Deluxe Room" )
						// 	{
						// 		$dr = $dr + 1;
						// 	}
							
						
						// }
						?>
						
						<?php
						// $csql ="select * from payment";
						// $cre= mysqli_query($con,$csql);
						// $cr =0 ;
						// $csc =0;
						// $cgh = 0;
						// $csr = 0;
						// $cdr = 0;
						// while($crow=mysqli_fetch_array($cre))
						// {
						// 	$cr = $cr + 1;
						// 	$cs = $crow['troom'];
							
						// 	if($cs=="Superior Room"  )
						// 	{
						// 		$csc = $csc + 1;
						// 	}
							
						// 	if($cs=="Guest House" )
						// 	{
						// 		$cgh = $cgh + 1;
						// 	}
						// 	if($cs=="Single Room" )
						// 	{
						// 		$csr = $csr + 1;
						// 	}
						// 	if($cs=="Deluxe Room" )
						// 	{
						// 		$cdr = $cdr + 1;
						// 	}
							
						
						// }
				
					?>
					<div class="col-md-4 col-sm-4">
                    <div class="panel panel-default">
                        <div class="panel-heading text-white" style="background-color: #17a2b8;">
                           <b>Available Room Details</b>
                        </div>
                        <div class="panel-body">
						<table width="200px">
							
							<tr>
								<td><b>Superior Room	 </b></td>
								<td><button type="button" class="btn btn-secondary btn-circle"><?php  
									// $f1 =$sc - $csc;
									// if($f1 <=0 )
									// {	$f1 = "NO";
									// 	echo $f1;
									// }
									// else{
									// 		echo $f1;
									// }
								
								
								?> </button></td> 
							</tr>
							<tr>
								<td><b>Guest House</b>	 </td>
								<td><button type="button" class="btn btn-secondary btn-circle"><?php 
								// $f2 =  $gh -$cgh;
								// if($f2 <=0 )
								// 	{	$f2 = "NO";
								// 		echo $f2;
								// 	}
								// 	else{
								// 			echo $f2;
								// 	}

								?> </button></td> 
							</tr>
							<tr>
								<td><b>Single Room	 </b></td>
								<td><button type="button" class="btn btn-secondary btn-circle"><?php
								// $f3 =$sr - $csr;
								// if($f3 <=0 )
								// 	{	$f3 = "NO";
								// 		echo $f3;
								// 	}
								// 	else{
								// 			echo $f3;
								// 	}

								?> </button></td> 
							</tr>
							<tr>
								<td><b>Deluxe Room</b>	 </td>
								<td><button type="button" class="btn btn-secondary btn-circle"><?php 
								
								// $f4 =$dr - $cdr; 
								// if($f4 <=0 )
								// 	{	$f4 = "NO";
								// 		echo $f4;
								// 	}
								// 	else{
								// 			echo $f4;
								// 	}
								?> </button></td> 
							</tr>
							<tr>
								<td><b>Total Rooms	</b> </td>
								<td> <button type="button" class="btn btn-success btn-circle"><?php 
								
								// $f5 =$r-$cr; 
								// if($f5 <=0 )
								// 	{	$f5 = "NO";
								// 		echo $f5;
								// 	}
								// 	else{
								// 			echo $f5;
								// 	}
								 ?> </button></td> 
							</tr>
						</table>
						
						
						
                        
						
						</div>
                        <div class="panel-footer" style="background-color: #17a2b8;">
                            
                        </div>
                    </div>
					</div>
                </div>
                <!-- /. ROW  -->
				
                </div>
                <!-- /. ROW  -->
				
				



</body>

</html>

<?php
						if(isset($_POST['co']))
						{	
							$st = $_POST['conf'];
							
							 
							
							if($st=="Confirm")
							{
									$urb = "UPDATE `roombook` SET `stat`='$st' WHERE id = '$id'";
									
								if($f1=="NO" )
								{
									echo "<script type='text/javascript'> alert('Sorry! Not Available Superior Room ')</script>";
								}
								else if($f2 =="NO")
									{
										echo "<script type='text/javascript'> alert('Sorry! Not Available Guest House')</script>";
										
									}
									else if ($f3 == "NO")
									{
										echo "<script type='text/javascript'> alert('Sorry! Not Available Single Room')</script>";
									}
										else if($f4=="NO")
										{
										echo "<script type='text/javascript'> alert('Sorry! Not Available Deluxe Room')</script>";
										}
										
										else if( mysqli_query($con,$urb))
											{	
												//echo "<script type='text/javascript'> alert('Guest Room booking is confirm')</script>";
												//echo "<script type='text/javascript'> window.location='home.php'</script>";
												 $type_of_room = 0;       
														if($troom=="Superior Room")
														{
															$type_of_room = 320;
														
														}
														else if($troom=="Deluxe Room")
														{
															$type_of_room = 220;
														}
														else if($troom=="Guest House")
														{
															$type_of_room = 180;
														}
														else if($troom=="Single Room")
														{
															$type_of_room = 150;
														}
														
														
														
														
														if($bed=="Single")
														{
															$type_of_bed = $type_of_room * 1/100;
														}
														else if($bed=="Double")
														{
															$type_of_bed = $type_of_room * 2/100;
														}
														else if($bed=="Triple")
														{
															$type_of_bed = $type_of_room * 3/100;
														}
														else if($bed=="Quad")
														{
															$type_of_bed = $type_of_room * 4/100;
														}
														else if($bed=="None")
														{
															$type_of_bed = $type_of_room * 0/100;
														}
														
														
														if($meal=="Room only")
														{
															$type_of_meal=$type_of_bed * 0;
														}
														else if($meal=="Breakfast")
														{
															$type_of_meal=$type_of_bed * 2;
														}else if($meal=="Half Board")
														{
															$type_of_meal=$type_of_bed * 3;
														
														}else if($meal=="Full Board")
														{
															$type_of_meal=$type_of_bed * 4;
														}
														
														
														$ttot = $type_of_room * $days * $nroom;
														$mepr = $type_of_meal * $days;
														$btot = $type_of_bed *$days;
														
														$fintot = $ttot + $mepr + $btot ;
															
															//echo "<script type='text/javascript'> alert('$count_date')</script>";
														$psql = "INSERT INTO `payment`(`id`, `title`, `fname`, `lname`, `troom`, `tbed`, `nroom`, `cin`, `cout`, `ttot`,`meal`, `mepr`, `btot`,`fintot`,`noofdays`) VALUES ('$id','$title','$fname','$lname','$troom','$bed','$nroom','$cin','$cout','$ttot','$meal','$mepr','$btot','$fintot','$days')";
														
														if(mysqli_query($con,$psql))
														{	$notfree="NotFree";
															$rpsql = "UPDATE `room` SET `place`='$notfree',`cusid`='$id' where bedding ='$bed' and type='$troom' ";
															if(mysqli_query($con,$rpsql))
															{
															echo "<script type='text/javascript'> alert('Booking Confirm')</script>";
															echo "<script type='text/javascript'> window.location='roombook.php'</script>";
															}
															
															
														}
												
											}
									
                                        
							}	
					
						}
					
									
									
							
						?>