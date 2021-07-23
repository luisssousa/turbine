function ajax(action, url, callback) {
    var xhttp = new XMLHttpRequest();
    
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            callback(JSON.parse(xhttp.responseText));
        }
    };
    xhttp.open(action, url, true);
    xhttp.send();
}

function damaged(data) {
    var i;
    var str = '';
    var classes = '';
    
    for (i=0; i<data['data'].length; i++) { 
        classes = typeof data['data'][i] !== 'number' ? 'damaged-item' : '';
        str += '<div class="' + classes + '">' + data['data'][i] + '</div>';
    }

    document.getElementById(data['target']).innerHTML = str;    
}

 document.addEventListener("DOMContentLoaded", ajax('GET', '/api/inspect', damaged));