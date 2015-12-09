function Get_CSS_File(CSS_File){ 
    CSS_Link = document.createElement('link') 
    CSS_Link.setAttribute("rel", "stylesheet") 
    CSS_Link.setAttribute("type", "text/css") 
    CSS_Link.setAttribute("href", CSS_File) 
    document.getElementsByTagName("head")[0].appendChild(CSS_Link) 
}
console.log("Browser Screen Width: " + window.innerWidth);
if (window.innerWidth <= '1400')
{
    Get_CSS_File('Mobile_Template.css') 
}
else 
{ 
    Get_CSS_File('Desktop_Template.css') 
}
 

