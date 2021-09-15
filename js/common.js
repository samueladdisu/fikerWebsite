function head(bannerClass){
    const header = document.getElementById('header')

    if(bannerClass == "home"){
      header.innerHTML = `<nav class="nav">
     <div class="container">
       <div class="nav-header">
         <div class="logo">
         <a href="./index.html"><img src="./img/fiker_logo.svg" alt="Fiker legal service Logo" /> </a>
         </div>
         <div class="menu">
           <img src="./img/menu-white.svg" class="ham" alt="" />
         </div>
       </div>

       <div class="links-container">
         <ul class="nav-links">
           <li><a href="./about.html" class="scroll-link">About us</a></li>
           <li>
             <a href="./pa.html" class="scroll-link">Practice Areas</a>
           </li>
           <li>
             <a href="./careers.html" class="scroll-link">Careers</a>
           </li>
           <li><a href="./blog.html" class="scroll-link">Blog</a></li>
           <li><a href="./contact.html" class="scroll-link">Contact</a></li>
         </ul>
       </div>
     </div>
   </nav>

   <div class="${bannerClass}-banner">
   <div class="container hero">
   <div class="headline">
     <h1 class="title">
       Committed To Achieving Successful Results For Our Clients.
     </h1>
     <p class="subtitle">
       In ac viverra natoque in nisl, pretium. Phasellus quisque egestas
       nullam erat at egestas.
     </p>
     <a href="./contact.html" class="btn btn-primary">
       Request A Free Consultation
     </a>
   </div>
 </div>   
   </div>`
    }else if(bannerClass == 'career'){
      header.innerHTML = `<nav class="nav">
      <div class="container">
        <div class="nav-header">
          <div class="logo">
          <a href="./index.html">
          <img src="./img/fiker_logo.svg" alt="Fiker legal service Logo" /> 
          </a>
          </div>
          <div class="menu">
            <img src="./img/menu-white.svg" class="ham" alt="" />
          </div>
        </div>
 
        <div class="links-container">
          <ul class="nav-links">
            <li><a href="./about.html" class="scroll-link">About us</a></li>
            <li>
              <a href="./pa.html" class="scroll-link">Practice Areas</a>
            </li>
            <li>
              <a href="./careers.html" class="scroll-link">Careers</a>
            </li>
            <li><a href="./blog.html" class="scroll-link">Blog</a></li>
            <li><a href="./contact.html" class="scroll-link">Contact</a></li>
          </ul>
        </div>
      </div>
    </nav>
 
    <div class="${bannerClass}-banner">
    <div class="container hero">
    <div class="headline">
      <h1 class="${bannerClass}-title">
      Join Our Team
      </h1>
    </div>
  </div>   
    </div>`
    } else{
      header.innerHTML = `<nav class="nav">
     <div class="container">
       <div class="nav-header">
         <div class="logo">
         <a href="./index.html"><img src="./img/fiker_logo.svg" alt="Fiker legal service Logo" /> </a>
         </div>
         <div class="menu">
           <img src="./img/menu-white.svg" class="ham" alt="" />
         </div>
       </div>

       <div class="links-container">
         <ul class="nav-links">
           <li><a href="./about.html" class="scroll-link">About us</a></li>
           <li>
             <a href="./pa.html" class="scroll-link">Practice Areas</a>
           </li>
           <li>
             <a href="./careers.html" class="scroll-link">Careers</a>
           </li>
           <li><a href="./blog.html" class="scroll-link">Blog</a></li>
           <li><a href="./contact.html" class="scroll-link">Contact</a></li>
         </ul>
       </div>
     </div>
   </nav>

   <div class="${bannerClass}-banner">
     
   </div>`
    }
     
    const navToggle = document.querySelector('.menu');
    const linksContainer = document.querySelector('.links-container');
    const nav = document.querySelector('.nav');
    const logo = document.querySelector('.logo');
    const menu = document.querySelector('.menu');
    const fixed = document.querySelector('.fixed-nav')
    const links = linksContainer.querySelectorAll('.nav-links li a')
    navToggle.addEventListener('click', () =>{
        console.log(navToggle);
        linksContainer.classList.toggle('show-links');
    })
    console.log(fixed);
    window.addEventListener('scroll', ()=>{
        const navheight = nav.getBoundingClientRect().height;
        const scorllheight = window.pageYOffset;
        console.log('navHeight', navheight);
        console.log('scorllHeight', scorllheight);
        if(scorllheight > navheight)
        {
            menu.innerHTML = ` <img src="./img/menu-black.svg" class="ham" alt="" />`
            links.forEach(item =>{
                item.classList.add('black')
            })
            logo.innerHTML = `<a href="./index.html"><img src="./img/second_logo.svg" alt="Battery World Logo"></a>`
            nav.classList.add('fixed-nav')
        }else{
            logo.innerHTML = `<a href="./index.html"><img src="./img/fiker_logo.svg" alt="Fiker legal service Logo" /> </a>`
            nav.classList.remove('fixed-nav')
            menu.innerHTML = ` <img src="./img/menu-white.svg" class="ham" alt="" />`
            links.forEach(item =>{
                item.classList.remove('black')
            })
        }
    })
}

function foot (){
    const footer = document.getElementById('footer')
    footer.innerHTML = ` <div class="container row">
    <div class="about-footer col-md-6 col-xl-4">
      <img src="./img/second_logo.svg" class="footer-logo" alt="" />
      <p>
        Curabitur senectus tellus diam aliquam, sed. Vivamus eget sit amet
        etiam. Sed sit eget vel viverra cursus proin condimentum. Molestie
        scelerisque amet vitae turpis pulvinar commodo.
      </p>
      <div class="footer-social">
        <a href="#">
          <img src="./img/facebook.svg" alt="" />
        </a>
        <a href="#">
          <img src="./img/twitter.svg" alt="" />
        </a>
        <a href="#">
          <img src="./img/linkedin.svg" alt="" />
        </a>
      </div>
    </div>

    <div
      class="quick-link col-md-3 col-md-offset-1 col-xl-2 col-xl-offset-0"
    >
      <h2>Quick Links</h2>

      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Careers</a></li>
        <li><a href="#">Blog</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </div>

    <div class="practice-link col-md-6 col-xl-3">
      <h2>Practice Areas</h2>

      <ul>
        <li><a href="#">Corporate and Buisness Law</a></li>
        <li><a href="#">Tax Law</a></li>
        <li><a href="#">Merger and Aquisition</a></li>
        <li><a href="#">Family and Succession</a></li>
        <li><a href="#">Intellectual Property</a></li>
      </ul>
    </div>

    <div
      class="contact-info col-md-3 col-md-offset-1 col-xl-3 col-xl-offset-0"
    >
      <h2>Contact Info</h2>
      <div class="contact-box">
        <img src="./img/phone.svg" alt="" />
        <div class="contact-info-text">
          <p><a href="tel:+251911621586">+251911621586</a></p>
          <p><a href="+251973184917">+251973184917/18</a></p>
          <p><a href="+251118131945">+251118131945</a></p>
        </div>
      </div>

      <div class="contact-box">
        <img src="./img/email.svg" alt="" />
        <div class="contact-info-text">
          <p>
            <a href="mailto:fikirlaw1@gmail.com">fikirlaw1@gmail.com</a>
          </p>
          <p>
            <a href="mailto:fikirlaw1@yahoo.com">fikirlaw1@yahoo.com</a>
          </p>
        </div>
      </div>

      <div class="contact-box">
        <img src="./img/post.svg" alt="" />
        <div class="contact-info-text">
          <p>P.O.Box 25318 cod1000 Addis Ababa, Ethiopia</p>
        </div>
      </div>

      <div class="contact-box">
        <img src="./img/location.svg" alt="" />
        <div class="contact-info-text">
          <p>
            Infront of Lideta Church Awash Bank Buld. 1st Floor Office No M7
          </p>
        </div>
      </div>
    </div>
  </div>
  <p class="copyright">
    CopyRight 2021. Designed By
    <a href="https://www.versavvymedia.com/">Versavvy Media PLC</a>
  </p>`
}

export { head, foot}