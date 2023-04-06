# Review-Monitoring
Our system "Shop Genuine" focuses on how to detect fake reviews for a
particular product. We have built a web application where as of now we have
added various electronic products such as:
1) Mobile phones
2) Laptops and
3) Tablets.

But we can extend this functionality further by adding some more categories
such as clothings, home appliances, footwear, books, groceries and many more.
How to use our website:

● Firstly, you need to have XAMPP installed on your system.

● You could start Apache and MySQL server in the xampp

● You need to put the given “web” folder in C:\xampp\htdocs.

● You would also need to import database provided by us in
“phpmyadmin” under the name “database1”.

● Now in your web browser you could type
“ http://localhost:8080/web/index.php ” in URL and easily access all the
features of our website.

For users in the same network:

● As we are running xampp server on our system, all users in the same
network as ours can access our website with the url “
http://172.31.153.39/web/index.php ”.

● Here 172.31.153.39 is the IP address of our system where xampp server is
currently running.

Directions For User:
1. First of all you need to register into our website.
2. Then login using your registered ‘email id’ and ‘password’.
3.After you login, you can view all the products along with its
description,highlighted features,price and reviews.
3. If you wish, you can buy the product by clicking ‘ Buy Now ’ then it will
redirect you to some famous online shopping websites.
4. Only registered users can write review for the products. But any web user can
view products and reviews on them.
5. You can review the product of your choice and be sure that the reviews you
are writing is not fake.

We assure our users that the reviews they see on our website are
completely genuine since we have used some complex fake review detection
techniques and tried to remove all the fake reviews with as much accuracy as
possible.

Directions For Admin:

1. Admin need to login with its personal admin id and password provided by us
to the admin.
2. Admin is having following capabilities :
a) Mark the user - Admin can mark all the fake reviews detected by the
system by clicking on ‘ Mark Reviews ’ button.
b) Delete any review - Admin will also be able to delete fake reviews
permanently.
c) Admin can view the list of suspected users and suspected reviews.

How our System works:
We have used two techniques to track the fake reviews-

1) Detection through duplicate IP address - If we are getting reviews on a
single product from different users but from the same IP address then after a
threshold such as 5, we would declare those reviews fake and inform the admin.
2) Detection through Sentiment Analysis- Fake users can be smart and can
hide their identity by using some application which allows them to have
different IP address. So to tackle such users, here we could take help of
sentiment analysis and get to know the intent behind a review.

We perform sentiment analysis on each of the review that will return a value
between -1 to +1. We use this value to determine the intent of the user writing
the review. We have set a threshold confidence level for every product(Which is
the average of confidence level of all reviews for that product). If we get a
review whose confidence level varies much from the threshold CL of the
product,then we would identify that review as fake.
