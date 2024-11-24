// Navbar functionality Start


// Fetching classes and id's.
let filter = document.querySelector('.filter1');
let dropdownList = document.getElementById('myDropDown');
const selectedItemSpan = document.querySelector('.span1');
let items = document.querySelectorAll('.item-name');


// Dealing with navbar up and down position 
let lastScrollTop = 0;
let navbar = document.querySelector('.navbar');
window.addEventListener('scroll', function () {
    let scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    if (scrollTop > lastScrollTop) {
        navbar.style.top = "-80px";
    } else {
        navbar.style.top = '0';
    }
    lastScrollTop = scrollTop;
});


let logo = document.getElementById('logo');
logo.addEventListener('click', function () { location.reload() });

// Menu Functinality

let bars = document.querySelector('.bar');
let menu = document.querySelector('.menu');

bars.addEventListener('click', () => {
    if (bars.firstElementChild.classList.contains('fa-bars')) {
        bars.firstElementChild.classList.remove('fa-bars');
        bars.firstElementChild.classList.add('fa-xmark');
    }
    else {
        bars.firstElementChild.classList.remove('fa-xmark');
        bars.firstElementChild.classList.add('fa-bars');
    } menu.classList.toggle('show_menu');
});

// For clicking outside and not in the menu
document.addEventListener('click', (e) => {
    if (!bars.contains(e.target) && !menu.contains(e.target)) {
        menu.classList.remove('show_menu');
        bars.firstElementChild.classList.remove('fa-xmark');
        bars.firstElementChild.classList.add('fa-bars');
    }
});

// For Functionality inside the menu box
menu.addEventListener('click', (e) => {
    let show1 = document.querySelector('.show1');
    let show2 = document.querySelector('.show2');
    let show3 = document.querySelector('.show3');

    // Men toggle
    if (e.target.textContent.trim() === 'Men') {
        if (show1.style.display === 'block') {
            show1.style.display = 'none';
        }
        else {
            show1.style.display = 'block';

            show2.style.display = 'none';
            show3.style.display = 'none';
        }
    }

    // Women Toggle
    if (e.target.textContent.trim() === 'Women') {
        if (show2.style.display === 'block') {
            show2.style.display = 'none';
        }
        else {
            show2.style.display = 'block';

            show1.style.display = 'none';
            show3.style.display = 'none';
        }
    }

    // Kidz Toggle
    if (e.target.textContent.trim() === 'Kidz') {
        if (show3.style.display === 'block') {
            show3.style.display = 'none';
        }
        else {
            show3.style.display = 'block';

            show1.style.display = 'none';
            show2.style.display = 'none';
        }
    }

    // ...Men Sec functionality Start

    // Men Shoe Inside men Toggle and functionality
    if (e.target.textContent.trim() === 'Men Shoe') {
        show1.style.display = 'none';
        menu.classList.toggle('show_menu');

        bars.firstElementChild.classList.remove('fa-xmark');
        bars.firstElementChild.classList.add('fa-bars');

        selectedItemSpan.innerHTML = `
        Men-Shoe
        <i class="fa-solid fa-xmark"></i>
        `;
        selectedItemSpan.style.display = 'inline-block';

        let allSections = document.querySelectorAll('.content-section');

        allSections.forEach(section => section.style.display = 'none');
        let defaultContent = document.querySelector('.content-0');
        defaultContent.style.display = 'none';

        let targetSection = document.getElementById('Men-Shoe');
        let targetBoxes;
        if (targetSection) {
            targetSection.style.display = 'block';
            targetBoxes = targetSection.querySelectorAll('.sec');
            currentSec = 2;
            initialBoxes(targetBoxes);
        }

        loadMoreBtn.forEach(btn => {
            btn.replaceWith(btn.cloneNode(true));
        });

        loadMoreBtn = document.querySelectorAll('.LoadMore');

        if (typeof targetBoxes !== 'undefined') {
            handleLoadMore(loadMoreBtn, targetBoxes);

            loadMoreBtn.forEach(btn => {
                btn.style.display = currentSec >= targetBoxes.length ? 'none' : 'block';
            });
        }
        else {
            console.log('Men-Shoe sec not found');
        }

    }       // Men Sneakers Inside men Toggle and functionality
    else if (e.target.textContent.trim() === 'Men Sneakers') {

        show1.style.display = 'none';
        menu.classList.toggle('show_menu');

        bars.firstElementChild.classList.remove('fa-xmark');
        bars.firstElementChild.classList.add('fa-bars');

        selectedItemSpan.innerHTML = `
        Men-Sneakers
        <i class="fa-solid fa-xmark"></i>
        `;
        selectedItemSpan.style.display = 'inline-block';

        let allSections = document.querySelectorAll('.content-section');

        allSections.forEach(section => section.style.display = 'none');
        let defaultContent = document.querySelector('.content-0');
        defaultContent.style.display = 'none';

        let targetSection = document.getElementById('Men-Sneakers');
        let targetBoxes;
        if (targetSection) {
            targetSection.style.display = 'block';
            targetBoxes = targetSection.querySelectorAll('.sec');
            currentSec = 2;
            initialBoxes(targetBoxes);
        }

        loadMoreBtn.forEach(btn => {
            btn.replaceWith(btn.cloneNode(true));
        });

        loadMoreBtn = document.querySelectorAll('.LoadMore');

        if (typeof targetBoxes !== 'undefined') {
            handleLoadMore(loadMoreBtn, targetBoxes);

            loadMoreBtn.forEach(btn => {
                btn.style.display = currentSec >= targetBoxes.length ? 'none' : 'block';
            });
        }
        else {
            console.log('Men-Sneakers sec not found');
        }
    }
    else {
        if (e.target.textContent.trim() === 'Men Crocs') {
            show1.style.display = 'none';
            menu.classList.toggle('show_menu');

            bars.firstElementChild.classList.remove('fa-xmark');
            bars.firstElementChild.classList.add('fa-bars');

            selectedItemSpan.innerHTML = `
            Men-Crocs
            <i class="fa-solid fa-xmark"></i>
            `;
            selectedItemSpan.style.display = 'inline-block';

            let allSections = document.querySelectorAll('.content-section');

            allSections.forEach(section => section.style.display = 'none');
            let defaultContent = document.querySelector('.content-0');
            defaultContent.style.display = 'none';

            let targetSection = document.getElementById('Men-Crocs');
            let targetBoxes;
            if (targetSection) {
                targetSection.style.display = 'block';
                targetBoxes = targetSection.querySelectorAll('.sec');
                currentSec = 2;
                initialBoxes(targetBoxes);
            }

            loadMoreBtn.forEach(btn => {
                btn.replaceWith(btn.cloneNode(true));
            });

            loadMoreBtn = document.querySelectorAll('.LoadMore');

            if (typeof targetBoxes !== 'undefined') {
                handleLoadMore(loadMoreBtn, targetBoxes);

                loadMoreBtn.forEach(btn => {
                    btn.style.display = currentSec >= targetBoxes.length ? 'none' : 'block';
                });
            }
            else {
                console.log('Men-Crocs sec not found');
            }
        }
    }

    // Men Sec Functionality End...



    // ....Kidz Sec Functionality Start

    // Kidz Shoe Functionality 
    if (e.target.textContent.trim() === 'Kidz Shoe') {
        show3.style.display = 'none';
        menu.classList.toggle('show_menu');
        bars.firstElementChild.classList.remove('fa-xmark');
        bars.firstElementChild.classList.add('fa-bars');


        selectedItemSpan.innerHTML = `
        Kidz-Shoe
        <i class="fa-solid fa-xmark"></i>
        `;
        selectedItemSpan.style.display = 'inline-block';


        let allSections = document.querySelectorAll('.content-section');
        allSections.forEach((section) => { section.style.display = 'none' });

        let defaultContent = document.querySelector('.content-0');
        defaultContent.style.display = 'none';

        let targetSection = document.querySelector('#Kidz-Shoe');
        let targetBoxes;

        if (targetSection) {
            targetSection.style.display = 'block';
            targetBoxes = targetSection.querySelectorAll('.sec');
            currentSec = 2;
            initialBoxes(targetBoxes);
        }

        loadMoreBtn.forEach(btn => {
            btn.replaceWith(btn.cloneNode(true));
        });

        loadMoreBtn = document.querySelectorAll('.LoadMore');

        if (typeof targetBoxes !== 'undefined') {
            handleLoadMore(loadMoreBtn, targetBoxes);

            loadMoreBtn.forEach(btn => {
                btn.style.display = currentSec >= targetBoxes.length ? 'none' : 'block';
            });
        }
        else {
            console.log('Kidz-Shoe sec not found');
        }

    }       // Kidz Sneakers Functionality 
    else if (e.target.textContent.trim() === 'Kidz Sneakers') {

        show3.style.display = 'none';
        menu.classList.toggle('show_menu');
        bars.firstElementChild.classList.remove('fa-xmark');
        bars.firstElementChild.classList.add('fa-bars');


        selectedItemSpan.innerHTML = `
        Kidz-Sneakers
        <i class="fa-solid fa-xmark"></i>
        `;
        selectedItemSpan.style.display = 'inline-block';


        let allSections = document.querySelectorAll('.content-section');
        allSections.forEach((section) => { section.style.display = 'none' });

        let defaultContent = document.querySelector('.content-0');
        defaultContent.style.display = 'none';

        let targetSection = document.querySelector('#Kidz-Sneakers');
        let targetBoxes;

        if (targetSection) {
            targetSection.style.display = 'block';
            targetBoxes = targetSection.querySelectorAll('.sec');
            currentSec = 2;
            initialBoxes(targetBoxes);
        }

        loadMoreBtn.forEach(btn => {
            btn.replaceWith(btn.cloneNode(true));
        });

        loadMoreBtn = document.querySelectorAll('.LoadMore');

        if (typeof targetBoxes !== 'undefined') {
            handleLoadMore(loadMoreBtn, targetBoxes);

            loadMoreBtn.forEach(btn => {
                btn.style.display = currentSec >= targetBoxes.length ? 'none' : 'block';
            });
        }
        else {
            console.log('Kidz-Sneakers sec not found');
        }
    }   //Kidz Sandal Sec Functionality
    else {
        if (e.target.textContent.trim() === 'Kidz Sandal') {
            show3.style.display = 'none';
            menu.classList.toggle('show_menu');
            bars.firstElementChild.classList.remove('fa-xmark');
            bars.firstElementChild.classList.add('fa-bars');


            selectedItemSpan.innerHTML = `
            Kidz-Sandal
            <i class="fa-solid fa-xmark"></i>
            `;
            selectedItemSpan.style.display = 'inline-block';


            let allSections = document.querySelectorAll('.content-section');
            allSections.forEach((section) => { section.style.display = 'none' });

            let defaultContent = document.querySelector('.content-0');
            defaultContent.style.display = 'none';

            let targetSection = document.querySelector('#Kidz-Sandal');
            let targetBoxes;

            if (targetSection) {
                targetSection.style.display = 'block';
                targetBoxes = targetSection.querySelectorAll('.sec');
                currentSec = 2;
                initialBoxes(targetBoxes);
            }

            loadMoreBtn.forEach(btn => {
                btn.replaceWith(btn.cloneNode(true));
            });

            loadMoreBtn = document.querySelectorAll('.LoadMore');

            if (typeof targetBoxes !== 'undefined') {
                handleLoadMore(loadMoreBtn, targetBoxes);

                loadMoreBtn.forEach(btn => {
                    btn.style.display = currentSec >= targetBoxes.length ? 'none' : 'block';
                });
            }
            else {
                console.log('Kidz-Sandal sec not found');
            }
        }

        // Kidz Sec Functionality End...
    }

    // ...New Arrival Functionality Start
    if (e.target.textContent.trim() === 'New Arrival') {

        menu.classList.toggle('show_menu');
        bars.firstElementChild.classList.remove('fa-xmark');
        bars.firstElementChild.classList.add('fa-bars');

        selectedItemSpan.innerHTML = `
        New-Arrival
        <i class="fa-solid fa-xmark"><i>
        `;
        selectedItemSpan.style.display = 'inline-block';

        let allSections = document.querySelectorAll('.content-section');
        allSections.forEach((section) => { section.style.display = 'none' });

        let defaultContent = document.querySelector('.content-0');
        defaultContent.style.display = 'none';

        let targetSection = document.getElementById('New-Arrival');
        let targetBoxes;

        if (targetSection) {
            targetSection.style.display = 'block';
            targetBoxes = targetSection.querySelectorAll('.sec');
            currentSec = 2;
            initialBoxes(targetBoxes);
        }

        loadMoreBtn.forEach((btn) => { btn.replaceWith(btn.cloneNode(true)) });

        loadMoreBtn = document.querySelectorAll('.LoadMore');

        if (typeof targetBoxes !== 'undefined') {
            handleLoadMore(loadMoreBtn, targetBoxes);
            loadMoreBtn.forEach(btn => { btn.style.display = currentSec >= targetBoxes.length ? 'none' : 'block' });

        } else {
            console.log('New Arrivals sec Not found');
        }

        if(e.target.textContent.trim() === 'Sale'){
            targetSection.style.display = 'none';
        }
    }
    // New Arival functionality End...


    // ...Sale Functionality Start
    if (e.target.textContent.trim() === 'Sale') {
        menu.classList.toggle('show_menu');
        bars.firstElementChild.classList.remove('fa-xmark');
        bars.firstElementChild.classList.add('fa-bars');

        selectedItemSpan.innerHTML = `
        Sale
        <i class="fa-solid fa-xmark"><i>
        `;
        selectedItemSpan.style.display = 'inline-block';

        let allSections = document.querySelectorAll('content-section');
        allSections.forEach((section) => { section.style.display = 'none' });

        let defaultContent = document.querySelector('.content-0');
        defaultContent.style.display = 'none';

        let targetSection = document.getElementById('Sale');
        let targetBoxes;

        if (targetSection) {
            targetSection.style.display = 'block';
            targetBoxes = targetSection.querySelectorAll('.sec');
            currentSec = 2;
            initialBoxes(targetBoxes);
        }

        loadMoreBtn.forEach((btn) => { btn.replaceWith(btn.cloneNode(true)) });
        loadMoreBtn = document.querySelectorAll('.LoadMore');

        if (typeof targetBoxes !== 'undefined') {
            handleLoadMore(loadMoreBtn, targetBoxes);
            loadMoreBtn.forEach(btn => { btn.style.display = currentSec >= targetBoxes.length ? 'none' : 'block' });
        }
        else {
            console.log('Sale Sec Not Found');
        }
    }

    // Sale Functionality End...
});



// Cart Functionality
let cart = document.querySelector('.cart');
let cart1 = document.querySelector('.text0 i');

// for cart icon
cart1.addEventListener('click', function (e) {
    if (e.target.closest('.fa-cart-shopping')) {
        cart.classList.toggle('cart_show');
    }
});

// for closing cart 
document.querySelector('.cart i').addEventListener('click', () => {
    cart.classList.remove('cart_show');
});

// when click outside form cart and X icon
document.addEventListener('click', (e) => {
    const clickedInsideCart = cart.contains(e.target);
    const clickedCartIcon = cart1.contains(e.target);

    const clickedRemoveBtn = e.target.closest('.cart-item button');

    if (!clickedInsideCart && !clickedCartIcon && !clickedRemoveBtn) {
        cart.classList.remove('cart_show');
    }
})

// adding and removing items from the cart 
// Cart state
let cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];
let cartItemCount = cartItems.length;
console.log(cartItems);

// DOM Elements
const cartIcon = document.querySelector('.text0 span');
const cartItemsContainer = document.querySelector('.prod-items');
const buyNowButtons = document.querySelectorAll('.btn10');
const cartCheckoutButton = document.querySelector('.cart button');
const cartElement = document.querySelector('.cart');

function showNotification(message, isWarning = false) {
    const notification = document.createElement('div');
    notification.textContent = message;
    notification.style.cssText = `
        position: fixed;
        bottom: 20px;
        right: 20px;
        background: ${isWarning ? 'rgb(252, 90, 90)' : '#4CAF50'};
        color: white;
        padding: 10px 20px;
        border-radius: 5px;
        animation: fadeOut 2s forwards;
    `;
    document.body.appendChild(notification);
    setTimeout(() => notification.remove(), 2000);
}

// Function to update cart UI
function updateCartUI() {
    cartIcon.textContent = cartItemCount;

    if (cartItems.length === 0) {
        cartItemsContainer.innerHTML = '<span class="span2" style="margin-left: 25px;">Your Cart is empty</span>';
        cartCheckoutButton.style.display = 'none';
        // Clear localStorage when cart is empty
        localStorage.removeItem('cartItems');
    } else {
        let cartHTML = '';

        cartItems.forEach((item, index) => {
            cartHTML += `
                <div class="cart-item" style="display: flex; flex-direction: column; justify-content: left;">
                    <div class="cart-item-details">
                        <h4 style="margin-right: 30px;">${item.name}</h4>
                        <p style="margin-right: 5px; margin-top: -1px; font-size: 16px;">${item.price}</p>    
                    </div>
                    <button onclick="removeFromCart(${index})" style="padding: 0px 0px; width: 20px; height: 20px; margin-top: -35px; margin-left: 190px; border-radius: 3px;">-</button>
                </div>
            `;
        });

        cartItemsContainer.innerHTML = cartHTML;
        cartCheckoutButton.style.display = 'block';
    }

    // Update localStorage with current cart state
    localStorage.setItem('cartItems', JSON.stringify(cartItems));
}

// Creating a function so items cannot be duplicated.
function isItemInCart(itemName) {
    return cartItems.some(item => item.name === itemName);
}

// Function to add item to cart
function addToCart(button) {
    const card = button.closest('.card');
    const itemName = card.querySelector('.name1').textContent.trim();
    const itemPrice = card.querySelector('.price').textContent.trim();
    const itemImage = card.querySelector('.image img').src;

    // Check if an already exist in the cart 
    if (isItemInCart(itemName)) {
        showNotification('This item already exist in your cart!', true);
        return;
    }                           

    const newItem = {
        name: itemName,
        price: itemPrice,
        image: itemImage,
    };

    cartItems.push(newItem);
    cartItemCount++;

    // Show a brief notification that item was added
    showNotification('Item added to cart!');
    updateCartUI();
}

// Function to remove item from cart
function removeFromCart(index) {
    cartItems.splice(index, 1);
    cartItemCount--;
    updateCartUI();
}

// Event delegation for "Add to Cart" buttons
document.addEventListener('click', (e) => {
    if (e.target.classList.contains('btn10')) {
        addToCart(e.target);
    }
});

// Add CSS styles for cart items
const style = document.createElement('style');
style.textContent = `
    .cart-item {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: left;
        padding: 10px;
        border-bottom: 1px solid #eee;
        overflow: hidden;
    }
    .cart-item-details {
        width: 230px;
    }
    .cart-item button {
        background: black;
        border: none;
        font-size: 20px;
        cursor: pointer;
        color: white;
    }
    @keyframes fadeOut {
        from { opacity: 1; }
        to { opacity: 0; }
    }
`;
document.head.appendChild(style);

// Initialize cart UI with data from localStorage
updateCartUI();

// Navbar Functionality End


// Filter Functionality Start


// Function to toggle filter dropdown visibility
function toggleDropdown() {
    dropdownList.classList.toggle('show');
}

// Event listener for filter button click
filter.addEventListener('click', (e) => {
    e.stopPropagation();
    toggleDropdown();
});

// Checking the condition for closing the screen when the btn is clicked outside.
window.addEventListener('click', function (e) {
    if (!e.target.matches('.filter1') && !dropdownList.contains(e.target)) {
        dropdownList.classList.remove('show');
    }
});

// Checking if an item is clicked in dropdoen menu and showing that item in span 
items.forEach((item) => {
    item.addEventListener('click', (e) => {
        // Hide dropdown
        dropdownList.classList.remove('show');

        // Update span content
        selectedItemSpan.innerHTML = `
            ${e.target.textContent}
            <i class="fa-solid fa-xmark"></i>
        `;
        // Show span
        selectedItemSpan.style.display = 'inline-block';
    });
});

// Handle for removing span
selectedItemSpan.addEventListener('click', function (e) {
    if (e.target.matches('.fa-xmark')) {
        // Hide the span
        selectedItemSpan.style.display = 'none';

        let defaultContent = document.querySelector('.content-0');
        defaultContent.style.display = 'block';

        let menShoe = document.getElementById('Men-Shoe');
        let menSneakers = document.getElementById('Men-Sneakers');
        let menCrocs = document.getElementById('Men-Crocs');
        let kidzShoe = document.getElementById('Kidz-Shoe');
        let kidzSneakers = document.getElementById('Kidz-Sneakers');
        let kidzCrocs = document.getElementById('Kidz-Sandal');
        let NewArrival = document.getElementById('New-Arrival');
        let sale = document.getElementById('Sale');

        if (menShoe || menSneakers || menCrocs || kidzShoe || kidzSneakers || kidzCrocs || NewArrival || sale) {
            menShoe.style.display = 'none';
            menSneakers.style.display = 'none';
            menCrocs.style.display = 'none';
            kidzShoe.style.display = 'none';
            kidzSneakers.style.display = 'none';    
            kidzCrocs.style.display = 'none';
            NewArrival.style.display = 'none';
            sale.style.display = 'none';
        }
    }
});


// Sorting filter items through buttons


// Loader for images

const images = document.querySelectorAll('.image img');
const loaders = document.querySelectorAll('.pre-loader');
let loadedImages = 0;
// Hide all images initially and show loaders
images.forEach((img, index) => {

    const loader = loaders[index];
    img.style.display = 'none';
    loader.style.display = 'iniline-block';

    const tempImages = new Image();
    tempImages.src = img.src;

    const hideLoadersAndShowImage = () => {
        loader.style.display = 'none';
        img.style.display = 'block';
        img.style.opacity = '0';

        setTimeout(() => {
            img.style.transition = 'opacity 0.5s ease-in';
            img.style.opacity = '1';
        }, 50);
    }

    tempImages.onload = function () {
        setTimeout(hideLoadersAndShowImage, 2000);
    }


    setTimeout(() => {
        if (loader.style.display !== 'none') {
            console.warn(`Loader timeOut for Image: ${img.src} `);
            hideLoadersAndShowImage();
        }
    }, 5000);
});


// Chnaging content through fiter buttons
// Load More functionality
let filterItem = document.querySelectorAll('.item-name');
let defaultContent = document.querySelector('.content-0');
let allContentSections = document.querySelectorAll('.content-section');
let loadMoreBtn = document.querySelectorAll('.LoadMore');
let currentSec = 2;

// Function to handle load more button click
function handleLoadMore(buttons, boxes) {
    buttons.forEach(button => {
        button.addEventListener('click', () => {

            let newSec = Math.min(currentSec + 1, boxes.length);

            for (let i = currentSec; i < newSec; i++) {
                if (boxes[i]) {
                    boxes[i].style.display = 'block';
                }
            }

            currentSec = newSec;

            buttons.forEach(btn => {
                btn.style.display = currentSec >= boxes.length ? 'none' : 'block';
            });
        });
    });
}

function initialBoxes(boxes) {
    boxes.forEach((box, index) => {
        box.style.display = index < currentSec ? 'block' : 'none';
    });
}

let boxes = defaultContent.querySelectorAll('.sec');
currentSec = 2;
initialBoxes(boxes);
handleLoadMore(loadMoreBtn, boxes);

filterItem.forEach((item) => {
    item.addEventListener('click', () => {

        allContentSections.forEach((content) => {
            content.style.display = 'none';
        });

        let targetBoxes;
        let targetSection;

        switch (item.textContent.trim()) {
            case 'Men-Shoe':
                targetSection = document.getElementById('Men-Shoe');
                break;
            case 'Men-Sneakers':
                targetSection = document.getElementById('Men-Sneakers');
                break;
            case 'Men-Crocs':
                targetSection = document.getElementById('Men-Crocs');
                break;
            case 'Kidz-Shoe':
                targetSection = document.getElementById('Kidz-Shoe');
                break;
            case 'Kidz-Sneakers':
                targetSection = document.getElementById('Kidz-Sneakers');
                break;
            case 'Kidz-Sandal':
                targetSection = document.getElementById('Kidz-Sandal');
                break;
        }

        if (targetSection) {
            defaultContent.style.display = 'none';
            targetSection.style.display = 'block';
            targetBoxes = targetSection.querySelectorAll('.sec');

            currentSec = 2;

            initialBoxes(targetBoxes);

            loadMoreBtn.forEach(btn => {
                btn.replaceWith(btn.cloneNode(true));
            });

            loadMoreBtn = document.querySelectorAll('.LoadMore');

            handleLoadMore(loadMoreBtn, targetBoxes);

            loadMoreBtn.forEach(btn => {
                btn.style.display = currentSec >= targetBoxes.length ? 'none' : 'block';
            });
        }
    });
});

// Filter Functionality End


// Storing all this information inside the localStorage to retrive it on other pages
const cardItems = [];
const cards = document.querySelectorAll('.card');

cards.forEach(card => {
    const Image1 = card.querySelector('.image img')?.src || '';
    const name1 = card.querySelector('.name1')?.textContent.trim() || '';
    const price = card.querySelector('.price')?.textContent.trim() || '';
    const authorDiv = card.querySelector('.author');
    const brand = authorDiv.querySelector('.name')?.textContent.trim() || '';
    const catog = authorDiv.lastChild?.nodeValue.trim() || '';

    const cardProduct = {
        name: name1,
        price: price,
        image: Image1,
        catogery: catog,
    };

    if (!cardItems.some(item => item.name === name1 && item.price === price && item.image === Image1)) {
        cardItems.push(cardProduct);
    }

});

localStorage.setItem('cardItems', JSON.stringify(cardItems));