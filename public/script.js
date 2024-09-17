
document.getElementById('navbarToggle').addEventListener('click', function() {
    var navbarLinks = document.getElementById('navbarLinks');
    navbarLinks.classList.toggle('active');
});

function toggleContent(id, element) {
    var content = document.getElementById(id);
    var arrow = element.querySelector('.arrow');
    
    if (content.classList.contains('active')) {
        content.classList.remove('active');
        arrow.classList.remove('down');
    } else {
        var allContents = document.getElementsByClassName('dropdown-content');
        var allArrows = document.getElementsByClassName('arrow');
        for (var i = 0; i < allContents.length; i++) {
            allContents[i].classList.remove('active');
        }
        for (var j = 0; j < allArrows.length; j++) {
            allArrows[j].classList.remove('down');
        }
        content.classList.add('active');
        arrow.classList.add('down');
    }
}
