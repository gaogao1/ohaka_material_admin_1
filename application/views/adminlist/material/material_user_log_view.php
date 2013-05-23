<form method="POST" name="material_user" >
<?php
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
<?php //echo 'contact_id'."[$i]"."[name]"; ?>
<?php 
}
?>

		<input type="hidden" name="<?php echo 'new_post_data'."[0]"."[log_id]"; ?>"  value="" />
	氏名:<input type="text" name="<?php echo 'new_post_data'."[0]"."[log_name]"; ?>"  value="" />
	日付と時刻（受付日）:<input type="text" name="<?php echo 'new_post_data'."[0]"."[log_text]"; ?>" value="" /><br /><br />


<input type="submit" value="実行" name="submit">					
</form>	





