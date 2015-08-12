$('document').ready(function() {
    $("html").niceScroll();
    init();
});

function init() {
    titleHash();
    setWhalePosition();
}

function setWhalePosition() {
    var whale = $('.whale');
    var isDisplayed = 0;

    $(document).click(function(e) {
        if(!isDisplayed) {
            whale.css({
                "left": e.pageX-whale.width()/2,
                "top": e.pageY-whale.height()/2-$(document).scrollTop()
            });
            whale.addClass("displayed");
            isDisplayed = 1;
        }
    });
}

function titleHash() {
    var title = $('.title');
}