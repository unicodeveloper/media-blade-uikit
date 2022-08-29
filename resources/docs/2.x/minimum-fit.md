# Crop - Minimum Fit

The `x-cld-image` component has a `crop` attribute with a `mfit` value.

The `mfit` cropping mode behaves the same as the fit mode but only if the original image is smaller than the specified minimum (width and height), in which case the image is scaled up so that it takes up as much space as possible within a bounding box defined by the specified dimensions.

The original aspect ratio is retained and all of the original image is visible.

This mode doesn't scale down the image if your requested dimensions are smaller than the original image's.


## Usage

<em><strong>Before:</strong></em>
<img src="https://res.cloudinary.com/unicodeveloper/image/upload/lady">


<em><strong>Apply the crop mfit:</strong></em>
```html
<x-cld-image public-id="lady" crop="mfit" width="200" height="200"/>
```

This will output the following image:

<img src="https://res.cloudinary.com/unicodeveloper/image/upload/c_mfit,h_200,w_200/lady?_a=AACnOBs">