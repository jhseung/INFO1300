<!DOCTYPE HTML>

<html>

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="styles/all.css" media="all"/>
  <title>Ji Hwan Seung</title>
</head>

<body>
  <?php include("includes/header.php"); ?>
  <?php include("includes/navigation.php"); ?>


  <h3 class="main_text">Contact Info</h3><br/>
  <p class="main_text">Email: js2687@cornell.edu<br/>
  Phone: 347-988-0639<br/>
  Github: https://github.com/jhseung<br/>
  Reach out via email or phone for a quick chat or some coffee!</p><br/>

  <form action="/handle_form" method="post" class="form">
    <div>
      <select id="choices">
        <option value="You want to talk about my project!">You want to talk about my project!</option>
        <option value="You want to hire me!">You want to hire me!</option>
        <option value="You want to be my friend! :)">You want to be my friend! :)</option>
      </select>
    </div>
    <div>
      <label for="name">Name: </label>
      <input type="text" id="name" name="user_name">
    </div>
    <div>
      <label for="mail">E-mail: </label>
      <input type="email" id="mail" name="user_email">
    </div>
    <div>
      <label for="message">Message: </label>
      <textarea id="message" name="user_message"></textarea>
    </div>
      <button type="button" onclick="location.href='temporary_confirmation_page.php'" id="submit_button">Submit </button>
  </form>


  <p class="main_text"> I love many topics, from sports to wine to current events. If you just want
    somebody to talk to, contact me any time! I also really enjoy making videos
    and taking photos. I have many interests! I really think that having things
    that I love to do help me to relieve my stress and it gives me something to
    look forward to everyday.</p>
</body>

</html>
