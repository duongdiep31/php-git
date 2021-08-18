<style>
  .image_new{
    width: 100px;
    height: 50px;
    object-fit: cover;
  }
</style>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Logo</th>
      <th scope="col">Logo Content</th>

      <th scope="col">email</th>
      <th scope="col">content</th>
      <th scope="col">số điện thoại</th> 
      <th scope="col" width='200'>action</th>


    </tr>
  </thead>
  <tbody>
    <?php 
    $stt = 1;
        foreach($info as $item): 
        
    ?>
        <tr>
            <th scope="row"><?=$stt++?></th>
            <td><img src="<?=getStorageLink( $item->logo); ?>" class="image_new" alt=""></td>
            <td><img src="<?=getStorageLink( $item->logo_content); ?>" class="image_new" alt=""></td>

            <td><?= $item->email; ?></td>
            <td><?= $item->content; ?></td>
            <td><?= $item->sdt; ?></td>
          
            
            <td>
                <a href="/mvc/changeInfo&id=<?=$item->id?>" class="btn btn-success">Change</a>
                <a href="/mvc/deleteInfo&id=<?=$item->id?>" class="btn btn-danger">Remove</a>
            </td>
        </tr>
    <?php endforeach; ?>
    
  </tbody>
</table>
<a href="/mvc/addinfo" class="btn btn-warning">Create</a>