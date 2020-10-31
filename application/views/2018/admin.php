<!DOCTYPE html>
<!-- saved from url=(0064)http://47.94.251.85/WEShare/index.php/Admin/File/fileManage.html -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Admin</title>
    <base href="<?php echo base_url().'style/' ?>"/>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<link rel="stylesheet" type="text/css" href="demo.css">
</head>

<body class="flat-blue">
   <!-- Main Content -->

	                                <div class="card-header">
	                                    <div class="card-title">
	                                    <div class="title">列表</div>
	                                    </div>
	                                </div>
	                                <div class="card-body">
	                                    <div id="" class="dataTables_wrapper form-inline dt-bootstrap">
										<div class="top">
										
										
									<table id="example" class="datatable table table-striped dataTable" cellspacing="0" width="100%" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info" style="width: 100%;">
	                                        

											<thead>
	                                            <tr role="row">
													<th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="ID: activate to sort column descending" style="width: 30px;">ID</th>
													<th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="姓名: activate to sort column ascending" style="width: 397px;">姓名</th>
													<th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="邮箱: activate to sort column ascending" style="width: 80px;">邮箱</th>
													<th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="手机号: activate to sort column ascending" style="width: 203px;">手机号</th>
													<th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="班级: activate to sort column ascending" style="width: 133px;">班级</th>
													<th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="简介: activate to sort column ascending" style="width: 203px;">简介</th>
													<th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="报名时间: activate to sort column ascending" style="width: 133px;">报名时间</th>
													<th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="操作: activate to sort column ascending" style="width: 48px;">操作</th>
												</tr>
	                                        </thead>
	                                        <tfoot>
	                                            <tr><th rowspan="1" colspan="1">ID</th><th rowspan="1" colspan="1">姓名</th><th rowspan="1" colspan="1">邮箱</th><th rowspan="1" colspan="1">手机号</th><th rowspan="1" colspan="1">班级</th><th rowspan="1" colspan="1">简介</th><th rowspan="1" colspan="1">时间</th><th rowspan="1" colspan="1">查看</th></tr>
	                                        </tfoot>
	                                        <tbody>
	                                        	<!--获取数据库传来的数据-->
	                                        	


													<?php foreach($list as $v):?>
														<tr role="row" class="odd">
														<td class="sorting_1"> <?php echo $v["id"]?> </td>
														<td> <?php echo $v["name"]?> </td>
														<td> <?php echo $v["email"]?> </td>
														<td> <?php echo $v["phone"]?></td>
														<td> <?php echo $v["subject"]?>  </td>
														<td> <?php echo $v["message"]?>  </td>
														<td> <?php echo $v["time"]?>  </td>
														<th><a style="cursor: pointer;"  onclick="alert('<?php echo $v["message"]?>')" >查看</a></th>
														</tr>
													<?php endforeach;?>
											</tbody>
									</table>	
											
											
											
										</div>
	                                </div>
	                            </div>


			
        <!-- Javascript Libs -->
		<script type="text/javascript" src="jquery.js"></script>
        <script type="text/javascript" src="demo.js">
			
			$(document).ready(function() {				
				$('#example').DataTable();
			} );
		
		</script>



</body></html>