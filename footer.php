    </main>

    <footer>
        <?php
        if (is_active_sidebar('footer')) {
            dynamic_sidebar('footer');
        } ?>

    </footer>

    <?php wp_footer() ?>
    </body>

    </html>