<?php include('includes/header.php') ?>


<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Thêm sản phẩm</h1>
                        </div>
                        <form class="user" method="post" action="add-products-success.php">
                            <div class="form-group row">
                                <div class="col-sm-12 mb-3">
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="Nhập tên sản phẩm">
                                </div>
                                <div class="col-sm-12 mb-3">
                                    <textarea class="form-control" id="sumary" name="sumary"
                                        placeholder="Nhập mô tả ngắn"></textarea>
                                </div>
                                <div class="col-sm-12 mb-3">
                                    <textarea class="form-control" id="description" name="description"
                                        placeholder="Nhập mô tả sản phẩm"></textarea>
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <label for="category">Danh mục:</label>
                                    <select class="form-control" name="category" id="category">
                                        <option value="">Chọn danh mục</option>
                                        <?php 
                                            require("../db/conn.php"); 
                                            $sql_str = "select * from categories order by name";
                                            $result = mysqli_query($conn, $sql_str);
                                            while ($row = mysqli_fetch_assoc($result)) {
                                        ?>
                                            <option value="<?= $row['name']; ?>"><?= $row['name']; ?></option>
                                        <?php
                                            }
                                        ?>
                                    </select>
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <label for="brand">Thương hiệu:</label>
                                    <select class="form-control" name="brand" id="brand">
                                        <option value="">Chọn thương hiệu</option>
                                        <?php 
                                            require("../db/conn.php"); 
                                            $sql_str = "select * from brands order by name";
                                            $result = mysqli_query($conn, $sql_str);
                                            while ($row = mysqli_fetch_assoc($result)) {
                                        ?>
                                            <option value="<?= $row['name']; ?>"><?= $row['name']; ?></option>
                                        <?php
                                            }
                                        ?>
                                    </select>
                                </div>
                                <div class="col-sm-4 mb-3">
                                    <label for="stock">Kho hàng:</label>
                                    <select class="form-control" name="stock" id="stock">
                                        <option value="Còn hàng">Còn hàng</option>
                                        <option value="Hết hàng">Hết hàng</option>
                                    </select>
                                </div>
                                <div class="col-sm-4 mb-3">
                                    <label for="quantity">Số lượng:</label>
                                    <input type="text" class="form-control" id="quantity" name="quantity"
                                        placeholder="Nhập số lượng">
                                </div>
                                <div class="col-sm-4 mb-3">
                                    <label for="price">Giá:</label>
                                    <input type="text" class="form-control" id="price" name="price"
                                        placeholder="Nhập giá">
                                </div>
                                <div class="col-sm-4 mb-3">
                                    <label for="discount_price">Giá khuyến mãi:</label>
                                    <input type="text" class="form-control" id="discount_price" name="discount_price"
                                        placeholder="Nhập giá">
                                </div>
                            </div>
                            <button class="btn btn-primary btn-user btn-block">
                                Thêm mới
                            </button>
                            <hr>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>



<?php include('includes/footer.php') ?>