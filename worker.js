importScripts("jquery-1.12.4.min.js");
$.getJSON("https://vast-waters-68504.herokuapp.com/back.php").then(function(tx){ 
  postMessage(tx.title); 
});
