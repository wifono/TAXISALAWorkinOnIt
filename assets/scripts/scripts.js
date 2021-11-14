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
    });


  var taxiBoxAdmin = $('.taxiBoxAdmin');
  var editModal = $('.editmodal');

  $(document).ready(function () {
    $(editModal).hide();

});

$(taxiBoxAdmin).on('click', function (e){
        let id = $(e.target).attr('id');
        console.log($('.editModal').attr('id'));
        
        $('.editmodal'+id).slideToggle();


        $('body').on('click', function (){
    
            var id = $('.editmodal').attr('id'); 
            console.log(id);
            if($('.editmodal').is(':visible')){
                $('.editmodal').fadeOut();
            
        }});
        
    });

$('body').on('click', function (){
    
    var id = $('.editmodal').attr('id'); 
    console.log(id);
    if (!$('body').closest(".editmodal").length) {
        $("body").find(".editmodal").fadeOut();
      
}});

})(jQuery)