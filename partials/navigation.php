<div class="navigation">
                    <nav>
                        <ul>

                        <?php

  $pages = glob('*.php');
  $pages = array_reverse($pages);
    
    foreach($pages as $file) {

        $page = basename($file, '.php');

        if ($page == 'index') $page= 'home';
        
        if ($page_name == '$page') echo '<li><a class="active">'. ucfirst($page) .'</a></li>';
        else echo '<li><a href="'. $file .'">'. ucfirst($page) .'</a></li>';

}
            /* if ($page_name == 'home' ) echo '<li><a class="active">Domov</a></li>';
            else echo '<li><a href="index.php">Domov</a></li>';

            if ($page_name == 'contacts') echo '<li><a class="active">Kontakty</a></li>';
            else echo '<li><a href="contacts.php">Kontakty</a></li>';

            if ($page_name == 'aboutus') echo '<li><a class="active">O nás</a></li>';
            else echo '<li><a href="aboutus.php">O nás</a></li>'; */

                        ?>
                        
                        </ul>
                    </nav>
                </div>