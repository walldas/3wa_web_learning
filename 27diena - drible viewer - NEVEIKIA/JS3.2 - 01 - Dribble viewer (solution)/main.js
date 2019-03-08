var DRIBBLE_PAGE = 1;

function showLoader() {
	$('#more').hide();
	$('#loader').show();
}

function hideLoader() {
	$('#loader').hide();
	$('#more').show();
}

function getShots() {
	showLoader();

	var access_token = "4f82a53f0e76a1490183f064463963471d04ab633c8bd3922223b68900f04966";

	$.getJSON('https://api.dribbble.com/v1/shots/?page=' + DRIBBLE_PAGE + '&access_token=' + access_token, function(data){
		$.each(data, function(i,shot){
			var component = '' +
			'<div class="thumbnail">' +
		      '<img src="' + shot.images.teaser + '">' +
		      '<div class="caption">' +
		        '<h3>' + shot.title + '</h3>' +
		        '<p>' + shot.description + '</p>' +
		        '<p><a href="' + shot.html_url + '" class="btn btn-primary" target="_blank">Show on Dribble</a></p>' +
		      '</div>' +"<div>"+shot.user.location +"</div>"
		    '</div>';
			
			$('#shots').append( $(component) );
		});

		DRIBBLE_PAGE++;
		hideLoader();
	});
}

$(document).ready(function() {

	getShots();

	$('#more').click(function(e) {
		e.preventDefault();
		getShots();
	})

})