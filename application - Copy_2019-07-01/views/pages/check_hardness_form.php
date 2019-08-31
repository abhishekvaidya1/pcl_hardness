 <script type="text/javascript" src="<?php echo base_url();?>js/sweetalert-dev.js"></script>
<link rel="stylesheet" type="text/css" id="theme" href="<?php echo base_url();?>css/sweetalert.css"/>
<body>  
<!-- START BREADCRUMB -->
<ul class="breadcrumb">
    <li><a href="#">Home</a></li>
    <li><a href="#">Hardness & Chill Depth Report</a></li>
</ul>
<div class="page-content-wrap">
<div class="row">
<div class="col-md-12" style=" background-color: #F0F8FF;">
<form class="form-horizontal">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title"><strong>HARDNESS & CHILLDEPTH REPORT</strong> </h3>
            <ul class="panel-controls">
                
            </ul>
        </div>
        
<div class="panel-body">                                                                     
    <div class="row">
        <div class="col-md-6">


            <div class="panel-body">
                
                <div class="form-group" style="display: none;">
                    <label class="col-md-3 control-label">Select Date</label>
                    <div class="col-md-6">                                        
                        <input type="text" class=" form-control datetimepicker2 e_date" name="part_no" required="">
                    </div>
                </div> 
                <div class="form-group">
                    <label class="col-md-3 control-label">Select Item</label>
                    <div class="col-md-8">                                        
                        <div id="item_list"></div>
                    </div>
                </div> 
                
                 
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel-body">
                <div class="form-group">
                    <label class="col-md-3 control-label">Select Heat No</label>
                    <div class="col-md-6">                                        
                        <div id="show_part_no_data"></div>
                    </div>
                    <!--                <label class="btn btn-primary pull-right" id="show_part_no" name="print_option" value="">Next</label>-->
                </div> 
                <div class="form-group">
                    
                    
                    <label class="btn btn-primary pull-right" id="submitbutton" name="print_option" value="" style=" display: none;">Submit</label>
                </div> 
            </div>
        </div>
    </div>
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
    
var item=$('.item').val();
var c_date=$('.e_date').val();
//if(c_date=='')
//{
//swal({
//  position: 'top-end',
//  type: 'warning',
//  title: 'Please Select Item or Date',
//  showConfirmButton: false,
//  timer: 1500
//}); 
//return;     
//}
//$("#loader").show();
//$("#loader").fadeOut(4000);
$.ajax({
type: "post",
url: "<?php echo base_url('login_controller/get_change_check_hardness_form'); ?>",
data: {item: $('.item').val(),heat_no:$('.heat_no').val(),c_date:$('.e_date').val()},
cache: false,
async: false,
success: function (data) {
 
$('#show_item_data').html(data);
$('.select2').select2();
}
});
});
$(document).on('click', '.view', function (e) {


$("#loader").show();
$("#loader").fadeOut(2000);
var item_id=$(this).closest('tr').find("input.item_id").val();
$.ajax({
type: "post",
url: "<?php echo base_url('login_controller/get_hardness_report_data1'); ?>",
data: {id: item_id},
cache: false,
async: false,
success: function (data) {
 
$('#show_item_data1').html(data);

}
});
});

$(document).on('change', '.status', function (e) {
if($(this).val()){
$(this).closest('tr').find("textarea.status_remark").show();   
}else{$(this).closest('tr').find("textarea.status_remark").hide();    
}
if($(this).val()=="0"){
    $(".edit").attr("disabled", true);
}else if($(this).val()=="1"){
    $(".edit").attr("disabled", false);
}else{
    $(".edit").attr("disabled", true);
}


});

$(document).on('click', '.change', function (e) {

var status_remark=$(this).closest('tr').find("textarea.status_remark").val();
var item_id=$(this).closest('tr').find("input.item_id").val();
var status=$(this).closest('tr').find("select.status").val();

if(status=='' || status==null)
{
//alert("Please Select Status");
swal({
  position: 'top-end',
  type: 'warning',
  title: 'Please Select Status',
  showConfirmButton: false,
  timer: 1500
});

return false;
}

if(status_remark=='' || status_remark==null)
{
//alert("Enter Remark");
swal({
  position: 'top-end',
  type: 'warning',
  title: 'Enter Remark',
  showConfirmButton: false,
  timer: 1500
}); 
return false;
}
$("#loader").show();
$("#loader").fadeOut(2000);
$.ajax({
type: "post",
url: "<?php echo base_url('login_controller/update_change_status'); ?>",
data: {id: item_id,status_remark:status_remark,status:status},
cache: false,
async: false,
success: function (data) {
     swal({
  position: 'top-end',
  type: 'success',
  title: 'Data Inserted',
  showConfirmButton: false,
  timer: 1500
});  
$(".change").attr("disabled", true);
}
});
});

$(document).on('change', '.item', function (e) {
$("#loader").show();
$("#loader").fadeOut(1000);
var item = $('.item').val();

$.ajax({
type: "post",
url: "<?php echo base_url('login_controller/get_heat_data'); ?>",
data: {item: item},
cache: false,
async: false,
success: function (data) {

$('#show_part_no_data').html(data);
$('.select2').select2();
}
});
});

$(document).ready(function() {



$("#show_item_data").html('');
$("#loader").show();
$("#loader").fadeOut(1000);
var e_date = $('.e_date').val();

$.ajax({
type: "post",
url: "<?php echo base_url('login_controller/get_item_data12'); ?>",
data: {e_date: e_date},
cache: false,
async: false,
success: function (data) {
$('#item_list').html(data);
$('.select2').select2();
if(data)
{
$('#submitbutton').show();
}
}
});


});

$(document).on('click', '.edit', function (e) {
var item_id=$(this).closest('tr').find("input.item_id").val();
//alert(item_id);

$("#loader").show();
$("#loader").fadeOut(2000);
$.ajax({
type: "post",
url: "<?php echo base_url('login_controller/edit_item_by_micro'); ?>",
data: {id: item_id},
cache: false,
async: false,
success: function (data) {
   console.log(data); 
   $('#show_item_data1').html(data);
}
});
});


</script>
</body>