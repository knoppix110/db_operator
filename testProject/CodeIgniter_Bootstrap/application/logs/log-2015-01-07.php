<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

DEBUG - 2015-01-07 10:24:54 --> Config Class Initialized
DEBUG - 2015-01-07 10:24:54 --> Hooks Class Initialized
DEBUG - 2015-01-07 10:24:54 --> Utf8 Class Initialized
DEBUG - 2015-01-07 10:24:54 --> UTF-8 Support Enabled
DEBUG - 2015-01-07 10:24:54 --> URI Class Initialized
DEBUG - 2015-01-07 10:24:54 --> Router Class Initialized
DEBUG - 2015-01-07 10:24:54 --> Output Class Initialized
DEBUG - 2015-01-07 10:24:54 --> Security Class Initialized
DEBUG - 2015-01-07 10:24:54 --> Input Class Initialized
DEBUG - 2015-01-07 10:24:54 --> Global POST and COOKIE data sanitized
DEBUG - 2015-01-07 10:24:54 --> Language Class Initialized
DEBUG - 2015-01-07 10:24:54 --> Loader Class Initialized
DEBUG - 2015-01-07 10:24:54 --> Helper loaded: url_helper
DEBUG - 2015-01-07 10:24:54 --> #### library:
DEBUG - 2015-01-07 10:24:54 --> Controller Class Initialized
DEBUG - 2015-01-07 10:24:54 --> #### library:tank_auth
DEBUG - 2015-01-07 10:24:54 --> ####ci_load_class:tank_auth
DEBUG - 2015-01-07 10:24:54 --> ####ci_loaded_files:application/libraries/Tank_auth.php
DEBUG - 2015-01-07 10:24:54 --> ####debug3:
DEBUG - 2015-01-07 10:24:54 --> ####debug3.5:
ERROR - 2015-01-07 10:24:54 --> Severity: Warning  --> include_once(application/core/MY_Tank_auth.php): failed to open stream: No such file or directory /var/www/html/dboperator_ver0.0.1/testProject/CodeIgniter_Bootstrap/application/config/config.php 390
ERROR - 2015-01-07 10:24:54 --> Severity: Warning  --> include_once(): Failed opening 'application/core/MY_Tank_auth.php' for inclusion (include_path='.:/usr/share/pear:/usr/share/php') /var/www/html/dboperator_ver0.0.1/testProject/CodeIgniter_Bootstrap/application/config/config.php 390
DEBUG - 2015-01-07 10:24:54 --> ####debug4:
DEBUG - 2015-01-07 10:24:54 --> ####class_name:Tank_auth
DEBUG - 2015-01-07 10:24:54 --> Config file loaded: application/config/tank_auth.php
DEBUG - 2015-01-07 10:24:54 --> #### library:session
DEBUG - 2015-01-07 10:24:54 --> ####ci_load_class:session
DEBUG - 2015-01-07 10:24:54 --> ####ci_loaded_files:/var/www/html/dboperator_ver0.0.1/testProject/CodeIgniter_Bootstrap/system/libraries/Session.php
DEBUG - 2015-01-07 10:24:54 --> ####debug3:
DEBUG - 2015-01-07 10:24:54 --> ####debug3.5:
DEBUG - 2015-01-07 10:24:54 --> ####debug4:
DEBUG - 2015-01-07 10:24:54 --> ####class_name:CI_Session
DEBUG - 2015-01-07 10:24:54 --> Session Class Initialized
DEBUG - 2015-01-07 10:24:54 --> Helper loaded: string_helper
DEBUG - 2015-01-07 10:24:54 --> Database Driver Class Initialized
DEBUG - 2015-01-07 10:24:54 --> A session cookie was not found.
DEBUG - 2015-01-07 10:24:54 --> Session routines successfully run
DEBUG - 2015-01-07 10:24:54 --> Model Class Initialized
DEBUG - 2015-01-07 10:24:54 --> Model Class Initialized
DEBUG - 2015-01-07 10:24:54 --> Helper loaded: cookie_helper
DEBUG - 2015-01-07 10:24:54 --> XSS Filtering completed
DEBUG - 2015-01-07 10:24:54 --> Model Class Initialized
DEBUG - 2015-01-07 10:24:54 --> Model Class Initialized
DEBUG - 2015-01-07 10:24:54 --> Model Class Initialized
DEBUG - 2015-01-07 10:24:54 --> Model Class Initialized
DEBUG - 2015-01-07 10:24:54 --> Model Class Initialized
DEBUG - 2015-01-07 10:24:54 --> Model Class Initialized
DEBUG - 2015-01-07 10:24:54 --> Model Class Initialized
DEBUG - 2015-01-07 10:24:54 --> Array
(
    [sql_id] => 1
    [category_id] => 1
    [display_name] => ユーザー情報取得
    [description] => ユーザー情報を取得
    [sql_text] => select * from user_info where name=? or uid=?
    [conditions] => ["\u30e6\u30fc\u30b6\u30fc\u540d","\u30e6\u30fc\u30b6\u30fcID"]
)

DEBUG - 2015-01-07 10:24:54 --> </br>auth_level:2</br>
DEBUG - 2015-01-07 10:24:54 --> File loaded: application/views/include/header.php
DEBUG - 2015-01-07 10:24:54 --> mysql://xdadmin:xdm4m4!!!@10.128.10.10/w1_xd_index?port=3307
DEBUG - 2015-01-07 10:24:54 --> Array
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

DEBUG - 2015-01-07 10:24:54 --> Database Driver Class Initialized
DEBUG - 2015-01-07 10:24:54 --> 1
DEBUG - 2015-01-07 10:24:54 --> Array
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

DEBUG - 2015-01-07 10:24:54 --> File loaded: application/views/sql_result.php
DEBUG - 2015-01-07 10:24:54 --> File loaded: application/views/include/footer.php
DEBUG - 2015-01-07 10:24:54 --> Final output sent to browser
DEBUG - 2015-01-07 10:24:54 --> Total execution time: 0.0858
