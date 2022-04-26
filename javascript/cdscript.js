var baseurl = "https://flespi.io/gw/devices/2437017?fields=connected";
function loadConnectedDevices() {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.open("GET", baseurl, false);
    xmlhttp.setRequestHeader("Authorization", "FlespiToken Nqy02NoF1G6DJKVayifPYNcpl5JCZ1oAfKq5oCzd9vEG4qFsyK5ml7zw39WQY8g3");
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState === 4 && xmlhttp.status === 200) {
            var devices = JSON.parse(xmlhttp.responseText);
            conDev = devices.result.length;
            document.getElementById("connected_devices").innerHTML = conDev;
        }
    };
    xmlhttp.send(null);
}
window.onload = function () {
    loadConnectedDevices();
}