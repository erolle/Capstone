<?php include("views/head.php"); ?>

<div class="jumbotron">
  <h1>Barrier Mazes: Human Centered Password Authentication System</h1>
  <p>Rochester Institute Of Technology</p>
  <p>By: Erroyl Rolle</p>
  <p><a class="btn btn-primary btn-lg" href="#" role="button">Sign up now!</a></p>
</div>

<h2>Abstract</h2>
<p>In this digital age, people are relying more on web technologies to store secure information, such as credit card numbers. The more difficult it is to remember a secure password, the more likely it will be for users to fall back on less secure and easier to remember passwords. In this proposal the current state of the user experience for password security will be described, the problem space will be identified, and a proposed system for overcoming significant barriers to security will be explored.</p>

<h2>Thesis</h2>
<p>If a graphical password system is developed that takes advantage of the human propensity to easily remember visual sequences connected to phrases, then the pitfalls of not secure but memorable passwords typically used in the industry can be avoided.</p>

<h2>Introduction</h2>
<h3>Background</h3>

<p>The most common authentication system in use is the single factor authentication method, in which a username and password are entered into text fields to grant access to secure information. In order to establish a secure system, both the end-user and the developers need to follow best practices for password use as described by Cranor [8].</p>
<p>Best practices include a long random string of both upper and lower case letters, numbers, and symbols. Users should also have a different password for every website they use so that if one password is cracked it does not give the attacker access to multiple systems.  [1, 8, 11] While these best practices assure the highest level of security at this time, the username password authentication system has an inherent flaw which is known anecdotally to most developers and academically by most Human Computer Interaction (HCI) researchers. The flaw is in the nature of human memory.</p>
<p>Human memory is not equipped to be able to remember random strings. Rather, it relies on past experiences that are well known to the user such as a name of a person or dates that have meaningful emotional significance to the end-user [6, 8, 9, 10, 4]. Passwords that can be memorized easily are the same passwords that can be guessed or brute forced using dictionary attacks [8, 7], thus rendering the whole system of usernames and passwords extremely vulnerable and insecure to attacks [4, 8, 10].</p>
<p>Further compounding the human memory problem is the password policies implemented by most organizations where they require inclusion of at least one uppercase letter and one number. A portion of them also require users to include a symbol of some type. These practices lead to patterns which can be identified and exploited by attackers. Hackers can analyze large sets of previously exposed passwords, then develop algorithms and dictionary attacks to take advantage of typical password creation behaviors. For example, many passwords consist of the following pattern: one name or word, typically with the first letter capitalized, followed by a four digit number, usually a date. Many times the first word in the password is a word containing four letters. This pattern occurs for many reasons; one notable reason is the minimum requirement of characters needed for a valid password. Most organizations require a minimum of eight characters; this encourages the user behavior of creating passwords that are exactly eight characters [11].</p>

<h3>Landscape</h3>
<p>A variety of alternatives to the standard username and password authentication system exist, such as audio-based authentication, multi-factor authentication, and public-key private-key systems. After examining these systems, graphical passwords present themselves as the most promising candidate. A variety of graphical password systems have been developed over the past 12 years [9, 10]. Three systems in particular have desirable features that warrant further exploration.</p>
<p>Testing graphical passwords systems includes assessment of effectiveness, efficiency & satisfaction by measuring the completion time (efficiency), the number of errors, failure to properly input the correct password (effectiveness), and ease of use based on feedback from the user (satisfaction). This allows the following three systems to be easily compared to the proposed system by using the summative usability metric (SUM) proposed by Jeff Sauro [6].</p>
<p>The first system is that of image recognition and selection, wherein users select pre-established images from a grid of images in sequence. In some cases to increase the strength of the password, a sequence of images is selected on a series of screens. This creates a cryptographically strong password which is easy for the user to remember [6] [9] [10]. A downside of this method is that it is susceptible to over the shoulder attacks where a person who is watching can see what is being clicked by the user.</p>
<p>In the second system, image interpretation, users are shown a group of randomly generated images which resemble inkblots. The user interprets each inkblot shape, then begins typing the associated word or phrase with each shape. The first two letters of each answer are taken by the system then concatenated to create a unique cryptographically strong password [9, 10]. The main problem with this study is that there has been a lack of testing, and it may be vulnerable to guessing attacks. The testing that has been done on this system is similar to that of Jeff Sauro’s SUM [6].</p>
<p>The third system uses password phrases. Password phrases are short phrases, usually mnemonic, made up of a series of dictionary words that are easily remembered. An example of this was illustrated by Munroe, the author of XKCD: "correct horse battery steeple" [15]. These phrases often are not logical but are memorable, making them difficult for attackers to launch dictionary attacks that include logical sentences and phrases. However mnemonic password phrases are slightly harder for users to remember than the dictionary words and simple weak passwords. This was quantified in a study by Jeff Yan where he tested the memorability of mnemonic password phrases. In this study, only between 2% - 3% of users forgot their passwords. This indicates that even though they are harder for people to remember, this is still minor given the benefits of the security it offers [8]. This testing methodology is similar to that of Sauro’s SUM [6].</p>
<p>Previous tests for click-based graphical passwords, inkblot based passwords, and password phrase systems all tested the effectiveness, efficiency & satisfaction over time. In order to compare our system to a broader landscape of alternative password systems, it is important to test it using a method that can facilitate analysis of the proposed system against other systems that inhabit the same problem space.</p>


<h2>Problem Space</h2>
<p>Human memory has difficulty remembering random strings. As the digital age progresses the consumption of electronic services has increased significantly and will continue to increase for the foreseeable future. Many of these electronic services store personal information and access to personal assets. The more difficult these systems are to access with passwords that are secure but not memorable, the more likely users will use passwords that are memorable but not secure as explained by Cranor and Garfinkel in Security and Usability [8]. In doing this, users are making their information vulnerable to online and offline attacks that can be launched on a large scale by botnets or banks of accelerated graphics cards [1]. </p>
<p>The usability of these systems must take into account the users and their cognitive strengths and weaknesses by leveraging what humans can do well, and what machines do poorly. Graphical passwords are more useable for humans and require more processing power from computers.</p>

<h2>Proposed Solution</h2>
<p>The proposed capstone project is to develop a system that is as straightforward as the username and password system but does not have the same password memorability flaws. The system that will be developed will have high entropy passwords with a high degree of password strength and security [3]. The system will also have easy to memorize passwords that are not vulnerable to guessing attacks or dictionary attacks by other users. A likely candidate for solving this problem is introducing a graphical password system that is easy to implement by developers and is comparable if not better than standard password text fields.</p>
<p>The proposed system is partially inspired by the image recognition, password phrases and inkblot password system, as well as the concept of a barrier maze, introduced in a popular science fiction movie entitled The Ghost in the Shell (1995).  </p>
<p>In this science fiction movie, humans directly interface with computers through their brainstem. To protect themselves against hackers, firewalls were put in place between the brain and the electronic systems they directly accessed. These firewalls were extremely sophisticated and were able to counter the attempts of hackers by confusing or counterattacking hackers. Science fiction has in the past inspired developments in User Experience (UX) and HCI, as described by Nathan Shedroff and Christopher Noessel in the book Make It So (2012).</p>
<p> The proposed barrier maze is a series of challenge response images as seen in figures one and two. It would be made up of a series of inkblots generated from preceding user input. The workflow of this system starts at the login page where the user is prompted to enter their username. From this, their name is translated into a numeric value and used to generate the first inkblot, which the user will interpret using a previously user-assigned descriptive name or phrase. That phrase will be converted to a numeric value and used to initiate the next inkblot. The phrase will also be used for the first portion of the user’s ultimate password. After several repetitions of this series of actions, the final password, having a high bit strength, will be submitted to the server.</p>

<p><img src="img/figure1.png" /><br></p>

<p>The strength of this system is its ability to counterattack potential hackers. If an incorrect phrase associated with an image is entered, the system will generate an incorrect following image as seen in figure 2. However the attacker will not be aware that they are being misled until the final submission of the password is sent to the server. If the user incorrectly enters the wrong phrase, the system will generate an image that is unfamiliar to the user, giving a cue that they made an error. The user will be able to correct their phrase within the sequence. </p>
<p><img src="img/figure2.png" /><br></p>

<h2>Deliverables</h2>
<p>If a visual login system is developed using user testing and cognitive best practices then this creates a more usable and secure system. To prove the system's usability and to make it comparable with other studies, the system will be tested using SUM [6].  </p>
<p>The security will be tested using a standardized security test, which would test the password strength and security of each password [3]. To test this, the passwords generated by users using the barrier maze system must be subjected to a strong up-to-date dictionary attack. To accomplish this, the Cloudcracker system developed by Moxie Marlinspike is the best choice due to the constant updates to the Cloudcracker system and the immense database of common passwords employed in dictionary attacks using the it.</p>
<p>There are four expected deliverables to be generated upon completion of this capstone: </p>
<ol>
    <li>A high fidelity prototype of the barrier maze system </li>
    <li>A usability report done in the SUM format </li>
    <li>A security audit of the software system using a widely accepted industry standard </li>
    <li>A written document describing the project and all results from the tests</li>
</ol>

<h2></h2>
<p>The authentication system will be built using the PHP and Javascript scripting languages. The database will be created with MySQL. PHP will be used to add and remove records from the database.  PHP will validate authentication requests and grant session cookies. Javascript and html5 canvas will generate the inkblots, validate and check user input as well as convert strings of characters into numeric values. JASON will be used to pass data from the browser and the server. JASON will also be used to create an API that developers can use to authenticate users on their own site. The barrier maze systems API will communicate with other servers using the OAuth open standard. </p>
<p>IRB Approval for the testing phase will be submitted for approval fall quarter and testing will begin after winter break in winter quarter. The SUM test will produce a document that is a description of the product and the results of the study. This document will be completed at the end of winter quarter. The results will be combined with the research presented in this proposal into a summary document of the entire project.</p>
<p></p>

<h2>REFERENCES</h2>
<ol>
    <li>Benny Pinkas and Tomas Sander. 2002. Securing passwords against dictionary attacks. InProceedings of the 9th ACM conference on Computer and communications security (CCS '02), Vijay Atluri (Ed.). ACM, New York, NY, USA, 161-170.</li>
    <li>Elizabeth Stobert. 2010. Usability and strength in click-based graphical passwords. In Proceedings of the 28th of the international conference extended abstracts on Human factors in computing systems (CHI EA '10). ACM, New York, NY, USA, 4303-4308.</li>
    <li>Gildas Avoine, Pascal Junod, and Philippe Oechslin. 2008. Characterization and Improvement of Time-Memory Trade-Off Based on Perfect Tables. ACM Trans. Inf. Syst. Secur. 11, 4, Article 17 (July 2008), 22 pages.</li>
    <li>Gregory V. Bard. 2007. Spelling-error tolerant, order-independent pass-phrases via the damerau-levenshtein string-edit distance metric. In Proceedings of the fifth Australasian symposium on ACSW frontiers - Volume 68 (ACSW '07), Ljiljana Brankovic, Paul Coddington, John F. Roddick, Chris Steketee, James R. Warren, and Andrew Wendelborn (Eds.), Vol. 68. Australian Computer Society, Inc., Darlinghurst, Australia, Australia, 117-124.</li>
    <li>IMDB 2012. Ghost in the Shell.  http://www.imdb.com/title/tt0113568/</li>
    <li>Jeff Sauro and Erika Kindlund. 2005. A method to standardize usability metrics into a single score. InProceedings of the SIGCHI conference on Human factors in computing systems (CHI '05). ACM, New York, NY, USA, 401-409.</li>
    <li>Larry Holt. 2011. Increasing real-world security of user IDs and passwords. In Proceedings of the 2011 Information Security Curriculum Development Conference (InfoSecCD '11). ACM, New York, NY, USA, 34-41.</li>
    <li>Lorrie Faith Cranor and Simson Garfinkel. Security and Usability: Designing Systems that People Can Use. O’Reilly Media, edited collection edition, 2005.</li>
    <li>Marcia Gibson, Karen Renaud, Marc Conrad, and Carsten Maple. 2009. Musipass: authenticating me softly with "my" song. In Proceedings of the 2009 workshop on New security paradigms workshop(NSPW '09). ACM, New York, NY, USA, 85-100.</li>
    <li>Nathan Shedroff and Christopher Noessel. 2012. Make It So. Rosenfeld Media, LLC</li>
    <li>Philip G. Inglesant and M. Angela Sasse. 2010. The true cost of unusable password policies: password use in the wild. In Proceedings of the 28th international conference on Human factors in computing systems (CHI '10). ACM, New York, NY, USA, 383-392.</li>
    <li>Robert Biddle, Sonia Chiasson, and P.C. Van Oorschot. 2012. Graphical passwords: Learning from the first twelve years. ACM Comput. Surv. 44, 4, Article 19 (September 2012), 41 pages.</li>
    <li>Shai Halevi and Hugo Krawczyk. 1999. Public-key cryptography and password protocols. ACM Trans. Inf. Syst. Secur. 2, 3 (August 1999), 230-268.</li>
    <li>Umer Farooq and Dieter Zirkler. 2010. API peer reviews: a method for evaluating usability of application programming interfaces. In Proceedings of the 2010 ACM conference on Computer supported cooperative work (CSCW '10). ACM, New York, NY, USA, 207-210.</li>
    <li>Randall Munroe. xkcd. http://xkcd.com/936/.10/03/2012.</li>
</ol>




<?php include("views/foot.php"); ?>
