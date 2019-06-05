<?php
/**
 * @package Citation Kaamelott
 * @version 1
 */
/*
Plugin Name: Citations Kaamelott
Plugin URI: 
Description: Ce plugin afficheras des citations tirées de la serie Kaamelott par Alexandre Astier, apportant une dose d'humour par jour. A consommer sans modération.
Author: evilcurse64
Version: 1
*/

function kaamelott_quote() {
	/** These are the quote to Kaamelott */
	$lyrics = [
		"C'est pas faux",
		"Si on faisait le coup du bouclier humain ? Par exemple, Sire, Léodagan et moi on fait semblant de vous prendre en otage : on vous met une dague sous le cou et on traverse le camp adverse en gueulant : 'Bougez pas, bougez pas ou on bute le roi!'",
		"De toutes façons, les réunions de la Table Ronde c’est deux fois par mois. Donc, si le mec il dit après-demain à partir de dans deux jours, suivant s’il le dit à la fin du mois, ça reporte.",
		"Salut, Sire. Je trouve qu’il fait beau, mais encore frais, mais beau !",
		"SI VOUS VOULEZ QU'ON SORTE LES PIEDS DEVANT, FAUDRA NOUS PASSER SUR L'COOOORPS !",
		"Si la mémoire est à la tête ce que le passé, peut-on y accéder à six ? Oui, non, zbradaraldjan ?",
		"Je vous ai vu une fois dans une carriole, tirée par un cheval. Enfin, la carriole tirée par un cheval.",
		"Les framboises sont perchées sur le tabouret de mon grand-père.",
		"13, 14, 15... Enfin tous les chiffres impairs jusqu'à 22.",
		"Et toc ! Remonte ton slibard, Lothard !",
		"Sire, Sire ! On en a gros !",
		"Si Joseph d'Arimathie a pas été trop con, vous pouvez être sûr que le Graal, c'est un bocal à anchois.",
		"Une fois, à une exécution, je m'approche d'une fille. Pour rigoler, je lui fais : « Vous êtes de la famille du pendu ? »... C'était sa sœur. Bonjour l'approche !",
		"Donc, pour résumer, je suis souvent victime des colibris, sous-entendu des types qu’oublient toujours tout. Euh, non… Bref, tout ça pour dire, que je voudrais bien qu’on me considère en tant que Tel.",
		"Bon ben je vous préviens, je vous écoute 30 secondes pas une de plus. Si il y a un mot plus haut que l'autre, je vous mets toute la tartine dans la gueule et je rentre chez moi, j'ai pas que ça à glander.",
		"Commencez pas à noyer la peau de l’ours avant d’avoir vendu le poisson.",
		"Je dirais également que le genou peut partir dans les noix de manière assez soudaine et que ça pourrait éventuellement vous faire sortir les baloches par les oreilles. N'y voyez aucune malice !",
		"I faut faire tenir un balai en équilibre sur le pif pour s'faire servir ici, ou quoi qu'ce soiye ?",
		"Vous pouvez pas vous les compter vous-même vos points ? Faut forcément qu'on vous tienne le zizi ?",
		"Z'êtes un glandeur. Un gros... GLANDEUR !!!",
		"Mais vous êtes une grosse morue!",
		"Non mais c'est à se coincer les parties dans une porte !",
		"Vous savez quoi, Sire ? On va commencer par se faire une saucisse grillée de trois pieds de long, avec un tonnelet de pinard chacun, et derrière, peut être bien qu'on se paiera des filles. Ah oui ! A un moment, vive la vie !",
		"Euh, juste une chose... Manquez encore une seule fois de respect au futur roi de Bretagne, et je vous coupe les boules ! Ca vous fera une jolie petite sacoche pour ranger vos dés à coudre.",
		"Je suis, je suis, je suis une petite tapette, qui parle à tort et à travers, sans que personne ne lui demande son avis, alors elle ferme son bec la poupoule... Et elle laisse parler les grands garçons.",
		"Tempora mori, tempora mundis recorda. Voilà. Eh bien ça, par exemple, ça veut absolument rien dire, mais l’effet reste le même, et pourtant j’ai jamais foutu les pieds dans une salle de classe attention !",
		"Je ne reviendrai plus jamais, cette fois je le dis, je le fais, je reste chez moi. Merde. Ça suffit.",
		"Vous êtes chevalier, je suis roi… Je vous demande de venir, vous venez et puis c’est tout !… Je vais pas non plus aller brûler un cierge sous prétexte que vous avez fait un tour de cheval !",
		"Pour faire court, vous êtes ici chez les salopards. C’est admis. On n'a pas des idées bien jojos, et on n’a pas peur de le dire ! On fomente, on renégate, on laisse libre cours à notre fantaisie.",
		"Oh Là ! Attendez. Nous ici, on est en train de parler à quelqu’un d’intelligent. Si vous en êtes encore à respecter vos serments, on va couper court, on est tous très occupés.",
		"Victoriae mundis et mundis lacrima. Bon, ça ne veut absolument rien dire, mais je trouve que c’est assez dans le ton.",
		"Vous, vous êtes un peigne-cul en toutes circonstances. N'importe qui vous pousserait à n'importe quoi pourvu qu'il parle un peu fort",
		"Vous entendez ça ? Il parait que je suis malpoli ! Qu'est-ce que vous en pensez bande de trous-du-cul ?",
		"Euh, 'Vous êtes là.', c'est-à-dire qu'il est surpris lui-même, ça lui viendrait pas à l'idée de raccorder le fait qu'on est là avec le fait qu'il nous l'a demandé.",
		"Ah voilà ! Et c'est là le danger de la métaphore... si on parle avec des gros tas de bidoches, au bout de cinq minutes personne ne parle de la même chose!",
		"Soyons futés. [...] Non... mais pas vous ! Vous, vous pouvez rester tsoin-tsoin comme d'habitude.",
		"Ou mettre du beurre dans le fond du plat pour pas que le gratin colle.",
		"À Kadoc ! À Kadoc !",
		"Tatan, elle fait des flans.",
		"Les pattes de canaaaaaaaaaaaaaaaaaaaaaaaaaaaaard !",
		"Elle est où la poulette ?",
		"Le caca des pigeons c'est caca, faut pas manger.",
		"Le poissooon ! Le petit poissooon !",
		"Quand y'a plus de roi, c'est caca.",
		"Ça suffit ! Elle est où la poulette ? Elle est bien cachée ?",
		"Vous rendez la poulette sinon c'est plus vous qui donnez à manger aux lapins !",
		"Ça suffit !!! Ça suffit !!! Ça suffiiiiiiiit !!!",
		"Vous rendez la poulette ou c'est tout nus dans les orties !",
		"Il faut pas respirer la compote, ça fait tousser.",
		"Si Kadoc il surveille bien, il aura des p'tits cubes de fromage.",
		"J’ai pénétré leur lieu d'habitation de façon subrogative […] en tapinant.",
		"J’y connais rien, hein, mais… À votre avis, le fait que vous me touchiez pratiquement jamais, ça a une influence sur la fécondité ?",
		"Si votre père était vivant, il se retournerait dans sa tombe.",
		"Vous me prenez vraiment pour une conne.",
		"Mouais. Méfiez-vous des cons. Y en a qui vont beaucoup plus loin qu'on ne pense !",
		"Eh ben, on est pas sortie du sable !",
		"J'ai rêvé qu'il y avait des scorpions qui voulaient me piquer. En plus, y en avait un il était mi-ours, mi-scorpion et re mi-ours derrière !",
		"Moi, un jour j’ai rêvé qu’y avait un type qui venait me voir. Il me dit : « Vous avez jamais connu vos parents ? » J’lui réponds « non ». Et là, il me dit : « Eh ben, vous inquiétez pas, ils sont fromagers. »",
		"FUMIEEEERS !!!!",
		"Alors c'est ça, la stratégie moderne? Réunir cinq trous-de-balle en cercle et s'balancer des fions?",
		"Je vous ai passé le pouvoir, je vais pas vous le reprendre. Mais faites attention de pas devenir une tarlouse.",
		"Allez ! Et si on part assez tôt, on pourra peut-être s'arrêter deux minutes si on tombe sur des champis !.",
		"Et à un moment... Le sorcier s'est mis à nous menacer, avec ses parties génitales.",
		"Y'a toujours au moins deux solutions à un problème.",
		"Une pluie de pierres en intérieur, donc ! Je vous prenais pour un pied de chaise, mais vous êtes un précurseur, en fait !",
		"Oh vous, toujours vous, mais allez chier dans une fiole, on verra après.",
		"Écoutez, si j'avais un sort pour contrecarrer les volontés divines, je serais pas en train de faire des potions de virilité pour tous les mous de la tige du pays breton.",
		"Croyez bien que si j'avais [un truc en stock pour aider Merlin], je le dirais pas ! Parce que voir celui-là passer pour un conneau devant tous les druides du continent, j'aime autant vous dire que je risque pas de louper ça ! J'vais même amener des copains.",
		"Je veux insinuer que vous n'avez pas de connaissances suffisantes pour faire des crêpes. Alors vous imaginer en train de bricoler des plaques de dissimulation, c'est à pisser de rire.",
		"Dans la vie, faut bosser pour personne, et y faut faire bosser personne ! C'est le secret de la liberté. […] Rien que d'imaginer que je retire l'épée du rocher et que je me retrouve à la tête de ce bordel, ça me fait de la spasmophilie !",
		"Non, mais on peut adapter. […] On peut dire, euh… bon, je dis : […] « Avec votre dégaine… euh… […] Avec votre dégaine de crevette, faites gaffe à pas vous faire bouffer par un mérou. »",
		"Eh... Il a pas inventé le plat de la main morte, celui-là.",
		"A l'époque, quand je levais le doigt, y avait 15 000 soldats qui gueulaient Imperator ! Maintenant, quand je lève le doigt, c'est pour aller pisser...",
		"Alors, sans vouloir te commander, aurais-tu l'obligeance de bien vouloir te magner le cul.",
		" Vous préférez monter dans la barque, maintenant, de plein gré, ou dans vingt secondes avec un coup de pompe dans l'oignon ?",
		"Arthour !… Couhillère !",
		"Interprèèète ? Interprèèète, couhillère ?",
		"La fleur en bouquet fane, et jamais ne renaît !",
		"Arthour !… Pas changer assiette pour fromage !",
		"MÉTÉOOOOOOOOO !",
		"Arthour ! On est fort en pomme.",
		"Arthour, j’apprécie les fruits au sirop !",
		"SALSIFIS !!!!!!",
		"Ben, d'la réclame beau Dieu !",
		"A ouais et bien moi je mange avec mon tonton Gethenoc et ton pape TU PEUX TE LE FOUTRE DANS LE CUL !",
		"Non mais attendez, je crois qu'on s'est mal compris, là : vous avez une idée du temps qu'il me faut pour tracer une lettre avec ces PUTAINS DE PLUMES ?!",
		"Moi je viens un peu en tant que médiateur hein, et je confirme hein, c'est une très grosse morue dont vous devriez vous méfier !",
		"Jo le rigolo ???!!!",
		"D'après mes derniers renseignements, il serait tout à fait possible que le Graal ne soit ni un vase, ni une coupe, mais... un récipient.",
		"MÉÉCRÉÉAAAAAAAAANTS !",
		"Pourquoi pas ?",
		"Arthur ! Kaamelott, c’est zéro ! Des cailloux, des cailloux, des cailloux, ça m'énerve ! !",
		"Y a pas à dire, dès qu'il y a du dessert, le repas est tout de suite plus chaleureux !",
		"Qu'est ce qu'ils foutent ces cons de Saxons ?",
		"Il commence doucement à me faire chier celui là!",
		"Sur le principe, la Table ronde, c'est pas obligatoire.",
		"Ah, mais des tanches pareilles, on devrait les mettre sous verre, hein !",
		"Au bout d'un moment, il est vraiment druide, c'mec-là, ou ça fait quinze ans qu'il me prend pour un con ?",
		"Ah ! ben ça… i'faut se méfier, avec les mecs à cran !…",
		"On se fait couper les deux bras, on revient vous voir et 5 minutes après on retourne se mettre sur la gueule ! Mettez-vous à la place des ennemis, c'est désespérant.",
		"Non, moi j'crois qu'il faut qu’vous arrêtiez d'essayer de parler à des gens. Ça vous fatigue, déjà, et pour les autres, vous vous rendez pas compte de c'que c'est. Moi quand vous faites ça, ça me fout une angoisse... j'pourrais vous tuer, j'crois. De chagrin, hein ! J'vous jure c'est pas bien. Il faut plus que vous parliez avec des gens.",
		"Ça vous fait pas mal à la tête de glandouiller vingt-quatre heures sur vingt-quatre ?",
		"J'en ai rien à foutre ! Vous pourriez vous marier avec une chèvre si ça vous chante. Et puis, si y en a une qu'est d'accord, rappelez-vous qu'c'est inespéré puis sautez sur l'occasion.",
		"Merlin, i'sait déjà pas monter des blancs en neige, alors préparer une potion de polymorphie… Permettez-moi d'avoir des doutes.",
		"De toutes façons, c'est ma mère, j'vais pas la faire tabasser par la garde.",
		"J'suis chef de guerre moi, j'suis pas là pour agiter des drapeaux et jouer d'la trompette...",
		"Rangez moi ça, débile, la table ronde, c'est pas la fête de l'artisanat !",
		"Au gros sel ? Qu'est ce que c'est que ces conneries ? Vous me prenez pour une épaule d'agneau?",
		"Mais je vous emmerde, mon petit pote ! Vous commandez ce que je vous dis de commander et vous la fermez bien comme il faut !",
		"C'est parce que je cherche le Graal que je suis roi. Et du coup que vous êtes reine. Si je cherchais pas le Graal, vous seriez encore en Carmélide en train de torcher le cul des vaches dans une des fermes de votre con de père !",
		"Mais vous êtes pas mort, espèce de connard ?",
		"Oubliez ce que je viens de dire. Le Graal, c'est de la merde.",
		"Et si je vous dis que vous êtes deux glands, là, vous avez du péremptoire. C’est vous qui voyez.",
		"Y'a trop de clampins qui se disent poètes qui sortent la licence poétique dès qu'ils pondent trois merdes que personne comprend .",
		"Bohort, je vous donne l'ordre de vous rendre immédiatement en Andalousie pour y rencontrer le chef wisigoth et lui transmettre le message de paix suivant :... « Coucou »...",
		"Le Graal, je sais pas où il est mais il va y rester un moment, c'est moi qui vous l'dis !",
		"La religion c'est le bordel, admettez-le ! Alors laissez-moi prier c'que j'veux tranquille. 'M'empêche pas d'la chercher, votre saloperie de Graal.",
		"J'suis roi de Bretagne, j'ai pas de conseil à recevoir d'une clodo !",
		"Faire tourner cette baraque… et guider tous ces débiles jusqu’au Graal, c’est sur moi que c’est tombé. Les dieux ont trouvé une bonne pomme pour s’arracher les cheveux avec cette histoire de dingues, ils sont pas près de la lâcher.",
		"ARRÊTEZ DE M'APPELER SIRE !!!!!",
		"Vous vous entrainez à mettre le merdier ?!?",
		"Non, comme salope en Orcanie, y'a ma sœur, la reine, votre mère quoi, mais vous le saviez ça?",
		"Je pense que vous glandouillez bien assez comme ça dans la réalité pour qu'on puisse se permettre d'optimiser le fictionnel.",
	];

	return $lyrics[array_rand($lyrics)];
}

// This just echoes the chosen line, we'll position it later
function kaamelott() {
	$chosen = kaamelott_quote();
	echo "<p id='kaamelott'>$chosen</p>";
}

// Now we set that function up to execute when the admin_notices action is called
add_action( 'admin_notices', 'kaamelott' );

// We need some CSS to position the paragraph
function kaamelott_css() {
	// This makes sure that the positioning is also good for right-to-left languages
	$x = is_rtl() ? 'left' : 'right';

	echo "
	<style type='text/css'>
	#kaamelott {
		padding-$x: 15px;
		padding-top: 5px;		
		margin: 0;
		color: #c7260a;
		font-size: 20px;
	}
	</style>
	";
}

add_action( 'admin_head', 'kaamelott_css' );

?>
