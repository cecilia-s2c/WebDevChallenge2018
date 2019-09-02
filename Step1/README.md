# Code Review

In this exercise I was able to find the following vulnerabilities:

*The most critical: When sending the count to the external server, it sends the password in the url. According to the documentation, you have to use the auth parameter to authenticate the request, and also we can send the userId and password securely.

*In order to send the click count, we need to validate Meteor.userId() to be able to count only the ones from logged in users.

*There's no Template defined for loginButtons



