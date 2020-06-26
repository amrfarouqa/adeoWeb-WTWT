# What To Wear Today? - AdeoWeb

<img src="public/init/images/logo.png">

> Coding Challenge Symfony Implementation

---

### Table of Contents

- [Demonstration](#demonstration)
- [Description](#description)
- [Setup Guide](#setup-guide)
- [Usage Examples](#usage-examples)
- [License](#license)
- [Author Info](#author-info)

---

## Demonstration

- Hosted Demonstration - [What To Wear Today? - AdeoWeb](https://adeoweb.amrfarouqa.website)



---

## Description

Based on the weather of the city you request in Lithuania, Wear To Wear Today will recommend what to wear so that you don't feel too cold or too hot throughout the day. It will also provide what you should bring. For example it would recommend an umbrella on a rainy day.

#### Technologies

- PHP 7.1+ Version
- JSON
- MySQL 
- Apache Web Server
- Composer
- Symfony 5.0 framework


#### How It Works

Before getting dressed in the morning, we typically check the weather in Lithuania. Is it going to downpour? Or be the most beautiful day of the year? And as much as we love good old Weather.com, it does not give us that much information. That's were WTWT comes in handy. WTWT is a service, which returns product recommendations depending on current weather in Lithuania using the third-party API [LHMT](https://api.meteo.lt/). Based on custom weather or cutom city this application suggests what to wear currently using stored products in database created using [php-faker-clothing](https://github.com/rauwebieten/php-faker-clothing).



---

## Setup Guide

#### Installation

- Import database [wtwt](https://github.com/amrfarouqa/adeoWeb-WTWT/blob/master/mySQL%20FIle/wtwt.sql) into local phpMyAdmin
- Clone adeoWeb-WTWT [Repo](https://github.com/amrfarouqa/adeoWeb-WTWT.git) 
- Change Directory to Cloned Folder
- Edit Database Credentials Line 32 [.env File](https://github.com/amrfarouqa/adeoWeb-WTWT/blob/master/.env)
- Run Command Composer Install
- Run Command "symfony server:start" or "symfony serve"
- Go to [localhost:8000](http://localhost:8000) or [http://127.0.0.1:8000](http://127.0.0.1:8000) to see adeoWeb-WTWT Application



---

## Usage Examples

- Search By Custom City (All Lithuanian Cities Available: 2055 Cities)
- Search By Custom Weather (All Weather Conditions Available in meteo.lt)



---

## License

MIT License

Copyright (c) [2020] [amrfarouqa]

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.



---

## Author Info

- Email - [@aamrfarouqaa](mailto:aamrfarouqaa@gmail.com)
- Website - [https://amrfarouqa.website](https://amrfarouqa.website)
