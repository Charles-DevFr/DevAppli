<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Category;
use App\Entity\Plats;

class District extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);


    $categoryburger = new Category ();
    $categoryburger -> setLibelle ("Burger");
    $categoryburger -> setImage ("burger_cat.jpg");
    $categoryburger -> setActive ("Yes");
    $manager->persist($categoryburger);

    $categorypizza = new Category ();
    $categorypizza -> setLibelle ("Pizza");
    $categorypizza -> setImage ("pizza_cat.jpg");
    $categorypizza -> setActive ("Yes");
    $manager->persist($categorypizza);

    $categorywrap = new Category ();
    $categorywrap -> setLibelle ("Wrap");
    $categorywrap -> setImage ("wrap_cat.jpg");
    $categorywrap -> setActive ("Yes");
    $manager->persist($categorywrap);

    $categorypasta = new Category ();
    $categorypasta -> setLibelle ("Pasta");
    $categorypasta -> setImage ("pasta_cat.jpg");
    $categorypasta -> setActive ("Yes");
    $manager->persist($categorypasta);

    $categoryasian = new Category ();
    $categoryasian -> setLibelle ("Asian");
    $categoryasian -> setImage ("asian_food_cat.jpg");
    $categoryasian -> setActive ("Yes");
    $manager->persist($categoryasian);

    $categorysalade = new Category ();
    $categorysalade -> setLibelle ("Salade");
    $categorysalade -> setImage ("salade_cat.jpg");
    $categorysalade -> setActive ("Yes");
    $manager->persist($categorysalade);

    $categoryplatduterroir = new Category ();
    $categoryplatduterroir -> setLibelle ("Platduterroir");
    $categoryplatduterroir -> setImage ("Platduterroir_cat.jpg");
    $categoryplatduterroir -> setActive ("Yes");
    $manager->persist($categoryplatduterroir);

    $categoryboulangerie = new Category ();
    $categoryboulangerie -> setLibelle ("Boulangerie");
    $categoryboulangerie -> setImage ("sandwich_cat.jpg");
    $categoryboulangerie -> setActive ("Yes");
    $manager->persist($categoryboulangerie);

    $categorysnack = new Category ();
    $categorysnack -> setLibelle ("Snack");
    $categorysnack -> setImage ("Snack_cat.jpg");
    $categorysnack -> setActive ("Yes");
    $manager->persist($categorysnack);

    $categoryveggie = new Category ();
    $categoryveggie -> setLibelle ("Veggie");
    $categoryveggie -> setImage ("veggie_cat.jpg");
    $categoryveggie -> setActive ("Yes");
    $manager->persist($categoryveggie);

    $categorydessert = new Category ();
    $categorydessert -> setLibelle ("Dessert");
    $categorydessert -> setImage ("Dessert_cat.jpg");
    $categorydessert -> setActive ("Yes");
    $manager->persist($categorydessert);

    $categoryfromage = new Category ();
    $categoryfromage -> setLibelle ("Fromage");
    $categoryfromage -> setImage ("Fromage_cat.jpg");
    $categoryfromage -> setActive ("Yes");
    $manager->persist($categoryfromage);



    $platbobunpoulet = new Plats ();
    $platbobunpoulet -> setLibelle ("Bo Bun Poulet");
    $platbobunpoulet -> setDescription ("Un voyage culinaire au pays du soleil levant");
    $platbobunpoulet -> setPrix ("8");
    $platbobunpoulet -> setImage ("bo-bun-poulet.png");
    $platbobunpoulet -> $setCategory ($categoryasian);
    $platbobunpoulet -> setActive ("Yes");
    $manager->persist($platbobunpoulet);

    $platboeufloclac = new Plats ();
    $platboeufloclac -> setLibelle ("Boeuf LoClac");
    $platboeufloclac -> setDescription ("Un voyage culinaire au pays du soleil levant");
    $platboeufloclac -> setPrix ("10");
    $platboeufloclac -> setImage ("boeuf-lo-clac.png");
    $platboeufloclac -> $setCategory ($categoryasian);
    $platboeufloclac -> setActive ("Yes");
    $manager->persist($platboeufloclac);

    $platboeufoignons = new Plats ();
    $platboeufoignons -> setLibelle ("Boeuf oignons");
    $platboeufoignons -> setDescription ("Un voyage culinaire au pays du soleil levant");
    $platboeufoignons -> setPrix ("8,50");
    $platboeufoignons -> setImage ("boeuf-oignons.png");
    $platboeufoignons -> $setCategory ($categoryasian);
    $platboeufoignons -> setActive ("Yes");
    $manager->persist($platboeufoignons);

    $platchirachimixte = new Plats ();
    $platchirachimixte -> setLibelle ("Chirachi mixte");
    $platchirachimixte -> setDescription ("Un voyage culinaire au pays du soleil levant");
    $platchirachimixte -> setPrix ("8,80");
    $platchirachimixte -> setImage ("chirachi-mixte.png");
    $platchirachimixte -> $setCategory ($categoryasian);
    $platchirachimixte -> setActive ("Yes");
    $manager->persist($platchirachimixte);

    $platcrevetteselpoivre = new Plats ();
    $platcrevetteselpoivre -> setLibelle ("Crevettes sel poivre");
    $platcrevetteselpoivre -> setDescription ("Un voyage culinaire au pays du soleil levant");
    $platcrevetteselpoivre -> setPrix ("8,40");
    $platcrevetteselpoivre -> setImage ("crevettes-sel-poivre.png");
    $platcrevetteselpoivre -> $setCategory ($categoryasian);
    $platcrevetteselpoivre -> setActive ("Yes");
    $manager->persist($platcrevetteselpoivre);
    
    $platpouletaigredouce = new Plats ();
    $platpouletaigredouce -> setLibelle ("Poulet aigre douce");
    $platpouletaigredouce -> setDescription ("Un voyage culinaire au pays du soleil levant");
    $platpouletaigredouce -> setPrix ("8,80");
    $platpouletaigredouce -> setImage ("poulet-aigre-douce.png");
    $platpouletaigredouce -> $setCategory ($categoryasian);
    $platpouletaigredouce -> setActive ("Yes");
    $manager->persist($platpouletaigredouce);

    $platpouletsaucepiquante = new Plats ();
    $platpouletsaucepiquante -> setLibelle ("Poulet sauce piquante");
    $platpouletsaucepiquante -> setDescription ("Un voyage culinaire au pays du soleil levant");
    $platpouletsaucepiquante -> setPrix ("8,20");
    $platpouletsaucepiquante -> setImage ("poulet-sauce-piquante.png");
    $platpouletsaucepiquante -> $setCategory ($categoryasian);
    $platpouletsaucepiquante -> setActive ("Yes");
    $manager->persist($platpouletsaucepiquante);

    $platpouletselpoivre = new Plats ();
    $platpouletselpoivre -> setLibelle ("Poulet sel poivre");
    $platpouletselpoivre -> setDescription ("Un voyage culinaire au pays du soleil levant");
    $platpouletselpoivre -> setPrix ("8,40");
    $platpouletselpoivre -> setImage ("poulet-sel-poivre.png");
    $platpouletselpoivre -> $setCategory ($categoryasian);
    $platpouletselpoivre -> setActive ("Yes");
    $manager->persist($platpouletselpoivre);

    $platburger1 = new Plats ();
    $platburger1 -> setLibelle ("Burger 1");
    $platburger1 -> setDescription ("Un hymne au burger: une symphonie de saveur dans un pain moelleux");
    $platburger1 -> setPrix ("12");
    $platburger1 -> setImage ("burger1.png");
    $platburger1 -> $setCategory ($categoryburger);
    $platburger1 -> setActive ("Yes");
    $manager->persist($platburger1);

    $platburger2 = new Plats ();
    $platburger2 -> setLibelle ("Burger 2");
    $platburger2 -> setDescription ("Un hymne au burger: une symphonie de saveur dans un pain moelleux");
    $platburger2 -> setPrix ("11");
    $platburger2 -> setImage ("burger2.png");
    $platburger2 -> $setCategory ($categoryburger);
    $platburger2 -> setActive ("Yes");
    $manager->persist($platburger2);

    $platburger3 = new Plats ();
    $platburger3 -> setLibelle ("Burger 3");
    $platburger3 -> setDescription ("Un hymne au burger: une symphonie de saveur dans un pain moelleux");
    $platburger3 -> setPrix ("11,50");
    $platburger3 -> setImage ("burger3.png");
    $platburger3 -> $setCategory ($categoryburger);
    $platburger3 -> setActive ("Yes");
    $manager->persist($platburger3);

    $platburger4 = new Plats ();
    $platburger4 -> setLibelle ("Burger 4");
    $platburger4 -> setDescription ("Un hymne au burger: une symphonie de saveur dans un pain moelleux");
    $platburger4 -> setPrix ("12,50");
    $platburger4 -> setImage ("burger4.png");
    $platburger4 -> $setCategory ($categoryburger);
    $platburger4 -> setActive ("Yes");
    $manager->persist($platburger4);

    $platburger5 = new Plats ();
    $platburger5 -> setLibelle ("Burger 5");
    $platburger5 -> setDescription ("Un hymne au burger: une symphonie de saveur dans un pain moelleux");
    $platburger5 -> setPrix ("14,80");
    $platburger5 -> setImage ("burger5.png");
    $platburger5 -> $setCategory ($categoryburger);
    $platburger5 -> setActive ("Yes");
    $manager->persist($platburger5);

    $platburger6 = new Plats ();
    $platburger6 -> setLibelle ("Burger 6");
    $platburger6 -> setDescription ("Un hymne au burger: une symphonie de saveur dans un pain moelleux");
    $platburger6 -> setPrix ("13,40");
    $platburger6 -> setImage ("burger6.png");
    $platburger6 -> $setCategory ($categoryburger);
    $platburger6 -> setActive ("Yes");
    $manager->persist($platburger6);

    $platburger7 = new Plats ();
    $platburger7 -> setLibelle ("Burger 7");
    $platburger7 -> setDescription ("Un hymne au burger: une symphonie de saveur dans un pain moelleux");
    $platburger7 -> setPrix ("11,80");
    $platburger7 -> setImage ("burger7.png");
    $platburger7 -> $setCategory ($categoryburger);
    $platburger7 -> setActive ("Yes");
    $manager->persist($platburger7);

    $platburger8 = new Plats ();
    $platburger8 -> setLibelle ("Burger 8");
    $platburger8 -> setDescription ("Un hymne au burger: une symphonie de saveur dans un pain moelleux");
    $platburger8 -> setPrix ("12,40");
    $platburger8 -> setImage ("burger8.png");
    $platburger8 -> $setCategory ($categoryburger);
    $platburger8 -> setActive ("Yes");
    $manager->persist($platburger8);

    $platcremebrulee = new Plats ();
    $platcremebrulee -> setLibelle ("Crème Brûlée");
    $platcremebrulee -> setDescription ("Une touche sucrée pour conclure votre repas en beauté");
    $platcremebrulee -> setPrix ("6");
    $platcremebrulee -> setImage ("CrémeBrulée.jpg");
    $platcremebrulee -> $setCategory ($categorydessert);
    $platcremebrulee -> setActive ("Yes");
    $manager->persist($platcremebrulee);

    $platmousseauchocolat = new Plats ();
    $platmousseauchocolat -> setLibelle ("Mousse au chocolat");
    $platmousseauchocolat -> setDescription ("Une touche sucrée pour conclure votre repas en beauté");
    $platmousseauchocolat -> setPrix ("6,50");
    $platmousseauchocolat -> setImage ("MousseChocolat.jpg");
    $platmousseauchocolat -> $setCategory ($categorydessert);
    $platmousseauchocolat -> setActive ("Yes");
    $manager->persist($platmousseauchocolat);

    $plattartelettecitron = new Plats ();
    $plattartelettecitron -> setLibelle ("Tartelette citron");
    $plattartelettecitron -> setDescription ("Une touche sucrée pour conclure votre repas en beauté");
    $plattartelettecitron -> setPrix ("7,50");
    $plattartelettecitron -> setImage ("TarteletteCitron.jpg");
    $plattartelettecitron -> $setCategory ($categorydessert);
    $plattartelettecitron -> setActive ("Yes");
    $manager->persist($plattartelettecitron);

    $plattiramisu = new Plats ();
    $plattiramisu -> setLibelle ("Tiramisu");
    $plattiramisu -> setDescription ("Une touche sucrée pour conclure votre repas en beauté");
    $plattiramisu -> setPrix ("7");
    $plattiramisu -> setImage ("Tiramisu.jpg");
    $plattiramisu -> $setCategory ($categorydessert);
    $plattiramisu -> setActive ("Yes");
    $manager->persist($plattiramisu);

    $platprofiteroles = new Plats ();
    $platprofiteroles -> setLibelle ("Profitéroles");
    $platprofiteroles -> setDescription ("Une touche sucrée pour conclure votre repas en beauté");
    $platprofiteroles -> setPrix ("6,80");
    $platprofiteroles -> setImage ("Profiteroles.jpg");
    $platprofiteroles -> $setCategory ($categorydessert);
    $platprofiteroles -> setActive ("Yes");
    $manager->persist($platprofiteroles);

    $platreligieuse = new Plats ();
    $platreligieuse -> setLibelle ("Religieuse au chocolat");
    $platreligieuse -> setDescription ("Une touche sucrée pour conclure votre repas en beauté");
    $platreligieuse -> setPrix ("5,80");
    $platreligieuse -> setImage ("ReligieuseChocolat.jpg");
    $platreligieuse -> $setCategory ($categorydessert);
    $platreligieuse -> setActive ("Yes");
    $manager->persist($platreligieuse);

    $plattartelettefraise = new Plats ();
    $plattartelettefraise -> setLibelle ("Tartelette à la fraise");
    $plattartelettefraise -> setDescription ("Une touche sucrée pour conclure votre repas en beauté");
    $plattartelettefraise -> setPrix ("7,40");
    $plattartelettefraise -> setImage ("TarteletteFraise.jpg");
    $plattartelettefraise -> $setCategory ($categorydessert);
    $plattartelettefraise -> setActive ("Yes");
    $manager->persist($plattartelettefraise);

    $plattartelettepomme = new Plats ();
    $plattartelettepomme -> setLibelle ("Tartelette à la pomme");
    $plattartelettepomme -> setDescription ("Une touche sucrée pour conclure votre repas en beauté");
    $plattartelettepomme -> setPrix ("7,20");
    $plattartelettepomme -> setImage ("TartelettePomme.jpg");
    $plattartelettepomme -> $setCategory ($categorydessert);
    $plattartelettepomme -> setActive ("Yes");
    $manager->persist($plattartelettepomme);

    $platcamenbert = new Plats ();
    $platcamenbert -> setLibelle ("Camenbert");
    $platcamenbert -> setDescription ("Un voyage gustatif au cœur de la France");
    $platcamenbert -> setPrix ("2,50");
    $platcamenbert -> setImage ("Camenbert.jpg");
    $platcamenbert -> $setCategory ($categoryfromage);
    $platcamenbert -> setActive ("Yes");
    $manager->persist($platcamenbert);

    $platfromagechevre = new Plats ();
    $platfromagechevre -> setLibelle ("Fromage de chèvre");
    $platfromagechevre -> setDescription ("Un voyage gustatif au cœur de la France");
    $platfromagechevre -> setPrix ("2,80");
    $platfromagechevre -> setImage ("Chévre.jpg");
    $platfromagechevre -> $setCategory ($categoryfromage);
    $platfromagechevre -> setActive ("Yes");
    $manager->persist($platfromagechevre);

    $platmaroille = new Plats ();
    $platmaroille -> setLibelle ("Maroille");
    $platmaroille -> setDescription ("Un voyage gustatif au cœur de la France");
    $platmaroille -> setPrix ("2,20");
    $platmaroille -> setImage ("Maroille.jpg");
    $platmaroille -> $setCategory ($categoryfromage);
    $platmaroille -> setActive ("Yes");
    $manager->persist($platmaroille);

    $platmimolette = new Plats ();
    $platmimolette -> setLibelle ("Mimolette");
    $platmimolette -> setDescription ("Un voyage gustatif au cœur de la France");
    $platmimolette -> setPrix ("2,10");
    $platmimolette -> setImage ("Mimolette.jpg");
    $platmimolette -> $setCategory ($categoryfromage);
    $platmimolette -> setActive ("Yes");
    $manager->persist($platmimolette);

    $platbleu = new Plats ();
    $platbleu -> setLibelle ("Bleu");
    $platbleu -> setDescription ("Un voyage gustatif au cœur de la France");
    $platbleu -> setPrix ("2,40");
    $platbleu -> setImage ("Bleu.jpg");
    $platbleu -> $setCategory ($categoryfromage);
    $platbleu -> setActive ("Yes");
    $manager->persist($platbleu);

    $platcantal = new Plats ();
    $platcantal -> setLibelle ("Cantal");
    $platcantal -> setDescription ("Un voyage gustatif au cœur de la France");
    $platcantal -> setPrix ("2,20");
    $platcantal -> setImage ("Cantal.jpg");
    $platcantal -> $setCategory ($categoryfromage);
    $platcantal -> setActive ("Yes");
    $manager->persist($platcantal);

    $platmozza = new Plats ();
    $platmozza -> setLibelle ("Mozza");
    $platmozza -> setDescription ("Un voyage gustatif au cœur de la France");
    $platmozza -> setPrix ("2,30");
    $platmozza -> setImage ("Mozza.jpg");
    $platmozza -> $setCategory ($categoryfromage);
    $platmozza -> setActive ("Yes");
    $manager->persist($platmozza);

    $platroquefort = new Plats ();
    $platroquefort -> setLibelle ("Roquefort");
    $platroquefort -> setDescription ("Un voyage gustatif au cœur de la France");
    $platroquefort -> setPrix ("2,60");
    $platroquefort -> setImage ("Roquefort.jpg");
    $platroquefort -> $setCategory ($categoryfromage);
    $platroquefort -> setActive ("Yes");
    $manager->persist($platroquefort);

    $platcoquilette = new Plats ();
    $platcoquilette -> setLibelle ("Coquilette");
    $platcoquilette -> setDescription ("Une symphonie italienne dans votre assiette");
    $platcoquilette -> setPrix ("4");
    $platcoquilette -> setImage ("Coquilette.jpg");
    $platcoquilette -> $setCategory ($categorypasta);
    $platcoquilette -> setActive ("Yes");
    $manager->persist($platcoquilette);

    $platmacaronifromage = new Plats ();
    $platmacaronifromage -> setLibelle ("Macaroni au fromage");
    $platmacaronifromage -> setDescription ("Une symphonie italienne dans votre assiette");
    $platmacaronifromage -> setPrix ("4,20");
    $platmacaronifromage -> setImage ("MacaroniFromage.jpg");
    $platmacaronifromage -> $setCategory ($categorypasta);
    $platmacaronifromage -> setActive ("Yes");
    $manager->persist($platmacaronifromage);

    $platspaghettibolo = new Plats ();
    $platspaghettibolo -> setLibelle ("Spaghetti Bolognaise");
    $platspaghettibolo -> setDescription ("Une symphonie italienne dans votre assiette");
    $platspaghettibolo -> setPrix ("4,80");
    $platspaghettibolo -> setImage ("SpaghettiBolo.jpg");
    $platspaghettibolo -> $setCategory ($categorypasta);
    $platspaghettibolo -> setActive ("Yes");
    $manager->persist($platspaghettibolo);

    $plattagliatelle = new Plats ();
    $plattagliatelle -> setLibelle ("Tagliatelle au saumon");
    $plattagliatelle -> setDescription ("Une symphonie italienne dans votre assiette");
    $plattagliatelle -> setPrix ("5");
    $plattagliatelle -> setImage ("TagliatelleSaumon.jpg");
    $plattagliatelle -> $setCategory ($categorypasta);
    $plattagliatelle -> setActive ("Yes");
    $manager->persist($plattagliatelle);

    $platcannelloni = new Plats ();
    $platcannelloni -> setLibelle ("Cannelloni");
    $platcannelloni -> setDescription ("Une symphonie italienne dans votre assiette");
    $platcannelloni -> setPrix ("4,40");
    $platcannelloni -> setImage ("Cannelloni.jpg");
    $platcannelloni -> $setCategory ($categorypasta);
    $platcannelloni -> setActive ("Yes");
    $manager->persist($platcannelloni);

    $platpennechorizo =  new Plats ();
    $platpennechorizo -> setLibelle ("Penne chorizo");
    $platpennechorizo -> setDescription ("Une symphonie italienne dans votre assiette");
    $platpennechorizo -> setPrix ("4,40");
    $platpennechorizo -> setImage ("PenneChorizo.jpg");
    $platpennechorizo -> $setCategory ($categorypasta);
    $platpennechorizo -> setActive ("Yes");
    $manager->persist($platpennechorizo);

    $platpennepesto = new Plats ();
    $platpennepesto -> setLibelle ("Penne pesto");
    $platpennepesto -> setDescription ("Une symphonie italienne dans votre assiette");
    $platpennepesto -> setPrix ("4,50");
    $platpennepesto -> setImage ("PennePesto.jpg");
    $platpennepesto -> $setCategory ($categorypasta);
    $platpennepesto -> setActive ("Yes");
    $manager->persist($platpennepesto);

    $platspaghetticarbo = new Plats ();
    $platspaghetticarbo -> setLibelle ("Spaghetti carbonara");
    $platspaghetticarbo -> setDescription ("Une symphonie italienne dans votre assiette");
    $platspaghetticarbo -> setPrix ("4,60");
    $platspaghetticarbo -> setImage ("SpaghettiCarbo.jpg");
    $platspaghetticarbo -> $setCategory ($categorypasta);
    $platspaghetticarbo -> setActive ("Yes");
    $manager->persist($platspaghetticarbo);

    $platcalzone = new Plats ();
    $platcalzone -> setLibelle ("Calzone");
    $platcalzone -> setDescription ("Une symphonie de saveurs sur une pâte dorée");
    $platcalzone -> setPrix ("12");
    $platcalzone -> setImage ("calzone.jpg");
    $platcalzone -> $setCategory ($categorypizza);
    $platcalzone -> setActive ("Yes");
    $manager->persist($platcalzone);

    $platpizzaraclette = new Plats ();
    $platpizzaraclette -> setLibelle ("Pizza raclette");
    $platpizzaraclette -> setDescription ("Une symphonie de saveurs sur une pâte dorée");
    $platpizzaraclette -> setPrix ("14,40");
    $platpizzaraclette -> setImage ("raclette.jpg");
    $platpizzaraclette -> $setCategory ($categorypizza);
    $platpizzaraclette -> setActive ("Yes");
    $manager->persist($platpizzaraclette);

    $platpizzaregina = new Plats ();
    $platpizzaregina -> setLibelle ("Pizza régina");
    $platpizzaregina -> setDescription ("Une symphonie de saveurs sur une pâte dorée");
    $platpizzaregina -> setPrix ("13,80");
    $platpizzaregina -> setImage ("regina.jpg");
    $platpizzaregina -> $setCategory ($categorypizza);
    $platpizzaregina -> setActive ("Yes");
    $manager->persist($platpizzaregina);

    $platpizzasavoyarde = new Plats ();
    $platpizzasavoyarde -> setLibelle ("Pizza savoyarde");
    $platpizzasavoyarde -> setDescription ("Une symphonie de saveurs sur une pâte dorée");
    $platpizzasavoyarde -> setPrix ("16,80");
    $platpizzasavoyarde -> setImage ("savoyarde.jpg");
    $platpizzasavoyarde -> $setCategory ($categorypizza);
    $platpizzasavoyarde -> setActive ("Yes");
    $manager->persist($platpizzasavoyarde);

    $platpizzasaumon = new Plats ();
    $platpizzasaumon -> setLibelle ("Pizza duo de saumon");
    $platpizzasaumon -> setDescription ("Une symphonie de saveurs sur une pâte dorée");
    $platpizzasaumon -> setPrix ("18,40");
    $platpizzasaumon -> setImage ("duo-saumon.jpg");
    $platpizzasaumon -> $setCategory ($categorypizza);
    $platpizzasaumon -> setActive ("Yes");
    $manager->persist($platpizzasaumon);

    $platpizzafoiegras = new Plats ();
    $platpizzafoiegras -> setLibelle ("Pizza foie gras");
    $platpizzafoiegras -> setDescription ("Une symphonie de saveurs sur une pâte dorée");
    $platpizzafoiegras -> setPrix ("20,20");
    $platpizzafoiegras -> setImage ("foie-gras.jpg");
    $platpizzafoiegras -> $setCategory ($categorypizza);
    $platpizzafoiegras -> setActive ("Yes");
    $manager->persist($platpizzafoiegras);

    $platpizzamagretcepes = new Plats ();
    $platpizzamagretcepes -> setLibelle ("Pizza magret cépes");
    $platpizzamagretcepes -> setDescription ("Une symphonie de saveurs sur une pâte dorée");
    $platpizzamagretcepes -> setPrix ("20,40");
    $platpizzamagretcepes -> setImage ("magret-cepes.jpg");
    $platpizzamagretcepes -> $setCategory ($categorypizza);
    $platpizzamagretcepes -> setActive ("Yes");
    $manager->persist($platpizzamagretcepes);

    $platpizzamissveggie = new Plats ();
    $platpizzamissveggie -> setLibelle ("Pizza Miss Veggie");
    $platpizzamissveggie -> setDescription ("Une symphonie de saveurs sur une pâte dorée");
    $platpizzamissveggie -> setPrix ("18,80");
    $platpizzamissveggie -> setImage ("miss-veggie.jpg");
    $platpizzamissveggie -> $setCategory ($categorypizza);
    $platpizzamissveggie -> setActive ("Yes");
    $manager->persist($platpizzamissveggie);

    $platboeufbourguignon = new Plats ();
    $platboeufbourguignon -> setLibelle ("Boeuf bourguignon");
    $platboeufbourguignon -> setDescription ("Un voyage gustatif au cœur de la tradition");
    $platboeufbourguignon -> setPrix ("22,20");
    $platboeufbourguignon -> setImage ("BoeufBourguignon.jpg");
    $platboeufbourguignon -> $setCategory ($categoryplatduterroir);
    $platboeufbourguignon -> setActive ("Yes");
    $manager->persist($platboeufbourguignon);

    $platblanquette = new Plats ();
    $platblanquette -> setLibelle ("Blanquette de veau");
    $platblanquette -> setDescription ("Un voyage gustatif au cœur de la tradition");
    $platblanquette -> setPrix ("22,40");
    $platblanquette -> setImage ("Blanquette.jpg");
    $platblanquette -> $setCategory ($categoryplatduterroir);
    $platblanquette -> setActive ("Yes");
    $manager->persist($platblanquette);

    $platchoucroute = new Plats ();
    $platchoucroute -> setLibelle ("Choucroute");
    $platchoucroute -> setDescription ("Un voyage gustatif au cœur de la tradition");
    $platchoucroute -> setPrix ("24,80");
    $platchoucroute -> setImage ("Choucroute.jpg");
    $platchoucroute -> $setCategory ($categoryplatduterroir);
    $platchoucroute -> setActive ("Yes");
    $manager->persist($platchoucroute);

    $platbouillabaisse = new Plats ();
    $platbouillabaisse -> setLibelle ("Bouillabaisse");
    $platbouillabaisse -> setDescription ("Un voyage gustatif au cœur de la tradition");
    $platbouillabaisse -> setPrix ("24,20");
    $platbouillabaisse -> setImage ("Bouillabaisse.jpg");
    $platbouillabaisse -> $setCategory ($categoryplatduterroir);
    $platbouillabaisse -> setActive ("Yes");
    $manager->persist($platbouillabaisse);

    $platcouscous = new Plats ();
    $platcouscous -> setLibelle ("Couscous");
    $platcouscous -> setDescription ("Un voyage gustatif au cœur de la tradition");
    $platcouscous -> setPrix ("20,40");
    $platcouscous -> setImage ("Couscous.jpg");
    $platcouscous -> $setCategory ($categoryplatduterroir);
    $platcouscous -> setActive ("Yes");
    $manager->persist($platcouscous);

    $platpoutine = new Plats ();
    $platpoutine -> setLibelle ("Poutine");
    $platpoutine -> setDescription ("Un voyage gustatif au cœur de la tradition");
    $platpoutine -> setPrix ("28");
    $platpoutine -> setImage ("Poutine.jpg");
    $platpoutine -> $setCategory ($categoryplatduterroir);
    $platpoutine -> setActive ("Yes");
    $manager->persist($platpoutine);

    $plattortilla = new Plats ();
    $plattortilla -> setLibelle ("Tortilla");
    $plattortilla -> setDescription ("Un voyage gustatif au cœur de la tradition");
    $plattortilla -> setPrix ("20,80");
    $plattortilla -> setImage ("Tortilla.jpg");
    $plattortilla -> $setCategory ($categoryplatduterroir);
    $plattortilla -> setActive ("Yes");
    $manager->persist($plattortilla);

    $platwelsh = new Plats ();
    $platwelsh -> setLibelle ("Welsh");
    $platwelsh -> setDescription ("Un voyage gustatif au cœur de la tradition");
    $platwelsh -> setPrix ("26,20");
    $platwelsh -> setImage ("Welsh.jpg");
    $platwelsh -> $setCategory ($categoryplatduterroir);
    $platwelsh -> setActive ("Yes");
    $manager->persist($platwelsh);

    $platsaladecesar = new Plats ();
    $platsaladecesar -> setLibelle ("Salade césar");
    $platsaladecesar -> setDescription ("Une explosion de fraîcheur et de saveurs dans votre assiette");
    $platsaladecesar -> setPrix ("6,60");
    $platsaladecesar -> setImage ("SaladeCesar.jpg");
    $platsaladecesar -> $setCategory ($categorysalade);
    $platsaladecesar -> setActive ("Yes");
    $manager->persist($platsaladecesar);

    $platsaladecrevette = new Plats ();
    $platsaladecrevette -> setLibelle ("Salade de crevette");
    $platsaladecrevette -> setDescription ("Une explosion de fraîcheur et de saveurs dans votre assiette");
    $platsaladecrevette -> setPrix ("6,80");
    $platsaladecrevette -> setImage ("SaladeCrevette.jpg");
    $platsaladecrevette -> $setCategory ($categorysalade);
    $platsaladecrevette -> setActive ("Yes");
    $manager->persist($platsaladecrevette);

    $platsaladeriz = new Plats ();
    $platsaladeriz -> setLibelle ("Salade de riz");
    $platsaladeriz -> setDescription ("Une explosion de fraîcheur et de saveurs dans votre assiette");
    $platsaladeriz -> setPrix ("5,80");
    $platsaladeriz -> setImage ("SaladeRiz.jpg");
    $platsaladeriz -> $setCategory ($categorysalade);
    $platsaladeriz -> setActive ("Yes");
    $manager->persist($platsaladeriz);

    $platsaladegrec = new Plats ();
    $platsaladegrec -> setLibelle ("Salade grec");
    $platsaladegrec -> setDescription ("Une explosion de fraîcheur et de saveurs dans votre assiette");
    $platsaladegrec -> setPrix ("6,60");
    $platsaladegrec -> setImage ("SaladeGrec.jpg");
    $platsaladegrec -> $setCategory ($categorysalade);
    $platsaladegrec -> setActive ("Yes");
    $manager->persist($platsaladegrec);

    $platsaladeavocatbetterave = new Plats ();
    $platsaladeavocatbetterave -> setLibelle ("Salade avocat betterave");
    $platsaladeavocatbetterave -> setDescription ("Une explosion de fraîcheur et de saveurs dans votre assiette");
    $platsaladeavocatbetterave -> setPrix ("6,20");
    $platsaladeavocatbetterave -> setImage ("SaladeAvocatBetterave.jpg");
    $platsaladeavocatbetterave -> $setCategory ($categorysalade);
    $platsaladeavocatbetterave -> setActive ("Yes");
    $manager->persist($platsaladeavocatbetterave);

    $platsaladepommedeterre = new Plats ();
    $platsaladepommedeterre -> setLibelle ("salade de pomme de terre");
    $platsaladepommedeterre -> setDescription ("Une explosion de fraîcheur et de saveurs dans votre assiette");
    $platsaladepommedeterre -> setPrix ("5,20");
    $platsaladepommedeterre -> setImage ("SaladePDT.jpg");
    $platsaladepommedeterre -> $setCategory ($categorysalade);
    $platsaladepommedeterre -> setActive ("Yes");
    $manager->persist($platsaladepommedeterre);

    $platsaladepatespesto = new Plats ();
    $platsaladepatespesto -> setLibelle ("Salade de pâtes au pesto");
    $platsaladepatespesto -> setDescription ("Une explosion de fraîcheur et de saveurs dans votre assiette");
    $platsaladepatespesto -> setPrix ("6,40");
    $platsaladepatespesto -> setImage ("SaladePestoPasta.jpg");
    $platsaladepatespesto -> $setCategory ($categorysalade);
    $platsaladepatespesto -> setActive ("Yes");
    $manager->persist($platsaladepatespesto);

    $plattaboulet = new Plats ();
    $plattaboulet -> setLibelle ("Taboulet");
    $plattaboulet -> setDescription ("Une explosion de fraîcheur et de saveurs dans votre assiette");
    $plattaboulet -> setPrix ("5,80");
    $plattaboulet -> setImage ("Taboulet.jpg");
    $plattaboulet -> $setCategory ($categorysalade);
    $plattaboulet -> setActive ("Yes");
    $manager->persist($plattaboulet);

    $platcroquemadame = new Plats ();
    $platcroquemadame -> setLibelle ("Croque Madame");
    $platcroquemadame -> setDescription ("Un plaisir gourmand à portée de main");
    $platcroquemadame -> setPrix ("6");
    $platcroquemadame -> setImage ("CroqueMadame.jpg");
    $platcroquemadame -> $setCategory ($categorysnack);
    $platcroquemadame -> setActive ("Yes");
    $manager->persist($platcroquemadame);

    $platburrito = new Plats ();
    $platburrito -> setLibelle ("Burrito");
    $platburrito -> setDescription ("Un plaisir gourmand à portée de main");
    $platburrito -> setPrix ("6,20");
    $platburrito -> setImage ("Burrito.jpg");
    $platburrito -> $setCategory ($categorysnack);
    $platburrito -> setActive ("Yes");
    $manager->persist($platburrito);

    $plattartinechevre = new Plats ();
    $plattartinechevre -> setLibelle ("Tartine de chèvre");
    $plattartinechevre -> setDescription ("Un plaisir gourmand à portée de main");
    $plattartinechevre -> setPrix ("6,80");
    $plattartinechevre -> setImage ("TartineChévre.jpg");
    $plattartinechevre -> $setCategory ($categorysnack);
    $plattartinechevre -> setActive ("Yes");
    $manager->persist($plattartinechevre);

    $platkebab = new Plats ();
    $platkebab -> setLibelle ("Kebab");
    $platkebab -> setDescription ("Un plaisir gourmand à portée de main");
    $platkebab -> setPrix ("5,40");
    $platkebab -> setImage ("Kebab.jpg");
    $platkebab -> $setCategory ($categorysnack);
    $platkebab -> setActive ("Yes");
    $manager->persist($platkebab);

    $platcroquemonsieur = new Plats ();
    $platcroquemonsieur -> setLibelle ("Croque Monsieur");
    $platcroquemonsieur -> setDescription ("Un plaisir gourmand à portée de main");
    $platcroquemonsieur -> setPrix ("4,80");
    $platcroquemonsieur -> setImage ("CroqueMonsieur.jpg");
    $platcroquemonsieur -> $setCategory ($categorysnack);
    $platcroquemonsieur -> setActive ("Yes");
    $manager->persist($platcroquemonsieur);

    $platfalafelle = new Plats ();
    $platfalafelle -> setLibelle ("Falafelle");
    $platfalafelle -> setDescription ("Une symphonie de saveurs végétales dans votre assiette");
    $platfalafelle -> setPrix ("6,40");
    $platfalafelle -> setImage ("Falafelle.jpg");
    $platfalafelle -> $setCategory ($categoryveggie);
    $platfalafelle -> setActive ("Yes");
    $manager->persist($platfalafelle);

    $platcouscousveggie = new Plats ();
    $platcouscousveggie -> setLibelle ("Couscous veggie");
    $platcouscousveggie -> setDescription ("Une symphonie de saveurs végétales dans votre assiette");
    $platcouscousveggie -> setPrix ("8,80");
    $platcouscousveggie -> setImage ("CouscousVeggie.jpg");
    $platcouscousveggie -> $setCategory ($categoryveggie);
    $platcouscousveggie -> setActive ("Yes");
    $manager->persist($platcouscousveggie);

    $platgratinlegume = new Plats ();
    $platgratinlegume -> setLibelle ("Gratin de légumes");
    $platgratinlegume -> setDescription ("Une symphonie de saveurs végétales dans votre assiette");
    $platgratinlegume -> setPrix ("8,60");
    $platgratinlegume -> setImage ("Gratin.jpg");
    $platgratinlegume -> $setCategory ($categoryveggie);
    $platgratinlegume -> setActive ("Yes");
    $manager->persist($platgratinlegume);

    $platrisottochampignon = new Plats ();
    $platrisottochampignon -> setLibelle ("Risotto champignon");
    $platrisottochampignon -> setDescription ("Une symphonie de saveurs végétales dans votre assiette");
    $platrisottochampignon -> setPrix ("8,40");
    $platrisottochampignon -> setImage ("RisottoChampignon.jpg");
    $platrisottochampignon -> $setCategory ($categoryveggie);
    $platrisottochampignon -> setActive ("Yes");
    $manager->persist($platrisottochampignon);

    $platcroqueveggie = new Plats ();
    $platcroqueveggie -> setLibelle ("Croque veggie");
    $platcroqueveggie -> setDescription ("Une symphonie de saveurs végétales dans votre assiette");
    $platcroqueveggie -> setPrix ("6,80");
    $platcroqueveggie -> setImage ("CroqueVeggie.jpg");
    $platcroqueveggie -> $setCategory ($categoryveggie);
    $platcroqueveggie -> setActive ("Yes");
    $manager->persist($platcroqueveggie);

    $platepinardindienne = new Plats ();
    $platepinardindienne -> setLibelle ("Epinard à l'indienne");
    $platepinardindienne -> setDescription ("Une symphonie de saveurs végétales dans votre assiette");
    $platepinardindienne -> setPrix ("7,40");
    $platepinardindienne -> setImage ("EpinardIndienne.jpg");
    $platepinardindienne -> $setCategory ($categoryveggie);
    $platepinardindienne -> setActive ("Yes");
    $manager->persist($platepinardveggie);

    $platlegumemijote = new Plats ();
    $platlegumemijote -> setLibelle ("Légumes mijotés");
    $platlegumemijote -> setDescription ("Une symphonie de saveurs végétales dans votre assiette");
    $platlegumemijote -> setPrix ("7,20");
    $platlegumemijote -> setImage ("LegumeMijote.jpg");
    $platlegumemijote -> $setCategory ($categoryveggie);
    $platlegumemijote -> setActive ("Yes");
    $manager->persist($platlegumemijote);

    $platpoischichecarotteroti = new Plats ();
    $platpoischichecarotteroti -> setLibelle ("Pois chiche carotte roti");
    $platpoischichecarotteroti -> setDescription ("Une symphonie de saveurs végétales dans votre assiette");
    $platpoischichecarotteroti -> setPrix ("6,20");
    $platpoischichecarotteroti -> setImage ("PoisChicheCarotteRoti.jpg");
    $platpoischichecarotteroti -> $setCategory ($categoryveggie);
    $platpoischichecarotteroti -> setActive ("Yes");
    $manager->persist($platpoischichecarotteroti);

    $platwrapbuffalochiken = new Plats ();
    $platwrapbuffalochiken -> setLibelle ("Wrap buffalo chiken");
    $platwrapbuffalochiken -> setDescription ("Un voyage gustatif autour du monde dans votre main");
    $platwrapbuffalochiken -> setPrix ("4,80");
    $platwrapbuffalochiken -> setImage ("WrapBuffaloChiken.jpg");
    $platwrapbuffalochiken -> $setCategory ($categorywrap);
    $platwrapbuffalochiken -> setActive ("Yes");
    $manager->persist($platwrapbuffalochiken);

    $platwrappouletcrudite = new Plats ();
    $platwrappouletcrudite -> setLibelle ("Wrap poulet crudité");
    $platwrappouletcrudite -> setDescription ("Un voyage gustatif autour du monde dans votre main");
    $platwrappouletcrudite -> setPrix ("5,20");
    $platwrappouletcrudite -> setImage ("WrapPouletCrudite.jpg");
    $platwrappouletcrudite -> $setCategory ($categorywrap);
    $platwrappouletcrudite -> setActive ("Yes");
    $manager->persist($platwrappouletcrudite);

    $platwraplegumes = new Plats ();
    $platwraplegumes -> setLibelle ("Wrap légumes");
    $platwraplegumes -> setDescription ("Un voyage gustatif autour du monde dans votre main");
    $platwraplegumes -> setPrix ("5,10");
    $platwraplegumes -> setImage ("WrapLegume.jpg");
    $platwraplegumes -> $setCategory ($categorywrap);
    $platwraplegumes -> setActive ("Yes");
    $manager->persist($platwraplegumes);

    $platwrappoissons = new Plats ();
    $platwrappoissons -> setLibelle ("Wrap poissons");
    $platwrappoissons -> setDescription ("Un voyage gustatif autour du monde dans votre main");
    $platwrappoissons -> setPrix ("5,60");
    $platwrappoissons -> setImage ("WrapPoisson.jpg");
    $platwrappoissons -> $setCategory ($categorywrap);
    $platwrappoissons -> setActive ("Yes");
    $manager->persist($platwrappoissons);

    $platwrapbaconavocat = new Plats    ();
    $platwrapbaconavocat -> setLibelle ("Wrap bacon avocat");
    $platwrapbaconavocat -> setDescription ("Un voyage gustatif autour du monde dans votre main");
    $platwrapbaconavocat -> setPrix ("6,20");
    $platwrapbaconavocat -> setImage ("WrapBaconAvocat.jpg");
    $platwrapbaconavocat -> $setCategory ($categorywrap);
    $platwrapbaconavocat -> setActive ("Yes");
    $manager->persist($platwrapbaconavocat);

    $platwrapboeuf = new Plats ();
    $platwrapboeuf -> setLibelle ("Wrap boeuf");
    $platwrapboeuf -> setDescription ("Un voyage gustatif autour du monde dans votre main");
    $platwrapboeuf -> setPrix ("5,40");
    $platwrapboeuf -> setImage ("WrapBoeuf.jpg");
    $platwrapboeuf -> $setCategory ($categorywrap);
    $platwrapboeuf -> setActive ("Yes");
    $manager->persist($platwrapboeuf);

    $platwrappouletavocat = new Plats ();
    $platwrappouletavocat -> setLibelle ("Wrap poulet avocat");
    $platwrappouletavocat -> setDescription ("Un voyage gustatif autour du monde dans votre main");
    $platwrappouletavocat -> setPrix ("6");
    $platwrappouletavocat -> setImage ("WrapPouletAvocat.jpg");
    $platwrappouletavocat -> $setCategory ($categorywrap);
    $platwrappouletavocat -> setActive ("Yes");
    $manager->persist($platwrappouletavocat);

    $platwrapsaumonconcombre = new Plats ();
    $platwrapsaumonconcombre -> setLibelle ("Wrap saumon concombre");
    $platwrapsaumonconcombre -> setDescription ("Un voyage gustatif autour du monde dans votre main");
    $platwrapsaumonconcombre -> setPrix ("6,40");
    $platwrapsaumonconcombre -> setImage ("WrapSaumonConcombre.jpg");
    $platwrapsaumonconcombre -> $setCategory ($categorywrap);
    $platwrapsaumonconcombre -> setActive ("Yes");
    $manager->persist($platwrapsaumonconcombre);

    $platpainbanane = new Plats ();
    $platpainbanane -> setLibelle ("Pain à la banane");
    $platpainbanane -> setDescription ("Notre selection de pain frais pour accompagner vos repas");
    $platpainbanane -> setPrix ("2,20");
    $platpainbanane -> setImage ("PainBanane.jpg");
    $platpainbanane -> $setCategory ($categoryboulangerie);
    $platpainbanane -> setActive ("Yes");
    $manager->persist($platpainbanane);

    $platpaincereales = new Plats ();
    $platpaincereales -> setLibelle ("Pain aux céréales");
    $platpaincereales -> setDescription ("Notre selection de pain frais pour accompagner vos repas");
    $platpaincereales -> setPrix ("2,40");
    $platpaincereales -> setImage ("PainCereale.jpg");
    $platpaincereales -> $setCategory ($categoryboulangerie);
    $platpaincereales -> setActive ("Yes");
    $manager->persist($platpaincereales);

    $platpaincitrouille = new Plats ();
    $platpaincitrouille -> setLibelle ("Pain à la citrouille");
    $platpaincitrouille -> setDescription ("Notre selection de pain frais pour accompagner vos repas");
    $platpaincitrouille -> setPrix ("2,60");
    $platpaincitrouille -> setImage ("PainCitrouille.jpg");
    $platpaincitrouille -> $setCategory ($categoryboulangerie);
    $platpaincitrouille -> setActive ("Yes");
    $manager->persist($platpaincitrouille);

    $platpainfromage = new Plats ();
    $platpainfromage -> setLibelle ("Pain au fromage");
    $platpainfromage -> setDescription ("Notre selection de pain frais pour accompagner vos repas");
    $platpainfromage -> setPrix ("2,80");
    $platpainfromage -> setImage ("PainFromage.jpg");
    $platpainfromage -> $setCategory ($categoryboulangerie);
    $platpainfromage -> setActive ("Yes");
    $manager->persist($platpainfromage);

    $platpaincourgette = new Plats ();
    $platpaincourgette -> setLibelle ("Pain à la courgette");
    $platpaincourgette -> setDescription ("Notre selection de pain frais pour accompagner vos repas");
    $platpaincourgette -> setPrix ("4,20");
    $platpaincourgette -> setImage ("PainCourgette.jpg");
    $platpaincourgette -> $setCategory ($categoryboulangerie);
    $platpaincourgette -> setActive ("Yes");
    $manager->persist($platpaincourgette);

    $platpainepices = new Plats ();
    $platpainepices -> setLibelle ("Pain d'épices");
    $platpainepices -> setDescription ("Notre selection de pain frais pour accompagner vos repas");
    $platpainepices -> setPrix ("3,40");
    $platpainepices -> setImage ("PainDepice.jpg");
    $platpainepices -> $setCategory ($categoryboulangerie);
    $platpainepices -> setActive ("Yes");
    $manager->persist($platpainepices);

    $platpainnoix = new Plats ();
    $platpainnoix -> setLibelle ("Pain aux noix");
    $platpainnoix -> setDescription ("Notre selection de pain frais pour accompagner vos repas");
    $platpainnoix -> setPrix ("3,20");
    $platpainnoix -> setImage ("PainNoix.jpg");
    $platpainnoix -> $setCategory ($categoryboulangerie);
    $platpainnoix -> setActive ("Yes");
    $manager->persist($platpainnoix);

    $platpainolives = new Plats ();
    $platpainolives -> setLibelle ("Pain aux olives");
    $platpainolives -> setDescription ("Notre selection de pain frais pour accompagner vos repas");
    $platpainolives -> setPrix ("4,20");
    $platpainolives -> setImage ("PainOlive.jpg");
    $platpainolives -> $setCategory ($categoryboulangerie);
    $platpainolives -> setActive ("Yes");
    $manager->persist($platpainolives);
    
    
    $manager->flush();
    }
}
