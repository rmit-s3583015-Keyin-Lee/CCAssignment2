<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" type="text/css" href="/static/stylesheets/index.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="/static/scripts/mazerunner.js"></script>
    
    <style>
    /**
     CSS & HTML From @CSSWizardry's JSFiddle: 
        http://jsfiddle.net/csswizardry/KL5Vs/
**/
.stars{
    display:block;
    width:80px;
    background-position:0 -16px;
    position:relative;
    
    text-indent:100%;
    white-space:nowrap;
    overflow:hidden;
}
.stars,
    .stars:after{
        height:16px;
        background-image:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAgCAIAAACU62+bAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAldJREFUeNqMVMuOEkEUPY0EQksHFBIHXKgxEBIW+gGYsHVhcOXCzfgp8wluTVjgxoQlP4C4x2QmhkAgRFagBmLzGKAJ2J6qAqaZ7mHm5qa4j3Nudd1bhWbbNtzy5ZlY3/90Z3we6P43rHpCe5W7Eb6f4TGE/vh4BwLL/6nhAYTSoHuMsBqL8ieAX+qJ3I1Bh2h2/QzTntBBTQQMICXRlDXQAabSTuRhPKVq9icgLlXf4dxC5hwYCvUhX8Jf4N7NaMgUAYTlSz6kT/GqhBZweTOBKQIIS5/KQx/nONCOLtF5/gGmF4FBpiT6sK1slO5F0GXKYw6jcwR2tiVVSUCmHOffT83EfdnB38AvGeHgHkEEV6ZrB14BXeIugH95vD3Hu54wLmRQx/6O7AiznhjN5Uu8ruHNV8RewHgiDLoMziVgezXUe2h/3vZKSqvFRiKTyWzLObL+q7Y6pF6vHxAcWY/3wPJTKWqf2x8Qyz+Uova5hdDv91k7IYUG3WsAbTKZMDEcDi3LUmi2IZ1Oi6O225qmGYaRTCaDwWA8Hqetlcvl0WgUkBIKhZiIRCJcxbgtazwec10sFispsVhMWy6XlUrFNM1sNuv3e7+J9XrdaDSi0WihUBBzYA1y5vN5KpVyc4judDq6rhPNncWh+UOHISaYPoK+6hKdXC7Hb91sNk4CXQaZUuiDtrJdiukkKFelrl9vNjQcDitjMBiIf5ZEgn1kkBEPAkfBtdvtspVsPG1+PVu8T3nsMJvNWJLnUwTOsVqtMnjwnfZOisVis9m0XcIgU3v3vwADALitWRkkbzItAAAAAElFTkSuQmCC);
    }
    .stars:after{
        content:"";
        background-position:0 0;
        position:absolute;
        top:0;
        bottom:0;
        left:0;
    }

.s-0:after      { width: 0  ; }
.s-0\.5:after   { width: 8px; }
.s-1:after      { width:16px; }
.s-1\.5:after   { width:24px; }
.s-2:after      { width:32px; }
.s-2\.5:after   { width:40px; }
.s-3:after      { width:48px; }
.s-3\.5:after   { width:56px; }
.s-4:after      { width:64px; }
.s-4\.5:after   { width:72px; }
.s-5:after      { width:80px; }


.loading {
    background: url('data:image/gif;base64,R0lGODlhEAALAPQAAP///wAAANra2tDQ0Orq6gYGBgAAAC4uLoKCgmBgYLq6uiIiIkpKSoqKimRkZL6+viYmJgQEBE5OTubm5tjY2PT09Dg4ONzc3PLy8ra2tqCgoMrKyu7u7gAAAAAAAAAAACH+GkNyZWF0ZWQgd2l0aCBhamF4bG9hZC5pbmZvACH5BAALAAAAIf8LTkVUU0NBUEUyLjADAQAAACwAAAAAEAALAAAFLSAgjmRpnqSgCuLKAq5AEIM4zDVw03ve27ifDgfkEYe04kDIDC5zrtYKRa2WQgAh+QQACwABACwAAAAAEAALAAAFJGBhGAVgnqhpHIeRvsDawqns0qeN5+y967tYLyicBYE7EYkYAgAh+QQACwACACwAAAAAEAALAAAFNiAgjothLOOIJAkiGgxjpGKiKMkbz7SN6zIawJcDwIK9W/HISxGBzdHTuBNOmcJVCyoUlk7CEAAh+QQACwADACwAAAAAEAALAAAFNSAgjqQIRRFUAo3jNGIkSdHqPI8Tz3V55zuaDacDyIQ+YrBH+hWPzJFzOQQaeavWi7oqnVIhACH5BAALAAQALAAAAAAQAAsAAAUyICCOZGme1rJY5kRRk7hI0mJSVUXJtF3iOl7tltsBZsNfUegjAY3I5sgFY55KqdX1GgIAIfkEAAsABQAsAAAAABAACwAABTcgII5kaZ4kcV2EqLJipmnZhWGXaOOitm2aXQ4g7P2Ct2ER4AMul00kj5g0Al8tADY2y6C+4FIIACH5BAALAAYALAAAAAAQAAsAAAUvICCOZGme5ERRk6iy7qpyHCVStA3gNa/7txxwlwv2isSacYUc+l4tADQGQ1mvpBAAIfkEAAsABwAsAAAAABAACwAABS8gII5kaZ7kRFGTqLLuqnIcJVK0DeA1r/u3HHCXC/aKxJpxhRz6Xi0ANAZDWa+kEAA7AAAAAAAAAAAA');
    width: 16px;
    height: 11px;
}

html{
    font:1em/1.5 Georgia, serif;
}
    </style>
    
<title>Welcome to A2 Cinema</title>
<h1>A2 Cinema Test</h1>
    
    </head>
    
    <body>
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
        <button id="close" onclick="document.getElementById('pop').style.display='none';">X</button><br> This is a pop up box.
    </div>

    <div>This is the mazerunner page. </div>
        
        Read tutorial on <a href='http://codular.com/jquery-rating'>Codular</a><br /><br />

<span class="stars s-0.5" data-default='0.5'>
    0 stars
</span>
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