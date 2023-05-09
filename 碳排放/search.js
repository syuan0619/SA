function searchData() {
    var start_date = document.getElementById("start_date").value;
    var end_date = document.getElementById("end_date").value;
    var xhr = new XMLHttpRequest();
    xhr.open("GET", "search.php?start_date=" + start_date + "&end_date=" + end_date, true);
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            document.getElementById("result").innerHTML = xhr.responseText;
        }
    };
    xhr.send();
}
