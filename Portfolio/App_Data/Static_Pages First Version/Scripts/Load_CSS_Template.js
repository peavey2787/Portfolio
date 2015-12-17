function Get_CSS_File(CSS_File){ 
    CSS_Link = document.createElement('link'); 
    CSS_Link.setAttribute("rel", "stylesheet"); 
    CSS_Link.setAttribute("type", "text/css"); 
    CSS_Link.setAttribute("href", CSS_File);
    document.getElementsByTagName("head")[0].appendChild(CSS_Link);
	console.log("CSS_File: " + CSS_File);
	
}

function Start(Folders_Deep)
{ 
	var Prefix = "";
	
	if (Folders_Deep == "undefined")
	{
	    console.log("I was not defined");
	}
	else
	{
		if(Folders_Deep == 1)
		{
			Prefix = "../";
		} 
		   
		console.log("Browser Screen Width: " + window.innerWidth);
		console.log("Hostname: " + window.location.href);
		console.log("Folders_Deep: " + Folders_Deep);
		console.log("Prefix: " + Prefix);
		
		if (window.innerWidth <= '1400')
		{
			Get_CSS_File(Prefix + 'Mobile_Template.css'); 
		}
		else 
		{ 
			Get_CSS_File(Prefix + 'Desktop_Template.css'); 
		}
	}
}