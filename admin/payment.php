
<!DOCTYPE html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <!-- Bootstrap Styles-->
    <link href="../admin/assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="../admin/assets/css/font-awesome.css" rel="stylesheet" />
 
   
        <!-- Custom Styles-->
    <link href="../admin/assets/css/custom-styles.css" rel="stylesheet" />
     <!-- TABLE STYLES-->
    <link href="../admin/assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
</head>
<body>

    <!-- /. ROW  -->
    <div class="row">
    <div class="col-md-12">
        <div class="panel-default">
            <div class="panel-body">
                <div class="panel-group" id="accordion">
                    <div class="panel">
                        <div class="panel-heading" style="background-color: #17a2b8; ">
                            <h4 class="panel-title" style="color: white; font-weight: bold;">
                                 <br><span class="badge"><!-- <?php echo $c ; ?> --></span>
                            </h4>
                        </div>
                <div id="collapseTwo" class="panel-collapse in" style="height: auto;">
                    <div class="panel-body">
                        <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Room type</th>
                                            <th>Bed Type</th>
                                            <th>Check in</th>
                                            <th>Check out</th>
                                            <th>No. of Room</th>
                                            <th>Meal Type</th>
                                             
                                            <th>Total Cost</th>
                                            <th>Print</th>
                                        </tr>
                                    </thead>
                                <tbody>
                                    <?php
                                            // include ('db.php');
                                            // $sql="select * from payment";
                                            // $re = mysqli_query($con,$sql);
                                            // while($row = mysqli_fetch_array($re))
                                            // {
                                            
                                            //  $id = $row['id'];
                                                
                                            //  if($id % 2 ==1 )
                                            //  {
                                            //      echo"<tr class='gradeC'>
                                            //          <td>".$row['title']." ".$row['fname']." ".$row['lname']."</td>
                                            //          <td>".$row['troom']."</td>
                                            //          <td>".$row['tbed']."</td>
                                            //          <td>".$row['cin']."</td>
                                            //          <td>".$row['cout']."</td>
                                            //          <td>".$row['nroom']."</td>
                                            //          <td>".$row['meal']."</td>
                                                        
                                            //          <td>".$row['ttot']."</td>
                                            //          <td>".$row['mepr']."</td>
                                            //          <td>".$row['btot']."</td>
                                            //          <td>".$row['fintot']."</td>
                                            //          <td><a href=print.php?pid=".$id ." <button class='btn btn-primary'> <i class='fa fa-print' ></i> Print</button></td>
                                            //          </tr>";
                                            //  }
                                            //  else
                                            //  {
                                            //      echo"<tr class='gradeU'>
                                            //          <td>".$row['title']." ".$row['fname']." ".$row['lname']."</td>
                                            //          <td>".$row['troom']."</td>
                                            //          <td>".$row['tbed']."</td>
                                            //          <td>".$row['cin']."</td>
                                            //          <td>".$row['cout']."</td>
                                            //          <td>".$row['nroom']."</td>
                                            //          <td>".$row['meal']."</td>
                                                        
                                            //          <td>".$row['ttot']."</td>
                                            //          <td>".$row['mepr']."</td>
                                            //          <td>".$row['btot']."</td>
                                            //          <td>".$row['fintot']."</td>
                                            //          <td><a href=print.php?pid=".$id ." <button class='btn btn-primary'> <i class='fa fa-print' ></i> Print</button></td>
                                            //          </tr>";
                                                
                                            //  }
                                            
                                            // }
                                            
                                    ?>
                                            
                                </tbody>
                            </table>
                                
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- /. ROW  -->


    <script src="../admin/assets/js/jquery-1.10.2.js"></script>
    
     <!-- DATA TABLE SCRIPTS -->
    <script src="../admin/assets/js/dataTables/jquery.dataTables.js"></script>
    <script>
        $(document).ready(function() {
            $('#dataTables-example').dataTable({
                "paging": false
            });

        });
    </script>
</body>
</html>


