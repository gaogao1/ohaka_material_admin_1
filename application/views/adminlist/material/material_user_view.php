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
<script type="text/javascript"><!-- 
function jumpSelect()
{
num_item=document.url.item.selectedIndex;
	if(num_item!=""||num_item!=null)
	{
	location.href=document.url.item.options[num_item].value;
	}
}
// -->
</script>




<body>
	<div class="container">
		<div class="header">
			<h1 class="branding"><a href="">お墓探しナビ	管理画面</a></h1>
			<div class="navbar">
				<div class="row">
					<div class="select_box">
					<form name="url">
						<select name="item" onchange="jumpSelect()">
							<option value="" selected="selected">2013</option>
							<option value="?year=2012">2012</option>
						</select>
					</form>
					</div>
					<!-- /end select box -->
					<div class="navigation">
						<ul class="menu">
							<li><a class="view" href="?day=1">1月</a></li>
							<li><a class="view" href="?day=2">2月</a></li>
							<li><a class="view" href="?day=3">3月</a></li>
							<li><a class="view" href="?day=4">4月</a></li>
							<li><a class="active" href="?day=5">5月</a></li>
							<li><a href="?day=6">6月</a></li>
							<li><a href="?day=7">7月</a></li>
							<li><a href="?day=8">8月</a></li>
							<li><a href="?day=9">9月</a></li>
							<li><a href="?day=10">10月</a></li>
							<li><a href="?day=11">11月</a></li>
							<li><a href="?day=12">12月</a></li>
						</ul>
					</div>
					<!-- end navigation -->
				</div>	
			</div>
		</div>

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
<?php
for($i=0;$i<count($material_user);$i++){
?>							
						<tr>
							<td><?php echo $i; ?></td>
							<input type="hidden" name="<?php echo 'post_data'."[$i]"."[contact_id]"; ?>" value="<?php echo $material_user[$i]["contact_id"]; ?>">
							<td><a href="/admin/material_user_detail?id=<?php echo $material_user[$i]["contact_id"]; ?>"><?php echo $material_user[$i]["contact_name"]; ?></a></td>
							<td><input type="text" name="<?php echo 'post_data'."[$i]"."[contact_date]"; ?>" value="<?php echo $material_user[$i]["contact_date"]; ?>" /></td>
							<td><?php echo $material_user[$i]["contact_date"]; ?></td>
							<td><input type="text" name="<?php echo 'post_data'."[$i]"."[contact_stone_name]"; ?>" value="<?php echo $material_user[$i]["contact_stone_name"]; ?>" /></td>
							<td><?php print_r($material_reien_name[$i][0]["ohaka_name"]); ?></td>
							<td><textarea placeholder="<?php echo $material_user[$i]["contact_other"]; ?>"  name="<?php echo 'post_data'."[$i]"."[contact_other]"; ?>" ></textarea></td>
							<td><input type="text" name="<?php echo 'post_data'."[$i]"."[contact_charge]"; ?>" value="<?php echo $material_user[$i]["contact_charge"]; ?>" /></td>							
							<td>
								<select name="<?php echo 'post_data'."[$i]"."[contact_letter]"; ?>" id="">
									<option value="<?php echo $material_user[$i]["contact_letter"]; ?>" selected="selected"><?php echo $material_user[$i]["contact_letter"]; ?></option>
									<option value="0">-</option>
									<option value="1">出す</option>
									<option value="2">出さない</option>
									<option value="3">済</option>
								</select>
							</td>
							<td><a href="/admin/material_user_log?id=<?php echo $material_user[$i]["contact_id"]; ?>">追客</a></td>
							<td>
								<select name="<?php echo 'post_data'."[$i]"."[contact_progress]"; ?>" id="">
									<option value="<?php echo $material_user[$i]["contact_progress"]; ?>" selected="selected"><?php echo $material_user[$i]["contact_progress"]; ?></option>
									<option value="0">-</option>
									<option value="1">交渉中</option>
									<option value="2">見積もり</option>
									<option value="3">見学済</option>
									<option value="4">見学予定</option>
									<option value="5">資料送付</option>
									<option value="6">紹介先探し中</option>
									<option value="7">長期検討</option>
									<option value="8">未接触</option>
								</select>
							</td>	
						</tr>
<?php 
}
?>				
					</table>
				</div>
			</div>
		</div>


			
</form>	

		<!-- end content -->
	<script src="js/vendor/jquery-1.9.1.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>						






