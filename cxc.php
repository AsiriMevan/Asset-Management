<?php include "header.php" ?>

        <main>
            <h1>Dashboard</h1>
            <div class="date">
                <input type="date">
            </div>
            <div class="insights">
                <div class="unauth">
                    <span class="material-icons-sharp">report_problem</span>
                    <div class="middle">
                        <div class="lef">
                            <h3>Unauthorized Movement</h3>
                            <h1>60</h1>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle cx='38' cy='38' r='36'></circle>
                            </svg>
                            <div class="number">
                                <p>10%</p>
                            </div>
                        </div>
                    </div>
                    <small class="text-muted">Last 30 Mintues</small>
                </div>
                <!-------End Of Unauth------->
                <div class="dev">
                    <span class="material-icons-sharp">settings_remote</span>
                    <div class="middle">
                        <div class="lef" >
                            <h3>Connected Devices</h3>
                            <h1 id="connected_devices"></h1>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle cx='38' cy='38' r='36'></circle>
                            </svg>
                            <div class="number">
                                <p>40%</p>
                            </div>
                        </div>
                    </div>
                    <small class="text-muted">Last 30 Mintues</small>
                </div>
                <!-------End Of Con Dev------->
                <div class="total">
                    <span class="material-icons-sharp">hourglass_top</span>
                    <div class="middle">
                        <div class="lef">
                            <h3>Total</h3>
                            <h1>110</h1>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle cx='38' cy='38' r='36'></circle>
                            </svg>
                            <div class="number">
                                <p>52%</p>
                            </div>
                        </div>
                    </div>
                    <small class="text-muted">Last 30 Mintues</small>
                </div>
                <!-------End Of Total------->
            </div>
            <!-------End Of INSIGHTS------->

            <div class="recent-order">
                <h2>Log Details</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Device ID</th>
                            <th>User ID</th>
                            <th>User</th>
                            <th>Date</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>ID_xxx</td>
                            <td>USRID_xxx</td>
                            <td>Saman</td>
                            <td>xx-xx-xxxx</td>
                            <td>AIT</td>
                        </tr>
                        <tr>
                            <td>ID_xxx</td>
                            <td>USRID_xxx</td>
                            <td>Saman</td>
                            <td>xx-xx-xxxx</td>
                            <td>AIT</td>
                        </tr>
                        <tr>
                            <td>ID_xxx</td>
                            <td>USRID_xxx</td>
                            <td>Saman</td>
                            <td>xx-xx-xxxx</td>
                            <td>AIT</td>
                        </tr>
                        <tr>
                            <td>ID_xxx</td>
                            <td>USRID_xxx</td>
                            <td>Saman</td>
                            <td>xx-xx-xxxx</td>
                            <td>AIT</td>
                        </tr>
                    </tbody>
                </table>
                <a href="#">Show All</a>
            </div>
        </main>
        <!--------------- END OF MAIN -------------->
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
            <!--------------- END OF TOP ---------------->
            <div class="recent-notifications">
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
            </div>
            <!--------------------- End of Recent Notifications ---------------------->
            <div class="total-analytics">
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
            </div>
        </div>

<?php include "footer.php" ?>
    