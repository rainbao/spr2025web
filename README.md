# Chick-n-Byte Restaurant Management System

A comprehensive full-stack web application for a restaurant ordering and management system, featuring customer-facing ordering interfaces and staff management dashboards.

## 🚀 Features

### Customer Features
- **Online Ordering System**: Complete menu browsing with pickup/delivery options
- **User Authentication**: Secure registration and login system with session management
- **Shopping Cart**: Real-time cart management with quantity updates
- **Order Tracking**: Live order status updates from preparation to delivery
- **Location Services**: Google Maps integration for address validation and store location
- **Responsive Design**: Mobile-friendly interface for all device types

### Staff Features
- **Role-Based Access Control**: Separate dashboards for kitchen staff, delivery drivers, and managers
- **Order Management**: Real-time order queue with status updates
- **Delivery Assignment**: Manager dashboard for assigning orders to delivery drivers
- **Employee Management**: Manager tools for creating and managing staff accounts
- **Kitchen Dashboard**: Streamlined interface for order preparation tracking

## 🛠 Technology Stack

### Frontend
- **HTML5/CSS3**: Semantic markup and modern styling
- **JavaScript**: Interactive features and API integrations
- **Google Maps API**: Location services and mapping functionality
- **Responsive Design**: Cross-device compatibility

### Backend
- **PHP**: Server-side logic and session management
- **MySQL**: Relational database with normalized table structure
- **Session Management**: Secure user authentication and authorization

### Database Design
- Users and authentication management
- Menu items with detailed product information
- Order processing and tracking system
- Staff role management
- Shopping cart persistence

## 📁 Project Structure

```
cnbsite/
├── index.php              # Main landing page
├── menu.php               # Product catalog
├── order.php              # Ordering interface
├── cart.php               # Shopping cart management
├── checkout.php           # Payment processing
├── order_tracking.php     # Order status tracking
├── config/
│   └── db_config.php      # Database configuration
├── phpscripts/            # Backend logic
│   ├── signin_handler.php
│   ├── signup_handler.php
│   ├── process_checkout.php
│   └── order_tracking_handler.php
├── staff/                 # Staff management system
│   ├── manager_dashboard.php
│   ├── kitchen_dashboard.php
│   ├── delivery_dashboard.php
│   └── staff_scripts/     # Staff backend logic
└── sql/
    └── database_tables.sql # Database schema
```

## 🗃 Database Schema

The system uses a normalized MySQL database with the following key tables:
- `users` - Customer account management
- `menu_items` - Product catalog
- `orders` - Order processing and tracking
- `order_items` - Order line items
- `cart` - Shopping cart persistence
- `staff` - Employee management with role-based access

## 🚀 Installation & Setup

1. **Clone the repository**
   ```bash
   git clone https://github.com/rainbao/spr2025web.git
   cd cnbwebsite
   ```

2. **Set up the database**
   ```bash
   mysql -u username -p < sql/database_tables.sql
   ```

3. **Configure database connection**
   - Update `config/db_config.php` with your database credentials

4. **Set up Google Maps API**
   - Obtain a Google Maps API key
   - Update the API key in `order.php`

5. **Deploy to web server**
   - Upload files to your PHP-enabled web server
   - Ensure proper file permissions

## 📱 Usage

### For Customers
1. Browse the menu and add items to cart
2. Choose pickup or delivery option
3. Complete checkout process
4. Track order status in real-time

### For Staff
1. Log in with role-specific credentials
2. Access appropriate dashboard based on role
3. Manage orders according to assigned responsibilities

## 👥 Team Collaboration & Agile Development

This project was developed as a **collaborative team effort with 4 team members** following **Agile development principles** over the course of a semester. Our team successfully delivered a production-ready restaurant management system through structured sprint cycles and iterative development.

### Agile Methodology Implementation
- **Sprint Planning**: Conducted 2-week sprints with clearly defined user stories and acceptance criteria
- **Daily Standups**: Regular team synchronization meetings to discuss progress, blockers, and next steps
- **Sprint Reviews**: End-of-sprint demonstrations showcasing completed features to stakeholders
- **Retrospectives**: Continuous improvement sessions to refine team processes and collaboration

### Team Structure & Responsibilities
- **Frontend Specialist**: Responsible for UI/UX design, responsive layouts, and client-side functionality
- **Backend Developer**: Focused on PHP server logic, database operations, and API development
- **Database Architect**: Designed schema, optimized queries, and managed data integrity
- **Integration Lead**: Coordinated API integrations, testing, and deployment processes

### Collaborative Tools & Practices
- **Version Control**: Git workflow with feature branches and pull request reviews
- **Project Management**: Agile project tracking with user story mapping and backlog prioritization
- **Code Reviews**: Peer review process ensuring code quality and knowledge sharing
- **Documentation**: Collaborative documentation including technical specifications and user guides

### Key Achievements
- **On-Time Delivery**: Successfully delivered all planned features within the semester timeline
- **Quality Assurance**: Maintained high code quality through pair programming and code reviews
- **Stakeholder Communication**: Regular demos and feedback incorporation from project stakeholders
- **Problem Solving**: Collaborative troubleshooting and solution design for technical challenges

## 🎯 Resume Bullet Points

When adding this project to your resume, consider these professional bullet points:

**Full-Stack Web Development:**
- Developed a comprehensive restaurant management system using PHP, MySQL, HTML5/CSS3, and JavaScript
- Implemented secure user authentication and session management for customer and staff portals
- Designed and normalized MySQL database schema with 6+ interconnected tables for order processing

**Frontend Development:**
- Created responsive, mobile-friendly user interfaces using semantic HTML5 and modern CSS3
- Integrated Google Maps API for location services and address validation functionality
- Implemented dynamic shopping cart with real-time updates using JavaScript and AJAX

**Backend Development:**
- Built robust PHP backend with MVC architecture patterns for order processing and user management
- Developed RESTful API endpoints for cart management, order tracking, and staff operations
- Implemented role-based access control system with three distinct user roles (customer, staff, manager)

**Database Design & Management:**
- Designed normalized relational database schema supporting complex order management workflows
- Implemented data integrity constraints and foreign key relationships across multiple tables
- Optimized database queries for efficient order processing and real-time status updates

**System Architecture:**
- Architected multi-role application supporting customer ordering, kitchen operations, and delivery management
- Implemented real-time order tracking system with status updates across multiple stakeholders
- Designed scalable file structure with modular PHP components for maintainable codebase

**Project Management & Integration:**
- Integrated third-party APIs (Google Maps) for enhanced user experience and location services
- Developed comprehensive staff management system with employee creation and order assignment features
- Implemented secure checkout process with order confirmation and tracking capabilities

**Team Collaboration & Agile Development:**
- Led collaborative development with 4-person team using Agile methodology and 2-week sprint cycles
- Facilitated daily standups, sprint planning, and retrospectives to ensure on-time project delivery
- Conducted peer code reviews and pair programming sessions to maintain high code quality standards
- Coordinated cross-functional team responsibilities including frontend, backend, database, and integration work
- Utilized Git version control with feature branching and pull request workflows for seamless collaboration
- Delivered production-ready application within semester timeline through iterative development and stakeholder feedback

## 🤝 Contributing

This project was developed as part of a group project. Contributions and improvements are welcome!

## 📄 License

This project is for educational purposes and portfolio demonstration.
