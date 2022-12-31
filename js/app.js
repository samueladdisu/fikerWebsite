import { head, foot } from "./common.js"

const practiceAreas = [
  {
    id: 1,
    title: 'Intellectual Property ',
    text: `Ideas are the very foundation upon which innovation, creativity, businesses and brand identities are built upon. Your ideas are your intellectual property rights; it is your most valuable asset and should be protected as such.`,
    link: './ip.html'
  },
  {
    id: 2,
    title: 'Family',
    text: `At Fikir legal service , we recognize that family and relationship matters are sensitive and need to be handled delicately and privately. Dealing with a breakdown of a relationship can be stressful and difficult. `,
    link: './family.html'
  },
  {
    id: 3,
    title: 'Corporate & Commercial Law',
    text: `Our team at Fikir legal service  are not just well-versed in the current corporate and commercial law, but are also updated on the latest industry knowledge and market trends of a wide spectrum of corporate and commercial industries. `,
    link: './commercial.html'
  },
  {
    id: 4,
    title: 'Employment Law',
    text: `Fikir legal  services covers various employment and labour disputes. Our team has a keen understanding of the challenges of dealing with employers, employees and the Ethiopian employment law. `,
    link: './employee.html'
  },
  {
    id: 5,
    title: 'Succession ',
    text: "With fikir legal service, our clients can be assured that their loved ones will be well taken care of when the inevitable happens. We assist our clients and their loved ones in planning for the future and to carry out such plan when the time comes",
    link: './succession.html'
  },
  {
    id: 6,
 
    title: 'Tax',
    text: "Fikir legal service provides you a broad range of legal services on Ethiopian Tax Law. Our Law Office’s Tax team is composed of Tax Attorneys and Tax Advisors with broad range of skills, perfectly suited to advise clients on all issues related to tax in this environment",
    link: './contract.html'
  },
  {
    id: 7,
    title: 'Insurance',
    text: "Our Insurance Lawyers provide legal advice and representation on insurance matters to a full range of clients, including Life Insurance Companies, Property and Casualty Insurance Companies, Reinsurers...",
    link: './succession.html'
  },
]

const paContainer = document.querySelector('.practice-areas .container')

head("home")
foot()

const paInner = practiceAreas.map(item => {
  if (item.id === 5) {
    return `<div class=" col-md-6 col-md-offset-3 col-xl-offset-0 col-xl-4">
                <div class="pa-card">
                 
                <h2 class="pa-card-title">
                    ${item.title}
                </h2>
                <p class="pa-card-text">
                    ${item.text}
                </p>
                <a href="${item.link}">Learn More</a>
                </div>
            </div>`
  } else if (item.id === 4) {
    return `<div class=" col-md-6 col-xl-4 col-xl-offset-2">
                <div class="pa-card">
                
                <h2 class="pa-card-title">
                    ${item.title}
                </h2>
                <p class="pa-card-text">
                    ${item.text}
                </p>
                <a href="${item.link}">Learn More</a>
                </div>
            </div>`
  } else {
    return `<div class=" col-md-6 col-xl-4">
        <div class="pa-card">
          
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

const nextBtn = document.querySelector('.next')
const prevBtn = document.querySelector('.prev')
const slides = document.querySelectorAll('.single-test')


slides.forEach((slide, index) => {
  slide.style.left = `${index * 100}%`
})

let counter = 0;

nextBtn.addEventListener('click', () => {
  counter++
  if (counter > slides.length - 1) {
    counter = 0;
  }
  carousel()

})

prevBtn.addEventListener('click', () => {
  counter--
  if (counter < 0) {
    counter = slides.length - 1
  }
  carousel()
})

function carousel() {

  slides.forEach(function (slide) {
    slide.style.transform = `translateX(-${counter * 100}%)`;
  });
}


const tabs = Vue.createApp({
  data() {
    return {
      toggle: false,
    }
  },
  methods: {
    toggleshow(e) {
      let pro = this.$refs.profile
      let exp = this.$refs.exp
      let edu = this.$refs.edu
      let id = e.target.dataset.id
      let btnPro = this.$refs.btnPro
      let btnExp = this.$refs.btnExp
      let btnEdu = this.$refs.btnEdu

      if (pro.classList.contains(id)) {
        btnEdu.classList.remove('active')
        btnExp.classList.remove('active')
        btnPro.classList.add('active')


        edu.classList.remove('show')
        exp.classList.remove('show')
        pro.classList.add('show')
      }
      if (edu.classList.contains(id)) {
        btnPro.classList.remove('active')
        btnExp.classList.remove('active')
        btnEdu.classList.add('active')

        pro.classList.remove('show')
        edu.classList.remove('show')
        exp.classList.add('show')
      }
      if (exp.classList.contains(id)) {
        btnPro.classList.remove('active')
        btnEdu.classList.remove('active')
        btnExp.classList.add('active')


        pro.classList.remove('show')
        exp.classList.remove('show')
        edu.classList.add('show')
      }
    }
  }
})

tabs.mount('#tabs')
const sideLink = document.querySelectorAll('.side-link')
var path = window.location.href
window.addEventListener('load', (e) => {

  sideLink.forEach(link => {
    if (link.href === path) {
      link.classList.add('active-link')
    }
  })


})
