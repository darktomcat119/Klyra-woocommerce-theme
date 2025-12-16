/**
 * External Dependencies
 */
import {
	registerBlocks,
	registerFilters,
	registerFormats,
	registerPlugins,
	registerStores,
	registerVariations,
} from '@blockhandbook/block-fast-refresh';

/**
 * WordPress Dependencies
 */

/**
 * Internal Dependencies
 */
import './index.scss';
import './style.scss';

// Register block categories.
import './utils/register-categories';

/** Hot Block Loading & Registering Blocks for production **/
registerBlocks( {
	context: () => require.context( './blocks', true, /index\.js$/ ),
	module,
} );

/** Hot Filter Loading & Registering Filters for production **/
registerFilters( {
	context: () => require.context( './filters', true, /index\.js$/ ),
	module,
} );

/** Hot Format Loading & Registering Formats for production **/
registerFormats( {
	context: () => require.context( './formats', true, /index\.js$/ ),
	module,
} );

/** Hot Plugin Loading & Registering Plugins for production **/
registerPlugins( {
	context: () => require.context( './plugins', true, /index\.js$/ ),
	module,
} );

/** Hot Store Loading & Registering Stores for production **/
registerStores( {
	context: () => require.context( './stores', true, /index\.js$/ ),
	module,
} );

/** Hot Variation Loading & Registering Variations for production **/
registerVariations( {
	context: () => require.context( './blocks', true, /variations\.js$/ ),
	module,
} );
