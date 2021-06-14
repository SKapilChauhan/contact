$(document).ready(function(){
	
	$("#moredetail").click(function(){
		var data = [
			{
				name : "monu",
				email : "monu@gmail.com",
				number : 9989878985,
				profile : "web developer",
				age : 25 
			},
			{
				name : "sonu",
				email : "sonu@gmail.com",
				number : 9875478985,
				profile : "HTML developer",
				age : 28 
			},
			{
				name : "Jatin",
				email : "jatin@gmail.com",
				number : 8857578985,
				profile : "UI developer",
				age : 21 
			},
			{
				name : "Tushar",
				email : "tushar@gmail.com",
				number : 9785478985,
				profile : "Frontend developer",
				age : 21 
			}
		];
		
		for(var i = 0; i < data.length; i++){
			var mainEl = document.createElement('div');
			mainEl.setAttribute("class", "col-md-3");
			
			var innerEl = document.createElement('div');
			innerEl.setAttribute("class", "box");
			
			var head = document.createElement('h2');
			head.innerHTML = data[i].profile;
			innerEl.appendChild(head);
			
			var p1 = document.createElement('p');
			p1.innerHTML = "Name: " + data[i].name;
			innerEl.appendChild(p1);
			
			if(i != 1){
				var p2 = document.createElement('p');
				p2.innerHTML = "Email: " + data[i].email;
				innerEl.appendChild(p2);
			}
			
			mainEl.appendChild(innerEl);
			$("#databind").append(mainEl);
			
		}
		
		
		
		
		
		
		
		
		
		
	});
	
});





//Selector
//$("#id")
//$(".class")
//$("tag")

//Events
//click
//doubleclick
//drag
//drop
//change
//scroll
//mouseenter
//mouseleave
//focus
//blur
//keydown
//keyup
//keypress



