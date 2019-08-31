<html>
    <head>
        <title>Report MIBS</title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        
    </head>
    <body>


<?php
if($data)
{
    $final_split_by_para='';
    $atpoint= explode("-", $atpoint);
foreach ($data as $row) {
                $final_split[]= explode(",", $row->data_value1);
            }
           
            for ($f = 0; $f < count($final_split); $f++) {
        for ($f1 = 0; $f1 < count($final_split[$f]); $f1++) {
            if ($atpoint[0] == $f1) {
                $final_split_by_para[] = $final_split[$f][$f1];
            }
        }
    }
    $colspan_count=$hr_data1= array_chunk($final_split_by_para, 4);
    $colspan_count=count($colspan_count)-2;
    
    ?>

    <div id="printDiv" style="width: 100%; overflow-x: scroll;">
        <table border="1" align="center" class="customers2">
            <tr>
                <td>   
            
        <table border="1" align="center" class="customers2">
            <tr>
                <td rowspan="2" style=" vertical-align:  middle;" align="center">
                    <img src="<?php echo base_url(); ?>img/icn.png">
                </td>
                <td colspan="<?php echo $colspan_count+2;?>" style=" vertical-align:  middle;" align="center"><b>QUALITY SYSTEM RECORD</b></td>
                <td rowspan="2" style=" vertical-align:  middle;" align="center"><b>QUALITY <br>ASSURANCE</b></td>
            </tr>
            <tr>
            <td colspan="<?php echo $colspan_count+2;?>" style=" vertical-align:  middle;" align="center"><b>CONTROL CHART ( X BAR - R)</b> </td>

            </tr>
            <tr>
                <td align="center" style=" vertical-align:  middle;" align="center"><b>PLANT : PCL</b></td>
                <td align="center" style=" vertical-align:  middle;" align="center"><b>LINE : Met. Insp.</b></td>

                <td align="center" style=" vertical-align:  middle;" align="center" colspan="<?php echo $colspan_count+1;?>"><b>OPERATION :<br> DATE CONTROL <br>LIMITS CALCULATED :</b></td>
                <td align="center" style=" vertical-align:  middle;" align="center" ><b>ENG.SPEC :<br> 45 - 55 HRc</b></td>
                
                
            </tr>
            <tr>
                <td align="center" style=" vertical-align:  middle;" align="center"><b>ITEM NO. - 0670 C/S</b></td>
                <td align="center" style=" vertical-align:  middle;" align="center"><b>CHARACTERISTIC <br>:<?php echo $atpoint[1];?></b></td>
                <td align="center" style=" vertical-align:  middle;" align="center" colspan="<?php echo $colspan_count+1;?>"><b>SAMPLE SIZE <br>/FREQ. 03<br>/Heat</b></td>
                <td align="center"  style=" vertical-align:  middle;" align="center"><b>PART NAME :<br> 55562231</b></td>

            </tr>
            <?php
            $hr_data1=$final_split_by_para;
            $hr_data1= array_chunk($hr_data1, 4);
            for ($s = 0; $s < count($hr_data1); $s++) {
                $graph21[] = max(($hr_data1[$s])) - min(($hr_data1[$s]));
                $avr_r_bar1[] = max(($hr_data1[$s])) - min(($hr_data1[$s]));
            }

            for ($s = 0; $s < count($hr_data1); $s++) {
                $graph11[] = (array_sum($hr_data1[$s])) / 4;
                $avr_x_bar1[] = (array_sum($hr_data1[$s])) / 4;
            }

            $avr_x_bar1 = array_sum($avr_x_bar1) / count($avr_x_bar1); // AH4
            $avr_r_bar1 = array_sum($avr_r_bar1) / count($avr_r_bar1); // AH5
            $avg_ucl1 = $avr_x_bar1 + (1.02 * $avr_r_bar1); // AH8
            $avg_lcl1 = $avr_x_bar1 - (1.02 * $avr_r_bar1); // AH9
            ?>
            <tr>
                <td style=" vertical-align:  middle;" align="center"><b>AVERAGE X =<br>  <?php echo round(@$avr_x_bar1); ?>   </b></td>
                <td align="center" style=" vertical-align:  middle;" align="center"><b>UCL=<br> X+A2*R = <?php echo round(@$avg_ucl1); ?></b></td>
                <td align="center" style=" vertical-align:  middle;" align="center"><b>LCL =<br> X-A2*R = <?php echo round(@$avg_lcl1); ?></b></td>
                <td align="center" colspan="<?php echo $colspan_count+1;?>" style=" vertical-align:  middle;" align="center"><b>LCL =<br> X-A2*R =AVERAGES (X BAR CHART )</b></td>

            </tr>
            <tr>
                <td colspan="<?php echo $colspan_count+4;?>" ></td>
            </tr>
            <tr>
                <td colspan="<?php echo $colspan_count+4;?>"></td>
            </tr>
            
            
        </table>
        <br>
        <table border="1" align="center" class="customers2">
            <?php
            $hr_data=$final_split_by_para;
            $hr_data_chunk= array_chunk($hr_data, 4);
            ?>

    <?php
    $c = 1;
    $symbol = array('R', 'E&sum;', '', '&#256;');
    for ($j = 0; $j < 4; $j++) {
        ?>
                <tr>
                    <td style=" vertical-align:  middle;" align="center"><?php echo utf8_decode($symbol[$j]); ?></td>
                    <td style=" vertical-align:  middle;" align="center"><?php echo $c; ?></td>
        <?php
        for ($i = 0; $i < count($hr_data_chunk); $i++) {
            ?>
                        <td style=" vertical-align:  middle;" align="center"><?php echo @$hr_data_chunk[$i][$j]; ?></td>    
                    <?php } ?></tr>
                    <?php $c++;
                } ?>
            <tr>
                <td style=" vertical-align:  middle;" align="center">D</td>
                <?php
                for ($s = 0; $s < count($hr_data_chunk); $s++) {
                    ?>
                    <td></td>
                <?php }
                ?>   
            </tr>
           
            <tr>
                <td style=" vertical-align:  middle;" align="center"><?php echo utf8_decode('&sum; X');?></td>
                <td style=" vertical-align:  middle;" align="center">SUM</td>
                <?php
                for ($s = 0; $s < count($hr_data_chunk); $s++) {
                    ?>
                    <td style=" vertical-align:  middle;" align="center"><?php echo array_sum($hr_data_chunk[$s]); ?></td>
                <?php }
                ?>
            </tr>
            <tr>
                <td style=" vertical-align:  middle;" align="center"><?php echo utf8_decode('x&#x0304');?></td>
                <td style=" vertical-align:  middle;" align="center">AVG</td>
                <?php
                for ($s = 0; $s < count($hr_data_chunk); $s++) {
                    $graph1[] = (array_sum($hr_data_chunk[$s])) / 4;
                    ?>
                    <td style=" vertical-align:  middle;" align="center"><?php echo $avr_x_bar[] = (array_sum($hr_data_chunk[$s])) / 4; ?></td>
                <?php }
                ?>
            </tr>
            <tr>
                <td style=" vertical-align:  middle;" align="center">R</td>
                <td style=" vertical-align:  middle;" align="center">RANGE</td>
    <?php
    for ($s = 0; $s < count($hr_data_chunk); $s++) {

        $graph2[] = max($hr_data_chunk[$s]) - min($hr_data_chunk[$s]);
        ?>
                    <td style=" vertical-align:  middle;" align="center"><?php echo $avr_r_bar[] = max($hr_data_chunk[$s]) - min($hr_data_chunk[$s]); ?></td>
                <?php }
                ?>
            </tr>
        </table>
             <?php
                $avr_x_bar = array_sum($avr_x_bar) / count($avr_x_bar); // AH4
                $avr_r_bar = array_sum($avr_r_bar) / count($avr_r_bar); // AH5
                $avg_ucl = $avr_x_bar + (1.02 * $avr_r_bar); // AH8
                $avg_lcl = $avr_x_bar - (1.02 * $avr_r_bar); // AH9
                $range_ucl = 2.57 * $avr_r_bar; // AH12
                $range_lcl = 0; // AH13
                $STDDEV = $avr_r_bar / 2.06; // AH15
                if($STDDEV==0)
                {
                 $STDDEV1=1;   
                }
                else
                {
                $STDDEV1=$STDDEV;   
                }
                $STDDEV_three = 3 * $STDDEV1;   // AH16
                $STDDEV_six = 6 * $STDDEV1;   // AH17
                $USL = 55;    // AH19
                $LSL = 45;    // AH20
                $TOL = 10;    // AH21
                $ZUSL[]= ($USL - $avr_x_bar) / $STDDEV_three; // AH23
                $ZUSL[] = ($avr_x_bar - $LSL) / $STDDEV_three; //AH24
                $Cp = $TOL / $STDDEV_six;
                $Cpk = min($ZUSL);
                $c_date = '';
                foreach ($data as $row) {
                    $c_date .= "'" . $row->c_date . "',";
                }
                ?>
        <br>
        <table border="1" align="center" class="customers2">
            <tr>
                    <td style=" vertical-align:  middle;" align="center">AVG X BAR</td>
                    <td style=" vertical-align:  middle;" align="center">AVG R BAR</td>
                    <td style=" vertical-align:  middle;" align="center">CONTROL LIMITS<br> FOR AVERAGE <br>CHART-UCL </td>
                    <td style=" vertical-align:  middle;" align="center" colspan="<?php echo $colspan_count+1;?>">CONTROL LIMITS <br>FOR AVERAGE <br>CHART-LCL</td>
                    
                </tr>
                <tr>
                    <td style=" vertical-align:  middle;" align="center"><?php echo round($avr_x_bar);?></td>
                    <td style=" vertical-align:  middle;" align="center"><?php echo round($avr_r_bar);?></td>
                    <td style=" vertical-align:  middle;" align="center"><?php echo round($avg_ucl);?></td>
                    <td style=" vertical-align:  middle;" align="center" colspan="<?php echo $colspan_count+1;?>"><?php echo round($avg_lcl);?></td>
                    
                    
                </tr>
            <tr>
                    
                    <td style=" vertical-align:  middle;" align="center">CONTROL LIMITS <br>FOR <br>RANGES-UCL</td>
                    <td style=" vertical-align:  middle;" align="center">CONTROL LIMITS <br>FOR <br>RANGES-LCL</td>
                    <td style=" vertical-align:  middle;" align="center">STD DEV.</td>
                    <td style=" vertical-align:  middle;" align="center" colspan="<?php echo $colspan_count+1;?>">3 STD DEV.</td>
                    
                </tr>
                <tr>
                    
                    <td style=" vertical-align:  middle;" align="center"><?php echo round($range_ucl);?></td>
                    <td style=" vertical-align:  middle;" align="center"><?php echo round($range_lcl);?></td>
                    <td style=" vertical-align:  middle;" align="center"><?php echo round($STDDEV);?></td>
                    <td style=" vertical-align:  middle;" align="center" colspan="<?php echo $colspan_count+1;?>"><?php echo round($STDDEV_three);?></td>
                    
                    
                </tr>
            <tr>
                    
                    <td style=" vertical-align:  middle;" align="center">6 STD DEV.</td>
                    <td style=" vertical-align:  middle;" align="center">USL</td>
                    <td style=" vertical-align:  middle;" align="center">LSL</td>
                    <td style=" vertical-align:  middle;" align="center" colspan="<?php echo $colspan_count+1;?>">TOL</td>
                    
                </tr>
                <tr>
                    
                    <td style=" vertical-align:  middle;" align="center"><?php echo round($STDDEV_six);?></td>
                    <td style=" vertical-align:  middle;" align="center"><?php echo round($USL);?></td>
                    <td style=" vertical-align:  middle;" align="center"><?php echo round($LSL);?></td>
                    <td style=" vertical-align:  middle;" align="center" colspan="<?php echo $colspan_count+1;?>"><?php echo round($TOL);?></td>
                    
                    
                </tr>
            <tr>
                    
                    <td style=" vertical-align:  middle;" align="center">ZUSL</td>
                    <td style=" vertical-align:  middle;" align="center">ZLSL</td>
                    <td style=" vertical-align:  middle;" align="center"><b>Cp</b></td>
                    <td style=" vertical-align:  middle;" align="center" colspan="<?php echo $colspan_count+1;?>"><b>Cpk</b></td>
                </tr>
                <tr>
                    
                    <td style=" vertical-align:  middle;" align="center"><?php echo round($ZUSL[0]);?></td>
                    <td style=" vertical-align:  middle;" align="center"><?php echo round($ZUSL[1]);?></td>
                    <td style=" vertical-align:  middle;" align="center"><b><?php echo number_format(($Cp), 2, '.', '');?></b></td>
                    <td style=" vertical-align:  middle;" align="center" colspan="<?php echo $colspan_count+1;?>"><b><?php echo number_format(($Cpk), 2, '.', '');?></b></td>
                    
                </tr>
        </table>
        
        </td>
        <td >ACTION ON SPECIAL 
                    CAUSES<br>
                    1) ANY POINT OUTSIDE OF THE 
                    CONTROL LIMITS <br>
                    2) A RUN OF 7 POINTS ALL 
                    ABOVE  OR BELOW THE 
                    CENTRAL LINE<br>
                    3) A RUN OF 7 POINTS UP OR 
                    DOWN<br>
                    4) ANY OTHER OBIVOUSLY NON-
                    RANDOM PATTERN<br>
                    ACTION INSTRUCTION<br>
                    1) MAKE NO UNNECESSARY 
                    CHANGE TO THE PROCESS<br>
                    2) NOTE ANY CHANGES TO 
                    PROCESS ELEMENTS (PEOPLE
                    EUIPMENT  MATERIAL ,METHOD,
                    ENVIRONMENT OR MEASURE-
                    MENT SYSTEM ) ON BACK OF
                    THIS FORM<br>  
                    <table style=" width: 100%;">
                        <tr>
                            <td style=" width: 20%;">SUB GROUP SIZE</td>
                            <td style=" width: 20%;">A2</td>
                            <td style=" width: 20%;">D3</td>
                            <td style=" width: 20%;">D4</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>1.88</td>
                            <td>-</td>
                            <td>3.27</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>1.02</td>
                            <td>-</td>
                            <td>2.57</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>0.73</td>
                            <td>-</td>
                            <td>2.28</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>.58</td>
                            <td>-</td>
                            <td>2.11</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>.48</td>
                            <td>-</td>
                            <td>2.00</td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>.42</td>
                            <td>.08</td>
                            <td>1.32</td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>.37</td>
                            <td>.14</td>
                            <td>3.27</td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>.34</td>
                            <td>.18</td>
                            <td>1.86</td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>.31</td>
                            <td>.22</td>
                            <td>1.78</td>
                        </tr>
                    </table>
                    THE PROCESS MUST BE IN<br>  
                    CONTROL BRFORE<br>
                    CAPABILITY CAN BE<br>
                    DETERMINED<br>
                    X = SUM / SUB GROUP SIZE<br>
                    R = X (MAX ) -X ( MIN )<br>            
                </td>
        </tr>
        </table>
    </div>
<?php 
}?>
                    
<script>
function printDiv(divId) {
var printContents = document.getElementById(divId).innerHTML;
var originalContents = document.body.innerHTML;
document.body.innerHTML = "<html><head><title></title></head><body>" + printContents + "</body></html>";
window.print();
document.body.innerHTML = originalContents;
}


$("#btnExport").click(function(e) {
  let file = new Blob([$('#printDiv').html()], {type:"application/vnd.ms-excel"});
let url = URL.createObjectURL(file);
let a = $("<a />", {
  href: url,
  download: "CONTROL CHART ( X BAR - R) REPORT.xls"}).appendTo("body").get(0).click();
  e.preventDefault();
});


Highcharts.chart('container', {
    
    title: {
        text: 'X-BAR CHART'
    },
    subtitle: {
        text: ''
    },
    xAxis: {
        type: '',
        categories: [<?php echo rtrim($c_date,',');?>],
        title: {
            text: ''
        }
    },
    yAxis: {
        title: {
            text: ''
        },
        
       tickPixelInterval: 30
    },
    tooltip: {
        headerFormat: '<b>{series.name}</b><br>',
        pointFormat: '{point.y:.1f}'
    },

    plotOptions: {
       series: {
            label: {
                connectorAllowed: true
            },
            pointStart: 0
        }
    },

    colors: ['#6CF', '#39F', '#06C', '#036', '#000'],

    // Define the data points. All series have a dummy year
    // of 1970/71 in order to be compared on the same x axis. Note
    // that in JavaScript, months start at 0 for January, 1 for February etc.
    series: [{
        name: "X-BAR",
         color: 'blue',
        
        data: [
            <?php
            for($g=0;$g<count($graph1);$g++)
            {
            ?>
            [<?php echo $graph1[$g];?>],
            <?php } ?>
        ]
    },
    {
        name: "AVG",
        color: 'green',
        data: [
            <?php
            for($g=0;$g<count($graph1);$g++)
            {
            ?>
            [<?php echo $avr_x_bar;?>],
            <?php } ?>
        ]
    },
    {
        name: "UCL",
        color: 'red',
        dashStyle: 'shortdash',
        
        data: [
            <?php
            for($g=0;$g<count($graph1);$g++)
            {
            ?>
            [<?php echo $avg_ucl;?>],
            <?php } ?>
        ]
    },
    {
        name: "LCL",
        color: 'red',
        dashStyle: 'shortdash',
        
        data: [
            <?php
            for($g=0;$g<count($graph1);$g++)
            {
            ?>
            [<?php echo $avg_lcl;?>],
            <?php } ?>
        ]
    }
    ]
});

Highcharts.chart('container1', {
    
    title: {
        text: 'R-BAR CHART'
    },
    subtitle: {
        text: ''
    },
    xAxis: {
        type: '',
        categories: [<?php echo rtrim($c_date,',');?>],
        title: {
            text: ''
        }
    },
    yAxis: {
        title: {
            text: ''
        },
       tickPixelInterval: 30
    },
    tooltip: {
        headerFormat: '<b>{series.name}</b><br>',
        pointFormat: '{point.y:.1f}'
    },

    plotOptions: {
        spline: {
            marker: {
                enabled: true
            }
        }
    },

    colors: ['#6CF', '#39F', '#06C', '#036', '#000'],

    // Define the data points. All series have a dummy year
    // of 1970/71 in order to be compared on the same x axis. Note
    // that in JavaScript, months start at 0 for January, 1 for February etc.
    series: [{
        name: "R-BAR",
         color: 'blue',
        data: [
            <?php
            for($g=0;$g<count($graph2);$g++)
            {
            ?>
            [<?php echo $graph2[$g];?>],
            <?php } ?>
        ]
    },
    {
        name: "AVG",
        color: 'green',
        data: [
            <?php
            for($g=0;$g<count($graph1);$g++)
            {
            ?>
            [<?php echo $avr_r_bar;?>],
            <?php } ?>
        ]
    },
    {
        name: "UCL",
        color: 'red',
        dashStyle: 'shortdash',
        data: [
            <?php
            for($g=0;$g<count($graph1);$g++)
            {
            ?>
            [<?php echo $range_ucl;?>],
            <?php } ?>
        ]
    },
    {
        name: "LCL",
        color: 'red',
        dashStyle: 'shortdash',
        data: [
            <?php
            for($g=0;$g<count($graph1);$g++)
            {
            ?>
            [<?php echo $range_lcl;?>],
            <?php } ?>
        ]
    }
    ]
});



</script>
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