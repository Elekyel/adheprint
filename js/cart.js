
const totalPrice = document.getElementById('totalPrice')
const items_price = Array.from(document.getElementsByClassName('item-in-cart'))
updateTotal()
items_price.forEach(item=>{
    let unitPrice = item.getAttribute('unitPrice')
    item.parentNode.childNodes[5].innerHTML = (unitPrice * item.value) + "€"
    item.addEventListener('change',function (e){
        item.parentNode.childNodes[5].innerHTML = (unitPrice * item.value) + "€"
        let name = item.parentNode.parentNode.childNodes[1].childNodes[3].innerText
        updateCart(name,item.value)
        updateTotal()
    })
})

function removeFromCart(name){
    const request = new XMLHttpRequest();
    request.open('GET','../removeFromCart.php?name='+name);
    request.onreadystatechange = function() {
        // ready state == 4 --> FIN de la requête
        if(request.readyState === 4) {
            // TODO
        }
    };
    request.send();
    setTimeout(function (){window.location.href = "checkout.php"},100)
}

function updateTotal(){
    let total = 0
    items_price.forEach(item=>{
        let unitPrice = item.getAttribute('unitPrice')
        total += (unitPrice * item.value)
    })
    totalPrice.innerHTML = total + "€"
}

function updateCart(name,value){
    const request = new XMLHttpRequest();
    request.open('GET','../updateCart.php?name='+name+'&value='+value);
    request.onreadystatechange = function() {
        // ready state == 4 --> FIN de la requête
        if(request.readyState === 4) {
            // TODO
        }
    };
    request.send();
}