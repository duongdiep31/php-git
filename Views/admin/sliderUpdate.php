<form action="/mvc/sliderUpdate" method="post"  enctype="multipart/form-data"  >
<input type="hidden" name="id" value="<?= $item->id ?>">
  <div class="mb-3">
    <label for="title" class="form-label">Tiêu Đề</label>
    <input type="text" name="title" class="form-control" value="<?= $item->title  ?>" >
  </div>
  <div class="mb-3">
    <label for="text" class="form-label">Tiêu Đề 2</label>
    <input type="text" name="text" class="form-control" value="<?= $item->text?>" >
  </div>
  <div class="mb-3">
    <label for="images" class="form-label"  >Ảnh Slide</label> <br>
    <input type="file"  name="images" value="<?= $item->images ?>" >
    <input type="hidden" name="image_existed" value="<?php echo $item->images; ?>">

  </div>
  <?php
    if (empty($item->images) === false) {
        ?>
        <div class="form-group">
            <img src="<?php echo getStorageLink($item->images); ?>" width="150" class="img-detail-update">
        </div>
        <?php
    }
    ?>
  
  
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>