# SECURITY PROPOSALS
1. Create a private folder where we will store private data and are accessed only from the server.
Validate and verify all entries that come from the customer.
Do not filter any secret information to the client.

2. Add a deny list to the server code that disables direct client-side updates on the Lists collection.
//Example List
Lists.deny({
  insert() { return true; },
  update() { return true; },
  remove() { return true; },
});

3. Protect the methods in the counts-methods.js file
     3.1 We can use mdg: validated-method
     3.2 Do not send the client user ID as an argument to a method, use this.userId

4.Rate limiting, we can use the following code to establish a basic speed limit in all methods and thus not allow that method to be executed more than X times in a certain time, thus avoiding brute force attacks.

// Get list of all method names on Lists
const LISTS_METHODS = _.pluck([
  counts.set
], 'name');

// Only allow 5 list operations per connection per second
if (Meteor.isServer) {
  DDPRateLimiter.addRule({
    name(name) {
      return _.contains(LISTS_METHODS, name);
    },

    // Rate limit per connection ID
    connectionId() { return true; }
  }, 5, 1000);
}
5. Create a secure settings.json file and add de k and s variables make them private, not public.


