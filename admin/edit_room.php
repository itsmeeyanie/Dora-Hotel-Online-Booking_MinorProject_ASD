<?php
    include("../includes/functions.php");
?>

<?php

    define("DB_SERVER", "localhost");
    define("DB_USER", "root");
    define("DB_PASS", "");
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
    if (isset($_POST['submit'])) {
        $id = $_POST['id'];
        $rname = $_POST['rname'];
        $rtype = $_POST['rtype'];
        $rrate = $_POST['rrate'];
        $status = $_POST['status'];

        global $connection;
        $query = "UPDATE `rooms` SET `rName`='$rname',`rType`='$rtype',`rRate`='$rrate',`status`='$status' WHERE id = '$id'";
        $result = mysqli_query($connection, $query);
        header('location: /Dora-Hotel-Online-Booking_MinorProject_ASD/admin/index.php?rooms=Room+Availability+Checker');
    }
 ?>

<?php
$data = [];
    if (isset($_GET['id'])){
        $data = edit($_GET['id']); 
    }
?>


<form method="post" action="edit_room.php" >
                          <div class="form-group">
                                <div class="col-md-12">
                                  <input name="id" class="form-control" value="<?php echo $data['id']; ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <input name="rname" class="form-control" value="<?php echo $data['rName']; ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <input name="rtype" class="form-control" value="<?php echo $data['rType']; ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <input name="rrate" class="form-control" value="<?php echo $data['rRate']; ?>">
                                </div>
                            </div>
                            <div class="form-group">
                              <div class="col-md-12">
                                <label>Status: <span class="note">*</span></label>
                                <input type="radio" name="status" value="0" <?php echo $data['status']; ?>>Available
                                <input type="radio" name="status" value="1" <?php echo $data['status']; ?>>Occupied<br>
                              </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12 col-md-offset-4">
                                    <button type="submit" name="submit" value="Submit" class="btn btn-dark">
                                        Update
                                    </button>
                                </div>
                            </div>
                        </form>