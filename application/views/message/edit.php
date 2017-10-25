<h2>Edit</h2>
<?php echo form_open_multipart('message/edit/' .$offset .'/' .$message['messageId']); ?>
    <div class="form-group">
        <label>To</label>
        <input type="text" value="<?php echo $message['firstname'] . " " .$message['lastname']; ?>" class="form-control" name='to'>
        <div class="col-md-12 validation-error"><?php echo form_error('to'); ?></div>
    </div>
    <div class="form-group">
        <label>Subject</label>
        <input type="text" class="form-control" value="<?php echo $message['subject']; ?>" name='subject' placeholder="Subject">
        <div class="col-md-12 validation-error"><?php echo form_error('subject'); ?></div>
    </div>
    <div class="form-group">
        <label>Message</label>
        <textarea id="editor1" class="form-control" name='body' placeholder="Message"><?php echo $message['body']; ?></textarea> 
        <div class="col-md-12 validation-error"><?php echo form_error('body'); ?></div>
    </div>    
    <input type="hidden" value="<?php echo $message['messageId'] ?>" class="form-control" name='messageId'>
<div>
<button type="submit" name="save" class="btn btn-default">Save</button>
<button type="submit" name="send" class="btn btn-default">Send</button>
</form>