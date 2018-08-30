# Step 1 : Code Review
This file explain  the vulnerabilities I found in the app.

*You must valid and check all inputs than come from the client.
*Don't leak any secret information to the client

*Be aware what's running on the client, what's  running on the server.

*Check all the arguments we could pass through methods, these arguments needs to be validated.

*We will reduce the attack Area : Every feature that is added to an application adds a certain amount of risk to the overall application.
*The loggin function may be vulnerable to SQL injection attacks.If we valid the inputs, the attack is reduced.

*When we open a website  we are connecting to a server.We could be victims the man-in-the-middle attack. To solve this, we could write our website with HTTPS protocol.
* Securing API keys: The app will have secret API keys or passwords. It's very important these should never be stored as part of your app's source code in version control, because developers might copy code around to unexpected places and forget that it contains secret keys.

*Use Methods instead of client-side insert/update/remove and allow/deny.

*Secure the data, not the UI - redirecting away from a client-side route does nothing for security, it’s just a nice UX feature.

## Authors
 -[Analin Flores] (https://github.com/Any28Flo)
