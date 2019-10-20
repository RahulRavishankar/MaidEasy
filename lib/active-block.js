//Block to set nav-element change on click
navBlock = document.getElementsByClassName("nav-element");

for (var i = 0; i < navBlock.length; i++) 
{
    navBlock[i].addEventListener("click", function() {
        var current = document.getElementsByClassName("current");
        current[0].className = current[0].className.replace(" current", "");
        this.className += " current";
    });
}


//Block to set nav-element change on scroll
function inView(element)
{
    var rect = element.getBoundingClientRect();
    console.log(element.id);
    console.log("Top :",rect.top,"Bottom :",rect.bottom);
    console.log("Window Top :",window.innerHeight);
    return rect.top == 0 || rect.bottom <= window.innerHeight;
}

blocks = document.getElementsByClassName("block");
function checkCurrent()
{
    for(let i = 0;i<blocks.length;i++)
    {
        if(inView(blocks[i]))
        {
            var current = document.getElementsByClassName("current");
            current[0].className = current[0].className.replace(" current", "");
            navBlock[i].className += " current";
        }
    }
}

setInterval(checkCurrent,100);