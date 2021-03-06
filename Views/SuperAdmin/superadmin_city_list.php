<?php
include '../superadmin-session.php';
error_reporting(0);
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
                            <h3 class="box-title">View City</h3>
                        </div>
                        <form role="form" method="post" action="add_city.php" >
                            <div class="box-body with-border text-center">
                                <input type="submit" class="btn btn-primary" name="addcity" value="Add City">
                            </div>
                            <div class="box-body">               
                                <div class="col-md-12">
                                    <div class="form-group">

                                        <?php $sql = mysql_query("SELECT * FROM `city`") or die(mysql_error());
                                        ?><br>
                                        <table id="example1" class="table table-responsive table-condensed table-striped table-hover table-bordered">
                                            <thead>
                                                <tr>  
                                                    <th>City Name</th>
                                                    <th>Active Status</th>
                                                    <th>View</th>
                                                </tr>
                                            </thead>
                                            <?php
                                            while ($row = mysql_fetch_array($sql)) {
                                                if ($row['Active'] == 1) {
                                                    $a = "Active";
                                                    //echo $a;
                                                } else {
                                                    $a = "Deactive";
                                                    //echo $a;
                                                }
                                                echo "<tr>"
                                                . "<td>" . $row['CityName'] . "</td>";
                                                if ($row['Active'] == 1) {
                                                    echo '<td><span class="label bg-green">' . $a = "Active" . '</span></td>';
                                                } else {
                                                    echo '<td><span class="label bg-red">' . $a = "Deactive" . '</span></td>';
                                                }
                                                echo
                                                "<td><a href='superadmin_view_city.php?id=", $row['CityId'], "' '><span class='badge bg-yellow'>View</span></a></td>"
                                                . "</tr>";
                                            }
                                            ?> </table> <?php
                                            ?>
                                    </div>
                                </div>
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
