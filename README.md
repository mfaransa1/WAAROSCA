
# WAAROSCA Management System

## 🔍 Overview

**WAAROSCA** is a streamlined web-based management system tailored for SACCOs (Savings and Credit Cooperative Organizations) or table banking groups. It enables efficient tracking and handling of member contributions, savings, and loan operations. Designed with usability and access control in mind, the platform supports multiple user roles with varying levels of access to ensure secure and organized financial management.

This system is ideal for small to medium-sized cooperative societies seeking to digitize their financial operations without the complexity of larger ERP systems.

---

## 👥 Roles & Access Levels

The application defines three distinct roles, each with its own responsibilities and access:

### ✅ Member
- Securely log in to their personal account.
- View and manage their contributions and savings.
- Apply for loans directly through the system.

### ✅ Admin
- Full administrative access to the platform.
- Manage user accounts: add or remove members.
- Approve, reject, or review loan applications.
- Monitor overall system activity and financial summaries.

### ✅ Staff (Support Role)
- Limited administrative functionality.
- Typically used for support or operational tasks.

---

## 🔐 Demo Login Credentials

Use the following credentials to test or demo the application:

### Admin Account
- **Email:** `admin@gmail.com`
- **Password:** `Aumnchde2`

### Staff Account
- **Email:** `test@gmail.com`
- **Password:** `Tuwxmghn1`

> ⚠️ For security, please change credentials in production environments.

---

## 🚀 Features

### 🧾 Member Features
- User-friendly dashboard for financial activity.
- View and track personal savings and contributions.
- Apply for new loans and track application status.

### 🛠️ Admin Features
- Full control panel for member and loan management.
- Add, edit, or remove users.
- View loan applications and manage disbursement or rejection.

### 🔌 Payment Integration
WAAROSCA supports integration with several popular payment platforms:
- **PayPal** – For international digital payments.
- **M-Pesa** – For mobile money transactions, primarily in East Africa.
- **Other Local Payment Gateways** – Custom integrations based on the region.

---

## 🤝 Support & Contribution

We welcome contributions, feedback, or collaboration from developers, financial groups, or SACCO stakeholders.

Feel free to reach out via [insert your preferred contact info or GitHub Discussions/Issues].

---

## 📌 Getting Started



## 🛠️ Getting Started

Follow these instructions to set up and run the WAAROSCA Management System on your local machine for development or testing purposes.

### 📋 Prerequisites

Ensure you have the following installed:

- [PHP (>= 7.4 or 8.x)](https://www.php.net/)
- [Composer](https://getcomposer.org/)
- [MySQL / MariaDB](https://www.mysql.com/)
- [Node.js & npm](https://nodejs.org/)
- [Git](https://git-scm.com/)

Optional (for payment integrations):
- M-Pesa Daraja API credentials
- PayPal Developer credentials

---

## 🚀 Installation Guide

### 1. Clone the Repository

```bash
git clone https://github.com/your-username/WAAROSCA-System.git
cd WAAROSCA-System
```

### 2. Install PHP Dependencies

```bash
composer install
```

### 3. Configure Environment

Copy the example environment file and configure your settings:

```bash
cp .env.example .env
```

Edit `.env` and update:

- **Database credentials**
- **Mail settings (optional)**
- **Payment gateway keys (optional)**

Example:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=waarosca
DB_USERNAME=root
DB_PASSWORD=yourpassword
```

### 4. Generate Application Key

```bash
php artisan key:generate
```

### 5. Run Migrations and Seed Database

```bash
php artisan migrate --seed
```

This will create the necessary tables and seed initial users (e.g., admin and test accounts).

### 6. Install Frontend Dependencies

```bash
npm install && npm run dev
```

### 7. Start the Development Server

```bash
php artisan serve
```

Your app should now be running at `http://localhost:8000`.

---

## 📦 Optional Configuration

To use M-Pesa or PayPal:

- Set the appropriate environment variables for your API credentials.
- Ensure proper callback URLs are configured in your Daraja/PayPal developer dashboard.

---

## 🧪 Testing the Application

You can now log in using the demo credentials provided:

- **Admin:** `admin@gmail.com` / `Aumnchde2`
- **Staff:** `test@gmail.com` / `Tuwxmghn1`



