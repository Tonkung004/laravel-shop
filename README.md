# Laravel-Shop

> [!NOTE]
> Laravel-Shop is an open source shop developed in laravel, very customizable!

## New Features:

- Dashboard panel changes
- Integration of Vue.js and laravel
- Advanced charts
- Better customizable with AI & languages
- Fixed Technical issues
- Project size compression
- UI/UX is more specific
- Developer Friendlier

## Installation [ Development mode ]

> [!IMPORTANT]  
> Create new database and rename `.env.example` to `.env` then update your `.env` configs, and run these commands:

```bash
git clone https://github.com/4xmen/xshop.git
cd xshop
cp .env.example .env
composer install
php artisan migrate:fresh --seed
php artisan storage:link
php artisan key:generate
php artisan serv

# to develop front-end
npm i
php artisan client
npm install @rollup/rollup-win32-x64-msvc # just for windows if the below line does not work
npm run dev

# or with yarn
yarn install
php artisan client
yarn add @rollup/rollup-win32-x64-msvc # just for windows if the below line does not work
yarn dev
```

> [!TIP]
> Default admin email is: `developer@example.com` (developer) or `admin@example.com` (admin) and default password is: `password`

## Image Seeding 

- Download & prepare images:  
```bash
php artisan seeding:prepare
```
- Copy your image folder to `database/seeders/images/`  
- Then seed images for models: [Group, Category, Post, Product, Slider]:

```bash
php artisan seeding:image Product digital
```

Or to seed all models:

```bash
php artisan seeding:all digital
```

> First parameter is Model, second is image seeder directory available [bag, clothe, digital, sport, posts, makeup].  
> You can create your directory and put your images into it, then use the image seeder.

## Requirements

- PHP 8.2.x or above [ `php-gd`, `sqlite3`, `php-soap`]
- MySQL, MariaDB, or SQLite
- Composer
- Recommend installing ImageMagick on the server for better image performance

## Deploy Guide

We recommend deploying xShop on VPS. Create a database and run these commands:

```bash
cd /home/[yourUsername]/[pathOfYourWebsitePublicHTML]
git clone  https://github.com/4xmen/xshop.git . # if this command does not work, make the folder empty first
cp .env.example .env
nano .env # edit your config db, URL, etc.
composer install
php artisan migrate:fresh --seed
php artisan storage:link
php artisan key:generate
npm install
php artisan client
npm run build
```

## Optimize for Production Mode

```bash
nano .env # make APP_DEBUG false, APP_ENV production
php artisan optimize
composer install --optimize-autoloader --no-dev
```

## Add Cron Job

You must add a crontab for your project:

```bash
crontab -e
```

Add this line:

```bash
* * * * * cd /home/[yourusername]/[your-public-html-project-root] && php artisan schedule:run >> /dev/null 2>&1
```

## Make xController

Controller with log and semi-automatic CRUD with logs:  
User [`model`]:

```bash
php artisan make:xcontroller User
```

## Make Theme Part

Theme parts usable in specific areas.

- PartName [`theme part name`]
- SegmentName [`group`, `category`, `preloader`, ...]:

```bash
php artisan make:part PartName segmentName
```

## Client Optimize

Optimize client assets (`scss`, `js`, `css`):

```bash
php artisan client
php artisan build
```

### Theme Part Files

- `PartName.php`: `onCreate`, `onRemove`, `onMount` actions of the theme part
- `PartName.blade.php`: Your theme part blade code
- `PartName.scss`: Your theme part SCSS
- `PartName.js`: Your theme part JavaScript
- `screenshot.png`: Screenshot preview of the theme part

## Demo

> Online demo available here: <a href="https://xshop.xstack.ir/login">https://xshop.xstack.ir/</a>

### Screenshots

![1](https://raw.githubusercontent.com/A1Gard/xshop-installer-assets/master/screenshots/xshop-screenshot1.png)

![2](https://raw.githubusercontent.com/A1Gard/xshop-installer-assets/master/screenshots/xshop-screenshot2.png)

![3](https://raw.githubusercontent.com/A1Gard/xshop-installer-assets/master/screenshots/xshop-screenshot3.jpg)

![4](https://raw.githubusercontent.com/A1Gard/xshop-installer-assets/master/screenshots/xshop-screenshot4.png)

![5](https://raw.githubusercontent.com/A1Gard/xshop-installer-assets/master/screenshots/xshop-screenshot5.jpg)

## Access to Shop/v1

> [!DETAILS]  
> Shop/v1 available here: <a href="https://github.com/Tonkung004/laravel-shop">https://github.com/Tonkung004/laravel-shop</a>

<p align="center"> 
    Developed With Love! ❤️
</p>
