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
			<h1 class="branding"><a href="">お墓探しナビ	管理画面</a></h1>
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
							<input type="hidden" name="contact_id" value="">
							<th>名前</th>
							<td><input type="text" name="contact_name" value="" /></td>						
						</tr>
						<tr>
							<th>郵便番号</th>
							<td><input type="text" name="contact_ad_id" value="" /></td>
						</tr>
						<tr>
							<th>住所</th>
							<td><input type="text" name="contact_address" value="" /></td>
						</tr>
						<tr>
							<th>電話番号</th>
							<td><input type="text" name="contact_tel" value="" /></td>
						</tr>
						<tr>
							<th>メールアドレス</th>
							<td><input type="text" name="contact_mail" value="" /></td>
						</tr>
						<tr>
							<th>年齢</th>
							<td><input type="text" name="contact_age" value="" /></td>
						</tr>
						<tr>
							<th>予算下限-上限</th>
							<td>
								<select name="contact_amount_min" id="">							
									<option value="10">10</option>
									<option value="20">20</option>
								</select>
								-
								<select name="contact_amount_max" id="">							
									<option value="10">10</option>
									<option value="20">20</option>
								</select>
								万円
							</td>
						</tr>
						<tr>
							<th>完成時期</th>
								<td>
									<select name="contact_fin" id="">								
									  <option value="2013">2013</option>
									  <option value="2014">2014</option>
									</select> 
								</td>
						</tr>
						<tr>
							<th>接触方法</th>
							<td>
								<select name="contact_engin" id="">									
									<option value="コール">コール</option>
									<option value="メール">メール</option>
								</select>
							</td>
						</tr>
						<tr>
							<th>PC or SP</th>
							<td>
								<select name="contact_device" id="">									
									<option value="pc">PC</option>
									<option value="sp">SP</option>
								</select>
							</td>
						</tr>
						<tr>
							<th>検索エンジン</th>
							<td>
								<select name="contact_search_engin" id="">							
									<option value="google">google</option>
									<option value="yahoo">yahoo</option>
									<option value="bing">bing</option>
								</select>
							</td>
						</tr>
						<tr>
							<th>検索KW</th>
							<td>
								<input type="text" name="contact_search_key" value="" />
							</td>
						</tr>
						<tr>
							<th>お客様の特徴</th>
							<td><textarea placeholder="contact_char"  name="contact_char" ></textarea></td>
						</tr>
						<tr>
							<th>資料請求意見</th>
							<td><textarea placeholder="contact_detail"  name="contact_detail"></textarea></td>
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


