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

<?php 
    if($data)
    {
        $i=1;
        for($tt=0;$tt<count($data);$tt++){?>
            <button class="btn btn-danger dropdown-toggle page_click" id="button_<?php echo $tt; ?>" type="button" value="<?php echo $data[$tt]->id; ?>">Page <?php echo $i;?></button>
       <?php $i++;}
    }
?>    
   <div id="show_item_page_data"></div>  
   
<!--<script type="text/javascript" src="<?php echo base_url();?>js/plugins/jquery/jquery.min.js"></script>-->
<script>
$(document).on('click', '.page_click', function (e) {
    var vals = $(this).val();
    //alert(vals);
    
    $.ajax({
        type: "post",
        url: "<?php echo base_url('login_controller/get_hardness_report_pagewise_data'); ?>",
        data: {hard_id: vals},
        cache: false,
        async: false,
        success: function (data) {
            $('#show_item_page_data').html(data);
        }
    });
    
});
</script>
</body>