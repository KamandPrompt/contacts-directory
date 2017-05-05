$('#search').keyup(function() {
    var query = $('#search').val();
    if (!query) {
		$('#results').empty();
		return;        
    } else {
    	if (window.XMLHttpRequest) {
		    // code for IE7+, Firefox, Chrome, Opera, Safari
 				xmlhttp = new XMLHttpRequest();
			}  else { // code for IE6, IE5
     			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
 			}

      xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                $('#results').empty();
                $('#results').append(this.responseText);
            }
        }
    }
    xmlhttp.open("GET","../config/search.php?q="+query,true);
	xmlhttp.send();
});
