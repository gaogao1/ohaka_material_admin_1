<?php 
class Admin extends CI_Controller {
	private $user_status = 'material';
	
    function __construct() {
    	$data = array();
        // ※コンストラクタ内では親クラスをロードするお約束
       	parent::__construct();
        // Usersモデルをロードする
        $this->load->model("admin_model");
		$this->load->model("welcome_model");
		$this->load->helper(array('form', 'url'));
		 $this->output->set_header('Content-Type: text/html; charset=UTF-8');
		 $this->load->database();
		 // if( $_SERVER["SERVER_PORT"] == 80 ) {
            // header( "location:" . "https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"] );
            // exit;
        // }
        
    }
   
	public function material_user(){

		//更新した際の処理
		if($this->input->post('submit')!=NULL){
			for($i=0;$i<count($this->input->post('post_data'));$i++){
				$data = array(
					'post_data' => $this->input->post('post_data'),			
				 );				 
				$this->db->where('contact_id', $data["post_data"][$i]["contact_id"]);
				$this->db->update('material', $data["post_data"][$i]);		
			}
		}
		//月ごとのデータ取得		
		if(empty($_GET['year'])){
			$year = date('Y');		
			$data["material_user"] = $this->admin_model-> get_year_Material($year);//今年の月
		}else{
			$year = $_GET['year'];
			$month = $_GET['month'];	
			$data["material_user"] = $this->admin_model-> date_get_material($year,$month);
		}
		
		//各霊園名を取得
		for($i=0;$i<count($data["material_user"]);$i++){
			$data["material_reien_name"][$i] = $this->admin_model->get_data_by_id($data["material_user"][$i]["contact_reien"]);		
		}
		
		$this->load->view('adminlist/material/material_user_view',$data);
	}
	
	
	
	
	public function material_user_detail(){
	//ページ遷移した時にデータを取得
	$data["detail"] = $this->admin_model->id_get_material($this->input->get("id",TRUE));
	//更新した際の処理
	if($this->input->post('submit')!=NULL){
			$data["detail"] = array(
				'contact_id' => $this->input->post('contact_id'),		
				'contact_name' => $this->input->post('contact_name'),				
				'contact_ad_id' => $this->input->post('contact_ad_id'),					
				'contact_address' => $this->input->post('contact_address'),
				'contact_tel' => $this->input->post('contact_tel'),
				'contact_mail' => $this->input->post('contact_mail'),
				'contact_age' => $this->input->post('contact_age'),
				'contact_amount_min' => $this->input->post('contact_amount_min'),
				'contact_amount_max' => $this->input->post('contact_amount_max'),
				'contact_fin' => $this->input->post('contact_fin'),
				'contact_engin' => $this->input->post('contact_engin'),
				'contact_device' => $this->input->post('contact_device'),
				'contact_search_engin' => $this->input->post('contact_search_engin'),
				'contact_search_key' => $this->input->post('contact_search_key'),
				'contact_chara' => $this->input->post('contact_chara'),
				'contact_detail' => $this->input->post('contact_detail'),
				'contact_date' =>  $this->input->post('contact_date')
				);				
		$this->db->where('contact_id', $data["detail"]["contact_id"]);
		$this->db->update('material', $data["detail"]);
		$data['detail'] = $this->admin_model->id_get_material($this->input->get("id",TRUE));
	}
	$this->load->view('adminlist/material/material_user_detail_view',$data);
	}
	
	
	public function material_user_new(){
	//ページ遷移した時にデータを取得
	// $data["detail"] = $this->admin_model->id_get_material($this->input->get("id",TRUE));
		//更新した際の処理
		if($this->input->post('submit')!=NULL){
				$data["detail"] = array(
					'contact_id' => $this->input->post('contact_id'),		
					'contact_name' => $this->input->post('contact_name'),
					'contact_reien' => $this->input->post('contact_reien'),					
					'contact_ad_id' => $this->input->post('contact_ad_id'),					
					'contact_address' => $this->input->post('contact_address'),
					'contact_tel' => $this->input->post('contact_tel'),
					'contact_mail' => $this->input->post('contact_mail'),
					'contact_age' => $this->input->post('contact_age'),
					'contact_amount_min' => $this->input->post('contact_amount_min'),
					'contact_amount_max' => $this->input->post('contact_amount_max'),
					'contact_fin' => $this->input->post('contact_fin'),
					'contact_engin' => $this->input->post('contact_engin'),
					'contact_device' => $this->input->post('contact_device'),
					'contact_search_engin' => $this->input->post('contact_search_engin'),
					'contact_search_key' => $this->input->post('contact_search_key'),
					'contact_chara' => $this->input->post('contact_chara'),
					'contact_detail' => $this->input->post('contact_detail'),
					'contact_date' =>  date('Y-m-d h:i:s')
					);				
			 $this->db->insert('material', $data["detail"]);
			$this->load->view('adminlist/material/material_user_newfin_view',$data);
		}else{
			$this->load->view('adminlist/material/material_user_new_view');
		}
	}	
	
		public function test(){
			$this->load->view('adminlist/material/test');		
		}
	
	
	public function material_user_log(){
	//ページ遷移した時にデータを取得
	$data["log"] = $this->admin_model->id_get_material_log($this->input->get("id",TRUE));

		
	// 新規のデータがあった場合
			if($this->input->post('new_post_data')!=NULL){	
			$data = array(
					'new_post_data' => $this->input->post('new_post_data'),			
				);				 
			if($data["new_post_data"][0]["log_name"] != null){
				$this->db->insert('material_log', $data["new_post_data"][0]);
			}	
			}
			
	//更新した際の処理
		if($this->input->post('post_data')!=NULL){
			for($i=0;$i<count($this->input->post('post_data'));$i++){
				$data = array(
					'post_data' => $this->input->post('post_data'),			
				 );		 
				 
			$this->db->where('log_id', $data["post_data"][$i]["log_id"]);
			$this->db->update('material_log', $data["post_data"][$i]);		
			}
		}			

	//あとで修正
		// if($this->input->post('post_data')!=NULL){
			// for($i=0;$i<count($this->input->post('post_data'));$i++){
				// $data = array(
					// 'log' => $this->admin_model->id_get_material_log($this->input->get("id",TRUE)),
					// 'post_data' => $this->input->post('post_data')
				 // );			 
			 // $this->admin_model->duplicate_material($data);			 
			// }
		// }

		
	$data["log"] = $this->admin_model->id_get_material_log($this->input->get("id",TRUE));		
	$this->load->view('adminlist/material/material_user_log_view',$data);
	}
	

}	

	
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */