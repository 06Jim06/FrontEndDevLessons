<?php
$aboutMeContents = [
    'stylesheet' => '../stylesheets/default.css',
    'title' => 'About Me',
    'page' => 'aboutMe',
    'activePage' => '> About Me <',
    'picURL' => '../pictures/ProfilePic.jpg',
    'contentText' => "<p style='border: 1px solid white; padding: 2rem;'>
                        Hello, my name is Jim Lee. I am currently a year 2 SOI student studying in Republic Polytechnic. <br><br>
                        My course of study is Diploma in Digital Design & Development (R47).<br><br>
                        My choice of choosing this course was because I am very interested in developing stuff, 
                        coding was especially fun and challenging as I get to learn new elements and concepts.
                      </p>",
    'buttonName' => 'Proceed to find out more about my favourite food',
    'buttonClassName' => 'redirectBtn',
    'buttonOnClickFunction' => "changeContent('AJAX_myFavFood.php')"
];

echo json_encode($aboutMeContents);

?>

