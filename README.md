# Goglides Ecommerce
A static hugo ecommerce site for your business

## Features

#### Site features

- Mobile responsive- works great across desktops, tablets and mobiles
- Categories and sub-categories listing
- Search over product name and categories
- Payment gateway implemented(Khalti Payment)
- Notify via email to both user and merchant

#### Blogging features

- Attractive landing page with featured products
- Add Categories and sub-categories for easier grouping
- Easy add product via CMS(Netlify)


## Installation & Update

This [document](https://gohugo.io/getting-started/installing/) will guide you through installation of Hugo.

After installing hugo, see [Hugo doc](https://gohugo.io/getting-started/quick-start/) for installing theme in your hugo site.

## Quick Demo

```bash
Clone 'https://github.com/pandeybk/goglides-theme-netlify' to your directory
hugo serve
Then you can have quick look at the site at "http://localhost:1313/"
```

## Implementing Server

This [link](https://laravel.com/docs/8.x/installation) will guide you through installation of Laravel.

After installing laravel, follow these steps

Note($ indicates you are in root directory of your project and command is working via project directory)

```bash
$ cd payment-gateway
$ php artisan serve
Then you can test Khalti payment working
```

## Usage

#### Configuring your company information

```bash
-Open config.toml located at root folder of project
-Replace your company logo link with link at "companyLogo" at [params]
-Similarly you can change your contact number, address and email
```

#### Adding products

```bash
-Run your project with command 'hugo serve'
-Then go to link {your-baseURL}/admin. Example 'http://localhost:1313/admin'
-Login with your Github or Google account
-Then click on "New Product"
-Then input necessary field such as title, product image, categories etc
-Your newly added product will be displayed at landing page
```

#### Customizing mail server

```bash
-Open .env inside payment-gateway folder
-You will find MAIL configuration section such as 'MAIL_DRIVER', 'MAIL_HOST' .., etc
-Change setting as per your mail server requirement
```

#### Adding your payment key

```bash
-Open 'scripts.html' file under partial folder
-You will find "publicKey" variable under "var config = {...}
-Replace "test_public_key" with public key provided to you
-Now open 'KhaltiController' under 'payment-gateway/app/Http/Controllers'
-Under function named verifyKhalti you will see 'Authorization'
-Replace the "Key test_secret_key" with your "Key {your_secret_key}"
(Note "Key" must be before your scret key)
```

## Contributing

If you find problems with the theme raise an issue. Also, contributions/pull requests are welcome.

## LICENSE
copyright © goglides llc
