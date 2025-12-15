# Question 16: DOM Events and Event Listening

**DOM Events** are actions or occurrences that happen in the system you are programming, which the system tells you about so you can respond to them in some way. Examples include clicking a button, hovering over an element, pressing a key, or the page finishing loading.

**Event Listening** is the process of waiting for a specific event to occur on a specific element and executing a function (callback) when it happens.

## element.addEventListener(event, function)
The `addEventListener()` method attaches an event handler to the specified element.

**Example:**
```javascript
// Select the button element
let btn = document.getElementById("myBtn");

// Add a click event listener
btn.addEventListener("click", function() {
    alert("Button was clicked!");
});

// Example with a named function
function handleMouseOver() {
    console.log("Mouse is over the element");
}

let box = document.getElementById("box");
box.addEventListener("mouseover", handleMouseOver);
```
