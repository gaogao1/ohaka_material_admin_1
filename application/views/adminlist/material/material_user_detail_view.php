<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Customer Detail Page</title>
	<link rel="stylesheet" href="/css/com/bootstrap.min.css">
	<link rel="stylesheet" href="/css/com/bootstrap-responsive.min.css">
	<link rel="stylesheet" href="/css/com/stylesheet.css">
	<script src="/js/com/jquery-1.9.1.min.js"></script>	
	<!--[if lt IE 8]>
		<link rel="stylesheet" href="css/ie.css">
		<script src="js/ie.js"></script>
	<![endif]-->
	<script type="text/javascript">
function back(){
    history.go(-1);
}
</script>
</head>
<body>
	<div class="navbar">
		<div class="navbar-inner">
			<ul class="nav pull-right">
				<li class="dropdown">
					<a href="#" id="dropdown" role="button" class="dropdown-toggle" data-toggle="dropdown">
						<i class="icon-user"></i>
							Administrator
						<i class=" icon-arrow-down"></i>
					</a>
					<ul class="dropdown-menu">
						<li><a tab-index="-1" href="#">My Account</a></li>
						<li class="divider"></li>
						<li><a tab-index="-1" href="#">Logout</a></li>
					</ul>
				</li>
			</ul>
			<a href="../index.php/com/top" class="brand"></a>
		</div>
	</div>
	<div class="content content-detail">
		<div class="header">
			<h1 class="page-title">お客様情報</h1>
		</div>
		<!-- end header -->
		<div class="container-fluid">
			<div class="row-fluid">
				<div class="customer-list">
					<div class="customer-body">
						<table class="table-customer table table-bordered">
							<tbody>
								<form method="post" action="detail_fin?id=<?php echo $detail[0]["contact_id"]; ?>" >
									<tr>
										<td class="td-right">＊お名前</td>
                                        <td>
											<input type="text" class="td-right" name="contact_name" size="80" value="<?php echo $detail[0]["contact_id"]; ?>">
										</td>
									</tr>
									<tr>
										<td class="td-right">＊ふりがな</td>
                                                                        <td><input type="text" class="td-right" name="contact_kana" size="80" value="<?php echo $detail[0]["contact_id"]; ?>"></td>

                                                                </tr>
								<tr>
									<td class="td-right">＊郵便番号</td>
								        <td><input type="text" class="td-right" name="contact_ad_id" size="80" value="<?php echo $detail[0]["contact_id"]; ?>"></td>

                                                                </tr>
								<tr>
									<td class="td-right">＊ご住所</td>
								        <td><input type="text" class="td-right" name="contact_address" size="80" value="<?php echo $detail[0]["contact_id"]; ?>"></td>

                                                                </tr>
								<tr>
									<td class="td-right">＊電話番号</td>
								         <td><input type="text" class="td-right" name="contact_tel" size="80" value="<?php echo $detail[0]["contact_id"]; ?>"></td>

                                                                </tr>
								<tr>
									<td class="td-right">メールアドレス</td>
								         <td><input type="text" class="td-right" name="contact_mail" size="80" value="<?php echo $detail[0]["contact_id"]; ?>"></td>

                                                                </tr>	
								<tr>
									<td class="td-right">ご希望の完成時期</td>
								         <td>
                                                                            <select name="contact_fin">
                                                                        　　<option value="<?php echo $detail[0]["contact_id"]; ?>>" selected><?php echo $detail[0]["contact_id"]; ?></option>
                                                                            <option value="すぐにでも">すぐにでも</option>
                                                                          <option value="3ヶ月以内">3ヶ月以内</option>
                                                                         　<option value="6ヶ月以内">6ヶ月以内</option>
                                                                           <option value="1年以内">1年以内</option>
                                                                         　<option value="未定">未定</option>
                                                                            </select>                     
                                                                </td>             

                                                                </tr>	
								<tr>
									<td class="td-right">予算の上限</td>
                                                                     
								        <td>
                                                                            <select name="contact_amount_min">
                                                                        　　<option value="<?php echo $detail[0]["contact_id"]; ?>" selected><?php echo $detail[0]["contact_id"]; ?></option>
                                                                            <option value="下限なし">下限なし</option>
                                                                          <option value="10万円">10万円</option>
                                                                         　<option value="20万円">20万円</option>
                                                                           <option value="30万円">30万円</option>
                                                                         　<option value="40万円">40万円</option>
                                                                            <option value="50万円">50万円</option>
                                                                         　<option value="75万円">75万円</option>
                                                                           <option value="100万円">100万円</option>
                                                                         　<option value="150万円">150万円</option>
                                                                           <option value="200万円">200万円</option>
                                                                         　<option value="250万円">250万円</option>
                                                                            </select>  
                                                                            
                                                                            ～
                                                                             <select name="contact_amount_max">                                                                               
                                                                        　　<option value="<?php echo $detail[0]["contact_id"]; ?>" selected><?php echo $detail[0]["contact_id"]; ?></option>
                                                                            <option value="上限なし">上限なし</option>  
                                                                          <option value="10万円">10万円</option>
                                                                         　<option value="20万円">20万円</option>
                                                                           <option value="30万円">30万円</option>
                                                                         　<option value="40万円">40万円</option>
                                                                            <option value="50万円">50万円</option>
                                                                         　<option value="75万円">75万円</option>
                                                                           <option value="100万円">100万円</option>
                                                                         　<option value="150万円">150万円</option>
                                                                           <option value="200万円">200万円</option>
                                                                         　<option value="250万円">250万円</option>
                                                                            </select>                                                                       
                                                                        </td>
                                                                    
                                                                </tr>									
								<tr>
									<td class="td-right">その他・ご意見</td>
                                                                        <td><textarea  name="contact_detail" class="other-new"><?php echo $detail[0]["contact_id"]; ?></textarea></td>
								</tr>								
							</tbody>
						</table>
						<p>
							<input type="submit" class="button btn-backr" onclick="back()">
                                                        <input type="submit" class="button btn-update">
						</p>
					</div>
				</div>	
			</div>
		</div>
		<!-- end main content -->
		<div class="footer">
			<div class="container-fluid">
				<hr>
				<p class="copyright">Copyright &copy; 2013 givery.</p>
			</div>
		</div>
	</div>
	<!-- end content -->
	<script src="/ohaka/js/jquery-1.9.1.min.js"></script>
	<script src="/ohaka/js/bootstrap.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('input.button').hover(function() {
				$(this).toggleClass('btn-back-hover'); // ie6
			});
		});
	</script>
</body>
</html>


<form method="POST" name="material_user" >
<?php

?>
	ID:<?php echo $detail[0]["contact_id"]; ?>
	氏名:<input type="text" name="contact_name"  value="<?php echo $detail[0]["contact_name"]; ?>" />
	日付と時刻（受付日）:<input type="text" name="contact_date" value="<?php echo $detail[0]["contact_date"]; ?>" /><br /></br>	
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

?>
<input type="submit" value="実行" name="submit">					
</form>	


