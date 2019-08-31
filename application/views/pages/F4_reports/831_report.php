<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<style>
table {
        border-collapse: collapse;
        width: 100%;
    }

    th, td {
        padding: 10px;
        text-align: center;
    }
        
</style>
<?php
$c_action = array('500', '400', '400', '350', '400','350','400','350','5.5','3.5');
$b_action = array('197', '197', '197', '197','197','197','197','197','201');
$b_action1 = array('241', '241', '241','241','241','241','241','241','262');
$D3=array();
$b_cust_spec=array(); 
$b_working_spec=array();
if($data)
{
    $b_cust_spec = ["Front End <br/>197 - 241","BRG. 1 <br/>197 - 241","BRG. 2 <br/>197 - 241","BRG. 3 <br>197 - 241","BRG. 4<br/>197 - 241","BRG 5.<br/>197 - 241","Collar 1<br/>197 - 241","Collar 2<br/>197 - 241","Pad <br/>201 - 262"];
    $b_working_spec=["Front End <br/>197 - 241","BRG. 1 <br/>197 - 241","BRG. 2 <br/>197 - 241","BRG. 3 <br>197 - 241","BRG. 4<br/>197 - 241","BRG 5.<br/>197 - 241","Collar 1<br/>197 - 241","Collar 2<br/>197 - 241","Pad <br/>201 - 262"];

    //L Parametrs
    $D3[]=["at_point"=>"'O'","cust_spec"=>"2.00 - 500 Min","working_spec"=>"2.00 - 500 Min"];
    $D3[]=["at_point"=>"'O'","cust_spec"=>"5.5 - 400 Min","working_spec"=>"5.5 - 400 Min"];
    $D3[]=["at_point"=>"'A'","cust_spec"=>"2.00 - 400 Min","working_spec"=>"2.00 - 400 Min"];
    $D3[]=["at_point"=>"'A'","cust_spec"=>"3.5 - 350 Min","working_spec"=>"3.5 - 350 Min"];
    $D3[]=["at_point"=>"'B'","cust_spec"=>"2.00 - 400 Min","working_spec"=>"2.00 - 400 Min"];
    $D3[]=["at_point"=>"'B'","cust_spec"=>"3.5 - 350 Min","working_spec"=>"3.5 - 350 Min"];
    $D3[]=["at_point"=>"'C'","cust_spec"=>"2.00 - 400 Min","working_spec"=>"2.00 - 400 Min"];
    $D3[]=["at_point"=>"'C'","cust_spec"=>"3.5 - 350 Min","working_spec"=>"3.5 - 350 Min"];
    $D3[]=["at_point"=>"Effective Chill <br/>Depth At Peak","cust_spec"=>"5.5 MM","working_spec"=>"5.5 MM"];
    $D3[]=["at_point"=>"Effective Chill<br/>Depth At A B & C","cust_spec"=>"3.5 MM","working_spec"=>"3.5 MM"];
    
    //C Values
    foreach ($D1 as $row) {
        $L_Val = explode(",", $row->L_val);
        $imp = explode(",", $row->CP_val);
        $C_Val= explode(",", $row->C_val);
        $mm_Val=explode(",", $row->mm_val);
    }    
    $final_mm_val = array_chunk($mm_Val, 12);
    
    //B Values
    foreach ($D2 as $row) {
       $B_Val=explode(",", $row->b_val);
    }
    $final_B_Val= array_chunk((array_slice($B_Val, 0, 54)), 6);
    $b_val_chunk2= array_chunk((array_slice($B_Val, 54, 71)), 6);
    $b_data = array();              
    $b_data1 = array();              
    for ($b = 0; $b < count($final_B_Val); $b++) {
        $b_data[] = array_chunk($final_B_Val[$b], 2);               
    }
    for ($b1 = 0; $b1 < count($b_data); $b1++) {
        for ($b2 = 0; $b2 < count($b_data[$b1]); $b2++) {
            if(in_array("", $b_data[$b1][$b2], true)){
                $b_data1[] = implode("", $b_data[$b1][$b2]);
            }else{
                $b_data1[] = implode(" -- ", $b_data[$b1][$b2]);
            }
        }
    }
    $b_data2 = array_chunk($b_data1, 3);
    ?>

<hr>
<div class="btn-group pull-right">
</div>

<br>
    
 <button class="btn btn-danger dropdown-toggle" id="d1" type="button"><i class="fa fa-bars"></i> Export Data</button>
<br/><br/>
    <div id="printDiv1" style="width: 100%;">
    
    <table border="1" align="center" class="customers2" style="width: 100%; border: #000000; background: #ffffff;">
            <tr style="text-align: center; vertical-align: middle;">                
                <td style="border-bottom: #ffffff;" colspan="2" rowspan="3" width="30%"><img src="<?php echo base_url(); ?>pcl_s.png" width="75"></td>
                <td rowspan="1" style="text-align: center; vertical-align: middle; border-right: #ffffff;" colspan="10"><b>QUALITY SYSTEM RECORD</b></td>
                <td rowspan="1" style="text-align: center; vertical-align: middle; border-bottom:#ffffff;" colspan="3"><b>Q.A.</b></td>
            </tr>  
            <tr style="background: #ffffff;">
                <td style="text-align: center; vertical-align: middle; height:25px; border-bottom:#ffffff;" colspan="10"><b>TITLE</b></td>
                <td style="text-align: center; vertical-align: middle; height:25px; border-top: #ffffff; border-bottom:#ffffff;" colspan="3"><b>REF.NO.</b></td> 
            </tr>
            <tr style="background: #ffffff;">
                <td style="text-align: center; vertical-align: middle; height:25px; border-top: #ffffff;" colspan="10"><b>HARDNESS & CHILL DEPTH REPORT</b></td>
                <td style="text-align: center; vertical-align: middle; height:25px; border-top: #ffffff; " colspan="3"><b><?php echo $data->qa_ref_no;?></b></td>
            </tr>
            
            <tr style="background: #ffffff;">
                
                <td align="center" style="text-align: center; vertical-align: middle; height:25px;" colspan="4"><b>ITEM </b></td>
                <td align="center" style="text-align: center; vertical-align: middle;" colspan="6"><b>PART NO </b></td>
                <td align="center" style=" text-align: left; vertical-align: middle; " colspan="5"><b>DATE: <?php $datef=$data->c_date; $datef=strtotime($datef); echo date('d.m.Y',$datef); ?> </b></td>
            </tr>
            <tr style="background: #ffffff;">
                <td align="center" style="text-align: center; vertical-align: middle; height:25px;" colspan="4"><b><?php echo $data->cust_name; ?></b></td>
                <td align="center" style="text-align: center; vertical-align: middle;" colspan="6"><b><?php echo $data->part_no; ?>  </b></td>
                <td align="center" style=" text-align: left; vertical-align: middle;" colspan="5"><b>HEAT NO: <?php echo $data->heat_no; ?></b></td>
            </tr>                        
<!--        </table>       
 <br>
    <table border="1" align="center" style="border-top: #ffffff; width: 100%; border: #000000;">-->
        <tr style="border-bottom: #ffffff; background: #ffffff;"></tr>
        <tr style="background: #ffffff;">            
            <th style="border-top: #ffffff; text-align: center; vertical-align: middle;" colspan="15"><img src="<?php echo base_url(); ?>/Audio/<?php echo $data->item; ?>_img.png" style="align:center; vertical-align: middle" width="70%" height="175"></th>            
        </tr>
<!--    </table>
 <br>
    
    <table border="1" align="center" class="customers2" style="border-top: #ffffff; width: 100%; border: #000000;">-->
        <tr style="background: #ffffff;">               
            <th colspan="2" rowspan="3" style="width:15%; text-align: center; vertical-align: middle; border-top: #ffffff;">AT POINT</th>                
            <th rowspan="2 " style="width:15%;text-align: center; vertical-align: middle;  border-top: #ffffff;">CUSTOMER SPEC.</th>              
            <th  style="border-top: #ffffff;" colspan="12">OBSERVATIONS</th>
        </tr>
                       
        <tr style="background: #ffffff;">                
                <?php 
                    for($i=0;$i<count($L_Val);$i++){?>
            <th style="height:23px;" colspan="2">L-<?php echo $L_Val[$i]; ?></th>
            <th style="height:23px;" colspan="2">IMP-<?php echo $imp[$i]; ?></th>
                    <?php }?>                                
        </tr>
            
        <tr style="background: #ffffff;">
                <th style="height:23px;">MM - Hv</th>
                <?php for($j=0;$j< count($C_Val);$j++){
                    if($C_Val[$j]==""){?>
                        <th >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                   <?php }else{
                ?>                
                <th >&nbsp;&nbsp;&nbsp;&nbsp;C-<?php echo $C_Val[$j]; if($C_Val[$j]<10){?>&nbsp;&nbsp;&nbsp;<?php } ?>&nbsp;&nbsp;</th>
                <?php } }?>
            </tr>
            
            <?php
            for ($k = 0; $k < count($D3); $k++) {?>
            <tr style="background: #ffffff;">
                <?php if($k<8){ if($k%2==0){?>
                <td align="center" rowspan="2" colspan="2" style="text-align: center; vertical-align: middle; height:49px;"><?php echo $D3[$k]['at_point']?></td>    
                <?php }}else{?>
                    <td align="center" colspan="2" style="text-align: center; vertical-align: middle; height:49px;"><?php echo $D3[$k]['at_point']?></td>    
                <?php }?>
                    <td align="center" style="text-align: center; vertical-align: middle;"><?php echo $D3[$k]['cust_spec']; ?></td>                                         
                    <?php for($c=0;$c<count($final_mm_val[$k]);$c++){ 
                        $flag=0;
                        if($final_mm_val[$k][$c]!="" && ($final_mm_val[$k][$c]<$c_action[$k])){
                            $flag=1;
                        } else {
                            $flag=0;
                        }
                    ?>
                        <td style="text-align: center; height:60px; vertical-align: middle; <?php if($flag==1){?> background-color:#DCDCDC; <?php }?>"><?php echo $final_mm_val[$k][$c]; ?></td>
                    <?php } ?>
                </tr>                   
            <?php } ?>
    
            <!------------------------B---------------->
            
            <?php 
            $cnt=0;
            for ($b = 0; $b < count($b_cust_spec); $b++) {?>
            <tr style="background: #ffffff;">
                    <?php if($cnt==0){ ?>
                <td style="text-align: center; vertical-align: middle;" colspan="2" rowspan="9" ><br/>BRINELL <br>HARDNESS <br> BHN (5/750 Kg<br> Load )<br/><img src="<?php echo base_url();?>/Audio/<?php echo $data->item;?>_brg.png" width="100" ></td>
                    <?php } ?>
                    <td style="text-align: center; vertical-align: middle;"><?php echo $b_cust_spec[$b]; ?></td>
                    <?php for($bb=0;$bb< count($b_data2[$b]);$bb++){
                        $bitflag=0;
                        $bits= explode(" -- ", $b_data2[$b][$bb]);
                        $bits_arr_count=count($bits);
                        if($bits_arr_count==2){
                            if(($bits[0]<$b_action[$b] || $bits[0]>$b_action1[$b]) || ($bits[1]<$b_action[$b] || $bits[1]>$b_action1[$b])){
                                $bitflag=1;
                            }else{
                                $bitflag=0;
                            }
                        }else{
                            if(($bits[0]<$b_action[$b] || $bits[0]>$b_action1[$b]) && $bits[0]!=""){
                                $bitflag=1;
                            }else{
                                $bitflag=0;
                            }
                        } 
                     ?>
                        <td colspan="4" style="text-align: center; vertical-align: middle; <?php if($bitflag==1){?> background-color:#DCDCDC; <?php }?>"><?php echo $b_data2[$b][$bb]; ?></td>
                    <?php } ?>                                    
                </tr>
            <?php $cnt++; } ?>  
            
            
            <!----------------/B------------------------------------>
<!--       </table>
    
    <br>
    
     <table border="1" style="width: 100%; border-top: #ffffff; border: #000000;" align="center">-->
         <tr style="background: #ffffff;">                        
            <th rowspan="1" colspan="7" style="border-top: #ffffff; border-bottom: #ffffff;"><img src="<?php echo base_url();?>/Audio/<?php echo $data->item;?>_cam.png" width="500" ></th>          
            <th colspan="4" style="vertical-align: top; text-align: left;">PAD BHN<br><br>
                <table border="1" style="width: 100%; border-top: #ffffff; border: #000000;">
                        <tr>
                            <th></th>
                            <th>L-<?php echo $L_Val[0]; ?></th>
                            <th>L-<?php echo $L_Val[1]; ?></th>
                            <th>L-<?php echo $L_Val[2]; ?></th>
                        </tr>
                        <tr style=" background-color:  white;">
                            <th>1)</th>
                            <?php if($b_val_chunk2[0][0]!="" && ($b_val_chunk2[0][0] < 201 || $b_val_chunk2[0][0] > 262)){?>
                            <th style=" background-color:#DCDCDC;"><?php echo $b_val_chunk2[0][0]; ?></th>
                            <?php } else {?><th><?php echo $b_val_chunk2[0][0]; ?></th><?php }?>
                            
                            <?php if($b_val_chunk2[0][2]!="" && ($b_val_chunk2[0][2] < 201 || $b_val_chunk2[0][2] > 262)){?>
                            <th style=" background-color:#DCDCDC;"><?php echo $b_val_chunk2[0][2]; ?></th>
                             <?php } else {?><th><?php echo $b_val_chunk2[0][2]; ?></th><?php }?>
                             
                            <?php if($b_val_chunk2[0][4]!="" && ($b_val_chunk2[0][4] < 201 || $b_val_chunk2[0][4] > 262)){?>
                            <th style=" background-color:#DCDCDC;"><?php echo $b_val_chunk2[0][4]; ?></th>
                             <?php } else {?><th><?php echo $b_val_chunk2[0][4]; ?></th><?php }?>
                            
                           
                        </tr>
                        <tr style=" background-color:  white;">
                            <th>2)</th>
                            <?php if($b_val_chunk2[1][0]!="" && ($b_val_chunk2[1][0] < 201 || $b_val_chunk2[1][0] > 262)){?>
                            <th style=" background-color:#DCDCDC;"><?php echo $b_val_chunk2[1][0]; ?></th>
                             <?php } else {?><th><?php echo $b_val_chunk2[1][0]; ?></th><?php }?>
                             
                             <?php if($b_val_chunk2[1][2]!="" && ($b_val_chunk2[1][2] < 201 || $b_val_chunk2[1][2] > 262)){?>
                            <th style=" background-color:#DCDCDC;"><?php echo $b_val_chunk2[1][2]; ?></th>
                             <?php } else {?><th><?php echo $b_val_chunk2[1][2]; ?></th><?php }?>
                             
                             <?php if($b_val_chunk2[1][4]!="" && ($b_val_chunk2[1][4] < 201 || $b_val_chunk2[1][4] > 262)){?>
                            <th style=" background-color:#DCDCDC;"><?php echo $b_val_chunk2[1][4]; ?></th>
                             <?php } else {?><th><?php echo $b_val_chunk2[1][4]; ?></th><?php }?>
                            
                        </tr>
                        <tr style=" background-color:  white;">
                            <th>3)</th>
                            <?php if($b_val_chunk2[2][0]!="" && ($b_val_chunk2[2][0] < 201 || $b_val_chunk2[2][0] > 262)){?>
                            <th style=" background-color:#DCDCDC;"><?php echo $b_val_chunk2[2][0]; ?></th>
                             <?php } else {?><th><?php echo $b_val_chunk2[2][0]; ?></th><?php }?>
                             
                             <?php if($b_val_chunk2[2][2]!="" && ($b_val_chunk2[2][2] < 201 || $b_val_chunk2[2][2] > 262)){?>
                            <th style=" background-color:#DCDCDC;"><?php echo $b_val_chunk2[2][2]; ?></th>
                             <?php } else {?><th><?php echo $b_val_chunk2[2][2]; ?></th><?php }?>
                             
                             <?php if($b_val_chunk2[2][4]!="" && ($b_val_chunk2[2][4] < 201 || $b_val_chunk2[2][4] > 262)){?>
                            <th style=" background-color:#DCDCDC;"><?php echo $b_val_chunk2[2][4]; ?></th>
                             <?php } else {?><th><?php echo $b_val_chunk2[2][4]; ?></th><?php }?>
                             
                             
                             
                        </tr>
                        <tr style=" background-color:  white;">
                            <th>4)</th>
                            <?php if($b_val_chunk2[0][1]!="" && ($b_val_chunk2[0][1] < 201 || $b_val_chunk2[0][1] > 262)){?>
                            <th style=" background-color:#DCDCDC;"><?php echo $b_val_chunk2[0][1]; ?></th>
                             <?php } else {?><th><?php echo $b_val_chunk2[0][1]; ?></th><?php }?>
                             
                             <?php if($b_val_chunk2[0][3]!="" && ($b_val_chunk2[0][3] < 201 || $b_val_chunk2[0][3] > 262)){?>
                            <th style=" background-color:#DCDCDC;"><?php echo $b_val_chunk2[0][3]; ?></th>
                             <?php } else {?><th><?php echo $b_val_chunk2[0][3]; ?></th><?php }?>
                             
                             <?php if($b_val_chunk2[0][5]!="" && ($b_val_chunk2[0][5] < 201 || $b_val_chunk2[0][5] > 262)){?>
                            <th style=" background-color:#DCDCDC;"><?php echo $b_val_chunk2[0][5]; ?></th>
                             <?php } else {?><th><?php echo $b_val_chunk2[0][5]; ?></th><?php }?>
                            
                        </tr>
                        <tr style=" background-color:  white;">
                            <th>5)</th>
                            <?php if($b_val_chunk2[1][1]!="" && ($b_val_chunk2[1][1] < 201 || $b_val_chunk2[1][1] > 262)){?>
                            <th style=" background-color:#DCDCDC;"><?php echo $b_val_chunk2[1][1]; ?></th>
                             <?php } else {?><th><?php echo $b_val_chunk2[1][1]; ?></th><?php }?>
                             
                             <?php if($b_val_chunk2[1][3]!="" && ($b_val_chunk2[1][3] < 201 || $b_val_chunk2[1][3] > 262)){?>
                            <th style=" background-color:#DCDCDC;"><?php echo $b_val_chunk2[1][3]; ?></th>
                             <?php } else {?><th><?php echo $b_val_chunk2[1][3]; ?></th><?php }?>
                             
                             <?php if($b_val_chunk2[1][5]!="" && ($b_val_chunk2[1][5] < 201 || $b_val_chunk2[1][5] > 262)){?>
                            <th style=" background-color:#DCDCDC;"><?php echo $b_val_chunk2[1][5]; ?></th>
                             <?php } else {?><th><?php echo $b_val_chunk2[1][5]; ?></th><?php }?>
                          
                        </tr>
                        <tr style=" background-color:  white;">
                            <th>6)</th>
                            <?php if($b_val_chunk2[2][1]!="" && ($b_val_chunk2[2][1] < 201 || $b_val_chunk2[2][1] > 262)){?>
                            <th style=" background-color:#DCDCDC;"><?php echo $b_val_chunk2[2][1]; ?></th>
                             <?php } else {?><th><?php echo $b_val_chunk2[2][1]; ?></th><?php }?>
                             
                             <?php if($b_val_chunk2[2][3]!="" && ($b_val_chunk2[2][3] < 201 || $b_val_chunk2[2][3] > 262)){?>
                            <th style=" background-color:#DCDCDC;"><?php echo $b_val_chunk2[2][3]; ?></th>
                             <?php } else {?><th><?php echo $b_val_chunk2[2][3]; ?></th><?php }?>
                             
                             <?php if($b_val_chunk2[2][5]!="" && ($b_val_chunk2[2][5] < 201 || $b_val_chunk2[2][5] > 262)){?>
                            <th style=" background-color:#DCDCDC;"><?php echo $b_val_chunk2[2][5]; ?></th>
                             <?php } else {?><th><?php echo $b_val_chunk2[2][5]; ?></th><?php }?>
                            
                        </tr>
                    </table>
            
            </th>
            <th rowspan="1" style="width:50%; border-top: #ffffff; vertical-align: top; text-align: left;" colspan="4"><?php echo $data->remark;?></th>
        </tr>   
        <tr style="background: #ffffff;">            
            <td style="text-align: left; vertical-align: middle; " align="center" colspan="7" rowspan="2">CHECKED BY : <?php echo $data->checked_by;?></td>
            <td style="width:50%; text-align: left; vertical-align: middle;" align="center" colspan="8" rowspan="2">APPROVED BY : <?php echo $data->approved_by;?></td>                              
        </tr>
        <tr style="background: #ffffff;"></tr>
    </table>
                                        
</div>
    <div id="printDiv" style="width: 100%; display: none;">    
    <table border="1" align="center" class="customers2" style="width: 100%; border: #000000; background: #ffffff;">
             <tr style="text-align: center; vertical-align: middle; height:17px;">
                <td style="border-bottom: #ffffff; border-right: #ffffff; width: 17px;"><font color="#ffffff">a</font></td>
                <td style="border-bottom: #ffffff; border-left: #ffffff; width: 17px;" colspan="1"></td>
                <td rowspan="2" style="text-align: center; vertical-align: middle; height:13px; border-right: #ffffff;" colspan="10"><b>QUALITY SYSTEM RECORD</b></td>
                <td rowspan="2" style="text-align: center; vertical-align: middle; height:13px; border-bottom:#ffffff;" colspan="3"><b>Q.A.</b></td>
            </tr>           
            <tr style="text-align: center; vertical-align: middle; height:17px; border-top: #ffffff; background: #ffffff;">               
                <td style="border-right: #ffffff; border-top: #ffffff; border-bottom: #ffffff; width: 17px;"></td>
                <td rowspan="3" style="text-align: center; vertical-align: middle; border-top: #ffffff; border-left: #ffffff;" align="center" colspan="1"><img src="<?php echo base_url(); ?>pcl_s.png" width="75"></td>                
            </tr>
            <tr style="background: #ffffff;"> 
                <td style="border-right: #ffffff; border-top: #ffffff; border-bottom: #ffffff; background: #ffffff; height:21px;"></td>
                <td style="text-align: center; vertical-align: middle; height:21px; border-bottom:#ffffff;" colspan="10"><b>TITLE</b></td>
                <td style="text-align: center; vertical-align: middle; height:21px; border-top: #ffffff; border-bottom:#ffffff;" colspan="3"><b>REF.NO.</b></td> 
            </tr>
            <tr style="background: #ffffff; height:25px;">
                <td style="border-right: #ffffff; border-top: #ffffff; border-bottom: #ffffff; height:35px;"></td>
                <td style="text-align: center; vertical-align: middle; height:35px; border-top: #ffffff;" colspan="10"><b>HARDNESS & CHILL DEPTH REPORT</b></td>
                <td style="text-align: center; vertical-align: middle; height:35px; border-top: #ffffff; " colspan="3"><b><?php echo $data->qa_ref_no;?></b></td>
            </tr>
            <tr style="background: #ffffff;">
                
                <td align="center" style="text-align: center; vertical-align: middle; height:34px;" colspan="4"><b>ITEM </b></td>
                <td align="center" style="text-align: center; vertical-align: middle;" colspan="6"><b>PART NO </b></td>
                <td align="center" style=" text-align: left; vertical-align: middle; " colspan="5"><b>DATE: <?php $datef=$data->c_date; $datef=strtotime($datef); echo date('d.m.Y',$datef); ?> </b></td>
            </tr>
            <tr style="background: #ffffff;">
                <td align="center" style="text-align: center; vertical-align: middle; height:34px;" colspan="4"><b><?php echo $data->cust_name; ?></b></td>
                <td align="center" style="text-align: center; vertical-align: middle;" colspan="6"><b><?php echo $data->part_no; ?>  </b></td>
                <td align="center" style=" text-align: left; vertical-align: middle;" colspan="5"><b>HEAT NO: <?php echo $data->heat_no; ?></b></td>
            </tr>                        
        </table>       
<!-- <br>-->
    <table border="1" align="center" style="border-top: #ffffff; width: 100%; border: #000000;">
        <tr style="border-bottom: #ffffff; background: #ffffff; height: 5px;"></tr>
        <tr style="background: #ffffff;">
            <th style="border-top:#ffffff; border-right: #ffffff;" colspan="1"></th>
            <th style="border-top: #ffffff; border-left: #ffffff; border-right: #ffffff; text-align: center; vertical-align: middle;  height: 180px;" colspan="13"><img src="<?php echo base_url(); ?>/Audio/<?php echo $data->item; ?>_img.png" style="align:center; vertical-align: middle" width="800" height="170"></th>
            <th style="border-top: #ffffff; border-left: #ffffff;"></th>
        </tr>
    </table>
<!-- <br>-->
    
    <table border="1" align="center" class="customers2" style="border-top: #ffffff; width: 100%; border: #000000;">
        <tr style="background: #ffffff;">               
            <th colspan="2" rowspan="3" style="width:15%; text-align: center; vertical-align: middle; border-top: #ffffff;">AT POINT</th>                
            <th rowspan="2 " style="width:15%;text-align: center; vertical-align: middle;  border-top: #ffffff;">CUSTOMER SPEC.</th>              
            <th  style="border-top: #ffffff;" colspan="12">OBSERVATIONS</th>
        </tr>
                       
        <tr style="background: #ffffff;">                
                <?php 
                    for($i=0;$i<count($L_Val);$i++){?>
            <th style="height:23px;" colspan="2">L-<?php echo $L_Val[$i]; ?></th>
            <th style="height:23px;" colspan="2">IMP-<?php echo $imp[$i]; ?></th>
                    <?php }?>                                
        </tr>
            
        <tr style="background: #ffffff;">
                <th style="height:23px;">MM - Hv</th>
                <?php for($j=0;$j< count($C_Val);$j++){
                    if($C_Val[$j]==""){?>
                        <th >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                   <?php }else{
                ?>                
                <th >&nbsp;&nbsp;&nbsp;&nbsp;C-<?php echo $C_Val[$j]; if($C_Val[$j]<10){?>&nbsp;&nbsp;&nbsp;<?php } ?>&nbsp;&nbsp;</th>
                <?php } }?>
            </tr>
            
            <?php
            for ($k = 0; $k < count($D3); $k++) {?>
            <tr style="background: #ffffff;">
                <?php if($k<8){ if($k%2==0){?>
                <td align="center" rowspan="2" colspan="2" style="text-align: center; vertical-align: middle; height:49px;"><?php echo $D3[$k]['at_point']?></td>    
                <?php }}else{ ?>
                    <td align="center" colspan="2" style="text-align: center; vertical-align: middle; height:49px;"><?php echo $D3[$k]['at_point']?></td>    
                <?php }?>
                    <td align="center" style="text-align: center; vertical-align: middle;"><?php echo $D3[$k]['cust_spec']; ?></td>                                         
                    <?php for($c=0;$c<count($final_mm_val[$k]);$c++){ 
                        $flag=0;
                        if($final_mm_val[$k][$c]!="" && ($final_mm_val[$k][$c]<$c_action[$k])){
                            $flag=1;
                        } else {
                            $flag=0;
                        }
                    ?>
                        <td style="text-align: center; height:49px; vertical-align: middle; <?php if($flag==1){?> background-color:#DCDCDC; <?php }?>"><?php echo $final_mm_val[$k][$c]; ?></td>
                    <?php } ?>
                </tr>                   
            <?php } ?>
                
            <!------------------------B---------------->
            
            <?php 
            $cnt=0;
            for ($b = 0; $b < count($b_cust_spec); $b++) {?>
            <tr style="background: #ffffff;">
                    <?php if($cnt==0){ ?>
                <td style="text-align: center; vertical-align: middle;" colspan="2" rowspan="9" ><br/><br/><br/><br/>BRINELL <br>HARDNESS <br> BHN (5/750 Kg<br> Load )<br/><br/><img src="<?php echo base_url();?>/Audio/<?php echo $data->item;?>_brg.png" width="100" ></td>
                    <?php } ?>
                    <td style="text-align: center; vertical-align: middle;"><?php echo $b_cust_spec[$b]; ?></td>
                    <?php for($bb=0;$bb< count($b_data2[$b]);$bb++){
                        $bitflag=0;
                        $bits= explode(" -- ", $b_data2[$b][$bb]);
                        $bits_arr_count=count($bits);
                        if($bits_arr_count==2){
                            if(($bits[0]<$b_action[$b] || $bits[0]>$b_action1[$b]) || ($bits[1]<$b_action[$b] || $bits[1]>$b_action1[$b])){
                                $bitflag=1;
                            }else{
                                $bitflag=0;
                            }
                        }else{
                            if(($bits[0]<$b_action[$b] || $bits[0]>$b_action1[$b]) && $bits[0]!=""){
                                $bitflag=1;
                            }else{
                                $bitflag=0;
                            }
                        } 
                     ?>
                        <td colspan="4" style="text-align: center; vertical-align: middle; <?php if($bitflag==1){?> background-color:#DCDCDC; <?php }?>"><?php echo $b_data2[$b][$bb]; ?></td>
                    <?php } ?>                                    
                </tr>
            <?php $cnt++; } ?>
            <!----------------/B------------------------------------>
       </table>
    
    <!--<br>-->
    
     <table border="1" style="width: 100%; border-top: #ffffff; border: #000000;" align="center">
         <tr style="background: #ffffff; height: 15px;">
             <th colspan="7" style="border-top:#ffffff; border-bottom:#ffffff; height: 15px;"></th>
             <th colspan="4" style="border-top:#ffffff; border-bottom:#ffffff; height: 15px;"></th>
             <th colspan="4" style=" border-bottom:#ffffff; height: 15px;"></th>
         </tr>
         <tr style="background: #ffffff;">            
            <th colspan="1" rowspan="7" style="border-top: #ffffff; border-right: #ffffff; border-bottom: #ffffff; height: 29px;"></th>
            <th rowspan="10" colspan="6" style="border-top: #ffffff; border-left: #ffffff; border-bottom: #ffffff; height: 29px;">           
                <div id="item_img" ><img src="<?php echo base_url();?>/Audio/<?php echo $data->item;?>_cam.png" width="400" height="210" ></div></th>          
<!--            <th rowspan="9" style="text-align: left; vertical-align: top; width:50%; border-top: #ffffff; height: 29px;" colspan="8"><?php echo $data->remark;?></th>-->
                        <th colspan="4" style="vertical-align: top; text-align: left;border-top: #ffffff;" rowspan="11">PAD BHN<br><br>
                <table border="1" style="width: 100%; border-top: #ffffff; border: #000000;">
                        <tr>
                            <th></th>
                            <th>L-<?php echo $L_Val[0]; ?></th>
                            <th>L-<?php echo $L_Val[1]; ?></th>
                            <th>L-<?php echo $L_Val[2]; ?></th>
                        </tr>
                        <tr style=" background-color:  white;">
                            <th>1)</th>
                            <?php if($b_val_chunk2[0][0]!="" && ($b_val_chunk2[0][0] < 201 || $b_val_chunk2[0][0] > 262)){?>
                            <th style=" background-color:#DCDCDC;"><?php echo $b_val_chunk2[0][0]; ?></th>
                            <?php } else {?><th><?php echo $b_val_chunk2[0][0]; ?></th><?php }?>
                            
                            <?php if($b_val_chunk2[0][2]!="" && ($b_val_chunk2[0][2] < 201 || $b_val_chunk2[0][2] > 262)){?>
                            <th style=" background-color:#DCDCDC;"><?php echo $b_val_chunk2[0][2]; ?></th>
                             <?php } else {?><th><?php echo $b_val_chunk2[0][2]; ?></th><?php }?>
                             
                            <?php if($b_val_chunk2[0][4]!="" && ($b_val_chunk2[0][4] < 201 || $b_val_chunk2[0][4] > 262)){?>
                            <th style=" background-color:#DCDCDC;"><?php echo $b_val_chunk2[0][4]; ?></th>
                             <?php } else {?><th><?php echo $b_val_chunk2[0][4]; ?></th><?php }?> 
                        </tr>
                        <tr style=" background-color:  white;">
                            <th>2)</th>
                            <?php if($b_val_chunk2[1][0]!="" && ($b_val_chunk2[1][0] < 201 || $b_val_chunk2[1][0] > 262)){?>
                            <th style=" background-color:#DCDCDC;"><?php echo $b_val_chunk2[1][0]; ?></th>
                             <?php } else {?><th><?php echo $b_val_chunk2[1][0]; ?></th><?php }?>
                             
                             <?php if($b_val_chunk2[1][2]!="" && ($b_val_chunk2[1][2] < 201 || $b_val_chunk2[1][2] > 262)){?>
                            <th style=" background-color:#DCDCDC;"><?php echo $b_val_chunk2[1][2]; ?></th>
                             <?php } else {?><th><?php echo $b_val_chunk2[1][2]; ?></th><?php }?>
                             
                             <?php if($b_val_chunk2[1][4]!="" && ($b_val_chunk2[1][4] < 201 || $b_val_chunk2[1][4] > 262)){?>
                            <th style=" background-color:#DCDCDC;"><?php echo $b_val_chunk2[1][4]; ?></th>
                             <?php } else {?><th><?php echo $b_val_chunk2[1][4]; ?></th><?php }?>
                        </tr>
                        <tr style=" background-color:  white;">
                            <th>3)</th>
                            <?php if($b_val_chunk2[2][0]!="" && ($b_val_chunk2[2][0] < 201 || $b_val_chunk2[2][0] > 262)){?>
                            <th style=" background-color:#DCDCDC;"><?php echo $b_val_chunk2[2][0]; ?></th>
                             <?php } else {?><th><?php echo $b_val_chunk2[2][0]; ?></th><?php }?>
                             
                             <?php if($b_val_chunk2[2][2]!="" && ($b_val_chunk2[2][2] < 201 || $b_val_chunk2[2][2] > 262)){?>
                            <th style=" background-color:#DCDCDC;"><?php echo $b_val_chunk2[2][2]; ?></th>
                             <?php } else {?><th><?php echo $b_val_chunk2[2][2]; ?></th><?php }?>
                             
                             <?php if($b_val_chunk2[2][4]!="" && ($b_val_chunk2[2][4] < 201 || $b_val_chunk2[2][4] > 262)){?>
                            <th style=" background-color:#DCDCDC;"><?php echo $b_val_chunk2[2][4]; ?></th>
                             <?php } else {?><th><?php echo $b_val_chunk2[2][4]; ?></th><?php }?>
                        </tr>
                        <tr style=" background-color:  white;">
                            <th>4)</th>
                            <?php if($b_val_chunk2[0][1]!="" && ($b_val_chunk2[0][1] < 201 || $b_val_chunk2[0][1] > 262)){?>
                            <th style=" background-color:#DCDCDC;"><?php echo $b_val_chunk2[0][1]; ?></th>
                             <?php } else {?><th><?php echo $b_val_chunk2[0][1]; ?></th><?php }?>
                             
                             <?php if($b_val_chunk2[0][3]!="" && ($b_val_chunk2[0][3] < 201 || $b_val_chunk2[0][3] > 262)){?>
                            <th style=" background-color:#DCDCDC;"><?php echo $b_val_chunk2[0][3]; ?></th>
                             <?php } else {?><th><?php echo $b_val_chunk2[0][3]; ?></th><?php }?>
                             
                             <?php if($b_val_chunk2[0][5]!="" && ($b_val_chunk2[0][5] < 201 || $b_val_chunk2[0][5] > 262)){?>
                            <th style=" background-color:#DCDCDC;"><?php echo $b_val_chunk2[0][5]; ?></th>
                             <?php } else {?><th><?php echo $b_val_chunk2[0][5]; ?></th><?php }?>                            
                        </tr>
                        <tr style=" background-color:  white;">
                            <th>5)</th>
                            <?php if($b_val_chunk2[1][1]!="" && ($b_val_chunk2[1][1] < 201 || $b_val_chunk2[1][1] > 262)){?>
                            <th style=" background-color:#DCDCDC;"><?php echo $b_val_chunk2[1][1]; ?></th>
                             <?php } else {?><th><?php echo $b_val_chunk2[1][1]; ?></th><?php }?>
                             
                             <?php if($b_val_chunk2[1][3]!="" && ($b_val_chunk2[1][3] < 201 || $b_val_chunk2[1][3] > 262)){?>
                            <th style=" background-color:#DCDCDC;"><?php echo $b_val_chunk2[1][3]; ?></th>
                             <?php } else {?><th><?php echo $b_val_chunk2[1][3]; ?></th><?php }?>
                             
                             <?php if($b_val_chunk2[1][5]!="" && ($b_val_chunk2[1][5] < 201 || $b_val_chunk2[1][5] > 262)){?>
                            <th style=" background-color:#DCDCDC;"><?php echo $b_val_chunk2[1][5]; ?></th>
                             <?php } else {?><th><?php echo $b_val_chunk2[1][5]; ?></th><?php }?>                          
                        </tr>
                        <tr style=" background-color:  white;">
                            <th>6)</th>
                            <?php if($b_val_chunk2[2][1]!="" && ($b_val_chunk2[2][1] < 201 || $b_val_chunk2[2][1] > 262)){?>
                            <th style=" background-color:#DCDCDC;"><?php echo $b_val_chunk2[2][1]; ?></th>
                             <?php } else {?><th><?php echo $b_val_chunk2[2][1]; ?></th><?php }?>
                             
                             <?php if($b_val_chunk2[2][3]!="" && ($b_val_chunk2[2][3] < 201 || $b_val_chunk2[2][3] > 262)){?>
                            <th style=" background-color:#DCDCDC;"><?php echo $b_val_chunk2[2][3]; ?></th>
                             <?php } else {?><th><?php echo $b_val_chunk2[2][3]; ?></th><?php }?>
                             
                             <?php if($b_val_chunk2[2][5]!="" && ($b_val_chunk2[2][5] < 201 || $b_val_chunk2[2][5] > 262)){?>
                            <th style=" background-color:#DCDCDC;"><?php echo $b_val_chunk2[2][5]; ?></th>
                             <?php } else {?><th><?php echo $b_val_chunk2[2][5]; ?></th><?php }?>                            
                        </tr>
                    </table>
            
            </th>
            <th rowspan="9" style="text-align: left; vertical-align: top; width:50%; border-top: #ffffff; border-bottom: #ffffff; height: 29px;" colspan="4"><?php echo $data->remark;?></th>
        </tr>   
    </table>
    
    <!--<br>-->
    <table border="1" align="center" style="width: 100%; border-top: #ffffff; border: #000000;">
        <tr style="background: #ffffff;">            
            <td style="text-align: left; vertical-align: middle; " align="center" colspan="7" rowspan="2">CHECKED BY : <?php echo $data->checked_by;?></td>
            <td style="width:50%; text-align: left; vertical-align: middle;" align="center" colspan="8" rowspan="2">APPROVED BY : <?php echo $data->approved_by;?></td>                              
        </tr>
        <tr style="background: #ffffff;"></tr>
    </table>
                                        
</div>
<?php } ?>

<script>
$('#d1').click(function(e) {
      let file = new Blob([$('#printDiv').html()], {type:"application/vnd.ms-excel"});
let url = URL.createObjectURL(file);
let a = $("<a/>", {
  href: url,
 download: "Item_0831_Hardness_Report_<?php $datef=$data->c_date; $datef=strtotime($datef); echo date('d.m.Y',$datef); ?>_<?php echo $data->heat_no; ?>.xls"}).appendTo("body").get(0).click();
 e.preventDefault();
});
</script>
