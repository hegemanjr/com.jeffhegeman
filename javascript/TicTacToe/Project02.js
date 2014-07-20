/**
 * @author Jeff
 */
$(function(){
	var onePlayer; //Bool to decide if the game is one player or two player 
	
	//Animation for tic tac toe title on page load	
	$('#header').hide();
	$('#header').html("Tic-Tac-Toe");
	$('#header').delay(2800).fadeIn("slow");
	
	//Event listener for one player button
	$('#btn1Player').click(function(){
			onePlayer= true;
			gameOver();
			newGame();
			chooseFirstGo();
			
	});
	//event listener for two player button
	$('#btn2Player').click(function(){
		    onePlayer= false;
			gameOver();
			newGame();
			chooseFirstGo();
			
	});
	

 	
	//Event listener for tic tac toe tiles click
	$('div.divTtt').click(function(){
		if(onePlayer== true&&($('#currentPlayer').html()=="O")){
			alert("Not Your Turn!");
		}else{
			if($(this).hasClass("checked")){
				//alert("This space has been played");
			}else{
				$(this).html($('#currentPlayer').html()).fadeIn(800);
				$(this).addClass("checked");
				
				checkCatsGame();
				checkWin();
			}}
				});
	
			//function for switching between players
			function togglePlayer() {
				
				if(onePlayer== true){//1 player vs computer
					if ($('#currentPlayer').html()=="X"){
						
						$('#currentPlayer').html("O");
			  			$('#lblCurrentPlayer').html("O");
			  			setTimeout(computerTakeTurn,800);
			  		 		//computerTakeTurn();
			 		}else{
			 			
			  			$('#currentPlayer').html("X");
			  			$('#lblCurrentPlayer').html("X");
			 		}
				}else{//2 player vs each other
					if ($('#currentPlayer').html()=="X"){
			 			$('#currentPlayer').html("O");
			  			$('#lblCurrentPlayer').html("O");
			 		}else{
			  			$('#currentPlayer').html("X");
			  			$('#lblCurrentPlayer').html("X");
			 		}
				
				}
			
			
			}

			//Randomize first player
			function chooseFirstGo(){
				var rand = Math.floor(Math.random()*2);
				if(rand == 0 && onePlayer == true){
					
						$('#currentPlayer').html("O");
			  			$('#lblCurrentPlayer').html("O");
			  			computerTakeTurn();
				}else if(rand == 0 ){
						$('#currentPlayer').html("O");
			  			$('#lblCurrentPlayer').html("O");
				}else{
					
						$('#currentPlayer').html("X");
			  			$('#lblCurrentPlayer').html("X");
				}
				
			}

			//check for a winner
			function checkWin(){
				if($('#1').html()==$('#2').html()&&$('#1').html()==$('#3').html()&&$('#1').hasClass("checked")//top row
				||$('#4').html()==$('#5').html()&&$('#4').html()==$('#6').html()&&$('#4').hasClass("checked")//middle row
				||$('#7').html()==$('#8').html()&&$('#7').html()==$('#9').html()&&$('#7').hasClass("checked")//bottom row
				||$('#1').html()==$('#4').html()&&$('#1').html()==$('#7').html()&&$('#1').hasClass("checked")//left column
				||$('#2').html()==$('#5').html()&&$('#2').html()==$('#8').html()&&$('#2').hasClass("checked")//middle column
				||$('#3').html()==$('#6').html()&&$('#3').html()==$('#9').html()&&$('#3').hasClass("checked")//right column
				||$('#1').html()==$('#5').html()&&$('#1').html()==$('#9').html()&&$('#1').hasClass("checked")//diaganal down
				||$('#7').html()==$('#5').html()&&$('#7').html()==$('#3').html()&&$('#7').hasClass("checked")//diagonal up
				){
					
					$('#winner').html("Player "+$('#currentPlayer').html()+" you win");//Change text in controls box to display winner
					$('#winner').show();//show winner text
					gameOver();
					return true;
						
				}else{
					$('#gameTable').show();
					$('#spnCurrentPlayer').show();
					togglePlayer();
					return false;
				}	
			}
			
			//check for cats game
			function checkCatsGame() {
			
			if($('#1').hasClass('checked')&&$('#2').hasClass('checked')&&$('#3').hasClass('checked')
				&&$('#4').hasClass('checked')&&$('#5').hasClass('checked')&&$('#6').hasClass('checked')
				&&$('#7').hasClass('checked')&&$('#8').hasClass('checked')&&$('#9').hasClass('checked')&& checkWin()==false
				){
					
					$('#winner').html("Cats game!");
					$('#winner').show();
					gameOver();
						//alert("Cat's Game!");
						/*var r=confirm("Cat's Game!"+" PLAY AGAIN?");
						if (r==true)
		  				{
						newGame();
						
					    }
						else
						{
							gameOver();
						}*/
					
				 }
			}
			
			//Clears the game board
			function clearBoard() {
			  $('.divTtt').each(function(){
			  
			  	$(this).html('&nbsp;');
			  	$(this).removeClass('checked');
			  });
			  
			}
			
			//check if user wants to play again
			function confirmNewGame () {
			  var r=confirm("Player "+$('#currentPlayer').html()+" you win. PLAY AGAIN?");
			if (r==true)
  			{
				newGame();
		    }
			else
			{
 				gameOver();
			}
			}
		
			//Fucntion for ending the game
			function gameOver(){		
				$('.bigTitle').hide();
				$('.divTtt').each(function(){
			  		$(this).addClass('checked');
				});
				$('#btn1Player').show();
				$('#btn2Player').show();
				$('#btnQuit').fadeOut(900);
				//$('.ui-btn').show();//for mobile site
				$('.content').addClass('shadow');
				$('.content').removeClass('glow');
			}
			
			//Function for starting a new game
			function newGame(){
				$('#winner').hide();
				$('#btnNewGame').hide();
				clearBoard();
				$('.bigTitle').show();
				$('#gameTable').fadeIn(900);
				$('#btnQuit').fadeIn(900);
				$('#btn1Player').hide();
				$('#btn2Player').hide();
				//$('.ui-btn').hide();//for mobile site
				$('.content').addClass('glow');
				$('.content').removeClass('shadow');
			}
			
			//funtion for when the compter takes turn during 1 player game/
			function computerTakeTurn(){
				
				var rand = Math.floor(Math.random()*9)+1;
				var tookTurn = false;
				while(tookTurn == false){
					if ($('#'+rand).hasClass('checked')){
						//new rand
						rand = Math.floor(Math.random()*9)+1;
					
					}else{
						//comp play turn at this location
						
						$('#'+rand).html("O");
						$('#'+rand).addClass('checked');
						checkWin();
						checkCatsGame();
						tookTurn = true;
					}
				
				}
				
			}
		
		//Event listener for quit button			
			$('#btnQuit').click(function(){
			$('.darkbox').removeClass('hidden');
			$('.darkbox').css("z-index","4");
			$('.lightbox').removeClass('hidden');
			$('.lightbox').css("z-index","5");
			$('#alertUser').html('Are you sure you want to Quit?<br /><br /><button class="button" id="btnYes">Yes</button><button class="button" id="btnNo">No</button>');
			$('#btnYes').click(function(){
				window.location = "index.html";
			});
			$('#btnNo').click(function(){
				$('.darkbox').addClass('hidden');
				$('.darkbox').css("z-index","-1");
				$('.lightbox').addClass('hidden');
				$('.lightbox').css("z-index","-1");
				$('#alertUser').html('');
				
			});
			/*var r=confirm("Are you sure you want to quit?","End Game?");
						if (r==true)
		  				{
							window.location = "index.html";
					    }
				*/		
			
		});
});
