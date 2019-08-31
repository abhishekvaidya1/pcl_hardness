<head>        
    <!-- META SECTION -->
    <title>PCL <?php echo $title; ?></title>            
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <!-- END META SECTION -->

    <!-- CSS INCLUDE -->        
    <link rel="stylesheet" type="text/css" id="theme" href="<?php echo base_url();?>css/theme-default.css"/>
    <!-- EOF CSS INCLUDE -->                         
      <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>js/datetimepicker-master/jquery.datetimepicker.css"/>                      

  
<script type="text/javascript" src="<?php echo base_url();?>js/plugins/jquery/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/datetimepicker-master/jquery.datetimepicker.css"></script>
     
<link rel="stylesheet" type="text/css" id="theme" href="<?php echo base_url();?>css/select_2.css"/>

    <script type="text/javascript">

$(document).ready(function() {

  $(".select2").select2();

  $(".js-example-tokenizer").select2({

  tags: true,

  tokenSeparators: [',', ' ']

})

});

</script>

<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>-->
<script type="text/javascript" src="<?php echo base_url();?>js/select_2.js"></script>
</head>