

 <div class="row">
    <div class="box col-md-12">
    <div class="box-inner">
    <div data-original-title="" class="box-header well">
        <h2><i class="glyphicon glyphicon-user"></i> Ads Listing</h2>

        <div class="box-icon">
            <a class="btn btn-setting btn-round btn-default" href="#"><i class="glyphicon glyphicon-cog"></i></a>
            <a class="btn btn-minimize btn-round btn-default" href="#"><i class="glyphicon glyphicon-chevron-up"></i></a>
            <a class="btn btn-close btn-round btn-default" href="#"><i class="glyphicon glyphicon-remove"></i></a>
        </div>
    </div>
    <div class="box-content">
    <!--<div class="alert alert-info">For help with such table please check <a target="_blank" href="http://datatables.net/">http://datatables.net/</a></div>-->
    <div role="grid" class="dataTables_wrapper" id="DataTables_Table_0_wrapper"><div class="row"><div class="col-md-6"><div id="DataTables_Table_0_length" class="dataTables_length"><label><select name="DataTables_Table_0_length" size="1" aria-controls="DataTables_Table_0"><option value="10" selected="selected">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> records per page</label></div></div><div class="col-md-6"><div class="dataTables_filter" id="DataTables_Table_0_filter"><label>Search: <input type="text" aria-controls="DataTables_Table_0"></label></div></div></div><table class="table table-striped table-bordered bootstrap-datatable datatable responsive dataTable" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info">
    <thead>
    <tr role="row"><th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 204px;" aria-sort="ascending" aria-label="Username: activate to sort column descending">Ad Title</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 188px;" aria-label="Date registered: activate to sort column ascending">Description</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 93px;" aria-label="Role: activate to sort column ascending">Price</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 104px;" aria-label="Status: activate to sort column ascending">Status</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 389px;" aria-label="Actions: activate to sort column ascending">Actions</th></tr>
    </thead>
    
    <tbody role="alert" aria-live="polite" aria-relevant="all">
        <?php foreach ($ads as $ad): 
            ?>
        <?php echo $this->Html->link($ad['Category']['name'], array('controller' => 'categories', 'action' => 'view', $ad['Category']['id'])); ?>
        <?php
           foreach($ad['Ad'] as $add):
          //  pr($add);
           //if(!empty($add['id'])){
        ?>
        
        
        <tr class="odd">
        <td class="  sorting_1"><?php echo h($add['ad_title']); ?></td>
        <td class="center "><?php echo h(substr($add['description'],0,100)); ?></td>
        <td class="center "><?php echo "$".h($add['price']); ?></td>
        <td class="center ">
            <span class="label-default label label-success"><?php  
        if($add['status']==1){
            $sts=0;
        $active='Aproved';   
        }if($add['status']==0){
            $sts=1;
             $active='Disaproved'; 
        }
                echo $this->Html->link(
                     $active,
                    array('action' => 'status', $add['id'],$sts)
                );
            ?></span>
        </td>
        <td class="center ">
            <a href="admin_view/<?php echo $add['id'];?>" class="btn btn-success">
                <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                View
            </a>
            <a href="admin_edit/<?php echo $add['id'];?>" class="btn btn-info">
                <i class="glyphicon glyphicon-edit icon-white"></i>
                Edit
            </a>
            <a href="admin_delete/<?php echo $add['id'];?>" class="btn btn-danger">
                <i class="glyphicon glyphicon-trash icon-white"></i>
                Delete
            </a>
        </td>
    </tr>
    <?php endforeach;endforeach?>
    </tbody></table>
        <div class="row">
            <div class="col-md-12"><div class="dataTables_info" id="DataTables_Table_0_info">Showing 1 to 10 of 32 entries</div></div><div class="col-md-12 center-block"><div class="dataTables_paginate paging_bootstrap pagination"><ul class="pagination"><li class="prev disabled"><a href="#">← Previous</a></li><li class="active"><a href="#">1</a></li><li><a href="#">2</a></li><li><a href="#">3</a></li><li><a href="#">4</a></li><li class="next"><a href="#">Next → </a></li></ul></div></div></div></div>
    <?php //  } else{
               
               
               ?>
       
           
           <?php //}
           

;
 ?>
    </div>
    </div>
    </div>
    <!--/span-->

    </div>
	
	
   