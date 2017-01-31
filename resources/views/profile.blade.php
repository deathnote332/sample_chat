<style>
    @import url('https://fonts.googleapis.com/css?family=Poppins|Roboto');
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
        padding: 0;
        margin: 0;

    }

    .header-nav ul li{
        padding: 40px;
        list-style-type: none;
        display: inline-block;
    }

    .profile-body{
        height: 80%;
    }
</style>

<div class="profile-image">
    <div class="header-nav col-md-12">
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Sign in</a></li>
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