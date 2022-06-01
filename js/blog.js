import { head , foot } from './common.js';

head("blog")


foot()
// let deafultValue = 3; /* set Active: index start from zero */

// /* 2/2 change content base on select */
// $(document).ready(function(){
//   /* set the deafult select-menu value */
//   $('#search-select').prop('selectedIndex', deafultValue); 
//   //hides dropdown content
//   $(".dropdown-content-bond").hide();
//   //unhides index option content
//   $(".dropdown-content-bond").eq( deafultValue ).show();
//   //listen to dropdown for change
//   $("#search-select").change(function(){
//     //rehide content on change
//     $('.dropdown-content-bond').hide();
//     //unhides current item
//     var currentIndex = $(this).prop('selectedIndex');
//     console.log(currentIndex);
//     $(".dropdown-content-bond").eq( currentIndex ).show(); 
//   });
  
// });


const selected = document.querySelector('#search-select')
const blogContent = document.querySelectorAll('.single-blog')

selected.addEventListener('click', () => {
    
    blogContent.forEach(blog => {
      let id = blog.dataset.id
      blog.style.display = 'none'
      if(selected.value == id) {
        blog.style.display = 'block'
      }
    })
  })



