# Virtual Training Academic

The aims of this research are to streamline operations, enhance communication, and provide a user-friendly platform for students and staff to access crucial information. 
The objectives are:
1.	To create a centralized platform for the academy to manage student enrollments, course scheduling, and progress tracking.
2.	To assure that students meet the current trend in academic settings all over the world
3.	To provide the students with all the information needed in any subject that is done at Hair Kulture Academy.
4.	To Create a platform for student to engage in self-paces learning


[![License](https://img.shields.io/github/license/sixtusagbo/transport_management_system)](LICENSE)

![Screenshot](https://raw.githubusercontent.com/sixtusagbo/transport_management_system/main/screenshot.png)

## Table of Content
* [Overview](#transport-management-system)
* [Framework](#framework)
* [Features](#features)
* [Installation](#installation)
* [Contributing](#contributing)

## Framework

This project was built with Laravel 8.68.1

## Features
The current features supported include:
- User (Passenger and Admin)
- Booking of bus seats
- Cargo booking
- Driver
- Vehicle
- Ticket number
- Barcode
- Payment System - [Paystack](https://paystack.com/)
#### **Planned Features**
- Automatic deleting of tickets unpaid after 1 month (with cronjobs)

## Installation

#### Clone the repo
```bash
git clone https://github.com/sixtusagbo/transport_management_system
```

#### Duplicate and modify [.env.example](https://github.com/sixtusagbo/transport_management_system/blob/main/.env.example)
```bash
cp .env.example .env
# Modify it
```
*Put your PAYSTACK_SECRET_KEY and PAYSTACK_PUBLIC_KEY in env for payment to work*

#### Generate app key
```bash
php artisan key:generate
```

#### Install composer dependencies
```bash
composer install
```

#### Install npm packages
```bash
npm install
```

#### Compile with mix
```bash
npm run dev
```

#### Run the database migrations
```bash
php artisan migrate
```
**OR [Optional] Start off with dummy data from [faker](https://github.com/FakerPHP/Faker)**
```bash
php artisan migrate --seed
```

#### Create symlink to storage
```bash
php artisan storage:link
```

#### Run the app
```bash
php arisan serve
```

## Contributing
- [Fork the repo](https://github.com/sixtusagbo/transport_management_system/fork)
- Create a branch for your new feature ( `git checkout -b my-new-feature` )
- Commit your changes (`git commit -am 'Added some feature'`)
- Push to the branch (`git push origin my-new-feature`)
- Create a new [Pull Request](https://github.com/sixtusagbo/transport_management_system/pulls)

