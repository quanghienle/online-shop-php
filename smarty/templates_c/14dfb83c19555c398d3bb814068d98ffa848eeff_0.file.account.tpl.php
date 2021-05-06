<?php
/* Smarty version 3.1.39, created on 2021-05-06 13:20:30
  from '/Users/hienle/Sites/online-shop-php/templates/views/account.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6093ed1e9ebb27_31482616',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '14dfb83c19555c398d3bb814068d98ffa848eeff' => 
    array (
      0 => '/Users/hienle/Sites/online-shop-php/templates/views/account.tpl',
      1 => 1620307228,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6093ed1e9ebb27_31482616 (Smarty_Internal_Template $_smarty_tpl) {
?><form role="form" method="post" action="<?php echo '<?php ';?>
echo htmlspecialchars($_SERVER[" PHP_SELF"]); <?php echo '?>';?>
">
  <div class="form-group row">
    <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Email">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputUser" class="col-sm-2 col-form-label">User Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputUser" name="user" placeholder="Username">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Password">
    </div>
  </div>
  <div class="form-group row">
    <div class="offset-sm-2 col-sm-10">
      <input type="submit" value="Sign in" name="submit" class="btn btn-primary" />
    </div>
  </div>
</form>

<?php }
}
