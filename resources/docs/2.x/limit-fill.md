# Crop - Limit Fill

The `x-cld-image` component has a `crop` attribute with a `lfill` value.

The `lfill` cropping mode behaves the same as the `fill` mode, but only if the original image is larger than the specified resolution limits, in which case the image is scaled down to fill the specified dimensions without distorting the image, and then the dimension that exceeds the request is cropped.

If the original dimensions are smaller than the requested size, it is not resized at all. This prevents upscaling. You can specify which part of the original image you want to keep if cropping occurs using the `gravity` attribute (set to center by default).


## Usage

<em><strong>Before:</strong></em>
<img src="https://res.cloudinary.com/unicodeveloper/image/upload/lady">


<em><strong>Apply the crop lfill:</strong></em>
```html
<x-cld-image public-id="lady" crop="lfill" width="500" height="500"/>
```

This will output the following image:

<img src="https://res.cloudinary.com/unicodeveloper/image/upload/c_lfill,h_500,w_500/lady?_a=AACnOBs">