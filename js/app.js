const practiceAreas = [
    {
        id: 1,
        img: './img/corporateLaw 1.svg',
        title: 'Corporate and Business Law',
        text: "Nibh sit eros, eu elit dis augue nam rhoncus ultricies. Sapien morbi sed faucibus consectetur tincidunt.Nibh sit eros, eu elit dis augue nam rhoncus ultricies. ",
        link: './corporate.html'
    },
    {
        id: 2,
        img: './img/tax 1.svg',
        title: 'Tax Law',
        text: "Nibh sit eros, eu elit dis augue nam rhoncus ultricies. Sapien morbi sed faucibus consectetur tincidunt.Nibh sit eros, eu elit dis augue nam rhoncus ultricies. ",
        link: './tax.html'
    },
    {
        id: 3,
        img: './img/balance 1.svg',
        title: 'Merger and Acqisition',
        text: "Nibh sit eros, eu elit dis augue nam rhoncus ultricies. Sapien morbi sed faucibus consectetur tincidunt.Nibh sit eros, eu elit dis augue nam rhoncus ultricies. ",
        link: './ma.html'
    },
    {
        id: 4,
        img: './img/family 1.svg',
        title: 'Family and succession',
        text: "Nibh sit eros, eu elit dis augue nam rhoncus ultricies. Sapien morbi sed faucibus consectetur tincidunt.Nibh sit eros, eu elit dis augue nam rhoncus ultricies. ",
        link: './family.html'
    },
    {
        id: 5,
        img: './img/intellectual-property 1.svg',
        title: 'Intellectual Property',
        text: "Nibh sit eros, eu elit dis augue nam rhoncus ultricies. Sapien morbi sed faucibus consectetur tincidunt.Nibh sit eros, eu elit dis augue nam rhoncus ultricies. ",
        link: './ip.html'
    },
]

const paContainer = document.querySelector('.practice-areas .container')


const paInner = practiceAreas.map(item =>{
    if(item.id === 5){
        return `<div class=" col-md-6 col-md-offset-3 col-xl-offset-0 col-xl-4">
                <div class="pa-card">
                <img src="${item.img}" alt="">
                <h2 class="pa-card-title">
                    ${item.title}
                </h2>
                <p class="pa-card-text">
                    ${item.text}
                </p>
                <a href="${item.link}">Learn More</a>
                </div>
            </div>`
    }else if(item.id === 4){
        return `<div class=" col-md-6 col-xl-4 col-xl-offset-2">
                <div class="pa-card">
                <img src="${item.img}" alt="">
                <h2 class="pa-card-title">
                    ${item.title}
                </h2>
                <p class="pa-card-text">
                    ${item.text}
                </p>
                <a href="${item.link}">Learn More</a>
                </div>
            </div>`
    }else{
        return `<div class=" col-md-6 col-xl-4">
        <div class="pa-card">
           <img src="${item.img}" alt="">
           <h2 class="pa-card-title">
              ${item.title}
           </h2>
           <p class="pa-card-text">
              ${item.text}
           </p>
           <a href="${item.link}">Learn More</a>
        </div>
     </div>`
    }
}).join('')

paContainer.innerHTML = paInner