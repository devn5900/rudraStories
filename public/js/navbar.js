
var i=0;
function slidefun(){
    // const slide=document.getElementById("top");
    const midlink=document.getElementById("midlink");
    const rightlink=document.getElementById("rightlink");
    const open=document.getElementById("open");
    const close=document.getElementById("close");
    if(i==0){
        midlink.style.display="block";
        rightlink.style.display="flex";
        // slide.style.display="flex";
        open.style.display="none";
        close.style.display="block";
        i++;
    }
    
}
function closeslide(){
    // const slide=document.getElementById("top");
    const rightlink=document.getElementById("rightlink");
    const midlink=document.getElementById("midlink");
    const open=document.getElementById("open");
    const close=document.getElementById("close");
    if(i==1){
        midlink.style.display="none";
        rightlink.style.display="none";
        // slide.style.display="none";
        open.style.display="block";
        close.style.display="none";
        i--;
        
    }
}
setTimeout(function(){
var wel=document.getElementById("welsc")
wel.style.position="relative";
wel.style.left="2000px";
// wel.style.transition="left 5s linear";
setTimeout(function(){

    wel.style.display="none";
},4000);

},5000);

