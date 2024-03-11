<?php
    session_start();
    if(!isset($_SESSION["logined_h"])){
        ?> 
            <p>Bạn chưa đăng nhập</p>
            <a href="login.php">Đến trang đăng nhập</a>
        <?php
        die();
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title><?=$_SESSION["user"]?></title>
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
                    <p> <?=$_SESSION["user"]?></p>
                    <a href="profile.php">see your profile</a>
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
                <a href="HandleLogout.php">Logout<img src="images/arrow.png" alt=""></a>
            </div>

        </div>
    </nav>

    <!-- content-area------------ -->

    <div class="container">
        <div class="left-sidebar">
            <div class="important-links">
                <a href="#"><img src="images/news.png" alt="">Tin Tức</a>
                <a href="#"><img src="images/friends.png" alt="">Bạn bè</a>
                <a href="#"><img src="images/group.png" alt="">Nhóm</a>
                <a href="#"><img src="images/marketplace.png" alt="">Chợ</a>
                <a href="#"><img src="images/watch.png" alt="">Videos</a>
                <a href="#">Xem thêm</a>
            </div>

            <div class="shortcut-links">
                <p>Bài viết của bạn</p>
                <a href="#"> <img src="images/shortcut-1.png" alt="">Thiết kế web</a>
                <a href="#"> <img src="images/shortcut-2.png" alt="">Khóa học thiết kế</a>
                <a href="#"> <img src="images/shortcut-3.png" alt="">Tài liệu tham khảo</a>
                <a href="#"> <img src="images/shortcut-4.png" alt="">Chuyên gia</a>
            </div>
        </div>

        <!-- main-content------- -->

        <div class="content-area">
            <div class="story-gallery">
                <div class="story story1">
                    <img src="images/upload.png" alt="">
                    <p>Post Story</p>
                </div>
                <div class="story story2">
                    <img src="images/member-1.png" alt="">
                    <p>Phạm 
                        Việt
                         Hưng</p>
                </div>
                <div class="story story3">
                    <img src="images/member-2.png" alt="">
                    <p>Nguyễn Đức Mạnh</p>
                </div>
                <div class="story story4">
                    <img src="images/member-3.png" alt="">
                    <p>Minh Khôi</p>
                </div>
                <div class="story story5">
                    <img src="images/member-4.png" alt="">
                    <p>Quốc Hưng</p>
                </div>
            </div>

            <div class="write-post-container">
                <div class="user-profile">
                    <img src="images/profile-pic.png" alt="">
                    <div>
                        <p><?=$_SESSION["user"]?></p>
                        <small>Public <i class="fas fa-caret-down"></i></small>
                    </div>
                </div>

                <div class="post-upload-textarea">
                    <textarea name="" placeholder="What's on your mind, Alex?" id="" cols="30" rows="3"></textarea>
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
                            <p> <?=$_SESSION["user"]?></p>
                            <small>30/10/2022</small>
                        </div>
                    </div>
                    <div>
                        <a href="#"><i class="fas fa-ellipsis-v"></i></a>
                    </div>
                </div>
                <div class="status-field">
                    <p>Yêu Miu Miu</a> </p>
                    <img src="images/feed-image-1.png" alt="">

                </div>
                <div class="post-reaction">
                    <div class="activity-icons">
                        <div><img src="images/like-blue.png" alt="">1120</div>
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
                            <p> <?=$_SESSION["user"]?></p>
                            <small>10/12/2002</small>
                        </div>
                    </div>
                    <div>
                        <a href="#"><i class="fas fa-ellipsis-v"></i></a>
                    </div>
                </div>
                <div class="status-field">
                    <p>Thanks my parents and lover for trusting and helping me to achieve my goals.
                        I can do it☺️ I believe you can do it too🥰
                        
                        800 rồi đến lúc thay ảnh bìa để các bác hàng xóm trước đây hay xỉa xói thấy kết quả🤫🤫
                        </a> </p>
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
                            <p> <?=$_SESSION["user"]?></p>
                            <small>26/12/2002</small>
                        </div>
                    </div>
                    <div>
                        <a href="#"><i class="fas fa-ellipsis-v"></i></a>
                    </div>
                </div>
                <div class="status-field">
                    <p>
                        Khi bạn vừa đi thi MISS GRAND VIỆT NAM về thì bị bắt đi thi IELTS kiểu😺😇</a> </p>
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
                            <p> <?=$_SESSION["user"]?></p>
                            <small>1/11/2002</small>
                        </div>
                    </div>
                    <div>
                        <a href="#"><i class="fas fa-ellipsis-v"></i></a>
                    </div>
                </div>
                <div class="status-field">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis dolores praesentium dicta
                        laborum nihil accusantium odit laboriosam, sed sit autem! <a
                            href="#">#This_Post_is_perfect!!!!</a> </p>
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
            <button type="button" class="btn-LoadMore" onclick="LoadMoreToggle()">Tải thêm</button>
        </div>

        <!-- sidebar------------ -->
        <div class="right-sidebar">
            <div class="heading-link">
                <h4>Sự kiện</h4>
                <a href="">xem tất cả</a>
            </div>

            <div class="events">
                <div class="left-event">
                    <h4>13</h4>
                    <span>tháng 8</span>
                </div>
                <div class="right-event">
                    <h4>Social Media</h4>
                    <p> <i class="fas fa-map-marker-alt"></i> PTIT </p>
                    <a href="#">Xem thêm thông tin</a>
                </div>
            </div>
            <div class="events">
                <div class="left-event">
                    <h4>18</h4>
                    <span>Tháng 1</span>
                </div>
                <div class="right-event">
                    <h4>Marketing</h4>
                    <p><i class="fas fa-map-marker-alt"></i> Nhà <?=$_SESSION["user"]?></p>
                    <a href="#">Xem thêm thông tin</a>
                </div>
            </div>

            <div class="heading-link">
                <h4>Quảng Cáo</h4>
                <a href="">Đóng</a>
            </div>
            <div class="advertisement">
                <img src="images/advertisement.png" class="advertisement-image" alt="">
            </div>

            <div class="heading-link">
                <h4>Conversation</h4>
                <a href="/php-chat-app-main/home.php">Hide Chat</a>
            </div>

            <div class="online-list">
                <div class="online">
                    <img src="images/member-1.png" alt="">
                </div>
                <p>Phạm Việt Hưng</p>
            </div>

            <div class="online-list">
                <div class="online">
                    <img src="images/member-2.png" alt="">
                </div>
                <p>Nguyễn Đức Mạnh</p>
            </div>
            <div class="online-list">
                <div class="online">
                    <img src="images/member-3.png" alt="">
                </div>
                <p>Minh Khôi</p>
            </div>
        </div>
    </div>
    <footer id="footer">
        <p>&copy; Copyright 2021 - Ryderbook All Rights Reserved</p>
    </footer>

    <script src="./JS/function.js"></script>
</body>
</html>