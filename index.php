<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>VueJS</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <script src="./js/vue.js"></script>
</head>
<body>
<div id="app">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light mt-2 mb-2">
  <div class="collapse navbar-collapse">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item">
        <router-link class="nav-link" to="home">Home</router-link>
      </li>
      <li class="nav-item">
        <router-link class="nav-link" to="about">About</router-link>
      </li>
      <li class="nav-item">
        <router-link class="nav-link " to="service">Service</router-link>
      </li>
    </ul>
  </div>
</nav>


<router-view></router-view>
    </div>
</div>
<script src="./js/bootstrap.min.js"></script>
<script src="js/vue-router.js"></script>
<script src="./js/axios.js"></script>
<script>
    const Home = {
        template : `<div class="card">
            <div class="card-header">
                Home
            </div>
            <div class="card-body">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            </div>
        </div>`
    }
    const About = {
        template: `<div class="card">
            <div class="card-header">
                About
            </div>
            <div class="card-body">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            </div>
        </div>`
    }
        const Service = {
        template: `<div class="card">
            <div class="card-header">
                Service
            </div>
            <div class="card-body">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            </div>
        </div>`
    }
    const routes = [
        {path: '/home', component: Home},
        {path: '/about', component: About},
        {path: '/service', component: Service},
    ]
    const router = new VueRouter({
        routes,
        base: 'CRUDS',
        mode: 'history',
    });
    const app = new Vue({
        router

    }).$mount('#app');

</script>
</body>
</html>