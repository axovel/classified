
<p><?php echo $this->Html->link("Add Users", array('action' => 'add')); ?></p>
<table>
    <tr>
        <th>Name</th>
        <th>Email Address</th>
        <th>Action</th>
       
    </tr>

<!-- Here's where we loop through our $posts array, printing out post info -->

<?php foreach ($users as $user):?>
    <tr>
        <td><?php echo $user['User']['username']?></td>
        <td><?php echo $user['User']['email']; ?></td>
       
          
        <td>
            <?php echo $this->Html->link('View',array('action' => 'view', $user['User']['id']));?>
        
            <?php echo $this->Html->link('Edit',array('action' => 'edit', $user['User']['id']));?>
        
           <?php $id= $user['User']['id'];
                echo $this->Form->postLink('Delete',array('action' => 'delete', $user['User']['id']),
                    array('confirm' => "Are you sure you want to delete # $id?",'class' => 'btn btn-danger')
                );?>
        </td>
    </tr>
<?php endforeach; ?>

</table>