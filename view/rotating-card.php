<?php
/**
 * Created by PhpStorm.
 * User: Noureddine
 * Date: 30/04/2017
 * Time: 23:55
 */
?>

<div class="card-container manual-flip" >
    <div class="card">
        <div class="front">
            <div class="cover">
                <img src="public/images/rotating_card_thumb.png"/>
            </div>
            <div class="user">
                <img class="img-circle" src="public/images/org.jpg"/>
            </div>
            <div class="content">
                <div class="main">
                    <h3 class="name">Metourni Noureddine</h3>
                    <p class="profession">Web Developer</p>
                    <p class="text-center">"This is asimple model for <br>Your quick project <br>I hope it will be useful for you. "</p>
                </div>
                <div class="footer">
                    <button class="btn btn-simple" onclick="rotateCard()">
                        <i class="fa fa-mail-forward"></i> More information
                    </button>
                </div>
            </div>
        </div> <!-- end front panel -->
        <div class="back">
            <div class="header">
                <h5 class="motto">"To be or not to be, this is my awesome motto!"</h5>
            </div>
            <div class="content">
                <div class="main">
                    <h4 class="text-center">Job Description</h4>
                    <p class="text-center">Web design, Adobe Photoshop, HTML5, CSS3, Corel and many others...</p>

                    <div class="stats-container">
                        <div class="stats">
                            <h4>235</h4>
                            <p>
                                Followers
                            </p>
                        </div>
                        <div class="stats">
                            <h4>114</h4>
                            <p>
                                Following
                            </p>
                        </div>
                        <div class="stats">
                            <h4>35</h4>
                            <p>
                                Projects
                            </p>
                        </div>
                    </div>

                </div>
            </div>
            <div class="footer">
                <button class="btn btn-simple" rel="tooltip" title="Flip Card" onclick="rotateCard()">
                    <i class="fa fa-reply"></i> Back
                </button>
                <div class="social-links text-center">
                    <a href="https://www.facebook.com/profile.php?id=100013748358742" class="facebook"><i class="fa fa-facebook fa-fw"></i></a>
                    <a href="https://plus.google.com/u/0/109871420044870619320" class="google"><i class="fa fa-google-plus fa-fw"></i></a>
                    <a href="https://www.instagram.com/noureddinemeto/" class="twitter"><i class="fa fa-instagram fa-fw"></i></a>
                </div>
            </div>
        </div> <!-- end back panel -->
    </div> <!-- end card -->
</div> <!-- end card-container -->
