/**
 * WordPress e2e utilities
 */
import {
	activatePlugin,
	createNewPost,
	deactivatePlugin,
	insertBlock,
} from "@wordpress/e2e-test-utils";

import { deleteAllPostsWithApi } from "../src/helpers/utils";

describe( "Yoast SEO blocks", () => {
	beforeAll( async() => {
		await activatePlugin( "yoast_e2e_post_type" );
	} );

	afterAll( async() => {
		await deactivatePlugin( "yoast_e2e_post_type" );
	} );

	it( "shows correctly Yoast SEO FAQ block in a post", async() => {
		await deleteAllPostsWithApi( "posts" );
		await createNewPost();

		await insertBlock( "Yoast FAQ" );
		const yoastSeoFaqBlock = await page.$x(
			"//div[contains( @data-type, \"yoast/faq-block\" )]"
		);
		expect( yoastSeoFaqBlock.length ).toBe( 1 );
	} );

	it( "shows correctly Yoast Breadcrumbs block in a post", async() => {
		await deleteAllPostsWithApi( "posts" );
		await createNewPost();

		await insertBlock( "Yoast Breadcrumbs" );
		const yoastSeoBreadcrumbsBlock = await page.$x(
			"//div[contains( @data-type, \"yoast-seo/breadcrumbs\" )]"
		);
		expect( yoastSeoBreadcrumbsBlock.length ).toBe( 1 );
	} );

	it( "shows correctly Yoast How-to block in a post", async() => {
		await deleteAllPostsWithApi( "posts" );
		await createNewPost();

		await insertBlock( "Yoast How-to" );
		const yoastSeoHowToBlock = await page.$x(
			"//div[contains( @data-type, \"yoast/how-to-block\" )]"
		);
		expect( yoastSeoHowToBlock.length ).toBe( 1 );
	} );

	it( "shows correctly Yoast SEO FAQ block in a page", async() => {
		await deleteAllPostsWithApi( "pages" );
		await createNewPost( { postType: "page" } );

		await insertBlock( "Yoast FAQ" );
		const yoastSeoFaqBlock = await page.$x(
			"//div[contains( @data-type, \"yoast/faq-block\" )]"
		);
		expect( yoastSeoFaqBlock.length ).toBe( 1 );
	} );

	it( "shows correctly Yoast Breadcrumbs block in a page", async() => {
		await deleteAllPostsWithApi( "pages" );
		await createNewPost( { postType: "page" } );

		await insertBlock( "Yoast Breadcrumbs" );
		const yoastSeoBreadcrumbsBlock = await page.$x(
			"//div[contains( @data-type, \"yoast-seo/breadcrumbs\" )]"
		);
		expect( yoastSeoBreadcrumbsBlock.length ).toBe( 1 );
	} );

	it( "shows correctly Yoast How-to block in a page", async() => {
		await deleteAllPostsWithApi( "pages" );
		await createNewPost( { postType: "page" } );

		await insertBlock( "Yoast How-to" );
		const yoastSeoHowToBlock = await page.$x(
			"//div[contains( @data-type, \"yoast/how-to-block\" )]"
		);
		expect( yoastSeoHowToBlock.length ).toBe( 1 );
	} );

	it( "shows correctly Yoast SEO FAQ block in a custom post", async() => {
		await deleteAllPostsWithApi( "yoast_post_type" );
		await createNewPost( { postType: "yoast_post_type" } );

		await insertBlock( "Yoast FAQ" );
		const yoastSeoFaqBlock = await page.$x(
			"//div[contains( @data-type, \"yoast/faq-block\" )]"
		);
		expect( yoastSeoFaqBlock.length ).toBe( 1 );
	} );

	it( "shows correctly Yoast Breadcrumbs block in a custom post", async() => {
		await deleteAllPostsWithApi( "yoast_post_type" );
		await createNewPost( { postType: "yoast_post_type" } );

		await insertBlock( "Yoast Breadcrumbs" );
		const yoastSeoBreadcrumbsBlock = await page.$x(
			"//div[contains( @data-type, \"yoast-seo/breadcrumbs\" )]"
		);
		expect( yoastSeoBreadcrumbsBlock.length ).toBe( 1 );
	} );

	it( "shows correctly Yoast How-to block in a custom post", async() => {
		await deleteAllPostsWithApi( "yoast_post_type" );
		await createNewPost( { postType: "yoast_post_type" } );

		await insertBlock( "Yoast How-to" );
		const yoastSeoHowToBlock = await page.$x(
			"//div[contains( @data-type, \"yoast/how-to-block\" )]"
		);
		expect( yoastSeoHowToBlock.length ).toBe( 1 );
	} );
} );
