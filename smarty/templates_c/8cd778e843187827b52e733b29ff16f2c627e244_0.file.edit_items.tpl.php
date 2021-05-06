<?php
/* Smarty version 3.1.39, created on 2021-05-06 17:01:04
  from '/Users/hienle/Sites/online-shop-php/templates/views/edit_items.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_609420d044fdd0_14196738',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8cd778e843187827b52e733b29ff16f2c627e244' => 
    array (
      0 => '/Users/hienle/Sites/online-shop-php/templates/views/edit_items.tpl',
      1 => 1620320462,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_609420d044fdd0_14196738 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="items-table" style="padding: 10px;">
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
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
      <tr onclick="editItem(this)">
        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['description'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['brand'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['category'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['count'];?>
</td>
      </tr>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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
<?php }
}
