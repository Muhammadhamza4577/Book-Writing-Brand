$(function () {
    var url = window.location.pathname; //sets the variable "url" to the pathname of the current window
    var activePage = url.substring(url.lastIndexOf('/') + 1); //sets the variable "activePage" as the substring after the last "/" in the "url" variable
        $('.head_top ul li a').each(function () { //looks in each link item within the primary-nav list
            var linkPage = this.href.substring(this.href.lastIndexOf('/') + 1); //sets the variable "linkPage" as the substring of the url path in each &lt;a&gt;
 
            if (activePage == linkPage) { //compares the path of the current window to the path of the linked page in the nav item
                $(this).parent().addClass('active'); //if the above is true, add the "active" class to the parent of the &lt;a&gt; which is the &lt;li&gt; in the nav list
            }
        });
})





$('.pricing-slider').slick({
dots: false,
infinite: true,
arrows:true,
speed: 300,
slidesToShow: 3,
slidesToScroll: 1,
responsive: [
{
breakpoint: 1180,
settings: {
slidesToShow: 2,
slidesToScroll: 1,
infinite: true,
dots: false
}
},
{
breakpoint: 1024,
settings: {
slidesToShow: 1,
slidesToScroll: 1,
infinite: true,
dots: false
}
},
{
breakpoint: 600,
settings: {
slidesToShow: 1,
dots: true,
arrows:false,
slidesToScroll: 2
}
},

// You can unslick at a given breakpoint now by adding:
// settings: "unslick"
// instead of a settings object
]
});

 wow = new WOW(
      {
        animateClass: 'animated',
        offset:       100,
        callback:     function(box) {
          console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
        }
      }
    );
    wow.init();


  