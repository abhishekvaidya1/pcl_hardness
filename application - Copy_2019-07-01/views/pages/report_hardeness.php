 <script type="text/javascript" src="<?php echo base_url();?>js/sweetalert-dev.js"></script>
<link rel="stylesheet" type="text/css" id="theme" href="<?php echo base_url();?>css/sweetalert.css"/>
<body onload="show_item();">  
<!-- START BREADCRUMB -->
<ul class="breadcrumb">
    <li><a href="#">Home</a></li>
    <li><a href="#">Hardness & Chill Depth Report</a></li>
</ul>
<div class="page-content-wrap">
<div class="row">
<div class="col-md-12" style=" background-color: #F0F8FF;">
<form class="form-horizontal" id="myForm">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title"><strong>Hardness & Chill Depth Report</strong> </h3>
            <ul class="panel-controls">
                <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
            </ul>
        </div>
<div class="panel-body">                                                                        
    <div class="row">
<?php
$date = new DateTime('now', new DateTimeZone('Asia/Kolkata'));
$date1 = $date->format('Y-m-d');
$months = date("m", strtotime($date1));
$year = date("Y", strtotime($date1));
?>
        
        <table class="table" style=" background-color: lightgray;">
            <tr>
                <th>Select Year</th>
                <td style=" width: 100px;"><input type="text" class=" form-control datetimepicker105 year_s"  required="" value="<?php echo $year;?>"></td>
                <th>Select Month</th>
                <td style=" width: 100px;"><input type="text" class=" form-control datetimepicker100 month_s" required="" value="<?php echo $months;?>"></td>
                <th>Select Item</th>
                <td><div id="item_list"></div></td>
                <th>Select Heat No</th>
                <td><div id="show_part_no_data"></div></td>
                <td><label class="btn btn-primary pull-right" id="submitbutton" name="print_option"  >Submit</label></td>
            </tr>
        </table>
      
    </div>
    <div id="show_item_data"></div>    
<!--    <div id="show_item_data1"></div>    -->
</div>
               
</div>
</form>
</div>
</div>                    
</div>

<div id="loader" style="  margin-left: 500px; margin-top: 300px; position: fixed; width: 100px; display:  none;"><img src="loading.gif" style=" width: 150px;"></div>
<div></div
<script type="text/javascript" src="<?php echo base_url();?>js/plugins/jquery/jquery.min.js"></script>

<script>
$(document).on('click', '#submitbutton', function (e) {
var form = document.getElementById('myForm');
for(var i=0; i < form.elements.length; i++){
if(form.elements[i].value === '' && form.elements[i].hasAttribute('required')){
swal(
'Oops...',
'ALL Fields are Mandetory',
'error'
);
return false;
}
}    
var item=$('.item').val();
var c_date=$('.e_date').val();
var year_s = $('.year_s').val();
var month_s = $('.month_s').val();
$.ajax({
type: "post",
url: "<?php echo base_url('login_controller/get_hardness_report_data'); ?>",
data: {item: $('.item').val(),heat_no:$('.heat_no').val(),year:year_s,month:month_s},
cache: false,
async: false,
success: function (data) {
//alert(data);
 //return;
$('#show_item_data').html(data);

}
});
});
$(document).on('click', '.view', function (e) {

    
$("#loader").show();
$("#loader").fadeOut(2000);
var item_id=$(this).closest('tr').find("input.item_id").val();
var cnt=$(this).closest('input').find("input.item_id").val();
$.ajax({
type: "post",
url: "<?php echo base_url('login_controller/get_hardness_report_data1'); ?>",
data: {id: item_id},
cache: false,
async: false,
success: function (data) {
//alert(data);
// return;
$('#show_item_data1').html(data);
$('.select2').select2();
$select.select2("refresh", true);

}
});
});

$(document).on('change', '.item', function (e) {
$("#loader").show();
$("#loader").fadeOut(1000);
var item = $('.item').val();

$.ajax({
type: "post",
url: "<?php echo base_url('login_controller/get_heat_data_admin_report'); ?>",
data: {item: item},
cache: false,
async: false,
success: function (data) {
    
$('#show_part_no_data').html(data);
$('.select2').select2();
$select.select2("refresh", true);
}
});
});

$(document).on('change', '.month_s', function (e) {
$("#loader").show();
$("#loader").fadeOut(1000);
var year_s = $('.year_s').val();
var month_s = $('.month_s').val();

$.ajax({
type: "post",
url: "<?php echo base_url('login_controller/get_item_data'); ?>",
data: {month: month_s,year:year_s},
cache: false,
async: false,
success: function (data) {

$('#item_list').html(data);
$('.select2').select2();
$select.select2("refresh", true);

}
});
});

function show_item()
{
$("#loader").show();
$("#loader").fadeOut(1000);
var year_s = $('.year_s').val();
var month_s = $('.month_s').val(); 

$.ajax({
type: "post",
url: "<?php echo base_url('login_controller/get_item_data'); ?>",
data: {month: month_s,year:year_s},
cache: false,
async: false,
success: function (data) {

$('#item_list').html(data);
$('.select2').select2();
$select.select2("refresh", true);

}
});

}



</script>
<script type="text/javascript" src="<?php echo base_url();?>js/select_2.js"></script>
</body>