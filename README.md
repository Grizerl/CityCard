# CityCard 

CityCard is a web application designed to help users manage and view their digital city cards. Users can access various features related to their cards, transactions, trips, and more. The platform provides an easy and secure way for users to manage their card-related information.

## Technologies Used

- **Laravel**: Backend framework for routing, models, controllers, and database management.
- **Blade**: Templating engine used for rendering views.
- **MySQL**: Database system for storing user and card-related data.
- **Bootstrap**: For responsive and mobile-first design, providing pre-designed components and styles.

## Launch instructions

1. Clone the repository: `git clone https://github.com/Grizerl/CityCard.git`.
2. Change to the project folder: `cd citycard`.
3. Install the dependencies: `composer install`.
4. Configure the database connection in your .env file:
    DB_CONNECTION=mysql
    DB_HOST=your_database_host
    DB_PORT=your__database_port
    DB_DATABASE=your_database_name
    DB_USERNAME=your_database_user
    DB_PASSWORD=your_database_password
5. Run the database migrations: php artisan migrate
6. Start the Laravel development server: php artisan serve