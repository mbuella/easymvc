# Codenames

**MVC** stands for *Model-View-Controller*, an approach of simplifying HTML/PHP app development aimed at reducing development time, improving file organization, better dealing with errors and maintaining the reusability of the code.

This example has been created under guidance of this [article][1].

Change log:

**v1.1: First version [03.08.2017]**
 * Individual user account information in tabular form.
 * Registered user count.
 * Simple user sign-in feature.
 * Auth of signin credentials is now redirected to the info page.
 * Signed in users can now signout from their sessions.
 * The new homepage shows users options to signin and signup.
 * Illegal access of the user url is now handled properly.

**v1.1: Add signup module [03.09.2017]**
 * Integrated a signup module for new users
 * The condition for routing has been changed to a switch statement for better clarity
 * The title for this website has been set to ***Codenames***.
 
**v1.2: Apply styles using Bootstrap 3 [03.12.2017]**
 * Added responsive design for desktop using Bootstrap 3
 * Improved error message display for signin and signup module
 * Added some custom CSS styles

**v2.0: Create the official repo for the project [03.22.2017]**
 * This project now enjoys its own [Github repository][2] and was granted the **GPL-3.0 license**.

**v2.1: Restructure repo file tree [03.22.2017]**
 * To better control code privacy, the repository now have two main folders: `public/` and `src/`. In `public` folder the front controller (`index.php`), as well as the client-side assets (e.g. CSS/JavaSript) is found. On the other hand, backend-related scripts such as models, controllers and views reside on the `src` folder. To ensure HTTP requests are routed properly, the [.httaccess file][3] is placed at the root of the repo.


[//]: # (Links)
[1]: https://goo.gl/dnS89W						"Symfony versus Flat PHP "
[2]: https://github.com/mbuella/easymvc			"easymvc Github repository"
[3]: https://goo.gl/luxcq6						".htaccess file"
