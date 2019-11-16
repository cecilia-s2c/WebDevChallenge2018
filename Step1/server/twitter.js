Meteor.startup(() => {
  ServiceConfiguration.configurations.remove({
    service: "twitter"
  });
  ServiceConfiguration.configurations.insert({
    service: "twitter",
    onsumerKey: Meteor.settings.private.twitter.k,
    //consumerKey: Meteor.settings.public.twitter.k,
    loginStyle: "popup",
    //secret: Meteor.settings.public.twitter.s
    secret: Meteor.settings.private.twitter.s
  });
})
