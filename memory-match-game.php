<?php
/**
 * Plugin Name: Memory Match Game
 * Plugin URI: http://www.jawad.pk/
 * Description: Add a memory match game in your wordpress website
 * Version: 1.0
 * Author: WP plugin: Jawad Khan  | game code: sandraisrael
 * Author URI: http://www.jawad.pk
 */
 

 //add_action('wp_enqueue_scripts','game_init');

function game_init() {
    wp_enqueue_script( 'memory-game-js', plugins_url( '/js/app.js', __FILE__ ));
	
	  wp_enqueue_style( 'memory-game-css', plugins_url( '/css/app.css', __FILE__ ));
	  wp_enqueue_style( 'font-awesome-css', "https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css");
	  
	  
	 echo add_memory_game_html();
}


function add_memory_game_html()
{
	//$memory_game = "add_memory_game here";
	
	ob_start();
	?>
	  <div class="container">
       

        <section class="score-panel">
        	<ul class="stars">
        		<li><i class="fa fa-star"></i></li>
        		<li><i class="fa fa-star"></i></li>
        		<li><i class="fa fa-star"></i></li>
        	</ul>

        	<span class="moves">0</span> Move(s)

            <div class="timer">
            </div>

            <div class="restart" onclick=startGame()>
        		<i class="fa fa-repeat"></i>
        	</div>
        </section>

        <ul class="deck" id="card-deck">
            <li class="card" type="diamond">
                <i class="fa fa-diamond"></i>
            </li>
            <li class="card" type="plane">
                <i class="fa fa-paper-plane-o"></i>
            </li>
            <li class="card match" type="anchor">
                <i class="fa fa-anchor"></i>
            </li>
            <li class="card" type="bolt" >
                <i class="fa fa-bolt"></i>
            </li>
            <li class="card" type="cube">
                <i class="fa fa-cube"></i>
            </li>
            <li class="card match" type="anchor">
                <i class="fa fa-anchor"></i>
            </li>
            <li class="card" type="leaf">
                <i class="fa fa-leaf"></i>
            </li>
            <li class="card" type="bicycle">
                <i class="fa fa-bicycle"></i>
            </li>
            <li class="card" type="diamond">
                <i class="fa fa-diamond"></i>
            </li>
            <li class="card" type="bomb">
                <i class="fa fa-bomb"></i>
            </li>
            <li class="card" type="leaf">
                <i class="fa fa-leaf"></i>
            </li>
            <li class="card" type="bomb">
                <i class="fa fa-bomb"></i>
            </li>
            <li class="card open show" type="bolt">
                <i class="fa fa-bolt"></i>
            </li>
            <li class="card" type="bicycle">
                <i class="fa fa-bicycle"></i>
            </li>
            <li class="card" type="plane">
                <i class="fa fa-paper-plane-o"></i>
            </li>
            <li class="card" type="cube">
                <i class="fa fa-cube"></i>
            </li>
        </ul>

        <div id="popup1" class="overlay">
            <div class="popup">
                <h2>Congratulations</h2>
                <a class="close" href=# ></a>
                <div class="content-1">
                    Congratulations you're a winner
                </div>
                <div class="content-2">
                    <p>You made <span id=finalMove> </span> moves </p>
                    <p>in <span id=totalTime> </span> </p>
                    <p>Rating:  <span id=starRating></span></p>
                </div>
                <button id="play-again"onclick="playAgain()">
                    Play again </a>
                </button>
            </div>
        </div>

    </div>
	<?php
	$memory_game_html = ob_get_clean();	
	return $memory_game_html;
}

add_shortcode("adding_memory_game", game_init);
