{**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 *}
{extends file='page.tpl'}
    {block name='page_header_container'}
    <div class="row header-bg-grey">
        <div class="col-md-6 col-sm-12 mt-3 pt-2">
            <hr class="short-line">
            <h4 class="mb-2 mt-2">Best Quality Products</h4>
            <p class="huge-font font-weight-bold">We Print What <br> You Want!</p>
            <p>Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sapien.</p>
            <button class="btn-official mt-2">GET STARTED ></button>
        </div>
        <div class="col-md-6 col-sm-12"><img class="" src="{$urls.img_ps_url}First_photo.png"></div>
    </div>
    {/block}
    {block name='page_content_container'}
      <section id="content" class="page-home">
        {block name='page_content_top'}{/block}

        {block name='page_content'}
          {block name='hook_home'}
            {$HOOK_HOME nofilter}
          {/block}
        {/block}
      </section>
    {/block}
