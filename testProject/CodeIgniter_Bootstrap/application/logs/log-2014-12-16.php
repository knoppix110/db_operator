<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

DEBUG - 2014-12-16 12:48:28 --> Config Class Initialized
DEBUG - 2014-12-16 12:48:28 --> Hooks Class Initialized
DEBUG - 2014-12-16 12:48:28 --> Utf8 Class Initialized
DEBUG - 2014-12-16 12:48:28 --> UTF-8 Support Enabled
DEBUG - 2014-12-16 12:48:28 --> URI Class Initialized
DEBUG - 2014-12-16 12:48:28 --> Router Class Initialized
DEBUG - 2014-12-16 12:48:28 --> Output Class Initialized
DEBUG - 2014-12-16 12:48:28 --> Security Class Initialized
DEBUG - 2014-12-16 12:48:28 --> Input Class Initialized
DEBUG - 2014-12-16 12:48:28 --> Global POST and COOKIE data sanitized
DEBUG - 2014-12-16 12:48:28 --> Language Class Initialized
DEBUG - 2014-12-16 12:48:28 --> Loader Class Initialized
DEBUG - 2014-12-16 12:48:28 --> Helper loaded: url_helper
DEBUG - 2014-12-16 12:48:28 --> #### library:
DEBUG - 2014-12-16 12:48:28 --> Controller Class Initialized
DEBUG - 2014-12-16 12:48:28 --> #### library:tank_auth
DEBUG - 2014-12-16 12:48:28 --> ####ci_load_class:tank_auth
DEBUG - 2014-12-16 12:48:28 --> ####ci_loaded_files:application/libraries/Tank_auth.php
DEBUG - 2014-12-16 12:48:28 --> ####debug3:
DEBUG - 2014-12-16 12:48:28 --> ####debug3.5:
ERROR - 2014-12-16 12:48:28 --> Severity: Warning  --> include_once(application/core/MY_Tank_auth.php): failed to open stream: No such file or directory /var/www/html/dboperator_ver0.0.1/testProject/CodeIgniter_Bootstrap/application/config/config.php 390
ERROR - 2014-12-16 12:48:28 --> Severity: Warning  --> include_once(): Failed opening 'application/core/MY_Tank_auth.php' for inclusion (include_path='.:/usr/share/pear:/usr/share/php') /var/www/html/dboperator_ver0.0.1/testProject/CodeIgniter_Bootstrap/application/config/config.php 390
DEBUG - 2014-12-16 12:48:28 --> ####debug4:
DEBUG - 2014-12-16 12:48:28 --> ####class_name:Tank_auth
DEBUG - 2014-12-16 12:48:28 --> Config file loaded: application/config/tank_auth.php
DEBUG - 2014-12-16 12:48:28 --> #### library:session
DEBUG - 2014-12-16 12:48:28 --> ####ci_load_class:session
DEBUG - 2014-12-16 12:48:28 --> ####ci_loaded_files:/var/www/html/dboperator_ver0.0.1/testProject/CodeIgniter_Bootstrap/system/libraries/Session.php
DEBUG - 2014-12-16 12:48:28 --> ####debug3:
DEBUG - 2014-12-16 12:48:28 --> ####debug3.5:
DEBUG - 2014-12-16 12:48:28 --> ####debug4:
DEBUG - 2014-12-16 12:48:28 --> ####class_name:CI_Session
DEBUG - 2014-12-16 12:48:28 --> Session Class Initialized
DEBUG - 2014-12-16 12:48:28 --> Helper loaded: string_helper
DEBUG - 2014-12-16 12:48:28 --> Database Driver Class Initialized
DEBUG - 2014-12-16 12:48:28 --> A session cookie was not found.
DEBUG - 2014-12-16 12:48:28 --> Session routines successfully run
DEBUG - 2014-12-16 12:48:28 --> Model Class Initialized
DEBUG - 2014-12-16 12:48:28 --> Model Class Initialized
DEBUG - 2014-12-16 12:48:28 --> Helper loaded: cookie_helper
DEBUG - 2014-12-16 12:48:28 --> XSS Filtering completed
DEBUG - 2014-12-16 12:48:28 --> Model Class Initialized
DEBUG - 2014-12-16 12:48:28 --> Model Class Initialized
DEBUG - 2014-12-16 12:48:28 --> Model Class Initialized
DEBUG - 2014-12-16 12:48:28 --> Model Class Initialized
DEBUG - 2014-12-16 12:48:28 --> Model Class Initialized
DEBUG - 2014-12-16 12:48:28 --> Model Class Initialized
DEBUG - 2014-12-16 12:48:28 --> Model Class Initialized
DEBUG - 2014-12-16 12:48:28 --> Array
(
    [sql_id] => 1
    [category_id] => 1
    [display_name] => ユーザー情報取得
    [description] => ユーザー情報を取得
    [sql_text] => select * from user_info where name=? or uid=?
    [conditions] => ["\u30e6\u30fc\u30b6\u30fc\u540d","\u30e6\u30fc\u30b6\u30fcID"]
)

DEBUG - 2014-12-16 12:48:28 --> </br>auth_level:2</br>
DEBUG - 2014-12-16 12:48:28 --> File loaded: application/views/include/header.php
DEBUG - 2014-12-16 12:48:28 --> mysql://xdadmin:xdm4m4!!!@10.128.10.101/xd_index?port=
DEBUG - 2014-12-16 12:48:28 --> Array
(
    [db_id] => 4
    [category_id] => 1
    [display_name] => XD_Test1
    [description] => 0
    [dbms] => mysql
    [db_host] => 10.128.10.101
    [db_port] => 
    [db_user] => xdadmin
    [db_passwd] => xdm4m4!!!
    [db_name] => xd_index
)

DEBUG - 2014-12-16 12:48:28 --> Database Driver Class Initialized
DEBUG - 2014-12-16 12:48:28 --> 1
DEBUG - 2014-12-16 12:48:28 --> Array
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

DEBUG - 2014-12-16 12:48:28 --> File loaded: application/views/sql_result.php
DEBUG - 2014-12-16 12:48:28 --> File loaded: application/views/include/footer.php
DEBUG - 2014-12-16 12:48:28 --> Final output sent to browser
DEBUG - 2014-12-16 12:48:28 --> Total execution time: 0.1450
DEBUG - 2014-12-16 16:08:03 --> Config Class Initialized
DEBUG - 2014-12-16 16:08:03 --> Hooks Class Initialized
DEBUG - 2014-12-16 16:08:03 --> Utf8 Class Initialized
DEBUG - 2014-12-16 16:08:03 --> UTF-8 Support Enabled
DEBUG - 2014-12-16 16:08:03 --> URI Class Initialized
DEBUG - 2014-12-16 16:08:03 --> Router Class Initialized
DEBUG - 2014-12-16 16:08:03 --> Output Class Initialized
DEBUG - 2014-12-16 16:08:03 --> Security Class Initialized
DEBUG - 2014-12-16 16:08:03 --> Input Class Initialized
DEBUG - 2014-12-16 16:08:03 --> Global POST and COOKIE data sanitized
DEBUG - 2014-12-16 16:08:03 --> Language Class Initialized
DEBUG - 2014-12-16 16:08:03 --> Loader Class Initialized
DEBUG - 2014-12-16 16:08:03 --> Helper loaded: url_helper
DEBUG - 2014-12-16 16:08:03 --> #### library:
DEBUG - 2014-12-16 16:08:03 --> Controller Class Initialized
DEBUG - 2014-12-16 16:08:03 --> #### library:tank_auth
DEBUG - 2014-12-16 16:08:03 --> ####ci_load_class:tank_auth
DEBUG - 2014-12-16 16:08:03 --> ####ci_loaded_files:application/libraries/Tank_auth.php
DEBUG - 2014-12-16 16:08:03 --> ####debug3:
DEBUG - 2014-12-16 16:08:03 --> ####debug3.5:
ERROR - 2014-12-16 16:08:03 --> Severity: Warning  --> include_once(application/core/MY_Tank_auth.php): failed to open stream: No such file or directory /var/www/html/dboperator_ver0.0.1/testProject/CodeIgniter_Bootstrap/application/config/config.php 390
ERROR - 2014-12-16 16:08:03 --> Severity: Warning  --> include_once(): Failed opening 'application/core/MY_Tank_auth.php' for inclusion (include_path='.:/usr/share/pear:/usr/share/php') /var/www/html/dboperator_ver0.0.1/testProject/CodeIgniter_Bootstrap/application/config/config.php 390
DEBUG - 2014-12-16 16:08:03 --> ####debug4:
DEBUG - 2014-12-16 16:08:03 --> ####class_name:Tank_auth
DEBUG - 2014-12-16 16:08:03 --> Config file loaded: application/config/tank_auth.php
DEBUG - 2014-12-16 16:08:03 --> #### library:session
DEBUG - 2014-12-16 16:08:03 --> ####ci_load_class:session
DEBUG - 2014-12-16 16:08:03 --> ####ci_loaded_files:/var/www/html/dboperator_ver0.0.1/testProject/CodeIgniter_Bootstrap/system/libraries/Session.php
DEBUG - 2014-12-16 16:08:03 --> ####debug3:
DEBUG - 2014-12-16 16:08:03 --> ####debug3.5:
DEBUG - 2014-12-16 16:08:03 --> ####debug4:
DEBUG - 2014-12-16 16:08:03 --> ####class_name:CI_Session
DEBUG - 2014-12-16 16:08:03 --> Session Class Initialized
DEBUG - 2014-12-16 16:08:03 --> Helper loaded: string_helper
DEBUG - 2014-12-16 16:08:03 --> Database Driver Class Initialized
DEBUG - 2014-12-16 16:08:03 --> A session cookie was not found.
DEBUG - 2014-12-16 16:08:03 --> Session routines successfully run
DEBUG - 2014-12-16 16:08:03 --> Model Class Initialized
DEBUG - 2014-12-16 16:08:03 --> Model Class Initialized
DEBUG - 2014-12-16 16:08:03 --> Helper loaded: cookie_helper
DEBUG - 2014-12-16 16:08:03 --> XSS Filtering completed
DEBUG - 2014-12-16 16:08:03 --> Model Class Initialized
DEBUG - 2014-12-16 16:08:03 --> Model Class Initialized
DEBUG - 2014-12-16 16:08:03 --> Model Class Initialized
DEBUG - 2014-12-16 16:08:03 --> Model Class Initialized
DEBUG - 2014-12-16 16:08:03 --> Model Class Initialized
DEBUG - 2014-12-16 16:08:03 --> Model Class Initialized
DEBUG - 2014-12-16 16:08:03 --> Model Class Initialized
DEBUG - 2014-12-16 16:08:03 --> Array
(
    [sql_id] => 1
    [category_id] => 1
    [display_name] => ユーザー情報取得
    [description] => ユーザー情報を取得
    [sql_text] => select * from user_info where name=? or uid=?
    [conditions] => ["\u30e6\u30fc\u30b6\u30fc\u540d","\u30e6\u30fc\u30b6\u30fcID"]
)

DEBUG - 2014-12-16 16:08:03 --> </br>auth_level:2</br>
DEBUG - 2014-12-16 16:08:03 --> File loaded: application/views/include/header.php
DEBUG - 2014-12-16 16:08:03 --> mysql://xdadmin:xdm4m4!!!@10.128.10.101/xd_index?port=
DEBUG - 2014-12-16 16:08:03 --> Array
(
    [db_id] => 4
    [category_id] => 1
    [display_name] => XD_Test1
    [description] => 0
    [dbms] => mysql
    [db_host] => 10.128.10.101
    [db_port] => 
    [db_user] => xdadmin
    [db_passwd] => xdm4m4!!!
    [db_name] => xd_index
)

DEBUG - 2014-12-16 16:08:03 --> Database Driver Class Initialized
DEBUG - 2014-12-16 16:08:03 --> 1
DEBUG - 2014-12-16 16:08:03 --> Array
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

DEBUG - 2014-12-16 16:08:03 --> File loaded: application/views/sql_result.php
DEBUG - 2014-12-16 16:08:03 --> File loaded: application/views/include/footer.php
DEBUG - 2014-12-16 16:08:03 --> Final output sent to browser
DEBUG - 2014-12-16 16:08:03 --> Total execution time: 0.0884
DEBUG - 2014-12-16 16:08:14 --> Config Class Initialized
DEBUG - 2014-12-16 16:08:14 --> Hooks Class Initialized
DEBUG - 2014-12-16 16:08:14 --> Utf8 Class Initialized
DEBUG - 2014-12-16 16:08:14 --> UTF-8 Support Enabled
DEBUG - 2014-12-16 16:08:14 --> URI Class Initialized
DEBUG - 2014-12-16 16:08:14 --> Router Class Initialized
DEBUG - 2014-12-16 16:08:14 --> Output Class Initialized
DEBUG - 2014-12-16 16:08:14 --> Security Class Initialized
DEBUG - 2014-12-16 16:08:14 --> Input Class Initialized
DEBUG - 2014-12-16 16:08:14 --> Global POST and COOKIE data sanitized
DEBUG - 2014-12-16 16:08:14 --> Language Class Initialized
DEBUG - 2014-12-16 16:08:14 --> Loader Class Initialized
DEBUG - 2014-12-16 16:08:14 --> Helper loaded: url_helper
DEBUG - 2014-12-16 16:08:14 --> #### library:
DEBUG - 2014-12-16 16:08:14 --> Controller Class Initialized
DEBUG - 2014-12-16 16:08:14 --> #### library:tank_auth
DEBUG - 2014-12-16 16:08:14 --> ####ci_load_class:tank_auth
DEBUG - 2014-12-16 16:08:14 --> ####ci_loaded_files:application/libraries/Tank_auth.php
DEBUG - 2014-12-16 16:08:14 --> ####debug3:
DEBUG - 2014-12-16 16:08:14 --> ####debug3.5:
ERROR - 2014-12-16 16:08:14 --> Severity: Warning  --> include_once(application/core/MY_Tank_auth.php): failed to open stream: No such file or directory /var/www/html/dboperator_ver0.0.1/testProject/CodeIgniter_Bootstrap/application/config/config.php 390
ERROR - 2014-12-16 16:08:14 --> Severity: Warning  --> include_once(): Failed opening 'application/core/MY_Tank_auth.php' for inclusion (include_path='.:/usr/share/pear:/usr/share/php') /var/www/html/dboperator_ver0.0.1/testProject/CodeIgniter_Bootstrap/application/config/config.php 390
DEBUG - 2014-12-16 16:08:14 --> ####debug4:
DEBUG - 2014-12-16 16:08:14 --> ####class_name:Tank_auth
DEBUG - 2014-12-16 16:08:14 --> Config file loaded: application/config/tank_auth.php
DEBUG - 2014-12-16 16:08:14 --> #### library:session
DEBUG - 2014-12-16 16:08:14 --> ####ci_load_class:session
DEBUG - 2014-12-16 16:08:14 --> ####ci_loaded_files:/var/www/html/dboperator_ver0.0.1/testProject/CodeIgniter_Bootstrap/system/libraries/Session.php
DEBUG - 2014-12-16 16:08:14 --> ####debug3:
DEBUG - 2014-12-16 16:08:14 --> ####debug3.5:
DEBUG - 2014-12-16 16:08:14 --> ####debug4:
DEBUG - 2014-12-16 16:08:14 --> ####class_name:CI_Session
DEBUG - 2014-12-16 16:08:14 --> Session Class Initialized
DEBUG - 2014-12-16 16:08:14 --> Helper loaded: string_helper
DEBUG - 2014-12-16 16:08:14 --> Database Driver Class Initialized
DEBUG - 2014-12-16 16:08:14 --> Session routines successfully run
DEBUG - 2014-12-16 16:08:14 --> Model Class Initialized
DEBUG - 2014-12-16 16:08:14 --> Model Class Initialized
DEBUG - 2014-12-16 16:08:14 --> Model Class Initialized
DEBUG - 2014-12-16 16:08:14 --> Model Class Initialized
DEBUG - 2014-12-16 16:08:14 --> Model Class Initialized
DEBUG - 2014-12-16 16:08:14 --> Model Class Initialized
DEBUG - 2014-12-16 16:08:14 --> Model Class Initialized
DEBUG - 2014-12-16 16:08:14 --> Model Class Initialized
DEBUG - 2014-12-16 16:08:14 --> Helper loaded: cookie_helper
DEBUG - 2014-12-16 16:08:14 --> XSS Filtering completed
DEBUG - 2014-12-16 16:08:14 --> Model Class Initialized
DEBUG - 2014-12-16 16:08:14 --> Config Class Initialized
DEBUG - 2014-12-16 16:08:14 --> Hooks Class Initialized
DEBUG - 2014-12-16 16:08:14 --> Utf8 Class Initialized
DEBUG - 2014-12-16 16:08:14 --> UTF-8 Support Enabled
DEBUG - 2014-12-16 16:08:14 --> URI Class Initialized
DEBUG - 2014-12-16 16:08:14 --> Router Class Initialized
DEBUG - 2014-12-16 16:08:14 --> Output Class Initialized
DEBUG - 2014-12-16 16:08:14 --> Security Class Initialized
DEBUG - 2014-12-16 16:08:14 --> Input Class Initialized
DEBUG - 2014-12-16 16:08:14 --> Global POST and COOKIE data sanitized
DEBUG - 2014-12-16 16:08:14 --> Language Class Initialized
DEBUG - 2014-12-16 16:08:14 --> Loader Class Initialized
DEBUG - 2014-12-16 16:08:14 --> Helper loaded: url_helper
DEBUG - 2014-12-16 16:08:14 --> #### library:
DEBUG - 2014-12-16 16:08:14 --> Controller Class Initialized
DEBUG - 2014-12-16 16:08:14 --> #### library:tank_auth
DEBUG - 2014-12-16 16:08:14 --> ####ci_load_class:tank_auth
DEBUG - 2014-12-16 16:08:14 --> ####ci_loaded_files:application/libraries/Tank_auth.php
DEBUG - 2014-12-16 16:08:14 --> ####debug3:
DEBUG - 2014-12-16 16:08:14 --> ####debug3.5:
ERROR - 2014-12-16 16:08:14 --> Severity: Warning  --> include_once(application/core/MY_Tank_auth.php): failed to open stream: No such file or directory /var/www/html/dboperator_ver0.0.1/testProject/CodeIgniter_Bootstrap/application/config/config.php 390
ERROR - 2014-12-16 16:08:14 --> Severity: Warning  --> include_once(): Failed opening 'application/core/MY_Tank_auth.php' for inclusion (include_path='.:/usr/share/pear:/usr/share/php') /var/www/html/dboperator_ver0.0.1/testProject/CodeIgniter_Bootstrap/application/config/config.php 390
DEBUG - 2014-12-16 16:08:14 --> ####debug4:
DEBUG - 2014-12-16 16:08:14 --> ####class_name:Tank_auth
DEBUG - 2014-12-16 16:08:14 --> Config file loaded: application/config/tank_auth.php
DEBUG - 2014-12-16 16:08:14 --> #### library:session
DEBUG - 2014-12-16 16:08:14 --> ####ci_load_class:session
DEBUG - 2014-12-16 16:08:14 --> ####ci_loaded_files:/var/www/html/dboperator_ver0.0.1/testProject/CodeIgniter_Bootstrap/system/libraries/Session.php
DEBUG - 2014-12-16 16:08:14 --> ####debug3:
DEBUG - 2014-12-16 16:08:14 --> ####debug3.5:
DEBUG - 2014-12-16 16:08:14 --> ####debug4:
DEBUG - 2014-12-16 16:08:14 --> ####class_name:CI_Session
DEBUG - 2014-12-16 16:08:14 --> Session Class Initialized
DEBUG - 2014-12-16 16:08:14 --> Helper loaded: string_helper
DEBUG - 2014-12-16 16:08:14 --> Database Driver Class Initialized
DEBUG - 2014-12-16 16:08:14 --> A session cookie was not found.
DEBUG - 2014-12-16 16:08:14 --> Session routines successfully run
DEBUG - 2014-12-16 16:08:14 --> Model Class Initialized
DEBUG - 2014-12-16 16:08:14 --> Model Class Initialized
DEBUG - 2014-12-16 16:08:14 --> Helper loaded: cookie_helper
DEBUG - 2014-12-16 16:08:14 --> Model Class Initialized
DEBUG - 2014-12-16 16:08:14 --> Helper loaded: form_helper
DEBUG - 2014-12-16 16:08:14 --> #### library:form_validation
DEBUG - 2014-12-16 16:08:14 --> ####ci_load_class:form_validation
DEBUG - 2014-12-16 16:08:14 --> ####ci_loaded_files:/var/www/html/dboperator_ver0.0.1/testProject/CodeIgniter_Bootstrap/system/libraries/Form_validation.php
DEBUG - 2014-12-16 16:08:14 --> ####debug3:
DEBUG - 2014-12-16 16:08:14 --> ####debug3.5:
DEBUG - 2014-12-16 16:08:14 --> ####debug4:
DEBUG - 2014-12-16 16:08:14 --> ####class_name:CI_Form_validation
DEBUG - 2014-12-16 16:08:14 --> Form Validation Class Initialized
DEBUG - 2014-12-16 16:08:14 --> #### library:security
DEBUG - 2014-12-16 16:08:14 --> #### library:tank_auth
DEBUG - 2014-12-16 16:08:14 --> ####ci_load_class:tank_auth
DEBUG - 2014-12-16 16:08:14 --> Tank_auth class already loaded. Second attempt ignored.
DEBUG - 2014-12-16 16:08:14 --> Language file loaded: language/english/tank_auth_lang.php
DEBUG - 2014-12-16 16:08:14 --> Model Class Initialized
DEBUG - 2014-12-16 16:08:14 --> File loaded: application/views/auth/login_form.php
DEBUG - 2014-12-16 16:08:14 --> Final output sent to browser
DEBUG - 2014-12-16 16:08:14 --> Total execution time: 0.0407
DEBUG - 2014-12-16 16:08:17 --> Config Class Initialized
DEBUG - 2014-12-16 16:08:17 --> Hooks Class Initialized
DEBUG - 2014-12-16 16:08:17 --> Utf8 Class Initialized
DEBUG - 2014-12-16 16:08:17 --> UTF-8 Support Enabled
DEBUG - 2014-12-16 16:08:17 --> URI Class Initialized
DEBUG - 2014-12-16 16:08:17 --> Router Class Initialized
DEBUG - 2014-12-16 16:08:17 --> Output Class Initialized
DEBUG - 2014-12-16 16:08:17 --> Security Class Initialized
DEBUG - 2014-12-16 16:08:17 --> Input Class Initialized
DEBUG - 2014-12-16 16:08:17 --> Global POST and COOKIE data sanitized
DEBUG - 2014-12-16 16:08:17 --> Language Class Initialized
DEBUG - 2014-12-16 16:08:17 --> Loader Class Initialized
DEBUG - 2014-12-16 16:08:17 --> Helper loaded: url_helper
DEBUG - 2014-12-16 16:08:17 --> #### library:
DEBUG - 2014-12-16 16:08:17 --> Controller Class Initialized
DEBUG - 2014-12-16 16:08:17 --> #### library:tank_auth
DEBUG - 2014-12-16 16:08:17 --> ####ci_load_class:tank_auth
DEBUG - 2014-12-16 16:08:17 --> ####ci_loaded_files:application/libraries/Tank_auth.php
DEBUG - 2014-12-16 16:08:17 --> ####debug3:
DEBUG - 2014-12-16 16:08:17 --> ####debug3.5:
ERROR - 2014-12-16 16:08:17 --> Severity: Warning  --> include_once(application/core/MY_Tank_auth.php): failed to open stream: No such file or directory /var/www/html/dboperator_ver0.0.1/testProject/CodeIgniter_Bootstrap/application/config/config.php 390
ERROR - 2014-12-16 16:08:17 --> Severity: Warning  --> include_once(): Failed opening 'application/core/MY_Tank_auth.php' for inclusion (include_path='.:/usr/share/pear:/usr/share/php') /var/www/html/dboperator_ver0.0.1/testProject/CodeIgniter_Bootstrap/application/config/config.php 390
DEBUG - 2014-12-16 16:08:17 --> ####debug4:
DEBUG - 2014-12-16 16:08:17 --> ####class_name:Tank_auth
DEBUG - 2014-12-16 16:08:17 --> Config file loaded: application/config/tank_auth.php
DEBUG - 2014-12-16 16:08:17 --> #### library:session
DEBUG - 2014-12-16 16:08:17 --> ####ci_load_class:session
DEBUG - 2014-12-16 16:08:17 --> ####ci_loaded_files:/var/www/html/dboperator_ver0.0.1/testProject/CodeIgniter_Bootstrap/system/libraries/Session.php
DEBUG - 2014-12-16 16:08:17 --> ####debug3:
DEBUG - 2014-12-16 16:08:17 --> ####debug3.5:
DEBUG - 2014-12-16 16:08:17 --> ####debug4:
DEBUG - 2014-12-16 16:08:17 --> ####class_name:CI_Session
DEBUG - 2014-12-16 16:08:17 --> Session Class Initialized
DEBUG - 2014-12-16 16:08:17 --> Helper loaded: string_helper
DEBUG - 2014-12-16 16:08:17 --> Database Driver Class Initialized
DEBUG - 2014-12-16 16:08:17 --> Session routines successfully run
DEBUG - 2014-12-16 16:08:17 --> Model Class Initialized
DEBUG - 2014-12-16 16:08:17 --> Model Class Initialized
DEBUG - 2014-12-16 16:08:17 --> Helper loaded: cookie_helper
DEBUG - 2014-12-16 16:08:17 --> Model Class Initialized
DEBUG - 2014-12-16 16:08:17 --> Helper loaded: form_helper
DEBUG - 2014-12-16 16:08:17 --> #### library:form_validation
DEBUG - 2014-12-16 16:08:17 --> ####ci_load_class:form_validation
DEBUG - 2014-12-16 16:08:17 --> ####ci_loaded_files:/var/www/html/dboperator_ver0.0.1/testProject/CodeIgniter_Bootstrap/system/libraries/Form_validation.php
DEBUG - 2014-12-16 16:08:17 --> ####debug3:
DEBUG - 2014-12-16 16:08:17 --> ####debug3.5:
DEBUG - 2014-12-16 16:08:17 --> ####debug4:
DEBUG - 2014-12-16 16:08:17 --> ####class_name:CI_Form_validation
DEBUG - 2014-12-16 16:08:17 --> Form Validation Class Initialized
DEBUG - 2014-12-16 16:08:17 --> #### library:security
DEBUG - 2014-12-16 16:08:17 --> #### library:tank_auth
DEBUG - 2014-12-16 16:08:17 --> ####ci_load_class:tank_auth
DEBUG - 2014-12-16 16:08:17 --> Tank_auth class already loaded. Second attempt ignored.
DEBUG - 2014-12-16 16:08:17 --> Language file loaded: language/english/tank_auth_lang.php
DEBUG - 2014-12-16 16:08:17 --> XSS Filtering completed
DEBUG - 2014-12-16 16:08:17 --> Model Class Initialized
DEBUG - 2014-12-16 16:08:17 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2014-12-16 16:08:17 --> XSS Filtering completed
DEBUG - 2014-12-16 16:08:17 --> XSS Filtering completed
DEBUG - 2014-12-16 16:08:17 --> Model Class Initialized
DEBUG - 2014-12-16 16:08:17 --> Config Class Initialized
DEBUG - 2014-12-16 16:08:17 --> Hooks Class Initialized
DEBUG - 2014-12-16 16:08:17 --> Utf8 Class Initialized
DEBUG - 2014-12-16 16:08:17 --> UTF-8 Support Enabled
DEBUG - 2014-12-16 16:08:17 --> URI Class Initialized
DEBUG - 2014-12-16 16:08:17 --> Router Class Initialized
DEBUG - 2014-12-16 16:08:17 --> Output Class Initialized
DEBUG - 2014-12-16 16:08:17 --> Security Class Initialized
DEBUG - 2014-12-16 16:08:17 --> Input Class Initialized
DEBUG - 2014-12-16 16:08:17 --> Global POST and COOKIE data sanitized
DEBUG - 2014-12-16 16:08:17 --> Language Class Initialized
DEBUG - 2014-12-16 16:08:17 --> Loader Class Initialized
DEBUG - 2014-12-16 16:08:17 --> Helper loaded: url_helper
DEBUG - 2014-12-16 16:08:17 --> #### library:
DEBUG - 2014-12-16 16:08:17 --> Controller Class Initialized
DEBUG - 2014-12-16 16:08:17 --> #### library:tank_auth
DEBUG - 2014-12-16 16:08:17 --> ####ci_load_class:tank_auth
DEBUG - 2014-12-16 16:08:17 --> ####ci_loaded_files:application/libraries/Tank_auth.php
DEBUG - 2014-12-16 16:08:17 --> ####debug3:
DEBUG - 2014-12-16 16:08:17 --> ####debug3.5:
ERROR - 2014-12-16 16:08:17 --> Severity: Warning  --> include_once(application/core/MY_Tank_auth.php): failed to open stream: No such file or directory /var/www/html/dboperator_ver0.0.1/testProject/CodeIgniter_Bootstrap/application/config/config.php 390
ERROR - 2014-12-16 16:08:17 --> Severity: Warning  --> include_once(): Failed opening 'application/core/MY_Tank_auth.php' for inclusion (include_path='.:/usr/share/pear:/usr/share/php') /var/www/html/dboperator_ver0.0.1/testProject/CodeIgniter_Bootstrap/application/config/config.php 390
DEBUG - 2014-12-16 16:08:17 --> ####debug4:
DEBUG - 2014-12-16 16:08:17 --> ####class_name:Tank_auth
DEBUG - 2014-12-16 16:08:17 --> Config file loaded: application/config/tank_auth.php
DEBUG - 2014-12-16 16:08:17 --> #### library:session
DEBUG - 2014-12-16 16:08:17 --> ####ci_load_class:session
DEBUG - 2014-12-16 16:08:17 --> ####ci_loaded_files:/var/www/html/dboperator_ver0.0.1/testProject/CodeIgniter_Bootstrap/system/libraries/Session.php
DEBUG - 2014-12-16 16:08:17 --> ####debug3:
DEBUG - 2014-12-16 16:08:17 --> ####debug3.5:
DEBUG - 2014-12-16 16:08:17 --> ####debug4:
DEBUG - 2014-12-16 16:08:17 --> ####class_name:CI_Session
DEBUG - 2014-12-16 16:08:17 --> Session Class Initialized
DEBUG - 2014-12-16 16:08:17 --> Helper loaded: string_helper
DEBUG - 2014-12-16 16:08:17 --> Database Driver Class Initialized
DEBUG - 2014-12-16 16:08:17 --> Session routines successfully run
DEBUG - 2014-12-16 16:08:17 --> Model Class Initialized
DEBUG - 2014-12-16 16:08:17 --> Model Class Initialized
DEBUG - 2014-12-16 16:08:17 --> Model Class Initialized
DEBUG - 2014-12-16 16:08:17 --> Model Class Initialized
DEBUG - 2014-12-16 16:08:17 --> Model Class Initialized
DEBUG - 2014-12-16 16:08:17 --> File loaded: application/views/include/header.php
DEBUG - 2014-12-16 16:08:17 --> File loaded: application/views/frontpage.php
DEBUG - 2014-12-16 16:08:17 --> File loaded: application/views/include/footer.php
DEBUG - 2014-12-16 16:08:17 --> Final output sent to browser
DEBUG - 2014-12-16 16:08:17 --> Total execution time: 0.0278
DEBUG - 2014-12-16 16:08:19 --> Config Class Initialized
DEBUG - 2014-12-16 16:08:19 --> Hooks Class Initialized
DEBUG - 2014-12-16 16:08:19 --> Utf8 Class Initialized
DEBUG - 2014-12-16 16:08:19 --> UTF-8 Support Enabled
DEBUG - 2014-12-16 16:08:19 --> URI Class Initialized
DEBUG - 2014-12-16 16:08:19 --> Router Class Initialized
DEBUG - 2014-12-16 16:08:19 --> Output Class Initialized
DEBUG - 2014-12-16 16:08:19 --> Security Class Initialized
DEBUG - 2014-12-16 16:08:19 --> Input Class Initialized
DEBUG - 2014-12-16 16:08:19 --> Global POST and COOKIE data sanitized
DEBUG - 2014-12-16 16:08:19 --> Language Class Initialized
DEBUG - 2014-12-16 16:08:19 --> Loader Class Initialized
DEBUG - 2014-12-16 16:08:19 --> Helper loaded: url_helper
DEBUG - 2014-12-16 16:08:19 --> #### library:
DEBUG - 2014-12-16 16:08:19 --> Controller Class Initialized
DEBUG - 2014-12-16 16:08:19 --> #### library:tank_auth
DEBUG - 2014-12-16 16:08:19 --> ####ci_load_class:tank_auth
DEBUG - 2014-12-16 16:08:19 --> ####ci_loaded_files:application/libraries/Tank_auth.php
DEBUG - 2014-12-16 16:08:19 --> ####debug3:
DEBUG - 2014-12-16 16:08:19 --> ####debug3.5:
ERROR - 2014-12-16 16:08:19 --> Severity: Warning  --> include_once(application/core/MY_Tank_auth.php): failed to open stream: No such file or directory /var/www/html/dboperator_ver0.0.1/testProject/CodeIgniter_Bootstrap/application/config/config.php 390
ERROR - 2014-12-16 16:08:19 --> Severity: Warning  --> include_once(): Failed opening 'application/core/MY_Tank_auth.php' for inclusion (include_path='.:/usr/share/pear:/usr/share/php') /var/www/html/dboperator_ver0.0.1/testProject/CodeIgniter_Bootstrap/application/config/config.php 390
DEBUG - 2014-12-16 16:08:19 --> ####debug4:
DEBUG - 2014-12-16 16:08:19 --> ####class_name:Tank_auth
DEBUG - 2014-12-16 16:08:19 --> Config file loaded: application/config/tank_auth.php
DEBUG - 2014-12-16 16:08:19 --> #### library:session
DEBUG - 2014-12-16 16:08:19 --> ####ci_load_class:session
DEBUG - 2014-12-16 16:08:19 --> ####ci_loaded_files:/var/www/html/dboperator_ver0.0.1/testProject/CodeIgniter_Bootstrap/system/libraries/Session.php
DEBUG - 2014-12-16 16:08:19 --> ####debug3:
DEBUG - 2014-12-16 16:08:19 --> ####debug3.5:
DEBUG - 2014-12-16 16:08:19 --> ####debug4:
DEBUG - 2014-12-16 16:08:19 --> ####class_name:CI_Session
DEBUG - 2014-12-16 16:08:19 --> Session Class Initialized
DEBUG - 2014-12-16 16:08:19 --> Helper loaded: string_helper
DEBUG - 2014-12-16 16:08:19 --> Database Driver Class Initialized
DEBUG - 2014-12-16 16:08:19 --> Session routines successfully run
DEBUG - 2014-12-16 16:08:19 --> Model Class Initialized
DEBUG - 2014-12-16 16:08:19 --> Model Class Initialized
DEBUG - 2014-12-16 16:08:19 --> Model Class Initialized
DEBUG - 2014-12-16 16:08:19 --> Model Class Initialized
DEBUG - 2014-12-16 16:08:19 --> Model Class Initialized
DEBUG - 2014-12-16 16:08:19 --> Model Class Initialized
DEBUG - 2014-12-16 16:08:19 --> Model Class Initialized
DEBUG - 2014-12-16 16:08:19 --> Model Class Initialized
DEBUG - 2014-12-16 16:08:19 --> File loaded: application/views/include/header.php
DEBUG - 2014-12-16 16:08:19 --> File loaded: application/views/sql_registration.php
DEBUG - 2014-12-16 16:08:19 --> File loaded: application/views/include/footer.php
DEBUG - 2014-12-16 16:08:19 --> Final output sent to browser
DEBUG - 2014-12-16 16:08:19 --> Total execution time: 0.0276
DEBUG - 2014-12-16 16:18:49 --> Config Class Initialized
DEBUG - 2014-12-16 16:18:49 --> Hooks Class Initialized
DEBUG - 2014-12-16 16:18:49 --> Utf8 Class Initialized
DEBUG - 2014-12-16 16:18:49 --> UTF-8 Support Enabled
DEBUG - 2014-12-16 16:18:49 --> URI Class Initialized
DEBUG - 2014-12-16 16:18:49 --> Router Class Initialized
DEBUG - 2014-12-16 16:18:49 --> Output Class Initialized
DEBUG - 2014-12-16 16:18:49 --> Security Class Initialized
DEBUG - 2014-12-16 16:18:49 --> Input Class Initialized
DEBUG - 2014-12-16 16:18:49 --> Global POST and COOKIE data sanitized
DEBUG - 2014-12-16 16:18:49 --> Language Class Initialized
DEBUG - 2014-12-16 16:18:49 --> Loader Class Initialized
DEBUG - 2014-12-16 16:18:49 --> Helper loaded: url_helper
DEBUG - 2014-12-16 16:18:49 --> #### library:
DEBUG - 2014-12-16 16:18:49 --> Controller Class Initialized
DEBUG - 2014-12-16 16:18:49 --> #### library:tank_auth
DEBUG - 2014-12-16 16:18:49 --> ####ci_load_class:tank_auth
DEBUG - 2014-12-16 16:18:49 --> ####ci_loaded_files:application/libraries/Tank_auth.php
DEBUG - 2014-12-16 16:18:49 --> ####debug3:
DEBUG - 2014-12-16 16:18:49 --> ####debug3.5:
ERROR - 2014-12-16 16:18:49 --> Severity: Warning  --> include_once(application/core/MY_Tank_auth.php): failed to open stream: No such file or directory /var/www/html/dboperator_ver0.0.1/testProject/CodeIgniter_Bootstrap/application/config/config.php 390
ERROR - 2014-12-16 16:18:49 --> Severity: Warning  --> include_once(): Failed opening 'application/core/MY_Tank_auth.php' for inclusion (include_path='.:/usr/share/pear:/usr/share/php') /var/www/html/dboperator_ver0.0.1/testProject/CodeIgniter_Bootstrap/application/config/config.php 390
DEBUG - 2014-12-16 16:18:49 --> ####debug4:
DEBUG - 2014-12-16 16:18:49 --> ####class_name:Tank_auth
DEBUG - 2014-12-16 16:18:49 --> Config file loaded: application/config/tank_auth.php
DEBUG - 2014-12-16 16:18:49 --> #### library:session
DEBUG - 2014-12-16 16:18:49 --> ####ci_load_class:session
DEBUG - 2014-12-16 16:18:49 --> ####ci_loaded_files:/var/www/html/dboperator_ver0.0.1/testProject/CodeIgniter_Bootstrap/system/libraries/Session.php
DEBUG - 2014-12-16 16:18:49 --> ####debug3:
DEBUG - 2014-12-16 16:18:49 --> ####debug3.5:
DEBUG - 2014-12-16 16:18:49 --> ####debug4:
DEBUG - 2014-12-16 16:18:49 --> ####class_name:CI_Session
DEBUG - 2014-12-16 16:18:49 --> Session Class Initialized
DEBUG - 2014-12-16 16:18:49 --> Helper loaded: string_helper
DEBUG - 2014-12-16 16:18:49 --> Database Driver Class Initialized
DEBUG - 2014-12-16 16:18:49 --> Session routines successfully run
DEBUG - 2014-12-16 16:18:49 --> Model Class Initialized
DEBUG - 2014-12-16 16:18:49 --> Model Class Initialized
DEBUG - 2014-12-16 16:18:49 --> Model Class Initialized
DEBUG - 2014-12-16 16:18:49 --> Model Class Initialized
DEBUG - 2014-12-16 16:18:49 --> Model Class Initialized
DEBUG - 2014-12-16 16:18:49 --> Model Class Initialized
DEBUG - 2014-12-16 16:18:49 --> Model Class Initialized
DEBUG - 2014-12-16 16:18:49 --> Model Class Initialized
DEBUG - 2014-12-16 16:18:49 --> File loaded: application/views/include/header.php
DEBUG - 2014-12-16 16:18:49 --> File loaded: application/views/sql_registration.php
DEBUG - 2014-12-16 16:18:49 --> File loaded: application/views/include/footer.php
DEBUG - 2014-12-16 16:18:49 --> Final output sent to browser
DEBUG - 2014-12-16 16:18:49 --> Total execution time: 0.0452
DEBUG - 2014-12-16 16:19:51 --> Config Class Initialized
DEBUG - 2014-12-16 16:19:51 --> Hooks Class Initialized
DEBUG - 2014-12-16 16:19:51 --> Utf8 Class Initialized
DEBUG - 2014-12-16 16:19:51 --> UTF-8 Support Enabled
DEBUG - 2014-12-16 16:19:51 --> URI Class Initialized
DEBUG - 2014-12-16 16:19:51 --> Router Class Initialized
DEBUG - 2014-12-16 16:19:51 --> Output Class Initialized
DEBUG - 2014-12-16 16:19:51 --> Security Class Initialized
DEBUG - 2014-12-16 16:19:51 --> Input Class Initialized
DEBUG - 2014-12-16 16:19:51 --> Global POST and COOKIE data sanitized
DEBUG - 2014-12-16 16:19:51 --> Language Class Initialized
DEBUG - 2014-12-16 16:19:51 --> Loader Class Initialized
DEBUG - 2014-12-16 16:19:51 --> Helper loaded: url_helper
DEBUG - 2014-12-16 16:19:51 --> #### library:
DEBUG - 2014-12-16 16:19:51 --> Controller Class Initialized
DEBUG - 2014-12-16 16:19:51 --> #### library:tank_auth
DEBUG - 2014-12-16 16:19:51 --> ####ci_load_class:tank_auth
DEBUG - 2014-12-16 16:19:51 --> ####ci_loaded_files:application/libraries/Tank_auth.php
DEBUG - 2014-12-16 16:19:51 --> ####debug3:
DEBUG - 2014-12-16 16:19:51 --> ####debug3.5:
ERROR - 2014-12-16 16:19:51 --> Severity: Warning  --> include_once(application/core/MY_Tank_auth.php): failed to open stream: No such file or directory /var/www/html/dboperator_ver0.0.1/testProject/CodeIgniter_Bootstrap/application/config/config.php 390
ERROR - 2014-12-16 16:19:51 --> Severity: Warning  --> include_once(): Failed opening 'application/core/MY_Tank_auth.php' for inclusion (include_path='.:/usr/share/pear:/usr/share/php') /var/www/html/dboperator_ver0.0.1/testProject/CodeIgniter_Bootstrap/application/config/config.php 390
DEBUG - 2014-12-16 16:19:51 --> ####debug4:
DEBUG - 2014-12-16 16:19:51 --> ####class_name:Tank_auth
DEBUG - 2014-12-16 16:19:51 --> Config file loaded: application/config/tank_auth.php
DEBUG - 2014-12-16 16:19:51 --> #### library:session
DEBUG - 2014-12-16 16:19:51 --> ####ci_load_class:session
DEBUG - 2014-12-16 16:19:51 --> ####ci_loaded_files:/var/www/html/dboperator_ver0.0.1/testProject/CodeIgniter_Bootstrap/system/libraries/Session.php
DEBUG - 2014-12-16 16:19:51 --> ####debug3:
DEBUG - 2014-12-16 16:19:51 --> ####debug3.5:
DEBUG - 2014-12-16 16:19:51 --> ####debug4:
DEBUG - 2014-12-16 16:19:51 --> ####class_name:CI_Session
DEBUG - 2014-12-16 16:19:51 --> Session Class Initialized
DEBUG - 2014-12-16 16:19:51 --> Helper loaded: string_helper
DEBUG - 2014-12-16 16:19:51 --> Database Driver Class Initialized
DEBUG - 2014-12-16 16:19:51 --> Session routines successfully run
DEBUG - 2014-12-16 16:19:51 --> Model Class Initialized
DEBUG - 2014-12-16 16:19:51 --> Model Class Initialized
DEBUG - 2014-12-16 16:19:51 --> Model Class Initialized
DEBUG - 2014-12-16 16:19:51 --> Model Class Initialized
DEBUG - 2014-12-16 16:19:51 --> Model Class Initialized
DEBUG - 2014-12-16 16:19:51 --> Model Class Initialized
DEBUG - 2014-12-16 16:19:51 --> Model Class Initialized
DEBUG - 2014-12-16 16:19:51 --> Model Class Initialized
DEBUG - 2014-12-16 16:19:51 --> File loaded: application/views/include/header.php
DEBUG - 2014-12-16 16:19:51 --> File loaded: application/views/sql_registration.php
DEBUG - 2014-12-16 16:19:51 --> File loaded: application/views/include/footer.php
DEBUG - 2014-12-16 16:19:51 --> Final output sent to browser
DEBUG - 2014-12-16 16:19:51 --> Total execution time: 0.0259
DEBUG - 2014-12-16 16:20:43 --> Config Class Initialized
DEBUG - 2014-12-16 16:20:43 --> Hooks Class Initialized
DEBUG - 2014-12-16 16:20:43 --> Utf8 Class Initialized
DEBUG - 2014-12-16 16:20:43 --> UTF-8 Support Enabled
DEBUG - 2014-12-16 16:20:43 --> URI Class Initialized
DEBUG - 2014-12-16 16:20:43 --> Router Class Initialized
DEBUG - 2014-12-16 16:20:43 --> Output Class Initialized
DEBUG - 2014-12-16 16:20:43 --> Security Class Initialized
DEBUG - 2014-12-16 16:20:43 --> Input Class Initialized
DEBUG - 2014-12-16 16:20:43 --> Global POST and COOKIE data sanitized
DEBUG - 2014-12-16 16:20:43 --> Language Class Initialized
DEBUG - 2014-12-16 16:20:43 --> Loader Class Initialized
DEBUG - 2014-12-16 16:20:43 --> Helper loaded: url_helper
DEBUG - 2014-12-16 16:20:43 --> #### library:
DEBUG - 2014-12-16 16:20:43 --> Controller Class Initialized
DEBUG - 2014-12-16 16:20:43 --> #### library:tank_auth
DEBUG - 2014-12-16 16:20:43 --> ####ci_load_class:tank_auth
DEBUG - 2014-12-16 16:20:43 --> ####ci_loaded_files:application/libraries/Tank_auth.php
DEBUG - 2014-12-16 16:20:43 --> ####debug3:
DEBUG - 2014-12-16 16:20:43 --> ####debug3.5:
ERROR - 2014-12-16 16:20:43 --> Severity: Warning  --> include_once(application/core/MY_Tank_auth.php): failed to open stream: No such file or directory /var/www/html/dboperator_ver0.0.1/testProject/CodeIgniter_Bootstrap/application/config/config.php 390
ERROR - 2014-12-16 16:20:43 --> Severity: Warning  --> include_once(): Failed opening 'application/core/MY_Tank_auth.php' for inclusion (include_path='.:/usr/share/pear:/usr/share/php') /var/www/html/dboperator_ver0.0.1/testProject/CodeIgniter_Bootstrap/application/config/config.php 390
DEBUG - 2014-12-16 16:20:43 --> ####debug4:
DEBUG - 2014-12-16 16:20:43 --> ####class_name:Tank_auth
DEBUG - 2014-12-16 16:20:43 --> Config file loaded: application/config/tank_auth.php
DEBUG - 2014-12-16 16:20:43 --> #### library:session
DEBUG - 2014-12-16 16:20:43 --> ####ci_load_class:session
DEBUG - 2014-12-16 16:20:43 --> ####ci_loaded_files:/var/www/html/dboperator_ver0.0.1/testProject/CodeIgniter_Bootstrap/system/libraries/Session.php
DEBUG - 2014-12-16 16:20:43 --> ####debug3:
DEBUG - 2014-12-16 16:20:43 --> ####debug3.5:
DEBUG - 2014-12-16 16:20:43 --> ####debug4:
DEBUG - 2014-12-16 16:20:43 --> ####class_name:CI_Session
DEBUG - 2014-12-16 16:20:43 --> Session Class Initialized
DEBUG - 2014-12-16 16:20:43 --> Helper loaded: string_helper
DEBUG - 2014-12-16 16:20:43 --> Database Driver Class Initialized
DEBUG - 2014-12-16 16:20:43 --> Session routines successfully run
DEBUG - 2014-12-16 16:20:43 --> Model Class Initialized
DEBUG - 2014-12-16 16:20:43 --> Model Class Initialized
DEBUG - 2014-12-16 16:20:43 --> Model Class Initialized
DEBUG - 2014-12-16 16:20:43 --> Model Class Initialized
DEBUG - 2014-12-16 16:20:43 --> Model Class Initialized
DEBUG - 2014-12-16 16:20:43 --> Model Class Initialized
DEBUG - 2014-12-16 16:20:43 --> Model Class Initialized
DEBUG - 2014-12-16 16:20:43 --> Model Class Initialized
DEBUG - 2014-12-16 16:20:43 --> File loaded: application/views/include/header.php
DEBUG - 2014-12-16 16:20:43 --> File loaded: application/views/sql_registration.php
DEBUG - 2014-12-16 16:20:43 --> File loaded: application/views/include/footer.php
DEBUG - 2014-12-16 16:20:43 --> Final output sent to browser
DEBUG - 2014-12-16 16:20:43 --> Total execution time: 0.0385
DEBUG - 2014-12-16 16:26:41 --> Config Class Initialized
DEBUG - 2014-12-16 16:26:41 --> Hooks Class Initialized
DEBUG - 2014-12-16 16:26:41 --> Utf8 Class Initialized
DEBUG - 2014-12-16 16:26:41 --> UTF-8 Support Enabled
DEBUG - 2014-12-16 16:26:41 --> URI Class Initialized
DEBUG - 2014-12-16 16:26:41 --> Router Class Initialized
DEBUG - 2014-12-16 16:26:41 --> Output Class Initialized
DEBUG - 2014-12-16 16:26:41 --> Security Class Initialized
DEBUG - 2014-12-16 16:26:41 --> Input Class Initialized
DEBUG - 2014-12-16 16:26:41 --> Global POST and COOKIE data sanitized
DEBUG - 2014-12-16 16:26:41 --> Language Class Initialized
DEBUG - 2014-12-16 16:26:41 --> Loader Class Initialized
DEBUG - 2014-12-16 16:26:41 --> Helper loaded: url_helper
DEBUG - 2014-12-16 16:26:41 --> #### library:
DEBUG - 2014-12-16 16:26:41 --> Controller Class Initialized
DEBUG - 2014-12-16 16:26:41 --> #### library:tank_auth
DEBUG - 2014-12-16 16:26:41 --> ####ci_load_class:tank_auth
DEBUG - 2014-12-16 16:26:41 --> ####ci_loaded_files:application/libraries/Tank_auth.php
DEBUG - 2014-12-16 16:26:41 --> ####debug3:
DEBUG - 2014-12-16 16:26:41 --> ####debug3.5:
ERROR - 2014-12-16 16:26:41 --> Severity: Warning  --> include_once(application/core/MY_Tank_auth.php): failed to open stream: No such file or directory /var/www/html/dboperator_ver0.0.1/testProject/CodeIgniter_Bootstrap/application/config/config.php 390
ERROR - 2014-12-16 16:26:41 --> Severity: Warning  --> include_once(): Failed opening 'application/core/MY_Tank_auth.php' for inclusion (include_path='.:/usr/share/pear:/usr/share/php') /var/www/html/dboperator_ver0.0.1/testProject/CodeIgniter_Bootstrap/application/config/config.php 390
DEBUG - 2014-12-16 16:26:41 --> ####debug4:
DEBUG - 2014-12-16 16:26:41 --> ####class_name:Tank_auth
DEBUG - 2014-12-16 16:26:41 --> Config file loaded: application/config/tank_auth.php
DEBUG - 2014-12-16 16:26:41 --> #### library:session
DEBUG - 2014-12-16 16:26:41 --> ####ci_load_class:session
DEBUG - 2014-12-16 16:26:41 --> ####ci_loaded_files:/var/www/html/dboperator_ver0.0.1/testProject/CodeIgniter_Bootstrap/system/libraries/Session.php
DEBUG - 2014-12-16 16:26:41 --> ####debug3:
DEBUG - 2014-12-16 16:26:41 --> ####debug3.5:
DEBUG - 2014-12-16 16:26:41 --> ####debug4:
DEBUG - 2014-12-16 16:26:41 --> ####class_name:CI_Session
DEBUG - 2014-12-16 16:26:41 --> Session Class Initialized
DEBUG - 2014-12-16 16:26:41 --> Helper loaded: string_helper
DEBUG - 2014-12-16 16:26:41 --> Database Driver Class Initialized
DEBUG - 2014-12-16 16:26:41 --> Session routines successfully run
DEBUG - 2014-12-16 16:26:41 --> Model Class Initialized
DEBUG - 2014-12-16 16:26:41 --> Model Class Initialized
DEBUG - 2014-12-16 16:26:41 --> Model Class Initialized
DEBUG - 2014-12-16 16:26:41 --> Model Class Initialized
DEBUG - 2014-12-16 16:26:41 --> Model Class Initialized
DEBUG - 2014-12-16 16:26:41 --> Model Class Initialized
DEBUG - 2014-12-16 16:26:41 --> Model Class Initialized
DEBUG - 2014-12-16 16:26:41 --> Model Class Initialized
DEBUG - 2014-12-16 16:26:41 --> File loaded: application/views/include/header.php
DEBUG - 2014-12-16 16:26:41 --> File loaded: application/views/sql_registration.php
DEBUG - 2014-12-16 16:26:41 --> File loaded: application/views/include/footer.php
DEBUG - 2014-12-16 16:26:41 --> Final output sent to browser
DEBUG - 2014-12-16 16:26:41 --> Total execution time: 0.0313
DEBUG - 2014-12-16 16:28:08 --> Config Class Initialized
DEBUG - 2014-12-16 16:28:08 --> Hooks Class Initialized
DEBUG - 2014-12-16 16:28:08 --> Utf8 Class Initialized
DEBUG - 2014-12-16 16:28:08 --> UTF-8 Support Enabled
DEBUG - 2014-12-16 16:28:08 --> URI Class Initialized
DEBUG - 2014-12-16 16:28:08 --> Router Class Initialized
DEBUG - 2014-12-16 16:28:08 --> Output Class Initialized
DEBUG - 2014-12-16 16:28:08 --> Security Class Initialized
DEBUG - 2014-12-16 16:28:08 --> Input Class Initialized
DEBUG - 2014-12-16 16:28:08 --> Global POST and COOKIE data sanitized
DEBUG - 2014-12-16 16:28:08 --> Language Class Initialized
DEBUG - 2014-12-16 16:28:08 --> Loader Class Initialized
DEBUG - 2014-12-16 16:28:08 --> Helper loaded: url_helper
DEBUG - 2014-12-16 16:28:08 --> #### library:
DEBUG - 2014-12-16 16:28:08 --> Controller Class Initialized
DEBUG - 2014-12-16 16:28:08 --> #### library:tank_auth
DEBUG - 2014-12-16 16:28:08 --> ####ci_load_class:tank_auth
DEBUG - 2014-12-16 16:28:08 --> ####ci_loaded_files:application/libraries/Tank_auth.php
DEBUG - 2014-12-16 16:28:08 --> ####debug3:
DEBUG - 2014-12-16 16:28:08 --> ####debug3.5:
ERROR - 2014-12-16 16:28:08 --> Severity: Warning  --> include_once(application/core/MY_Tank_auth.php): failed to open stream: No such file or directory /var/www/html/dboperator_ver0.0.1/testProject/CodeIgniter_Bootstrap/application/config/config.php 390
ERROR - 2014-12-16 16:28:08 --> Severity: Warning  --> include_once(): Failed opening 'application/core/MY_Tank_auth.php' for inclusion (include_path='.:/usr/share/pear:/usr/share/php') /var/www/html/dboperator_ver0.0.1/testProject/CodeIgniter_Bootstrap/application/config/config.php 390
DEBUG - 2014-12-16 16:28:08 --> ####debug4:
DEBUG - 2014-12-16 16:28:08 --> ####class_name:Tank_auth
DEBUG - 2014-12-16 16:28:08 --> Config file loaded: application/config/tank_auth.php
DEBUG - 2014-12-16 16:28:08 --> #### library:session
DEBUG - 2014-12-16 16:28:08 --> ####ci_load_class:session
DEBUG - 2014-12-16 16:28:08 --> ####ci_loaded_files:/var/www/html/dboperator_ver0.0.1/testProject/CodeIgniter_Bootstrap/system/libraries/Session.php
DEBUG - 2014-12-16 16:28:08 --> ####debug3:
DEBUG - 2014-12-16 16:28:08 --> ####debug3.5:
DEBUG - 2014-12-16 16:28:08 --> ####debug4:
DEBUG - 2014-12-16 16:28:08 --> ####class_name:CI_Session
DEBUG - 2014-12-16 16:28:08 --> Session Class Initialized
DEBUG - 2014-12-16 16:28:08 --> Helper loaded: string_helper
DEBUG - 2014-12-16 16:28:08 --> Database Driver Class Initialized
DEBUG - 2014-12-16 16:28:08 --> Session routines successfully run
DEBUG - 2014-12-16 16:28:08 --> Model Class Initialized
DEBUG - 2014-12-16 16:28:08 --> Model Class Initialized
DEBUG - 2014-12-16 16:28:08 --> Model Class Initialized
DEBUG - 2014-12-16 16:28:08 --> Model Class Initialized
DEBUG - 2014-12-16 16:28:08 --> Model Class Initialized
DEBUG - 2014-12-16 16:28:08 --> File loaded: application/views/include/header.php
DEBUG - 2014-12-16 16:28:08 --> File loaded: application/views/frontpage.php
DEBUG - 2014-12-16 16:28:08 --> File loaded: application/views/include/footer.php
DEBUG - 2014-12-16 16:28:08 --> Final output sent to browser
DEBUG - 2014-12-16 16:28:08 --> Total execution time: 0.0305
DEBUG - 2014-12-16 16:28:11 --> Config Class Initialized
DEBUG - 2014-12-16 16:28:11 --> Hooks Class Initialized
DEBUG - 2014-12-16 16:28:11 --> Utf8 Class Initialized
DEBUG - 2014-12-16 16:28:11 --> UTF-8 Support Enabled
DEBUG - 2014-12-16 16:28:11 --> URI Class Initialized
DEBUG - 2014-12-16 16:28:11 --> Router Class Initialized
DEBUG - 2014-12-16 16:28:11 --> Output Class Initialized
DEBUG - 2014-12-16 16:28:11 --> Security Class Initialized
DEBUG - 2014-12-16 16:28:11 --> Input Class Initialized
DEBUG - 2014-12-16 16:28:11 --> Global POST and COOKIE data sanitized
DEBUG - 2014-12-16 16:28:11 --> Language Class Initialized
DEBUG - 2014-12-16 16:28:11 --> Loader Class Initialized
DEBUG - 2014-12-16 16:28:11 --> Helper loaded: url_helper
DEBUG - 2014-12-16 16:28:11 --> #### library:
DEBUG - 2014-12-16 16:28:11 --> Controller Class Initialized
DEBUG - 2014-12-16 16:28:11 --> #### library:tank_auth
DEBUG - 2014-12-16 16:28:11 --> ####ci_load_class:tank_auth
DEBUG - 2014-12-16 16:28:11 --> ####ci_loaded_files:application/libraries/Tank_auth.php
DEBUG - 2014-12-16 16:28:11 --> ####debug3:
DEBUG - 2014-12-16 16:28:11 --> ####debug3.5:
ERROR - 2014-12-16 16:28:11 --> Severity: Warning  --> include_once(application/core/MY_Tank_auth.php): failed to open stream: No such file or directory /var/www/html/dboperator_ver0.0.1/testProject/CodeIgniter_Bootstrap/application/config/config.php 390
ERROR - 2014-12-16 16:28:11 --> Severity: Warning  --> include_once(): Failed opening 'application/core/MY_Tank_auth.php' for inclusion (include_path='.:/usr/share/pear:/usr/share/php') /var/www/html/dboperator_ver0.0.1/testProject/CodeIgniter_Bootstrap/application/config/config.php 390
DEBUG - 2014-12-16 16:28:11 --> ####debug4:
DEBUG - 2014-12-16 16:28:11 --> ####class_name:Tank_auth
DEBUG - 2014-12-16 16:28:11 --> Config file loaded: application/config/tank_auth.php
DEBUG - 2014-12-16 16:28:11 --> #### library:session
DEBUG - 2014-12-16 16:28:11 --> ####ci_load_class:session
DEBUG - 2014-12-16 16:28:11 --> ####ci_loaded_files:/var/www/html/dboperator_ver0.0.1/testProject/CodeIgniter_Bootstrap/system/libraries/Session.php
DEBUG - 2014-12-16 16:28:11 --> ####debug3:
DEBUG - 2014-12-16 16:28:11 --> ####debug3.5:
DEBUG - 2014-12-16 16:28:11 --> ####debug4:
DEBUG - 2014-12-16 16:28:11 --> ####class_name:CI_Session
DEBUG - 2014-12-16 16:28:11 --> Session Class Initialized
DEBUG - 2014-12-16 16:28:11 --> Helper loaded: string_helper
DEBUG - 2014-12-16 16:28:11 --> Database Driver Class Initialized
DEBUG - 2014-12-16 16:28:11 --> Session routines successfully run
DEBUG - 2014-12-16 16:28:11 --> Model Class Initialized
DEBUG - 2014-12-16 16:28:11 --> Model Class Initialized
DEBUG - 2014-12-16 16:28:11 --> Model Class Initialized
DEBUG - 2014-12-16 16:28:11 --> Model Class Initialized
DEBUG - 2014-12-16 16:28:11 --> Model Class Initialized
DEBUG - 2014-12-16 16:28:11 --> Model Class Initialized
DEBUG - 2014-12-16 16:28:11 --> Model Class Initialized
DEBUG - 2014-12-16 16:28:11 --> Model Class Initialized
DEBUG - 2014-12-16 16:28:11 --> File loaded: application/views/include/header.php
DEBUG - 2014-12-16 16:28:11 --> File loaded: application/views/sql_registration.php
DEBUG - 2014-12-16 16:28:11 --> File loaded: application/views/include/footer.php
DEBUG - 2014-12-16 16:28:11 --> Final output sent to browser
DEBUG - 2014-12-16 16:28:11 --> Total execution time: 0.0353
DEBUG - 2014-12-16 16:28:40 --> Config Class Initialized
DEBUG - 2014-12-16 16:28:40 --> Hooks Class Initialized
DEBUG - 2014-12-16 16:28:40 --> Utf8 Class Initialized
DEBUG - 2014-12-16 16:28:40 --> UTF-8 Support Enabled
DEBUG - 2014-12-16 16:28:40 --> URI Class Initialized
DEBUG - 2014-12-16 16:28:40 --> Router Class Initialized
DEBUG - 2014-12-16 16:28:40 --> Output Class Initialized
DEBUG - 2014-12-16 16:28:40 --> Security Class Initialized
DEBUG - 2014-12-16 16:28:40 --> Input Class Initialized
DEBUG - 2014-12-16 16:28:40 --> Global POST and COOKIE data sanitized
DEBUG - 2014-12-16 16:28:40 --> Language Class Initialized
DEBUG - 2014-12-16 16:28:40 --> Loader Class Initialized
DEBUG - 2014-12-16 16:28:40 --> Helper loaded: url_helper
DEBUG - 2014-12-16 16:28:40 --> #### library:
DEBUG - 2014-12-16 16:28:40 --> Controller Class Initialized
DEBUG - 2014-12-16 16:28:40 --> #### library:tank_auth
DEBUG - 2014-12-16 16:28:40 --> ####ci_load_class:tank_auth
DEBUG - 2014-12-16 16:28:40 --> ####ci_loaded_files:application/libraries/Tank_auth.php
DEBUG - 2014-12-16 16:28:40 --> ####debug3:
DEBUG - 2014-12-16 16:28:40 --> ####debug3.5:
ERROR - 2014-12-16 16:28:40 --> Severity: Warning  --> include_once(application/core/MY_Tank_auth.php): failed to open stream: No such file or directory /var/www/html/dboperator_ver0.0.1/testProject/CodeIgniter_Bootstrap/application/config/config.php 390
ERROR - 2014-12-16 16:28:40 --> Severity: Warning  --> include_once(): Failed opening 'application/core/MY_Tank_auth.php' for inclusion (include_path='.:/usr/share/pear:/usr/share/php') /var/www/html/dboperator_ver0.0.1/testProject/CodeIgniter_Bootstrap/application/config/config.php 390
DEBUG - 2014-12-16 16:28:40 --> ####debug4:
DEBUG - 2014-12-16 16:28:40 --> ####class_name:Tank_auth
DEBUG - 2014-12-16 16:28:40 --> Config file loaded: application/config/tank_auth.php
DEBUG - 2014-12-16 16:28:40 --> #### library:session
DEBUG - 2014-12-16 16:28:40 --> ####ci_load_class:session
DEBUG - 2014-12-16 16:28:40 --> ####ci_loaded_files:/var/www/html/dboperator_ver0.0.1/testProject/CodeIgniter_Bootstrap/system/libraries/Session.php
DEBUG - 2014-12-16 16:28:40 --> ####debug3:
DEBUG - 2014-12-16 16:28:40 --> ####debug3.5:
DEBUG - 2014-12-16 16:28:40 --> ####debug4:
DEBUG - 2014-12-16 16:28:40 --> ####class_name:CI_Session
DEBUG - 2014-12-16 16:28:40 --> Session Class Initialized
DEBUG - 2014-12-16 16:28:40 --> Helper loaded: string_helper
DEBUG - 2014-12-16 16:28:40 --> Database Driver Class Initialized
DEBUG - 2014-12-16 16:28:40 --> Session routines successfully run
DEBUG - 2014-12-16 16:28:40 --> Model Class Initialized
DEBUG - 2014-12-16 16:28:40 --> Model Class Initialized
DEBUG - 2014-12-16 16:28:40 --> Model Class Initialized
DEBUG - 2014-12-16 16:28:40 --> Model Class Initialized
DEBUG - 2014-12-16 16:28:40 --> Model Class Initialized
DEBUG - 2014-12-16 16:28:40 --> Model Class Initialized
DEBUG - 2014-12-16 16:28:40 --> Model Class Initialized
DEBUG - 2014-12-16 16:28:40 --> Model Class Initialized
DEBUG - 2014-12-16 16:28:40 --> File loaded: application/views/include/header.php
DEBUG - 2014-12-16 16:28:40 --> File loaded: application/views/sql_registration.php
DEBUG - 2014-12-16 16:28:40 --> File loaded: application/views/include/footer.php
DEBUG - 2014-12-16 16:28:40 --> Final output sent to browser
DEBUG - 2014-12-16 16:28:40 --> Total execution time: 0.0330
DEBUG - 2014-12-16 16:32:03 --> Config Class Initialized
DEBUG - 2014-12-16 16:32:03 --> Hooks Class Initialized
DEBUG - 2014-12-16 16:32:03 --> Utf8 Class Initialized
DEBUG - 2014-12-16 16:32:03 --> UTF-8 Support Enabled
DEBUG - 2014-12-16 16:32:03 --> URI Class Initialized
DEBUG - 2014-12-16 16:32:03 --> Router Class Initialized
DEBUG - 2014-12-16 16:32:03 --> Output Class Initialized
DEBUG - 2014-12-16 16:32:03 --> Security Class Initialized
DEBUG - 2014-12-16 16:32:03 --> Input Class Initialized
DEBUG - 2014-12-16 16:32:03 --> Global POST and COOKIE data sanitized
DEBUG - 2014-12-16 16:32:03 --> Language Class Initialized
DEBUG - 2014-12-16 16:32:03 --> Loader Class Initialized
DEBUG - 2014-12-16 16:32:03 --> Helper loaded: url_helper
DEBUG - 2014-12-16 16:32:03 --> #### library:
DEBUG - 2014-12-16 16:32:03 --> Controller Class Initialized
DEBUG - 2014-12-16 16:32:03 --> #### library:tank_auth
DEBUG - 2014-12-16 16:32:03 --> ####ci_load_class:tank_auth
DEBUG - 2014-12-16 16:32:03 --> ####ci_loaded_files:application/libraries/Tank_auth.php
DEBUG - 2014-12-16 16:32:03 --> ####debug3:
DEBUG - 2014-12-16 16:32:03 --> ####debug3.5:
ERROR - 2014-12-16 16:32:03 --> Severity: Warning  --> include_once(application/core/MY_Tank_auth.php): failed to open stream: No such file or directory /var/www/html/dboperator_ver0.0.1/testProject/CodeIgniter_Bootstrap/application/config/config.php 390
ERROR - 2014-12-16 16:32:03 --> Severity: Warning  --> include_once(): Failed opening 'application/core/MY_Tank_auth.php' for inclusion (include_path='.:/usr/share/pear:/usr/share/php') /var/www/html/dboperator_ver0.0.1/testProject/CodeIgniter_Bootstrap/application/config/config.php 390
DEBUG - 2014-12-16 16:32:03 --> ####debug4:
DEBUG - 2014-12-16 16:32:03 --> ####class_name:Tank_auth
DEBUG - 2014-12-16 16:32:03 --> Config file loaded: application/config/tank_auth.php
DEBUG - 2014-12-16 16:32:03 --> #### library:session
DEBUG - 2014-12-16 16:32:03 --> ####ci_load_class:session
DEBUG - 2014-12-16 16:32:03 --> ####ci_loaded_files:/var/www/html/dboperator_ver0.0.1/testProject/CodeIgniter_Bootstrap/system/libraries/Session.php
DEBUG - 2014-12-16 16:32:03 --> ####debug3:
DEBUG - 2014-12-16 16:32:03 --> ####debug3.5:
DEBUG - 2014-12-16 16:32:03 --> ####debug4:
DEBUG - 2014-12-16 16:32:03 --> ####class_name:CI_Session
DEBUG - 2014-12-16 16:32:03 --> Session Class Initialized
DEBUG - 2014-12-16 16:32:03 --> Helper loaded: string_helper
DEBUG - 2014-12-16 16:32:03 --> Database Driver Class Initialized
DEBUG - 2014-12-16 16:32:03 --> Session routines successfully run
DEBUG - 2014-12-16 16:32:03 --> Model Class Initialized
DEBUG - 2014-12-16 16:32:03 --> Model Class Initialized
DEBUG - 2014-12-16 16:32:03 --> Model Class Initialized
DEBUG - 2014-12-16 16:32:03 --> Model Class Initialized
DEBUG - 2014-12-16 16:32:03 --> Model Class Initialized
DEBUG - 2014-12-16 16:32:03 --> Model Class Initialized
DEBUG - 2014-12-16 16:32:03 --> Model Class Initialized
DEBUG - 2014-12-16 16:32:03 --> Model Class Initialized
DEBUG - 2014-12-16 16:32:03 --> File loaded: application/views/include/header.php
DEBUG - 2014-12-16 16:32:03 --> File loaded: application/views/sql_registration.php
DEBUG - 2014-12-16 16:32:03 --> File loaded: application/views/include/footer.php
DEBUG - 2014-12-16 16:32:03 --> Final output sent to browser
DEBUG - 2014-12-16 16:32:03 --> Total execution time: 0.0422
DEBUG - 2014-12-16 16:32:56 --> Config Class Initialized
DEBUG - 2014-12-16 16:32:56 --> Hooks Class Initialized
DEBUG - 2014-12-16 16:32:56 --> Utf8 Class Initialized
DEBUG - 2014-12-16 16:32:56 --> UTF-8 Support Enabled
DEBUG - 2014-12-16 16:32:56 --> URI Class Initialized
DEBUG - 2014-12-16 16:32:56 --> Router Class Initialized
DEBUG - 2014-12-16 16:32:56 --> Output Class Initialized
DEBUG - 2014-12-16 16:32:56 --> Security Class Initialized
DEBUG - 2014-12-16 16:32:56 --> Input Class Initialized
DEBUG - 2014-12-16 16:32:56 --> Global POST and COOKIE data sanitized
DEBUG - 2014-12-16 16:32:56 --> Language Class Initialized
DEBUG - 2014-12-16 16:32:56 --> Loader Class Initialized
DEBUG - 2014-12-16 16:32:56 --> Helper loaded: url_helper
DEBUG - 2014-12-16 16:32:56 --> #### library:
DEBUG - 2014-12-16 16:32:56 --> Controller Class Initialized
DEBUG - 2014-12-16 16:32:56 --> #### library:tank_auth
DEBUG - 2014-12-16 16:32:56 --> ####ci_load_class:tank_auth
DEBUG - 2014-12-16 16:32:56 --> ####ci_loaded_files:application/libraries/Tank_auth.php
DEBUG - 2014-12-16 16:32:56 --> ####debug3:
DEBUG - 2014-12-16 16:32:56 --> ####debug3.5:
ERROR - 2014-12-16 16:32:56 --> Severity: Warning  --> include_once(application/core/MY_Tank_auth.php): failed to open stream: No such file or directory /var/www/html/dboperator_ver0.0.1/testProject/CodeIgniter_Bootstrap/application/config/config.php 390
ERROR - 2014-12-16 16:32:56 --> Severity: Warning  --> include_once(): Failed opening 'application/core/MY_Tank_auth.php' for inclusion (include_path='.:/usr/share/pear:/usr/share/php') /var/www/html/dboperator_ver0.0.1/testProject/CodeIgniter_Bootstrap/application/config/config.php 390
DEBUG - 2014-12-16 16:32:56 --> ####debug4:
DEBUG - 2014-12-16 16:32:56 --> ####class_name:Tank_auth
DEBUG - 2014-12-16 16:32:56 --> Config file loaded: application/config/tank_auth.php
DEBUG - 2014-12-16 16:32:56 --> #### library:session
DEBUG - 2014-12-16 16:32:56 --> ####ci_load_class:session
DEBUG - 2014-12-16 16:32:56 --> ####ci_loaded_files:/var/www/html/dboperator_ver0.0.1/testProject/CodeIgniter_Bootstrap/system/libraries/Session.php
DEBUG - 2014-12-16 16:32:56 --> ####debug3:
DEBUG - 2014-12-16 16:32:56 --> ####debug3.5:
DEBUG - 2014-12-16 16:32:56 --> ####debug4:
DEBUG - 2014-12-16 16:32:56 --> ####class_name:CI_Session
DEBUG - 2014-12-16 16:32:56 --> Session Class Initialized
DEBUG - 2014-12-16 16:32:56 --> Helper loaded: string_helper
DEBUG - 2014-12-16 16:32:56 --> Database Driver Class Initialized
DEBUG - 2014-12-16 16:32:56 --> Session routines successfully run
DEBUG - 2014-12-16 16:32:56 --> Model Class Initialized
DEBUG - 2014-12-16 16:32:56 --> Model Class Initialized
DEBUG - 2014-12-16 16:32:56 --> Model Class Initialized
DEBUG - 2014-12-16 16:32:56 --> Model Class Initialized
DEBUG - 2014-12-16 16:32:56 --> Model Class Initialized
DEBUG - 2014-12-16 16:32:56 --> Model Class Initialized
DEBUG - 2014-12-16 16:32:56 --> Model Class Initialized
DEBUG - 2014-12-16 16:32:56 --> Model Class Initialized
DEBUG - 2014-12-16 16:32:56 --> File loaded: application/views/include/header.php
DEBUG - 2014-12-16 16:32:56 --> File loaded: application/views/sql_registration.php
DEBUG - 2014-12-16 16:32:56 --> File loaded: application/views/include/footer.php
DEBUG - 2014-12-16 16:32:56 --> Final output sent to browser
DEBUG - 2014-12-16 16:32:56 --> Total execution time: 0.0394
DEBUG - 2014-12-16 16:33:49 --> Config Class Initialized
DEBUG - 2014-12-16 16:33:49 --> Hooks Class Initialized
DEBUG - 2014-12-16 16:33:49 --> Utf8 Class Initialized
DEBUG - 2014-12-16 16:33:49 --> UTF-8 Support Enabled
DEBUG - 2014-12-16 16:33:49 --> URI Class Initialized
DEBUG - 2014-12-16 16:33:49 --> Router Class Initialized
DEBUG - 2014-12-16 16:33:49 --> Output Class Initialized
DEBUG - 2014-12-16 16:33:49 --> Security Class Initialized
DEBUG - 2014-12-16 16:33:49 --> Input Class Initialized
DEBUG - 2014-12-16 16:33:49 --> Global POST and COOKIE data sanitized
DEBUG - 2014-12-16 16:33:49 --> Language Class Initialized
DEBUG - 2014-12-16 16:33:49 --> Loader Class Initialized
DEBUG - 2014-12-16 16:33:49 --> Helper loaded: url_helper
DEBUG - 2014-12-16 16:33:49 --> #### library:
DEBUG - 2014-12-16 16:33:49 --> Controller Class Initialized
DEBUG - 2014-12-16 16:33:49 --> #### library:tank_auth
DEBUG - 2014-12-16 16:33:49 --> ####ci_load_class:tank_auth
DEBUG - 2014-12-16 16:33:49 --> ####ci_loaded_files:application/libraries/Tank_auth.php
DEBUG - 2014-12-16 16:33:49 --> ####debug3:
DEBUG - 2014-12-16 16:33:49 --> ####debug3.5:
ERROR - 2014-12-16 16:33:49 --> Severity: Warning  --> include_once(application/core/MY_Tank_auth.php): failed to open stream: No such file or directory /var/www/html/dboperator_ver0.0.1/testProject/CodeIgniter_Bootstrap/application/config/config.php 390
ERROR - 2014-12-16 16:33:49 --> Severity: Warning  --> include_once(): Failed opening 'application/core/MY_Tank_auth.php' for inclusion (include_path='.:/usr/share/pear:/usr/share/php') /var/www/html/dboperator_ver0.0.1/testProject/CodeIgniter_Bootstrap/application/config/config.php 390
DEBUG - 2014-12-16 16:33:49 --> ####debug4:
DEBUG - 2014-12-16 16:33:49 --> ####class_name:Tank_auth
DEBUG - 2014-12-16 16:33:49 --> Config file loaded: application/config/tank_auth.php
DEBUG - 2014-12-16 16:33:49 --> #### library:session
DEBUG - 2014-12-16 16:33:49 --> ####ci_load_class:session
DEBUG - 2014-12-16 16:33:49 --> ####ci_loaded_files:/var/www/html/dboperator_ver0.0.1/testProject/CodeIgniter_Bootstrap/system/libraries/Session.php
DEBUG - 2014-12-16 16:33:49 --> ####debug3:
DEBUG - 2014-12-16 16:33:49 --> ####debug3.5:
DEBUG - 2014-12-16 16:33:49 --> ####debug4:
DEBUG - 2014-12-16 16:33:49 --> ####class_name:CI_Session
DEBUG - 2014-12-16 16:33:49 --> Session Class Initialized
DEBUG - 2014-12-16 16:33:49 --> Helper loaded: string_helper
DEBUG - 2014-12-16 16:33:49 --> Database Driver Class Initialized
DEBUG - 2014-12-16 16:33:49 --> Session routines successfully run
DEBUG - 2014-12-16 16:33:49 --> Model Class Initialized
DEBUG - 2014-12-16 16:33:49 --> Model Class Initialized
DEBUG - 2014-12-16 16:33:49 --> Model Class Initialized
DEBUG - 2014-12-16 16:33:49 --> Model Class Initialized
DEBUG - 2014-12-16 16:33:49 --> Model Class Initialized
DEBUG - 2014-12-16 16:33:49 --> Model Class Initialized
DEBUG - 2014-12-16 16:33:49 --> Model Class Initialized
DEBUG - 2014-12-16 16:33:49 --> Model Class Initialized
DEBUG - 2014-12-16 16:33:49 --> File loaded: application/views/include/header.php
DEBUG - 2014-12-16 16:33:49 --> File loaded: application/views/sql_registration.php
DEBUG - 2014-12-16 16:33:49 --> File loaded: application/views/include/footer.php
DEBUG - 2014-12-16 16:33:49 --> Final output sent to browser
DEBUG - 2014-12-16 16:33:49 --> Total execution time: 0.0350
