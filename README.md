# Bookdown.io With Bootswatch Styles And Prism Syntax Highlighting

If you generate your documentations with [bookdown](http://bookdown.io/) and want some nice themes and syntax highlighting 
for your code blocks then this package come to the rescue :).

## Installation
Installation of this library uses composer. For composer documentation, please refer to
[getcomposer.org](http://getcomposer.org/).

Put the following into your composer.json

    {
        "require-dev": {
            "tobiju/bookdown-bootswatch-templates": "1.0.x-dev"
        }
    }

## Themes
Choose your preferred theme by changing the ```template``` path in your ```book/bookdown.json```.
Here is a list of themes powered by [bootswatch.com](https://bootswatch.com/). If you use the folder structure as in this 
repo you can set the ```template``` path in your ```book/bookdown.json``` to choose a theme.

The following example uses the `darkly` theme. If you want to use another theme, replace `darkly` with the name of the other theme.

```
{
    ...
    "template": "vendor/tobiju/bookdown-bootswatch-templates/templates/darkly/main.php"
}
```

### Available Themes
Visit [bootswatch.com](https://bootswatch.com/) to see how the theme looks like.

* cerulean
* cosmo
* cyborg
* darkly
* flatly
* journal
* lumen
* paper
* readable
* sandstone
* simplex
* slate
* spacelab
* superhero
* united
* yeti

## Generate Documentation

> Change the path to your bookdown.json. The following commands uses the documentation in this repository for an example.

Documentation example is [in the doc tree](book/), and can be compiled using [bookdown](http://bookdown.io) and [Docker](https://www.docker.com/)

```console
$ docker run -i -t=false --rm -v $(pwd):/app sandrokeil/bookdown book/bookdown.json
$ docker run -i -t=false --rm -p 8080:8080 -v $(pwd):/app php:5.6-cli php -S 0.0.0.0:8080 -t /app/book/html
```

or make sure bookdown is installed globally via composer and `$HOME/.composer/vendor/bin` is on your `$PATH`.

```console
$ bookdown book/bookdown.json
$ php -S 0.0.0.0:8080 -t book/html/
```

Then browse to [http://localhost:8080/](http://localhost:8080/)

## Further Information

* [bookdown](https://github.com/bookdown/Bookdown.Bookdown)


