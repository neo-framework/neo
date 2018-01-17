# Neo Framework

Skeleton application for Neo Framework projects. :tanabata_tree:

## Getting Started

Let's begin our journey by creating a new project using [Composer](https://getcomposer.org).

```
composer create-project neo-framework/neo AwesomeBlog
```

This magic command will create a directory called `AwesomeBlog`, then proceed to fetch all necessary packages and give you a __ready to deploy skeleton application__ that displays a hello world page.

You can test it right away using [Caddy](https://caddyserver.com) by running

```
caddy
```

inside the `AwesomeBlog` directory and visiting [`http://localhost:4000`](http://localhost:4000) in your favorite browser.

## Documentation

[Here](https://github.com/neo-framework/neo/wiki) you go.

## Dev

- Clone and install everything.

```bash
echo 'git clone git@github.com:neo-framework/neo'{,-core,-plugins,-framework.github.io}';' '(cd neo'{,-core,-plugins}'&&composer install);' | bash
```

- Run test suite inside repository.

```bash
composer test
```

## License

_Neo Framework_ is open-sourced software licensed under the [MIT license](LICENSE).
