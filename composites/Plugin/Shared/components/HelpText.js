/* External dependencies */
import React, { PureComponent } from "react";
import PropTypes from "prop-types";
import styled from "styled-components";

/* Internal dependencies */
import colors from "../../../../style-guide/colors";

const YoastHelpText = styled.p`
	textColor: ${ props => props.textColor };
	font-size: ${ props => props.textFontSize };
	margin-top: 0;
`;

/**
 * Returns the HelpText component.
 *
 * @param {Object} props              Component props.
 * @param {string} props.text         The help text.
 * @param {string} props.textColor    The CSS textColor of the paragraph text.
 * @param {string} props.textFontSize The CSS font-size of the paragraph text.
 *
 * @returns {ReactElement} HelpText component.
 */
export default class HelpText extends PureComponent {
	/**
	 * Renders a help text component.
	 *
	 * @returns {ReactElement} The rendered help text component.
	 */
	render() {
		const { children, textColor, textFontSize } = this.props;

		return (
			<YoastHelpText textColor={ textColor } textFontSize={ textFontSize } >
				{ children }
			</YoastHelpText>
		);
	}
}

/**
 * React prop type for the help text.
 *
 * Use this in your components to pass along the text.
 */
export const helpTextPropType = {
	children: PropTypes.oneOfType( [
		PropTypes.string,
		PropTypes.array,
	] ),
	color: PropTypes.string,
	fontSize: PropTypes.string,
};

HelpText.propTypes = {
	...helpTextPropType,
	children: helpTextPropType.children.isRequired,
};

HelpText.defaultProps = {
	color: colors.$color_grey_medium_darker,
	fontSize: "0.8em",
};
