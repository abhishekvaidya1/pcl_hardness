
<link rel="stylesheet" href="css/style.css">
<style>
    .mytdstyle{
        text-align: center;
    }
    .b_action_<?php echo $count; ?>{
        width: 50px;
    }
    .text_size{
        font-size:14px;
    }
</style>
<?php  $action = array('50', '42', '42', '40','3');
$action2 = array('190', '190', '190', '190','190','0','0');
$action3 = array('302', '302', '302', '302','302','350','350');?>
<!-- Page Data--->
<input class="form-control count_item_p_<?php echo $count; ?>"  value="<?php echo $count; ?>"  style=" display: none;">
<input class="form-control item_p_<?php echo $count; ?>" name="item"  value="912"  style=" display: none;">
<input type="text" class="form-control heat_p_<?php echo $count; ?>"  value="<?php echo $heat; ?>" style=" display: none;">
<input class="form-control date_p_<?php echo $count; ?>"  value="<?php echo date("Y-m-d", strtotime($input_date)); ?>"  style=" display: none;">
<!--// Page Data--->
<div id="912_page_1_<?php echo $count; ?>">
    <table style=" border:  none; width: 250px;"><tr><td><label>Select Page No.</label></td><td><select class=" form-control page_select_912_<?php echo $count; ?>" style=" width:100px;">
        <option value="1" <?php echo ($page_no == '1') ? 'selected' : ''; ?>>1</option>
        <option value="2" <?php echo ($page_no == '2') ? 'selected' : ''; ?>>2</option>
        <option value="3" <?php echo ($page_no == '3') ? 'selected' : ''; ?>>3</option>
        <option value="4" <?php echo ($page_no == '4') ? 'selected' : ''; ?>>4</option>
    </select></td></tr></table>
    
<form class="form-horizontal" action="#" id="912_1_<?php echo $count; ?>">
    <div class="page-content-wrap" id="postdata">
        <div class="row">
            <div class="col-md-12">
                    <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><strong>Hardness & Chill Depth  - 0912 CAMSHAFT<?php echo $heat; ?>   Page No - <?php echo $page_no; ?></strong> </h3>
                    </div>
                    <div class="panel-body"> 
                    <div id="abcd_912_<?php echo $count;?>" style="margin-left: 500px;  position: absolute; width: 100px; display: none;"><img src="loader.gif" style=" width: 150px;"></div>
                            <div class="row">
                            <div class="col-md-6">
                                <input class="form-control item" name="item" required="" value="912" readonly="" style=" display: none;">                                
                                <input class="form-control " name="at_point_name"  value="O-A-B,A-C,B-D,C-E-D,Chill Depth" readonly="" style=" display: none;">
                                <input class="form-control " name="c_count_l_wise"  value="4" readonly="" style=" display: none;">
                                <input type="text" class=" form-control" name="heat_no" required="" id="heat_no" value="<?php echo $heat; ?>" style=" display: none;">
                                <div class="panel-body">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Part No</label>
                                        <div class="col-md-6">                                        
                                            <input type="text" name="part_no" class="form-control part_no" required="" value="98129069FA" readonly="" style="color:#000;">
                                            <?php
                                            if (@$main_data->c_date) {?>
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
                                            <input type="text" class=" form-control c_date" name="c_date" required="" id="d1" value="<?php echo date("d.m.Y", strtotime(@$main_data->c_date)); ?>" readonly="" style="color:black">
                                            <?php
                                            } else {?>
                                                <input type="text" class="form-control c_date" name="c_date" required="" id="d1" value="<?php echo date("d.m.Y", strtotime($input_date)); ?>" readonly="" style="color:black">    
                                        <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6" style="display:none;">                               
                                <div class="panel-body">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">QA Ref No</label>
                                        <div class="col-md-6">
                                            <?php
                                            if (@$main_data->qa_ref_no) {
                                                ?>
                                                <input type="text" name="qa_ref_no" class="form-control qa_ref_no" required="" value="<?php echo @$main_data->qa_ref_no; ?>" readonly="" style="color:#000; ">
                                            <?php } else { ?>
                                                <input type="text" name="qa_ref_no" class="form-control qa_ref_no" required="" value="PCR/IR/697/101" readonly="" style="color:#000;">
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    <div id="item_img"><img src="Audio/912_img.png" style=" display: block;margin-left: auto;margin-right: auto;" width="75%"></div>
                    </div>
                </div>
            </div>
        </div>                   
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default" style="overflow-x:auto;overflow-y:auto;border: 0px;">
                    <div class="panel-heading">
                        <h3 class="panel-title">Observations</h3>
                    </div>
                    <div class="panel-body">
                        <table class="table table-bordered table_912_<?php echo $count; ?>">
                            <tr>
                                <td rowspan="3" style=" vertical-align:  middle; text-align: center;" width="10%">AT POINT</td>
                                <td rowspan="2" style=" vertical-align:  middle; text-align: center;" width="35%">CUSTOMER SPEC.</td>                                
                                <td colspan="12" style=" vertical-align:  middle; text-align: center;">OBSERVATIONS</td>
                            </tr>
                            <?php
                                if(isset($C)){
                                $L_val= explode(",", $C->L_val);    
                                $CP_val= explode(",", $C->CP_val);    
                                $C_val= explode(",", $C->C_val);    
                                $mm_val= explode(",", $C->mm_val);    
                                $mm_val_chunk= array_chunk($mm_val, 12);    
                                $b_val= explode(",", $B->b_val);
                                $b_val_chunk= array_chunk($b_val, 6);?>
                            <tr>
                                <?php $l=1;for($i=0;$i<count($L_val);$i++) { ?>
                                <td colspan="4"><div class="input-group"><span class="input-group-addon">L-</span><input type="text" class="form-control l_<?php echo $l."_".$count; ?>"  name="l_val[]" value="<?php echo $L_val[$i];?>" style=" width:80px; font-size: 16px;">
                                    <span class="input-group-addon">IMP -</span><input type="text" class="form-control imp_<?php echo $l."_".$count; ?>"  name="CP_val[]" value="<?php echo $CP_val[$i];?>" style=" width:80px;font-size: 16px;">
                                    </div></td>
                                <?php $l++;} ?></tr>
                                <tr>
                                <td style=" vertical-align:  middle; text-align: center;">MM-HRc</td>                              
                                <?php $c=1;for($i=0;$i<count($C_val);$i++) {?>
                                <td style=" width:50px;"><input type="text" class="form-control c_<?php echo $c."_".$count; ?>"  name="c_val[]" value="<?php echo $C_val[$i];?>" style=" width:50px;font-size: 16px;" placeholder="C-"></td>
                                <?php $c++;} ?>
                            </tr>
                                <?php 
                                $at_point=array('O-A-B','A-C','B-D','C-E-D','Chill Depth');
                                $cust_spec=array('2 MM  – 50 HRc MIN','2 MM  – 42 HRc MIN','2 MM  – 42 HRc MIN','2 MM  – 40 HRc MIN','3 MM MIN ALL OVER WHITE CHILL DEPTH');
                                for($i=0;$i<count($mm_val_chunk);$i++)
                                {?><tr style="vertical-align: center; text-align: center">  
                                    
                                    <td class="mytdstyle" style="vertical-align: middle;"><?php echo $at_point[$i];?></td>                                   
                                    <td class="mytdstyle" style="vertical-align: middle;"><?php echo $cust_spec[$i];?></td> 
                                        
                                <?php $mm=1;for($j=0;$j<count($mm_val_chunk[$i]);$j++)    
                                {   $flag=0;
                                    if($mm_val_chunk[$i][$j]!="" && $mm_val_chunk[$i][$j] < $action[$i]) { $flag=1; }else{ $flag=0; }?>
                                <td style=" width:50px;"><input type="text" class="form-control action<?php echo $i."_".$count;?> mm_<?php echo $mm;?>_<?php echo $count; ?> <?php if($flag==1){?> myClass <?php }?>" style="width:50px;font-size: 16px; <?php if($flag==1){?> background-color:red; color:black; <?php }?>" name="mm_val[]" value="<?php echo $mm_val_chunk[$i][$j];?>"></td>
                                <?php $mm++;} ?> <?php }?>
                                 </tr>
                                 <?php 
                                $b_point=array('BRINELL HARDNESS BHN (5 MM BALL 750 KG LOAD)<br/><img src="Audio/912_brg.png" width="100">','','','','','','');
                                $b_cust_spec=array('BRG 1<br/>190-302',' BRG 2<br/>190-302','BRG 3<br/>190-302','BRG 4<br/>190-302','REAR END<br/>190-302','COLLAR 1<br/>350 BHN MAX','COLLAR 2<br/>350 BHN MAX');
                                for($i=0;$i<count($b_val_chunk);$i++)
                                {?><tr style="vertical-align: center; text-align: center">
                                    <?php if($i==0){?><td class="mytdstyle" style="text-align: center; vertical-align: middle;" rowspan="7"><?php echo $b_point[$i];?></td><?php }?>
                                   <td class="mytdstyle"><?php echo $b_cust_spec[$i];?></td>                                   
                                   
                                <?php $bb=1;for($j=0;$j<count($b_val_chunk[$i]);$j++)    
                                {   $bitflag=0;
                                    if($b_val_chunk[$i][$j]!="" && ($b_val_chunk[$i][$j] < $action2[$i] || $b_val_chunk[$i][$j] > $action3[$i])){
                                        $bitflag=1;
                                    }else{
                                        $bitflag=0;
                                    }
                                     ?>
                                        <td colspan="2" style=" width:80px;"><center><input type="text" class="form-control b_action<?php if($i>4){ ?>1<?php } ?>_<?php echo $count; ?> mmm_<?php echo $bb;?>_<?php echo $count; ?>" style="width:80px; font-size: 16px; <?php if($bitflag==1){?> background-color:red; color:black; <?php }?>" name="b_val[]" value="<?php echo $b_val_chunk[$i][$j];?>"></center></td>
                                    <?php 
                                    $bb++;}?> <?php }?>
                                 </tr>
                                 
                                 <tr>
                                     <td style=""><input type="text" class="form-control ladle_result_1_<?php echo $count; ?>" style="width:50px;display:none; " name="ladle_result[]" value="<?php echo $L_R[0]->ladle_result;?>"></td>
                                    <td><input type="text" class="form-control ladle_result_2_<?php echo $count; ?>" style="width:50px;display:none; " name="ladle_result[]" value="<?php echo $L_R[1]->ladle_result;?>"></td>
                                    <td><input type="text" class="form-control ladle_result_3_<?php echo $count; ?>" style="width:50px;display:none; " name="ladle_result[]" value="<?php echo $L_R[2]->ladle_result;?>"></td>                                    
                                </tr>
                                 <?php  }
                                
                                // IF DATA NOT EXIST
                                else { ?>
                                 <tr>
                                        <td colspan="4"><div class="input-group">
                                                 <span class="input-group-addon">L-</span>
                                                 <input type="text" class="form-control l_1_<?php echo $count; ?>"  name="l_val[]" style=" width:80px;font-size: 16px;">
                                                 <span class="input-group-addon">IMP -</span>
                                                 <input type="text" class="form-control imp_1_<?php echo $count; ?>"  name="CP_val[]" style=" width:80px;font-size: 16px;">
                                             </div>
                                         
                                        </td>
                                        <td colspan="4"><div class="input-group">
                                                 <span class="input-group-addon">L-</span>
                                                 <input type="text" class="form-control l_2_<?php echo $count; ?>"  name="l_val[]" style=" width:80px;font-size: 16px;">
                                                 <span class="input-group-addon">IMP -</span>
                                                 <input type="text" class="form-control imp_2_<?php echo $count; ?>"  name="CP_val[]" style=" width:80px;font-size: 16px;">
                                        </div></td>
                                        <td colspan="4"><div class="input-group">
                                                 <span class="input-group-addon">L-</span>
                                                 <input type="text" class="form-control l_3_<?php echo $count; ?>"  name="l_val[]" style=" width:80px;font-size: 16px;">
                                                 <span class="input-group-addon">IMP -</span>
                                                 <input type="text" class="form-control imp_3_<?php echo $count; ?>"  name="CP_val[]" style=" width:80px;font-size: 16px;">
                                        </div></td>                                        
                                     </tr>
                                    <tr>
                                    <td style=" vertical-align:  middle; text-align: center;">MM-HRc</td>                                
                                    <td style=" width:50px;"><input type="text" class="form-control c_1_<?php echo $count; ?> "  name="c_val[]" style=" width:50px;font-size: 16px;" placeholder="C-"></td>
                                    <td style=" width:50px;"><input type="text" class="form-control c_2_<?php echo $count; ?>"  name="c_val[]" style=" width:50px;font-size: 16px;" placeholder="C-"></td>
                                    <td style=" width:50px;"><input type="text" class="form-control c_3_<?php echo $count; ?>"  name="c_val[]" style=" width:50px;font-size: 16px;" placeholder="C-"></td>
                                    <td style=" width:50px;"><input type="text" class="form-control c_4_<?php echo $count; ?>"  name="c_val[]" style=" width:50px;font-size: 16px;" placeholder="C-"></td>
                                    <td style=" width:50px;"><input type="text" class="form-control c_5_<?php echo $count; ?>"  name="c_val[]" style=" width:50px;font-size: 16px;" placeholder="C-"></td>
                                    <td style=" width:50px;"><input type="text" class="form-control c_6_<?php echo $count; ?>"  name="c_val[]" style=" width:50px;font-size: 16px;" placeholder="C-"></td>
                                    <td style=" width:50px;"><input type="text" class="form-control c_7_<?php echo $count; ?>"  name="c_val[]" style=" width:50px;font-size: 16px;" placeholder="C-"></td>
                                    <td style=" width:50px;"><input type="text" class="form-control c_8_<?php echo $count; ?>"  name="c_val[]" style=" width:50px;font-size: 16px;" placeholder="C-"></td>
                                    <td style=" width:50px;"><input type="text" class="form-control c_9_<?php echo $count; ?>"  name="c_val[]" style=" width:50px;font-size: 16px;" placeholder="C-"></td>
                                    <td style=" width:50px;"><input type="text" class="form-control c_10_<?php echo $count; ?>"  name="c_val[]" style=" width:50px;font-size: 16px;" placeholder="C-"></td>
                                    <td style=" width:50px;"><input type="text" class="form-control c_11_<?php echo $count; ?>"  name="c_val[]" style=" width:50px;font-size: 16px;" placeholder="C-"></td>
                                    <td style=" width:50px;"><input type="text" class="form-control c_12_<?php echo $count; ?>"  name="c_val[]" style=" width:50px;font-size: 16px;" placeholder="C-"></td>
                            </tr>
                             <tr style="vertical-align: center; text-align: center">
                                 <td class="mytdstyle" >O-A-B</td>
                                   <td class="mytdstyle" >2 MM  – 50 HRc MIN</td>                             
                                   <td style=" width:50px;"><input type="text" class="form-control action0_<?php echo $count; ?> mm_1_<?php echo $count; ?>" style="width:50px;font-size: 16px;" name="mm_val[]" ></td>
                                   <td style=" width:50px;"><input type="text" class="form-control action0_<?php echo $count; ?> mm_2_<?php echo $count; ?>" style="width:50px;font-size: 16px;" name="mm_val[]" ></td>
                                   <td style=" width:50px;"><input type="text" class="form-control action0_<?php echo $count; ?> mm_3_<?php echo $count; ?>" style="width:50px;font-size: 16px;" name="mm_val[]" ></td>
                                   <td style=" width:50px;"><input type="text" class="form-control action0_<?php echo $count; ?> mm_4_<?php echo $count; ?>" style="width:50px;font-size: 16px;" name="mm_val[]" ></td>
                                   <td style=" width:50px;"><input type="text" class="form-control action0_<?php echo $count; ?> mm_5_<?php echo $count; ?>" style="width:50px;font-size: 16px;" name="mm_val[]" ></td>
                                   <td style=" width:50px;"><input type="text" class="form-control action0_<?php echo $count; ?> mm_6_<?php echo $count; ?>" style="width:50px;font-size: 16px;" name="mm_val[]" ></td>
                                   <td style=" width:50px;"><input type="text" class="form-control action0_<?php echo $count; ?> mm_7_<?php echo $count; ?>" style="width:50px;font-size: 16px;" name="mm_val[]" ></td>
                                   <td style=" width:50px;"><input type="text" class="form-control action0_<?php echo $count; ?> mm_8_<?php echo $count; ?>" style="width:50px;font-size: 16px;" name="mm_val[]" ></td>
                                   <td style=" width:50px;"><input type="text" class="form-control action0_<?php echo $count; ?> mm_9_<?php echo $count; ?>" style="width:50px;font-size: 16px;" name="mm_val[]" ></td>
                                   <td style=" width:50px;"><input type="text" class="form-control action0_<?php echo $count; ?> mm_10_<?php echo $count; ?>" style="width:50px;font-size: 16px;" name="mm_val[]" ></td>
                                   <td style=" width:50px;"><input type="text" class="form-control action0_<?php echo $count; ?> mm_11_<?php echo $count; ?>" style="width:50px;font-size: 16px;" name="mm_val[]" ></td>
                                   <td style=" width:50px;"><input type="text" class="form-control action0_<?php echo $count; ?> mm_12_<?php echo $count; ?>" style="width:50px;font-size: 16px;" name="mm_val[]" ></td>
                                </tr>
                                <tr style="vertical-align: center; text-align: center">
                                <td class="mytdstyle">A-C</td>
                                <td class="mytdstyle">2 MM  – 42 HRc MIN</td>
                                <td style=" width:50px;"><input type="text" class="form-control action1_<?php echo $count; ?> mm_1_<?php echo $count; ?>" style="width:50px;font-size: 16px;" name="mm_val[]" ></td>
                                <td style=" width:50px;"><input type="text" class="form-control action1_<?php echo $count; ?> mm_2_<?php echo $count; ?>" style="width:50px;font-size: 16px;" name="mm_val[]" ></td>
                                <td style=" width:50px;"><input type="text" class="form-control action1_<?php echo $count; ?> mm_3_<?php echo $count; ?>" style="width:50px;font-size: 16px;" name="mm_val[]" ></td>
                                <td style=" width:50px;"><input type="text" class="form-control action1_<?php echo $count; ?> mm_4_<?php echo $count; ?>" style="width:50px;font-size: 16px;" name="mm_val[]" ></td>
                                <td style=" width:50px;"><input type="text" class="form-control action1_<?php echo $count; ?> mm_5_<?php echo $count; ?>" style="width:50px;font-size: 16px;" name="mm_val[]" ></td>
                                <td style=" width:50px;"><input type="text" class="form-control action1_<?php echo $count; ?> mm_6_<?php echo $count; ?>" style="width:50px;font-size: 16px;" name="mm_val[]" ></td>
                                <td style=" width:50px;"><input type="text" class="form-control action1_<?php echo $count; ?> mm_7_<?php echo $count; ?>" style="width:50px;font-size: 16px;" name="mm_val[]" ></td>
                                <td style=" width:50px;"><input type="text" class="form-control action1_<?php echo $count; ?> mm_8_<?php echo $count; ?>" style="width:50px;font-size: 16px;" name="mm_val[]" ></td>
                                <td style=" width:50px;"><input type="text" class="form-control action1_<?php echo $count; ?> mm_9_<?php echo $count; ?>" style="width:50px;font-size: 16px;" name="mm_val[]" ></td>
                                <td style=" width:50px;"><input type="text" class="form-control action1_<?php echo $count; ?> mm_10_<?php echo $count; ?>" style="width:50px;font-size: 16px;" name="mm_val[]" ></td>
                                <td style=" width:50px;"><input type="text" class="form-control action1_<?php echo $count; ?> mm_11_<?php echo $count; ?>" style="width:50px;font-size: 16px;" name="mm_val[]" ></td>                             
                                <td style=" width:50px;"><input type="text" class="form-control action1_<?php echo $count; ?> mm_12_<?php echo $count; ?>" style="width:50px;font-size: 16px;" name="mm_val[]" ></td>
                                </tr>
                             <tr style="vertical-align: center; text-align: center">
                                <td class="mytdstyle" >B-D</td>
                                <td class="mytdstyle" >2 MM  – 42 HRc MIN</td>
                                <td style=" width:50px;"><input type="text" class="form-control action2_<?php echo $count; ?> mm_1_<?php echo $count; ?>" style="width:50px;font-size: 16px;" name="mm_val[]" ></td>
                                <td style=" width:50px;"><input type="text" class="form-control action2_<?php echo $count; ?> mm_2_<?php echo $count; ?>" style="width:50px;font-size: 16px;" name="mm_val[]" ></td>
                                <td style=" width:50px;"><input type="text" class="form-control action2_<?php echo $count; ?> mm_3_<?php echo $count; ?>" style="width:50px;font-size: 16px;" name="mm_val[]" ></td>
                                <td style=" width:50px;"><input type="text" class="form-control action2_<?php echo $count; ?> mm_4_<?php echo $count; ?>" style="width:50px;font-size: 16px;" name="mm_val[]" ></td>
                                <td style=" width:50px;"><input type="text" class="form-control action2_<?php echo $count; ?> mm_5_<?php echo $count; ?>" style="width:50px;font-size: 16px;" name="mm_val[]" ></td>
                                <td style=" width:50px;"><input type="text" class="form-control action2_<?php echo $count; ?> mm_6_<?php echo $count; ?>" style="width:50px;font-size: 16px;" name="mm_val[]" ></td>
                                <td style=" width:50px;"><input type="text" class="form-control action2_<?php echo $count; ?> mm_7_<?php echo $count; ?>" style="width:50px;font-size: 16px;" name="mm_val[]" ></td>
                                <td style=" width:50px;"><input type="text" class="form-control action2_<?php echo $count; ?> mm_8_<?php echo $count; ?>" style="width:50px;font-size: 16px;" name="mm_val[]" ></td>
                                <td style=" width:50px;"><input type="text" class="form-control action2_<?php echo $count; ?> mm_9_<?php echo $count; ?>" style="width:50px;font-size: 16px;" name="mm_val[]" ></td>
                                <td style=" width:50px;"><input type="text" class="form-control action2_<?php echo $count; ?> mm_10_<?php echo $count; ?>" style="width:50px;font-size: 16px;" name="mm_val[]" ></td>
                                <td style=" width:50px;"><input type="text" class="form-control action2_<?php echo $count; ?> mm_11_<?php echo $count; ?>" style="width:50px;font-size: 16px;" name="mm_val[]" ></td>
                                <td style=" width:50px;"><input type="text" class="form-control action2_<?php echo $count; ?> mm_12_<?php echo $count; ?>" style="width:50px;font-size: 16px;" name="mm_val[]" ></td>
                                
                             </tr>
                             <tr style="vertical-align: center; text-align: center">
                                <td class="mytdstyle" >C-E-D</td>
                                <td class="mytdstyle" >2 MM  – 40 HRc MIN</td>
                                <td style=" width:50px;"><input type="text" class="form-control action3_<?php echo $count; ?> mm_1_<?php echo $count; ?>" style="width:50px;font-size: 16px;" name="mm_val[]" ></td>
                                <td style=" width:50px;"><input type="text" class="form-control action3_<?php echo $count; ?> mm_2_<?php echo $count; ?>" style="width:50px;font-size: 16px;" name="mm_val[]" ></td>
                                <td style=" width:50px;"><input type="text" class="form-control action3_<?php echo $count; ?> mm_3_<?php echo $count; ?>" style="width:50px;font-size: 16px;" name="mm_val[]" ></td>
                                <td style=" width:50px;"><input type="text" class="form-control action3_<?php echo $count; ?> mm_4_<?php echo $count; ?>" style="width:50px;font-size: 16px;" name="mm_val[]" ></td>
                                <td style=" width:50px;"><input type="text" class="form-control action3_<?php echo $count; ?> mm_5_<?php echo $count; ?>" style="width:50px;font-size: 16px;" name="mm_val[]" ></td>
                                <td style=" width:50px;"><input type="text" class="form-control action3_<?php echo $count; ?> mm_6_<?php echo $count; ?>" style="width:50px;font-size: 16px;" name="mm_val[]" ></td>
                                <td style=" width:50px;"><input type="text" class="form-control action3_<?php echo $count; ?> mm_7_<?php echo $count; ?>" style="width:50px;font-size: 16px;" name="mm_val[]" ></td>
                                <td style=" width:50px;"><input type="text" class="form-control action3_<?php echo $count; ?> mm_8_<?php echo $count; ?>" style="width:50px;font-size: 16px;" name="mm_val[]" ></td>
                                <td style=" width:50px;"><input type="text" class="form-control action3_<?php echo $count; ?> mm_9_<?php echo $count; ?>" style="width:50px;font-size: 16px;" name="mm_val[]" ></td>
                                <td style=" width:50px;"><input type="text" class="form-control action3_<?php echo $count; ?> mm_10_<?php echo $count; ?>" style="width:50px;font-size: 16px;" name="mm_val[]" ></td>
                                <td style=" width:50px;"><input type="text" class="form-control action3_<?php echo $count; ?> mm_11_<?php echo $count; ?>" style="width:50px;font-size: 16px;" name="mm_val[]" ></td>
                                <td style=" width:50px;"><input type="text" class="form-control action3_<?php echo $count; ?> mm_12_<?php echo $count; ?>" style="width:50px;font-size: 16px;" name="mm_val[]" ></td>
                                
                             </tr>
                             <tr style="vertical-align: center; text-align: center">
                                <td class="mytdstyle" >Chill Depth</td>
                                <td class="mytdstyle" >3 MM MIN ALL OVER WHITE CHILL DEPTH</td>
                                <td style=" width:50px;"><input type="text" class="form-control action4_<?php echo $count; ?> mm_1_<?php echo $count; ?>" style="width:50px;font-size: 16px;" name="mm_val[]" ></td>
                                <td style=" width:50px;"><input type="text" class="form-control action4_<?php echo $count; ?> mm_2_<?php echo $count; ?>" style="width:50px;font-size: 16px;" name="mm_val[]" ></td>
                                <td style=" width:50px;"><input type="text" class="form-control action4_<?php echo $count; ?> mm_3_<?php echo $count; ?>" style="width:50px;font-size: 16px;" name="mm_val[]" ></td>
                                <td style=" width:50px;"><input type="text" class="form-control action4_<?php echo $count; ?> mm_4_<?php echo $count; ?>" style="width:50px;font-size: 16px;" name="mm_val[]" ></td>
                                <td style=" width:50px;"><input type="text" class="form-control action4_<?php echo $count; ?> mm_5_<?php echo $count; ?>" style="width:50px;font-size: 16px;" name="mm_val[]" ></td>
                                <td style=" width:50px;"><input type="text" class="form-control action4_<?php echo $count; ?> mm_6_<?php echo $count; ?>" style="width:50px;font-size: 16px;" name="mm_val[]" ></td>
                                <td style=" width:50px;"><input type="text" class="form-control action4_<?php echo $count; ?> mm_7_<?php echo $count; ?>" style="width:50px;font-size: 16px;" name="mm_val[]" ></td>
                                <td style=" width:50px;"><input type="text" class="form-control action4_<?php echo $count; ?> mm_8_<?php echo $count; ?>" style="width:50px;font-size: 16px;" name="mm_val[]" ></td>
                                <td style=" width:50px;"><input type="text" class="form-control action4_<?php echo $count; ?> mm_9_<?php echo $count; ?>" style="width:50px;font-size: 16px;" name="mm_val[]" ></td>
                                <td style=" width:50px;"><input type="text" class="form-control action4_<?php echo $count; ?> mm_10_<?php echo $count; ?>" style="width:50px;font-size: 16px;" name="mm_val[]" ></td>
                                <td style=" width:50px;"><input type="text" class="form-control action4_<?php echo $count; ?> mm_11_<?php echo $count; ?>" style="width:50px;font-size: 16px;" name="mm_val[]" ></td>
                                <td style=" width:50px;"><input type="text" class="form-control action4_<?php echo $count; ?> mm_12_<?php echo $count; ?>" style="width:50px;font-size: 16px;" name="mm_val[]" ></td>
                                
                             </tr>
                             
                             
                                                            
                                <tr>
                                <td style="text-align: center; vertical-align: middle;" rowspan="7">BRINELL HARDNESS <br>(5 MM BALL 750 KG LOAD)<br/><img src="Audio/912_brg.png" width="100"></td>
                                <td style=" width:50px;" class="mytdstyle">BRG 1<br/>190-302</td>
                                <td colspan="2" style=" width:50px;"><center><input type="text" class="form-control b_action_<?php echo $count; ?> mmm_1_<?php echo $count; ?>" style="width:90px;font-size: 16px;" name="b_val[]" ></center></td>
                                <td colspan="2" style=" width:50px;"><center><input type="text" class="form-control b_action_<?php echo $count; ?> mmm_2_<?php echo $count; ?>" style="width:90px;font-size: 16px;" name="b_val[]" ></center></td>
                                <td colspan="2" style=" width:50px;"><center><input type="text" class="form-control b_action_<?php echo $count; ?> mmm_3_<?php echo $count; ?>" style="width:90px;font-size: 16px;" name="b_val[]" ></center></td>
                                <td colspan="2" style=" width:50px;"><center><input type="text" class="form-control b_action_<?php echo $count; ?> mmm_4_<?php echo $count; ?>" style="width:90px;font-size: 16px;" name="b_val[]" ></center> </td>
                                <td colspan="2" style=" width:50px;"><center><input type="text" class="form-control b_action_<?php echo $count; ?> mmm_5_<?php echo $count; ?>" style="width:90px;font-size: 16px;" name="b_val[]" ></center></td>
                                <td colspan="2" style=" width:50px;"><center><input type="text" class="form-control b_action_<?php echo $count; ?> mmm_6_<?php echo $count; ?>" style="width:90px;font-size: 16px;" name="b_val[]" ></center> </td>

                                
                                </tr>
                                <tr>                                
                                <td style=" width:50px;" class="mytdstyle"> BRG 2<br/>190-302</td>
                                <td colspan="2" style=" width:50px;"><center><input type="text" class="form-control b_action_<?php echo $count; ?> mmm_1_<?php echo $count; ?>" style="width:90px;font-size: 16px;" name="b_val[]" ></center></td>
                                <td colspan="2" style=" width:50px;"><center><input type="text" class="form-control b_action_<?php echo $count; ?> mmm_2_<?php echo $count; ?>" style="width:90px;font-size: 16px;" name="b_val[]" ></center></td>
                                <td colspan="2" style=" width:50px;"><center><input type="text" class="form-control b_action_<?php echo $count; ?> mmm_3_<?php echo $count; ?>" style="width:90px;font-size: 16px;" name="b_val[]" ></center></td>
                                <td colspan="2" style=" width:50px;"><center><input type="text" class="form-control b_action_<?php echo $count; ?> mmm_4_<?php echo $count; ?>" style="width:90px;font-size: 16px;" name="b_val[]" ></center> </td>
                                <td colspan="2" style=" width:50px;"><center><input type="text" class="form-control b_action_<?php echo $count; ?> mmm_5_<?php echo $count; ?>" style="width:90px;font-size: 16px;" name="b_val[]" ></center></td>
                                <td colspan="2" style=" width:50px;"><center><input type="text" class="form-control b_action_<?php echo $count; ?> mmm_6_<?php echo $count; ?>" style="width:90px;font-size: 16px;" name="b_val[]" ></center> </td>
                                </tr>
                                <tr>
                                <td style=" width:50px;" class="mytdstyle"> BRG 3<br/>190- 302</td>
                                <td colspan="2" style=" width:50px;"><center><input type="text" class="form-control b_action_<?php echo $count; ?> mmm_1_<?php echo $count; ?>" style="width:90px;font-size: 16px;" name="b_val[]" ></center></td>
                                <td colspan="2" style=" width:50px;"><center><input type="text" class="form-control b_action_<?php echo $count; ?> mmm_2_<?php echo $count; ?>" style="width:90px;font-size: 16px;" name="b_val[]" ></center></td>
                                <td colspan="2" style=" width:50px;"><center><input type="text" class="form-control b_action_<?php echo $count; ?> mmm_3_<?php echo $count; ?>" style="width:90px;font-size: 16px;" name="b_val[]" ></center></td>
                                <td colspan="2" style=" width:50px;"><center><input type="text" class="form-control b_action_<?php echo $count; ?> mmm_4_<?php echo $count; ?>" style="width:90px;font-size: 16px;" name="b_val[]" ></center> </td>
                                <td colspan="2" style=" width:50px;"><center><input type="text" class="form-control b_action_<?php echo $count; ?> mmm_5_<?php echo $count; ?>" style="width:90px;font-size: 16px;" name="b_val[]" ></center></td>
                                <td colspan="2" style=" width:50px;"><center><input type="text" class="form-control b_action_<?php echo $count; ?> mmm_6_<?php echo $count; ?>" style="width:90px;font-size: 16px;" name="b_val[]" ></center> </td>
                                </tr>
                                <tr>
                                <td style=" width:50px;" class="mytdstyle">BRG 4<br/>190-302</td>
                                <td colspan="2" style=" width:50px;"><center><input type="text" class="form-control b_action_<?php echo $count; ?> mmm_1_<?php echo $count; ?>" style="width:90px;font-size: 16px;" name="b_val[]" ></center></td>
                                <td colspan="2" style=" width:50px;"><center><input type="text" class="form-control b_action_<?php echo $count; ?> mmm_2_<?php echo $count; ?>" style="width:90px;font-size: 16px;" name="b_val[]" ></center></td>
                                <td colspan="2" style=" width:50px;"><center><input type="text" class="form-control b_action_<?php echo $count; ?> mmm_3_<?php echo $count; ?>" style="width:90px;font-size: 16px;" name="b_val[]" ></center></td>
                                <td colspan="2" style=" width:50px;"><center><input type="text" class="form-control b_action_<?php echo $count; ?> mmm_4_<?php echo $count; ?>" style="width:90px;font-size: 16px;" name="b_val[]" ></center> </td>
                                <td colspan="2" style=" width:50px;"><center><input type="text" class="form-control b_action_<?php echo $count; ?> mmm_5_<?php echo $count; ?>" style="width:90px;font-size: 16px;" name="b_val[]" ></center></td>
                                <td colspan="2" style=" width:50px;"><center><input type="text" class="form-control b_action_<?php echo $count; ?> mmm_6_<?php echo $count; ?>" style="width:90px;font-size: 16px;" name="b_val[]" ></center> </td>
                                </tr>    
                                <tr>
                                <td style=" width:50px;" class="mytdstyle">REAR END<br/>190-302</td>
                                <td colspan="2" style=" width:50px;"><center><input type="text" class="form-control b_action_<?php echo $count; ?> mmm_1_<?php echo $count; ?>" style="width:90px;font-size: 16px;" name="b_val[]" ></center></td>
                                <td colspan="2" style=" width:50px;"><center><input type="text" class="form-control b_action_<?php echo $count; ?> mmm_2_<?php echo $count; ?>" style="width:90px;font-size: 16px;" name="b_val[]" ></center></td>
                                <td colspan="2" style=" width:50px;"><center><input type="text" class="form-control b_action_<?php echo $count; ?> mmm_3_<?php echo $count; ?>" style="width:90px;font-size: 16px;" name="b_val[]" ></center></td>
                                <td colspan="2" style=" width:50px;"><center><input type="text" class="form-control b_action_<?php echo $count; ?> mmm_4_<?php echo $count; ?>" style="width:90px;font-size: 16px;" name="b_val[]" ></center> </td>
                                <td colspan="2" style=" width:50px;"><center><input type="text" class="form-control b_action_<?php echo $count; ?> mmm_5_<?php echo $count; ?>" style="width:90px;font-size: 16px;" name="b_val[]" ></center></td>
                                <td colspan="2" style=" width:50px;"><center><input type="text" class="form-control b_action_<?php echo $count; ?> mmm_6_<?php echo $count; ?>" style="width:90px;font-size: 16px;" name="b_val[]" ></center> </td>
                                </tr>    
                                <tr>
                                <td style=" width:50px;" class="mytdstyle">COLLAR 1<br/>350 BHN MAX</td>
                                <td colspan="2" style=" width:50px;"><center><input type="text" class="form-control b_action1_<?php echo $count; ?> mmm_1_<?php echo $count; ?>" style="width:90px;font-size: 16px;" name="b_val[]" ></center></td>
                                <td colspan="2" style=" width:50px;"><center><input type="text" class="form-control b_action1_<?php echo $count; ?> mmm_2_<?php echo $count; ?>" style="width:90px;font-size: 16px;" name="b_val[]" ></center></td>
                                <td colspan="2" style=" width:50px;"><center><input type="text" class="form-control b_action1_<?php echo $count; ?> mmm_3_<?php echo $count; ?>" style="width:90px;font-size: 16px;" name="b_val[]" ></center></td>
                                <td colspan="2" style=" width:50px;"><center><input type="text" class="form-control b_action1_<?php echo $count; ?> mmm_4_<?php echo $count; ?>" style="width:90px;font-size: 16px;" name="b_val[]" ></center> </td>
                                <td colspan="2" style=" width:50px;"><center><input type="text" class="form-control b_action1_<?php echo $count; ?> mmm_5_<?php echo $count; ?>" style="width:90px;font-size: 16px;" name="b_val[]" ></center></td>
                                <td colspan="2" style=" width:50px;"><center><input type="text" class="form-control b_action1_<?php echo $count; ?> mmm_6_<?php echo $count; ?>" style="width:90px;font-size: 16px;" name="b_val[]" ></center> </td>
                                </tr>    
                                <tr>
                                <td style=" width:50px;" class="mytdstyle">COLLAR 2<br/>350 BHN MAX</td>
                                <td colspan="2" style=" width:50px;"><center><input type="text" class="form-control b_action1_<?php echo $count; ?> mmm_1_<?php echo $count; ?>" style="width:90px;font-size: 16px;" name="b_val[]" ></center></td>
                                <td colspan="2" style=" width:50px;"><center><input type="text" class="form-control b_action1_<?php echo $count; ?> mmm_2_<?php echo $count; ?>" style="width:90px;font-size: 16px;" name="b_val[]" ></center></td>
                                <td colspan="2" style=" width:50px;"><center><input type="text" class="form-control b_action1_<?php echo $count; ?> mmm_3_<?php echo $count; ?>" style="width:90px;font-size: 16px;" name="b_val[]" ></center></td>
                                <td colspan="2" style=" width:50px;"><center><input type="text" class="form-control b_action1_<?php echo $count; ?> mmm_4_<?php echo $count; ?>" style="width:90px;font-size: 16px;" name="b_val[]" ></center> </td>
                                <td colspan="2" style=" width:50px;"><center><input type="text" class="form-control b_action1_<?php echo $count; ?> mmm_5_<?php echo $count; ?>" style="width:90px;font-size: 16px;" name="b_val[]" ></center></td>
                                <td colspan="2" style=" width:50px;"><center><input type="text" class="form-control b_action1_<?php echo $count; ?> mmm_6_<?php echo $count; ?>" style="width:90px;font-size: 16px;" name="b_val[]" ></center> </td>
                                </tr>    
                                                                   
                                <tr>
                                        <td style=" width:50px;"><input type="text" class="form-control ladle_result_1_<?php echo $count; ?>" style="width:100px; display:none;" name="ladle_result[]"></td>
                                        <td><input type="text" class="form-control ladle_result_2_<?php echo $count; ?>" style="width:100px; display:none;" name="ladle_result[]" ></td>
                                        <td><input type="text" class="form-control ladle_result_3_<?php echo $count; ?>" style="width:100px; display:none;" name="ladle_result[]" ></td>                                       
                                </tr>
                                 <?php } ?>
                        </table>
                        
                        <!-----------------/B---------------------------------------->

                        <table class="table table-bordered">
                            <tr>
                                <th><div id="item_img" ><img src="Audio/912_cam.png" style="" class=" " width="300"></div></th>
                                <th width="30%"><textarea class=" form-control" name="remark" placeholder="REMARK"><?php echo @$main_data->remark; ?></textarea></th>
                            </tr>
                        </table>
                        <table style="display: none;" id="success_alert_<?php echo $count; ?>">
                            <tr>
                                <td><label style=" color:red;">**Data Saved Successfully**</label></td>
                            </tr>
                        </table>
                        <input type="text" name="cust_name" value="0912 CAMSHAFT" style=" display: none;">
                        <input type="text" class="status_<?php echo json_decode($count); ?>" name="status" style=" display: none;">
                         <!-- Page Data-->
                        <input type="text"  name="page_no" style="display:none;" value="<?php echo $page_no; ?>" id="page_no_<?php echo $count; ?>" >
                        <!--// Page Data-->
                        <table class=" table table-bordered">
                            <tr>
                                <th>Checked By</th>
                                <th><input type="text" class="form-control" style="" name="checked_by" value="<?php echo @$main_data->checked_by; ?>"></th>
                                <th>Approved By</th>
                                <th><input type="text" class="form-control" style="" name="approved_by" value="<?php echo @$main_data->approved_by; ?>"></th>
                            </tr>
                        </table>
                        <label class="btn btn-primary pull-right submit_1_<?php echo $count; ?>" id="save_<?php echo $count; ?>" name="print_option" value="" >Save</label>
                        <label class="btn btn-primary pull-left submit_1_<?php echo $count; ?> dis_btn_<?php echo $count; ?>" id="submit_<?php echo $count; ?>" name="print_option" value="" >Submit</label>    
                    </div>
                </div>
            </div>    
        </div>
    </div>
</form>
</div>
<div id="912_page_<?php echo $count; ?>"></div>
<div id="loader_912_<?php echo $count;?>" style="margin-left: 500px; margin-top: 800px; position: absolute; width: 100px; display:  none;"><img src="loading.gif" style=" width: 150px;"></div>

<script>
$(document).on('click', '.submit_1_<?php echo json_decode($count); ?>', function (e) {
if($(this).attr('id')=="submit_<?php echo json_decode($count); ?>")
{$('.status_<?php echo json_decode($count); ?>').val("1"); }
else{$('.status_<?php echo json_decode($count); ?>').val("0");}

var m1=$('.mm_1_<?php echo $count; ?>').hasClass('myClass');
var m2=$('.mm_2_<?php echo $count; ?>').hasClass('myClass');
var m3=$('.mm_3_<?php echo $count; ?>').hasClass('myClass');
var m4=$('.mm_4_<?php echo $count; ?>').hasClass('myClass');
var mm1=$('.mmm_1_<?php echo $count; ?>').hasClass('myClass');
var mm2=$('.mmm_2_<?php echo $count; ?>').hasClass('myClass');
if(m1==true){
    $('.ladle_result_1_<?php echo $count; ?>').val("1");
}else if(m2==true){
    $('.ladle_result_1_<?php echo $count; ?>').val("1");
}else if(m3==true){
    $('.ladle_result_1_<?php echo $count; ?>').val("1");
}else if(m4==true){
    $('.ladle_result_1_<?php echo $count; ?>').val("1");
}else if(mm1==true){
    $('.ladle_result_1_<?php echo $count; ?>').val("1");
}
else if(mm2==true){
    $('.ladle_result_1_<?php echo $count; ?>').val("1");
}else {$('.ladle_result_1_<?php echo $count; ?>').val("0");}

var m5=$('.mm_5_<?php echo $count; ?>').hasClass('myClass');
var m6=$('.mm_6_<?php echo $count; ?>').hasClass('myClass');
var m7=$('.mm_7_<?php echo $count; ?>').hasClass('myClass');
var m8=$('.mm_8_<?php echo $count; ?>').hasClass('myClass');
var mm3=$('.mmm_3_<?php echo $count; ?>').hasClass('myClass');
var mm4=$('.mmm_4_<?php echo $count; ?>').hasClass('myClass');
if(m5==true){
    $('.ladle_result_2_<?php echo $count; ?>').val("1");
}else if(m6==true){
    $('.ladle_result_2_<?php echo $count; ?>').val("1");
}else if(m7==true){
    $('.ladle_result_2_<?php echo $count; ?>').val("1");}
else if(m8==true){
    $('.ladle_result_2_<?php echo $count; ?>').val("1");
}else if(mm3==true){
    $('.ladle_result_2_<?php echo $count; ?>').val("1");
}
else if(mm4==true){
    $('.ladle_result_2_<?php echo $count; ?>').val("1");}
else {$('.ladle_result_2_<?php echo $count; ?>').val("0");}

var m9=$('.mm_9_<?php echo $count; ?>').hasClass('myClass');
var m10=$('.mm_10_<?php echo $count; ?>').hasClass('myClass');
var m11=$('.mm_11_<?php echo $count; ?>').hasClass('myClass');
var m12=$('.mm_12_<?php echo $count; ?>').hasClass('myClass');
var mm5=$('.mmm_5_<?php echo $count; ?>').hasClass('myClass');
var mm6=$('.mmm_6_<?php echo $count; ?>').hasClass('myClass');
if(m9==true){
    $('.ladle_result_3_<?php echo $count; ?>').val("1");
}else if(m10==true){
    $('.ladle_result_3_<?php echo $count; ?>').val("1");
}else if(m11==true){
    $('.ladle_result_3_<?php echo $count; ?>').val("1");}
else if(m12==true){
    $('.ladle_result_3_<?php echo $count; ?>').val("1");
}else if(mm5==true){
    $('.ladle_result_3_<?php echo $count; ?>').val("1");
}
else if(mm6==true){
    $('.ladle_result_3_<?php echo $count; ?>').val("1");}
else {$('.ladle_result_3_<?php echo $count; ?>').val("0");}

$("#loader_912_"+<?php echo json_decode($count); ?>).show();
$("#loader_912_"+<?php echo json_decode($count); ?>).fadeOut(5000);

$.ajax({
    url:'<?php echo base_url(); ?>login_controller/save_data',
    type: 'POST',
    cache: false,
    async: false,
    data:$("#912_1_"+<?php echo $count; ?>).serialize(),
    success: function(data){

$("#success_alert_"+<?php echo json_decode($count); ?>).show();
$("#success_alert_"+<?php echo json_decode($count); ?>).fadeOut(5000);
    
    }
    });
    });
 
$(document).on('keyup', '.b_action_<?php echo $count; ?>', function (e) {
    var th=$(this).val();
    var $this = $(this);
    $this.val($this.val().replace(/[^\d.]/g, ''));
    if(parseInt(th) < 190 || parseInt(th) > 302)
    {   $(this).css("color", "black");  
        $(this).css("background-color", "red"); 
        $(this).addClass('myClass');
    }else
    {   $(this).css("color", "");  
        $(this).css("background-color", "");  
        $(this).removeClass('myClass');
    }
});
$(document).on('keyup', '.b_action1_<?php echo $count; ?>', function (e) {
    var th=$(this).val();
    var $this = $(this);
    $this.val($this.val().replace(/[^\d.]/g, ''));
    if(parseInt(th) > 350)
    {   $(this).css("color", "black");  
        $(this).css("background-color", "red"); 
        $(this).addClass('myClass');
    }else
    {   $(this).css("color", "");  
        $(this).css("background-color", "");  
        $(this).removeClass('myClass');
    }
});

$(document).on('keyup', '.action0_<?php echo $count; ?>', function (e) {
    var th=$(this).val();
    var $this = $(this);
    $this.val($this.val().replace(/[^\d.]/g, ''));   
    if(parseInt(th) < 50 )
    {   $(this).css("color", "black");  
        $(this).css("background-color", "red"); 
        $(this).addClass('myClass');
    }else
    {   $(this).css("color", "");  
        $(this).css("background-color", ""); 
        $(this).removeClass('myClass');        
    }
});

$(document).on('keyup', '.action1_<?php echo $count; ?>', function (e) {
    var th=$(this).val();
    var $this = $(this);
    $this.val($this.val().replace(/[^\d.]/g, ''));
    if(parseInt(th) < 42 )
    {   $(this).css("color", "black");  
        $(this).css("background-color", "red"); 
        $(this).addClass('myClass');
        
    }else
    {   $(this).css("color", "");  
        $(this).css("background-color", "");   
        $(this).removeClass('myClass');
       
    }
});
$(document).on('keyup', '.action2_<?php echo $count; ?>', function (e) {
    var th=$(this).val();
    var $this = $(this);
    $this.val($this.val().replace(/[^\d.]/g, ''));
    if(parseInt(th) < 42 )
    {   $(this).css("color", "black");  
        $(this).css("background-color", "red"); 
        $(this).addClass('myClass');
    }else
    {   $(this).css("color", "");  
        $(this).css("background-color", "");   
        $(this).removeClass('myClass');
    }
});
$(document).on('keyup', '.action3_<?php echo $count; ?>', function (e) {
    var th=$(this).val();
    var $this = $(this);
    $this.val($this.val().replace(/[^\d.]/g, ''));
    if(parseInt(th) < 40 )
    {   $(this).css("color", "black");  
        $(this).css("background-color", "red"); 
        $(this).addClass('myClass');
    }else
    {   $(this).css("color", "");  
        $(this).css("background-color", "");   
        $(this).removeClass('myClass');
    }
});
$(document).on('keyup', '.action4_<?php echo $count; ?>', function (e) {
    var th=$(this).val();
    var $this = $(this);
    $this.val($this.val().replace(/[^\d.]/g, ''));
    if(parseFloat(th) < 3 )
    {   $(this).css("color", "black");  
        $(this).css("background-color", "red"); 
        $(this).addClass('myClass');
    }else
    {   $(this).css("color", "");
        $(this).css("background-color", "");     
        $(this).removeClass('myClass');
    }
});

$(".page_select_912_<?php echo $count; ?>").one("change", function(){    

   $('#912_page_1_<?php echo $count; ?>').remove();

 var page_no=$(this).val();
 var item=$('.item_p_<?php echo $count; ?>').val();
 var c_date=$('.date_p_<?php echo $count; ?>').val();
 var heat_no=$('.heat_p_<?php echo $count; ?>').val();
 var count_item=$('.count_item_p_<?php echo $count; ?>').val();

  $.ajax({
    url:'<?php echo base_url(); ?>login_controller/get_page_wise_item',
    type: 'POST',
    cache: false,
    async: false,
    data:{page_no:page_no,item:item,c_date:c_date,heat_no:heat_no,count_item:count_item},

    success: function(data){
      $('#912_page_<?php echo $count; ?>').html(data);  
           $("#abcd_912_<?php echo $count;?>").show();
        $("#abcd_912_<?php echo $count;?>").fadeOut(5000);
           
      }

              
    });       

});

$('input').keydown(function (e) {
    if (e.which === 13) {
    var abc=$(this).attr('class');
    abc=abc.split(" ");
    $(this).parents('tr').next().find('input.'+abc[2]).focus();
    }
 });

 $(document).on('blur', '.c_5_<?php echo $count; ?>', function (e) {

var l1=$('.l_1_<?php echo $count; ?>').val();
var imp1=$('.imp_1_<?php echo $count; ?>').val();
var l2=$('.l_2_<?php echo $count; ?>').val(); 
 

if(l2=='' || l2==null)
{
$('.l_2_<?php echo $count; ?>').val(l1);     
$('.imp_2_<?php echo $count; ?>').val(imp1);     
}
});

 $(document).on('blur', '.c_9_<?php echo $count; ?>', function (e) {

var l2=$('.l_2_<?php echo $count; ?>').val();
var imp2=$('.imp_2_<?php echo $count; ?>').val();
var l3=$('.l_3_<?php echo $count; ?>').val(); 
 

if(l3=='' || l3==null)
{
$('.l_3_<?php echo $count; ?>').val(l2);     
$('.imp_3_<?php echo $count; ?>').val(imp2);     
}
});

 $(document).on('blur', '.c_5_<?php echo $count; ?>', function (e) {

var l1=$('.l_1_<?php echo $count; ?>').val();
var imp1=$('.imp_1_<?php echo $count; ?>').val();
var l2=$('.l_2_<?php echo $count; ?>').val(); 
 

if(l2=='' || l2==null)
{
$('.l_2_<?php echo $count; ?>').val(l1);     
$('.imp_2_<?php echo $count; ?>').val(imp1);     
}
});

 $(document).on('blur', '.c_9_<?php echo $count; ?>', function (e) {

var l2=$('.l_2_<?php echo $count; ?>').val();
var imp2=$('.imp_2_<?php echo $count; ?>').val();
var l3=$('.l_3_<?php echo $count; ?>').val(); 
 

if(l3=='' || l3==null)
{
$('.l_3_<?php echo $count; ?>').val(l2);     
$('.imp_3_<?php echo $count; ?>').val(imp2);     
}
});
</script>