<style>
  .image_new{
    width: 400px;
    height: 300px;
    object-fit: cover;
  }
</style>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Image</th>
      <th scope="col">action</th>

    </tr>
  </thead>
  <tbody>
  <?php 
    $stt = 1;
        foreach($cates as $item): 
        
    ?>
    <tr>
            <th scope="row"><?=$stt++?></th>
            <td><?= $item->namecate; ?></td>
            
            <td><img src="<?=getStorageLink( $item->image); ?>" class="image_new" alt=""></td>
            <td>
                <a href="/mvc/changeCate&id=<?=$item->id?>" class="btn btn-success">Change</a>
                <a href="/mvc/deleteCate&id=<?=$item->id?>" class="btn btn-danger">Remove</a>
            </td>
        </tr>
    <?php endforeach; ?>
  
  </tbody>
</table>
<a href="/mvc/addCate" class="btn btn-warning">Create</a>