<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title"><?= $title ?></h4> </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <div class="white-box">
            <div class="table-responsive">
                <table class="table">                    
                    <thead>
                        <tr>
                            <th>Employee Id</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>                    
                    <?php foreach ($users as $user) : ?>
                        <tr>
                            <td><?php echo htmlspecialchars($user->employeeId);?></td>
                            <td><?php echo htmlspecialchars($user->firstname); ?></td>
                            <td><?php echo htmlspecialchars($user->lastname); ?></td>
                            <td><?php echo htmlspecialchars($user->email); ?></td>
                            <td><a href="<?php echo base_url();?>message/compose/<?php echo $user->userId ?>">Message</a></td>
                        </tr>
                    <?php endforeach; ?>                        
                    </tbody>
                </table>
                <table>
                    <tr>
                        <td><?php $pages = $count / LIMIT; ?>
                            <?php for($i=1;$i<=$pages;$i++) : ?>                                
                                <a href="<?php echo base_url();?>users/index/<?php echo $i; ?>" class="<?php echo $currentpage==$i ? "current-page" : "list-page"; ?>"><?php echo $i; ?></a>
                            <?php endfor; ?>   
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>