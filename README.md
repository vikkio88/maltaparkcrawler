# maltaparkcrawler (PaltaMark)
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




