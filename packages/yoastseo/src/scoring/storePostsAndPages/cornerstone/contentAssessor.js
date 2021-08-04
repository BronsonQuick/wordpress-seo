import Assessor from "../../assessor.js";
import ContentAssessor from "../../contentAssessor";
import fleschReadingEase from "../../assessments/readability/fleschReadingEaseAssessment.js";
import ParagraphTooLong from "../../assessments/readability/ParagraphTooLongAssessment.js";
import SentenceLengthInText from "../../assessments/readability/sentenceLengthInTextAssessment.js";
import SubheadingDistributionTooLong from "../../assessments/readability/subheadingDistributionTooLongAssessment.js";
import transitionWords from "../../assessments/readability/transitionWordsAssessment.js";
import passiveVoice from "../../assessments/readability/passiveVoiceAssessment.js";
import sentenceBeginnings from "../../assessments/readability/sentenceBeginningsAssessment.js";
import textPresence from "../../assessments/readability/textPresenceAssessment.js";

/*
 Temporarily disabled:

 var wordComplexity = require( "./assessments/readability/wordComplexityAssessment.js" );
 var sentenceLengthInDescription = require( "./assessments/readability/sentenceLengthInDescriptionAssessment.js" );
 */

/**
 * Creates the Assessor
 *
 * @param {object} i18n The i18n object used for translations.
 * @param {Object} options The options for this assessor.
 * @param {Object} options.marker The marker to pass the list of marks to.
 *
 * @constructor
 */
const StorePostsAndPagesCornerStoneContentAssessor = function( i18n, options = {} ) {
	Assessor.call( this, i18n, options );
	this.type = "storePostsAndPagesCornerstoneContentAssessor";

	this._assessments = [

		fleschReadingEase,
		new SubheadingDistributionTooLong( {
			parameters:	{
				slightlyTooMany: 250,
				farTooMany: 300,
				recommendedMaximumWordCount: 250,
			},
		} ),
		new ParagraphTooLong(),
		new SentenceLengthInText( {
			slightlyTooMany: 20,
			farTooMany: 25,
		}, true ),
		transitionWords,
		passiveVoice,
		textPresence,
		sentenceBeginnings,
		// Temporarily disabled: wordComplexity,
	];
};

require( "util" ).inherits( StorePostsAndPagesCornerStoneContentAssessor, ContentAssessor );


export default StorePostsAndPagesCornerStoneContentAssessor;

