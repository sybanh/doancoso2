var btnSearch = document.querySelector('.search__box i');
btnSearch.addEventListener('click',function(){
    this.parentElement.classList.toggle('open');
    this.previousElementSibling.focus();
})
