## Quote of the Day

# Quote of the Day official website
# Make ur day alittle bit better with our motivation


## Requirements
- Node.js (recommended version 14.x or higher)
- npm (usually comes with Node.js)
- Composer
- PHP (recommended version 7.4 or higher)
- MySQL

## Installation and Running the Project

### Step 1: Clone the Repository
First, clone the repository to your local machine:
```bash
git clone https://github.com/miseyidov25/Quote_of_the_Day
cd Quote_of_the_Day
```

### Step 2: Setup and Run the Frontend + Backend

1. Install the dependencies:
    ```bash
    npm install
    composer install
    ```

2. Start the development server:
    ```bash
    npm run dev
    ```

3. Create a `.env` file from the `.env.example` file:
    ```bash
    cp .env.example .env
    ```

4. Generate a new application key:
    ```bash
    php artisan key:generate
    ```

5. Configure the database settings in the `.env` file.

6. Run the database migrations:
    ```bash
    php artisan migrate --seed
    ```

7. Start the local server:
    ```bash
    php artisan serve
    ```

## Contact
If you have any questions contact me via email: [miseyidov25@gmail.com].
