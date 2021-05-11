
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

function setItemFormValues(data) {
      $('#exampleModalLabel').html( data.title || 'Edit Item');
      $('#inputId').val(data.id || '');
      $('#inputName').val(data.name || '');
      $('#inputDescription').val(data.description || '');
      $('#inputBrand').val(data.brand || '');
      $('#inputPrice').val(data.price || '');
      $('#inputCategory').val(data.category || '');
      $('#inputCount').val(data.count || '');
}

function rowEdit(event) {
  const tr = event.parentNode.parentNode;
  const id = tr.getElementsByTagName("td")[0].innerHTML;
  console.log(id);

  const callback = (res) => { 
    const itemInfo = JSON.parse(res);
    if (itemInfo.isExisted) {
      itemInfo.title = 'Edit Item';
      setItemFormValues(itemInfo);
      $('#itemForm').attr('action', 'http://localhost:8080/online-shop-php/editItem.php')
      $('#exampleModal').modal('show')
    } else {
      alert('item not found');
    }
  };

  ajaxRequest('GET', '/getItemInfo.php', callback, {id});
}

function addItem() {
  setItemFormValues({title: 'Add Item'});
  $('#itemForm').attr('action', 'http://localhost:8080/online-shop-php/addItem.php')
  $('#exampleModal').modal('show')
}

function rowDelete(event) {
  const tr = event.parentNode.parentNode;
  const id = tr.getElementsByTagName("td")[0].innerHTML;
  const name = tr.getElementsByTagName("td")[1].innerHTML;

  $('#deleteModalBody').empty();
  $('#deleteModalBody').append(`<p>Want to remove item \"${name}\" ?</p>`);
  $('#deleteBtn').click(() => removeItem(id, name));
  $('#deleteModal').modal('show')
}

function removeItem(id, name) {
  const callback = (res) => { location.reload(); };
  ajaxRequest('DELETE', '/removeItem.php', callback, {id});

}

function searchItems(e) {
  const searchInput = $('#searchInput').val();
  const searchField = $('#filterDropdown option:selected').val();

  const callback = (res) => {
      $("html").html(res);
  };
  ajaxRequest('GET', '/inventory.php', callback, {searchField, searchInput});
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

