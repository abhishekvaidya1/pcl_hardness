<!--<style>
.zui-table {
    border: none;
    border-right: solid 1px #DDEFEF;
    border-collapse: separate;
    border-spacing: 0;
    font: normal 13px Arial, sans-serif;
}
.zui-table thead th {
    background-color: #DDEFEF;
    border: none;
    color: #336B6B;
    padding: 10px;
    text-align: left;
    text-shadow: 1px 1px 1px #fff;
    white-space: nowrap;
}
.zui-table tbody td {
    border-bottom: solid 1px #DDEFEF;
    color: #333;
    padding: 10px;
    text-shadow: 1px 1px 1px #fff;
    white-space: nowrap;
}
.zui-wrapper {
    position: relative;
}
.zui-scroller {
    margin-left: 141px;
    overflow-x: scroll;
    overflow-y: visible;
    padding-bottom: 5px;
    width: 800px;
}
.zui-table .zui-sticky-col {
    border-left: solid 1px #DDEFEF;
    border-right: solid 1px #DDEFEF;
    left: 0;
    position: absolute;
    top: auto;
    width: 150px;
    
}
</style>-->

<div class="row">
<div class="col-md-12">

        <!-- START BASIC TABLE SAMPLE -->
        <div class="panel panel-default" style="overflow-x:auto;overflow-y:auto;border: 0px;">
            <div class="panel-heading">
                <h3 class="panel-title">OBSERVATIONS</h3>
            </div>
            <div class="panel-body">
                <label class=" btn btn-primary add_l">L <i class="fa fa-plus"></i></label>
                <br><br><br>
                
                <div class="zui-wrapper">
    <div class="zui-scroller">
        <table class="zui-table table-bordered">
                    
                    <tbody>
                        <tr id="add_l">
                            <th class="zui-sticky-col">AT POINT</th>
                            <th >CUSTOMER SPEC.</th>
                            <th>WORKING SPEC.</th>
                            <th colspan="5" id="col_l0" >
                                <div class="form-group">
                <label class="col-md-1 control-label">L</label>
                <div class="col-md-4">                                        
                    <input type="text" class="form-control L1" name="L[]" placeholder="L0" required=""><input class="btn btn-warning  l1_add show_l0" id="show_l0" value="C" style=" width: 50px;">
                </div>
            </div>
                                </th>
                            
                        </tr>
                        <tr id="l1">
                            <th class="zui-sticky-col"></th>
                            <th >MM - HRc</th>
                            <th>MM - HRc</th>
                            

                        </tr>
                   
                    
                        <tr id="a1">
                            <td class="zui-sticky-col">ZONE 1 'O'</td>
                            <td style=" display: none;"><input type="text" class="form-control" name="at_point[]" value="ZONE 1 O"></td>
                            <td><input type="text" class="form-control cust_spec" name="cust_spec[]" value="05 - 48" readonly="" style="color: black;"></td>
                            <td><input type="text" class="form-control working_spec" name="working_spec[]" value="05 - 48" readonly="" style="color: black;"></td>
                            

                         </tr>
                         <tr id="a2">
                            <td class="zui-sticky-col">ZONE 1 A At 85 º</td>
                            <td style=" display: none;"><input type="text" class="form-control" name="at_point[]" value="ZONE 1 A At 85 º"></td>
                            <td><input type="text" class="form-control cust_spec" name="cust_spec[]" value="3.5 - 40" readonly="" style="color: black;"></td>
                            <td><input type="text" class="form-control working_spec" name="working_spec[]" value="3.5 - 40" readonly="" style="color: black;"></td>
                            

                         </tr>
                         <tr id="a3">
                            <td class="zui-sticky-col">ZONE 1 B At 85º</td>
                            <td style=" display: none;"><input type="text" class="form-control" name="at_point[]" value="ZONE 1 B At 85º"></td>
                            <td><input type="text" class="form-control cust_spec" name="cust_spec[]" value="3.5 - 40" readonly="" style="color: black;"></td>
                            <td><input type="text" class="form-control working_spec" name="working_spec[]" value="3.5 - 40" readonly="" style="color: black;"></td>
                            
                         </tr>
                         <tr id="a4">
                            <td class="zui-sticky-col">ZONE 2 C</td>
                            <td style=" display: none;"><input type="text" class="form-control" name="at_point[]" value="ZONE 2 C"></td>
                            <td><input type="text" class="form-control cust_spec" name="cust_spec[]" value="3.5 - 40" readonly="" style="color: black;"></td>
                            <td><input type="text" class="form-control working_spec" name="working_spec[]" value="3.5 - 40" readonly="" style="color: black;"></td>
                            

                         </tr>
                         <tr id="a5">
                            <td class="zui-sticky-col">EFFECTIVE CHILL <br> DEPTH </td>
                            <td style=" display: none;"><input type="text" class="form-control" name="at_point[]" value="EFFECTIVE CHILL  DEPTH "></td>
                            <td><input type="text" class="form-control cust_spec" name="cust_spec[]" value="5" readonly="" style="color: black;"></td>
                            <td><input type="text" class="form-control working_spec" name="working_spec[]" value="5" readonly="" style="color: black;"></td>
                            

                         </tr>
                         <tr id="a6">
                             <td class="zui-sticky-col" >BRINELL<br> HARDNESS <br>AT 0.5 mm <br>FROM CAST <br>SURFACE AFTER</td>
                            <td style=" display: none;"><input type="text" class="form-control" name="at_point[]" value="BRINELL HARDNESS AT 0.5 mm FROM CAST SURFACE AFTER GRINDING(5/750 KG LOAD)"></td>
                            <td><input type="text" class="form-control cust_spec" name="cust_spec[]" value="200 - 285" readonly="" style="color: black;"></td>
                            <td><input type="text" class="form-control working_spec" name="working_spec[]" value="200 - 285" readonly="" style="color: black;"></td>
                            

                         </tr>
                         <tr id="a7">
                             <td></td>
<!--                            <td class="zui-sticky-col">BRINELL HARDNESS <br>AT 0.5 mm <br>FROM CAST <br>SURFACE AFTER <br>GRINDING(5/750 KG LOAD)</td>                            <td style=" display: none;"><input type="text" class="form-control" name="at_point[]" value="BRINELL HARDNESS AT 0.5 mm FROM CAST SURFACE AFTER GRINDING(5/750 KG LOAD)"></td>-->
                            <td><input type="text" class="form-control cust_spec" name="cust_spec[]" value="200 - 285" readonly="" style="color: black;"></td>
                            <td><input type="text" class="form-control working_spec" name="working_spec[]" value="200 - 285" readonly="" style="color: black;"></td>
                            <td style=" display: none;"><input type="text" class="form-control" name="at_point[]" value="BRINELL HARDNESS AT 0.5 mm FROM CAST SURFACE AFTER GRINDING(5/750 KG LOAD)"></td>

                         </tr>
                         <tr id="a8">
                             <td></td>
<!--                            <td class="zui-sticky-col">BRINELL HARDNESS <br>AT 0.5 mm <br>FROM CAST <br>SURFACE AFTER <br>GRINDING(5/750 KG LOAD)</td>-->
                            <td style=" display: none;"><input type="text" class="form-control" name="at_point[]" value="BRINELL HARDNESS AT 0.5 mm FROM CAST SURFACE AFTER GRINDING(5/750 KG LOAD)"></td>
                            <td><input type="text" class="form-control cust_spec" name="cust_spec[]" value="200 - 285" readonly="" style="color: black;"></td>
                            <td><input type="text" class="form-control working_spec" name="working_spec[]" value="200 - 285" readonly="" style="color: black;"></td>
                            

                         </tr>
                         <tr id="a9">
                             <td></td>
<!--                            <td class="zui-sticky-col">BRINELL HARDNESS <br>AT 0.5 mm <br>FROM CAST <br>SURFACE AFTER <br>GRINDING(5/750 KG LOAD)</td>-->
                            <td style=" display: none;"><input type="text" class="form-control" name="at_point[]" value="BRINELL HARDNESS AT 0.5 mm FROM CAST SURFACE AFTER GRINDING(5/750 KG LOAD)"></td>
                            <td><input type="text" class="form-control cust_spec" name="cust_spec[]" value="" readonly="" style="color: black;"></td>
                            <td><input type="text" class="form-control working_spec" name="working_spec[]" value="200 - 285" readonly="" style="color: black;"></td>
                            

                         </tr>
                        
                        
                        
                         <tr>
                             <td >Approved By</td>
                             <td><input type="text" class="form-control approved_by " name="approved_by"></td>
                         </tr>
                         <tr>
                             <td>Checked By</td>
                             <td><input type="text" class="form-control approved_by " name="checked_by"></td>
                         </tr>
                        
                    </tbody>
                </table>                                
                                              
            
            
            </div>
            </div>
            </div>
        </div>
    </div>    

    
    
     </div>
<script type="text/javascript" src="<?php echo base_url();?>js/plugins/jquery/jquery.min.js"></script>
<script>
    window.onload=addMore_ipcs("L0");
    var j = 0;
$(".l1_add").on('click', function () {
    var val="L0";
    //var cost=0;
    //cost = document.getElementsByClassName('L1');
    //alert(val);
    //document.getElementById("col_l0").colSpan = "10";
    //$(this).closest('tr').find("td#col_l1").colSpan="2";
addMore_ipcs(val);

//a1(val);
//a2(val);
//a3(val);
//a4(val);
//a5(val);
//a6(val);
//a7(val);
//a8(val);
//a9(val);
});

$(document).ready(function () {
$('body').on("keydown", ".last_ipcs", function (event) {
if (event.keyCode == 13) {
event.preventDefault();
addMore_ipcs();
}
});
});
function addMore_ipcs(val) {
   
$.ajax({
url: "",
success: function (data) {
    if(val!="L0"){
    var cost=0;
    var val_d=0;
    val_d=val;
    val_d= val_d.replace('L','');
    if(val_d==0)
    {var name="L" +0 + "_C";    
    }else{val_d=val_d - 1;
    name="L" + val_d + "_C";  }
    
var  data1;
cost = document.getElementsByClassName(name);
if(cost.length < 5)
{var aa= parseInt(5) -  cost.length;  }
if(aa==1){data1 ="<td style=' border:  none;'><input type='text' class='" + name +"' style='width:0px;display:none;'></td>"; }
else if(aa==2){
var 
data1 ="<td  style=' border:  none;'><input type='text' class='" + name +"' style='width:0px;display:none;'></td>";     
data1 +="<td style=' border:  none;'><input type='text' class='" + name +"' style='width:1px;display:none;'></td>";}
else if(aa==3){
data1 ="<td style=' border:  none;'><input type='text' class='" + name +"' style='width:0px;display:none;'></td>";     
data1 +="<td style=' border:  none;'><input type='text' class='" + name +"' style='width:0px;display:none;'></td>";     
data1 +="<td style=' border:  none;'><input type='text' class='" + name +"' style='width:0px;display:none;'></td>";}
else if(aa==4){
data1 ="<td style=' border:  none;'><input type='text' class='" + name +"' style='width:0px;display:none;'></td>";     
data1 +="<td style=' border:  none;'><input type='text' class='" + name +"' style='width:0px;display:none;'></td>";     
data1 +="<td style=' border:  none;'><input type='text' class='" + name +"' style='width:0px;display:none;'></td>";     
data1 +="<td style=' border:  none;'><input type='text' class='" + name +"' style='width:0px;display:none;'></td>";}
else if(aa==5){
data1 ="<td style=' border:  none;'><input type='text' class='" + name +"' style='width:0px;display:none;'></td>";     
data1 +="<td style=' border:  none;'><input type='text' class='" + name +"' style='width:0px;display:none;'></td>";     
data1 +="<td style=' border:  none;'><input type='text' class='" + name +"' style='width:0px;display:none;'></td>";     
data1 +="<td style=' border:  none;'><input type='text' class='" + name +"' style='width:0px;display:none;'></td>";     
data1 +="<td style=' border:  none;'><input type='text' class='" + name +"' style='width:0px;display:none;'></td>";}

$('#a1').append(data1);
a1(val);
$('#a2').append(data1);
a2(val);
$('#a3').append(data1);
a3(val);
$('#a4').append(data1);
a4(val);
$('#a5').append(data1);
a5(val);
$('#a6').append(data1);
a6(val);
$('#a7').append(data1);
a7(val);
$('#a8').append(data1);
a8(val);
$('#a9').append(data1);
a9(val);


data1 += "<td><input type='text' class='form-control " + val +"_C' name='" + val +"[]' placeholder='" + val + "_C' required='' style='width:60px;'></td>";
$('#l1').append(data1);

j++;}
else
{data1 = "<td><input type='text' class='form-control " + val +"_C' name='" + val +"[]' placeholder='" + val + "_C' required='' style='width:60px;'></td>";
a1(val);
a2(val);
a3(val);
a4(val);
a5(val);
a6(val);
a7(val);
a8(val);
a9(val);
$('#l1').append(data1);    
j++;}

}

});
}

function a1(val) {
$.ajax({
url: "",
success: function (data) {
var data = "<td><input type='text' class='form-control c1' name='a1[]' onkeypress='return isNumber(event)' placeholder='" + val + "'></td>";
$('#a1').append(data);
$('.timepicker').timepicker();
$('#imp_no' + j).focus();
j++;
 
}
});
}

function a2(val) {
$.ajax({
url: "",
success: function (data) {
var data = "<td><input type='text' class='form-control c1' name='a2[]' onkeypress='return isNumber(event)' placeholder='" + val + "'></td>";
$('#a2').append(data);
$('.timepicker').timepicker();
$('#imp_no' + j).focus();
j++;
}
});
}

function a3(val) {
$.ajax({
url: "",
success: function (data) {
var data = "<td><input type='text' class='form-control c1' name='a3[]' onkeypress='return isNumber(event)' placeholder='" + val + "'></td>";
$('#a3').append(data);
$('.timepicker').timepicker();
$('#imp_no' + j).focus();
j++;
}
});
}

function a4(val) {
$.ajax({
url: "",
success: function (data) {
var data = "<td><input type='text' class='form-control c1' name='a4[]' onkeypress='return isNumber(event)' placeholder='" + val + "'></td>";
$('#a4').append(data);
$('.timepicker').timepicker();
$('#imp_no' + j).focus();
j++;
}
});
}

function a5(val) {
$.ajax({
url: "",
success: function (data) {
var data = "<td><input type='text' class='form-control c1' name='a5[]' onkeypress='return isNumber(event)' placeholder='" + val + "'></td>";
$('#a5').append(data);
$('.timepicker').timepicker();
$('#imp_no' + j).focus();
j++;
}
});
}

function a6(val) {
$.ajax({
url: "",
success: function (data) {
var data = "<td><input type='text' class='form-control c1' name='a6[]' onkeypress='return isNumber(event)' placeholder='" + val + "'></td>";
$('#a6').append(data);
$('.timepicker').timepicker();
$('#imp_no' + j).focus();
j++;
}
});
}

function a7(val) {
$.ajax({
url: "",
success: function (data) {
var data = "<td><input type='text' class='form-control c1' name='a7[]' onkeypress='return isNumber(event)' placeholder='" + val + "'></td>";
$('#a7').append(data);
$('.timepicker').timepicker();
$('#imp_no' + j).focus();
j++;
}
});
}

function a8(val) {
$.ajax({
url: "",
success: function (data) {
var data = "<td><input type='text' class='form-control c1' name='a8[]' onkeypress='return isNumber(event)' placeholder='" + val + "'></td>";
$('#a8').append(data);
$('.timepicker').timepicker();
$('#imp_no' + j).focus();
j++;
}
});
}

function a9(val) {
$.ajax({
url: "",
success: function (data) {
var data = "<td><input type='text' class='form-control c1' name='a9[]' onkeypress='return isNumber(event)' placeholder='" + val + "'></td>";
$('#a9').append(data);
$('.timepicker').timepicker();
$('#imp_no' + j).focus();
j++;
}
});
}






var k = 0;
$(".add_l").on('click', function () {
   add_l();
});
function add_l() {
var cost=0;
cost = document.getElementsByClassName('L1');
var show_l=0;
show_l=parseInt(cost.length) - 1;
show_l="show_l" +show_l;

document.getElementById(show_l).disabled = true;
if(parseInt(cost.length)==1)
{
cost=1;    
}
else
{
cost=parseInt(cost.length);    
}

$.ajax({
url: "",
success: function (data) {
var data = '<th colspan="5" id="col_l' + cost + '"><div class="form-group"><label class="col-md-1 control-label">L</label><div class="col-md-4">  <input type="text" class="form-control L1" name="L[]" placeholder="L' + cost +'" required=""><input class="btn btn-warning l1_add show_l' + cost + '" value="C" id="show_l' + cost + '"  style=" width: 50px;" onclick="append_l('+ cost +')"></div></div></th>';
$('#add_l').append(data);
append_l(cost);
//a1("L" + cost);
//a2("L" + cost);
//a3("L" + cost);
//a4("L" + cost);
//a5("L" + cost);
//a6("L" + cost);
//a7("L" + cost);
//a8("L" + cost);
//a9("L" + cost);
//addMore_ipcs("L" + cost);
j++;
}
});
}
function append_l(val)
{
    
    //document.getElementById("col_l1").colSpan = "10";
    
addMore_ipcs("L" + val);
//a1("L" + val);
//a2("L" + val);
//a3("L" + val);
//a4("L" + val);
//a5("L" + val);
//a6("L" + val);
//a7("L" + val);
//a8("L" + val);
//a9("L" + val);
}



$(document).on('keyup', '.L1', function (e) {
var current_value = $(this).val();
$(this).attr('value',current_value);
console.log(current_value);
if ($('.L1[value="' + current_value + '"]').not($(this)).length > 0  ) {
$(this).focus();
if($(this).val())
{ }
else{}
swal(
'Oops...',
'Please Enter Unique L',
'error'
);
}
});

    </script>
   
    

