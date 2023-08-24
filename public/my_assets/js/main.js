
//  button scroll up
toup.onclick=function(){
window.scrollTo(0,0);
}

//.......................................start script of slide image
var slideimg=Array.from(document.querySelectorAll('.main_slide img'));
var nextbtn=document.getElementById('next');
var backbtn=document.getElementById('back');
var header=document.getElementById('header');
var currentimg=1;

nextbtn.onclick=function(){
    if(currentimg>slideimg.length-1){
        return false;
    }
    else{
        ++currentimg;
        check();
    }
   
}
backbtn.onclick=function(){
    if(currentimg<2){
        return false;
    }
    else{
        --currentimg;
        check();
    }
}
function check(){
    slideimg.forEach(function(e){
        e.classList.remove('active')
    });
    slideimg[currentimg-1].classList.add('active');


    if(currentimg==1){
        backbtn.classList.replace('back','disable');
    }else{
        backbtn.classList.replace('disable','back');
    }

    if(currentimg==slideimg.length){
        nextbtn.classList.replace('next','disable');
    }else{
        nextbtn.classList.replace('disable','next');
    }

    header.innerHTML="slide "+ currentimg +" of "+ slideimg.length;
}
check();


// ..........................................end script of the slid image.............................


