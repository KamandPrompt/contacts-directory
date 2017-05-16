$('#search').keyup(function() {
    var query = $('#search').val();
    if (!query) {
        $('#table1').empty();
        $('#table1').append(table1);
        $('#table2').empty();
        $('#table2').append(table2);
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
                var res = this.responseText.split("|");
                $('.details').remove();
                if(res[0].length>1){
                    $('#first').show();
                    $('#table1').append(res[0]);
                }
                else{
                    $('#first').hide();                       
                }
                if(res[1].length>1){
                    $('#second').show();
                    $('#second2').show();
                    $('#table2').append(res[1]);
                }
                else{
                    $('#second').hide();
                    $('#second2').hide();    
                }
            }
        }
    }
    xmlhttp.open("GET","../config/search.php?b=&q="+query,true);
	xmlhttp.send();
});
$('#searchb2016').keyup(function() {
    var query = $('#searchb2016').val();
    if (!query) {
    	$('table').empty();
    	$('table').append(table);
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
               	$('.details').remove();
		    	$('table').append(this.responseText);
            }
        }
    }
    xmlhttp.open("GET","../config/search.php?b=btech2016&q="+query,true);
	xmlhttp.send();
});
$('#searchb2015').keyup(function() {
    var query = $('#searchb2015').val();
    if (!query) {
    	$('table').empty();
    	$('table').append(table);
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
               	$('.details').remove();
		    	$('table').append(this.responseText);
            }
        }
    }
    xmlhttp.open("GET","../config/search.php?b=btech2015&q="+query,true);
	xmlhttp.send();
});
$('#searchb2014').keyup(function() {
    var query = $('#searchb2014').val();
    if (!query) {
        $('table').empty();
        $('table').append(table);
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
                $('.details').remove();
                $('table').append(this.responseText);
            }
        }
    }
    xmlhttp.open("GET","../config/search.php?b=btech2014&q="+query,true);
    xmlhttp.send();
});
$('#searchb2013').keyup(function() {
    var query = $('#searchb2013').val();
    if (!query) {
        $('table').empty();
        $('table').append(table);
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
                $('.details').remove();
                $('table').append(this.responseText);
            }
        }
    }
    xmlhttp.open("GET","../config/search.php?b=btech2013&q="+query,true);
    xmlhttp.send();
});
$('#searchphd').keyup(function() {
    var query = $('#searchphd').val();
    if (!query) {
        $('table').empty();
        $('table').append(table);
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
                $('.details').remove();
                $('table').append(this.responseText);
            }
        }
    }
    xmlhttp.open("GET","../config/search.php?b=phd&q="+query,true);
    xmlhttp.send();
});
$('#searchiphd').keyup(function() {
    var query = $('#searchiphd').val();
    if (!query) {
        $('table').empty();
        $('table').append(table);
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
                $('.details').remove();
                $('table').append(this.responseText);
            }
        }
    }
    xmlhttp.open("GET","../config/search.php?b=iphd&q="+query,true);
    xmlhttp.send();
});
$('#searchms').keyup(function() {
    var query = $('#searchms').val();
    if (!query) {
        $('table').empty();
        $('table').append(table);
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
                $('.details').remove();
                $('table').append(this.responseText);
            }
        }
    }
    xmlhttp.open("GET","../config/search.php?b=ms&q="+query,true);
    xmlhttp.send();
});
$('#searchmsc').keyup(function() {
    var query = $('#searchmsc').val();
    if (!query) {
        $('table').empty();
        $('table').append(table);
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
                $('.details').remove();
                $('table').append(this.responseText);
            }
        }
    }
    xmlhttp.open("GET","../config/search.php?b=msc&q="+query,true);
    xmlhttp.send();
});
$('#searchmtech').keyup(function() {
    var query = $('#searchmtech').val();
    if (!query) {
        $('table').empty();
        $('table').append(table);
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
                $('.details').remove();
                $('table').append(this.responseText);
            }
        }
    }
    xmlhttp.open("GET","../config/search.php?b=mtech&q="+query,true);
    xmlhttp.send();
});
var table = "";
$( document ).ready(function() {
	table = $('table').html();
});
$('#staff').keyup(function() {
    var query = $('#staff').val();
    if (!query) {
        $('table').empty();
        $('table').append(table);
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
                $('.details').remove();
                $('table').append(this.responseText);
            }
        }
    }
    xmlhttp.open("GET","../config/search.php?b=staff&q="+query,true);
    xmlhttp.send();
});
var table = "";
$( document ).ready(function() {
    table1 = $('#table1').html();
    table2 = $('#table2').html();
});