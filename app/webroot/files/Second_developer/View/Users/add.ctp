<style>
    .red{
        color:red;
    }
</style>
<div class="endusers form">
    
<?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend><?php echo __('Add User'); ?></legend>
        <?php echo $this->Form->input('username',array('class'=>"Userfield","rel"=>"username")); ?>
        <span id="u_UserUsername" class="red"> </span>
        <?php echo $this->Form->input('slug');
        echo $this->Form->input('password');
         echo $this->Form->input('password_token');
         echo $this->Form->input('email',array('class'=>"Userfield","rel"=>"email"));?>
        <span id="u_UserEmail" class="red"> </span>
        <?php echo $this->Form->input('email_verified');
     
        echo $this->Form->input('email_token_expires');
        echo $this->Form->input('tos');
        echo $this->Form->input('active');
        echo $this->Form->input('last_login');
       
        
        echo $this->Form->input('last_action');
        echo $this->Form->input('is_admin');
        echo $this->Form->input('role', array(
            'options' => array('admin' => 'Admin', 'author' => 'Author')
        ));
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<script src="/webchat/js/jquery-1.11.1.min.js"></script>
<script>
$(document).ready(function(){
$('.Userfield').blur (function() {
 
 var id=$(this).attr('id');
 var rel=$(this).attr('rel');
 
 var uname=$("#"+id).val();
  $.ajax({
      url :"/classified/Enduser/unique/"+rel+"/"+uname+"/Enduser",
      type: 'POST',
      success : function(response){
        $('#u_'+id).html(response);
        
      }
  })
  });
  $('.state').change (function() {
  var city=$(".state").val();
   $.ajax({
      url :"/classified/Endusers/getcity/"+city,
      type: 'POST',
      success : function(response){
         
        $('#city').html(response);
        
      }
  })
  })
  $('.country').change (function() {
  var city=$(".state").val();
   $.ajax({
      url :"/classified/Endusers/getcity/"+city,
      type: 'POST',
      success : function(response){
         
        $('#city').html(response);
        
      }
  })
  })
  });

</script>
<!--540107070
money@1993-->