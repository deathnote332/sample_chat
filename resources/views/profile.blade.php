<style>
    @import url('https://fonts.googleapis.com/css?family=Poppins');

    html,body,.profile-image{
        height: 100%;
        font-family: 'Poppins', sans-serif;
        display: block;
        color: white;

    }
    .profile-image{
        /*background: url('/assets/images/aa.png') no-repeat center;*/
        /*background-size: contain;*/
        background: #111111;
    }

    .container{
        height: 100%;
        display: table;
        width: 100%;
        padding-bottom: 0px;
        margin: 0;
        padding: 0 50px;
    }

    .row{
        display: table-cell;
        vertical-align: middle;
        background-size: cover;

    }

    .row h1,h2,a{
        color: white;

    }

    .row h2{
        font-size: 24px;
        font-family: 'Poppins', arial, sans-serif;
        font-weight: lighter !important;
        margin: 10px 0px;
        line-height: 1.8em;

    }

    .row button{
        margin-top: 10px;
        font-family: 'Poppins', arial, sans-serif;
        padding: 5px 30px;
        background-color: #fdfdfe;
        width: 15%;
        border: none;
        color: #000000;

    }
    .header-nav{
       text-align: right;
    }
    .header-nav ul{
        display: block;

        margin: 0;
        padding: 40px 0px;

    }

    .header-nav ul li{
        padding: 10px 30px;
        list-style-type: none;
        display: inline-block;
        border-right: 1px solid white;

    }

    .header-nav ul li:last-child{
        border: none;
    }

    .header-nav ul li a{
        text-decoration: none;

    }


    .profile-body{
        height: 80%;
    }

    .navbar{
        margin-bottom: 0px;
        border-radius: 0;
        z-index: 1000;
    }

    .navbar .container{
        margin: 0;
        padding: 0 40px;
        width: 100%;
    }

    .affix {
        top: 0;
        width: 100%;
    }

    .affix-top {
        width: 100%;
    }

    .affix-bottom {
        position: absolute;
        width: 100%;
    }

    #about{
        padding-top: 80px;
        background: #fdfdfe;
        color: #5a5252;
    }
    #about h2 ,#introduction h2 ,#skills h2 ,#skills-1 h2,#portfolio h2,#experience h2{
        color: #5a5252;
    }
    #about .container .row{
        display: block;
    }

    #introduction{
        padding: 52px 0px;
        border-bottom: 1px solid #F1EBEB;
        color: #5a5252;
    }

    #introduction .container .row{
        display: block;
    }

    #introduction .profile-image{
        height: 200px;
        width: auto;
        height: 300px;
        width: 80%;

    }
    #introduction ul{
        padding: 0 0 0 20px;
        margin: 0;
    }
    #introduction a{
        background-color: #111111;
        border-radius: 1px;
        color: #ffffff !important;
        display: inline-block;
        font-size: 13px;
        letter-spacing: 1px;
        margin: 14px 0;
        padding: 10px 30px;
        transition: all 0.3s ease;
    }


    #skills{
         padding: 80px 0 0 0;
        color: #5a5252;
     }

    #skills-1{
        padding: 80px 0;
        color: #5a5252;
        border-bottom: 1px solid #F1EBEB;
    }
    
    #portfolio{
        padding: 80px 0;
        border-bottom: 1px solid #F1EBEB;
    }
    #portfolio .container .row{
        display: block;
    }

    #portfolio .portfolio-list{
        display: block;
    }
    
    #portfolio .portfolio-list .portfolio-items{
        display: inline-block;
        padding: 13px;

    }
    .portfolio-items img{
        height: 200px;
        width: 290px;
    }

    #experience{
        padding: 60px 0 0 0;
        color: #5a5252;
    }
    #experience .container .row{
        display: block;
    }
    #experience img{
        width: 100%;
        height:  200px;
    }


</style>
<!--HEADER-->
<div class="profile-image" id="top" data-spy="scroll" >
    <div class="header-nav col-md-12">
        <ul>
            <li>
                <a class="page-scroll" href="#about">Lorem</a>
            </li>
            <li>
                <a class="page-scroll" href="#skills">Lorem</a>
            </li>
            <li>
                <a class="page-scroll" href="#skills-1">Lorem</a>
            </li>
            <li>
                <a class="page-scroll" href="#sample">Lorem</a>
            </li>
        </ul>
    </div>
    <div class="col-md-12 profile-body">
        <div class="container">
            <div class="row">
                <h1>Hi! I'm Lorem Ipsum</h1>

                <h2 class="cd-headline clip">

                    <span class="cd-words-wrapper">
                    <b class="is-visible">Starbucks Coffee mixer</b>
                    <b>Code lover $ certified lover</b>
                    <b>Lorem ipsum de tat & ate itum tae</b>
                    </span>
                </h2>
                <button class="">View Details</button>
            </div>
        </div>
    </div>
</div>
<!--END OF HEADER-->
<div id="navigation" style="height: 50px">
    <nav class="navbar navbar-default" data-spy="affix" data-offset-top="640">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#top">
                    Sample
                </a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="#about">Lorem</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#skills">Lorem</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#skills-1">Lorem</a>
                    </li>



                </ul>
            </div>
        </div>
    </nav>
</div>
<section id="about">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Things I do.</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <h2><span>1.</span> Things I do.</h2>
                <p>Lorem ipsum lorem ipsum</p>
            </div>
            <div class="col-md-3">
                <h2><span>2.</span>Things I do.</h2>
                <p>Lorem ipsum lorem ipsum</p>
            </div>
            <div class="col-md-3">
                <h2><span>3.</span>Things I do.</h2>
                <p>Lorem ipsum lorem ipsum</p>
            </div>
            <div class="col-md-3">
                <h2><span>4.</span>Things I do.</h2>
                <p>Lorem ipsum lorem ipsum</p>
            </div>
        </div>
    </div>
</section>
<section id="introduction">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img class="profile-image" src="../assets/images/background.jpg">
            </div>
            <div class="col-md-6">

                <h2>Introduction.</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In vel volutpat nunc, ac tristique sem. Mauris ut est nisi. Sed gravida nulla in venenatis aliquam. Sed ipsum augue, egestas et tellus in, mollis accumsan ex.</p>
                <ul>
                    <li>Date of Birth: 04 June, 1990</li>
                    <li>Country: Philippines</li>
                </ul>
                <div><a href="#">Lorem ipsum</a></div>
            </div>
        </div>
    </div>
</section>
<section id="skills">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h2>Skills.</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In vel volutpat nunc, ac tristique sem. Mauris ut est nisi. Sed gravida nulla in venenatis aliquam. Sed ipsum augue, egestas et tellus in, mollis accumsan ex.</p>

            </div>
            <div class="col-md-4">
                <h2>Back-end</h2>
                <ul>
                    <li>Lorem Ipsum</li>
                    <li>Lorem Ipsum</li>
                    <li>Lorem Ipsum</li>
                    <li>Lorem Ipsum</li>
                    <li>Lorem Ipsum</li>
                </ul>
            </div>
            <div class="col-md-4">
                <h2>Front-end</h2>
                <ul>
                    <li>Lorem Ipsum</li>
                    <li>Lorem Ipsum</li>
                    <li>Lorem Ipsum</li>
                    <li>Lorem Ipsum</li>
                    <li>Lorem Ipsum</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section id="skills-1">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h2>Skills.</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In vel volutpat nunc, ac tristique sem. Mauris ut est nisi. Sed gravida nulla in venenatis aliquam. Sed ipsum augue, egestas et tellus in, mollis accumsan ex.</p>

            </div>
            <div class="col-md-4">
                <h2>Back-end</h2>
                <ul>
                    <li>Lorem Ipsum</li>
                    <li>Lorem Ipsum</li>
                    <li>Lorem Ipsum</li>
                    <li>Lorem Ipsum</li>
                    <li>Lorem Ipsum</li>
                </ul>
            </div>
            <div class="col-md-4">
                <h2>Front-end</h2>
                <ul>
                    <li>Lorem Ipsum</li>
                    <li>Lorem Ipsum</li>
                    <li>Lorem Ipsum</li>
                    <li>Lorem Ipsum</li>
                    <li>Lorem Ipsum</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section id="portfolio">

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Portfolio.</h2>
            </div>

        </div>
        <div class="row">
            <div class="portfolio-list">
                <div class="portfolio-items">
                    <img src="../assets/images/background.jpg">
                </div>
                <div class="portfolio-items">
                    <img src="../assets/images/background.jpg">
                </div>
                <div class="portfolio-items">
                    <img src="../assets/images/background.jpg">
                </div>
                <div class="portfolio-items">
                    <img src="../assets/images/background.jpg">
                </div>
                <div class="portfolio-items">
                    <img src="../assets/images/background.jpg">
                </div>
                <div class="portfolio-items">
                    <img src="../assets/images/background.jpg">
                </div>
                <div class="portfolio-items">
                    <img src="../assets/images/background.jpg">
                </div>
                <div class="portfolio-items">
                    <img src="../assets/images/background.jpg">
                </div>
            </div>
        </div>

    </div>

</section>
<section id="experience">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Experience.</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
               <img src="../assets/images/background.jpg">

            </div>
            <div class="col-md-9">
                <div><span>2015 - Present</span></div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In vel volutpat nunc, ac tristique sem. Mauris ut est nisi. Sed gravida nulla in venenatis aliquam. Sed ipsum augue, egestas et tellus in, mollis accumsan ex.</p>

            </div>
        </div>

    </div>
</section>


<script>

    var a = 5;
    var b = 12;
    a = a+b;
    b = a - b;
    a = a - b;


    console.log(a+" "+b);

    //SMOOTH SCROLLING
    $('a.page-scroll').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });



</script>






