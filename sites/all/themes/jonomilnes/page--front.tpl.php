<!DOCTYPE html>
<html lang="en">

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="p:domain_verify" content="50c43b22c550f8264b9bbbcc350cb264"/>
<link href='http://fonts.googleapis.com/css?family=Raleway:400,200,100,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Antic+Slab' rel='stylesheet' type='text/css'>
<!-- title and meta -->

<!-- js -->
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="/sites/all/themes/jonomilnes/js/classie.js"></script>
<script>
jQuery(function( $ ){
 
    function fade_home_top() {
        if ( $(window).width() > 800 ) {
        window_scroll = $(this).scrollTop();
            $("#wrapper").css({
                  'opacity' : 1-(window_scroll/800)
            });
        }
    }
    $(window).scroll(function() { fade_home_top(); });
 
});
</script>
<script>
    function init() {
        window.addEventListener('scroll', function(e){
            var distanceY = window.pageYOffset || document.documentElement.scrollTop,
                shrinkOn = 500,
                header = document.querySelector("header");
            if (distanceY > shrinkOn) {
                classie.add(header,"smaller");
            } else {
                if (classie.has(header,"smaller")) {
                    classie.remove(header,"smaller");
                }
            }
        });
    }
    window.onload = init();
</script>
</head>
<body>
<a class="anchor-head" id="jm"></a>
<header>
    <a href="page_top" class="logo" id="jm"><img src="/sites/all/themes/jonomilnes/images/Jono Milnes Logo.png" alt="Jono Milnes" style="z-index:999;"></a>
    <div class="navigation">
        <div class="navbar">
            <div id="scrollspynav" class="nav">
                <ul class="nav nav-list affix" >  
                    <div class="left-part">
                    <li><a href="#about"><img src="/sites/all/themes/jonomilnes/images/about.png" style="width:25px"></a></li>
                    <li><a href="#work"><img src="/sites/all/themes/jonomilnes/images/work.png" style="width:25px"></a></li>
                    </div>
                    <div class="right-part">
                    <li><a href="#contact"><img src="/sites/all/themes/jonomilnes/images/contact.png" style="width:25px"></a></li>
                    <li><a href="resume"><img src="/sites/all/themes/jonomilnes/images/resume.png" style="width:25px"></a></li>
                    </div>
                </ul>
            </div>
        </div>
    </div>
</header><!-- /header -->
<div id="wrapper">
<div class="header-wrap">
        <?php print render($page['top']) ?>
</div>
</div>
<div class="headline-wrap">
    <a class="anchor-head" id="about"></a>
    <div class="headline"><?php print render($page['intro']) ?></div>
</div>
<div class="about-wrap">
    <div class="about "><?php print render($page['about']) ?></div>
</div>
<div class="work-wrap">
    <a class="anchor" id="work"></a>
    <div class="work"><?php print render($page['work']) ?></div>
</div>
<div class="testimonial-wrap">
    <div class="testimonial"><?php print render($page['testimonial']) ?></div>
</div>
<div class="contact-wrap">
    <a class="anchor" id="contact"></a>
    <div class="contact"><?php print render($page['contact']) ?></div>
</div>
<div class="footer-wrap">
    <div class="footer"><?php print render($page['footer']) ?></div>
</div>
</body>
</html>