<!DOCTYPE html>
<html lang="en">
  <head>
    <title></title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="main.css" rel="stylesheet" />
  </head>
  <body>
    <script src="jquery-min.js"></script>
    <script>
      $(function () {
        $("nav").load("navbar.html");
      });
      $(function () {
        $("footer").load("footer.html");
      });
    </script>
    <nav></nav>
    <main>
      <div id="banner">
        <a class="anchor" id="banner-anchor"></a>
        <div class="content">
          <!-- <h1>Contact</h1> -->
          <!-- <h2>Professioneel, betrouwbaar, deskundig</h2> -->
        </div>
      </div>
      <div class="container" id="contact">
        <div class="content">
          <div id="info">
            <h1>Contact Formulier</h1>
            <p>
              Vul het ondergaande formulier in om een afspraak te maken en we
              zullen zo spoedig mogelijk contact met je opnemen
            </p>
          </div>
          <div id="contact-form">
            <form id="form" method="post" action="./mail.php">
              <h3>Contact formulier</h3>
              <input
                id="name-field"
                type="text"
                name="name"
                placeholder="Naam *"
                required
              />
              <input
                id="email-field"
                type="text"
                name="email"
                placeholder="Email *"
                required
              />
              <input
                id="telnum-field"
                type="text"
                name="telnum"
                placeholder="Telefoon nummer"
              />
              <textarea
                id="message-field"
                rows="10"
                cols="80"
                name="message"
                placeholder="Type je bericht in"
                required
              ></textarea>
              <input id="submit-button" type="submit" value="Verzend" />
            </form>
          </div>
          <div id="contact-info">
            <h3>Contact informatie</h3>
            <div class="card" id="contact">
              <div id="email">
                <a
                  href="mailto:info@carcleaningveghel.nl"
                  class="fa fa-envelope"
                >
                  info@carcleaningveghel.nl</a
                >
              </div>
              <div id="tel-num">
                <p class="fa fa-phone">+31-623192688</p>
              </div>
              <div id="adres">
                <div>Den dubbelen 3</div>
                <div>5466RL Veghel</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <footer></footer>
  </body>
</html>
