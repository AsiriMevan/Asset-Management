<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--STYLESHEET-->
    <link rel="stylesheet" href="./css/style.css">
    <!--MATERIAL CDN-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <script  type="text/javascript" src="./javascript/cdscript.js">  </script>
    <script>
        (function () {
            setInterval(function () {
                loadConnectedDevices();
            }, 60000)
        }
        )();
    </script>
    <title>Assets Tracker</title>
</head>

<body>
    <div class="container">
        <aside>
            <div class="top">
                <div class="logo">
                    <img src="./images/logo.png" alt="">
                </div>
                <div class="close" id="close-btn">
                    <span class="material-icons-sharp">close</span>
                </div>
            </div>
            <div class="sidebar">
                <a href="#" class="active"><span class="material-icons-sharp">grid_view</span>
                    <h3>Dashboard</h3>
                </a>
                <a href="geofence.php"><span class="material-icons-sharp">share_location</span>
                    <h3>Geofence</h3>
                </a>
                <a href="#"><span class="material-icons-sharp">notifications_active</span>
                    <h3>Notification</h3>
                    <span class="message-count">12</span>
                </a>
                <a href="#"><span class="material-icons-sharp">devices_other</span>
                    <h3>Device</h3>
                </a>
                <a href="logdetails.php"><span class="material-icons-sharp">import_contacts</span>
                    <h3>Log Details</h3>
                </a>
                <a href="#"><span class="material-icons-sharp">feed</span>
                    <h3>Reports</h3>
                </a>
                <a href="#"><span class="material-icons-sharp">settings</span>
                    <h3>Settings</h3>
                </a>
                <a href="#"><span class="material-icons-sharp">help</span>
                    <h3>Help</h3>
                </a>
                <a href="user_register.php" ><span class="material-icons-sharp">account_circle</span>
                    <h3>Accounts</h3>
                </a>
                <a href="#"><span class="material-icons-sharp">logout</span>
                    <h3>Logout</h3>
                </a>
            </div>
        </aside>
        <!-- END OF ASIDE -->