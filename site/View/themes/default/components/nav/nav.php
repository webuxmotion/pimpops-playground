<?php
  function isActive($path = '') {
    $pathUrl = \Core\Helper\Common::getPathUrl();  

    return $pathUrl == $path ? 'is-active' : '';
  }
?>
<div class="nav nav_width_parent">
  <ul class="nav__ul">
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
      <a class="nav__link <?=isActive('/custom-playground');?>" href="/custom-playground">
        <span class="nav__link-border">GET CUSTOM PLAYGROUND</span>
      </a> 
    </li>
  </ul> 
  <ul class="nav__ul">
    <li class="nav__item">
      <a class="nav__link <?=isActive('/playgrounds');?>" href="/playgrounds">pg</a> 
    </li>
    <li class="nav__item">
      <a class="nav__link <?=isActive('/profile');?>" href="/profile">profile</a> 
    </li>
  </ul> 
</div>
