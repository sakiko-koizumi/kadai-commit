{"filter":false,"title":"2018_06_13_154303_create_item_user_table.php","tooltip":"/monolist/database/migrations/2018_06_13_154303_create_item_user_table.php","undoManager":{"mark":7,"position":7,"stack":[[{"start":{"row":8,"column":4},"end":{"row":12,"column":7},"action":"remove","lines":["/**","     * Run the migrations.","     *","     * @return void","     */"],"id":2}],[{"start":{"row":8,"column":4},"end":{"row":9,"column":0},"action":"remove","lines":["",""],"id":3},{"start":{"row":8,"column":4},"end":{"row":8,"column":8},"action":"remove","lines":["    "]}],[{"start":{"row":16,"column":3},"end":{"row":20,"column":7},"action":"remove","lines":[" /**","     * Reverse the migrations.","     *","     * @return void","     */"],"id":4}],[{"start":{"row":16,"column":3},"end":{"row":17,"column":0},"action":"remove","lines":["",""],"id":5},{"start":{"row":16,"column":3},"end":{"row":16,"column":4},"action":"remove","lines":[" "]},{"start":{"row":16,"column":3},"end":{"row":16,"column":4},"action":"remove","lines":[" "]},{"start":{"row":16,"column":3},"end":{"row":16,"column":4},"action":"remove","lines":[" "]}],[{"start":{"row":11,"column":37},"end":{"row":12,"column":0},"action":"insert","lines":["",""],"id":6},{"start":{"row":12,"column":0},"end":{"row":12,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":12,"column":12},"end":{"row":14,"column":44},"action":"insert","lines":["$table->integer('user_id')->unsigned()->index();","            $table->integer('item_id')->unsigned()->index();","            $table->string('type')->index();"],"id":7}],[{"start":{"row":15,"column":33},"end":{"row":16,"column":0},"action":"insert","lines":["",""],"id":8},{"start":{"row":16,"column":0},"end":{"row":16,"column":12},"action":"insert","lines":["            "]},{"start":{"row":16,"column":12},"end":{"row":17,"column":0},"action":"insert","lines":["",""]},{"start":{"row":17,"column":0},"end":{"row":17,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":17,"column":12},"end":{"row":18,"column":70},"action":"insert","lines":["$table->foreign('user_id')->references('id')->on('users');","            $table->foreign('item_id')->references('id')->on('items');"],"id":9}]]},"ace":{"folds":[],"scrolltop":161.4545440673828,"scrollleft":0,"selection":{"start":{"row":19,"column":7},"end":{"row":19,"column":7},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":11,"state":"php-start","mode":"ace/mode/php"}},"timestamp":1528933074940,"hash":"752007f2286fb160158a05e7aa9c8d50393dbda7"}