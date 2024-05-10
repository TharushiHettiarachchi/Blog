<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/icon2.png">
    <title>Codewiz - Admin Dashboard</title>
</head>

<body>
    <div class="admin-background">
        <div class="sidebar">
            <div class="logo"></div>
            <div class="sidebar-email">john@gmail.com</div>
            <div class="sidebar-title">Admin</div>
            <button class="panel-btn">Add Post</button>
            <button class="panel-btn">Manage Posts</button>
            <button class="panel-btn">Manage Readers</button>
            <button class="panel-btn">Messages</button>

        </div>
        <div class="mainbar">
            <div class="admin-dashboard-title">Dashboard</div>
            <hr style="width: 100%;" />
            <div class="popular-section">
                <div class="recent-post">
                    <div class="recent-post-title">Recent Post</div>
                    <hr style="width: 100%;" />
                    <div class="latest-post-div" onclick="openPost();" style="background-image: url('images/img5.jpg');">
                        <div class="div5">

                            <div class="pill-main-div">
                                <div class="category-pill">Astrology</div>
                            </div>
                            <div class="main-title-sm">Using Data Science To Get Black Communities Involved In Dutch Politics</div>
                            <div class="main-date-sm">November 28, 2023</div>

                        </div>
                    </div>
                </div>
                <div class="trending-post">
                    <div class="recent-post-title">Trending Post</div>
                    <hr style="width: 100%;" />
                    <div class="latest-post-div" onclick="openPost();" style="background-image: url('images/img4.jpg');">
                        <div class="div5">

                            <div class="pill-main-div">
                                <div class="category-pill">Technology</div>
                            </div>
                            <div class="main-title-sm">Teaching Africans How To Code With Smartphones, Not Computers</div>
                            <div class="main-date-sm">November 28, 2023</div>

                        </div>
                    </div>
                </div>
                <div class="active-reader">
                    <div class="recent-post-title">Most Active Reader</div>
                    <hr style="width: 100%;" />
                    <div class="reader-img" style="background-image: url(images/image3.jpg);"></div>
                    <div class="reader-name">Pasindu Madushan</div>
                    <div class="reader-email">pasindumadushan96@gmail.com</div>
                </div>

            </div>
            <div class="popular-section">
                <div class="sub-div-1-admin">
                    <div class="admin-panel-content">
                        <span class="content-panel-1">No. of Posts</span>
                        <span class="content-panel-2">10</span>
                    </div>
                </div>
                <div class="sub-div-1-admin">
                    <div class="admin-panel-content">
                        <span class="content-panel-1">No. of Readers</span>
                        <span class="content-panel-2">25</span>
                    </div>
                </div>
                <div class="sub-div-1-admin">
                    <div class="admin-panel-content">
                        <span class="content-panel-1">No. of Comments</span>
                        <span class="content-panel-2">100+</span>
                    </div>
                </div>
            </div>

        </div>
        <div class="single-footer">All &copy; copyRights Reserved | Poered by <b>CodeWiz</b></div>
    </div>

  
</body>

</html>