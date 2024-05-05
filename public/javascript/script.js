$(document).ready(function(){
// home
const restaurant = $('#presentation_restaurant');
const restaurant_title = $('<h2>').text("The District");
const restaurant_text = $('<p>').text("Bienvenue dans notre restaurant chic, où le luxe rencontre la gastronomie pour offrir une expérience culinaire incomparable. Niché au cœur de la ville, notre établissement vous invite à découvrir un monde de saveurs raffinées et d'élégance intemporelle Dès que vous franchissez nos portes, vous serez transporté dans un univers de sophistication et de charme. Notre ambiance sophistiquée et chaleureuse crée un cadre idéal pour une soirée mémorable, que ce soit pour une rencontre d'affaires, un dîner romantique ou une célébration spéciale.");

restaurant.append(restaurant_title , restaurant_text);

const description = $('#description_restaurant');
const description_text = $('<p>').text("Bienvenue dans notre élégante salle de restaurant & bar, un espace raffiné où l'ambiance chaleureuse rencontre le charme contemporain. Dès que vous franchissez nos portes, vous êtes accueilli par une atmosphère invitante, où la convivialité et le confort se marient harmonieusement. La salle de restaurant, baignée dans une lumière douce et tamisée, est aménagée avec goût pour offrir une expérience gastronomique inoubliable. Des tables joliment dressées, des chaises confortables et des touches de décoration soigneusement sélectionnées créent une ambiance accueillante et sophistiquée. Les grandes fenêtres laissent entrer la lumière naturelle et offrent une vue pittoresque sur l'extérieur, créant ainsi un cadre enchanteur pour vos repas.");

description.append(description_text);

//  -------------------------------------------------------------
//     categorie

    const resstaurant_categorie = $('#presentation_categorie');
    const title_cat_thedistrict = $('<h2>').text("Découvrez nos Catégories");
    const description_cat_thedistrict = $('<p>').text("Plongez dans un monde de délices culinaires avec notre panel de catégories de plats gastronomiques, conçu pour satisfaire les palais les plus exigeants et les amateurs de bonne cuisine. Chaque catégorie représente une facette unique de notre offre gastronomique, alliant savoir-faire artisanal, ingrédients de qualité supérieure et créativité culinaire. Que vous soyez à la recherche de plats traditionnels revisités ou de créations audacieuses, notre panel de catégories vous guide à travers une expérience culinaire incomparable.");


    resstaurant_categorie.append(title_cat_thedistrict, description_cat_thedistrict);

//     ------------------------------------------------------------------
//     plat

    const restaurant_plat= $('#presentation_plat');
    const title_plats_thedistrict = $('<h2>').text("Découvrez nos Plats A la Carte");
    const description_plats_thedistrict = $('<p>').text("Bienvenue dans notre univers culinaire où chaque plat raconte une histoire de saveurs exquises et d'ingrédients soigneusement sélectionnés. Explorez notre menu varié, conçu pour satisfaire toutes les envies gastronomiques, des classiques intemporels aux créations audacieuses. Plongez dans un monde de délices avec nos entrées fraîches et appétissantes, parfaites pour démarrer votre expérience culinaire avec éclat. Poursuivez votre voyage gustatif avec nos plats principaux, où chaque bouchée est une fusion de textures et de goûts harmonieux. Que vous soyez adepte de viande, de poisson ou de plats végétariens, notre menu offre une sélection diversifiée pour combler tous les palais.");

    restaurant_plat.append(title_plats_thedistrict, description_plats_thedistrict);
});