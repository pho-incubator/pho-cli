# Pho-CLI [![Build Status](https://travis-ci.org/phonetworks/pho-cli.svg?branch=master)](https://travis-ci.org/phonetworks/pho-cli)

A command line interface for the Pho stack. Allows you build graphql files, initialize new projects, and expose a non-blocking event-driven RESTful API via HTTP or HTTPS.

## Getting Started

The recommended way to install pho-cli is [through composer](https://getcomposer.org/).

```bash
git clone https://github.com/phonetworks/pho-cli/
cd pho-cli && composer install
```
## Available Commands

**build**
Builds graphql schema into executable Pho. This may be used if you have cloned a recipe, modified and need to compile it.
> Usage: ```bin/pho.php build [<source>] [<destination>] [<extension>]``` where extension is the file extension (.pgql by default)
  
**init**
Initializes a new project. This is used when you'd like to install a new kernel based on standards or a preset such as the ones that can be found at https://github.com/pho-recipes
> Usage: ```bin/pho.php init <destination> [<skeleton>]``` where destination is the folder where you'd like the kernel to reside, and skeleton is the name of the template to use or a directory where your compiled pgql files reside.
  
**serve**
Runs a HTTP server based on Pho Graph. This may be used once you've initialized a kernel.
> Usage: ```bin/pho.php serve [<kernel>]``` where kernel points to the directory where the kernel resides.

Run ```bin/pho.php help``` at any time for more information.

## License

MIT, see [LICENSE](https://github.com/phonetworks/pho-cli/blob/master/LICENSE).


