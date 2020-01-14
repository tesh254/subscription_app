# Fnista

A subscription app built with Laravel.g

## Prerequisites 

- [PHP](https://secure.php.net/)
- [Composer](https://getcomposer.org/)
- [A Stripe Account](https://stripe.com/)

## Installation

- Clone the repo: `git clone https://github.com/tesh254/subscription_app.git`
- Go into the repo: `cd subscription_app`
- Install dependencies: `composer install`
- Copy `.env.example` to `.env`: `cp .env.example .env`
- Create a key: `php artisan key:generate`
- Fill in `STRIPE_KEY` and `STRIPE_SECRET` in `.env`
- Start the app: `php artisan serve`
- Visit the app: `<http://localhost:8000>`

## Stripe Credentials

We will need a payment processor. Create a [Stripe](https://stripe.com) account and get your API keys under **Developers** tab, click on `API KEYS`. Update `.env` file.