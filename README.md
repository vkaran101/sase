## Northeastern SASE Website

### Overview

Website for the Society of Asian Scientists and Engineers (SASE) chapter at
Northeastern University.

Visit the site at [northeastern.edu/sase](www.northeastern.edu/sase).

Project is currently located at [northeastern.edu/sase/sase-site](
www.northeastern.edu/sase/sase-site).

### Introduction

**NOTE: Unless told otherwise, relative paths referred to in this document
are relative to the CodeIgniter project root.**

### Deploy to Production

It is highly recommended to checkout a new branch for Production deployment,
so you don't commit the sensitive data into mainline.

1. Checkout new branch for deployment, prefer a branch name such as
  `deploy-production`.

2. In `index.php`, change `ENVIRONMENT` to `production`.

3. Change the base URL in `app/config/config.php` to
  `http://northeastern.edu/sase/sase-site/`.

