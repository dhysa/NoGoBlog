        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Admin Profile
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="<?php echo base_url();?>dashboard/">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-user"></i> Profile
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-6">

                        <form role="form">

                            <div class="form-group">
                                <label>Username</label>
                                <input class="form-control" placeholder="Username">
                                <p class="help-block">Example block-level help text here.</p>
                            </div>

                            <div class="form-group">
                                <label>Password</label>
                                <input class="form-control" type="password" placeholder="Password">
                                <p class="help-block">The password should be alphanumerik.</p>
                            </div>

                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" type="email" placeholder="email@example.com">
                            </div>

                            <button type="submit" class="btn btn-default">Submit Button</button>

                        </form>

                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->