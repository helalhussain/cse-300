-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2022 at 05:59 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `recipebd`
--

-- --------------------------------------------------------

--
-- Table structure for table `trick`
--

CREATE TABLE `trick` (
  `id` int(100) NOT NULL,
  `title` varchar(500) NOT NULL,
  `description` varchar(8000) NOT NULL,
  `image` varchar(400) NOT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trick`
--

INSERT INTO `trick` (`id`, `title`, `description`, `image`, `date`) VALUES
(1, 'Edit', 'Lorem ipsum is a pseudo-Latin text used in web design, typography, layout, and printing in place of English', 'image/recipe/v3.jpg', '2022/07/26'),
(2, 'Edit trick', 'Edit Lorem ipsum is a pseudo-Latin text used in web design, typography, layout, and printing in place of English', 'image/recipe/bus2.jpg', '2022/07/26'),
(3, 'New', 'dfdfd', 'image/recipe/bus2.jpg', '2022/07/26'),
(5, 'How To Brew The Best Coffee', 'How To Brew The Best Coffee\r\n', 'image/recipe/canva-photo-editor-132_12a133fe-f835-4ac7-8c9d-1d4e2102c766_1512x.webp', '2022/08/05'),
(6, 'test-1', '<ol>\r\n<li>ahsan</li>\r\n<li>wazad</li>\r\n<li>jashim</li>\r\n</ol>', 'image/recipe/canva-photo-editor-132_12a133fe-f835-4ac7-8c9d-1d4e2102c766_1512x.webp', '2022/08/05'),
(7, 'CARAMEL ESPRESSO MARTINI', 'For the best of both worlds, this Caramel Espresso Martini is a must! Serve this martini for a burst of seasonal flavor that will keep your guests warm and bubbly for the entire evening. Simple to make and delicious to drink, this martini uses the nutpods Almond + Coconut Creamer: Caramel for a strong caramel flavor to balance out the espresso. So guests will be sipping on this fall drink for the whole night!', 'image/recipe/A1.jpg', '2022/08/05'),
(8, 'SPIRAL FRIED PICKLES', 'We all love pickles, but what about deep-fried pickles coated in breadcrumbs?! Even better, HIPPEAS Sriracha Sunshine is the breading! The vinegar of the pickle with the spice of the sriracha creates a profile of flavors that will dance in your mouth! These Spiral Fried Pickles are served on a skewer for easy cooking and consumption for your next group gathering. And best of all requires little to no cleanup afterward! Win, win, win!', 'image/recipe/A2.jpg', '2022/08/05'),
(9, 'AMBROSIA SALAD', 'If what you are looking for is light and fruity salad, then look no more- Ambrosia salad is the right and perfect salad you should make for yourself. It is easy, colorful, and fun to make. This salad will be first to disappear from your plate when eating, trust me! Even though it is old-schooled, it is still classic. It has lots of hidden fruity bites, and it is a perfect holiday recipe for you and your family.\r\n\r\nYou have found the right recipe dessert to make for your kids at home. Very easy and straightforward to make- all you need is a bowl and a spoon, no need for any fancy or expensive equipment. It is the ideal recipe for your unicorn themed birthday party, if you prepare this ambrosia salad for everybody at your party, you will be surprised how happy they will be!\r\n\r\nEven in Greek, ambrosia salad translates to “food of the gods.” You need to know you won’t be disappointed by this salad. You can serve this light salad as a potluck, cookout, and a fun picnic side dish. It is a great recipe to balance out all the savory going on. It is also perfect for any holiday- either your Christmas, Easter, thanksgiving- it will work perfectly well for them. For your kid’s birthday party, you can also prepare it to add more fun to your party.\r\n\r\nThere is no way all the kiddos won’t love this unicorn salad! To prepare this special salad, you don’t need any fancy ingredients at all; all you need to get are- sour cream, mandarin oranges, whipped topping, pineapple tidbits, marshmallows, chopped nuts, and sweetened shredded coconut.\r\n\r\nStore your leftover ambrosia in a refrigerator for not more than 3 days (you will need to place it in an airtight container). If you like, you can vary your ingredients to add more fun to this dessert. Sliced kiwi, half grapes, and berries would also work correctly!\r\n\r\n1.Preparation of this fruity salad begins with a combination of the whipped topping and sour cream until they become smooth. Followed by folding the oranges, pineapples, cherries, marshmallows, nuts, and coconut until everything becomes well coated.\r\n2.Then cover it with plastic wrap and refrigerate it for about 1hour or more depending on your refrigerator. The last thing you need to do is to top your ambrosia salad with extra whipped topping and a cherry. Enjoy!\r\nNote: To get the best result of ambrosia salad, make use of your favorite fruits, just ensure they are chopped into smaller pieces, add your favorite fruit you have available, but mandarin oranges and cherries are no go area for ambrosia salad. Always serve it when chill. Your marshmallows are very important, you should not skip them as they give it the cloud-like texture!', 'image/recipe/Ambrosia-Salad-5_1400x.jpg', '2022/08/05'),
(10, 'HOLIDAY CHEESEBOARD', '1.Cut out a tree in the brie wheel with a tree-shaped cookie cutter and fill it with cherry jam. \r\n2.Arrange all ingredients on a wooden cheese board or a large platter. \r\n3.Garnish with marjoram, rosemary, or thyme leaves, if desired.', 'image/recipe/38_WinterBox_1x1_273e312c-cb7e-42c9-805c-1d9f3e0d2483_1400x.jpg', '2022/08/05'),
(11, 'HONEY SOY CHICKEN', 'Quick and easy meal prep for weekend lunch or dinner with a nice marinade of soy sauce, sake and honey. Chicken is a safe way to go when we are in a hurry and want to make a quick but delicious meal for our family and or friends. And this recipe proves once again why chicken is loved by so many.\r\n\r\nThis recipe is simple to make and gives you a savory chicken paired with easy to find ingredients, not much preparation for it. Great for 3 to 4 servings and it’s ready to go within one hour. The best way to assure your chicken absorbs the most out of the marinade is to let it rest overnight.\r\n\r\nThis recipe is super flexible. You can enjoy it as an appetizer with some extra dipping while you watch a game or a movie, or have it as a main dish on top of some white rice, or green salad. It’s that simple and delicious. Honey Soy Chicken is a fun way to prepare dinner over the weekend when we are looking for simple recipes as we are overwhelmed with the work of the week and all the cooking, this is a nice way to get around preparing dinner, fun, and simple.\r\n\r\nNothing beats that over-a-weekend meal. For those who made or are planning on making a big batch, you can remove the meat from the bones and store your leftovers which you can later use to make quick meals such as wraps, salads, bento lunch boxes, or get creative and enjoy it any other way.\r\n1.Prepare your marinade with honey, soy sauce, and sake. Whisk everything in a bowl and clean your drumettes with cold water and pat it dry.\r\n2.You could also mix the marinade ingredients in a ziplock or tap container, pinch some salt and pepper to your chicken before placing it inside the marinade ziplock or container. Rub the marinade all over the chicken or shake if you are using a container.\r\n3.If you are in a rush or making it for the same day, 30 minutes will do good, but if you are planning for the day after, let them rest overnight so your chicken comes more savory.\r\n4.Once your chicken is ready, turn on your oven at 425º Fahrenheit and place your chicken in a baking dish, pour remaining marinade on top of the chicken drumettes or chicken cut, and bake it for 30 minutes.\r\n5.Now you want to make sure your chicken is nicely cooked, check both sides as sometimes the top cooks too fast while the bottom hasn’t. Flip them or reduce the heat to broil in case you notice one side is cooking faster than the other. While making sure your chicken doesn’t burn. Once your chicken looks brown and cooked on both sides is time to take it out.', 'image/recipe/Honey-Soy-Sauce-Chicken-2631-I_1400x.jpg', '2022/08/05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `trick`
--
ALTER TABLE `trick`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `trick`
--
ALTER TABLE `trick`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
