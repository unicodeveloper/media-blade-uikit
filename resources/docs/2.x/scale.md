# Crop - Scale

The `x-cld-image` component has a `crop` attribute with a `scale` value. The scale crop mode keeps all parts of the image visible. In this case, specifying `width` and `height` values which do not match the original image's ratio may result in a stretched / shrunken image.

## Usage

<em><strong>Before:</strong></em>
<img src="https://res.cloudinary.com/unicodeveloper/image/upload/lady">


<em><strong>Apply the crop scale:</strong></em>
```html
<x-cld-image public-id="lady" crop="scale" width="400" height="400" />
```

This will output the following image:

<img src="https://res.cloudinary.com/unicodeveloper/image/upload/c_scale,h_400,w_400/lady?_a=AACnOBs">