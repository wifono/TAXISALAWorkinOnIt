(function ($) { 

    let box = document.getElementsByClassName('taxiBox');
    let order = document.getElementsByClassName('order');
    let number = document.getElementsByClassName('number');

    $(document).ready(function () {


    
        $(number).hide();

    })

    $(box).click(function(event) {
        
        let box = event.target;

        let boxNum = $(box).children(".number");
 
        $(boxNum).toggle(100);           
        });

}) (jQuery)