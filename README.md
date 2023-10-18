# DINE-SCAN-FRT
Web app for automating and digitizing ordering experience in restaurants | Hosted on Azure app service and database

DINE SCAN 

In today's fast-paced world, the dining experience at restaurants often involves long wait times to order food and make payments. This inefficiency can lead to customer dissatisfaction and negatively impact restaurant operations. The DINE SCAN project aims to address this problem by introducing a QR code-based food ordering web app with integrated data analysis.

### INDUSTRY/SOCIETY BENEFITTED

DINE SCAN primarily benefits the restaurant industry and society at large. Restaurants can enhance their operational efficiency, efficient inventory management, and provide a more convenient dining experience to customers. Customers benefit from reduced wait times, contactless ordering, improving their overall dining experience.

## This is a web app which baiscally:

### Lets the restaurant owner:
--> manage a digital menu
--> generate QR codes to place on tables
--> track live orders
--> get analytics
### Lets the customer:
--> access the menu by scanning qr code, and passing otp login
--> place orders
--> view their past orders

## Azure services used:
### App Service
### Azure Database for MySQl flexible Server


The app service has usage limits, and currently the project is live and working, in case the limit exeeds and all the Azure credits are used up, the project demo url won't work.

## Basic Working:

The web app is deployed through Bitbucket on Azure services and MySQL flexible database is accessed in PHP and Python as required

Uses CRUD operations to manage menu and orders

Used Fast2sms API for OTP login

Pyscript is used to display data analysis reports to the restaurant owner

Azure data studio is used to create the database schema and monitor the db.

Sql file of the database has been added in the repo, to better udnerstand the data flow

## Future Scope
- Intergration online paymnets and billing management
- Making the menu more customizable for the owner
- integrating customer feedback
- adding more attributes to menu items like ingredients and categories
- using oreder data to train ML model like: Demand Forecasting, Recommendation system, Anomaly detection etc

### NOTE: the api key for fast2sms api, and the SSL certificate file are not there in this repository but the database credentials are present in this code. The project is deployed through Bitbucket.


## Screenshots:

![image](https://github.com/NeuroNut/DINE-SCAN-FRT/assets/118915506/f32f5a92-a8c0-4f78-80a7-aaa7bff2eaef)
![image](https://github.com/NeuroNut/DINE-SCAN-FRT/assets/118915506/3f71e216-2e0e-4980-96c3-067da43ab9e8)
![image](https://github.com/NeuroNut/DINE-SCAN-FRT/assets/118915506/2e9061da-ff47-49cf-96cf-2f67db2073f5)
![image](https://github.com/NeuroNut/DINE-SCAN-FRT/assets/118915506/8f624a80-028f-4c49-b7ce-9ce7dd5ccb0c)
![image](https://github.com/NeuroNut/DINE-SCAN-FRT/assets/118915506/465e0ace-0ee5-4636-ac9d-2727eee1b37d)


## Collaborators:

Aditya Agarwal (NeuroNut)

Aman Ruhela (amanruhela1)

Himanshu Singh (himanshu-singh07)

Mohammad Suhail(Suhail-nagore)

## Important:
When we further explored about this idea, we found a Linkedin page of Banglore based company 'Dinescan' seeming to provide a similar service. However we couldn't find more about the compnay anymore from anywhere. We as the developers of this project are not assosiated with the same in any sense and our work is obviously not copied. As we liked this name of "Dine Scan" which we thought of, on our end independently, and had also submitted in the synopis, we decided to continue with this name. But we found this information worth mentioning.
