
<div class="d-flex align-items-start flex-wrap">
  {foreach from=$items item=item}
  <div class="card" style="width: 18rem; margin: 10px;">
    <img class="card-img-top" style="height: 10rem; padding: 5px; object-fit: contain;" src={$item['image']}
      alt="card image cap">
    <div class="card-body">
      <h5 class="card-title">{$item['name']}</h5>
      <p class="card-text"> price: ${$item['price']} </p>
      <a href="#item{$item['id']}" class="btn btn-primary"> details</a>
      <button onclick="hello()">hey</button>
    </div>
  </div>

  {/foreach}

</div>
