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
                <p><?=$this->session->flashdata('sysmsg');?>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <br />
                <form id="user-form" class="form-horizontal form-label-left" method="post">
                    <div class="form-group">
                        <label class="control-label col-sm-3  col-xs-12">Username <span class="required">*</span></span></label>
                        <div class="col-sm-6 col-xs-12">
                            <?=form_error('username');?>
                            <input class="form-control" type="text" name="username" value="<?=set_value('username');?>" >
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">First Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <?=form_error('fname');?>
                            <input type="text" name="fname"  value="<?=set_value('fname')?>" class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Last Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <?=form_error('lname');?>
                            <input type="text" id="last-name" name="lname" value="<?=set_value('lname')?>" class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Email</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <?=form_error('email');?>
                            <input name="email" value="<?=set_value('email')?>" class="form-control col-md-7 col-xs-12" type="text" name="middle-name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">User type</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <?=form_error('role');?>
                            <select class="form-control" name="role">
                                <option value="" disabled selected></option>
                                <?php foreach($roles as $role):?>
                                    <option value="<?=$role->role_id;?>" <?=set_select('role',$role->role_id);?>><?=$role->role_desc;?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Password <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <?=form_error('password');?>
                            <input name="password"  value="<?=set_value('password')?>" class=" form-control col-md-7 col-xs-12"  type="password">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Confirm Password<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <?=form_error('repassword');?>
                            <input name="repassword" value="<?=set_value('repassword')?>"  class=" form-control col-md-7 col-xs-12"  type="password">
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

<script >
    $(function(){
        $('#user-form').submit(function(e){
            e.preventDefault();
            showLoader();
            $.ajax({
                url: base_url + 'user/add',
                data: $(this).serialize(),
                type: 'post',
                dataType: 'json',
                success: function(response){
                    // console.log(response);
                    if(response.success == true)
                    {
                        location.reload();
                    }else{
                        showErrors(response.errors);
                        hideLoader();
                    }
                }
            });
        });
    });
</script>