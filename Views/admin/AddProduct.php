
<form action="/mvc/insertDataProduct" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="name">Tên Sản Phẩm</label>
    <input type="Text" class="form-control" name="name"  placeholder="Enter name">
  </div>
  <div class="form-group">
    <label for="price">Giá</label>
    <input type="number" class="form-control" name="price"  placeholder="Password">
  </div>
  <div class="form-group">
    <label for="description">Chi Tiết</label>
    <input type="text" class="form-control" name="description"  placeholder="Password">
  </div>
  <div class="form-group">
    <label for="description2">Giới Thiệu</label>
    <input type="text" class="form-control" name="description2"  placeholder="Password">
  </div>
  <div class="form-group">
    <label for="discount">Giảm Giá</label>
    <input type="number" class="form-control" name="discount"  placeholder="Password">
  </div>
  <div class="form-group">
    <label for="quantity">Số Lượng</label>
    <input type="number" class="form-control" name="quantity"  placeholder="Password">
  </div>
  <div class="form-group">
    <label for="image">Ảnh Sản Phẩm</label>
    <input type="file" class="form-control" name="image"  placeholder="Password">
  </div>

      
  <div class="form-group">
    <label for="cate_id">danh mục</label>
    <select name="cate_id" id="">

<?php foreach($cate as $item): ?>

      <option value="<?= $item->id;?>"><?= $item->namecate?></option>
     <?php  endforeach; ?>
    </select>
  </div>
 


  <button type="submit" class="btn btn-primary">Submit</button>
</form>
