
<div class="login" style="padding: 20px;">
  <form role="form" action="http://localhost:8080/online-shop-php/editItem.php" method="POST">
    <!-- id -->
    <div class="form-group row">
      <label for="inputId" class="col-sm-2 col-form-label">ID</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" name="id" value="{$id}" readonly>
      </div>
    </div>
    <!-- Name -->
    <div class="form-group row">
      <label for="inputName" class="col-sm-2 col-form-label">Name</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" name="name" value="{$name}">
      </div>
    </div>
    <!-- Price -->
    <div class="form-group row">
      <label for="inputPrice" class="col-sm-2 col-form-label">Price</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" name="price" value="{$price}">
      </div>
    </div>
    <!-- Description -->
    <div class="form-group row">
      <label for="inputDescription" class="col-sm-2 col-form-label">Description</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" name="description" value="{$description}">
      </div>
    </div>
    <!-- Brand -->
    <div class="form-group row">
      <label for="inputBrand" class="col-sm-2 col-form-label">Brand</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" name="brand" value="{$brand}">
      </div>
    </div>
    <!-- Category -->
    <div class="form-group row">
      <label for="inputCategory" class="col-sm-2 col-form-label">Category</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" name="category" value="{$category}">
      </div>
    </div>
    <!-- Count -->
    <div class="form-group row">
      <label for="inputCount" class="col-sm-2 col-form-label">Count</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" name="count" value="{$count}">
      </div>
    </div>

  <div class="form-row">
    <div class="form-group col-md-2">
      <button type="submit" class="btn btn-primary">Update</button>
    </div>
    <div class="form-group col-md-2">
      <button class="btn btn-primary">Delete</button>
    </div>
  </div>
  </form>

</div>
