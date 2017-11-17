<?php

  define("DB_SERVER", "localhost");
  define("DB_USER", "dorahotel");
  define("DB_PASS", "admin");
  define("DB_NAME", "db_dorahotel");

  $connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);

  if(mysqli_connect_errno()){
    die("Database connection failed: " . 
      mysqli_connect_error() . 
      "(" . mysqli_connect_errno() . ")"
    );
  }

?>

  <?php
    $query = "select * from rooms";
    $result = mysqli_query($connection, $query);
    if(!$result) {
      die("Database query failed.");
    }
  ?>

  <?php
    $total = "SELECT status from rooms where status = 0";
    $tnum = mysqli_query($connection, $total);
    if(!$tnum) {
      die("Database query failed.");
    }else{
      $rowcount=mysqli_num_rows($tnum);
    }
  ?>

  <?php
    $deluxe = "SELECT rType from rooms where rType='Deluxe Room' and status=0";
    $del = mysqli_query($connection, $deluxe);
    if(!$del) {
      die("Database query failed.");
    }else{
      $delcount=mysqli_num_rows($del);
    }
  ?>

  <?php
    $superior = "SELECT rType from rooms where rType='Superior Room' and status=0";
    $sup = mysqli_query($connection, $superior);
    if(!$sup) {
      die("Database query failed.");
    }else{
      $supcount=mysqli_num_rows($sup);
    }
  ?>

  <?php
    $businessclass = "SELECT rType from rooms where rType='Business Class' and status=0";
    $bclass = mysqli_query($connection, $businessclass);
    if(!$bclass) {
      die("Database query failed.");
    }else{
      $bcount=mysqli_num_rows($bclass);
    }
  ?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
  <!-- Bootstrap core CSS -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>

  <div class="col-md-4 col-sm-4">
                    <div class="panel panel-default p-4 panel-group">
                        <div class="panel-heading text-white" style="background-color: #17a2b8;">
                           Available Room Details
                        </div>
                        <div class="panel-body">
            <table width="200px">
              
              <tr>
                <td><b>Superior Room   </b></td>
                <td><button type="button" class="btn btn-primary btn-circle">
                <?php 
                  echo $supcount;
                 ?> 
                </button></td> 
              </tr>
              <tr>
                <td><b>Deluxe Room</b>   </td>
                <td><button type="button" class="btn btn-primary btn-circle">
                <?php 
                  echo $delcount;
                 ?> 
                </button></td> 
              </tr>
              <tr>
                <td><b>Business Class</b></td>
                <td><button type="button" class="btn btn-primary btn-circle">
                  <?php
                    echo $bcount;
                  ?> 
                </button></td> 
              </tr>
              <tr>
                <td><b>Total Rooms  </b> </td>
                <td> <button type="button" class="btn btn-danger btn-circle">
                <?php 
                  echo $rowcount;
                 ?> 

                </button></td> 
              </tr>
            </table>
            
            
            
                        
            
            </div>
                        <div class="panel-footer" style="background-color: #17a2b8;">
                            
                        </div>
                    </div>
          </div>

  <div class="row">
      <div class="col-md-12">
          <div class="panel-default">
              <div class="panel-body">
                  <div class="panel-group" id="accordion">
            <div class="panel">
              <div class="panel-heading p-4" style="background-color: #17a2b8; ">
              </div>
                  <div class="panel-body">
                      <div class="panel panel-default">
                       <div class="panel-body">
                          <div class="table-responsive">
                              <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                  <thead>
                                      <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Room type</th>
                                            <th>Rate</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                      while($row=mysqli_fetch_assoc($result)){
                        $id = $row['id'];
                        $rname = $row['rName'];
                        $rtype = $row['rType'];
                        $rrate = $row['rRate'];
                        $stat = $row['status'];

                        echo"<tr>
                          <td>".$id."</td>
                          <td>".$rname."</td>
                          <td>".$rtype."</td>
                          <td>".$rrate."</td>";
                          
                          if($stat){
                            echo "<td>"."Occupied"."</td>";
                          }else{
                            echo "<td>"."Available"."</td>";
                          }

                          echo "<td><input onclick=\"document.getElementById('id01').style.display='block'\" class=\"btn btn-success edit-data\" type=\"button\" name=\"edit\" value=\"Edit\" id=".$id."></input></td>
                          </tr>";
                        }
                      ?>

                                </tbody>
                                    
                                </table>
                        </div>
                  </div>
          </div>
          </div>
      </div>

<!-- Modal content-->

  <div id="id01" class="w3-modal">
    <div class="w3-modal-content col-md-4 w3-display-middle">
      <div class="modal-header">
        <h4 class="modal-title">Room Details</h4>
        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright">&times;</span>
      </div>
        <div class="w3-container">
                      <form class="form-horizontal" action="../includes/config.php" method="post">
                          <div class="form-group">
                                <div class="col-md-12">
                                    <input name="id" class="form-control" value="<?php echo $id; ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <input name="rname" class="form-control" value="<?php echo $rname; ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <input name="rtype" class="form-control" value="<?php echo $rtype; ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <input name="rrate" class="form-control" value="<?php echo $rrate; ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <input name="status" class="form-control" value="<?php echo $stat; ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12 col-md-offset-4">
                                    <button type="submit" name="edit" value="Submit" class="btn btn-dark">
                                        Update
                                    </button>
                                </div>
                            </div>
                        </form>
                  </div>
        <div class="modal-footer">
          
        </div>
      </div>

        
    </div>
  </div>

  <!-- Update MODAL -->


    
  
<!--  <script>  
 $(document).ready(function(){  

      $(document).on('click', function(){  
           var employee_id = $(this).attr("id");  
           $.ajax({  
                url:"../includes/config.php",  
                method:"POST",  
                data:{employee_id:employee_id},  
                dataType:"json",  
                success:function(data){  
                     $('#id').val(data.id);  
                     $('#rname').val(data.rname);  
                     $('#rtype').val(data.rtype);  
                     $('#rrate').val(data.rrate);  
                     $('#status').val(data.status);   
                     $('#edit').val("edit");  
                     $('#id01').modal('show');  
                }  
           });  
      });  
 });  
 </script> -->
</div>
    
</body>
</html>

<?php
  mysqli_free_result($result);
?>

<?php
  mysqli_close($connection);
?>