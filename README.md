# Welcome!
I'm very excited to see you've come until here, this challenge is a shorter version of what should be but this time there's some more complicated questions to resolve. The deadline it's this Sunday 18 at midnight (Mexico Time).

If you have any question, comment, whatever, please let me know.

# Prepare environment
* Create a PGP key.
* Use PGP to send an encrypted message to cecilia@safe2choose.org with your public PGP key attached. The public key you need for cecilia@safe2choose.org can be found here https://mega.nz/#!LNoVCDrK!FWnL-nPmo4XDuFpfFERPWerAYcxVcZUtFf2YaXw12fg
* Create a Github account. For privacy and security reasons, create a new Github account just for these exercises
* Clone this repository https://github.com/cecilia-s2c/WebDevChallenge2018 and fork

# Step 1: Code review
* Review the code into the "Step1" folder for security vulnerabilities. This Meteor project is meant to keep track of the number of times each user clicks on the button on the client. The count per user is recorded in two places: On the Meteor server that the app is connected to. On a server located at secure.safe2choose.org (this server does not actually exist).
* Only the counts of users who have signed in with Twitter need to be securely stored. The count of users who are not logged in is irrelevant.
* Although this code will compile, it should be treated as pseudo-code. Do not worry about inefficient or ugly code. You are only looking for vulnerabilities that would allow users to abuse the system or issues that would give hackers with access to the code the ability to compromise different parts of the system (assuming those components actually existed).
* Deliverable: Create a README file with explanations of the vulnerabilities you are able to find. For extra points, correct the source code to fix those issues. When finished, commit your changes and push to your own repositorie and create a pull request to merge your changes with the original repo (mine).

# Step 2: 3rd party Javascript integration
* The file `chat.js` into the Step 2 folder initializes our chat service, Zopim, in the available languages. 
* Our website has support for 6 languages, and this code has only specific greetings for 3 languages plus english. Change the code to add support for those missing languages. Use Google Translator for translated text. 
* Now the code has specific code per language, use the Javascript API documentation https://api.zopim.com/files/meshim/widget/controllers/liveChatAPI/Departments-js.html to set a department per language, the name of the department will be the language detected (english, spanish, french, etc)
* Using the same documentation set "Our counselors are not available at the moment, please leave a message and we will contact you soon." as the greeting message for the offline form in all languages, use Google Translator to customize the message per language.
* Refactor the code to remove code duplication and make the file shorter. 
* Commit and push your changes.

# Step 3: Wordpress customization
* Review the file `functions.php` into "Step3" folder and add comments to the function #gform_display_weeks explaining what it does.
* Register a new sidebar that will be used for advertising, the container is a div with the class "module--primary" and the title is an h3 with the class "module__title", name and description must be translatable and have "safe2choose-test" as the value for the domain parameter.
* The file "testimonials.php" is an older version of the template used for https://safe2choose.org/testimonials-on-abortion/, make the changes necessary to:
* Show the extract of every testimonial instead of the whole content
* Use the title as a hyperlink to see the full testimonial
* Add a comment explaining what does "'posts_per_page' => -1," in line 41 for the query.
* Commit and push your changes.

# Step 4: Layout
* This excercise it's really simple, you must bring to life the layout dislpayed in "template.png" and "mobile.png", make sure to use only HTML + SASS/LESS + Bootstrap + JS
* Into the folder you'll find all the assets necessary
* Transcript the text from the image to HTML, !important: DO NOT USE LOREM IPSUM TEXT
* Mobile it's also considered, make sure your layout respects the organization explained in "mobile.png"
* This template considers the existence of 2 carousels, and they must work
* You must use SASS or LESS, choose!
* Bootstrap is mandatory
* You can use pure JS or Jquery or any other you prefer

# Step 5: Submission
* Don't forget to  commit and push all changes to Github
* Send an encrypted email to cecilia@safe2choose.org with a link to your repository.

# May the force be with you all
