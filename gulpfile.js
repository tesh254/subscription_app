var elixir = require("laravel-elixir");

elixir(function(mix) {
    mix.sass("./resources/sass/app.scss");
    mix.scripts([
        "./node_modules/jquery/dist/jquery.js",
        "./resources/js/magic.js",
        "./resources/js/subscribe.js"
    ]);
});
