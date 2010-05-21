// $(document).ready(function(){
//   $(".download a").click(function(event){
//     var href = $(this).attr('href');
// 	var filename = gup('filename', href);
// 	var type = gup('type', href);
// 	if(type != '') {
//     	pageTracker._trackPageview('/'+type+'/'+filename);
// 	} else {
// 		pageTracker._trackPageview('/'+filename);
// 	}
//   });
// });

// get url paramaters from a string
function gup( name, string )
{
  name = name.replace(/[\[]/,"\\\[").replace(/[\]]/,"\\\]");
  var regexS = "[\\?&]"+name+"=([^&#]*)";
  var regex = new RegExp( regexS );
  var results = regex.exec( string );
  if( results == null )
    return "";
  else
    return results[1];
}