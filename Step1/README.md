# Security vulnerabilities

## On main.js

### The console log aren't remove.

The console.log have not been removed. Consoleing an error and the type of error gives the necessary information to allow someone to access user information.

### Password on url

The url used to connect whit the server and make the post contains user password information.


## On twitter.js

The object Secret service configuration is public and should be private
secret: Meteor.settings.public.twitter.s
