<footer id="site-footer" class="custom-footer">
    <div class="footer-content">
        <div class="footer-widgets">
            <?php if (is_active_sidebar('footer-1')) : ?>
                <?php dynamic_sidebar('footer-1'); ?>
            <?php endif; ?>
        </div>
        
        <div class="social-links">
            <h3><?php _e('Connect With Us', 'twentytwentyfourchild'); ?></h3>
            <ul>
                <li><a href="https://facebook.com/yourpage" target="_blank">Facebook</a></li>
                <li><a href="https://twitter.com/yourhandle" target="_blank">Twitter</a></li>
                <li><a href="https://instagram.com/yourprofile" target="_blank">Instagram</a></li>
                <li><a href="https://linkedin.com/yourcompany" target="_blank">LinkedIn</a></li>
            </ul>
        </div>
        
        <div class="site-info">
            <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.</p>
        </div>
    </div>
</footer>