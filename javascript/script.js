var baseurl = "https://flespi.io/gw/devices/2437017/messages?data=%7B%7D";
function loadData() {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.open("GET", baseurl, false);
    xmlhttp.setRequestHeader("Authorization", "FlespiToken Nqy02NoF1G6DJKVayifPYNcpl5JCZ1oAfKq5oCzd9vEG4qFsyK5ml7zw39WQY8g3");
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState === 4 && xmlhttp.status === 200) {
            var persons = JSON.parse(xmlhttp.responseText);
            
            //main table content we fill from data from the rest call
            var main = "";
            data101 = persons.result.length;
            var x = data101 - 10;

            for (var i = x; i < data101; i++) {

                //convert timestamp to time
                let unix_timestamp = persons.result[i]['timestamp']
                // Create a new JavaScript Date object based on the timestamp
                // multiplied by 1000 so that the argument is in milliseconds, not seconds.
                var date = new Date(unix_timestamp * 1000);
                // Hours part from the timestamp
                var hours = date.getHours();
                // Minutes part from the timestamp
                var minutes = "0" + date.getMinutes();
                // Seconds part from the timestamp
                var seconds = "0" + date.getSeconds();

                // Will display time in 10:30:23 format
                var formattedTime = hours + ':' + minutes.substr(-2) + ':' + seconds.substr(-2);

                console.log(formattedTime);

                //convert timestamp to Date
                var timestamp = persons.result[i]['server.timestamp'];
                var date = new Date(timestamp);
                console.log(date.getTime())
                console.log(date)

                

                main += "<tbody><tr><td>" + persons.result[i]['battery.level'] + "</td><td>" + persons.result[i]['device.id'] + "</td><td>" + persons.result[i]['device.name'] + "</td><td>" + persons.result[i].peer + "</td><td>" + persons.result[i]['position.latitude'] + "</td><td>" + persons.result[i]['position.longitude'] + "</td><td>" + persons.result[i]['protocol.id'] + "</td><td>" + /*persons.result[i]['server.timestamp']*/date + "</td><td>" + /*persons.result[i]['timestamp']*/formattedTime + "</td></tr></tbody>";
            }
            var tblbottom = "</table>";
            var tbl = tbltop + main + tblbottom;
            document.getElementById("personinfo").innerHTML = tbl;
        }
    };
    xmlhttp.send(null);
}
window.onload = function () {
    loadData();
}