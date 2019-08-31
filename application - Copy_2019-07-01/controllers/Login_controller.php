<?php 

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
require_once APPPATH."/third_party/PHPExcel.php";
require_once APPPATH."/third_party/PHPExcel/IOFactory.php";
class Login_controller extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Login_model');
        $this->load->dbutil();
    }

    public function index() {
        $this->load->view('login');
    }

    public function login() {
        $this->load->model('Login_model');
        $login_result = $this->Login_model->login();
        if (empty($login_result)) {
            $this->session->sess_destroy();
            redirect('');
        } else {
            $session_data['user_name'] = $login_result->name;
            $session_data['access'] = $login_result->access;
            $session_data['dept'] = $login_result->dept;
            $session_data['login_status'] = 'TRUE';
            $this->session->set_userdata($session_data);
            if($login_result->access=="5" || $login_result->access=="4")
            {
            redirect('add_hardness_item');
            }
            else{
            redirect('check_hardness_form');    
            }
        }
    }

    public function logout() {
        $this->session->sess_destroy();
        $this->load->view('login');
        
    }

    // HARDNESS

    public function hardness_chilldept() {

        $data['template'] = 'hardness_chilldept';
        $data['title'] = 'Hardness & ChillDepth';
        $this->layout_admin($data);
    }

    public function add_hardness_item() {
        $data['item_db_data'] = $this->Login_model->item_db_data();
        $data['all_heat'] = $this->Login_model->get_all_heat();
        $data['template'] = 'add_hardness_item';
        $data['title'] = 'Add Item';
        $this->layout_admin($data);
    }

    public function report_hardeness() {
        $data['template'] = 'report_hardeness';
        $data['title'] = 'Hardness Report';
        $this->layout_admin($data);
    }

    public function edit_hardness_item() {
        $data['template'] = 'edit_hardness_item';
        $data['title'] = 'Edit Hardness Report';
        $this->layout_admin($data);
    }

    public function get_item_data1() {
        /* @var $_POST type */
        $item_name = $_POST["item_name"];
        $this->load->view('pages/get_item_data');
    }


    public function save_data() {
        $this->Login_model->save_data();
        
    }

    public function item_name_wise_page() {
        $item_name = $_POST["item_name"];
        $heat = $_POST["heat"];
        $input_date = $_POST['input_date'];
        $input_date = date("Y-m-d", strtotime($input_date));
        $data['heat'] = $_POST["heat"];
        $data['count'] = $_POST["count"];
        $data['input_date']=$_POST['input_date'];
        $dept= $this->session->userdata('dept');
        $query = "select * from tbl_hardness_main where `c_date`='$input_date' and `item`='$item_name' and `heat_no`='$heat' and dept='$dept' and page_no='1'";
        $id_data = $this->db->query($query)->row();
        
        
        if ($id_data) {
            $id = $id_data->id;
            $data['page_no']="1";
            $data['main_data'] = $id_data;
            $query1 = "select * from tbl_cam_scrap where hardness_chill_id='$id' and dept='$dept' and page_no='1'";
            $data['C'] = $this->db->query($query1)->row();

            $query2 = "select * from tbl_brinell_scrap where hardness_chill_id='$id' and dept='$dept' and page_no='1'";
            $data['B'] = $this->db->query($query2)->row();
            
            $query3 = "select ladle_result from tbl_cam_scrap_l_val where hardness_chill_id='$id' and dept='$dept' and page_no='1'";
            $data['L_R'] = $this->db->query($query3)->result();
            
           
            $this->load->view('pages/' .$dept.'/'. $item_name, $data);
        } else {
            $data['page_no']="1";
            $data['main_data'] = '';
            $data['D'] = '';
            $data['D1'] = '';
            $data['D2'] = '';
            $data['D3'] = '';
            $this->load->view('pages/' .$dept.'/'. $item_name, $data);
        }
    }

    public function get_heat_data() {
        $item = $_POST["item"];
        $dept= $this->session->userdata('dept');
        $query = "select heat_no from tbl_hardness_main where item='$item' and dept='$dept' and microflag=1 and status=0";
        $result = $this->db->query($query)->result();
        $msg = '';
        if ($result) {
            $msg .= "<select name='heat_no' class='form-control select2 heat_no'>";
            $msg .= "<option value=''>Select</option>";

            foreach ($result as $row) {
                $msg .= "<option value='$row->heat_no'>$row->heat_no</option>";
            }
            $msg .= "</select>";
            echo $msg;
        }
    }
    
    public function get_heat_data_admin_report() {
        $item = $_POST["item"];
        $dept= $this->session->userdata('dept');
        $query = "select heat_no from tbl_hardness_main where item='$item' and dept='$dept' GROUP BY `heat_no`";
        $result = $this->db->query($query)->result();
        $msg = '';
        if ($result) {
            $msg .= "<select name='heat_no' class='form-control select2 heat_no' required=''>";
            $msg .= "<option value=''>Select</option>";
            foreach ($result as $row) {
            $msg .= "<option value='$row->heat_no'>$row->heat_no</option>";}
            $msg .= "</select>";
            echo $msg;
        }
    }

    public function get_item_data() {
        
        $month = $this->input->post('month');
        $year = $this->input->post('year');
        $dept = $this->session->userdata('dept');
        $query = "select item,cust_name from tbl_hardness_main where MONTH(c_date)='$month' and YEAR(c_date)='$year' and dept='$dept' group by item";
        $result = $this->db->query($query)->result();

        $msg = '';
        if ($result) {
            $msg .= "<select name='item' class='form-control select2 item' required=''>";
            $msg .= "<option value=''>Select</option>";
            foreach ($result as $row) {
                $msg .= "<option value='$row->item'>$row->cust_name</option>";}
            $msg .= "</select>";
            echo $msg;
        }
    }
    
    public function get_item_data12() {
        $e_date = $_POST["e_date"];
        $dept= $this->session->userdata('dept');
    $query = "select item,cust_name from tbl_hardness_main where dept='$dept' and microflag=1 group by item";
        $result = $this->db->query($query)->result();
        $msg = '';
        if ($result) {
            $msg .= "<select name='item' class='form-control select2 item'>";
            $msg .= "<option value=''>Select</option>";

            foreach ($result as $row) {
                $msg .= "<option value='$row->item'>$row->cust_name</option>";
            }
            $msg .= "</select>";
            echo $msg;
        }
    }

    public function get_hardness_report_data() {
        $item = $_POST["item"];
        $heat_no = $_POST["heat_no"];
        $year = $_POST["year"];
        $month = $_POST["month"];
        $dept= $this->session->userdata('dept');
        
        
         $query = "select * from tbl_hardness_main "
                . "where MONTH(c_date)='$month' and YEAR(c_date)='$year' and dept='$dept' and item='$item' and heat_no='$heat_no'";
       

         $result_data=$result['data']=$this->db->query($query)->result();
        
       if($result_data)
       {
        if(count($result_data)>1)
        {
                  $query1 = "select * from tbl_cam_scrap"
                . " where hardness_chill_id='".$result_data[0]->id."' and dept='$dept' " ;
                
        $result['D1'] = $this->db->query($query1)->result();
         $query2 = "select * from tbl_brinell_scrap"
                . " where hardness_chill_id='".$result_data[0]->id."' and dept='$dept'";

        $result['D2'] = $this->db->query($query2)->result();  
        $result['page2_btn']="Yes";
        $this->load->view('report_button', $result);
        }
 else { $query1 = "select * from tbl_cam_scrap"
                . " where hardness_chill_id='".$result_data[0]->id."' and dept='$dept' " ;
                
        $result['D1'] = $this->db->query($query1)->result();
         $query2 = "select * from tbl_brinell_scrap"
                . " where hardness_chill_id='".$result_data[0]->id."' and dept='$dept'";

        $result['D2'] = $this->db->query($query2)->result();  
        $result['page2_btn']="";
        $this->load->view('report_button', $result);}
       }
    }

    public function get_hardness_report_data1() {
        $id = $_POST["id"];
        $dept= $this->session->userdata('dept');
        $query = "select * from tbl_hardness_main"
                . " where `id`='$id' and dept='$dept'";
       

        $result['data'] = $id_data = $this->db->query($query)->result();
        $item=$id_data->item;
        
        
        $query1 = "select * from tbl_cam_scrap"
                . " where hardness_chill_id='$id' and dept='$dept' " ;
        $result['D1'] = $this->db->query($query1)->result();
        $query2 = "select * from tbl_brinell_scrap"
                . " where hardness_chill_id='$id' and dept='$dept'";

        $result['D2'] = $this->db->query($query2)->result();
       
        $this->load->view('pages/'.$dept.'_reports/'.$item.'_report', $result);

    }

    public function download_report($id) {
        //$id = $_POST["id"];
        $dept= $this->session->userdata('dept');
        $query = "select * from tbl_hardness_main "
                . " where `id`='$id'";

        $result['data'] = $id_data = $this->db->query($query)->row();
        $query1 = "select * from tbl_hardness_chilldepth "
                . " where hardness_chill_id='$id' and dept='$dept'";
        $result['D1'] = $this->db->query($query1)->result();

        $query2 = "select * from tbl_hardness_observation "
                . " where hardness_chill_id='$id' and dept='$dept'";

        $result['D2'] = $this->db->query($query2)->result();

        $query3 = "select * from tbl_hardness_chilldepth_para "
                . " where hardness_chill_id='$id' and dept='$dept'";

        $result['D3'] = $this->db->query($query3)->result();

        $query4 = "select * from tbl_hardness_chilldepth_b "
                . " where hardness_chill_id='$id' and dept='$dept'";

        $result['D4'] = $this->db->query($query4)->result();

        $query5 = "select * from tbl_hardness_observation_b "
                . " where hardness_chill_id='$id' and dept='$dept'";

        $result['D5'] = $this->db->query($query5)->result();

        $query6 = "select * from tbl_hardness_chilldepth_para_b "
                . " where hardness_chill_id='$id' and dept='$dept'";

        $result['D6'] = $this->db->query($query6)->result();
        //print_r($result);
        
        
        $this->load->view('pages/download_report', $result);
    }

    public function item_validation() {
        $item = $_POST['item_name'];
        $heat = $_POST['heat'];
        $input_date = $_POST['input_date'];
        $input_date = date("Y-m-d", strtotime($input_date));
        $dept= $this->session->userdata('dept');
        $query = "select id from tbl_hardness_main where item='$item' and heat_no='$heat' and c_date='$input_date' and microflag='1' and dept='$dept'";
        //echo $query;
        $result2 = $this->db->query($query)->row();
        if($result2)
        {echo "";}
        else{
        $query2 = "select id from tbl_hardness_main where item='$item' and heat_no='$heat' and c_date='$input_date' and status='1' and dept='$dept'";
        $result3 = $this->db->query($query2)->row();   
        if ($result3) {
            echo "1";}
        }
        
        exit();
    }
    
    public function edit_hardness_form() {
        $item = $_POST["item_name"];
        $dept= $this->session->userdata('dept');
        $query = "select * from tbl_hardness_main "
                . " where `item`='$item'";

        $result['data'] = $id_data = $this->db->query($query)->row();
        $id = $id_data->id;

        $query1 = "select * from tbl_hardness_chilldepth"
                . " where hardness_chill_id='$id' and dept='$dept'";
        $result['data1'] = $this->db->query($query1)->result();

        $query2 = "select * from tbl_hardness_observation "
                . " where hardness_child_id='$id' and dept='$dept'";

        $result['data2'] = $this->db->query($query2)->result();
        $this->load->view('pages/edit_hardness_form', $result);
    }

//    public function get_heat_itemwise_db() {
//        $item = $this->input->post('item');
//        $dept= $this->session->userdata('dept');
//        $msg = '';
//        $msg .= '<select class="form-control select2 enter_heat" name="enter_heat" required="">';
//        $msg .= "<option value=''>Select</option>";
//        $q = "select heat_no from tbl_hardness_main where item='$item' and status='1' and dept='$dept'";
//        $q1 = $this->db->query($q)->row();
//        if ($q1) {
//            $heat = $q1->heat_no;
//        } else {
//            $heat = '';
//        }
//        $this->DB2 = $this->load->database('melt_db', TRUE);
//        $query = "select heat_no from  tbl_ipcs_sheet where ipcs_item='$item' and heat_no!='$heat' and dept='$dept' group by heat_no";
//        $result = $this->DB2->query($query)->result();
//        if ($result) {
////            foreach ($result as $row) {
////                $msg .= "<option value='$row->heat_no'>$row->heat_no</option>";
////            }
//            
//            echo json_encode($result);
//        }
//        //$msg .= '</select>';
//
//        //echo $msg;
//        $this->DB2->close();
//    }

    public function report_x_bar_r_bar() {
        $data['template'] = 'report_x_bar_r_bar';
        $data['title'] = 'Report X-Bar R-Bar';
        $this->layout_admin($data);
    }

    public function get_item_no_x_bar_r_bar() {
        $s_date = $_POST["s_date"];
        $e_date = $_POST["e_date"];
        $dept= $this->session->userdata('dept');
        $query = "select item from tbl_hardness_main where c_date >='$s_date' and c_date<='$e_date' and dept='$dept' group by item";

        $result = $this->db->query($query)->result();
        $msg = '';
        if ($result) {
            $msg .= "<div class='col-md-6'>                                        
                    <select class='form-control select2 item' required=''>
                        <option value=''>Select</option>";
            foreach ($result as $row) {
                $msg .= "<option value='$row->item'>$row->item</option>";
            }
            $msg .= "</select>
                </div>";
            echo $msg;
        }
    }

    public function get_point_x_bar_r_bar() {
        $item = $_POST["item"];
        $dept= $this->session->userdata('dept');
        $query = "select at_point from tbl_hardness_chilldepth_para where `item`='$item' and dept='$dept' group by at_point order by id ASC";
        $result = $this->db->query($query)->result();
        $msg = '';
        if ($result) {
            $msg .= "<div class='col-md-6'>                                        
                    <select class='form-control select2 atpoint' required=''>
                        <option value=''>Select</option>";
            for ($i = 0; $i < count($result) - 1; $i++) {

                $msg .= '<option value="' . $i . "-" . $result[$i]->at_point . '">' . $result[$i]->at_point . '</option>';
            }
            $msg .= "</select>
                </div>";
            echo $msg;
        }
    }

    public function get_x_bar_r_bar_data() {
        $data['item'] = $item = $_POST['item'];
        $data['s_date'] = $s_date = $_POST['s_date'];
        $data['e_date'] = $e_date = $_POST['e_date'];
        $data['atpoint'] = $_POST['atpoint'];
        $dept= $this->session->userdata('dept');
        $query = "select data_value1,c_date from tbl_hardness_chilldepth where item='$item' and c_date >='$s_date' and c_date<='$e_date' and dept='$dept' order by c_date ASC";
//        echo $query;
//       exit();
        $result = $this->db->query($query)->result();
        $data['data'] = $result;
        if ($result) {
            $this->load->view('pages/get_x_bar_r_bar_data', $data);
        }
    }

    public function download_report_x_bar_r_bar($item, $s_date, $e_date, $atpoint) {

        $data['atpoint'] = base64_decode($atpoint);
        $dept= $this->session->userdata('dept');
        $query = "select data_value1,c_date from tbl_hardness_chilldepth where item='$item' and c_date >='$s_date' and c_date<='$e_date' and dept='$dept' order by c_date ASC";
        $result = $this->db->query($query)->result();
        $data['data'] = $result;
        if ($result) {
            $this->load->view('pages/download_report_x_bar_r_bar', $data);
        }
    }

   
    public function check_hardness_form() {
        $data['template'] = 'check_hardness_form';
        $data['title'] = 'Check Hardness Form';
        $this->layout_admin($data);
    }
    
    public function get_change_check_hardness_form() {
        $item = $_POST["item"];
        $heat_no = @$_POST["heat_no"];
        $c_date = @$_POST["c_date"];
        $msg = "";
        $dept= $this->session->userdata('dept');
        if (empty($item) && empty($heat_no)) {
            $query = "select * from tbl_hardness_main "
                    . " where dept='$dept' and status=0 and microflag=1";

            $result = $id_data = $this->db->query($query)->result();
            $msg .= "<div class='panel-heading ui-draggable-handle'>
                                    <h3 class='panel-title'>Item List</h3>
                                </div>";
            $msg .= "<table class='table table-bordered' align='center'>";
            $msg .= "<tr><th style=' text-align:  center;'>#</th>"
            . "<th style=' text-align:  center;'>ITEM</th>"
            . "<th style=' text-align:  center;'>HEAT NO</th>"
            . "<th style=' text-align:  center;'>STATUS</th>"
            . "<th style=' text-align:  center;'>REMARK</th>"
            . "<th style=' text-align:  center;'>CHANGE</th>"
            . "<th style=' text-align:  center;'>VIEW</th>"
            . "<th style=' text-align:  center;'>Edit</th></tr>";
            
            $i = 1;
            foreach ($result as $row) {
                if($row->check_by_remark)
                {   
                    $status='';
                    if($row->checked_by_status==0)
                    {
                     $status="OK";   
                    }
                    else {
                        $status="NOT OK"; 
                    }
                    
                    $micro_remark_status = explode(",", $row->check_by_remark);
                    $last_remark=end($micro_remark_status);
                    
                $msg .= "<tr>";
                $msg .= "<th style=' text-align:  center;'>$i</th>";
                $msg .= "<th style=' text-align:  center;'>$row->cust_name</th>";
                $msg .= "<th style=' text-align:  center;'>$row->heat_no</th>";
                $msg .= "<th style=' text-align:  center;'>$status</th>";
                $msg .= "<th style=' text-align:  center;'>$last_remark</th>";
                $msg .= "<th style='display:none;'><input type='text' class='item_id' value='$row->id'></th>";
                $msg .= "<th style=' text-align:  center;'><label class='btn btn-success'>CHANGED</label></th>";
                $msg .= "<th style=' text-align:  center;'><label class='btn btn-warning view'>View</label></th>";
                $msg .= "<th style=' text-align:  center;'><label class='btn btn-success' disabled='true'>Edit</label></th>";
                $msg .= "</tr>";    
                }
                else {
                $msg .= "<tr>";
                $msg .= "<th style=' text-align:  center;'>$i</th>";
                $msg .= "<th style=' text-align:  center;'>$row->cust_name</th>";
                $msg .= "<th style=' text-align:  center;'>$row->heat_no</th>";
                $msg .= "<th style=' text-align:  center;'><select style='width:200px;' class='form-control select2 status'><option value=''>Select</option><option value='0'>OK</option><option value='1'>NOT OK</option></select></th>";
                $msg .= "<th style=' text-align:  center;'><textarea class='form-control status_remark' style='display:none;'></textarea></th>";
                $msg .= "<th style='display:none;'><input type='text' class='item_id' value='$row->id'></th>";
                $msg .= "<th style=' text-align:  center;'><label class='btn btn-success change'>CHANGE</label></th>";
                $msg .= "<th style=' text-align:  center;'><label class='btn btn-warning view'>View</label></th>";
                $msg .= "<th style=' text-align:  center;'><label class='btn btn-success edit' disabled='true'>Edit</label></th>";
                $msg .= "</tr>";
                }
            $i++;
            }
            $msg .= "</table>";
            echo $msg;
            } else if (empty($heat_no)) {
            $query = "select * from tbl_hardness_main "
                    . " where item='$item' and dept='$dept' and status=0 and microflag=1";

            $result = $id_data = $this->db->query($query)->result();
            $msg .= "<div class='panel-heading ui-draggable-handle'>
                                    <h3 class='panel-title'>Item List</h3>
                                </div>";
            $msg .= "<table class='table table-bordered' align='center'>";
            $msg .= "<tr><th style=' text-align:  center;'>#</th>"
            . "<th style=' text-align:  center;'>ITEM</th>"
            . "<th style=' text-align:  center;'>HEAT NO</th>"
            . "<th style=' text-align:  center;'>STATUS</th>"
            . "<th style=' text-align:  center;'>REMARK</th>"
            . "<th style=' text-align:  center;'>CHANGE</th>"
            . "<th style=' text-align:  center;'>VIEW</th>"
            . "<th style=' text-align:  center;'>Edit</th></tr>";
            
            $i = 1;
            foreach ($result as $row) {
                if($row->check_by_remark)
                {   
                    $status='';
                    if($row->checked_by_status==0)
                    {
                     $status="OK";   
                    }
                    else {
                        $status="NOT OK"; 
                    }
                    
                    $micro_remark_status = explode(",", $row->check_by_remark);
                    $last_remark=end($micro_remark_status);
                    
                $msg .= "<tr>";
                $msg .= "<th style=' text-align:  center;'>$i</th>";
                $msg .= "<th style=' text-align:  center;'>$row->cust_name</th>";
                $msg .= "<th style=' text-align:  center;'>$row->heat_no</th>";
                $msg .= "<th style=' text-align:  center;'>$status</th>";
                $msg .= "<th style=' text-align:  center;'>$last_remark</th>";
                $msg .= "<th style='display:none;'><input type='text' class='item_id' value='$row->id'></th>";
                $msg .= "<th style=' text-align:  center;'><label class='btn btn-success'>CHANGED</label></th>";
                $msg .= "<th style=' text-align:  center;'><label class='btn btn-warning view'>View</label></th>";
                $msg .= "<th style=' text-align:  center;'><label class='btn btn-success' disabled='true'>Edit</label></th>";
                $msg .= "</tr>";    
                }
                else {
                $msg .= "<tr>";
                $msg .= "<th style=' text-align:  center;'>$i</th>";
                $msg .= "<th style=' text-align:  center;'>$row->cust_name</th>";
                $msg .= "<th style=' text-align:  center;'>$row->heat_no</th>";
                $msg .= "<th style=' text-align:  center;'><select style= 'width:200px;' class='form-control select2 status'><option value=''>Select</option><option value='0'>OK</option><option value='1'>NOT OK</option></select></th>";
                $msg .= "<th style=' text-align:  center;'><textarea class='form-control status_remark' style='display:none;'></textarea></th>";
                $msg .= "<th style='display:none;'><input type='text' class='item_id' value='$row->id'></th>";
                $msg .= "<th style=' text-align:  center;'><label class='btn btn-success change'>CHANGE</label></th>";
                $msg .= "<th style=' text-align:  center;'><label class='btn btn-warning view'>View</label></th>";
                $msg .= "<th style=' text-align:  center;'><label class='btn btn-success edit' disabled='true'>Edit</label></th>";
                $msg .= "</tr>";
                }
            $i++;
            }
            $msg .= "</table>";
            echo $msg;
            }else {
            $query = "select * from tbl_hardness_main "
                    . " where item='$item' and heat_no='$heat_no' and dept='$dept' and status=0 and microflag=1";

            $result = $id_data = $this->db->query($query)->result();
            $msg .= "<div class='panel-heading ui-draggable-handle'>
                                    <h3 class='panel-title'>ITEM LIST</h3>
                                </div>";
            $msg .= "<table class='table table-bordered'>";
            $msg .= "<tr><th style=' text-align:  center;'>#</th>"
            . "<th style=' text-align:  center;'>ITEM</th>"
            . "<th style=' text-align:  center;'>HEAT NO</th>"
            . "<th style=' text-align:  center;'>CHANGE STATUS</th>"
            . "<th style=' text-align:  center;'>REMARK</th>"
            . "<th style=' text-align:  center;'>CHANGE</th>"
            . "<th style=' text-align:  center;'>VIEW</th>"
            . "<th style=' text-align:  center;'>EDIT</th></tr>";
            $i = 1;
            $r = 1;
            foreach ($result as $row) {
                
                if($row->check_by_remark)
                {   
                    $status='';
                    if($row->checked_by_status==0)
                    {
                     $status="OK";   
                    }
                    else {
                        $status="NOT OK"; 
                    }
                    
                    $updates_dates1 = explode(",", $row->updated_at);
                    $micro_remark_status = explode(",", $row->check_by_remark);
                    $micro_status_flag = explode(",", $row->micro_status);
                    for($r=1;$r<count($updates_dates1);$r++){
                        
                        if($micro_status_flag[$r]==1)
                        {
                            $status="Not Ok";
                            
                        }else{
                            $status="Ok";
                        }
                        
                        $msg .= "<tr>";
                        $msg .= "<th style=' text-align:  center;'>$r</th>";
                        $msg .= "<th style=' text-align:  center;'>$row->cust_name</th>";
                        $msg .= "<th style=' text-align:  center;'>$row->heat_no</th>";
                        $msg .= "<th style=' text-align:  center;'>$status</th>";
                        $msg .= "<th style=' text-align:  center;'>$micro_remark_status[$r]</th>";
                        $msg .= "<th style='display:none;'><input type='text' class='item_id' value='$row->id'></th>";
                        $msg .= "<th style=' text-align:  center;'>-</th>";
                        $msg .= "<th style=' text-align:  center;'><label class='btn btn-warning view'>View</label></th>";
                        $msg .= "<th style=' text-align:  center;'>-</th>";
                        $msg .= "</tr>"; 
                    }
                    $msg .= "<tr>";
                    $msg .= "<th style=' text-align:  center;'>$r</th>";
                    $msg .= "<th style=' text-align:  center;'>$row->cust_name</th>";
                    $msg .= "<th style=' text-align:  center;'>$row->heat_no</th>";
                    $msg .= "<th style=' text-align:  center;'><select style= 'width:200px;' class='form-control select2 status'><option value=''>Select</option><option value='0'>OK</option><option value='1'>NOT OK</option></select></th>";
                    $msg .= "<th style=' text-align:  center;'><textarea class='form-control status_remark' style='display:none;'></textarea></th>";
                    $msg .= "<th style='display:none;'><input type='text' class='item_id' value='$row->id'></th>";
                    $msg .= "<th style=' text-align:  center;'><label class='btn btn-success change'>CHANGE</label></th>";
                    $msg .= "<th style=' text-align:  center;'><label class='btn btn-warning view'>View</label></th>";
                    $msg .= "<th style=' text-align:  center;'><label class='btn btn-success edit'>Edit</label></th>";
                    $msg .= "</tr>";
                    
                }else{
                    
                    $msg .= "<tr>";
                    $msg .= "<th style=' text-align:  center;'>$r</th>";
                    $msg .= "<th style=' text-align:  center;'>$row->cust_name</th>";
                    $msg .= "<th style=' text-align:  center;'>$row->heat_no</th>";
                    $msg .= "<th style=' text-align:  center;'><select style= 'width:200px;' class='form-control select2 status' ><option value=''>Select</option><option value='0'>OK</option><option value='1'>NOT OK</option></select></th>";
                    $msg .= "<th style=' text-align:  center;'><textarea class='form-control status_remark' style='display:none;'></textarea></th>";
                    $msg .= "<th style='display:none;'><input type='text' class='item_id' value='$row->id'></th>";
                    $msg .= "<th style=' text-align:  center;'><label class='btn btn-success change'>CHANGE</label></th>";
                    $msg .= "<th style=' text-align:  center;'><label class='btn btn-warning view'>View</label></th>";
                    $msg .= "<th style=' text-align:  center;'><label class='btn btn-success edit' disabled='true'>Edit</label></th>";
                    $msg .= "</tr>";
                    
                }
            }
            $msg .= "</table>";
            echo $msg;
        }
    }
    
    public function update_change_status()
    {
        
        $date = new DateTime('now', new DateTimeZone('Asia/Kolkata'));
        $date1 = $date->format('Y-m-d h:m:s');
        
        $id=$this->input->post('id');
        $status_remark=$this->input->post('status_remark');
        $status=$this->input->post('status');
        
        $query = "select check_by_remark,updated_at,micro_status from tbl_hardness_main where id='$id'";
        $result = $this->db->query($query)->row();
        
        $update_dates=$result->updated_at;
        $micro_prev_status=$result->micro_status;
        $remark_prev=$result->check_by_remark;
        
        $update_data = array(
                'check_by_remark' => $remark_prev.",".$status_remark,
                'checked_by_status' => $status,
                'updated_at'=> $update_dates.",".$date1,
                'micro_status'=>$micro_prev_status.",".$status
            );
            $this->db->where('id', $id);
            $this->db->update('tbl_hardness_main', $update_data);
            
            if($status=="0"){
                $update_micro_flag = array(
                    'microflag' => 2
                );
                $this->db->where('id', $id);
                $this->db->update('tbl_hardness_main', $update_micro_flag);
            }  
            if($status=="1"){
                $update_micro_flag = array(
                    'microflag' => 0
                );
                $this->db->where('id', $id);
                $this->db->update('tbl_hardness_main', $update_micro_flag);
            }
    }

    public function send_to_micro_1(){
        $id=$this->input->post('hadness_id');
//        echo $id;
        $update_data = array(
                'microflag' => 1
            );
            $this->db->where('id', $id);
            $this->db->update('tbl_hardness_main', $update_data);
    }

    public function send_to_micro_0(){
        $id=$this->input->post('hadness_id');
//        echo $id;
        $update_data = array(
                'microflag' => 0
            );
            $this->db->where('id', $id);
            $this->db->update('tbl_hardness_main', $update_data);
    }
    
    public function micro_validation() {
        $item = $_POST['item_name'];
        $heat = $_POST['heat'];
        $dept= $this->session->userdata('dept');
        $query = "select id from tbl_hardness_main where item='$item' and heat_no='$heat' and microflag='1' and dept='$dept'";
        $result = $this->db->query($query)->row();
        if ($result) {
            echo "1";
        }
        exit();
    }
    
    public function edit_item_by_micro(){
        $itemid=$this->input->post('id');
//        echo $itemid;
        $data['count'] = 0;
        $dept= $this->session->userdata('dept');
        $query = "select * from tbl_hardness_main where `id`='$itemid'";
        $id_data = $this->db->query($query)->row();
        $item_name=$id_data->item;
        $heat = $id_data->heat_no;
        $data['heat'] = $heat;
        if ($id_data) {
            $id = $id_data->id;
            $data['main_data'] = $id_data;
            $query1 = "select * from tbl_hardness_chilldepth where hardness_chill_id='$id' and dept='$dept'";
            $data['D'] = $this->db->query($query1)->result();

            $query2 = "select * from tbl_hardness_observation where hardness_chill_id='$id' and dept='$dept'";
            $data['D1'] = $this->db->query($query2)->result();

            $query3 = "select * from tbl_hardness_chilldepth_b where hardness_chill_id='$id' and dept='$dept'";
            $data['D2'] = $this->db->query($query3)->result();

            $query4 = "select * from tbl_hardness_observation_b where hardness_chill_id='$id' and dept='$dept'";
            $data['D3'] = $this->db->query($query4)->result();
            
        }
        $this->load->view('pages/' .$dept.'/'. $item_name, $data);
//        cho $item_name;
      //  print_r($data);
        
    }
    
    public function summary_report(){
        $query = "SELECT tbl_cam_scrap_l_val.`id`, tbl_cam_scrap_l_val.`hardness_chill_id`,tbl_cam_scrap_l_val.`c_date`,"
                . "tbl_cam_scrap_l_val.`heat_no`,tbl_cam_scrap_l_val.L_val,tbl_cam_scrap_l_val.ladle_result, "
                . "tbl_hardness_main.cust_name FROM tbl_hardness_main "
                . "LEFT JOIN tbl_cam_scrap_l_val ON tbl_hardness_main.id = tbl_cam_scrap_l_val.hardness_chill_id;";
        $data['data'] = $this->db->query($query)->result();
        $data['template'] = 'summary_report';
        $data['title'] = 'Summary Report';
        $this->layout_admin($data);
    }
    public function summary_report_form(){
        $data['template'] = 'summary_report_form';
        $data['title'] = 'Summary Report Form';
        $this->layout_admin($data);
    }
    
    public function get_item_data_summary() {
        $e_date = $_POST["e_date"];
        $s_date = $_POST["s_date"];
        
        $dept= $this->session->userdata('dept');
        $query = "select item,cust_name from tbl_hardness_main where  c_date >='$s_date' and c_date<='$e_date' and dept='$dept' group by item";
            $result = $this->db->query($query)->result();
        
        $msg = '';
        if ($result) {
            $msg .= "<select name='item' class='form-control select2 item' style='' required=''>";
            $msg .= "<option value=''>Select</option>";

            foreach ($result as $row) {
                $msg .= "<option value='$row->item'>$row->cust_name</option>";
            }
            $msg .= "<option value='ALL'>All Items</option>";
            $msg .= "</select>";
            echo $msg;
        }
    }
    
    public function get_summary_report_data() {
        $item = $this->input->post('item');
        $s_date = $this->input->post('s_date');
        $e_date = $this->input->post('e_date');
        $status = $this->input->post('status');
		$dept= $this->session->userdata('dept');
        $stmt = '';
        $item_stmt = '';
        if ($status == "1") {
            $stmt = "and tm.status='$status'";
        } else if ($status == "ALL") {
            $stmt = "";
        } else {
            $stmt = "and tm.status='$status'";
        }
        if ($item != "ALL") {
            $item_stmt = "tv.item='$item' and ";
        } else {
            $item_stmt = "";
        }
        $query = "select tv.c_date,tv.item,tv.heat_no,(tv.L_val) as l,(tv.CP_val) as imp,(tv.ladle_result) as status,tm.cust_name,tm.status as l_status from tbl_cam_scrap_l_val tv "
                . "LEFT JOIN tbl_hardness_main tm ON tv.hardness_chill_id=tm.id where $item_stmt  tv.c_date>='$s_date' and tv.c_date<='$e_date' $stmt and tv.L_val!='' and tm.dept='$dept' order by tm.id,tv.id ASC";

        $result['status'] = $status;
        $result['data'] = $q_data = $this->db->query($query)->result();

        $status_ladle = array();
        foreach ($q_data as $row) {
            $status_ladle[] = $row->status;}

        if ($result) {
            $this->load->view('pages/summary_report', $result);}
    }

    public function show_hardness_report_summary()
    {
        $view_data = $this->input->post('view_data'); 
        $ex_data= explode(",", $view_data);
        
        $dept= $this->session->userdata('dept');
        $query = "select * from tbl_hardness_main"
                . " where `item`='$ex_data[1]' and heat_no='$ex_data[0]' and c_date='$ex_data[2]' and dept='$dept'";


        $result['data'] = $id_data = $this->db->query($query)->row();
        $item=$id_data->item;
        $id=$id_data->id;
        
        $query1 = "select * from tbl_cam_scrap"
                . " where hardness_chill_id='$id' and dept='$dept' " ;
        $result['D1'] = $this->db->query($query1)->result();
        $query2 = "select * from tbl_brinell_scrap"
                . " where hardness_chill_id='$id' and dept='$dept'";

        $result['D2'] = $this->db->query($query2)->result();
       
        $this->load->view('pages/'.$dept.'_reports/'.$item.'_report', $result);
    }
    
    public function get_hardness_report_pagewise_data(){
        $id = $_POST['hard_id'];
        $dept= $this->session->userdata('dept');
        $query = "select * from tbl_hardness_main"
                . " where `id`='$id' and dept='$dept'";       

        $result['data'] = $id_data = $this->db->query($query)->row();
        $item=$id_data->item;
        
        $query1 = "select * from tbl_cam_scrap"
                . " where hardness_chill_id='$id' and dept='$dept' " ;
        $result['D1'] = $this->db->query($query1)->result();
        $query2 = "select * from tbl_brinell_scrap"
                . " where hardness_chill_id='$id' and dept='$dept'";

        $result['D2'] = $this->db->query($query2)->result();
        
//    echo '<pre>'; print_r($result); echo '</pre>';
        
        $this->load->view('pages/'.$dept.'_reports/'.$item.'_report', $result);
    }
    
    public function get_page_wise_item() {
        $item_name = $_POST["item"];
        $heat = $_POST["heat_no"];
        $input_date = $_POST['c_date'];
        $page_no = $_POST['page_no'];
        
        $data['heat'] = $_POST["heat_no"];
        $data['count'] = $_POST["count_item"];
        $data['input_date']=$_POST['c_date'];
        $dept= $this->session->userdata('dept');
         $query = "select * from tbl_hardness_main where `c_date`='$input_date' and `item`='$item_name' and `heat_no`='$heat' and dept='$dept' and page_no='$page_no'";
        $id_data = $this->db->query($query)->row();
        //print_r($id_data);
        //exit();
        
        if ($id_data) {
            $id = $id_data->id;
            
            $data['main_data'] = $id_data;
            $query1 = "select * from tbl_cam_scrap where hardness_chill_id='$id' and dept='$dept' and page_no='$page_no'";
            $data['C'] = $this->db->query($query1)->row();

            $query2 = "select * from tbl_brinell_scrap where hardness_chill_id='$id' and dept='$dept' and page_no='$page_no'";
            $data['B'] = $this->db->query($query2)->row();
            
            $query3 = "select ladle_result from tbl_cam_scrap_l_val where hardness_chill_id='$id' and dept='$dept' and page_no='$page_no'";
            $data['L_R'] = $this->db->query($query3)->result();
            $data['page_no']=$page_no;
           
           $this->load->view('pages/' .$dept.'/'. $item_name, $data);
        } else {
            $data['main_data'] = '';
            $data['D'] = '';
            $data['D1'] = '';
            $data['D2'] = '';
            $data['D3'] = '';
            $data['page_no']=$page_no;
            $this->load->view('pages/' .$dept.'/'. $item_name, $data);
        }
    }
    
    
    
    
    // DB BACKUP
    
    public function db_backup_fun()
    {
        $prefs = array(     
    'format'      => 'zip',             
    'filename'    => 'pcl_hardness.sql'
    );


$backup =& $this->dbutil->backup($prefs); 

$db_name = 'backup-on-'. date("Y-m-d-H-i-s") .'.zip';
$save = 'DB_BACKUP/'.$db_name;

$this->load->helper('file');
write_file($save, $backup); 


$this->load->helper('download');
force_download($db_name, $backup);
    }
}