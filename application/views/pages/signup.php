<div class="row"></div>
<div class="row">
    <div class="col-sm-4"></div>
    <div class="col-sm-4">
        <h4 class="page-title"><h2><?= $title ?></h2></h4> 
        <div class="white-box">            
            <?php echo form_open_multipart('users/signup'); ?>              
                <div class="form-group">                    
                    <label class="col-md-12">Employee Id</label>
                    <div class="col-md-12">
                        <input placeholder="Enter your employee id" class="form-control form-control-line" name="employeeId" value="<?php echo isset($_POST['employeeId']) ? $_POST['employeeId'] : '' ?>" type="text"> </div>
                        <div class="col-md-12 validation-error"><?php echo form_error('employeeId'); ?></div>
                </div>
                <div class="form-group">                    
                    <label class="col-md-12">First Name</label>
                    <div class="col-md-12">
                        <input placeholder="Enter your first name" class="form-control form-control-line" name="firstname" value="<?php echo isset($_POST['firstname']) ? $_POST['firstname'] : '' ?>" type="text"> </div>
                        <div class="col-md-12 validation-error"><?php echo form_error('firstname'); ?></div>
                </div>
                <div class="form-group">                    
                    <label class="col-md-12">Last Name</label>
                    <div class="col-md-12">
                        <input placeholder="Enter your last name" class="form-control form-control-line" name="lastname" value="<?php echo isset($_POST['lastname']) ? $_POST['lastname'] : '' ?>" type="text"> </div>
                        <div class="col-md-12 validation-error"><?php echo form_error('lastname'); ?></div>
                </div>
                <div class="form-group">                     
                    <label for="example-email" class="col-md-12">Email</label>
                    <div class="col-md-12">
                        <input placeholder="Enter your email address" class="form-control form-control-line" name="email" id="example-email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : '' ?>" type="email"> </div>
                        <div class="col-md-12 validation-error"><?php echo form_error('email'); ?></div>
                </div>
                <div class="form-group">                    
                    <label class="col-md-12">Password</label>
                    <div class="col-md-12">
                        <input class="form-control form-control-line" type="password" name="password"> </div>
                        <div class="col-md-12 validation-error"><?php echo form_error('password'); ?></div>
                </div>
                <div class="form-group">
                    <label class="col-md-12">Retype Password</label>
                    <div class="col-md-12">
                        <input class="form-control form-control-line" type="password" name="retypepassword"> </div>
                        <div class="col-md-12 validation-error"><?php echo form_error('retypepassword'); ?></div>
                </div>
                <button type="submit" class="btn btn-default btn-page">Signup</button>
            </form>
            <?php echo $this->benchmark->elapsed_time('signup_start','signup_end');?>
        </div>
    </div>
    <div class="col-sm-4"></div>
</div>