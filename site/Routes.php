<?php
  // Playgrounds
  $this->router->add('show-playground', '/github/pimpops/(id:any)', 'HomeController:showPlayground');
  $this->router->add('docs', '/docs/github/pimpops/(id:any)', 'HomeController:showDocs');

  $this->router->add('home', '/', 'HomeController:index');
  $this->router->add('about', '/about', 'HomeController:about');
  $this->router->add('pi-lab', '/pi-lab', 'HomeController:piLab');
  $this->router->add('sponsors', '/sponsors', 'HomeController:sponsors');
  $this->router->add('team', '/team', 'HomeController:team');
  $this->router->add('custom-playground', '/custom-playground', 'HomeController:customPlayground');
  $this->router->add('playgrounds', '/playgrounds', 'HomeController:playgrounds');
  $this->router->add('profile', '/profile', 'HomeController:profile');
  $this->router->add('contacts', '/contacts', 'HomeController:contacts');

  $this->router->add('send-contact-message', '/api/send_contact_message', 'FormController:sendContactMessage', 'POST');
?>
