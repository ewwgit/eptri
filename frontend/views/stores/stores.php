<?php
use yii\widgets\ListView;
/* @var $this yii\web\View */
$this->title = 'Stores';

?>
<?php $url = Yii::getAlias('@web'); ?>

<div class="container" style="margin-top:2em;" >
  <div class="sign">
    <h2>store Locator</h2>
  </div>
  <div class="gird_button">
    <div class="btn-group" style="margin-top:1em;"> <a href="#" id="grid" class="btn btn-default btn-sm" style="margin-right:10px; "> <span class="glyphicon glyphicon-th"></span>Grid</a> <a href="#" id="list" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-th-list"> </span>List</a> </div>
  </div>
  <div id="products" class="row list-group">
    
    <?php 
echo ListView::widget( [
		'dataProvider' => $dataProvider,
		'itemView' => '_storeslistview',
] );
?>   
  </div>
</div>

<style>
 .login-modal-header {
 	background: #8CC251;
  	color: #2c2b2c;
  }
  
 .login-modal-header .modal-title {
 	color: #2c2b2c;
 }
 .login-modal-header .close {
 	color: #000;
  }


</style>

<script>
$(document).ready(function() {
    $('#list').click(function(event){event.preventDefault();$('#products .item').addClass('list-group-item');});
    $('#grid').click(function(event){event.preventDefault();$('#products .item').removeClass('list-group-item');$('#products .item').addClass('grid-group-item');});
});
</script>

<script>$(document).ready(function(){
	
	//Check to see if the window is top if not then display button
	$(window).scroll(function(){
		if ($(this).scrollTop() > 100) {
			$('.scrollToTop').fadeIn();
		} else {
			$('.scrollToTop').fadeOut();
		}
	});
	
	//Click event to scroll to top
	$('.scrollToTop').click(function(){
		$('html, body').animate({scrollTop : 0},800);
		return false;
	});
	
});

</script>

<!-- <script src="js/bootstrap.min.js" type="text/javascript"></script> -->
<!-- <script src="js/jquery.min.js" type="text/javascript"></script> -->
<style>

/* .navbar { */
/* margin-bottom:0px !important; */
/* } */
</style>
