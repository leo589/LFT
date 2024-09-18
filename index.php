<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="script.js"></script>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Document</title>
</head>
<body>
    <div class="sidebar">
        <div class="logo"></div>
        <ul class="menu">
            <li class="active">
                <a href="#" onclick="loadContent('/assents/dashboard.php'); return false;">
                    <i class="fas fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="profile">
                <a href="#" onclick="loadContent('/assents/profile.php'); return false;">
                    <i class="fas fa-user"></i>
                    <span>Create Auction</span>
                </a>
            </li>
            <li class="statistics">
                <a href="#" onclick="loadContent('/assents/statistics.php'); return false;">
                    <i class="fas fa-chart-bar"></i>
                    <span>Auction Listing</span>
                </a>
            </li>
            <li class="careers">
                <a href="#" onclick="loadContent('/assents/careers.php'); return false;">
                    <i class="fas fa-briefcase"></i>
                    <span>Auction Detail</span>
                </a>
            </li>
            <li class="faq">
                <a href="#" onclick="loadContent('/assents/faq.php'); return false;">
                    <i class="fas fa-question-circle"></i>
                    <span>Auction Progress</span>
                </a>
            </li>
            <li class="testimonials">
                <a href="#" onclick="loadContent('/assents/testimonials.php'); return false;">
                    <i class="fas fa-star"></i>
                    <span>Auction history</span>
                </a>
            </li>
            <li class="setting">
                <a href="#" onclick="loadContent('/assents/setting.php'); return false;">
                    <i class="fas fa-cog"></i>
                    <span>Setting</span>
                </a>
            </li>
            <li class="logout">
                <a href="#">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Logout</span>
                </a>
            </li>
        </ul>
    </div>
    <div class="man-content" id="content">
       <?php include './assents/dashboard.php'; ?>
    </div>
</body>
</html>

