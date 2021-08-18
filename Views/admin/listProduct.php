<style>
  .image_new{
    width: 200px;
    height: 100px;
    object-fit: cover;
  }
</style>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">name</th>
      <th scope="col">price</th>
      <th scope="col">discount</th>
      <th scope="col">quantity</th>
      <th scope="col">image</th>
      <th>Thể Loại</th>    
      <th scope="col" width='200'>action</th>


    </tr>
  </thead>
  <tbody>
    <?php 
    $stt = 1;
        foreach($products as $item): 
        
    ?>
        <tr>
            <th scope="row"><?=$stt++?></th>
            <td><?= $item->name; ?></td>
            <td><?= $item->price; ?></td>
            <td><?= $item->discount; ?></td>
            <td><?= $item->quantity; ?></td>
            <td><img src="<?=getStorageLink( $item->image); ?>" class="image_new" alt=""></td>
            <td><?= $item->categoryName(); ?></td>
            
            <td>
                <a href="/mvc/productUpdate&id=<?=$item->id?>" class="btn btn-success">Change</a>
                <a href="/mvc/productDelete&id=<?=$item->id?>" class="btn btn-danger">Remove</a>
            </td>
        </tr>
    <?php endforeach; ?>
    
  </tbody>
</table>
<a href="/mvc/productAdd" class="btn btn-warning">Create</a>