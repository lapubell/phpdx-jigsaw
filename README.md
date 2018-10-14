## Slides

https://docs.google.com/presentation/d/1kTHkzkkXrbnMDqJuHYutf8W10s-RWIdYj4GH8ecIHfY/edit?usp=sharing

## Steps for the talk I'll be having at PHPDX:

* ```echo "alias jig='./vendor/bin/jigsaw'" >> ~/.bashrc``` (optional - osx probably needs to put this in ~/.bash_profile)
* ```mkdir site```
* ```cd site```
* ```composer require tightenco/jigsaw```
* ```jig init```
* ```npm install``` (optional - this will use laravel mix to build your assets)

### Serving your site options

* jig serve (local development server using built in PHP server)
* jig serve production --port=8888 (local development server after building for production on a specified port)
* npm run watch (uses browser sync to provide live previews of changes)

### Build a reusable layout

* Jigsaw comes with a very basic layout that is ready to use Laravel Mix to build your assets using Sass and webpack
* Let's look in the ```source/_layouts``` folder
* Edit this layout as necessary
* The $page variable becomes something that you can use to define all sorts of variables to, and also retrieve information about the current page
