🎨 Online Art Gallery Management System
📌 Project Overview

The Online Art Gallery Management System is a web-based platform developed using HTML, CSS, JavaScript, PHP, and MySQL. The system provides a complete solution for displaying, managing, and purchasing artwork online.

The platform consists of two main modules:

Customer Panel
Admin Panel

Customers can browse artworks, view detailed information, add items to their cart, purchase artwork, and submit feedback. Administrators can manage artwork listings, monitor customer orders, and review feedback through a dedicated administration dashboard.

🚀 Features
👤 Customer Panel

The customer interface provides a user-friendly experience for art lovers and buyers.

🎨 Art Gallery
Browse available artworks.
View artwork images.
Search and explore art collections.
📄 Art Details
Artwork title.
Artist information.
Price details.
Artwork description.
High-quality image preview.
🛒 Shopping Cart
Add artworks to cart.
Remove items from cart.
Update cart contents.
Calculate total purchase amount.
💳 Purchase Process
Place orders for selected artworks.
View order summary before confirmation.
⭐ Feedback System
Submit customer feedback.
Share user experience and suggestions.
🔐 Admin Panel

The administration dashboard provides complete control over system operations.

🎨 Artwork Management

Administrators can:

Add new artworks.
Edit artwork details.
Update artwork prices.
Modify artwork descriptions.
Change artwork images.
Delete artworks.
📋 Artwork Database Management
View all artwork records.
Maintain artwork inventory.
Manage gallery content efficiently.
📦 Order Management
View customer orders.
Track purchase details.
Monitor order history.
💬 Feedback Management
View customer feedback.
Analyze customer satisfaction.
Review suggestions and comments.
🛠️ Technologies Used
Technology	Purpose
HTML5	Structure of web pages
CSS3	Styling and responsive design
JavaScript	Client-side interactivity
PHP	Server-side processing
MySQL	Database management
Bootstrap (Optional)	Responsive UI components
🏗️ System Architecture
Customer Module
Customer
   │
   ├── View Art Gallery
   ├── View Art Details
   ├── Add to Cart
   ├── Purchase Artwork
   └── Submit Feedback
Admin Module
Administrator
   │
   ├── Manage Artworks
   │      ├── Add Art
   │      ├── Update Art
   │      └── Delete Art
   │
   ├── View Orders
   └── View Feedback
🗄️ Database Structure
Art Table
Field	Description
art_id	Unique Artwork ID
art_name	Artwork Name
description	Artwork Description
price	Artwork Price
image	Artwork Image
Orders Table
Field	Description
order_id	Order ID
customer_name	Customer Name
artwork_id	Purchased Artwork
total_amount	Order Amount
order_date	Purchase Date
Feedback Table
Field	Description
feedback_id	Feedback ID
customer_name	Customer Name
feedback_message	Feedback Content
submitted_date	Submission Date
📂 Project Structure
Online-Art-Gallery/
│
├── admin/
│   ├── dashboard.php
│   ├── manage_art.php
│   ├── orders.php
│   └── feedback.php
│
├── customer/
│   ├── gallery.php
│   ├── art_details.php
│   ├── cart.php
│   └── feedback.php
│
├── assets/
│   ├── css/
│   ├── js/
│   └── images/
│
├── database/
│   └── art_gallery.sql
│
├── includes/
│   └── db_connection.php
│
└── README.md
⚙️ Installation Guide
Prerequisites

Before running the project, ensure you have:

XAMPP / WAMP Server
PHP 7.4 or later
MySQL Database
Modern Web Browser
Setup Instructions
Step 1: Clone Repository
git clone https://github.com/your-username/online-art-gallery.git
Step 2: Move Project

Copy the project folder into:

xampp/htdocs/
Step 3: Create Database

Open phpMyAdmin and create a database:

CREATE DATABASE art_gallery;
Step 4: Import Database

Import:

database/art_gallery.sql
Step 5: Configure Database Connection

Update database credentials inside:

includes/db_connection.php
$host = "localhost";
$user = "root";
$password = "";
$database = "art_gallery";
Step 6: Run Project

Open browser:

http://localhost/online-art-gallery
📸 Screenshots
Customer Panel
Home Page
Art Gallery
Art Details Page
Shopping Cart
Feedback Form
Admin Panel
Dashboard
Artwork Management
Order List
Feedback Viewer
🔒 Security Features
Server-side form validation.
SQL Injection prevention.
Input sanitization.
Session management.
Secure database connectivity.
🎯 Future Enhancements
Online payment gateway integration.
User registration and authentication.
Wishlist functionality.
Advanced search and filtering.
Artwork categories.
Mobile application support.
Email notifications.
Sales analytics dashboard.
👨‍💻 Author

Iruka Mihishan

Full-Stack Developer
BSc (Hons) Information Technology Undergraduate
Horizon Campus
📄 License

This project is developed for educational and academic purposes.

⭐ If you found this project useful, don't forget to star the repository on GitHub! ⭐
