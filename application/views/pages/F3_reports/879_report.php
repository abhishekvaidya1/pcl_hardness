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
$c_action = array('475', '475');
$b_action = array('229', '229', '229', '229');
$b_action1 = array('285', '285', '285', '285');
$D3=array();
$b_cust_spec=array(); 
$b_working_spec=array();
if($data)
{
    $b_cust_spec = ["FRONT END<br/>229 - 285","BRG 1 <br/>229 - 285","BRG 2 <br/>229 - 285","BRG 3 <br/>229 - 285"];
    $b_working_spec=["FRONT END<br/>229 - 285","BRG 1 <br/>229 - 285","BRG 2 <br/>229 - 285","BRG 3 <br/>229 - 285"];

    //L Parametrs
    $D3[]=["at_point"=>"O","cust_spec"=>"2.5 MM - 475 HV 30 MIN","working_spec"=>"2.5 MM - 475 HV 30 MIN"];
    $D3[]=["at_point"=>"LIFT PUMP <br/>ECCENTRIC","cust_spec"=>"2.5 MM - 475 HV 30 MIN","working_spec"=>"2.5 MM - 475 HV 30 MIN"];
        
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
    
    $final_B_Val = array_chunk($B_Val, 9); 
    $b_data2=$final_B_Val;    
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
                <td style="border-bottom: #ffffff;" colspan="2" rowspan="3" width="15%"><img src="<?php echo base_url(); ?>pcl_s.png" width="75"></td>
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
                
                <td align="center" style="text-align: center; vertical-align: middle; height:25px;" colspan="3"><b>ITEM </b></td>
                <td align="center" style="text-align: center; vertical-align: middle;" colspan="6"><b>PART NO </b></td>
                <td align="center" style=" text-align: left; vertical-align: middle; " colspan="6"><b>DATE: <?php $datef=$data->c_date; $datef=strtotime($datef); echo date('d.m.Y',$datef); ?> </b></td>
            </tr>
            <tr style="background: #ffffff;">
                <td align="center" style="text-align: center; vertical-align: middle; height:25px;" colspan="3"><b><?php echo $data->cust_name; ?></b></td>
                <td align="center" style="text-align: center; vertical-align: middle;" colspan="6"><b><?php echo $data->part_no; ?>  </b></td>
                <td align="center" style=" text-align: left; vertical-align: middle;" colspan="6"><b>HEAT NO: <?php echo $data->heat_no; ?></b></td>
            </tr>                        
<!--        </table>       
 <br>
    <table border="1" align="center" style="border-top: #ffffff; width: 100%; border: #000000;">-->
        <tr style="border-bottom: #ffffff; background: #ffffff;"></tr>
        <tr style="background: #ffffff;">            
            <th style="border-top: #ffffff; text-align: center; vertical-align: middle;" colspan="15"><img src="<?php echo base_url(); ?>/Audio/<?php echo $data->item; ?>_img.png" style="align:center; vertical-align: middle" width="80%" height="200"></th>            
        </tr>
<!--    </table>
 <br>
    
    <table border="1" align="center" class="customers2" style="border-top: #ffffff; width: 100%; border: #000000;">-->
        <tr style="background: #ffffff;">               
            <th colspan="2" rowspan="3" style="width:15%; text-align: center; vertical-align: middle; border-top: #ffffff;">AT POINT</th>                
            <th rowspan="2 " style="width:30%;text-align: center; vertical-align: middle;  border-top: #ffffff;">CUSTOMER SPEC.</th>              
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
                <th style="height:23px;">MM - HV</th>
                <?php for($j=0;$j< count($C_Val);$j++){
                    if($C_Val[$j]==""){?>
                        <th >&nbsp;&nbsp;&nbsp;C-&nbsp;&nbsp;&nbsp;&nbsp;</th>
                   <?php }else{
                ?>                
                <th >&nbsp;C-<?php echo $C_Val[$j]; if($C_Val[$j]<10){?>&nbsp;&nbsp;&nbsp;<?php } ?>&nbsp;&nbsp;</th>
                <?php } }?>
        </tr>
            
            <?php
            for ($k = 0; $k < count($D3); $k++) { ?>
            <tr style="background: #ffffff;">                
                    <td align="center" colspan="2" style="text-align: center; vertical-align: middle; height:49px;"><?php echo $D3[$k]['at_point']?></td>                   
                    <td align="center" style="text-align: center; vertical-align: middle;"><?php echo $D3[$k]['cust_spec']; ?></td>                                         
                    <?php for($c=0;$c<count($final_mm_val[$k]);$c++){ 
                        $flag=0;
                        if($k==5 && ($final_mm_val[$k][$c]!="" && ($final_mm_val[$k][$c]<$c_action[$k] || $final_mm_val[$k][$c]>107))){
                            $flag=1;
                        }else if($final_mm_val[$k][$c]!="" && ($final_mm_val[$k][$c]<$c_action[$k])){
                            $flag=1;
                        }else {
                            $flag=0;
                        }                        
                    ?>
                        <td style="text-align: center;  vertical-align: middle; <?php if($flag==1){?> background-color:#DCDCDC; <?php }?>"><?php echo $final_mm_val[$k][$c]; ?></td>
                    <?php } ?>
                </tr>                   
            <?php } ?>
    
            <!------------------------B---------------->
            
            <tr style="background: #ffffff;">                
                <td style="text-align: center; vertical-align: middle;" colspan="2"></td>                
                <td style="text-align: center; vertical-align: middle;"></td>
                <td style="text-align: center; vertical-align: middle;"><label>COPE</label></td>
                <td style="text-align: center; vertical-align: middle;"><label>DRAG</label></td>
                <td style="text-align: center; vertical-align: middle;" colspan="2"><label>CENTRE</label></td>
                <td style="text-align: center; vertical-align: middle;"><label>COPE</label></td>
                <td style="text-align: center; vertical-align: middle;"><label>DRAG</label></td>
                <td style="text-align: center; vertical-align: middle;" colspan="2"><label>CENTRE</label></td>
                <td style="text-align: center; vertical-align: middle;"><label>COPE</label></td>
                <td style="text-align: center; vertical-align: middle;"><label>DRAG</label></td>
                <td style="text-align: center; vertical-align: middle;" colspan="2"><label>CENTRE</label></td>
            </tr>
            
            <?php 
            $cnt=0;
            for ($b = 0; $b < count($b_cust_spec); $b++) {?>
            <tr style="background: #ffffff;">
                <?php if($cnt==0){ ?>
                <td style="text-align: center; vertical-align: middle;" colspan="2" rowspan="4" >BRINELL HARDNESS<br/>BHN (10 MM<br/>BALL, 3000 KG<br/>LOAD) OR (5MM<br/>BALL, 750KG LOAD)<br/><img src="<?php echo base_url();?>/Audio/<?php echo $data->item;?>_brg1.png" width="110" ></td>
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
                    <td style="text-align: center; vertical-align: middle; <?php if($bitflag==1){?> background-color:#DCDCDC; <?php }?>"  <?php if($bb%3==2){ ?> colspan="2" <?php } ?>><?php echo $b_data2[$b][$bb]; ?></td>
                    <?php } ?>                                    
                </tr>
            <?php $cnt++; } ?>  
            
            
            <!----------------/B------------------------------------>
<!--       </table>
    
    <br>
    
     <table border="1" style="width: 100%; border-top: #ffffff; border: #000000;" align="center">-->
          <tr style="background: #ffffff;">                        
            <th rowspan="1" colspan="7" style="border-top: #ffffff; border-bottom: #ffffff;"><img src="<?php echo base_url();?>/Audio/<?php echo $data->item;?>_cam.png" ></th>          
            <th rowspan="1" style="width:50%; border-top: #ffffff; vertical-align: top; text-align: left;" colspan="8"><?php echo $data->remark;?></th>
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
                
                <td align="center" style="text-align: center; vertical-align: middle; height:34px;" colspan="3"><b>ITEM </b></td>
                <td align="center" style="text-align: center; vertical-align: middle;" colspan="6"><b>PART NO </b></td>
                <td align="center" style=" text-align: left; vertical-align: middle; " colspan="6"><b>DATE: <?php $datef=$data->c_date; $datef=strtotime($datef); echo date('d.m.Y',$datef); ?> </b></td>
            </tr>
            <tr style="background: #ffffff;">
                <td align="center" style="text-align: center; vertical-align: middle; height:34px;" colspan="3"><b><?php echo $data->cust_name; ?></b></td>
                <td align="center" style="text-align: center; vertical-align: middle;" colspan="6"><b><?php echo $data->part_no; ?>  </b></td>
                <td align="center" style=" text-align: left; vertical-align: middle;" colspan="6"><b>HEAT NO: <?php echo $data->heat_no; ?></b></td>
            </tr>                   
        </table>       
<!-- <br>-->
    <table border="1" align="center" style="border-top: #ffffff; width: 100%; border: #000000;">
        <tr style="border-bottom: #ffffff; background: #ffffff; height: 15px;"></tr>
        <tr style="background: #ffffff;">
            <th style="border-top:#ffffff; border-right: #ffffff;" colspan="1"></th>
            <th style="border-top: #ffffff; border-left: #ffffff; border-right: #ffffff; text-align: center; vertical-align: middle;  height: 225px;" colspan="13"><img src="<?php echo base_url(); ?>/Audio/<?php echo $data->item; ?>_img.png" style="align:center; vertical-align: middle" width="740" height="210"></th>
            <th style="border-top: #ffffff; border-left: #ffffff;"></th>
        </tr>
    </table>
<!-- <br>-->
    
    <table border="1" align="center" class="customers2" style="border-top: #ffffff; width: 100%; border: #000000;">
        <tr style="background: #ffffff; height: 34px;">               
            <th colspan="2" rowspan="3" style="width:15%; text-align: center; vertical-align: middle; border-top: #ffffff;">AT POINT</th>                
            <th rowspan="2 " style="width:15%;text-align: center; vertical-align: middle;  border-top: #ffffff;">CUSTOMER SPEC.</th>              
            <th  style="border-top: #ffffff;" colspan="12">OBSERVATIONS</th>
        </tr>
                       
        <tr style="background: #ffffff;">          
            <?php 
                for($i=0;$i<count($L_Val);$i++){?>
                    <th style="height:34px;" colspan="2">L-<?php echo $L_Val[$i]; ?></th>
                    <th style="height:34px;" colspan="2">IMP-<?php echo $imp[$i]; ?></th>
            <?php } ?>                                
        </tr>
            
        <tr style="background: #ffffff;">
                <th style="height:34px;">MM - HV</th>
                <?php for($j=0;$j< count($C_Val);$j++){
                    if($C_Val[$j]==""){?>
                        <th >&nbsp;&nbsp;&nbsp;C-&nbsp;&nbsp;&nbsp;&nbsp;</th>
                   <?php }else{
                ?>                
                <th >&nbsp;&nbsp;C-<?php echo $C_Val[$j]; if($C_Val[$j]<10){?>&nbsp;&nbsp;<?php } ?>&nbsp;</th>
                <?php } }?>
            </tr>
            
            <?php
            for ($k = 0; $k < count($D3); $k++) {?>
            <tr style="background: #ffffff;">                
                <td align="center" colspan="2" style="text-align: center; vertical-align: middle; height:49px;"><br/><?php echo $D3[$k]['at_point']?><br/><br/></td>                    
                    <td align="center" style="text-align: center; vertical-align: middle;"><?php echo $D3[$k]['cust_spec']; ?></td>                                         
                    <?php for($c=0;$c<count($final_mm_val[$k]);$c++){ 
                        $flag=0;
                        if($k==5 && ($final_mm_val[$k][$c]!="" && ($final_mm_val[$k][$c]<$c_action[$k] || $final_mm_val[$k][$c]>107))){
                            $flag=1;
                        }else if($final_mm_val[$k][$c]!="" && ($final_mm_val[$k][$c]<$c_action[$k])){
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
            
            <tr style="background: #ffffff; height: 45px;">                
                <td style="text-align: center; vertical-align: middle;" colspan="2"></td>
                <td style="text-align: center; vertical-align: middle;"></td>
                <td style="text-align: center; vertical-align: middle;"><b>COPE</b></td>
                <td style="text-align: center; vertical-align: middle;"><b>DRAG</b></td>
                <td style="text-align: center; vertical-align: middle;" colspan="2"><b>CENTRE</b></td>
                <td style="text-align: center; vertical-align: middle;"><b>COPE</b></td>
                <td style="text-align: center; vertical-align: middle;"><b>DRAG</b></td>
                <td style="text-align: center; vertical-align: middle;" colspan="2"><b>CENTRE</b></td>
                <td style="text-align: center; vertical-align: middle;"><b>COPE</b></td>
                <td style="text-align: center; vertical-align: middle;"><b>DRAG</b></td>
                <td style="text-align: center; vertical-align: middle;" colspan="2"><b>CENTRE</b></td>
            </tr>
                  
            
            
            <?php 
            $cnt=0;
            for ($b = 0; $b < count($b_cust_spec); $b++) {?>
            <tr style="background: #ffffff;">
                <?php if($cnt==0){ ?>
                <td style="text-align: center; vertical-align: middle;" colspan="2" rowspan="4"><br/>BRINELL HARDNESS<br/>BHN<br/>(10MM BALL,3000 KG LOAD)<br/>OR<br/>(5MM BALL,750KG LOAD)<img src="<?php echo base_url();?>/Audio/<?php echo $data->item;?>_brg.png" width="160"></td>
                    <?php } ?>
                    <td style="text-align: center; vertical-align: middle;"><br/><?php echo $b_cust_spec[$b]; ?><br/><br/></td>
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
                    <td <?php if($bb%3==2){ ?> colspan="2" <?php } ?> style="text-align: center; vertical-align: middle; <?php if($bitflag==1){?> background-color:#DCDCDC; <?php }?>"><?php echo $b_data2[$b][$bb]; ?></td>
                    <?php } ?>                                    
                </tr>
            <?php $cnt++; } ?>              
            
            <!----------------/B------------------------------------>
            
       </table>
    
    <!--<br>-->    
    <table border="1" style="width: 100%; border-top: #ffffff; border: #000000;" align="center">
         <tr style="background: #ffffff; height: 29px;">
             <th colspan="5" style="border-top:#ffffff; border-bottom:#ffffff; height: 29px;"></th>
             <th colspan="10" style="border-top:#ffffff; border-bottom:#ffffff; height: 29px;"></th>
         </tr>
         <tr style="background: #ffffff;">            
            <th colspan="1" rowspan="7" style="border-top: #ffffff; border-right: #ffffff; border-bottom: #ffffff; height: 29px;"></th>
            <th rowspan="9" colspan="4" style="border-top: #ffffff; border-left: #ffffff; border-bottom: #ffffff; height: 29px;">           
                <div id="item_img" ><img src="<?php echo base_url();?>/Audio/<?php echo $data->item;?>_cam1.png" width="250" height="270" ></div><br/></th>          
            <th rowspan="9" style="text-align: left; vertical-align: top; width:50%; border-top: #ffffff; height: 29px;" colspan="10"><?php echo $data->remark;?></th>
        </tr>
    </table>
    
    <!--<br>-->
    <table border="1" align="center" style="width: 100%; border-top: #ffffff; border: #000000;">
        <tr style="background: #ffffff; height: 20px;">            
            <td style="text-align: left; vertical-align: middle; height: 20px;" align="center" colspan="5" rowspan="2">CHECKED BY : <?php echo $data->checked_by;?></td>
            <td style="width:50%; text-align: left; vertical-align: middle; height: 20px;" align="center" colspan="10" rowspan="2">APPROVED BY : <?php echo $data->approved_by;?></td>                              
        </tr>
        <tr style="background: #ffffff; height: 20px;"></tr>
    </table>                    
</div>

<?php 
}
?>

<script>
$('#d1').click(function(e) {
      let file = new Blob([$('#printDiv').html()], {type:"application/vnd.ms-excel"});
let url = URL.createObjectURL(file);
let a = $("<a/>", {
  href: url,
 download: "Item_0879_Hardness_Report_<?php $datef=$data->c_date; $datef=strtotime($datef); echo date('d.m.Y',$datef); ?>_<?php echo $data->heat_no; ?>.xls"}).appendTo("body").get(0).click();
 e.preventDefault();
});
</script>
