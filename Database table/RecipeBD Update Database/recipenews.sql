-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2022 at 05:58 PM
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
-- Table structure for table `recipenews`
--

CREATE TABLE `recipenews` (
  `id` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `description` varchar(8000) NOT NULL,
  `image_1` varchar(250) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recipenews`
--

INSERT INTO `recipenews` (`id`, `title`, `description`, `image_1`, `status`) VALUES
(16, 'Snickers To Launch New Snickers Almond Brownie In August', '<p>Looking for a new decadent snack? Well, Snickers is cooking up an all-new innovation in its brownie line-up. That will undoubtedly satisfy any sweet tooth at any time of the day! Snickers Almond Brownie will be launching in August!</p>\r\n<p>This edition features a mouthwatering chewy brownie filling. Mixed with chopped almond chunks, topped with a layer of the sweet Snickers caramel, and encased in rich dark chocolate. The description alone just sounds like a lovely mashup of textures done right.</p>\r\n<p>Snickers Almond Brownie joins the previously released Snickers Peanut Brownie and the Snickers Peanut Brownie Ice Cream. Both of which are available on shelves and freezers nationwide. Snickers Peanut Brownie combines a chewy-peanut brownie filling, caramel, and the classic Snickers chocolate coating.</p>\r\n<p>The ice cream version is brownie-flavored ice cream with chewy brownie bits. A thin layer of caramel, and peanuts coated in milk chocolate. If you haven’t tasted this lineup yet. I’d suggest you get your hands on one to get a hint of what’s in store when Snickers Almond Brownie is released in a few months. In the meantime, I’ll be enjoying my Snickers and envisioning what my first bite of the Almond Brownie will be like!</p>', 'image/food/snicker-1_909f82fc-b4b8-4193-851a-cf7c752a5429_1512x.jpg', 1),
(17, 'PEEPS Make A Splash In 7-Eleven Coffee', '<p>Days are slowly getting warmer. Trees are beginning to blossom. And Peeps are lining the candy aisles- spring is here! No candy embodies spring and Easter more than Peeps Marshmallow Chicks and Bunnies. The Peeps brand is partnering with 7-Eleven to produce a marshmallow-flavored latte. That will put a spring in your step at any time of the day! </p>\r\n<p>The 7-Eleven partnership is just another delightful collab from Peeps. In addition to the Pepsi x Peeps collab that was announced earlier this week. Craving a Peeps and coffee fix? Hop on over to a 7-Eleven near you because these lattes are only available for a limited time. </p>\r\n<p>The treats don’t stop there, 7-Eleven will also be offering limited-time flavors of goodies under their private label called ‘7-Select.’   The treats include frosted shortbread cookies in the shapes of cute bumblebees and orange butterflies. “Fly with Me” butterfly-shaped and “Blossom”flower-shaped mini-gummy candies. Pretzels covered in a yummy strawberry coating with a yogurt swirl and sandwich crème cookies.  </p>\r\n<p>Spring flavors of the sandwich crème cookies include carrot cake, pineapple upside down. And banana cream pie flavored cookies. Very reminiscent of an Easter dessert table!   In conclusion, Here’s me raising my imaginary cup to you peeps! Grab a latte and savor spring in every sip!</p>', 'image/food/peeps711-1_69c901ab-131e-4f80-87cb-ae022e1ea00e_1512x.webp', 1),
(18, 'Pepsi Gets Tropical With All New Pepsi Mango Flavor', '<p>There is no need to wait for mango season because Pepsi is giving us a taste of mango season year-round.   Yes, you read that right. PepsiCo is giving us the taste of the tropics with its all-new Pepsi Mango flavor.   You’re probably thinking how mango could taste good with Pepsi? Let me tell you these beverage companies have a way of making even the most outrageous flavors taste delightful.   Pepsi Mango will be available nationwide on March 22. It will join the Pepsi lineup which currently includes: Wildcherry, Lime, Berry, and Vanilla flavors.</p>\r\n<p>This is the only tropical variety in the bunch.   Fans can grab this beverage in 12-packs of 12-ounce cans and 20-ounce bottles. It will be available in regular and Zero sugar varieties.   “Mango is one of the most popular fruits in the world. And it serves as the perfect complement to Pepsi. Creating an irresistible combination that our fans can enjoy everywhere throughout the year,” said Todd Kaplan. Vice president of marketing at Pepsi, in a statement.   To promote the fruity beverage. Pepsi announced a social media matchmaking series in April to help singles find a partner.   So if you’re single and ready to mingle over a can of yummy Pepsi Mango. And you can check out the single people in the series. They will feature personality introductions and contact information to facilitate some sparks.   I’m truly excited about this flavor. Anything with mango has my name written all over it.   I wonder what’s next for PepsiCo. Pepsi Banana, Pepsi Peach, or Pepsi Grape anyone?   Will you be trying this flavor? Let us know! Enjoy!</p>', 'image/food/pepsi-mango-1_c1c52b93-4cbc-4c5e-adc2-abc9c2c15637_1512x.webp', 1),
(19, 'Wienerschnitzel Shakes Up Its Menu With Limited Time Oreo Shakes', 'Famous hot dog chain Wienerschnitzel is shaking up their candy shakes menu! The chain has partnered with Oreo once again to create new Oreo Cookie shake flavors.   The berry delicious Oreo Cookie Strawberry Shake and refreshingly creamy Oreo Cookie Mint Shake will be joining the Oreo Cookie Chocolate Shake.   These Oreo candy shakes feature the brand’s Tastee Freez soft serve mixed with your choice of chocolate, strawberry, or mint syrup and bits of Oreo cookies.   “Our Oreo Cookie Shakes are delicious,” said Doug Koegeboehn, Chief Marketing Officer for Wienerschnitzel, in a press release. “It’s awesome getting these new flavors of Oreo Cookie as a soft-serve shake.”   If these delicious flavors entice you. I would get to a Wienerschnitzel ASAP. These flavors will only be available for a limited time through spring 2021.   Maybe I’ll stop in for some chili fries and top it off with one of these creamy Oreo shakes!', 'image/food/wiener-1_68f5b0af-8d66-4a7a-b7f3-d22c22eb7622_1512x.jpg', 1),
(20, 'Taco Bell’s Quesalupa Is Back After 5 Years and Cheesier Than Ever', '<p>Do you remember Taco Bell’s Quesalupa from 2016? Well, now the chain is bringing it back after a five-year hiatus. It’s back and cheesier than ever! Fifty-percent cheesier to be exact.   When the Quesalupa dropped in 2016, it stunned cheese lovers everywhere. Additionally, It was the brand’s biggest limited-time offer in history and the first time a quesadilla and chalupa have come together.   The Quesalupa features a crispy double-layered shell stuffed with a blend of melted pepper jack. And mozzarella cheeses from edge to edge. Inside you’ll find the typical Taco Bell fixings. Such as seasoned ground beef, lettuce, shredded cheddar cheese, diced tomatoes, and reduced-fat sour cream.</p>\r\n<p>Customers who want a vegetarian option can swap the seasoned ground beef for black beans.   “Our customers raved about the cheese-filled Chalupa shell in its first debut, so when the Quesalupa began its return journey back to our nationwide menu, we knew we needed to perfect that cheesy experience - one that will be consistent for every guest and every bite,” said Liz Matthews, Taco Bell’s Global Chief Food Innovation Officer, in a press release.   Taco Bell is bringing the item back with a campaign titled “Overhyped.”. There tends to be a lot of ‘overhype’ about everything these days. The chain is letting customers know the Quesalupa is back with one message, “We think you’ll like it.”   I think anything crispy with more cheese deserves all the hype.   Taco Bell Rewards Beta members are eligible for early access to try the Quesalupa beginning today March 10. The nationwide debut is tomorrow March 11. The company is offering the item for a very affordable price. A la carte is $2.99 and a combo is $6.99. The combo includes the Quesalupa, two crunchy tacos, and a large fountain drink.   In conclusion, Quesalupa Early Access is only available today and redeemable only through the Taco Bell mobile app for in-store. And drive-thru pickup orders at participating U.S. Taco Bell locations, while supplies last. And however, Guests must be a registered user in the Taco Bell app to gain early access. </p>', 'image/food/quesalupa-1_6005ec31-9ae3-4041-8459-fca61abf6043_1512x.webp', 1),
(21, 'Airheads Candy Unveils New Fried Chicken Sandwich', 'It’s National Fried Chicken Day! The candy brand Airheads has officially entered the fried chicken wars with a new fried chicken sandwich. That has a bun made entirely out of Airheads candy!\r\n\r\nThe appropriately named Airheads Chicken Sandy contains the usual fixings such as fried chicken, coleslaw, spicy mayo, and pickles. Entire stuffings are sandwiches in two buns of Airheads Xtremes. The striped candy belts make the sandwich look like something straight out of the “Patty Hype” episode of Spongebob Squarepants. In where Spongebob creates Pretty Patties.\r\n\r\nAirheads Candy Chicken Sandy will be available to taste test at the Chicago restaurant Frances’ Deli & Brunchery during lunch hour for dine-in only, while supplies last. Frances’ Deli & Brunchery is located in Chicago, IL. Taste-testing will be available from 12:00 p.m. to 3:00 p.m., local time. We can’t help but wonder what this sandwich tastes like.\r\n\r\nThere are so many flavors and textures going on in one sandwich. Let’s just hope that this sandwich remains extremely limited.', 'image/food/A1.jpg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `recipenews`
--
ALTER TABLE `recipenews`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `recipenews`
--
ALTER TABLE `recipenews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
