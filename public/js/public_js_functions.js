
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


function editItem(event) {
  const id = event.getElementsByTagName("td")[0].innerHTML;
  const callback = (res) => { 
    const {isExisted, content} = JSON.parse(res);
    if (isExisted) {
      $("html").html(content);
    } else {
      alert('item not found');
    }
  };

  ajaxRequest('GET', '/itemInfo.php', callback, {id});
}

