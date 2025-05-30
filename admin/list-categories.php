<?php include('includes/header.php') ?>


<div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h2 class="m-0 font-weight-bold text-primary">Danh sách danh mục sản phẩm</h2>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Danh mục</th>
                            <th>Slug</th>
                            <th>Trạng thái</th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Danh mục</th>
                            <th>Slug</th>
                            <th>Trạng thái</th>
                            <th>Thao tác</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php 
    
                            require("../db/conn.php"); 
                            $sql_str = "select * from categories order by name";
                            $result = mysqli_query($conn, $sql_str);
                            while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                            <tr>
                                <td><?= $row['name']?></td>
                                <td><?= $row['slug']?></td>
                                <td><?= $row['status']?></td>
                                <td>Xóa | Chỉnh sửa</td>
                            </tr>
                        <?php
                            }
                            
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php') ?>