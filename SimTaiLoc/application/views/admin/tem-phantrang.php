

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>SIMTAILOC</title>
    <script type="text/javascript" src="<?php echo base_url(); ?>vendor/bootstrap.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>1.js"></script>
    <link rel="stylesheet" href="<?php echo base_url(); ?>vendor/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>vendor/font-awesome.css">
    
    <link rel="stylesheet" href="<?php echo base_url(); ?>1.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>vendor/event.js"> 
    <link rel="stylesheet" href="<?php echo base_url(); ?>vendor/style_admin_update123.css"> 
</head>
<body>


</div>
</div>


<div  class="bodyy ">

    <div class="header" style="text-align: left;padding-top: 12px; background: #e1c0f1;">
        SimTaiLoc

    </div>
    <div class="connten">
        <div class="row">
            <!-- <div class=" col-md-2 menu1">
                <div class="vertical-menu">
                    <a href="showData" class="active">SimTaiLoc</a>
                    <a href="showData">Quản Lý Sim</a>
                    <a href="http://localhost:8080/bai1dulieu/index.php/showData/adminOrder">Quản Lý Đơn Hàng</a>
                    
                </div>      
            </div> -->
            <?php require('title_menuoder.php') ?>
            <div class="col-md-8 ">


                <!-- khung  -->
                <div class="container">


                    <div class="row">


                        <section>

                            <div class="container fixDisplay">
                                <div class="row">
                                    <!-- ben trai -->
                                    <div class=" col-md-1">



                                    </div>
                                    <!-- het ben trai -->

                                    <!-- o giua -->
                                    <div class="col-md-11">
                                        <!-- tìm kiếm    -->    
                                        <div style="margin-top: 25px;">
                                            <h3 class="text-xs-center"> Thông Tin Sim Đang Bán</h3> 
                                        </div>  
                                        <br>

                                        <div style="margin-top: 20px;">
                                            <!-- them moi -->
                                            <div class="container">


                                                <!-- Button to Open the Modal -->
                                                <button type="button" class="btn btn-primary centeradd" data-toggle="modal" data-target="#myModal">
                                                    Thêm 
                                                </button>
                                                <!-- The Modal -->
                                                <div class="modal fade " id="myModal">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">


                                                            <div class="modal-header">
                                                                <h4 class="modal-title">Thêm Mới Số Sim</h4>
                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                            </div>

                                                           
                                                                <div class="modal-body">


                                                                    <div class="card">
                                                                        <div class="card-block">
                                                                            <fieldset class="form-group">
                                                                                <label for="formGroupExampleInput"><b>Số Sim:</b> </label>
                                                                                <input name="so" id="so" type="text" class="form-control" id="formGroupExampleInput" maxlength="10"  placeholder="vd: 0965665666">      
                                                                            </fieldset>

                                                                            <fieldset class="form-group">
                                                                                <label for="formGroupExampleInput1"><b>Giá Sim:</b></label>
                                                                                <input name="gia" id="gia" type="text" class="form-control" id="formGroupExampleInput1" placeholder="vd: 66666">
                                                                            </fieldset> 
                                                                            <fieldset class="form-group">
                                                                                <form>
                                                                                    <label for="nhamang"><b> Chọn nhà mạng (chỉ được chọn một): </b></label>
                                                                                    <select class="form-control" id="nhamang">
                                                                                        <option>Viettel</option>
                                                                                        <option>Vinaphone</option>
                                                                                        <option>Mobifone</option>
                                                                                        <option>Vietnamobile</option>
                                                                                    </select>
                                                                                </form>
                                                                


                                                                </fieldset>

                                                            </div>

                                                        </div>

                                                    </div>


                                                    <div class="modal-footer">
                                                        <input  type="submit" class="btn btn-success  nut nutxulyAjax " name="" value="Thêm" accept="" data-dismiss="modal"  >                           
                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Huỷ</button>
                                                    </div>
                                              
                                            </div>
                                        </div>
                                    </div>  

                                    <!-- </form> -->


                                </div>

                                <!-- het them -->



                            </div>
                            <!-- kết thúc tìm kiếm -->

                            <table class="table table-bordered table-striped" style="margin-top: 20px;">
                                <thead class="thead-dark">
                                    <tr style="background: #bebeeb">

                                        <th style="text-align: center; width: 253.5px" scope="">Số Sim</th>
                                        <th style="text-align: center;width: 253.5px" scope="">Giá Bán</th>
                                        <th style="text-align: center; width: 253.5px" scope="">Nhà Mạng</th>
                                        <th style="text-align: center;width: 253.5px" scope="">Xử Lý</th>

                                    </tr>
                                </thead>

                                <tbody class="thead">
                                   <?php foreach($post->result() as $row): ?>    


                                       <tr>
                                           <td> <?php echo $row->so; ?></td>
                                           <td><?php echo $row->gia; ?></td>
                                           <td> <?php echo $row->nhamang; ?></td>
                                           <td style="text-align: center;">  
                                            <a href="<?php echo base_url(); ?>index.php/phantrang/deleteData/<?= $row->id; ?> " class="btn btn-danger xoa btn-sm" title=" xóa sim đang bán" onclick="return confirm('Bạn chắc chắn muốn gỡ xuống khỏi của hàng?');"> 
                                            <i class="fa fa-trash"></i> 
                                        </a> | 


                                        <button type="button" class="btn btn-warning btns btn-sm" data-toggle="modal" data-target="#<?= $row->id; ?>" title=" Sửa sim đang bán" >

                                            <i class="fa fa fa-edit"></i>

                                        </button>


                                    </td>

                                </tr> 






                            <?php endforeach;?>



                        </tbody>

                    </table>

                    <div class="paging"><?php echo $paginator; ?></div>        

                    <!-- het o giua -->

                    <!-- ben phai -->

                    <div class=" col-md-0 ">

                        <!-- het ben phai -->
                    </div>
                </div>
            </div>
        </section>



    </div>
</div>


<!-- het khung -->


</div>

</div>
</div>



</div>







<!-- phan sua ajax -->
 <?php foreach($post->result() as $row): ?>
    <div class="container">


        <!-- Button to Open the Modal -->
        
        <!-- The Modal -->






        <form action="<?php echo base_url(); ?>index.php/showData/updateData" method="post" enctype="multidata/form-data"> 
            <div class="modal fade " id="<?=$row->id; ?>">
                <div class="modal-dialog">
                    <div class="modal-content">


                        <div class="modal-header">
                            <h4 class="modal-title">Sửa Thông Tin: <?= $row->so; ?></h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>


                        <div class="modal-body">


                            <div class="card">
                                <div class="card-block">
                                    <fieldset class="form-group">
                                        
                                        <input name="id" type="text" class="form-control" id="formGroupExampleInput1" value="<?= $row->id; ?>" hidden>
                                    </fieldset>
                                    <fieldset class="form-group">
                                        <label for="formGroupExampleInput"><b>Số Sim:</b> </label>
                                        <input name="so" id="so" type="text" class="form-control" id="formGroupExampleInput" value="<?= $row->so; ?>">       
                                    </fieldset>

                                    <fieldset class="form-group">
                                        <label for="formGroupExampleInput1"><b>Giá Sim:</b></label>
                                        <input name="gia" id="gia" type="text" class="form-control" id="formGroupExampleInput1" value="<?= $row->gia;?>">
                                    </fieldset> 
                                    <fieldset class="form-group">
                                        <form>
                                            
                                            
                                            <label for="nhamang"><b> chọn nhà mạng (Chỉ được chọn một):</b> </label>
                                            <select class="form-control" name="nhamang" id="nhamang">
                                                <option> <?= $row->nhamang; ?></option>
                                                <option>Viettel</option>
                                                <option>Vinaphone</option>
                                                <option>Mobifone</option>
                                                <option>Vietnamobile</option>
                                            </select>
                                        </form> 
                                        


                                    </fieldset>

                                </div>

                            </div>

                        </div>


                        <div class="modal-footer">
                            <input type="submit" class="btn btn-success " value="Lưu" title="lưu lại" onclick="return confirm('Lưu?');"> 
                                               
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Huỷ</button>
                        </div>

                    </div>
                </div>
            </div>  

            <!-- </form> -->


        </div>

        
    </form> 
<?php endforeach ?>
<!-- het sua ajax -->

































<script type="text/javascript">
    $('.nutxulyAjax').click(function(event) {
        /* Act on the event */
        
        $.ajax({
            url: 'addData/addData_ajax',
            type: 'POST',
            dataType: 'json',
            data: {
                so:$('#so').val(), 
                gia:$('#gia').val(), 
                nhamang:$('#nhamang').val(), 
            },
        })
        .done(function() {
            console.log("success");

        })
        .fail(function() {
            console.log("error");
        })
        .always(function() {
            console.log("complete");
            noidung = '<tr>';
            noidung += '<td>'+$('#so').val()+'</td>';
            noidung += '<td>'+$('#gia').val()+'</td>';
            noidung += '<td>'+$('#nhamang').val()+'</td>';
            noidung+='<td style="text-align: center; ">';
            noidung+='<a href="showData/deleteData/<?= $value['id'] ?> " class="btn btn-danger btn-sm xoa" title=" xóa sim đang bán" onclick="return confirm("Bạn chắc chắn muốn gỡ xuống khỏi của hàng?");"> ';
            noidung+='<i class="fa fa-trash"></i>';
            noidung+='</a> | ';
            noidung+='<a href="showData/editSim/<?= $value['id'] ?> " class="btn btn-warning xoa btn-sm" title="sửa thông tin sim">';
            noidung+='<i class="fa fa fa-edit"> </i>';
            noidung+='</a>';
            noidung+='</td>';
        
            noidung +='</tr>';

            $('.thead').append(noidung);

            

        })
    });
</script>

</body>

</html>