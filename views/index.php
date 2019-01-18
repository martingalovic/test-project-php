<div class="jumbotron jumbotron-intro">
    <h1>PHP Test Application</h1>
    <p>This application lists all users registered in our database, feel free to add a new one!</p>
</div>

<div class="row">
    <!-- list all users -->
    <div class="col-sm-8">
        <div class="table-responsive">
            <div class="panel panel-default">
                <div class="panel-heading"><strong>List of all users</strong></div>
                <table class="table table-striped" id="table--users">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>E-mail</th>
                        <th>City</th>
                        <th>Phone</th>
                    </tr>
                    </thead>
                    <tbody>
                        <? include APP_ROOT . '/partials/users/table.php' ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- end list all users -->

    <!-- create new user  -->
    <div class="col-sm-4">
        <div class="panel panel-default">
            <div class="panel-heading"><strong class="panel-title">Create new user</strong></div>
            <div class="panel-body">
                <form method="post" action="create.php" class="form-horizontal" id="form--user-create">
                    <div class="form-group">
                        <label for="name" class="col-sm-4 control-label">Name: <sup class="text-danger">*</sup></label>
                        <div class="col-sm-8 input-holder">
                            <input name="name" type="text" class="form-control" id="name"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="email" class="col-sm-4 control-label">E-mail: <sup class="text-danger">*</sup></label>
                        <div class="col-sm-8 input-holder">
                            <input name="email" type="email" class="form-control" id="email"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="city" class="col-sm-4 control-label">City: <sup class="text-danger">*</sup></label>
                        <div class="col-sm-8 input-holder">
                            <input name="city" type="text" class="form-control" id="city"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="phone" class="col-sm-4 control-label">Phone: <sup class="text-danger">*</sup></label>
                        <div class="col-sm-8 input-holder">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    +421
                                </div>
                                <input name="phone" type="text" class="form-control" id="phone"/>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-8 col-sm-offset-4">
                            <button type="submit" data-loading-text="Creating..." class="btn btn-primary"><i class="glyphicon glyphicon-check"></i> Create</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- end create new user  -->
</div>