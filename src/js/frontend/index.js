

// let url = 'http://localhost/wp-plugin/gutenkit/dev/category/elementor/';
// let xhr = new XMLHttpRequest();

// xhr.open('GET', url, true);

// xhr.onload = function () {
//     if (xhr.readyState == 4 && xhr.status == "200") {
//         console.log('response', xhr.responseText);
//     } else {
//         console.error(xhr.responseText);
//     }
// }

// xhr.send(null);

// Select all links
const links = document.querySelectorAll('.wp-block-navigation-item__content');

// Add event listener to each link
links.forEach(link => {
    link.addEventListener('click', function(event) {
        // Prevent default action
        event.preventDefault();

        // Create new XMLHttpRequest
        let xhr = new XMLHttpRequest();

        // Initialize a GET request
        xhr.open('GET', event.currentTarget.href, true);

        // Set up onload function
        xhr.onload = function () {
            if (xhr.readyState == 4 && xhr.status == "200") {
                // Replace entire HTML document with response
                document.documentElement.innerHTML = xhr.responseText;
				// history.pushState({}, '', event.currentTarget.href);
            } else {
                console.error(xhr.responseText);
            }
        }

        // Send the request
        xhr.send(null);
    });
});