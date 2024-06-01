<?php

namespace App\DataFixtures;

use App\Entity\Categorie;
use App\Entity\Plat;
use App\Entity\Detail;
use App\Entity\Commande;
use App\Entity\Utilisateur;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class TheDistrict extends Fixture
{
    public function load(ObjectManager $manager): void
    {
<<<<<<< HEAD
        // include base 
        include 'districtbase.php';
=======

        $categorie = array(
            array('libelle' => 'Pizza', 'image' => 'cat_pizza.jpg', 'active' => 'Yes'),
            array('libelle' => 'Burger', 'image' => 'cat_burger.jpg', 'active' => 'Yes'),
            array('libelle' => 'Carnivore', 'image' => 'cat_carnivore.jpg', 'active' => 'Yes'),
            array('libelle' => 'Pasta', 'image' => 'cat_pasta.jpg', 'active' => 'Yes'),
            array('libelle' => 'Salade', 'image' => 'cat_salade.jpg', 'active' => 'Yes'),
            array('libelle' => 'Asian Food', 'image' => 'cat_sushi.jpg', 'active' => 'No'),
            array('libelle' => 'Sandwich', 'image' => 'cat_sandwich.jpg', 'active' => 'Yes'),
            array('libelle' => 'Poisson', 'image' => 'cat_poisson.jpg', 'active' => 'Yes'),
            array('libelle' => 'Partage', 'image' => 'cat_partage.jpg', 'active' => 'No')
        );

        $plat = array(
            array('libelle' => 'Classic burger', 'description' => 'Dégustez le délice intemporel de notre Burger Classique, où chaque bouchée est une symphonie de saveurs parfaitement élaborée. Niché entre deux pains briochés moelleux et toastés se trouve une généreuse portion de steak de bœuf juteux, grillé à la perfection selon votre préférence, offrant un contraste alléchant entre la saveur fumée et la tendreté de la viande.', 'prix' => '12.00', 'image' => 'plat_burger_classic.jpg', 'categorie_id' => 2, 'active' => 'Yes'),
            array('libelle' => 'burger traditionelle', 'description' => 'Plongez dans une expérience gustative inoubliable avec notre Burger Traditionnel, un véritable hymne à la simplicité et au plaisir culinaire. Ce chef-d\'œuvre de saveurs réconfortantes commence par un généreux steak de bœuf grillé à la perfection, dégageant des arômes alléchants et une tendreté incomparable à chaque bouchée.', 'prix' => '11.00', 'image' => 'plat_burger.jpg', 'categorie_id' => 2, 'active' => 'Yes'),
            array('libelle' => 'Giga burger', 'description' => 'Préparez-vous à une aventure culinaire hors du commun avec notre Giga Burger Épique, une création monumentale conçue pour satisfaire les appétits les plus voraces et éblouir les amateurs de sensations fortes gastronomiques. Ce chef-d\'œuvre culinaire commence par une montagne de tendres steaks de bœuf grillés à la perfection, empilés les uns sur les autres pour former une tour de saveurs inégalée.', 'prix' => '14.00', 'image' => 'plat_burger_giga.jpg', 'categorie_id' => 2, 'active' => 'Yes'),
            array('libelle' => 'Pizza 4 fromage', 'description' => 'Plongez dans un tourbillon de fromages exquis avec notre Pizza Quatre Fromages, une création délectable qui séduira les amateurs de fromage les plus exigeants. Sur une base de pâte à pizza artisanale, légère et croustillante, se déploie un festin de fromages fins soigneusement sélectionnés.', 'prix' => '13.00', 'image' => 'plat_pizza_fromage.jpg', 'categorie_id' => 1, 'active' => 'Yes'),
            array('libelle' => 'Pizza pepperoni', 'description' => 'Plongez dans l\'essence de l\'Italie avec notre Pizza Pepperoni, une explosion de saveurs audacieuses et épicées qui ravira vos papilles à chaque bouchée. Sur une base de pâte à pizza fraîchement préparée, légère et croustillante, se déploie un festin de saveurs inégalées.', 'prix' => '12.00', 'image' => 'plat_pizza_peperoni.jpg', 'categorie_id' => 1, 'active' => 'Yes'),
            array('libelle' => 'Pizza hawaienne', 'description' => 'Laissez-vous transporter vers des rivages ensoleillés avec notre Pizza Hawaïenne, une fusion exotique de saveurs tropicales qui éveillera vos sens à chaque bouchée. Sur une base de pâte à pizza fraîchement préparée, légère et dorée, se marient des ingrédients soigneusement sélectionnés pour créer une expérience culinaire inoubliable.', 'prix' => '14.00', 'image' => 'plat_pizza_hawai.jpg', 'categorie_id' => 1, 'active' => 'Yes'),
            array('libelle' => 'Epaule d\'Agneau braisée aux Herbes', 'description' => 'Plongez dans un festin de saveurs méditerranéennes avec notre épaule d\'agneau braisée aux herbes, un plat réconfortant qui éveillera vos sens et éblouira vos convives. Préparée avec soin et amour, cette pièce d\'agneau tendre et juteuse est imprégnée d\'un mélange d\'herbes fraîches et d\'épices parfumées, offrant une explosion de saveurs à chaque bouchée.', 'prix' => '12.00', 'image' => 'plat_carnivore_agneau.jpg', 'categorie_id' => 3, 'active' => 'Yes'),
            array('libelle' => 'Roti de boeuf aux Herbes', 'description' => 'Découvrez l\'exquisité de notre Rôti de Bœuf aux Herbes, un plat qui incarne l\'élégance et la simplicité de la cuisine traditionnelle. Ce rôti de bœuf est soigneusement sélectionné, assaisonné avec un mélange d\'herbes fraîches et rôti lentement pour révéler toute sa tendreté et son arôme délicieux.', 'prix' => '14.00', 'image' => 'plat_carnivore_roti.jpg', 'categorie_id' => 3, 'active' => 'Yes'),
            array('libelle' => 'Steak Frites', 'description' => 'Dégustez notre savoureux steak accompagné de frites croustillantes. Un classique réconfortant qui ravira vos papilles à chaque bouchée.', 'prix' => '15.00', 'image' => 'plat_carnivore_steak.jpg', 'categorie_id' => 3, 'active' => 'Yes'),
            array('libelle' => 'Pennes aux Poulet', 'description' => 'Savourez nos délicieuses pennes accompagnées de tendres morceaux de poulet grillé, le tout enrobé d une sauce tomate maison et saupoudré de parmesan frais. Un plat réconfortant qui saura satisfaire toutes les papilles.', 'prix' => '14.50', 'image' => 'plat_pasta_pennepoulet.jpg', 'categorie_id' => 4, 'active' => 'Yes'),
            array('libelle' => 'Tagliatelles à la Sauce Tomate', 'description' => 'Dégustez nos tagliatelles fraîches nappées d une délicieuse sauce tomate maison, relevée d herbes fraîches et d ail. Un plat italien classique qui vous transportera directement en Méditerranée.', 'prix' => '13.50', 'image' => 'plat_pasta_tagliatelle.jpg', 'categorie_id' => 4, 'active' => 'Yes'),
            array('libelle' => 'Spaghetti à la Sauce Tomate', 'description' => 'Savourez nos spaghettis al dente enrobés d une sauce tomate maison, préparée avec des tomates mûries au soleil, de l ail, de l huile d olive et des herbes fraîches. Un plat simple mais délicieusement réconfortant.', 'prix' => '12.00', 'image' => 'plat_pasta_spaghetti.jpg', 'categorie_id' => 4, 'active' => 'Yes'),
            array('libelle' => 'classic Salade', 'description' => 'Dégustez notre salade fraîche et croquante composée de laitue iceberg, de tomates juteuses, de concombres frais, de carottes râpées et de tranches d\'oignon rouge. Accompagnée d\'une vinaigrette maison légère et parfumée, cette salade est le choix parfait pour une entrée rafraîchissante ou un plat léger.', 'prix' => '11.00', 'image' => 'plat_salade_classic.jpg', 'categorie_id' => 5, 'active' => 'Yes'),
            array('libelle' => 'Salade au Saumon', 'description' => 'Savourez notre délicieuse salade au saumon, un mélange équilibré de laitue croquante, d\'épinards frais, de concombres tranchés, d\'oignons rouges et de tomates cerises, accompagné de morceaux de saumon grillé ou fumé. Garnie de câpres et de quartiers de citron pour une touche de fraîcheur, cette salade est sublimée par une vinaigrette à l\'aneth maison.', 'prix' => '13.00', 'image' => 'plat_salade_saumon.jpg', 'categorie_id' => 5, 'active' => 'Yes'),
            array('libelle' => 'Salade au Poulet', 'description' => 'Dégustez notre savoureuse salade au poulet, composée de laitue croquante, de tomates juteuses, de concombres frais, d\'avocat crémeux, de maïs doux, et de tranches d\'oignon rouge, le tout agrémenté de morceaux de poulet grillé et assaisonné. Accompagnée d\'une vinaigrette maison légère et parfumée, cette salade est un choix délicieux et équilibré pour un repas satisfaisant.', 'prix' => '14.00', 'image' => 'plat_salade_poulet.jpg', 'categorie_id' => 5, 'active' => 'Yes'),
            array('libelle' => 'Sushis saumon', 'description' => 'Savourez nos délicieux sushis au saumon, préparés avec du riz vinaigré et des tranches de saumon frais, roulés dans de l\'algue nori. Chaque bouchée offre un équilibre parfait entre le riz tendre et le saumon fondant, accompagné de wasabi et de sauce soja pour une expérience gustative authentique.', 'prix' => '12.00', 'image' => 'plat_sushi_saumon.jpg', 'categorie_id' => 6, 'active' => 'Yes'),
            array('libelle' => 'Sushis Assortis', 'description' => 'Découvrez notre sélection d\'exquis sushis assortis, préparés avec du riz vinaigré et une variété de garnitures savoureuses telles que le saumon, le thon, l\'avocat, le concombre, et bien plus encore. Chaque bouchée offre une explosion de saveurs et une expérience culinaire authentique.', 'prix' => '15.00', 'image' => 'plat_sushi_sushi.jpg', 'categorie_id' => 6, 'active' => 'Yes'),
            array('libelle' => 'Ramen', 'description' => 'Dégustez nos délicieux ramen, un plat japonais réconfortant composé de nouilles fraîches, d\'un bouillon savoureux et d\'une variété d\'ingrédients tels que des tranches de porc, des œufs mollets, des légumes frais et des algues nori. Chaque bol est une explosion de saveurs et une expérience culinaire inoubliable.', 'prix' => '14.00', 'image' => 'plat_sushi_ramen.jpg', 'categorie_id' => 6, 'active' => 'Yes'),
            array('libelle' => 'Sandwich au Poulet', 'description' => 'Dégustez notre délicieux sandwich au poulet, composé de blancs de poulet grillés, de laitue croquante, de tomates juteuses et de mayonnaise, le tout enveloppé dans du pain moelleux et doré. Un classique réconfortant qui saura satisfaire vos papilles.', 'prix' => '10.00', 'image' => 'plat_sandwich_poulet.jpg', 'categorie_id' => 7, 'active' => 'Yes'),
            array('libelle' => 'Tartine avocat', 'description' => 'Dégustez notre savoureuse tartine à l\'avocat, garnie de tranches d\'avocat mûr, de tomates cerises, de jeunes pousses d\'épinards, et d\'une touche de sel et de poivre. Servie sur du pain grillé, cette tartine est un choix délicieusement léger pour une pause déjeuner ou une collation.', 'prix' => '9.00', 'image' => 'plat_sandwich_tartine.jpg', 'categorie_id' => 7, 'active' => 'Yes'),
            array('libelle' => 'Wrap', 'description' => 'Dégustez notre délicieux wrap au poulet, garni de blancs de poulet grillés, de laitue croquante, de tomates fraîches, de fromage râpé et de sauce ranch, le tout enveloppé dans une tortilla de blé moelleuse. Un repas rapide et savoureux pour combler vos envies.', 'prix' => '11.00', 'image' => 'plat_sandwich_wrap.jpg', 'categorie_id' => 7, 'active' => 'Yes'),
            array('libelle' => 'Pavé de saumon grillé', 'description' => 'Savourez notre délicieux pavé de saumon grillé, servi avec un accompagnement de votre choix. Le saumon est grillé à la perfection, offrant une texture tendre et savoureuse, avec une légère caramélisation à l\'extérieur. Un choix parfait pour les amateurs de fruits de mer.', 'prix' => '18.00', 'image' => 'plat_poisson_saumon.jpg', 'categorie_id' => 8, 'active' => 'Yes'),
            array('libelle' => 'Filet de merlu Grillé', 'description' => 'Dégustez notre succulent filet de merlu grillé, accompagné d\'une garniture de saison. Le merlu est grillé à la perfection, offrant une chair tendre et délicate, avec des arômes subtils de la mer. Un choix parfait pour les amateurs de poisson.', 'prix' => '16.00', 'image' => 'plat_poisson_merlu.jpg', 'categorie_id' => 8, 'active' => 'Yes'),
            array('libelle' => 'Fish & Chips', 'description' => 'Dégustez notre délicieux fish & chips, composé de filets de poisson frais, enrobés d\'une pâte croustillante et dorée, accompagnés de frites fraîchement préparées. Servi avec une sauce tartare maison et une tranche de citron, ce plat emblématique de la cuisine britannique est un régal pour les amateurs de fruits de mer.', 'prix' => '14.00', 'image' => 'plat_poisson_fish&chips.jpg', 'categorie_id' => 8, 'active' => 'Yes'),
            array('libelle' => 'Plateau d\'assortiment Partager', 'description' => 'Découvrez notre plateau de charcuterie à partager, garni d\'une sélection de délices salés tels que du jambon cru, du saucisson, des terrines, des cornichons, des olives et du fromage. Accompagné de pain frais et de condiments, ce plateau est parfait pour partager un moment convivial entre amis ou en famille.', 'prix' => '18.00', 'image' => 'plat_partage_assortiment.jpg', 'categorie_id' => 9, 'active' => 'Yes'),
            array('libelle' => 'Assiette de Charcuterie', 'description' => 'Savourez notre délicieuse assiette de charcuterie, garnie d\'une sélection variée de spécialités charcutières telles que du jambon cru, du saucisson, du pâté, des rillettes et des cornichons. Un assortiment généreux de saveurs salées, parfait pour les amateurs de charcuterie.', 'prix' => '16.00', 'image' => 'plat_partage_charcuterie.jpg', 'categorie_id' => 9, 'active' => 'Yes')

        );



        $detail = array(
            array('quantite' => 3, 'plat_id' => 1, 'commande_id' => 1),
            array('quantite' => 2, 'plat_id' => 2, 'commande_id' => 2),
            array('quantite' => 1, 'plat_id' => 4, 'commande_id' => 3),
            array('quantite' => 3, 'plat_id' => 6, 'commande_id' => 4),
            array('quantite' => 2, 'plat_id' => 10, 'commande_id' => 5),
            array('quantite' => 4, 'plat_id' => 3, 'commande_id' => 6),
            array('quantite' => 5, 'plat_id' => 7, 'commande_id' => 7),
            array('quantite' => 3, 'plat_id' => 8, 'commande_id' => 8),
            array('quantite' => 1, 'plat_id' => 11, 'commande_id' => 9),
            array('quantite' => 1, 'plat_id' => 12, 'commande_id' => 10),
            array('quantite' => 6, 'plat_id' => 5, 'commande_id' => 11),
            array('quantite' => 2, 'plat_id' => 13, 'commande_id' => 12),
        );


        $commande = array(
            array('id' => 1, 'date_commande' => '2024-03-04 08:30:00', 'total' => '36.00',  'etat' => 1, 'utilisateur_id' => 1),
            array('id' => 2, 'date_commande' => '2024-03-04 09:15:00', 'total' => '26.00',  'etat' => 3, 'utilisateur_id' => 2),
            array('id' => 3, 'date_commande' => '2024-03-04 10:00:00', 'total' => '15.00',  'etat' => 2, 'utilisateur_id' => 3),
            array('id' => 4, 'date_commande' => '2024-03-04 11:45:00', 'total' => '42.00',  'etat' => 0, 'utilisateur_id' => 4),
            array('id' => 5, 'date_commande' => '2024-03-04 13:20:00', 'total' => '29.00',  'etat' => 1, 'utilisateur_id' => 5),
            array('id' => 6, 'date_commande' => '2024-03-04 14:10:00', 'total' => '56.00',  'etat' => 3, 'utilisateur_id' => 6),
            array('id' => 7, 'date_commande' => '2024-03-04 15:05:00', 'total' => '12.00',  'etat' => 0, 'utilisateur_id' => 7),
            array('id' => 8, 'date_commande' => '2024-03-04 16:30:00', 'total' => '14.00',  'etat' => 2, 'utilisateur_id' => 8),
            array('id' => 9, 'date_commande' => '2024-03-04 17:20:00', 'total' => '40.50',  'etat' => 3, 'utilisateur_id' => 9),
            array('id' => 10, 'date_commande' => '2024-03-04 18:45:00', 'total' => '24.00',  'etat' => 1, 'utilisateur_id' => 10),
            array('id' => 11, 'date_commande' => '2024-03-04 19:30:00', 'total' => '24.00',  'etat' => 2, 'utilisateur_id' => 11),
            array('id' => 12, 'date_commande' => '2024-03-04 20:15:00', 'total' => '14.00',  'etat' => 0, 'utilisateur_id' => 12)
        );

        $utilisateur = array(
            array('id' => 1, 'email' => 'alice@example.com', 'password' => '$2y$10$6am1aelazku8Ish9Uoqk4eGm9Wc/xv6GTl2xf19anc.emYa4JWcDq', 'nom' => 'Johnson', 'prenom' => 'Alice', 'telephone' => '7894561230', 'adresse' => '123 Main Street', 'cp' => '80000', 'ville' => 'Amiens'),
            array('id' => 2, 'email' => 'bob@example.com', 'password' => '$2y$10$6am1aelazku8Ish9Uoqk4eGm9Wc/xv6GTl2xf19anc.emYa4JWcDq', 'nom' => 'Smith', 'prenom' => 'Bob', 'telephone' => '741852630', 'adresse' => '456 Elm Street', 'cp' => '80000', 'ville' => 'Amiens'),
            array('id' => 3, 'email' => 'emily@example.com', 'password' => '$2y$10$6am1aelazku8Ish9Uoqk4eGm9Wc/xv6GTl2xf19anc.emYa4JWcDq', 'nom' => 'Brown', 'prenom' => 'Emily', 'telephone' => '745896210', 'adresse' => '789 Oak Avenue', 'cp' => '80000', 'ville' => 'Amiens'),
            array('id' => 4, 'email' => 'david@example.com', 'password' => '$2y$10$6am1aelazku8Ish9Uoqk4eGm9Wc/xv6GTl2xf19anc.emYa4JWcDq', 'nom' => 'Wilson', 'prenom' => 'David', 'telephone' => '7415963210', 'adresse' => '963 Pne Street', 'cp' => '80000', 'ville' => 'Amiens'),
            array('id' => 5, 'email' => 'sophia@example.com', 'password' => '$2y$10$6am1aelazku8Ish9Uoqk4eGm9Wc/xv6GTl2xf19anc.emYa4JWcDq', 'nom' => 'Martiniez', 'prenom' => 'Sophia', 'telephone' => '741258630', 'adresse' => '258 Cesar Street', 'cp' => '80000', 'ville' => 'Amiens'),
            array('id' => 6, 'email' => 'michael@example.com', 'password' => '$2y$10$6am1aelazku8Ish9Uoqk4eGm9Wc/xv6GTl2xf19anc.emYa4JWcDq', 'nom' => 'Johnson', 'prenom' => 'Mickael', 'telephone' => '7894563210', 'adresse' => '753 Maple Street', 'cp' => '80000', 'ville' => 'Amiens'),
            array('id' => 7, 'email' => 'jessica@example.com', 'password' => '$2y$10$6am1aelazku8Ish9Uoqk4eGm9Wc/xv6GTl2xf19anc.emYa4JWcDq', 'nom' => 'Miller', 'prenom' => 'jessica', 'telephone' => '7538963210', 'adresse' => '852 Walut Street', 'cp' => '80000', 'ville' => 'Amiens'),
            array('id' => 8, 'email' => 'daniel@example.com', 'password' => '$2y$10$6am1aelazku8Ish9Uoqk4eGm9Wc/xv6GTl2xf19anc.emYa4JWcDq', 'nom' => 'Davis', 'prenom' => 'Daniel', 'telephone' => '7485963210', 'adresse' => '369 Pine Street', 'cp' => '80000', 'ville' => 'Amiens'),
            array('id' => 9, 'email' => 'olivia@example.com', 'password' => '$2y$10$6am1aelazku8Ish9Uoqk4eGm9Wc/xv6GTl2xf19anc.emYa4JWcDq', 'nom' => 'Wilson', 'prenom' => 'Olivia', 'telephone' => '7418529630', 'adresse' => '963 Cesar Street', 'cp' => '80000', 'ville' => 'Amiens'),
            array('id' => 10, 'email' => 'james@example.com', 'password' => '$2y$10$6am1aelazku8Ish9Uoqk4eGm9Wc/xv6GTl2xf19anc.emYa4JWcDq', 'nom' => 'Taylor', 'prenom' => 'James', 'telephone' => '9876543210', 'adresse' => '754 Maple Street', 'cp' => '80000', 'ville' => 'Amiens'),
            array('id' => 11, 'email' => 'emma@example.com', 'password' => '$2y$10$6am1aelazku8Ish9Uoqk4eGm9Wc/xv6GTl2xf19anc.emYa4JWcDq', 'nom' => 'Garcia', 'prenom' => 'Emma', 'telephone' => '1472583690', 'adresse' => '987 Oak Street', 'cp' => '80000', 'ville' => 'Amiens'),
            array('id' => 12, 'email' => 'william@example.com', 'password' => '$2y$10$6am1aelazku8Ish9Uoqk4eGm9Wc/xv6GTl2xf19anc.emYa4JWcDq', 'nom' => 'Clark', 'prenom' => 'William', 'telephone' => '6543219870', 'adresse' => '471 Pinr Street', 'cp' => '80000', 'ville' => 'Amiens'),
            array('id' => 13, 'email' => 'chef@example.com', 'password' => '$2y$10$6am1aelazku8Ish9Uoqk4eGm9Wc/xv6GTl2xf19anc.emYa4JWcDq', 'nom' => 'Herbomel', 'prenom' => 'Logan', 'telephone' => '0616311868', 'adresse' => '11 Route Nationale', 'cp' => '80370', 'ville' => 'Bernaville'),
            array('id' => 14, 'email' => 'TheDistrict@example.com', 'password' => '$2y$10$6am1aelazku8Ish9Uoqk4eGm9Wc/xv6GTl2xf19anc.emYa4JWcDq', 'nom' => 'Loper', 'prenom' => 'Dave', 'telephone' => '0647859632', 'adresse' => '23 rue foch', 'cp' => '80000', 'ville' => 'Amiens')

        );

>>>>>>> dev

        foreach ($utilisateur as $user) {
            $userDB = new Utilisateur();
            $userDB
                ->setEmail($user['email'])
                ->setPassword($user['password'])
                ->setNom($user['nom'])
                ->setPrenom($user['prenom'])
                ->setTelephone($user['telephone'])
                ->setAdresse($user['adresse'])
                ->setCp($user['cp'])
                ->setVille($user['ville']);

            $manager->persist($userDB);
        }
        $manager->flush();

        $userRepo = $manager->getRepository(Utilisateur::class);

        foreach ($commande as $comm) {
            $commandeDB = new Commande();
            $dateCommande = new \DateTimeImmutable($comm['date_commande']);
            $commandeDB
                ->setDateCommande($dateCommande)
                ->setTotal($comm['total'])
                ->setEtat($comm['etat']);
            $user = $userRepo->find($comm['utilisateur_id']);
            $commandeDB->setUtilisateur($user);
            $manager->persist($commandeDB);
        }
        $manager->flush();

        foreach ($categorie as $categorie) {
            $categorieDB = new Categorie();
            $categorieDB
                ->setLibelle($categorie['libelle'])
                ->setImage($categorie['image'])
                ->setActive($categorie['active']);
            $manager->persist($categorieDB);
        }
        $manager->flush();
        $categorieRepo = $manager->getRepository(Categorie::class);

        foreach ($plat as $plat) {
            $platDB = new Plat();
            $platDB
                ->setLibelle($plat['libelle'])
                ->setImage($plat['image'])
                ->setActive($plat['active'])
                ->setDescription($plat['description'])
                ->setPrix($plat['prix']);
            $categorie = $categorieRepo->find($plat['categorie_id']);
            $platDB->setCategorie($categorie);
            $manager->persist($platDB);
        }
        $manager->flush();

        $platRepo = $manager->getRepository(Plat::class);
        $commandeRepo = $manager->getRepository(Commande::class);

        foreach ($detail as $detail) {
            $detailDB = new Detail();
            $detailDB
                ->setQuantite($detail['quantite']);
            $plat = $platRepo->find($detail['plat_id']);
            $detailDB->setPlat($plat);
            $commande = $commandeRepo->find($detail['commande_id']);
            $detailDB->setCommande($commande);
            $manager->persist($detailDB);
        }
        $manager->flush();
    }
}
