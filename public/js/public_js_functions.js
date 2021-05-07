
function ajaxRequest(method, endpoint, callback, params=null, data = null) {
  let url = "http://localhost:8080/online-shop-php" + endpoint;
  url += !!params ? "?" +jQuery.param(params) : ''; 
  $.ajax({
    url: url,
    data: data,
    type: method,
    success: callback,
  });
}

function navigate(page, data) {
  const display = (pageContent) => { 
    $('#mainContent').html(pageContent); }
  ajaxRequest('POST', '/index.php', display, null, {goto: page, data: data});
}

function authenticate(event) {
  const name = $('#inputUser').val() || 'user';
  const password = $('#inputPassword').val() || 'user';
  const callback = (res) => { 
    const {registered, info} = JSON.parse(res);
    if (registered) {
      navigate('items_table', info); 
    } else {
      alert('user is not registered');
    }
  };
  ajaxRequest('POST', '/src/authentication.php', callback, null, {name, password});
}


function editItem(event) {
  const id = event.getElementsByTagName("td")[0].innerHTML;
  const callback = (res) => {navigate('item_info', res)};

  ajaxRequest('GET', '/src/itemInfo.php', callback, {id});
}

