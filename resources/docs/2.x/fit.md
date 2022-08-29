# Crop - Fit

The `x-cld-image` component has a `crop` attribute with a `fit` value.

The `fit` resize mode resizes the image so that it takes up as much space as possible within a bounding box defined by the specified dimensions.

The original aspect ratio is retained and all of the original image is visible.


## Usage

<em><strong>Before:</strong></em>
<img src="https://res.cloudinary.com/unicodeveloper/image/upload/lady">


<em><strong>Apply the crop fit:</strong></em>
```html
<x-cld-image public-id="lady" crop="fit" width="400" height="400" />
```

This will output the following image:

<img src="https://res.cloudinary.com/unicodeveloper/image/upload/c_fit,h_400,w_400/lady?_a=AACnOBs">