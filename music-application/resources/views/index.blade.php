<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/background.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/run-bar.css">
    <link rel="stylesheet" href="../css/body.css">
</head>
<body>
    <div class="header">
        <div class="header-left">
            <div class="menu-icon" >
                <span class="material-icons" style="background-color: transparent;" id="menu-icon">menu</span>
            </div>
            <img class="logo" src="../Assets/Image/01_MainLogo.png" alt="Logo">
        </div>
        <div class="header-center">
            <div class="form-search">
                <form action="" method="post" id="form-search">
                    <input type="text" placeholder="Tìm kiếm bài hát, nghệ sĩ" name="input-search">
                    <button type="submit" name="submid-search"><span class="material-icons search-icon" style="background: none;">search</span></button>
                </form>
            </div>
        </div>
        <div class="header-right">
            <div class="user-authentication ">
                <a href="" id="user-sign-in-btn">Đăng nhập</a>
                <a href="" id="user-sign-up-btn">Đăng ký</a>
            </div>
            <div class="user-signed-in hidden">
                <div class="profile-picture" id="button-profit">
                    <img src="../Assets/Image/02_Cheems.png" alt="Profile Picture">
                </div>
                <div class="dropdown-menu-user hidden" id="dropdown-menu-user">
                    <ul>
                        <li><a href="">Tài khoản</a></li>
                        <li>
                            <form action="" method="post">
                                <button type="submit" name="logout" id="Logout">Đăng xuất</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="catergory" id="catergory">
        <div class="catergory-main"  >
            <div class="home" id="home-catergory">
                <span class="material-icons">home</span>
                <span class="hidden-span" >Trang chủ</span>
            </div>
            <div class="library" id="home-library">
                <span class="material-icons">library_music</span>
                <span class="hidden-span">Thư viện</span>
            </div>
        </div>
        <div class="playlist-user">
            <div id="btn-create-playlist" style="margin-top: 20px;">
                <span class="material-icons">add</span>
                Danh sách mới
            </div>
            <ul class="playlist-list">
                <li><span class="material-icons">queue_music</span>Like</li>
            </ul>
        </div>
    </div>
    <div class="select-playlist hidden">
        <div class="cover-select">
            <h1 class="transparent">Lưu vào danh sách phát</h1>
            <div class="all-playlist transparent" style="overflow-y: scroll;">
                <ul class="transparent">
                    <li class="transparent">
                        <span class="material-icons transparent">playlist_add</span>
                        Like
                    </li>
                </ul>
            </div>
            <div id="btn-create-playlist-0" class="btn-create-playlist-in-select transparent" style="margin-top: 20px;">
                <span id="btn-create-playlist-3">Hủy</span>
                <span style="display: flex; background-color: white;padding: 10px 20px; border-radius: 25px; color: black; cursor: pointer;" class="transparent" id="btn-create-playlist-4">
                    <span class="material-icons transparent" style="color: black;">add</span>
                    Danh sách mới
                </span>
            </div>
        </div>
    </div>
    <div class="home-center hidden">
        <div class="suggestion">
            <ul>
                <li>Vui tươi</li>
                <li>Vui tươi</li>
                <li>Vui tươi</li>
            </ul>
        </div>
        <div class="album">
            <h2 class="title-album">Album</h2>
            <div class="cover-album">
                <ul>
                    <li class="li-cover-each-album">
                        <div class="cover-each-album">
                            <div class="cover-album-image">
                                <img src="https://lh3.googleusercontent.com/SyTstMuArZ0Fsjcc203GDm_XMQIAkPtdPIKCXuJqnFqt8qRuWMzTMa7MKdA-uJlwOc94UsyG9eL9BFw=w544-h544-l90-rj">
                            </div>
                            <div class="cover-text-album">
                                <h2 class="title-album-cover">Wherever You Are</h2>
                                <span class="title-artist-sub">Alan Walker</span>
                            </div>
                            <div class="play-each-album">
                                <span class="material-icons">play_arrow</span>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="continue">
            <h2 class="title-album">Tiếp tục nghe</h2>
            <div class="cover-album">
                <ul>
                    <li class="li-cover-each-album">
                        <div class="cover-each-album">
                            <div class="cover-album-image">
                                <img src="https://lh3.googleusercontent.com/SyTstMuArZ0Fsjcc203GDm_XMQIAkPtdPIKCXuJqnFqt8qRuWMzTMa7MKdA-uJlwOc94UsyG9eL9BFw=w544-h544-l90-rj">
                            </div>
                            <div class="cover-text-album">
                                <h2 class="title-album-cover">Wherever You Are</h2>
                                <span class="title-artist-sub">Alan Walker</span>
                            </div>
                            <div class="play-each-album">
                                <span class="material-icons">play_arrow</span>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="artist">
            <h2 class="title-album">Nghệ sĩ</h2>
            <div class="cover-album">
                <ul>
                    <li class="li-cover-each-album">
                        <div class="cover-each-album">
                            <div class="cover-album-image">
                                <img src="https://lh3.googleusercontent.com/SyTstMuArZ0Fsjcc203GDm_XMQIAkPtdPIKCXuJqnFqt8qRuWMzTMa7MKdA-uJlwOc94UsyG9eL9BFw=w544-h544-l90-rj">
                            </div>
                            <div class="cover-text-album">
                                <h2 class="title-album-cover">Wherever You Are</h2>
                                <span class="title-artist-sub">Alan Walker</span>
                            </div>
                            <div class="play-each-album">
                                <span class="material-icons">play_arrow</span>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="listen-again">
            <h2 class="title-album">Bữa tiệc âm nhạc</h2>
            <div class="cover-album">
                <ul>
                    <li class="li-cover-each-album">
                        <div class="cover-each-album">
                            <div class="cover-album-image">
                                <img src="https://lh3.googleusercontent.com/SyTstMuArZ0Fsjcc203GDm_XMQIAkPtdPIKCXuJqnFqt8qRuWMzTMa7MKdA-uJlwOc94UsyG9eL9BFw=w544-h544-l90-rj">
                            </div>
                            <div class="cover-text-album">
                                <h2 class="title-album-cover">Wherever You Are</h2>
                                <span class="title-artist-sub">Alan Walker</span>
                            </div>
                            <div class="play-each-album">
                                <span class="material-icons">play_arrow</span>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="home-listen">
        <div class="driver transparent">
            <div class="cover-driver">
                <img id="rotation" src="../Assets/Image/00_driver.png" alt="">
                <div class="inside-driver"> 
                    <img src="../Assets/Image/05.jpg" alt="">
                </div>
                <div class="point-in-driver"></div>
            </div>
        </div>
    </div>
    <div class="track-in-playlist">
        <h1 style="margin-bottom: 20px;" class="transparent">Danh sách nhạc</h1>
        <div class="list-tracks transparent">
            <ul class="transparent">
                <li>
                    <div class="cover-track transparent">
                        <div class="cover-img-track transparent">
                            <img src="../Assets/Image/02_Cheems.png" alt="">
                        </div>
                        <div class="title-track transparent">
                            <span id="title-track" class="transparent">Say beby</span>
                            <span id="name-artist" class="opacity-50per transparent">Hoàn</span>
                        </div>
                        <div class="duration transparent">
                            <span id="duration-track-list" class="transparent">
                                0:00
                            </span>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="liked hidden">
        <div class="left-cover-liked">
            <div class="cover-image-liked">
                <img src="../Assets/Image/06.png" style="width: 300px;">
            </div>
            <div class="cover-title-liked">
                <h1 style="width: 100%;">Nhạc đã thích</h1>
                <span style="width: 100%;">25 bài nhạc</span>
                <span style="width: 100%;">Nhạc mà bạn nhất nút thích sẽ xuất hiện ở đây</span>
            </div>
        </div>
        <div class="right-cover-liked">
            <ul class="transparent">
                <li>
                    <div class="cover-track transparent">
                        <div class="cover-img-track transparent">
                            <img src="../Assets/Image/02_Cheems.png" alt="">
                        </div>
                        <div class="title-track transparent">
                            <span id="title-track" class="transparent">Say beby</span>
                            <span id="name-artist" class="opacity-50per transparent">Hoàn</span>
                        </div>
                        <div class="duration transparent">
                            <span id="duration-track-list" class="transparent">
                                0:00
                            </span>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="form-create-playlist hidden">
        <div class="cover">
            <h1 class="transparent">Tạo danh sách phát mới</h1>
            <form action="" method="post" class="transparent">
                <input type="text" name="name-playlist" placeholder="Nhập tên playlist của bạn">
                <span id="btn-create-playlist-2">Hủy</span>
                <button type="submit" name="btn-create-playlist">Tạo</button>
            </form>
        </div>
    </div>
    <div class="run-bar">
        <div class="range-progress">
            <input type="range" min="0" max="100" value="0" id="progress-bar">
        </div>
        <audio src="../Assets/Music/15.mp3" id="play-audio"></audio>
        <div class="controls">
            <span class="material-icons opacity-50per" id="shuffle">shuffle</span>
            <span class="material-icons">skip_previous</span>
            <span id="play-pause" class="material-icons">play_arrow</span>
            <span class="material-icons">skip_next</span>
            <span class="material-icons opacity-50per" id="loop">repeat</span>
            <div class="volume" id="btn-volume">
                <span class="material-icons">volume_up</span>
            </div>
            <div class="volume-slider-container hidden">
                <input type="range" id="volume-slider" orient="vertical" min="0" max="100" value="100">
            </div>
            <div class="time-info">
                <span id="current-time" style="margin-right: 0px;">0:00</span>
                <span> / </span>
                <span id="duration" style="margin-left: 0px;">0:00</span>
            </div>
            <div class="track-info">
                <span>Dragonfly</span>
                <span>Rikard From</span>
            </div>
            <span class="material-icons" id="playlist_add">playlist_add</span>
            <span class="material-icons" id="like">favorite_border</span>
            <span class="material-icons" id="download-music">get_app</span>
            <span class="material-icons" style="font-size: 30px;" id="rotate-icon">arrow_drop_down</span>
        </div>
    </div>
    <script src="../js/header.js"></script>
    <script src="../js/run-bar.js"></script>
    <script src="../js/body.js"></script>
</body>
</html>