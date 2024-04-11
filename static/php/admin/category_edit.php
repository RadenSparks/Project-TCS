<form action="?act=dashboard&pg=category_edit&id=<?php echo isset($_GET['id']) ? $_GET['id'] : ''; ?>" method="post" enctype="multipart/form-data">
    <div class="main-content">
        <h2 class="tittle-cate-edit">Category edit</h2>
        <hr>
        <div class="row-content">
            <div class="col-md-5">
                <div>
                    <label class="form-label" for="categoryName">Category Name</label>
                    <input class="form-control" type="text" name="categoryName" id="categoryName" value="<?php echo isset($category) ? $category['genrename'] : ''; ?>">
                </div>
            </div>
        </div>
        <div class="text-right"> 
            <br>
            <hr>
            <div style="padding-bottom: 30px;"></div>
            <input  type="submit" name="editCategory_submit" value="Edit" class="btn-danger m-5" >
        </div>
    </div>
</form>
