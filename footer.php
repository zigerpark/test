  <footer>
    <div id="footer-logo">
      <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="とり川">
    </div>

    <div id="contact">
      <h3>会社概要</h3>
      <p>
        住所：福岡県福岡市中央区平和３−２−２４
      </p>
      <div class="btn-wrap">
        <a href="tel:0000000000" class="btn btn-primary">TEL：0000-000-000</a>
        <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-primary">メールでのお問い合わせ</a>
      </div>
    </div>
    <div id="copyright">
      Copyright &copy; 2020 <?php bloginfo( 'name' ); ?> All Rights Reserved.
    </div>
  </footer>
<?php wp_footer(); ?>
</body>
</html>