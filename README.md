<p align="center">
<img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400">
<img src="https://upload.wikimedia.org/wikipedia/commons/9/95/Vue.js_Logo_2.svg" width="100">
</p>

Hey guys,
 
- I have used [Laravel](https://laravel.com/) and [Vue](https://vuejs.org/) frameworks to implement this app.
- I also have used [Giphy](https://giphy.com/) service to get the GIFs.
- CSS is [Bulma](https://bulma.io/).

# Installation

Clone this project using GIT: `git clone git@github.com:hassanazimi/Quidco.git`
Please run the commands below one by one:

```bash

composer install

cp .env.example .env

php artisan key:generate

yarn install

yarn dev

php artisan serve
```

Visit http://127.0.0.1:8000 and start using the app.

You can see the credentials like `GIPHY_KEY` in `.env` file.

I have pasted my `GIPHY_KEY` in `.env.example` so when it's copied, you can use it right away.
