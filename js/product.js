const span = document.getElementById('cart')
updateCart()
let products
getProducts()
//const products = Array.from(document.getElementsByClassName('product-item'))
function updatePrice() {
    const items_size = Array.from(document.getElementsByTagName('select'))
    //console.log(items_size)
    items_size.forEach(item => {
        const id = item.id
        const product_id = "product_" + id.split('_')[1]
        item.addEventListener('change', function (e) {
            const selected_price = document.getElementById('price_' + id.split('_')[1])
            //console.log(selected_price)
            //console.log(products[id.split('_')[1]])
            if (item.selectedIndex === 0) {
                selected_price.innerText = products[id.split('_')[1]]['petit-prix'] + "€"
            } else {
                selected_price.innerText = products[id.split('_')[1]]['grand-prix'] + "€"
            }
        })
    })
}
const searchBar = document.getElementById('searchBar')
searchProduct(searchBar.value)
searchBar.addEventListener('input',function (e){
    searchProduct(searchBar.value,1)
})

function getProducts() {
    const request = new XMLHttpRequest();
    request.open('GET','../paprec/get-product.php');
    request.onreadystatechange = function() {
        // ready state == 4 --> FIN de la requête
        if(request.readyState === 4) {
            products=JSON.parse(request.responseText)
        }
    };
    request.send();

}

function addToCart(name, price, quantity, size) {
    const request = new XMLHttpRequest();
    request.open('GET','../addToCart.php?name='+name+'&price='+document.getElementById(price).innerText+'&quantity='+document.getElementById(quantity).valueAsNumber+'&size='+document.getElementById(size).value);
    request.onreadystatechange = function() {
        // ready state == 4 --> FIN de la requête
        if(request.readyState === 4) {
            span.innerHTML = request.responseText
            updateCart()
        }
    };
    request.send();
}

function updateCart(){
    if(span.innerHTML==='0')span.style.visibility='hidden'
    else span.style.visibility='initial'
}

function searchProduct(name,page){
    const request = new XMLHttpRequest();
    const productSection = Array.from(document.getElementsByClassName('products'))
    //console.log(productSection[0])
    let url = '../searchProduct.php?name='+name
    if(page!=null)url+="&page="+page
    request.open('GET',url);
    request.onreadystatechange = function() {
        // ready state == 4 --> FIN de la requête
        if(request.readyState === 4) {
            productSection[0].innerHTML = request.responseText
            updatePrice()
        }
    };
    request.send();
}