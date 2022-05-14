<?php 
    $args = array(
        'taxonomy'   => "product_cat",
        // 'number'     => $number,
        // 'orderby'    => $orderby,
        'order'      => $order,
        // 'hide_empty' => $hide_empty,
        // 'include'    => $ids
    );
    $product_categories = get_terms($args);
?>

<footer class="footer">
  <div class="container">
    <div class="footer__addr">
      <a href="/" class="footer__logo">
        <img src="<?php bloginfo('template_directory'); ?>/assets/images/logos/snoepshop-logo.svg" alt="Snoepshop logo">
      </a>

      <h2>Contact</h2>
      <address>
        Vial de hopstraat 55<br>
        1122QW Alkmaar<br>
        <a class="footer__contact-c2a" href="mailto:example@gmail.com">
          <svg class="icon">
            <use href="#icon-mail" />
          </svg>
          info@donuts.nl
        </a>
        <a class="footer__contact-c2a" href="tel:5558920234">
          <svg class="icon">
            <use href="#icon-phone" />
          </svg>
          071 123 33 22</a>
      </address>
    </div>

    <ul class="footer__nav">
      <li class="nav__item">
        <h2 class="nav__title">Mijn account</h2>

        <ul class="nav__ul">
          <li>
            <a href="#">Registreren</a>
          </li>

          <li>
            <a href="#">Mijn bestellingen</a>
          </li>

          <li>
            <a href="#">Mijn adres</a>
          </li>

          <li>
            <a href="#">Mijn accountgegevens</a>
          </li>
        </ul>
      </li>

      <li class="nav__item nav__item--extra">
        <h2 class="nav__title">Categorieën</h2>

        <ul class="nav__ul nav__ul--extra">
          <?php 
            foreach( $product_categories as $category ) { 
              echo '<li class=""><a href="'.get_term_link($category).'" class="link">'.$category->name.'</a></li>';
            }
          ?>
        </ul>
      </li>

      <li class="nav__item">
        <h2 class="nav__title">Klantenservice</h2>

        <ul class="nav__ul">
          <li>
            <a href="#">Privacy Policy</a>
          </li>

          <li>
            <a href="#">Algemene voorwaarden</a>
          </li>

          <li>
            <a href="#">Sitemap</a>
          </li>
        </ul>
      </li>
    </ul>

    <div class="legal">
      <p>&copy; 2022 RVA Services. All rights reserved.</p>

      <div class="legal__links">
        <span>Developed by <a href="https://www.rva-services.nl/" target="_blanc">RVA Services</a></span>
      </div>
    </div>
  </div>
</footer>

<?php wp_footer();?>
</body>

</html>