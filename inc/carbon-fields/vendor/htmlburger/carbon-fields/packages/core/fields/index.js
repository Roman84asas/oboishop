/**
 * External dependencies.
 */
import { compose } from '@wordpress/compose';
import { addFilter } from '@wordpress/hooks';

/**
 * Internal dependencies.
 */
import withFilters from '../hocs/with-filters/index';
import { registerFieldType } from '../registry/fields';
import AssociationField from './association/index';
import CheckboxField from './checkbox/index';
import ColorField from './color/index';
import ComplexField from './complex/index';
import DateField from './date/index';
import DateTimeField from './datetime/index';
import FileField from './file/index';
import HiddenField from './hidden/index';
import HtmlField from './html/index';
import MapField from './map/index';
import MediaGalleryField from './media-gallery/index';
import MultiselectField from './multiselect/index';
import OembedField from './oembed/index';
import RadioField from './radio/index';
import RadioImageField from './radio-image/index';
import RichTextField from './rich-text/index';
import SelectField from './select/index';
import SeparatorField from './separator/index';
import SetField from './set/index';
import SidebarField from './sidebar/index';
import TextField from './text/index';
import TextareaField from './textarea/index';
import TimeField from './time/index';

/**
 * Extends the fields with necessary hooks.
 */
addFilter( 'carbon-fields.register-field-type', 'carbon-fields/core', ( type, context, component ) => {
	return compose(
		withFilters( `carbon-fields.field-edit.${ context }` ),
		withFilters( `carbon-fields.${ type }.${ context }` )
	)( component );
} );

/**
 * Registers the fields.
 */
[
	[ 'association', AssociationField ],
	[ 'checkbox', CheckboxField ],
	[ 'color', ColorField ],
	[ 'complex', ComplexField ],
	[ 'date', DateField ],
	[ 'date_time', DateTimeField ],
	[ 'file', FileField ],
	[ 'footer_scripts', TextareaField ],
	[ 'gravity_form', SelectField ],
	[ 'header_scripts', TextareaField ],
	[ 'hidden', HiddenField ],
	[ 'html', HtmlField ],
	[ 'image', FileField ],
	[ 'map', MapField ],
	[ 'multiselect', MultiselectField ],
	[ 'media_gallery', MediaGalleryField ],
	[ 'oembed', OembedField ],
	[ 'radio', RadioField ],
	[ 'radio_image', RadioImageField ],
	[ 'rich_text', RichTextField ],
	[ 'select', SelectField ],
	[ 'separator', SeparatorField ],
	[ 'set', SetField ],
	[ 'sidebar', SidebarField ],
	[ 'text', TextField ],
	[ 'textarea', TextareaField ],
	[ 'time', TimeField ]
].forEach( ( field ) => registerFieldType( ...field ) );
