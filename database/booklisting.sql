-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2017 at 07:10 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `book_listing`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `title` varchar(256) NOT NULL,
  `subtitle` varchar(256) NOT NULL,
  `userid` int(11) NOT NULL,
  `description` varchar(4096) NOT NULL,
  `author` varchar(64) NOT NULL,
  `price` text NOT NULL,
  `publisher` varchar(64) NOT NULL,
  `isbn` varchar(13) NOT NULL,
  `cover` varchar(1024) NOT NULL,
  `datecreated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `datemodified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `isdeleted` tinyint(1) NOT NULL,
  `pages` int(11) NOT NULL,
  `views` int(11) NOT NULL,
  `category` varchar(16) NOT NULL,
  `course` varchar(64) NOT NULL,
  `genre` varchar(32) NOT NULL,
  `publishdate` varchar(4) NOT NULL,
  `type` varchar(32) NOT NULL,
  `numcomments` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `subtitle`, `userid`, `description`, `author`, `price`, `publisher`, `isbn`, `cover`, `datecreated`, `datemodified`, `isdeleted`, `pages`, `views`, `category`, `course`, `genre`, `publishdate`, `type`, `numcomments`) VALUES
(1, 'Watchmen', 'A New York TIMES Bestseller!', 1, 'Considered the greatest graphic novel in the history of the medium, the Hugo Award-winning story chronicles the fall from grace of a group of superheroes plagued by all-too-human failings. Along the way, the concept of the superhero is dissected as an unknown assassin stalks the erstwhile heroes.', 'Alan Moore, Dave Gibbons', '1.00', 'DC Comics', '9781401235673', 'https://books.google.com/books/content/images/frontcover/ke_jAAAAQBAJ?fife=w200-h300', '2017-11-24 02:08:42', '2017-12-05 12:42:04', 0, 300, 72, 'Comic', '', '', '', 'Manga', 6),
(12, 'River of Teeth', 'Sarah Gailey\'s wildfire debut River of Teeth is a rollicking alternate history adventure that Charlie Jane Anders calls', 1, 'In the early 20th Century, the United States government concocted a plan to import hippopotamuses into the marshlands of Louisiana to be bred and slaughtered as an alternative meat source. This is true.', 'Sarah Gailey', '3.99', 'Tor.com', '9781401235673', 'https://books.google.com/books/content/images/frontcover/5mR9DQAAQBAJ?fife=w200-h300', '2017-11-24 02:33:41', '2017-12-05 10:03:15', 0, 399, 23, 'Storybook', '', 'Action and Adventure', '', '', 1),
(13, 'Oathbringer river', 'The Stormlight Archive', 1, 'In Oathbringer, the third volume of the New York Times bestselling Stormlight Archive, humanity faces a new Desolation with the return of the Voidbringers, a foe with numbers as great as their thirst for vengeance.\r\nDalinar Kholinâ€™s Alethi armies won a fleeting victory at a terrible cost: The enemy Parshendi summoned the violent Everstorm, which now sweeps the world with destruction, and in its passing awakens the once peaceful and subservient parshmen to the horror of their millennia-long ens', 'Brandon Sanderson', '16.99', 'Brandon Tor Books', '9780765399830', 'https://books.google.com/books/content/images/frontcover/VsT3DQAAQBAJ?fife=w200-h300', '2017-11-24 03:05:09', '2017-12-05 12:13:09', 0, 944, 16, 'Storybook', '', 'Action and Adventure', '', '', 1),
(14, 'Gathering Frost (Once Upon A Curse Book 1)', 'Once Upon A Curse', 2, 'Will the prince\'s kiss be enough to revive her frozen heart? Don\'t miss GATHERING FROST, a dystopian romance from bestselling author Kaitlyn Davis that reimagines the classic fairy tale of Sleeping Beauty. &amp;amp;amp;amp;amp;amp;quot;I wish I could say I was the hero of the story. A resister. A rebel. Someone who lived to bring an end to the queen who stole my childhood--my mother, my life, my very world. But I\'m not. I\'m not the good guy. I\'m the one who puts the good guys in their graves.&amp;amp;amp;amp;amp;amp;quot; Jade was only a little girl when the earthquake struck. Before her eyes, half of New York City disappeared, replaced by a village that seemed torn out of a storybook. Horses and carriages. Cobblestone streets. A towering castle. And, above all, a queen with the magical ability to strip emotions away. Ten years later and Jade has forgotten what it is to feel, to care...even to love. Working as a member of the queen\'s guard, she spends most of her time on the city wall staring at the crumbling skyscrapers of old New York. But everything changes when the queen\'s runaway son, Prince Asher, returns. Under his relentless taunts, her blood begins to boil. Under his piercing gaze, her heart begins to flutter. And the more her icy soul begins to thaw, the more Jade comes to question everything she\'s ever known--and, more importantly, whose side she\'s really on. Keywords: Teen &amp;amp;amp;amp;amp;amp;amp; Young Adult, Fairytale, Fairy Tale, Retelling, Adaptation, Fairy Tale Adaptation, Sleeping Beauty, Romance, Dystopian, Paranormal Romance, Urban Fantasy, Love, Action &amp;amp;amp;amp;amp;amp;amp; Adventure, Magic, Fantasy, Evil Queen, Prince Charming', 'Kaitlyn Davis', '3.39', 'Kaitlyn Davis', '1234567890123', 'https://books.google.com/books/content/images/frontcover/j0WPCwAAQBAJ?fife=w200-h300', '2017-12-03 02:05:20', '2017-12-05 12:59:00', 0, 300, 80, 'Storybook', '', 'Action and Adventure', '', '', 0),
(15, 'Deadpool Killustrated', 'Collects Deadpool Killustrated #1-4', 2, 'Deadpool has already killed every hero in the Marvel Universe, but he isn\'t through. This time...Deadpool\'s gonna take down the most famous characters in classic literature! Why read a book when you can watch a book die?! Tom Sawyer gets slashed in TWAIN! The Little Women\'s throats MAY get ALL-CUT! Scrooge gets a visit from THREE BULLETS! Gulliver gets a SWIFT DEATH! The Three Musketeers are all for DONE! Sherlock Holmes gets to the bottom of HIS OWN GRAVE! And more book-related puns! Can Deadpool rid the universe of the scourge of classical literature? Throw away your library card and buy this book! You never knew how badly you needed this!', 'Cullen Bunn', '5.99', 'Marvel Entertainment', '9781302376772', 'https://books.google.com/books/content/images/frontcover/w3KdAwAAQBAJ?fife=w200-h300', '2017-12-05 12:45:37', '2017-12-05 20:15:35', 0, 94, 2, 'Comic', '', '', '', 'Action', 1),
(16, 'Wolverine: Origins', 'Origins - Romulus', 2, 'For over a century, he\'s been hiding in the darkest shadows of Wolverine\'s life, controlling the beast and destroying the man. But now, finally, the tide is turning... and Wolverine\'s vengeance is within reach! Introducing: ROMULUS! Collects Wolverine: Origins #37-40.', 'Daniel Way', '4.99', 'Marvel Entertainment', '9780785182832', 'https://books.google.com/books/content/images/frontcover/G93bnvs7YZgC?fife=w200-h300', '2017-12-05 12:47:19', '2017-12-05 20:15:45', 0, 112, 6, 'Comic', '', '', '', 'Action', 1),
(17, 'Amazing Spider-Man', 'The Venom Experiment', 6, 'Collecting Amazing Spider-Man: Renew Your Vows #6-12. The sensational adventures of the spectacular Spider-Family continue! And this time they\'re joined by...the X-Men! Annie Parker just received an invitation to attend Xavier\'s School for Gifted Youngsters -which means she\'s going to get to meet Wolverine, Cyclops, Jean Grey and Professor X! But where the X-Men go, can Magneto be far behind? And after the Master of Magnetism and his Brotherhood of Evil Mutants make short work of the X-Men, it\'s up to the Parkers to stop them!', 'Gerry Conway', '9.99', 'Marvel Entertainment', '9781302500849', 'https://books.google.com/books/content/images/frontcover/P4QzDwAAQBAJ?fife=w200-h300', '2017-12-05 12:48:45', '2017-12-05 19:20:23', 0, 160, 0, 'Comic', '', '', '', 'Fantasy', 0),
(18, 'TIME Magazine', 'News &amp; Politics', 4, 'TIMEâ€™s signature voice and trusted content have made it one of the most recognized news brands in the world. Offering a rare convergence of incisive reporting, lively writing and world-renowned photography, TIME has been credited with bringing journalism at its best into the fabric of American life. Every issue of TIME delivers a deeper understanding of the world in which we live.', 'Time', '2.99', 'Time', '2343455432127', 'https://lh3.googleusercontent.com/COpB3aN5ioNlSOBxNSqE0-T1Tulqg2LGXkBPSgdfBhxPonUMSOtrntyTN70ptBT6-NAjEoxXjEU=w300-rw', '2017-12-05 12:52:24', '2017-12-05 19:20:28', 0, 52, 2, 'Magazine', '', '', '2017', '', 0),
(19, 'The Week Magazine', 'Your next raise', 4, 'The Week Magazine distills the best in domestic and international commentary, and the latest developments in business, health, science, technology, the arts, culture, consumer products and travel.', 'Week Magazine', '3.99', 'Google', '5653645374564', 'https://lh3.googleusercontent.com/yV3Wm2ufmGS1nB7Zz-BXxbEp5WD-3isCi6F8XkNZajp4JzJt0dOmF91vNJspXY2BglYnjtsf-w=w300-rw', '2017-12-05 12:53:54', '2017-12-05 19:20:33', 0, 48, 1, 'Magazine', '', '', '2015', '', 0),
(20, 'Money', '101 ways to make $1000', 4, 'Do you have an existing subscription to MONEY Magazine? Get the digital edition on Google Play! From your Android phone or tablet, find the magazine in the Google Play store app, touch &quot;Subscribe&quot; and select the â€œFor current subscribersâ€ option.\r\n\r\nMONEY is the nation\'s largest personal finance magazine. It helps you take charge of your finances, providing trusted advice to successfully earn, plan, invest, and spend. MONEY provides in-depth coverage of stocks, mutual funds, the markets, the economy, and the best things money can buy - from travel and technology to home and luxury goods. MONEY also gives you advice on college savings and retirement planning', 'Money', '4.99', 'Google', '4634634634436', 'https://lh3.googleusercontent.com/-lKFGiZUMM05PwZSasOtFFrY8PO9ct7eTzJwGpoj9Iq1CaCR49SBeJSZnLse96YFZ_WBnGVg=w300-rw', '2017-12-05 12:55:11', '2017-12-05 20:18:07', 0, 12, 2, 'Magazine', '', '', '2016', '', 1),
(21, 'King\'s Cage', 'Red Queen', 6, 'The #1 New York Times bestselling series!\r\nIn this breathless third installment to Victoria Aveyardâ€™s #1 New York Times bestselling Red Queen series, rebellion is rising and allegiances will be tested on every side.\r\nMare Barrow is a prisoner, powerless without her lightning, tormented by her lethal mistakes. She lives at the mercy of a boy she once loved, a boy made of lies and betrayal. Now a king, Maven Calore continues weaving his dead mother\'s web in an attempt to maintain control over his countryâ€”and his prisoner.\r\nAs Mare bears the weight of Silent Stone in the palace, her once-ragtag band of newbloods and Reds continue organizing, training, and expanding. They prepare for war, no longer able to linger in the shadows. And Cal, the exiled prince with his own claim on Mare\'s heart, will stop at nothing to bring her back.\r\nWhen blood turns on blood, and ability on ability, there may be no one left to put out the fireâ€”leaving Norta as Mare knows it to burn all the way down.\r\nPerfect for fans of George R.R. Martinâ€™s Game of Thrones series, Kingâ€™s Cage is the third high-stakes installment in the #1 New York Times bestselling Red Queen series.\r\nAnd donâ€™t miss War Storm, the thrilling final book in the bestselling Red Queen series!', 'Victoria Aveyard', '12.99', 'HarperCollins', '9780062310712', 'https://books.google.com/books/content/images/frontcover/2e4qDAAAQBAJ?fife=w200-h300', '2017-12-05 12:56:03', '2017-12-05 19:20:42', 0, 528, 1, 'Storybook', '', 'Romance', '', '', 0),
(22, 'A Game of Thrones', 'A Song of Ice and Fire', 6, 'From a master of contemporary fantasy comes the first novel of a landmark series unlike any youâ€™ve ever read before. With A Game of Thrones, George R. R. Martin has launched a genuine masterpiece, bringing together the best the genre has to offer. Mystery, intrigue, romance, and adventure fill the pages of this magnificent saga, the first volume in an epic series sure to delight fantasy fans everywhere.\r\n\r\nLong ago, in a time forgotten, a preternatural event threw the seasons out of balance. In a land where summers can last decades and winters a lifetime, trouble is brewing. The cold is returning, and in the frozen wastes to the north of Winterfell, sinister forces are massing beyond the kingdomâ€™s protective Wall. To the south, the kingâ€™s powers are failingâ€”his most trusted adviser dead under mysterious circumstances and his enemies emerging from the shadows of the throne. At the center of the conflict lie the Starks of Winterfell, a family as harsh and unyielding as the frozen land they were born to. Now Lord Eddard Stark is reluctantly summoned to serve as the kingâ€™s new Hand, an appointment that threatens to sunder not only his family but the kingdom itself.\r\n\r\nSweeping from a harsh land of cold to a summertime kingdom of epicurean plenty, A Game of Thrones tells a tale of lords and ladies, soldiers and sorcerers, assassins and bastards, who come together in a time of grim omens. Here an enigmatic band of warriors bear swords of no human metal; a tribe of fierce wildlings carry men off into madness; a cruel young dragon prince barters his sister to win back his throne; a child is lost in the twilight between life and death; and a determined woman undertakes a treacherous journey to protect all she holds dear. Amid plots and counter-plots, tragedy and betrayal, victory and terror, allies and enemies, the fate of the Starks hangs perilously in the balance, as each side endeavors to win that deadliest of conflicts: the game of thrones.\r\n\r\nUnparalleled in scope and execution, A Game of Thrones is one of those rare reading experiences that catch you up from the opening pages, wonâ€™t let you go until the end, and leave you yearning for more.', 'George R. R. Martin', '6.99', 'Bantam', '9780553897845', 'https://books.google.com/books/content/images/frontcover/5NomkK4EV68C?fife=w200-h300', '2017-12-05 12:58:43', '2017-12-05 20:18:27', 0, 720, 1, 'Storybook', '', 'Drama', '', '', 1),
(23, 'Forbes', '30 under 30', 5, 'Beyond its famed lists, Forbes has a unique voice in its coverage of global business stories. Whether itâ€™s reporting on the â€œnext billon dollar tech company&quot; or scrutinizing a new tax law or discussing investing strategies, Forbes covers its subjects with uncanny insight and perspective found nowhere else.', 'Forbes', '5.35', 'Google', '4575474574574', 'https://lh3.googleusercontent.com/gB6uBiG5DdAIBJ0U-40bajgGvCF5kAeK3PWqPR5nIlHoZ6sH537VK2zlqfPL-Ze_Pp25BgO3RQ=w300-rw', '2017-12-05 13:00:04', '2017-12-05 19:20:56', 0, 34, 0, 'Magazine', '', '', '2012', '', 0),
(24, 'Fortune', 'Business person', 7, 'Do you have an existing subscription to FORTUNE Magazine? Get the digital edition on Google Play! From your Android phone or tablet, find the magazine in the Google Play store app, touch &quot;Subscribe&quot; and select the â€œFor current subscribersâ€ option\r\n\r\nFORTUNE is a global business magazine that has been revered in its content and credibility since 1930. FORTUNE covers the entire field of business, including specific companies and business trends, prominent business leaders, and new ideas shaping the global marketplace. FORTUNE furthers understanding of the economy, provides implementable business strategy, and gives you the practical knowledge you need to maximize your own success.', 'Fortune', '3.65', 'Google', '3463463463463', 'https://lh3.googleusercontent.com/OLT5kPThtw65_G30UhSlk-8vTo0s9x2j3Dk7Guixzc_fir0LwHfqk93wIxvZ3Ihcm00qcTA=w300-rw', '2017-12-05 13:00:57', '2017-12-05 19:21:07', 0, 45, 2, 'Magazine', '2015', '', '2015', '', 0),
(25, 'Maxim', 'Face of an angel', 5, 'Maxim, the world\'s leading men\'s magazine, gives guys what they want â€” beautiful women, jokes, sports, entertainment, gadgets, rides and beautiful women. Did we mention beautiful women?', 'Maxim', '4.99', 'Google', '3463463467355', 'https://lh3.googleusercontent.com/5ilFUoxTqdPTOLiJcZVAeCZqpLdKHvKlZGoiw2GSXWWrQ-UxeC6wIzl0F46S3qOp16UQPxvZ=w300-rw', '2017-12-05 13:02:21', '2017-12-05 19:21:03', 0, 69, 0, 'Magazine', '', '', '2017', '', 0),
(26, 'Illustrated Souls of Black Folk', 'Richly illustrated, this special edition of Du Bois\'s seminal work includes historical woodcuts and engravings, photos and documents.', 8, 'This prophetic statement made by W. E. B. Du Bois over a century ago is from The Souls of Black Folk. One hundred years later, Souls remains the most important treatment of African-American life and culture published in the twentieth century. Richly illustrated, this special edition of Du Bois\'s seminal work includes historical woodcuts and engravings, photos and documents. Most of the photos, engravings, and documents are from the 19th and early 20th century and depict American slavery and its legacy, African-American life, and the prominent figures and events associated with the book\'s content. Assembled by Eugene F. Provenzo Jr., this illustrated edition of The Souls of Black Folk also offers extensive annotations, commentary and related materials from government, the media, advertising, and popular culture. Documents include the Act Establishing the Freedman\'s Bureau, Booker T. Washington\'s Atlanta Exposition Speech, W. E. B. Du Bois\'s essay &quot;The Talented Tenth,&quot; Ida B. Wells-Barnett\'s The Lynch Law in Georgia, W. E. B. Du Bois\'s report &quot;The Negro in the Black Belt,&quot; Alexander Crummell\'s sermon, &quot;Common Sense and Schooling,&quot; W. E. B. Du Bois\'s story, &quot;The Black Man Brings His Gifts,&quot; Thomas Wentworth Higginson\'s article &quot;Negro Spirituals,&quot; and more.', 'W. E. B. Du Bois, Eugene F. Provenzo', '49.49', 'Routledge', '9781317257844', 'https://books.google.com/books/content/images/frontcover/hj9ACwAAQBAJ?fife=w200-h300', '2017-12-05 13:09:07', '2017-12-05 20:17:22', 0, 374, 2, 'Textbook', 'Literature', '', '', '', 1),
(27, 'Leadership: Theory and Practice, Edition 7', '2016 Recipient of the McGuffey Longevity Award from the Text and Academic Authors Association (TAA)', 5, 'Translated into 12 different languages and used in 89 countries, this market-leading text successfully combines an academically robust account of the major theories and models of leadership with an accessible style and practical examples that help students apply what they learn. Peter G. Northouse uses a consistent format for each chapter, allowing students to compare the various theories. Each chapter includes three case studies that provide students with practical examples of the theories discussed. Adopted at more than 1,000 colleges, universities, and institutions worldwide, Leadership: Theory and Practice provides readers with a user-friendly account of a wide range of leadership research in a clear, concise, and interesting manner.', 'Peter G. Northouse', '90.50', 'SAGE Publications', '9781483317540', 'https://books.google.com/books/content/images/frontcover/TuyeBgAAQBAJ?fife=w200-h300', '2017-12-05 13:12:01', '2017-12-05 19:21:17', 0, 520, 0, 'Textbook', 'Social Studies', '', '', '', 0),
(28, 'Sworn To Secrecy: Courtlight #4', 'Young Adult Teen Romance for readers of The Selection &amp; Throne of Glass!', 8, 'The 4th Novel in the bestselling Courtlight series. \r\n\r\nIn the heart of the Imperial Court, Ciardis Weathervane knows that death is coming for the empire. With her friends by her side and the new triad of Weathervanes, she\'s in a race against time to convince the court of the same. \r\n\r\nShe must do her best to unite kith, mages, nobles and merchants under one cause - the fight to prevent a war. Soon she is forced to keep a secret that could exonerate her mother of the Empress\'s death, and is always one move away from stepping into diplomatic chaos. \r\n\r\nThrow in a daemoni prince who is showing interest in the youngest Weathervane, a jealous prince heir, and a irritated dragon with her own designs on Ciardis, and you have an imperial court in turmoil. \r\n\r\nThis fourth novel continues the story of Ciardis Weathervane from Sworn To Conflict.\r\n\r\nKeywords: Courtlight series, fantasy, royals, romance, boxed set, Ciardis Weathervane, dragons, magic, empires, thrones, queens, ebooks, princes, princess, imperial courts, nobility, teen, YA, young adult, epic reads, love, fairy tales, crown, happily ever after, coming of age, mages, kids, middle grade, hearts, collection, romantic, box set, series, engagement, kingdom, action, adventure, betrothed, swords, sorcery.', 'Terah Edun', '4.99', 'Terah Edun Publishing', '9843453453453', 'https://books.google.com/books/content/images/frontcover/DZ1tBwAAQBAJ?fife=w200-h300', '2017-12-05 13:14:19', '2017-12-05 19:21:22', 0, 345, 0, 'Storybook', '', 'Action and Adventure', '', '', 0),
(29, 'Investment Banking: Valuation, Leveraged Buyouts, and Mergers and Acquisitions', 'The No. 1 guide to investment banking and valuation methods, including online tools', 4, 'In the constantly evolving world of finance, a solid technical foundation is an essential tool for success. Until the welcomed arrival of authors Josh Rosenbaum and Josh Pearl, no one had taken the time to properly codify the lifeblood of the corporate financier?s work?namely, valuation, through all of the essential lenses of an investment banker. With the release of Investment Banking, Second Edition: Valuation, Leveraged Buyouts, and Mergers &amp; Acquisitions, Rosenbaum and Pearl once again have written the definitive book that they wish had existed when they were trying to break into Wall Street. The Second Edition includes both the technical valuation fundamentals as well as practical judgment skills and perspective to help guide the science. This book focuses on the primary valuation methodologies currently used on Wall Street: comparable companies analysis, precedent transactions analysis, discounted cash flow analysis, and leveraged buyout analysis. With the new fully revised edition, they have added the most comprehensive, rigorous set of intuition-building and problem-solving ancillaries anywhere?all of which promised to become essential, knowledge enhancing tools for professionals, and professors and students.\r\nFor those who purchase this edition of the book, there are options to purchase the Valuation Models separately (9781118586167), and to also consider purchase of the Investing Banking Workbook (9781118456118) and Investment Banking Focus Notes (9781118586082) for further self-study.', 'Joshua Rosenbaum, Joshua, Pearl', '79.99', 'John Wiley &amp; Sons', '9781118421611', 'https://books.google.com/books/content/images/frontcover/CTLYKN8xHjIC?fife=w200-h300', '2017-12-05 13:15:50', '2017-12-05 19:21:27', 0, 456, 3, 'Textbook', 'Business', '', '', '', 0),
(30, 'Mechanical Engineering Principles, 3rd ed', 'A student-friendly introduction to core engineering topics', 7, 'This book introduces mechanical principles and technology through examples and applications, enabling students to develop a sound understanding of both engineering principles and their use in practice. These theoretical concepts are supported by 400 fully worked problems, 700 further problems with answers, and 300 multiple-choice questions, all of which add up to give the reader a firm grounding on each topic.\r\nThe new edition is up to date with the latest BTEC National specifications and can also be used on undergraduate courses in mechanical, civil, structural, aeronautical and marine engineering, together with naval architecture. A further chapter has been added on revisionary mathematics, since progress in engineering studies is not possible without some basic mathematics knowledge. Further worked problems have also been added throughout the text.\r\nNew chapter on revisionary mathematics\r\nStudent-friendly approach with numerous worked problems, multiple-choice and short-answer questions, exercises, revision tests and nearly 400 diagrams\r\nSupported with free online material for students and lecturers\r\nReaders will also be able to access the free companion website at: www.routledge.com/cw/bird where they will find videos of practical demonstrations by Carl Ross. Full worked solutions of all 700 of the further problems will be available for both lecturers and students for the first time.', 'John Bird, Carl Ross', '120', 'Routledge', '9781317670506', 'https://books.google.com/books/content/images/frontcover/x1KcBQAAQBAJ?fife=w200-h300', '2017-12-05 13:17:07', '2017-12-05 20:17:04', 0, 355, 2, 'Textbook', 'Mechanical Engineering', '', '', '', 1),
(31, 'Thrawn (Star Wars)', 'NEW YORK TIMES BESTSELLER â€¢ In this definitive novel, readers will follow Thrawnâ€™s rise to powerâ€”uncovering the events that created one of the most iconic villains in Star Wars history', 4, 'One of the most cunning and ruthless warriors in the history of the Galactic Empire, Grand Admiral Thrawn is also one of the most captivating characters in the Star Wars universe, from his introduction in bestselling author Timothy Zahnâ€™s classic Heir to the Empire through his continuing adventures in Dark Force Rising, The Last Command, and beyond. But Thrawnâ€™s origins and the story of his rise in the Imperial ranks have remained mysterious. Now, in Star Wars: Thrawn, Timothy Zahn chronicles the fateful events that launched the blue-skinned, red-eyed master of military strategy and lethal warfare into the highest realms of powerâ€”and infamy.', 'Timothy Zahn', '14.99', 'Del Rey', '9780345542847', 'https://books.google.com/books/content/images/frontcover/6OuvDAAAQBAJ?fife=w200-h300', '2017-12-05 13:18:58', '2017-12-05 20:18:44', 0, 448, 1, 'Storybook', '', 'Fantasy', '', '', 1),
(32, 'Ethical Hacking and Penetration Testing Guide', 'Requiring no prior hacking experience, Ethical Hacking and Penetration Testing Guide supplies a complete introduction to the steps required to complete a penetration test, or ethical hack, from beginning to end.', 7, 'You will learn how to properly utilize and interpret the results of modern-day hacking tools, which are required to complete a penetration test. The book covers a wide range of tools, including Backtrack Linux, Google reconnaissance, MetaGooFil, dig, Nmap, Nessus, Metasploit, Fast Track Autopwn, Netcat, and Hacker Defender rootkit. Supplying a simple and clean explanation of how to effectively utilize these tools, it details a four-step methodology for conducting an effective penetration test or hack.Providing an accessible introduction to penetration testing and hacking, the book supplies you with a fundamental understanding of offensive security. After completing the book you will be prepared to take on in-depth and advanced topics in hacking and penetration testing. The book walks you through each of the steps and tools in a structured, orderly manner allowing you to understand how the output from each tool can be fully utilized in the subsequent phases of the penetration test. This process will allow you to clearly see how the various tools and phases relate to each other. An ideal resource for those who want to learn about ethical hacking but don\'t know where to start, this book will help take your hacking skills to the next level. The topics described in this book comply with international standards and with what is being taught in international certifications.', 'Rafay Baloch', '50', 'CRC Press', '9781482231625', 'https://books.google.com/books/content/images/frontcover/fKfNBQAAQBAJ?fife=w200-h300', '2017-12-05 13:20:14', '2017-12-05 19:21:52', 0, 531, 0, 'Textbook', 'Computer Science', '', '', '', 0),
(33, 'Six of Crows', 'Ketterdam: a bustling hub of international trade where anything can be had for the right price--and no one knows that better than criminal prodigy Kaz Brekker.', 6, 'Kaz is offered a chance at a deadly heist that could make him rich beyond his wildest dreams. But he can\'t pull it off alone...\r\nA convict with a thirst for revenge.\r\nA sharpshooter who can\'t walk away from a wager.\r\nA runaway with a privileged past.\r\nA spy known as the Wraith.\r\nA Heartrender using her magic to survive the slums. \r\nA thief with a gift for unlikely escapes. \r\nSix dangerous outcasts. One impossible heist. Kaz\'s crew is the only thing that might stand between the world and destructionâ€”if they don\'t kill each other first.', 'Leigh Bardugo', '9.99', 'Henry Holt and Company (BYR)', '9781627795227', 'https://books.google.com/books/content/images/frontcover/yhIRBwAAQBAJ?fife=w200-h300', '2017-12-05 13:21:39', '2017-12-05 19:43:03', 0, 320, 0, 'Storybook', '', 'Mystery', '', '', 0),
(34, 'TIME', 'Nelson Mandela Commemorative Issue', 4, 'TIME SPECIAL ISSUE. Nelson Mandela (1918-2013): Protester. Prisoner. Peacemaker. His historic life in words and pictures, including tributes by Bono and Morgan Freeman.', 'Time', '9.99', 'Google', '9786575675674', 'https://lh3.googleusercontent.com/VbF8UtYVKzo9SKZ0bOE3SfBp_Sc6Ypkh6D1kd-r6xSqbTcna71NhoEtVKFKp-JEKxNKHNNhzow=w300-rw', '2017-12-05 13:22:53', '2017-12-05 20:16:43', 0, 35, 3, 'Magazine', '', '', '2013', '', 2),
(35, 'Entrepreneur Magazine', 'Ho to succeed in 2018', 2, 'Entrepreneur magazine is the trusted source for growing your business and offers surefire strategies for success. Whether you are just thinking of starting a business, have taken the first steps, or already own your business, Entrepreneur offers the best advice on every aspect of running your own company.', 'Entrepreneur', '2.99', 'Google', '9823572365764', 'https://lh3.googleusercontent.com/OfkTnjSfwEGO-nNKfZAbFL8TJfmwwCpr688EV1b7h06WARboLj0eIyHs4wpVV_MSjItmGN-QEDk=w300-rw', '2017-12-05 13:24:08', '2017-12-05 20:17:48', 0, 12, 9, 'Magazine', '', '', '2017', '', 1),
(36, 'The Novice', 'The Summoner Trilogy', 5, 'He can summon demons. But can he win a war?\r\nFletcher is working as a blacksmith\'s apprentice when he discovers he has the rare ability to summon demons from another world. Chased from his village for a crime he did not commit, Fletcher must travel with his demon, Ignatius, to an academy for adepts, where the gifted are taught the art of summoning.\r\nAlong with nobles and commoners, Fletcher endures grueling lessons that will prepare him to serve as a Battlemage in the Empire\'s war against the savage Orcs. But sinister forces infect new friendships and rivalries grow. With no one but Ignatius by his side, Fletcher must decide where his loyalties lie. The fate of the Empire is in his hands.', 'Taran Matharu', '7.99', 'Feiwel &amp; Friends', '9781250067135', 'https://books.google.com/books/content/images/frontcover/YO7IBAAAQBAJ?fife=w200-h300', '2017-12-05 13:31:36', '2017-12-05 20:16:19', 0, 368, 2, 'Storybook', '', 'Horror', '', '', 1),
(37, 'Possession', 'Steel Brothers Saga', 6, 'Editorial Reviews\r\n&amp;quot;Sorry Christian and Gideon, thereâ€™s a new heartthrob for you to contend with. Meet Talon. Talon Steel.&amp;quot; -Booktopia \r\n&amp;quot;Possession brings Talon Steel\'s story to a conclusion, wrapping up a thrilling mystery intertwined with some amazingly hot sex scenes... the buildup to the protagonists discovery keeps the pages moving at a rapid-fire pace. &amp;quot; -RT Book Reviews\r\n&amp;quot;I\'m dead from the strongest book hangover ever. Helen exceeded every expectation I had for this book. It was heart pounding, heartbreaking, intense, full throttle genius. &amp;quot; -Tina at Bookalicious Babes Blog\r\n&amp;quot;WOAH. Helen Hardt has truly blown me away with this series. It is dark, emotional, intense, horrifying, and utterly beautiful all mixed together. &amp;quot; -Pretty Little Book Reviews\r\n&amp;quot;Such a beautiful torment - the waiting, the anticipation, the relief that only comes briefly before more questions arise, and the wait begins again... Check. Mate. Ms. Hardt...&amp;quot; -Bare Naked Words\r\n&amp;quot;The love scenes are beautifully written and so scorching hot Iâ€™m fanning my face just thinking about them.&amp;quot; -The Book Sirens\r\nSynopsis\r\nJade Robertsâ€™s love for Talon Steel is the real deal, and sheâ€™s more determined than ever to help him come to grips with whatever is haunting him. To that end, she continues her investigation of the Steelsâ€¦and unknowingly attracts some dangerous foes from their shrouded history.\r\nTalon loves Jade deeply and longs to possess her forever, so he faces his worst fears and exposes his rawest wounds in an attempt to heal. The road is icy and treacherous, but if he perseveres and comes out whole on the other side, heâ€™ll finally be worthy of Jadeâ€™s love.\r\nThe untamed passion between the two still blazes, but as the horrors of Talonâ€™s past resurface, Jade and Talon arenâ€™t safeâ€¦', 'Helen Hardt', '6.99', 'Meredith Wild', '9781943893683', 'https://books.google.com/books/content/images/frontcover/qx3-CwAAQBAJ?fife=w200-h300', '2017-12-05 13:32:28', '2017-12-05 20:14:59', 0, 233, 4, 'Storybook', '', 'Romance', '', '', 1),
(38, 'It (by King)', 'Stephen Kingâ€™s terrifying, classic #1 New York Times bestseller, â€œa landmark in American literatureâ€ (Chicago Sun-Times)â€”about seven adults who return to their hometown to confront a nightmare they had first stumbled on as teenagersâ€¦an evil witho', 8, 'Welcome to Derry, Maine. Itâ€™s a small city, a place as hauntingly familiar as your own hometown. Only in Derry the haunting is real.\r\n\r\nThey were seven teenagers when they first stumbled upon the horror. Now they are grown-up men and women who have gone out into the big world to gain success and happiness. But the promise they made twenty-eight years ago calls them reunite in the same place where, as teenagers, they battled an evil creature that preyed on the cityâ€™s children. Now, children are being murdered again and their repressed memories of that terrifying summer return as they prepare to once again battle the monster lurking in Derryâ€™s sewers.\r\n\r\nReaders of Stephen King know that Derry, Maine, is a place with a deep, dark hold on the author. It reappears in many of his books, including Bag of Bones, Hearts in Atlantis, and 11/22/63. But it all starts with It.\r\n\r\nâ€œStephen Kingâ€™s most mature workâ€ (St. Petersburg Times), â€œIt will overwhelm youâ€¦ to be read in a well-lit room onlyâ€ (Los Angeles Times).', 'Stephen King', '11.99', 'Simon and Schuster', '9781501141232', 'https://books.google.com/books/content/images/frontcover/-rUACwAAQBAJ?fife=w200-h300', '2017-12-05 15:40:44', '2017-12-05 19:43:40', 0, 1168, 5, 'Storybook', '', 'Horror', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `bookid` int(11) NOT NULL,
  `datecreated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `isdeleted` tinyint(1) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `userid`, `bookid`, `datecreated`, `isdeleted`, `comment`) VALUES
(1, 1, 1, '2017-11-24 16:01:29', 0, 'Hello, this is my first comment.'),
(2, 1, 1, '2017-11-24 16:02:33', 0, 'Another beautiful comment.'),
(4, 1, 12, '2017-11-24 16:06:56', 0, 'Great story book, keep it coming. Thanks.'),
(13, 1, 1, '2017-11-24 18:06:50', 0, 'It\'s magic.....'),
(14, 1, 1, '2017-11-28 09:18:21', 0, 'Thank you so much.'),
(15, 2, 1, '2017-12-03 02:12:58', 0, 'Lovely Book'),
(16, 2, 1, '2017-12-03 02:13:14', 0, 'Thanks\r\nSo\r\nMuch'),
(17, 1, 13, '2017-12-05 10:04:58', 0, 'Hello\nHi\nNice addition.'),
(18, 4, 37, '2017-12-05 20:14:58', 0, 'Great Book. Thanks!'),
(19, 4, 34, '2017-12-05 20:15:21', 0, 'wow inspirational!!'),
(20, 4, 15, '2017-12-05 20:15:35', 0, 'I totally love this one'),
(21, 4, 16, '2017-12-05 20:15:45', 0, 'Great!!'),
(22, 6, 36, '2017-12-05 20:16:19', 0, 'Thanks! The book is amazing!!!'),
(23, 6, 34, '2017-12-05 20:16:43', 0, 'Lovely Book'),
(24, 6, 30, '2017-12-05 20:17:04', 0, 'Really helpful for my studies'),
(25, 6, 26, '2017-12-05 20:17:22', 0, 'wow finally found it. Thanks!!'),
(26, 8, 35, '2017-12-05 20:17:48', 0, 'Thanks!! Great one'),
(27, 8, 20, '2017-12-05 20:18:07', 0, 'Such an interesting one!!!'),
(28, 8, 22, '2017-12-05 20:18:27', 0, 'wow!!!!!!!!!'),
(29, 8, 31, '2017-12-05 20:18:43', 0, 'nice!!!');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(256) NOT NULL,
  `firstname` varchar(256) NOT NULL,
  `lastname` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `gender` tinyint(1) NOT NULL,
  `dob` date NOT NULL,
  `type` tinyint(1) NOT NULL DEFAULT '2',
  `newuser` tinyint(1) NOT NULL DEFAULT '1',
  `password` varchar(1024) NOT NULL,
  `picture` varchar(1024) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `firstname`, `lastname`, `email`, `gender`, `dob`, `type`, `newuser`, `password`, `picture`) VALUES
(1, 'admin', 'administrator', 'Booklisting', 'admin@booklisting.tk', 1, '1993-11-06', 1, 1, '$2y$10$c6O.dRqliSZS8Fv/oEsr8OmpbqNjX026LyLd3ODVL/funGeqGD8Ji', 'http://i.dailymail.co.uk/i/pix/2017/04/20/13/3F6B966D00000578-4428630-image-m-80_1492690622006.jpg'),
(2, 'hather', 'Hather', 'Brook', 'hather@gmail.com', 1, '1996-12-03', 2, 1, '$2y$10$UGhP6L7NR9N/TX86007x7ed/apkTVHQ8pJzM.9IiOGv99IPIBsYUW', 'http://devilsworkshop.org/files/2013/01/enlarged-facebook-profile-picture.jpg'),
(4, 'fayearnold', 'faye', 'Arnold', 'fayearnold@booklisting.co', 2, '2016-11-01', 2, 0, '$2y$10$qRcAX/FvV0FehIZ3.YbKrOOqFqYVi1da.Rt44Sv2ExPq7N9MsW2TC', ''),
(5, 'Evelynrobbins', 'Evelyn', 'Robbins', 'Evelynrobbins@gmail.com', 2, '1994-06-14', 2, 0, '$2y$10$xN.fwAMj7GLqphNTvbOuhe94.BkJLf1.CX7qWsxDw66TW1Ni07Pby', 'https://i.pinimg.com/736x/0b/21/4d/0b214dbb30b6612ee49167da748d2f8c--amazing-eyes-beautiful-eyes.jpg'),
(6, 'Vincentgreer', 'Vincent', 'Greer', 'Vincentgreer@gmail.com', 1, '1981-06-22', 2, 0, '$2y$10$YfaxEdulLhIo760CulFjjOhJjF92vTuwT62fClfRO5Pv9cXSJjtQG', 'https://i.pinimg.com/236x/94/a2/8a/94a28a51023aabd3f69cfdcd3a45a21e--hairstyles-for-oval-faces-men-hairstyles.jpg'),
(7, 'Kendradean', 'Kendra', 'Dean', 'Kendradean@booklisting.com', 1, '1982-06-08', 2, 0, '$2y$10$qigsncejdVbFuTAbwsTAcuFi81UqQR1F/ER9cCHePjMS9TMvqFZDm', 'http://www.stylisheve.com/wp-content/uploads/2012/01/Men-Hairstyles-for-round-face_12.jpg'),
(8, 'Jackieblair', 'Jackie', 'Blair', 'Jackieblair@booklisting.com', 1, '1981-12-16', 2, 0, '$2y$10$T4XPz1bfCP/W1z6tYAh9euig3lvNC3QlcWn9LsWHrf4.rPBWHb.Hu', 'http://www.womensforum.com/images/stories/c_health_beauty/brighten-your-face-with-makeup.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comment_userid` (`userid`),
  ADD KEY `comment_bookid` (`bookid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `userid` FOREIGN KEY (`userid`) REFERENCES `user` (`id`);

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comment_bookid` FOREIGN KEY (`bookid`) REFERENCES `books` (`id`),
  ADD CONSTRAINT `comment_userid` FOREIGN KEY (`userid`) REFERENCES `user` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
