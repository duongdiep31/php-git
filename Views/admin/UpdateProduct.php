<form action="/mvc/changeDataProduct" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $item->id ?>">
  <div class="form-group">
    <label for="name">Name</label>
    <input type="Text" class="form-control" name="name"  value="<?= $item->name; ?>">
  </div>
  <div class="form-group">
    <label for="price">Price</label>
    <input type="number" class="form-control" name="price"  value="<?= $item->price; ?>">
  </div>
  <div class="form-group">
    <label for="description">description</label>
    <input type="text" class="form-control" name="description"  value="<?= $item->description; ?>">
  </div>
  <div class="form-group">
    <label for="description2">description2</label>
    <input type="text" class="form-control" name="description2"  value="<?= $item->description2; ?>">
  </div>
  <div class="form-group">
    <label for="discount">discount</label>
    <input type="number" class="form-control" name="discount"  value="<?= $item->discount; ?>">
  </div>
  <div class="form-group">
    <label for="quantity">quantity</label>
    <input type="number" class="form-control" name="quantity"  value="<?= $item->quantity; ?>">
  </div>

 



  <div class="form-group">
    <label for="image">image</label>
    <input type="file" class="form-control" name="image" value="<?= $item->image; ?>">
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
