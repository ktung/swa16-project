var a=0;
window.onload = function()
{

	function getElementById(id, parent, list){
  		parent = parent || document.body;
  		list   = list   || [];

		var l, child, children = parent.children;
		
	  	if(children){
	    	l = children.length;
	    	while(l--){
	      		child = children[l];
	      		if(child.id == id){
	      			if(id==="secret" ){ 	
		      		}
		      		else{
		      			list.push(child);
		      		
		      		}
	      		}
	      		getElementById(id, child, list);
	    	}
	  	}
	
	  	return list;
	}
	document.getElementById = getElementById;
};
	


