
<div class="login" style="padding: 20px;">
  <form role="form">
    <!-- id -->
    <div class="form-group row">
      <label for="inputId" class="col-sm-2 col-form-label">ID</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" id="inputId" value="{$id}">
      </div>
    </div>
    <!-- Name -->
    <div class="form-group row">
      <label for="inputName" class="col-sm-2 col-form-label">Name</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" id="inputName" value="{$name}">
      </div>
    </div>
    <!-- Price -->
    <div class="form-group row">
      <label for="inputPrice" class="col-sm-2 col-form-label">Price</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" id="inputPrice" value="{$price}">
      </div>
    </div>
    <!-- Description -->
    <div class="form-group row">
      <label for="inputDescription" class="col-sm-2 col-form-label">Description</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" id="inputDescription" value="{$description}">
      </div>
    </div>
    <!-- Brand -->
    <div class="form-group row">
      <label for="inputBrand" class="col-sm-2 col-form-label">Brand</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" id="inputBrand" value="{$brand}">
      </div>
    </div>
    <!-- Category -->
    <div class="form-group row">
      <label for="inputCategory" class="col-sm-2 col-form-label">Category</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" id="inputCategory" value="{$category}">
      </div>
    </div>
    <!-- Count -->
    <div class="form-group row">
      <label for="inputCount" class="col-sm-2 col-form-label">Count</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" id="inputCount" value="{$count}">
      </div>
    </div>
  </form>
  <button class="btn btn-secondary" onclick="authenticate(this)">Sign In</button>
</div>
