<?php
include '../superadmin-session.php';
error_reporting(0);
if (isset($_POST['addfees'])) {
    $fees = $_POST['m_fees'];
    $date = $_POST['m_date'];

    $sql = mysql_query("INSERT INTO `membershipfees`(`MemberShipFees`, `MemberShipFeeDate`, `CreatedBy`, `CreatedDate` ) VALUES "
            . "('" . $fees . "', '" . $date . "', '" . $_SESSION['userid'] . "', CURDATE())") or die(mysql_error());

    if ($sql) {
        header("location: superadmin_membership_list.php");
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
<?php include 'include/nav.php'; ?>
    </head>

    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">
<?php include 'include/sidenav.php'; ?>

            <div class="content-wrapper">

                <section class="content">

                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Add MemberShip Fees</h3>
                        </div>
                        <form role="form" method="post" action="">
                            <div class="box-body">               
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>MemberShip Fees</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="text" name="m_fees" class="form-control" required="required">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>Date</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="date" name="m_date" class="form-control" required="required">
                                    </div>
                                </div>
                            </div>
                            <div class="box-footer text-center">
                                <input type="submit" name="addfees" value="Add" class="btn btn-primary">
                            </div>
                        </form>

                    </div>

                </section>
                <!-- /.content -->
            </div>

            <!-- /.content-wrapper -->
<?php include 'include/script.php'; ?>


            <!-- Control Sidebar -->

            <div class="control-sidebar-bg"></div>
        </div>

    </body>
</html>


