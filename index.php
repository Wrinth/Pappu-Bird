<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Pappu Bird | Wrinth</title>
  
  <link rel="stylesheet" href="css/main.css">
  
</head>

<body>

  <h1>Pappu Bird</h1>
  
  <div class="container">
    
    <!-- Loading sounds -->
    <audio id="start" loop preload="auto">
      <source src="sound/step_step_step.ogg"  type="audio/ogg">
      <source src="sound/step_step_step.mp3"  type="audio/mp3">
    </audio>
    <audio id="angry_jump" type="audio/ogg" src="sound/jump1.ogg" preload="auto"></audio>
    <audio id="sad_jump" type="audio/ogg" src="sound/jump2.ogg" preload="auto"></audio>
    <audio id="happy_jump" type="audio/ogg" src="sound/jump3.ogg" preload="auto"></audio>
    <audio id="flap" type="audio/ogg" src="sound/flap.ogg" preload="auto"></audio>
    <audio id="ting" type="audio/ogg" src="sound/ting.ogg" preload="auto"></audio>

    <canvas id="game_bg"></canvas>
    <canvas id="game_main"></canvas>
    
    <div id="score_board">0</div>
    
    <!-- Start Screen -->
    <div id="start_screen">
      <h1 id="title">Pappu Bird</h1>
      <h3 id="credits">
        by
        <a href="https://www.linkedin.com/in/ho-yeung-lai-81b54750">John Lai</a>
      </h3>
      
      <div class="controls"></div>

      <div class="options">
        <ul>
          <li><a href="javascript:void(0);" id="start_game">start</a></li>
          <li><a href="javascript:void(0);" id="tweet">twitter</a></li>
          <li><a href="javascript:void(0);" id="fb">fb like</a></li>
        </ul>
      </div>
    </div>
    <!-- /Start Screen -->

  </div>
  
  <footer>
    <h3>About</h3>
    <p>
      I have uploaded this Web-Based Game (Pappu Bird) to
      Github on June 2016.
    </p>
    <p>
      You are pappu in the game, a little character. You need to
      click the mouse or tap (touch screen) to levitate else
      pappu will descend. If he hits the top or bottom boundaries
      that'll end the game.
    </p>
    <p>
      There will be some obstacles along the way like forks, branches
      and some enemies who are also known as "pakias". Hitting them
      will end the game. 3 types of pakias - sad (pull you),
      happy (push you), angry (kill you). Keep safe distance from
      them!
    </p>
    <p>
      There are some collectibles too! Coins for points (blue for 50,
      bronze for 100, silver for 500, gold for 1000). Ghost for invincibility
      for a short period. Ninja spawning clones that'll destroy
      anything that comes in their way!
    </p>
    <p>
      Collisions are not super strict
      to make the gameplay a little less harder.
    </p>
    
    <p>
      No Libraries/Frameworks used. All Custom Code and Custom Physics.
    </p>
    
    <h3>Credits</h3>
    <p>
      This game is originary coded by <a href="http://twitter.com/_rishabhp">Rishabh</a> and 
      <a href="http://twitter.com/solitarydesigns">Kushagra</a>. Everyone can fork, branch, 
      push, pull, and clone my code from Github.
    </p>
    <p>
      Music by <a href="http://rezoner.net/">Rezoner</a>.
    </p>
    <p>
      All other sounds produced by personal thingies like mouths, hands and books.
      They have shared some tricks and tips to make this game
      on <a href="http://codetheory.in">CodeTheory</a>
      and <a href="http://cssdeck.com/codecasts">CSSDeck</a>, I
      have learned a lot from them.
    </p>
    
    <h3>Links</h3>
    <p>
      <a href="https://github.com/Wrinth/Pappu-Bird">Code on Github</a>
      <a href="https://www.linkedin.com/in/ho-yeung-lai-81b54750">Contact Me</a>
    </p>
    
  </footer>
  
  <div id="disqus_thread"></div> <script> 
  /* var disqus_config = function () { this.page.url = PAGE_URL; // Replace PAGE_URL with your page's canonical URL variable this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable }; */ (function() { // DON'T EDIT BELOW THIS LINE var d = document, s = d.createElement('script'); s.src = '//pappubird.disqus.com/embed.js'; s.setAttribute('data-timestamp', +new Date()); (d.head || d.body).appendChild(s); })(); </script>
  <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>

  <script src="js/jquery-1.8.2.min.js"></script>
  <script>window.mit = window.mit || {};</script>
  <script src="js/utils.js"></script>
  <script src="js/backgrounds.js"></script>
  <script src="js/forks.js"></script>
  <script src="js/branches.js"></script>
  <script src="js/collectibles.js"></script>
  <script src="js/pappu.js"></script>
  <script src="js/pakia.js"></script>
  <script src="js/main.js"></script>
  
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-77460143-1', 'auto');
    ga('send', 'pageview');

  </script>

</body>
</html>
