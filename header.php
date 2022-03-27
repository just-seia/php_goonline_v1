<header class="header">

    <!-- Header Content -->
    <div class="header_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="header_content d-flex flex-row align-items-center justify-content-start">
                        <div class="logo_container">
                            <a href="index.php">
                                <div class="logo_text">E<span>L</span></div>
                            </a>
                        </div>
                        <nav class="main_nav_contaner ml-auto">
                            <ul class="main_nav">
                                <li><a href="index.php">Главный</a></li>
                                <li><a href="about.php">О нас</a></li>
                                <li><a href="services.php">Услуги</a></li>
                                <li><a href="contact.php">Контакты</a></li>
                                
                                <?php
                                if(!isset($_SESSION['user'])) {
                                ?>
                                <li class="active"><a href="login.php">Войти</a></li>
                                <li class="active"><a href="register.php">Создать аккаунт</a></li>
                                <?php
                                } else {
                                ?>
                                <li><a href="profile.php">Профиль</a></li>
                                <?php
                                }
                                ?>
                            </ul>

                            <!-- Hamburger -->
                            <div class="hamburger menu_mm">
                                <i class="fa fa-bars menu_mm" aria-hidden="true"></i>
                            </div>

                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

</header>

<!-- Menu -->
<div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
    <div class="menu_close_container">
        <div class="menu_close">
            <div></div>
            <div></div>
        </div>
    </div>
    <nav class="menu_nav">
        <ul class="menu_mm">
            <li class="menu_mm"><a href="index.php">Главный</a></li>
            <li class="menu_mm"><a href="about.php">О нас</a></li>
            <li class="menu_mm"><a href="services.php">Услуги</a></li>
            <li class="menu_mm"><a href="contact.php">Контакты</a></li>

            <?php
            if(!isset($_SESSION['user'])) {
            ?>
            <li class="menu_mm"><a href="login.php" style="color: #14bdeLogine;">Войти</a></li>
            <li class="menu_mm"><a href="register.php" style="color: #14bdee;">Создать аккаунт</a></li>
            <?php
            } else {
            ?>
            <li class="menu_mm"><a href="profile.php">Профиль</a></li>
            <?php
            }
            ?>

            
        </ul>
    </nav>
</div>