
<div class="container mt-5">
<div class="card" >
  <div class="card-header">
    Product list
  </div>
  <div class="card-body">
    <a href="index.php?page=book-create" type="button" class="btn btn-primary mb-3">Add New Product </a>
    
   
  <table class="table">
  <thead>

    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
    
      <th scope="col">Category</th>
<div class="container mt-5">
<div class="card" >
  <div class="card-header">
    Product list
  </div>
  <div class="card-body">
    <a href="index.php?page=book-create" type="button" class="btn btn-primary mb-3">Add New Product </a>
    
   
  <table class="table">
  <thead>

    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
    
      <th scope="col">Loại</th>
      <th scope="col">Giá</th>
      <th scope="col">Số lượng</th>
      
      <th scope="col">Mô tả</th>
      
    </tr>
  </thead>
  <tbody>
      <?php foreach ($products as $product): ?>
    <tr>
      <th><?php echo $product['id'] ?></th>
      <td><?php echo $product['name'] ?></td>
      
      <td><?php echo $product['sector'] ?></td>
      <td><?php echo $product['price'] ?></td>
      <td><?php echo $product['quantity'] ?></td>
      <td><?php echo $product['description'] ?></td>
     
      <td><a href="index.php?page=book-update&id=<?php echo $product['id']?>" type="button" class="btn btn-warning">Edit</a></td>
     <td><a onclick="return confirm('Ban chac muon xoa ?')" href="index.php?page=book-delete&id=<?php echo $product['id']?>" type="button" class="btn btn-danger">Delete</a></td> 
    </tr>
   <?php endforeach; ?>
  </tbody>
</table>
  </div>
</div>
</div>      
      
    </tr>
  </thead>
  <tbody>
      <?php foreach ($products as $product): ?>
    <tr>
      <th><?php echo $product['id'] ?></th>
      <td><?php echo $product['name'] ?></td>
      
      <td><?php echo $product['sector'] ?></td>
      <td><?php echo $product['price'] ?></td>
      <td><?php echo $product['quantity'] ?></td>
      <td><?php echo $product['description'] ?></td>
     
      <td><a href="index.php?page=book-update&id=<?php echo $product['id']?>" type="button" class="btn btn-warning">Edit</a></td>
     <td><a onclick="return confirm('Ban chac muon xoa ?')" href="index.php?page=book-delete&id=<?php echo $product['id']?>" type="button" class="btn btn-danger">Delete</a></td> 
    </tr>
   <?php endforeach; ?>
  </tbody>
</table>
  </div>
</div>
</div>      