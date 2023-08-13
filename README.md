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

