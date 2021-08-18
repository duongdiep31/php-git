

<form action="/mvc/updateInfo" method="post" enctype="multipart/form-data">
<input type="hidden" name="id" value="<?= $item->id ?>">

  <div class="form-group">
  
    <label for="email">Email</label>
    <input type="Text" class="form-control" value="<?= $item->email?>" name="email"   ">
  </div> 
  <div class="form-group">
  
  <label for="sdt">Số Điện Thoại</label>
  <input type="Text" class="form-control" value="<?= $item->sdt?>" name="sdt"  ">
</div> 
<div class="form-group">
  
  <label for="content   ">Content</label>
  <input type="Text" class="form-control" value="<?= $item->content?>" name="content" >
</div> 

<div class="mb-3">
    <label for="logo" class="form-label"  >Logo</label> <br>
    <input type="file"  name="logo" value="<?= $item->logo ?>" >
    <input type="hidden" name="image_existed" value="<?php echo $item->logo; ?>">

  </div>
  <?php
    if (empty($item->logo) === false) {
        ?>
        <div class="form-group">
            <img src="<?php echo getStorageLink($item->logo); ?>" width="150" class="img-detail-update">
        </div>
        <?php
    }
    ?>


<div class="mb-3">
    <label for="logo_content" class="form-label"  >Logo Content</label> <br>
    <input type="file"  name="logo_content" value="<?= $item->logo ?>" >
    <input type="hidden" name="image_existed" value="<?php echo $item->logo_content; ?>">

  </div>
  <?php
    if (empty($item->logo_content) === false) {
        ?>
        <div class="form-group">
            <img src="<?php echo getStorageLink($item->logo_content); ?>" width="150" class="img-detail-update">
        </div>
        <?php
    }
    ?>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
