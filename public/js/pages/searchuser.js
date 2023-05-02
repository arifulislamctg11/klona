document.addEventListener("DOMContentLoaded", function(event) {
    let searchuserr = document.getElementById('searchuser');
    const popup = document.querySelector('.popup');
let searchfor=document.querySelector('.searchform')
let cancelbtn=document.querySelector('.cancelbtn')
    const otherContenttwo=document.getElementById('othercontenttwo')
        const otherContent = document.getElementById('othercontent');
        const closePopupButton = document.getElementById('close-popup');
        console.log(searchfor)
    searchuserr.addEventListener('click',function(){
 popup.style.display="block";
 searchfor.style.display="block";
 cancelbtn.style.display="block";
        otherContent.style.pointerEvents = 'none';      
    otherContenttwo.style.pointerEvents="none";
    

   })
});