
<h1 align="center" >todo</h1>


This is a web application that allows users to manage their tasks in an organized manner. The website is built using Laravel and includes a login and registration system to ensure secure access to user-specific tasks.

Once logged in, users can add new tasks, assign tags, and mark tasks as completed. The website's home page displays a list of all tasks, with the most recent ones displayed first. The filter feature allows users to select one or more tags to display only the matching tasks, making it easy to focus on specific categories of tasks.

The website also includes a delete feature to remove tasks entirely. This ensures that the user's task list remains organized and up-to-date.

In summary, this website provides an efficient task management system with the following features:

- Login and registration system
- Add, delete, and filter tasks based on tags
- Mark tasks as completed
- Display a list of all tasks with the most recent ones displayed first

Built using Laravel, this website provides a secure and reliable user experience.


## Installation

Install my-project with npm

```bash
  git clone https://github.com/jeeveshlodhi/laravel-todo.git
  cd laravel-todo
  composer install
  //Copy .env.example file to .env on the root folder.
  //Open .env file and add DB_DATABASE, DB_USERNAME, DB_PASSWORD
  php artisan key:generate
  php artisan migrate
  php artisan serve
```
Run following for tailwind css on a different terminal
```bash
    cd laravel-todo
    npm run dev
```
    
## Screenshots

![Main Dashboard](https://raw.githubusercontent.com/jeeveshlodhi/laravel-todo/main/images/main.jpg)

![Filtered Todo](https://raw.githubusercontent.com/jeeveshlodhi/laravel-todo/main/images/filtered.jpg)

![Create a Todo](https://raw.githubusercontent.com/jeeveshlodhi/laravel-todo/main/images/create-todo.jpg)


## Authors

- [@jeevesh](https://github.com/jeeveshlodhi)

