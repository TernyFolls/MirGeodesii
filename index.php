<?php include('php/head.php'); ?>

<body id="body" data-spy="scroll" data-target=".header">
    <?php include('php/header.php'); ?>

        <!--========== SLIDER ==========-->
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <div class="container">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>
            </div>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img class="img-responsive" src="img/1920x1080/01.jpg" alt="Slider Image">
                    <div class="container">
                        <div class="carousel-centered">
                            <div class="margin-b-40">
                                <h1 class="carousel-title">МИР ГЕОДЕЗИИ</h1>
                                <p class="color-white">Разделы, основные задачи</p>
                            </div>
                            <a href="1.php" class="btn-theme btn-theme-sm btn-white-brd text-uppercase">ПЕРЕЙТИ</a>
                        </div>
                    </div>
                </div>
                <div class="item" id="img_02">
                    <img class="img-responsive" src="img/1920x1080/02.jpg" alt="Slider Image">
                    <div class="container">
                        <div class="carousel-centered">
                            <div class="margin-b-40">
                                <h2 class="carousel-title">ТОПОГРАФИЧЕСКАЯ СЪЕМКА</h2>
                                <p class="color-white">Незаменимый инструмент в составлении пакета проектной документации</p>
                            </div>
                            <a href="2.php" class="btn-theme btn-theme-sm btn-white-brd text-uppercase">ПЕРЕЙТИ</a>
                        </div>
                    </div>
                </div>
                <div class="item" id="img_03">
                    <img class="img-responsive" src="img/1920x1080/03.jpg" alt="Slider Image">
                    <div class="container">
                        <div class="carousel-centered">
                            <div class="margin-b-40">
                                <h2 class="carousel-title">Геодезическое сопровождение строительства</h2>
                                <p class="color-white">Контрольные исполнительные съемки</p>
                            </div>
                            <a href="3.php" class="btn-theme btn-theme-sm btn-white-brd text-uppercase">ПЕРЕЙТИ</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--========== SLIDER ==========-->

        <?php include('php/footer.php'); ?>