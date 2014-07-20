/**
 * @author Jeff
 */
$(document).ready(init); 
//window.onload(init);
	var ing01 = $('#ing01').html();
	var ing02 = $('#ing02').html();
    var ing03 = $('#ing03').html();
    var ing04 = $('#ing04').html();
    var ing05 = $('#ing05').html();
    var ing06 = $('#ing06').html();
    var ing07 = $('#ing07').html();
    var ing08 = $('#ing08').html();
    var ing09 = $('#ing09').html();
 
 


function init(){
	$('#btnHide').click(hide);
	$('#btnShow').hide();
	$('#btnShow').click(show);
	$('.radio').change(resize); //attaches resize function to radio button .change event
}
function show () {
  $('#header').show();
  $('#btnShow').hide();
}
function hide(){
	//alert("button");
	$('#header').hide();
	$('#btnShow').show();
}
function resize () {
		
  
 $('#ing01').html(ing01 * $("input:radio:checked").val());
 $('#ing02').html(ing02 * $("input:radio:checked").val());
 $('#ing03').html(ing03 * $("input:radio:checked").val());
 $('#ing04').html(ing04 * $("input:radio:checked").val());
 $('#ing05').html(ing05 * $("input:radio:checked").val());
 $('#ing06').html(ing06 * $("input:radio:checked").val());
 $('#ing07').html(ing07 * $("input:radio:checked").val());
 $('#ing08').html(ing08 * $("input:radio:checked").val());
 $('#ing09').html(ing09 * $("input:radio:checked").val());
  
 
}

$(function(){

				// Accordion
				$("#accordion").accordion({ header: "h3" });

				// Tabs
				$('#tabs').tabs();

				// Datepicker
				$('#datepicker').datepicker({
					inline: true
				});

				// Progressbar
				$("#progressbar").progressbar({
					value: 33
				});

				//hover states on the static widgets
				$('#dialog_link, ul#icons li').hover(
					function() { $(this).addClass('ui-state-hover'); },
					function() { $(this).removeClass('ui-state-hover'); }
				);

			});
