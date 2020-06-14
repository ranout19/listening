-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2019 at 10:39 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `listening`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(2, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `allsoal`
--

CREATE TABLE `allsoal` (
  `id_as` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `id_bahasa` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `allsoal`
--

INSERT INTO `allsoal` (`id_as`, `id_kelas`, `id_bahasa`, `status`) VALUES
(1, 1, 1, 1),
(2, 2, 1, 0),
(3, 3, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `bahasa`
--

CREATE TABLE `bahasa` (
  `id_bahasa` int(11) NOT NULL,
  `bahasa` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bahasa`
--

INSERT INTO `bahasa` (`id_bahasa`, `bahasa`) VALUES
(1, 'Inggris');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL,
  `kelas` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `kelas`) VALUES
(1, '12'),
(2, '11'),
(3, '10');

-- --------------------------------------------------------

--
-- Table structure for table `soal`
--

CREATE TABLE `soal` (
  `id_soal` int(11) NOT NULL,
  `audio` varchar(255) NOT NULL,
  `soal` varchar(255) NOT NULL,
  `teks` text NOT NULL,
  `id_bahasa` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `soal`
--

INSERT INTO `soal` (`id_soal`, `audio`, `soal`, `teks`, `id_bahasa`, `id_kelas`) VALUES
(9, 'bbc_tews_133_weather_idioms_130723_tews_133_weather_idioms_audio_au_bb.mp3', '<p>what?</p>\r\n', '<p>Li: Hello and welcome to The English We Speak from BBC Learning&nbsp;English. I&#39;m Yang Li. I am waiting for Jen to arrive in the studio, but she&#39;s outside and she&#39;s in a really bad mood, so I thought it would be a good opportunity to teach you some weather idioms. What do you think? Jen&#39;s looking really angry. Have a listen&hellip;<br />\r\nJen: (Screaming and shouting)<br />\r\nLi: She has a face like thunder. If you have a face like thunder, it means that you are very angry indeed. And Jen definitely seems angry!<br />\r\nJen: (In the background) It&#39;s so unfair. When things go wrong for me, they always go badly wrong. It never rains but it pours!<br />\r\nLi: There&#39;s another weather idiom. Did you hear it? Jen said &quot;it never rains but it pours.&quot; That&#39;s something that people say when they think they have very big problems. I wonder what Jen&#39;s problem is? Oh, here she comes!<br />\r\nJen: Hi Li. Sorry I&#39;m late. I&#39;m so upset. The boss said that I would get a promotion if I finished all of my work by midday. I finished everything by 12 o&#39;clock and now the boss is ignoring my emails about the promotion and won&#39;t talk to me.<br />\r\nLi: I think you&#39;re just chasing rainbows, Jen. If you chase rainbows, it means you are trying to do something that will never happen.<br />\r\nJen: So you don&#39;t think I&#39;ll get a promotion?<br />\r\nLi: No, I don&#39;t think so. I think the boss was probably just trying to get you to finish your work more quickly.<br />\r\nJen: He tricked me! There he is! I&#39;m going to go and talk to him! (Door closes)<br />\r\nLi: Well, that all sounds like a storm in a teacup to me. If something is described as &#39;a storm in a teacup&#39;, it means that a person is exaggerating their problems and making their problems sound worse than they actually are. Here&#39;s Jen coming back in! (To Jen) Well? What did he say?<br />\r\nJen: He said that he was pleased with my work and that we&#39;ll talk about the promotion next week. He also said that I can have the rest of the afternoon off!<br />\r\nLi: You see, Jen? Every cloud has a silver lining! The idiom means that you can always find something positive, even in a bad situation. Jen: You&#39;re absolutely right. What do you think I should do with my free afternoon, then?<br />\r\nLi: Well, I&#39;d go and sit in the park, the weather&#39;s lovely today! Join us again for another edition of The English We Speak from BBC Learning English.<br />\r\nBoth: Bye!</p>\r\n', 1, 1),
(11, 'bbc_tews_135_horses_mouth_new_130806_tews_135_horse_mouth_audio1_au_bb.mp3', '<p>what?</p>\r\n', '<p>(Galloping hooves)</p>\r\n\r\n<p>Finn:&nbsp;Hello, I&#39;m Finn and we&#39;re presenting today&#39;s The English We Speak on horseback. I&#39;m joined by&hellip;</p>\r\n\r\n<p>Fefei: Hello. Yes, we&#39;re taking a horse-riding holiday in the beautiful mountains of Wales</p>\r\n\r\n<p>Finn: Isn&#39;t it glorious?(Horse whinny)<br />\r\nFinn: Sorry about that &ndash; by Feifei&hellip;</p>\r\n\r\n<p>Feifei: Beautiful. A million miles away from London.<br />\r\n(Horse whinny)</p>\r\n\r\n<p>Feifei: Eh, talking about London &ndash; you know our friend Mark, did you hear his news?</p>\r\n\r\n<p>Finn:&nbsp;Apparently he&#39;s starting a new ice-cream business &ndash; with lots of crazy flavours.</p>\r\n\r\n<p>Feifei: No, what happened?<br />\r\nFinn: Great news for him. He sold his ice-cream delivery company.<br />\r\nFeifei: Wow!<br />\r\nFinn: And he made &pound;500,000.<br />\r\nFeifei: Really? That&#39;s great news. Where did you hear that?<br />\r\nFinn: Straight from the horse&#39;s mouth.<br />\r\n(Horse whinny)<br />\r\nFeifei: Eh &ndash; from our horse? Our horse told you about Mark?<br />\r\nFinn: No, straight from the horse&#39;s mouth means...<br />\r\nFeifei: I know what it means, just kidding! Straight from the horse&#39;s mouth means directly from the source of the news or information &ndash; so in this case our friend Mark told Finn himself about the ice-cream business. Right, Finn?<br />\r\nFinn: Absolutely. Listen to these examples:<br />\r\nExamples<br />\r\nA: Our university is going to start teaching courses in oceanography.<br />\r\nB: Really? How do you know that?<br />\r\nA: Straight from the horse&#39;s mouth &ndash; the head of the university told me.<br />\r\nA: Are you sure Michael is coming tomorrow? I haven&#39;t seen him for ages.<br />\r\nB: Yes, straight from the horse&#39;s mouth. He phoned me yesterday to tell me!<br />\r\nFeifei: Anyway, what&#39;s Mark going to do next?</p>\r\n\r\n<p>Feifei: Like what?<br />\r\nFinn: Grass-flavoured ice-cream.<br />\r\nFeifei: Really?<br />\r\nFinn: Sure - straight from the&hellip;<br />\r\nFeifei: Horse&#39;s mouth!<br />\r\n(Horse whinny)<br />\r\nFeifei: Well, I think our horse friend might enjoy grass-flavoured ice-cream, but<br />\r\nI&#39;m not so sure myself. Anyway do check out bbclearningenglish.com for<br />\r\nmore phrases.<br />\r\nFinn: Bye. Giddy up.<br />\r\n(Horse whinny and gallop off)</p>\r\n', 1, 1),
(12, 'bbc_tews_137_can_of_worms_final_130820_tews_137_can_of_worms_audio2_au_bb.mp3', '<p>what?</p>\r\n', '<p>Finn: Hello and welcome to The English We Speak. I&#39;m Finn.</p>\r\n\r\n<p>Feifei: And I&#39;m Feifei.</p>\r\n\r\n<p>Finn: Worms are great &ndash; don&#39;t you think they&#39;re really interesting?</p>\r\n\r\n<p>Feifei: Erm, yeah, kind of. But what&#39;s today&#39;s phrase?</p>\r\n\r\n<p>Finn: Yeah, yeah, yeah, we&#39;ll come to that in a minute. But, did you know earthworms, the kind you normally find in the soil, are both male and female in one body?</p>\r\n\r\n<p>Feifei: That is quite interesting.</p>\r\n\r\n<p>Finn: And if you cut a worm in half &ndash; only one part of the worm will die!</p>\r\n\r\n<p>Feifei: Oh yes, the part with the fat little bump on it will survive. I knew that.</p>\r\n\r\n<p>Finn: And earthworms can be really short &ndash; from only one millimetre &ndash; to a massive three metres! Oh, and, another one, worms can&hellip;</p>\r\n\r\n<p>Feifei: Finn, hang on a second, why are we talking about worms so much?</p>\r\n\r\n<p>Finn: Sorry, yes, I was doing some research for today&#39;s programme. The phrase, today, is: a can of worms!</p>\r\n\r\n<p>Feifei: Right. Well &#39;a can of worms&#39; is a phrase we use to describe a situation that causes a lot of problems when you start to deal with it.</p>\r\n\r\n<p>Finn: Yes, sometimes you want to deal with a problem, but you realise that by dealing with that problem it will open up a whole set of new problems.</p>\r\n\r\n<p>Feifei: Like in these</p>\r\n\r\n<p>examples:</p>\r\n\r\n<p>Examples</p>\r\n\r\n<p>A: Charles, have you finished writing that report about our fantastic sales figures this month?</p>\r\n\r\n<p>B: No, because actually I realised our sales figures are all wrong. Someone has been giving us false information for months&hellip;</p>\r\n\r\n<p>A: Oh no, what a can of worms. When Frank asked why his brother arrived late to the party,</p>\r\n\r\n<p>his brother started telling Frank all about the problems in his life: why his car wasn&#39;t working and that he had to take it to the garage on his way, after visiting the doctor because, yes, his foot was very painful, because he hurt it playing tennis, which he didn&#39;t want to play anyway but did&nbsp; because his friend loved playing it so much, even though he didn&#39;t like the friend any more, because the friend still owed him money&hellip; Frank realised he&#39;d opened a can of worms.</p>\r\n\r\n<p>Feifei: That was possibly the longest example we&#39;ve had on The English We Speak! Finn: Yes, well anyway &ndash; I hope everyone listening understands the phrase now. I think I&#39;ll get back to my reading. 34,000 different kinds of worm, wow&hellip; They can live for up to 10 years! Fascinating&hellip; They eat their own weight every day&hellip;</p>\r\n\r\n<p>Feifei: OK, well I think we&#39;ve lost Finn there. I think I&#39;ve had enough of worms for one day. Do join us again for more The English We Speak! Bye.</p>\r\n\r\n<p>Finn: &hellip;worms have existed for about 600 million years, and they breathe through their skin, cool!</p>\r\n', 1, 1),
(13, 'bbc_tews_154_ginormous_final_131217_tews_154_ginormous_audio_au_bb.mp3', '<p>what?</p>\r\n', '<p>(Sounds of a busy Chinese city)<br />\r\nFinn: Hi, I&#39;m Finn, and today in The English We Speak we&#39;re in Feifei&#39;s home country &ndash; China.<br />\r\nFeifei: Welcome, welcome... what do you think, Finn?<br />\r\nFinn: Well, Feifei, there are so many&hellip; skyscrapers.<br />\r\nFeifei: Lots of tall buildings. Impressive, aren&#39;t they?<br />\r\nFinn: Absolutely. Look at that one. It&#39;s gigantic!<br />\r\nFeifei: Oh the Jin Mao Tower, yes it&#39;s pretty gigantic.<br />\r\nFinn: And this one is really&hellip; enormous!<br />\r\nFeifei: Yes, it is. The Oriental Pearl Tower is enormous.<br />\r\nFinn: And this one is absolutely&hellip; ginormous!<br />\r\nFeifei: Gi&hellip; what? Finn, you just made that word up.<br />\r\nFinn: No, seriously, ginormous is a word! It&#39;s very informal, and means, well gigantic and enormous. Kind of a combination of both.<br />\r\nFeifei: Gigantic, enormous &ndash; ginormous. And you&#39;re right &ndash; the World Financial Centre is ginormous!<br />\r\nFinn: Can we go to the top of the tower?<br />\r\nFeifei: Sure. While we take the lift up, listen to these examples.<br />\r\nExamples<br />\r\nLook at that old mobile phone from the 80s &ndash; it&#39;s ginormous!<br />\r\nThose carrots are ginormous!<br />\r\n(Lift announcement: top floor)<br />\r\nFeifei: Here we are. Wow, what a view!<br />\r\nFinn: It&#39;s incredible, isn&#39;t it? Do you know how high up we are?<br />\r\nFeifei: Hmmm&hellip; I don&#39;t know. Let me guesstimate.<br />\r\nFinn: Guesstimate?<br />\r\nFeifei: Oh, you don&#39;t know that word &ndash; it&#39;s a combination of &#39;guess&#39; and &#39;estimate&#39;.<br />\r\nFinn: Aha &ndash; I see! So how tall do you think this ginormous tower is?<br />\r\nFeifei: About 500 metres?<br />\r\nFinn: Pretty tall! We&#39;re high above all the &#39;smog&#39;.<br />\r\nFeifei: You mean a combination of smoke and&hellip;?<br />\r\nFinn: Fog, yes. Actually Feifei, I&#39;m really scared of heights. Shall we go back down?<br />\r\nFeifei: Oh, you really are a ginormous coward Finn!<br />\r\nFinn: Hey, come on, Feifei! Right, let&#39;s remind everyone to log on to www.bbclearningenglish.com for more phrases! Bye.<br />\r\nFeifei: Bye!<br />\r\n(Lift announcement: lift going down)</p>\r\n', 1, 1),
(14, 'bbc_tews_152_fishing_for_compliments_131203_tews_152_fishing_for_compliments_audio_au_bb.mp3', '<p>what?</p>\r\n', '<p>Li: Hello and welcome to The English We Speak, I&#39;m Li and with me today is Rob.<br />\r\nRob: Shhh Li, be quiet, I think I&#39;ve nearly caught one.<br />\r\nLi: Caught what?<br />\r\nRob: A fish! That&#39;s why we&#39;re fishing - to catch a fish.<br />\r\nLi: Ah yes.<br />\r\nRob: I did say I would teach you the art of fishing - how to cast off and how to reel in a massive fish.<br />\r\nLi: (Quietly) Is Rob really good at fishing?<br />\r\nRob: Yes, I am, I&#39;ve been doing it for years&hellip; I once caught a massive shark&hellip; it was THIS big&hellip; but I&#39;m not that good at it really. I just do it for fun, I&#39;m not competitive or anything like that!<br />\r\nLi: Of course you&#39;re not! The only thing Rob is fishing for today is compliments. Rob, are you hoping to catch some compliments today?<br />\r\nRob: Compliments - how big are they exactly?<br />\r\nLi: No. Compliments! When people say you are &#39;fishing for compliments&#39; it means you try to make people say good things about you. You pretend to be modest about something and hope they disagree and give you praise. So Rob, you want me to say something good about your fishing?<br />\r\nRob: No&hellip; not really&hellip; well, alright then, just one compliment please?<br />\r\nLi: Hmmm, I&#39;ll have a think while we listen to some examples of this phrase:<br />\r\nExamples<br />\r\nJean was fishing for compliments about her outfit when she pretended she only took five<br />\r\nminutes to get ready!<br />\r\nJohn kept saying he couldn&#39;t run very fast but he still won the race; I think he was just<br />\r\nfishing for compliments.<br />\r\nFred: Oh I can only speak a few words of French. I&#39;m no good at languages.<br />\r\nJane: Oh stop fishing for compliments Fred - we know you can speak five languages!<br />\r\nLi: So fishing for compliments is about trying to get someone to say something good about you. Well Rob, I am impressed with your fishing skills - look, you&#39;ve actually caught something!<br />\r\nRob: Oh yes - quick let&#39;s pull it in. Ooh, come on, oh it&#39;s a big one this one come on!<br />\r\nLi: Oh Rob, it&#39;s just an old shoe. Perhaps you were right, you&#39;re not very good at fishing - but that&#39;s OK, I&#39;m not much good either, all I&#39;ve managed to catch today is this 50kg salmon - what do you think?<br />\r\nRob: Wow Li - for a first time, that is amazing. I think that deserves a compliment&hellip;<br />\r\nLi: Go on then Rob&hellip;<br />\r\nRob: Well, I was going to say the eyes on that fish look just like yours!<br />\r\nLi: Hmm, that wasn&#39;t the compliment I was fishing for. In you go&hellip;<br />\r\nSPLASH<br />\r\nLi: &hellip;fish for your own compliments. Bye.<br />\r\nRob: Bye! Can you get me out please?!</p>\r\n', 1, 1),
(15, 'bbc_tews_157_skeleton_in_the_closet_140107_tews_157_skeleton_audio2_au_bb.mp3', '<p>what?</p>\r\n', '<p>(Creaking door)<br />\r\nFinn: Thank you for coming with me to my late uncle&#39;s old house. He died recently.<br />\r\n(Creaking door)<br />\r\nLi: What a huge house!<br />\r\nFinn: Yes. My uncle, Frank Stein, left instructions for me to collect a suitcase which contains a donation to a school.<br />\r\nLi: A kind man who lived in a huge dark house. Oh, what was that?!<br />\r\nFinn: An owl - spooky!<br />\r\n(Spooky sound)<br />\r\nLi: These wooden masks on the walls look very scary, Finn. Look - big eyes, twisted mouths&hellip;<br />\r\nFinn: Yes, they are from an old tribe I think.<br />\r\n(Spooky sound)<br />\r\nLi: Finn, why did your uncle have all this stuff?<br />\r\nFinn: Our family never had much contact with him. He was a bit of a loner with a mysterious past.<br />\r\nLi: Mysterious past?<br />\r\nFinn: Yes. He had a mysterious life. He was an adventurer and a gambler. His first wife was killed in an accident. The second one disappeared suddenly. He had a few skeletons in the closet!<br />\r\nLi: He has got skeletons in the closet! Ahhhhhhhhhhh!<br />\r\nFinn: Calm down, Li. In English, when we say that someone has a skeleton in the closet, we mean that they have a hidden secret which is embarrassing. Let&#39;s hear some examples.<br />\r\nExamples<br />\r\nMr Burns had to resign his position as CEO, after it came to light that his brother was in<br />\r\njail for corruption. Shareholders got scared he might have more skeletons in the closet.<br />\r\nI have always led a modest and honest life. There are no skeletons in my closet.<br />\r\nLi: That&#39;s a relief. So this is just an expression. There are no skeletons in these closets, are there?<br />\r\nFinn: Oh, no. No skeletons in these closets but&hellip;<br />\r\nLi: But what?<br />\r\nFinn: But here&#39;s the suitcase my uncle wanted to donate to a school after his death. And it has&hellip; (he opens the suitcase).<br />\r\nLi: A skeleton!! This place must be haunted! Ohhhhh I&#39;m out of here!! Ahhhhhhh!<br />\r\nFinn: Don&#39;t worry, Li! My uncle Frank Stein was a doctor. He wanted me to donate this skeleton to a medical school for students to examine!<br />\r\n(Sinister laughter, sound of door closing)</p>\r\n', 1, 1),
(16, 'bbc_tews_other_half_131029_tews_147_the_other_half_audio_au_bb.mp3', '<p>what?</p>\r\n', '<p>Li: Hi Neil, how are you?<br />\r\nNeil: I&#39;m fine thanks, how are you Li?<br />\r\nLi: I&#39;m good. Are you free on Saturday evening? I&#39;m holding a small dinner party.<br />\r\nNeil: Saturday? Yeah, that would be fantastic but I&#39;d better just check with my other half.<br />\r\nLi: Your other half? What do you mean?<br />\r\nNeil: Yes I&#39;m not sure if my wife has anything planned for Saturday.<br />\r\nLi: Oh! I didn&#39;t know you call your wife your other half. That&#39;s interesting.<br />\r\nNeil: Yes. That&#39;s a phrase often used by married couples to refer to each other.<br />\r\nLi: That&#39;s useful to know. Let&#39;s hear some examples:<br />\r\nExamples<br />\r\nA: How&#39;s your other half? Is she feeling better?<br />\r\nB: Yes, she is much better, thanks.<br />\r\nLady: I like the colour of the car but I should ask my other half before I buy it.<br />\r\nA: Fancy another pint, John?<br />\r\nB: I&#39;d love another pint but I have promised my other half I&#39;ll be home early.<br />\r\nNeil: So, people often refer to their partner as their other half.<br />\r\nLi: Can this phrase be used to refer to both a husband and a wife?<br />\r\nNeil: Yes, that&#39;s correct. And sometimes a man will refer to his wife as his &#39;better half&#39;.<br />\r\nLi: Better half? Of course the woman is always the better half! Wouldn&#39;t you agree?<br />\r\nNeil: Of course! My wife always reminds me that she&#39;s my better half!<br />\r\nLi: Let&#39;s listen to a couple of examples:<br />\r\nExamples<br />\r\nA: Oh what a lovely room, you&#39;ve made a great job of this.<br />\r\nB: Thanks, but compliments should really go to my better half, she chose all the colours<br />\r\nand the furniture.<br />\r\nA: Thanks for dinner last night. The food was fantastic!<br />\r\nB: You&#39;re welcome. I&#39;m glad you enjoyed it. It was a fun evening. I&#39;m really lucky, my better half is a great cook, I just have to do all the washing up.<br />\r\nLi: I&#39;m sure your wife thinks you are the better half although she may not say it.<br />\r\nNeil: I hope so.<br />\r\nLi: Well, just check with your better half and let me know if you are coming on Saturday.<br />\r\nNeil: I will do, thank you.</p>\r\n', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `allsoal`
--
ALTER TABLE `allsoal`
  ADD PRIMARY KEY (`id_as`),
  ADD KEY `id_bhs` (`id_bahasa`),
  ADD KEY `id_kelas` (`id_kelas`);

--
-- Indexes for table `bahasa`
--
ALTER TABLE `bahasa`
  ADD PRIMARY KEY (`id_bahasa`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `soal`
--
ALTER TABLE `soal`
  ADD PRIMARY KEY (`id_soal`),
  ADD KEY `id_bahasa` (`id_bahasa`),
  ADD KEY `id_kelas` (`id_kelas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `allsoal`
--
ALTER TABLE `allsoal`
  MODIFY `id_as` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `bahasa`
--
ALTER TABLE `bahasa`
  MODIFY `id_bahasa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `soal`
--
ALTER TABLE `soal`
  MODIFY `id_soal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `allsoal`
--
ALTER TABLE `allsoal`
  ADD CONSTRAINT `allsoal_ibfk_1` FOREIGN KEY (`id_bahasa`) REFERENCES `bahasa` (`id_bahasa`) ON UPDATE CASCADE,
  ADD CONSTRAINT `allsoal_ibfk_2` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`) ON UPDATE CASCADE;

--
-- Constraints for table `soal`
--
ALTER TABLE `soal`
  ADD CONSTRAINT `soal_ibfk_1` FOREIGN KEY (`id_bahasa`) REFERENCES `bahasa` (`id_bahasa`) ON UPDATE CASCADE,
  ADD CONSTRAINT `soal_ibfk_2` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
