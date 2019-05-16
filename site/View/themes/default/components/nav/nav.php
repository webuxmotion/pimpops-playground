<?php
  function isActive($path = '') {
    $pathUrl = \Core\Helper\Common::getPathUrl();  

    return $pathUrl == $path ? 'is-active' : '';
  }
?>
<div class="nav nav_width_parent">
  <ul class="nav__ul">
    <li class="nav__item">
      <a class="nav__link a-px-10i <?=isActive('/playgrounds');?>" href="/playgrounds">
        <img class="nav__link-icon" src="<?=\Core\Helper\Common::getSiteAssetsRoot()?>assets/images/pg-icon.svg">
      </a> 
    </li>
    <li class="nav__item">
      <a class="nav__link <?=isActive('/about');?>" href="/about">ABOUT</a> 
    </li>
    <li class="nav__item">
      <a class="nav__link <?=isActive('/pi-lab');?>" href="/pi-lab">PI-LAB</a> 
    </li>
    <li class="nav__item">
      <a class="nav__link <?=isActive('/sponsors');?>" href="/sponsors">SPONSORS</a> 
    </li>
    <li class="nav__item">
      <a class="nav__link <?=isActive('/team');?>" href="/team">TEAM</a> 
    </li>
    <li class="nav__item">
      <a class="nav__link <?=isActive('/custom-playground');?>" href="/custom-playground">
        <span class="nav__link-border">GET CUSTOM PLAYGROUND</span>
      </a> 
    </li>
  </ul> 
  <ul class="nav__ul">
    <li class="nav__item">
      <a class="nav__link a-px-10i <?=isActive('/profile');?>" href="/profile">
        <img class="nav__link-icon" src="<?=\Core\Helper\Common::getSiteAssetsRoot()?>assets/images/profile-icon.svg">
      </a> 
    </li>
  </ul> 
</div>
