(function ($) {

    let box = document.getElementsByClassName('taxiBox');
    let number = document.getElementsByClassName('number');
    let adminTaxiBoxNumber = $('.taxiBoxAdmin').children('.number');
    
    $(document).ready(function () { $(number).hide(); adminTaxiBoxNumber.show(); });

    $(box).click(function (e) {
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
    });

  var editModal = $('.editmodal');
  $(document).ready(function (e) {
    $(editModal).add($('.deletemodal')).hide(); 

});
    

let taxiBoxAdmin = $('.taxiBoxAdmin');
let taxiName = $('h2')

$(taxiBoxAdmin).on('click', function (e) {
    e.stopPropagation();
    var id = $(e.target).attr('id');
    $('.editmodal'+id).slideToggle(300);
});

$(taxiName).on('click', function (e) {
    var id = $(e.target).parents('.taxiBoxAdmin').attr('id');
    let boxNum = $(box).children(".number");

    $('.editmodal'+id).slideToggle(300);
})

$(document).mouseup(function (e) {
    var editmodal = $('.editmodal').add($('.deletemodal'));
    //ak target nie je objekt na ktorý sa kliklo, ani jeho potomok
    if(!editmodal.is(e.target) && editmodal.has(e.target).length === 0) {
        editmodal.hide();
    }
});

let deleteButton = $('.deletetaxi');

$(deleteButton).click(function (e) {
    let deletebtn = $(e.target).parents('.taxiBoxAdmin').attr('id');
    $('.deletemodal').slideToggle();


})

$(window).on("load", function () {
    $('.loader').fadeOut("slow");
});

$(window).on('load', function () {

    if((screen.width<=560)){
        $('.navigation').hide();
    }
})

$(window).resize(function () {

    if((screen.width<=560)){
        $('.navigation').hide();
    } else {
        $('.navigation').show();
    }
})

let menuIcon = $('.menuIcon');

$(menuIcon).on('click', function(e){
    e.preventDefault();
    $('.navigation').slideToggle();
})

$('.closeButton').on('click', function(e){
    e.preventDefault();
    $('.navigation').slideToggle();
})

$(document).mouseup(function(e){
    
    if((screen.width<=560) && !$('.navigation').is(e.target) && $('.navigation').has(e.target).length === 0) {
        $('.navigation').hide();
}})
})(jQuery)