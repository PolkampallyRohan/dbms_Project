**Frontend**: HTML/CSS
        
        *Pages*: login page
                 user login page
                 forgot password 
                 order booking page
                 admin
                 admin_home(ahome)
                 changepassword_admin
                 changepassword_user
                 newRegistration(newreg)
                 holiday package management page
                 user order management page
                 
    
**Backend**: PHP / Database connectivity with php

                /index.php
                the login page, requests the email id and password it checks whether the login credentials are matching with those of that in the database                   then logs the user into their session
                
                /forgotpass_email.php
                this asks the user first for the email and then progress further into getting the password
               
                /forgotpassword.php
                here the user is asked a security question before finally revealing their password
                
                /logout.php
                just takes the user back to login page
                
                /home.php
                this is the user home
                
                /book.php
                this takes the packages created by admin from the database then allows the user to book a package
                
                /changepassword.php
                changes the users password in database
                
                /changepasswordadmin.php
                changes the admins password in database
                
                /admin.php
                admin login page, crosschecks the credentials with the database
                
                /ahome.php
                admin home
                
                /holiday.php
                the admin has the control to crate new packages and delete them from database
                
                /orders.php
                admin can view which orders have been placed and can approve them 
                
                /setting.php
                sets up your server with mysql
                
                /newReg.php
                a page for creating new user accounts. it writes data of new customers into the database 
                
                /deleteH.php
                used while deleting the users orders and deleting packages 
                
                /app.php
                used while approving a order
                
                

**Database**: Mysql
      
        *Tables*: admin: Storing the data of admins 
                       ->aid
                       ->name
                       ->password
                  customers: Storing information of customers
                       ->id
                       ->name
                       ->email
                       ->contact
                       ->password
                  bookings: Storing the booking status and details
                       ->id
                       ->email
                       ->package
                       ->adult_members
                       ->children
                       ->amount
                       ->date
                       ->status
                       ->journey
                  holiday: Storing the information of holiday packages
                       ->id
                       ->name
                       ->amount
                  security_questions: a table with all the security questions required while registration
                        ->sec_id
                        ->sec_que
                  
**Overview**: 
        --> we created a travel management website which provides an interface to book holiday packages 
            and manage the user bookings and updating the holiday packages (admin perks)
