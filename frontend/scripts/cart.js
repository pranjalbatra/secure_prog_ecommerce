// cart (should return a string), should be made up of a string like cart(product_id)=amount;

function getCartValue(product_id) {
    var name = "cart" + product_id + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for (var i = 0; i < ca.length; i++) {
      var c = ca[i];
      while (c.charAt(0) == ' ') {
        c = c.substring(1);
      }
      if (c.indexOf(name) == 0) {
        return c.substring(name.length, c.length);
      }
    }
    return null;
  }
  
  function addToCart(product_id, amount) {
    if (getCartValue("Highest") < product_id) {
      document.cookie = "cartHighest=" + product_id;
    }
  
    // check if product is already in the cart
    var cartItem = getCartValue(product_id);
  
    if (cartItem == null) {
      // if product does not exist in cart, add to cart
      var toAdd = "cart" + product_id + "=" + amount + ";";
      document.cookie = toAdd;
    } else {
      // add cartItem to original value
      var total = Number(amount) + Number(cartItem);
      var toAdd = "cart" + product_id + "=" + total + ";";
      document.cookie = toAdd;
    }
  }
  
  function addToCartRedirect(product_id, amount) {
    addToCart(product_id, amount);
    window.location = "cart.php";
  }
  
  function removeFromCart(product_id) {
    var toRemove = "cart" + product_id + "=; expires=Thu, 01 Jan 1970 00:00:00 UTC;";
    document.cookie = toRemove;
  }
  
  function clearCart() {
    for (let i = 0; i <= getCartValue("Highest"); i++) {
      removeFromCart(i);
    }
    removeFromCart("Highest");
  }
  
  function removeCoupon() {
    document.cookie = "couponCode=none; expires=Thu, 01 Jan 1970 00:00:00 UTC;";
    location.reload();
  }
  
  function addCoupon(code) {
    var toAdd = "couponCode=" + code + ";";
    console.log("adding: " + toAdd);
    document.cookie = toAdd;
    window.location.href = "cart.php";
  }
  
  function clearCartRefresh() {
    clearCart();
    location.reload();
  }
  