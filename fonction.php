<?php


function entete() {
	

echo "<!doctype html>\n";
echo "<html lang=\"fr\">\n";
echo	"<head>";
echo		"<meta charset=\"utf-8\"/>\n";
echo		"<link rel=\"stylesheet\" href=\"Style.css\"/>\n";
echo		"<title>The Wealking Dead &reg;</title>\n";
echo		"<a href=\"http://www.facebook.com\" ><img class=\"logofb\" src=\"image/logofb.png\" alt=\"logofb\" ></a>\n";
//echo		<iframe id=\"likefb\" src=\"http://www.facebook.com/plugins/like.php?href=http://www.club-edition-ebooks.com&amp;layout=standard&amp;show_faces=false&amp;width=400&amp;action=like&amp;colorscheme=light&amp;height=24\" scrolling=\"no\" frameborder=\"0\" style=\"border:none; overflow:hidden; width:400px; height:24px;\" allowTransparency=\"true\"></iframe>
echo		"<a href=\"http://www.twitter.com\" ><img class=\"logotwitter\" src=\"image/logotwitter.png\" alt=\"logotwitter\"></a>\n";
echo	"</head>\n";
	
echo	"<body>";
echo	"<div id=\"fondtransparent\">\n";
echo	"<header>\n";
	
echo		"<a href=\"TheWealking.php\"><img src=\"image/TWD.png\"alt=\"imagetitre\"></img></a>\n";
echo	"</header>\n";
	
	
echo	"<table id=\"menue\">\n";
echo					"<tbody>\n";
echo							"<tr>";
echo								"<td><a href=\"TheWealking.php\" ><strong>Accueil</strong></a></td>\n";						
echo								"<td><a href=\"saison.php\" ><strong>Saisons</strong></a></td>\n";
echo								"<td><a href=\"#\" ><strong>News</strong></a></td>\n";
echo								"<td><a href=\"biographie.php\" ><strong>Personnages</strong></a></td>\n";
echo								"<td class=\"MenuMedia\" ><a href=\"#\" ><strong>Média</strong></a>\n";


echo																		"<li>\n";
echo																			"<a href=\"galerie.php\" >Galerie</a>\n";
echo																			"<a href=\"video.php\">Vidéo</a>\n";
echo																			"</li>\n";
															
								
echo								"</td>\n";
echo								"<td><a href=\"formulaire.php\" ><strong>Contact</strong></a></td>\n";
																
echo							"</tr>\n";				
					
echo					"</tbody>\n";
			
echo		"</table>\n";



}

?>