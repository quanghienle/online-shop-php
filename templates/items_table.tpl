<div class="items-table" style="padding: 10px;">
  <br />
  <div style="display: flex; flex-direction: row; justify-content: space-between;">
  
    <h2>Inventory:</h2>
  
    <div class="input-group mb-3" style="width: 400px;">
      <select class="form-select input-group-prepend" id="filterDropdown">
        <option value="id">ID</option>
        <option value="name" selected>Name</option>
        <option value="price">Price</option>
        <option value="description">Description</option>
        <option value="brand">Brand</option>
        <option value="category">Category</option>
        <option value="count">Count</option>
      </select>
  
      <input type="text" class="form-control" id="searchInput">
  
      <div class="input-group-append">
        <button class="btn btn-secondary" type="button" onclick="searchItems(this)">Search</button>
      </div>
    </div>
  
    {if $admin}
      <button class="btn btn-primary" onclick="addItem()">Add item</button>
    {/if}
  
  </div>
  <br />
  <table class="table table-hover btn-table table-responsive-md" id="inventory-table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Price</th>
        <th scope="col">Description</th>
        <th scope="col">Brand</th>
        <th scope="col">Category</th>
        <th scope="col">Count</th>
        {if $admin}
          <th scope="col"></th>
        {/if}
      </tr>
    </thead>
    <tbody>
      {foreach from=$items item=item}
      {* <tr onclick="editItem(this)"> *}
      <tr style="height: 35px;">
        <td>{$item['id']}</td>
        <td>{$item['name']}</td>
        <td>{$item['price']}</td>
        <td>{$item['description']}</td>
        <td>{$item['brand']}</td>
        <td>{$item['category']}</td>
        <td>{$item['count']}</td>
        {if $admin}
          <td>
            <button type="button" class="btn btn-success btn-sm" onclick="rowEdit(this)">Edit</button>
            <button type="button" class="btn btn-danger btn-sm" onclick="rowDelete(this)">Delete</button>
          </td>
        {/if}
      </tr>
      {/foreach}
    </tbody>
  </table>
  
  <!-- Modal -->
  <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="deleteModalLabel">Remove Item</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" id="deleteModalBody">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" id="deleteBtn">Remove</button>
        </div>
      </div>
    </div>
  </div>
  
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form role="form" id="itemForm" method="POST">
            <!-- id -->
            <div class="form-group row">
              <label for="inputId" class="col-sm-3 col-form-label">ID</label>
              <div class="col-sm-7">
                <input type="text" class="form-control" id="inputId" name="id" readonly>
              </div>
            </div>
            <!-- Name -->
            <div class="form-group row">
              <label for="inputName" class="col-sm-3 col-form-label">Name</label>
              <div class="col-sm-7">
                <input type="text" class="form-control" id="inputName" name="name">
              </div>
            </div>
            <!-- Price -->
            <div class="form-group row">
              <label for="inputPrice" class="col-sm-3 col-form-label">Price</label>
              <div class="col-sm-7">
                <input type="text" class="form-control" id="inputPrice" name="price">
              </div>
            </div>
            <!-- Description -->
            <div class="form-group row">
              <label for="inputDescription" class="col-sm-3 col-form-label">Description</label>
              <div class="col-sm-7">
                <textarea class="form-control" id="inputDescription" name="description"></textarea>
              </div>
            </div>
            <!-- Brand -->
            <div class="form-group row">
              <label for="inputBrand" class="col-sm-3 col-form-label">Brand</label>
              <div class="col-sm-7">
                <input type="text" class="form-control" id="inputBrand" name="brand">
              </div>
            </div>
            <!-- Category -->
            <div class="form-group row">
              <label for="inputCategory" class="col-sm-3 col-form-label">Category</label>
              <div class="col-sm-7">
                <input type="text" class="form-control" id="inputCategory" name="category">
              </div>
            </div>
            <!-- Count -->
            <div class="form-group row">
              <label for="inputCount" class="col-sm-3 col-form-label">Count</label>
              <div class="col-sm-7">
                <input type="text" class="form-control" id="inputCount" name="count">
              </div>
            </div>
            <div class="form-row" style="text-align: right;">
              <div class="form-group col-md-2">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
              <div class="form-group col-md-2">
                <button type="submit" class="btn btn-primary" id="submitModalBtn">Submit</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  </div>
