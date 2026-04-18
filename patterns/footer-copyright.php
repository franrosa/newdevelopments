<?php
    /**
     * Title: Footer copyright
     * Slug: newdevelopments/footer-copyright
     */
?>
<!-- wp:paragraph -->
    <p><?php
        printf(
            /* translators: %s current year */
            esc_html__( 'Copyright %s', 'newdevelopments' ),
            esc_html( gmdate( 'Y' ) )
        );
    ?></p>
<!-- /wp:paragraph -->
