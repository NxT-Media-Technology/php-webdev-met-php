<?php
    include('config/app.php');

    include('snippets/layout/header.php');
    include('pages/'. $page .'.php');
    include('snippets/layout/footer.php');
?>
