<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <title>Import/Export</title>
</head>
<body>
    <div id="wrap">
        <div class="container">
            <div class="row">
                <form class="form-horizontal" action="actions.php" method="post" name="import" enctype="multipart/form-data">
                    <fieldset>
                        <legend>Import/Export</legend>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="filebutton">Select File</label>
                            <div class="col-md-4">
                                <input type="file" name="file" id="file" class="input-large">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="singlebutton">Import data</label>
                            <div class="col-md-4">
                                <button type="submit" id="submit" name="submit" class="btn btn-primary button-loading" data-loading-text="Loading...">Import</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
                <div>
                    <form class="form-horizontal" action="actions.php" method="post" name="upload_excel" enctype="multipart/form-data">
                        <div class="form-group">
                                <div class="col-md-4 col-md-offset-4">
                                    <input type="submit" name="Export" class="btn btn-success" value="export to excel"/>
                                </div>
                        </div>                    
                    </form>           
                </div>
                <?php
                    include 'db_conn.php';
                    $sql1 = "SELECT * FROM `details`";
                    $result1 = mysqli_query($conn,$sql1);
                    if(mysqli_num_rows($result1) > 0)
                    {
                        echo "<div class='table-responsive'><table id='myTable' class='table table-striped table-bordered'>
                                <thead class='bg-primary'>
                                    <tr>
                                        <th>S.No</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone Number</th>
                                        <th>Address</th>
                                        <th>Pincode</th>
                                    </tr>
                                </thead>
                            ";
                        while($row = mysqli_fetch_assoc($result1))
                        {
                            echo "
                                    <tr>
                                        <td>" . $row['s'] . "</td>
                                        <td>" . $row['name'] . "</td>
                                        <td>" . $row['email'] . "</td>
                                        <td>" . $row['phone_number'] . "</td>
                                        <td>" . $row['address'] . "</td>
                                        <td>" . $row['pincode'] . "</td>
                                    </tr>
                                ";
                        }
                        echo "</tbody></table></div>";
                    }
                    else 
                    {
                        echo "you have no records";
                    }
                ?>
            </div>
        </div>
    </div>
</body>
</html>