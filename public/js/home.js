window.scrollTo({
    top: 0,
    behavior: 'smooth'
});


ciarcle = document.querySelector('.arrow');
let row = document.querySelectorAll('.row');
var pos = [];
let i  = 0;
let j;
var header = document.querySelector('header');
console.log(header.offsetHeight);
for(j = 0; j < row.length; j++){
    var pos1 = row[j].offsetTop;
    pos.push(pos1);
}
console.log(pos);


window.addEventListener('scroll', function () {
if(i + 1  == pos.length){
    document.querySelector('.arrow').innerHTML = 'X';
}
else{
    document.querySelector('.arrow').innerHTML = 'V';
}
 var   top = window.scrollY;
 if(i < 0 ){
        i = 0;
 }   
 console.log('top - pos[' + i + '] = ' + (pos[i] - top) + '\ni = ' + i + '\ntop = ' + top + '\npos[' + i + '] = ' + pos[i]);
 
if(pos[i]  < top){
    if(i < row.length){
        i++;   
    }  
}
else if(pos[i - 1] > top){
        if(i < 0){
            i = 0;
            
        }
        else{
            i--;
            
        }
    }
});

ciarcle.addEventListener('click', function (e) {    
if(i > pos.length - 1){
document.querySelector('.arrow').innerHTML = 'X';
}
e.preventDefault();
if(i < row.length){
    i++;
    window.scrollTo(
        {
            top: pos[i] - header.offsetHeight,
            behavior: 'smooth'
        }
        );
}
else{
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
    i = 0;
}



});