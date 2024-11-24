// Calling the local storage 
let cardItems = JSON.parse(localStorage.getItem('cardItems')) || [];
console.log(cardItems);

let cartsItems = JSON.parse(localStorage.getItem('cartItems')) || [];
console.log(cartsItems);

let container = document.querySelector('.container');
function retriveData(catogery) {
    let cardItemHTML = '';
    let filteredItems = cardItems.filter((item) => item.catogery === catogery);

    cardItemHTML += '<div class="container1">';

    // Loop through each item and add it as a card inside the grid container
    filteredItems.forEach((item) => {
        cardItemHTML += `
            <article class="card" style="--ispopular: true">
                <div class="author">
                    <div class="name"></div>
                    Catogery : ${item.catogery}
                </div>
                <div class="image">
                    <img src="${item.image}" alt="#">
                    <div class="pre-loader"></div>
                </div>
                <div class="info">
                    <div class="name1">${item.name}</div>
                    <div class="price">$${item.price}</div>
                </div>
                <div class="more">
                    <div class="but">
                        <button class="btn10">ADD TO CART</button>
                    </div>
                </div>
            </article>
        `;
    });

    // Close the grid container after the loop
    cardItemHTML += '</div>';

    if (container) {
        container.innerHTML = '';
        container.innerHTML = cardItemHTML;
    }
    else {
        console.log('Container Element Not Found');
    }

    let buttons = container.querySelectorAll('.btn10');
    buttons.forEach((button, index) => {

        button.addEventListener('click', () => {

            if (cartsItems && container && buttons) {

                let itemToAdd = filteredItems[index];

                if(isItemInCart(itemToAdd.name)){
                    showNotification('This item already exist in your cart!', true);
                    return;
                }

                if (itemToAdd) {
                    let prod = {
                        name: itemToAdd.name,
                        price: itemToAdd.price,
                        image: itemToAdd.image
                    }

                    showNotification(`Item added to cart!`);
                    cartsItems.push(prod);
                    localStorage.setItem(('cartItems'), JSON.stringify(cartsItems));
                    console.log(`Added to cart : `, prod);
                }
            }
        });
    });
}

function isItemInCart(name) {
    return cartsItems.some(item => item.name === name);
}

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
        opacity: 1
        animation: fadeOut 2s ease-in-out forwards;
    `;
    document.body.appendChild(notification);
    setTimeout(() => notification.remove(), 1000);
}

let loader = document.querySelector('.loader');
let icon = document.querySelector('.icon');
let search = document.querySelector('.search');
let input = document.querySelector('.search input');
let searchIcon = document.querySelector('.search i');
let h1 = document.querySelector('.content h1');
let isLoaderTurn = false;
loader.style.display = 'none';

function loadLoader(catogery) {

    loader.style.display = 'block';
    icon.style.display = 'none';
    search.style.display = 'none';
    isLoaderTurn = true;

    setTimeout(() => {
        loader.style.display = 'none';
        icon.style.display = 'block';
        search.style.display = 'block';
        search.style.top = '10px';
        search.style.left = '75%';
        search.style.top = '10px';
        search.style.left = '75%';
        searchIcon.classList.remove('fa-magnifying-glass');
        searchIcon.classList.add('fa-xmark');
        input.style.width = '190px';
        isLoaderTurn = false;

        retriveData(catogery);
    }, 3000);

}

function unLoadLoader() {

    searchIcon.addEventListener('click', function (e) {
        if (e.target === searchIcon || input.value.trim() === '') {
            loader.style.display = 'block';
            icon.style.display = 'none';
            search.style.display = 'none';
            if (container) {
                container.innerHTML = '';
            }
            isLoaderTurn = true;

            setTimeout(() => {
                loader.style.display = 'none';
                icon.style.display = 'block';
                search.style.display = 'block';
                search.style.top = '250px';
                search.style.left = '17%';
                input.style.width = '700px';
                h1.style.left = '40%';
                content.style.display = 'block';
                searchIcon.classList.remove('fa-xmark');
                searchIcon.classList.add('fa-magnifying-glass');
                if (container) {
                    container.innerHTML = '';
                }
                input.value = '';
                isLoaderTurn = false;
            }, 2000);
        }
    });
}

unLoadLoader();

let catog = document.querySelector('.catogery');
let buttons = catog.querySelectorAll('button');
let content = document.querySelector('.content');

buttons.forEach((button) => {

    button.addEventListener('click', function () {

        let btn = button.innerText.trim();
        content.style.display = 'none';

        switch (btn) {
            case 'Men-Shoes':
                loadLoader('Men-Shoe');
                input.value = 'Men-Shoes';
                break;

            case 'Kidz-Shoes':
                loadLoader('Kidz-Shoe');
                input.value = 'Kidz-Shoes';
                break;

            case 'Men-Sneakers':
                loadLoader('Men-Sneaker');
                input.value = 'Men-Sneakers';
                break;

            case 'Kidz-Sneakers':
                loadLoader('Kidz-Sneaker');
                input.value = 'Kidz-Sneaker';
                break;

            case 'Men-Crocs':
                loadLoader('Men-Croc');
                input.value = 'Men-Crocs';
                break;

            case 'Kidz-Sandal':
                loadLoader('Kidz-Sandal');
                input.value = 'Kidz-Sandal';
                break;
        }
    })

});

