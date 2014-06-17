<?php
    session_start();  
    $secretKey=md5(rand(100000,999999));  //1. Generate secretKey
    $_SESSION["secretKey"]=$secretKey;
?>
<!DOCTYPE html>
<script src="jquery_min.js" type="text/javascript">
</script>
<script type="text/javascript">
    display=function(){jQuery.ajax({async:false,url:"display.php?secretKey=<?php echo $secretKey ?>",success:function(result){document.write(result);}});}
    var url=document.location.hash;
    display(unescape(url));
</script>