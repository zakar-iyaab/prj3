import { __ } from 'ct-i18n'

export const getLabelForProvider = (provider) => {
	return (
		{
			wp: 'WordPress',
			woo: 'WooCommerce',
			acf: 'ACF',
			metabox: 'MetaBox',
			custom: __('Custom', 'blocksy-companion'),
			toolset: 'Toolset',
			jetengine: 'Jet Engine',
			pods: 'Pods',
			acpt: 'ACPT',
		}[provider] || __('Unknown', 'blocksy-companion')
	)
}

export const fieldIsImageLike = (fieldDescriptor) => {
	if (fieldDescriptor.provider === 'wp') {
		return (
			fieldDescriptor.id === 'featured_image' ||
			fieldDescriptor.id === 'author_avatar' ||
			fieldDescriptor.id === 'archive_image' ||
			fieldDescriptor.id === 'term_image'
		)
	}

	return fieldDescriptor.type === 'image'
}

const POSITION_CLASSNAMES = {
	'top left': 'is-position-top-left',
	'top center': 'is-position-top-center',
	'top right': 'is-position-top-right',
	'center left': 'is-position-center-left',
	'center center': 'is-position-center-center',
	center: 'is-position-center-center',
	'center right': 'is-position-center-right',
	'bottom left': 'is-position-bottom-left',
	'bottom center': 'is-position-bottom-center',
	'bottom right': 'is-position-bottom-right',
}

/**
 * Checks of the contentPosition is the center (default) position.
 *
 * @param {string} contentPosition The current content position.
 * @return {boolean} Whether the contentPosition is center.
 */
export function isContentPositionCenter(contentPosition) {
	return (
		!contentPosition ||
		contentPosition === 'center center' ||
		contentPosition === 'center'
	)
}

/**
 * Retrieves the className for the current contentPosition.
 * The default position (center) will not have a className.
 *
 * @param {string} contentPosition The current content position.
 * @return {string} The className assigned to the contentPosition.
 */
export function getPositionClassName(contentPosition) {
	/*
	 * Only render a className if the contentPosition is not center (the default).
	 */
	if (isContentPositionCenter(contentPosition)) {
		return ''
	}

	return POSITION_CLASSNAMES[contentPosition]
}
