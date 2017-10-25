<h2>Read</h2>
    <div class="form-group">
        <label>To</label>
        <?php echo htmlspecialchars($message['firstname']) . " " . htmlspecialchars($message['lastname']); ?>
    </div>
    <div class="form-group">
        <label>Subject</label>
        <?php echo htmlspecialchars($message['subject']); ?>
    </div>
    <div class="form-group">
        <label>Message</label>
        <?php echo htmlspecialchars($message['body']); ?>
    </div>
<div>