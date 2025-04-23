<div align='center'>
 <img style="width:100%" src="https://capsule-render.vercel.app/api?type=soft&height=200&color=FFFFFF&text=Codeigniter%20Simple%20CRUD&fontSize=50&fontAlign=50&strokeWidth=0&descAlignY=80&stroke=000000">
</div>

<h2>ABOUT CODEIGNITER</h2>
<p>CodeIgniter is a powerful PHP framework designed for developers who need a simple and elegant toolkit to build full-featured web applications. Known for its speed and small footprint, CodeIgniter provides a rich set of libraries and helpers for common tasks, making development faster and more efficient.</p>
<img src="https://skillicons.dev/icons?i=php,&perline=20" />

## About This Project

This project is a simple blog system built using CodeIgniter, designed to demonstrate CRUD (Create, Read, Update, Delete) operations in a clean and easy-to-understand way. It serves as a learning resource for developers who want to understand the basics of how MVC frameworks work, how to interact with databases, and how to manage routes and views efficiently using CodeIgniter.

The goal is to provide a solid foundation for beginners, or a quick-start template for those who want to expand it into something bigger.

## Features

- **Create a Post**: Allows users to create new posts by providing a title and content.
- **View Posts**: Displays a list of all posts.
- **View a Specific Post**: Displays detailed information about a single post.
- **Update a Post**: Allows users to update the title and content of an existing post.
- **Delete a Post**: Allows users to delete a post after confirming.

## Setup

### Prerequisites

- PHP 7.4 or higher
- Composer for managing dependencies
- CodeIgniter 4 framework installed

### Installation

1. Clone the repository to your local machine.
   ```bash
   git clone https://github.com/EltonRuan/codeignitersimplecrud
   ```

2. Navigate to the project directory.
   ```bash
   cd codeignitersimplecrud
   ```

3. Install the dependencies.
   ```bash
   composer install
   ```

4. Set up your database and configure the `.env` file for database credentials.

5. Run the built-in CodeIgniter development server:
   ```bash
   php spark serve
   ```

### Database Configuration

This project requires a database to store post information. Update the `.env` file with your database credentials:

```env
database.default.hostname = localhost
database.default.database = postdb
database.default.username = root
database.default.password = 
database.default.DBDriver = MySQLi
database.default.DBPrefix =
database.default.port = 3306
```

### Database Structure

The project uses a `posts` table with the following columns:

- `id` (INT, Primary Key, Auto Increment)
- `title` (VARCHAR)
- `content` (TEXT)
- `created_at` (TIMESTAMP)
- `updated_at` (TIMESTAMP)

### Migration and Seeder

To set up the database structure, run the following commands to create the migration and seeder:

1. **Run Migration**:
   ```bash
   php spark migrate
   ```

2. **Run Seeder** to populate the `posts` table with sample data:
   ```bash
   php spark db:seed PostsSeeder
   ```

The migration will create the necessary table (`posts`), and the seeder will add sample posts to the database.

### Routes

Here are the routes available in the project:

- **GET /**: Displays all posts.
- **GET /create**: Displays the form to create a new post.
- **POST /create**: Creates a new post.
- **GET /posts/{id}**: Displays a specific post by ID.
- **GET /posts/{id}/edit**: Displays the form to edit an existing post.
- **POST /posts/{id}/edit**: Updates the post.
- **GET /posts/{id}/delete**: Displays the confirmation page to delete a post.
- **POST /posts/{id}/delete**: Deletes the post.

## Code Explanation

### Controller: `PostController`

The `PostController` class handles all the operations related to posts. The following methods are defined:

1. **`getDataPost()`**: Retrieves and displays all posts.
2. **`createPostView()`**: Displays the form to create a new post.
3. **`createData()`**: Handles the form submission to create a new post. It validates the input fields and inserts the data into the database.
4. **`postUniqueView($id)`**: Displays a specific post by ID.
5. **`updatePostView($id)`**: Displays the form to update an existing post.
6. **`updatePost($id)`**: Handles the form submission to update the post. It validates the input and updates the data in the database.
7. **`deletePostView($id)`**: Displays the confirmation page to delete a post.
8. **`deletePost($id)`**: Deletes the post from the database.

### Views

The views in this project are simple HTML pages with embedded PHP for dynamic content. The views include:

- **`posts`**: Displays a list of all posts.
- **`create_post`**: A form to create a new post.
- **`post_unique`**: Displays a specific post.
- **`post_update`**: A form to edit a post.
- **`post_delete`**: A confirmation page to delete a post.

### Validation and Error Handling

- All forms require the user to input both a title and content. If any of these fields are missing, an error message will be displayed.
- Success and error messages are displayed using CodeIgniter's session flashdata functionality.

## Contributing

Feel free to fork the repository and contribute to it by opening pull requests. If you encounter any bugs or have suggestions for improvements, please create an issue.

### Copyright

© 2025 EltonRuan. All rights reserved.
