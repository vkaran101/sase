**This was forked from a repo that was previously private. To see the 
see the original source, check out [https://github.com/yufengwng/sase] (https://github.com/yufengwng/sase).
# Northeastern SASE Website

## Overview

Website for the Society of Asian Scientists and Engineers (SASE) chapter at
Northeastern University.

Visit the site at [northeastern.edu/sase](http://www.northeastern.edu/sase).

## Introduction

The aim of this project is to develop a website for Northeastern
University's chapter of SASE, where anyone can visit to find information
about what is SASE, what does SASE do, and how to contact SASE.

For developers, the hope is to leverage this website project as a platform
for interested developers to apply their skills and creativity, in a way
that will contribute back to the website and SASE.

Have fun and hack away!

**NOTE: Unless told otherwise, relative paths referred to in this document
are relative to the CodeIgniter project root.**

## Requirements

Before you can begin development for this project, there are several tools
that you need to install and get familiar with:

- git: make sure you can grab the website repo
- Apache/httpd: a local web server to view and test website
- MySQL: for database access and store
- PHP: backend framework of website is written in the php language, version >= 5.3.3
- Ruby: some things require the ruby language to run, version >= 1.9
- foundation: ruby gem for frontend framework
- compass: ruby gem to compile frontend framework

If you are on a Linux system (preferred), then some of these should be
installed by default. If not, then they should be easy to grab via your
package managers or via `gem install`.

## Site Structure

Let's discuss the general structure of the website before we look at the
components that put the website together. Here are the content that we
currently offer on the website:

- home page: any big announcements and main ideas
- events: upcoming and past events SASE has done
- programs: unique long-term activities from SASE
- eboard: the current set of eboard members
- sponsors: the organizations that support National SASE
- about: what SASE is all about
- contact: ways to get in touch with SASE

There are also a few other pages that are important, such as a page to sign up
for SASE's email list. All together, the most important areas are the home page,
events page, and any page that has a form on it. We should ensure that those
pages work at all times.

### Header

The header of all pages contains the NUSASE logo and the navigation links.
When the website is viewed on a mobile device or on a small screen, the
navigation links will collapse down to a menu button, which opens a list of
links to the left of the website page.

### Main Content

The main page content usually starts with a banner that identify the page.
Individual content that follows the banner will usually be wrapped in a
container that creates a full-page background.

### Footer

The footer section has quite a lot of content. There is an alternative NUSASE
logo that brings visitors back to the home page. There are links that allow
visitors to sign up for SASE's mailing list and other ways to join SASE.
A list of organizations that has affiliations with SASE is also available.
Lastly, the footer ends with a copyright to look a bit more professional. =)

### Admin Portal

There is a section of the website that is reserved for SASE eboard members
to use for managing the website, such as adding events. This section is not
linked to from anywhere in the website but could be visited at:
`neu.edu/sase/admin`. Access to this section is restricted and requires a
login. Currently, the admin portal allows managing events and eboard info,
and migrating the database.

## CodeIgniter Backend

The core of the website is built using the CodeIgniter PHP web framework.
CodeIgniter follows the MVC pattern and splits things up into Models,
Views, and Controllers. Models is the database access layer, Views are the
HTML pages, and Controllers are the ones that manage the flow of data
and presentation of the html.

In the root of the project, you will find `app`, `igniter`, and the
`public` directories. `igniter` is where you will find the core files that
make CodeIgniter work. You should not need to change anything here. Next is
the `app` directory, also the place where you will find the model, view,
and controller files. This is where you do most of your development. Lastly,
the `public` directory is the one that contains images, CSS, JavaScript, and
other files that is publicly accessible to the world.

Access control to the admin portal of the website is managed by the Ion Auth
plugin for CodeIgniter. Read up on the user guide to learn more about the
framework.

### Why CodeIgniter?

I'm glad you asked. If we could freely choose a framework to use, we
probably will not have gone with CodeIgniter. Ruby on Rails seems like a
great choice. Unfortunately, there are constraints.

The website is currently hosted on one of Northeastern's web server. The
good thing is we don't have to pay anything. The downside is we can't
do much configuration, and we are pretty much limited to using php. And so
CodeIgniter seemed like a good PHP framework at the time. Having a framework
is absolutely better than starting from scratch.

## Foundation 5 Frontend

The layout of the website is customized using the Foundation 5 framework from
ZURB. It is a responsive framework that is comparable to Bootstrap. Foundation
5 allows us to use grids for the website layout, making the website look great
on both computer and mobile screens. It also offers a comprehensive set of CSS
styles that we could use to beautify various components.

There is also a set of icons we use on the website that comes from
Font-Awesome. These icons are CSS-based and originally built for Bootstrap.
They still work well with Foundation 5 and looks great.

You will find these in the directories named `foundation5` and `font-awesome`.
Both these frameworks are incorporated into the project in their SASS form,
using the SCSS syntax. Read up on respective documentation to learn more
about these frameworks.

### Why Foundation 5?

We could have easily went with Bootstrap. Both frameworks are great. However,
at the time Foundation 5 offers something really cool called an off-canvas menu
and that was basically the deal-breaker. That doesn't mean we ultimately
abandon Bootstrap. If it seems suitable, we could change over (obviously,
a ton of work could be involved in porting over).

## Email and Mailing List

Currently, the website allows visitors to contact us and sign up for SASE's
mailing list via filling out a form on the website.

For contacting us, the form that visitors fill out will trigger an email
that gets sent to SASE's gmail. The email is handled by `sendmail` on the web
server. Due to some pecularities, the email is currently designed to be sent
by SASE's email to SASE itself, with the visitor's email in the reply-to field.

We currently use Mailchimp to manage our mailing list. For sign ups, a form
that posts to the Mailchimp servers is presented for visitors to fill out.
Form validation and success/failure messages are done by Mailchimp.

## How-to

There's not much I have to say here yet. Most important is to just follow
MVC and write PHP. You will probably want to know how to deal with SASS:
use the Rakefile. It has some commands to update things, compile the SASS,
and copy them to the `public` directory. All you got to do is run:
`rake` or `rake <some_task>` to run something specific.

Some other commands explained:

- `foundation update`: check for updates for Foundation 5 components
- `compass compile`: convert .scss files to .css

## Deploy to Production

After some development, we need to check in the changes, and upload them
to production. It is highly recommended to checkout a new branch for
Production deployment, so you don't commit the sensitive data into mainline.

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

Transfer files to server and verify. The production deploy process has been
automated with the rake task `rake deploy`. Make sure you have configured
the correct settings in `settings.rb` before running the task. Check out
the rakefile for more details.
