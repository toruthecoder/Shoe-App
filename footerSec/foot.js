// Our Journey Start
let back = document.querySelector('.back button');
let btn = document.querySelectorAll('button');

btn.forEach(button => {
    button.addEventListener('click', (e) => {
        if (e.target.classList.contains('fa-moon')) {
            document.body.style.backgroundColor = 'black';
            document.body.style.color = 'white';
            btn.forEach(button => { button.style.backgroundColor = 'white' });
            back.style.backgroundColor = 'black';
            back.style.color = 'white';
        } else {
            if (e.target.classList.contains('fa-sun')) {
                document.body.style.backgroundColor = '#fff';
                document.body.style.color = 'black';
                back.style.backgroundColor = 'white';
                back.style.color = 'black';
            }
        }
    });
});

// Our Journey End

// Blog Start

let cardItems = JSON.parse(localStorage.getItem('cardItems')) || [];
console.log(cardItems);
function UploadContent( ) {
    let cardHTML = '';
    cardItems.forEach((item) => {
        cardHTML += `
        <div class="wrapper">
            <div class="container">
                <div class="image">
                    <img src="${item.image}" alt="image from local storage">
                </div>
                <h1>${item.name}</h1>
            </div>
            <div class="desc">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.<br> Voluptate earum, iure id labore tenetur numquam ipsam quos. <br>Illo earum molestias, enim ipsum blanditiis laboriosam nemo,<br> dolore natus ex nam obcaecati eaque iusto quam eum optio architecto beatae<br> perferendis impedit ratione animi officia ea libero illum?<br> Temporibus impedit corporis harum quisquam.                Lorem ipsum dolor sit amet consectetur adipisicing elit.<br> Voluptate earum, iure id labore tenetur numquam ipsam quos. 
            </div>
        </div>`
    });

    let content = document.querySelector('.content');
    content.innerHTML = cardHTML;
}
UploadContent();
// Blog End