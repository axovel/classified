  <script src="https://mainlinemunchies.com/js/jquery-1.8.2.min.js" type="text/javascript"></script>  
    <script type="text/javascript" src="https://mainlinemunchies.com/js/fancybox_new/jquery.mousewheel-3.0.4.pack.js"></script>   
<script type="text/javascript" src="https://mainlinemunchies.com/js/fancybox_new/jquery.fancybox-1.3.4.js"></script>  
<link rel="stylesheet" type="text/css" href="https://mainlinemunchies.com/js/fancybox_new/jquery.fancybox-1.3.4.css" />
<script>
    $("document").ready(function(){
        $("#adSearch").click(function(){
             window.location.href="<?php echo Configure::read('ROOT_DIRECTORY')?>/Searchers/searcher/q:*"+$("#searchWindow").val()+"*"; 
           }); 
            $(".emp").fancybox({
                'width': '60% !imprtant',
                'height': '60%',  
                onComplete: function(){  
              
                   }              
             }); 
        });
</script>
