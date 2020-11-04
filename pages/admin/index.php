<?php
if (!isset($_SESSION['user'])) {
    redirect('/login');
}
echo render('admin/index', ['items' => productsCatalog()]);


