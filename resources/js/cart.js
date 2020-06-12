
document.querySelectorAll('.add-cart-action').forEach(el => {
    el.addEventListener("click", addToCart, false);
});

function addToCart(){
    let idProduct = this.getAttribute('data-id-product');

    fetch('\\api/catalog/cart/toggle/'+idProduct, {method:'PUT'}).then((response) => {
        return response.json();
      })
      .then((data) => {
        console.log(data);
      });
}