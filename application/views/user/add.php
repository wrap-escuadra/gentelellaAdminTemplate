<div class="page-title">
    <div class="title_left">
        <h3>Add User</h3>
    </div>

    <div class="title_right">
    </div>
</div>

<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>User form <small>( fields with * are required )</small></h2>

                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <br />
                <form id="form-standard" class="form-horizontal form-label-left" action="post">
                    <div class="form-group">
                        <label class="control-label col-sm-3  col-xs-12">Username <span class="required">*</span></span></label>
                        <div class="col-sm-6 col-xs-12">
                            <p class="text-danger"></p>
                            <input class="form-control" type="text" name="username" >
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">First Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <p class="text-danger"></p>
                            <input type="text" name="fname" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Last Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <p class="text-danger"></p>
                            <input type="text" id="last-name" name="last-name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Email</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input email="email" class="form-control col-md-7 col-xs-12" type="text" name="middle-name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">User type</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <select class="form-control" name="role">
                                <option> -select role- </option>
                                <?php foreach($roles as $role):?>
                                    <option value="<?=$role->role_id;?>"><?=$role->role_desc;?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Password <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input name="password" class=" form-control col-md-7 col-xs-12" required="required" type="password">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Confirm Password<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input name="repassword" class=" form-control col-md-7 col-xs-12" required="required" type="password">
                        </div>
                    </div>
                    <div class="ln_solid"></div>
                    <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                            <button class="btn btn-primary" type="button">Cancel</button>
                            <button class="btn btn-primary" type="reset">Reset</button>
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

<script !src="">
    $(function(){

    });
</script>