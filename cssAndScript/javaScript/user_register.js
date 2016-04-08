 (function()
 {
     
     $("#user-register input[type=button]").on("click", function()
     {         //id wraper, field, type
         var wraper = $("#user-register");
         var obj = new validForm("#user-register");
         
         var name = $(wraper).find("[for=name] + input");
         name.removeClass( "ui-state-error" );
         var valid = true;
         valid = valid && obj.checkLength(name, "name", 3, 80);
         
         var surname = $(wraper).find("[for=surname] + input");
         surname.removeClass( "ui-state-error" );
         valid = valid && obj.checkLength(surname, "surname", 3, 80);
         
         var email = $(wraper).find("input[type=email]");
         email.removeClass( "ui-state-error" );
         valid = valid && obj.checkEmail(email);
         valid = valid && obj.checkLength(email, "e-mail", 1, 80);

         var pass = $(wraper).find("input[type=password]");
         pass.removeClass( "ui-state-error" );
         valid = valid && obj.checkLength(pass, "password", 3, 16);
         
         if (valid)
             $(wraper).find("input[type=submit]").click();
         
//         function Animal(name) {
//	  arguments.callee.count = ++arguments.callee.count || 1;
//	  this.name = name;
//	};
//	Animal.showCount = function() {
//	  alert( Animal.count );
//	};
//	var mouse = new Animal("Mouse");
//	var elephant = new Animal("elephant");
//	Animal.showCount();  // 2
     });
 })();
 