<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Công Nhất</title>
    <script src="https://kit.fontawesome.com/ef7e2b893b.js" crossorigin="anonymous"></script>
</head>

<body>
    <nav class="navbar">
        <div class="nav-left"><img class="logo" src="images/logo2.png" alt="">
            <ul class="navlogo">
                <li><img src="images/notification.png"></li>
                <li><img src="images/inbox.png"></li>
                <li><img src="images/video.png"></li>
            </ul>
        </div>
        <div class="nav-right">
            <div class="search-box">
                <img src="images/search.png" alt="">
                <input type="text" placeholder="Search">
            </div>
            <div class="profile-image online" onclick="UserSettingToggle()">
                <img src="images/profile-pic.png" alt="">
            </div>

        </div>
        <div class="user-settings">
            <div class="profile-darkButton">
            <div class="user-profile">
                <img src="images/profile-pic.png" alt="">
                <div>
                    <p> Công Nhất</p>
                    <a href="index.php">Trang chủ</a>
                </div>
            </div>
            <div id="dark-button" onclick="darkModeON()">
                <span></span>
            </div>
            </div>
            <hr>
            <div class="user-profile">
                <img src="images/feedback.png" alt="">
                <div>
                    <p> Give Feedback</p>
                    <a href="#">Help us to improve</a>
                </div>
            </div>
            <hr>
            <div class="settings-links">
                <img src="images/setting.png" alt="" class="settings-icon">
                <a href="#">Settings & Privary <img src="images/arrow.png" alt=""></a>
            </div>

            <div class="settings-links">
                <img src="images/help.png" alt="" class="settings-icon">
                <a href="#">Help & Support <img src="images/arrow.png" alt=""></a>
            </div>

            <div class="settings-links">
                <img src="images/Display.png" alt="" class="settings-icon">
                <a href="#">Display & Accessibility <img src="images/arrow.png" alt=""></a>
            </div>

            <div class="settings-links">
                <img src="images/logout.png" alt="" class="settings-icon">
                <a href="login.html">Logout <img src="images/arrow.png" alt=""></a>
            </div>

        </div>
    </nav>

    <!-- profile-page-------------------------- -->


    <div class="profile-container">
        <img src="images/cover.png" class="coverImage" alt="">
        <div class="dashboard">
            <div class="left-dashboard">
                <img src="images/profile-pic.png" class="dashboard-img" alt="">
                <div class="left-dashboard-info">
                    <h3>Công Nhất</h3>
                    <p>120 Bạn bè</p>
                    <div class="mutual-friend-images">
                        <img src="images/member-1.png" alt="">
                        <img src="images/member-2.png" alt="">
                        <img src="images/member-3.png" alt="">
                        <img src="images/member-5.png" alt="">
                    </div>
                </div>
            </div>
            <div class="right-dashboard-info">
                <div class="right-dashboard-info-top">

                    <button type="button"><i class="fas fa-user-plus"></i> Friends</button>
                    <button type="button"><i class="far fa-envelope"></i> messages</button>
                </div>
                <div class="right-div-single-logo"> <a href="#"> <i class="fas fa-ellipsis-h"></i></a></div>
            </div>
        </div>


        <div class="container content-profile-container">
            <div class="left-sidebar profile-left-sidebar">
                <div class="left-profile-sidebar-top">
                    <div class="intro-bio">
                        <h4>intro</h4>
                        <p>Better 1% every day <i class="far fa-smile-beam"></i></p>
                        <hr>
                    </div>
                    <div class="background-details">
                        <a href="#"><i class="fas fa-briefcase"></i>
                            <p>Kỹ thuật điện tử viễn thông</p>
                        </a>
                        <a href="#"><i class="fas fa-graduation-cap"></i>
                            <p>PTIT</p>
                        </a>
                        <a href="#"><i class="fas fa-user-graduate"></i>
                            <p>THPT Tràng Định</p>
                        </a>
                        <a href="#"><i class="fas fa-home"></i>
                            <p>Hà Nội</p>
                        </a>
                        <a href="#"><i class="fas fa-map-marker-alt"></i>
                            <p>Lạng Sơn</p>
                        </a>
                    </div>
                </div>

                <div class="left-profile-sidebar-top gallery">
                    <div class="heading-link profile-heading-link">
                        <h4>Photos</h4>
                        <a href="">All Photos</a>
                    </div>

                    <div class="gallery-photos">
                        <div class="gallery-photos-rowFirst">
                            <img src="images/photo1.png" alt="">
                            <img src="images/photo2.png" alt="">
                            <img src="images/photo3.png" alt="">
                    
                            <img src="images/photo4.png" alt="">
                            <img src="images/photo5.png" alt="">
                            <img src="images/photo6.png" alt="">
                        </div>
                    </div>
                </div>

                <div class="left-profile-sidebar-top gallery">
                    <div class="heading-link profile-heading-link">
                        <h4>Friends</h4>
                        <a href="">All Friends</a>
                    </div>

                    <div class="gallery-photos">
                        <div class="gallery-photos-rowFirst">
                            <div class="first-friend">
                                <img src="images/member-1.png" alt="">
                                <p>Nathan M</p>
                            </div>
                            <div class="second-friend">
                                <img src="images/member-2.png" alt="">
                                <p>Joseph N</p>
                            </div>
                            <div class="third-friend">
                                <img src="images/member-3.png" alt="">
                                <p>Blondie K</p>
                            </div>
                            <div class="forth-friend">
                                <img src="images/member-4.png" alt="">
                                <p>Jonathon J</p>
                            </div>
                            <div class="fifth-friend">
                                <img src="images/member-5.png" alt="">
                                <p>Mark K</p>
                            </div>
                            <div class="sixth-friend">
                                <img src="images/member-6.png" alt="">
                                <p>Emilia M</p>
                            </div>
                            <div class="seventh-friend">
                                <img src="images/member-7.png" alt="">
                                <p>Max P</p>
                            </div>
                            <div class="eighth-friend">
                                <img src="images/member-8.png" alt="">
                                <p>Layla M</p>
                            </div>
                            <div class="ninth-friend">
                                <img src="images/member-9.png" alt="">
                                <p>Edward M</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- main-content------- -->

            <div class="content-area profile-content-area">
                <div class="write-post-container">
                    <div class="user-profile">
                        <img src="images/profile-pic.png" alt="">
                        <div>
                            <p> Công Nhất</p>
                            <small>Public <i class="fas fa-caret-down"></i></small>
                        </div>
                    </div>

                    <div class="post-upload-textarea">
                        <textarea name="" placeholder="Bạn đang muốn đăng gì đấy, Công Nhất?" id="" cols="30" rows="3"></textarea>
                        <div class="add-post-links">
                            <a href="#"><img src="images/live-video.png" alt="">Live Video</a>
                            <a href="#"><img src="images/photo.png" alt="">Photo/Video</a>
                            <a href="#"><img src="images/feeling.png" alt="">Feeling Activity</a>
                        </div>
                    </div>
                </div>

                <div class="status-field-container write-post-container">
                    <div class="user-profile-box">
                        <div class="user-profile">
                            <img src="images/profile-pic.png" alt="">
                            <div>
                                <p> Công Nhất</p>
                                <small>30/10/2022
                                </small>
                            </div>
                        </div>
                        <div>
                            <a href="#"><i class="fas fa-ellipsis-v"></i></a>
                        </div>
                    </div>
                    <div class="status-field">
                        <p>Love you ❤<a
                                href="#">31/12/2020</a>
                        </p>
                        <img src="images/feed-image-1.png" alt="">

                    </div>
                    <div class="post-reaction">
                        <div class="activity-icons">
                            <div><img src="images/like-blue.png" alt="">120</div>
                            <div><img src="images/comments.png" alt="">52</div>
                            <div><img src="images/share.png" alt="">35</div>
                        </div>
                        <div class="post-profile-picture">
                            <img src="images/profile-pic.png " alt=""> <i class=" fas fa-caret-down"></i>
                        </div>
                    </div>
                </div>
                <div class="status-field-container write-post-container">
                    <div class="user-profile-box">
                        <div class="user-profile">
                            <img src="images/profile-pic.png" alt="">
                            <div>
                                <p> Công Nhất</p>
                                <small>August 13 1999, 09.18 pm</small>
                            </div>
                        </div>
                        <div>
                            <a href="#"><i class="fas fa-ellipsis-v"></i></a>
                        </div>
                    </div>
                    <div class="status-field">
                        <p>825 TOEIC  <a
                                href="#"></a>
                        </p>
                        <img src="images/feed-image-2.png" alt="">

                    </div>
                    <div class="post-reaction">
                        <div class="activity-icons">
                            <div><img src="images/like-blue.png" alt="">120</div>
                            <div><img src="images/comments.png" alt="">52</div>
                            <div><img src="images/share.png" alt="">35</div>
                        </div>
                        <div class="post-profile-picture">
                            <img src="images/profile-pic.png " alt=""> <i class=" fas fa-caret-down"></i>
                        </div>
                    </div>
                </div>
                <div class="status-field-container write-post-container">
                    <div class="user-profile-box">
                        <div class="user-profile">
                            <img src="images/profile-pic.png" alt="">
                            <div>
                                <p> Công Nhất</p>
                                <small>August 13 1999, 09.18 pm</small>
                            </div>
                        </div>
                        <div>
                            <a href="#"><i class="fas fa-ellipsis-v"></i></a>
                        </div>
                    </div>
                    <div class="status-field">
                        <p>Chill Chill<a
                                href="#">#This_Post_is_faster!!!!</a>
                        </p>
                        <img src="images/feed-image-3.png" alt="">

                    </div>
                    <div class="post-reaction">
                        <div class="activity-icons">
                            <div><img src="images/like-blue.png" alt="">120</div>
                            <div><img src="images/comments.png" alt="">52</div>
                            <div><img src="images/share.png" alt="">35</div>
                        </div>
                        <div class="post-profile-picture">
                            <img src="images/profile-pic.png " alt=""> <i class=" fas fa-caret-down"></i>
                        </div>
                    </div>
                </div>
                <div class="status-field-container write-post-container">
                    <div class="user-profile-box">
                        <div class="user-profile">
                            <img src="images/profile-pic.png" alt="">
                            <div>
                                <p> Công Nhất</p>
                                <small>August 13 1999, 09.18 pm</small>
                            </div>
                        </div>
                        <div>
                            <a href="#"><i class="fas fa-ellipsis-v"></i></a>
                        </div>
                    </div>
                    <div class="status-field">
                        <p>Love you❤ <a
                                href="#"></a>
                        </p>
                        <img src="images/feed-image-4.png" alt="">

                    </div>
                    <div class="post-reaction">
                        <div class="activity-icons">
                            <div><img src="images/like-blue.png" alt="">120</div>
                            <div><img src="images/comments.png" alt="">52</div>
                            <div><img src="images/share.png" alt="">35</div>
                        </div>
                        <div class="post-profile-picture">
                            <img src="images/profile-pic.png " alt=""> <i class=" fas fa-caret-down"></i>
                        </div>
                    </div>
                </div>
                <button type="button" class="btn-LoadMore" onclick="LoadMoreToggle()">Load More</button>
            </div>
        </div>
    </div>
    <footer id="footer">
        <p>&copy; Designed by Công Nhất</p>
    </footer>

    <script src="./JS/function.js"></script>
</body>

</html>