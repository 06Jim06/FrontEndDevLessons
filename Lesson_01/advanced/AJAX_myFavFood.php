<?php
$myFavFoodContents = [
    'stylesheet' => '../stylesheets/default.css',
    'title' => 'My Favourite Food',
    'page' => 'myFavFood',
    'activePage' => '> My Favourite Food <',
    'picURL' => '../pictures/hotpot.jpg',
    'contentText' => "<p style='border: 1px solid white; padding: 2rem;'>
                        My favourite food is hotpot, especially the spicy mala soup base. <br><br>
                        Beef tribe and crab is my favourite when pairing with hotpot.
                      </p>",
    'buttonName' => 'Back to about me',
    'buttonClassName' => 'redirectBtn',
    'buttonOnClickFunction' => "changeContent('AJAX_aboutMe.php')"
];

echo json_encode($myFavFoodContents);

?>

