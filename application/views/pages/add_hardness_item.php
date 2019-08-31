<script type="text/javascript" src="<?php echo base_url();?>js/sweetalert-dev.js"></script>
<link rel="stylesheet" type="text/css" id="theme" href="<?php echo base_url();?>css/sweetalert.css"/>
<link rel="stylesheet" type="text/css" id="theme" href="<?php echo base_url();?>css/select_2.css"/>
<style>

    body {

    }

    input[type="text"]:focus {
        border-color: #66afe9;
        outline: 0;
        -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(102, 175, 233, 0.6);
        box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(102, 175, 233, 0.6);
    }

    div.tableContainer {
        clear: both;
        border: 1px solid #963;
        height: 285px;
        overflow: auto;
        width: 100%;
    }

    html>body div.tableContainer {
        overflow: hidden;
        width: 100%;
    }


    div.tableContainer table {
        float: left;
        width: 740px
    }


    html>body div.tableContainer table {
         width: 756px
    }


    thead.fixedHeader tr {
        position: relative;
    }

    thead.fixedHeader th {
        background: #C96;
        border-left: 1px solid #EB8;
        border-right: 1px solid #B74;
        border-top: 1px solid #EB8;
        font-weight: normal;
        padding: 4px 3px;
        text-align: left
    }

    html>body tbody.scrollContent {
        display: block;
        height: 262px;
        overflow: auto;
        width: 100%
    }

    html>body thead.fixedHeader {
        display: table;
        overflow: auto;
        width: 100%;
    }

    tbody.scrollContent td, tbody.scrollContent tr.normalRow td {
        background: #FFF;
        border-bottom: 1px solid #CCC;
        border-right: 1px solid #CCC;
        border-top: 1px solid #DDD;
        padding: 2px 3px 3px 4px
    }
table {
    border-collapse: collapse;
    border-spacing: 0;
    width: 100%;
    border: 1px solid #ddd;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

</style>
<body>
<!-- START BREADCRUMB -->
<ul class="breadcrumb">
    <li><a href="#">Home</a></li>
    <li><a href="#">Hardness & Chill Depth</a></li>
</ul>

<?php $userlogs=$this->session->userdata('access');?>
<div class="page-content-wrap">
    <div class="row">
        <div class="col-md-12" style=" background-color: #F0F8FF;">
            <form class="form-horizontal"  method="post" name="myForm1" id="myForm1" enctype="multipart/form-data">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><strong>Hardness & Chill Depth</strong> </h3>
                    </div>
                    <div class="panel-body" style=" background-color: #ddd;">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="panel-body">
                                    <div class="form-group">
                                        <label class="col-md-5 control-label">Select Date</label>
                                        <div class="col-md-7">
                                            <?php
                                            if (@$main_data->c_date) {
                                                ?>
                                                <input type="text" class=" form-control datetimepicker2 c_date1" name="c_date1" required="" id="d11" value="<?php echo @$main_data->c_date; ?>">
                                            <?php
                                            } else {
                                                $date = new DateTime('now', new DateTimeZone('Asia/Kolkata'));
                                                $date1 = $date->format('d.m.Y');
                                                ?>
                                                <input type="text" class="form-control datetimepicker2 c_date1" name="c_date1" required="" id="d11" value="<?php echo $date1; ?>">
                                        <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="panel-body">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" style="text-align: center;">Select Item</label>
                                        <div class="col-md-9" style="text-align: left; ">
                                            <select class="form-control select2 item" name="item" required="" style="width: 100%;">
                                                <option value="">Select</option>
                                                <?php
                                                foreach($item_db_data as $row)
                                                {?>
                                                <option value="<?php echo $row->item;?>"><?php echo $row->item_description;?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="panel-body">
                                    <div class="form-group">
                                        <label class="col-md-6 control-label" style="text-align: center;">Select Heat No</label>
                                        <div class="col-md-6">
<!--                                            <select class="form-control select2 enter_heat" name="enter_heat" required="">
                                                <option>Select</option>
                                            </select>-->
                                            <input type="text" class="form-control enter_heat" name="enter_heat" required="" value="" placeholder="Ex.- 1A001" oninput="this.value = this.value.toUpperCase()"  maxlength="5">

                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="panel-body">
                                    <div class="form-group" style="padding-right: 10px;">
                                        <label class="btn btn-primary pull-right" id="s1" name="print_option" value="">Submit</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="add_item">
                        </div>
                    </div>
            </form>
        </div>
        <table class="table table-bordered"><tbody><tr id="append_item"></tr>
             <tr id="append_item1"></tr>
                <tr id="append_item2"></tr>
                <tr id="append_item3"></tr>
                <tr id="append_item4"></tr>
            </tbody></table>
        <!--        <div id="show_item_data1"></div> -->
        <div id="show_item_data"></div>
    </div>
</div>
</div>
<script type="text/javascript" src="<?php echo base_url();?>js/plugins/jquery/jquery.min.js"></script>
<script>
dynamic_id=0;
j=0;
var glo='';
var input_date='';
$(document).on('click', '#s1', function (e) {
var item_name = $('.item').val();
var heat = $('.enter_heat').val();
input_date = $('.c_date1').val();
if(item_name=='' || heat=='' || input_date=='')
{
swal({
  position: 'top-end',
  type: 'warning',
  title: 'All Fields are Mandatory',
  showConfirmButton: false,
  timer: 1500
});
return;
}
if(heat.length<5){
swal({
  position: 'top-end',
  type: 'warning',
  title: 'Enter Heat Number Properly',
  showConfirmButton: false,
  timer: 1500
});
return;}

var con_item_heat=item_name + "_" + heat;
// ITEM ALREADY EXIST IN DB
$.ajax({
type: "post",
url: "<?php echo base_url('login_controller/item_validation'); ?>",
data: {item_name: item_name,heat:heat,input_date:input_date},
cache: false,
async: false,
success: function (data) {
if(data!='' || data!=null){
glo=data;}
else{
glo='';}
}
});
if(glo)
{
swal({
  position: 'top-end',
  type: 'warning',
  title: 'Item Already Exist',
  showConfirmButton: false,
  timer: 1500
});
return;}
// ITEM ALREADY EXIST IN DB
var con_item_heat1=item_name + "_" + heat + "_" + j;
var con_item_heat2=item_name + "_"+ j;
var cost=0;
cost = document.getElementsByClassName('item_click');
for(var i=0;i<cost.length;i++)
{
if(cost[i].value.substring(0, cost[i].value.length-2)==con_item_heat)
{
swal({
  position: 'top-end',
  type: 'warning',
  title: 'Item Already Exist',
  showConfirmButton: false,
  timer: 1500
});
return;
}
}
$.ajax({
url: "",
success: function (data) {
var data = '';
data += '<th id="real_'+ con_item_heat2 +'"><button class="btn btn-danger item_click"  name="" value=' + con_item_heat1 + ' >' + con_item_heat + '</button> </th>';
var data1='<div id="' + con_item_heat + '_item" class="sss'+j+' ii"></div><input type="text" class="' + con_item_heat + '_item" style="display:none;">';

if(parseInt(j) <= 7)
{$('#append_item').append(data);}

else if(parseInt(j) <= 15)
{$('#append_item1').append(data);}

else if(parseInt(j) <= 23)
{$('#append_item2').append(data);}

else if(parseInt(j) <= 31)
{$('#append_item3').append(data);}

else if(parseInt(j) <= 40)
{$('#append_item4').append(data);}

$('#show_item_data').append(data1);
j++;
}
});
});
$(document).on('click', '.item_click', function (e) {
//$(this).css('background-color','black');
var name = $(this).val();
var item_name=name.split("_");
var real_item=item_name[0];
var heat=item_name[1];
var count=item_name[2];
dynamic_id=count;
var abc=real_item + "_" + heat;
$.ajax({
type: "post",
url: "<?php echo base_url('login_controller/item_name_wise_page'); ?>",
data: {item_name: real_item,heat:heat,input_date:input_date,count:count},
cache: false,
async: false,
success: function (data) {
var aa=$('.'+ abc +'_item').val();
if(aa)
{
var cost=0;
cost = document.getElementsByClassName('ii');
var show_l=0;
show_l=parseInt(cost.length);
for(var i=0;i<show_l;i++)
{if(i!=count)
    {
    $('.sss'+ i).hide();

    }
}
$('.sss'+ count).show();
}
else {
    var cost=0;
    cost = document.getElementsByClassName('ii');
    var show_l=0;
    show_l=parseInt(cost.length);
    for(var i=0;i<show_l;i++)
        {
        if(i!=count)
        {
        $('.sss'+ i).hide();
        }
        }
        $('#'+ abc +'_item').show();
        $('#'+ abc +'_item').html(data);
        $('.'+ abc +'_item').val("1");
        var date = new Date();
        var today = new Date(date.getFullYear(), date.getMonth(), date.getDate());
        var end = new Date(date.getFullYear(), date.getMonth(), date.getDate());

        }

        }
        });
        });
        function isNumber(e) {
        var charCode;
        if (e.keyCode > 0) {
        charCode = e.which || e.keyCode;
        }
        else if (typeof (e.charCode) != "undefined") {
        charCode = e.which || e.keyCode;
        }
        if (charCode == 46)
        return true
        if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
        return true;
        }

        //Heat no. text format
        function isNumberAlpha(e) {
        var charCode;
        if (e.keyCode > 0) {
        charCode = e.which || e.keyCode;
        }
        else if (typeof (e.charCode) != "undefined") {
        charCode = e.which || e.keyCode;
        }
        if ((charCode > 64 && charCode >91))
        return true
        if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
        return true;
        }

// Disable Refresh Page and Back button
$(document).ready(function() {
        window.history.pushState(null, "", window.location.href);
        window.onpopstate = function() {
            window.history.pushState(null, "", window.location.href);
        };
    //Date format d.m.Y format
    $('.datetimepicker2').datetimepicker({
            format: 'd.m.Y' });
});
    window.onload = function () {
    document.onkeydown = function (e) {
            return (e.which || e.keyCode) != 116;
        };
    }
</script>
<script type="text/javascript">

$(document).ready(function() {
  $(".select2").select2();
  $(".select2").select2({
  tags: true,
  tokenSeparators: [',', ' ']
});
});
// Heat Number Validation Code
$(document).on('keyup', '.enter_heat', function (e) {
var heat=$(this).val();
var letters = /^[a-zA-Z]+$/;
var letters1 = /^[0-9]+$/;
var letters2 = /^[M-Z]+$/;
if(heat.charAt(0).match(letters))
{$(this).val('');}
if(heat.charAt(0)>4 || heat.charAt(0)=='0')
{$(this).val('');}

if(heat.charAt(1).match(letters1)){
$(this).val(heat.substring(0, heat.length - 1));}

if(heat.charAt(1).match(letters2)){
$(this).val(heat.substring(0, heat.length - 1));}

if(heat.charAt(2).match(letters)){
$(this).val(heat.substring(0, heat.length - 1));}

if(heat.charAt(3).match(letters)){
$(this).val(heat.substring(0, heat.length - 1));}

if(heat.charAt(4).match(letters)){
$(this).val(heat.substring(0, heat.length - 1));}
});
// Heat Number Validation Code

</script>
<script src='js/Sortable.js'></script>
<script type="text/javascript" src="<?php echo base_url();?>js/select_2.js"></script>
</body>
