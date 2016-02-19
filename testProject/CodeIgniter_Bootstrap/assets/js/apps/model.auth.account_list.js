
var Account = Backbone.Model.extend({
  urlRoot: "/index.php/auth/account_list",
  defaults: {
    id:'',
    username:'',
    email:'',
    last_login:'',
    created:'',
    role:''
  }
});

var account = new Account({
  id:'test'
});

account.save({id:'test'},
  {
      success: function(){
        console.log("test!!");
      }
  }
);
//console.log(task.toJSON());


