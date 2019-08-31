<link rel="stylesheet" href="css/style.css">
<form class="form-horizontal" action="#" id="<?php echo $data->item;?>_form">
<div class="page-content-wrap">
<div class="row">
<div class="col-md-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title"><strong>Hardness Chilldepth  - 670 - <?php echo $data->heat_no; ?> </strong> </h3>
            
        </div>
        <div class="panel-body">                                                                        
            <div class="row">
                <div class="col-md-6">

                    <input class="form-control item" name="item" required="" value="<?php echo $data->item;?>" readonly="" style=" display: none;">
                    <input type="text" class=" form-control" name="heat_no" required="" id="heat_no" value="<?php echo $data->heat_no;?>" style=" display: none;">
                    <div class="panel-body">

                        <div class="form-group">
                            <label class="col-md-3 control-label">Part No</label>
                            <div class="col-md-6">                                        
                                <input type="text" name="part_no" class="form-control part_no" value="<?php echo $data->part_no;?>" required="">
                            </div>
                        </div> 



                    </div>

                </div> 
                <div class="col-md-6">
                    <div class="panel-body">


                        <div class="form-group">
                            <label class="col-md-3 control-label">Date</label>
                            <div class="col-md-6">                                        
                                <input type="text" class=" form-control datepicker " name="c_date" required="" id="d1" value="<?php echo $data->c_date;?>">
                            </div>
                        </div> 

                    </div>



                </div>
            </div>
            <div id="item_img" ><img src="Audio/670_img.png" style="" class=" "></div>
            <div id="item_img" ><img src="Audio/670_cam.png" style="" class=" "></div>
        </div>
                
    </div>

</div>
</div>                    

<div class="row">
<div class="col-md-12">

        <!-- START BASIC TABLE SAMPLE -->
        <div class="panel panel-default" style="overflow-x:auto;overflow-y:auto;border: 0px;">
            <div class="panel-heading">
                <h3 class="panel-title">OBSERVATIONS</h3>
            </div>
            <div class="panel-body">
<!--                <label class=" btn btn-primary addmore_670_<?php echo $data->item;?>">L <i class="fa fa-plus"></i></label>-->
                <br><br><br>
                
                
                <table class="table table-bordered table_670_<?php echo $data->item;?>" >
                    
                    <tbody id="append_data_670_<?php echo $data->item;?>" class="append_data_670">
                        <tr>
                            <th>AT POINT</th>
                            <th></th>
                            <td >ZONE 1 'O'</td>
                            <td >ZONE 1 A At 85 º</td>
                            <td >ZONE 1 B At 85º</td>
                            <td >ZONE 2 C</td>
                            <td>EFFECTIVE CHILL <br> DEPTH </td>
                            <td colspan="4">BRINELL HARDNESS AT 0.5 mm FROM CAST SURFACE AFTER</td>
                        </tr>
            <input type="text" name="at_point[]" value="ZONE 1 'O'" style=" display: none;">
            <input type="text" name="at_point[]" value="ZONE 1 A At 85 º" style=" display: none;">
            <input type="text" name="at_point[]" value="ZONE 1 B At 85º" style=" display: none;">
            <input type="text" name="at_point[]" value="ZONE 2 C" style=" display: none;">
            <input type="text" name="at_point[]" value="EFFECTIVE CHILL DEPTH" style=" display: none;">
            <input type="text" name="at_point[]" value="BRINELL HARDNESS AT 0.5 mm FROM CAST SURFACE AFTER" style=" display: none;">
            <input type="text" name="at_point[]" value="BRINELL HARDNESS AT 0.5 mm FROM CAST SURFACE AFTER" style=" display: none;">
            <input type="text" name="at_point[]" value="BRINELL HARDNESS AT 0.5 mm FROM CAST SURFACE AFTER" style=" display: none;">
            <input type="text" name="at_point[]" value="BRINELL HARDNESS AT 0.5 mm FROM CAST SURFACE AFTER" style=" display: none;">
            
            
                        <tr>
                            <th >CUSTOMER SPEC.</th>
                            <th >MM - HRc</th>
                           <td>05 – 48 Min.</td>
                           <td>3.5 – 40 Min.</td>
                           <td>3.5 – 40 Min.</td>
                           <td>3.5 – 40 Min.</td>
                           <td>5  mm Min. All Over</td>
                           <td>BRG 1 200 - 285</td>
                            <td>BRG 3 200 - 285</td>
                            <td>BRG 5 200 - 285</td>
                             <td>--</td>
                        </tr>
                        <input type="text" name="cust_spec[]" value="05 – 48 Min" style=" display: none;">
                        <input type="text" name="cust_spec[]" value="3.5 – 40 Min" style=" display: none;">
                        <input type="text" name="cust_spec[]" value="3.5 – 40 Min" style=" display: none;">
                        <input type="text" name="cust_spec[]" value="3.5 – 40 Min" style=" display: none;">
                        <input type="text" name="cust_spec[]" value="5  mm Min. All Over" style=" display: none;">
                        <input type="text" name="cust_spec[]" value="BRG 1 200 - 285" style=" display: none;">
                        <input type="text" name="cust_spec[]" value="BRG 3 200 - 285" style=" display: none;">
                        <input type="text" name="cust_spec[]" value="BRG 5 200 - 285" style=" display: none;">
                        <input type="text" name="cust_spec[]" value="-" style=" display: none;">
                        <tr>
                            <th>WORKING SPEC.</th>
                            <th >MM - HRc</th>
                            <td>05 – 48 Min.</td>
                           <td>3.5 – 40 Min.</td>
                           <td>3.5 – 40 Min.</td>
                           <td>3.5 – 40 Min.</td>
                           <td>5  mm Min. All Over</td>
                           <td>BRG 1 200 - 285</td>
                            <td>BRG 3 200 - 285</td>
                            <td>BRG 5 200 - 285</td>
                            <td> CAM CORE 7 MM PDC 200 – 285 BHN</td>
                        </tr>
                        <input type="text" name="working_spec[]" value="05 – 48 Min" style=" display: none;">
                        <input type="text" name="working_spec[]" value="3.5 – 40 Min" style=" display: none;">
                        <input type="text" name="working_spec[]" value="3.5 – 40 Min" style=" display: none;">
                        <input type="text" name="working_spec[]" value="3.5 – 40 Min" style=" display: none;">
                        <input type="text" name="working_spec[]" value="5  mm Min. All Over" style=" display: none;">
                        <input type="text" name="working_spec[]" value="BRG 1 200 - 285" style=" display: none;">
                        <input type="text" name="working_spec[]" value="BRG 3 200 - 285" style=" display: none;">
                        <input type="text" name="working_spec[]" value="BRG 5 200 - 285" style=" display: none;">
                        <input type="text" name="working_spec[]" value="CAM CORE 7 MM PDC 200 – 285 BHN" style=" display: none;">

                        
                    
                    
        <?php
        $a1 = '';
        $a3 = '';
        foreach ($data1 as $row) {
            $a1[] = explode(",", $row->data_value);
        }
        $g = 0;
        $L = '';
        $L_C = '';
        $L_C_l = '';
        $a = '';
        foreach ($data2 as $row) {
            $L_C[] = $row->L_C;
            $L_C_l .= $row->L_C . ",";
            $L[] = $row->L;
        }
        $L_C_l = explode(",", rtrim($L_C_l, ","));
        for ($k = 0; $k < count($L); $k++) {
            $L_C1 = explode(",", $L_C[$k]);
            ?>

            <tr>
                <td><input type='text'  class="form-control L1_670_<?php echo json_decode($data->item); ?>" name="L[]" value="<?php echo $L[$k];?>"><input  class="btn btn-info btn-rounded add_c_<?php echo json_decode($data->item); ?>"  value="C-<?php echo $k;?>"></td></tr>
            <?php
            for ($i = 0; $i < count($L_C1); $i++) {
                ?>
            <tr><td></td><td class="recipe-table__cell"><input type="text"  style="width:60px;" class="form-control" name="L<?php echo $k;?>[]" value="<?php echo $L_C1[$i]; ?>"></td>
                    <?php
                    for ($j = 0; $j < count($a1[$g]); $j++) {
                        ?>
                        <td><input type="text" style="width:60px;" class="form-control" name="a<?php echo $g;?>[]" value="<?php print_r($a1[$g][$j]); ?>"></td>         
                    <?php } ?></tr>    
                <?php $g++;
            }
        }
        ?>

</tbody>

                </table>
                
                
                
                
                
                
                
                
                
                
                
                <table class="table table-bordered">
                    
                         <tr>
                             <td>Checked By</td>
                             <td><input type="text" class="form-control approved_by " name="checked_by" value="<?php echo $data->checked_by;?>"></td>
                         </tr>
                         <tr>
                             <td >Approved By</td>
                             <td><input type="text" class="form-control approved_by " name="approved_by" value="<?php echo $data->approved_by;?>"></td>
                         </tr>
                    </table>
                                              
            
            <div class="panel-footer">
            <!--            <button class="btn btn-default">Clear Form</button>                                    -->
            <label class="btn btn-primary pull-right" id="submitbutton" name="print_option" value="" onclick="submit('670_<?php echo $data->item;?>');">Submit</label>
        </div> 
           
            </div>
        </div>
    </div>    

    
    
     </div>
    </div>
</form>
<div id="loader_670_<?php echo $data->item;?>" style="  margin-left: 500px; margin-top: 800px; position: absolute; width: 100px; display:  none;"><img src="loading.gif" style=" width: 150px;"></div>

<script type="text/javascript" src="<?php echo base_url();?>js/plugins/jquery/jquery.min.js"></script>

<script>
window['i_670_'+<?php echo json_decode($data->item); ?>] = 0; 
window['j_670_'+<?php echo json_decode($data->item); ?>] = -1; 
var k_670= 0;
var add_li = <?php echo json_decode($data->item); ?>;
var item_count=$("#item_count").val();
add_li= "add_l" + item_count;
var add_more;
add_more= <?php echo json_decode($data->item); ?>;
add_more= "addMore670_" + add_more; 
$(".addmore_670_<?php echo json_decode($data->item); ?>").on('click', function () {
window["addMore670_" + <?php echo json_decode($data->item); ?>]();
window["add_l670_" + <?php echo json_decode($data->item); ?>]();
});
//
window["addMore670_" + <?php echo json_decode($data->item); ?>] = function() {
$.ajax({
url: "",
cache: false,
async: false,
success: function (data) {
var data = "<tr><td><input type='text' placeholder='L-"+ window['i_670_'+<?php echo json_decode($data->item); ?>] +"' class='form-control L1_670_"+<?php echo json_decode($data->item); ?>+"' name='L[]' ><input  class='btn btn-info btn-rounded add_c_"+<?php echo json_decode($data->item); ?>+" "+<?php echo json_decode($data->item); ?>+"_670_show_l" + window['i_670_'+<?php echo json_decode($data->item); ?>] + "' value='C-"+window['i_670_'+<?php echo json_decode($data->item); ?>]+"' id='670_"+<?php echo json_decode($data->item); ?>+"_show_l" + window['i_670_'+<?php echo json_decode($data->item); ?>] + "'></td></tr>";
$('#append_data_670_'+<?php echo json_decode($data->item); ?>).append(data);
}
});
window['i_670_'+<?php echo json_decode($data->item); ?>]++;   
window['j_670_'+<?php echo json_decode($data->item); ?>]++;   
}

//

$(document).on('click', '.add_c_'+<?php echo json_decode($data->item); ?>, function (e) {
    var id_this=$(this).val();
    id_this=id_this.split("-");
    id_this=id_this[1];
$('.table_670_'+<?php echo json_decode($data->item); ?>+' tbody ').append('<tr><td class="drag-handler"></td><td class="recipe-table__cell"><input type="text"  style="width:60px;" class="form-control" name="L'+id_this+'[]" placeholder="L'+window['j_670_'+<?php echo json_decode($data->item); ?>]+'-C-'+k_670+'"></td>\n\
    <td class="recipe-table__cell"><input type="text" style="width:60px;" class="form-control" name="a0[]"></td><td class="recipe-table__cell"><input type="text" style="width:60px;" class="form-control" name="a1[]">\n\
    </td><td class="recipe-table__cell"><input type="text" style="width:60px;" class="form-control" name="a2[]"></td>\n\
    <td class="recipe-table__cell"><input type="text" style="width:60px;" class="form-control" name="a3[]"></td>\n\
    <td class="recipe-table__cell"><input type="text" style="width:60px;" class="form-control" name="a4[]"></td>\n\
    <td class="recipe-table__cell"><input type="text" style="width:60px;" class="form-control" name="a5[]"></td>\n\
    <td class="recipe-table__cell"><input type="text" style="width:60px;" class="form-control" name="a6[]"></td>\n\
    <td class="recipe-table__cell"><input type="text" style="width:60px;" class="form-control" name="a7[]"></td>\n\
    <td class="recipe-table__cell"><input type="text" style="width:60px;" class="form-control" name="a8[]"></td>\n\
<tr>');
    k_670++;   
    });

    //

function submit(val){
var form = document.getElementById("670_<?php echo $data->item;?>");
for(var i=0; i < form.elements.length; i++){
if(form.elements[i].value === '' && form.elements[i].hasAttribute('required')){
swal(
'Oops...',
'ALL Fields are Mandatory ',
'error'
);
$('input[name='+form.elements[i].name+']').focus();
$('select[name='+form.elements[i].name+']').focus();
return;
}
}
    $("#loader_670_"+<?php echo json_decode($data->item); ?>).show();
    $("#loader_670_"+<?php echo json_decode($data->item); ?>).fadeOut(5000);
    $.ajax({
    url:'<?php echo base_url(); ?>login_controller/save_data',
    type: 'POST',
    cache: false,
    async: false,
    data: $("#"+val).serialize(),
    success: function(data){
    swal({
  position: 'top-end',
  type: 'success',
  title: 'Data Inserted',
  showConfirmButton: false,
  timer: 1500
});  
var he=$("#heat_no").val();
$("#real_670_"+<?php echo json_decode($data->item); ?>).remove();
//$('#670_'+he+'_item').remove();
}
    });
    }

    </script>
    
    <script type='text/javascript' src='<?php echo base_url(); ?>js/plugins/bootstrap/bootstrap-datepicker.js'></script>
<script src='js/Sortable.js'></script>

  <script>

    $(document).ready(function () {
    $(document).on('click', '.recipe-table__add-row-btn', function (e) {
        var $el = $(e.currentTarget);
        var $tableBody = $('.recipeTableBody');
        var htmlString = $('#rowTemplate').html();
        $tableBody.append(htmlString);
        return false;
    });

    $(document).on('click', '.recipe-table__del-row-btn', function (e) {
        var $el = $(e.currentTarget);
        var $row = $el.closest('tr');
        $row.remove();
        return false;
    });
  Sortable.create(
        $('.append_data_670')[0],
        {
            animation: 150,
            scroll: true,
            handle: '.drag-handler',
            onEnd: function () {
//                console.log('More see in https://github.com/RubaXa/Sortable');
            }
        }
    );
});
       
 </script>  

        
   
    

