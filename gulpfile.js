var elixir = require("laravel-elixir");

elixir(function(mix) {
    mix.sass("./resources/assets/sass/app.scss");
    mix.scripts([
        "./node_modules/jquery/dist/jquery.js",
        "./resources/assets/js/magic.js",
        "./resources/assets/js/subscribe.js"
    ]);
});