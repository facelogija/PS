<?php
/* Smarty version 3.1.39, created on 2021-09-19 13:29:32
  from 'module:psimagesliderviewstemplat' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6147110c5a7708_45978132',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c2108a17c7103b6e203f4f0621d4645b56b0114' => 
    array (
      0 => 'module:psimagesliderviewstemplat',
      1 => 1631461103,
      2 => 'module',
    ),
  ),
  'cache_lifetime' => 31536000,
),true)) {
function content_6147110c5a7708_45978132 (Smarty_Internal_Template $_smarty_tpl) {
?>
  <div id="carousel" data-ride="carousel" class="carousel slide" data-interval="5000" data-wrap="true" data-pause="hover" data-touch="true">
    <ol class="carousel-indicators">
            <li data-target="#carousel" data-slide-to="0" class="active"></li>
            <li data-target="#carousel" data-slide-to="1"></li>
            <li data-target="#carousel" data-slide-to="2"></li>
          </ol>
    <ul class="carousel-inner" role="listbox">
              <li class="carousel-item active" role="option" aria-hidden="false">
          <a href="http://www.prestashop.com/?utm_source=back-office&amp;utm_medium=v17_homeslider&amp;utm_campaign=back-office-EN&amp;utm_content=download">
            <figure>
              <img src="http://localhost/PS/modules/ps_imageslider/images/sample-1.jpg" alt="sample-1">
                              <figcaption class="caption">
                  <h2 class="display-1 text-uppercase">Sample 1</h2>
                  <div class="caption-description"><h3>EXCEPTEUR OCCAECAT</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin tristique in tortor et dignissim. Quisque non tempor leo. Maecenas egestas sem elit</p></div>
                </figcaption>
                          </figure>
          </a>
        </li>
              <li class="carousel-item " role="option" aria-hidden="true">
          <a href="http://www.prestashop.com/?utm_source=back-office&amp;utm_medium=v17_homeslider&amp;utm_campaign=back-office-EN&amp;utm_content=download">
            <figure>
              <img src="http://localhost/PS/modules/ps_imageslider/images/sample-2.jpg" alt="sample-2">
                              <figcaption class="caption">
                  <h2 class="display-1 text-uppercase">Sample 2</h2>
                  <div class="caption-description"><h3>EXCEPTEUR OCCAECAT</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin tristique in tortor et dignissim. Quisque non tempor leo. Maecenas egestas sem elit</p></div>
                </figcaption>
                          </figure>
          </a>
        </li>
              <li class="carousel-item " role="option" aria-hidden="true">
          <a href="http://www.prestashop.com/?utm_source=back-office&amp;utm_medium=v17_homeslider&amp;utm_campaign=back-office-EN&amp;utm_content=download">
            <figure>
              <img src="http://localhost/PS/modules/ps_imageslider/images/sample-3.jpg" alt="sample-3">
                              <figcaption class="caption">
                  <h2 class="display-1 text-uppercase">Sample 3</h2>
                  <div class="caption-description"><h3>EXCEPTEUR OCCAECAT</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin tristique in tortor et dignissim. Quisque non tempor leo. Maecenas egestas sem elit</p></div>
                </figcaption>
                          </figure>
          </a>
        </li>
          </ul>
    <div class="direction" aria-label="Karuselės mygtukai">
      <a class="left carousel-control" href="#carousel" role="button" data-slide="prev" aria-label="Ankstesnis">
        <span class="icon-prev hidden-xs" aria-hidden="true">
          <i class="material-icons">&#xE5CB;</i>
        </span>
      </a>
      <a class="right carousel-control" href="#carousel" role="button" data-slide="next" aria-label="Tęsti">
        <span class="icon-next" aria-hidden="true">
          <i class="material-icons">&#xE5CC;</i>
        </span>
      </a>
    </div>
  </div>
<?php }
}
