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
<body>  
<!-- START BREADCRUMB -->
<ul class="breadcrumb">
    <li><a href="#">Home</a></li>
    <li><a href="#">Hardness & Chilldepth</a></li>
</ul>
<div class="page-content-wrap">
    <div class="row">
        <div class="col-md-12" style=" background-color: #F0F8FF;">
            <form class="form-horizontal"  method="post" name="myForm1" id="myForm1" enctype="multipart/form-data">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><strong>Edit Item</strong> </h3>

                    </div>
                    <div class="panel-body" style=" background-color: #ddd;">                                                                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="panel-body">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Edit Item</label>
                                        <div class="col-md-6">                                        
                                            <select class="form-control select2 item" name="item" required="">
                                                <option value="">Select</option>
                                                <option value="670">670</option>
                                                <option value="708">708</option>
                                                <option value="709">709</option>
                                            </select>
                                        </div>
                                    </div> 
                                </div>
                            </div>     
                            <div class="col-md-6">
                                <div class="panel-body">
                                    <div class="form-group">
<!--                                        <label class="col-md-3 control-label">Enter Heat No</label>
                                        <div class="col-md-6">                                        
                                            <input class=" form-control enter_heat" type="text">
                                        </div>-->
                                        <label class="btn btn-primary pull-right" id="s1" name="print_option" value="">Submit</label>

                                    </div> 
                                </div>
                            </div>     
                        </div>
                        </div>
                    </div>
            </form>
            <div id="show_item_data"></div> 
        </div>
        
    </div> 
</div>
</div


<script type="text/javascript" src="<?php echo base_url();?>js/plugins/jquery/jquery.min.js"></script>
<script>
j=0;
var glo='';

$(document).on('click', '#s1', function (e) {
//$(this).css('background-color','black');
var item = $('.item').val();
$.ajax({
type: "post",
url: "<?php echo base_url('login_controller/edit_hardness_form'); ?>",
data: {item_name: item},
cache: false,
async: false,
success: function (data) {
$('#show_item_data').html(data);
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



</script>
<script src='js/Sortable.js'></script>

</body>