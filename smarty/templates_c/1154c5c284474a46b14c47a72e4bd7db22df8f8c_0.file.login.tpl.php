<?php
/* Smarty version 3.1.39, created on 2021-05-11 20:37:08
  from '/Users/hienle/Sites/online-shop-php/templates/login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_609aeaf4a20f74_65224212',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1154c5c284474a46b14c47a72e4bd7db22df8f8c' => 
    array (
      0 => '/Users/hienle/Sites/online-shop-php/templates/login.tpl',
      1 => 1620765426,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_609aeaf4a20f74_65224212 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="login" style="padding: 20px; text-align: center;">
  <form role="form" action="http://localhost:8080/online-shop-php/authentication.php" method="POST">
    <div class="form-group row">
      <label for="inputUser" class="col-sm-2 col-form-label">User Name</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" name="inputUser" placeholder="Username">
      </div>
    </div>
    <div class="form-group row">
      <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
      <div class="col-sm-5">
        <input type="password" class="form-control" name="inputPassword" placeholder="Password">
      </div>
    </div>
     <button type="submit" class="btn btn-primary" >Sign In</button> 
  </form>
</div>
<?php }
}
