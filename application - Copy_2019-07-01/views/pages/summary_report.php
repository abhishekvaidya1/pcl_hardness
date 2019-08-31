 <script type="text/javascript" src="<?php echo base_url();?>js/sweetalert-dev.js"></script>
<link rel="stylesheet" type="text/css" id="theme" href="<?php echo base_url();?>css/sweetalert.css"/>
<body>  
<div class="page-content-wrap">
    <div class="row">
        <div class="col-md-12">
            <form class="form-horizontal">
                <div class="panel panel-default">
                    <div class="panel-body"> 
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">

                                        <div class="btn-group pull-right">
                                            <button class="btn btn-danger dropdown-toggle" id="summary" type="button"><i class="fa fa-bars"></i> Export Data</button>
                                        </div>                                    
                                    </div>
                                    <br>
                                    <div id="printDiv_summary" style="width: 100%;">
                                        <div class="panel-body">
                                            <table border="1" align="center" class="customers2" style="width: 100%;">

                                                <tr >
                                                    <td style="text-align: center; font-size: 17px; background-color: lightgrey; vertical-align: middle;" rowspan="2">Sr.No.</td>
                                                    <td style="text-align: center; font-size: 17px; background-color:lightgrey; vertical-align: middle;" rowspan="2">Date</td>
                                                    <td style="text-align: center; font-size: 17px; background-color:lightgrey; vertical-align: middle;" rowspan="2">Item</td>
                                                    <td style="text-align: center; font-size: 17px; background-color:lightgrey; vertical-align: middle;" rowspan="2">Heat Number</td>                                              
                                                    <td style="text-align: center; font-size: 17px; background-color:lightgrey; height: 40px; vertical-align: middle;" colspan="2">Inspection Results</td>
                                                    <td style="text-align: center; font-size: 17px; background-color:lightgrey; vertical-align: middle;"rowspan="2">Status</td>
                                                    <td style="text-align: center; font-size: 17px; background-color:lightgrey; vertical-align: middle;" rowspan="2">View</td>
                                                </tr>
                                                <tr >                                           
                                                    <td style="text-align: center; font-size: 17px; height: 40px; background-color:lightgrey; vertical-align: middle;">Inspected Laddle Number</td>
                                                    <td style="text-align: center; font-size: 17px; height: 40px; background-color:lightgrey; vertical-align: middle; ">Result</td>
                                                </tr>

                                                <tbody>
                                                    <?php
                                                    
                                                    $i = 1;
                                                    $ladle = array();
                                                    $arr = array();
                                                    $arr1 = array();
                                                    $spe_data = array();
                                                    foreach ($data as $row) {
                                                        
                                                        if (!isset($arr[$row->heat_no.$row->item.date("d", strtotime($row->c_date))])) {
                                                            $arr[$row->heat_no.$row->item.date("d", strtotime($row->c_date))]['rowspan'] = 0;
                                                        }
                                                        $arr[$row->heat_no.$row->item.date("d", strtotime($row->c_date))]['printed'] = 'no';
                                                        $arr[$row->heat_no.$row->item.date("d", strtotime($row->c_date))]['rowspan'] += 1;

                                                        if (!isset($arr1[$row->heat_no.$row->c_date.$row->item])) {
                                                            $arr1[$row->heat_no.$row->c_date.$row->item]['rowspan'] = 0;
                                                        }
                                                        $arr1[$row->heat_no.$row->c_date.$row->item]['printed'] = 'no';
                                                        $arr1[$row->heat_no.$row->c_date.$row->item]['rowspan'] += 1;
                                                    }
                                                    
                                                    ?>

                                                    <?php foreach ($data as $row) { ?>

                                                        <tr>
                                                            <?php if ($arr[$row->heat_no.$row->item.date("d", strtotime($row->c_date))]['printed'] == 'no') { ?>
                                                                <td rowspan="<?php echo $arr[$row->heat_no.$row->item.date("d", strtotime($row->c_date))]['rowspan']; ?>" style="text-align: center; font-size: 17px; vertical-align: middle;"><?php echo $i; ?></td>
                                                                <td rowspan="<?php echo $arr[$row->heat_no.$row->item.date("d", strtotime($row->c_date))]['rowspan']; ?>"  style="text-align: center; font-size: 17px; vertical-align: middle;"><?php $datef=strtotime($row->c_date); echo date('d.m.Y',$datef) ?></td>
                                                                <td rowspan="<?php echo $arr[$row->heat_no.$row->item.date("d", strtotime($row->c_date))]['rowspan']; ?>"  style="text-align: center; font-size: 17px; vertical-align: middle;"><?php echo $row->cust_name; ?></td>
                                                                <td rowspan="<?php echo $arr[$row->heat_no.$row->item.date("d", strtotime($row->c_date))]['rowspan']; ?>"  style="text-align: center; font-size: 17px; vertical-align: middle;">&nbsp;<?php echo $row->heat_no; ?>&nbsp;</td>
                                                                <?php $arr[$row->heat_no.$row->item.date("d", strtotime($row->c_date))]['printed'] = 'yes';
                                                                $i++;
                                                            } ?>
                                                            <td  style="text-align: center; font-size: 17px; vertical-align: middle;">L - <?php echo $row->l; ?></td>
                                                            <td  style="text-align: center; font-size: 17px; vertical-align: middle;"><?php if ($row->status == "1") {
                                                            echo "Not Ok";
                                                        } else {
                                                            echo "Ok";
                                                        } ?></td>
                                                            <?php if ($arr1[$row->heat_no.$row->c_date.$row->item]['printed'] == 'no') { ?>
                                                                <?php
                                                                
                                                                if ($row->l_status == "0") {
                                                                    ?>
                                                                    <td rowspan="<?php echo $arr1[$row->heat_no.$row->c_date.$row->item]['rowspan']; ?>"  style="text-align: center; background-color: lightgoldenrodyellow; font-size: 17px; vertical-align: middle;">Pending</td>
    <?php } else { ?><td rowspan="<?php echo $arr1[$row->heat_no.$row->c_date.$row->item]['rowspan']; ?>"  style="text-align: center; background-color: lightgreen; font-size: 17px; vertical-align: middle;">Submitted</td><?php } ?>
                                                                <td rowspan="<?php echo $arr1[$row->heat_no.$row->c_date.$row->item]['rowspan']; ?>"  style="text-align: center; vertical-align: middle;"><button class="btn btn-primary pull-center view_report" type="button" value="<?php echo $row->heat_no . ',' . $row->item . ',' . $row->c_date; ?>">View</button></td>
    <?php $arr1[$row->heat_no.$row->c_date.$row->item]['printed'] = 'yes';
} ?>

                                                        </tr>
<?php } ?>
                                                </tbody>
                                            </table>  
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 

                    </div>               
                </div>
            </form>
        </div>
    </div> 
</div>

<div id="loader" style="  margin-left: 500px; margin-top: 300px; position: fixed; width: 100px; display:  none;"><img src="loading.gif" style=" width: 150px;"></div>
<div></div>
<script type="text/javascript" src="<?php echo base_url();?>js/plugins/jquery/jquery.min.js"></script>
<script>
$('#summary').click(function(e) {
      let file = new Blob([$('#printDiv_summary').html()], {type:"application/vnd.ms-excel"});
let url = URL.createObjectURL(file);
let a = $("<a />", {
  href: url,
 download: "Summary_Report.xls"}).appendTo("body").get(0).click();
 e.preventDefault();
});
$('.view_report').click(function(e) {
        
$("#loader").show();
$("#loader").fadeOut(2000);
    var this_val=$(this).val();
   $.ajax({
type: "post",
url: "<?php echo base_url('login_controller/show_hardness_report_summary'); ?>",
data: {view_data:this_val},
cache: false,
async: false,
success: function (data) {
// alert(data);
// return;
$('#show_item_data1').html(data);

}
});
});
</script>
</body>