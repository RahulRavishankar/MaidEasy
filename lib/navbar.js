function clickedIt() 
{   
    let canSee = document.getElementById("navbar-ham").getAttribute("aria-expanded");
    let moreOpen = document.getElementById("navbarDropdown").getAttribute("aria-expanded");
    if(canSee == "true")
    {
        document.getElementById("navbar").style.backgroundColor = "rgba(0,0,0,0.75)";
        document.getElementById("loginButton").style.setProperty("text-align","center","important");
        document.getElementById("signupButton").style.setProperty("text-align","center","important");
        if(moreOpen == "true")
        {
            document.getElementById("more").classList.remove("nav-element");
        }
        else
        {
            document.getElementById("more").classList.add("nav-element");
        }
    }
    else
    {
        document.getElementById("navbar").style.backgroundColor = "transparent";
        document.getElementById("loginButton").style.setProperty("text-align","left","important")
        document.getElementById("signupButton").style.setProperty("text-align","left","important")
    }

setInterval(clickedIt,10);
