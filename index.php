
<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title>VueJS App</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sticky-footer-navbar/">


<link href="https://getbootstrap.com/docs/5.2/dist/css/bootstrap.min.css" rel="stylesheet">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>
  </head>
  <body class="d-flex flex-column h-100">
    
<header>
  <!-- Fixed navbar -->
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">VueJS</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Spots</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Surfers</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
</header>

<!-- Begin page content -->
<main class="flex-shrink-0">
  <div class="container" id="app">
  <br>
  <br>
  <br>
  <br>
  	<div class="row">
	    <div class="card" style="width: 18rem; margin-right: 15px" v-for="surfer in surfers">
		  <img :src="surfer.image" class="card-img-top" alt="...">
		  <div class="card-body">
		    <h5 class="card-title">{{ surfer.name }}</h5>
		    <p class="card-text">{{ surfer.description }}</p>
		    <p>
		    <span class="badge text-bg-warning">Score : {{ surfer.score }}</span> &ensp;
		    <span v-if="surfer.inCompetition" class="badge text-bg-info">In Competition</span> 
		    <span v-else class="badge text-bg-secondary">Out Competition</span>
		    </p>
		    <p>Comment : <i>{{ surfer.comment }}</i></p>
		    <hr>
		    <input v-model="surfer.comment" class="form-control"inCompitition> <br>
		    <button @click="setScore(surfer.id)" class="btn btn-primary">Vote</button>
		  </div>
		</div>



	</div>





</main>

    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

    <script type="text/javascript" src="main.js"></script>
    

    <script>
    	const myApp = app.mount('#app')
    	

    </script>


      
  </body>
</html>
