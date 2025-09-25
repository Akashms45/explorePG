ExplorePG – Online PG Locator
A PHP & MySQL-based web application for locating and booking Paying Guest (PG) accommodations. Built using the XAMPP stack, the system manages three roles: Admin, Owner, and User.

Project Structure
    -admin/ → Admin dashboard & management pages
    -owner/ → Owner dashboard for PG management
    -user/ → User pages for searching & booking PGs
    -css/ → Stylesheets
    -js/ → JavaScript files
    -images/ → Static assets (logos, backgrounds, icons)
    -config.php / connection.php → Database configuration
    -online_hotel.sql → Database schema and sample data
    -login.php, ownerreg.php, userreg.php → Authentication & registration logic
    -aboutus.html, contactus.php, feedback.html → Static content pages
    
✅ Features
1. Admin
  Manage users & owners (approve, block, delete)
  Review & moderate PG listings
  Handle complaints & feedback
2. Owner
  Register and log in
  Add, edit, or remove PG details (Location, Rent, Facilities, Photos)
  Manage availability
  View and respond to booking requests
3. User
  Register and log in
  Search PGs by location, rent, and facilities
  View detailed PG information with images and amenities
  Contact PG owners
  Book PG rooms online
  Provide feedback and ratings
4. Tech Stack
  Backend: PHP
  Frontend: HTML, CSS, JavaScript
  Database: MySQL
  Server: Apache (XAMPP)
5. Installation & Setup
  Clone the repository: git clone https://github.com/Akashms45/explorePG.git
  Move the project into your XAMPP htdocs directory (C:/xampp/htdocs/explorePG)
  Start Apache and MySQL from XAMPP Control Panel
  Open phpMyAdmin, create a database (e.g., explorepg), and import online_hotel.sql
  Update config.php or connection.php with DB credentials (localhost, root, '', explorepg)
  Run in browser: http://localhost/explorePG/
