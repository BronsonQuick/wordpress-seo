<?php

namespace Yoast\WP\SEO\Services\Options;

/**
 * The single site options service class.
 */
class Site_Options_Service extends Abstract_Options_Service {

	/**
	 * Holds the WordPress options' option name.
	 *
	 * @var string
	 */
	public $option_name = 'wpseo_options';

	/**
	 * Holds the site option configurations.
	 *
	 * {@inheritDoc}
	 *
	 * @var array[string]
	 */
	protected $configurations = [
		// Social.
		'facebook_site'                                       => [
			'default' => '',
			'types'   => [ 'empty_string', 'url' ],
		],
		'instagram_url'                                       => [
			'default' => '',
			'types'   => [ 'empty_string', 'url' ],
		],
		'linkedin_url'                                        => [
			'default' => '',
			'types'   => [ 'empty_string', 'url' ],
		],
		'myspace_url'                                         => [
			'default' => '',
			'types'   => [ 'empty_string', 'url' ],
		],
		'og_default_image'                                    => [
			'default' => '',
			'types'   => [ 'empty_string', 'url' ],
		],
		'og_default_image_id'                                 => [
			'default' => '',
			'types'   => [ 'empty_string', 'integer' ],
		],
		'og_frontpage_desc'                                   => [
			'default' => '',
			'types'   => [ 'text_field' ],
		],
		'og_frontpage_image'                                  => [
			'default' => '',
			'types'   => [ 'empty_string', 'url' ],
		],
		'og_frontpage_image_id'                               => [
			'default' => '',
			'types'   => [ 'empty_string', 'integer' ],
		],
		'og_frontpage_title'                                  => [
			'default' => '',
			'types'   => [ 'text_field' ],
		],
		'opengraph'                                   		  => [
			'default' => true,
			'types'   => [ 'boolean' ],
		],
		'pinterest_url'                                       => [
			'default' => '',
			'types'   => [ 'empty_string', 'url' ],
		],
		'pinterestverify'                                     => [
			'default' => '',
			'types'   => [
				'empty_string',
				'regex' => [
					'pattern' => '/(^[A-Fa-f0-9_-]+$)|content=([\'"])?([A-Fa-f0-9_-]+)(?:\2|[ \/>])/',
					'groups'  => [ 1, 3 ],
				],
			],
		],
		'twitter'                                     		  => [
			'default' => true,
			'types'   => [ 'boolean' ],
		],
		'twitter_card_type'                                   => [
			'default' => '',
			'types'   => [ 'string' ],
		],
		'twitter_site'                                        => [
			'default' => '',
			'types'   => [ 'string' ],
		],
		'wikipedia_url'                                       => [
			'default' => '',
			'types'   => [ 'empty_string', 'url' ],
		],
		'youtube_url'                                         => [
			'default' => '',
			'types'   => [ 'empty_string', 'url' ],
		],

		// Taxonomy meta.
		'wpseo_bctitle-<TaxonomyName>-<TermId>'               => [
			'default' => '',
			'types'   => [ 'text_field' ],
		],
		'wpseo_canonical-<TaxonomyName>-<TermId>'             => [
			'default' => '',
			'types'   => [ 'empty_string', 'url' ],
		],
		'wpseo_content_score-<TaxonomyName>-<TermId>'         => [
			'default' => '',
			'types'   => [ 'text_field' ],
		],
		'wpseo_desc-<TaxonomyName>-<TermId>'                  => [
			'default' => '',
			'types'   => [ 'text_field' ],
		],
		'wpseo_focuskeywords-<TaxonomyName>-<TermId>'         => [
			'default' => '',
			'types'   => [ 'string' ],
		],
		'wpseo_focuskw-<TaxonomyName>-<TermId>'               => [
			'default' => '',
			'types'   => [ 'text_field' ],
		],
		'wpseo_is_cornerstone-<TaxonomyName>-<TermId>'        => [
			'default' => '',
			'types'   => [ 'string' ],
		],
		'wpseo_keywordsynonyms-<TaxonomyName>-<TermId>'       => [
			'default' => '',
			'types'   => [ 'string' ],
		],
		'wpseo_linkdex-<TaxonomyName>-<TermId>'               => [
			'default' => '',
			'types'   => [ 'text_field' ],
		],
		'wpseo_noindex-<TaxonomyName>-<TermId>'               => [
			'default' => '',
			'types'   => [ 'string' ],
		],
		'wpseo_opengraph-description-<TaxonomyName>-<TermId>' => [
			'default' => '',
			'types'   => [ 'text_field' ],
		],
		'wpseo_opengraph-image-<TaxonomyName>-<TermId>'       => [
			'default' => '',
			'types'   => [ 'text_field' ],
		],
		'wpseo_opengraph-image-id-<TaxonomyName>-<TermId>'    => [
			'default' => '',
			'types'   => [ 'text_field' ],
		],
		'wpseo_opengraph-title-<TaxonomyName>-<TermId>'       => [
			'default' => '',
			'types'   => [ 'text_field' ],
		],
		'wpseo_title-<TaxonomyName>-<TermId>'                 => [
			'default' => '',
			'types'   => [ 'text_field' ],
		],
		'wpseo_twitter-description-<TaxonomyName>-<TermId>'   => [
			'default' => '',
			'types'   => [ 'text_field' ],
		],
		'wpseo_twitter-image-<TaxonomyName>-<TermId>'         => [
			'default' => '',
			'types'   => [ 'text_field' ],
		],
		'wpseo_twitter-image-id-<TaxonomyName>-<TermId>'      => [
			'default' => '',
			'types'   => [ 'text_field' ],
		],
		'wpseo_twitter-title-<TaxonomyName>-<TermId>'         => [
			'default' => '',
			'types'   => [ 'text_field' ],
		],

		// Titles.
		'activation_redirect_timestamp_free'                  => [
			'default' => '',
			'types'   => [ 'integer' ],
		],
		'alternate_website_name'                              => [
			'default' => '',
			'types'   => [ 'text_field' ],
		],
		'bctitle-ptarchive-<PostTypeName>'                    => [
			'default' => '',
			'types'   => [ 'text_field' ],
		],
		'breadcrumbs-404crumb'                                => [
			'default' => '',
			'types'   => [ 'string' ],
		],
		'breadcrumbs-archiveprefix'                           => [
			'default' => '',
			'types'   => [ 'string' ],
		],
		'breadcrumbs-boldlast'                        		  => [
			'default' => false,
			'types'   => [ 'boolean' ],
		],
		'breadcrumbs-display-blog-page'               		  => [
			'default' => true,
			'types'   => [ 'boolean' ],
		],
		'breadcrumbs-enable'                          		  => [
			'default' => true,
			'types'   => [ 'boolean' ],
		],
		'breadcrumbs-home'                                    => [
			'default' => '',
			'types'   => [ 'string' ],
		],
		'breadcrumbs-prefix'                                  => [
			'default' => '',
			'types'   => [ 'string' ],
		],
		'breadcrumbs-searchprefix'                            => [
			'default' => '',
			'types'   => [ 'string' ],
		],
		'breadcrumbs-sep'                                     => [
			'default' => '',
			'types'   => [ 'string' ],
		],
		'company_logo'                                        => [
			'default' => '',
			'types'   => [ 'empty_string', 'url' ],
		],
		'company_logo_id'                                     => [
			'default' => '',
			'types'   => [ 'integer' ],
		],
		'company_logo_meta'                                   => [
			'default' => '',
			'types'   => [ 'string' ],
		],
		'company_name'                                        => [
			'default' => '',
			'types'   => [ 'text_field' ],
		],
		'company_or_person'                                   => [
			'default' => '',
			'types'   => [ 'string' ],
		],
		'company_or_person_user_id'                           => [
			'default' => '',
			'types'   => [ 'integer' ],
		],
		'disable-attachment'                          		  => [
			'default' => true,
			'types'   => [ 'boolean' ],
		],
		'disable-author'                              		  => [
			'default' => false,
			'types'   => [ 'boolean' ],
		],
		'disable-date'                                		  => [
			'default' => false,
			'types'   => [ 'boolean' ],
		],
		'disable-post_format'                         		  => [
			'default' => false,
			'types'   => [ 'boolean' ],
		],
		'display-metabox-pt-<PostTypeName>'           		  => [
			'default' => false, // True for public post types.
			'types'   => [ 'boolean' ],
		],
		'display-metabox-tax-<TaxonomyName>'          		  => [
			'default' => false, // True for public taxonomies.
			'types'   => [ 'boolean' ],
		],
		'forcerewritetitle'                           		  => [
			'default'    => false,
			'types'      => [ 'boolean' ],
			'ms_exclude' => true,
		],
		'metadesc-<PostTypeName>'                             => [
			'default' => '',
			'types'   => [ 'text_field' ],
		],
		'metadesc-archive-wpseo'                              => [
			'default' => '',
			'types'   => [ 'text_field' ],
		],
		'metadesc-author-wpseo'                               => [
			'default' => '',
			'types'   => [ 'text_field' ],
		],
		'metadesc-home-wpseo'                                 => [
			'default' => '',
			'types'   => [ 'text_field' ],
		],
		'metadesc-ptarchive-<PostTypeName>'                   => [
			'default' => '',
			'types'   => [ 'text_field' ],
		],
		'metadesc-tax-<TaxonomyName>'                         => [
			'default' => '',
			'types'   => [ 'text_field' ],
		],
		'noindex-<PostTypeName>'                      		  => [
			'default' => false,
			'types'   => [ 'boolean' ],
		],
		'noindex-archive-wpseo'                       		  => [
			'default' => true,
			'types'   => [ 'boolean' ],
		],
		'noindex-author-noposts-wpseo'                		  => [
			'default' => true,
			'types'   => [ 'boolean' ],
		],
		'noindex-author-wpseo'                        		  => [
			'default' => false,
			'types'   => [ 'boolean' ],
		],
		'noindex-ptarchive-<PostTypeName>'            		  => [
			'default' => false,
			'types'   => [ 'boolean' ],
		],
		'noindex-tax-<TaxonomyName>'                  		  => [
			'default' => false, // Except when the taxonomy name === 'post_format'.
			'types'   => [ 'boolean' ],
		],
		'open_graph_frontpage_desc'                           => [
			'default' => '',
			'types'   => [ 'text_field' ],
		],
		'open_graph_frontpage_image'                          => [
			'default' => '',
			'types'   => [ 'empty_string', 'url' ],
		],
		'open_graph_frontpage_image_id'                       => [
			'default' => '',
			'types'   => [ 'integer' ],
		],
		'open_graph_frontpage_title'                          => [
			'default' => '%%sitename%%',
			'types'   => [ 'text_field' ],
		],
		'person_logo'                                         => [
			'default' => '',
			'types'   => [ 'empty_string', 'url' ],
		],
		'person_logo_id'                                      => [
			'default' => '',
			'types'   => [ 'integer' ],
		],
		'person_logo_meta'                                    => [
			'default' => '',
			'types'   => [ 'string' ],
		],
		'person_name'                                         => [
			'default' => '',
			'types'   => [ 'text_field' ],
		],
		'post_types-<PostTypeName>-maintax'                   => [
			'default' => '',
			'types'   => [ 'string' ],
		],
		'rssafter'                                            => [
			'default' => '',
			'types'   => [ 'string' ],
		],
		'rssbefore'                                           => [
			'default' => '',
			'types'   => [ 'string' ],
		],
		'schema-article-type-<PostTypeName>'                  => [
			'default' => '',
			'types'   => [ 'string' ],
		],
		'schema-page-type-<PostTypeName>'                     => [
			'default' => '',
			'types'   => [ 'string' ],
		],
		'separator'                                           => [
			'default' => '',
			'types'   => [ 'string' ],
		],
		'social-description-<PostTypeName>'                   => [
			'default' => '',
			'types'   => [ 'text_field' ],
		],
		'social-description-archive-wpseo'                    => [
			'default' => '',
			'types'   => [ 'text_field' ],
		],
		'social-description-author-wpseo'                     => [
			'default' => '',
			'types'   => [ 'text_field' ],
		],
		'social-description-ptarchive-<PostTypeName>'         => [
			'default' => '',
			'types'   => [ 'text_field' ],
		],
		'social-description-tax-<TaxonomyName>'               => [
			'default' => '',
			'types'   => [ 'text_field' ],
		],
		'social-image-id-<PostTypeName>'                      => [
			'default' => '',
			'types'   => [ 'integer' ],
		],
		'social-image-id-archive-wpseo'                       => [
			'default' => '',
			'types'   => [ 'integer' ],
		],
		'social-image-id-author-wpseo'                        => [
			'default' => '',
			'types'   => [ 'integer' ],
		],
		'social-image-id-ptarchive-<PostTypeName>'            => [
			'default' => '',
			'types'   => [ 'integer' ],
		],
		'social-image-id-tax-{TaxonomyName}'                  => [
			'default' => '',
			'types'   => [ 'integer' ],
		],
		'social-image-url-<PostTypeName>'                     => [
			'default' => '',
			'types'   => [ 'empty_string', 'url' ],
		],
		'social-image-url-archive-wpseo'                      => [
			'default' => '',
			'types'   => [ 'empty_string', 'url' ],
		],
		'social-image-url-author-wpseo'                       => [
			'default' => '',
			'types'   => [ 'empty_string', 'url' ],
		],
		'social-image-url-ptarchive-<PostTypeName>'           => [
			'default' => '',
			'types'   => [ 'empty_string', 'url' ],
		],
		'social-image-url-tax-{TaxonomyName}'                 => [
			'default' => '',
			'types'   => [ 'empty_string', 'url' ],
		],
		'social-title-<PostTypeName>'                         => [
			'default' => '%%title%%',
			'types'   => [ 'text_field' ],
		],
		'social-title-archive-wpseo'                          => [
			'default' => '%%date%%',
			'types'   => [ 'text_field' ],
		],
		'social-title-author-wpseo'                           => [
			'default' => '%%name%%',
			'types'   => [ 'text_field' ],
		],
		'social-title-ptarchive-<PostTypeName>'               => [
			'default' => '%%pt_plural%% Archive', // Needs translation.
			'types'   => [ 'text_field' ],
		],
		'social-title-tax-<TaxonomyName>'                     => [
			'default' => '%%term_title%% Archives', // Needs translation.
			'types'   => [ 'text_field' ],
		],
		'stripcategorybase'                           		  => [
			'default' => false,
			'types'   => [ 'boolean' ],
		],
		'taxonomy-<TaxonomyName>-ptparent'                    => [
			'default' => '',
			'types'   => [ 'string' ],
		],
		'title-<PostTypeName>'                                => [
			'default' => '%%title%% %%page%% %%sep%% %%sitename%%',
			'types'   => [ 'text_field' ],
		],
		'title-404-wpseo'                                     => [
			'default' => 'Page not found %%sep%% %%sitename%%', // Needs translation.
			'types'   => [ 'text_field' ],
		],
		'title-archive-wpseo'                                 => [
			'default' => '%%date%% %%page%% %%sep%% %%sitename%%',
			'types'   => [ 'text_field' ],
		],
		'title-author-wpseo'                                  => [
			'default' => '%%name%%, Author at %%sitename%% %%page%% ', // Needs translation.
			'types'   => [ 'text_field' ],
		],
		'title-home-wpseo'                                    => [
			'default' => '%%sitename%% %%page%% %%sep%% %%sitedesc%%',
			'types'   => [ 'text_field' ],
		],
		'title-ptarchive-<PostTypeName>'                      => [
			'default' => '%%pt_plural%% Archive %%page%% %%sep%% %%sitename%%', // Needs translation.
			'types'   => [ 'text_field' ],
		],
		'title-search-wpseo'                                  => [
			'default' => 'You searched for %%searchphrase%% %%page%% %%sep%% %%sitename%%', // Needs translation.
			'types'   => [ 'text_field' ],
		],
		'title-tax-<TaxonomyName>'                            => [
			'default' => '%%term_title%% Archives %%page%% %%sep%% %%sitename%%',
			'types'   => [ 'text_field' ],
		],
		'website_name'                                        => [
			'default' => '',
			'types'   => [ 'text_field' ],
		],

		// WPSEO.
		'algolia_integration_active'                  		  => [
			'default' => false,
			'types'   => [ 'boolean' ],
		],
		'baiduverify'                                         => [
			'default' => '',
			'types'   => [
				'empty_string',
				'regex' => [
					'pattern' => '/(^[A-Za-z0-9_-]+$)|content=([\'"])?([A-Za-z0-9_-]+)(?:\2|[ \/>])/',
					'groups'  => [ 1, 3 ],
				],
			],
		],
		'category_base_url'                                   => [
			'default' => '',
			'types'   => [ 'string' ],
		],
		'content_analysis_active'                     		  => [
			'default'   => true,
			'types'     => [ 'boolean' ],
			'ms_verify' => true,
		],
		'custom_taxonomy_slugs'                               => [
			'default' => '',
			'types'   => [ 'string' ],
		],
		'disableadvanced_meta'                        		  => [
			'default'   => true,
			'types'     => [ 'boolean' ],
			'ms_verify' => true,
		],
		'dismiss_configuration_workout_notice'        		  => [
			'default' => false,
			'types'   => [ 'boolean' ],
		],
		'dynamic_permalinks'                          		  => [
			'default' => false,
			'types'   => [ 'boolean' ],
		],
		'enable_admin_bar_menu'                       		  => [
			'default'   => true,
			'types'     => [ 'boolean' ],
			'ms_verify' => true,
		],
		'enable_cornerstone_content'                  		  => [
			'default'   => true,
			'types'     => [ 'boolean' ],
			'ms_verify' => true,
		],
		'enable_enhanced_slack_sharing'               => [
			'default'   => true,
			'types'     => [ 'boolean' ],
			'ms_verify' => true,
		],
		'enable_headless_rest_endpoints'              		  => [
			'default'   => true,
			'types'     => [ 'boolean' ],
			'ms_verify' => true,
		],
		'enable_link_suggestions'                     		  => [
			'default'   => true,
			'types'     => [ 'boolean' ],
			'ms_verify' => true,
		],
		'enable_metabox_insights'                     		  => [
			'default'   => true,
			'types'     => [ 'boolean' ],
			'ms_verify' => true,
		],
		'enable_text_link_counter'                    		  => [
			'default'   => true,
			'types'     => [ 'boolean' ],
			'ms_verify' => true,
		],
		'enable_xml_sitemap'                          		  => [
			'default'   => true,
			'types'     => [ 'boolean' ],
			'ms_verify' => true,
		],
		'environment_type'                                    => [
			'default' => '',
			'types'   => [ 'string' ],
		],
		'first_activated_on'                                  => [
			'default' => '',
			'types'   => [ 'integer' ],
		],
		'first_time_install'                          		  => [
			'default' => false,
			'types'   => [ 'boolean' ],
		],
		'googleverify'                                        => [
			'default' => '',
			'types'   => [
				'empty_string',
				'regex' => [
					'pattern' => '/(^[A-Za-z0-9_-]+$)|content=([\'"])?([A-Za-z0-9_-]+)(?:\2|[ \/>])/',
					'groups'  => [ 1, 3 ],
				],
			],
		],
		'has_multiple_authors'                                => [
			'default' => '',
			'types'   => [ 'string' ],
		],
		'home_url'                                            => [
			'default' => '',
			'types'   => [ 'string' ],
		],
		'ignore_search_engines_discouraged_notice'            => [
			'default'    => false,
			'types'      => [ 'boolean' ],
			'ms_exclude' => true,
		],
		'import_cursors'                                      => [
			'default' => '',
			'types'   => [ 'string' ],
		],
		'importing_completed'                                 => [
			'default' => '',
			'types'   => [ 'string' ],
		],
		'indexables_indexing_completed'                       => [
			'default' => false,
			'types'   => [ 'boolean' ],
		],
		'indexing_first_time'                                 => [
			'default' => true,
			'types'   => [ 'boolean' ],
		],
		'indexing_reason'                                     => [
			'default' => '',
			'types'   => [ 'text_field' ],
		],
		'indexing_started'                                    => [
			'default' => '',
			'types'   => [ 'integer' ],
		],
		'keyword_analysis_active'                             => [
			'default'   => true,
			'types'     => [ 'boolean' ],
			'ms_verify' => true,
		],
		'license_server_version'                              => [
			'default' => '',
			'types'   => [ 'string' ],
		],
		'ms_defaults_set'                                     => [
			'default' => false,
			'types'   => [ 'boolean' ],
		],
		'msverify'                                            => [
			'default' => '',
			'types'   => [
				'empty_string',
				'regex' => [
					'pattern' => '/(^[A-Fa-f0-9_-]+$)|content=([\'"])?([A-Fa-f0-9_-]+)(?:\2|[ \/>])/',
					'groups'  => [ 1, 3 ],
				],
			],
		],
		'myyoast-oauth'                                       => [
			'default' => '',
			'types'   => [ 'string' ],
		],
		'permalink_structure'                                 => [
			'default' => '',
			'types'   => [ 'string' ],
		],
		'previous_version'                                    => [
			'default' => '',
			'types'   => [ 'string' ],
		],
		'ryte_indexability'                                   => [
			'default'   => true,
			'types'     => [ 'boolean' ],
			'ms_verify' => true,
		],
		'semrush_country_code'                                => [
			'default' => '',
			'types'   => [ 'string' ],
		],
		'semrush_integration_active'                          => [
			'default'   => true,
			'types'     => [ 'boolean' ],
			'ms_verify' => true,
		],
		'semrush_tokens'                                      => [
			'default' => '',
			'types'   => [ 'string' ],
		],
		'should_redirect_after_install_free'                  => [
			'default' => false,
			'types'   => [ 'boolean' ],
		],
		'show_onboarding_notice'                              => [
			'default' => false,
			'types'   => [ 'boolean' ],
		],
		'site_type'                                           => [
			'default' => '',
			'types'   => [ 'string' ],
		],
		'tag_base_url'                                        => [
			'default' => '',
			'types'   => [ 'string' ],
		],
		'tracking'                                            => [
			'default'   => null,
			'types'     => [ 'boolean' ],
			'ms_verify' => true,
		],
		'version'                                             => [
			'default' => '',
			'types'   => [ 'is_equal' => [ 'equals' => WPSEO_VERSION ] ],
		],
		'wincher_automatically_add_keyphrases'                => [
			'default' => false,
			'types'   => [ 'boolean' ],
		],
		'wincher_integration_active'                          => [
			'default'   => true,
			'types'     => [ 'boolean' ],
			'ms_verify' => true,
		],
		'wincher_tokens'                                      => [
			'default' => '',
			'types'   => [ 'string' ],
		],
		'wincher_website_id'                                  => [
			'default' => '',
			'types'   => [ 'string' ],
		],
		'workouts_data'                                       => [
			'default' => '',
			'types'   => [ 'string' ],
		],
		'yandexverify'                                        => [
			'default' => '',
			'types'   => [
				'empty_string',
				'regex' => [
					'pattern' => '/(^[A-Fa-f0-9_-]+$)|content=([\'"])?([A-Fa-f0-9_-]+)(?:\2|[ \/>])/',
					'groups'  => [ 1, 3 ],
				],
			],
		],
		'zapier_api_key'                                      => [
			'default' => '',
			'types'   => [ 'string' ],
		],
		'zapier_integration_active'                           => [
			'default'   => false,
			'types'     => [ 'boolean' ],
			'ms_verify' => true,
		],
		'zapier_subscription'                                 => [
			'default' => '',
			'types'   => [ 'string' ],
		],
	];
}