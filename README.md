# Secure Programming Ecommerce - Group 3
#### We're Using CodeIngiter3 a PHP framework that uses MVC (models,views,controllers) Architecture
## INSTALLATION
#### 1. Clone the github repo, and place the directory in your apache server directory (in htdocs if you'r using XAMPP/any other service , or /var/www/ if running on linux)
#### 2. Add database.php file to /application/config/ directory as it's included in .gitignore, so it does not get cloned
#### 3. Import the mysql database sql file in /db/ directory and check the config in database.php (host, port, user and password)

## SECURITY FEATURES
#### 1. Buffer overflow protection
#### 2. Command Injection prevention (sql and xss)
#### 3. CSRF protection (cross-site request forgery)
#### 4. Authentication attack prevention (MFA / 2 factor auth , hashed password + salt)
### 5. Other security measures 
#### DDos protection, PCI DSS for storing cards, Brute force protection , SSL certificates

## SECURITY SETTINGS
#### 1. SET $config['global_xss_filtering'] = TRUE; [ /application/config/config.php]
#### 2. CSRF protection [ /application/config/config.php] 

## List of Reference
#### [1]angel jude suarez, “[COMPLETE] E Commerce In CodeIgniter With Source Code,” Itsourcecode.com, Oct. 06, 2022. https://itsourcecode.com/free-projects/php-project/complete-e-commerce-in-codeigniter-with-source-code/ (accessed Jul. 18, 2023).
#### [2]b4tch, “Message: Return type of CI_Session_files_driver::open($save_path, $name) should either be compatible with,” Stack Overflow, Feb. 16, 2022. https://stackoverflow.com/questions/70508122/message-return-type-of-ci-session-files-driveropensave-path-name-should (accessed Jul. 19, 2023).
#### [3]zanderwar, “Creation of dynamic property CI_URI::$config is deprecated,” Stack Overflow, Jan. 15, 2023. https://stackoverflow.com/questions/75122899/creation-of-dynamic-property-ci-uriconfig-is-deprecated (accessed Jul. 19, 2023).
#### [4]A. Chaturvedi, “Session issue with codeigniter (CI),” Stack Overflow, May 11, 2016. https://stackoverflow.com/questions/37052840/session-issue-with-codeigniter-ci (accessed Jul. 19, 2023).
#### [5]V. K, “MySQL injection protection and vulnerability signs using PHP,” Stack Overflow, Feb. 13, 2009. https://stackoverflow.com/questions/544239/mysql-injection-protection-and-vulnerability-signs-using-php (accessed Jul. 19, 2023).
#### [6]H. A. Noman and O. M. F. Abu-Sharkh, “Code Injection Attacks in Wireless-Based Internet of Things (IoT): A Comprehensive Review and Practical Implementations,” Sensors, vol. 23, no. 13, p. 6067, Jun. 2023, doi: 10.3390/s23136067.
#### [7]H. Dehariya, P. Kumar Shukla, and M. Ahirwar, “A Survey on Detection and Prevention Techniques for SQL Injection Attacks,” International Journal of Wireless and Microwave Technologies, vol. 6, no. 6, pp. 72–79, Nov. 2016.
