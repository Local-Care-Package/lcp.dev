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

