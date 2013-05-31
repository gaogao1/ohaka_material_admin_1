<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	<meta charset="UTF-8">
	<title>Ohaka Admin</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../user_guide/css/stylesheet.css">
	<script src="/user_guide/js/vendor/modernizr-2.6.2.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="header">
			<h1 class="branding"><a href="../admin/material_user">お墓探しナビ	管理画面</a></h1>
			<div class="navbar">
				<div class="row">
				</div>	
			</div>
		</div>
		<!-- end header -->
		<div class="content">
		
		<form method="POST" name="material_user" >	
			<div class="row">
				<div id="month1" class="tbl_content">
					<div class="event_tbl">
						<div class="btn_group">
							<input class="btn update"  type="submit" value="更新">								
						</div>
					</div>
				</div>
				<div class="form_add">
					<h3>中村様</h3>
		
<?php
if($log != null){
	for($i=0;$i<count($log);$i++){
?>						
						<table class="tbl_main">
						<tr>
							<th colspan="2">進捗<?php echo $i ?></th>
						</tr>
						<input type="hidden" name="<?php echo 'post_data'."[$i]"."[log_id]"; ?>"  value="<?php echo $log[$i]["log_id"]; ?>" />					
							<tr>
								<th>発信者</th>
								<td><input type="text" name="<?php echo 'post_data'."[$i]"."[log_name]"; ?>"  value="<?php echo $log[$i]["log_name"]; ?>" /></td>
							</tr>
							<tr>
								<th>フェーズ</th>
								<td><input type="text" name="<?php echo 'post_data'."[$i]"."[log_fase]"; ?>"  value="<?php echo $log[$i]["log_fase"]; ?>" /></td>
							</tr>
							<tr>
								<th>備考</th>
								<td><textarea name="<?php echo 'post_data'."[$i]"."[log_text]"; ?>"><?php echo $log[$i]["log_text"]; ?></textarea></td>
							</tr>							
						</table>
<?php 
	}
}

$user_id= $_SERVER['REQUEST_URI'];
$user_id = explode("=",$user_id);
?>							

						<table class="tbl_main">
						<tr>
							<th colspan="2">新規登録</th>
						</tr>
						<input type="hidden" name="<?php echo 'new_post_data'."[0]"."[log_contact_id]"; ?>"  value="<?php echo $user_id[1]; ?>" />						
							<tr>
								<th>発信者</th>
								<td><input type="text" name="<?php echo 'new_post_data'."[0]"."[log_name]"; ?>"  value="" /></td>
							</tr>
							<tr>
								<th>フェーズ</th>
								<td><input type="text" name="<?php echo 'new_post_data'."[0]"."[log_fase]"; ?>"  value="" /></td>
							</tr>
							<tr>
								<th>備考</th>
								<td><textarea name="<?php echo 'new_post_data'."[0]"."[log_text]"; ?>"></textarea></td>
							</tr>							
						</table>				
					</form>
					<!--
					<div class="event_tbl">
						<div class="btn_group">
							<input class="btn signup" type="button" value="追加">
						</div>
					-->
					</div>
				</div>
				<!-- form add -->
			</div>
		</div>
		<!-- end content -->
	</div>
	<!-- end container -->

	<script src="./user_guide/js/vendor/jquery-1.9.1.min.js"></script>
    <script src="./user_guide/js/main.js"></script>
</body>
</html>

		
			

