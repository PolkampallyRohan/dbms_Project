**Frontend**: HTML/CSS
        
        *Pages*: login page
                 user login page
                 order booking page
                 admin
                 admin_home(ahome)
                 changepassword_admin
                 changepassword_user
                 newRegistration(newreg)
                 holiday package management page
                 user order management page
                 
    
**Backend**: PHP / Database connectivity with php

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
                       ->members
                       ->amount
                       ->date
                       ->status
                       ->journey
                  holiday: Storing the information of holiday packages
                       ->id
                       ->name
                       ->amount
                  
**Overview**: 
        --> we created a travel management website which provides an interface to book holiday packages 
            and manage the user bookings and updating the holiday packages (admin perks)
