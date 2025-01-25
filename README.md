<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About PayFlow

**PayFlow** is a simple payment system developed with **Laravel** that simulates integration with various payment methods like credit cards, bank transfers, and others. It allows asynchronous transaction processing using **Redis** as the message queue and **cache** to optimize performance.

This project demonstrates skills in API integration, queue management with Redis, and cache optimization, all without incurring additional costs.

---

## **Technologies Used**
- **Laravel:** PHP framework for backend development.
- **MySQL/MariaDB:** Relational database for storing transaction data.
- **Redis:** Cache storage and message queue management.
- **Stripe/PayPal API:** Simulated payment gateway integration.

---

## **Main Features**
1. **User Registration:**
   - Users can register with personal details and payment information.
   - Payment data is securely stored using encryption.

2. **Transaction Recording:**
   - Transactions are recorded in the database with status (pending, completed, failed).
   - The system updates the transaction status after payment confirmation.

3. **Payment API Integration:**
   - Simulated integration with **Stripe** or **PayPal** for processing payments.
   - Payment receipts are generated after completion.

4. **Asynchronous Processing with Redis:**
   - Redis queues are used to process payments asynchronously.
   - Transaction status is updated after processing.

5. **Cache with Redis:**
   - Temporary data is cached using Redis to improve system performance.

6. **Monitoring with PM2:**
   - The Laravel process is managed with **PM2** to ensure high availability and performance.

---

## **Installation and Setup**

### **Prerequisites**
- **PHP 8.0+**
- **Composer** (PHP dependency manager)
- **MySQL/MariaDB**
- **Redis** (Install Redis locally or use a free instance like Redis Labs)
- **PM2** (Node.js process manager)

### **Installation Steps**

1. **Clone the Repository**
   - Clone the repository to your working directory:
     ```bash
     git clone https://github.com/usuario/payflow.git
     cd payflow
     ```

2. **Install Dependencies**
   - Install Laravel dependencies:
     ```bash
     composer install
     ```

3. **Configure Database**
   - Create a MySQL/MariaDB database and update the `.env` file with your credentials:
     ```dotenv
     DB_CONNECTION=mysql
     DB_HOST=127.0.0.1
     DB_PORT=3306
     DB_DATABASE=payflow
     DB_USERNAME=root
     DB_PASSWORD=
     ```

4. **Configure Redis**
   - In the `.env` file, configure Redis:
     ```dotenv
     CACHE_DRIVER=redis
     SESSION_DRIVER=redis
     QUEUE_CONNECTION=redis
     ```

5. **Configure Stripe/PayPal**
   - Set up API credentials in the `.env` file:
     ```dotenv
     STRIPE_KEY=your-stripe-key
     STRIPE_SECRET=your-stripe-secret
     PAYPAL_CLIENT_ID=your-paypal-client-id
     PAYPAL_SECRET=your-paypal-secret
     ```

6. **Run Migrations**
   - Execute the migrations to create the necessary tables:
     ```bash
     php artisan migrate
     ```

7. **Install and Configure PM2**
   - Install PM2 globally:
     ```bash
     npm install pm2@latest -g
     ```
   - Start the Laravel application with PM2:
     ```bash
     pm2 start php artisan serve --name "payflow"
     ```

---

## **Using the System**

1. **User Registration:**
   - Access the registration page and enter user details.
   - The system will register the user and payment details.

2. **Transaction Registration:**
   - The user can initiate a payment transaction.
   - The system will send a request to the payment API (e.g., Stripe).
   - The transaction status will be updated accordingly.

3. **Asynchronous Processing with Redis:**
   - The transaction will be queued in Redis for asynchronous processing.
   - The status will be updated once processing is complete.

4. **Monitoring and Performance:**
   - The system is monitored with PM2 to ensure the Laravel process is always running.

---

## **Testing**
- **Payment API Integration Tests:** Test the communication with payment APIs (Stripe or PayPal).
- **Queue Tests (Redis):** Verify that transactions are processed correctly via queues.
- **Cache Tests (Redis):** Ensure data is being cached and retrieved correctly from Redis.

---

## **Conclusion**
**PayFlow** is a simple and efficient payment system that uses **Redis** for message queues and cache, making it a cost-effective solution for handling payments. The project demonstrates skills in API integration, asynchronous processing, and performance optimization. It can be expanded to include additional features such as real-time notifications, detailed transaction reports, and more.

---

## **Laravel Sponsors**

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### **Premium Partners**

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

---

## **Contributing**

Thank you for considering contributing to the PayFlow project! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## **Code of Conduct**

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## **Security Vulnerabilities**

If you discover a security vulnerability within PayFlow, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## **License**

The PayFlow project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
