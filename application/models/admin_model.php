<?php
	class Admin_model extends CI_Model {			
	 function __construct(){
			//parent::Model();
			parent::__construct();
			//database.phpで定義したDBに接続する
			$this->load->database();
	}

		 function id_get_material_log($id){
		 	$query = $this->db->query('SELECT * FROM `material_log` WHERE log_contact_id = '.$id);
			$data = $query->result_array();
        	return $data;
		 }
		 
		 function logid_get_material_log($id){
		 	$query = $this->db->query('SELECT * FROM `material_log` WHERE log_id = '.$id);
			$data = $query->result_array();
        	return $data;
		 }		 

		 function all_get_material(){
		 	$query = $this->db->query('SELECT * FROM `material` LIMIT 0 , 5');
			$data = $query->result_array();
        	return $data;
		 }

		 function  date_get_material($year,$month){
		 	$query = $this->db->query('SELECT * FROM material WHERE (YEAR(contact_date) = '.$year.') And (MONTH(contact_date) = '.$month.')');
			$data = $query->result_array();
        	return $data;
		 }		 
		 
		 function id_get_material($id){
		     $query = $this->db->query('SELECT * FROM material WHERE contact_id = '.$id);
            $data = $query->result_array();
            return $data;
		 }		
				 
		 
		 

// ----------------------------------------------------以下既存コード
		
		function getComid_sum($id){
			$query = $this->db->query('SELECT ohaka_id,stone_id,ohaka_name,ohaka_img1,chatch_copy,ohaka_place,ohaka_station1,ohaka_amount FROM ohaka where ohaka_id = '.$id);
			$data = $query->result_array();
if( isset($data[0]) ){
//print_r($data);
        	return $data;
		}}
		
		
		 function getAdminWhere($field, $param) {
        	$this->db->where($field, $param);
        	$query = $this->db->get("admin");
        	// 結果セットを連想配列として返す
        	return $ruery->result_array();
		 }
		 
		  function csvFormat($str) {
                mb_internal_encoding("UTF-8");
        
                //改行コードをLFに変換する
                $str = mb_ereg_replace("\r\n", "\n", $str);
                $str = mb_ereg_replace("\r", "\n", $str);
                
                //ダブルクォーテーションで囲む
                $str = "\"{$str}\"";
                
                return $str;
            }
		 

		 
		 
		 
		 
		 function getMaterial($month){
		 	$query = $this->db->query('SELECT *,MONTH(contact_date) FROM material INNER JOIN stone on material.contact_stone = stone.stone_id INNER JOIN ohaka on material.contact_reien = ohaka.ohaka_id WHERE MONTH(contact_date) = '.$month);
			$data = $query->result_array();
        	return $data;
		 }
		 
		 function get_year_Material($year){
		 	$query = $this->db->query('SELECT *,YEAR(contact_date) FROM material INNER JOIN stone on material.contact_stone = stone.stone_id INNER JOIN ohaka on material.contact_reien = ohaka.ohaka_id WHERE YEAR(contact_date) = '.$year);
			$data = $query->result_array();
        	return $data;
		 }		 
		 
		 
		 
		 function getMaterial_search($month,$str){
		     $sql = 'SELECT *,MONTH(contact_date) FROM material INNER JOIN stone on material.contact_stone = stone.stone_id INNER JOIN ohaka on material.contact_reien = ohaka.ohaka_id WHERE MONTH(contact_date) = '.$month.' and contact_name like ?'; 
		    //$query = $this->db->query('SELECT *,MONTH(contact_date) FROM material INNER JOIN stone on material.contact_stone = stone.stone_id INNER JOIN ohaka on material.contact_reien = ohaka.ohaka_id WHERE MONTH(contact_date) = '.$month.' and contact_name like ?');
            $query=$this->db->query($sql,array("%{$str}%"));
            $data = $query->result_array();
            return $data;
		 }
		 
		 function getOpinion($id){
		     $query = $this->db->query('SELECT contact_detail FROM material WHERE contact_id = '.$id);
            $data = $query->result_array();
            return $data;
		 }

//-----------------------------------コール切り替え
		 function get_callreien($call_change){
		     $query = $this->db->query('SELECT * FROM  `ohaka` WHERE  `stone_id` LIKE '."'%$call_change%'");
            $data = $query->result_array();
            return $data;		 
		 
		 }
//-----------------------------------コール切り替え
//-----------------------------------石材店から石材店名取得
    function get_stone_ids($stone_ids) {
        $query = $this->db->query('SELECT * FROM  `stone` WHERE  `stone_id` ='.$stone_ids);
        $data = $query->result_array();
        return $data;
    }

//-----------------------------------石材店から石材店名取得

		 
		 
		 function getMaterial_month_id($month,$service){
		     $query = $this->db->query('SELECT *,MONTH(contact_date) FROM material INNER JOIN stone on material.contact_stone = stone.stone_id INNER JOIN ohaka on material.contact_reien = ohaka.ohaka_id WHERE contact_sort = '.$service.' and MONTH(contact_date) = '.$month);
            $data = $query->result_array();
            return $data;
		 }
		 
		 function getMaterial_id($id){
            $query = $this->db->query('SELECT * FROM material INNER JOIN stone on material.contact_stone = stone.stone_id INNER JOIN ohaka on material.contact_reien = ohaka.ohaka_id  WHERE material.contact_stone = '.$id);
            $data = $query->result_array();
            return $data;
         }
		 
		  function getMaterial_all(){
            $query = $this->db->query('SELECT *,MONTH(contact_date) FROM material INNER JOIN stone on material.contact_stone = stone.stone_id INNER JOIN ohaka on material.contact_reien = ohaka.ohaka_id');
            $data = $query->result_array();
            return $data;
         }
		 
//		 	  function getMaterial_all(){
//            $query = $this->db->query('SELECT * FROM material');
//			            $query = $this->db->query('SELECT * FROM stone');
//            $data = $query->result_array();
//            return $data;
//         }
		 


		 function get_data() {
        	$query = $this->db->query('SELECT ohaka_id,ohaka_name,ohaka_tel,ohaka_place,ohaka_img1,ohaka_img2,keitai FROM ohaka limit 0,30');
			$data = $query->result_array();
        	return $data;
		 }
		 
		 
		 function get_news(){
		 	$query = $this->db->query('SELECT * FROM news');
			$data = $query->result_array();
        	return $data;
		 }
		 
		 function get_gyoukai(){
		     $query = $this->db->query('SELECT * FROM gyoukai_news');
            $data = $query->result_array();
            return $data;
		 }
		 
		 function get_gyoukai_id($id){
		    $query = $this->db->get_where('gyoukai_news', array('gyoukai_id' => $id));
            $data = $query->result_array();
            return $data;
		 }
		 
		 function get_material(){
		 	$query = $this->db->query('SELECT ohaka_id,ohaka_name,ohaka_tel,ohaka_place,ohaka_img1,ohaka_img2 FROM material');
			$data = $query->result_array();
        	return $data;
		 }
		 
		 function get_news_by_id($id){
		 	$query = $this->db->get_where('news', array('news_id' => $id));
        	$data = $query->result_array();
        	return $data;
		 }
		 
		 function get_stone(){
		 	$query = $this->db->query('SELECT * FROM stone');
			$data = $query->result_array();
        	return $data;
		 }
		 
		 function get_stone_id($id){
            $query = $this->db->query("SELECT * FROM stone WHERE stone_id =". $id);
			$data = $query->result_array();
            return $data;
         }

		 		 function get_stone_id2($id){
            $query = $this->db->query("SELECT * FROM stone WHERE stone_id =". $stid[0]);
			$data = $query->result_array();
            return $data;
         }
		 
		 
function get_stone_randid($id){
$data =array();
if (mb_strlen($id) > 1){
$stid = explode(",",$id);
for($i=0;$i<count($stid);$i++){
$query = $this->db->query("SELECT * FROM stone WHERE stone_id =". $stid[$i]);
			$data[] = $query->result_array();
			}
 }else{
            $query = $this->db->query("SELECT * FROM stone WHERE stone_id =". $id);
$data = $query->result_array();
			}

			return $data;
}


function get_stone_randid2($id){
$data =array();
if (mb_strlen($id) > 1){
$stid = explode(",",$id);
for($i=0;$i<count($stid);$i++){
$query = $this->db->query("SELECT * FROM stone WHERE stone_id =". $stid[$i]);
			$data[] = $query->result_array();
			}
 }else{
            $query = $this->db->query("SELECT * FROM stone WHERE stone_id =". $id);
$data = $query->result_array();
			}

			return $data;
}





		 
		  function get_stone_by_id($id){
		 	$query = $this->db->get_where('stone', array('stone_id' => $id));
        	$data = $query->result_array();
        	return $data;
		 }
		 
		 function get_data_by_id_stone($id) {
        	$query = $this->db->query('SELECT * FROM ohaka INNER JOIN stone on ohaka.stone_id = stone.stone_id  WHERE ohaka_id =' .$id);
        	$data = $query->result_array();
        	return $data;
		 }
		 //-------------------------------石材店IDから該当する霊園のみを取り出す
	//	 function get_stoneid_reien($id) {
    //    	$query = $this->db->query('SELECT * FROM  ohaka WHERE  stone_id '= $id);
    //    	$data = $query->result_array();
    //    	return $data;
	//	 }		 

		 //-------------------------------石材店IDから該当する霊園のみを取り出す
		 
		 function get_data_by_id($id) {
            $query = $this->db->query('SELECT * FROM ohaka WHERE ohaka_id =' .$id);
            $data = $query->result_array();
            return $data;
         }
		 
		 function get_image(){
		 	$query = $this->db->query('SELECT ohaka_img1,ohaka_img2,ohaka_img3,ohaka_img4,ohaka_img5,ohaka_img6 FROM ohaka');
			$data = $query->result_array();
        	return $data;
		 }
 
		 
	 function getNumUsers() {
        return $this->db->count_all("admin");
    	}
	 
	 function insert_entry()
    	{
        	// $data = array(
        	// 'ohaka_img1_text' => 'My title'
        	// );
        	$data = "re";
        	//$this = "yes";

        	$this->db->set('ohaka_img1_text', $data);
			$this->db->insert('ohaka'); 
    	}
		
		 function update_entry()
    	{
        	$this->title   = $_POST['title'];
        	$this->content = $_POST['content'];
        	$this->date    = time();

        	$this->db->update('entries', $this, array('id' => $_POST['id']));
    	}
		
		function search($str){
		$sql = "SELECT * FROM ohaka WHERE ohaka_name like ?";
		$query=$this->db->query($sql,array("%{$str}%"));
		return $query->result_array();
		}
		
		
				function search_id_name($str){
		$sql = "SELECT * FROM ohaka WHERE ohaka_id like ?";
		$query=$this->db->query($sql,array("{$str}"));
		return $query->result_array();
		}
		
				function search_ohaka_place($str){
		$sql = "SELECT * FROM ohaka WHERE ohaka_place like ?";
		$query=$this->db->query($sql,array("{$str}"));
		return $query->result_array();
		}
		
		
		
		function stone_search($str){
			$sql = "SELECT * FROM stone WHERE stone_name like ?";
			$query=$this->db->query($sql,array("%{$str}%"));
			return $query->result_array();
		}
		function reien_search($str){
			$sql = "SELECT * FROM ohaka WHERE ohaka_name like ?";
			$query=$this->db->query($sql,array("%{$str}%"));
			return $query->result_array();
		}	
		
		
		
		
				function stone_idsearch($str){
			$sql = "SELECT * FROM stone WHERE stone_reien_no like ?";
			$query=$this->db->query($sql,array("%{$str}%"));
			return $query->result_array();
		}	
		
		
		
		
		function getcontact($i){
			$query = $this->db->query("SELECT * FROM contact WHERE contact_sortid =".$i);
			$data = $query->result_array();
			return $data;
		}
		
		function getAd(){
			$query = $this->db->query('SELECT * FROM ad');
			$data = $query->result_array();
        	return $data;
		}
		
		function getAdch($id){
			$query = $this->db->query('SELECT * FROM ad WHERE ad_id =' .$id);
			$data = $query->result_array();
        	return $data;
		}
		
		function stonecontact(){
			$query = $this->db->query('SELECT * FROM contact_stone');
			$data = $query->result_array();
        	return $data;
		}
		
				function seiyaku_contact(){
			$query = $this->db->query('SELECT * FROM seiyaku');
			$data = $query->result_array();
        	return $data;
		}
		
	
		
			 		 function get_reien(){
		 	$query = $this->db->query('SELECT * FROM ohaka limit 0,5');
			$data = $query->result_array();
        	return $data;
		 }
	
	    function stone_newreg() {
        $query = $this->db->query('SELECT ohaka_id, ohaka_name, stone_id  FROM ohaka');
        $data = $query->result_array();
        return $data;
    }

	
	
	
	}
?>