console.info('main.js loaded');

//AJAX function
function ajaxLoader(phpFile, callback) {
  var xhttp;
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      callback(this);
    }
  };
  xhttp.open("GET", "index2.php?c="+phpFile, true);
  xhttp.send();
}
