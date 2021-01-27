function darkmode() {
    var body = document.getElementById("body")
    var btn = document.querySelectorAll("#deletebtn")
    if (body.style.backgroundColor == "white") {
        body.style.backgroundColor = "#464443"
        body.style.color = "white"
        btn.style.color = "white"
    } else {
        body.style.backgroundColor = "white";
        body.style.color = "#464443";
        btn.style.color = "#464443";
    }
}