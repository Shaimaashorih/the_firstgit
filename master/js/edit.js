document.getElementById('go').onclick = function(){
    let selColumn = document.querySelectorAll(".h");
    let runInp = document.getElementById('run');
    for( let i = 0; i < selColumn.length; i++ ){
        selColumn[i].classList.remove("h");
    }
    this.style.display = 'none';
    runInp.style.display = 'inline-block';
}