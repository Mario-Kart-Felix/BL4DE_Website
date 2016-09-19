<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("php/head.php") ?>
</head>
<body>
<div id="wrapper">
    <!--Sidebar-->
    <?php include("php/menu.php") ?>

    <!--Main content-->
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-2 well">
                    <form>
                        <div class="form-group">
                            <div class="input-group input-group-sm" style="padding-bottom: 25px">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                                <input type="text" class="form-control" placeholder="Username">
                            </div>
                            <div class="input-group input-group-sm" style="padding-bottom: 25px">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                                <input type="text" class="form-control" placeholder="Password"">
                            </div>
                            <div class="text-center">
                                <button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-log-in" style="padding-right: 10px"></span>Log in</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>


        </div>
    </div>
</div>
</body>
</html>