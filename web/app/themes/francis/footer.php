<footer class="<?php if (is_singular()) {echo "footer-single-page"; }?>">
    <?php get_template_part( 'template-parts/footer/footer', 'widgets' ); ?>
</footer>
<?php wp_footer(); ?>
</body>
</html>
