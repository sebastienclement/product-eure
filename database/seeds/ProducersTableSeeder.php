tr<?php

use Illuminate\Database\Seeder;

class ProducersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      $producers = [];
      $date = new Datetime();

      $producers[] = array(
          'user_id'        => 4,
          'name'           => 'gaec des monts huglets',
          'slug'           => 'gaec-des-monts-huglets',
          'adresse'        => '1795 rue du lion',
          'ville'          => 'Manneville la Raoult',
          'zipcode'        => '27210',
          'zone'           => 'lieuvin',
          'producer_email' => 'gaec-des-monts-huglets@laposte.fr',
          'phone'          => '0667106954',
          'website'        => null,
          'description'    => 'vente de viande bovine par caissette de 10 kg',
          'path_img'       => 'upload/producer/2018/01/viande-1.jpg',
          'created_at'     => '2018-02-26 13:09:37',
          'status'         => 'confirmed'
      );

      $producers[] = array(
          'user_id'        => 5,
          'name'           => 'La ferme des cocottes',
          'slug'           => 'la-ferme-des-cocottes',
          'adresse'        => '1827 route de Foulbec',
          'zipcode'        => '27210',
          'ville'          => 'Saint-Maclou',
          'zone'           => 'lieuvin',
          'producer_email' => 'la-ferme-des-cocottes@laposte.fr',
          'phone'          => '0611326715',
          'website'        => null,
          'description'    => 'Petite ferme paysanne en AB avec un élevage de pondeuses : vente à la ferme d\'oeufs biologiques et sur les marchés de Beuzeville le mardi et Honfleur le mercredi ',
          'path_img'       => 'upload/producer/2018/01/oeuf-1.jpg',
          'created_at'     => $date->format('Y-m-d H:i:s'),
          'status'         => 'confirmed'
      );

      $producers[] = array(
          'user_id'        => 6,
          'name'           => 'EARL LES LANDES',
          'slug'           => 'earl-les-landes',
          'adresse'        => 'Les Jouveaux',
          'zipcode'        => '27310',
          'ville'          => 'Saint Ouen de Thouberville',
          'zone'           => 'pays-roumois-et-marais-vernier',
          'producer_email' => 'earl-les-landes@laposte.fr',
          'phone'          => '0682583977',
          'website'        => null,
          'description'    => 'Vente directe de volailles fermières élevées en plein air sur une durée de 14 semaines minimum.
          Poulets, pintades, canards (dinde, mi sauvages ) et volailles festives (chapons, dindes ).',
          'path_img'       => 'upload/producer/2018/01/volaille-1.jpg',
          'created_at'     => $date->format('Y-m-d H:i:s'),
          'status'         => 'refused'
      );

      $producers[] = array(
          'user_id'        => 7,
          'name'           => 'le rucher d\'écaquelon',
          'slug'           => 'le-rucher-d-ecaquelon',
          'adresse'        => '28 rue de labas',
          'zipcode'        => '27290',
          'ville'          => 'Ecaquelon',
          'zone'           => 'pays-roumois-et-marais-vernier',
          'producer_email' => 'le-rucher-d-ecaquelon@laposte.fr',
          'phone'          => '0232565342',
          'website'        => null,
          'description' => 'apiculteurs récoltants fabrication de Miel, pollen,propolis, miel en rayons, pain d\'épices,bougies, nougat, etc...
          Vente directe au domicile sur rdv du mardi au samedi et vente sur les marchés de Bernay le samedi matin et Brionne le dimanche matin.',
          'path_img'       => 'upload/producer/2018/01/miel-1.jpg',
          'created_at'     => $date->format('Y-m-d H:i:s'),
          'status'         => 'confirmed'
      );

      $producers[] = array(
          'user_id'        => 8,
          'name'           => 'horticulteur spilers',
          'slug'           => 'horticulteur-spilers',
          'adresse'        => '220 route de la pyle',
          'zipcode'        => '27370',
          'ville'          => 'la pyle',
          'zone'           => 'pays-roumois-et-marais-vernier',
          'producer_email' => 'horticulteur-spilers@laposte.fr',
          'phone'          => '0232565342',
          'website'        => 'http://jardindefleurs.jimdo.com/',
          'description'    => 'Horticulteur depuis 21 ans,nous produisons des plants de légumes et fleurs dans le plus grand respect de la nature.',
          'path_img'       => 'upload/producer/2018/01/horticulteur-1.jpg',
          'created_at'     => $date->format('Y-m-d H:i:s'),
          'status'         => 'confirmed'
      );

      $producers[] = array(
          'user_id'        => 9,
          'name'           => 'faisanderie de brionne',
          'slug'           => 'faisanderie-de-brionne',
          'adresse'        => '25 rue jacques anquetil',
          'zipcode'        => '27800',
          'ville'          => 'Brionne',
          'zone'           => 'lieuvin',
          'producer_email' => 'faisanderie-de-brionne@laposte.fr',
          'phone'          => '0232461007',
          'website'        => 'www.domainedelabehotiere.com',
          'description'    => 'élevage de faisans et perdrix rouges et grises.',
          'path_img'       => 'upload/producer/2018/01/faisan-1.jpg',
          'created_at'     => $date->format('Y-m-d H:i:s'),
          'status'         => 'confirmed'
      );

      $producers[] = array(
          'user_id'        => 10,
          'name'           => 'Maison Haas',
          'slug'           => 'maison-haas',
          'adresse'        => '12 Rue Ernest Neuville',
          'zipcode'        => '27110',
          'ville'          => 'Le Neubourg',
          'zone'           => 'plateau-du-neubourg',
          'producer_email' => 'maison-haas@laposte.fr',
          'phone'          => '0232350857',
          'website'        => null,
          'description'    => 'Horticulteur en Normandie depuis plus de 60 ans, Maison Haas met à votre service son expertise et son savoir-faire pour vous proposer différentes variétés de fleurs, de plantes ou de plants de légumes tout au long de l\'année. Grâce à une équipe de professionnels, profitez d\'une relation de producteur à consommateur de qualité en achetant directement à la source, sans intermédiaire !',
          'path_img'       => 'upload/producer/2018/01/horticulteur-2.jpg',
          'created_at'     => $date->format('Y-m-d H:i:s'),
          'status'         => 'confirmed'
      );

      $producers[] = array(
          'user_id'        => 11,
          'name'           => 'EARL Mérimée',
          'slug'           => 'earl-merimee',
          'adresse'        => 'Route de Broglie 1',
          'zipcode'        => '27410',
          'ville'          => 'Jonquerets de Livet',
          'zone'           => 'lieuvin',
          'producer_email' => 'earl-merimee@laposte.fr',
          'phone'          => '0685233612',
          'website'        => null,
          'description'    => 'L\'entreprise familiale s\'est diversifiée depuis 2 ans, avec la production d\'agneaux d\'herbes, par Lisa (jeune diplômée en temps qu\'ingénieur en Agronomie). Installée sur 20 ha de prairies, l\'élevage compte actuellement 150 brebis de race Romane/Shosphire. Les agneaux naissent entre le début du mois de Mars et la Fin avril, dans la bergerie, après 72h de surveillance, ils sont mis à l\'herbe dans nos belles prairies Normandes plantées de pommiers, et ce jusqu\'à l\'abattage des agneaux. Les agneaux sont nourris exclusivement du lait maternel (les 2 premiers mois) puis ils complémentent cet aliment de base avec l\'herbe.',
          'path_img'       => 'upload/producer/2018/01/agneau-1.jpg',
          'created_at'     => $date->format('Y-m-d H:i:s'),
          'status'         => 'confirmed'
      );

      $producers[] = array(
          'user_id'        => 12,
          'name'           => 'EARL Du Puits',
          'slug'           => 'earldu-puits',
          'adresse'        => '16 rue du Puits',
          'zipcode'        => '27170',
          'ville'          => 'Berville la Campagne',
          'zone'           => 'lieuvin',
          'producer_email' => 'earldu-puits@laposte.fr',
          'phone'          => '0617290491',
          'website'        => null,
          'description'    => 'Nous sommes producteurs de lait au centre du département de l\'Eure, nous produisons l\'alimentation du troupeau essentiellement à base d\'herbe. Nous transformons une partie de notre lait en fromages, faisselles, fromage blanc, crème et yaourts. Venez découvrir nos produits sur les marchés de Conches en Ouche, Beaumont le Roger, Bernay et Le Fidelaire.',
          'path_img'       => 'upload/producer/2018/01/eleveur-vache.jpg',
          'created_at'     => $date->format('Y-m-d H:i:s'),
          'status'         => 'confirmed'
      );

      $producers[] = array(
          'user_id'        => 13,
          'name'           => 'la ferme saint aubinoise',
          'slug'           => 'la-ferme-saint-aubinoise',
          'adresse'        => '3 chemin de la hêtraie',
          'zipcode'        => '27300',
          'ville'          => 'Saint Aunbin le Vertueux',
          'zone'           => 'lieuvin',
          'producer_email' => 'la-ferme-saint-aubinoise@laposte.fr',
          'phone'          => '0610010579',
          'website'        => 'http://www.fermesainteaubinoise.com/',
          'description'    => 'Fabien et Laëtitia DUMONT sont éleveurs de bovins depuis 13 ans en race Limousine ainsi que de porc plein air. Nous sommes situés à Saint Aubin le Vertueux à 4 km de Bernay.

          Le mode d\'élevage allaitant...

          Le cheptel, en période estivale, est essentiellement nourri à l\'herbe des pâtures.

          En revanche, en période hivernale, les animaux vivent en stabulation libre où ils sont nourris de foin et d’enrubannage que nous récoltons.
          Afin de fournir un maximum de qualité sur nos produits, un travail précis est effectué sur les différentes étapes de production.

          Choix de l\'animal :

          C\'est toujours une génisse de 24 à 30 mois, grâce à cela nous avons toutes les qualités requises en matière de gout et de tendreté de la viande. Il sera toujours choisi un animal ne présentant pas de gras apparent.

          Transport et abattage :

          Cet animal sera transporté par une société « VDE » situé à Alençon. La viande sera pendue en chambre froide à l\'abattoir pendant plusieurs jours. Cela jouera sur le gout et vous mangerez une viande "égouttée".

          Maturation et découpe :

          La société VDE s\'occupe de l\'abattage, la découpe et la mise sous vide de la viande. Celui-ci est étiqueté avec la date de mise sous vide.',
          'path_img'       => 'upload/producer/2018/01/limousine-1.jpg',
          'created_at'      => $date->format('Y-m-d H:i:s'),
          'status'         => 'confirmed'
      );

      $producers[] = array(
          'user_id'        => 14,
          'name'           => 'Artisan du végétal - Earl Bourgeais',
          'slug'           => 'artisan-du-végétal-earl-bourgeais',
          'adresse'        => '2 route de Verneuil',
          'zipcode'        => '27580',
          'ville'          => 'BOURTH',
          'zone'           => 'pays-d-ouche',
          'producer_email' => 'artisan-du-végétal-earl-bourgeais@laposte.fr',
          'phone'          => '0232326006',
          'website'        => 'http://www.artisanduvegetal-laigle.fr',
          'description'    => 'Spécialistes du végétal, nous produisons des arbres, des plantes et des fleurs adaptés au climat et au sol de notre région. Pour vous aider à réussir votre jardin, nous vous proposons egalement une gamme de produits professionnels que nous utilisons dans nos serres et pépinières.',
          'path_img'       => 'upload/producer/2018/01/horticulteur-2.jpg',
          'created_at'     => $date->format('Y-m-d H:i:s'),
          'status'         => 'confirmed'
      );

      $producers[] = array(
          'user_id'        => 15,
          'name'           => 'jardin d\'etienne',
          'slug'           => 'jardin-d-etienne',
          'adresse'        => '5 rue du Thuit Agron',
          'zipcode'        => '27370',
          'ville'          => 'le thuit signol',
          'zone'           => 'pays-roumois-et-marais-vernier',
          'producer_email' => 'jardin-d-etienne@laposte.fr',
          'phone'          => '0662999704',
          'website'        => 'www.jardin-d-etienne.fr',
          'description'    => 'Jardin d\'Etienne est une petite exploitation familiale située à quelques kilomètres de Thuit Signol. Nous avons débuté notre activité en vendant des produits de notre potager sur les marchés de la région. Grâce au soutien de nos clients, nous avons pu développer notre petite entreprise et ainsi cultiver de plus en plus de légumes variés, et bon pour la santé.',
          'path_img'       => 'upload/producer/2018/01/legumes-1.jpg',
          'created_at'     => $date->format('Y-m-d H:i:s'),
          'status'         => 'confirmed'
      );

      $producers[] = array(
          'user_id'        => 16,
          'name'           => 'SARL DEBOOS',
          'slug'           => 'sarl-deboos',
          'adresse'        => '4 Rue aux juifs',
          'zipcode'        => '27110',
          'ville'          => 'DAUBEUF LA CAMPAGNE',
          'zone'           => 'plateau-du-neubourg',
          'producer_email' => 'sarl-deboos@laposte.fr',
          'phone'          => '0610614337',
          'website'        => 'http://www.laviandedepapa.com',
          'description'    => 'Laurent, agriculteur dans l\'Eure à Daubeuf la Campagne depuis 1999, passionné par l\'élevage et le bien manger. Je propose des colis de viande de boeuf du pré à l\'assiette avec livraison sur Rouen.',
          'path_img'       => 'upload/producer/2018/01/viande-2.jpg',
          'created_at'     => $date->format('Y-m-d H:i:s'),
          'status'         => 'confirmed'
      );

      $producers[] = array(
          'user_id'        => 17,
          'name'           => 'Ferme Fruitière Les Vergers',
          'slug'           => 'ferme-fruitiere-les-vergers',
          'adresse'        => '22 Rue de l\'Eglise',
          'zipcode'        => '27400',
          'ville'          => 'Le Mesnil-Jourdain',
          'zone'           => 'plateau-du-neubourg',
          'producer_email' => 'ferme-fruitiere-les-vergers@laposte.fr',
          'phone'          => '0232505665',
          'website'        => null,
          'description'    => 'Petite ferme familiale perchée sur les hauteurs du plateau du Mesnil, venez découvrir nos incroyables fruit frais de saison qui vous prodigueront force et vie éternelle !',
          'path_img'       => 'upload/producer/2018/01/producteur-pommes.jpg',
          'created_at'     => $date->format('Y-m-d H:i:s'),
          'status'         => 'confirmed'
      );

      $producers[] = array(
          'user_id'        => 18,
          'name'           => 'le rucher de netreville',
          'slug'           => 'le-rucher-de-netreville',
          'adresse'        => '15 rue du Coudray',
          'zipcode'        => '27000',
          'ville'          => 'Evreux',
          'zone'           => 'plateau-de-saint-andre',
          'producer_email' => 'le-rucher-de-netreville@laposte.fr',
          'phone'          => '0660171799',
          'website'        => 'http://lerucherdenetreville.jimdo.com/',
          'description'    => 'KERDAT Sylvain Apiculteur Récoltant sur Évreux Haute Normandie. Production Artisanale de miel.
          Miel primé en 2014 de la médaille d\'argent de l\'Eure ,de la médaille d\'argent de Conches en ouche,et de la médaille d\'argent de Normandie.
          Vente sur place ,sur foire ,ou sur point de rendez-vous sur Évreux.la vente par correspondance engage des frais de port à la charge du client.',
          'path_img'       => 'upload/producer/2018/01/miel-2.jpg',
          'created_at'     => $date->format('Y-m-d H:i:s'),
          'status'         => 'confirmed'
      );

      $producers[] = array(
          'user_id'        => 19,
          'name'           => 'Ferme de Travailles',
          'slug'           => 'ferme-de-travailles',
          'adresse'        => 'Ferme de Travailles',
          'zipcode'        => '27700',
          'ville'          => 'Harquency',
          'zone'           => 'vexin-normand',
          'producer_email' => 'ferme-de-travailles@laposte.fr',
          'phone'          => '0232216204',
          'website'        => 'http://www.fermedetravailles.fr/',
          'description'    => 'Notre ferme est située près de Les Andelys, Vernon et Gisors. Nous proposons de la vente directe producteur de colis de viande charolaise.
          Ferme familiale en polyculture élevage de vaches Charolaises depuis 3 générations, toutes nos vaches sont nées et élevées sur la ferme.',
          'path_img'       => 'upload/producer/2018/01/charolaise-1.jpg',
          'created_at'     => $date->format('Y-m-d H:i:s'),
          'status'         => 'confirmed'
      );

      $producers[] = array(
          'user_id'        => 20,
          'name'           => 'EARL François Terrier',
          'slug'           => 'earl-françois-terrier',
          'adresse'        => '26 rue principale hameau de Feuquerolles',
          'zipcode'        => '27700',
          'ville'          => 'Les Andelys',
          'zone'           => 'vexin-normand',
          'producer_email' => 'earl-françois-terrier@laposte.fr',
          'phone'          => '0630035574',
          'website'        => null,
          'description'    => 'Agriculteur depuis 25 ans, nous nous sommes engagés en agriculture BIOlogique depuis 2009. Notre exploitation poly culture élevage est basée en Normandie plus exactement sur la commune des Andelys.
          Pommes de terre, pommes, jus de pommes sont en vente tous les vendredis à la ferme de 9h 12h/ 14h/18h et viande bovine uniquement sur réservation.',
          'path_img'       => 'upload/producer/2018/01/producteur-de-pommes.jpg',
          'created_at'     => $date->format('Y-m-d H:i:s'),
          'status'         => 'confirmed'
      );

      $producers[] = array(
          'user_id'        => 21,
          'name'           => 'La Fermette Bio de l\'Epte',
          'slug'           => 'la-fermette-bio-de-l-epte',
          'adresse'        => '29, rue d\'Eragny',
          'zipcode'        => '27140',
          'ville'          => 'Gisors',
          'zone'           => 'vexin-normand',
          'producer_email' => 'lafermettebiodelepte@gmail.com',
          'phone'          => '0296847541',
          'website'        => 'http://lafermettebiodelepte.fr/',
          'description'    => 'Exploitation maraîchère Biologiques, nous sommes installés et certifié Agriculture Biologique depuis 2013. Nous vous proposons des légumes de saison en vente directe sur le point de vente de la ferme. Il est ouvert les mercredis et vendredis de 16h à 19h et le samedi matin de 9h30 à 12h30.',
          'path_img'       => 'upload/producer/2018/01/productrice-legumes.jpg',
          'created_at'     => $date->format('Y-m-d H:i:s'),
          'status'         => 'confirmed'
      );

      $producers[] = array(
          'user_id'        => 22,
          'name'           => 'Les jardins de neustrie',
          'slug'           => 'les-jardins-de-neustrie',
          'adresse'        => 'Sentier maraîchère',
          'zipcode'        => '27100',
          'ville'          => 'Val de Reuil',
          'zone'           => 'plateau-du-neubourg',
          'producer_email' => 'les-jardins-de-neustrie@mail.com',
          'phone'          => '0232630847',
          'website'        => 'https://www.facebook.com/lesjardinsdeneustrie/',
          'description'    => 'Les Jardins de Neustrie, jardins d\'insertion du réseau Cocagne où des légumes de saisons sont cultivés toute l\'année en agriculture biologique.',
          'path_img'       => 'upload/producer/2018/01/legumes-saison-1.jpg',
          'created_at'     => $date->format('Y-m-d H:i:s'),
          'status'         => 'confirmed'
      );

      $producers[] = array(
          'user_id'        => 23,
          'name'           => 'la ferme du londe',
          'slug'           => 'la-ferme-du-londe',
          'adresse'        => '7 rue de la trinité hameau le Londe',
          'zipcode'        => '27700',
          'ville'          => 'heuqueville',
          'zone'           => 'vexin-normand',
          'producer_email' => 'la-ferme-du-londe@mail.com',
          'phone'          => '0232543885',
          'website'        => 'https://www.facebook.com/lesjardinsdeneustrie/',
          'description'    => 'Vente de volailles prêtes à cuire,nos volailles sont élevées en plein air et nourries sans OGM: poulet,pintade,canette,oie,dinde
          Nous vendons également des conserves de volailles: rillettes, terrines etc...
          A la ferme il faut commander avant le Mercredi de chaque semaine.
          Horaires : le vendredi de 17h à 19h',
          'path_img'       => 'upload/producer/2018/01/volaille-1.jpg',
          'created_at'     => $date->format('Y-m-d H:i:s'),
          'status'         => 'confirmed'
      );

      $producers[] = array(
          'user_id'        => 24,
          'name'           => 'Brasserie Duplessi',
          'slug'           => 'brasserie-duplessi',
          'adresse'        => '13 rue aux Moines',
          'zipcode'        => '27700',
          'ville'          => 'Les Trois Lacs',
          'zone'           => 'vexin-normand',
          'producer_email' => 'brasserie-duplessi@mail.com',
          'phone'          => '0232515575',
          'website'        => null,
          'description'    => 'Richard Cœur de Lion, Roi d\'Angleterre et Duc de Normandie : tout le monde connait. Mais saviez-vous que c\'était aussi le nom d\'une bière artisanale normande ? La Brasserie Duplessi, à Tosny, sur la rive gauche de la Seine et face à Château-Gaillard, vous ouvre ses portes pour découvrir le processus de fabrication. Du concassage des orges maltés à l’embouteillage en passant par le filtrage et la fermentation, vous dégusterez ensuite la bière de votre choix. Blonde, brune ou ambrée, décidément cette Cœur de Lion est pleine de surprises !',
          'path_img'       => 'upload/producer/2018/01/biere-1.jpeg',
          'created_at'     => $date->format('Y-m-d H:i:s'),
          'status'         => 'confirmed'
      );

      $producers[] = array(
          'user_id'        => 25,
          'name'           => 'Le Pressoir d\'Or',
          'slug'           => 'le-pressoir-d-or',
          'adresse'        => '57 bis Route des Andelys St-Jean-de-Frenelles',
          'zipcode'        => '27150',
          'ville'          => 'Boisemont',
          'zone'           => 'vexin-normand',
          'producer_email' => 'contact@pressoirdor.com',
          'phone'          => '0232694125',
          'website'        => 'www.pressoirdor.com',
          'description'    => 'A proximité de la forêt de Lyons-la-Forêt et du château Gaillard, entre les Andelys et Etrepagny, Eric Doré vous accueille dans sa ferme cidricole et vous propose ses produits fermiers. Vous pénètrerez dans une ferme typique du Vexin Normand, au coeur de ses bâtiments en colombages du XVIIème et XVIIIème siècles. Vous découvrirez un verger de 27 ha, un atelier de production cidricole, une collection d\'objets anciens. Typique du XVIIe et XVIIIe s., bâtiments à colombages, corps de ferme fleuri, verger, atelier cidricole, collection d\'objets anciens.',
          'path_img'       => 'upload/producer/2018/01/producteur-de-cidre.jpg',
          'created_at'     => $date->format('Y-m-d H:i:s'),
          'status'         => 'confirmed'
      );

      $producers[] = array(
          'user_id'        => 26,
          'name'           => 'Van Tornhout Brigitte',
          'slug'           => 'van-tornhout-brigitte',
          'adresse'        => '12 Rue Omer Canteloup',
          'zipcode'        => '27700',
          'ville'          => 'Guiseniers',
          'zone'           => 'vexin-normand',
          'producer_email' => 'van-tornhout-brigitte@mail.com',
          'phone'          => '0232542947',
          'website'        => null,
          'description'    => 'Oeufs de poule élevées en plein air. Propose occasionnelement des oeufs d\'autruche et de caille.',
          'path_img'       => 'upload/producer/2018/01/oeuf-2.jpg',
          'created_at'     => $date->format('Y-m-d H:i:s'),
          'status'         => 'confirmed'
      );

      $producers[] = array(
          'user_id'        => 27,
          'name'           => 'M-T Glaces - Ferme des 7 épis',
          'slug'           => 'm-t-glaces-ferme-des-7-épis',
          'adresse'        => '12 Rue Omer Canteloup',
          'zipcode'        => '27250',
          'ville'          => 'La Maillardière',
          'zone'           => 'pays-d-ouche',
          'producer_email' => 'mtglacesbouckaert27@orange.fr',
          'phone'          => '0232246477',
          'website'        => 'www.mtglaces.fr',
          'description'    => 'Marie-Thé est heureuse de vous faire découvrir et apprécier les saveurs incomparables de ses glaces fabriquées artisanalement avec le lait et la crème de la ferme, selon des recettes à haute qualité gustative. Elles sont garanties sans colorant artificiel ni conservateur ou autre produit de synthèse. Découvrez plus de 50 parfums (caramel au beurre salé, spéculoos, kiwi...)!',
          'path_img'       => 'upload/producer/2018/01/glace-1.jpg',
          'created_at'     => $date->format('Y-m-d H:i:s'),
          'status'         => 'confirmed'
      );

      $producers[] = array(
          'user_id'        => 28,
          'name'           => 'La Bikette Caugéenne',
          'slug'           => 'la-bikette-caugéenne',
          'adresse'        => 'Chemin des Hautes Forrières',
          'zipcode'        => '27180',
          'ville'          => 'Cauge',
          'zone'           => 'plateau-de-saint-andre',
          'producer_email' => 'labikettecaugeenne@gmail.com',
          'phone'          => '0681532895',
          'website'        => null,
          'description'    => 'Venez déguster le fromage et voir les chèvres ainsi que la traite à 17h tous les jours du 1er avril au 20 janvier la boutique est ouverte les mercredi, vendredi et samedi à partir de 10h.
          Ferme familiale, production céréalière, élevage de chèvre et production de fromage',
          'path_img'       => 'upload/producer/2018/01/chevres-1.jpg',
          'created_at'     => $date->format('Y-m-d H:i:s'),
          'status'         => 'confirmed'
      );

      $producers[] = array(
          'user_id'        => 29,
          'name'           => 'La Chèvrerie d\'Elise',
          'slug'           => 'la-chevrerie-d-elise',
          'adresse'        => '9 Rue de la Mare du Four',
          'zipcode'        => '27120',
          'ville'          => 'Le Plessis Hebert',
          'zone'           => 'plateau-de-saint-andre',
          'producer_email' => 'lachevreriedelise@mail.com',
          'phone'          => '0232260655',
          'website'        => null,
          'description'    => 'Bienvenue à la Chèvrerie d\'Elise, ferme en polycultures élevages avec un atelier chèvres laitières nourries avec le foin cultivé sur la ferme et des aliments (sans OGM ni huile de palme, enrichis en graines de lin) ainsi que la transformation à la ferme en fromages.',
          'path_img'       => 'upload/producer/2018/01/chevre-2.jpg',
          'created_at'     => $date->format('Y-m-d H:i:s'),
          'status'         => 'confirmed'
      );

      $producers[] = array(
          'user_id'        => 30,
          'name'           => 'Ô P\'tits Fruits d\'Anne',
          'slug'           => 'o-p-tits-fruits-d-anne',
          'adresse'        => '4 route de Nonancourt',
          'zipcode'        => '27320',
          'ville'          => 'Courdemanche',
          'zone'           => 'pays-d-ouche',
          'producer_email' => 'anne.cornille-dutremee@orange.fr',
          'phone'          => '0613846481',
          'website'        => null,
          'description'    => 'Nous cultivons, sur 50 ares, un verger de fruits rouges de plein champ : fraises, framboises, groseilles et mûres. A la saison, nous vous proposons nos fruits frais, cueillis et préparés en barquettes. Toute l\'année, profitez de nos Gourmandises Maison, réalisées, à la ferme, de manière traditionnelle, à partir des fruits issus de notre production : confitures, gelées, sirops, pâtes de fruits...',
          'path_img'       => 'upload/producer/2018/01/fruit-rouge-1.jpg',
          'created_at'     => $date->format('Y-m-d H:i:s'),
          'status'         => 'confirmed'
      );

      $producers[] = array(
          'user_id'        => 31,
          'name'           => 'L\'Escargot des Marnières',
          'slug'           => 'l-escargot-des-marnieres',
          'adresse'        => 'Lieu-dit les Marnières RN 2012',
          'zipcode'        => '27570',
          'ville'          => 'Tillières sur Avre',
          'zone'           => 'pays-d-ouche',
          'producer_email' => 'lescargotdesmarnieres@orange.fr',
          'phone'          => '0671711603',
          'website'        => 'lescargotdesmarnieres.wifeo.com/',
          'description'    => 'C\'est dans un cadre champêtre et de tranquillité que l\'escargot des Marnières a ouvert ses portes en 2008! Les escargots y sont élevés en plein air! Véronique et Bruno sont heureux de vous faire découvrir la ferme aux escargots. Ils vous proposent un produit fermier de qualité, élevé en plein air et cuisiné par leurs soins dans un laboratoire agréé CE.',
          'path_img'       => 'upload/producer/2018/01/escargots-1.jpg',
          'created_at'     => $date->format('Y-m-d H:i:s'),
          'status'         => 'confirmed'
      );

      $producers[] = array(
          'user_id'        => 32,
          'name'           => 'Ferme du Clos de la Mare',
          'slug'           => 'ferme-du-clos-de-la-mare',
          'adresse'        => '2, Place Sainte-Opportune',
          'zipcode'        => '27750',
          'ville'          => 'La Couture Boussey',
          'zone'           => 'plateau-de-saint-andre',
          'producer_email' => 'boussey@wanadoo.fr',
          'phone'          => '0610902185',
          'website'        => 'www.ferme-du-clos-de-la-mare.com/',
          'description'    => 'Dans le hameau de Boussey en bordure de la vallée de l\'Eure, Jean-Marie Lenfant a repris l\'activité familiale qu\'il diversifie vers la production et la vente de nouveaux produits de Normandie. Jean-Marie sera heureux de vous rencontrer pour présenter ses nouveaux produits et ses moyens de production : presse à huile, moulin à farine... Vous pouvez découvrir et déguster des produits insolites : huile de colza, gamme de cosmétique à base d\'huile de colza...',
          'path_img'       => 'upload/producer/2018/01/farine-1.jpg',
          'created_at'     => $date->format('Y-m-d H:i:s'),
          'status'         => 'confirmed'
      );

      $producers[] = array(
          'user_id'        => 33,
          'name'           => 'Ferme d\'Illièvre',
          'slug'           => 'ferme-d-illievre',
          'adresse'        => '1, rue des ventes La Bochelle',
          'zipcode'        => '27240',
          'ville'          => 'Sylvains les Moulins',
          'zone'           => 'pays-d-ouche',
          'producer_email' => 'christophe.guicheux@laposte.net',
          'phone'          => '0620051816',
          'website'        => null,
          'description'    => 'Bienvenue à la Ferme d\'Illièvre où Christophe Guicheux vous fera découvrir son troupeau de brebis et ses lapins. Tous les animaux sont nés et élevés sur la ferme.
          Depuis 4 générations, la famille Guicheux cultive des céréales sur la Ferme d\'Illièvre. Depuis 5ans, elle vous propose également ses produits 100% fermiers: des agneaux et du lapin.',
          'path_img'       => 'upload/producer/2018/01/brebis-1.jpg',
          'created_at'     => $date->format('Y-m-d H:i:s'),
          'status'         => 'confirmed'
      );
        DB::table('producers')->insert($producers);

    }
}
