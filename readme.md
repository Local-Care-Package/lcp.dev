# Local Care Package Web App

The Local Care Package Web application, is intended to be a customer marketplace where customers can purchase and send care packages to specified recipients.  The application allows for placing orders of care packages, tracking orders from processing to delivered, storing and editing customer account data, and improving efficiency in internal workflow. Built using Laravel, PHP, MySQL, JavaScript, jQuery, Twitter Bootstrap, and Stripe. Development done in a Vagrant environment. Version control using Git and GitHub. Features a customer interface and administrative interface with customized views and data.

##Customer Facing Components
####Current account functionality allows users to:
+ Manipulate and examine account information 
  * Submit form to create a new account
  * Store new customer account in database (Completed on form submission)
  * Account Creation Confirmation Email
  * Log-in with via provided credentials
  * Log-out of account via button
  * Password Reset via form and email prompts
  * View Account Details
  * Edit Account Details
  * Delete Account (Soft-Delete)

+ Manipulate Order Information
  * Create Order
  * Confirm Cart (Via Sessions)
  * Purchase Order with Credit Card (Via Stripe API)
  * Only View orders purchased by user
  * Show status of current orders via the account view (Processing, In-Package, Delivered) 

+ Planned customer account functionality:
  * Billing information Create/Update/Delete - Utilizing stripe customer model
  * Reactiviation of "Soft" Deleted Accounts
  * Allow Order Changes (Modify details/ Cancel order)
  * Automation of confirmation text/emails at order purchase, packaging and delivery

## Administrative Facing Components
####Current functionality allows administrators to:
+ Manipulate Account Information in administrator specfic view
  * Login / Logout of administrative account
  * Show Index of All Users
  * View all account details
  * Edit all account details
  * Delete all account (Soft-Delete)

+ Manipulate Order Information
  * View idnex of all orders, and their current status
  * View individual orders and current status
  * Manipulate individual order information
  * Modify status of order from one state to another

+ Customer Messaging
  * Allow for sending of customer SMS messages to customers via Twillio API

+ Planned Administrative Functionality
  * Integration of automated messaging to customers at specific stages of order status (email/SMS)
  * Admin Dashboard - See app.views.dashboard.blade.php for details
  * Inventory Dashboard - See app.views.inventory.blade.php for details
  * Vendor Dashboard - See app.views.vendors.blade.php for details
