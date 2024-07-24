<?php
function renderFooter($linkJS){
    ob_start();
?>

    <footer>

    </footer>
    <script src=<?php echo './script/'.$linkJS ?>>
    </script>
    </body>
    </html>

<?php
return ob_get_clean();
}
?>