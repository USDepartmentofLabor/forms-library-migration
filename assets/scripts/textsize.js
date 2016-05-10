function changeFontSize(inc){
	tagnames=new Array('h2','h3','h4','p','ul','li','ol','a','td','div');
  	for(t in tagnames){
		var tag = document.getElementsByTagName(tagnames[t]);
		for(n=0; n<tag.length; n++){
			if(tag[n].style.fontSize){
    			var size=parseInt(tag[n].style.fontSize.replace("px", ""));
    		}else{
       			var size=12;
   	 		}
   			tag[n].style.fontSize=size+inc+'px';
		}
	}
}