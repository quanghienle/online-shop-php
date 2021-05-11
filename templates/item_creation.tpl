
<div class="login" style="padding: 20px;">
  <form role="form" action="http://localhost:8080/online-shop-php/addItem.php" method="POST">
    <!-- Name -->
    <div class="form-group row">
      <label for="inputName" class="col-sm-2 col-form-label">Name</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" name="name">
      </div>
    </div>
    <!-- Price -->
    <div class="form-group row">
      <label for="inputPrice" class="col-sm-2 col-form-label">Price</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" name="price">
      </div>
    </div>
    <!-- Description -->
    <div class="form-group row">
      <label for="inputDescription" class="col-sm-2 col-form-label">Description</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" name="description">
      </div>
    </div>
    <!-- Brand -->
    <div class="form-group row">
      <label for="inputBrand" class="col-sm-2 col-form-label">Brand</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" name="brand">
      </div>
    </div>
    <!-- Category -->
    <div class="form-group row">
      <label for="inputCategory" class="col-sm-2 col-form-label">Category</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" name="category">
      </div>
    </div>
    <!-- Count -->
    <div class="form-group row">
      <label for="inputCount" class="col-sm-2 col-form-label">Count</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" name="count">
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

</div>
