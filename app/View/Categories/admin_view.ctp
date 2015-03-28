

 <div class="row">
    <div class="box col-md-12">
    <div class="box-inner">
    <div data-original-title="" class="box-header well">
        <h2><i class="glyphicon glyphicon-user"></i> <?php echo $category['Category']['name']; ?> >Related Subcategories</h2>

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
    <tr role="row"><th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 204px;" aria-sort="ascending" aria-label="Username: activate to sort column descending"><?php echo __('Id'); ?></th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 188px;" aria-label="Date registered: activate to sort column ascending"><?php echo __('Category Id'); ?></th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 93px;" aria-label="Role: activate to sort column ascending"><?php echo __('Subcategory Name'); ?></th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 104px;" aria-label="Status: activate to sort column ascending"><?php echo __('Subcategory Url'); ?></th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 389px;" aria-label="Actions: activate to sort column ascending">Actions</th></tr>
    </thead>
    
    <tbody role="alert" aria-live="polite" aria-relevant="all">
      <?php foreach ($category['Subcategory'] as $subcategory): ?>
        
        
        <tr class="odd">
        <td class="sorting_1"><?php echo $subcategory['id']; ?></td>
        <td class="sorting_1"><?php echo $subcategory['category_id']; ?></td>
        <td class="center "><?php echo $subcategory['subcategory_name']; ?></td>
        <td class="center "><?php echo $subcategory['subcategory_url']; ?></td>

        <td class="center ">
            <a href="<?php echo Configure::read('ROOT_DIRECTORY')?>/subcategories/admin_view/<?php echo $subcategory['id'];?>" class="btn btn-success">
                <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                View
            </a>
            <a href="<?php echo Configure::read('ROOT_DIRECTORY')?>/subcategories/admin_edit/<?php echo $subcategory['id'];?>" class="btn btn-info">
                <i class="glyphicon glyphicon-edit icon-white"></i>
                Edit
            </a>
            <a href="<?php echo Configure::read('ROOT_DIRECTORY')?>/subcategories/admin_delete/<?php echo $subcategory['id'];?>" class="btn btn-danger">
                <i class="glyphicon glyphicon-trash icon-white"></i>
                Delete
            </a>
        </td>
    </tr>
    <?php endforeach?>
    </tbody></table>
        <div class="row">
            <div class="col-md-12"><div class="dataTables_info" id="DataTables_Table_0_info">Showing 1 to 10 of 32 entries</div></div><div class="col-md-12 center-block"><div class="dataTables_paginate paging_bootstrap pagination"><ul class="pagination"><li class="prev disabled"><a href="#">← Previous</a></li><li class="active"><a href="#">1</a></li><li><a href="#">2</a></li><li><a href="#">3</a></li><li><a href="#">4</a></li><li class="next"><a href="#">Next → </a></li></ul></div></div></div></div>

           


    </div>
    </div>
    </div>
    <!--/span-->

    </div>
	
	
  