(function ($) {

    let box = document.getElementsByClassName('taxiBox');
    let number = document.getElementsByClassName('number');
    let adminTaxiBoxNumber = $('.taxiBoxAdmin').children('.number');

    $(document).ready(function () { $(number).hide(); adminTaxiBoxNumber.show(); });

    $(box).click(function (event) {
        let box = $(this).add("h2");
        let boxNum = $(box).children(".number");

        $(boxNum).stop().toggle(100);
    });

    $(window).scroll(function () {

        $('.prefooter').css("background-position-y", ($(this).scrollTop() * -0.2));
    });

    let plusButton = $('.addIcon');
    let addBox = $('.addTaxi');

    $(document).ready(function () {
        $(addBox).hide();
    });

    $(plusButton).on('click', function (e) {
        e.preventDefault();
        $(addBox).slideToggle(300);
    })


})(jQuery)