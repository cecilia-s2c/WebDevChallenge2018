# Vulnerabilities S1

* There is no a part in which It would be specifying that only the users that have signed in with Twitter are stored so the count of all users that are logged in are being stored too.

* It is not recommendable that public keys would be shown with the email if a user want to contact us because an encrypted message with the private key can be decrypted by anyone with the public key. 

* We should never pass the ID of current user as an argument to a Method. This would allow any client of the site to pass any user ID they want and set someone else's name. This is a Method only accessible by admin users, who are allowed to edit other users.

* We could prevent that meteor methods can be called from anywhere ( malicious program, script in browser console, etc) defining rate limits for the methods that we use ( with in rate limiting for password login to stop password brute forcing).