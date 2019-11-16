Meteor.methods({
 // 'counts.set': function(userId, num) {
  'counts.set': function(num) {
    $set: { usuario: this.userId }
    if(UserId){
   // if(Meteor.userId()) {
      const count = Counts.findOne({usuario})
      if(count) {
        // count already exists for user, update
        Counts.update(count._id, {num})
      } else {
        // if no count set for userId, insert
        Counts.insert({usuario, num});
      }

      return num;
    } else {
      throw Meteor.Error("Not allowed to set count")
    }
  }
});
