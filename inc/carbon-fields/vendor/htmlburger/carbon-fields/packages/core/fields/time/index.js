/**
 * External dependencies.
 */
import { __ } from '@wordpress/i18n';

/**
 * Internal dependencies.
 */
import withProps from '../../hocs/with-props/index';
import DatetimeField from '../datetime/index';

export default withProps( ( props ) => {
	return {
		...props,
		icon: 'clock',
		buttonText: __( 'Select Time', 'carbon-fields-ui' )
	};
} )( DatetimeField );
