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
    <link href="../admin/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
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
                        echo"<tr>
                          <td>".$row['id']."</td>
                          <td>".$row['rName']."</td>
                          <td>".$row['rType']."</td>
                          <td>".$row['rRate']."</td>";
                          
                          if($row['status']){
                            echo "<td>"."Occupied"."</td>";
                          }else{
                            echo "<td>"."Available"."</td>";
                          }

                          // echo "<td><button class=\"btn btn-success\" data-toggle=\"modal\" data-target=\"#modalEdit\"> Edit </button></td>
                          echo "<td><input class=\"btn btn-success edit-data\" type=\"button\" name=\"edit\" value=\"Edit\" id=".$row['id'].">Edit</input></td>
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

      <!-- Update MODAL -->


    <div class=\"row modal fade\" id=\"modalEdit\">
        <div class=\"modal-dialog\">
        <div class=\"modal-content panel\">
        <div class=\"panel-body p-2\">
        <div class=\"panel-heading modal-header\" style=\"background-color: gray;\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times</button>
                </div>
    <form class=\"form-horizontal\" action=\"../includes/config.php\" method=\"post\">
                          <div class=\"form-group\">
                                <div class=\"col-md-8\">
                                    <input name=\"id\" class=\"form-control\" value=".$row['id']." readonly>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <div class=\"col-md-8\">
                                    <input name=\"rname\" class=\"form-control\" value=".$row['rNate'].">
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <div class=\"col-md-8\">
                                    <input name=\"rtype\" class=\"form-control\" value=".$row['rType'].">
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <div class=\"col-md-8\">
                                    <input name=\"rrate\" class=\"form-control\" value=".$row['rRate'].">
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <div class=\"col-md-8\">
                                    <input name=\"status\" class=\"form-control\" value=".$row['status'].">
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <div class=\"col-md-8 col-md-offset-4\">
                                    <button type=\"submit\" name=\"edit\" value=\"Submit\" class=\"btn btn-dark\">
                                        Update
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


           <script>
        $(document).ready(function(){
          $(document).on('click', '.edit-data', function(){
            var users_id = $(this).attr("id");
            $.ajax({
              url:"fetch.php",
              method:"POST",
              data:{users_id:users_id},
              data-type:"json",
              success:function(data){
                $('#rname').val(data.rname);
                $('#rtype').val(data.rtype);
                $('#rrate').val(data.rrate);
                $('#status').val(data.status);
              }

            });

          });
        });

      </script>
         
    
                      
    </div>
    
</body>
</html>

<?php
  mysqli_free_result($result);
?>

<?php
  mysqli_close($connection);
?>