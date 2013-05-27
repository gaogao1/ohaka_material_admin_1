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
		//今月のデータ
		$month = date('n');
		//去年のデータ
		$year = date('Y')-1;

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

		if($_SERVER['REQUEST_URI'] =='/admin/material_user/?day=4'){
			$data["material_user"] = $this->admin_model-> getMaterial(4);
		}
		elseif($_SERVER['REQUEST_URI'] =='/admin/material_user/?day=3'){
			$data["material_user"] = $this->admin_model->all_get_material(3); 
		}		
		elseif($_SERVER['REQUEST_URI'] =='/admin/material_user/?day=all'){
			$data["material_user"] = $this->admin_model->all_get_material(); 

		}elseif($_SERVER['REQUEST_URI'] =='/admin/material_user/?year=2012'){
			$data["material_user"] = $this->admin_model->get_year_Material($year); 

			}else{
			$data["material_user"] = $this->admin_model-> getMaterial($month);		
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
				'contact_reien' => $this->input->post('contact_reien'),
				'contact_date' =>  $this->input->post('contact_date')
			);				
		$this->db->where('contact_id', $data["detail"]["contact_id"]);
		$this->db->update('material', $data["detail"]);
		$data['detail'] = $this->admin_model->id_get_material($this->input->get("id",TRUE));
	}
	$this->load->view('adminlist/material/material_user_detail_view',$data);
	}
	
	
	public function material_user_log(){
	//ページ遷移した時にデータを取得
	$data["log"] = $this->admin_model->id_get_material_log($this->input->get("id",TRUE));

	//更新した際の処理
		if($this->input->post('submit')!=NULL){
			for($i=0;$i<count($this->input->post('post_data'));$i++){
				$data = array(
					'post_data' => $this->input->post('post_data'),			
				 );		 
			$this->db->where('log_id', $data["post_data"][$i]["log_id"]);
			$this->db->update('material_log', $data["post_data"][$i]);		
			}
		}
		
	//新規のデータがあった場合
			$data = array(
				'new_post_data' => $this->input->post('new_post_data'),			
				 );						 
			if($data["new_post_data"][0]["log_name"] != null){
				$this->db->insert('material_log', $data["new_post_data"][0]);
			}	
		
	$data["log"] = $this->admin_model->id_get_material_log($this->input->get("id",TRUE));		
	$this->load->view('adminlist/material/material_user_log_view',$data);
	}
	

}	

	
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */