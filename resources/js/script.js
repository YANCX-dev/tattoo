$(document).ready(function() {
    $(document).delegate('.open', 'click', function(event){
        $(this).addClass('oppenned');
        event.stopPropagation();
    })
    $(document).delegate('body', 'click', function(event) {
        $('.open').removeClass('oppenned');
    })
    $(document).delegate('.cls', 'click', function(event){
        $('.open').removeClass('oppenned');
        event.stopPropagation();
    });
});

const anchors = document.querySelectorAll('a[href*="#"]')
for (let anchor of anchors){
    anchor.addEventListener("click",function (e){
        event.preventDefault();
        const blockID = anchor.getAttribute('href');
        document.querySelector(''+blockID).scrollIntoView({
            behavior:"smooth",
            block:"start"
        })
    })
}