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

if($data)
{
foreach ($D2 as $row) {
        $col_l_c1 = explode(",", $row->L_C);
        $table_col_count[] = count($col_l_c1);
    }  
    
    
    ?>
<hr>
<div class="btn-group pull-right">
    
    <form class="form-horizontal"  method="post" name="myForm1" id="myForm1" enctype="multipart/form-data" action="<?php echo base_url();?>download_report/<?php echo $data->id;?>">
   
    <button class="btn btn-danger dropdown-toggle"><i class="fa fa-bars"></i> Export Data</button>
    <br/>
  </form>
<!--        <button class="btn btn-danger"><i class="fa fa-bars"></i> Export Data</button>-->
</div>

<!--<input type="button" value="Print" class="btn" id="print" onclick="printDiv('printDiv')"></input>-->
<br><br>
<div id="printDiv" style="width: 100%;">
    
    <table border="1" align="center" class="customers2" style="width: 100%;">
            <tr>
                <td rowspan="2" style=" text-align: center;" align="center" colspan="<?php print_r((array_sum($table_col_count) / 3)+1);?>"><img src="<?php echo base_url(); ?>pcl_s.png"></td>
                <td style=" text-align: center;" colspan="<?php print_r((array_sum($table_col_count) / 3)+1);?>"> <b>QUALITY SYSTEM RECORD</b></td>
                <td rowspan="2" style=" text-align: center;" colspan="<?php print_r((array_sum($table_col_count) / 3)+1);?>">Q.A.<br>REF.NO.<br><?php echo $data->qa_ref_no; ?></td>
            </tr>
            
            <tr>
<!--                <td colspan="<?php print_r((array_sum($table_col_count) / 3)+1);?>"></td>-->
                <td style=" text-align: center;" colspan="<?php print_r((array_sum($table_col_count) / 3)+1);?>"><b>TITLE <br/>HARDNESS & CHILL DEPTH REPORT</b></td>
<!--                <td colspan="<?php print_r((array_sum($table_col_count) / 3)+1);?>"></td>-->
            </tr>
            <tr>
                <td align="center" colspan="<?php print_r((array_sum($table_col_count) / 3)+1);?>"><b>ITEM </b></td>
                <td align="center" colspan="<?php print_r((array_sum($table_col_count) / 3)+1);?>"><b>PART NO </b></td>
                <td align="center" colspan="<?php print_r((array_sum($table_col_count) / 3)+1);?>"><b>DATE: <?php $datef=$data->c_date; $datef=strtotime($datef); echo date('d.m.Y',$datef); ?> </b></td>
            </tr>
            <tr>
                <td align="center" colspan="<?php print_r((array_sum($table_col_count) / 3)+1);?>"><b><?php echo $data->cust_name; ?></b></td>
                <td align="center" colspan="<?php print_r((array_sum($table_col_count) / 3)+1);?>"><b><?php echo $data->part_no; ?>  </b></td>
                <td align="center" colspan="<?php print_r((array_sum($table_col_count) / 3)+1);?>"><b>HEAT NO: <?php echo $data->heat_no; ?> </b> </td>
            </tr>
                        
        </table>
    <br>
    <table border="1" style="width: 100%;" align="center">
        <tr>
            <th <?php print_r(array_sum($table_col_count)+1);?>><div id="item_img" ><img src="<?php echo base_url();?>/Audio/<?php echo $data->item;?>_img.png" style="" width="800"></div></th>
        </tr>
    </table>
    <br>
    
    <!--Format for 866 and 867-->
    <?php if($data->item == "866"){ ?>
    <table border="1" align="center" class="customers2" style="width: 100%;">
            <tr>
                <th rowspan="3" style="width:15%">AT POINT</th>
                <th rowspan="2" style="width:15%">CUSTOMER SPEC.</th>
                <th rowspan="2" style="width:15%">WORKING SPEC.</th>
               
                <!-- start_col_count Counting total columns for setting the obervations values -->
                <?php
                $col_l_c1arr = '';
                foreach ($D2 as $row) {
                    $col_l_c1arr .= $row->L_C . ",";}?>
                <?php
                $col_l_c1arr = explode(",", rtrim($col_l_c1arr, ","));
                $totalcolspan=count($col_l_c1arr);
                
                    ?>
                <!--End_col_count-->     
                
                <th colspan="12">OBSERVATIONS</th>
            </tr>
                        
            <tr>
                
                <?php
                $colspan_val=0;
                foreach ($D2 as $row) {
                    $col_l_c = explode(",", $row->L_C);
                    $sum_col_span = count($col_l_c);
                    $l_val[]= $row->L;
                }
                
                    foreach ($D2 as $row) {
                    $col_l_c = explode(",", $row->L_C);
                    $count_b_plus[] = count($col_l_c);
                    }
                    
                    for($a=0;$a<count($count_b_plus);$a++)
                    {?>
                <th colspan="<?php echo @$count_b_plus[$a];?>">L-<?php echo @$l_val[$a];?></th>
                    <?php }
                    
                    if(array_sum($count_b_plus)< 12)
                    {
                        $colspan_in_l=(12-array_sum($count_b_plus))/3;
                        $colspan_in_2=intval((12-array_sum($count_b_plus))/3);
                        
                      for($a=0;$a<$colspan_in_2;$a++)  
                     {?>
                    <th colspan="3">L-</th>
                    <?php }
                    
                    if(is_float($colspan_in_l))
                    {?>
                    <th>L-</th>
                    <?php } 
                     } ?>
                  
            </tr>
            <tr>
<!--                <th></th>-->
                <th>MM - HRc</th>
                <th>MM - HRc</th>
               
                <?php
                $col_l_c1 = '';
                foreach ($D2 as $row) {
                    $col_l_c1 .= $row->L_C . ",";}?>
                <?php
                $col_l_c1 = explode(",", rtrim($col_l_c1, ","));
                $ccolloen=count($col_l_c1);
                $totalcval=12-$ccolloen;
                if($totalcval){
                    for ($i = 0; $i < count($col_l_c1); $i++) {
                    ?>
                    <th>C-<?php echo $col_l_c1[$i]; ?></th>
                    
                <?php }
                
                    for ($i1 = 0; $i1 < $totalcval; $i1++) {
                    ?>
                    <th>C-</th>
                    
                <?php }
                
                }else{
                for ($i = 0; $i < count($col_l_c1); $i++) {
                    ?>
                    <th>C-<?php echo $col_l_c1[$i]; ?></th>
                <?php }
                }
                ?>
            </tr>
            <?php
            $main = '';
            foreach ($D1 as $row) {
                $main[] = $row->data_value;
                $main_second[] = $row->data_value1;
            }
            for ($j = 0; $j < count($main); $j++) {
                $main1[] = explode(",", $main[$j]);
                $main_second1[] = explode(",", $main_second[$j]);}
                
            $g = 0;
            for ($k = 0; $k < count($D3); $k++) {
                ?>
                <tr>
                    <td align="center"><?php echo $D3[$k]->at_point; ?></td>    
                    <td align="center" ><?php echo utf8_decode($D3[$k]->cust_spec); ?></td> 
                    <?php if($data->item == "642" || $data->item == "670" || $data->item == "708" || $data->item == "814" || $data->item == "815" || $data->item == "866" || $data->item == "867" ){ ?>
                    <td align="center" ><?php echo utf8_decode($D3[$k]->working_spec); ?></td>
                    <?php } ?>
                    <?php
                    $mainlendata=count($main1);
                    $remlen=12-$mainlendata;
                    if($mainlendata<12){
                         for ($l = 0; $l < count($main1); $l++) {
                        ?>
                        <td align="center" ><?php print_r(utf8_decode($main_second1[$l][$g])); ?></td>
                    <?php } 
                    for ($l1 = 0; $l1 < $remlen; $l1++) {?>
                        
                    <td align="center" ></td>
                    
                    <?php }
                    }else{
                        for ($l = 0; $l < count($main1); $l++) {
                        ?>
                        <td align="center" ><?php print_r(utf8_decode($main_second1[$l][$g])); ?></td>
                    <?php } 
                    }?>
                    
                </tr>
                    <?php $g++;
                } ?>
    
            <!------------------------B---------------->
            <?php
            
                foreach ($D6 as $row) {
                    $b_at_point[] = $row->at_point;
                    $b_cust_spec[] = $row->cust_spec;
                    $b_working_spec[] = $row->working_spec;
                    $arr[$row->at_point]['printed'] = 'no';
                    @$arr[$row->at_point]['rowspan'] += 1;
                }
                
                foreach ($D4 as $row) {
                    $b_data_value[] = $row->data_value;
                }
                for ($bb = 0; $bb < count($count_b_plus); $bb++) {
//                    echo "<pre>";
                    $exp_b_data[] = explode(",", $b_data_value[$bb]);
                }
                                
                $b_data = '';
              
                for ($bbb = 0; $bbb < count($exp_b_data); $bbb++) {
                    $b_data[] = array_chunk($exp_b_data[$bbb], 4);
                }
                
                for ($b1 = 0; $b1 < count($b_data); $b1++) {
                    for ($b2 = 0; $b2 < count($b_data[$b1]); $b2++) {
                        if(in_array("", $b_data[$b1][$b2], true)){
                            $b_data1[] = implode("", $b_data[$b1][$b2]);
                        }else{
                            $b_data1[] = implode(" - ", $b_data[$b1][$b2]);
                        }
                    }
                }
                                               
                $b_data2 = array_chunk($b_data1, count($b_at_point));
                for ($b = 0; $b < count($b_cust_spec); $b++) {
                    ?>
                    <tr>
                         <?php if ($arr[$b_at_point[$b]]['printed'] == 'no') {?>
                        <td rowspan="<?php echo $arr[$b_at_point[$b]]['rowspan'];?>" ><?php echo $b_at_point[$b]; ?></td>
                        <?php $arr[$b_at_point[$b]]['printed'] = 'yes'; } ?>
                        
                        <td><?php echo $b_cust_spec[$b]; ?></td>
                        <td><?php echo $b_working_spec[$b]; ?></td>
                        
                        <?php
                                       
                        for ($bb = 0; $bb < count($count_b_plus); $bb++) {
                            //$one_val=$count_b_plus[$bb];
                        ?>
                            <td colspan="<?php echo @$count_b_plus[$bb]; ?>">
                                <?php echo @$b_data2[$bb][$b]; ?> 
                            </td>
                        <?php 
                        }
                           if(array_sum($count_b_plus)< 12)
                    {
                        $colspan_in_l=(12-array_sum($count_b_plus))/3;
                        $colspan_in_2=intval((12-array_sum($count_b_plus))/3);
                        
                      for($a=0;$a<$colspan_in_2;$a++)  
                     {?>
                    <th colspan="3"></th>
                    <?php }
                    
                    if(is_float($colspan_in_l))
                    {?>
                    <th></th>
                    <?php } 
                     } ?>
                        
                    </tr>  
                        <?php } 
                        
                        ?>         
            
            <!----------------/B------------------------------------>
       </table>
    
    <!--format 642-->
    <?php }else if($data->item=="642"){ ?>
    
    <table border="1" align="center" class="customers2" style="width: 100%;">
            <tr>
                <th rowspan="3" style="width:15%">AT POINT</th>                             
                <th rowspan="2" style="width:15%">CUSTOMER SPEC.</th>                           
                <th rowspan="2" style="width:15%">WORKING SPEC.</th>                
                
                <!-- start_col_count Counting total columns for setting the obervations values -->
                <?php
                $col_l_c1arr = '';
                foreach ($D2 as $row) {
                    $col_l_c1arr .= $row->L_C . ",";}?>
                <?php
                $col_l_c1arr = explode(",", rtrim($col_l_c1arr, ","));
                $totalcolspan=count($col_l_c1arr);
                
                    ?>
                <!--End_col_count-->     
                
                <th colspan="12">OBSERVATIONS</th>
            </tr>
                        
            <tr>
                
                <?php
                $colspan_val=0;
                foreach ($D2 as $row) {
                    $col_l_c = explode(",", $row->L_C);
                    $sum_col_span = count($col_l_c);
                    $l_val[]= $row->L;
                }
                
                    foreach ($D2 as $row) {
                    $col_l_c = explode(",", $row->L_C);
                    $count_b_plus[] = count($col_l_c);
                    }
                    
                    for($a=0;$a<count($count_b_plus);$a++)
                    {?>
                <th colspan="<?php echo @$count_b_plus[$a];?>">L-<?php echo @$l_val[$a];?></th>
                    <?php }
                    
                    if(array_sum($count_b_plus)< 12)
                    {
                        $colspan_in_l=(12-array_sum($count_b_plus))/4;
                        $colspan_in_2=intval((12-array_sum($count_b_plus))/4);
                        
                      for($a=0;$a<$colspan_in_2;$a++)   
                     {?>
                    <th colspan="4">L-</th>
                    <?php }
                    
                    if(is_float($colspan_in_l))
                    {?>
                    <th>L-</th>
                    <?php } 
                     } ?>
                  
            </tr>
            <tr>
<!--                <th></th>-->
                <th>MM - RC</th>
                <th>MM - RC</th>
                
                <?php
                $col_l_c1 = '';
                foreach ($D2 as $row) {
                    $col_l_c1 .= $row->L_C . ",";}?>
                <?php
                $col_l_c1 = explode(",", rtrim($col_l_c1, ","));
                $ccolloen=count($col_l_c1);
                $totalcval=12-$ccolloen;
                if($totalcval){
                    for ($i = 0; $i < count($col_l_c1); $i++) {
                    ?>
                    <th>C-<?php echo $col_l_c1[$i]; ?></th>
                    
                <?php }
                
                    for ($i1 = 0; $i1 < $totalcval; $i1++) {
                    ?>
                    <th>C-</th>
                    
                <?php }
                
                }else{
                for ($i = 0; $i < count($col_l_c1); $i++) {
                    ?>
                    <th>C-<?php echo $col_l_c1[$i]; ?></th>
                <?php }
                }
                ?>
            </tr>
            <?php
            $main = '';
            foreach ($D1 as $row) {
                $main[] = $row->data_value;
                $main_second[] = $row->data_value1;
            }
            for ($j = 0; $j < count($main); $j++) {
                $main1[] = explode(",", $main[$j]);
                $main_second1[] = explode(",", $main_second[$j]);}
                
            $g = 0;
            for ($k = 0; $k < count($D3); $k++) {
                ?>
                <tr>
                    <td align="center"><?php echo $D3[$k]->at_point; ?></td>    
                    <td align="center" ><?php echo utf8_decode($D3[$k]->cust_spec); ?></td>                     
                    <td align="center" ><?php echo utf8_decode($D3[$k]->working_spec); ?></td>                   
                    <?php
                    $mainlendata=count($main1);
                    $remlen=12-$mainlendata;
                    if($mainlendata<12){
                         for ($l = 0; $l < count($main1); $l++) {
                        ?>
                        <td align="center" ><?php print_r(utf8_decode($main_second1[$l][$g])); ?></td>
                    <?php } 
                    for ($l1 = 0; $l1 < $remlen; $l1++) {?>
                        
                    <td align="center" ></td>
                    
                    <?php }
                    }else{
                        for ($l = 0; $l < count($main1); $l++) {
                        ?>
                        <td align="center" ><?php print_r(utf8_decode($main_second1[$l][$g])); ?></td>
                    <?php } 
                    }?>
                    
                </tr>
                    <?php $g++;
                } ?>
    
            <!------------------------B---------------->
            <?php
            
                foreach ($D6 as $row) {
                    $b_at_point[] = $row->at_point;
                    $b_cust_spec[] = $row->cust_spec;
                    $b_working_spec[] = $row->working_spec;
                    $arr[$row->at_point]['printed'] = 'no';
                    @$arr[$row->at_point]['rowspan'] += 1;
                }
                
                foreach ($D4 as $row) {
                    $b_data_value[] = $row->data_value;
                }
                for ($bb = 0; $bb < count($count_b_plus); $bb++) {
//                    echo "<pre>";
                    $exp_b_data[] = explode(",", $b_data_value[$bb]);
                }
                                
                $b_data = '';
              
                for ($bbb = 0; $bbb < count($exp_b_data); $bbb++) {
                    $b_data[] = array_chunk($exp_b_data[$bbb], 2);
                }
               
                for ($b1 = 0; $b1 < count($b_data); $b1++) {
                    for ($b2 = 0; $b2 < count($b_data[$b1]); $b2++) {
                        if(in_array("", $b_data[$b1][$b2], true)){
                            $b_data1[] = implode("", $b_data[$b1][$b2]);
                        }else{
                            $b_data1[] = implode(" - ", $b_data[$b1][$b2]);
                        }
                    }
                }
                                                
                $b_data2 = array_chunk($b_data1, count($b_at_point));
                for ($b = 0; $b < count($b_cust_spec); $b++) {
                    ?>
                    <tr>
                         <?php if ($arr[$b_at_point[$b]]['printed'] == 'no') {?>
                        <td rowspan="<?php echo $arr[$b_at_point[$b]]['rowspan'];?>" ><?php echo $b_at_point[$b]; ?><br><img src="<?php echo base_url();?>/Audio/<?php echo $data->item;?>_brg.png" width="100" ></td>
                <?php $arr[$b_at_point[$b]]['printed'] = 'yes'; } ?>
                        
                        <td><?php echo $b_cust_spec[$b]; ?></td>
                        <td><?php echo $b_working_spec[$b]; ?></td>
                        
                    <?php
                    
                        for ($bb = 0; $bb < count($count_b_plus); $bb++) {
                            //$one_val=$count_b_plus[$bb];
                        ?>
                            <td colspan="<?php echo @$count_b_plus[$bb]; ?>">
                            <?php echo @$b_data2[$bb][$b]; ?> 
                            </td>
                        <?php 
                        }
                           if(array_sum($count_b_plus)< 12)
                    {
                        $colspan_in_l=(12-array_sum($count_b_plus))/4;
                        $colspan_in_2=intval((12-array_sum($count_b_plus))/4);
                        
                      for($a=0;$a<$colspan_in_2;$a++)  
                     {?>
                    <th colspan="4"></th>
                    <?php }
                    
                    if(is_float($colspan_in_l))
                    {?>
                    <th></th>
                    <?php } 
                     } ?>
                        
                    </tr>  
                        <?php } 
                        
                        ?>         
            
            <!----------------/B------------------------------------>
       </table>
    
    <!--format 626,627,628,629,741,742-->
    <?php }else{?>
    
    <table border="1" align="center" class="customers2" style="width: 100%;">
            <tr>
                <th rowspan="3" style="width:15%">AT POINT</th>
                <!--Proposed spec-->
                <?php if($data->item == "862" || $data->item == "863"){ ?>
                <th style="width:15%">PROPOSED SPEC.</th>
                <?php }else{ ?>
                <th rowspan="2" style="width:15%">CUSTOMER SPEC.</th>
                <?php } ?>
                <!--Customer & Working Spec Both-->
                <?php if($data->item == "642" || $data->item == "670" || $data->item == "708" || $data->item == "814" || $data->item == "815" || $data->item == "866" || $data->item == "867" ){ ?>
                <th rowspan="2" style="width:15%">WORKING SPEC.</th>
                <?php } ?>
                
                <!-- start_col_count Counting total columns for setting the obervations values -->
                <?php
                $col_l_c1arr = '';
                foreach ($D2 as $row) {
                    $col_l_c1arr .= $row->L_C . ",";}?>
                <?php
                $col_l_c1arr = explode(",", rtrim($col_l_c1arr, ","));
                $totalcolspan=count($col_l_c1arr);
                    ?>
                <!--End_col_count-->     
                <?php if(count($col_l_c1)>8){ ?>
                <th colspan="<?php echo $col_l_c1; ?>">OBSERVATIONS</th>
                <?php }else{ ?>
                <th colspan="8">OBSERVATIONS</th>
                <?php }?>
            </tr>
                        
            <tr>                
                <?php
                $colspan_val=0;
                foreach ($D2 as $row) {
                    $col_l_c = explode(",", $row->L_C);
                    $sum_col_span = count($col_l_c);
                    $l_val[]= $row->L;
                }
                
                    foreach ($D2 as $row) {
                    $col_l_c = explode(",", $row->L_C);
                    $count_b_plus[] = count($col_l_c);
                    }
                    $t = 0;
                    for($a=0;$a<count($count_b_plus);$a++)
                    {
//                        $old = $t;
                        $t = $t + $count_b_plus[$a];
                        $new = $t - 8;
                        if($t >8){
                            echo "<br/>"; ?>
                            <th colspan="<?php echo @$new;?>">L-<?php echo @$l_val[$a];?></th>
                        <?php     
                        }
                        ?>
                <th colspan="<?php echo @$count_b_plus[$a];?>">L-<?php echo @$l_val[$a];?></th>
                    <?php }
                    
                    if(array_sum($count_b_plus)< 8)
                    {
                        $colspan_in_l=(8-array_sum($count_b_plus))/2;
                        $colspan_in_2=intval((8-array_sum($count_b_plus))/2);
                        
                      for($a=0;$a<$colspan_in_2;$a++)  
                     {?>
                    <th colspan="2">L-</th>
                    <?php }
                    
                    if(is_float($colspan_in_l))
                    {?>
                    <th>L-</th>
                    <?php } 
                     } ?>
                  
            </tr>
            <tr>
<!--                <th></th>-->
                <th>MM - Rc</th>
                
                <?php if($data->item == "642" || $data->item == "670" || $data->item == "708" || $data->item == "814" || $data->item == "815" || $data->item == "866" || $data->item == "867" ){ ?>
                <th>MM - HRc</th>
                <?php } ?>
                <?php
                $col_l_c1 = '';
                foreach ($D2 as $row) {
                    $col_l_c1 .= $row->L_C . ",";}?>
                <?php
                $col_l_c1 = explode(",", rtrim($col_l_c1, ","));
                $ccolloen=count($col_l_c1);
                $totalcval=8-$ccolloen;
                if($totalcval){
                    for ($i = 0; $i < count($col_l_c1); $i++) {
                    ?>
                    <th>C-<?php echo $col_l_c1[$i]; ?></th>
                    
                <?php }
                
                    for ($i1 = 0; $i1 < $totalcval; $i1++) {
                    ?>
                    <th>C-</th>
                    
                <?php }
                
                }else{
                for ($i = 0; $i < count($col_l_c1); $i++) {
                    ?>
                    <th>C-<?php echo $col_l_c1[$i]; ?></th>
                <?php }
                }
                ?>
            </tr>
            <?php
            $main = '';
            foreach ($D1 as $row) {
                $main[] = $row->data_value;
                $main_second[] = $row->data_value1;
            }
            for ($j = 0; $j < count($main); $j++) {
                $main1[] = explode(",", $main[$j]);
                $main_second1[] = explode(",", $main_second[$j]);}
                
            $g = 0;
            for ($k = 0; $k < count($D3); $k++) {
                ?>
                <tr>
                    <td align="center"><?php echo $D3[$k]->at_point; ?></td>    
                    <td align="center" ><?php echo utf8_decode($D3[$k]->cust_spec); ?></td> 
                    <?php if($data->item == "642" || $data->item == "670" || $data->item == "708" || $data->item == "814" || $data->item == "815" || $data->item == "866" || $data->item == "867" ){ ?>
                    <td align="center" ><?php echo utf8_decode($D3[$k]->working_spec); ?></td>
                    <?php } ?>
                    <?php
                    $mainlendata=count($main1);
                    $remlen=8-$mainlendata;
                    if($mainlendata<8){
                         for ($l = 0; $l < count($main1); $l++) {
                        ?>
                        <td align="center" ><?php print_r(utf8_decode($main_second1[$l][$g])); ?></td>
                    <?php } 
                    for ($l1 = 0; $l1 < $remlen; $l1++) {?>
                        
                    <td align="center" ></td>
                    
                    <?php }
                    }else{
                        for ($l = 0; $l < count($main1); $l++) {
                        ?>
                        <td align="center" ><?php print_r(utf8_decode($main_second1[$l][$g])); ?></td>
                    <?php } 
                    }?>
                    
                </tr>
                    <?php $g++;
                } ?>
    
            <!------------------------B---------------->
            <?php
            
                foreach ($D6 as $row) {
                    $b_at_point[] = $row->at_point;
                    $b_cust_spec[] = $row->cust_spec;
                    $b_working_spec[] = $row->working_spec;
                    $arr[$row->at_point]['printed'] = 'no';
                    @$arr[$row->at_point]['rowspan'] += 1;
                }
                
                foreach ($D4 as $row) {
                    $b_data_value[] = $row->data_value;
                }
                for ($bb = 0; $bb < count($count_b_plus); $bb++) {
//                    echo "<pre>";
                    $exp_b_data[] = explode(",", $b_data_value[$bb]);
                }
                                
                $b_data = '';
              
                for ($bbb = 0; $bbb < count($exp_b_data); $bbb++) {
                    
                    if($data->item=="708" || $data->item=="816" || $data->item=="862" || $data->item=="863" || $data->item=="866" || $data->item=="867"){
                        $b_data[] = array_chunk($exp_b_data[$bbb], 4);
                    } else if($data->item==829 || $data->item==830 ){
                        $b_data[] = array_chunk($exp_b_data[$bbb], 3);
                    }else if($data->item=="664" || $data->item=="670" || $data->item=="805" || $data->item=="839" || $data->item=="861" || $data->item=="860" || $data->item=="815"){
                        $b_data[]=format1($exp_b_data[$bbb],$data->item);
                    }else {
                        $b_data[] = array_chunk($exp_b_data[$bbb], 2);
                    }
                }
               
                for ($b1 = 0; $b1 < count($b_data); $b1++) {
                    for ($b2 = 0; $b2 < count($b_data[$b1]); $b2++) {
                        if(in_array("", $b_data[$b1][$b2], true)){
                            $b_data1[] = implode("", $b_data[$b1][$b2]);
                        }else{
                            $b_data1[] = implode(" - ", $b_data[$b1][$b2]);
                        }
                    }
                }
                                                
                $b_data2 = array_chunk($b_data1, count($b_at_point));
                for ($b = 0; $b < count($b_cust_spec); $b++) {
                    ?>
                    <tr>
                         <?php if ($arr[$b_at_point[$b]]['printed'] == 'no') {?>
                        <td rowspan="<?php echo $arr[$b_at_point[$b]]['rowspan'];?>" ><?php echo $b_at_point[$b]; ?><br><img src="<?php echo base_url();?>/Audio/<?php echo $data->item;?>_brg.png" width="100" ></td>
                <?php $arr[$b_at_point[$b]]['printed'] = 'yes'; } ?>
                        
                        <td><?php echo $b_cust_spec[$b]; ?></td>
                        <!--Customer & Working Spec Both--> 
                        <?php if($data->item == "642" || $data->item == "670" || $data->item == "708" || $data->item == "814" || $data->item == "815" || $data->item == "866" || $data->item == "867" ){ ?>
                        <td><?php echo $b_working_spec[$b]; ?></td>
                        <?php } ?>
                    <?php
                    

                    
                        for ($bb = 0; $bb < count($count_b_plus); $bb++) {
                            //$one_val=$count_b_plus[$bb];
                        ?>
                            <td colspan="<?php echo @$count_b_plus[$bb]; ?>">
                            <?php echo @$b_data2[$bb][$b]; ?> 
                            </td>
                        <?php 
                        }
                           if(array_sum($count_b_plus)< 8)
                    {
                        $colspan_in_l=(8-array_sum($count_b_plus))/2;
                        $colspan_in_2=intval((8-array_sum($count_b_plus))/2);
                        
                      for($a=0;$a<$colspan_in_2;$a++)  
                     {?>
                    <th colspan="2"></th>
                    <?php }
                    
                    if(is_float($colspan_in_l))
                    {?>
                    <th></th>
                    <?php } 
                     } ?>
                        
                    </tr>  
                        <?php } 
                        
                        ?>         
            
            <!----------------/B------------------------------------>
       </table>
    
    <?php } ?>
    
    
    <br>
    
     <table border="1" style="width: 100%;" align="center">
        <tr>
            <th  colspan="<?php echo array_sum($table_col_count);?>">
            <?php if($data->item == "866" || $data->item == "642"){ ?>
                <br><br><div id="item_img" ><img src="<?php echo base_url();?>/Audio/<?php echo $data->item;?>_cam.png" width="300" ></div></th>
            <?php }else{ ?>
                <br><br><div id="item_img" ><img src="<?php echo base_url();?>/Audio/<?php echo $data->item;?>_cam1.png" width="150" ></div></th>
            <?php } ?>
            <th style="width:50%;" colspan="<?php echo array_sum($table_col_count);?>"><?php echo $data->remark;?></th>
        </tr>   
    </table>
    
    <br>
    <table border="1" align="center" style="width: 100%;">
        <tr>
            <td style="text-align: left;" align="center" colspan="<?php echo array_sum($table_col_count);?>" >CHECKED BY : <?php echo $data->checked_by;?></td>
            <td style="width:50%; text-align: left;" align="center" colspan="<?php echo array_sum($table_col_count);?>" >APPROVED BY : <?php echo $data->approved_by;?></td>
                                
        </tr>
    </table>
                                        
</div>
<!--<input type="text" class=" form-control  item1" value="<?php echo $data->id;?>" style="display: none;">-->

<?php 
}?>


<!-- Brinell section formats -->
<?php
function format1($exp_b_data,$camitem) {
    if($camitem=="861"){
        $arr1[]=array_chunk($exp_b_data, 22);
    }else if($camitem=="815"){
        $arr1[]=array_chunk($exp_b_data, 6);
    }else if($camitem=="860" || $camitem=="664"){
        $arr1[]=array_chunk($exp_b_data, 18);
    }else if($camitem=="670"){
        $arr1[]=array_chunk($exp_b_data, 6);
    }else {
     $arr1[]=array_chunk($exp_b_data, 20); 
    }

    $cnt=0;
    foreach($arr1 as $a)
    {   $cnt=0;
        foreach ($a as $row){
            if($cnt==0){
                $arr_first=array_chunk($row, 2);
            } else {
                $arr_second=array_chunk($row, 4);
            }
            $cnt++;
        }        
    }
    $arr_final= array_merge($arr_first, $arr_second);
    return $arr_final;
}
?>

 <script type="text/javascript" src="<?php echo base_url();?>js/plugins/jquery/jquery.min.js"></script>                
<script>
function printDiv(divId) {
var printContents = document.getElementById(divId).innerHTML;
var originalContents = document.body.innerHTML;
document.body.innerHTML = "<html><head><title></title></head><body>" + printContents + "</body></html>";
window.print();
document.body.innerHTML = originalContents;
}
//$(document).on('click', '#btnExport', function (e) {
$(".print").click(function(e) {
  let file = new Blob([$('#printDiv').html()], {type:"application/vnd.ms-excel"});
let url = URL.createObjectURL(file);
let a = $("<a />", {
  href: url,
 download: "HARDNESS & CHILLDEPTH REPORT.xls"}).appendTo("body").get(0).click();
 e.preventDefault();

});

</script>

