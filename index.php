<?php
ob_start();
session_start();
?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="canonical" href="https://npcodes.com"/>
    <title>NPCodes</title>
	 <link rel="shortcut icon" type="image/x-icon" href="media/logosquare.ico" />

    <link rel="preload" href="css/css_index.css" as="style" onload="this.rel='stylesheet'">
    <link rel="preload" href="libraries/bootstrap-3.3.7-dist/css/bootstrap.min.css" as="style" onload="this.rel='stylesheet'">
	
	<script>
		<!--#include virtual="libraries/node_modules/fg-loadcss/src/cssrelpreload.js" -->
	</script>
</head>

<body>
    <div id="particles-js">    
        <div id="header">
            <object id="logo" data="media/logo_animated.svg" type="image/svg+xml"></object>
            <p id="codes">Codes</p>
        </div>
    </div>


    <div id="projects">
        <h1>Projects</h1>

        <div class="project">
            <div class="box">
                <img src="media/titlescreen_high_res.png" class="projectbg" alt="Enigma Background">

                <div class="textonimg">
                    <h2>Enigma</h2>

                    <p>
                        Enigma is a Text-Based Adventure Game set in a randomly generated maze. On your quest to escape
                        the maze you will encounter orcs trying to kill you but also the help of some wise people
                        governing this place.
                    </p>
                    <br>
                    <p>
                        This game was made by me and 3 other people as part of a university project.
                    </p>
                    <br>
                    <p class="project-year">
                        2017/18
                    </p>

                    <div class="tools">
                        <p class="java">
                            Java
                        </p>
                    </div>


                    <a href="https://github.com/NicoPlattner/Enigma" target="_blank">
                        <img class="linkicon github" src="media/github_icon2.svg" alt="Github Icon">
                    </a>
                </div>
            </div>
        </div>

        <div class="project">
            <div class="box">
                <img src="media/menuBG.png" class="projectbg" alt="Badminton Background">

                <div class="textonimg">
                    <h2>Theodoros' Badminton</h2>

                    <p>
                        This Badminton Game was created during a 3 day Game Jam with 2 friends. In Theodoros' Badminton
                        2 friends sharing a keyboard can compete in an epic badminton match where Players will have
                        to overcome harsh conditions like wind, rain or thunderstorms.
                    </p>
                    <br>
                    <p class="project-year">
                        2018
                    </p>

                    <a href="https://npcodes.itch.io/theodoros-badminton" target="_blank">
                        <img class="linkicon itch" src="media/itchio_icon.svg" alt="itch.io Icon">
                    </a>

                    <div class="tools">
                        <p class="unity">
                            Unity
                        </p>
                        <p class="c_sharp">
                            C#
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="project">
            <div class="box">
                <img src="media/Unbenannt.JPG" class="projectbg" alt="Intermission Background">

                <div class="textonimg">
                    <h2>Intermission</h2>

                    <p>
                        Intermission is an Arcade Space Game where the player has to avoid getting hit by asteroids.
                        Asteroids can also be shot if they are dangerously close, creating fragments that could
                        be just as harmful though.
                    </p>
                    <br>
                    <p class="project-year">
                        2017
                    </p>

                    <a href="https://github.com/NicoPlattner/Intermission" target="_blank">
                        <img class="linkicon github" src="media/github_icon2.svg" alt="Github Icon">
                    </a>


                    <div class="tools">
                        <p class="java">
                            Java
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="filler">
            <div class="box">
                <img src="media/planet.png" class="projectbg" alt="Phaethon 3200 Background">

                <div class="textonimg">
                    <h2>Coming Soon: Phaethon 3200</h2>
                </div>
            </div>
        </div>
    </div>

    <div id="contact">
        <h1>Say Hi!</h1>


		  <?php
		  echo "hjk";
		  include "contact.php";?>
    </div>

    <script defer src="libraries/jquery-3.2.1.min.js"></script>
    <script defer src="libraries/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <script src="libraries/particles.min.js"></script>
	 
	 <script>
        particlesJS.load('particles-js', 'data/particles.json', function () {
            console.log('particles.json loaded');
        })
    </script>
</body>
</html>