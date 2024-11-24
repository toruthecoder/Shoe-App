let logo = document.querySelector('.logo h1');

logo.addEventListener('click', function () { location.reload() });


let cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];
let cartItemCount = cartItems.length;

function product() {
    let html = '';
    cartItems.forEach((item, index )=> {
        if(!item.quantity || isNaN(item.quantity)){
            item.quantity = 1;
        }
        html += `
       <div class="cart-item-wrapper">
            <div class="cart-item">
                <div class="cart-item-content">
                    <div class="image">
                        <img src="${item.image}" alt="${item.name}" style="max-width: 100px; height: auto;"/>
                    </div>
                    <div class="product-details">
                        <h2 style="margin: 0; font-size: 1.1rem;">${item.name}</h2>
                        <h3 style="margin: 5px 0; font-size: 1rem;">Price: ${item.price}</h3>
                        <div class="quantity-controls">
                            <button class="btn-minus" onclick="updateQuantity(${index}, 'decrease')">-</button>
                            <span class="quantity">${item.quantity}</span>
                            <button class="btn-plus" onclick="updateQuantity(${index}, 'increase')">+</button>
                        </div>
                        <div class="total">
                            Total: $${CalculateItemTotal(item)}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        `;
    });
    return html;
}

// Function for calculating like if there are two item what will the sum be
function CalculateItemTotal(item){
    const price = parseFloat(item.price.replace(/[^0-9.-]+/g, ""));
    return (price * (item.quantity || 1)).toFixed(2);
}

// Function for updating quantity '+' '-'
function updateQuantity(index, action) {
    if (!cartItems[index].quantity || isNaN(cartItems[index].quantity)){
        cartItems[index].quantity = 1;
    }

    if (action === 'increase') {
        if(cartItems[index].quantity < 99){
            cartItems[index].quantity++;
        }
    } else if (action === 'decrease') {
        if(cartItems[index].quantity > 1){
            cartItems[index].quantity--;
        }else{
            if(confirm('Remove item from cart?')){
                cartItems.splice(index, 1);
            }
        }
    }

    localStorage.setItem('cartItems', JSON.stringify(cartItems));

    let items = document.querySelector('.items');
    items.innerHTML = product();

    updateCartCount();
    updateCartTotals();
}

function updateCartCount(){
    let count = document.querySelector('.cart-items span');
    let totalItems = cartItems.reduce((total, item) => total + (item.quantity || 1), 0);
    count.textContent = totalItems;
}

let items = document.querySelector('.items');
items.innerHTML = product();

if (items.children.length > 5) {
    items.style.overflowY = 'scroll';
    items.style.maxHeight = '700px';
}

let count = document.querySelector('.cart-items span')
let initialTotalItems = cartItems.reduce((total, item) => {
    return total + (item.quantity || 1);
}, 0);
count.textContent = initialTotalItems;



// Add styles for quantity controls
const style = document.createElement('style');
style.textContent = `
   items {
        max-height: 700px;
        overflow-y: auto;
        padding: 10px;
    }

    .cart-item-wrapper {
        margin-bottom: 15px;
    }

    .cart-item {
        border: 1px solid #ddd;
        border-radius: 8px;
        padding: 15px;
        background: white;
        box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }

    .cart-item-content {
        display: flex;
        gap: 20px;
        align-items: start;
    }

    .product-details {
        flex-grow: 1;
    }

    .product-details h3{
        position: relative;
        top: 40px;
    }

    .product-details h2{
        position: relative;
        top: 40px;
    }

    .quantity-controls {
        display: flex;
        align-items: center;
        gap: 10px;
        margin: 10px 0;
        position: relative;
        left: 53%;
    }

    .quantity-controls button {
        background: #f0f0f0;
        border: 1px solid #ddd;
        border-radius: 4px;
        padding: 5px 12px;
        cursor: pointer;
        font-size: 20px;
        transition: background-color 0.2s;
    }

    .quantity-controls button:hover {
        background: #e0e0e0;
    }

    .quantity {
        font-size: 16px;
        min-width: 20px;
        text-align: center;
        font-weight: bold;
    }

    .total {
        font-weight: bold;
        margin-top: 0px;
        font-size: 1.1rem;
        position: relative;
        left: 90%;
        top: 0;
    }

    .image img {
        border-radius: 4px;
    }

    /* Custom scrollbar styles */
    .items::-webkit-scrollbar {
        width: 8px;
    }

    .items::-webkit-scrollbar-track {
        background: #f1f1f1;
        border-radius: 4px;
    }

    .items::-webkit-scrollbar-thumb {
        background: #888;
        border-radius: 4px;
    }

    .items::-webkit-scrollbar-thumb:hover {
        background: #555;
    }   
`;
document.head.appendChild(style);

// Update cart count on initial load
updateCartCount();

let subTotalText = document.querySelector('.sub-total span');
let salesTax = document.querySelector('.sales-tax span');
let grandTotal = document.querySelector('.grand-total span');

function calculateSubTotal (){
    const subTotal = cartItems.reduce((total, item) => {
        const price = parseFloat(item.price.replace(/[^0-9.-]+/g, ""));
        return total + (price * (item.quantity || 1));
    }, 0);
    subTotalText.textContent = `$${subTotal.toFixed(2)}`;
    return subTotal;
}

function calculateSalesTax (){
    const taxRate = 0.08;
    const subTotalAmount = calculateSubTotal();
    const taxAmount = subTotalAmount * taxRate;

    salesTax.textContent = `$${taxAmount.toFixed(2)}`;
    return taxAmount;
}

function calculateGrandTotal (){
    const subTotalAmount = calculateSubTotal();
    const taxAmount = calculateSalesTax();
    const total = subTotalAmount + taxAmount;

    grandTotal.textContent = `$${total.toFixed(2)}`;
    return total;
}

function updateCartTotals(){
    calculateSubTotal();
    calculateSalesTax();
    calculateGrandTotal();
}


updateCartTotals();