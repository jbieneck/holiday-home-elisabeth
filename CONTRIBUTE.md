# Project requirements to install

- git
- php
- composer


# Setup the project

```git clone git@github.com:rbieneck/holiday-home-elisabeth.git```
```cd holiday-home-elisabeth```
```curl -sS https://getcomposer.org/installer | php```
```php composer.phar install```

do your changes (use a feature branch for bigger features)

  - FOCUS on fulfilling one single task
  - test your changes
  - adjust md files where necessary


```git commit -am "<feature-you-added>"```


# Testing

## automated tests
not necessary since this is just a simple webpage


## manual tests
- test layout changes in browsers and mobile devices
  - IE, Firefox, Chrome - use the good old xampp
  - mobile test simulator (mobile, tablet, browser size)
    - browser's developer tools often offer a configurable mobile view
    - you can also use adt (android development toolkit) for mobile devices
    - don't forget: mobile devices have different screen sizes and screen rotation
      resulting in a variety of display width
