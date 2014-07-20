/**
 * @author Jeff
 */
$(function(){
	//the words for the game
	var words = new Array("hangman","southpark","waukesha","programming","abbey","abruptly","affix","askew","axiom","azure","bagpipes","bandwagon","banjo","bayou","bikini","blitz","bookworm","boxcar","boxful","buck","aroo","buffalo","buffoon","cobweb","croquet","daiquiri","disavow","duplex","dwarves","equip","exodus","fishhook","fixable","foxglove","galaxy","galvanize","gazebo","gizmo","glowworm","guffaw","haiku","haphazard","hyphen","icebox","injury","ivory","ivy","jaundice","jawbreaker","jaywalk","jazzy","jigsaw","jiujitsu","jockey","jovial","joyful","juicy","jumbo","kazoo","keyhole","khaki","kilobyte","kiosk","kiwifruit","knapsack","larynx","luxury","marquis","megahertz","microwave","mystify","nightclub","nowadays","numbskull","ovary","oxidize","oxygen","pajama","peekaboo","pixel","pizazz","pneumonia","polka","quartz","quiz","quorum","razzmatazz","rhubarb","rickshaw","schizophrenia","sphinx","spritz","squawk","subway","swivel","topaz","unknown","unworthy","unzip","uptown","vaporize","vixen","vodka","vortex","walkway","waltz","wavy","waxy","wheezy","whiskey","whomever","wimpy","wizard","woozy","xylophone","yachtsman","yippee","youthful","zephyr","zigzag","zilch","zodiac","zombie");
	//var words = new Array("hangman","southpark");
	var alphabet = new Array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z");
	var kennyPics = new Array('<img class="kenny" src="images/KennyNoose6.png" />','<img class="kenny" src="images/KennyNoose5.png" />','<img class="kenny" src="images/KennyNoose4.png" />','<img class="kenny" src="images/KennyNoose3.png" />','<img class="kenny" src="images/KennyNoose2.png" />','<img class="kenny" src="images/KennyNoose.png" />');
	var keyStroke = [['a',65],['b',66],['c',67],['d',68],['e',69],['f',70],['g',71],['h',72],['i',73],['j',74],['k',75],['l',76],['m',77],['n',78],['o',79],['p',80],['q',81],['r',82],['s',83],['t',84],['u',85],['v',86],['w',87],['x',88],['y',89],['z',90]];
	var rand; //random index of word in words array
	var word; //the random word picked from the array
	var gameWord; //an array containing each letter of the random word at each index starting at 0
	var letters= "";//html string that contains a new div for each letter in the random word
	var questionMarks = ""; //same as var letters but the letters are replaced by question marks
	var letterButtons = "";
	var attemptedLetters= "<br>";
	var kennyPic;
	var kennyCounter = 6;
	var wrongCounter= 0;
	var placeHolderChar="<br>";
	var found= false;
	
	newWord();
	displayButtons();
	$('#opening').get(0).play();
	//Keyboard listener.. allows player to use keyboard as input for game but not for letters already chosen
	window.onkeydown = function(e){
	e= window.event || e;
	  	for(var i = 0; i< 26; i++){
	    	if(e.keyCode == keyStroke[i][1]){
		  		//alert("you pressed "+ keyStroke[i][0]);
		  		var elementId = "#btnLetter"+ keyStroke[i][0].toUpperCase();
		  		if($(elementId).attr('disabled')=='disabled'){
		  		}else{
		  			$(elementId).click();
		  		}
	  		}
	  	}    
	}

	//function to pick new word random word and call the display function
	function newWord(){
		$('#gameBoard').html(" ");
		letters = " ";
		questionMarks = " ";
		rand = Math.floor((Math.random()*words.length)); 
		word = words[rand];
		gameWord=word.split("");
		displayWord();
	}
	
	//function to display the word
	function displayWord(){
		for(var i = 0; i<gameWord.length;i++) {
			questionMarks += "<td><div class='wordLetter' id='questLetter" + i +"'>"+  placeHolderChar +"</td>";
		}
		$('#gameBoard').html(
	 	"<table><tr>"+
	 	//lett9ers+"</tr><tr>"+
	 	questionMarks+
	 	"</tr></table>"
	);}
	
	//function to display the buttons
	function displayButtons(){
		for(var i = 0; i<alphabet.length;i++) {
			if((i % 6) == 0 && i !=0){
				
				letterButtons += "<br />";
			};
	   		letterButtons += "<input type='button' class='letterButton button' id='btnLetter"+alphabet[i]+"' value='"+alphabet[i]+"'/>";
			$('#letterButtons').html(letterButtons);
			
		}
	}

	
	//event listener for letterButton click
	$('.letterButton').click(function(){
		var button = "#"+$(this).attr("id");
		found= false;
		var letter = $(this).val();
		
		if(checkLose() == false && checkWin() == false){
			checkLetter(letter, button);
			
			if (found == true) {
				checkWin();		
			}else{
				wrongCounter++;
				wrongLetter(button);
				checkLose();
			};	
		}else{
			
			wrongLetter(button);
			$('#letterButtons').attr("style", "font-size:XX-Large");
			$('#letterButtons').html('<div class="flash" >You Lose </div> <input type="button" id="playAgain" class="button" value="Play Again" onclick="window.location.reload()" />');
			$('#playAgain').focus();
			showWord();
		} 	
	});
	
	
	
	
	
	function checkLose () {
	  if(wrongCounter>=6){
	  	
	 // $('#killKenny').html("<embed height=\"100\" width=\"100\" src=\"http://www.moviesounds.com/sp/killkenny1.mp3\"></embed>");
	 //$('#killKenny').html("<embed height=\"100\" width=\"100\" src=\"/Audio/killkenny1.mp3\"></embed>");
	
	  		$('#letterButtons').attr("style", "font-size:XX-Large");
			$('#letterButtons').html('<div class="flash" >You Lose </div> <input type="button" id="playAgain" class="button" value="Play Again" onclick="window.location.reload()" />');
			$('#playAgain').focus();
			showWord();
		 $('#killKenny').get(0).play();
	  		return true;
	  }else return false;
	}
	
	function checkWin () {		
		var win = true;
		
			for(var i = 0; i < word.length; i++){
					var theLetter = "#questLetter"+i;
					if($(theLetter).html() == gameWord[i]){
					}else{
						win = false;
				}
			}						
	
		
	
			
			if(win == true){
				$('#letterButtons').attr("style", "font-size:XX-Large");
				$('#letterButtons').html('<div class="flash" >You Win! </div> <input type="button" id="playAgain" class="button" value="Play Again" onclick="window.location.reload()" />');
				$('#playAgain').focus();
				return true;
			}else return false;
			}		
	
	
	function checkLetter(letter, button){
		for(var i = 0; i < gameWord.length; i++) {
			   	if (letter == gameWord[i].toUpperCase()) {
			   		found = true;
					correctLetter(i, button);
					
				};
			}
	}
	
	function wrongLetter(button){
		kennyPic = "#kenny"+kennyCounter;
		$(kennyPic).removeClass('hidden');
		$(kennyPic).addClass('shown').fadeIn(700);
		kennyCounter-=1;
		
		var thisLetter = $(button).val()+'&nbsp&nbsp';
		attemptedLetters += thisLetter;
		$('#attemptedLetters').html(attemptedLetters);
		$(button).attr("disabled", "disabled");	
		
	}
	
		
	function correctLetter(index, button ){
		var temp = "#questLetter"+index;
		$(temp).html(gameWord[index]);
		$(button).addClass("green");

	}

	function showWord(){
		for(var i = 0; i < word.length; i++){
				var theLetter = "#questLetter"+i;
				if($(theLetter).html() == placeHolderChar){
					$(theLetter).html(gameWord[i]);
					$(theLetter).css('color','red');
				}
			
					
		}
		
		
	}
	
	
});
