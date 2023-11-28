<?
include '../Admin/view/header.php';
include '../Admin/view/nav.php';
?>
                <div class="app-wrapper">
	    <div class="app-content pt-3 p-md-3 p-lg-4">
		    <div class="container-xl">
			    
			    <div class="row g-3 mb-4 align-items-center justify-content-between">
				    <div class="col-auto">
			            <h1 class="app-page-title mb-0">Sản Phẩm</h1>
				    </div>
				    <div class="col-auto">
					     <div class="page-utilities">
						    <div class="row g-2 justify-content-start justify-content-md-end align-items-center">
							    <div class="col-auto">
								    <form class="table-search-form row gx-1 align-items-center">
					                    <div class="col-auto">
					                        <input type="text" id="search-orders" name="searchorders" class="form-control search-orders" placeholder="Search">
					                    </div>
					                    <div class="col-auto">
					                        <button type="submit" class="btn app-btn-secondary">Search</button>
					                    </div>
					                </form>
					                
							    </div><!--//col-->
							   
							   
									</a>
							    </div>
						    </div><!--//row-->
					    </div><!--//table-utilities-->
			    </div><!--//row-->
			   
			    
			  
				
				<div class="tab-content" id="orders-table-tab-content">
			        <div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
					    <div class="app-card app-card-orders-table shadow-sm mb-5">
						    <div class="app-card-body">
							    <div class="table-responsive">
							        <table class="table app-table-hover mb-0 text-left">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Hình ảnh</th>
                                        <th>Tên</th>
                                        <th>Giá</th>
                                        <th>Trạng thái</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>

                                            <tr>
                                                <td>0001</td>
                                                <td>
                                                    <img src="themsp.php" alt="" width="100px">

                                                </td>
                                                <td>Sản phẩm 1</td>
                                                <td><?= number_format(45000)  ?></td>
                                                <td>Hiển thị</td>
                                                <td>
                                                    <a href="themsp.php">Sửa</a>
                                                </td>
                                            </tr>
                                            
                                            <tr>
                                                <td>0002</td>
                                                <td>
                                                    <img src="themsp.php" alt="" width="100px">

                                                </td>
                                                <td>Sản phẩm 2</td>
                                                <td><?= number_format(45000)  ?></td>
                                                <td>Hiển thị</td>
                                                <td>
                                                    <a href="themsp.php">Sửa</a>
                                                </td>
                                            </tr>
                                            
                                            <tr>
                                                <td>0003</td>
                                                <td>
                                                    <img src="themsp.php" alt="" width="100px">

                                                </td>
                                                <td>Sản phẩm 3</td>
                                                <td><?= number_format(45000)  ?></td>
                                                <td>Hiển thị</td>
                                                <td>
                                                    <a href="">Sửa</a>
                                                </td>
                                            </tr>
                                            
                                            <tr>
                                                <td>0004</td>
                                                <td>
                                                    <img src="themsp.php" alt="" width="100px">

                                                </td>
                                                <td>Sản phẩm 4</td>
                                                <td><?= number_format(45000)  ?></td>
                                                <td>Hiển thị</td>
                                                <td>
                                                    <a href="themsp.php">Sửa</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>0005</td>
                                                <td>
                                                    <img src="" alt="" width="100px">

                                                </td>
                                                <td>Sản phẩm 5</td>
                                                <td><?= number_format(45000)  ?></td>
                                                <td>Hiển thị</td>
                                                <td>
                                                    <a href="themsp.php">Sửa</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>0006</td>
                                                <td>
                                                    <img src="themsp.php" alt="" width="100px">

                                                </td>
                                                <td>Sản phẩm 6</td>
                                                <td><?= number_format(45000)  ?></td>
                                                <td>Hiển thị</td>
                                                <td>
                                                    <a href="themsp.php">Sửa</a>
                                                </td>
                                            </tr>
										</tbody>
									</table>
						        </div><!--//table-responsive-->
						    </div><!--//app-card-body-->		
						</div><!--//app-card-->
			        </div><!--//tab-pane-->
				</div><!--//tab-content-->
				
				
			    
		    </div><!--//container-fluid-->
	    </div><!--//app-content-->























<?
include '../Admin/view/footer.php';
?>