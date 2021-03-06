<script>
dataServiceFiles = {
  'index-php': {
    'name': 'index.php'
  },
  'bootstrap-php': {
    'name': 'bootstrap.php'
  },
  'composer-json': {
    'name': 'composer.json'
  },
  'autoload-php': {
    'name': 'autoload.php'
  },
  'starter-php': {
    'name': 'Starter.php'
  },
  'di-php': {
    'name': 'DI.php'
  },
  'provider-list-php': {
    'name': 'providerList.php'
  },
  'abstract-provider-php': {
    'name': 'AbstractProvider.php'
  },
  'messenger-provider-php': {
    'name': 'Provider.php'
  },
  'contact-book-provider-php': {
    'name': 'Provider.php'
  },
  'messenger-php': {
    'name': 'Messenger.php'
  },
  'contact-book-php': {
    'name': 'ContactBook.php'
  }
};
</script>
<div style="display: none;">
  <div data-file="index-php">&lt;?php

require 'core/bootstrap.php';</div>
  <div data-file="bootstrap-php">&lt;?php

require_once __DIR__ . '/../vendor/autoload.php';

use Core\DI;
use Core\Starter;

try {
  $di = new DI();

  $providers = require __DIR__ . '/Provider/providerList.php';

  foreach($providers as $item) {
    $provider = new $item($di);
    $provider->init();
  }

  $starter = new Starter($di);
  $starter->run();
} catch(\ErrorException $e) {
  echo $e->getMessage();
}

?&gt;
</div>

<div data-file="composer-json">{
  "name": "pimpops/php-di-container",
  "authors": [
    {
      "name": "Andrii Pereverziev",
      "email": "pereverziev.andrii@gmail.com"
    }
  ],
  "require": {},
  "autoload" : {
    "psr-4": {
      "Core\\": "core"
    }
  }
}</div>

<div data-file="autoload-php">&lt;?php

// autoload.php @generated by Composer

require_once __DIR__ . '/composer/autoload_real.php';

return ComposerAutoloaderInit2b7621be73cd18ecc13077fabd56545f::getLoader();
</div>

<div data-file="starter-php">&lt;?php

namespace Core;

class Starter {

  private $di;

  public function __construct($di) {
    $this->di = $di;
  }

  public function run() {

    $contactBook = $this->di->get('contactBook');
    $messenger = $this->di->get('messenger');

    $list = $contactBook->getList();

    foreach ($list as $contact) {
      echo( $messenger->sendMessage($contact['number']) . '&lt;br&gt;' );
    }
  }
}

?&gt;</div>

<div data-file="di-php">&lt;?php

namespace Core;

class DI {

  private $container = [];

  public function set($key, $value) {
    $this->container[$key] = $value;
  }

  public function get($key) {
    return $this->has($key) ? $this->container[$key] : null;
  }

  public function has($key) {
    return isset($this->container[$key]);
  }
}

?&gt;</div>

<div data-file="provider-list-php">&lt;?php

return [
  Core\Provider\ContactBook\Provider::class,
  Core\Provider\Messenger\Provider::class
];
</div>

<div data-file="abstract-provider-php">&lt;?php

namespace Core\Provider;

use Core\DI;

abstract class AbstractProvider {

  protected $di;

  public function __construct(DI $di) {
    $this->di = $di;
  }

  abstract function init();
}

?&gt;</div>

<div data-file="messenger-provider-php">&lt;?php

namespace Core\Provider\Messenger;

use Core\Provider\AbstractProvider;
use Core\Worker\Messenger\Messenger;

class Provider extends AbstractProvider {

  public $workerName = 'messenger';

  public function init() {
    $messenger = new Messenger();
    $this->di->set($this->workerName, $messenger);
  }
}

?&gt;</div>

<div data-file="contact-book-provider-php">&lt;?php

namespace Core\Provider\ContactBook;

use Core\Provider\AbstractProvider;
use Core\Worker\ContactBook\ContactBook;

class Provider extends AbstractProvider {

  public $workerName = 'contactBook';

  public function init() {
    $contactBook = new ContactBook();
    $this->di->set($this->workerName, $contactBook);
  }
}

?&gt;</div>

<div data-file="messenger-php">&lt;?php

namespace Core\Worker\Messenger;

class Messenger {

  public function sendMessage($contact) {
    return "Message has been sent to number: " . $contact;
  }
}

?&gt;</div>

<div data-file="contact-book-php">&lt;?php

namespace Core\Worker\ContactBook;

class ContactBook {

  private $contactList = [
    ["name" => "Anna", "number" => "234234234"],
    ["name" => "Gleg", "number" => "234dfdf234234"]
  ];

  public function getList() {
    return $this->contactList;
  }
}

?&gt;</div>

<div data-file=""></div>

</div>
