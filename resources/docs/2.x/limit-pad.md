# Crop - Limit Pad

The `x-cld-image` component has a `crop` attribute with a `lpad` value.

The `lpad` cropping mode behaves the same as the pad mode but only if the original image is larger than the specified limit (width and height), in which case the image is scaled down to fill the specified dimensions while retaining the original aspect ratio and with all of the original image visible.

This mode doesn't scale up the image if your requested dimensions are bigger than the original image's. If the proportions of the original image do not match the specified dimensions, padding is added to the image to reach the required size.

You can also specify where the original image is placed by using the `gravity` attribute (set to center by default), and specify the color of the background in the case that padding is added.


## Usage

<em><strong>Before:</strong></em>
<img src="https://res.cloudinary.com/unicodeveloper/image/upload/lady">


<em><strong>Apply the crop lpad:</strong></em>
```html
<x-cld-image public-id="lady" crop="lpad" bg-color="purple" width="500" height="500"/>
```

This will output the following image:

<img src="https://res.cloudinary.com/unicodeveloper/image/upload/c_lpad,h_500,w_500/b_purple/lady?_a=AACnOBs">