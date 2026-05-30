# 🎨 Online Art Gallery Management System

<p align="center">
  <img src="https://img.shields.io/badge/PHP-Backend-blue?style=for-the-badge&logo=php">
  <img src="https://img.shields.io/badge/MySQL-Database-orange?style=for-the-badge&logo=mysql">
  <img src="https://img.shields.io/badge/HTML5-Frontend-red?style=for-the-badge&logo=html5">
  <img src="https://img.shields.io/badge/CSS3-Styling-blue?style=for-the-badge&logo=css3">
  <img src="https://img.shields.io/badge/JavaScript-Interactive-yellow?style=for-the-badge&logo=javascript">
</p>

<p align="center">
  A complete web-based Art Gallery Management System developed using PHP, MySQL, HTML, CSS, and JavaScript.
</p>

---

# 📖 Project Overview

The **Online Art Gallery Management System** is a modern web application designed to provide a digital platform for displaying, managing, and selling artworks online.

The system consists of two major modules:

- 👤 Customer Panel
- 🔐 Admin Panel

Customers can browse available artworks, view detailed information, purchase artworks, manage their shopping cart, and provide feedback.

Administrators have full control over the gallery, including artwork management, order monitoring, and feedback review.

---

# ✨ Key Features

## 👤 Customer Panel

### 🎨 Art Gallery
- Browse available artworks
- View artwork images
- Explore art collections
- Responsive gallery layout

### 📄 Artwork Details
- Artwork title
- Artwork image
- Price information
- Detailed description
- Artist information (Optional)

### 🛒 Shopping Cart
- Add artworks to cart
- Remove artworks from cart
- View cart summary
- Calculate total amount

### 💳 Order Management
- Purchase artworks
- View order details
- Order confirmation process

### ⭐ Feedback System
- Submit feedback
- Share suggestions
- Customer experience review

---

## 🔐 Admin Panel

### 🎨 Artwork Management

Administrators can:

- Add new artworks
- Edit artwork details
- Update prices
- Update descriptions
- Change artwork images
- Delete artworks

### 📋 Gallery Management

- View all artworks
- Manage artwork records
- Maintain gallery database

### 📦 Order Management

- View customer orders
- Monitor order history
- Manage purchase records

### 💬 Feedback Management

- View customer feedback
- Analyze customer suggestions
- Improve customer satisfaction

---

# 🛠️ Technologies Used

| Technology | Purpose |
|------------|----------|
| HTML5 | Structure of web pages |
| CSS3 | Styling and responsive design |
| JavaScript | Client-side functionality |
| PHP | Server-side scripting |
| MySQL | Database management |
| Bootstrap | Responsive UI components |
| Apache | Web server |

---

# 🖥️ System Modules

## Customer Module

```text
Customer
│
├── Home Page
├── Art Gallery
├── Art Details
├── Shopping Cart
├── Purchase Artwork
└── Submit Feedback
```

## Admin Module

```text
Administrator
│
├── Dashboard
├── Manage Artworks
│     ├── Add Artwork
│     ├── Edit Artwork
│     ├── Delete Artwork
│     └── Update Artwork
│
├── View Orders
└── View Feedback
```

---

# 📂 Project Structure

```text
Online-Art-Gallery/
│
├── admin/
│   ├── dashboard.php
│   ├── manage_art.php
│   ├── add_art.php
│   ├── edit_art.php
│   ├── delete_art.php
│   ├── orders.php
│   └── feedback.php
│
├── customer/
│   ├── gallery.php
│   ├── art_details.php
│   ├── cart.php
│   ├── checkout.php
│   └── feedback.php
│
├── assets/
│   ├── css/
│   ├── js/
│   ├── images/
│   └── uploads/
│
├── database/
│   └── art_gallery.sql
│
├── includes/
│   ├── db_connection.php
│   └── functions.php
│
├── index.php
└── README.md
```

# ⚙️ Installation Guide

## 📋 Requirements

Before running the project, install:

- PHP 8.0 or later
- MySQL / MariaDB
- Apache Server
- XAMPP (Recommended)

---

# 🚀 XAMPP Installation

## Step 1: Download XAMPP

Download XAMPP from:

https://www.apachefriends.org/

---

## Step 2: Install XAMPP

Select the following components:

✅ Apache

✅ MySQL

✅ PHP

✅ phpMyAdmin

## Step 3: Start Services

Open XAMPP Control Panel and start:

- Apache
- MySQL

# 🚀 Future Enhancements

- User Registration & Login
- Online Payment Gateway
- Artwork Categories
- Search & Filtering
- Wishlist System
- Email Notifications
- Sales Reports
- Analytics Dashboard
- Mobile Application

---

<p align="center">
  Made with ❤️ using PHP, MySQL, HTML, CSS & JavaScript
</p>
