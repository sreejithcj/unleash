<h2>Compose</h2>
<?php echo form_open_multipart('message/compose/' . $userId ); ?>
    <div class="form-group">
        <label>To</label>
        <input type="text" value="<?php echo $name; ?>" class="form-control" name='to'>
        <div class="col-md-12 validation-error"><?php echo form_error('to'); ?></div>
    </div>
    <div class="form-group">
        <label>Subject</label>
        <input type="text" class="form-control" name='subject' placeholder="Subject">
        <div class="col-md-12 validation-error"><?php echo form_error('subject'); ?></div>
    </div>
    <div class="form-group">
        <label>Message</label>
        <textarea id="editor1" class="form-control" name='body' placeholder="Message"></textarea>    
        <div class="col-md-12 validation-error"><?php echo form_error('body'); ?></div>
    </div>
    <input type="hidden" value="<?php echo $userId; ?>" class="form-control" name='userId'>
    <input type="hidden" value="<?php echo $authorId; ?>" class="form-control" name='authorId'>
<button type="submit" name="save" class="btn btn-default">Save</button>
<button type="submit" name="send" class="btn btn-default">Send</button>
</form>