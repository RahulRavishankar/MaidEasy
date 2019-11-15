function displayRadioValue() 
{ 
    var ele = document.getElementsByName('community-type'); 
      
    for(i = 0; i < ele.length; i++) 
    {
        let value = ele[i].value;
        ele[i].addEventListener("click" ,function(){
            document.getElementById("image").src = "img/" + value + ".jpg";
        }); 
    } 
}
displayRadioValue();