{"filter":false,"title":"app.php","tooltip":"/config/app.php","undoManager":{"mark":3,"position":3,"stack":[[{"start":{"row":0,"column":25},"end":{"row":1,"column":0},"action":"insert","lines":["",""],"id":2},{"start":{"row":1,"column":0},"end":{"row":2,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":2,"column":0},"end":{"row":5,"column":5},"action":"insert","lines":[" public function boot()","    {","        \\Schema::defaultStringLength(191);","    }"],"id":3}],[{"start":{"row":0,"column":0},"end":{"row":5,"column":5},"action":"remove","lines":["timezone => 'Asia/Tokyo',",""," public function boot()","    {","        \\Schema::defaultStringLength(191);","    }"],"id":4}],[{"start":{"row":0,"column":0},"end":{"row":30,"column":1},"action":"insert","lines":["<?php","","use Illuminate\\Support\\Facades\\Schema;","use Illuminate\\Database\\Schema\\Blueprint;","use Illuminate\\Database\\Migrations\\Migration;","","class CreateMessagesTable extends Migration","{","    /**","     * Run the migrations.","     *","     * @return void","     */","    public function up()","    {","        Schema::create('messages', function (Blueprint $table) {","            $table->increments('id');","            $table->timestamps();","        });","    }","","    /**","     * Reverse the migrations.","     *","     * @return void","     */","    public function down()","    {","        Schema::dropIfExists('messages');","    }","}"],"id":5}]]},"ace":{"folds":[],"scrolltop":70,"scrollleft":0,"selection":{"start":{"row":30,"column":1},"end":{"row":30,"column":1},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":3,"state":"php-start","mode":"ace/mode/php"}},"timestamp":1527056359747,"hash":"faecd1becd23e00a1b64c6767ebc024fe987c061"}