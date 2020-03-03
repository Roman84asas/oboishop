/**
 * Internal dependencies.
 */
import withProps from '../../hocs/with-props/index';
import RadioField from '../radio/index';
import './style.scss';

export default withProps( ( props ) => {
	return {
		...props,
		field: {
			...props.field,
			options: props.field.options.map( ( option ) => ( {
				...option,
				label: ( <img className="cf-radio-image__image" src={ option.label } /> )
			} ) )
		}
	};
} )( RadioField );
