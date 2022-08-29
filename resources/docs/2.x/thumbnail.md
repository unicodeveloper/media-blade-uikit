# Crop - Thumb

The `x-cld-image` component has a `crop` attribute with a `thumb` value.

The `thumb` cropping mode is specifically used for creating image thumbnails from either face or custom coordinates, and must always be accompanied by the `gravity` attribute set to one of the face detection or custom values.

This cropping mode generates a thumbnail of an image with the exact specified dimensions and with the original proportions retained, but the resulting image might be scaled to fit in the specified dimensions.


## Usage

<em><strong>Before:</strong></em>
<img src="https://res.cloudinary.com/unicodeveloper/image/upload/woman">


<em><strong>Apply the crop thumb:</strong></em>
```html
<x-cld-image public-id="woman" crop="thumb" width="200" height="200" />
```

This will output the following image:

<img src="https://res.cloudinary.com/unicodeveloper/image/upload/c_thumb,g_face,h_200,w_200/woman?_a=AACnOBs">
