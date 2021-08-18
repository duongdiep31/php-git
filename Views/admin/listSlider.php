<style>
  .image_new{
    width: 400px;
    height: 130px;
    object-fit: cover;
  }
</style>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Tiêu Đề</th>
      <th scope="col">Text</th>
      <th scope="col">Ảnh</th>
      <th scope="col">action</th>

    </tr>
  </thead>
  <tbody>
  <?php 
    $stt = 1;
        foreach($slider as $item): 
        
    ?>
    <tr>
      <th scope="row">1</th>
      <td><?= $item->title; ?></td>
      <td><?= $item->text?></td>
      <td><img src="<?=getStorageLink( $item->images); ?>" class="image_new" alt=""></td>
      <td>
                <a href="/mvc/sliderChange&id=<?=$item->id?>" class="btn btn-success">Change</a>
                <a href="/mvc/sliderDelete&id=<?=$item->id?>" class="btn btn-danger">Remove</a>
            </td>
    </tr>
    <?php endforeach; ?>
  
  </tbody>
</table>
<a href="/mvc/sliderAdd" class="btn btn-warning">Create</a>