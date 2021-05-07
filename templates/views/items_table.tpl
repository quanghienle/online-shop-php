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
        <td>{$item['count']}</td>
      </tr>
      {/foreach}
    </tbody>
  </table>
</div>
