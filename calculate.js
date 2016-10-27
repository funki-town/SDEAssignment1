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
  var lname = document.getElementById("lname").value;
  var date = document.getElementById("date").value;
  var div4 = document.getElementById("list");
  var div3 = document.getElementById("database2");
  var div5 = document.getElementById("mars");
  //show connection message
  var div2 = document.getElementById("database");
  div2.className = "alert alert-info";
  div2.innerHTML="Connecting to Database. Please Wait";
  //clear existing outputs
  div.innerHTML="";
  div.className="";
  div3.innerHTML="";
  div3.className="";
  div4.innerHTML="";
  div4.className="";
  div5.innerHTML="";
  div5.className="";
    if (name == "" || date == "" || lname == "") {
        //validate inputs client side
        div.innerHTML = "Please enter your details above";
        div.className = "alert alert-warning";
    } else {
        //calculate age
        xHRObject.open("GET", "calculate.php?a=" + name + "&b=" + date + "&c=" + lname, true);
        xHRObject.setRequestHeader('If-Modified-Since', 'Sat, 1 Jan 2000 00:00:00 GMT');
        xHRObject.onreadystatechange = recData;
        xHRObject.send(null);
    }
}

function recData() {
    if (xHRObject.readyState == 4 && xHRObject.status == 200) {
        //only update div if a response message comes through
        if(xHRObject.responseText.length > 0){
          // split the echo string using new line as the delimiter
          var string = xHRObject.responseText.split("||");
          //get items from DOM
          var div2 = document.getElementById("database");
          var div = document.getElementById("list");
          var div3 = document.getElementById("database2");
          var div4 = document.getElementById("message");
          //clear any existing messages
          div3.innerHTML="";
          div3.className="";
          div4.innerHTML="";
          div4.className="";
          div.innerHTML="";
          div.className="";
          //show sucess message
          div2.className="alert alert-success";
          div2.innerHTML="Data insterted to the database";
          //populate the calculation message
          var earth = document.getElementById("message");
          earth.className = "alert alert-info";
          earth.innerHTML = "You are " + string [0] + " day(s) old on Earth";
          var mars = document.getElementById("mars");
          mars.className = "alert alert-info";
          mars.innerHTML = "You are  " + string[1] + " days old on Mars";
        }
    }
}
