<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

/**
 * Class : User (UserController)
 * User Class to control all user related operations.
 * @author : Kishor Mali
 * @version : 1.1
 * @since : 15 November 2016
 */
class CoursesController extends BaseController
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Courses_model');
        $this->load->helper('url');

    }
    
    /**
     * This function used to load the first screen of the user
     */
    public function index()
    {		
        $pages = $this->Courses_model->getPageList();
        $data = array();
        $data['pages'] = $pages;
        $data['page_id'] = 1;
        redirect('page/1', 'refresh');
    }

    public function page($page_id)
    {       
        $pages = $this->Courses_model->getPageList();
        $data = array();
        $data['pages'] = $pages;
        $data['page_id'] = $page_id;

        $data['main_div'] = $this->db->get_where('top_courses', array('page_id' => $page_id,'main_div'=>'yes'))->result();
        $data['other_div'] = $this->db->get_where('top_courses', array('page_id' => $page_id,'main_div'=>'no'))->result();

        //print_r($data['main_div']); die;
        $this->load->view("david/index", $data);
    }

    public function delete_div($div_id,$page_id){
        $this->db->where('div_id',$div_id);
        $this->db->where('page_id',$page_id);
        $status = $this->db->delete('top_courses');
        echo $status; die;
    }

    public function max_div_id($page_id = false){
        $this->db->select_max('div_id');
        $this->db->where('page_id',$page_id);
        $result = $this->db->get('top_courses')->row();  
        

        //book div
        if($result->div_id){
            $data = array(
                 'page_id' => $page_id,
                 'main_div' => 'no',
                 'div_id' => $result->div_id + 1,
                );
            $this->db->insert('top_courses',$data);
        }

        echo $result->div_id; die;
    }
    
    /**
     * This function is used to load the user list
     */
    function save_callback()
    {
		/*print_r($this->input->post());return;*/
        $page_id = $this->input->post('page_id');
        $card_element = $this->input->post('card_element');
        $main_div = $this->input->post('main_div');
        $div_type = $this->input->post('div_type');
        $div_id = $this->input->post('div_id');

        $this->db->from('top_courses');
        $this->db->where('page_id',$page_id);
        $this->db->where('div_id',$div_id);
        $query = $this->db->get();
        
        if($query->num_rows() > 0){
            if($div_type=='div_1'){
                $data = array(
                 'page_id' => $page_id,
                 'main_div' => $main_div,
                 'div_id' => $div_id,
                 'div_1' => serialize($card_element)
                 );
            }else if($div_type=='div_2'){
                $data = array(
                 'page_id' => $page_id,
                 'main_div' => $main_div,
                 'div_id' => $div_id,
                 'div_2' => serialize($card_element)
                 );
            }else{
                $data = array(
                 'page_id' => $page_id,
                 'main_div' => $main_div,
                 'div_id' => $div_id,
                 'div_3' => serialize($card_element)
                 );
            }

            $this->db->where('page_id', $page_id);
            $this->db->where('div_id', $div_id);
            $this->db->update('top_courses', $data);
        }else{
            if($div_type=='div_1'){
                $data = array(
                 'page_id' => $page_id,
                 'main_div' => $main_div,
                 'div_id' => $div_id,
                 'div_1' => serialize($card_element)
                 );
            }else if($div_type=='div_2'){
                $data = array(
                 'page_id' => $page_id,
                 'main_div' => $main_div,
                 'div_id' => $div_id,
                 'div_2' => serialize($card_element)
                 );
            }else{
                $data = array(
                 'page_id' => $page_id,
                 'main_div' => $main_div,
                 'div_id' => $div_id,
                 'div_3' => serialize($card_element)
                 );
            }

            $this->db->insert('top_courses',$data);
        }
    }    
}

?>