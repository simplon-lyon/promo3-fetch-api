# Fetch API
A simple API using fetch.

## Instructions: Post Form

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

## Instructions: Post An Article

An API is available at `http://192.168.1.152:8080/`, you can get the code at [https://github.com/aitva/blog-api](). You will need to update `index.html` to:

1. extract the data from your form into a JS object
2. transform the object into a JSON string
3. use fetch to send the JSON string to the following URL: [http://192.168.1.152:8080/article/]():
    - the server expects an URL parameter: `id={name}`
    - the server expects a valid `Content-Type`
    - the server will answer using HTTP status

## Instructions: Get All Articles

Once we have sent our data to the API we are able to retrive them at [http://192.168.1.152:8080/articles/]()
and update our page to display the articles. You will need to update `index.html` to:

1. add a `section` element to display the article
2. add a _display_ function in a `script` to:
    - retrieve data from the server using `fetch`
    - transform the data into a JS object
    - loop over the object and create an `article` containing a `title` and a `p`
3. call _display_ when you start the script
4. call _display_ when the user post a new article

## Instructions: Delete An Article

Now that we are able to display our articles, we might want to delete
them. We will need to update `index.html` to:

1. update the _display_ function to:
    - create a `button` for each `article`
    - set a `click` listener on each `button`
    - send a request to the server to delete the article
2. delete all the article:
    - create a `button` somewhere on the webpage
    - create a `click` listener on the `button` to:
        - send a request to the server to delete all articles 

## Bonus: Get Articles As XML

As a bonus, you can get the articles as XML. You will need to access `/articles/{id}` sending the HTTP header `Accept` with the value `text/xml`.