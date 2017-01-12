<style>
    body{
        background-image: url('../assets/images/background.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        color:white;
    }
    .header-inner{

        padding: 20px;
        width: 100%;
        font-size: 13px;
        text-transform: uppercase;
    }

    .main-nav-wrapper{
        margin-top: 20px;
    }
    ul{
        display: block;
        text-align: right;
    }
    ul li{

        display: inline;
        padding: .75em 2em;
    }
    ul li:hover{
        background: #000000;
        display: inline;
        padding: .75em 2em;
    }
    ul li a{
        letter-spacing: 1px;
        color:#f5f5f5;
        font-weight: 600;
    }
    ul li a:hover,ul li a:focus{
        text-decoration: none;
        color:white;
    }
    .desc-wrapper{
        width: 100%;
        text-align: center;
        margin-top: 150px;
        text-transform: uppercase;
        letter-spacing: 1px;
        font-size: 18px;
        -webkit-transition: opacity 0.5s ease-in-out;
        -moz-transition: opacity 0.5s ease-in-out;
        transition: opacity 0.5s ease-in-out;
    }

    #passion{
        font-family: "adobe-garamond-pro";
        line-height: 1.5em;
        text-transform: none;
        font-weight: 400;
        font-style: italic;
        text-transform: uppercase;
    }
    #web-name{

        letter-spacing: 3px;
        line-height: 1.5em;
        font-size:48px;
        font-weight: 900;
    }
    .desc-wrapper q{
        font-size: 12px;
        font-style: italic;
        text-transform: capitalize;
    }

</style>
<html lang="en">
    <div class="header-inner">
        <div class="mainNav">
            <div class="main-nav-wrapper">
                <div class="header-nav">
                    <ul>
                        <li>
                            <a href="#" class="active">home</a>
                        </li>
                        <li>
                            <a href="#">portfolio</a>
                        </li>
                        <li>
                            <a href="#">about</a>
                        </li>
                        <li>
                            <a href="#">resume</a>
                        </li>
                        <li>
                            <a href="#">blog</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="desc-wrapper">
        <p id="passion">web developer / mobile developer</p>
        <p id="web-name">JOHN PAUL INHOG</p>
        <q>Remember, with great power comes great responsibility - uncle ben</q>

    </div>
    

</html>
<script>
    $(document).ready(function(){

    })
</script>