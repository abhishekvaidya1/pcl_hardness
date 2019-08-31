<script type="text/javascript" src="<?php echo base_url();?>js/sweetalert-dev.js"></script>
<link rel="stylesheet" type="text/css" id="theme" href="<?php echo base_url();?>css/sweetalert.css"/>
<body>  
<!-- START BREADCRUMB -->
<ul class="breadcrumb">
    <li><a href="#">Home</a></li>
    <li><a href="#">Summary Report</a></li>
</ul>
<div class="page-content-wrap">
<div class="row">
<div class="col-md-12" style=" background-color: #F0F8FF;">
<form class="form-horizontal" id="myForm">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title"><strong>Summary Report</strong> </h3>
<!--            <ul class="panel-controls">
                <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
            </ul>-->
        </div>
<div class="panel-body">
    <table class="table">
        <tr style=" background-color: lightgray;">
            <th style=" text-align: center;">Start Date</th>
            <th style=" text-align: center;"><input type="text" class=" form-control datepicker s_date"  required=""  style=" width: 100px;"></th>
            <th style=" text-align: center;">End Date</th>
            <th style=" text-align: center;"><input type="text" class=" form-control datepicker e_date"  required=""  style=" width: 100px;"></th>
            <th style=" text-align: center;">Select Item</th>
            <th style=" text-align: center;"><div id="item_list"></div></th>
            <th style=" text-align: center;">Status</th>
            <th style=" text-align: center;"> <select class="form-control select status" required="" >
                            
                            <option value="">Select</option>
                            <option value="ALL">ALL</option>
                            <option value="0">Pending</option>
                            <option value="1">Submitted</option>
                            
                        </select></th>
            <th style=" text-align: center;"><label class="btn btn-primary pull-right" id="submitbutton" name="print_option" value="" style="">Submit</label></th>
           
        </tr>
    </table>

    <div id="show_item_data"></div>    
    <div id="show_item_data1"></div>    
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
$('#show_item_data1').html('');    
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
var s_date=$('.s_date').val();
var e_date=$('.e_date').val();
var status=$('.status').val();
$("#loader").show();
$("#loader").fadeOut(2000);
$.ajax({
type: "post",
url: "<?php echo base_url('login_controller/get_summary_report_data'); ?>",
data: {item:item,s_date:s_date,e_date:e_date,status:status},
cache: false,
async: false,
success: function (data) {
 
$('#show_item_data').html(data);

}
});
});


//$(document).on('click', '.view', function (e) {
//
//    
////$("#loader").show();
////$("#loader").fadeOut(2000);
//var item_id=$(this).closest('tr').find("input.item_id").val();
//var cnt=$(this).closest('input').find("input.item_id").val();
//$.ajax({
//type: "post",
//url: "<?php echo base_url('login_controller/get_hardness_report_data1'); ?>",
//data: {id: item_id},
//cache: false,
//async: false,
//success: function (data) {
////alert(data);
//// return;
//$('#show_item_data1').html(data);
//
//}
//});
//});

//$(document).on('change', '.item', function (e) {
//$("#loader").show();
//$("#loader").fadeOut(1000);
//var item = $('.item').val();
//
//$.ajax({
//type: "post",
//url: "<?php echo base_url('login_controller/get_heat_data_admin_report'); ?>",
//data: {item: item},
//cache: false,
//async: false,
//success: function (data) {
//$('#show_part_no_data').html(data);
//$('.select2').select2();
//}
//});
//});

$(document).on('change', '.e_date', function (e) {
$("#loader").show();
$("#loader").fadeOut(1000);
var s_date = $('.s_date').val();
var e_date = $('.e_date').val();

$.ajax({
type: "post",
url: "<?php echo base_url('login_controller/get_item_data_summary'); ?>",
data: {s_date:s_date,e_date: e_date},
cache: false,
async: false,
success: function (data) {
//alert(data);
//return;
$('#item_list').html(data);
$('.select2').select2();
$select.select2("refresh", true);

}
});
});



</script>
</body>