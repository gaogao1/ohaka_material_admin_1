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
	<style>
	.user_detail tr{
		height:50px;
	}
	</style>

	<script src="../user_guide/js/vendor/modernizr-2.6.2.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="header">
			<h1 class="branding"><a href="material_user">お墓探しナビ	管理画面</a></h1>
			<div class="navbar">
				<div class="row">
				</div>	
			</div>
		</div>
		<!-- end header -->
<form method="POST" name="material_user" >		
		<div class="content">
			<div class="row">
				<div id="month1" class="tbl_content">
					<table class="tbl_main user_detail">
						<tr>
							<input type="hidden" name="contact_id" value="<?php echo $detail[0]["contact_id"]; ?>">
							<th>名前</th>
							<td><input type="text" name="contact_name" value="<?php echo $detail[0]["contact_name"]; ?>" /></td>						
						</tr>
						<tr>
							<th>郵便番号</th>
							<td><input type="text" name="contact_ad_id" value="<?php echo $detail[0]["contact_ad_id"]; ?>" /></td>
						</tr>
						<tr>
							<th>住所</th>
							<td><input type="text" name="contact_address" value="<?php echo $detail[0]["contact_address"]; ?>" /></td>
						</tr>
						<tr>
							<th>電話番号</th>
							<td><input type="text" name="contact_tel" value="<?php echo $detail[0]["contact_tel"]; ?>" /></td>
						</tr>
						<tr>
							<th>メールアドレス</th>
							<td><input type="text" name="contact_mail" value="<?php echo $detail[0]["contact_mail"]; ?>" /></td>
						</tr>
						<tr>
							<th>年齢</th>
							<td><input type="text" name="contact_age" value="<?php echo $detail[0]["contact_age"]; ?>" /></td>
						</tr>
						<tr>
							<th>予算下限-上限</th>
							<td>
								<select name="contact_amount_min" id="">
									<option value="<?php echo $detail[0]["contact_amount_min"]; ?>" selected><?php echo $detail[0]["contact_amount_min"]; ?></option>								
									<option value="10">10</option>
									<option value="20">20</option>
									<option value="30">30</option>
									<option value="40">40</option>
									<option value="50">50</option>
									<option value="75">75</option>
									<option value="100">100</option>
									<option value="150">150</option>
									<option value="200">200</option>
									<option value="250">250</option>		
								</select>
								-
								<select name="contact_amount_max" id="">
									<option value="<?php echo $detail[0]["contact_amount_max"]; ?>" selected><?php echo $detail[0]["contact_amount_max"]; ?></option>									
									<option value="20">20</option>
									<option value="30">30</option>
									<option value="40">40</option>
									<option value="50">50</option>
									<option value="75">75</option>
									<option value="100">100</option>
									<option value="150">150</option>
									<option value="200">200</option>
									<option value="250">250</option>									
									<option value="300">300</option>									
									
								</select>
								万円
							</td>
						</tr>
						<tr>
							<th>完成時期</th>
								<td>
									<select name="contact_fin" id="">
									<option value="<?php echo $detail[0]["contact_fin"]; ?>" selected><?php echo $detail[0]["contact_fin"]; ?></option>
									
									  <option value="3ヶ月以内">3ヶ月以内</option>
									  <option value="6ヶ月以内">6ヶ月以内</option>
									  <option value="1年以内">1年以内</option>
									<option value="未定">未定</option>								  
									</select> 
								</td>
						</tr>
						<tr>
							<th>接触方法</th>
							<td>
								<select name="contact_engin" id="">
									<option value="<?php echo $detail[0]["contact_engin"]; ?>" selected><?php echo $detail[0]["contact_engin"]; ?></option>										
									<option value="コール">コール</option>
									<option value="メール">メール</option>
								</select>
							</td>
						</tr>
						<tr>
							<th>PC or SP</th>
							<td>
								<select name="contact_device" id="">
									<option value="<?php echo $detail[0]["contact_device"]; ?>" selected><?php echo $detail[0]["contact_device"]; ?></option>											
									<option value="pc">PC</option>
									<option value="sp">SP</option>
								</select>
							</td>
						</tr>
						<tr>
							<th>検索エンジン</th>
							<td>
								<select name="contact_search_engin" id="">	
									<option value="<?php echo $detail[0]["contact_search_engin"]; ?>" selected><?php echo $detail[0]["contact_search_engin"]; ?></option>							
									<option value="google">google</option>
									<option value="yahoo">yahoo</option>
									<option value="bing">bing</option>
								</select>
							</td>
						</tr>
						<tr>
							<th>検索KW</th>
							<td>
								<input type="text" name="contact_search_key" value="<?php echo $detail[0]["contact_search_key"]; ?>" />
							</td>
						</tr>
						<tr>
							<th>お客様の特徴</th>
							<td><textarea name="contact_chara" ><?php echo $detail[0]["contact_chara"]; ?></textarea></td>
						</tr>
						<tr>
							<th>資料請求意見</th>
							<td><textarea  name="contact_detail"><?php echo $detail[0]["contact_detail"]; ?></textarea></td>
						</tr>
					</table>
					<div class="event_tbl">
						<div class="btn_group">
							<input class="btn update" type="submit" value="更新"  name="submit">
						</div>
					</div>
				</div>
			</div>
		</div>
</form>	
		
		<!-- end content -->
	</div>
	<!-- end container -->
	<script src="../user_guide/js/vendor/jquery-1.9.1.min.js"></script>
    <script src="../user_guide/js/main.js"></script>

</body>
</html>


