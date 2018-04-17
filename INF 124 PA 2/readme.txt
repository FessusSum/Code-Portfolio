URL: http://andromeda-19.ics.uci.edu:5019/Testbed/NewFile1.php

Front page: Contains the product catalog as well as tabs leading to About, Founders, and Payment/Shipping. Click on product image or 
"learn more" to go to product page.

About: About Project MOBIUS

Founders: Short description of the three founders of Project MOBIUS

Payment/Shipping: Description of payment methods and shipping options.

Product Page: Holds detailed information about the product as well as the order form.

Confirm Form: Holds details of the order as well as the confirm button.

Processed Form: Holds details of order as well as a return button to the Front Page.


Req 1: Within product pages and main pages, all information is now gathered from the database to display on the website.

Req 2: On product pages, filling the order form and clicking submit will take the user to a confirm page. Confirming will take the user to a processed page while sending the order info to the database.

Req 3: As stated above, there is a confirmation page with relevant details of the order.

Req 4: Ajax used in two places, both on the order form found in the product pages. Entering a zip code will auto complete city and state fields. Ajax is also used to automatically display products from the same manufacturer as well as links to those product pages. See functions ajax_post() and ajax_city().