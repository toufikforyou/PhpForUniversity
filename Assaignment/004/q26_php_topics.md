# Question 26: PHP Topics

## 1. Superglobals in PHP
Superglobals are built-in variables that are always available in all scopes. They are predefined arrays.

**Examples:**
*   `$GLOBALS`: References all variables available in global scope.
*   `$_SERVER`: Holds information about headers, paths, and script locations.
*   `$_POST`: Collects data from the HTML form with method="post".
*   `$_GET`: Collects data from the HTML form with method="get".
*   `$_SESSION`: Stores session variables.

## 2. GET method and POST method in PHP
*   **GET Method:** Sends information to the server via the URL parameters. It is visible to everyone (in the browser's address bar) and has limits on the amount of information to send.
    *   *Example:* `search.php?query=apple`
*   **POST Method:** Sends information to the server via the HTTP headers. It is invisible to others and has no limits on the amount of information to send. It is more secure for sensitive data like passwords.

## 3. Filter and Validation in PHP
*   **Validation:** Checks if the data meets certain criteria (e.g., is the email format correct?).
*   **Sanitization (Filtering):** Removes illegal characters from the data.
PHP provides `filter_var()` function for both.

**Example:**
```php
$email = "toufik.h@uttarauniversity.edu.bd";
// Validate email
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  echo "Invalid email format";
}
```

## 4. include and require in PHP
Both are used to insert the content of one PHP file into another PHP file.
*   **require:** Will produce a fatal error (E_COMPILE_ERROR) and stop the script if the file cannot be found.
*   **include:** Will only produce a warning (E_WARNING) and the script will continue to execute if the file cannot be found.
