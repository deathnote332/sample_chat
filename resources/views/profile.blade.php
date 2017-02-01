<style>
    @import url('https://fonts.googleapis.com/css?family=Poppins');

    html,body,.profile-image{
        height: 100%;
        font-family: 'Poppins', arial, sans-serif;
        display: block;
        color: white;

    }
    .profile-image{
        /*background: url('/assets/images/aa.png') no-repeat center;*/
        /*background-size: contain;*/
        background: #000000;
    }

    .container{
        height: 100%;
        display: table;
        clear: both;
        padding-bottom: 0px;
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
        padding: 650px 0 0 0;
        background: black;
    }
    #homers{
         padding: 650px 0 0 0;
         background: green;
     }
    #sample{
        padding: 650px 0 0 0;
        background: red;
    }
</style>
<!--HEADER-->
<div class="profile-image" id="top" data-spy="scroll">
    <div class="header-nav col-md-12">
        <ul>
            <li><a href="#">Lorem</a></li>
            <li><a href="#">Lorem</a></li>
            <li><a href="#">Lorem</a></li>
            <li><a href="#">Lorem</a></li>
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
    <nav class="navbar navbar-default" data-spy="affix" data-offset-top="650">
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
                        <a class="page-scroll" href="#about">Home</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#homers">Blog</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#sample">About</a>
                    </li>
                    <li>
                        <a>Sign in</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
</div>
<section id="about">
    <div class="container">
        
    </div>
</section>
<section id="homers">
    <div class="container">

    </div>
</section>
<section id="sample">
    <div class="container">

    </div>
</section>



<script>
    //SMOOTH SCROLLING
    jQuery('a.page-scroll').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
</script>






