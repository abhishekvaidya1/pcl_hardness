<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>js/datetimepicker-master/jquery.datetimepicker.css"/>                      
<script type="text/javascript" src="<?php echo base_url();?>js/datetimepicker-master/jquery.datetimepicker.css"></script>
<link rel="stylesheet" href="css/style.css">
<form class="form-horizontal" action="#" id="817_<?php echo $count; ?>">
    <div class="page-content-wrap">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><strong>Hardness Chilldepth  - 817 - <?php echo $heat; ?> </strong> </h3>
                    </div>
                    <div class="panel-body">                                                                        
                        <div class="row">
                            <div class="col-md-6">
                                <input class="form-control item" name="item" required="" value="817" readonly="" style=" display: none;">
                                <input type="text" class=" form-control" name="heat_no" required="" id="heat_no" value="<?php echo $heat; ?>" style=" display: none;">
                                <div class="panel-body">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Part No</label>
                                        <div class="col-md-6">                                        
                                            <input type="text" name="part_no" class="form-control part_no" required="" value="55353288" readonly="" style="color:#000;">
                                            <?php
                                            if(@$main_data->c_date) {
                                                ?>
                                                <input type="text" class="form-control check_exist<?php echo json_decode($count); ?>" required="" style="color:#000; display:  none;" value="1">
                                                <input type="text" class="form-control check_exist_c<?php echo json_decode($count); ?>" required="" style="color:#000; display:  none;" value="1">
                                            <?php } else { ?>
                                                <input type="text" class="form-control check_exist<?php echo json_decode($count); ?>" required="" style="color:#000; display:  none;">
                                                <input type="text" class="form-control check_exist_c<?php echo json_decode($count); ?>" required="" style="color:#000; display:  none;">
                                            <?php } ?>
                                        </div>
                                    </div> 
                                </div>
                            </div> 
                            <div class="col-md-6">
                                <div class="panel-body">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Date</label>
                                        <div class="col-md-6">
                                            <?php
                                            if (@$main_data->c_date) {
                                                ?>
                                                <input type="text" class=" form-control datetimepicker2 c_date" name="c_date" required="" id="d1" value="<?php echo @$main_data->c_date; ?>">
                                            <?php
                                            } else {
                                                $date = new DateTime('now', new DateTimeZone('Asia/Kolkata'));
                                                $date1 = $date->format('Y-m-d');
                                                ?>
                                                <input type="text" class=" form-control datetimepicker2 c_date" name="c_date" required="" id="d1" value="<?php echo $date1; ?>">
                                        <?php } ?>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </div>
                        <div id="item_img"><img src="Audio/817_img.png" style=" display: block;margin-left: auto;margin-right: auto;"></div>
                    </div>
                </div>
            </div>
        </div>                    
        <div class="row">
            <div class="col-md-12">
                    <!-- START BASIC TABLE SAMPLE -->
                <div class="panel panel-default" style="overflow-x:auto;overflow-y:auto;border: 0px;">
                    <div class="panel-heading">
                        <h3 class="panel-title">OBSERVATIONS</h3>
                    </div>
                    <div class="panel-body">
                        <label class=" btn btn-primary addmore_817_<?php echo $count; ?>">L <i class="fa fa-plus"></i></label>
                        <br><br><br>
                        <table class="table table-bordered table_817_<?php echo $count; ?>" >
                            <tbody id="append_data_817_<?php echo $count; ?>" class="append_data_817_<?php echo $count; ?>">
                                <tr>
                                    <th>AT POINT</th>
                                    <th></th>
                                    <td >ZONE 1 'O'</td>
                                    <td >ZONE 1 'A' At 85º</td>
                                    <td >ZONE 1 'B' At 85 º</td>
                                    <td >ZONE 2 'C'</td>
                                    <td >ZONE 2 'D'</td>
                                    <td >Chill Depth</td>
                                </tr>
                            <input type="text" name="at_point[]" value="ZONE 1 'O'" style=" display: none;">
                            <input type="text" name="at_point[]" value="ZONE 1 'A' At 85º" style=" display: none;">
                            <input type="text" name="at_point[]" value="ZONE 1 'B' At 85 º" style=" display: none;">
                            <input type="text" name="at_point[]" value="ZONE 2 'C'" style=" display: none;">
                            <input type="text" name="at_point[]" value="ZONE 2 'D'" style=" display: none;">
                            <input type="text" name="at_point[]" value="Chill Depth" style=" display: none;">
                            <tr>
                                <th >CUSTOMER SPEC.</th>
                                <th >MM - HRc</th>
                                <td >02 – 50 Min.</td>
                                <td >02 – 50 Min.</td>
                                <td >02 – 50 Min.</td>
                                <td >02 – 48 Min.</td>
                                <td >02 – 48 Min.</td>
                                <td >3  mm Min. at peak + 20 º</td>
                            </tr>
                            <input type="text" name="cust_spec[]" value="02 – 50 Min." style=" display: none;">
                            <input type="text" name="cust_spec[]" value="02 – 50 Min." style=" display: none;">
                            <input type="text" name="cust_spec[]" value="02 – 50 Min." style=" display: none;">
                            <input type="text" name="cust_spec[]" value="02 – 48 Min." style=" display: none;">
                            <input type="text" name="cust_spec[]" value="02 – 48 Min." style=" display: none;">
                            <input type="text" name="cust_spec[]" value="3  mm Min. at peak + 20 º" style=" display: none;">
                            <tr>
                                <th>WORKING SPEC.</th>
                                <th >MM - HRc</th>
                                <td >03 – 50 Min.</td>
                                <td >03 – 50 Min.</td>
                                <td >03 – 50 Min.</td>
                                <td >03 – 48 Min.</td>
                                <td >03 – 48 Min.</td>
                                <td >3  mm Min. All Over</td>
                            </tr>
                            <input type="text" name="working_spec[]" value="03 – 50 Min." style=" display: none;">
                            <input type="text" name="working_spec[]" value="03 – 50 Min." style=" display: none;">
                            <input type="text" name="working_spec[]" value="03 – 50 Min." style=" display: none;">
                            <input type="text" name="working_spec[]" value="03 – 48 Min." style=" display: none;">
                            <input type="text" name="working_spec[]" value="03 – 48 Min." style=" display: none;">
                            <input type="text" name="working_spec[]" value="5  mm Min. All Over" style=" display: none;">
                            <?php
                            if ($main_data) {
                                $a1 = '';
                                $a3 = '';
                                foreach ($D as $row) {
                                    $a1[] = explode(",", $row->data_value);
                                    $a2[] = explode(",", $row->data_value1);
                                }

                                $g = 0;
                                $L = '';
                                $L_C = '';
                                $L_C_l = '';
                                $a = '';
                                foreach ($D1 as $row) {
                                    $L_C[] = $row->L_C;
                                    $L_C_l .= $row->L_C . ",";
                                    $L[] = $row->L;
                                }
                                $L_C_l = explode(",", rtrim($L_C_l, ","));
                                for ($k = 0; $k < count($L); $k++) {
                                    $L_C1 = explode(",", $L_C[$k]);
                                    ?>
                                    <tr>
                                        <td><div class="input-group"><span class="input-group-addon">L - </span><input type='text'  class="form-control L1_817_<?php echo json_decode($count); ?> copy_l<?php echo json_decode($count); ?>" name="L[]" value="<?php echo $L[$k]; ?>" id="c<?php echo json_decode($count); ?>_<?php echo $k; ?>"></div><input  class="btn btn-info btn-rounded add_c_<?php echo json_decode($count); ?>"  value="C-<?php echo $k; ?>"></td></tr>
                                    <?php
                                    for ($i = 0; $i < count($L_C1); $i++) {
                                        ?>
                                        <tr><td class="drag-handler"></td><td class="recipe-table__cell"><div class="input-group"><span class="input-group-addon">C - </span><input type="text"  style="" class="form-control a_count_817_<?php echo json_decode($count); ?> c_add" name="L<?php echo $k; ?>[]" value="<?php echo $L_C1[$i]; ?>"></div></td>
                                            <?php
                                            for ($j = 0; $j < count($a2[$g]); $j++) {
                                                $action = array('48', '40', '40', '40','40', '');
                                                ?>
                                                <?php
                                                if ($a2[$g][$j] < $action[$j]) {
                                                    ?>
                                                    <td><input type="text" style=" color: red;" class="form-control action<?php echo $j; ?> " name="ab[]" value="<?php print_r($a2[$g][$j]); ?>"></td>
                                                <?php } else {
                                                    ?>
                                                    <td><input type="text" style="" class="form-control action<?php echo $j; ?> " name="ab[]" value="<?php print_r($a2[$g][$j]); ?>"></td>
                                                    <?php }
                                                ?>
                                            <?php } ?></tr>    
                                            <?php
                                                $g++;
                                            }
                                        }
                                    }

                                    if ($main_data) {
                                        ?>
                                <input type="text" class=" form-control" name="hadness_id" id="hadness_id" value="<?php echo $main_data->id; ?>" style=" display: none;">    
                                <?php } else {
                                    ?>
                                <input type="text" class=" form-control" name="hadness_id" id="hadness_id" value="" style=" display: none;">    
                            <?php } ?>                    
                            </tbody>
                        </table>

                        <!--------------------B----------------------------------->
<!--                        <label class=" btn btn-danger addmore_b_817_<?php echo json_decode($count); ?>">B <i class="fa fa-plus"></i></label>-->
                        <br><br><br>
                        <table class="table table-bordered table_b_817_<?php echo $count; ?>" >
                            <tbody id="append_data_b_817_<?php echo $count; ?>" class="append_data_b_817_<?php echo $count; ?>">
                                <tr>
                                    <th>AT POINT</th>
                                    
                                    <th> </th>
                                    <th colspan="14">BRINELL HARDNESS(5/750 Kg Load )</th>
                                </tr>
                            <input type="text" name="at_point_b[]" value="BRINELL HARDNESS AT 0.5 mm FROM CAST SURFACE AFTER GRINDING (5/750 KG LOAD)" style=" display: none;">
                            <input type="text" name="at_point_b[]" value="BRINELL HARDNESS AT 0.5 mm FROM CAST SURFACE AFTER GRINDING (5/750 KG LOAD)" style=" display: none;">
                            <input type="text" name="at_point_b[]" value="BRINELL HARDNESS AT 0.5 mm FROM CAST SURFACE AFTER GRINDING (5/750 KG LOAD)" style=" display: none;">
                            <input type="text" name="at_point_b[]" value="BRINELL HARDNESS AT 0.5 mm FROM CAST SURFACE AFTER GRINDING (5/750 KG LOAD)" style=" display: none;">
                            <input type="text" name="at_point_b[]" value="BRINELL HARDNESS AT 0.5 mm FROM CAST SURFACE AFTER GRINDING (5/750 KG LOAD)" style=" display: none;">
                            <input type="text" name="at_point_b[]" value="BRINELL HARDNESS AT 0.5 mm FROM CAST SURFACE AFTER GRINDING (5/750 KG LOAD)" style=" display: none;">
                            <input type="text" name="at_point_b[]" value="BRINELL HARDNESS AT 0.5 mm FROM CAST SURFACE AFTER GRINDING (5/750 KG LOAD)" style=" display: none;">
                            <tr>
                                <th >CUSTOMER SPEC.</th>
                                <td colspan="2">BRG 1 200 - 285</td>
                                <td colspan="2">BRG. 3 200 - 285</td>
                                <td colspan="2">BRG. 4 200 - 285</td>
                                <td colspan="2">BRG. 6 200 - 285</td>
                                <td colspan="2">COLLAR 1 200 - 285</td>
                                <td colspan="2">COLLAR 2 200 - 285</td>
                                <td colspan="2">COLLAR 3 200 - 285</td>
                            </tr>
                            <input type="text" name="cust_spec_b[]" value="BRG 1 200 - 285" style=" display: none;">
                            <input type="text" name="cust_spec_b[]" value="BRG 3 200 - 285" style=" display: none;">
                            <input type="text" name="cust_spec_b[]" value="BRG 5 200 - 285" style=" display: none;">
                            <input type="text" name="cust_spec_b[]" value="BRG. 6 200 - 285" style=" display: none;">
                            <input type="text" name="cust_spec_b[]" value="COLLAR 1 200 - 285" style=" display: none;">
                            <input type="text" name="cust_spec_b[]" value="COLLAR 2 200 - 285" style=" display: none;">
                            <input type="text" name="cust_spec_b[]" value="COLLAR 3 200 - 285" style=" display: none;">
                            
                            <tr>
                                <th>WORKING SPEC.</th>
                                <td colspan="2">BRG. 1 215 - 278</td>
                                <td colspan="2">BRG. 3 215 - 278</td>
                                <td colspan="2">BRG. 4 215 - 278</td>
                                <td colspan="2">BRG. 6 215 - 278</td>
                                <td colspan="2">COLLAR 1 215 - 278</td>
                                <td colspan="2">COLLAR 2 215 - 278</td>
                                <td colspan="2">COLLAR 3 215 - 278</td>   
                            </tr>
                            <input type="text" name="working_spec_b[]" value="BRG. 1 215 - 278" style=" display: none;">
                            <input type="text" name="working_spec_b[]" value="BRG. 3 215 - 278" style=" display: none;">
                            <input type="text" name="working_spec_b[]" value="BRG. 4 215 - 278" style=" display: none;">
                            <input type="text" name="working_spec_b[]" value="BRG. 6 215 - 278" style=" display: none;">
                            <input type="text" name="working_spec_b[]" value="COLLAR 1 215 - 278" style=" display: none;">
                            <input type="text" name="working_spec_b[]" value="COLLAR 2 215 - 278" style=" display: none;">
                            <input type="text" name="working_spec_b[]" value="COLLAR 3 215 - 278" style=" display: none;">
<?php
if ($D2) {
    $a1 = '';
    $a3 = '';
    foreach ($D2 as $row) {
        $a1[] = explode(",", $row->data_value);
    }

    $g = 0;
    $L = '';
    $L_C = '';
    $L_C_l = '';
    $a = '';
    foreach ($D1 as $row) {
        $L_C[] = $row->L;
        $L_C_l .= $row->L . ",";
        $L[] = $row->L;
    }
    $L_C_l = explode(",", rtrim($L_C_l, ","));
    for ($k = 0; $k < count($L); $k++) {
        $L_C1 = explode(",", $L_C[$k]);
        ?>
                                    <tr>
                                        <td><div class="input-group"><span class="input-group-addon">L - </span><input type='text'  class="form-control L1_b_817_<?php echo json_decode($count); ?> b_count_817_<?php echo json_decode($count); ?>" name="LB[]" value="<?php echo $L[$k]; ?>" id="cc<?php echo json_decode($count); ?>_<?php echo $k; ?>" readonly="" style="color:black;"></div></td>
        <?php
        for ($i = 0; $i < count($L_C1); $i++) {
            ?>

                                            <?php
                                            for ($j = 0; $j < count($a1[$g]); $j++) {
                                                if ($a1[$g][$j] < 200 || $a1[$g][$j] > 285) {
                                                    ?>
                                                    <td><input type="text"  class="form-control b_action" style="color: red;" name="b<?php echo $g; ?>[]" value="<?php print_r($a1[$g][$j]); ?>"></td>         
                                                <?php } else { ?>
                                                    <td><input type="text"  class="form-control b_action" name="b<?php echo $g; ?>[]" value="<?php print_r($a1[$g][$j]); ?>"></td> 
                                                <?php }
                                            } ?></tr>    
                                            <?php
                                            $g++;
                                        }
                                    }
                                }
                                ?>
                            </tbody>
                        </table>

                        <!-----------------/B---------------------------------------->

                        <table class="table table-bordered">
                            <tr>
                                <th><div id="item_img" ><img src="Audio/817_cam.png" style="" class=" "></div></th>
                                <th><textarea class=" form-control" name="remark" placeholder="REMARK"><?php echo @$main_data->remark; ?></textarea></th>
                            </tr>
                        </table>

                        <table class="table table-bordered">
                            <?php
                            if($this->session->userdata('access')=="5")
                            {?>
                            <tr>
                                <td>Checked By</td>
                                <td><input type="text" class="form-control approved_by " name="checked_by" value="<?php echo @$main_data->checked_by; ?>"></td>
                            </tr>
                            <tr>
                                <td>Checked By(Micro Lab User)</td>
                                <td>
                                    <?php
                                    if(@$main_data->checked_by_status=="1")
                                    {?>
                                    <input type="checkbox" class="form-control " name="checked_by_status" checked="">
                                    <?php } else{ ?>
                                    <input type="checkbox" class="form-control " name="checked_by_status">
                                    <?php } ?>
                                </td>
                            </tr>
                            <?php } else { ?>
                            <tr>
                                <td>Approved By</td>
                                <td><input type="text" class="form-control approved_by " name="approved_by" value="<?php echo @$main_data->approved_by; ?>"></td>
                            </tr>
                            <?php } ?>
                            
                        </table>
                        <div class="panel-footer">
                            <?php
                            if($this->session->userdata('access')=="5")
                            {?>
                            <label class="btn btn-primary pull-right submit" id="save" name="print_option" value="" onclick="submit('817_<?php echo $count; ?>');">Save</label>
                            <?php } else {?>
                            <label class="btn btn-primary pull-left submit" id="submit" name="print_option" value="" onclick="submit('817_<?php echo $count; ?>');">Submit</label>
                            <?php } ?>
                            <input type="text" class="status" name="status" style=" display: none;">
                        </div> 
                    </div>
                </div>
            </div>    
        </div>
    </div>
</form>
<div id="loader_817_<?php echo $count;?>" style="  margin-left: 500px; margin-top: 800px; position: absolute; width: 100px; display:  none;"><img src="loading.gif" style=" width: 150px;"></div>

<!--<script type="text/javascript" src="<?php echo base_url();?>js/plugins/jquery/jquery.min.js"></script>-->
<script>
var all=<?php echo json_decode($count); ?>;
var all1=<?php echo json_decode($count); ?>;
all="817_" + all;
window['i_817_'+<?php echo json_decode($count); ?>] = 0; 
window['j_817_'+<?php echo json_decode($count); ?>] = -1; 
window['k_817_'+<?php echo json_decode($count); ?>] = 0; 
var k_817= 0;
var add_li = <?php echo json_decode($count); ?>;
var item_count=$("#item_count").val();
add_li= "add_l" + item_count;
var add_more;
add_more= <?php echo json_decode($count); ?>;
add_more= "addMore817_" + add_more; 
$(".addmore_817_<?php echo json_decode($count); ?>").on('click', function () {
window["addMore817_" + <?php echo json_decode($count); ?>]();

});
//
window["addMore817_" + <?php echo json_decode($count); ?>] = function() {
$.ajax({
url: "",
cache: false,
async: false,
success: function (data) {
    var l_length=0;
    l_length = document.getElementsByClassName('L1_817_'+<?php echo json_decode($count); ?>);
   var l_length_count=parseInt(l_length.length);
var data = "<tr><td><div class='input-group'><span class='input-group-addon'>L - </span><input type='text' placeholder='L-"+ l_length_count+"' class='form-control L1_817_"+<?php echo json_decode($count); ?>+"  copy_l"+<?php echo json_decode($count); ?>+"' name='L[]' required='' id='c"+<?php echo json_decode($count); ?>+"_"+l_length_count+"'></div> <input  class='btn btn-info btn-rounded add_c_"+<?php echo json_decode($count); ?>+" "+<?php echo json_decode($count); ?>+"_817_show_l" + window['i_817_'+<?php echo json_decode($count); ?>] + "' value='C-"+l_length_count+"' id='817_"+<?php echo json_decode($count); ?>+"_show_l" + window['i_817_'+<?php echo json_decode($count); ?>] + "' ></td></tr>";
$('#append_data_817_'+<?php echo json_decode($count); ?>).append(data);
$('.check_exist<?php echo json_decode($count); ?>').val('1');
}
});
window['i_817_'+<?php echo json_decode($count); ?>]++;   
window['j_817_'+<?php echo json_decode($count); ?>]++;
window["addMore_b_817_" + <?php echo json_decode($count); ?>]();
}

//

$(document).on('click', '.add_c_'+<?php echo json_decode($count); ?>, function (e) {
   $('.check_exist_c<?php echo json_decode($count); ?>').val('1');
    var id_this=$(this).val();
    id_this=id_this.split("-");
    id_this=id_this[1];
    var cost=0;
    cost = document.getElementsByClassName('a_count_817_'+<?php echo json_decode($count); ?>);
   var cost_count=parseInt(cost.length);
   
$('.table_817_'+<?php echo json_decode($count); ?>+' tbody ').append('<tr><td class="drag-handler"></td><td class="recipe-table__cell"><div class="input-group"><span class="input-group-addon">C - </span><input type="text"  class="form-control c_add a_count_817_'+<?php echo json_decode($count); ?>+'" name="L'+id_this+'[]" placeholder="L'+window['j_817_'+<?php echo json_decode($count); ?>]+'-C-'+window['k_817_'+<?php echo json_decode($count); ?>]+'" required=""></div></td>\n\
    <td class="recipe-table__cell" ><input type="text"  class="form-control action0" name="ab[]" onkeypress="return isNumber(event)" required=""></td>\n\
    <td class="recipe-table__cell" ><input type="text"  class="form-control action1" name="ab[]" onkeypress="return isNumber(event)" required=""></td>\n\
    <td class="recipe-table__cell" ><input type="text"  class="form-control action2" name="ab[]" onkeypress="return isNumber(event)" required=""></td>\n\
    <td class="recipe-table__cell" ><input type="text"  class="form-control action3" name="ab[]" onkeypress="return isNumber(event)" required=""></td>\n\
    <td class="recipe-table__cell" ><input type="text"  class="form-control action3" name="ab[]" onkeypress="return isNumber(event)" required=""></td>\n\
    <td class="recipe-table__cell" ><input type="text"  class="form-control" name="ab[]" onkeypress="return isNumber(event)" required=""></td>\n\
    <tr>');
    window['k_817_'+<?php echo json_decode($count); ?>]++; 
    });

$(document).on('keyup', '.copy_l'+<?php echo json_decode($count); ?>, function (e) {
        var this_val=$(this).val();
        var id_this=$(this).attr('id');
        id_this=id_this.split("_");
        $('#cc'+<?php echo json_decode($count); ?>+'_'+id_this[1]).val(this_val); 
});
    
$(document).on('click', '.submit', function (e) {

if($(this).attr('id')=="submit")
{$('.status').val("1"); }
else{$('.status').val("0");}

var check=$('.check_exist<?php echo json_decode($count); ?>').val();
var check_c=$('.check_exist_c<?php echo json_decode($count); ?>').val();
if(check=='' || check==null)
{
swal(
'Oops...',
'Please Add at Least One L',
'error'
);
return;    
}
if(check_c=='' || check_c==null)
{
swal(
'Oops...',
'Please Add at Least One C',
'error'
);
return;    
}

var form = document.getElementById("817_<?php echo $count;?>");
for(var i=0; i < form.elements.length; i++){
if(form.elements[i].value === '' && form.elements[i].hasAttribute('required')){
swal(
'Oops...',
'ALL Fields are Mandatory',
'error'
);
$('input[name='+form.elements[i].name+']').focus();
//$('select[name='+form.elements[i].name+']').focus();
return false;
}
}  
$("#loader_817_"+<?php echo json_decode($count); ?>).show();
$("#loader_817_"+<?php echo json_decode($count); ?>).fadeOut(5000);
$.ajax({
    url:'<?php echo base_url(); ?>login_controller/save_data',
    type: 'POST',
    cache: false,
    async: false,
    data:$("#817_"+<?php echo $count; ?>).serialize(),
    success: function(data){
      $("#hadness_id").val(data);
    swal({
  position: 'top-end',
  type: 'success',
  title: 'Data Inserted',
  showConfirmButton: false,
  timer: 1500
});  
if($('.status').val()=="1")
{
 $('#submit').hide();   
}
var he=$("#heat_no").val();
//$("#real_817_"+<?php echo json_decode($count); ?>).remove();
//$('#817_'+he+'_item').remove();
    }
    });
    });

// ------------------B--------------------------

window['k_b_817_'+<?php echo json_decode($count); ?>] = 0;
window['i_b_817_'+<?php echo json_decode($count); ?>] = 0;     
$(".addmore_b_817_<?php echo json_decode($count); ?>").on('click', function () {
window["addMore_b_817_" + <?php echo json_decode($count); ?>]();

});  

window["addMore_b_817_" + <?php echo json_decode($count); ?>] = function() {
$.ajax({
url: "",
cache: false,
async: false,
success: function (data) {
    var b_length=0;
    b_length = document.getElementsByClassName('L1_b_817_'+<?php echo json_decode($count); ?>);
   var b_length_count=parseInt(b_length.length);
var data = "<tr><td><div class='input-group'><span class='input-group-addon'>L - </span><input type='text' placeholder='L-"+ b_length_count+"' class='form-control L1_b_817_"+<?php echo json_decode($count); ?>+"' name='LB[]' required='' id='cc"+<?php echo json_decode($count); ?>+"_"+b_length_count+"' readonly='' style='color:black;'></div></td>\n\
<td class='recipe-table__cell'><input type='text' style='width:60px;' class='form-control b_action' name='b"+b_length_count+"[]' ></td>\n\
<td class='recipe-table__cell'><input type='text' style='width:60px;' class='form-control b_action' name='b"+b_length_count+"[]' ></td>\n\
<td class='recipe-table__cell'><input type='text' style='width:60px;' class='form-control b_action' name='b"+b_length_count+"[]' ></td>\n\
<td class='recipe-table__cell'><input type='text' style='width:60px;' class='form-control b_action' name='b"+b_length_count+"[]' ></td>\n\
<td class='recipe-table__cell'><input type='text' style='width:60px;' class='form-control b_action' name='b"+b_length_count+"[]' ></td>\n\
<td class='recipe-table__cell'><input type='text' style='width:60px;' class='form-control b_action' name='b"+b_length_count+"[]' ></td>\n\
<td class='recipe-table__cell'><input type='text' style='width:60px;' class='form-control b_action' name='b"+b_length_count+"[]' ></td>\n\
<td class='recipe-table__cell'><input type='text' style='width:60px;' class='form-control b_action' name='b"+b_length_count+"[]' ></td>\n\
<td class='recipe-table__cell'><input type='text' style='width:60px;' class='form-control b_action' name='b"+b_length_count+"[]' ></td>\n\
<td class='recipe-table__cell'><input type='text' style='width:60px;' class='form-control b_action' name='b"+b_length_count+"[]' ></td>\n\
<td class='recipe-table__cell'><input type='text' style='width:60px;' class='form-control b_action' name='b"+b_length_count+"[]' ></td>\n\
<td class='recipe-table__cell'><input type='text' style='width:60px;' class='form-control b_action' name='b"+b_length_count+"[]' ></td>\n\
<td class='recipe-table__cell'><input type='text' style='width:60px;' class='form-control b_action' name='b"+b_length_count+"[]' ></td>\n\
<td class='recipe-table__cell'><input type='text' style='width:60px;' class='form-control b_action' name='b"+b_length_count+"[]' ></td></tr>";
    
$('#append_data_b_817_'+<?php echo json_decode($count); ?>).append(data);
}
});
window['i_b_817_'+<?php echo json_decode($count); ?>]++;
//window["add_b_c_" + <?php echo json_decode($count); ?>]();
}

//window["add_b_c_" + <?php echo json_decode($count); ?>] = function() {
//
//   var cost_count_b=0;
//$('.table_b_817_'+<?php echo json_decode($count); ?>+' tbody ').append('<tr><td class="drag-handler"></td><td class="recipe-table__cell"><input type="text"  style="width:60px;" class="form-control b_count_817_'+<?php echo json_decode($count); ?>+'" name="LB'+id_this+'[]" placeholder="L'+window['i_b_817_'+<?php echo json_decode($count); ?>]+'-C-'+window['k_b_817_'+<?php echo json_decode($count); ?>]+'"></td>\n\
//    <td class="recipe-table__cell"><input type="text" style="width:60px;" class="form-control" name="b'+cost_count_b+'[]" onkeypress="return isNumber(event)"></td><td class="recipe-table__cell"><input type="text" style="width:60px;" class="form-control" name="b'+cost_count_b+'[]" onkeypress="return isNumber(event)">\n\
//    </td><td class="recipe-table__cell"><input type="text" style="width:60px;" class="form-control" name="b'+cost_count_b+'[]" onkeypress="return isNumber(event)"></td>\n\
//    <td class="recipe-table__cell"><input type="text" style="width:60px;" class="form-control" name="b'+cost_count_b+'[]" onkeypress="return isNumber(event)"></td>\n\
//<tr>');
//    window['k_b_817_'+<?php echo json_decode($count); ?>]++; 
//    }
    
   // ---------------------/B---------------------------------------------------------------- 
    </script>
<script src='js/Sortable.js'></script>
<script>
    $(document).ready(function () {
    $(document).on('click', '.recipe-table__del-row-btn', function (e) {
    var $el = $(e.currentTarget);
    var $row = $el.closest('tr');
    $row.remove();
    return false;
    });
    Sortable.create(
    $('.append_data_817_<?php echo $count; ?>')[0],
    {
    animation: 150,
    scroll: true,
    handle: '.drag-handler',
    onEnd: function () {
    }
    }
    );
    Sortable.create(
    $('.append_data_b_817_<?php echo $count; ?>')[0],
    {
    animation: 150,
    scroll: true,
    handle: '.drag-handler',
    onEnd: function () {
    }
    }
    );
    });
    
    
        $(document).on('keyup', '.action0', function (e) {
            var th=$(this).val();
            var $this = $(this);
            $this.val($this.val().replace(/[^\d.]/g, ''));   
            if(parseInt(th) < 48 || th=='')
            {$(this).css("color", "red");  
            $(this).css("border-color", "red"); 
        }else
        {$(this).css("color", "");  
        $(this).css("border-color", "");     
        }
        });
        $(document).on('keyup', '.action1', function (e) {
            var th=$(this).val();
            var $this = $(this);
            $this.val($this.val().replace(/[^\d.]/g, ''));
            if(parseInt(th) < 40 || th=='')
            {$(this).css("color", "red");  
            $(this).css("border-color", "red"); 
        }else
        {$(this).css("color", "");  
        $(this).css("border-color", "");     
        }
        });
        $(document).on('keyup', '.action2', function (e) {
            var th=$(this).val();
            var $this = $(this);
            $this.val($this.val().replace(/[^\d.]/g, ''));
            if(parseInt(th) < 40 || th=='')
            {$(this).css("color", "red");  
            $(this).css("border-color", "red"); 
        }else
        {$(this).css("color", "");  
        $(this).css("border-color", "");     
        }
        });
        $(document).on('keyup', '.action3', function (e) {
            var th=$(this).val();
            var $this = $(this);
            $this.val($this.val().replace(/[^\d.]/g, ''));
            if(parseInt(th) < 40 || th=='')
            {$(this).css("color", "red");  
            $(this).css("border-color", "red"); 
        }else
        {$(this).css("color", "");  
        $(this).css("border-color", "");     
        }
        });
        $(document).on('keyup', '.action4', function (e) {
            var th=$(this).val();
            var $this = $(this);
            $this.val($this.val().replace(/[^\d.]/g, ''));
            if(parseInt(th) < 5 || th=='')
            {$(this).css("color", "red");  
            $(this).css("border-color", "red"); 
        }else
        {$(this).css("color", "");  
        $(this).css("border-color", "");     
        }
        });
        
        $(document).on('keyup', '.b_action', function (e) {
            var th=$(this).val();
            var $this = $(this);
            $this.val($this.val().replace(/[^\d.]/g, ''));
            if(parseInt(th) < 200 || parseInt(th) > 285 || th=='')
            {$(this).css("color", "red");  
            $(this).css("border-color", "red"); 
        }else
        {$(this).css("color", "");  
        $(this).css("border-color", "");     
        }
        });
        $(document).on('keyup', '.L1_817_<?php echo json_decode($count); ?>', function (e) {
            var th=$(this).val();
            var $this = $(this);
            $this.val($this.val().replace(/[^\d.]/g, ''));
           
        });
        $(document).on('keyup', '.c_add', function (e) {
            var th=$(this).val();
            var $this = $(this);
            $this.val($this.val().replace(/[^\d.]/g, ''));
        });
        
//function check_data()
//{
//  var c_date=$('.c_date').val();
//  $('.c_date').datepicker('setDate', 'today');
//}

 $(document).on('keydown', 'input', function (e) {
 if (e.which == 13  || e.keyCode == 13  ) 
 {      e.preventDefault();
        var $canfocus=$(':focusable');
        var index = $canfocus.index(document.activeElement) + 1;
        if (index >= $canfocus.length) index = 0;
        $canfocus.eq(index).focus();
}   
});
</script> 
<script src="<?php echo base_url();?>js/datetimepicker-master/build/jquery.datetimepicker.full.js"></script>
<script src="<?php echo base_url();?>js/datetimepicker-master/build/my.js"></script>
        
   
    

