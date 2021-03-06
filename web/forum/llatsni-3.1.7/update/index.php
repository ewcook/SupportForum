<?php

if (!defined('IN_PHPBB'))
{
	exit;
}

// Set update info with file structure to update
$update_info = array(
	'version'	=> array('from' => '3.1.1', 'to' => '3.1.7-pl1'),
	'files'		=> array(
		'adm/style/acp_avatar_options_local.html',
		'adm/style/acp_ban.html',
		'adm/style/acp_captcha.html',
		'adm/style/acp_email.html',
		'adm/style/acp_ext_list.html',
		'adm/style/acp_forums.html',
		'adm/style/acp_groups.html',
		'adm/style/acp_groups_position.html',
		'adm/style/acp_icons.html',
		'adm/style/acp_inactive.html',
		'adm/style/acp_jabber.html',
		'adm/style/acp_language.html',
		'adm/style/acp_logs.html',
		'adm/style/acp_main.html',
		'adm/style/acp_permissions.html',
		'adm/style/acp_profile.html',
		'adm/style/acp_prune_forums.html',
		'adm/style/acp_prune_users.html',
		'adm/style/acp_styles.html',
		'adm/style/acp_users.html',
		'adm/style/acp_users_profile.html',
		'adm/style/admin.css',
		'adm/style/install_header.html',
		'adm/style/install_update_diff.html',
		'adm/style/overall_header.html',
		'adm/style/permission_forum_copy.html',
		'adm/style/simple_header.html',
		'assets/javascript/core.js',
		'assets/javascript/editor.js',
		'assets/javascript/plupload.js',
		'assets/plupload/plupload.full.min.js',
		'composer.json',
		'composer.lock',
		'config/avatar.yml',
		'config/content.yml',
		'config/cron.yml',
		'config/db.yml',
		'config/event.yml',
		'config/notification.yml',
		'config/routing.yml',
		'config/services.yml',
		'download/file.php',
		'faq.php',
		'includes/acp/acp_attachments.php',
		'includes/acp/acp_ban.php',
		'includes/acp/acp_bbcodes.php',
		'includes/acp/acp_board.php',
		'includes/acp/acp_bots.php',
		'includes/acp/acp_captcha.php',
		'includes/acp/acp_database.php',
		'includes/acp/acp_disallow.php',
		'includes/acp/acp_email.php',
		'includes/acp/acp_extensions.php',
		'includes/acp/acp_forums.php',
		'includes/acp/acp_groups.php',
		'includes/acp/acp_inactive.php',
		'includes/acp/acp_jabber.php',
		'includes/acp/acp_language.php',
		'includes/acp/acp_main.php',
		'includes/acp/acp_permission_roles.php',
		'includes/acp/acp_permissions.php',
		'includes/acp/acp_profile.php',
		'includes/acp/acp_prune.php',
		'includes/acp/acp_search.php',
		'includes/acp/acp_send_statistics.php',
		'includes/acp/acp_styles.php',
		'includes/acp/acp_users.php',
		'includes/acp/auth.php',
		'includes/bbcode.php',
		'includes/constants.php',
		'includes/functions.php',
		'includes/functions_acp.php',
		'includes/functions_admin.php',
		'includes/functions_compatibility.php',
		'includes/functions_content.php',
		'includes/functions_convert.php',
		'includes/functions_display.php',
		'includes/functions_download.php',
		'includes/functions_mcp.php',
		'includes/functions_messenger.php',
		'includes/functions_module.php',
		'includes/functions_posting.php',
		'includes/functions_privmsgs.php',
		'includes/functions_upload.php',
		'includes/functions_user.php',
		'includes/mcp/info/mcp_pm_reports.php',
		'includes/mcp/mcp_forum.php',
		'includes/mcp/mcp_front.php',
		'includes/mcp/mcp_logs.php',
		'includes/mcp/mcp_main.php',
		'includes/mcp/mcp_post.php',
		'includes/mcp/mcp_queue.php',
		'includes/mcp/mcp_reports.php',
		'includes/mcp/mcp_topic.php',
		'includes/message_parser.php',
		'includes/startup.php',
		'includes/ucp/ucp_activate.php',
		'includes/ucp/ucp_login_link.php',
		'includes/ucp/ucp_notifications.php',
		'includes/ucp/ucp_pm.php',
		'includes/ucp/ucp_pm_compose.php',
		'includes/ucp/ucp_pm_viewmessage.php',
		'includes/ucp/ucp_prefs.php',
		'includes/ucp/ucp_profile.php',
		'includes/ucp/ucp_register.php',
		'index.php',
		'language/en/acp/board.php',
		'language/en/acp/common.php',
		'language/en/acp/extensions.php',
		'language/en/acp/language.php',
		'language/en/acp/permissions.php',
		'language/en/acp/permissions_phpbb.php',
		'language/en/acp/search.php',
		'language/en/acp/styles.php',
		'language/en/captcha_recaptcha.php',
		'language/en/cli.php',
		'language/en/common.php',
		'language/en/email/short/newtopic_notify.txt',
		'language/en/email/short/topic_notify.txt',
		'language/en/help_bbcode.php',
		'language/en/help_faq.php',
		'language/en/install.php',
		'language/en/mcp.php',
		'language/en/memberlist.php',
		'language/en/migrator.php',
		'language/en/search.php',
		'language/en/ucp.php',
		'mcp.php',
		'memberlist.php',
		'phpbb/auth/auth.php',
		'phpbb/auth/provider/apache.php',
		'phpbb/auth/provider/base.php',
		'phpbb/auth/provider/db.php',
		'phpbb/auth/provider/ldap.php',
		'phpbb/auth/provider/oauth/oauth.php',
		'phpbb/auth/provider/oauth/token_storage.php',
		'phpbb/auth/provider/provider_interface.php',
		'phpbb/avatar/driver/gravatar.php',
		'phpbb/avatar/driver/local.php',
		'phpbb/avatar/driver/upload.php',
		'phpbb/avatar/manager.php',
		'phpbb/cache/driver/file.php',
		'phpbb/cache/driver/memcache.php',
		'phpbb/captcha/plugins/qa.php',
		'phpbb/captcha/plugins/recaptcha.php',
		'phpbb/config/db.php',
		'phpbb/config/db_text.php',
		'phpbb/console/command/cron/run.php',
		'phpbb/content_visibility.php',
		'phpbb/controller/helper.php',
		'phpbb/cron/task/core/tidy_search.php',
		'phpbb/db/driver/driver.php',
		'phpbb/db/driver/mysqli.php',
		'phpbb/db/driver/sqlite3.php',
		'phpbb/db/migration/container_aware_migration.php',
		'phpbb/db/migration/data/v30x/release_3_0_13.php',
		'phpbb/db/migration/data/v30x/release_3_0_13_pl1.php',
		'phpbb/db/migration/data/v30x/release_3_0_13_rc1.php',
		'phpbb/db/migration/data/v30x/release_3_0_14.php',
		'phpbb/db/migration/data/v30x/release_3_0_14_rc1.php',
		'phpbb/db/migration/data/v30x/release_3_0_5_rc1.php',
		'phpbb/db/migration/data/v310/avatars.php',
		'phpbb/db/migration/data/v310/captcha_plugins.php',
		'phpbb/db/migration/data/v310/mysql_fulltext_drop.php',
		'phpbb/db/migration/data/v310/postgres_fulltext_drop.php',
		'phpbb/db/migration/data/v310/reset_missing_captcha_plugin.php',
		'phpbb/db/migration/data/v310/soft_delete_mod_convert.php',
		'phpbb/db/migration/data/v310/style_update_p1.php',
		'phpbb/db/migration/data/v31x/m_pm_report.php',
		'phpbb/db/migration/data/v31x/m_softdelete_global.php',
		'phpbb/db/migration/data/v31x/plupload_last_gc_dynamic.php',
		'phpbb/db/migration/data/v31x/profilefield_remove_underscore_from_alpha.php',
		'phpbb/db/migration/data/v31x/profilefield_yahoo_update_url.php',
		'phpbb/db/migration/data/v31x/update_custom_bbcodes_with_idn.php',
		'phpbb/db/migration/data/v31x/v312.php',
		'phpbb/db/migration/data/v31x/v312rc1.php',
		'phpbb/db/migration/data/v31x/v313.php',
		'phpbb/db/migration/data/v31x/v313rc1.php',
		'phpbb/db/migration/data/v31x/v313rc2.php',
		'phpbb/db/migration/data/v31x/v314.php',
		'phpbb/db/migration/data/v31x/v314rc1.php',
		'phpbb/db/migration/data/v31x/v314rc2.php',
		'phpbb/db/migration/data/v31x/v315.php',
		'phpbb/db/migration/data/v31x/v315rc1.php',
		'phpbb/db/migration/data/v31x/v316.php',
		'phpbb/db/migration/data/v31x/v316rc1.php',
		'phpbb/db/migration/data/v31x/v317.php',
		'phpbb/db/migration/data/v31x/v317pl1.php',
		'phpbb/db/migration/data/v31x/v317rc1.php',
		'phpbb/db/migration/profilefield_base_migration.php',
		'phpbb/db/migration/tool/module.php',
		'phpbb/db/migration/tool/permission.php',
		'phpbb/db/migrator.php',
		'phpbb/db/tools.php',
		'phpbb/di/container_builder.php',
		'phpbb/di/extension/config.php',
		'phpbb/error_collector.php',
		'phpbb/event/dispatcher.php',
		'phpbb/event/dispatcher_interface.php',
		'phpbb/event/kernel_exception_subscriber.php',
		'phpbb/event/kernel_terminate_subscriber.php',
		'phpbb/event/md_exporter.php',
		'phpbb/event/php_exporter.php',
		'phpbb/exception/exception_interface.php',
		'phpbb/exception/http_exception.php',
		'phpbb/exception/runtime_exception.php',
		'phpbb/extension/metadata_manager.php',
		'phpbb/feed/base.php',
		'phpbb/feed/helper.php',
		'phpbb/file_downloader.php',
		'phpbb/log/log.php',
		'phpbb/message/admin_form.php',
		'phpbb/message/topic_form.php',
		'phpbb/notification/manager.php',
		'phpbb/notification/method/messenger_base.php',
		'phpbb/notification/type/admin_activate_user.php',
		'phpbb/notification/type/approve_post.php',
		'phpbb/notification/type/approve_topic.php',
		'phpbb/notification/type/bookmark.php',
		'phpbb/notification/type/group_request.php',
		'phpbb/notification/type/pm.php',
		'phpbb/notification/type/post.php',
		'phpbb/notification/type/post_in_queue.php',
		'phpbb/notification/type/quote.php',
		'phpbb/notification/type/report_pm.php',
		'phpbb/notification/type/report_pm_closed.php',
		'phpbb/notification/type/report_post.php',
		'phpbb/notification/type/report_post_closed.php',
		'phpbb/notification/type/topic.php',
		'phpbb/notification/type/topic_in_queue.php',
		'phpbb/passwords/driver/helper.php',
		'phpbb/passwords/driver/salted_md5.php',
		'phpbb/passwords/manager.php',
		'phpbb/path_helper.php',
		'phpbb/permissions.php',
		'phpbb/plupload/plupload.php',
		'phpbb/profilefields/manager.php',
		'phpbb/profilefields/type/type_base.php',
		'phpbb/profilefields/type/type_bool.php',
		'phpbb/profilefields/type/type_string_common.php',
		'phpbb/profilefields/type/type_url.php',
		'phpbb/request/request.php',
		'phpbb/request/request_interface.php',
		'phpbb/search/fulltext_mysql.php',
		'phpbb/search/fulltext_native.php',
		'phpbb/search/fulltext_postgres.php',
		'phpbb/search/fulltext_sphinx.php',
		'phpbb/session.php',
		'phpbb/symfony_request.php',
		'phpbb/template/asset.php',
		'phpbb/template/twig/loader.php',
		'phpbb/template/twig/node/definenode.php',
		'phpbb/template/twig/node/includecss.php',
		'phpbb/template/twig/node/includephp.php',
		'phpbb/template/twig/tokenparser/defineparser.php',
		'phpbb/template/twig/tokenparser/includephp.php',
		'phpbb/template/twig/twig.php',
		'phpbb/tree/nestedset.php',
		'phpbb/user.php',
		'phpbb/user_loader.php',
		'phpbb/version_helper.php',
		'posting.php',
		'report.php',
		'search.php',
		'styles/prosilver/style.cfg',
		'styles/prosilver/template/ajax.js',
		'styles/prosilver/template/attachment.html',
		'styles/prosilver/template/confirm_delete_body.html',
		'styles/prosilver/template/forum_fn.js',
		'styles/prosilver/template/forumlist_body.html',
		'styles/prosilver/template/index_body.html',
		'styles/prosilver/template/login_body.html',
		'styles/prosilver/template/login_forum.html',
		'styles/prosilver/template/mcp_forum.html',
		'styles/prosilver/template/mcp_front.html',
		'styles/prosilver/template/mcp_logs.html',
		'styles/prosilver/template/mcp_notes_user.html',
		'styles/prosilver/template/mcp_post.html',
		'styles/prosilver/template/mcp_topic.html',
		'styles/prosilver/template/memberlist_body.html',
		'styles/prosilver/template/memberlist_email.html',
		'styles/prosilver/template/memberlist_search.html',
		'styles/prosilver/template/memberlist_team.html',
		'styles/prosilver/template/memberlist_view.html',
		'styles/prosilver/template/navbar_footer.html',
		'styles/prosilver/template/navbar_header.html',
		'styles/prosilver/template/overall_footer.html',
		'styles/prosilver/template/overall_header.html',
		'styles/prosilver/template/posting_buttons.html',
		'styles/prosilver/template/posting_editor.html',
		'styles/prosilver/template/posting_layout.html',
		'styles/prosilver/template/posting_pm_layout.html',
		'styles/prosilver/template/posting_poll_body.html',
		'styles/prosilver/template/posting_preview.html',
		'styles/prosilver/template/quickreply_editor.html',
		'styles/prosilver/template/search_body.html',
		'styles/prosilver/template/search_results.html',
		'styles/prosilver/template/simple_footer.html',
		'styles/prosilver/template/simple_header.html',
		'styles/prosilver/template/ucp_avatar_options_local.html',
		'styles/prosilver/template/ucp_login_link.html',
		'styles/prosilver/template/ucp_main_front.html',
		'styles/prosilver/template/ucp_pm_history.html',
		'styles/prosilver/template/ucp_pm_viewfolder.html',
		'styles/prosilver/template/ucp_pm_viewmessage.html',
		'styles/prosilver/template/ucp_pm_viewmessage_print.html',
		'styles/prosilver/template/ucp_profile_autologin_keys.html',
		'styles/prosilver/template/ucp_profile_profile_info.html',
		'styles/prosilver/template/ucp_profile_reg_details.html',
		'styles/prosilver/template/ucp_register.html',
		'styles/prosilver/template/viewforum_body.html',
		'styles/prosilver/template/viewtopic_body.html',
		'styles/prosilver/template/viewtopic_print.html',
		'styles/prosilver/theme/bidi.css',
		'styles/prosilver/theme/buttons.css',
		'styles/prosilver/theme/colours.css',
		'styles/prosilver/theme/common.css',
		'styles/prosilver/theme/content.css',
		'styles/prosilver/theme/cp.css',
		'styles/prosilver/theme/forms.css',
		'styles/prosilver/theme/plupload.css',
		'styles/subsilver2/style.cfg',
		'styles/subsilver2/template/attachment.html',
		'styles/subsilver2/template/breadcrumbs.html',
		'styles/subsilver2/template/confirm_delete_body.html',
		'styles/subsilver2/template/forumlist_body.html',
		'styles/subsilver2/template/index.htm',
		'styles/subsilver2/template/index_body.html',
		'styles/subsilver2/template/login_body.html',
		'styles/subsilver2/template/login_forum.html',
		'styles/subsilver2/template/mcp_forum.html',
		'styles/subsilver2/template/mcp_front.html',
		'styles/subsilver2/template/mcp_post.html',
		'styles/subsilver2/template/mcp_topic.html',
		'styles/subsilver2/template/memberlist_body.html',
		'styles/subsilver2/template/memberlist_email.html',
		'styles/subsilver2/template/memberlist_group.html',
		'styles/subsilver2/template/memberlist_search.html',
		'styles/subsilver2/template/memberlist_team.html',
		'styles/subsilver2/template/memberlist_view.html',
		'styles/subsilver2/template/overall_footer.html',
		'styles/subsilver2/template/overall_header.html',
		'styles/subsilver2/template/posting_body.html',
		'styles/subsilver2/template/posting_buttons.html',
		'styles/subsilver2/template/posting_poll_body.html',
		'styles/subsilver2/template/posting_preview.html',
		'styles/subsilver2/template/quickreply_editor.html',
		'styles/subsilver2/template/search_body.html',
		'styles/subsilver2/template/search_results.html',
		'styles/subsilver2/template/simple_header.html',
		'styles/subsilver2/template/ucp_avatar_options_local.html',
		'styles/subsilver2/template/ucp_login_link.html',
		'styles/subsilver2/template/ucp_main_front.html',
		'styles/subsilver2/template/ucp_pm_history.html',
		'styles/subsilver2/template/ucp_pm_viewfolder.html',
		'styles/subsilver2/template/ucp_pm_viewmessage_print.html',
		'styles/subsilver2/template/ucp_profile_autologin_keys.html',
		'styles/subsilver2/template/ucp_profile_profile_info.html',
		'styles/subsilver2/template/ucp_profile_reg_details.html',
		'styles/subsilver2/template/ucp_register.html',
		'styles/subsilver2/template/viewforum_body.html',
		'styles/subsilver2/template/viewtopic_body.html',
		'styles/subsilver2/template/viewtopic_print.html',
		'styles/subsilver2/theme/images/index.htm',
		'styles/subsilver2/theme/stylesheet.css',
		'ucp.php',
		'viewforum.php',
		'viewonline.php',
		'viewtopic.php',
		'web.config',
	),
	'binary'		=> array(),
	'deleted'		=> array(),
);
