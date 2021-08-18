<form action="/mvc/updateCate" method="post" enctype="multipart/form-data">
<input type="hidden" name="id" value="<?= $item->id ?>">

  <div class="form-group">
    <label for="namecate">Tên Danh Mục</label>
    <input type="Text" class="form-control" value="<?= $item->namecate?>" name="namecate"  placeholder="Enter name">
  </div> 
  <div class="mb-3">
    <label for="image" class="form-label"  >Ảnh Danh mục </label> <br>
    <input type="file"  name="image" value="<?= $item->image ?>" >
    <input type="hidden" name="image_existed" value="<?php echo $item->image; ?>">

  </div>
  <?php
    if (empty($item->image) === false) {
        ?>
        <div class="form-group">
            <img src="<?php echo getStorageLink($item->image); ?>" width="150" class="img-detail-update">
        </div>
        <?php
    }
    ?>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
