<html>

<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <title>Guitar System</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script type="text/javascript"
        src="http://localhost:8080/online-shop-php/public/js/public_js_functions.js"></script>
    <link rel="stylesheet" href="http://localhost:8080/online-shop-php/public/css/styles.css" type="text/css"
        media="screen" title="no title" charset="utf-8" />
</head>

<body>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <img src="public/images/guitar_logo.jpeg" width="30" height="30" class="d-inline-block align-top" alt="">
            Guitar Shop
        </a>
        {$username}
    </nav>

    {if $route == 'login'}
        {include file='templates/login.tpl'}
    {/if}

    {if $route == 'itemInfo'}
        {include file='templates/item_info.tpl'}
    {/if}

    {if $route == 'items_table'}
        {include file='templates/items_table.tpl'}
    {/if}

    {if $route == 'items_list'}
        {include file='templates/items_list.tpl'}
    {/if}

    {if $route == 'new_item'}
        {include file='templates/item_creation.tpl'}
    {/if}

</body>

</html>
