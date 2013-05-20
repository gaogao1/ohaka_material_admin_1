<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<link href="/css/bootstrap.css" rel="stylesheet">
		<script src="/js/bootstrap.js"></script>
		<link href="/css/common.css" rel="stylesheet">
		<!-- jQuery -->
		<script type="text/javascript" src="/js/jquery-1.6.4.min.js"></script>
	
		<!-- ui tabs.js -->
		<script type="text/javascript" src="/js/tab/ui.core.js"></script>
		<script type="text/javascript" src="/js/tab/ui.tabs.js"></script>
		<link href="/css/tab/ui.tabs.css" rel="stylesheet" type="text/css" />
		<script type="text/javascript">
		$(function() {
			$('#ui-tab > ul').tabs({ fx: { opacity: 'toggle', duration: 'fast'  } });
		});
		</script>

	</head>
	<body>
		<?php $this->load->view('adminlist/common/header'); ?>
		<h3>資料請求管理</h3>
		<!-- #wrapper -->
	<div id="wrapper">
		
		<div class="span3">
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
            	<?php
            	for($i=0;$i<count($stone);$i++){
            	?>
              <li><a href="#"><?php print($stone[$i]["stone_name"]);?></a></li>
             	<?php
				}
             	?>
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
        
        <!-- .right -->
	<div class="right">
		<h2>月間資料請求</h2>
		<h3>
			<div id="ui-tab">
	<ul>
		<li><a href="#fragment-1"><span>6月</span></a></li>
		<li><a href="#fragment-2"><span>7月</span></a></li>
		<li><a href="#fragment-3"><span>8月</span></a></li>
	</ul>
	
	<div id="fragment-1">
		<table>
			<tr>
				<th><span>※</span>資料請求先</th>
				<th><span>※</span>氏名</th>
				<th><span>※</span>住所</th>
				<th><span>※</span>電話番号</th>
				<th><span>※</span>アドレス</th>
				<th><span>※</span>完成時期</th>
			</tr>
			
			
		</table>
	</div>
	
	<div id="fragment-2">
		<p>タブ2の内容</p>
	</div>
	
	<div id="fragment-3">
		<p>タブ3の内容</p>
	</div>

</div> 
		</h3>
		
	</div>
	<!-- /.right -->
	
       </div>
       
	</body>