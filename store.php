<?php
include('header.php');

echo'

<div id="target" class="store-target" ></div>

<script>
$("#target").load("http://scratch.mit.edu/studios/138298/",function(){ 
$("body").find("#topnav").removeAttr("background-image");
$("#target").find("#topnav").css("display","none");
$("#target").find("#footer").css("display","none");
$("#target").find("#gallery").first().css("display","none");
});
</script>

';

include('footer.php');
?>