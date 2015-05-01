<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

DEBUG - 2015-01-08 10:54:45 --> Config Class Initialized
DEBUG - 2015-01-08 10:54:45 --> Hooks Class Initialized
DEBUG - 2015-01-08 10:54:45 --> Utf8 Class Initialized
DEBUG - 2015-01-08 10:54:45 --> UTF-8 Support Enabled
DEBUG - 2015-01-08 10:54:45 --> URI Class Initialized
DEBUG - 2015-01-08 10:54:45 --> Router Class Initialized
DEBUG - 2015-01-08 10:54:45 --> Output Class Initialized
DEBUG - 2015-01-08 10:54:45 --> Security Class Initialized
DEBUG - 2015-01-08 10:54:45 --> Input Class Initialized
DEBUG - 2015-01-08 10:54:45 --> Global POST and COOKIE data sanitized
DEBUG - 2015-01-08 10:54:45 --> Language Class Initialized
DEBUG - 2015-01-08 10:54:45 --> Loader Class Initialized
DEBUG - 2015-01-08 10:54:45 --> Helper loaded: url_helper
DEBUG - 2015-01-08 10:54:45 --> #### library:
DEBUG - 2015-01-08 10:54:45 --> Controller Class Initialized
DEBUG - 2015-01-08 10:54:45 --> #### library:tank_auth
DEBUG - 2015-01-08 10:54:45 --> ####ci_load_class:tank_auth
DEBUG - 2015-01-08 10:54:45 --> ####ci_loaded_files:application/libraries/Tank_auth.php
DEBUG - 2015-01-08 10:54:45 --> ####debug3:
DEBUG - 2015-01-08 10:54:45 --> ####debug3.5:
ERROR - 2015-01-08 10:54:45 --> Severity: Warning  --> include_once(application/core/MY_Tank_auth.php): failed to open stream: No such file or directory /var/www/html/dboperator_ver0.0.1/testProject/CodeIgniter_Bootstrap/application/config/config.php 390
ERROR - 2015-01-08 10:54:45 --> Severity: Warning  --> include_once(): Failed opening 'application/core/MY_Tank_auth.php' for inclusion (include_path='.:/usr/share/pear:/usr/share/php') /var/www/html/dboperator_ver0.0.1/testProject/CodeIgniter_Bootstrap/application/config/config.php 390
DEBUG - 2015-01-08 10:54:45 --> ####debug4:
DEBUG - 2015-01-08 10:54:45 --> ####class_name:Tank_auth
DEBUG - 2015-01-08 10:54:45 --> Config file loaded: application/config/tank_auth.php
DEBUG - 2015-01-08 10:54:45 --> #### library:session
DEBUG - 2015-01-08 10:54:45 --> ####ci_load_class:session
DEBUG - 2015-01-08 10:54:45 --> ####ci_loaded_files:/var/www/html/dboperator_ver0.0.1/testProject/CodeIgniter_Bootstrap/system/libraries/Session.php
DEBUG - 2015-01-08 10:54:45 --> ####debug3:
DEBUG - 2015-01-08 10:54:45 --> ####debug3.5:
DEBUG - 2015-01-08 10:54:45 --> ####debug4:
DEBUG - 2015-01-08 10:54:45 --> ####class_name:CI_Session
DEBUG - 2015-01-08 10:54:45 --> Session Class Initialized
DEBUG - 2015-01-08 10:54:45 --> Helper loaded: string_helper
DEBUG - 2015-01-08 10:54:45 --> Database Driver Class Initialized
DEBUG - 2015-01-08 10:54:45 --> A session cookie was not found.
DEBUG - 2015-01-08 10:54:45 --> Session routines successfully run
DEBUG - 2015-01-08 10:54:45 --> Model Class Initialized
DEBUG - 2015-01-08 10:54:45 --> Model Class Initialized
DEBUG - 2015-01-08 10:54:45 --> Helper loaded: cookie_helper
DEBUG - 2015-01-08 10:54:45 --> XSS Filtering completed
DEBUG - 2015-01-08 10:54:45 --> Model Class Initialized
DEBUG - 2015-01-08 10:54:45 --> Model Class Initialized
DEBUG - 2015-01-08 10:54:45 --> Model Class Initialized
DEBUG - 2015-01-08 10:54:45 --> Model Class Initialized
DEBUG - 2015-01-08 10:54:45 --> Model Class Initialized
DEBUG - 2015-01-08 10:54:45 --> Model Class Initialized
DEBUG - 2015-01-08 10:54:45 --> Model Class Initialized
DEBUG - 2015-01-08 10:54:45 --> Array
(
    [sql_id] => 1
    [category_id] => 1
    [display_name] => ユーザー情報取得
    [description] => ユーザー情報を取得
    [sql_text] => select * from user_info where name=? or uid=?
    [conditions] => ["\u30e6\u30fc\u30b6\u30fc\u540d","\u30e6\u30fc\u30b6\u30fcID"]
)

DEBUG - 2015-01-08 10:54:45 --> </br>auth_level:2</br>
DEBUG - 2015-01-08 10:54:45 --> File loaded: application/views/include/header.php
DEBUG - 2015-01-08 10:54:45 --> mysql://xdadmin:xdm4m4!!!@10.128.10.10/w1_xd_index?port=3307
DEBUG - 2015-01-08 10:54:45 --> Array
(
    [db_id] => 1
    [category_id] => 1
    [display_name] => w1_xd_index_Slave
    [description] => 0
    [dbms] => mysql
    [db_host] => 10.128.10.10
    [db_port] => 3307
    [db_user] => xdadmin
    [db_passwd] => xdm4m4!!!
    [db_name] => w1_xd_index
)

DEBUG - 2015-01-08 10:54:45 --> Database Driver Class Initialized
DEBUG - 2015-01-08 10:54:45 --> 1
DEBUG - 2015-01-08 10:54:45 --> Array
(
    [0] => account
    [1] => password
    [2] => email
    [3] => uid
    [4] => name
    [5] => sex
    [6] => is_ban
    [7] => mapping_type
    [8] => mapping_id
    [9] => career_id
    [10] => authkey
    [11] => party_id
    [12] => energy
    [13] => energy_recovery_time
    [14] => extra_energy
    [15] => extra_energy_recovery_time
    [16] => coin
    [17] => cash
    [18] => mature
    [19] => prestige
    [20] => material
    [21] => amrita
    [22] => amrita_recovery_time
    [23] => buy_amrita_time
    [24] => buy_amrita
    [25] => map_id
    [26] => open_map_id
    [27] => soul
    [28] => x
    [29] => y
    [30] => bag
    [31] => bag_sort
    [32] => buy_bag
    [33] => warehouse
    [34] => warehouse_sort
    [35] => buy_warehouse
    [36] => max_huntlife_bag
    [37] => huntlife_location
    [38] => dungeon_refresh_count
    [39] => spall
    [40] => red_envelope
    [41] => red_envelope_got_reward_id
    [42] => max_partner
    [43] => vip_lv
    [44] => cum_free_cash
    [45] => topup_cash
    [46] => cost_coin
    [47] => avatar_id
    [48] => avatar_type
    [49] => task_id
    [50] => receive_cash_count
    [51] => refresh_seed_count
    [52] => refresh_seed_time
    [53] => buy_coin
    [54] => buy_coin_time
    [55] => buy_energy
    [56] => buy_energy_time
    [57] => buy_puzzle_count
    [58] => buy_puzzle_time
    [59] => puzzle_ticket
    [60] => buy_chat_count
    [61] => buy_chat_time
    [62] => puzzle_count
    [63] => draw_puzzle_time
    [64] => sensitivity_chat_count
    [65] => sensitivity_chat_time
    [66] => online_reward_time
    [67] => daily_reward_time
    [68] => reset_war_field
    [69] => reset_war_time
    [70] => pray_prestige
    [71] => pray_buff_1_count
    [72] => pray_buff_1_lv
    [73] => pray_buff_2_count
    [74] => pray_buff_2_lv
    [75] => pray_buff_3_count
    [76] => s_flower
    [77] => s_flower_time
    [78] => r_flower
    [79] => r_flower_time
    [80] => create_time
    [81] => last_login_time
    [82] => last_logout_time
    [83] => last_bot_time
    [84] => bot_update_time
    [85] => break_through_id
    [86] => break_through_lv
    [87] => team_challenge
    [88] => buy_team_challenge
    [89] => login_days
    [90] => last_get_login_reward_time
    [91] => last_get_roulette_reward
    [92] => explore
    [93] => explore_recovery_time
)

DEBUG - 2015-01-08 10:54:45 --> File loaded: application/views/sql_result.php
DEBUG - 2015-01-08 10:54:45 --> File loaded: application/views/include/footer.php
DEBUG - 2015-01-08 10:54:45 --> Final output sent to browser
DEBUG - 2015-01-08 10:54:45 --> Total execution time: 0.0961
DEBUG - 2015-01-08 10:54:48 --> Config Class Initialized
DEBUG - 2015-01-08 10:54:48 --> Hooks Class Initialized
DEBUG - 2015-01-08 10:54:48 --> Utf8 Class Initialized
DEBUG - 2015-01-08 10:54:48 --> UTF-8 Support Enabled
DEBUG - 2015-01-08 10:54:48 --> URI Class Initialized
DEBUG - 2015-01-08 10:54:48 --> Router Class Initialized
DEBUG - 2015-01-08 10:54:48 --> Output Class Initialized
DEBUG - 2015-01-08 10:54:48 --> Security Class Initialized
DEBUG - 2015-01-08 10:54:48 --> Input Class Initialized
DEBUG - 2015-01-08 10:54:48 --> Global POST and COOKIE data sanitized
DEBUG - 2015-01-08 10:54:48 --> Language Class Initialized
DEBUG - 2015-01-08 10:54:48 --> Loader Class Initialized
DEBUG - 2015-01-08 10:54:48 --> Helper loaded: url_helper
DEBUG - 2015-01-08 10:54:48 --> #### library:
DEBUG - 2015-01-08 10:54:48 --> Controller Class Initialized
DEBUG - 2015-01-08 10:54:48 --> #### library:tank_auth
DEBUG - 2015-01-08 10:54:48 --> ####ci_load_class:tank_auth
DEBUG - 2015-01-08 10:54:48 --> ####ci_loaded_files:application/libraries/Tank_auth.php
DEBUG - 2015-01-08 10:54:48 --> ####debug3:
DEBUG - 2015-01-08 10:54:48 --> ####debug3.5:
ERROR - 2015-01-08 10:54:48 --> Severity: Warning  --> include_once(application/core/MY_Tank_auth.php): failed to open stream: No such file or directory /var/www/html/dboperator_ver0.0.1/testProject/CodeIgniter_Bootstrap/application/config/config.php 390
ERROR - 2015-01-08 10:54:48 --> Severity: Warning  --> include_once(): Failed opening 'application/core/MY_Tank_auth.php' for inclusion (include_path='.:/usr/share/pear:/usr/share/php') /var/www/html/dboperator_ver0.0.1/testProject/CodeIgniter_Bootstrap/application/config/config.php 390
DEBUG - 2015-01-08 10:54:48 --> ####debug4:
DEBUG - 2015-01-08 10:54:48 --> ####class_name:Tank_auth
DEBUG - 2015-01-08 10:54:48 --> Config file loaded: application/config/tank_auth.php
DEBUG - 2015-01-08 10:54:48 --> #### library:session
DEBUG - 2015-01-08 10:54:48 --> ####ci_load_class:session
DEBUG - 2015-01-08 10:54:48 --> ####ci_loaded_files:/var/www/html/dboperator_ver0.0.1/testProject/CodeIgniter_Bootstrap/system/libraries/Session.php
DEBUG - 2015-01-08 10:54:48 --> ####debug3:
DEBUG - 2015-01-08 10:54:48 --> ####debug3.5:
DEBUG - 2015-01-08 10:54:48 --> ####debug4:
DEBUG - 2015-01-08 10:54:48 --> ####class_name:CI_Session
DEBUG - 2015-01-08 10:54:48 --> Session Class Initialized
DEBUG - 2015-01-08 10:54:48 --> Helper loaded: string_helper
DEBUG - 2015-01-08 10:54:48 --> Database Driver Class Initialized
DEBUG - 2015-01-08 10:54:48 --> Session routines successfully run
DEBUG - 2015-01-08 10:54:48 --> Model Class Initialized
DEBUG - 2015-01-08 10:54:48 --> Model Class Initialized
DEBUG - 2015-01-08 10:54:48 --> Model Class Initialized
DEBUG - 2015-01-08 10:54:48 --> Model Class Initialized
DEBUG - 2015-01-08 10:54:48 --> Model Class Initialized
DEBUG - 2015-01-08 10:54:48 --> File loaded: application/views/include/header.php
DEBUG - 2015-01-08 10:54:48 --> File loaded: application/views/frontpage.php
DEBUG - 2015-01-08 10:54:48 --> File loaded: application/views/include/footer.php
DEBUG - 2015-01-08 10:54:48 --> Final output sent to browser
DEBUG - 2015-01-08 10:54:48 --> Total execution time: 0.0337
DEBUG - 2015-01-08 13:09:16 --> Config Class Initialized
DEBUG - 2015-01-08 13:09:16 --> Hooks Class Initialized
DEBUG - 2015-01-08 13:09:16 --> Utf8 Class Initialized
DEBUG - 2015-01-08 13:09:16 --> UTF-8 Support Enabled
DEBUG - 2015-01-08 13:09:16 --> URI Class Initialized
DEBUG - 2015-01-08 13:09:16 --> Router Class Initialized
DEBUG - 2015-01-08 13:09:16 --> Output Class Initialized
DEBUG - 2015-01-08 13:09:16 --> Security Class Initialized
DEBUG - 2015-01-08 13:09:16 --> Input Class Initialized
DEBUG - 2015-01-08 13:09:16 --> Global POST and COOKIE data sanitized
DEBUG - 2015-01-08 13:09:16 --> Language Class Initialized
DEBUG - 2015-01-08 13:09:16 --> Loader Class Initialized
DEBUG - 2015-01-08 13:09:16 --> Helper loaded: url_helper
DEBUG - 2015-01-08 13:09:16 --> #### library:
DEBUG - 2015-01-08 13:09:16 --> Controller Class Initialized
DEBUG - 2015-01-08 13:09:16 --> #### library:tank_auth
DEBUG - 2015-01-08 13:09:16 --> ####ci_load_class:tank_auth
DEBUG - 2015-01-08 13:09:16 --> ####ci_loaded_files:application/libraries/Tank_auth.php
DEBUG - 2015-01-08 13:09:16 --> ####debug3:
DEBUG - 2015-01-08 13:09:16 --> ####debug3.5:
ERROR - 2015-01-08 13:09:16 --> Severity: Warning  --> include_once(application/core/MY_Tank_auth.php): failed to open stream: No such file or directory /var/www/html/dboperator_ver0.0.1/testProject/CodeIgniter_Bootstrap/application/config/config.php 390
ERROR - 2015-01-08 13:09:16 --> Severity: Warning  --> include_once(): Failed opening 'application/core/MY_Tank_auth.php' for inclusion (include_path='.:/usr/share/pear:/usr/share/php') /var/www/html/dboperator_ver0.0.1/testProject/CodeIgniter_Bootstrap/application/config/config.php 390
DEBUG - 2015-01-08 13:09:16 --> ####debug4:
DEBUG - 2015-01-08 13:09:16 --> ####class_name:Tank_auth
DEBUG - 2015-01-08 13:09:16 --> Config file loaded: application/config/tank_auth.php
DEBUG - 2015-01-08 13:09:16 --> #### library:session
DEBUG - 2015-01-08 13:09:16 --> ####ci_load_class:session
DEBUG - 2015-01-08 13:09:16 --> ####ci_loaded_files:/var/www/html/dboperator_ver0.0.1/testProject/CodeIgniter_Bootstrap/system/libraries/Session.php
DEBUG - 2015-01-08 13:09:16 --> ####debug3:
DEBUG - 2015-01-08 13:09:16 --> ####debug3.5:
DEBUG - 2015-01-08 13:09:16 --> ####debug4:
DEBUG - 2015-01-08 13:09:16 --> ####class_name:CI_Session
DEBUG - 2015-01-08 13:09:16 --> Session Class Initialized
DEBUG - 2015-01-08 13:09:16 --> Helper loaded: string_helper
DEBUG - 2015-01-08 13:09:16 --> Database Driver Class Initialized
DEBUG - 2015-01-08 13:09:16 --> A session cookie was not found.
DEBUG - 2015-01-08 13:09:16 --> Session routines successfully run
DEBUG - 2015-01-08 13:09:16 --> Model Class Initialized
DEBUG - 2015-01-08 13:09:16 --> Model Class Initialized
DEBUG - 2015-01-08 13:09:16 --> Helper loaded: cookie_helper
DEBUG - 2015-01-08 13:09:16 --> XSS Filtering completed
DEBUG - 2015-01-08 13:09:16 --> Model Class Initialized
DEBUG - 2015-01-08 13:09:16 --> Model Class Initialized
DEBUG - 2015-01-08 13:09:16 --> Model Class Initialized
DEBUG - 2015-01-08 13:09:16 --> Model Class Initialized
DEBUG - 2015-01-08 13:09:16 --> Model Class Initialized
DEBUG - 2015-01-08 13:09:16 --> Model Class Initialized
DEBUG - 2015-01-08 13:09:16 --> Model Class Initialized
DEBUG - 2015-01-08 13:09:16 --> File loaded: application/views/include/header.php
DEBUG - 2015-01-08 13:09:16 --> File loaded: application/views/sql_execution.php
DEBUG - 2015-01-08 13:09:16 --> File loaded: application/views/include/footer.php
DEBUG - 2015-01-08 13:09:16 --> Final output sent to browser
DEBUG - 2015-01-08 13:09:16 --> Total execution time: 0.0547
DEBUG - 2015-01-08 13:09:59 --> Config Class Initialized
DEBUG - 2015-01-08 13:09:59 --> Hooks Class Initialized
DEBUG - 2015-01-08 13:09:59 --> Utf8 Class Initialized
DEBUG - 2015-01-08 13:09:59 --> UTF-8 Support Enabled
DEBUG - 2015-01-08 13:09:59 --> URI Class Initialized
DEBUG - 2015-01-08 13:09:59 --> Router Class Initialized
DEBUG - 2015-01-08 13:09:59 --> Output Class Initialized
DEBUG - 2015-01-08 13:09:59 --> Security Class Initialized
DEBUG - 2015-01-08 13:09:59 --> Input Class Initialized
DEBUG - 2015-01-08 13:09:59 --> Global POST and COOKIE data sanitized
DEBUG - 2015-01-08 13:09:59 --> Language Class Initialized
DEBUG - 2015-01-08 13:09:59 --> Loader Class Initialized
DEBUG - 2015-01-08 13:09:59 --> Helper loaded: url_helper
DEBUG - 2015-01-08 13:09:59 --> #### library:
DEBUG - 2015-01-08 13:09:59 --> Controller Class Initialized
DEBUG - 2015-01-08 13:09:59 --> #### library:tank_auth
DEBUG - 2015-01-08 13:09:59 --> ####ci_load_class:tank_auth
DEBUG - 2015-01-08 13:09:59 --> ####ci_loaded_files:application/libraries/Tank_auth.php
DEBUG - 2015-01-08 13:09:59 --> ####debug3:
DEBUG - 2015-01-08 13:09:59 --> ####debug3.5:
ERROR - 2015-01-08 13:09:59 --> Severity: Warning  --> include_once(application/core/MY_Tank_auth.php): failed to open stream: No such file or directory /var/www/html/dboperator_ver0.0.1/testProject/CodeIgniter_Bootstrap/application/config/config.php 390
ERROR - 2015-01-08 13:09:59 --> Severity: Warning  --> include_once(): Failed opening 'application/core/MY_Tank_auth.php' for inclusion (include_path='.:/usr/share/pear:/usr/share/php') /var/www/html/dboperator_ver0.0.1/testProject/CodeIgniter_Bootstrap/application/config/config.php 390
DEBUG - 2015-01-08 13:09:59 --> ####debug4:
DEBUG - 2015-01-08 13:09:59 --> ####class_name:Tank_auth
DEBUG - 2015-01-08 13:09:59 --> Config file loaded: application/config/tank_auth.php
DEBUG - 2015-01-08 13:09:59 --> #### library:session
DEBUG - 2015-01-08 13:09:59 --> ####ci_load_class:session
DEBUG - 2015-01-08 13:09:59 --> ####ci_loaded_files:/var/www/html/dboperator_ver0.0.1/testProject/CodeIgniter_Bootstrap/system/libraries/Session.php
DEBUG - 2015-01-08 13:09:59 --> ####debug3:
DEBUG - 2015-01-08 13:09:59 --> ####debug3.5:
DEBUG - 2015-01-08 13:09:59 --> ####debug4:
DEBUG - 2015-01-08 13:09:59 --> ####class_name:CI_Session
DEBUG - 2015-01-08 13:09:59 --> Session Class Initialized
DEBUG - 2015-01-08 13:09:59 --> Helper loaded: string_helper
DEBUG - 2015-01-08 13:09:59 --> Database Driver Class Initialized
DEBUG - 2015-01-08 13:09:59 --> Session routines successfully run
DEBUG - 2015-01-08 13:09:59 --> Model Class Initialized
DEBUG - 2015-01-08 13:09:59 --> Model Class Initialized
DEBUG - 2015-01-08 13:09:59 --> Model Class Initialized
DEBUG - 2015-01-08 13:09:59 --> Model Class Initialized
DEBUG - 2015-01-08 13:09:59 --> Model Class Initialized
DEBUG - 2015-01-08 13:09:59 --> File loaded: application/views/include/header.php
DEBUG - 2015-01-08 13:09:59 --> File loaded: application/views/frontpage.php
DEBUG - 2015-01-08 13:09:59 --> File loaded: application/views/include/footer.php
DEBUG - 2015-01-08 13:09:59 --> Final output sent to browser
DEBUG - 2015-01-08 13:09:59 --> Total execution time: 0.0429
DEBUG - 2015-01-08 13:10:04 --> Config Class Initialized
DEBUG - 2015-01-08 13:10:04 --> Hooks Class Initialized
DEBUG - 2015-01-08 13:10:04 --> Utf8 Class Initialized
DEBUG - 2015-01-08 13:10:04 --> UTF-8 Support Enabled
DEBUG - 2015-01-08 13:10:04 --> URI Class Initialized
DEBUG - 2015-01-08 13:10:04 --> Router Class Initialized
DEBUG - 2015-01-08 13:10:04 --> Output Class Initialized
DEBUG - 2015-01-08 13:10:04 --> Security Class Initialized
DEBUG - 2015-01-08 13:10:04 --> Input Class Initialized
DEBUG - 2015-01-08 13:10:04 --> Global POST and COOKIE data sanitized
DEBUG - 2015-01-08 13:10:04 --> Language Class Initialized
DEBUG - 2015-01-08 13:10:04 --> Loader Class Initialized
DEBUG - 2015-01-08 13:10:04 --> Helper loaded: url_helper
DEBUG - 2015-01-08 13:10:04 --> #### library:
DEBUG - 2015-01-08 13:10:04 --> Controller Class Initialized
DEBUG - 2015-01-08 13:10:04 --> #### library:tank_auth
DEBUG - 2015-01-08 13:10:04 --> ####ci_load_class:tank_auth
DEBUG - 2015-01-08 13:10:04 --> ####ci_loaded_files:application/libraries/Tank_auth.php
DEBUG - 2015-01-08 13:10:04 --> ####debug3:
DEBUG - 2015-01-08 13:10:04 --> ####debug3.5:
ERROR - 2015-01-08 13:10:04 --> Severity: Warning  --> include_once(application/core/MY_Tank_auth.php): failed to open stream: No such file or directory /var/www/html/dboperator_ver0.0.1/testProject/CodeIgniter_Bootstrap/application/config/config.php 390
ERROR - 2015-01-08 13:10:04 --> Severity: Warning  --> include_once(): Failed opening 'application/core/MY_Tank_auth.php' for inclusion (include_path='.:/usr/share/pear:/usr/share/php') /var/www/html/dboperator_ver0.0.1/testProject/CodeIgniter_Bootstrap/application/config/config.php 390
DEBUG - 2015-01-08 13:10:04 --> ####debug4:
DEBUG - 2015-01-08 13:10:04 --> ####class_name:Tank_auth
DEBUG - 2015-01-08 13:10:04 --> Config file loaded: application/config/tank_auth.php
DEBUG - 2015-01-08 13:10:04 --> #### library:session
DEBUG - 2015-01-08 13:10:04 --> ####ci_load_class:session
DEBUG - 2015-01-08 13:10:04 --> ####ci_loaded_files:/var/www/html/dboperator_ver0.0.1/testProject/CodeIgniter_Bootstrap/system/libraries/Session.php
DEBUG - 2015-01-08 13:10:04 --> ####debug3:
DEBUG - 2015-01-08 13:10:04 --> ####debug3.5:
DEBUG - 2015-01-08 13:10:04 --> ####debug4:
DEBUG - 2015-01-08 13:10:04 --> ####class_name:CI_Session
DEBUG - 2015-01-08 13:10:04 --> Session Class Initialized
DEBUG - 2015-01-08 13:10:04 --> Helper loaded: string_helper
DEBUG - 2015-01-08 13:10:04 --> Database Driver Class Initialized
DEBUG - 2015-01-08 13:10:04 --> Session routines successfully run
DEBUG - 2015-01-08 13:10:04 --> Model Class Initialized
DEBUG - 2015-01-08 13:10:04 --> Model Class Initialized
DEBUG - 2015-01-08 13:10:04 --> Model Class Initialized
DEBUG - 2015-01-08 13:10:04 --> Model Class Initialized
DEBUG - 2015-01-08 13:10:04 --> Model Class Initialized
DEBUG - 2015-01-08 13:10:04 --> Model Class Initialized
DEBUG - 2015-01-08 13:10:04 --> Model Class Initialized
DEBUG - 2015-01-08 13:10:04 --> Helper loaded: cookie_helper
DEBUG - 2015-01-08 13:10:04 --> XSS Filtering completed
DEBUG - 2015-01-08 13:10:04 --> Model Class Initialized
DEBUG - 2015-01-08 13:10:04 --> Config Class Initialized
DEBUG - 2015-01-08 13:10:04 --> Hooks Class Initialized
DEBUG - 2015-01-08 13:10:04 --> Utf8 Class Initialized
DEBUG - 2015-01-08 13:10:04 --> UTF-8 Support Enabled
DEBUG - 2015-01-08 13:10:04 --> URI Class Initialized
DEBUG - 2015-01-08 13:10:04 --> Router Class Initialized
DEBUG - 2015-01-08 13:10:04 --> Output Class Initialized
DEBUG - 2015-01-08 13:10:04 --> Security Class Initialized
DEBUG - 2015-01-08 13:10:04 --> Input Class Initialized
DEBUG - 2015-01-08 13:10:04 --> Global POST and COOKIE data sanitized
DEBUG - 2015-01-08 13:10:04 --> Language Class Initialized
DEBUG - 2015-01-08 13:10:04 --> Loader Class Initialized
DEBUG - 2015-01-08 13:10:04 --> Helper loaded: url_helper
DEBUG - 2015-01-08 13:10:04 --> #### library:
DEBUG - 2015-01-08 13:10:04 --> Controller Class Initialized
DEBUG - 2015-01-08 13:10:04 --> #### library:tank_auth
DEBUG - 2015-01-08 13:10:04 --> ####ci_load_class:tank_auth
DEBUG - 2015-01-08 13:10:04 --> ####ci_loaded_files:application/libraries/Tank_auth.php
DEBUG - 2015-01-08 13:10:04 --> ####debug3:
DEBUG - 2015-01-08 13:10:04 --> ####debug3.5:
ERROR - 2015-01-08 13:10:04 --> Severity: Warning  --> include_once(application/core/MY_Tank_auth.php): failed to open stream: No such file or directory /var/www/html/dboperator_ver0.0.1/testProject/CodeIgniter_Bootstrap/application/config/config.php 390
ERROR - 2015-01-08 13:10:04 --> Severity: Warning  --> include_once(): Failed opening 'application/core/MY_Tank_auth.php' for inclusion (include_path='.:/usr/share/pear:/usr/share/php') /var/www/html/dboperator_ver0.0.1/testProject/CodeIgniter_Bootstrap/application/config/config.php 390
DEBUG - 2015-01-08 13:10:04 --> ####debug4:
DEBUG - 2015-01-08 13:10:04 --> ####class_name:Tank_auth
DEBUG - 2015-01-08 13:10:04 --> Config file loaded: application/config/tank_auth.php
DEBUG - 2015-01-08 13:10:04 --> #### library:session
DEBUG - 2015-01-08 13:10:04 --> ####ci_load_class:session
DEBUG - 2015-01-08 13:10:04 --> ####ci_loaded_files:/var/www/html/dboperator_ver0.0.1/testProject/CodeIgniter_Bootstrap/system/libraries/Session.php
DEBUG - 2015-01-08 13:10:04 --> ####debug3:
DEBUG - 2015-01-08 13:10:04 --> ####debug3.5:
DEBUG - 2015-01-08 13:10:04 --> ####debug4:
DEBUG - 2015-01-08 13:10:04 --> ####class_name:CI_Session
DEBUG - 2015-01-08 13:10:04 --> Session Class Initialized
DEBUG - 2015-01-08 13:10:04 --> Helper loaded: string_helper
DEBUG - 2015-01-08 13:10:04 --> Database Driver Class Initialized
DEBUG - 2015-01-08 13:10:04 --> A session cookie was not found.
DEBUG - 2015-01-08 13:10:04 --> Session routines successfully run
DEBUG - 2015-01-08 13:10:04 --> Model Class Initialized
DEBUG - 2015-01-08 13:10:04 --> Model Class Initialized
DEBUG - 2015-01-08 13:10:04 --> Helper loaded: cookie_helper
DEBUG - 2015-01-08 13:10:04 --> Model Class Initialized
DEBUG - 2015-01-08 13:10:04 --> Helper loaded: form_helper
DEBUG - 2015-01-08 13:10:04 --> #### library:form_validation
DEBUG - 2015-01-08 13:10:04 --> ####ci_load_class:form_validation
DEBUG - 2015-01-08 13:10:04 --> ####ci_loaded_files:/var/www/html/dboperator_ver0.0.1/testProject/CodeIgniter_Bootstrap/system/libraries/Form_validation.php
DEBUG - 2015-01-08 13:10:04 --> ####debug3:
DEBUG - 2015-01-08 13:10:04 --> ####debug3.5:
DEBUG - 2015-01-08 13:10:04 --> ####debug4:
DEBUG - 2015-01-08 13:10:04 --> ####class_name:CI_Form_validation
DEBUG - 2015-01-08 13:10:04 --> Form Validation Class Initialized
DEBUG - 2015-01-08 13:10:04 --> #### library:security
DEBUG - 2015-01-08 13:10:04 --> #### library:tank_auth
DEBUG - 2015-01-08 13:10:04 --> ####ci_load_class:tank_auth
DEBUG - 2015-01-08 13:10:04 --> Tank_auth class already loaded. Second attempt ignored.
DEBUG - 2015-01-08 13:10:04 --> Language file loaded: language/english/tank_auth_lang.php
DEBUG - 2015-01-08 13:10:04 --> Model Class Initialized
DEBUG - 2015-01-08 13:10:04 --> File loaded: application/views/auth/login_form.php
DEBUG - 2015-01-08 13:10:04 --> Final output sent to browser
DEBUG - 2015-01-08 13:10:04 --> Total execution time: 0.0447
DEBUG - 2015-01-08 13:10:06 --> Config Class Initialized
DEBUG - 2015-01-08 13:10:06 --> Hooks Class Initialized
DEBUG - 2015-01-08 13:10:06 --> Utf8 Class Initialized
DEBUG - 2015-01-08 13:10:06 --> UTF-8 Support Enabled
DEBUG - 2015-01-08 13:10:06 --> URI Class Initialized
DEBUG - 2015-01-08 13:10:06 --> Router Class Initialized
DEBUG - 2015-01-08 13:10:06 --> Output Class Initialized
DEBUG - 2015-01-08 13:10:06 --> Security Class Initialized
DEBUG - 2015-01-08 13:10:06 --> Input Class Initialized
DEBUG - 2015-01-08 13:10:06 --> Global POST and COOKIE data sanitized
DEBUG - 2015-01-08 13:10:06 --> Language Class Initialized
DEBUG - 2015-01-08 13:10:06 --> Loader Class Initialized
DEBUG - 2015-01-08 13:10:06 --> Helper loaded: url_helper
DEBUG - 2015-01-08 13:10:06 --> #### library:
DEBUG - 2015-01-08 13:10:06 --> Controller Class Initialized
DEBUG - 2015-01-08 13:10:06 --> #### library:tank_auth
DEBUG - 2015-01-08 13:10:06 --> ####ci_load_class:tank_auth
DEBUG - 2015-01-08 13:10:06 --> ####ci_loaded_files:application/libraries/Tank_auth.php
DEBUG - 2015-01-08 13:10:06 --> ####debug3:
DEBUG - 2015-01-08 13:10:06 --> ####debug3.5:
ERROR - 2015-01-08 13:10:06 --> Severity: Warning  --> include_once(application/core/MY_Tank_auth.php): failed to open stream: No such file or directory /var/www/html/dboperator_ver0.0.1/testProject/CodeIgniter_Bootstrap/application/config/config.php 390
ERROR - 2015-01-08 13:10:06 --> Severity: Warning  --> include_once(): Failed opening 'application/core/MY_Tank_auth.php' for inclusion (include_path='.:/usr/share/pear:/usr/share/php') /var/www/html/dboperator_ver0.0.1/testProject/CodeIgniter_Bootstrap/application/config/config.php 390
DEBUG - 2015-01-08 13:10:06 --> ####debug4:
DEBUG - 2015-01-08 13:10:06 --> ####class_name:Tank_auth
DEBUG - 2015-01-08 13:10:06 --> Config file loaded: application/config/tank_auth.php
DEBUG - 2015-01-08 13:10:06 --> #### library:session
DEBUG - 2015-01-08 13:10:06 --> ####ci_load_class:session
DEBUG - 2015-01-08 13:10:06 --> ####ci_loaded_files:/var/www/html/dboperator_ver0.0.1/testProject/CodeIgniter_Bootstrap/system/libraries/Session.php
DEBUG - 2015-01-08 13:10:06 --> ####debug3:
DEBUG - 2015-01-08 13:10:06 --> ####debug3.5:
DEBUG - 2015-01-08 13:10:06 --> ####debug4:
DEBUG - 2015-01-08 13:10:06 --> ####class_name:CI_Session
DEBUG - 2015-01-08 13:10:06 --> Session Class Initialized
DEBUG - 2015-01-08 13:10:06 --> Helper loaded: string_helper
DEBUG - 2015-01-08 13:10:06 --> Database Driver Class Initialized
DEBUG - 2015-01-08 13:10:06 --> Session routines successfully run
DEBUG - 2015-01-08 13:10:06 --> Model Class Initialized
DEBUG - 2015-01-08 13:10:06 --> Model Class Initialized
DEBUG - 2015-01-08 13:10:06 --> Helper loaded: cookie_helper
DEBUG - 2015-01-08 13:10:06 --> Model Class Initialized
DEBUG - 2015-01-08 13:10:06 --> Helper loaded: form_helper
DEBUG - 2015-01-08 13:10:06 --> #### library:form_validation
DEBUG - 2015-01-08 13:10:06 --> ####ci_load_class:form_validation
DEBUG - 2015-01-08 13:10:06 --> ####ci_loaded_files:/var/www/html/dboperator_ver0.0.1/testProject/CodeIgniter_Bootstrap/system/libraries/Form_validation.php
DEBUG - 2015-01-08 13:10:06 --> ####debug3:
DEBUG - 2015-01-08 13:10:06 --> ####debug3.5:
DEBUG - 2015-01-08 13:10:06 --> ####debug4:
DEBUG - 2015-01-08 13:10:06 --> ####class_name:CI_Form_validation
DEBUG - 2015-01-08 13:10:06 --> Form Validation Class Initialized
DEBUG - 2015-01-08 13:10:06 --> #### library:security
DEBUG - 2015-01-08 13:10:06 --> #### library:tank_auth
DEBUG - 2015-01-08 13:10:06 --> ####ci_load_class:tank_auth
DEBUG - 2015-01-08 13:10:06 --> Tank_auth class already loaded. Second attempt ignored.
DEBUG - 2015-01-08 13:10:06 --> Language file loaded: language/english/tank_auth_lang.php
DEBUG - 2015-01-08 13:10:06 --> XSS Filtering completed
DEBUG - 2015-01-08 13:10:06 --> Model Class Initialized
DEBUG - 2015-01-08 13:10:06 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2015-01-08 13:10:06 --> XSS Filtering completed
DEBUG - 2015-01-08 13:10:06 --> XSS Filtering completed
DEBUG - 2015-01-08 13:10:06 --> Config Class Initialized
DEBUG - 2015-01-08 13:10:06 --> Hooks Class Initialized
DEBUG - 2015-01-08 13:10:06 --> Utf8 Class Initialized
DEBUG - 2015-01-08 13:10:06 --> UTF-8 Support Enabled
DEBUG - 2015-01-08 13:10:06 --> URI Class Initialized
DEBUG - 2015-01-08 13:10:06 --> Router Class Initialized
DEBUG - 2015-01-08 13:10:06 --> Output Class Initialized
DEBUG - 2015-01-08 13:10:06 --> Security Class Initialized
DEBUG - 2015-01-08 13:10:06 --> Input Class Initialized
DEBUG - 2015-01-08 13:10:06 --> Global POST and COOKIE data sanitized
DEBUG - 2015-01-08 13:10:06 --> Language Class Initialized
DEBUG - 2015-01-08 13:10:06 --> Loader Class Initialized
DEBUG - 2015-01-08 13:10:06 --> Helper loaded: url_helper
DEBUG - 2015-01-08 13:10:06 --> #### library:
DEBUG - 2015-01-08 13:10:06 --> Controller Class Initialized
DEBUG - 2015-01-08 13:10:06 --> #### library:tank_auth
DEBUG - 2015-01-08 13:10:06 --> ####ci_load_class:tank_auth
DEBUG - 2015-01-08 13:10:06 --> ####ci_loaded_files:application/libraries/Tank_auth.php
DEBUG - 2015-01-08 13:10:06 --> ####debug3:
DEBUG - 2015-01-08 13:10:06 --> ####debug3.5:
ERROR - 2015-01-08 13:10:06 --> Severity: Warning  --> include_once(application/core/MY_Tank_auth.php): failed to open stream: No such file or directory /var/www/html/dboperator_ver0.0.1/testProject/CodeIgniter_Bootstrap/application/config/config.php 390
ERROR - 2015-01-08 13:10:06 --> Severity: Warning  --> include_once(): Failed opening 'application/core/MY_Tank_auth.php' for inclusion (include_path='.:/usr/share/pear:/usr/share/php') /var/www/html/dboperator_ver0.0.1/testProject/CodeIgniter_Bootstrap/application/config/config.php 390
DEBUG - 2015-01-08 13:10:06 --> ####debug4:
DEBUG - 2015-01-08 13:10:06 --> ####class_name:Tank_auth
DEBUG - 2015-01-08 13:10:06 --> Config file loaded: application/config/tank_auth.php
DEBUG - 2015-01-08 13:10:06 --> #### library:session
DEBUG - 2015-01-08 13:10:06 --> ####ci_load_class:session
DEBUG - 2015-01-08 13:10:06 --> ####ci_loaded_files:/var/www/html/dboperator_ver0.0.1/testProject/CodeIgniter_Bootstrap/system/libraries/Session.php
DEBUG - 2015-01-08 13:10:06 --> ####debug3:
DEBUG - 2015-01-08 13:10:06 --> ####debug3.5:
DEBUG - 2015-01-08 13:10:06 --> ####debug4:
DEBUG - 2015-01-08 13:10:06 --> ####class_name:CI_Session
DEBUG - 2015-01-08 13:10:06 --> Session Class Initialized
DEBUG - 2015-01-08 13:10:06 --> Helper loaded: string_helper
DEBUG - 2015-01-08 13:10:06 --> Database Driver Class Initialized
DEBUG - 2015-01-08 13:10:06 --> Session routines successfully run
DEBUG - 2015-01-08 13:10:06 --> Model Class Initialized
DEBUG - 2015-01-08 13:10:06 --> Model Class Initialized
DEBUG - 2015-01-08 13:10:06 --> Model Class Initialized
DEBUG - 2015-01-08 13:10:06 --> Model Class Initialized
DEBUG - 2015-01-08 13:10:06 --> Model Class Initialized
DEBUG - 2015-01-08 13:10:06 --> File loaded: application/views/include/header.php
DEBUG - 2015-01-08 13:10:06 --> File loaded: application/views/frontpage.php
DEBUG - 2015-01-08 13:10:06 --> File loaded: application/views/include/footer.php
DEBUG - 2015-01-08 13:10:06 --> Final output sent to browser
DEBUG - 2015-01-08 13:10:06 --> Total execution time: 0.0352
DEBUG - 2015-01-08 13:10:07 --> Config Class Initialized
DEBUG - 2015-01-08 13:10:07 --> Hooks Class Initialized
DEBUG - 2015-01-08 13:10:07 --> Utf8 Class Initialized
DEBUG - 2015-01-08 13:10:07 --> UTF-8 Support Enabled
DEBUG - 2015-01-08 13:10:07 --> URI Class Initialized
DEBUG - 2015-01-08 13:10:07 --> Router Class Initialized
DEBUG - 2015-01-08 13:10:07 --> Output Class Initialized
DEBUG - 2015-01-08 13:10:07 --> Security Class Initialized
DEBUG - 2015-01-08 13:10:07 --> Input Class Initialized
DEBUG - 2015-01-08 13:10:07 --> Global POST and COOKIE data sanitized
DEBUG - 2015-01-08 13:10:07 --> Language Class Initialized
DEBUG - 2015-01-08 13:10:07 --> Loader Class Initialized
DEBUG - 2015-01-08 13:10:07 --> Helper loaded: url_helper
DEBUG - 2015-01-08 13:10:07 --> #### library:
DEBUG - 2015-01-08 13:10:07 --> Controller Class Initialized
DEBUG - 2015-01-08 13:10:07 --> #### library:tank_auth
DEBUG - 2015-01-08 13:10:07 --> ####ci_load_class:tank_auth
DEBUG - 2015-01-08 13:10:07 --> ####ci_loaded_files:application/libraries/Tank_auth.php
DEBUG - 2015-01-08 13:10:07 --> ####debug3:
DEBUG - 2015-01-08 13:10:07 --> ####debug3.5:
ERROR - 2015-01-08 13:10:07 --> Severity: Warning  --> include_once(application/core/MY_Tank_auth.php): failed to open stream: No such file or directory /var/www/html/dboperator_ver0.0.1/testProject/CodeIgniter_Bootstrap/application/config/config.php 390
ERROR - 2015-01-08 13:10:07 --> Severity: Warning  --> include_once(): Failed opening 'application/core/MY_Tank_auth.php' for inclusion (include_path='.:/usr/share/pear:/usr/share/php') /var/www/html/dboperator_ver0.0.1/testProject/CodeIgniter_Bootstrap/application/config/config.php 390
DEBUG - 2015-01-08 13:10:07 --> ####debug4:
DEBUG - 2015-01-08 13:10:07 --> ####class_name:Tank_auth
DEBUG - 2015-01-08 13:10:07 --> Config file loaded: application/config/tank_auth.php
DEBUG - 2015-01-08 13:10:07 --> #### library:session
DEBUG - 2015-01-08 13:10:07 --> ####ci_load_class:session
DEBUG - 2015-01-08 13:10:07 --> ####ci_loaded_files:/var/www/html/dboperator_ver0.0.1/testProject/CodeIgniter_Bootstrap/system/libraries/Session.php
DEBUG - 2015-01-08 13:10:07 --> ####debug3:
DEBUG - 2015-01-08 13:10:07 --> ####debug3.5:
DEBUG - 2015-01-08 13:10:07 --> ####debug4:
DEBUG - 2015-01-08 13:10:07 --> ####class_name:CI_Session
DEBUG - 2015-01-08 13:10:07 --> Session Class Initialized
DEBUG - 2015-01-08 13:10:07 --> Helper loaded: string_helper
DEBUG - 2015-01-08 13:10:07 --> Database Driver Class Initialized
DEBUG - 2015-01-08 13:10:07 --> Session routines successfully run
DEBUG - 2015-01-08 13:10:07 --> Model Class Initialized
DEBUG - 2015-01-08 13:10:07 --> Model Class Initialized
DEBUG - 2015-01-08 13:10:07 --> Model Class Initialized
DEBUG - 2015-01-08 13:10:07 --> Model Class Initialized
DEBUG - 2015-01-08 13:10:07 --> Model Class Initialized
DEBUG - 2015-01-08 13:10:07 --> File loaded: application/views/include/header.php
DEBUG - 2015-01-08 13:10:07 --> File loaded: application/views/frontpage.php
DEBUG - 2015-01-08 13:10:07 --> File loaded: application/views/include/footer.php
DEBUG - 2015-01-08 13:10:07 --> Final output sent to browser
DEBUG - 2015-01-08 13:10:07 --> Total execution time: 0.0265
