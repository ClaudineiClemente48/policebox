let indexSlide = 0;
 
function showlide(index){
    const totalSlide = document.querySelectorAll('.carrosel img').length;
    const carrosel = document.querySelector ('.carrosel');
 
    if (index >= totalSlide) {
        indexSlide = 0;
        index = indexSlide;
    } else if (index < 0){
        indexSlide = totalSlide -1;
        index = indexSlide;
    }
 
    const offset = index * -100;
    carrosel.style.transform = `translateX(${offset}%)`;
}
 
function prevSlide(){
    indexSlide = indexSlide - 1;
    showlide(indexSlide);
}
 
function nextSlide(){
    indexSlide = indexSlide + 1;
    showlide(indexSlide);
}
 
 