{"filter":false,"title":"welcome.blade.php","tooltip":"/resources/views/welcome.blade.php","undoManager":{"mark":7,"position":7,"stack":[[{"start":{"row":0,"column":0},"end":{"row":27,"column":7},"action":"insert","lines":["<body>","    <div class=\"flex-center position-ref full-height\">","        @if (Route::has('login'))","            <div class=\"top-right links\">","                @auth","                    <a href=\"{{ url('/home') }}\">Home</a>","                @else","                    <a href=\"{{ route('login') }}\">Login</a>","                    <a href=\"{{ route('register') }}\">Register</a>","                @endauth","            </div>","        @endif","","        <div class=\"content\">","            <div class=\"title m-b-md\">","                Laravel","            </div>","","            <div class=\"links\">","                <a href=\"https://laravel.com/docs\">Documentation</a>","                <a href=\"https://laracasts.com\">Laracasts</a>","                <a href=\"https://laravel-news.com\">News</a>","                <a href=\"https://forge.laravel.com\">Forge</a>","                <a href=\"https://github.com/laravel/laravel\">GitHub</a>","            </div>","        </div>","    </div>","</body>"],"id":1}],[{"start":{"row":15,"column":18},"end":{"row":15,"column":19},"action":"remove","lines":["r"],"id":2},{"start":{"row":15,"column":17},"end":{"row":15,"column":18},"action":"remove","lines":["a"]}],[{"start":{"row":15,"column":17},"end":{"row":15,"column":18},"action":"remove","lines":["a"],"id":3}],[{"start":{"row":15,"column":17},"end":{"row":15,"column":18},"action":"insert","lines":["s"],"id":4},{"start":{"row":15,"column":18},"end":{"row":15,"column":19},"action":"insert","lines":["a"]},{"start":{"row":15,"column":19},"end":{"row":15,"column":20},"action":"insert","lines":["k"]},{"start":{"row":15,"column":20},"end":{"row":15,"column":21},"action":"insert","lines":["i"]}],[{"start":{"row":15,"column":16},"end":{"row":15,"column":17},"action":"remove","lines":["L"],"id":5}],[{"start":{"row":15,"column":18},"end":{"row":15,"column":19},"action":"remove","lines":["k"],"id":6},{"start":{"row":15,"column":17},"end":{"row":15,"column":18},"action":"remove","lines":["a"]},{"start":{"row":15,"column":16},"end":{"row":15,"column":17},"action":"remove","lines":["s"]}],[{"start":{"row":15,"column":16},"end":{"row":15,"column":17},"action":"remove","lines":["i"],"id":7}],[{"start":{"row":15,"column":16},"end":{"row":15,"column":17},"action":"insert","lines":["l"],"id":8},{"start":{"row":15,"column":17},"end":{"row":15,"column":18},"action":"insert","lines":["a"]},{"start":{"row":15,"column":18},"end":{"row":15,"column":19},"action":"insert","lines":["r"]},{"start":{"row":15,"column":19},"end":{"row":15,"column":20},"action":"insert","lines":["a"]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":6,"column":9},"end":{"row":6,"column":9},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1527396757234,"hash":"78544fe65a740fa489bf38ad45b0f9abf056246e"}