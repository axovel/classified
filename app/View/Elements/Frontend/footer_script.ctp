<script>
    $("document").ready(function(){
        alert("Hello");
           $("#adSearch").click(function(){
             window.location.href="/classified/classified/Searchers/searcher/q:*"+$("#searchWindow").val()+"*"; 
           }); 
            
        });
</script>
