import { createElement } from '@wordpress/element'
import {
	BlockControls,
	BlockAlignmentControl,
	AlignmentControl,
	__experimentalBlockAlignmentMatrixControl as BlockAlignmentMatrixControl,
	__experimentalBlockFullHeightAligmentControl as FullHeightAlignmentControl,
} from '@wordpress/block-editor'
import TagNameDropdown from './TagNameDropdown'

import { fieldIsImageLike } from '../utils'
import { __ } from '@wordpress/i18n'

const AlignmentControls = ({
	fieldDescriptor,
	attributes,
	attributes: {
		align,
		imageAlign,
		contentPosition,
		aspectRatio,
		minimumHeight,
	},
	setAttributes,
}) => {
	const isMinFullHeight = minimumHeight === '100vh' && !aspectRatio

	return (
		<BlockControls group="block">
			{!fieldIsImageLike(fieldDescriptor) ? (
				<>
					<AlignmentControl
						value={align}
						onChange={(newAlign) =>
							setAttributes({
								align: newAlign,
							})
						}
					/>
					<TagNameDropdown
						tagName={attributes.tagName}
						onChange={(tagName) => setAttributes({ tagName })}
					/>
				</>
			) : (
				<>
					<BlockAlignmentControl
						{...(fieldDescriptor.provider === 'wp' &&
						fieldDescriptor.id === 'author_avatar'
							? {
									controls: [
										'none',
										'left',
										'center',
										'right',
									],
							  }
							: {})}
						value={imageAlign}
						onChange={(newImageAlign) =>
							setAttributes({
								imageAlign: newImageAlign,
							})
						}
					/>

					{/* <BlockAlignmentMatrixControl
						label={__('Change content position')}
						value={contentPosition}
						onChange={(nextPosition) =>
							setAttributes({
								contentPosition: nextPosition,
							})
						}
					/> */}

					<FullHeightAlignmentControl
						isActive={isMinFullHeight}
						onToggle={() => {
							setAttributes({
								minimumHeight: isMinFullHeight ? '' : '100vh',
								aspectRatio: undefined,
							})
						}}
					/>
				</>
			)}
		</BlockControls>
	)
}

export default AlignmentControls
