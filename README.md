### Prepare
```
composer install
npm install
php artisan storage:link
```
Also in .env file should change GOOGLE_MAPS_API_KEY (I've put my api_key for testing)

### How to get to Admin panel
1. Go to /login
2. Enter "admin@admin.com" to email field
3. Enter "12345678" to password field
4. You'll get navbar on the top of page.
5. Click to "Admin panel"
6. Here you have: 
    - Register form - main page with register form;
    - Members list - members list with members which must be shown;
    - Admin members list - members list with all members and functions for show/hide member.
7. In Admin members list for each row there is a checkbox "Show". It  turns on/off specific member.
8. In Admin members list in the table head in the field "Show" there is a checkbox. It shows/hides ALL members if 
change it.

