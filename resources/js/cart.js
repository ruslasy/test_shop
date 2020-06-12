
document.querySelectorAll('.add-cart-action').forEach(el => {
    el.addEventListener("click", addToCart, false);
});
/*
document.querySelectorAll('.add-cart-action-del').forEach(el => {
  el.addEventListener("click", DelFromCart, false);
});
*/
function addToCart(){
    let idProduct = this.getAttribute('data-id-product');

    fetch('\\catalog/cart/toggle/'+idProduct).then((response) => {
        return response.json();
      })
      .then((data) => {
        let cartCount = document.getElementById('cart-product-count');
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
  let cartCount = document.getElementById('cart-product-count');
  cartCount.innerHTML = data['count'];
  document.getElementById('cart-product-count').style.display = 'flex';
});