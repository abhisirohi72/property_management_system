# 🏢 Property Management System

A web-based **Property Management System** built with **CodeIgniter 3**, MySQL, Bootstrap, jQuery, and AJAX.

The system is designed to help property owners, property managers, agents, and businesses manage properties, tenants, rental agreements, rent collection, maintenance, expenses, and reports from a single platform.

---

## 🚀 Project Overview

The goal of this project is to build a production-ready Property Management System that can be used by small and medium-sized property management businesses.

The system will provide modules for:

* Property Management
* Property Units
* Owners Management
* Tenant Management
* Agent Management
* Rental Agreements
* Rent Invoices
* Rent Payments
* Maintenance Management
* Expense Management
* Document Management
* Notifications
* Reports
* User Roles & Permissions
* Dashboard

---

## 🛠️ Technology Stack

### Backend

* PHP
* CodeIgniter 3
* MySQL

### Frontend

* HTML5
* CSS3
* Bootstrap
* JavaScript
* jQuery
* AJAX

### Development Tools

* Git
* GitHub
* Composer
* Apache/Nginx

---

## 📋 Main Features

### 🔐 Authentication & Authorization

* Admin login
* User login
* Logout
* Session management
* Role-based access control
* Permission management
* Password hashing
* Protected routes/pages

---

### 🏠 Property Management

* Add property
* Edit property
* Delete property
* View property details
* Property types
* Property status
* Property location
* Property ownership information
* Property documents

Example property types:

* Apartment
* House
* Villa
* Commercial
* Office
* Shop
* Warehouse
* Land

---

### 🏢 Property Units

A single property can contain multiple units.

Example:

```text
Sunrise Apartments
│
├── Flat 101
├── Flat 102
├── Flat 103
└── Flat 104
```

Each unit can have:

* Unit number
* Floor
* Area
* Rent amount
* Status
* Tenant
* Agreement

---

### 👤 Owner Management

Manage property owners and their properties.

Features:

* Add owner
* Edit owner
* View owner
* Owner's properties
* Owner contact details
* Owner documents

---

### 👨‍👩‍👧 Tenant Management

Manage tenants and their rental information.

Features:

* Add tenant
* Edit tenant
* Tenant profile
* Tenant documents
* Rental history
* Payment history
* Maintenance requests

---

### 🧑‍💼 Agent Management

Manage property agents.

Features:

* Agent profile
* Assigned properties
* Assigned tenants
* Commission tracking
* Agent performance

---

### 📄 Rental Agreements

Create and manage rental agreements.

Information includes:

* Property
* Unit
* Tenant
* Start date
* End date
* Monthly rent
* Security deposit
* Agreement status
* Agreement document

---

### 💰 Rent Management

Manage monthly rent collection.

Flow:

```text
Rental Agreement
       ↓
Rent Invoice
       ↓
Payment
       ↓
Receipt
```

Features:

* Generate rent invoice
* Track pending rent
* Track paid rent
* Track overdue rent
* Partial payments
* Payment history
* Payment receipts

---

### 🔧 Maintenance Management

Tenants can raise maintenance requests.

Example:

```text
Tenant
   ↓
Maintenance Request
   ↓
Assigned Staff
   ↓
Work Started
   ↓
Completed
   ↓
Expense Recorded
```

Features:

* Create maintenance request
* Assign staff
* Priority
* Status
* Maintenance expense
* Completion date
* Notes

---

### 💳 Expense Management

Track property-related expenses.

Examples:

* Maintenance
* Electricity
* Plumbing
* Cleaning
* Security
* Repairs
* Other expenses

---

### 📁 Document Management

Upload and manage documents related to:

* Properties
* Owners
* Tenants
* Rental agreements
* Payments
* Maintenance

---

### 🔔 Notifications

The system will provide notifications for:

* New maintenance request
* Rent due
* Rent overdue
* Agreement expiry
* New payment
* Assigned property
* Assigned task

---

### 📊 Dashboard

The dashboard will display important business information.

Example:

```text
Total Properties       120
Occupied Units          85
Available Units         35
Active Tenants          82
Pending Rent            15
Overdue Rent             7
Monthly Income      ₹8,50,000
Monthly Expenses    ₹2,10,000
```

---

## 📈 Reports

The system will provide reports such as:

* Property report
* Occupancy report
* Tenant report
* Rent collection report
* Pending rent report
* Overdue rent report
* Income report
* Expense report
* Maintenance report
* Agent performance report

Reports will support date-wise filtering where required.

---

# 🗄️ Database Structure

Initial database structure:

```text
users
roles
permissions

properties
property_types
property_units

owners
tenants
agents

rental_agreements

rent_invoices
rent_payments

maintenance_requests
maintenance_expenses

expenses
documents

notifications
```

The database will be normalized and foreign-key relationships will be used wherever appropriate.

---

# 🏗️ Project Architecture

The project follows the **MVC architecture** provided by CodeIgniter 3.

```text
application/
│
├── config/
│
├── controllers/
│
├── models/
│
├── views/
│
├── libraries/
│
├── helpers/
│
├── hooks/
│
└── language/
```

---

# 🔄 Development Roadmap

## Phase 1 — Foundation

* [ ] CI3 project setup
* [ ] Database configuration
* [ ] Base URL configuration
* [ ] Routes
* [ ] Common layout
* [ ] Header
* [ ] Sidebar
* [ ] Footer

## Phase 2 — Authentication

* [ ] Users
* [ ] Roles
* [ ] Permissions
* [ ] Login
* [ ] Logout
* [ ] Sessions
* [ ] Password hashing
* [ ] Authorization

## Phase 3 — Property Management

* [ ] Property types
* [ ] Properties
* [ ] Property units
* [ ] Property status
* [ ] Property documents

## Phase 4 — People Management

* [ ] Owners
* [ ] Tenants
* [ ] Agents

## Phase 5 — Rental Management

* [ ] Rental agreements
* [ ] Rent invoices
* [ ] Rent payments
* [ ] Payment receipts
* [ ] Rent history

## Phase 6 — Maintenance

* [ ] Maintenance requests
* [ ] Staff assignment
* [ ] Maintenance status
* [ ] Maintenance expenses

## Phase 7 — Financial Management

* [ ] Expenses
* [ ] Income
* [ ] Payment tracking
* [ ] Financial reports

## Phase 8 — Notifications

* [ ] Rent reminders
* [ ] Agreement expiry reminders
* [ ] Maintenance notifications
* [ ] Email notifications

## Phase 9 — Reports & Dashboard

* [ ] Dashboard
* [ ] Property reports
* [ ] Rent reports
* [ ] Income reports
* [ ] Expense reports
* [ ] Occupancy reports

## Phase 10 — Production

* [ ] Security audit
* [ ] Validation
* [ ] Error handling
* [ ] Performance optimization
* [ ] Database optimization
* [ ] API
* [ ] Deployment
* [ ] Backup system

---

# 🔒 Security

The application will follow common web security practices:

* Password hashing
* CSRF protection
* XSS protection
* SQL injection prevention
* Input validation
* Output escaping
* Session security
* Access control
* File upload validation
* Authentication checks

---

# 🎯 Learning Objectives

While building this project, the following CodeIgniter 3 concepts will be covered:

* MVC architecture
* Controllers
* Models
* Views
* Routes
* Query Builder
* Database relationships
* Form validation
* Sessions
* Authentication
* Authorization
* Libraries
* Helpers
* Hooks
* AJAX
* File uploads
* Pagination
* Transactions
* Email
* Cron jobs
* REST APIs
* Security
* Deployment

---

# 💼 Commercial Goal

The project is designed with the possibility of converting it into a commercial product.

Potential customers:

* Property dealers
* Real estate agencies
* Property managers
* Landlords
* Rental businesses
* Apartment management companies
* Commercial property owners

Possible future versions:

```text
Basic
Professional
Enterprise
```

The application can also be customized according to individual business requirements.

---

# 📌 Future Improvements

Possible future features:

* WhatsApp notifications
* SMS notifications
* Online rent payment
* Payment gateway integration
* Tenant portal
* Owner portal
* Mobile application
* REST API
* Advanced analytics
* Multi-company support
* Multi-language support
* Multi-currency support

---

# 👨‍💻 Development Approach

This project will be developed incrementally.

Each module will be completed and tested before moving to the next module.

The focus will be on:

**Clean Code → Proper Database Design → Security → Reusable Components → Business Logic → Production Readiness**

---

## 📄 License

This project is currently being developed as a learning and commercial product project.

License details will be added before the production release.
