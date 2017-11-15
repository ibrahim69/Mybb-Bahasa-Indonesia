<?php
/**
 * MyBB 1.8 English Language Pack
 * Copyright 2014 MyBB Group, All Rights Reserved
 *
 */

$l['system_health'] = "Sistem Kesehatan";
$l['system_health_desc'] = "Di sini Anda dapat melihat informasi pada sistem kesehatan Anda.";
$l['utf8_conversion'] = "Konversi UTF-8";
$l['utf8_conversion_desc'] = "Anda sedang mengkonversi tabel database ke format UTF-8. Hati-hati karena prosess ini mungkin akan memakan waktu beberapa jam tergantung pada ukuran forum Anda dan tabel ini. Ketika proses telah selesai, Anda akan dikembalikan ke halaman utama Konversi UTF-8.";
$l['utf8_conversion_desc2'] = "Alat ini memeriksa tabel database untuk memastikan mereka ada pada format UTF-8 dan memberi Anda akses untuk mengkonversi mereka apabila mereka bukanlah format UTF-8.";

$l['convert_all'] = "Konversi Seluruhnya";
$l['converting_to_utf8'] = "MyBB sedang mengkonversi tabel \"{1}\" ke bahasa pengkodean UTF-8 dari pengkodean{2}.";
$l['convert_to_utf8'] = "Anda akan mengkonversi tabel \"{1}\" ke bahasa pengkodean UTF-8 dari pengkodean {2}.";
$l['convert_all_to_utf'] = "Anda akan mengkonversi SELURUH tabel ke bahasa pengkodean UTF-8 dari pengkodean {1}.";
$l['convert_all_to_utf8mb4'] = "Anda akan mengonversi SELURUH tabel ke bahasa pengkodean 4-Byte UTF-8 dari pengkodean {1}."
$l['converting_to_utf8mb4'] = "MyBB sedang mengkonversi tabel \"{1}\" ke bahasa pengkodean 4-Byte UTF-8 dari pengkodean {2}. ";
$l['please_wait'] = "Silahkan tunggu...";
$l['converting_table'] = "Mengkonversi Tabel:";
$l['convert_table'] = "Mengkonversi Tabel";
$l['convert_tables'] = "Mengkonversi Semua Tabel";
$l['convert_database_table'] = "Mengkonversi Tabel Database";
$l['convert_database_tables'] = "Mengkonversi Seluruh Tabel Database";
$l['table'] = "Tabel";
$l['status_utf8'] = "Status UTF-8";
$l['status_utf8mb4'] = "4-Byte Support UTF-8<br />(memerlukan MySQL 5.5.3 atau yang lebih baru)";
$l['not_available'] = "Tidak tersedia";
$l['all_tables'] = "Seluruh Tabel";
$l['convert_now'] = "Konversi Sekarang";
$l['totals'] = "Jumlah";
$l['attachments'] = "Attachment";
$l['total_database_size'] = "Jumlah Ukuran Database";
$l['attachment_space_used'] = "Ruang Attachment Yang Telah Digunakan";
$l['total_cache_size'] = "Jumlah Ukuran Cache";
$l['estimated_attachment_bandwidth_usage'] = "Perkiraan Pemakaian Bandwidth Attachment";
$l['max_upload_post_size'] = "Upload Max / Ukuran POSTING";
$l['average_attachment_size'] = "Rata-rata Ukuran Attachment";
$l['stats'] = "Stat";
$l['task'] = "Tugas";
$l['run_time'] = "Waktu Pelaksanaan";
$l['next_3_tasks'] = "3 Tugas Berikutnya";
$l['no_tasks'] = "Tidak ada tugas yang berjalan saat ini.";
$l['backup_time'] = "Waktu Cadangan";
$l['no_backups'] = "Tidak ada cadangan dibuat pada saat ini.";
$l['existing_db_backups'] = "Cadangan Database Yang Ada";
$l['writable'] = "Dapat Disimpan";
$l['not_writable'] = "Tidak Dapat Disimpan";
$l['please_chmod_777'] = "Harap CHMOD ke 777.";
$l['chmod_info'] = "Harap mengubah setelan CHMOD ke setelan yang ditunjukkan oleh file di bawah ini. Untuk informasi lebih lanjut mengenai me-CHMOD, lihat";
$l['file'] = "File";
$l['location'] = "Lokasi";
$l['settings_file'] = "Settings File";
$l['config_file'] = "Konfigurasi File";
$l['file_upload_dir'] = "Direktori File Upload";
$l['avatar_upload_dir'] = "Direktori Avatar Upload";
$l['language_files'] = "File Bahasa";
$l['backup_dir'] = "Cadangkan Direktori";
$l['cache_dir'] = "Cache Directory";
$l['themes_dir'] = "Themes Directory";
$l['chmod_files_and_dirs'] = "CHMOD Files and Directories";

$l['notice_process_long_time'] = "Proses ini mungkin memakan waktu beberapa jam tergantung dari ukuran forum Anda dan tabel ini.";
$l['notice_mb4_warning'] = "4-Byte mendukung UTF-8 memerlukan MySQL 5.5.3 atau yang lebih baru. Anda tidak akan dapat mengimpor database Anda di server MySQL dengan versi lain.";

$l['check_templates'] = "Periksa Template";
$l['check_templates_desc'] = "Periksa semua template yang terinstal untuk masalah keamanan yang diketahui.";
$l['check_templates_title'] = "Periksa keamanan template";
$l['check_templates_info'] = "Proses ini akan memeriksa template Anda terhadap masalah keamanan yang dapat mempengaruhi forum Anda dan server yang dijalankannya. Ini mungkin memakan waktu lama jika Anda telah menginstal banyak tema.
<br /><br />Untuk memulai prosesnya, tekan tombol 'Lanjutkan' di bawah ini.";
$l['check_templates_info_desc'] = "Template di bawah ini cocok dengan masalah keamanan yang diketahui. Harap tinjau mereka.";
$l['full_edit'] = "Ubah semua";

$l['error_chmod'] = "dari file dan direktori yang disyaratkan tidak memiliki setelan CHMOD yang tepat.";
$l['error_invalid_table'] = "Tabel yang dimaksud tidak ditemukan.";
$l['error_db_encoding_not_set'] = "Setelan MyBB Anda saat ini belum disetel untuk menggunakan alat ini. Silahkan lihat <a href=\"http://wiki.mybboard.net/index.php/UTF8_Setup\">the wiki</a> untuk informasi penyetelannya.";
$l['error_not_supported'] = "Mesin Database Anda saat ini tidak mendukung Alat Konversi UTF-8.";
$l['error_invalid_input'] = "Ada masalah saat memeriksa template. Silakan coba lagi atau hubungi Grup MyBB untuk mendapatkan dukungan. ";
$l['error_master_templates_altered'] = "Template Master telah diubah. Silahkan hubungi Kelompok MyBB untuk mendapatkan bantuan bagaimana cara mengubahnya. ";
$l['error_utf8mb4_version'] = "Versi MySQL Anda tidak mendukung pengkodean UTF-8 4-Byte. ";


$l['warning_multiple_encodings'] = "Sebaiknya jangan menggunakan pengkodean yang berbeda dalam database Anda. Hal ini dapat menyebabkan perilaku tak terduga atau kesalahan MySQL. ";
$l['warning_utf8mb4_config'] = "Untuk dukungan UTF-8 4-Byte penuh Anda perlu mengubah <i>\$config['database']['encoding'] = 'utf8';</i> ke <i> \$config['database']['encoding'] = 'utf8mb4'; </i> di inc/config.php Anda. ";

$l['success_templates_checked'] = "Template berhasil diperiksa - tidak ada masalah keamanan yang ditemukan!";
$l['success_all_tables_already_converted'] = "Seluruh tabel telah dikonversi atau telah dalam format UTF-8.";
$l['success_table_converted'] = "Tabel yang dimaksud \"{1}\" telah berhasil dikonversi ke UTF-8.";
$l['success_chmod'] = "Semua file dan direktori yang disyaratkan telah memiliki setelan CHMOD yang tepat.";
