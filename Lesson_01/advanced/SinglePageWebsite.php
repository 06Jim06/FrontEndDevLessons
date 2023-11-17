<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link id="stylesheetName" rel="stylesheet" type="text/css" href="../stylesheets/default.css">
    <title id="titleOfPage">About Me</title>
</head>
<body>
    <div class="Grid_Container">
        <nav class="navigations">
            <ul>
                <li><a href="#" id="aboutMeLink" onclick="changeContent('AJAX_aboutMe.php')">
                    > About Me <
                </a></li>
                <li><a href="#" id="myFavFoodLink" onclick="changeContent('AJAX_myFavFood.php')">
                    My Favorite Food
                </a></li>
            </ul>
        </nav>
        <div class="contentLeftPicture">
            <img id="imgURL" src="../pictures/ProfilePic.jpg" alt="" srcset="" width="850px" height="800px">
        </div>
        <div class="contentRightInformation">
            <h1 id="headerTitle">About Me</h1>
            <div id="pageContent">
                    <p style='border: 1px solid white; padding: 2rem;'>
                        Hello, my name is Jim Lee. I am currently a year 2 SOI student studying in Republic Polytechnic. <br><br>
                        My course of study is Diploma in Digital Design & Development (R47).<br><br>
                        My choice of choosing this course was because I am very interested in developing stuff, 
                        coding was especially fun and challenging as I get to learn new elements and concepts.
                    </p>
            </div>
            <button class="redirectBtn" id="redirectBtn" onclick="changeContent('AJAX_myFavFood.php')">Proceed to find out more about my favorite food</button>
        </div>
    </div>
    <footer class="footer">
        <hr>
        &copy; copyright 2023
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function changeContent(page) {
            $.ajax({
                type: "GET",
                url: page,
                dataType: "JSON",
                success: function (response) {
                    $('#titleOfPage').text(response.title);
                    $('#pageContent').html(response.contentText);
                    $('#imgURL').attr('src', response.picURL);
                    $('#stylesheetName').attr('href', response.stylesheeet);

                    if (page == "AJAX_aboutMe.php") {
                        $('#aboutMeLink').html(response.activePage);
                        $('#myFavFoodLink').html("My Favorite Food");
                    } 
                    else if (page == "AJAX_myFavFood.php") {
                        $('#aboutMeLink').html("About Me");
                        $('#myFavFoodLink').html(response.activePage);
                    }

                    $('#redirectBtn').html(response.buttonName);
                    $('#redirectBtn').attr('onclick', response.buttonOnClickFunction);

                },
                error: function (obj, textStatus, errorThrown) {
                    console.log("Error " + textStatus + ": " + errorThrown);
                }
            });
        }
    </script>
</body>
</html>
