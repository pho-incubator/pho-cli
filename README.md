<p align="center">
  <img width="375" height="150" src="https://github.com/phonetworks/commons-php/raw/master/.github/cover-smaller.png">
</p>

# Pho-CLI [![Build Status](https://travis-ci.org/phonetworks/pho-cli.svg?branch=master)](https://travis-ci.org/phonetworks/pho-cli)

A command line interface for the Phở stack. Allows you to build GraphQL files, initialize new projects, and expose a non-blocking event-driven RESTful API via HTTP or HTTPS.

## Getting Started

Pho-CLI is based on PHP 7.2+ 

The preferred method of installation is to use the pho-cli [PHAR](https://github.com/phonetworks/pho-cli/releases/download/0.2/pho.phar) which can be downloaded from the most recent Github Release. This method ensures you will not have any dependency conflict issue.

Alternatively, you may install pho-cli [through composer](https://getcomposer.org/).

```bash
git clone https://github.com/phonetworks/pho-cli/
cd pho-cli 
git submodule update --init --recursive 
composer install
```

> Note the submodule https://github.com/phonetworks/skeleton

You must have [Redis](https://redis.io/) and [Neo4J](https://neo4j.com/) installed for the projects to run on your system.

## Tutorial 

Check out https://ideasforfree.org/2020/05/08/how-to-create-a-tinder-clone-in-pho/ for a tutorial with instructions on how to create a Tinder clone using Phở Networks and pho-cli.

Available commands are:
  
**init**
Initializes a new project. This will start a dialog where you define the app name, description as well as the template of your project based on [Phở recipes](https://github.com/pho-recipes). 

> Usage: ```pho init``` 


**build**
Compiles the schema files. This must be run in a project folder that was initialized using the command above.

> Usage: ```bin/pho.php build``` 


**compile**
For advanced users only. Same as above ("build"). Except this is a more flexible version, as it can be run from anywhere, as long you specify the source and the destination folders.

> Usage: ```bin/pho.php compile [source folder] [destination folder] [extension]```

* Source Folder: The directory where the graphql schema resides.
* Destination Folder: The directory where the compiled Pho files will go.
* Extension: (Optional) Compiles the given file extension. The default value is .pgql

## License

MIT, see [LICENSE](https://github.com/phonetworks/pho-cli/blob/master/LICENSE).


