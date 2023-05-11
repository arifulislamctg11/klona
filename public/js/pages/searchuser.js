document.addEventListener("DOMContentLoaded", function(event) {
    let searchuserr = document.getElementById('searchuser');
    let mobolsearch=document.querySelector('#mobilesearch')

    const popup = document.querySelector('.popup');
let searchfor=document.querySelector('.searchform')
let cancelbtn=document.querySelector('.cancelbtn')
    const otherContenttwo=document.getElementById('othercontenttwo')
        const otherContent = document.getElementById('othercontent');
        const closePopupButton = document.getElementById('close-popup');
        console.log(searchfor)
        mobolsearch.addEventListener('click',function(){
            popup.style.backgroundColor = "rgba(0, 0, 0, 0.1)";
             searchfor.style.display="block";
             cancelbtn.style.display="block";
            
            
               })
    searchuserr.addEventListener('click',function(){
popup.style.backgroundColor = "rgba(0, 0, 0, 0.1)";
 searchfor.style.display="block";
 cancelbtn.style.display="block";


   })
   cancelbtn.addEventListener('click',(function(){
    searchfor.style.display="none";
    cancelbtn.style.display="none";  
    otherContent.style.pointerEvents = 'all';      
    otherContenttwo.style.pointerEvents="all";
    
   }))
});