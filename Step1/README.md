# Security Vulnerabilities
* The users password is being sent as a parameter on line 34 of main.js.  This is obviously sensitive information and the URL is obviously not a secure place for that.
* The userId is being passed to the counts.set method on line 2 of counts-methods.js. According to the Meteor docs, you should use this.userId inside your methods. This prevents users from passing in a userId that is not their own, and changing the count of someone else.
* The Meteor docs also recommend filtering fields on the documents you are fetching. This way if you were to add a secret or sensitive field to the counts collection down the line, you wouldn't accidentally send that to the client.
* Line 34 of main.js, the external server uses http. Https would be more secure.