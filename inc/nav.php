  <img src="img/my_logo.png" alt="logo of JR" class="page-header__item">
<nav class="main-navigation page-header__item">
    <ul role="menubar" class="navigation-list">
    <?php
        switch (basename($_SERVER['PHP_SELF'], '.php')) {
            case 'references':
                echo '<li role="presentation">
                        <a href="index.php" role="menuitem" class="navigation-list__item">Home</a>
                    </li>
                    <li role="presentation">
                        <a href="references.php" role="menuitem" class="navigation-list__item navigation-list__item--active">References</a>
                    </li>
                    <li role="presentation">
                        <a href="about.php" role="menuitem" class="navigation-list__item">About</a>
                    </li>
                    <li role="presentation">
                        <a href="work.php" role="menuitem" class="navigation-list__item">Work</a>
                    </li>
                    <li role="presentation">
                    <a href="contact.php" role="menuitem" class="navigation-list__item">Contact</a>
                    </li>';
            break;
            case 'index':
                echo '<li role="presentation">
                        <a href="index.php" role="menuitem" class="navigation-list__item navigation-list__item--active">Home</a>
                    </li>
                    <li role="presentation">
                        <a href="references.php" role="menuitem" class="navigation-list__item">References</a>
                    </li>
                    <li role="presentation">
                        <a href="about.php" role="menuitem" class="navigation-list__item">About</a>
                    </li>
                    <li role="presentation">
                        <a href="work.php" role="menuitem" class="navigation-list__item">Work</a>
                    </li>
                    <li role="presentation">
                    <a href="contact.php" role="menuitem" class="navigation-list__item">Contact</a>
                    </li>';
            break;
            case 'about':
                echo '<li role="presentation">
                        <a href="index.php" role="menuitem" class="navigation-list__item">Home</a>
                    </li>
                    <li role="presentation">
                        <a href="references.php" role="menuitem" class="navigation-list__item">References</a>
                    </li>
                    <li role="presentation">
                        <a href="about.php" role="menuitem" class="navigation-list__item navigation-list__item--active">About</a>
                    </li>
                    <li role="presentation">
                        <a href="work.php" role="menuitem" class="navigation-list__item">Work</a>
                    </li>
                    <li role="presentation">
                    <a href="contact.php" role="menuitem" class="navigation-list__item">Contact</a>
                    </li>';
            break;
            case 'work':
                echo '<li role="presentation">
                        <a href="index.php" role="menuitem" class="navigation-list__item">Home</a>
                    </li>
                    <li role="presentation">
                        <a href="references.php" role="menuitem" class="navigation-list__item">References</a>
                    </li>
                    <li role="presentation">
                        <a href="about.php" role="menuitem" class="navigation-list__item">About</a>
                    </li>
                    <li role="presentation">
                        <a href="work.php" role="menuitem" class="navigation-list__item navigation-list__item--active">Work</a>
                    </li>
                    <li role="presentation">
                    <a href="contact.php" role="menuitem" class="navigation-list__item">Contact</a>
                    </li>';
            break;
            case 'contact':
                echo '<li role="presentation">
                        <a href="index.php" role="menuitem" class="navigation-list__item">Home</a>
                    </li>
                    <li role="presentation">
                        <a href="references.php" role="menuitem" class="navigation-list__item">References</a>
                    </li>
                    <li role="presentation">
                        <a href="about.php" role="menuitem" class="navigation-list__item">About</a>
                    </li>
                    <li role="presentation">
                        <a href="work.php" role="menuitem" class="navigation-list__item">Work</a>
                    </li>
                    <li role="presentation">
                    <a href="contact.php" role="menuitem" class="navigation-list__item navigation-list__item--active">Contact</a>
                    </li>';
            break;
            default:
                echo '<li role="presentation">
                        <a href="index.php" role="menuitem" class="navigation-list__item">Home</a>
                    </li>
                    <li role="presentation">
                        <a href="references.php" role="menuitem" class="navigation-list__item">References</a>
                    </li>
                    <li role="presentation">
                        <a href="about.php" role="menuitem" class="navigation-list__item">About</a>
                    </li>
                    <li role="presentation">
                        <a href="work.php" role="menuitem" class="navigation-list__item">Work</a>
                    </li>
                    <li role="presentation">
                    <a href="contact.php" role="menuitem" class="navigation-list__item">Contact</a>
                    </li>';
            break;
        }
    ?>     
    </ul>
</nav>