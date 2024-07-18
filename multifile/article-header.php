<?php
    if(isset($title)) {
        echo '<h1>' . htmlspecialchars($title, ENT_QUOTES, 'UTF-8') . '</h1>';
    }
    if(isset($author)) {
        echo '<p> Written by ' . htmlspecialchars($author, ENT_QUOTES, 'UTF-8') . '</p>';
    }
    if(isset($wordCount)) {
        echo '<p>' . htmlspecialchars($wordCount, ENT_QUOTES, 'UTF-8') . ' words</p>';
    }
?>