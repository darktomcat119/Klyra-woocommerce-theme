/**
 * External Dependencies
 */

/**
 * WordPress Dependencies
 */
import { __ } from '@wordpress/i18n';

/**
 * Internal Dependencies
 */
import metadata from './block.json';
// import deprecated from './deprecated';
import edit from './edit';
import icons from './icons';
import save from './save';
import transforms from './transforms';
import './index.scss';
import './style.scss';

const { attributes, category, editorScript, editorStyle, name, style, supports, title } = metadata;

const settings = {
	title,
	description: __( 'A starter static block with Styles.', 'create-block-plugin' ),
	keywords: [ 'styles', 'static block' ],
	icon: icons.block,
	category,
	example: {},
	supports,
	styles: [
		{
			name: 'default',
			label: __( 'Default', 'create-block-plugin' ),
			isDefault: true,
		},
		{
			name: 'light',
			label: __( 'Light', 'create-block-plugin' ),
		},
		{
			name: 'dark',
			label: __( 'Dark', 'create-block-plugin' ),
		},
	],
	attributes,
	// deprecated,
	transforms,
	edit,
	save,
	editorScript,
	style,
	editorStyle,
};

export { name, settings };
