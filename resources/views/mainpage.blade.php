<!DOCTYPE html>
<html>
    <head>
		<title></title>
		<!-- <link rel="stylesheet" href="styleFirstPage.css"> -->
		<meta charset=utf-8>
		<meta name=viewport content=width=device-width,initial-scale=1.0>
        <link href="{{ asset('css/styleFirstPage.css') }}" rel="stylesheet">
	</head>
    <body class="body">
<header>
            <nav>
                <h1 id="title">Stadna</h1><br>
            </nav>
            <section>
                <div class="beginingImage">
                   <img src="{{ asset('stadium.jpg') }}" alt=""/>
                   <div class="align-right">
                   <button class="buttonStart" type="button" style="position: absolute; right: 0;"><span>let's Start</span></button>

                </div>
                </div>
            </section>
        </header>

        <footer>
            <div class="divAboutus">
            <p class="aboutUs">About us</p>
        </div>
            <br>

            <div class="ContactUs">
                <p>Contact US</p>
                <br>
                <input type="email" placeholder="your email adress">
                <br>
                <input type="text" aria-rowspan="4" placeholder="Messages ...">
                <br>
                <p class="copyright" style="position: absolute; right: 0;" ><b> Web © Coding Pro. All Right Reserved</b></p>
            </div>

        </footer>

        <div class="slider"></div>
        <script src="https://cdn.bootcdn.net/ajax/libs/gsap/1.20.2/TweenMax.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/TimelineMax.min.js"></script>
        <script src="{{ asset('firstscript.js') }}" type="text/javascript"></script>
    </body>
</html>
