#TEST

# Local Care Package Web App

The Local Care Package Web application, is intended to be a customer marketplace where customers can purchase and send care packages to specified recipients.

## User Functionality
### Create
- Allows user to create account
- Emails welcoming to Local Care Package
- Account created and user can login
- Known Issue: Soft deleted users cannot get back into create a new account with previously used email.

### Store 
- Successfully creates user and stores in database
- Placeholder currently exists for stripe customer token in model but is not utilized

### Show
- Account view populates with purchases, status, and personal info

### Edit
- Allows for editing of user details
- To Be Addressed: User Billing Info is placeholder text, dependent on integration of stripe customer model

### Destroy/Delete
- Allows for user to delete self via (Soft Delete)
- Admin can destory user (Soft Delete)

## Homepage
- Known Issue: Social Media Links are dead

## Orders 
###Create
- User can create an order and select package, redirected to confirmation page
- Confirmation page is popluated via session, Stripe Processing of payment directs user to orders.show for that ID 


##To Do:
- Domain for hosting  (Completed)
- Send packages buttons redirect to Orders/Create
- Filter orders to require user signed in
- Orders Filter for all functionality so you can't view other orders that you done' own (seen user)
- Dummy data for intent of dashboard
- Clean up orders/create view i.e. Radio buttons for packages rather than dropdown
- Inconsitency for status icons 
- Integrate twillio view into connecting with specific orders
- Customer stripe token not currently in use
- Add confirmation email for Order
- Send email when it is delivered






## Laravel PHP Framework

[![Latest Stable Version](https://poser.pugx.org/laravel/framework/version.png)](https://packagist.org/packages/laravel/framework) [![Total Downloads](https://poser.pugx.org/laravel/framework/d/total.png)](https://packagist.org/packages/laravel/framework) [![Build Status](https://travis-ci.org/laravel/framework.png)](https://travis-ci.org/laravel/framework)

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as authentication, routing, sessions, and caching.

Laravel aims to make the development process a pleasing one for the developer without sacrificing application functionality. Happy developers make the best code. To this end, we've attempted to combine the very best of what we have seen in other web frameworks, including frameworks implemented in other languages, such as Ruby on Rails, ASP.NET MVC, and Sinatra.

Laravel is accessible, yet powerful, providing powerful tools needed for large, robust applications. A superb inversion of control container, expressive migration system, and tightly integrated unit testing support give you the tools you need to build any application with which you are tasked.

## Official Documentation

Documentation for the entire framework can be found on the [Laravel website](http://laravel.com/docs).

### Contributing To Laravel

**All issues and pull requests should be filed on the [laravel/framework](http://github.com/laravel/framework) repository.**

### License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
