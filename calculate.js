var xHrObject = false;
//error handling for IE
if (window.XMLHttpRequest) {
    xHRObject = new XMLHttpRequest();
} else if (window.ActiveXObject) {
    xHRObject = new ActiveXObject("Microsoft.XMLHTTP");
}

function showAge() {
  //get values from form
  var div = document.getElementById("message");
  var name = document.getElementById("name").value;
  var date = document.getElementById("date").value;
    if (name == "" || date == "") {
        //validate inputs client side
        div.innerHTML = "Please enter your details above";
        div.className = "alert alert-warning";
        return;
    } else {
        //calculate age
        xHRObject.open("GET", "calculate.php?a=" + name + "&b=" + date, true);
        xHRObject.setRequestHeader('If-Modified-Since', 'Sat, 1 Jan 2000 00:00:00 GMT');
        xHRObject.onreadystatechange = recData;
        xHRObject.send(null);
    }
}

function recData() {
    if (xHRObject.readyState == 4 && xHRObject.status == 200) {
        //for testing
        //alert("You are  " + xHRObject.responseText + " days old");
        if(xHRObject.responseText.length > 0){
          //populate the message
          var div = document.getElementById("message");
          div.className = "alert alert-success";
          div.innerHTML = "You are " + xHRObject.responseText + " day(s) old";
        }
    }
}
