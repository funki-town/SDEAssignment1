var xHrObject = false;

if (window.XMLHttpRequest) {
    xHRObject = new XMLHttpRequest();
} else if (window.ActiveXObject) {
    xHRObject = new ActiveXObject("Microsoft.XMLHTTP");
}

function showAge() {
    var name = document.getElementById("name").value;
    var age = document.getElementById("date").value;
    if (name == "" || age == "") {
        document.getElementById("return").innerHTML = "Please enter your details above";
        return;
    } else {
        xHRObject.open("GET", "calculate.php?a=" + name + "&b=" + date, true);
        xHRObject.setRequestHeader('If-Modified-Since', 'Sat, 1 Jan 2000 00:00:00 GMT');
        xHRObject.onreadystatechange = recData;
        xHRObject.send(null);
    }
}

function recData() {
    if (xHRObject.readyState == 4 && xHRObject.status == 200) {
        alert("Ajax works" + xHRObject.responseText);
        document.getElementById("return").class = "";
        xHRObject.responseText = document.getElementById("return").innerHTML;
    }
}