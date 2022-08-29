# Crop - Limit Fit

The `x-cld-image` component has a `crop` attribute with a `limit` value.

The limit resize mode behaves the same as the fit mode but only if the original image is larger than the specified limit (width and height), in which case the image is scaled down so that it takes up as much space as possible within a bounding box defined by the specified dimensions.

The original aspect ratio is retained and all of the original image is visible.

This mode doesn't scale up the image if your requested dimensions are larger than the original image's.

## Usage

<em><strong>Before:</strong></em>
<img src="https://res.cloudinary.com/unicodeveloper/image/upload/lady">


<em><strong>Apply the crop limit:</strong></em>
```html
<x-cld-image public-id="lady" crop="limit" width="400" height="400" />
```

This will output the following image:

<img src="https://res.cloudinary.com/unicodeveloper/image/upload/c_limit,h_400,w_400/lady?_a=AACnOBs">