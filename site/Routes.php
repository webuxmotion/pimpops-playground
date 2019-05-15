<?php
  $this->router->add('home', '/', 'HomeController:index');
  $this->router->add('docs', '/github/pimpops/html5-starter/docs', 'HomeController:docs');
  $this->router->add('pimpops/html5-starter', '/github/pimpops/html5-starter', 'HomeController:pgHtml5Starter');
  $this->router->add('about', '/about', 'HomeController:about');
  $this->router->add('pi-lab', '/pi-lab', 'HomeController:piLab');
  $this->router->add('sponsors', '/sponsors', 'HomeController:sponsors');
  $this->router->add('team', '/team', 'HomeController:team');
  $this->router->add('custom-playground', '/custom-playground', 'HomeController:customPlayground');
  $this->router->add('playgrounds', '/playgrounds', 'HomeController:playgrounds');
  $this->router->add('profile', '/profile', 'HomeController:profile');
?>
