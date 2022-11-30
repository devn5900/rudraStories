
  function comment(){
    var i=0;
  const cmntflex= document.getElementById("cmntsec");
  document.getElementById('cmntbtn').style.color="#0988a8";
  if(i==0){
    cmntflex.style.display="block";
    i++;
  }}
  function valid(){
  
    var cmnt=document.forms["myform"]["comment"].value;
    if(cmnt==" "){
  
      alert("Please Enter First");
      return false;
    }
    else{
      return true;
    }
  }