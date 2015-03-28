<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#">Dashboard</a>
        </li>
    </ul>
</div>

<div class=" row">
    <div class="col-md-3 col-sm-3 col-xs-6">
        <a href="#" class="well top-block" title="" data-toggle="tooltip" data-original-title="6 new members.">
            <i class="glyphicon glyphicon-user blue"></i>

            <div>Total Users</div>
            <div><?php echo $users; ?></div>
            <span class="notification">0</span>
        </a>
    </div>

    
    
    <div class="col-md-3 col-sm-3 col-xs-6">
        <a href="#" class="well top-block" title="" data-toggle="tooltip" data-original-title="12 new messages.">
            <i class="glyphicon glyphicon-envelope red"></i>

            <div>Total Ads</div>
            <div><?php echo $ads;?></div>
            <span class="notification red">0</span>
        </a>
    </div>
    
    <div class="col-md-3 col-sm-3 col-xs-6">
        <a href="#" class="well top-block" title="" data-toggle="tooltip" data-original-title="4 new pro members.">
            <i class="glyphicon glyphicon-star green"></i>

            <div>Total Category</div>
            <div><?php echo $categories; ?></div>
            <span class="notification green">0</span>
        </a>
    </div>

    <div class="col-md-3 col-sm-3 col-xs-6">
        <a href="#" class="well top-block" title="" data-toggle="tooltip" data-original-title="$34 new sales.">
            <i class="glyphicon glyphicon-shopping-cart yellow"></i>

            <div>Total Subcategory </div>
            <div><?php echo $subcategories;?></div>
            <span class="notification yellow">0</span>
        </a>
    </div>

</div>
<div class="row">
    <div class="box col-md-4">
        <div class="box-inner">
            <div data-original-title="" class="box-header well">
                <h2><i class="glyphicon glyphicon-user"></i> Member Activity</h2>

                <div class="box-icon">
                    <a class="btn btn-minimize btn-round btn-default" href="#"><i class="glyphicon glyphicon-chevron-up"></i></a>
                    <a class="btn btn-close btn-round btn-default" href="#"><i class="glyphicon glyphicon-remove"></i></a>
                </div>
            </div>
            <div class="box-content">
                <div class="box-content">
                    <ul class="dashboard-list">
                        <?php if(!empty($userList)){
                            foreach($userList as $userData){                                             
?>                        <li>
                            <a href="#">
                                <img src="http://www.gravatar.com/avatar/hash" alt="Usman" class="dashboard-avatar"></a>
                            <strong>Name:</strong> <a href="#"><?php echo $userData['User']['username']; ?>
                            </a><br>
                            <strong>Since:</strong> <?php echo date('Y-m-d',  strtotime($userData['User']['created'])); ?><br>
                            <strong>Status:</strong> <span class="<?php if($userData['User']['active']==1) { ?>label-success<?php }else { ?>label-danger<?php } ?>  label label-default">Approved</span>
                        </li>
                      <?php       }
                        } ?>
                        
                    </ul>
                </div>
            </div>
        </div>
    </div>
    </div>