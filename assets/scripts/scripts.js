(function ($) { 

    let box = document.getElementsByClassName('taxiBox');
    let number = document.getElementsByClassName('number');

    $(document).ready(function () { $(number).hide(); });

    $(box).click(function(event) {
        let box = $(this).add("h2");
        let boxNum = $(box).children(".number");
        
    $(boxNum).stop().toggle(100); 
});
}) (jQuery)