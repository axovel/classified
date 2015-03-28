

 <div class="row">
    <div class="box col-md-12">
    <div class="box-inner">
    <div data-original-title="" class="box-header well">
        <h2><i class="glyphicon glyphicon-user"></i> Categories Listing</h2>

        <div class="box-icon">
            <a class="btn btn-setting btn-round btn-default" href="#"><i class="glyphicon glyphicon-cog"></i></a>
            <a class="btn btn-minimize btn-round btn-default" href="#"><i class="glyphicon glyphicon-chevron-up"></i></a>
            <a class="btn btn-close btn-round btn-default" href="#"><i class="glyphicon glyphicon-remove"></i></a>
        </div>
    </div>
    <div class="box-content">
    <div role="grid" class="dataTables_wrapper" id="DataTables_Table_0_wrapper"><div class="row"><div class="col-md-6"><div id="DataTables_Table_0_length" class="dataTables_length"><label><select name="DataTables_Table_0_length" size="1" aria-controls="DataTables_Table_0"><option value="10" selected="selected">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> records per page</label></div></div><div class="col-md-6"><div class="dataTables_filter" id="DataTables_Table_0_filter"><label>Search: <input type="text" aria-controls="DataTables_Table_0"></label></div></div></div><table class="table table-striped table-bordered bootstrap-datatable datatable responsive dataTable" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info">
    <thead>
    <tr role="row">
        <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 204px;" aria-sort="ascending" aria-label="Username: activate to sort column descending">Username</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 389px;" aria-label="Actions: activate to sort column ascending">Email</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: auto;" aria-label="Actions: activate to sort column ascending">Email Verified</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: auto;" aria-label="Actions: activate to sort column ascending">Active</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: auto;" aria-label="Actions: activate to sort column ascending">created</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 389px;" aria-label="Actions: activate to sort column ascending">Actions</th>
    </tr>
    </thead>
 
	
			<?php
			$i = 0;
			foreach ($users as $user):
				$class = null;
				if ($i++ % 2 == 0) {
					$class = ' class="even"';
                                }else{
                                  $class = ' class="odd"';  
                                }
				
			?>
			<tr<?php echo $class;?>>
				<td class="center">
					<?php echo $user[$model]['username']; ?>
				</td>
				<td class="center">
					<?php echo $user[$model]['email']; ?>
				</td>
				<td class="center">
					<?php echo $user[$model]['email_verified'] == 1 ? __d('users', 'Yes') : __d('users', 'No'); ?>
				</td>
				<td class="center">
					<?php echo $user[$model]['active'] == 1 ? __d('users', 'Yes') : __d('users', 'No'); ?>
				</td>
				<td class="center">
					<?php echo $user[$model]['created']; ?>
				</td>
				<td class="center">
                                    
                                    <a href="<?php echo Configure::read('ROOT_DIRECTORY')?>/users/admin_view/<?php echo $user[$model]['id'];?>" class="btn btn-success">
                <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                View
            </a>
            <a href="<?php echo Configure::read('ROOT_DIRECTORY')?>/users/admin_edit/<?php echo $user[$model]['id'];?>" class="btn btn-info">
                <i class="glyphicon glyphicon-edit icon-white"></i>
                Edit
            </a>
            <a href="<?php echo Configure::read('ROOT_DIRECTORY')?>/users/admin_delete/<?php echo $user[$model]['id'];?>" class="btn btn-danger">
                <i class="glyphicon glyphicon-trash icon-white"></i>
                Delete
            </a>
                                    </td>
			</tr>
		<?php endforeach; ?>
    </tbody></table><div class="row"><div class="col-md-12"><div class="dataTables_info" id="DataTables_Table_0_info">Showing 1 to 10 of 32 entries</div></div><div class="col-md-12 center-block"><div class="dataTables_paginate paging_bootstrap pagination"><ul class="pagination"><li class="prev disabled"><a href="#">← Previous</a></li><li class="active"><a href="#">1</a></li><li><a href="#">2</a></li><li><a href="#">3</a></li><li><a href="#">4</a></li><li class="next"><a href="#">Next → </a></li></ul></div></div></div></div>
    </div>
    </div>
    </div>
    <!--/span-->

    </div>
