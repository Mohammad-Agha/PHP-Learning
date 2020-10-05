# PHP Forms

#### Form Handling

* When processing a form think of user's security

* GET vs. POST

    GET | POST
    --- | ----
    Array of variables passed via the URL parameters | Array of variables passed via the HTTP POST method
    **Visible** to everyone | **Invisible** to others
    Used for Insensitive data | Used for Sensitive data
    2000 characters limitation | No limits
    Because the variables are displayed in the URL, its possible to bookmark the page | Not possible to bookmark the page

### Form Validation

* The $_SERVER["PHP_SELF"] is a super global variable that returns the filename of the currently executing script

* The htmlspecialchars() function converts special characters to HTML entities. This means that it will replace HTML characters like < and > with &lt; and &gt;. This prevents attackers from exploiting the code by injecting HTML or Javascript code (Cross-site Scripting attacks) in forms.

* This will protect us from: Cross-site scripting (XSS) is a type of computer security vulnerability typically found in Web applications. XSS enables attackers to inject client-side script into Web pages viewed by other users.

* Notice that at the start of the script, we check whether the form has been submitted using $_SERVER["REQUEST_METHOD"]. If the REQUEST_METHOD is POST, then the form has been submitted - and it should be validated. If it has not been submitted, skip the validation and display a blank form.

### Form Required

* If the user tries to submit the form without filling the required fields, an error will be showed.

### Form Validation (Name, Email, URL)

* Name should only contain letters and whitespace

* Emails should be well formed

* URLs should be well formed

### Form Complete

If you noticed whenever we submit the form all the data in the input fields are gone, we will workout how to keep the values when the form is submitted
