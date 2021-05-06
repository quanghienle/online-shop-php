
// function ajaxWrapper(method, url, queryString, successCallback, errorCallback) {
//   if (queryString) url += "?" + queryString;
//   $.ajax({
//     url: url,
//     type: method,
//     data: null,
//     success: function (res) {
//       if (!successCallback) return;
//       else successCallback(res);
//     },
//     failure: function (res) {
//       if (!errorCallback) return;
//       else errorCallback(res);
//     },
//   });
// }

let hello = (x) => {
  alert('hello');
}

function editItem(event) {
  const itemInfo = Array.from(event.getElementsByTagName("td")).map(x => x.innerHTML);
  const [id, name, price, description, brand, category, image, count] = itemInfo;
  // console.log($('#modal-item-id'))
  // $('#exampleModalCenter').modal('show');
  
  const base_url = "http://localhost:8080/online-shop-php/src/itemInfo.php";
  const xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      // document.getElementById("txtHint").innerHTML = this.responseText;
      alert(this.responseText);
    }
  };
  xmlhttp.open("GET", base_url + `?id=${id}`, true);
  xmlhttp.send();
}

