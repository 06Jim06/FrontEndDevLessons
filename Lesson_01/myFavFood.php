<!-- 
    Page 1 – About Me
	A heading 
	An image of yourself
	A section containing information about you
	Page 2 – My Fav Food
	A heading 
	An image of your favourite food
	A short description about the food 
-->

<?php
    $stylesheet = "default.css";
    $title = "My Favourite Food";
    $page = "myFavFood";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link id="styleSheetLink" href="stylesheets/<?= $stylesheet ?>" rel="stylesheet" type="text/css"/>

    <title id="titleOfPage"><?= $title ?></title>
</head>
<body>

    <div class="Grid_Container">

    <nav class="navigations">
        <ul>
            <li><a href="aboutMe.php" id="aboutMe">
                About Me
            </a></li>
            <li><a href="myFavFood.php" id="myFavFood">
                My Favourite Food
            </a></li>
        </ul>

        <script>
            document.addEventListener("DOMContentLoaded", function() {

            let currentPage = "<?php echo $page; ?>";
            
            let name = document.getElementById(currentPage);
            
            if (name) {
                name.style.textDecoration = "underline";
                name.innerHTML = ">" + name.innerHTML + "<";
            }
            });
        </Script>
    </nav>
       
        <div class="contentLeftPicture">
            <img src="pictures/hotpot.jpg" alt="" srcset="" width="850px" height="800px">
        </div>

        <div class="contentRightInformation">
            <h1 id="headerTitle"><?= $title ?></h1>
            <p style="border: 1px solid white; padding: 2rem;">
              My favourite food is hotpot, especially the spicy mala soup base. <br><br>
              Beef tribe and crab is my favourite when pairing with hotpot.
            </p>

            <button class="redirectBtn" onclick="redirectToAbtMePg()">Back to about me</button>

            <Script>
                function redirectToFavPg() {
                    window.location.href = "myFavFood.php";
                }
                function redirectToAbtMePg() {
                    window.location.href = "aboutMe.php";
                }
            </Script>
        </div>

    </div>
    <footer class="footer">
        <hr>
        &copy; copyright 2023
    </footer>



</body>
</html>