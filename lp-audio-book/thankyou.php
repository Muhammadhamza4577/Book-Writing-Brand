
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/baa179cc89.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
<link rel="icon" href="Images/favicon.png" type="image/png" sizes="">

<title>Audiobook Narration Services: Quality Audio Production Services for Authors</title>
<meta name="keywords" content="audiobook narration services, audio book services">
<meta name="description" content="Best Book Writers help authors get their books narrated. We offer high-quality audio production services for authors, publishers, and speakers."/>
<!-- Event snippet for Book Writer - Lead Form conversion page -->
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-11025876772"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-11025876772');
</script>

<script type="text/javascript">     (function(c,l,a,r,i,t,y){         c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};         t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;         y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);     })(window, document, "clarity", "script", "hqiagec93p"); </script>

</head>


<body>

    <!-- Header Start -->
    <section class="container-fluid mainHead">
        <div class="row">
            <div class="col-md-6">
                <p class="text1">Call us at <a href="tel:+1-737-881-7227">+1-737-881-7227</a> OR <a href="javascript:$zopim.livechat.window.show()">START A LIVE CHAT</a></p>
            </div>
            <div class="col-md-6">
                <p class="text2">Mon-Fri(9.00AM-05.30PM EST)</p>
            </div>
        </div>
    </section>
    <section class="container blackBack"> 
    <div class="row">
    <nav class="navbar navbar-expand-lg navbar-light">
    <a href="/"><img class="logopng" src="./Images/new-logo.png"></a>
  
</nav>
</div>
</section>
      <!-- Banner Start -->

    <section class="container-fluid bannimg">
        <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3 class="text3">Thank you for reaching us </h3>
                    <p class="text5">Thank you for taking the time to fill out our lead form. We appreciate your interest in our services, and we look forward to the opportunity to work with you.

We will be in touch with you shortly to discuss your needs and how we can best serve you. If you have any further questions or concerns, please do not hesitate to contact us.

Thank you again for considering our services. We value your trust and look forward to helping you achieve your goals.</p>
                <a href="tel:+1-737-881-7227" class="btn btn12-warning ms-3">Call Now </a>
               
            </div>

            <div class="col-md-3">

            </div>

            <div class="col-md-3 bannform">
		          </div>
        </div>
        </div>
    </section>
    <section class="container-fluid web">
        <div class="row align-items-center">
            <div class="col-md-2">
            </div>
            <div class="col-md-5 ert">
                <h3 class="rty">What are you waiting for?</h3>
                <p class="asdf">Let’s connect and help you achieve your vision for your book.</p>
                 <div class="col-md-2">
            </div>
            </div>
            <div class="col-md-3 text-end">
                <a data-bs-toggle="modal" data-bs-target="#staticBackdrop" href="void:;" class="btn btn19-warning">Contact Us <i class="fa fa-angle-right" aria-hidden="true"></i></a>
            </div>   
        </div>
        
    </section>
    <footer><div class="container"><p>All Rights Reserved 2023 - Best Book Writers</p></div></footer>








    <!-- Banner End -->


    <!-- Column 1 Start -->


    

    
    
	<script src="./index.js"></script>
    <script src="https://getbootstrap.com/docs/5.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/docsearch.js@2/dist/cdn/docsearch.min.js"></script>
    <script src="https://getbootstrap.com/docs/5.1/assets/js/docs.min.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
	<script src='https://cdn.jsdelivr.net/gsap/1.19.1/TweenMax.min.js'></script>
	


    <script>
        // Code By Webdevtrick ( https://webdevtrick.com )
        ; (function ($) {
            "use strict";

            var bindToClass = 'carousel',
                containerWidth = 0,
                scrollWidth = 0,
                posFromLeft = 0,
                stripePos = 0,
                animated = null,
                $slide, $carousel, el, $el, ratio, scrollPos, nextMore, prevMore, pos, padding;

            function calc(e) {
                $el = $(this).find(' > .wrap');
                el = $el[0];
                $carousel = $el.parent();
                $slide = $el.prev('.slide');

                nextMore = prevMore = false;

                containerWidth = el.clientWidth;
                scrollWidth = el.scrollWidth;
                padding = 0.2 * containerWidth;
                posFromLeft = $el.offset().left;
                stripePos = e.pageX - padding - posFromLeft;
                pos = stripePos / (containerWidth - padding * 2);
                scrollPos = (scrollWidth - containerWidth) * pos;

                if (scrollPos < 0)
                    scrollPos = 0;
                if (scrollPos > (scrollWidth - containerWidth))
                    scrollPos = scrollWidth - containerWidth;

                $el.animate({ scrollLeft: scrollPos }, 200, 'swing');

                if ($slide.length)
                    $slide.css({
                        width: (containerWidth / scrollWidth) * 100 + '%',
                        left: (scrollPos / scrollWidth) * 100 + '%'
                    });

                clearTimeout(animated);
                animated = setTimeout(function () {
                    animated = null;
                }, 200);

                return this;
            }

            function move(e) {
                if (animated) return;

                ratio = scrollWidth / containerWidth;
                stripePos = e.pageX - padding - posFromLeft;

                if (stripePos < 0)
                    stripePos = 0;

                pos = stripePos / (containerWidth - padding * 2);

                scrollPos = (scrollWidth - containerWidth) * pos;

                el.scrollLeft = scrollPos;
                if ($slide[0] && scrollPos < (scrollWidth - containerWidth))
                    $slide[0].style.left = (scrollPos / scrollWidth) * 100 + '%';

                prevMore = el.scrollLeft > 0;
                nextMore = el.scrollLeft < (scrollWidth - containerWidth);

                $carousel.toggleClass('left', prevMore);
                $carousel.toggleClass('right', nextMore);
            }

            $.fn.carousel = function (options) {
                $(document)
                    .on('mouseenter.carousel', '.' + bindToClass, calc)
                    .on('mousemove.carousel', '.' + bindToClass, move);
            };

            $.fn.carousel();

        })(jQuery);

        $(document).ready(function () {

            $('.counter').each(function () {
                $(this).prop('Counter', 0).animate({
                    Counter: $(this).text()
                }, {
                    duration: 4000,
                    easing: 'swing',
                    step: function (now) {
                        $(this).text(Math.ceil(now));
                    }
                });
            });

        });

    </script>

     <script>
     var dtm = window.parent.document.createElement('script'); dtm.type="text/javascript"; dtm.id = 'ze-snippet'; dtm.src='https://static.zdassets.com/ekr/snippet.js?key=1a12342a-513e-43bb-8530-8cc919fea1ea'; var d = window.parent.document.getElementsByTagName('head')[0]; d.appendChild(dtm); var dtmf = window.parent.document.createElement('script'); dtmf.type="text/javascript"; dtmf.id = '_adobe_dtm_script_footer_tag'; dtmf.text='_satellite.pageBottom();'; var bd = window.parent.document.getElementsByTagName('body')[0]; bd.appendChild(dtmf);
   
    window.onload = function(){
           setTimeout(function(){
              setButtonURL();
           }, 3000);
        };
    
        function setButtonURL() {
            $zopim.livechat.window.show();
        }
        function toggleChat() {
            $zopim.livechat.window.show();
        }
    
    window.$zopim||function(a,d){
    var b=$zopim=function(a){b._.push(a)},c=b.s=a.createElement(d);
    a=a.getElementsByTagName(d)[0];
    b.set=function(a){b.set._.push(a)};b._=[];b.set._=[];c.async=!0;c.setAttribute("charset","utf-8");c.src="";b.t=+new Date;c.type="text/javascript";a.parentNode.insertBefore(c,a)}
    (document,"script");
    
    $zopim(function(){function a(a){1<=a&&$zopim.livechat.window.show()}$zopim.livechat.setOnUnreadMsgs(a)});

    
function setButtonURL(){
 javascript:$zopim.livechat.window.show();
 }
 
  $(window).on('load', function() {
    setTimeout(function() {
        $('#exampleModal').modal('show');
    }, 4000);
});
</script>
</body>
</html>
