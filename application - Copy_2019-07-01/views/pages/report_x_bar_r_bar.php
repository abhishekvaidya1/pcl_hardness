 <script type="text/javascript" src="<?php echo base_url();?>js/sweetalert-dev.js"></script>
<link rel="stylesheet" type="text/css" id="theme" href="<?php echo base_url();?>css/sweetalert.css"/>
<script src="<?php echo base_url();?>js/highcharts.js"></script>
<script src="<?php echo base_url();?>js/exporting.js"></script>
<body>  
<!-- START BREADCRUMB -->
<ul class="breadcrumb">
    <li><a href="#">Home</a></li>
    <li><a href="#">CONTROL CHART ( X BAR - R) REPORT</a></li>
</ul>
<div class="page-content-wrap">
    <div class="row">
        <div class="col-md-12">
            <form class="form-horizontal"  method="post" name="myForm1" id="myForm1" enctype="multipart/form-data">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><strong>CONTROL CHART ( X BAR - R) REPORT</strong> </h3>
                        <ul class="panel-controls">
                            <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                        </ul>
                    </div>
                    <div class="panel-body">                                                                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="panel-body">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Start Date</label>
                                        <div class="col-md-6">                                        
                                            <input type="text" class=" form-control datepicker s_date" name="part_no" required="">
                                        </div>
                                    </div> 
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">End Date</label>
                                        <div class="col-md-6">                                        
                                            <input type="text" class=" form-control datepicker e_date" name="part_no" required="">
                                        </div>
                                    </div> 
                                     
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="panel-body">
                                    <div class="form-group" id="show" style=" display: none;">
                                        <label class="col-md-3 control-label">Select Item No</label>
                                        <div id="show_part_no_data"></div>
                                    </div>
                                    <div class="form-group" id="show_point" style=" display: none;">
                                        <label class="col-md-3 control-label">Select Point</label>
                                        <div id="show_point_data"></div>
                                        <label class="btn btn-primary pull-right" id="submitbutton" name="print_option" value="">Submit</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="show_item_data"></div>    
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

var atpoint = $('.atpoint').val();
if(atpoint=='' || atpoint==null)
{
swal(
'Oops...',
'Please Select Point',
'error'
);
return false;   
}

$.ajax({
type: "post",
url: "<?php echo base_url('login_controller/get_x_bar_r_bar_data'); ?>",
data: {item: $('.item').val(),s_date:$('.s_date').val(),e_date:$('.e_date').val(),atpoint:$('.atpoint').val()},
cache: false,
async: false,
success: function (data) {
 //alert(data);
$('#show_item_data').html(data);

}
});
});

$(document).on('change', '.s_date', function (e) {
$("#loader").show();
$("#loader").fadeOut(2000);
var s_date = $('.s_date').val();
var e_date = $('.e_date').val();

$.ajax({
type: "post",
url: "<?php echo base_url('login_controller/get_item_no_x_bar_r_bar'); ?>",
data: {s_date: s_date,e_date:e_date},
cache: false,
async: false,
success: function (data) {


$('#show').show();
$('#show_part_no_data').html(data);
$('.select2').select2();
}
});
});
$(document).on('change', '.e_date', function (e) {
$("#loader").show();
$("#loader").fadeOut(2000);
var s_date = $('.s_date').val();
var e_date = $('.e_date').val();

$.ajax({
type: "post",
url: "<?php echo base_url('login_controller/get_item_no_x_bar_r_bar'); ?>",
data: {s_date: s_date,e_date:e_date},
cache: false,
async: false,
success: function (data) {


$('#show').show();
$('#show_part_no_data').html(data);
$('.select2').select2();
}
});
});
$(document).on('change', '.item', function (e) {
var item=$(this).val();

$.ajax({
type: "post",
url: "<?php echo base_url('login_controller/get_point_x_bar_r_bar'); ?>",
data: {item: item},
cache: false,
async: false,
success: function (data) {


$('#show_point').show();
$('#show_point_data').html(data);
$('.select2').select2();
}
});
});



</script>
</body>