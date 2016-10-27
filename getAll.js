var xHrObject = false;
//error handling for IE
if (window.XMLHttpRequest) {
    xHRObject = new XMLHttpRequest();
} else if (window.ActiveXObject) {
    xHRObject = new ActiveXObject("Microsoft.XMLHTTP");
}

function getAll() {
        //get Divs from DOM
        var div = document.getElementById("list");
        var div2 = document.getElementById("database2");
        var div3 = document.getElementById("database");
        var div4 = document.getElementById("message");
        var div5 = document.getElementById("mars");
        //populate database message
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
        //get all from the database
        xHRObject.open("GET", "getAll.php?", true);
        xHRObject.setRequestHeader('If-Modified-Since', 'Sat, 1 Jan 2000 00:00:00 GMT');
        xHRObject.onreadystatechange = recData2;
        xHRObject.send(null);
}

function recData2() {
      if (xHRObject.readyState == 4 && xHRObject.status == 200) {
        //grab divs from DOM
        var div = document.getElementById("list");
        var div2 = document.getElementById("database2");
        var div3 = document.getElementById("database");
        var div4 = document.getElementById("message");
        var div5 = document.getElementById("mars");
        //show success message
        div2.className="alert alert-success";
        div2.innerHTML="Successful";
        //clear any calculations
        div3.innerHTML="";
        div3.className="";
        div4.innerHTML="";
        div4.className="";
        div5.innerHTML="";
        div5.className="";
        //output Table
        div.innerHTML = xHRObject.responseText;
      }
}
