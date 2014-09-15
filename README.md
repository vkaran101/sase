## Northeastern SASE Website

### Overview

Website for the Society of Asian Scientists and Engineers (SASE) chapter at
Northeastern University.

Visit the site at [northeastern.edu/sase](www.northeastern.edu/sase).

### Introduction

**NOTE: Unless told otherwise, relative paths referred to in this document
are relative to the CodeIgniter project root.**

### Deploy to Production

It is highly recommended to checkout a new branch for Production deployment,
so you don't commit the sensitive data into mainline.

1. Checkout new branch for deployment, prefer a branch name such as
  `deploy-production`.

2. In `index.php`, change `ENVIRONMENT` to `production`.

3. In `app/config/config.php` update the following:
    - base url to `http://www.northeastern.edu/sase/`
    - log threshold to `1`
    - log path to `/var/www/html/sase/app/logs/`
    - add an awesome encryption key

4. In `app/config/database.php` update the database account.

5. In `app/config/mailchimp.php` update the api key.

Transfer files to server and verify.
