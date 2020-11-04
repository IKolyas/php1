<?php
deleteOrdersByUserID((int)$_SESSION['user']['user_id']);
redirect('/orders');