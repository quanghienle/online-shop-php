<div class="items-table" style="padding: 10px;">
  <h2>List of items:</h2>
  <br />
  <table class="table table-hover">
    <thead class="thead-dark">
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Price</th>
        <th scope="col">Description</th>
        <th scope="col">Brand</th>
        <th scope="col">Category</th>
        <th scope="col">Image Link</th>
        <th scope="col">Count</th>
      </tr>
    </thead>
    <tbody>
      {foreach from=$items item=item}
      <tr onclick="editItem(this)">
        <td>{$item['id']}</td>
        <td>{$item['name']}</td>
        <td>{$item['price']}</td>
        <td>{$item['description']}</td>
        <td>{$item['brand']}</td>
        <td>{$item['category']}</td>
        <td>{$item['image']}</td>
        <td>{$item['count']}</td>
      </tr>
      {/foreach}
    </tbody>
  </table>


  <!-- 
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" id="modal-item-info">
          <form role="form">
            <div class="form-group row">
              <label for="modal-item-id" class="col-sm-2 col-form-label">id:</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="modal-item-id" name="id">
              </div>
            </div>
          </form>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
  -->
</div>
