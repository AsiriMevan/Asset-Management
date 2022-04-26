<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--STYLESHEET-->
    <link rel="stylesheet" href="./css/ldstyle.css">
    <!--MATERIAL CDN-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <title>Assets Tracker</title>
    <script  type="text/javascript" src="./javascript/script.js">  </script>
    <script>
        (function () {
            setInterval(function () {
                loadData();
            }, 60000)
        }
        )();
    </script>
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
                <a href="cxc.php"><span class="material-icons-sharp">grid_view</span>
                    <h3>Dashboard</h3>
                </a>
                <a href="geofence.php" ><span class="material-icons-sharp">share_location</span>
                    <h3>Geofence</h3>
                </a>
                <a href="#"><span class="material-icons-sharp">notifications_active</span>
                    <h3>Notification</h3>
                    <span class="message-count">12</span>
                </a>
                <a href="#"><span class="material-icons-sharp">devices_other</span>
                    <h3>Device</h3>
                </a>
                <a href="logdetails.php" class="active"><span class="material-icons-sharp">import_contacts</span>
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
            <div class="right">
                <div class="top">
                    <button id="menu-btn">
                        <span class="material-icons-sharp">menu</span>
                    </button>
                    <div class="theme-toggler">
                        <span class="material-icons-sharp active">light_mode</span>
                        <span class="material-icons-sharp">dark_mode</span>
                    </div>
                    <div class="profile">
                        <div class="info">
                            <p>Hey, <b>Mevan</b></p>
                            <small class="text-muted">Admin</small>
                        </div>
                        <div class="profile-photo">
                            <img src="./images/Profile-1.png">
                        </div>
                    </div>
                </div>
                <h2>Log Details</h2>
                <div class="logdetails" id="personinfo">
                    
                </div>
                <!--------------- END OF TOP ---------------->
                <!-- <div class="recent-notifications">
                <h2>Notifications</h2>
                <div class="notifications">
                    <div class="notification">
                        <div class="profile-photo">
                            <img src="./images/error.png">
                        </div>
                        <div class="message">
                            <p><b>Unauthorized</b> movement detected: The chiller with ID XXXX has moved out of the
                                authorized zone</p>
                            <small class="text-muted">2 Mintues Ago</small>
                        </div>
                    </div>
                    <div class="notification">
                        <div class="profile-photo">
                            <img src="./images/error.png">
                        </div>
                        <div class="message">
                            <p><b>The chiller machine </b>ID xxxx Has moved into the authorized zone.</p>
                            <small class="text-muted">2 Mintues Ago</small>
                        </div>
                    </div>
                    <div class="notification">
                        <div class="profile-photo">
                            <img src="./images/error.png">
                        </div>
                        <div class="message">
                            <p><b>Unauthorized</b> movement detected: The usage of chiller machine ID-XXX is near to
                                five hours.</p>
                            <small class="text-muted">2 Mintues Ago</small>
                        </div>
                    </div>
                </div>
            </div> -->
                <!--------------------- End of Recent Notifications ---------------------->
                <!-- <div class="total-analytics">
                <h2>Total Analytics</h2>
                <div class="item online">
                    <div class="icon">
                        <span class="material-icons-sharp">auto_graph</span>
                    </div>
                    <div class="right">
                        <div class="info">
                            <h3>Total Hours</h3>
                            <small class="text-muted">last 30 Mintues</small>
                        </div>
                        <h5 class="success">+39%</h5>
                        <h3>852</h3>
                    </div>
                </div>
                <div class="item offline">
                    <div class="icon">
                        <span class="material-icons-sharp">auto_graph</span>
                    </div>
                    <div class="right">
                        <div class="info">
                            <h3>Total Hours</h3>
                            <small class="text-muted">last 30 Mintues</small>
                        </div>
                        <h5 class="danger">+39%</h5>
                        <h3>852</h3>
                    </div>
                </div>
                <div class="item customer">
                    <div class="icon">
                        <span class="material-icons-sharp">auto_graph</span>
                    </div>
                    <div class="right">
                        <div class="info">
                            <h3>Total Hours</h3>
                            <small class="text-muted">last 30 Mintues</small>
                        </div>
                        <h5 class="warning">+39%</h5>
                        <h3>852</h3>
                    </div>
                </div>
                <div class="item add-product">
                    <div>
                        <span class="material-icons-sharp">add</span>
                        <h3>Add Something</h3>
                    </div>
                </div>
            </div> -->
            </div>
    </div>
    <script src="./javascript/index.js"></script>
</body>

</html>