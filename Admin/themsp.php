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
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <form class="form-horizontal" action="spthem-xuly.php" method="post"
                        enctype="multipart/form-data">
                        <div class="card-body">
                            <h4 class="card-title">Thêm sản phẩm</h4>
                            <div class="form-group row">
                                <label for="ten" class="col-sm-3 text-end control-label col-form-label">Tên sản
                                    phẩm</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="ten" name="ten">
                                    <?php if (isset($errors["ten"]))
                                        echo "<br><span style='color: red;'>" . $errors["ten"] . "</span><br>"; ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="gia" class="col-sm-3 text-end control-label col-form-label">Giá</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="gia" name="gia">
                                    <?php if (isset($errors["gia"]))
                                        echo "<br><span style='color: red;'>" . $errors["gia"] . "</span><br>"; ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="hinhanh" class="col-sm-3 text-end control-label col-form-label">Hình
                                    ảnh</label>
                                <div class="col-sm-9">
                                    <input type="file" class="form-control" id="hinhanh" name="hinhanh">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="mota" class="col-sm-3 text-end control-label col-form-label">Mô tả</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" id="mota" name="mota"></textarea>
                                    <?php if (isset($errors["mota"]))
                                        echo "<br><span style='color: red;'>" . $errors["mota"] . "</span><br>"; ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 text-end control-label col-form-label">Loại sản phẩm</label>

                                <div class="col-md-9">
                                    <select class="select2 form-select shadow-none" style="width: 100%; height:36px;"
                                        name="id_lsp">

                                        <option value="">Loại sản phẩm 1</option>
                                        <option value="">Loại sản phẩm 2</option>

                                    </select>
                                    <?php if (isset($errors["id_lsp"]))
                                        echo "<br><span style='color: red;'>" . $errors["id_lsp"] . "</span><br>"; ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 text-end control-label col-form-label">Trạng thái</label>
                                <?php if (isset($errors["trangthai"]))
                                    echo "<br><span style='color: red;'>" . $errors["trangthai"] . "</span><br>"; ?>
                                <div class="col-md-9">
                                    <select class="select2 form-select shadow-none" style="width: 100%; height:36px;"
                                        name="trangthai">
                                        <option value="1">Hiển thị</option>
                                        <option value="0">Ẩn</option>

                                    </select>
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
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
<?
include '../Admin/view/footer.php';
?>