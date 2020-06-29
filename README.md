# Memory Game / WP plugin

## Creating Wordpress plugin for basic memory match game. 
This is just a test / learning project for simple WP plugins.  In this plugin, we are using simple html game code (which i have forked) and will convert it to WP plugin.

## How to install this plugin
1) Download the complete code.   
2) Create a new folder "memory-match-game" in your plugins directory of the wordpress. Copy the code inside it.
3) Go to Admin > Plugins > Activate the plugin
4) Create a new post or page (Page ideally as its not really a post). You can name the page as "Memory Game" or anything you like. 
5) In the body of the page place this shortcode: "[adding_memory_game]".  This will add the memory game. 

## Future updates ?
1) Future versions can include scoring, saving the score into the database and the leaderboard. 
 

# Below is the original game introduction 

## What is the Memory Game
This is a simple game built to test a users memory. There's a deck of cards with different icons. 
![snippet](img/snippet.png)

## Challenge
Match cards in less time with less moves.

## How to Play
Load this link in your browser https://memory-game-fend.herokuapp.com/

## Instructions
* Click on a card
* Keep revealing cards and working your memory to remember each unveiled card.
* Match cards properly with less moves and in faster time


## How I built the Memory Game
I manipulated the DOM with Vanilla JS, altered part of the HTML and also styled the game
* created a deck of cards that shuffles when game is refreshed
* created a counter to count the number of moves made by player and timer to know the duration of a play
* added effects to cards when they match and are unmatched
* create a pop-up modal when player wins game
