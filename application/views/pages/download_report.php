<html>
    <head>
        <title>Report PCL</title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">

    </head>
    <body>
        <?php
        $ttl_col_tbl=0;
        $ttl_l_sum_col=0;
        if ($data) {            
            foreach ($D2 as $row) {
                $col_l_c1 = explode(",", $row->L_C);
                $table_col_count[] = count($col_l_c1);                
                if($data->item=="626" || $data->item=="627" || $data->item=="628" || $data->item=="629" || $data->item=="741"){
                    if(count($col_l_c1)<8){
                       $xvalue=8-count($col_l_c1);
                       $no_of_columns=count($col_l_c1)+$xvalue;
                    }
                    else{
                        $no_of_columns=count($col_l_c1);
                    }
                }else{
                    $col_l_c1 = explode(",", $row->L_C);
                    $table_col_count[] = count($col_l_c1);       
                    $no_of_columns=count($col_l_c1);                    
                }                
            }
            ?>    

            <div id="printDiv" style="width: 200%;">

                <table border="1" align="center" class="customers2" style="width: 200%;" >
                    <tr>
                        <td  rowspan="2" colspan="1" style=" vertical-align:  middle;" align="center"><img src="<?php echo base_url(); ?>pcl_s.png" style=" display: block;margin-left: auto;margin-right: auto;" width="90"></td>
                        <td style=" vertical-align:  middle;" align="center" colspan="<?php echo $no_of_columns - 2; ?>"> <b>QUALITY SYSTEM RECORD</b></td>
                        <td rowspan="2" style=" vertical-align:  middle;" align="center" colspan="3">Q.A.<br>REF.NO.<br>PCR/IR/118/101</td>
                    </tr>
                    
                    <tr>
                        <td style=" vertical-align:  middle;" align="center" colspan="<?php echo $no_of_columns -1; ?>"> <b>TITLE<br>HARDNESS & CHILL DEPTH REPORT</b></td>
                    </tr>

                    <tr>
                        <td style=" vertical-align:  middle;" align="center" colspan="2"><b>ITEM </b></td>
                        <td style=" vertical-align:  middle;" align="center" colspan="<?php echo $no_of_columns -4 ; ?>"><b>PART NO</b></td>
                        <td style=" vertical-align:  middle;" align="left" colspan="4"><b>DATE: <?php $datef = $data->c_date; $datef = strtotime($datef); echo date('d.m.Y', $datef); ?> </b></td>

                    </tr>
                    
                    <tr>
                        <td style='vertical-align:  middle;' align="center" colspan="2"><b> <?php echo $data->cust_name; ?>  </b></td>
                        <td style=" vertical-align:  middle;" align="center" colspan="<?php echo $no_of_columns - 4; ?>"><b><?php echo $data->part_no; ?>  </b></td>
                        <td style=" vertical-align:  middle;" align="left" colspan="4"><b>HEAT NO: <?php echo $data->heat_no; ?> </b> </td>
                    </tr>
                    
                </table>

                <table border="1" align="center" style="width: 200%; height:150px;">
                    <tr style="border-bottom: #ffffff"></tr>
                    <tr>
                        <th style="border-top: #ffffff; text-align: center; vertical-align: middle;  height: 100px;" colspan="<?php echo $no_of_columns + 2; ?>"><img src="<?php echo base_url(); ?>/Audio/<?php echo $data->item; ?>_img.png" style="align:center; vertical-align: middle" width="400"></th>
                    </tr>
                </table>

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
                
                <th colspan="<?php echo $no_of_columns; ?>">OBSERVATIONS</th>
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
                    <th>&nbsp;&nbsp;&nbsp;&nbsp;C-<?php echo $col_l_c1[$i]; ?>&nbsp;&nbsp;&nbsp;</th>
                    
                <?php }
                
                    for ($i1 = 0; $i1 < $totalcval; $i1++) {
                    ?>
                    <th>&nbsp;&nbsp;&nbsp;&nbsp;C-&nbsp;&nbsp;&nbsp;</th>
                    
                <?php }
                
                }else{
                for ($i = 0; $i < count($col_l_c1); $i++) {
                    ?>
                    <th>&nbsp;&nbsp;&nbsp;&nbsp;C-<?php echo $col_l_c1[$i]; ?>&nbsp;&nbsp;&nbsp;</th>
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
                    <td align="center" style="text-align: center; vertical-align: middle;"><?php echo utf8_decode($D3[$k]->cust_spec); ?></td> 
                    <?php if($data->item == "642" || $data->item == "670" || $data->item == "708" || $data->item == "814" || $data->item == "815" || $data->item == "866" || $data->item == "867" ){ ?>
                    <td align="center" style="text-align: center; vertical-align: middle;"><?php echo utf8_decode($D3[$k]->working_spec); ?></td>
                    <?php } ?>
                    <?php
                    $mainlendata=count($main1);
                    $remlen=8-$mainlendata;
                    if($mainlendata<8){
                         for ($l = 0; $l < count($main1); $l++) {
                        ?>
                        <td align="center" style="text-align: center; vertical-align: middle;"><?php print_r(utf8_decode($main_second1[$l][$g])); ?></td>
                    <?php } 
                    for ($l1 = 0; $l1 < $remlen; $l1++) {?>
                        
                    <td align="center" style="text-align: center; vertical-align: middle;"></td>
                    
                    <?php }
                    }else{
                        for ($l = 0; $l < count($main1); $l++) {
                        ?>
                        <td align="center" style="text-align: center; vertical-align: middle;"><?php print_r(utf8_decode($main_second1[$l][$g])); ?></td>
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
                <?php if($data->item=="741"){?>
               <td rowspan="<?php echo $arr[$b_at_point[$b]]['rowspan']; ?>" style=" vertical-align:  middle; text-align:  center;" align="center"><?php if(count($arr[$b_at_point[$b]]['rowspan']) > 5) { echo "<br/><br/><br/><br/>"; }else{ echo '<br>'; } echo wordwrap($b_at_point[$b], 16, '<br/>', true); ?><img src="<?php echo base_url(); ?>/Audio/<?php echo $data->item; ?>_brg.png" width="80"></td>
                <?php }else{ ?>
               <td rowspan="<?php echo $arr[$b_at_point[$b]]['rowspan']; ?>" style=" vertical-align:  middle; text-align:  center;" align="center"><?php if(count($arr[$b_at_point[$b]]['rowspan']) > 5) { echo "<br/><br/><br/><br/>"; }else { echo "<br/><br/>"; } echo wordwrap($b_at_point[$b], 12, '<br />', true); ?><img src="<?php echo base_url(); ?>/Audio/<?php echo $data->item; ?>_brg.png" width="80"></td>
                <?php } ?>
                <?php $arr[$b_at_point[$b]]['printed'] = 'yes'; } ?>
                        
                        <td style="text-align: center; vertical-align: middle;"><?php echo $b_cust_spec[$b];?></td>
                        <!--Customer & Working Spec Both--> 
                        <?php if($data->item == "642" || $data->item == "670" || $data->item == "708" || $data->item == "814" || $data->item == "815" || $data->item == "866" || $data->item == "867" ){ ?>
                        <td style="text-align: center; vertical-align: middle;"><?php echo $b_working_spec[$b]; ?></td>
                        <?php } ?>
                    <?php
                    
                    $bvalue=count($count_b_plus); 
                    $ttlbval=4-$bvalue;
                    $br_ext_col=0;
                    $one_val=count($count_b_plus);
                    
                        for ($bb = 0; $bb < count($count_b_plus); $bb++) {
                            //$one_val=$count_b_plus[$bb];
                        ?>
                            <td colspan="<?php echo @$count_b_plus[$bb]; ?>" style="text-align: center; vertical-align: middle;">
                            &nbsp;<?php echo @$b_data2[$bb][$b]; ?> 
                            </td>
                        <?php 
                        }
                           if(array_sum($count_b_plus)< 8)
                           {
                                $colspan_in_l=(8-array_sum($count_b_plus))/2;
                                $colspan_in_2=intval((8-array_sum($count_b_plus))/2);
                        
                                for($a=0;$a<$colspan_in_2;$a++)  
                               {?>
                              <th colspan="2" style="text-align: center; vertical-align: middle;">-</th>
                              <?php }

                              if(is_float($colspan_in_l))
                              {?>
                              <th style="text-align: center; vertical-align: middle;">-</th>
                              <?php } 
                            } ?>
                        
                    </tr>  
                        <?php } 
                        
                        ?>         
            
            <!----------------/B------------------------------------>
       </table>    
                
                <!----------------/B------------------------------------>


                <table border="1" align="center" style="width: 100%;">

                    <tr>

                        <th rowspan="8" colspan="3" align="center" style="">
                            <?php if($data->item=="741"){ ?>
                            <div><br><h1 style="font-size:0px; color: #ffffff">cam</h1></div><div id="item_img" ><img src="<?php echo base_url(); ?>/Audio/<?php echo $data->item; ?>_cam.png" width="90"></div></th>
                            <?php }else{ ?>  
                        <div><br><h1 style="font-size:0px; color: #ffffff">cam</h1></div><div id="item_img" ><img src="<?php echo base_url(); ?>/Audio/<?php echo $data->item; ?>_cam1.png" width="90"></div></th>
                            <?php }?>
                        <th rowspan="8" colspan="<?php echo (($no_of_columns + 7)/2 ); ?>" style=" vertical-align: middle; text-align: center;" align='center'><?php echo $data->remark; ?></th>
                        
                    </tr>

                </table>

                <table border="1" align="center" style="width: 100%;">
                    
                    <tr>
                        <td style=" text-align: left; vertical-align:  middle; width:50%;" colspan="3" rowspan="2">CHECKED BY : <?php echo $data->checked_by; ?></td>
                        <td style=" text-align: left; vertical-align:  middle; width:50%;" colspan="<?php echo (($no_of_columns + 7) / 2); ?>" rowspan="2">APPROVED BY : <?php echo $data->approved_by; ?></td>              
                    </tr>
                    
                </table>                       

            </div>

            <?php }
        ?>
        <?php
        
        $df = "HARDNESS_CHILLDEPTH_REPORT.";
        header("Content-Type: application/xls");
        header("Content-type: text/html; charset=utf-8");
        header("Content-type: image/Upload");
        header("Content-Disposition: attachment; filename='$df'.xls");
        header('Expires: 0');
        header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
        header('Pragma: public');
        header('Content-Transfer-Encoding: binary')
        ?>
    </table>
</center></form>
</body>
</html>
