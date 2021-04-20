var hamburgerVisible = false;

function toggleHamburger(){
    hamburgerVisible = !hamburgerVisible;

    for (x of document.getElementsByClassName('active')){
        if(!hamburgerVisible)
            x.style.display = "none";
        else
            x.style.display = "block";
    }

    for (x of document.getElementsByClassName('inactive')){
        if(!hamburgerVisible)
            x.style.display = "none";
        else
            x.style.display = "block";
    }
}