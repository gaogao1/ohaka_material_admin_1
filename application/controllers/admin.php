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
		//ログインした時にデータを取得
		$data["material_user"] = $this->admin_model->all_get_material();
		//更新した際の処理
//		print_r($this->input->post('contact_name'));

		//条件をpostした時に変更
		 if($this->input->post('contact_name')!=NULL){
			
				$data["post_material_user"] = array(
					'contact_id' => $this->input->post('contact_id'),			
					'contact_name' => $this->input->post('contact_name'),
					'contact_reien' => $this->input->post('contact_reien'),
					'contact_data' =>  date("Y-m-d")
				);
			  // $this->db->where('contact_id', $data["post_material_user"]["contact_id"][$i]);
			  // $this->db->update('materia', $data["post_material_user"][0]);		
			  }
		 // }

			 print_r($data["post_material_user"]);

	$data["material_user"] = $this->admin_model->all_get_material(); 
	$this->load->view('adminlist/material/material_user_view',$data);
	}

}		
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */