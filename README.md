## Bluemix PHP Demo App: CodeIgniter

This is an example application which can be run on Bluemix using the [PHP Build Pack].

This is the [CodeIgniter Tutorial] application and it demonstrates running a CodeIgniter application on IBM Bluemix.

### Deploy this app:

####  Automatically by clicking this image: 

[![Deploy to Bluemix](https://bluemix.net/deploy/button.png)](https://bluemix.net/deploy)

#### Manually as follows:

1. Clone the app (i.e. this repo)

  ```
  git clone https://github.com/IBM-Bluemix/codeignitor-twilio.git
  cd codeignitor-twilio
  ```

1. If you don't have one already, create a MySQL service.  With Bluemix, the following command will create a free MySQL databse.

  ```bash
    cf create-service mysql 100 mysql-db
  ```

1. Edit the manifest.yml file.  Change the 'host' attribute to something unique.

1. Bind the mysql service you've created to your app.

  ```bash
    cf bind-service <YOUR UNIQUE APP NAME> mysql-db
  ```  

1. Push to Bluemix with the updated `manifest.yml`.

  ```bash
  cf push
  ```  

  Access your application URL in the browser.  You should see the main page and be able to navigate the links.  The news section is pulled from the database.  Initially it'll be empty, but you can create some news entries with the create page.

### Database Details

Previously with this example, it was necessary to create the database manually.  Now this happens automatically when you push the application.  Here's how this works.

1. The app is pushed & stages.
1. Your MySQL service is bound to the app.
1. The app droplet is run.
1. The db migration scripts execute.
1. The app itself starts.

The migration scripts use the technique described [here](http://zacharyflower.com/2013/08/12/getting-started-with-codeigniter-migrations/).



[CodeIgniter Tutorial]:http://ellislab.com/codeigniter/user-guide/tutorial/index.html
[PHP Build Pack]:https://github.com/cloudfoundry/php-buildpack.git
[PHPMyAdmin]:https://github.com/dmikusa-pivotal/cf-ex-phpmyadmin
[MySQL client]:http://dev.mysql.com/doc/refman/5.6/en/mysql.html
