# Spress Codeblock

![Spress 2 ready](https://img.shields.io/badge/Spress%202-ready-brightgreen.svg?style=flat)

[Spress](https://github.com/spress/Spress) plugin to enable the Twig `codeblock` function from [ramsey/twig-codeblock](https://github.com/ramsey/twig-codeblock).

## Getting Started

Update your `composer.json` to use [GhislainPhu/Pygments.php](https://github.com/GhislainPhu/Pygments.php) instead of [kzykhys/Pygments.php](https://github.com/kzykhys/Pygments.php):

```json
{
    "repositories": [
        {
            "type": "vcs",
            "url": "https://github.com/GhislainPhu/Pygments.php"
        }
    ],
    "require": {
        "kzykhys/pygments": "dev-symfony-process-3 as 1.0-dev"
    }
}
```

Run:

```shell
composer require ghislainphu/spress-codeblock
```

## Usage

Please refer to upstream's [README.md](https://github.com/ramsey/twig-codeblock/blob/master/README.md) for more informations.

## Known issues

- `<` and `>` are converted to `&lt;` and `&gt;` in markdown files

  *This issue exists because the markdown converter runs before Twig.*

  **Solution:** Wrap your code inside of a `div` tag:
  ```html
  <div>
  {% codeblock lang:php %}
  <?php

  echo 'Hello World!';
  {% endcodeblock %}
  </div>
  ```

## License

This project is licensed under the MIT License.

See [LICENSE.md](https://github.com/GhislainPhu/spress-codeblock/blob/master/LICENSE.md) for more informations.
