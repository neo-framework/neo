# Neo Framework

Skeleton application for Neo Framework projects :green_apple:

## Getting Started

Create a new project:

```
composer create-project -s dev neo-framework/neo path/to/install
```

This will fetch all necessary packages and give you a __ready to deploy skeleton application__ that displays a hello world page.

## Router

The router set-up is done in `config/routes.config.php`.

### Simple routing

```
'routes' => [

    '/' => [
        'method' => 'GET',
        'action' => 'index_action',
        'controller' => 'HelloController'
    ]

]
```

I know you're lazy (looking at you [@fwhcat](https://github.com/fwhcat)) so:
- If you omit `method` it will default to `GET`
- If you omit `action` it will default to `index_action`

### Request & Response

You have access to `Request` and `Response` objects inside the controller class via  
`$this->request` and `$this->response` properties.

Neo uses [klein.php](https://github.com/klein/klein.php) as a router back-end, so you have to refer to the corresponding [API reference](https://github.com/klein/klein.php#api) to learn what you can do with said request and response.

## Controller

Controllers should be located in `src/myapp/controllers/` and have the namespace `myapp\controllers` where `myapp` is the application namespace (`app_ns` in `global.config.php`).

A simple controller could look like this:

```php
namespace myapp\controllers;

use \neo\core\controller\Controller;

class HelloController extends Controller
{

    public function index_action()
    {
        return '<h1>Wake up, Neo...</h1>';
    }

}
```

## View

Views are responsible for generating the specific output required for the request.

Neo relies on [endobox](https://github.com/younishd/endobox) as template engine, so you might want to check out its [awesome documentation](https://github.com/younishd/endobox/wiki).

This is a basic example of a view call inside a controller:

```php
public function some_action()
{
    // create views
    $header = $this->view('header');
    $something = $this->view('something');
    $footer = $this->view('footer');

    // append them together
    $header($something)($footer);

    // assign some data
    $something->assign([ 'answer' => 42 ]);

    // render and return
    return $header->render();
}
```

Template files should be kept under `templates/`. They can be located in subdirectories.

## Model

Models should be located in `src/myapp/models/` and have the namespace `myapp\models` where `myapp` is the application namespace (`app_ns` in `global.config.php`).

A simple model could look like this:

```php
namespace myapp\models;

use \neo\core\model\Model;

class SomeModel extends Model
{

    public function get_something()
    {
        // you have direct access to a PDO object connected to your mysql database
        return $this->db->query('SELECT * FROM sometable')->fetchAll();
    }

}
```

In the controller you can then get the model as follows:

```php
class SomeController extends Controller
{

    public function some_action()
    {
        $model = $this->model('SomeModel');

        // do stuff...
    }

}
```

## Plug-in API

### Controller Plug-ins

- A controller plug-in is a class that extends `neo\core\controller\Plugin`.

- In order to use a plug-in you have to load it inside the controller using the `load` method.

```php
$this->load('some_plugin');
```

- External plug-ins are registered in `plugins.config.php`

```
'plugins' => [

    'some_plugin' => '\\fully\\qualified\\name\\SomePlugin'

]
```

- Alternatively, you can drop plug-ins directly in the `plugins/controller/` folder.

```php
namespace foobar\plugins\controller;
use \neo\core\controller\Plugin;
class AwesomeStuffPlugin extends Plugin {}
```

- The plug-in name will be drawn from the class name: `AwesomeStuffPlugin` becomes `awesome_stuff`.

```php
$this->load('awesome_stuff');
```

#### API

Once loaded, all `public` methods defined in the plug-in will be available inside the controller (just like normal methods).

For instance, let's have a look at this plug-in that does nothing:

```php
class DoNothingPlugin extends Plugin
{
    public function foo() {}
}
```

Inside our controller, we could do something like this:

```php
class BarController extends controller
{
    public function bar_action()
    {
        // load our plugin...
        $this->load('do_nothing');

        // ...and use it!
        $this->foo();
    }
}
```

#### Hooks

- `on_load()`

A callback that is called when the plug-in gets loaded for the first time.


## License

_Neo Framework_ is open-sourced software licensed under the [MIT license](LICENSE).
