 <script type="text/javascript" src="<?php echo base_url();?>js/sweetalert-dev.js"></script>
<link rel="stylesheet" type="text/css" id="theme" href="<?php echo base_url();?>css/sweetalert.css"/>
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
<body onload="addMore_ipcs('L0');">  
<!-- START BREADCRUMB -->
<ul class="breadcrumb">
    <li><a href="#">Home</a></li>
    <li><a href="#">Hardness & Chilldepth</a></li>
</ul>
<div class="page-content-wrap">
<div class="row">
<div class="col-md-12">
<form class="form-horizontal"  method="post" name="myForm1" id="myForm1" enctype="multipart/form-data">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title"><strong>Hardness Chilldepth</strong> </h3>
            
        </div>
<div class="panel-body">                                                                        
    <div class="row">
    <div class="col-md-6">


        <div class="panel-body">
            <div class="form-group">
                <label class="col-md-3 control-label">Select Item</label>
                <div class="col-md-6">                                        
                    <select class="form-control select item" name="item" required="">
                        <option value="">Select</option>
                        <option value="670" selected="">670</option>
                    </select>
                </div>
            </div> 
            <div class="form-group">
                <label class="col-md-3 control-label">Part No</label>
                <div class="col-md-6">                                        
                    <input type="text" name="" class="form-control part_no">
                </div>
            </div> 
            <div class="form-group">
                <label class="col-md-3 control-label">Heat No</label>
                <div class="col-md-6">                                        
                    <input type="text" class=" form-control" name="heat_no" required="" id="heat_no">
                </div>
            </div> 
            <div class="form-group">
                <label class="col-md-3 control-label">Date</label>
                <div class="col-md-6">                                        
                    <input type="text" class=" form-control datepicker" name="c_date" required="">
                </div>
            </div> 

        </div>

    </div>     
    </div>
    <div id="item_img" style=" display: none;"><img src="Audio/670_img.png" style=""></div>
    <div id="show_item_data"></div>    
</div>
        <div class="panel-footer">
            <!--            <button class="btn btn-default">Clear Form</button>                                    -->
            <label class="btn btn-primary pull-right" id="submitbutton" name="print_option" value="" onclick="submit();">Submit</label>
        </div>        
    </div>
</form>
</div>
</div>                    
</div>

<script type="text/javascript" src="<?php echo base_url();?>js/plugins/jquery/jquery.min.js"></script>
<script>
$(document).on('change', '.item', function (e) {

var item_name = $('.item').val();
$.ajax({
type: "post",
url: "<?php echo base_url('login_controller/get_item_data'); ?>",
data: {item_name: item_name},
cache: false,
async: false,
success: function (data) {
    
$('#show_item_data').html(data);
$('.part_no').val('55562231');
$('#item_img').show();
}
});
});


$(document).on('keyup', '.c1', function (e) {
var coine1=$(this).val();

var work_value = $(this).closest('tr').find("input.working_spec").val();

var split_value=work_value.split("-");

if(parseFloat(split_value[1]))
{
if(parseFloat(coine1) <  parseFloat(split_value[0]) || parseFloat(coine1) >  parseFloat(split_value[1]))
{
$(this).css("color", "red");  
$(this).css("border-color", "red");  
}

else{
$(this).css("border-color", "green");
$(this).css("color", "green");     
}
}


});

function submit(){
var form = document.getElementById('myForm1');
for(var i=0; i < form.elements.length; i++){
if(form.elements[i].value === '' && form.elements[i].hasAttribute('required')){
    
swal(
'Oops...',
'Please Select ' + form.elements[i].name,
'error'
);
$('input[name='+form.elements[i].name+']').focus();
$('select[name='+form.elements[i].name+']').focus();


return;

}

}
$("#loader").show();
$("#loader").fadeOut(5000);

$.ajax({
url:'<?php echo base_url(); ?>login_controller/save_data',
type: 'POST',
data: $("#myForm1").serialize(),
success: function(data){

swal({
title: "Great!",
text: "",
type: "success",
showCancelButton: false,
closeOnConfirm: false,
showLoaderOnConfirm: true
},
function(){
setTimeout(function(){
location.reload(true);
}, 1000);
});
}
});
}


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



</script>
</body>