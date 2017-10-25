<div class="row">
    <div class="col-sm-4"></div>
    <div class="col-sm-4">
        <h4 class="page-title"><h2><?= $title ?></h2></h4> 
        <div class="white-box">            
            <?php echo form_open_multipart('users/login'); ?>                  
                <div class="form-group">
                    <label class="col-md-12">Email</label>
                    <div class="col-md-12">
                        <input placeholder="Email" class="form-control form-control-line" name="email" type="text"> </div>
                        <div class="col-md-12 validation-error"><?php echo form_error('email'); ?></div>
                </div>
                <div class="form-group">
                    <label class="col-md-12">Password</label>
                    <div class="col-md-12">
                        <input placeholder="Password" class="form-control form-control-line" name="password" value="" type="password" autocomplete="off"> </div>
                        <div class="col-md-12 validation-error"><?php echo form_error('password'); ?></div>
                </div>                
                <button type="submit" class="btn btn-default btn-page">Login</button>
            </form>
        </div>
    </div>
    <div class="col-sm-4"></div>
</div>