<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title"><?= $title ?></h4> </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <div class="white-box">
            <div class="table-responsive">
                <table class="table">
                    <tbody>
                    <?php if(count($messages) > 0) {?>
                        <?php foreach ($messages as $message) : ?>
                            <tr>
                                <td><a href="<?php echo base_url(); ?>messages/star/<?php echo $message['messageId'] ."/".$currentFolder ."/".$currentpage ?>"><img src="<?php if($message['isStarred'] === TRUE){echo base_url() . "assets/images/black.png";} else {echo base_url() . "assets/images/white.png";} ?>"></a></td>
                                <td <?php if(!$message['isRead']){echo 'class="td-bold"';}?>><a href="<?php echo base_url(); echo $path . $currentFolder ."/" . $currentpage . "/" ;?><?php echo htmlspecialchars($message['messageId']); ?>"><?php echo htmlspecialchars($message['firstname']) . " " . htmlspecialchars($message['lastname'])?></a></td>
                                <td <?php if(!$message['isRead']){echo 'class="td-bold"';}?>><?php echo htmlspecialchars($message['subject']); ?></td>
                                <td <?php if(!$message['isRead']){echo 'class="td-bold"';}?>><?php echo $message['date']->format('d F'); ?></td>
                                <td><a href="<?php echo base_url(); ?>messages/delete/<?php echo $message['messageId'] ."/".$currentFolder ."/".$currentpage ?>">Delete</a> | <a href="<?php echo base_url(); ?><?php if($message['isRead']){echo 'messages/markAsUnread/';} else {echo 'messages/markAsread/';} ?><?php echo $message['messageId'] ."/".$currentFolder ."/".$currentpage ?>"><?php if($message['isRead'] === FALSE){echo 'Mark as read';} else {echo 'Mark as unread';} ?></a></td>
                            </tr>
                        <?php endforeach; ?>
                    <?php } else {echo 'There are no messages to show';} ?>        
                    </tbody>
                </table>
                <?php if ($count > $limit) { ?>
                <table class="table">
                    <tr>
                        <td><?php $pages = $count / LIMIT; $pages = ceil($pages);?>
                            <?php for($i=1;$i<=$pages;$i++) : ?>                                
                                <a href="<?php echo base_url();?>messages/<?php echo $currentFolder;echo'/'; echo $i; ?>" class="<?php echo $currentpage==$i ? "current-page" : "list-page"; ?>"><?php echo $i; ?></a>
                            <?php endfor; ?>   
                        </td>
                    </tr>
                </table>
                <?php } ?>
            </div>
        </div>
    </div>
</div>