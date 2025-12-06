# Basic Order System

Simple PHP-based canteen ordering demo implementing registration, login, and a small ordering flow — styled to match provided screenshots.

**Preview:** The app shows a large-font `Login` / `Register` UI, then a `Menu` page with prices, an inline order form (item / quantity / cash), and a small confirmation page showing total and change.

**Requirements**
- **PHP 7.2+**: Running on a local server (XAMPP, WAMP) or PHP built-in server.
- **Web server** (recommended): XAMPP (Apache + PHP) for easy local testing.

**Installation**
- Copy the `Basic_Order_System` folder into your webserver document root (for XAMPP that is `C:\xampp\htdocs`).

**Run (XAMPP)**
- Start Apache via the XAMPP control panel.
- Open a browser and go to:
  ```
  http://localhost/Basic_Order_System/
  ```

**Run (PHP built-in server)**
- From PowerShell in the folder that contains `Basic_Order_System`, run:
  ```powershell
  php -S localhost:8000 -t .\Basic_Order_System
  ```
- Then open `http://localhost:8000/`.

**Usage**
- Click `Register` and create a username/password (stored in the MySQL `users` table, password hashed).
- Login with the registered credentials.
- On the `Menu` page choose an item, enter quantity and cash, then submit to see total and change.

**Files**
- `index.php` — login page
- `register.php` — register form
- `register_action.php` — registration handler (uses `db.php` / MySQL)
- `login_action.php` — login handler (uses `db.php` / MySQL)
- `menu.php` — prices and ordering form
- `order.php` — calculates total and change, shows confirmation
- `logout.php` — clears session
- `styles.css` — simple styles to match screenshots
- `db.php` — database connection (PDO)

**Security notes**
- This is a demo app. Use a proper production-ready setup for real deployments.
- Passwords are hashed using PHP's `password_hash`. Add CSRF tokens, stricter input validation, HTTPS, and secure session cookie flags for production.
