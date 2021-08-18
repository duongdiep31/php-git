<form action="/mvc/insertInfo" method="post" enctype="multipart/form-data">
  
  <div class="form-group">
    <label for="email">Email</label>
    <input type="text" class="form-control" name="email"  placeholder="Email">
  </div>
  <div class="form-group">
    <label for="content ">Content</label>
    <input type="text" class="form-control" name="content"  placeholder="Content">
  </div>
  <div class="form-group">
    <label for="sdt">Số Điện Thoại</label>
    <input type="number" class="form-control" name="sdt"  placeholder="Email">
  </div>
  <div class="form-group">
      <label for="logo">Logo</label>
      <input type="file" class="form-control" name="logo"  >
    </div> 
    <div class="form-group">
      <label for="logo_content">Logo Content</label>
      <input type="file" class="form-control" name="logo_content"  >
    </div> 


  <button type="submit" class="btn btn-primary">Submit</button>
</form>
