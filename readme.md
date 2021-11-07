<p align="center"><img src="http://my-smartkids.co/web/images/kids_logo.png"></p>


## Smart Kid Domain

- **http://my-smartkids.co/**

## Test Case

- **https://docs.google.com/presentation/d/1aGzIuzJ7IvT9gx1VX9ZfyhcEjURs2_MQ6zEJlf8VNvs/edit?usp=sharing**


## Developer

If you need help related smartkid, please send an e-mail to Aung Thura Win via [mgaungthurawin@gmail.com](mgaungthurawin@gmail.com). Before you contect me please read the below project document.

## Smart Kid Web Portal

Smart Kid has below modules

- Landing Page
- FAQ
- Categories
- Horoscope
- Song For Kid
- Funny Game
- Brain Tester
- Kid Story
- Education Video
- Baby Health
- Favourite
- Unsubscribe (Api Request Only)

## Project Requirement 

- Laravel Version (5.7)
- PHP Version (7.1^) required
- Composer

## Main Code Files

- web.php (Handle Route)
- App\Http\Middleware\SignatureMiddleware.php is main handler to show content or not after subscription
- WebController.php (Handle all project in that Controller)
- config/education.php (Store all education contents)
- config/health.php (Store all baby health contents)
- config/story.php (Store all kid stories contents)
- main view/blade path is resources/views/web/

## Media and Resources

- public/smart-kid-articles has images and video of health, story, education
- public/games hase html5 games of Funny Game and Brain Tester
- public/web/css and public/web/js is main UI/UX resource


## Database and Tables

- kids and favourites only two tables required in this project
- All migration files are include in database/migrations path

## Hosting/Server

Server is Digital Ocean Droplet. Server credentials will provide via mail.









