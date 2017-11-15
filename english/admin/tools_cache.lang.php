<?php
/**
 * MyBB 1.6 English Language Pack
 * Copyright 2010 MyBB Group, All Rights Reserved
 * 
 * $Id: tools_cache.lang.php 5016 2010-06-12 00:24:02Z RyanGordon $
 */

$l['cache'] = "Cache:";
$l['cache_manager'] = "Pengelola Cache";
$l['cache_manager_description'] = "Di sini Anda dapat mengelola cache yang digunakan sebagai metode pengoptimalan MyBB. Membangun kembali sebuah cache akan memerlukan data-data yang dibutuhkan untuk membuat cache dan menyinkronkannya kembali. Memuat kembali sebuah cache akan memuatnya ke pengurus cache yang dipilih (disk, eaccelerator, memcache, dan sebagainya). Memuatnya kembali berguna ketika melakukan perubahan dari database atau sistem file ke xcache, eaccelerator, atau pengurus cache yang lain.";
$l['rebuild_cache'] = "Membangun Kembali Cache";
$l['reload_cache'] = "Memuat Kembali Cache";
$l['rebuild_reload_all'] = "(Membangun Kembali & memuat kembali semua)";

$l['error_cannot_rebuild'] = "Cache ini tidak dibangun kembali.";
$l['error_empty_cache'] = "Cache kosong.";
$l['error_incorrect_cache'] = "Cache yang dimaksud tidak tepat.";
$l['error_no_cache_specified'] = "Anda tidak memilih cache untuk ditampilkan.";

$l['success_cache_rebuilt'] = "Cache telah berhasil dibangun kembali.";
$l['success_cache_reloaded'] = "Cache telah berhasil dimuat kembali.";