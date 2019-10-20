function clickedIt() 
{   
    let canSee = document.getElementById("navbar-ham").getAttribute("aria-expanded");
    if(canSee == "true")
    {
        document.getElementById("navbar").style.backgroundColor = "rgba(0,0,0,0.75)";
    }
    else
    {
        document.getElementById("navbar").style.backgroundColor = "transparent";
    }
}
setInterval(clickedIt,10);