<?php
session_start();
if (isset($_POST['morse'])){
  $_SESSION['morse']=$_POST['morse'];
}
if (isset($_POST['freq'])){
  $_SESSION['freq']=$_POST['freq'];
}
if (isset($_POST['picture'])){
  $_SESSION['picture']=$_POST['picture'];
}
if (isset($_POST['cipher'])){
  $_SESSION['cipher']=$_POST['cipher'];
}
if (isset($_POST['voice'])){
  $_SESSION['voice']=$_POST['voice'];
}
if (isset($_POST['bearing'])){
  $_SESSION['bearing']=$_POST['bearing'];
}
if (isset($_POST['map'])){
  $_SESSION['map']=$_POST['map'];
}
if (isset($_POST['patterns'])){
  $_SESSION['patterns']=$_POST['patterns'];
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="Fun de-coding games">
    <meta name="keywords" content="treasure hunt, cipher games">
    <meta name="author" content="Rahul">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RAVTZN</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Lato&family=Yusei+Magic&display=swap" rel="stylesheet">
  </head>
  <body><header>
      <h3>Welcome to the actual game to test your skills.</h3>
      <p>This will have a variety of puzzles each being made from different concepts, not alone cryptography but also other interesting ones.</p>
      <p>Upon solving a puzzle the next puzzle will become visible... so no sneeky peeks. Good luck and have fun.</p>
    </header><br><br>
    <div class="morse ques-1">
      <p>1. Lets start with the name of the event <b>"RAVTZN"</b>. If you have already figured out thats cool. If not, here is your clue.</p>
      <pre class="morsecode">- .... .       .- -.-. - ..- .- .-..       -.-. .-.. ..- .       .. ...       .-. --- - .---- ...--</pre>
      <p>This is a morse code. Solve it to find the true name of the event.<a href="https://en.wikipedia.org/wiki/File:International_Morse_Code.svg" target="_blank">Morse code sheet</a></p>
      <form class="morse" action="main.php" method="post">
        <label for="morse">Enter your guess:</label>
        <input type="text" id="morse" name="morse" autocomplete="off">
        <input type="submit"  value="VERIFY">
      </form>
      </div><br><br>
      <?php
      if (isset($_POST['morse'])) {
        if($_SESSION['morse']!="enigma" || $_SESSION['morse']!="Enigma"){
          echo('<p class="errors">Incorrect, try again!</p>');}
        }

    if($_SESSION['morse']=="enigma" || $_SESSION['morse']=="Enigma"){
      echo('
      <div class="freq ques-2">
        <p>Well Done! Lets move on to the second puzzle.</p>
        <p>2. Here you will do the frequency analysis, in these given texts below, in each of it only one character is repeated the most. You have to take that character from each line and form a word. Form the correct word from all the possible combinations with the characters that you get (none are repeated). Lets see how you persevere. Dont get mad!! </p>
        <ul>
          <li><pre>14i[rnvithi1hy1qyu954kmqkc4py9\u9q4uew;tqyiq1]]</pre></li>
          <li><pre>horv0ynru9yajakq9h!72897#586%#&s;johp1&(5aihgn)</pre></li>
          <li><pre>gH^)$)Fjlgko!9ysjqu!pk9]0gIYjo]a;!pkp|a*^(ouij|</pre></li>
        </ul>
        <form class="freq" action="main.php" method="post">
          <label for="freq">Enter your guess:</label>
          <input type="text" id="freq" name="freq" autocomplete="off">
          <input type="submit"  value="VERIFY">
        </form>
        </div><br><br>');}
    ?>
    <?php
    if (isset($_POST['freq'])) {
      if($_SESSION['freq']!="jqh"){
        echo('<p class="errors">Incorrect, try again!</p>');}
      }
      if($_SESSION['freq']=="jqh"){
        echo('
        <div class="cipher ques-3">
          <p>Good job!! on to the second.</p>
          <p>3. Now you will covert a cipher text to a readable plain text and based on it you will have to guess the answer. The Cipher text is given below and its your job to find its decryption key.The decryption key is a line in a page of one of the four books given.<a href="https://drive.google.com/drive/folders/1cUx26XhCCle0oW-vIfJlQxlT-rW9d-uz?usp=sharing" target="_blank">Click here to access the books.</a>The clue for the book is.</p>
          <pre class="quote">
            "The pride and joy we take in life
              comes down to the moments that we strive,
             Millions made but they all fade
               purpose made for those who prayed."
          </pre>
          <p>The page number is in our equivalent, that is AD(Anno Domini). But the clue is "From the founding of the city :841" in Latin. <span>And yeah <a href="https://youtu.be/sByw7YqCBUM" target="_blank">Nein</a> is the line number.</span></p>
          <p>Here is the cipher text for you to decrypt.</p>
          <p class="ciphertext">i2yfOxvdcU9ie535k+hxMr4rdCnUA50LTzyQ+X4hWPZ64B9RR0L1IcVw7+/E0ujSlkk1ruWksUd6TZx8j+geEbN2gidO7wnqTMZZmACWqEm2VFN6dBvFO/OVgkSBBdl93see3w1YhAhjCCdMAiLtPNQdLfeka6krXjWd9r7bluAhY6wC3L4PNwmOsQl19QJhl8PYnxCMII1Lr6Y1FK9/aUcWjExG3nG6f/MwK0AEiQZTeFOiYeGTWByagvwvwTebGO2WGfxnsEAm3hUy/SH30s2zAfEqKUZVtFg6+2xqS320B9DBv+TVnMY0LwVJH+J3NfxtytdBuBcRuHNksS0/qdbaLCj22rsgNc4+KPD6WY46bcipX2Q0RKTSJlVokEF1c8o/yCN7uhPrbW23IbrA1rIY+P0q2ZRXo0ossFscRQVAKefuw7813yhlalb+XXO2I8W1su5cJPVq3fDMx7+6TrXNpTAgu6lQ1Rt4EkNlbX2SfXPsNVtsLYumqhLIJMZ3LuKb9CNpE3MPpQsT7EF9hMqNzpq4EpuCbqqxpokLRJF/AzC9EXiUgoIGPjOqmNhyEPElpD9OhbSVPoTmtgWrt4J9hIYz8XmA9WG1e/LP8VQ+XF+NHaIqc6MTdEpDxkA4u+bxNg8ls8Cuw07uHJD3PAJygK9tvbKHLCVwQTiMLfE=</p>
          <p>You could use <a href="https://www.gillmeister-software.com/online-tools/text/encrypt-decrypt-text.aspx" target="_blank">This software</a> to decrypt the file to plain text.</p>

          <form class="cipher" action="main.php" method="post">
            <label for="cipher">Enter your guess:</label>
            <input type="text" id="cipher" name="cipher" autocomplete="off">
            <input type="submit"  value="VERIFY">
          </form>
          </div><br><br>');}
    ?>
    <?php
    if (isset($_POST['cipher'])) {
      if($_SESSION['cipher']!="bigchungus"){
        echo('<p class="errors">Incorrect, try again!</p>');}
      }
      if($_SESSION['cipher']=="bigchungus"){
        echo('
        <div class="map ques-4">
          <p>Nice!! You are getting the hang of it.</p>
          <p>4. Lets see your geography and navigation capabilities. This question has 4 clues, each of them leading to particular place around the world. You have to find the places, locate them in the map. Once you locate, click the spots in the map that is given below, the spot are tiny so try with patience. A new page will pop. Try and figure out the answer. Goodluck! <b>(Laptop is highly recommended, cant do this on mobile.)</b></p>
          <p>The clues:</p>
          <ol>
            <li>A national marine park on the east coast of Mexico Baja California Peninsula.</li>
            <li>N63° 59\' 15.291" W19° 3\' 44.509</li>
            <li>An island country in South Asia, located in the Indian Ocean southwest of the Bay of Bengal and southeast of the Arabian Sea.</li>
            <li>Port city on South Africa’s southwest coast, on a peninsula beneath the imposing Table Mountain.</li>
          </ol>
          <img src="images/world map.jpg" alt="world map" usemap="#worldmap" class="worldmap">
          <map name="worldmap"><!--I dont think you should be lurking around here. Be fair and square. Enjoy the game!-->
              <area shape="circle" coords="419,264,1" href="3.html" target="_blank">
              <area shape="circle" coords="110,231,1" href="1.html" target="_blank">
              <area shape="circle" coords="258,133,1" href="2.html" target="_blank">
              <area shape="circle" coords="319,349,1" href="4.html" target="_blank">
          </map>

          <form class="map" action="main.php" method="post">
            <label for="map">Enter your guess:</label>
            <input type="text" id="map" name="map" autocomplete="off">
            <input type="submit"  value="VERIFY">
          </form>
          </div><br><br>');}
    ?>
    <?php
    if (isset($_POST['map'])) {
      if($_SESSION['map']!="mauritania" || $_SESSION['map']!="Mauritania" || $_SESSION['map']!="Mali" || $_SESSION['map']!="mali"){
        echo('<p class="errors">Incorrect, try again!</p>');}
      }
      if($_SESSION['map']=="mauritania" || $_SESSION['map']=="Mauritania" || $_SESSION['map']=="Mali" || $_SESSION['map']=="mali"){
        echo('
        <div class="picture ques-5">
          <p>Awesome!! Lets see if you can keep it up. But before that <b>Fill this form to save you checkpoint: </b><a href="https://forms.gle/NppM4iScNm5BbZPV8" target="_blank">checkpoint form</a></p>
          <p>5. In this question you are going to use a concept of concealing called Steganography! It is a process of hiding messages in other contents. For this question we have hidden some message in the images that are accessible thorough the link provided below. Your task is to arrange the scrambled images in the correct order and start "Decoding" the images. Both these images have been split into 6 parts. After arranging, start from the <b>Top-Left</b> and continue <b>clockwise</b>. You can use the link given below to access the decoding software. And see what ADDs up to?!. Goodluck and cheers!</p>
          <p>Link to access the images: <a href="https://drive.google.com/drive/folders/1W3Hwdpuyjj0h4IANA9BV6K4Ej0red0Zs?usp=sharing" target="_blank">Images link</a></p>
          <p>The Steganographic decoding tool: <a href="https://stylesuxx.github.io/steganography/" target="_blank">Decoding software</a></p>
          <form class="picture" action="main.php" method="post">
            <label for="picture">Enter your guess:</label>
            <input type="text" id="picture" name="picture" autocomplete="off">
            <input type="submit"  value="VERIFY">
          </form>
          </div><br><br>');}
    ?>
    <?php
    if (isset($_POST['picture'])) {
      if($_SESSION['picture']!="1b95018" || $_SESSION['picture']!="1B95018" || $_SESSION['picture']!="chocolatelavender" || $_SESSION['picture']!="lavenderchocolate"){
        echo('<p class="errors">Incorrect, try again!</p>');}
      }
      if($_SESSION['picture']=="1b95018" || $_SESSION['picture']=="1B95018" || $_SESSION['picture']=="chocolatelavender" || $_SESSION['picture']=="lavenderchocolate"){
        echo('
        <div class="voice ques-6">
          <p>Daaamn son!! you are good. Keep up</p>
          <p>6. Here the instuctions are pretty straight-forward. A link to a youtube video is given below. Take a look at it. Further instructions are given in the video once you figure out whats going on. And when you think that you found the answer, think about the nature of the question again. Goodluck!</p>

          <p>Link for the youtube video: <a href="https://youtu.be/okKKEDfiN_U" target="_blank">Goes to YouTube</a></p>

          <form class="voice" action="main.php" method="post">
            <label for="voice">Enter your guess:</label>
            <input type="text" id="voice" name="voice" autocomplete="off">
            <input type="submit"  value="VERIFY">
          </form>
          </div><br><br>');}
    ?>
    <?php
    if (isset($_POST['voice'])) {
      if($_SESSION['voice']!="retrams" || $_SESSION['voice']!="Retrams"){
        echo('<p class="errors">Incorrect, try again!</p>');}
      }
      if($_SESSION['voice']=="retrams" || $_SESSION['voice']=="Retrams"){
        echo('
        <div class="bearing ques-7">
          <p>Its mad impressive you\'ve come this far. But this is the most challenging one so far. Lets see if you can do it.</p>
          <p>7. This question tests how much of a quick learner you are and your ability to put your learnings to use. But first you\'ll have to know abou the "Bearing rate graph". It is something that is used for navigation and proximity detection under water, primarily used by submarines in the form of SONAR. To get you equipped with the skill of interpreting the Bearing rate graph, we have linked a quick tutorial. Dont get intimidated, its fairly simple if you understand the basic.</p>
          <p>Bearing rate graph interpretation tutorial: <a href="https://youtu.be/AqqaYs7LjlM?t=480" target="_blank">To YouTube</a></p>
          <p>Okay now that you are ready, the link to 3 images of the bearing rate charts have been given below. Assuming that the submarine is still and is in the center of the circle as shown in the video. You must <b>find the path(represents a character) taken by the moving objects around the submarine</b>. Each graph has 3 colored curves. Each one of these curves represent a character that is available in our keyboard. So finally because of 3 graphs and 3 curves in each graph, there will be nine characters in total. Once you find all the 9 characters. You should enter the characters in the answer box in a particular order.</p>
          <p>The order is, corresponding character of R G B (Color of the curves) in <b>Graph 1</b>. Similarly character corresponding to RGB of Graph 2 and same follows for Graph 3 aswell.</p>
          <p>For instance if R G B in Graph 1 represents <b>"V ] ^"</b> then you should enter the answer as <b>"V]^"</b> and the corresponding characters from graph 2 and 3. <b>Note: There is no space between any characters and in case of alphabets, everything is in uppercase!.</b> Good luck and Cheers!</p>
          <p>The link to the Images of 3 Bearing rate graphs: <a href="https://drive.google.com/file/d/1N8-vei0yyIgBfW-37WKxE8qhacDRWY-J/view?usp=sharing" target="_blank">To Drive</a></p>
          <p><b>Note that some blue lines are over the black one. So look at them carefully</b></p>
          <p><b>Tip: The only numbers in the answer is 7 and 1</b></p>
          <form class="bearing" action="main.php" method="post">
            <label for="bearing">Enter your guess:</label>
            <input type="text" id="bearing" name="bearing" autocomplete="off">
            <input type="submit"  value="VERIFY">
          </form>
          </div><br><br>');}
    ?>
    <?php
    if (isset($_POST['bearing'])) {
      if($_SESSION['bearing']!="C]71VZO^L"){
        echo('<p class="errors">Incorrect, try again!</p>');}
      }
      if($_SESSION['bearing']=="C]71VZO^L"){
        echo('
        <div class="final">
          <p style="text-align: center; text-transform: uppercase; font-size: 1.5em;">Hail the Wizard!!</p>
          <p>Congrats on successfully completing the event King/Queen!! Kindly fill in the form given below to register your successful completion.</p>
          <p>Form for acknowledging the completion: <a href="https://forms.gle/suqnsmc9CQhr7d4C7" target="_blank">To GForm</a></p>

          <p>We would also like to have your view on the event. So kindly take 2 mins to fill the <a href="https://forms.gle/kG7r9qsWjhUMquUj9" target="_blank">Form</a>. Thank you!! Have a wonderful day</p>

          </div><br><br>');
        session_destroy();}
    ?>
    <footer><b>&COPY;</b> 2021 SSNAME</footer>
  </body>
</html>
