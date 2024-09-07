# LiteFlare

**LiteFlare** is a lightweight PHP framework designed for simplicity, inspired by Laravel and CodeIgniter. It includes basic routing, database querying, and templating using Smarty, making it perfect for small-to-medium projects.

## Key Features

- **Custom Routing System**: Easily map URLs to specific controller methods.
- **Fluent Database Queries**: Use a simple query builder to interact with your MySQL database.
- **Smarty Templating**: Utilize Smarty for clean separation of logic and views.
- **Environment Configuration**: Securely manage environment variables using `.env` files.
- **PSR-4 Autoloading**: Automatically load classes using Composer's PSR-4 standard.

## System Requirements

LiteFlare is designed to run on most modern web servers that support PHP and MySQL. The minimum requirements are:

- **Operating System**: Linux, Windows, or macOS
- **PHP Version**: 7.4 or higher
- **PHP Extensions**:
  - PDO
  - MySQLi
  - GD
  - Curl
  - Zip
  - Mbstring
- **Database**: MySQL 5.6 or higher
- **Composer**: Required for dependency management

## Installation

Follow these steps to install LiteFlare:

1. **Clone the repository**:

   ```bash
   git clone https://github.com/peterrongsite/PHP-Liteflare.git
   cd PHP-Liteflare
