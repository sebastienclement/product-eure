<?php

use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $items = [];
      $date = new Datetime();

      $items[] = array(
          'name'        => 'Génisse de 3 ans',
          'comment'     => 'colis de 10 kg environ comprenant rôti, steaks, cheveux d\'ange, saucisse de boeuf
bourguignon pot au feu (12.5€/kg)',
          'created_at'  => $date->format('Y-m-d H:i:s'),
          'category_id' => 1
      );

      $items[] = array(
          'name'        => 'Veau',
          'comment'     => 'colis de 10kg environ escalopes, tendrons, osso buco, sauté, rôtis (13.5€/kg)',
          'created_at'  => $date->format('Y-m-d H:i:s'),
          'category_id' => 1
      );

      $items[] = array(
          'name'        => 'Oeufs',
          'comment'     => 'Vente à la ferme d\'oeufs certifiés AB 2,20euros la boite de six oeufs',
          'created_at'  => $date->format('Y-m-d H:i:s'),
          'category_id' => 11
      );

      $items[] = array(
          'name'        => 'Poulets',
          'comment'     => 'Poulets élevés en plein air sur une durée de 14 semaines minimum. (6.5€)',
          'created_at'  => $date->format('Y-m-d H:i:s'),
          'category_id' => 3
      );

      $items[] = array(
          'name'        => 'Pintades',
          'comment'     => 'Pintades élevées en plein air sur une durée de 16 semaines. 8€',
          'created_at'  => $date->format('Y-m-d H:i:s'),
          'category_id' => 3
      );

      $items[] = array(
          'name'        => 'Canettes Dinde',
          'comment'     => 'Canards élevés en plein air sur une durée de 14 semaines minimum. 8€',
          'created_at'  => $date->format('Y-m-d H:i:s'),
          'category_id' => 3
      );

      $items[] = array(
          'name'        => 'Canards Mi Sauvages',
          'comment'     => 'Canards élevés en plein air sur une durée de 14 semaines minimum. 9€',
          'created_at'  => $date->format('Y-m-d H:i:s'),
          'category_id' => 3
      );

      $items[] = array(
          'name'        => 'Chapons',
          'comment'     => 'Chapons élevés au lait fermier sur une durée de 6 mois minimum. 11€',
          'created_at'  => $date->format('Y-m-d H:i:s'),
          'category_id' => 3
      );

      $items[] = array(
          'name'        => 'Faisans',
          'comment'     => 'Faisans rouges et gris. 18€',
          'created_at'  => $date->format('Y-m-d H:i:s'),
          'category_id' => 14
      );

      $items[] = array(
          'name'        => 'Cactus "Coussin de belle-mère"',
          'comment'     => 'Indémodables et intemporels, les cactus habilleront parfaitement votre intérieur !',
          'created_at'  => $date->format('Y-m-d H:i:s'),
          'category_id' => 13
      );

      $items[] = array(
          'name'        => 'Cycas',
          'comment'     => 'Intemporelles, les plantes vertes apporteront du charme à votre intérieur.',
          'created_at'  => $date->format('Y-m-d H:i:s'),
          'category_id' => 13
      );

      $items[] = array(
          'name'        => 'Agneau sous vide',
          'comment'     => 'Agneaux nés et élevés uniquement à l\'herbe, dans nos prairies Normandes à proximité de Bernay, dans l\'Eure (27).

          Les agneaux naissent début Mars jusqu\'à fin Avril, leur alimentation de base est uniquement constituée d\'herbe de prairie. Les agneaux sont abattus à 50 kg vif (soit 20 à 22 kg de viande), par l\'abattoir le plus proche (20 km), c\'est le seul déplacement qu\'effectueront les animaux vivants. La découpe, le conditionnement sous vides et l\'étiquetage des morceaux ont lieux sur place. 190€ pour 20 à 22kg',
          'created_at'  => $date->format('Y-m-d H:i:s'),
          'category_id' => 4
      );

      $items[] = array(
          'name'        => 'Fromage blanc',
          'comment'     => 'Fromage blanc au lait crue fermier de vaches. 3.5€ 500g',
          'created_at'  => $date->format('Y-m-d H:i:s'),
          'category_id' => 5
      );

      $items[] = array(
          'name'        => 'Lait crue fermier',
          'comment'     => 'Faisselle au lait crue de vaches. 1€ pour 1L',
          'created_at'  => $date->format('Y-m-d H:i:s'),
          'category_id' => 5
      );

      $items[] = array(
          'name'        => 'Fruits de saison',
          'comment'     => 'Venez découvrir tous nos fruits frais et de saison.',
          'created_at'  => $date->format('Y-m-d H:i:s'),
          'category_id' => 6
      );

      $items[] = array(
          'name'        => 'Légumes de saison',
          'comment'     => 'Venez découvrir tous nos légumes frais et de saison.',
          'created_at'  => $date->format('Y-m-d H:i:s'),
          'category_id' => 7
      );

      $items[] = array(
          'name'        => 'Colis de viande de boeuf',
          'comment'     => 'Colis de 15 kgs ou 7,5 kgs environ composés de morceaux de viande panachés.
La viande est conditionnée sous vide pour une conservation et une qualité optimales.
Les morceaux individuels, comme les bavettes, les steaks... sont conditionnés par 2.
La traçabilité est assurée par l\'étiquette qui précise le type de morceau, le poids et l\'origine de la viande. 16€/kg',
          'created_at'  => $date->format('Y-m-d H:i:s'),
          'category_id' => 1
      );

      $items[] = array(
          'name'        => 'Colis de veau',
          'comment'     => 'Nous vous proposons des colis de veau AU PRINTEMPS UNIQUEMENT, d\'un poids d\'environ 7 kgs. La réservation se fait tout au long de l\'année pour plusieurs livraisons en avril, mai et juin. La viande est conditionnée sous vide pour une conservation et une qualité optimales. Les morceaux individuels sont conditionnés par 2. La traçabilité est assurée par l\'étiquette qui précise le type de morceau, le poids et l\'origine de la viande. 16€/kg',
          'created_at'  => $date->format('Y-m-d H:i:s'),
          'category_id' => 1
      );

      $items[] = array(
          'name'        => 'Fruits aux super pouvoirs',
          'comment'     => 'Nous vous proposons des colis de fruits rendant immortel pour la modique somme de 700€/kg. Actuellement en solde, et ce, jusqu\'au 2 mars !! Découvrez également comment respirer sous l\'eau comme un poisson, grâce à notre nouvelle pomme de souche Adam.',
          'created_at'  => $date->format('Y-m-d H:i:s'),
          'category_id' => 6
      );

      $items[] = array(
          'name'        => 'Miel de fleurs 500gr',
          'comment'     => 'Miel toutes fleurs proposé pour une quantité de 0.50 kg',
          'created_at'  => $date->format('Y-m-d H:i:s'),
          'category_id' => 9
      );

      $items[] = array(
          'name'        => 'Colis de viande',
          'comment'     => 'Colis de boeuf de 10kg',
          'created_at'  => $date->format('Y-m-d H:i:s'),
          'category_id' => 1
      );

      $items[] = array(
          'name'        => 'Colis de porc',
          'comment'     => 'Les colis de porc pèsent aux alentours de 8 kg.',
          'created_at'  => $date->format('Y-m-d H:i:s'),
          'category_id' => 2
      );

      $items[] = array(
          'name'        => 'Volailles et Lapins',
          'comment'     => 'Les poulets pèsent entre 1,5 kg et 2,5 kg.
          Les pintades et les lapins sont aux alentours de 1,5 kg',
          'created_at'  => $date->format('Y-m-d H:i:s'),
          'category_id' => 3
      );

      $items[] = array(
          'name'        => 'Pommes de terre Bintje bio',
          'comment'     => 'pommes de terre bio parfaites pour les purées, les frites et les potages. conditionné en sacs de 2.5 kg, 5 kg et 10 kg. 11€ pour 10kg',
          'created_at'  => $date->format('Y-m-d H:i:s'),
          'category_id' => 7
      );

      $items[] = array(
          'name'        => 'Pommes de terre bio variété esmeralda',
          'comment'     => 'pommes de terre à chaire ferme, idéal à la vapeur, sautées. 13€ pour 10kg',
          'created_at'  => $date->format('Y-m-d H:i:s'),
          'category_id' => 7
      );

      $items[] = array(
          'name'        => 'Viande bovine',
          'comment'     => 'notre viande est issue de notre élevage. Nous vendons sous forme de colis de 5 ou 10 kg uniquement sure réservation. Chaque colis comprend : rôtis, entrecôte ou côte, steaks, tournedos, gite, collier... 12.5€/kg',
          'created_at'  => $date->format('Y-m-d H:i:s'),
          'category_id' => 1
      );

      $items[] = array(
          'name'        => 'Jus de pomme',
          'comment'     => 'Jus de pomme confectionné à partir des pommes de notre verger.',
          'created_at'  => $date->format('Y-m-d H:i:s'),
          'category_id' => 8
      );

      $items[] = array(
          'name'        => 'Légumes Bio',
          'comment'     => 'Nous vous proposons des légumes de saison certifié Agriculture Biologique.',
          'created_at'  => $date->format('Y-m-d H:i:s'),
          'category_id' => 7
      );

      $items[] = array(
          'name'        => 'Légumes biologiques de saison',
          'comment'     => 'Légumes biologiques disponibles selon les saisons :pomme de terre, carotte, poireau, chou vert, céleri, chou blanc, chou rouge, chou kale, chou de bruxelles, chou chinois, chou brocoli, épinard, blette, salade, mâche, roquette, betterave, courge, radis noir, radis botte, navet, courgette, tomate, aubergine, poivron, melon, pastèque, rhubarbe, fruits rouges...',
          'created_at'  => $date->format('Y-m-d H:i:s'),
          'category_id' => 7
      );

      $items[] = array(
          'name'        => 'Poulets prêt à cuire, pas de vivant',
          'comment'     => 'poulets: 8.50€/kg
          pintades:9.50€/kg
          canettes:9.00/kg
          pour Noel: oies:13.00€/kg et dindes:12.50€/kg',
          'created_at'  => $date->format('Y-m-d H:i:s'),
          'category_id' => 3
      );

      $items[] = array(
          'name'        => 'Conserves de volailles, rillettes, terrines',
          'comment'     => 'Toutes nos terrines et conserves sont faites maisons. Aucun additifs ou conservateurs ne sont ajoutés.',
          'created_at'  => $date->format('Y-m-d H:i:s'),
          'category_id' => 10
      );

      $items[] = array(
          'name'        => 'Bières',
          'comment'     => 'Bières artisanales normandes. Il y en a pour tous les goûts !',
          'created_at'  => $date->format('Y-m-d H:i:s'),
          'category_id' => 8
      );

      $items[] = array(
          'name'        => 'Cidre fermier',
          'comment'     => 'Le cidre bouché fermier du Pressoir d\'Or est transformé en Normandie, sur l\'exploitation avec des pommes issues de notre verger. Ce cidre est le résultat d\'un fameux mélange d\'environ 7 variétés de pommes. C\'est une boisson pétillante agréable.',
          'created_at'  => $date->format('Y-m-d H:i:s'),
          'category_id' => 8
      );

      $items[] = array(
          'name'        => 'Jus de pomme',
          'comment'     => 'Le jus de pomme du Pressoir d\'Or est transformé avec des pommes issues de notre verger. Ce jus de pomme est le résultat d\'un mélange d\'environ 3 variétés de pommes. C\'est une boisson agréable.',
          'created_at'  => $date->format('Y-m-d H:i:s'),
          'category_id' => 8
      );

      $items[] = array(
          'name'        => 'Vinaigre de cidre',
          'comment'     => 'Le vinaigre de cidre fermier du Pressoir d\'Or est transformé en Normandie, sur l\'exploitation, avec du cidre issu de notre production. Ce vinaigre de cidre fermier est l\'aboutissement d\'une longue et lente transformation du cidre en vinaigre. Il vieillit pendant plusieurs années dans des fûts en chêne.',
          'created_at'  => $date->format('Y-m-d H:i:s'),
          'category_id' => 10
      );

      $items[] = array(
          'name'        => 'Confit de cidre',
          'comment'     => 'Le confit de cidre du Pressoir d\'Or est transformé en Normandie, avec des pommes issues de notre verger et du cidre transformé sur l\'exploitation. Cette gelée est délicieuse, elle est douce, trés parfumée. On y retrouve toutes les caractéristiques du cidre.',
          'created_at'  => $date->format('Y-m-d H:i:s'),
          'category_id' => 10
      );

      $items[] = array(
          'name'        => 'Oeufs',
          'comment'     => 'Vente d\'oeufs directement à la ferme',
          'created_at'  => $date->format('Y-m-d H:i:s'),
          'category_id' => 11
      );

      $items[] = array(
          'name'        => 'Glaces Artisanales',
          'comment'     => 'Glaces de la ferme et sorbets. Crèmes glacées fabriquées artisanalement avec le lait et la crème de la ferme. Plus de 50 parfums à découvrir!',
          'created_at'  => $date->format('Y-m-d H:i:s'),
          'category_id' => 5
      );

      $items[] = array(
          'name'        => 'Fromage de chèvre',
          'comment'     => 'Caugéen, Bûche, rond cendré, brique, crottin, apéribiket, fromage blanc, lait, feuilletés, tomme de chèvre, le vanille, la boule, la pyramide aromatiques : oignon-paprika duo-poivron poivre-vert bambin.',
          'created_at'  => $date->format('Y-m-d H:i:s'),
          'category_id' => 5
      );

      $items[] = array(
          'name'        => 'Fromages de chèvre fermiers',
          'comment'     => 'Vous pourrez déguster des fromages depuis le stade faisselle jusqu\'au sec en passant par le frais, le 1/2 sec, le cendré, la bûche, la pyramide, la tome, et les aromatisés (ail, poivre, herbes de provence, saveurs du jardin)... Les fromages sont moulés à la louche et salés au sel de Camargue.',
          'created_at'  => $date->format('Y-m-d H:i:s'),
          'category_id' => 5
      );

      $items[] = array(
          'name'        => 'Fruits frais en barquette',
          'comment'     => 'A la saison, nous vous proposons nos fruits frais, cueillis et préparés en barquettes.',
          'created_at'  => $date->format('Y-m-d H:i:s'),
          'category_id' => 6
      );

      $items[] = array(
          'name'        => 'Confitures extra de fraise, framboise ou mûre',
          'comment'     => 'Toute l\'année, profitez de nos "Gourmandises Maison", réalisées, à la ferme, de manière traditionnelle, à partir des fruits issus de notre production.',
          'created_at'  => $date->format('Y-m-d H:i:s'),
          'category_id' => 10
      );

      $items[] = array(
          'name'        => 'Escargots en coquille',
          'comment'     => 'Toute l\'année, des bons escargots !',
          'created_at'  => $date->format('Y-m-d H:i:s'),
          'category_id' => 10
      );

      $items[] = array(
          'name'        => 'Huile de colza',
          'comment'     => 'Huiles de colza et de tournesol pressée à froid et farines de blé, seigle, blé noir écrasées sur meule de pierre et aussi, des tuiles aux graines de colza torrefié, des sablés aux graines de colza broyé, des chocolats aux graines de colza torrefié, du savon fabriqué avec de l\'huile de colza.',
          'created_at'  => $date->format('Y-m-d H:i:s'),
          'category_id' => 10
      );

      $items[] = array(
          'name'        => 'Agneau',
          'comment'     => 'Caissettes de 1/2 agneau frais ou sous vide, agneaux au détail, crépinettes d’agneau, saucisses, merguez et brochettes d’agneau, lapin entier, au détail, crépinettes de lapin, râbles de lapin farcis et rillettes de lapin.',
          'created_at'  => $date->format('Y-m-d H:i:s'),
          'category_id' => 4
      );
    DB::table('items')->insert($items);
    }
}
