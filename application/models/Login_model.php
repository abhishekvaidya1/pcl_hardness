<?php

class Login_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function login() {

        /*
         * Getting MAC Address using PHP
         * Md. Nazmul Basher
         */
//ob_start(); // Turn on output buffering
//system('ipconfig /all'); //Execute external program to display output
//$mycom=ob_get_contents(); // Capture the output into a variable
//ob_clean(); // Clean (erase) the output buffer
//$findme = "Physical";
//$pmac = strpos($mycom, $findme); // Find the position of Physical text
//$mac=substr($mycom,($pmac+36),17); // Get Physical Address
//echo $mac;
//        

        $username = $this->input->post('username');
        $password = $this->input->post('pass');
        $this->db->select('*');
        $this->db->from('tbl_user');
        $this->db->where('name', $username);
        $this->db->where('password', $password);
        //$this->db->where('mac_address', $mac);
        return $this->db->get()->row();
    }
    
    public function save_data() {

        $data = $_POST;
        
        $date = new DateTime('now', new DateTimeZone('Asia/Kolkata'));
        $date1 = $date->format('Y-m-d');
        $data['c_date']=$c_date=date("Y-m-d", strtotime($data['c_date']));
        $item_name1=$data['item'];
        $heat1=$data['heat_no'];
        $page_no=$data['page_no'];
        $query = "select id from tbl_hardness_main where `c_date`='$c_date' and `item`='$item_name1' and `heat_no`='$heat1' and page_no='$page_no'";
        $result12 = $this->db->query($query)->row();
        
        if (!empty($result12)) {
           $hardness_id = $result12->id;
            // DELETE HARDNESS ID
            $this->db->where('hardness_chill_id', $hardness_id);
            $this->db->delete('tbl_cam_scrap');

            $this->db->where('hardness_chill_id', $hardness_id);
            $this->db->delete('tbl_brinell_scrap');
            
            $this->db->where('hardness_chill_id', $hardness_id);
            $this->db->delete('tbl_xbar_data');
            
            $this->db->where('hardness_chill_id', $hardness_id);
            $this->db->delete('tbl_cam_scrap_l_val');
            
            $this->db->where('hardness_chill_id', $hardness_id);
            $this->db->delete('tbl_cam_scrap_pointwise');
            
            $ladle_status='';
            if(in_array("1",$data['ladle_result']))
            {
             $ladle_status="1";   
            }
            else{$ladle_status="0";}

            // UPDATE HARDNESS MAIN
            $update_data = array(
                'cust_name' => $data['cust_name'],
                'ladle_status' => $ladle_status,
                'c_date' => $data['c_date'],
                'part_no' => $data['part_no'],
                'qa_ref_no' => $data['qa_ref_no'],
                'approved_by' => $data['approved_by'],
                'checked_by' => $data['checked_by'],
                'status' => $data['status'],
                'remark' => $data['remark'],
                'checked_by_status' => '',
                'dept' => $this->session->userdata('dept'),
                'page_no'=>$page_no    
            );
            $this->db->where('id', $hardness_id);
            $this->db->update('tbl_hardness_main', $update_data);
            
            $b = array(
                'hardness_chill_id' => $hardness_id,
                'c_date' => $data['c_date'],
                'item' => $item_name1,
                'heat_no' => $data['heat_no'],
                'L_val' => implode(",", $data['l_val']),
                'CP_val' => implode(",", $data['CP_val']),
                'C_val' => implode(",", $data['c_val']),
                'mm_val' => implode(",", $data['mm_val']),
                'created_on' => $date1,
                'created_by' => $this->session->userdata('user_name'),
                'page_no' => $page_no,
                'dept' => $this->session->userdata('dept')
                );
                $this->db->insert('tbl_cam_scrap', $b);
                
            $c = array(
                'hardness_chill_id' => $hardness_id,
                'c_date' => $data['c_date'],
                'item' => $item_name1,
                'heat_no' => $data['heat_no'],
                'b_val' => implode(",", $data['b_val']),
                'created_on' => $date1,
                'created_by' => $this->session->userdata('user_name'),
                'page_no' =>$page_no,
                'dept' => $this->session->userdata('dept')
                );
                $this->db->insert('tbl_brinell_scrap', $c);
                
            $d = array(
                'hardness_chill_id' => $hardness_id,
                'c_date' => $data['c_date'],
                'item' => $item_name1,
                'heat_no' => $data['heat_no'],
                'at_point' => implode(",", $data['b_val']),
                'data_values' =>$page_no,
                'created_on' => $date1,
                'created_by' => $this->session->userdata('user_name'),                
                'dept' => $this->session->userdata('dept')
                );
                $this->db->insert('tbl_xbar_data', $d);
                
                $mm_val=array();
                $at_point_name= explode(",", $data['at_point_name']);
                $mm_val=array_chunk($data['mm_val'],count($data['c_val']));
                for($i=0;$i<count($at_point_name);$i++)
                {
                $e = array(
                'hardness_chill_id' => $hardness_id,
                'c_date' => $data['c_date'],
                'item' => $item_name1,
                'heat_no' =>$data['heat_no'],
                'mm_val' => implode(",", $mm_val[$i]),
                'at_point' =>$at_point_name[$i],
                'created_on' => $date1,
                'created_by' => $this->session->userdata('user_name'),                
                'dept' => $this->session->userdata('dept'),
                'page_no' =>$page_no
                );
                 $this->db->insert('tbl_cam_scrap_pointwise', $e);   
                }
                
                $c_val=array();
                $c_val=array_chunk($data['c_val'],$data['c_count_l_wise']);
                for($i=0;$i<count($data['l_val']);$i++)
                {
                $f = array(
                'hardness_chill_id' => $hardness_id,
                'c_date' => $data['c_date'],
                'item' => $item_name1,
                'heat_no' =>$data['heat_no'],
                'L_val' =>$data['l_val'][$i],
                'CP_val' =>$data['CP_val'][$i],
                'C_val' => implode(",", $c_val[$i]),
                'ladle_result' => $data['ladle_result'][$i],
                'created_on' => $date1,
                'created_by' => $this->session->userdata('user_name'),                
                'dept' => $this->session->userdata('dept'),
                'page_no' =>$page_no
                );
                 $this->db->insert('tbl_cam_scrap_l_val', $f);   
                }
//              print_r($c_val);   
                
            echo $hardness_id;
        }

        // -------------------------------------------------------------------------------  
        else {
            $ladle_status='';
            if(in_array("1",$data['ladle_result']))
            {
             $ladle_status="1";   
            }
            else{$ladle_status="0";}
            
                $a = array(
                'item' => $data['item'],
                'cust_name' => $data['cust_name'],
                'c_date' => $data['c_date'],
                'heat_no' => $data['heat_no'],
                'ladle_status' => $ladle_status,
                'part_no' => $data['part_no'],
                'qa_ref_no' => $data['qa_ref_no'],
                'checked_by' => $data['checked_by'],
                'approved_by' => $data['approved_by'],
                'created_by' => $this->session->userdata('user_name'),
                'created_on' => $date1,
                'status' => $data['status'],
                'remark' => $data['remark'],
                'dept' => $this->session->userdata('dept'),
                'page_no'=>$page_no    
                );
                $this->db->insert('tbl_hardness_main', $a);
                $insert_id = $this->db->insert_id();
            
            $b = array(
                'hardness_chill_id' => $insert_id,
                'c_date' => $data['c_date'],
                'item' => $item_name1,
                'heat_no' => $data['heat_no'],
                'L_val' => implode(",", $data['l_val']),
                'CP_val' => implode(",", $data['CP_val']),
                'C_val' => implode(",", $data['c_val']),
                'mm_val' => implode(",", $data['mm_val']),
                'created_on' => $date1,
                'created_by' => $this->session->userdata('user_name'),
                'page_no' => $page_no,
                'dept' => $this->session->userdata('dept')
                );
                $this->db->insert('tbl_cam_scrap', $b);
                
            $c = array(
                'hardness_chill_id' => $insert_id,
                'c_date' => $data['c_date'],
                'item' => $item_name1,
                'heat_no' => $data['heat_no'],
                'b_val' => implode(",", $data['b_val']),
                'created_on' => $date1,
                'created_by' => $this->session->userdata('user_name'),
                'page_no' => $page_no,
                'dept' => $this->session->userdata('dept')
                );
                $this->db->insert('tbl_brinell_scrap', $c);
                
                $d = array(
                'hardness_chill_id' => $insert_id,
                'c_date' => $data['c_date'],
                'item' => $item_name1,
                'heat_no' => $data['heat_no'],
                'at_point' => implode(",", $data['b_val']),
                'data_values' =>$page_no,
                'created_on' => $date1,
                'created_by' => $this->session->userdata('user_name'),                
                'dept' => $this->session->userdata('dept')
                );
                $this->db->insert('tbl_xbar_data', $d);
                
                $mm_val=array();
                $at_point_name= explode(",", $data['at_point_name']);
                $mm_val=array_chunk($data['mm_val'],count($data['c_val']));
                for($i=0;$i<count($at_point_name);$i++)
                {
                $e = array(
                'hardness_chill_id' => $insert_id,
                'c_date' => $data['c_date'],
                'item' => $item_name1,
                'heat_no' =>$data['heat_no'],
                'mm_val' => implode(",", $mm_val[$i]),
                'at_point' =>$at_point_name[$i],
                'created_on' => $date1,
                'created_by' => $this->session->userdata('user_name'),                
                'dept' => $this->session->userdata('dept'),
                'page_no' =>$page_no
                );
                 $this->db->insert('tbl_cam_scrap_pointwise', $e);   
                }
                
                $c_val=array();
                $c_val=array_chunk($data['c_val'],$data['c_count_l_wise']);
                for($i=0;$i<count($data['l_val']);$i++)
                {
                $f = array(
                'hardness_chill_id' => $insert_id,
                'c_date' => $data['c_date'],
                'item' => $item_name1,
                'heat_no' =>$data['heat_no'],
                'L_val' =>$data['l_val'][$i],
                'CP_val' =>$data['CP_val'][$i],
                'C_val' => implode(",", $c_val[$i]),
                'ladle_result' => $data['ladle_result'][$i],
                'created_on' => $date1,
                'created_by' => $this->session->userdata('user_name'),                
                'dept' => $this->session->userdata('dept'),
                'page_no' =>$page_no
                );
                 $this->db->insert('tbl_cam_scrap_l_val', $f);   
                }
                echo $insert_id;
//                print_r($c_val);
//                exit();
                
                
        }
        // END 
        // -----/B-------
    }

    public function get_all_heat() {
        $query = "select heat_no from tbl_hardness_main group by heat_no";
        $result = $this->db->query($query)->result();
        if ($result) {
            return $result;
        }
    }
//        public function item_db_data() {
//        $this->DB2 = $this->load->database('melt_db', TRUE);
//        $dept= $this->session->userdata('dept');
//        $query = "select ipcs_item from tbl_ipcs_sheet where dept='$dept' group by ipcs_item order by id DESC";
//        return $this->DB2->query($query)->result();
//        $this->DB2->close();
//    }
        public function item_db_data() {
        $dept= $this->session->userdata('dept');
        $query = "select item,item_description from tbl_item_data where dept='$dept'";
        return $this->db->query($query)->result();
        
    }
    
    
}