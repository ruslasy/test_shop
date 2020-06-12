let cartCount = document.getElementById('cart-product-count');

document.querySelectorAll('.add-cart-action').forEach(el => {
    el.addEventListener("click", addToCart, false);
});

function addToCart(){
    let idProduct = this.getAttribute('data-id-product');

    fetch('\\catalog/cart/toggle/'+idProduct).then((response) => {
        return response.json();
      })
      .then((data) => {
        cartCount.innerHTML = data['count'];
        if (this.innerHTML == 'в корзину'){
          this.innerHTML = 'удалить';
        }else{
          this.innerHTML = 'в корзину';
        }
      });
}

fetch('\\catalog/cart/').then((response) => {
  return response.json();
})
.then((data) => {
  cartCount.innerHTML = data['count'];
});