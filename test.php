<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script>
            $(document).ready(function () {
                $(document).on("scroll", onScroll);

                //smoothscroll
                $('a[href^="#"]').on('click', function (e) {
                    e.preventDefault();
                    $(document).off("scroll");

                    $('a').each(function () {
                        $(this).removeClass('active');
                    })
                    $(this).addClass('active');

                    var target = this.hash,
                            menu = target;
                    $target = $(target);
                    $('html, body').stop().animate({
                        'scrollTop': $target.offset().top + 2
                    }, 500, 'swing', function () {
                        window.location.hash = target;
                        $(document).on("scroll", onScroll);
                    });
                });
            });

            function onScroll(event) {
                var scrollPos = $(document).scrollTop();
                $('#menu-center a').each(function () {
                    var currLink = $(this);
                    var refElement = $(currLink.attr("href"));
                    if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
                        $('#menu-center ul li a').removeClass("active");
                        currLink.addClass("active");
                    } else {
                        currLink.removeClass("active");
                    }
                });
            }
        </script>
        <style>
            body, html {
                margin: 0;
                padding: 0;
                height: 100%;
                width: 100%;
            }
            .menu {
                width: 100%;
                height: 75px;
                background-color: rgba(0, 0, 0, 1);
                position: fixed;
                background-color:rgba(4, 180, 49, 0.6);
                -webkit-transition: all 0.4s ease;
                -moz-transition: all 0.4s ease;
                -o-transition: all 0.4s ease;
                transition: all 0.4s ease;
            }
            .light-menu {
                width: 100%;
                height: 75px;
                background-color: rgba(255, 255, 255, 1);
                position: fixed;
                background-color:rgba(4, 180, 49, 0.6);
                -webkit-transition: all 0.4s ease;
                -moz-transition: all 0.4s ease;
                -o-transition: all 0.4s ease;
                transition: all 0.4s ease;
            }
            #menu-center {
                width: 980px;
                height: 75px;
                margin: 0 auto;
            }
            #menu-center ul {
                margin: 0 0 0 0;
            }
            #menu-center ul li a{
                padding: 32px 40px;
            }
            #menu-center ul li {
                list-style: none;
                margin: 0 0 0 -4px;
                display: inline;

            }
            .active, #menu-center ul li a:hover  {
                font-family:'Droid Sans', serif;
                font-size: 14px;
                color: #fff;
                text-decoration: none;
                line-height: 50px;
                background-color: rgba(0, 0, 0, 0.12);
                padding: 32px 40px;

            }
            a {
                font-family:'Droid Sans', serif;
                font-size: 14px;
                color: black;
                text-decoration: none;
                line-height: 72px;
            }
            #home {
                background-color: #286090;
                height: 100vh;
                width: 100%;
                overflow: hidden;
            }
            #portfolio {
                background: gray; 
                height: 100vh;
                width: 100%;
            }
            #about {
                background-color: blue;
                height: 100vh;
                width: 100%;
            }
            #contact {
                background-color: rgb(154, 45, 45);
                height: 100vh;
                width: 100%;
            }
        </style>
    </head>
    <body>
        <!--	<div class="container">	--->
        <div class="m1 menu">
            <div id="menu-center">
                <ul>
                    <li><a class="active" href="#home">Home</a>

                    </li>
                    <li><a href="#portfolio">Portfolio</a>

                    </li>
                    <li><a href="#about">About</a>

                    </li>
                    <li><a href="#contact">Contact</a>

                    </li>
                </ul>
            </div>
        </div>
        <div id="home"></div>
        <div id="portfolio"></div>
        <div id="about"></div>
        <div id="contact"></div>
    </body>
</html>