
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
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <form class="form-horizontal" action="themloaisp-xuly.php" method="POST">
                        <div class="card-body">
                            <h4 class="card-title">Thêm loại sản phẩm</h4>
                            <div class="form-group row">
                                <label for="ten" class="col-sm-3 text-end control-label col-form-label">Tên</label>
                                <div class="col-sm-9">
                                    <input type="text"  class="form-control" id="ten" placeholder="Nhập tên loại sản phẩm..." name="ten">
                                    <?php if (isset($errors["ten"]))
                                        echo "<br><span style='color: red;'>" . $errors["ten"] . "</span><br>"; ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 text-end control-label col-form-label">Trạng thái</label>
                                <div class="col-md-9">
                                    <select  class="select2 form-select shadow-none" style="width: 100%; height:36px;" name="trangthai">
                                        <option value="1">Hiển thị</option>
                                        <option value="0">Ẩn</option>

                                    </select>
                                    <?php if (isset($errors["trangthai"]))
                                    echo "<br><span style='color: red;'>" . $errors["trangthai"] . "</span><br>"; ?>
                                </div>
                            </div>
                        </div>
                        <div class="border-top">
                            <div class="card-body">
                                <button type="submit" class="btn btn-primary" name="them">Thêm</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>

        </div>

        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right sidebar -->
        <!-- ============================================================== -->
        <!-- .right-sidebar -->
        <!-- ============================================================== -->
        <!-- End Right sidebar -->
        <!-- ============================================================== -->
    </div>
<?
include '../Admin/view/footer.php';
?>
