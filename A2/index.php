<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="/static/stylesheets/index.css">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <script src="https://code.jquery.com/jquery-2.2.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link href="https://code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.css" rel="stylesheet">
    <title>Welcome to Cube Cinema</title>
    <header>
    <img src="../static/images/CubeLogo.png" class="headericon"/>
    </header>
    
    <style>
        .top10movies {
            display: flex;
            flex-direction: row;
            justify-content: space-evenly;
        }
        
        header{
            height: 20px;
        }
        .headericon {
            display: block;
            margin-left: 20px; 
            padding: 0px; 
        }

        .mazeoverlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background-color: #008CBA;
            overflow: hidden;
            width: 100%;
            height: 100%;
            -webkit-transform: scale(0);
            transition: .3s ease;
        }


        .image .mazeposter {
            display: block;
        }

        .maze {
            position: relative;
        }

        .maze:hover .mazeoverlay {
            transform: scale(1)
        }

        .text .mazetext {
            color: white;
            font-size: 20px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            text-align: center;
        }

        .ins {
            position: relative;
        }

        .image .insposter {
            display: block;
        }

        .insoverlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background-color: #008CBA;
            overflow: hidden;
            width: 100%;
            height: 100%;
            -webkit-transform: scale(0);
            transition: .3s ease;
        }

        .ins:hover .insoverlay {
            transform: scale(1)
        }

        .text .instext {
            color: white;
            font-size: 20px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            text-align: center;
        }


        /*jumanji*/

        .jumanji {
            position: relative;
        }

        .image .jumanjiposter {
            display: block;
        }

        .jumanjioverlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background-color: #008CBA;
            overflow: hidden;
            width: 100%;
            height: 100%;
            -webkit-transform: scale(0);
            transition: .3s ease;
        }

        .jumanji:hover .jumanjioverlay {
            transform: scale(1)
        }

        .text .jumanjitext {
            color: white;
            font-size: 20px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            text-align: center;
        }


        /*commuter*/

        .commuter {
            position: relative;
        }

        .image .commuterposter {
            display: block;
        }

        .commuteroverlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background-color: #008CBA;
            overflow: hidden;
            width: 100%;
            height: 100%;
            -webkit-transform: scale(0);
            transition: .3s ease;
        }

        .commuter:hover .commuteroverlay {
            transform: scale(1)
        }

        .text .commutertext {
            color: white;
            font-size: 20px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            text-align: center;
        }

        /*pitchperfect*/

        .pitchperfect {
            position: relative;
        }

        .image .pitchperfectposter {
            display: block;
        }

        .pitchperfectoverlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background-color: #008CBA;
            overflow: hidden;
            width: 100%;
            height: 100%;
            -webkit-transform: scale(0);
            transition: .3s ease;
        }

        .pitchperfect:hover .pitchperfectoverlay {
            transform: scale(1)
        }

        .text .pitchperfecttext {
            color: white;
            font-size: 20px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            text-align: center;
        }

        a {
            text-decoration: none;
        }

        a:link,
        a:visited {
            color: black;
        } 
        .genres {
            display: flex;
            flex-direction: row;
            justify-content: space-evenly;
        }
        .romance {
            background-color: violet;
            width: 200px;
            padding: 25px;
            margin: 25px;
            text-align: center;
        }
        .action {
            background-color: red;
            width: 200px;
            padding: 25px;
            margin: 25px;
            text-align: center;
        }
        .comedy {
            background-color: yellow;
            width: 200px;
            padding: 25px;
            margin: 25px;
            text-align: center;
        }
        .drama {
            background-color: blue;
            width: 200px;
            padding: 25px;
            margin: 25px;
            text-align: center;
        }
        .horror {
            background-color: black;
            width: 200px;
            padding: 25px;
            margin: 25px;
            text-align: center;
            color: white;
        }
        .romance {
            position: relative;
        }
        .romanceoverlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background-color: #008CBA;
            overflow: hidden;
            width: 100%;
            height: 100%;
            -webkit-transform: scale(0);
            transition: .3s ease;
        }
        .romance:hover .romanceoverlay {
            transform: scale(1)
        }
        .action {
            position: relative;
        }
        .actionoverlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background-color: #008CBA;
            overflow: hidden;
            width: 100%;
            height: 100%;
            -webkit-transform: scale(0);
            transition: .3s ease;
        }
        .action:hover .actionoverlay {
            transform: scale(1)
        }
        .comedy {
            position: relative;
        }
        .comedyoverlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background-color: #008CBA;
            overflow: hidden;
            width: 100%;
            height: 100%;
            -webkit-transform: scale(0);
            transition: .3s ease;
        }
        .comedy:hover .comedyoverlay {
            transform: scale(1)
        }
        .drama {
            position: relative;
        }
        .dramaoverlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background-color: #008CBA;
            overflow: hidden;
            width: 100%;
            height: 100%;
            -webkit-transform: scale(0);
            transition: .3s ease;
        }
        .drama:hover .dramaoverlay {
            transform: scale(1)
        }
        .horror {
            position: relative;
        }
        .horroroverlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background-color: #008CBA;
            overflow: hidden;
            width: 100%;
            height: 100%;
            -webkit-transform: scale(0);
            transition: .3s ease;
        }
        .horror:hover .horroroverlay {
            transform: scale(1)
        }

    </style>

    <script>
        //Code for calendar
        $(document).ready(function() {
            var minDate = new Date();
            $("#dateChosen").datepicker({
                showAnim: 'drop',
                numberOfMonth: 1,
                minDate: minDate,
                maxDate: "+14",
                dateFormat: 'dd/mm/yy',
            });
        });

    </script>

</head>

<body>
    <!--Code for slideshow-->
    <div class="slide_container">
        <div class="myslides fade">
            <div class="numtext"> 1 </div>
            <img src="/static/images/jumanji.jpg">
        </div>


        <div class="myslides fade">
            <div class="numtext"> 2 </div>
            <img src="/static/images/commuter.jpg">
        </div>

        <a class="pre" onclick="plusSlide(-1)">&#10094;</a>
        <a class="next" onclick="plusSlide(1)">&#10095;</a>
    </div>
    <br>
    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>

    </div>

    <script>
        //Code for slideshow
        var slideIndex = 1;
        showSlides(slideIndex);
        // Next/previous controls
        function plusSlide(n) {
            showSlides(slideIndex += n);
        }
        // Thumbnail image controls
        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("myslides");
            var dots = document.getElementsByClassName("dot");
            if (n > slides.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = slides.length
            }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
        }

    </script>







    <nav>
        <div class="nav">
            <a href="#home">What's Hot</a>
            <a href="#news">Now Showing</a>
            <a href="#contact">Coming Soon</a>
            <a href="#about">Book Now</a>
            <div class="search">
                <form action="/action_page.php">
                    <input type="text" placeholder="Search.." name="search">
                    <button type="submit"><i class="fa fa-search"></i>Search</button>
                </form>
            </div>
        </div>
    </nav>
    
    <!--Selecting Cinema, Movie, Date-->
    <form action="" method="post">
        <select>
	  <option value="selectCinema">SELECT CINEMA</option>
	  <option value="cinema1">Cinema 1</option>
	  <option value="cinema2">Cinema 2</option>
	  <option value="cinema3">Cinema 3</option>
	  <option value="cinema4">Cinema 4</option>
	  <option value="cinema5">Cinema 5</option>
	  <option value="cinema6">Cinema 6</option>
	</select>

        <select>
	  <option value="selectMovie">SELECT MOVIE</option>
	  <option value="movie1">Movie 1</option>
	  <option value="movie2">Movie 2</option>
	  <option value="movie3">Movie 3</option>
	  <option value="movie4">Movie 4</option>
	  <option value="movie5">Movie 5</option>
	  <option value="movie6">Movie 6</option>
	</select>

        <input type="text" id="dateChosen" placeholder="Date">
    </form>

    <button onclick="document.getElementById('pop').style.display='block';">Submit</button>
    <div id="pop">
        <button id="close" onclick="document.getElementById('pop').style.display='none';">X</button><br>
        This is a pop up box
	<form action="ticket.html">
	<input type="submit" value="BUY"/>
	</form>
    </div>


    <!--top 5movies-->
    <h3>Top 5 Movies</h3>
    <div class="top10movies">

        <div class="maze">

            <img src="../static/images/mazerunner.jpeg" alt="Maze Runner: Death Cure Poster" class="image" id="mazeposter" />
            <a href="../mazerunner.php">
                <div class="mazeoverlay">
                    <div class="text" id="mazetext">Maze Runner</div>
                </div>
            </a>
        </div>

        <div class="ins">
            <img src="../static/images/insidious.jpg" alt="Insidious Poster" height="273" class="image" id="insposter" />
            <a href="../insidious.php">
                <div class="insoverlay">
                    <div class="text" id="instext">Insidious</div>
                </div>
            </a>
        </div>

        <div class="jumanji">
            <img src="../static/images/jumanji.jpg" alt="jumanji Poster" height="273" class="image" id="jumanjiposter" />
            <a href="../jumanji.php">
                <div class="jumanjioverlay">
                    <div class="text" id="jumanjitext">Jumanji</div>
                </div>
            </a>
        </div>

        <div class="commuter">
            <img src="../static/images/commuter.jpg" alt="The Commuter Poster" height="273" class="image" id="commuterposter" />
            <a href="../commuter.php">
                <div class="commuteroverlay">
                    <div class="text" id="commutertext">The Commuter</div>
                </div>
            </a>
        </div>

        <div class="pitchperfect">
            <img src="../static/images/pitchperfect.jpg" alt="Pitch Perfect 3 Poster" height="273" class="image" id="pitchperfectposter" />
            <a href="../pitchperfect.php">
                <div class="pitchperfectoverlay">
                    <div class="text" id="pitchperfecttext">Pitch Perfect 3</div>
                </div>
            </a>
        </div>
    </div>
    <div class="allgenres">
        <h3>Genres to choose from</h3>

        <div class=genres>

            <div class="romance">
                <div class="text" id="romancetext">Romance</div>
                <a href="romance">
                    <div class="romanceoverlay">
                        <img src="img_fjords.jpg" />
                    </div>
                </a>
            </div>

            <div class="action">
                <div class="text" id="actiontext">Action</div>
                <a href="action">
                    <div class="actionoverlay">
                        <img src="pulpitrock.jpg" />
                    </div>
                </a>
            </div>

            <div class="comedy">
                <div class="text" id="comedytext">Comedy</div>
                <a href="comedy">
                    <div class="comedyoverlay">
                        <img src="img_girl.jpg" />
                    </div>
                </a>
            </div>

            <div class="drama">
                <div class="text" id="dramatext">Drama</div>
                <a href="drama">
                    <div class="dramaoverlay">
                        <img src="img_chania.jpg" />
                    </div>
                </a>
            </div>

            <div class="horror">
                <div class="text" id="horrortext">Horror</div>
                <a href="horror">
                    <div class="horroroverlay">
                        <img src="/images/html5.gif" />
                    </div>
                </a>
            </div>

        </div>

    </div>
    <div class="location">
        <h3>Location</h3>
    </div>

</body>

<footer>
    <hr>
    <div class="sitemap">
        <a href="#home">About Us</a>
        <a href="#news">Privacy Policy</a>
        <a href="#contact">Forms and Conditions</a>
        <div>All Rights Reserved, Copyright 2018</div>
    </div>
</footer>

</html>
