# maltaparkcrawler (PaltaMark)
[![Build Status](https://scrutinizer-ci.com/g/vikkio88/maltaparkcrawler/badges/build.png?b=master)](https://scrutinizer-ci.com/g/vikkio88/maltaparkcrawler/build-status/master) [![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/vikkio88/maltaparkcrawler/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/vikkio88/maltaparkcrawler/?branch=master)

a small api project to browse <a href="http://maltapark.com">Maltapark</a> with a better user experience.

## Project
This project consist in two main entities:
  - AngularJs Application
  - API project based on [Slim](https://github.com/slimphp/slim)
  
##Api
There is a small set of API which will invoke the [MaltaParkParser](https://github.com/vikkio88/maltaparkcrawler/blob/slim-api/Lib/MaltaParkParser.php) to retrieve data from the website

###Sections
to retrieve the section
```
GET /api/sections
```
to retrieve the section's items
```
GET /api/sections/:sectionId/items
```
###Items
to retrieve the item details
```
GET /api/items/:itemId
```


##Laravel/Dingo
the same project is implemented in [another branch](https://github.com/vikkio88/maltaparkcrawler/tree/laravel-dingo) using [Laravel5.1/DingoApi](https://github.com/francescomalatesta/laravel-api-boilerplate-jwt) boilerplate.
Working fine, but still, using laravel for such as small project was like aiming to shot flies with a gamma-ray phaser.




