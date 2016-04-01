 (function()
 {
     
     $("#user-register input[type=button]").on("click", function()
     {         //id wraper, field, type
         alert(startValidation());
         
         function Animal(name) {
	  arguments.callee.count = ++arguments.callee.count || 1;
	  this.name = name;
	};
	Animal.showCount = function() {
	  alert( Animal.count );
	};
	var mouse = new Animal("Mouse");
	var elephant = new Animal("elephant");
	Animal.showCount();  // 2
     });
 })();
 