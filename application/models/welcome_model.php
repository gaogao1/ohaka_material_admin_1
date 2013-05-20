<?php
	class Welcome_model extends CI_Model {
			
		public function __construct(){
			//parent::Model();
			parent::__construct();
			//database.phpで定義したDBに接続する
			$this->load->database();
		}
		
		function getPref(){
			$sql = "SELECT * from pref";
        	$query = $this->db->query($sql);
			//$query = mysql_query($sql);
        	// 結果セットを連想配列として返す
        	foreach ($query->result_array() as $row)
        	{
        		$pref_array[] = $row["name"];
			}
			return $pref_array;
		 }
	
	function getNum(){
		return $this->db->count_all("ohaka");
	}
	
	function getOk(){
		$query = $this->db->query('SELECT * FROM ohaka WHERE flag= 1');
		$data = $query->result_array();
        return count($data);
	}
	
	function gyoukai_news(){
	    $query = $this->db->query('SELECT * FROM gyoukai_news ORDER BY `gyoukai_news`.`gyoukai_id` DESC');
        $data = $query->result_array();
        return $data;
	}
	
		function news(){
	    $query = $this->db->query('SELECT * FROM news ORDER BY  `news`.`news_id` DESC');
        $data = $query->result_array();
        return $data;
	}
		 
	 function getNumUsers() {
        return $this->db->count_all("admin");
    	}
    	
    function getNumOhaka() {
        return $this->db->count_all("ohaka");
        }
	 
	 function getOhaka($id){
	 	$query = $this->db->query('SELECT * FROM ohaka WHERE ohaka_id='.$id);
		$data = $query->result_array();
        return $data;
	 }
	 
	 function getAd(){
	 	$query = $this->db->query('SELECT * FROM ad WHERE ad_start <= CURRENT_DATE  and CURRENT_DATE <= ad_fin;');
		$data = $query->result_array();
        return $data;
	 }
	 
	 
	}
?>