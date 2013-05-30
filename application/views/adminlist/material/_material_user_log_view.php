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
	<script src="../user_guide/js/vendor/modernizr-2.6.2.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="header">
			<h1 class="branding"><a href="">お墓探しナビ	管理画面</a></h1>
			<div class="navbar">
				<div class="row">
				</div>	
			</div>
		</div>
		<!-- end header -->
		<div class="content">
			<div class="row">
				<div id="month1" class="tbl_content">
					<div class="event_tbl">
						<div class="btn_group">
							<input class="btn update"  type="submit" value="更新" name="submit">								
						</div>
					</div>
				</div>
				<div class="form_add">
					<h3>中村様</h3>
					<form method="POST" class="form_add"  name="material_user" >				
<?php
if($log != null){
for($i=0;$i<count($log);$i++){
?>						
						<table class="tbl_main">
						<tr>
							<th colspan="2">進捗</th>
						</tr>
							<tr>
								<th>日付</th>
								<td>
									<select>
									  <option value="2013">2013</option>
									  <option value="2014">2014</option>
									</select> 
									<select>
									  <option value="1">1</option>
									  <option value="2">2</option>
									  <option value="3">3</option>
									  <option value="4">4</option>
									  <option value="5">5</option>
									  <option value="6">6</option>
									  <option value="7">7</option>
									  <option value="8">8</option>
									  <option value="9">9</option>
									  <option value="10">10</option>
									  <option value="11">11</option>
									  <option value="12">12</option>
									</select>
									<select>
									  <option value="1">1</option>
									  <option value="2">2</option>
									  <option value="3">3</option>
									  <option value="4">4</option>
									  <option value="5">5</option>
									  <option value="6">6</option>
									  <option value="7">7</option>
									  <option value="8">8</option>
									  <option value="9">9</option>
									  <option value="10">10</option>
									  <option value="11">11</option>
									  <option value="12">12</option>
									  <option value="13">13</option>
									  <option value="14">14</option>
									  <option value="15">15</option>
									  <option value="16">16</option>
									  <option value="17">17</option>
									  <option value="18">18</option>
									  <option value="19">19</option>
									  <option value="20">20</option>
									  <option value="21">21</option>
									  <option value="22">22</option>
									  <option value="23">23</option>
									  <option value="24">24</option>
									  <option value="25">25</option>
									  <option value="26">26</option>
									  <option value="27">27</option>
									  <option value="28">28</option>
									  <option value="29">29</option>
									  <option value="30">30</option>
									  <option value="31">31</option>
									</select> 
								</td>
							</tr>
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
								<td><textarea placeholder=""></textarea></td>
							</tr>							
						</table>
<?php 
}}

$user_id= $_SERVER['REQUEST_URI'];
$user_id = explode("=",$user_id);
?>							
						
						
					</form>
					<div class="event_tbl">
						<div class="btn_group">
							<input class="btn signup" type="button" value="追加">
						</div>
					</div>
				</div>
				<!-- form add -->
			</div>
		</div>
		<!-- end content -->
	</div>
	<!-- end container -->

	<script src="../user_guide/js/vendor/jquery-1.9.1.min.js"></script>
    <script src="../user_guide/js/main.js"></script>
</body>
</html>




<form method="POST" name="material_user" >
<?php
if($log != null){
for($i=0;$i<count($log);$i++){
?>
		<input type="hidden" name="<?php echo 'post_data'."[$i]"."[log_id]"; ?>"  value="<?php echo $log[$i]["log_id"]; ?>" />
	氏名:<input type="text" name="<?php echo 'post_data'."[$i]"."[log_name]"; ?>"  value="<?php echo $log[$i]["log_name"]; ?>" />
	日付と時刻（受付日）:<input type="text" name="<?php echo 'post_data'."[$i]"."[log_text]"; ?>" value="<?php echo $log[$i]["log_text"]; ?>" /><br /><br />
<!--
	経過日数:<input type="text" name="keika_day" /><br />	</br>
	石材店名	請求霊園一覧:<input type="text" name="contact_reien" /><br /></br>	
	ご紹介先霊園・墓地情報:<input type="text" name="text1" /><br /></br>
	特記事項:<input type="text" name="contact_detail" /><br /></br>
	担当:<input type="text" name="text1" /><br /></br>
	手紙:<SELECT name ="ar">
			<OPTION value="0"> - </OPTION>
			<OPTION value="1"> ▽出す </OPTION>
			<OPTION value="2"> ▽出さない </OPTION>
			<OPTION value="3"> ▽済 </OPTION>
			</SELECT><br /></br>
	追客状況:<a href="">つい客状況</a><br /></br>
	進捗:<SELECT name ="car">
			<OPTION value="0"> - </OPTION>
			<OPTION value="1"> ▽交渉中 </OPTION>
			<OPTION value="2"> ▽見積もり </OPTION>
			<OPTION value="3"> ▽見学済 </OPTION>
			</SELECT><br /></br>	
			-->
<?php 
}}

$user_id= $_SERVER['REQUEST_URI'];
$user_id = explode("=",$user_id);
?>			
			
		<input type="hidden" name="<?php echo 'new_post_data'."[0]"."[log_contact_id]"; ?>"  value="<?php echo $user_id[1]; ?>" />
	氏名:<input type="text" name="<?php echo 'new_post_data'."[0]"."[log_name]"; ?>"  value="" />
	日付と時刻（受付日）:<input type="text" name="<?php echo 'new_post_data'."[0]"."[log_text]"; ?>" value="aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa" /><br /><br />

