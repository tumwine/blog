<header>
        <a class="logo" href="<?php echo BASE_URL . "/index.php"; ?>">
        <div class="logo">
            <h1 class="logo-text"><span>Awakenning</span>&nbsp;Souls</h1>
        </div>
        </a>
        <i class="fa fa-bars menu-toggle"></i>
        <ul class="nav">
             
             <?php if(isset($_SESSION['id'])): ?>

            <li>
                <a href="#">
                <i class="fa fa-user"></i>
                <?php echo $_SESSION['username']; ?>
                <i class="fa fa-chevron-down"></i>
                </a>    
                <ul>
                   <li><a href="<?php echo(BASE_URL . "/logout.php") ?>" class="logout">Logout</a></li>
                </ul>
            </li>

               <?php endif; ?>
        </ul>

    </header>
