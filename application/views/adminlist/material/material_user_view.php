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



日付
<a href="?day=4">４日</a>
<a href="?day=3">３日</a>
<a href="?day=all">all</a>
<a href="?year=2012">2012年</a>

<form method="POST" name="material_user" >
		<div class="content">
			<div class="row">
				<div id="month1" class="tbl_content">
					<div class="event_tbl">
						<div class="date">
							[<span>2013</span>年<span class="month_act">5月</span>度] 資料請求者一覧
						</div>
						<div class="btn_group">
							<input class="btn update" type="submit" value="更新" name="submit">		
							<input class="btn signup" type="button" value="登録">
						</div>
					</div>
<?php
for($i=0;$i<count($material_user);$i++){
?>					
					
					<table class="tbl_main">
						<tr>
							<th rowspan="2">No</th>
							<th rowspan="2">氏 名</th>
							<th rowspan="2">受付日時</th>
							<th rowspan="2">経過</th>
							<th colspan="2">紹介先霊園・墓地</th>
							<th rowspan="2">特記事項</th>
							<th rowspan="2">担当</th>
							<th rowspan="2">手紙</th>
							<th rowspan="2">追客</th>
							<th rowspan="2">進捗</th>
						</tr>
						<tr>
							<th>石材店</th>
							<th>請求霊園</th>
						</tr>
						<tr>
							<td>10</td>
							<td><a href="/admin/material_user_detail?id=<?php echo $material_user[$i]["contact_id"]; ?>"><?php echo $material_user[$i]["contact_name"]; ?></a></td>
							<td><input type="text" name="<?php echo 'post_data'."[$i]"."[contact_date]"; ?>" value="<?php echo $material_user[$i]["contact_date"]; ?>" /></td>
							<td>1日</td>
							<td>有限会社メモリアルサービス</td>
							<td>メモリアルパーククラウド御殿山</td>
							<td><textarea placeholder="メモメモメモメモメモメモメモメモメモメモメモメモメモメモメモメモメモメモ" ></textarea></td>
							<td><p contenteditable="true">菊池</p></td>
							<td>
								<select name="" id="">
									<option value="" selected="selected">出さない</option>
									<option value="">2012</option>
									<option value="">2011</option>
									<option value="">2010</option>
								</select>
							</td>
							<td><a href="/admin/material_user_log?id=<?php echo $material_user[$i]["contact_id"]; ?>">追客状況</a></td>
							<td>
								<select name="" id="">
									<option value="" selected="selected">紹介先探し中</option>
									<option value="">2012</option>
									<option value="">2011</option>
									<option value="">2010</option>
								</select>
							</td>
						</tr>
					</table>
<?php 
}
?>					
				</div>
			</div>
		</div>


			
</form>	

		<!-- end content -->
	<script src="js/vendor/jquery-1.9.1.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>						






