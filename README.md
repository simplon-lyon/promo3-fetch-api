# Fetch API
A simple API using fetch.

## Instructions

1. create a page `index.html` containing a form with:
    - an `input` for a title
    - a `textarea` for an article
    - a `button` to submit the form
2. add a `script` element wich will:
    - listen for `click` event on the button
    - stop the event propagation (the page must not reload when you click on the button)
    - send a POST request to `new-article.php` with the form content
3. create a page `new-article.php` wich:
    - check for the presence of `title` and `content` in the `$_POST` variable and return the appropriate HTTP code if the parameters are missing
